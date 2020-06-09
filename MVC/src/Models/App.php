<?php

namespace App\Models;

class App {
    
    private $pseudo;
    private $mail;
    private $date_creation;



    public function getDate(){
        return $this->date_creation;
    }
    public function getName(){
        return $this->pseudo;
    }
    public function getMail(){
        return $this->mail;
    }
}