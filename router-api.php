<?php
require_once("Router.php");
require_once("./Controllers/DoramasController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET['action'];

// método utilizado
$method = $_SERVER['REQUEST_METHOD'];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute("doramas", "GET", "DoramasController", "getDoramas");
// $router->addRoute("tareas/:ID", "GET", "ActoresApiController", "getActor");
// $router->addRoute("tareas/:ID", "DELETE", "ActoresApiController", "deleteActor");
// $router->addRoute("tareas", "POST", "ActoresApiController", "addActor");
// $router->addRoute("tareas/:ID", "PUT", "ActoresApiController", "updateActor");


// rutea
$router->route($resource, $method);

