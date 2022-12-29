<?php 
try{

    if(empty($_GET['page'])){
        $page =  "home";
        } else{
            $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
            $page = $url[0];
        }
    switch($page){
        case "home":
            $page_description = "la description de la page d'accueil";
            $page_title = "le titre de la page d'accueil";
            $page_content = "le contenu de la page d'accueil";
            break;
        case "registration":
            $page_description = "la description de la page d'inscription";
            $page_title = "le titre de la page d'inscription";
            $page_content = "le contenu de la page d'inscription";
            break;
        case "connection":
            $page_description = "la description de la page de connexion";
            $page_title = "le titre de la page de connexion";
            $page_content = "le contenu de la page de connexion";
            break;
        case "about":
            $page_description = "la description de la page d'informations";
            $page_title = "le titre de la page d'informations";
            $page_content = "le contenu de la page d'informations";
            break;
            default: throw new Exception("Cette page n'existe pas");

    } }
catch(Exception $e)
    {
        $page_description = "la description de la page d'erreur";
        $page_title = "le titre de la page d'erreur";
        $page_content = $e->getMessage();
    }

require_once("views/common/template.view.php");
