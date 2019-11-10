<?php

$all_file_paths = scandir ( $extractPath );

// Reads directory for file paths
foreach($all_file_paths as $file_path){
	$length = strlen($file_path);
	$sql = "";
	
	if(substr($file_path, $length - 4, $length) == ".csv"){
		$file = fopen($extractPath."/".$file_path, "r") or die("Unable to read the file: ".$file_path);
		$index = 0; 				// Line index

		$columns = fgetcsv($file); 	// Gets the first line with column names
		
		$table_name = substr($file_path, 0, strlen($file_path) - 4);
		$sql = $sql."CREATE TABLE ".$table_name." (";
		// SQL request string
		foreach($columns as $column){
			$sql = $sql.$column." VARCHAR(30),";
		}
		$sql = $sql."id PRIMARY KEY AUTO_INCREMENT);";
		
		//mysql_query($sql);
		
		//print($sql); echo "<br>";
		
		$sql = "INSERT INTO ".$table_name." VALUES ";
		// Reads file's line
		while(!feof($file)){
			
			$line = fgets($file);
			//print_r($line); echo "<br>";
			if(!feof($file))
				$sql = $sql."(".$line."),";
			else $sql = $sql."(".$line.")";
			//foreach($line as $entry){
			//	$sql = $sql.$entry." "
			//}
			
			$index++;
			if($index >= 10) die;
		}	
		$sql = $sql.";";
		print($sql); echo "<br>";

		fclose($file);
	}	
	
}
//print_r($csv_file_paths)."<br>";
