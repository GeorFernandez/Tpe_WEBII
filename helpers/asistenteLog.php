<?php
    class AsistenteLog{
        public function __construct(){

        }
        public function Login($usuario){
            session_start();
            $_SESSION['ID_usuario'] = $usuario->id;
            $_SESSION['usuario'] = $usuario->email;
        }
        public function Logout() {
            session_start();
            session_destroy();
        }
        public function chequeaLogin(){
            session_start();
            if(!isset($_SESSION['ID_usuario'])){ //Si no esta logueado que me lleve al login
                header ('Location: ' . login);
                die();//detiene el script
            }
        }
    }
?>
<?php


