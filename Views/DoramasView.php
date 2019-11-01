<?php

require_once('libs/Smarty.class.php');

class DoramasView {

    function __construct(){

    }

    public function DisplayDoramas($doramas,$actores){
        $smarty = new Smarty();
        $smarty->assign('titulo',"OH! My DORAMA");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_doramas',$doramas);
        $smarty->assign('lista_actores',$actores);
        $smarty->display('templates/ver_doramas.tpl');
    }
    public function DisplayDoramasNoLog($doramas){
        $smarty = new Smarty();
        $smarty->assign('titulo',"OH! My DORAMA");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_doramas',$doramas);
        $smarty->display('templates/doramasNoLog.tpl');
    }
    public function DisplayDorama($dorama){
        $smarty = new Smarty();
        $smarty->assign('titulo',"OH! My DORAMA");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('dorama_edit',$dorama);
        $smarty->display('templates/editar_actores.tpl');
    }
    public function DisplayDoramasForm($dorama){
        $smarty = new Smarty();
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('dorama_edit',$dorama);
        $smarty->assign('titulo',"OH! My DORAMA");
        $smarty->display('templates/editar_doramas.tpl');
    }
}

?>