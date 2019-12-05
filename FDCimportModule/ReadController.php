<?php
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Food;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
//include "../src/Entity/Food.php";
class ReadController extends AbstractController
{
	
	public function Read(){
$extractPath = "../FDCimportModule/files";
$all_file_paths = scandir ( $extractPath );
//$dbc=mysqli_connect('localhost','root', '','Mdb');
//if(!$dbc){die ("Failure:" .mysqli_error($dbc)); }

// Reads directory for file paths
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
		$entName = str_replace($table_name, "_", "");
		echo "<h1>".$entName."</h1><br>";


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

			//$entity = new Food();
			//echo "entity first ".$entity->getDataType();

			$class = "App\\Entity\\".$table_name;
			$ent = new $class($line, $doct);
			$entityManager->persist($ent);
			//$entity2->Populate($line);
			//echo "entity second ".$entity2->getDataType();
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
				CommitChanges();
				//$sql = "INSERT INTO ".$table_name." VALUES ";
			}
		}
		CommitChanges();
		//$sql = $sql.";";
		print($sql); echo "<br>";

		fclose($file);
	}

}
	}

function CommitChanges(){
	//$result = mysqli_query($dbc, $sql);
	// if (!$result) {
	// 	die('Couldn\'t execute query: ' . mysql_error());
	// }
	flush();
}
//print_r($csv_file_paths)."<br>";
}
?>