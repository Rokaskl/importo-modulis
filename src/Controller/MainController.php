<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;

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

    //Whole operation lasts ~70-90minutes.
    //~80mins on i7 7700hq, 8gb ram ddr4 2,400MHz, 240gb sata3 ssd,
    //~6 000 000 total records, ~1.2GB in database db = MariaDb; type = innoDB.
    //2019-12-03

    /**
     * @Route("/get-db", name="create_db")
     */
    public function create_db()
    {
        $migrationService = new \App\Services\MigrationService;
        $migrationService->create_db(); 
    }

    //delete current data in database if such data exists.
    private function delete_current()
    {
        $migrationService = new \App\Services\MigrationService;
        $migrationService->delete_current(); 
    }

    private function download_extract_data($url, $extractPath)
    {
        $migrationService = new \App\Services\MigrationService;
        $migrationService->download_extract_data($url, $extractPath); 
    }

    private function migrate_data_to_db($extractPath, $persist_buffer)
    {
        $migrationService = new \App\Services\MigrationService;
        $migrationService->migrate_data_to_db($extractPath, $persist_buffer); 
    }

    //Converts csv file lines into entities and imports them into database.
    private function import($extractPath, $file_path, $em, $doct, $persist_buffer)
    {
        $migrationService = new \App\Services\MigrationService;
        $migrationService->import($extractPath, $file_path, $em, $doct, $persist_buffer); 
    }

    //Orders files according to Order.txt file. Such order must be used to import files without foreign keys first to avoid foreign key object search failures.
    public function OrderFiles($extractPath)
    {
        $migrationService = new \App\Services\MigrationService;
        $migrationService->OrderFiles($extractPath); 
    }
}
