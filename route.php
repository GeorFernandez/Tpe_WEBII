<?php


require_once "Controllers/ActoresController.php";
require_once "Controllers/UserController.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_ACTORES", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/actores');
define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

$controller = new ActoresController();

if($action == ''){
    $controller->GetActores();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "actores"){
            $controller->GetActores();
        }elseif($partesURL[0] == "insertar") {
            $controller->InsertarActor();
        // }elseif($partesURL[0] == "finalizar") {
        //     $controller->FinalizarTarea($partesURL[1]);
        }elseif($partesURL[0] == "borrar") {
            $controller->BorrarActor($partesURL[1]);
        }elseif($partesURL[0] == "login") {
            $controllerUser = new UserController();
            $controllerUser->Login();
        }elseif($partesURL[0] == "iniciarSesion") {
            $controllerUser = new UserController();
            $controllerUser->IniciarSesion();
        }elseif($partesURL[0] == "logout") {
            $controllerUser = new UserController();
            $controllerUser->Logout();
        }
    }
}

?>
