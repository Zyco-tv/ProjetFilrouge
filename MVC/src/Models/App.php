<?php

namespace App\Models;

class App {
    
    private $pseudo;
    private $mail;
    private $created_at;
    private $img;
    private $title;
    private $content;



    public function getDate(){
        return $this->created_at;
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

}