<?php
// require_once ("Controllers/ActoresController.php");
// require_once ("Controllers/UserController.php");
// require_once ("Controllers/DoramasController.php");
// require_once ("Views/indexView.php");

require_once ("Router.php");
require_once ("Controllers/DoramasController.php");
require_once ("Controllers/ActoresController.php");

define ("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define ("DORAMAS", BASE_URL . 'doramas');
define ("ACTORES", BASE_URL . 'actores');

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute('actores', 'GET', 'ActoresController', 'GetActores');
//$router->addRoute('doramas/:ID', 'GET', 'DoramasController', 'GetDorama');
$router->addRoute('BorrarActor/:ID', 'GET', 'ActoresController', 'BorrarActor');
$router->addRoute('insertar', 'POST', 'ActoresController', 'InsertarActor');
// $router->addRoute("tareas/:ID", "PUT", "ActoresApiController", "updateActor");

// arma la tabla de ruteo
$router->addRoute("doramas", "GET", "DoramasController", "GetDoramas");
//$router->addRoute("doramas/:ID", "GET", "DoramasController", "GetDorama");
$router->addRoute("doramas/:ID", "DELETE", "DoramasController", "BorrarDorama");
$router->addRoute("doramas", "POST", "DoramasController", "InsertarDorama");
// $router->addRoute("tareas/:ID", "PUT", "ActoresApiController", "updateActor");
$router->setDefaultRoute("ActoresController", "GetActores");

// rutea
$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);



// $action = $_GET['action'];
// define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("URL_ACTORES", BASE_URL . 'actores');
// define("URL_DORAMAS", BASE_URL . 'doramas');
// //define("URL_DORAMAS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/doramas');
// //define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
// //define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
// $controller = new ActoresController();
// $controllerDorama = new DoramasController();
// //$indexView = new indexView();
// //$titulo = 'OH! My DORAMA';
// if($action == ''){
//     //quiero incluir index.tpl que este por default y al hacer click en el titulo
//     $controller->GetActores();
//     //$indexView->DisplayIndex($titulo);
//     //tengo que crear un controller para que haga esto? 
// }else{
//     if (isset($action)){
//         $partesURL = explode("/", $action);

//         if($partesURL[0] == "actores"){
//             $controller->GetActores();
//         }elseif($partesURL[0] == "insertar") {
//             $controller->InsertarActor();
//         }elseif($partesURL[0] == "borrar") {
//             $controller->BorrarActor($partesURL[1]);
//         }elseif($partesURL[0] == "editar") {
//             $controller->EditarActor($partesURL[1]);
//         }elseif($partesURL[0] == "doramas"){
//             $controllerDorama->GetDoramas();
//         }elseif($partesURL[0] == "insertar"){
//             $controllerDorama->InsertarDorama();
//         }elseif($partesURL[0] == "borrar"){
//             $controllerDorama->BorrarDoramas($partesURL[1]);
//         }elseif($partesURL[0] == "editar"){
//             $controllerDorama->EditarDorama($partesURL[1]);
//         }elseif($partesURL[0] == "login") {
//             $controllerUser = new UserController();
//             $controllerUser->Login();
//         }elseif($partesURL[0] == "iniciarSesion") {
//             $controllerUser = new UserController();
//             $controllerUser->IniciarSesion();
//         }elseif($partesURL[0] == "logout") {
//             $controllerUser = new UserController();
//             $controllerUser->Logout();
//         }
//     }
// }

