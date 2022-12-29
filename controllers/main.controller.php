<?php

abstract class MainController{

    protected function generatePage($data)
    {
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        require_once($template);
    }

    protected function error($msg){
        $data = [   "page_description"=>"la description de la page d'erreur",
                    "page_title"=>"le titre de la page d'erreur",
                    "msg"=>$msg,
                    "view"=>"views/error.view.php",
                    "template"=>"views/common/template.view.php"];
        $this->generatePage($data);

    }
}