<?php
namespace App\Models;
class UserManager {
    private $table = 'user';
    private $pdo;
    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=127.0.0.1;dbname='. DATABASE . ';charset=utf8', USER, PASSWORD);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    public function store(){
        $request = $this->pdo->prepare('INSERT INTO user (pseudo,password,mail) VALUES (:pseudo,:password,:mail);');
        $request->execute([
            "pseudo" => $_POST["pseudo"],
            "mail" => $_POST["mail"],
            "password" => password_hash($_POST["password"],PASSWORD_DEFAULT),
        ]);
        return $this->pdo->lastInsertId();
    }
    public function find($username){
        $request = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE pseudo = :pseudo');
        $request->execute([
            "pseudo" => $username
        ]);
        $request->setFetchMode(\PDO::FETCH_CLASS, 'App\Models\User');
        return $request->fetch();
    }
    public function findById($id)
    {
        $request = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE id_user = :id_user');
        $request->execute([
            "id_user" => $id_user
        ]);
        $request->setFetchMode(\PDO::FETCH_CLASS, 'App\Models\User');
        return $request->fetch();
    }
    // public function update($param)
    // {
    // $request = $this->pdo->prepare('UPDATE ' . $this->table . ' SET pseudo = :pseudo, email = :email, discord = :discord WHERE id=:id');
    // $request->execute ([
    //     "pseudo" => $_POST['pseudo'],
    //     "email" => $_POST['email'],
    //     "discord" => $_POST['discord'],
    //     "id" => $param,
    // ]);
    // }
}





