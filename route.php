<?php


require_once "Controllers/actorController.php";
require_once "Controllers/doramaController.php";
require_once "models/actorModel.php";
require_once "models/doramaModel.php";
require_once "views/indexView.php";
require_once "views/actorView.php";
require_once "views/doramaView.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

//$controller = new TareasController();

if($action == ''){
    //$index = new indexView();
    //$index-> DisplayIndex('OH!My Dorama');
    $model = new doramaModel();
    $model-> InsertarDorama('lalala','drama','lo lo lo',12,true,1);
    $model-> InsertarDorama('lelele','romance','lilili',14,false,1);
    $model->BorrarDorama(5);
    $model->EditarDorama(6,'lelele','drama','lo lo lo',17,true,1);
    echo json_encode($model->GetDoramas()) ;
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        
    }
}

?>
