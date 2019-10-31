<?php

require_once('libs/Smarty.class.php');

class DoramasView {

    function __construct(){

    }

    public function DisplayDoramas($doramas){
        $smarty = new Smarty();
        $smarty->assign('titulo',"OH! My DORAMA");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_doramas',$doramas);
        $smarty->display('templates/ver_doramas.tpl');
    }
    public function DisplayDoramasNoLog($doramas){
        $smarty = new Smarty();
        $smarty->assign('titulo',"OH! My DORAMA");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_doramas',$doramas);
        $smarty->display('templates/doramasNoLog.tpl');
    }
}

?>