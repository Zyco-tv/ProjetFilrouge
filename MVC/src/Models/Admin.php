<?php
namespace App\Models;

class Admin {
    private $pseudo;
    private $mail;
    private $date_creation;
    private $name;
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
    public function getNaame(){
        return $this->name;
    }
    public function getId(){
        return $this->id_user;
    }
}