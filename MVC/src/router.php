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
        else if ($this->url == '/edite' && $this->method == 'GET') {
            $controllerApp->showEdite();
        }
        else if ($this->url == '/valide' && $this->method == 'GET') {
            $controllerUser->showValidation();
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
        else if ($this->url == '/edite/header' && $this->method == 'POST') {
            $controllerApp->editeHeader();
        }
        else if ($this->url == '/edite/moi' && $this->method == 'POST') {
            $controllerApp->editeMoi();
        }
        else if ($this->url == '/edite/ajoute/projet' && $this->method == 'POST') {
            $controllerApp->ajoutProjet();
        }
        else if ($this->url == '/edite/ajoute/competence' && $this->method == 'POST') {
            $controllerApp->ajoutCompetence();
        }
        else if (preg_match('#^\/edite\/competence\/([0-9]+)$#',$this->url, $matches) && $this->method == 'POST'){
            $controllerApp->editeCompetence($matches[1]);
        }
        else if (preg_match('#^\/edite\/projet\/([0-9]+)$#',$this->url, $matches) && $this->method == 'POST'){
            $controllerApp->editeProjet($matches[1]);
        }
        else if (preg_match('#^\/edite\/projet\/delete\/([0-9]+)$#',$this->url, $matches) && $this->method == 'POST'){
            $controllerApp->deleteProjet($matches[1]);
        }
        else if (preg_match('#^\/edite\/competence\/delete\/([0-9]+)$#',$this->url, $matches) && $this->method == 'POST'){
            $controllerApp->deleteCompetence($matches[1]);
        }
        else if ($this->url == '/admin/dashboard' && $this->method == 'GET') {
            $controllerAdmin = new AdminController();
            $controllerAdmin->adminDashboard();
        }
        else if ($this->url == '/homedash' && $this->method == 'GET') {
            $controllerApp = new AppController();
            $controllerApp->homeDash();
        }
        else if ($this->url == '/dashboard/candidature' && $this->method == 'GET') {
            $controllerApp = new AppController();
            $controllerApp->create();
        }
        else if ($this->url == '/dashboard/admin/archive' && $this->method == 'GET') {
            $controllerAdmin = new AdminController();
            $controllerAdmin->ArchiveApplication();
        }
        else if ($this->url == '/dashboard/candidature' && $this->method == 'POST') {
            $controllerApp = new AppController();
            $controllerApp->storeApp();
        }
        else if (preg_match('#^\/dashboard\/admin\/([a-z0-9A-Z-%]+)$#',$this->url, $matches) && $this->method == 'GET'){
            $controllerAdmin = new AdminController();
            $controllerAdmin->showApplication($matches[1]);
        }
        else if (preg_match('#^\/dashboard\/admin\/([a-z0-9A-Z-]+)\/delete$#' ,$this->url, $matches) && $this->method == 'GET') {
            $controllerAdmin = new AdminController();
            $controllerAdmin->DeleteApplication($matches[1]);
        }
        // else if (preg_match('#^\/dashboard\/([a-z0-9A-Z-]+)\/profile$#' ,$this->url, $matches) && $this->method == 'GET') {
        //     $controllerApp = new AppController();
        //     $controllerApp->showProfil($matches[1]);
        // }
        // else if (preg_match('#^\/dashboard\/([a-z0-9A-Z-]+)\/profile$#' ,$this->url, $matches) && $this->method == 'POST') {
        //     $controllerApp = new AppController();
        //     $controllerApp->profil($matches[1]);
        // }
        // else if (preg_match('#^\/dashboard\/admin\/([a-z0-9A-Z-]+)\/profile$#' ,$this->url, $matches) && $this->method == 'GET') {
        //     $controllerAdmin = new AdminController();
        //     $controllerAdmin->AdminShowProfil($matches[1]);
        // }
        // else if (preg_match('#^\/dashboard\/admin\/([a-z0-9A-Z-]+)\/profile$#' ,$this->url, $matches) && $this->method == 'POST') {
        //     $controllerAdmin = new AdminController();
        //     $controllerAdmin->AdminProfil("");
        // }


    }
    // else{
    //     $controllerApp->pageror();
    // }

}