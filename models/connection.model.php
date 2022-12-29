<?php

abstract class Connection{
    private static $pdo;
    private function setDatabase(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=gestion_compte_utilisateur;charset=utf8","root","");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    protected function getDatabase(){
        if(self::$pdo === null){
            self::setDatabase();
        }
        return self::$pdo;
    }
}