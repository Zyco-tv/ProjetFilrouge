<?php
namespace App\Models;
class User {
    private $pseudo;
    private $password;
    private $id;
    private $admin;
    private $firstname;
    private $discord;
    private $email;
    public function getMail() {
        return $this->email;
    }
    public function getPseudo(){
        return $this->pseudo;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getId(){
        return $this->id;
    }
    public function getAdmin(){
        return $this->admin;
    }
    public function getPrenom(){
        return $this->firstname;
    }
    public function getDiscord(){
        return $this->discord;
    }
    public function setPseudo($pseudo){
        }
    public function setPassword(String $password){
    }
}