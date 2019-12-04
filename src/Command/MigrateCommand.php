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

        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
        }

        if ($input->getOption('option1')) {
            // ...
        }

        $this->migrationService ->create_db();
        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return 0;
    }
}
