<?php


namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;



class Test2Command extends Command{

    const NOMBRE = 100;
    
    protected static $defaultName = 'test2';
    
    protected function configure()
    {
        $this->setDescription("cherche votre nombre");
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        $nombre = -1;
        
        
        while( $nombre != self::NOMBRE){
 
            $question = new Question('Quel est votre nombre : ', '0');
            $nombre = $helper->ask($input, $output, $question);

            if ($nombre > self::NOMBRE )
            {
                $output->writeln("TROP GRAND");
            }
            else if($nombre < self::NOMBRE )
            {
                $output->writeln("TROP PETIT");
            }else
            {
                $output->writeln("vous avez gagné");
            }
        }    
    }
    
}