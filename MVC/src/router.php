<?php 

namespace App;
use App\Controllers\UserController;
use App\Controllers\AppController;
use App\Controllers\AdminController;

class Router {
    private $method;
    private $url;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->url = $_SERVER['REQUEST_URI'];
    }

    public function run() {
        $controllerUser = new UserController();
        $controllerApp = new AppController();

        if ($this->url=='/' && $this->method == 'GET') {
            $controllerApp->home();
        }
        else if ($this->url == '/register' && $this->method == 'GET') {
            $controllerUser->showRegister();
        }
        else if ($this->url == '/register' && $this->method == 'POST') {
            $controllerUser->register();
        }
        else if ($this->url == '/login' && $this->method == 'GET') {
            $controllerUser->showLogin();
        }
        else if ($this->url == '/login' && $this->method == 'POST') {
            $controllerUser->login();
        }
        else if ($this->url == '/article' && $this->method == 'POST') {
            $controllerApp->homeArticle();
        }
        else if ($this->url == '/article/creat' && $this->method == 'POST') {
            $controllerApp->ajoutArticle();
        }
        else if ($this->url == '/article/ajoute/commentaire' && $this->method == 'POST') {
            $controllerApp->ajoutCommentaire();
        }
        else if ($this->url == '/article/ajoute/signale' && $this->method == 'POST') {
            $controllerApp->ajoutSignale();
        }
        else if (preg_match('#^\/article\/commentaire\/([0-9]+)$#',$this->url, $matches) && $this->method == 'POST'){
            $controllerApp->editeCommentaire($matches[1]);
        }
        else if (preg_match('#^\/article\/edite\/([0-9]+)$#',$this->url, $matches) && $this->method == 'POST'){
            $controllerApp->editeArticle($matches[1]);
        }
        else if (preg_match('#^\/article\/edite\/delete\/([0-9]+)$#',$this->url, $matches) && $this->method == 'POST'){
            $controllerApp->deleteArticle($matches[1]);
        }
        else if (preg_match('#^\/article\/commentaire\/delete\/([0-9]+)$#',$this->url, $matches) && $this->method == 'POST'){
            $controllerApp->deleteCommentaire($matches[1]);
        }

    }
    // else{
    //     $controllerApp->pageror();
    // }

}