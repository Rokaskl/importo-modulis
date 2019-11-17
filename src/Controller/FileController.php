<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

/*
TODO:
    * Check if it is the same file when trying to download
    * Check if file exists
    * Check if the files need extraction
*/

class FileController
{
    function get_file($url, $file_name)
    {
        /*$renamed_file = fopen($file_name, "w");

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url); // Sets url from the its going to be downloaded
        curl_setopt($ch, CURLOPT_FILE, $renamed_file); // SEts the name of downloaded file

        curl_setopt($ch, CURLOPT_FAILONERROR, true); // true - fails if http code returned is >400
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER,true); // True - to return the raw output when curlopt_returntransfer is  used. TODO find usefulness of this 1
        curl_setopt($ch, CURLOPT_TIMEOUT, 100); // Sets max seconds to allow curl func to execute. Does it matter? TODO find usefulness of this 2
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // 0 - doesn't check the name of host with the common existing name
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // 0 - stops curl from verifying the peer's certificate

        curl_exec($ch);

        if (curl_error($ch)) {
            throw new Exception(curl_error($ch));
        }

        curl_close($ch);
        fclose($renamed_file);*/
        $filePath = $this->getParameter();
    }

    function extract_file($zip_file, $dir)
    {
        $zip = new ZipArchive();

        if ($zip->open($zip_file) !== TRUE) {
            return new Response("Error :- Unable to open the Zip file");
        }

        $zip->extractTo($dir);
        $zip->close();
        return new Response("Zip extracted succesfully");
    }
}