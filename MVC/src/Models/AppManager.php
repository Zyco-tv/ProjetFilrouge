<?php 
namespace App\Models;

class AppManager {
    private $tables = 'article';
    private $tablessss = 'commentaire';
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=127.0.0.1;dbname='. DATABASE . ';charset=utf8', USER, PASSWORD);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function updateCommentaire($id)
    {
        $req = $this->pdo->prepare('UPDATE competence SET titre = :titre, img = :img, description = :description WHERE id = :id');
        $req->execute(array(
            "titre" => $_POST["titre"],
            "img" => $_POST["img"],
            "description" => $_POST["description"],
            "id" => $id
        ));
    }

    public function updateArticle($id)
    {
        $req = $this->pdo->prepare('UPDATE projet SET titre = :titre, contenue = :contenue, url = :url WHERE id = :id');
        $req->execute(array(
            "titre" => $_POST["titre"],
            "contenue" => $_POST["contenue"],
            "url" => $_POST["url"],
            "id" => $id
        ));
    }

    public function addArticle(){
        $request = $this->pdo->prepare('INSERT INTO projet (titre,contenue,url) VALUES (:titre,:contenue,:url)' );
        $request->execute([
            "titre" => $_POST["titre"],
            "contenue" => $_POST["contenue"],
            "url" => $_POST["url"]
        ]);
        // return $this->pdo->lastInsertId();
    }

    public function addCoommentaire(){
        $request = $this->pdo->prepare('INSERT INTO competence (titre,img,description) VALUES (:titre,:img,:description)' );
        $request->execute([
            "titre" => $_POST["titre"],
            "img" => $_POST["img"],
            "description" => $_POST["description"]
        ]);
        // return $this->pdo->lastInsertId();
    }
    public function deleteCommentaire($id)
    {
        $req = $this->pdo->prepare('DELETE FROM competence WHERE id = :id');
        $req->execute(array(
            "id" => $id
        ));
    }
    public function deleteArticle($id)
    {
        $req = $this->pdo->prepare('DELETE FROM projet WHERE id = :id');
        $req->execute(array(
            "id" => $id
        ));


        
    }

}