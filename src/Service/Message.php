<?php

namespace App\Service;


class Message{

    public function noteMessage($note, $student){
        
        $messages = "Salut ".$student.". Voici ta note : ".$note;

        return $messages;
    }
}
