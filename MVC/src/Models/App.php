<?php

namespace App\Models;

class App {
    
    private $pseudo;
    private $mail;
    private $date_creation;
    private $img;
    private $title;
    private $content;
    private $id_user;
    



    public function getDate(){
        return $this->date_creation;
    }
    public function getName(){
        return $this->pseudo;
    }
    public function getMail(){
        return $this->mail;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getImg(){
        return $this->img;
    }
    public function getContent(){
        return $this->content;
    }
    public function getId(){
        return $this->id_user;
    }
}