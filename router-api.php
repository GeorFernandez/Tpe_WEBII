<?php
require_once("Router.php");
require_once("./api/ActoresApiController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute("tareas", "GET", "ActoresApiController", "getActores");
$router->addRoute("tareas/:ID", "GET", "ActoresApiController", "getActor");
$router->addRoute("tareas/:ID", "DELETE", "ActoresApiController", "deleteActor");
$router->addRoute("tareas", "POST", "ActoresApiController", "addActor");
$router->addRoute("tareas/:ID", "PUT", "ActoresApiController", "updateActor");


// rutea
$router->route($resource, $method);

