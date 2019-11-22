<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MainController.php',
        ]);
    }

    /**
     * @Route("/read", name="read")
     */
    public function read(){
        set_time_limit(999999999);
        $extractPath = "../FDCimportModule/files";
        //$all_file_paths = scandir ( $extractPath );
        $all_file_paths = $this->OrderFiles( $extractPath );

        $entityManager = $this->getDoctrine()->getManager();
        $doct = $this->getDoctrine();
        //print_r($all_file_paths);
        foreach($all_file_paths as $file_path){
            $length = strlen($file_path);
            $sql = "";
            echo $file_path."<br>";
            if(substr($file_path, $length - 4, $length) == ".csv" && $file_path == 'food_nutrient.csv'){
                $file = fopen($extractPath."/".$file_path, "r") or die("Unable to read the file: ".$file_path);
                $index = 0; 				// Line index
        
                $columns = fgetcsv($file); 	// Gets the first line with column names
                
                $table_name = substr($file_path, 0, strlen($file_path) - 4);
                
                echo "<h1>".$table_name."</h1><br>";
                $entName = "";
                foreach(explode("_", $table_name) as $substr){
                    $entName = $entName. ucfirst($substr);
                }
                //echo "<h1>".$entName."</h1><br>";
        
        
                
                while(!feof($file)){
                    
                    $line = fgetcsv($file);
                    if(!empty($line)){
                        $class = "App\\Entity\\".$entName;
                        $ent = new $class($line, $doct);
                        //echo "<h1>" . $ent->getId() . "</h1>";
                        $entityManager->persist($ent);
                
                        $index++;
                        if($index == 10000){
                            $index = 0;
                            //CommitChanges();
                            try{
                                echo "flushing...<br>";
                                $entityManager->flush();
                                echo "---flushed...<br>";
                            }
                            catch(Exception $e){
                                echo $e->getMessage();
                            }
                        }
                    }
                }

                echo "flushing...<br>";

                $entityManager->flush();
                echo "done.<br>";
                fclose($file);
            }	
            
        }
        return new Response("");
    }
        
        // function CommitChanges(){
        //     echo "flushing...<br>";
        //     flush();
        // }

    public function OrderFiles($extractPath){
            $file = fopen("../FDCimportModule/Order.txt", "r") or die("Unable to read the file: FDCimportModule/Order.txt");
           
            $array = array();

            while(!feof($file)){
                $line = fgetcsv($file);
                if(!empty($line)){
                    array_push($array, $line[1]);
                }
            }
            // echo "Nuskaityta:<br>";
            // print_r($array);
            // echo "<br>";
            $all_file_paths = scandir ($extractPath);
            $orderedArray = array();
            foreach($all_file_paths as $file_path){
                    
                    $table_name = substr($file_path, 0, strlen($file_path) - 4);
                    $entName = "";
                    foreach(explode("_", $table_name) as $substr){
                        $entName = $entName. ucfirst($substr);
                    }
                    $orderedArray[array_search($entName, $array)] = $file_path;
                }
            
            // echo "Gavosi:<br>";
            // print_r($orderedArray);
            // echo "<br>";
            ksort($orderedArray);
            //print_r($orderedArray);
            return $orderedArray;
            }
}
