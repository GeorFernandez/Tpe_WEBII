<?php
// require_once ("Controllers/UserController.php");
require_once ("Views/indexView.php");
require_once ("Router.php");
require_once ("Controllers/DoramasController.php");
require_once ("Controllers/ActoresController.php");

define ("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define ("DORAMAS", BASE_URL . 'doramas');
define ("ACTORES", BASE_URL . 'actores');
define ("LOGIN", BASE_URL . 'login');

$router = new Router();

$router->addRoute('actores', 'GET', 'ActoresController', 'GetActores');
$router->addRoute('actores/:ID', 'GET', 'ActoresController', 'GetActor');
$router->addRoute('BorrarActor/:ID', 'GET', 'ActoresController', 'BorrarActor');
$router->addRoute('insertar', 'POST', 'ActoresController', 'InsertarActor');
$router->addRoute('EditarActor/:ID', 'POST', 'ActoresController', 'EditarActor');
$router->addRoute('doramas', 'GET', 'DoramasController', 'GetDoramas');
$router->addRoute('doramas/:ID', 'GET', 'DoramasController', 'GetDorama');
$router->addRoute('BorrarDorama/:ID', 'GET', 'DoramasController', 'BorrarDorama');
$router->addRoute('insertarDorama', 'POST', 'DoramasController', 'InsertarDorama');
$router->addRoute("EditarDorama/:ID", "PUT", "DoramasController", "EditarDorama");
$router->setDefaultRoute('indexView', 'DisplayIndex');

$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);





