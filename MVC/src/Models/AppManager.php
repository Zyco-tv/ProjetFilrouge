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

    public function all() {
        $request = $this->pdo->prepare('SELECT * FROM user');
        $request->execute([
            "pseudo" => $pseudo,
            "mail" => $mail,
            "date_creation" => $date_creation,
            "id_user" => $id_user
        ]);
        $request->setFetchMode(\PDO::FETCH_CLASS, '\App\Models\App');
        return $request->fetchAll();
    }
    public function allarticle() {
        $request = $this->pdo->prepare('SELECT * FROM article');
        $request->execute([
            "title" => $title,
            "img" => $img,
            "content" => $content,
            "created_at" => $created_at
        ]);
        $request->setFetchMode(\PDO::FETCH_CLASS, '\App\Models\App');
        return $request->fetchAll();
    }
    public function alldash() {
        $request = $this->pdo->prepare('SELECT * FROM article');
        $request->execute([
            "title" => $title,
            "img" => $img,
            "content" => $content
        ]);
        $request->setFetchMode(\PDO::FETCH_CLASS, '\App\Models\App');
        return $request->fetchAll();
    }
    public function alluser() {
        $request = $this->pdo->prepare('SELECT * FROM user');
        $request->execute([
            "pseudo" => $pseudo,
            "mail" => $mail,
            "date_creation" => $date_creation,
            "id_user" => $id_user
        ]);
        $request->setFetchMode(\PDO::FETCH_CLASS, '\App\Models\App');
        return $request->fetchAll();
    }
    public function updateCommentaire($id)
    {
        $req = $this->pdo->prepare('UPDATE commentaire SET text = :text WHERE id = :id');
        $req->execute(array(
            "text" => $_POST["text"],
            "id" => $id
        ));
    }

    public function updateArticle($id)
    {
        $req = $this->pdo->prepare('UPDATE article SET titre = :titre, content = :content WHERE id = :id');
        $req->execute(array(
            "titre" => $_POST["titre"],
            "content" => $_POST["content"],
            "id" => $id
        ));
    }

    public function addArticle(){
        $request = $this->pdo->prepare('INSERT INTO article (title,img,content,id_user) VALUES (:title,:img,:content,:id_user)' );
        //var_dump($request);
        $request->execute([
            "title" => $_POST["title"],
            "img" => $_POST['img'],
            "content" => $_POST["content"],
            "id_user" => $_SESSION["user"]->id_user,
            ]);
            return $this->pdo->lastInsertId();
    }

    public function addCommentaire(){
        $request = $this->pdo->prepare('INSERT INTO commentaire (text) VALUES (:text)' );
        $request->execute([
            "text" => $_POST["text"],
        ]);
        // return $this->pdo->lastInsertId();
    }
    public function deleteCommentaire($id)
    {
        $req = $this->pdo->prepare('DELETE FROM commentaire WHERE id = :id');
        $req->execute(array(
            "id" => $id
        ));
    }

    public function deleteUser($id_user)
    {
        $req = $this->pdo->prepare('DELETE FROM user WHERE id_user = :id_user');
        $req->execute(array(
            "id_user" => $id_user
        ));
    }

    public function editUser($id_user)
    {
        $req = $this->pdo->prepare('UPDATE user SET pseudo = :pseudo, mail = :mail WHERE id_user = :id_user');
        $req->execute(array(
            "pseudo" => $_POST["pseudo"],
            "mail" => $_POST["mail"],
            "id_user" => $id_user
        ));
    }
    public function showUser($id_user)
    {
        $req = $this->pdo->prepare('SELECT * FROM user WHERE id_user = :id_user');
        $req->execute(array(
            "id_user" => $id_user
        ));
        $req->setFetchMode(\PDO::FETCH_CLASS, 'App\Models\App');
         return $req->fetch();
    }
    public function deleteArticle($id)
    {
        $req = $this->pdo->prepare('DELETE FROM article WHERE id_user = :id_user');
        $req->execute(array(
            "id" => $id
        ));
    }

    public function find($id_article){
        $request = $this->pdo->prepare('SELECT * FROM article WHERE id_article = :id_article');
        $request->execute([
            "id_article" => $id_article
        ]);
        return $request->fetch();
    }

}