<?php

require_once('libs/Smarty.class.php');


class indexView {
    private $smarty;
    private $titulo= 'OH! My Dorama';
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    public function DisplayIndex($titulo){

        $smarty = new Smarty();
        $smarty->assign('Titulo',$titulo);
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/index.tpl');
    }  
}

?>