<?php 
class importMain{

    //Update/Create DB
    static function updateDB(){
        include "../FDCimportModule/fileDownload.php";
        include "../FDCimportModule/csvRead.php";
    }

}