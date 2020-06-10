<?php 
    namespace App\Controllers; 
    use App\Models\UserManager;
    use App\Validator;

        class UserController extends Controllers  {

            function __construct()
            {
                $this->manager = new UserManager(); 
                parent::__construct();
            }
            public function register() {
                $this->validator->validate([
                    'pseudo' => ['required', 'alpha', 'min:2'],
                    'mail' => ['required'],
                    'password' => ['required', 'alphaNumDash', 'min:6'],
                    'confirm' => ['required']
                ]);

                

                if ($this->validator->errors()) {
                    $_SESSION["errors"] = $this->validator->errors();
                    $_SESSION["old"] = $_POST;
                    //$this->redirect('/register');
                }
                
                if ($_POST["password"] != $_POST["confirm"]) {
                    $_SESSION["errors"]["confirm"] = "Le confirmation de mot de passe doit etre egale au mot de passe saisie";
                    $this->redirect('/register');
                }

                
                $user = $this->manager->find($_POST["pseudo"]);

                if (!$user && empty($_SESSION['errors'])) {
                    $id = $this->manager->store();
                    $user = $this->manager->findById($id);
                    $_SESSION["user"] = $user;
                    $this->redirect('/article');
                    
                }
                
                $_SESSION["errors"]["pseudo"] = "Cet username est déja utilisé";
                $this->redirect('/register');
                
            }

            public function login() {
                $this->validator->validate([
                    'pseudo' => ['required'],
                    'password' => ['required']
                ]);
        
                if ($this->validator->errors()) {
                    $_SESSION["errors"] = $this->validator->errors();
                    $_SESSION["old"] = $_POST;

                    $this->redirect('/login');
                }
        
                $user = $this->manager->find($_POST["pseudo"]);
        
                if (!$user || ($user && !password_verify($_POST["password"], $user->getPassword()))) {
                    $_SESSION["errors"]["password"] = "Les identifiant ne sont pas bon";
                    $this->redirect('/login');
                }
                
                
                $_SESSION["user"] = $user;
                $this->redirect('/blog');

                $this->redirect('/article/log');

            }

            public function showRegister() {
                require VIEW .'login/index.php';
        }
        public function showValidation() {
            require VIEW .'valide.php';
    }
        
            public function showLogin() {
                require VIEW .'login/login.php';
        }

        
        
    }