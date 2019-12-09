<?php

namespace App\Command;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;



class MigrateCommand extends Command
{
    protected $migrationService;

    protected static $defaultName = 'app:migrate';

    public function __construct(\App\Services\MigrationService $migrationService)
    {
        $this->migrationService = $migrationService;
        parent::__construct(static::$defaultName);
    }
    protected function configure()
    {
        $this
            ->setDescription('Download zip and unzip .CSV files')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Link for the file "https://fdc.nal.usda.gov/fdc-datasets/..."')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');



        $this->migrationService ->create_db();
        $io->success('Migration was successful!');

        return 0;
    }
}
