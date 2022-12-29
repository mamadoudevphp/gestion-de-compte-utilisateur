<?php

class UserController extends MainController
{
    public function connection(){
        $data = [   "page_description"=>"la description de la page de connexion",
                    "page_title"=>"le titre de la page de connexion",
                    "view"=>"views/user/connection.view.php",
                    "template"=>"views/common/template.view.php"];
        $this->generatePage($data);
    }
}