<?php


namespace App\Controller;

/*
TODO:
	* Which is best way to read file:
		- symfony serializer (very slow),
		- load csv file to db with fgetcsv() (fast, but consumes a lot of memory),
		- read csv line by line (slow, too many db operations),
		- load csv file in chucks (very fast)
		- LOAD DATA LOCALE
*/

class InputController
{
    /**
     * Method which reads files in the directory and adds them to data base
     * @param $dir
     */
    function read_files($dir)
    {
        $files = scandir ($dir);
        $filtered_files = filter_files($files);
        foreach ($filtered_files as $file) {
            // This where methods read file and insert into database will be executed
            echo $file."</br>";
        }
    }

    /**
     * Method which reads the contents of the given file
     * @param $file_name
     */
    function read_file($file_name)
    {

    }

    /**
     * Filtration method using regex
     * This is made because it is cleaner
     * and shorter
     * @param $file_array
     * @return array
     */
    function filter_files($file_array)
    {
        $pattern = "/^.*\.(csv)$/i";
        return preg_grep($pattern, $file_array);
    }

    /**
     * Method which deletes all current files in dir
     * @param $dir
     */
    function erase_files($dir)
    {
        $fileSystem = new Symfony\Component\Filesystem();
        $files = scandir ($dir);
        $filtered_files = filter_files($files);
        foreach ($filtered_files as $file) {
            //chmod($file, 0644);
            //unlink($dir.$file);
        }
    }
    /**
     * Justai, jei naudosi si koda gali geriau parasyti. jauciu :D
     */
    /*$all_file_paths = scandir ( $extractPath );
    //$dbc=mysqli_connect('localhost','root', '','Mdb');
    //if(!$dbc){die ("Failure:" .mysqli_error($dbc)); }

    // Reads directory for file paths
    foreach($all_file_paths as $file_path){
        $length = strlen($file_path);
        $sql = "";

        if(substr($file_path, $length - 4, $length) == ".csv"){
            $file = fopen($extractPath."/".$file_path, "r") or die("Unable to read the file: ".$file_path);
            $index = 0; 				// Line index

            $columns = fgetcsv($file); 	// Gets the first line with column names

            $table_name = substr($file_path, 0, strlen($file_path) - 4);




            //$sql = $sql."CREATE TABLE ".$table_name." (";
            // SQL request string
            // foreach($columns as $column){
            // 	$sql = $sql.$column." VARCHAR(100),";
            // }
            // $sql = $sql."id PRIMARY KEY AUTO_INCREMENT);";

            //mysql_query($sql);

            //print($sql); echo "<br>";

            //$sql = "INSERT INTO ".$table_name." VALUES ";
            // Reads file's line
            while(!feof($file)){

                $line = fgetcsv($file);
                //print_r($line); echo "<br>";
                //if(!feof($file))
                    //$sql = $sql."(".$line."),";
                //else $sql = $sql."(".$line.")";
                //$sql = $sql."('" . $line[0];
                // foreach(array_slice($line, 1) as $field){
                // 	$sql = $sql."',".$field;
                // }
                // $sql = $sql."')";

                $index++;
                if($index == 5000){
                    $index = 0;
                    CommitChanges($sql, $dbc);
                    //$sql = "INSERT INTO ".$table_name." VALUES ";
                }
            }
            //$sql = $sql.";";
            print($sql); echo "<br>";

            fclose($file);
        }

    }

    function CommitChanges(){
        //$result = mysqli_query($dbc, $sql);
        // if (!$result) {
        // 	die('Couldn\'t execute query: ' . mysql_error());
        // }
        flush();
    }
    //print_r($csv_file_paths)."<br>";*/
}