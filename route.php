<?php
require_once('controllers/actorController.php');
require_once('controllers/indexController.php');
require_once('Controllers/doramaController.php');
require_once('router.php');

define('BASE_URL', 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define('actor', BASE_URL . 'actor');


$router = new Router();
$router->setDefaultRoute('indexController', 'DisplayIndex');
$router->addRoute('actor', 'GET', 'actorController', 'GetActores');
$router->addRoute('actor', 'POST', 'actorController', 'InsertarActor');
$router->addRoute('actor', 'PUT', 'actorController', 'EditarActor');
$router->addRoute('actor', 'DELETE', 'actorController', 'BorrarActor');
$router->addRoute('dorama', 'GET', 'doramaController', 'GetDoramas');
$router->addRoute('actor', 'POST', 'doramaController', 'InsertarDorama');
$router->addRoute('actor', 'PUT', 'doramaController', 'EditarDorama');
$router->addRoute('actor', 'DELETE', 'doramaController', 'BorrarDorama');

$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

// define la tabla de ruteo
//
//$router->addRoute('tareas/:ID', 'GET', actorController, obtenerTarea);



// rutea

 
// require_once "Controllers/actorController.php";

// require_once "models/actorModel.php";
// require_once "models/doramaModel.php";
// require_once "views/indexView.php";
// require_once "views/actorView.php";
// require_once "views/doramaView.php";

// $action = $_GET["action"];
// define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("URL_", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("URL_", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("URL_", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// //$controller = new TareasController();

// if($action == ''){
//     $index = new indexView();
//    $index-> DisplayIndex('OH!My Dorama');
//     // $model = new actorModel();
//     // $model2 = new doramaModel();
    
//     // $model-> InsertarActor('lalala',21,'lo lo lo');
//     // $model-> InsertarActor('lololo',21,'lo lo lo');
//     // $model-> InsertarActor('lululu',21,'lo lo lo');
//     // $model-> InsertarActor('lelele',32,'lilili');
//     // $model->BorrarActor(2);
//     // $model->EditarActor(1,'lelele',14,'lo lo lo');
//     // $model2-> InsertarDorama('lalala','drama','lo lo lo',12,true,1);
//     // $model2-> InsertarDorama('lelele','romance','lilili',14,false,1);
//     // $model2-> InsertarDorama('lilili','drama','lo lo lo',12,true,2);
//     // $model2-> InsertarDorama('lololo','drama','lo lo lo',12,true,3);
//     // $model2-> InsertarDorama('lululu','drama','lo lo lo',12,true,3);
//     // $model2-> InsertarDorama('laloli','drama','lo lo lo',12,true,4);
//     // $model2->BorrarDorama(5);
//     // $model2->EditarDorama(6,'apapa','drama','lo lo lo',17,true,1);
//     // echo json_encode($model->GetActores()) ;
//     // echo json_encode($model2->GetDoramas());
// }else{
//     if (isset($action)){
//         $partesURL = explode("/", $action);

        
//     }
// }

// ?>
