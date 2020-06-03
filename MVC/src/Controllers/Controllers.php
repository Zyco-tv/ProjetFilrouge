<?php 

namespace App\Controllers; 
use App\Validator;

Class Controllers {
    protected $validator;

    function __construct()
    {
        $this->validator = new Validator();
    }
    public function redirect($url)
    {
        header('Location:'.$url);
        exit();
    }   
}