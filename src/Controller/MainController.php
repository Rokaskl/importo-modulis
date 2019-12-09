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
    protected $migrationService;

    public function __construct(\App\Services\MigrationService $migrationService)
    {
        $this->migrationService = $migrationService;
    }
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        $this->migrationService->create_db("../FDCimportModule");

    }

    //Whole operation lasts ~70-90minutes.
    //~80mins on i7 7700hq, 8gb ram ddr4 2,400MHz, 240gb sata3 ssd,
    //~6 000 000 total records, ~1.2GB in database db = MariaDb; type = innoDB.
    //2019-12-03

}
