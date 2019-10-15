<?php
require_once('controllers/actorController.php');
require_once('router.php');

    define('BASE_URL', 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define('actor', BASE_URL . 'actor');


$router = new Router();
$router->addRoute('actores', 'GET', 'actorController', 'GetActores');
$router->setDefaultRoute('actorController', 'GetActores');
$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

// define la tabla de ruteo
// $router->addRoute('actores', 'POST', 'actorController', 'InsertarActor');
//$router->addRoute('tareas/:ID', 'GET', actorController, obtenerTarea);



// rutea


//$router->addRoute('index', 'GET', 'indexView', 'DisplayIndex');
 
// require_once "Controllers/actorController.php";
// require_once "Controllers/doramaController.php";
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
