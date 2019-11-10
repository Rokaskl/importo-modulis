<?php

$all_file_paths = scandir ( $extractPath );
$csv_file_paths = array();

foreach($all_file_paths as $file_path){
	$length = strlen($file_path);
	
	if(substr($file_path, $length - 4, $length) == ".csv"){
		array_push($csv_file_paths, $file_path);
	}	
	
} 
print_r($csv_file_paths);
