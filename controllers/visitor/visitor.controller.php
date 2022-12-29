<?php

class VisitorController extends MainController
{
    public function home(){
        $data = [   "page_description"=>"la description de la page d'accueil",
                    "page_title"=>"le titre de la page d'accueil",
                    "view"=>"views/visitor/home.view.php",
                    "template"=>"views/common/template.view.php"];
        $this->generatePage($data);
        
    }
    public function error($msg){
        parent::error($msg);
    }
}