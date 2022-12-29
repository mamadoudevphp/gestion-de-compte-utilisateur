<?php
require_once("./models/main.model.php");
class UserManager extends MainManager{

    public function getUsers(){
        $pdo = $this->getDatabase();
        $req = $pdo->prepare("SELECT * FROM utilisateur ");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;

    }


}