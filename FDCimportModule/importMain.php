<?php 

// This is where we are going
// to post our methods and stuff

include "../FDCimportModule/fileDownload.php";
include "../FDCimportModule/csvRead.php";
class importMain
{
    //Update/Create DB
    public static function updateDB(){
        //include "../FDCimportModule/fileDownload.php";
        include "../FDCimportModule/ReadController.php";
        //$rd = new ReadController();
        //$rd->Read();
    }
}