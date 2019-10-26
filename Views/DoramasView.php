<?php

require_once('libs/Smarty.class.php');


class DoramasView {

    function __construct(){

    }

    public function DisplayDoramas($doramas){
        $smarty = new Smarty();
        $smarty->assign('titulo',"OH! My DORAMAS");
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('lista_doramas',$doramas);
        $smarty->display('templates/ver_doramas.tpl');
    }
}

?>