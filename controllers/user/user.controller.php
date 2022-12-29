<?php
require_once("./models/main.model.php");
require_once("./models/user/user.model.php");
class UserController extends MainController
{
    private $user_manager;
    public function __construct(){
        $this->user_manager = new UserManager();
    }
    public function connection(){
        $data = [   "page_description"=>"Page de connexion",
                    "page_title"=>"Connexion au compte utilisateur",
                    "view"=>"views/user/connection.view.php",
                    "template"=>"views/common/template.view.php"];
        $this->generatePage($data);
    }
}