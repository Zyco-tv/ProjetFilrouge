<?php
require '../vendor/autoload.php';

session_start();
define('SRC',__DIR__.'/../src/');
define('CONTROLLER',__DIR__.'/../src/Controllers/');
define('MODEL',__DIR__.'/../src/Models/');
define('VIEW',__DIR__.'/../src/Views/');

define('USER', 'root');
define('DATABASE','prj_fil_rouge');
define('PASSWORD','root');


$bdd = new PDO('mysql:host=127.0.0.1:8889;dbname='. DATABASE . ';charset=utf8', USER, PASSWORD);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$router= new App\Router();
$router->run();