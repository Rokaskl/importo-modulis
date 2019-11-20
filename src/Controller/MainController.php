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
        $extractPath = "../FDCimportModule/files";
        $all_file_paths = scandir ( $extractPath );

        $entityManager = $this->getDoctrine()->getManager();
        $doct = $this->getDoctrine();
        foreach($all_file_paths as $file_path){
            $length = strlen($file_path);
            $sql = "";
            
            if(substr($file_path, $length - 4, $length) == ".csv"){
                $file = fopen($extractPath."/".$file_path, "r") or die("Unable to read the file: ".$file_path);
                $index = 0; 				// Line index
        
                $columns = fgetcsv($file); 	// Gets the first line with column names
                
                $table_name = substr($file_path, 0, strlen($file_path) - 4);
                //$entName = str_replace($table_name, "_", "");
                $entName = "";
                foreach(explode("_", $table_name) as $substr){
                    $entName = $entName. ucfirst($substr);
                }
                echo "<h1>".$entName."</h1><br>";
        
        
                
                while(!feof($file)){
                    
                    $line = fgetcsv($file);
                    if(!empty($line)){
                        $class = "App\\Entity\\".$entName;
                        $ent = new $class($line, $doct);
                        echo "<h1>" . $ent->getId() . "</h1>";
                        $entityManager->persist($ent);
                
                        $index++;
                        if($index == 5000){
                            $index = 0;
                            CommitChanges();
                            
                        }
                    }
                }
                echo "<h1>" . $index . "</h1><br>";
                //CommitChanges();
                echo "flushing...<br>";
                //$entityManager->
                // if (ob_get_level() == 0) ob_start();

                //     for ($i = 0; $i<10; $i++){

                //             echo "<br> Line to show.";
                //             echo str_pad('',4096)."\n";   

                //             ob_flush();
                //             flush();
                //             sleep(2);
                //     }

                //     echo "Done.";

                //     ob_end_flush();
                $entityManager->flush();
                echo "done.<br>";
                fclose($file);
            }	
            
        }
        return new Response("");
            }
        
        function CommitChanges(){
            echo "flushing...<br>";
            flush();
        }
}
