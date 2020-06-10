<?php

namespace App\Models;

class App {
    
    private $pseudo;
    private $mail;
    private $created_at;
    private $img;
    private $title;
    private $content;
    private $name;
    private $id_user;
    



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
<<<<<<< HEAD

=======
    public function getId(){
        return $this->id_user;
    }
>>>>>>> 646a85dc2d21ecf00134803a353fcc0d236357e9
}