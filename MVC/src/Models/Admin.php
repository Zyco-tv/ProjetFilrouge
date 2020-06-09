<?php
namespace App\Models;

class Admin {
    private $admin;
    private $password;
    private $id;
    private $name;
    private $mail;
    private $message;
    private $user_id;

    public function getAdmin(){
        return $this->admin;
    }

    public function getId(){
        return $this->id;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setUsername($admin){
        }

    public function setPassword(String $password){
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Get the value of googleDocs
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Get the value of firstname
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    public function getContenue()
    {
        return $this->contenue;
    }
}