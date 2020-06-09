<?php
namespace App\Controllers; 
use App\Models\AppManager;
use App\Models\UserManager;


    class AdminController extends Controllers {
            private $manager;
            function __construct()
            {
                // if (!isset($_SESSION['user']) || !$_SESSION['user']->getAdmin()) {
                //     $this->redirect('/');
                // }
                $this->manager = new AppManager();
                $this->userManager = new UserManager();
                parent::__construct();
            }
            

            public function adminDashboard()
            {
                $archives = $this->manager->alldash();
                $utilisateurs = $this->manager->alluser();
                require VIEW.'panel-admin/home-admin.php';
            }

            public function EditeApplication($name)
            {
                $candidature = $this->manager->find($name);
                require VIEW.'panel-admin/edite-admin.php';
            }

            public function ReportApplication()
            {
                // $archives = $this->manager->all();
                require VIEW.'panel-admin/report-admin.php';
            }

            public function ArticleApplication()
            {
                $archives = $this->manager->allarticle();
                require VIEW.'panel-admin/Article-admin.php';
            }

            public function UserApplication()
            {
                $archives = $this->manager->all();
                require VIEW.'panel-admin/index-admin.php';
            }

            // public function DeleteApplication($name)
            // {
            //     $this->manager->delete($name);
            //     $this->redirect('/admin/dashboard');
            // }
        }