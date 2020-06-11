<?php

namespace App\Controller;

use App\Service\Message;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class NoteController extends AbstractController
{
    /**
     * @Route("/note", name="note")
     */
    public function index(Message $message, LoggerInterface $logger)
    {   
        $logger->info('toujours plus');

        return $this->render('note/index.html.twig', [
            'controller_name' => 'NoteController',
        ]);
    }
}
