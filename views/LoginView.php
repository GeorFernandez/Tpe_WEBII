<?php
require_once('libs/Smarty.class.php');

class LoginView{
    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',LOGIN);
        $this->smarty->assign('titulo', "OH! My DORAMA");
    }
    function muestraLogin($mensaje = ''){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display("./templates/login.tpl");
    }
}