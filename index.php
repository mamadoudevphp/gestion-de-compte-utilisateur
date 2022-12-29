<?php 
require_once("main.controller.php");
require_once("controllers/visitor/visitor.controller.php");
require_once("controllers/user/user.controller.php");


$visitor_controller = new VisitorController();
$user_controller = new UserController();


try{

    if(empty($_GET['page'])){
        $page =  "home";
        } else{
            $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
            $page = $url[0];
        }
    switch($page){
        case "home": $visitor_controller->home();
            break;
        case "connection": $user_controller->connection();
            break;
            default: throw new Exception("Cette page n'existe pas");

    } }
catch(Exception $e)
    {
        $visitor_controller->error($e->getMessage());
    }

require_once("views/common/template.view.php");
