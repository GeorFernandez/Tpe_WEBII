<?php

require_once('libs/Smarty.class.php');


class indexView {

    function __construct(){

    }

    public function DisplayIndex($titulo){

        $smarty = new Smarty();
        $smarty->assign('Titulo',$titulo);
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/index.tpl');
    }  
}

?>