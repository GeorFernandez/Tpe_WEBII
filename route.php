<?php
require_once ("Views/indexView.php");
require_once ("Router.php");
require_once ("Controllers/DoramasController.php");
require_once ("Controllers/ActoresController.php");
require_once ("Controllers/LoginController.php");

define ("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define ("DORAMAS", BASE_URL . 'doramas');
define ("ACTORES", BASE_URL . 'actores');
define ("LOGIN", BASE_URL . 'login');
define ("LOGOUT", BASE_URL . 'logout');

$router = new Router();
//doramas

//$router->addRoute('doramas', 'GET', 'DoramasController', 'GetDoramasNoLog');
$router->addRoute('doramas', 'GET', 'DoramasController', 'GetDoramas');
$router->addRoute('doramas/:ID', 'GET', 'DoramasController', 'GetDorama');
$router->addRoute('borrarDorama/:ID', 'GET', 'DoramasController', 'BorrarDorama');
$router->addRoute('insertarDorama', 'POST', 'DoramasController', 'InsertarDorama');
$router->addRoute('formularioEdicionDorama/:ID','GET','DoramasController','TraerDorama');
$router->addRoute("editarDorama/:ID", "POST", "DoramasController", "EditarDorama");


//actores

//$router->addRoute('actores', 'GET', 'ActoresController', 'GetActoresNoLog');
$router->addRoute('actores', 'GET', 'ActoresController', 'GetActores');
$router->addRoute('actores/:ID', 'GET', 'ActoresController', 'GetActor');
$router->addRoute('borrarActor/:ID', 'GET', 'ActoresController', 'BorrarActor');
$router->addRoute('insertar', 'POST', 'ActoresController', 'InsertarActor');
$router->addRoute('formularioEdicion/:ID','GET','ActoresController','TraerActor');
$router->addRoute('editarActor/:ID', 'POST', 'ActoresController', 'EditarActor');

//login 
$router->addRoute('login','GET','LoginController','login');
$router->addRoute('register','POST','LoginController','agregarUsuario');
$router->addRoute('verify','POST','LoginController','IniciarSesion');

$router->setDefaultRoute('indexView', 'DisplayIndex');

$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);





