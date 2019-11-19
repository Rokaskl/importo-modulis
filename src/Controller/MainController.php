<?php

namespace App\Controller;

// This is where we are going
// to post our methods and stuff
// TODO: READ DOCUMENTATION

// this class gives shortcut methods
use PhpParser\Node\Scalar\MagicConst\File;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class MainController, This is the class where we do all the functions where we want to see
 * @package App\Controller
 */
class MainController extends AbstractController
{
    /**
     * @Route("/")
     */ 
    public function homepage()
    {
        $url = "https://fdc.nal.usda.gov/fdc-datasets/FoodData_Central_csv_2019-10-11.zip";
        $zip_file = "../data/Downloads/file.zip";
        $extractPath = "../data/CsvData";

        // These methods are currently working and FIXED
        // First one downloads zip from link
        // and Second one extracts the zip file
        // You can change download file url and dir location
        // by changing variables above
        // Uncomment if you need data files
        //FileController::get_file($url,$zip_file);
        //FileController::extract_file($zip_file,$extractPath);

        // Doesnt do what it says exactly
        // But it does print out files in
        // main page
        // Uncomment if
        // 1) You have data files in data folder
        // 2) You want to see file list
        //read_files($extractPath);

        // For now, completely non-functional
        // These lines are trying to delete data files
        //erase_files($extractPath);
        //chmod("../data/CsvData".$zip_file, 0644);
        //unlink($zip_file);

        return new Response("Testing homepage");
    }

    /**
     * DO NOT DELETE
     * using twig in symfony is essential
     * making for a cleaner code overall
     * @Route("/{slug}")
     */
    public function show($slug)
    {
        $texts = [
            'testing the capabilities of twig 1',
            'testing the capabilities of twig 2',
            'testing the capabilities of twig 3',
        ];


        return $this->render('show.html.twig',[
            'title' => ucwords(str_replace('-',' ', $slug)),
            'texts' => $texts,
        ]);
        /*
        return new Response(sprintf(
            'Slug test: %s',
            $slug
        ));*/
    }
}
