<?php


namespace App\Controller;

// This is where we are going
// to post our methods and stuff
// TODO: READ DOCUMENTATION

use Symfony\Component\HttpFoundation\Response;

class MainController
{
    public function homepage()
    {
        $url = "https://fdc.nal.usda.gov/fdc-datasets/FoodData_Central_csv_2019-10-11.zip";
        $zip_file = "../data/Downloads/file.zip";
        $extractPath = "../data/CsvData";
        //get_file($url,$zip_file);
        //extract_file($zip_file,$extractPath);
        //read_files($extractPath);
        erase_files($extractPath);
        chmod("../data/CsvData".$zip_file, 0644);
        unlink($zip_file);
        //importMain::updateDB();
        return new Response("Testing homepage");
    }
}