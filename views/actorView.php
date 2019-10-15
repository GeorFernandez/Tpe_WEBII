<?php

require_once('libs/Smarty.class.php');


class actorView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
      

    }

    public function DisplayActores($actores){
        $this->smarty->assign('lista_nombre',$actores);
        $this->smarty->assign('basehref',BASE_URL);
        $this->smarty->display('./templates/actores.tpl');
    }
}

?>
