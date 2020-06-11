<?php


namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use DateTime;


class FacturationCommand extends Command{
    
    protected static $defaultName = 'facturation';
    
    protected function configure()
    {
        $this->setDescription('affiche la facturation')
             ->setHelp('permet d afficher la facturation')
             ->addArgument('month', InputArgument::REQUIRED, 'mois souhaitée')
             ->addArgument('year', InputArgument::REQUIRED, 'année souhaitée');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output){
        $month = $input->getArgument('month');
        $year = $input->getArgument('year');
        
        $date = DateTime::createFromFormat('mY', $month.$year);
        
        $output->writeln("lancement facturation ".$date->format('M')." de l'année ".$date->format('y'));
    }
    
}
