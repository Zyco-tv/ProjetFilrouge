<?php
namespace App;

class Validator {
    private $errors = [];
    
    public function validationField($field, $rules) {
        foreach($rules as $rule) {
            if (preg_match('#^(min|max):([0-9]+)$#', $rule, $matches)) {
                $rule = $matches[1];
                $this->$rule($field, $matches[2]);
            } 
            else {
                $this->$rule($field);
            }
            if ($this->errors[$field]) {
            break;
            }
        } 
    }

    public function validate($array)
    {
        foreach ($array as $field => $rules) {
            $this->validationField($field, $rules);
        }
    }

    public function required($field)
    {
        if (!isset($_POST[$field]) || empty($_POST[$field])) {
            $this->errors[$field] = 'Le champs ' . $field . ' est requis';
        }
    }

    public function alpha($field)
    {
        if (!preg_match('#^[A-Za-z-.]+$#', $_POST[$field])) {
            $this->errors[$field] = "il n'y a que les caractères alphabétique qui sont requis";
        }
    }

    public function alphaNum($field)
    {
        if (!preg_match('#^[0-9]+$#', $_POST[$field])) {
            $this->errors[$field] = "il n'y que les caractères alphanumériue qui sont requis";
        }
    }

    public function alphaNumDash($field)
    {
        if (!preg_match('#^[A-Za-z0-9-_%]+$#', $_POST[$field])) {
            $this->errors[$field] = "les caractéres exploitables sont: '-', '_'";
        }
    }

    public function email($field)
    {
        if (!filter_var($_POST[$field], FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = "l'email n'est pas valide exemple: exemple@gmail.com";
        }
    }

    public function discord($field) {
        if (!preg_match('#^[a-zA-Z]+\#[0-9]{1,4}$#', $_POST[$field])) {
            $this->errors[$field] = "Veuillez entrez un discord valide";
        }
    }

    public function url($field)
    {
        if (!filter_var($_POST[field], FILTER_VALIDATE_URL)) {
            $this->errors[$field] = "l'url n'est pas valide";
        }
    }

    public function date($field)
    {
        if (!preg_match('#^\d{4}(\/|-)(0[1-9]|1[0-2])(\/|-)(0[1-9]|[1-2][0-9]|3[0-1])$#', $_POST[$field])) {
            $this->errors[$field] = "il faut mettre une date valide";
        }
    }

    public function max($field)
    {
        if (!preg_match('#^.{0,'.$max.'}$#', $_POST[$field])) {
            $this->errors[$field] = 'tu as ateint le nombres '.$max.' qui est le maximum';
        }
    }

    public function min($field, $min)
    {
        if (!preg_match('#^.{'.$min.',}$#', $_POST[$field])) {
            $this->errors[$field] = 'il faut que tu mettes au moins '.$min.' caractères';
        }
    }

    public function errors()
    {
        return $this->errors;
    }
}