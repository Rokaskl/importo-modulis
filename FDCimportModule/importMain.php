<?php 

// This is where we are going
// to post our methods and stuff

include "../FDCimportModule/fileDownload.php";
include "../FDCimportModule/csvRead.php";
class importMain
{
    //Update/Create DB
    static function updateDB()
    {
        $url = "https://fdc.nal.usda.gov/fdc-datasets/FoodData_Central_csv_2019-10-11.zip";
        $zip_file = "../FDCimportModule/file.zip";
        $extractPath = "../FDCimportModule/files";
        //get_file($url,$zip_file);
        //extract_file($zip_file,$extractPath);
        //read_files($extractPath);
        erase_files($extractPath);
        chmod("../FDCimportModule/".$zip_file, 0644);
        unlink($zip_file);
    }
}