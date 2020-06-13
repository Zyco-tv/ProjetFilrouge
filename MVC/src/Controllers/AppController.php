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
                //     $this->redirect('/login');
                // }
            }

            public function home() {
                require VIEW .'HomePage/index.php';
            }
            public function homeArticle() {
                $articles = $this->manager->allarticle();
                require VIEW .'blog/blog-home.php';
            }

            public function homeArticleconnect() {
                $articles = $this->manager->allarticle();
                require VIEW .'blog/blog-home-connect.php';
            }            

            public function homeArticleLog() {
                $articles = $this->manager->allarticle();
                require VIEW .'blog/blog-home-log.php';
            }
            
            public function show($id_article)
            {
                $article = $this->manager->find($id_article);
                $comments = $this->manager->findComment($id_article);
                require VIEW.'blog/blog-post.php';
            }
            // public function showComment($id_article)
            // {
            //     die;
            //     var_dump('-----------------');
            //     $comment = $this->manager->findComment($id_article);
            //     require VIEW.'blog/blog-post.php';
            // }
            
        
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
                'title' => ['required'],
                'content' => ['required'],
                'img' => ['required']
            ]);
            $_SESSION["old"] = $_POST;
            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();
                
                $this->redirect('/article/edit');
            } else {
                $this->manager->updateArticle($id);
                $this->redirect('/article');
            }
        }

        public function ajoutArticle()
        {
            $this->validator->validate([
                'title' => ['required'],
                'content' => ['required'],
                // 'url' => ['required']
            ]);

            $_SESSION["old"] = $_POST;
            if ($this->validator->errors()) {
                $_SESSION["errors"] = $this->validator->errors();
                $this->redirect('/article/create');
            } else {
                $this->manager->addArticle();
                $this->redirect('/article');
            }
        }

        public function showCreat()
        {
            require VIEW .'blog/create.php';
        }
        public function showArticle()
        {
            require VIEW .'blog/edite-blog.php';
        }

        public function ajoutCommentaire($id_article)
        {
            $this->manager->addCommentaire($id_article);
            $this->redirect("/article/$id_article");
        }

        public function deleteCommentaire($id) {
            $this->manager->deleteCommentaire($id);
            $this->redirect('/edite');
        }
        public function deleteArticle($id_article) {
            $this->manager->deleteArticle($id_article);
            $this->redirect('/blog');
        }
        
        // public function pageror() {
        //     require VIEW .'404.php';
        // }
    }