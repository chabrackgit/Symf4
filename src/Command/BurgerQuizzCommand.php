<?php


namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;


class BurgerQuizzCommand extends Command{
    
    protected static $defaultName = 'burgerquizz';
    
    protected function configure()
    {
        $this->setDescription('affiche les nombres')
             ->setHelp('permet d afficher les nombres')
             ->addArgument('number', InputArgument::REQUIRED, 'nombre choisi');
             
    }
    
    protected function execute(InputInterface $input, OutputInterface $output){
        $number = $input->getArgument('number');
        
        
        $output->writeln("la moitié du nombre est: ".($number/2));
        $output->writeln("le nombre suivant est: ".($number+1));
        $output->writeln("le nombre précédent est: ".($number-1));

    }
    
}
