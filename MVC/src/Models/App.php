<?php

namespace App\Models;

class App {
    private $title;
    private $id;
    private $name;
    private $mail;
    private $message;
    private $titre;
    private $titreproj;
    private $contenuedesc;
    private $contenue;
    private $prenom;
    private $job;
    private $url;
    private $user_id;


   

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

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    public function getCompetence()
    {
        return $this->titre;
    }

    public function getCompetenceimg()
    {
        return $this->img;
    }
    public function getMoiimg()
    {
        return $this->img;
    }

    public function getProjettitre()
    {
        return $this->titre;
    }

    public function getDescription()
    {
        return $this->contenue;
    }
    
    public function getContenue()
    {
        return $this->contenue;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getJob()
    {
        return $this->job;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function getCompetencedesc()
    {
        return $this->description;
    }
    
}