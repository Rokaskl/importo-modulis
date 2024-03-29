<?php

namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;
use mysql_xdevapi\Exception;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Formatter\OutputFormatter;
use ZipArchive;

class MigrationService
{


    private $em;


    //Whole operation lasts ~70-90minutes.
    //~80mins on i7 7700hq, 8gb ram ddr4 2,400MHz, 240gb sata3 ssd,
    //~6 000 000 total records, ~1.2GB in database db = MariaDb; type = innoDB.
    //2019-12-03
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;

    }

    public function create_db($filesPath)
    {


        $url = "https://fdc.nal.usda.gov/fdc-datasets/FoodData_Central_csv_2019-10-11.zip";


        $timeout_after = 999999999;
        $persist_buffer = 40000;
        set_time_limit($timeout_after);
        //$all_file_paths = scandir ( $extractPath );

        $this->delete_current();
       $this->download_extract_data($url, $filesPath);
      $this->migrate_data_to_db($filesPath, $persist_buffer);
    }

    //delete current data in database if such data exists.
    private function delete_current()
    {
        $conn = $this->em->getConnection();
        $conn->beginTransaction();
        try {
            $conn->query( "  
            SET FOREIGN_KEY_CHECKS = 0; 
            TRUNCATE `acquisition_sample`;
            TRUNCATE `agricultural_acquisition`;
            TRUNCATE `all_downloaded_table_record_counts`;
            TRUNCATE `branded_food`;
            TRUNCATE `food`;
            TRUNCATE `food_attribute`;
            TRUNCATE `food_attribute_type`;
            TRUNCATE `food_calorie_conversion_factor`;
            TRUNCATE `food_category`;
            TRUNCATE `food_component`;
            TRUNCATE `food_nutrient`;
            TRUNCATE `food_nutrient_conversion_factor`;
            TRUNCATE `food_nutrient_derivation`;
            TRUNCATE `food_nutrient_source`;
            TRUNCATE `food_portion`;
            TRUNCATE `food_protein_conversion_factor`;
            TRUNCATE `food_update_log_entry`;
            TRUNCATE `foundation_food`;
            TRUNCATE `input_food`;
            TRUNCATE `lab_method`;
            TRUNCATE `lab_method_code`;
            TRUNCATE `lab_method_nutrient`;
            TRUNCATE `market_acquisition`;
            TRUNCATE `measure_unit`;
            TRUNCATE `migration_versions`;
            TRUNCATE `nutrient`;
            TRUNCATE `nutrient_incoming_name`;
            TRUNCATE `retention_factor`;
            TRUNCATE `sample_food`;
            TRUNCATE `sr_legacy_food`;
            TRUNCATE `sub_sample_food`;
            TRUNCATE `sub_sample_result`;
            TRUNCATE `survey_fndds_food`;
            TRUNCATE `wweia_food_category`;
            SET FOREIGN_KEY_CHECKS = 1; ");
            $conn->commit();
            $this->em->flush();

        }
        catch (\Exception $e) {
            echo"Truncating tables failed \n";
            $conn->rollback();
        }

    }

    private function download_extract_data($url, $filesPath)
    {
        $zip_file = $filesPath;
        $extractPath = $filesPath."/files";
        echo "Downloading Zip file...\n";
        if (!file_exists($extractPath)) {

            $zip_resource = fopen($zip_file, "w+");
            $ch_start = curl_init();
            curl_setopt($ch_start, CURLOPT_URL, $url);
            curl_setopt($ch_start, CURLOPT_FAILONERROR, true);
            curl_setopt($ch_start, CURLOPT_HEADER, 0);
            curl_setopt($ch_start, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch_start, CURLOPT_AUTOREFERER, true);
            curl_setopt($ch_start, CURLOPT_BINARYTRANSFER, true);
            curl_setopt($ch_start, CURLOPT_TIMEOUT, 100);
            curl_setopt($ch_start, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch_start, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch_start, CURLOPT_FILE, $zip_resource);
            $page = curl_exec($ch_start);
            if (!$page) {
                echo "Error :- " . curl_error($ch_start);
            }
            curl_close($ch_start);

            $zip = new ZipArchive;
            if ($zip->open($zip_file) != "true") {
                echo "Error :- Unable to open the Zip File\n";
            }
            if ($zip->open($zip_file) == "true") {
                echo "Zip downloaded successfuly\n";

            }

            $zip->extractTo($extractPath);
            $zip->close();
            echo "Zip extracted successfuly\n";
            unlink($zip_file);
            echo "Zip file deleted\n";
        } else {
            echo "Folder already exists\n";
        }
    }

    private function migrate_data_to_db($filesPath, $persist_buffer)
    {
        //----------MIGRATION LOADING BAR-----------------------------------------
        $section1 = new ConsoleOutput();
        $section1->setFormatter(new OutputFormatter(true));

        $rows = 33; //FILE COUNT TODO: auto get file count
        $progressBar = new ProgressBar($section1, $rows);
        $progressBar->setBarCharacter('<fg=green>=</>');
        $progressBar->setFormat("  %message% \n %current%/%max% [%bar%] %percent:3s%%\n");
        $progressBar->setMessage('Start');

        $progressBar->start();


        //------------------------------------------------------------------------

        $extractPath = $filesPath.'\files';
        $all_file_paths = $this->OrderFiles($extractPath);

        $entityManager = $this->em;
        $entityManager->getConnection()->getConfiguration()->setSQLLogger(null);
        //print_r($all_file_paths);
        foreach ($all_file_paths as $file_path) {
            $length = strlen($file_path);
            $progressBar->setMessage('Importing  '.$file_path);
            //echo $file_path . "<br>";
            if (substr($file_path, $length - 4, $length) == ".csv" /* && $file_path == 'food_nutrient.csv'*/) {
                $this->import($extractPath, $file_path, $entityManager,  $persist_buffer);

            }
            $progressBar->advance();



        }
        $progressBar->finish();

    }

    //Converts csv file lines into entities and imports them into database.
    private function import($extractPath, $file_path, $em, $persist_buffer)
    {
        $file = fopen($extractPath . "/" . $file_path, "r") or die("Unable to read the file: " . $file_path); //Gets the file in $file_path.
        $index = 0; // Line index. Used to flush data periodically after $persist_buffer is reached.
        $columns = fgetcsv($file); // Gets the first csv line with column names.
        $table_name = substr($file_path, 0, strlen($file_path) - 4); //Converts csv file name into it's related table name in database.

        //Converts csv file name($table_name) into entity name so entity contructor could be called.
        $entName = "";
        foreach (explode("_", $table_name) as $substr) {
            $entName = $entName . ucfirst($substr);
        }

        //Reads all file lines, creates entity objects and flushes them into database.
        while (!feof($file)) {

            $line = fgetcsv($file);
            if (!empty($line)) {
                //Converts all empty data cells into nulls. Maybe empty string should be empty not null?
                foreach ($line as $arg) {
                    if (!isset($arg)) {
                        $arg = null;
                    }
                }
                $class = "App\\Entity\\" . $entName; //Entity address.
                $ent = new $class($line,$em); //Creating entity object $ent.
                $em->persist($ent); //Saving $end

                $index++;
                if ($index == $persist_buffer) { //Partial commit
                    $index = 0;
                    //Commiting changes...
                    try {
                        $em->flush();
                        $em->clear();
                    } catch (Exception $e) {
                        echo $e->getMessage();
                    }
                }
            }
        }
        //Commiting changes...
        try {
            $em->flush();
            $em->clear();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        fclose($file);
    }

    //Orders files according to Order.txt file. Such order must be used to import files without foreign keys first to avoid foreign key object search failures.
    public function OrderFiles($extractPath)
    {
        $file = fopen("FDCimportModule/Order.txt", "r") or die("Unable to read the file: FDCimportModule/Order.txt");
        $array = array(); //Array of entity names.

        while (!feof($file)) {
            $line = fgetcsv($file);
            if (!empty($line)) {
                array_push($array, $line[1]);
            }
        }
        $all_file_paths = scandir($extractPath);
        $orderedArray = array();
        foreach ($all_file_paths as $file_path) {

            $table_name = substr($file_path, 0, strlen($file_path) - 4);
            $entName = "";
            foreach (explode("_", $table_name) as $substr) {
                $entName = $entName . ucfirst($substr);
            }
            $orderedArray[array_search($entName, $array)] = $file_path; //Inserts $file_path into possition according to order.txt file/$array.
        }
        ksort($orderedArray);
        return $orderedArray;
    }
}
