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
        $controllerAdmin = new AdminController();

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
        else if ($this->url == '/Dashboard' && $this->method == 'GET') {
            $controllerAdmin->adminDashboard();
        }
        else if ($this->url == '/Dashboard/Signalement' && $this->method == 'GET') {
            $controllerAdmin->ReportApplication();
        }
        else if ($this->url == '/Dashboard/Article' && $this->method == 'GET') {
            $controllerAdmin->ArticleApplication();
        }
        else if ($this->url == '/Dashboard/User' && $this->method == 'GET') {
            $controllerAdmin->UserApplication();
        }
        else if (preg_match('#^\/Dashboard\/User\/([0-9]+)$#',$this->url, $matches) && $this->method == 'POST'){
            $controllerAdmin->EditeApplication($matches[1]);
        }
        else if (preg_match('#^\/Dashboard\/User\/([0-9]+)$#',$this->url, $matches) && $this->method == 'GET'){
            $controllerAdmin->EditeApplication($matches[1]);
        }
        else if (preg_match('#^\/Dashboard\/User\/([a-z0-9A-Z-]+)\/delete$#' ,$this->url, $matches) && $this->method == 'GET') {
            $controllerAdmin = new AdminController();
            $controllerAdmin->DeleteUser($matches[1]);
        }
        else if (preg_match('#^\/Dashboard\/User\/([a-z0-9A-Z-]+)\/edit\/done$#' ,$this->url, $matches) && $this->method == 'POST') {
            $controllerAdmin = new AdminController();
            $controllerAdmin->EditUser($matches[1]);
        }
        else if (preg_match('#^\/Dashboard\/User\/([a-z0-9A-Z-]+)\/edit$#' ,$this->url, $matches) && $this->method == 'GET') {
            $controllerAdmin = new AdminController();
            $controllerAdmin->ShowUser($matches[1]);
        }
        else if ($this->url == '/article' && $this->method == 'GET') {
            $controllerApp->homeArticle();
        }
        else if ($this->url == '/article/create' && $this->method == 'GET') {
            $controllerApp->showCreat();
        }
        else if ($this->url == '/article/create' && $this->method == 'POST') {
            $controllerApp->ajoutArticle();
        }
        else if (preg_match('#^\/article\/([0-9]+)$#',$this->url, $matches) && $this->method == 'GET'){
            $controllerApp->show($matches[1]);
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
        else if (preg_match('#^\/article\/edit\/([0-9]+)$#',$this->url, $matches) && $this->method == 'GET'){
            $controllerApp->showArticle($matches[1]);
        }
        else if (preg_match('#^\/article\/edit\/([0-9]+)$#',$this->url, $matches) && $this->method == 'POST'){

            $controllerApp->editeArticle($matches[1]);
        }
        else if (preg_match('#^\/article\/edit\/delete\/([0-9]+)$#',$this->url, $matches) && $this->method == 'POST'){
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