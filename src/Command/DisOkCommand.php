<?php


namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class DisOkCommand extends Command{
    
    protected static $defaultName = 'disok';
    
    protected function configure()
    {
        $this->setDescription('Affiche OK');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output){
        $output->writeln("OK");
    }
    
}
