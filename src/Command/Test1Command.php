<?php


namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;



class Test1Command extends Command{
    
    protected static $defaultName = 'test1';
    
    protected function configure()
    {
        $this->setDescription("affiche votre nombre");
    }
    
    protected function execute(InputInterface $input, OutputInterface $output){
        
        $helper = $this->getHelper('question');
        $question = new Question('Merci de saisir votre nombre : ', '0');
        $nombre = $helper->ask($input, $output, $question);

        $nombreDivise = $nombre/2;
        $nombreDouble = $nombre*2;

        $output->writeln("le double de ".$nombre." est ".$nombreDouble);
        $output->writeln("la moitié de ".$nombre." est ".$nombreDivise);


    }
    
}