<?php


namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Psr\Log\LoggerInterface;



class MoyenneClasseCommand extends Command{
    
    protected static $defaultName = 'moyenne';
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
        parent::__construct();
    }
    
    protected function configure()
    {
        $this->setDescription("calcule la moyenne de la classe");
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //METHODES DEBUG
        $this->logger->info('Début');

        $helper = $this->getHelper('question');
        $question = new Question('Quel est le nombre élève dans la classe : ', '0');
        $nombreEleve = $helper->ask($input, $output, $question);
        
        // BOUCLE FOR ET CONDITION
        for($i=0; $i<$nombreEleve; $i++){
            $question2 = new Question('saisir note : ');
            $note[$i] = $helper->ask($input, $output, $question2);
            if($note[$i] > 20){
                $output->writeln("Merci de saisir une valeur inférieure à 20");
                $note[$i] = $helper->ask($input, $output, $question2);
            }  
        }
    
        //OPERATIONS
        $somme = array_sum($note);
        $moyenne = $somme / $nombreEleve;
        $notemin = min($note);
        $notemax = max($note);

        //RESULTAT AFFICHAGE
        $output->writeln("La moyenne de la classe est : ".$moyenne);
        $output->writeln("La meilleure note de la classe est : ".$notemin);
        $output->writeln("La mauvaise note de  la classe est : ".$notemax);
    }
    
}