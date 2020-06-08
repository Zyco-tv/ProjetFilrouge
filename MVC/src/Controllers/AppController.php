<?php 
    namespace App\Controllers; 
    use App\Models\AppManager;
    use App\Models\UserManager;
    use App\Validator;
    use App\UserController;

    class AppController extends Controllers {
            private $manager;
            function __construct()
            {
                $this->manager = new AppManager();
                $this->userManager = new UserManager(); 
                parent::__construct();

                // if (!isset($_SESSION['user'])) {
                //     $this->redirect('/');
                // }
            }
 
            public function home() {
                require VIEW .'HomePage/index.php';
            }
            public function homeArticle() {
                require VIEW .'blog/blog-home.php';
            }
            
            public function show($firstname)
            {
                $candidature = $this->manager->find($firstname);
                require VIEW.'blog/blog-post.php';
            }
        
            // public function showProfil($user) {
            //     $profil = $this->manager->find($user);
            //     require VIEW.'profile.php';
            // }
        
            // public function profil($pseudo) {
            //     $this->validator->validate([
            //         'firstname' => ['required', 'alpha'],
            //         'email' => ['required', 'email'],
            //         'discord' => ['required', 'alphaNumDash'],
            //         'birthday' => ['required', 'alphaNum'],
            //     ]);

            //     if ($this->validator->errors()) {
            //         $_SESSION["errors"] = $this->validator->errors();
            //         $this->redirect('/dashboard/'. $pseudo.'/profile');
            //     }

            //     $pseudo = $this->manager->find($_POST["pseudo"]);

            //     if ($_SESSION["errors"]) {
            //         $this->redirect('/dashboard/'. $pseudo.'/profile');
            //     }
                
            //     $this->manager->store();
            //     $this->redirect('/dashboard/'. $_POST["pseudo"]);
            // }

        public function editeCommentaire($id)
        {
            $this->validator->validate([
                'text' => ['required']
            ]);
            $_SESSION["old"] = $_POST;
            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();

                $this->redirect('/edite');
            } else {
                $this->manager->updateCompetence($id);
                $this->redirect('/edite');
            }
        }

        public function editeArticle($id)
        {
            $this->validator->validate([
                'titre' => ['required'],
                'contenue' => ['required'],
                'url' => ['required']
            ]);
            $_SESSION["old"] = $_POST;
            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();
                
                $this->redirect('/edite');
            } else {
                $this->manager->updateProjet($id);
                $this->redirect('/edite');
            }
        }

        public function ajoutArticle()
        {
            $this->validator->validate([
                'titre' => ['required'],
                'contenue' => ['required'],
                'url' => ['required']
            ]);
            $_SESSION["old"] = $_POST;
            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();
                $this->redirect('/edite');
            } else {
                $this->manager->addProjet();
                $this->redirect('/edite');
            }
        }

        public function ajoutCommentaire()
        {
            $this->validator->validate([
                'text' => ['required']
            ]);
            $_SESSION["old"] = $_POST;
            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();

                $this->redirect('/edite');
            } else {
                $this->manager->addCompetence();
                $this->redirect('/edite');
            }
        }

        public function deleteCommentaire($id) {
            $this->manager->deleteCommentaire($id);
            $this->redirect('/edite');
        }
        public function deleteArticle($id) {
            $this->manager->deleteArticle($id);
            $this->redirect('/edite');
        }
        
        
        // public function pageror() {
        //     require VIEW .'404.php';
        // }

    }
