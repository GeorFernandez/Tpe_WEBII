<?php

require_once('libs/Smarty.class.php');

class ActoresView {

    function __construct(){

    }
    public function DisplayActores($actores){
        $smarty = new Smarty();
        $smarty->assign('titulo',"OH! My DORAMA");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_actores',$actores);
        $smarty->display('templates/ver_actores.tpl');
    }
    public function DisplayActor($actor){
        $smarty = new Smarty();
        $smarty->assign('titulo',"OH! My DORAMA");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('actor_edit',$actor);
        $smarty->display('templates/editar_actores.tpl');
    }
}

?>
