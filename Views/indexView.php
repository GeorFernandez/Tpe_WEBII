<?php

require_once('libs/Smarty.class.php');


class indexView {
   
    function __construct(){
        
        
    }

    public function DisplayIndex(){

        $smarty = new Smarty();
        $smarty->assign('titulo','OH! My DORAMA');
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/index.tpl');
    }  
}

?>