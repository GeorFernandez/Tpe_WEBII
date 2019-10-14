<?php

require_once('libs/Smarty.class.php');


class doramaView {

    function __construct(){

    }

    public function DisplayDoramas($titulo){

        $smarty = new Smarty();
        $smarty->assign('Titulo',$titulo);
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/doramas.tpl');
    }  
}

?>