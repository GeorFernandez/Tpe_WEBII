<?php
require_once "./Models/ActoresModel.php";
require_once "./Views/ActoresView.php";

class ActoresController {

    private $model;
    private $view;

	function __construct(){
        
        $this->model = new ActoresModel();
        $this->view = new ActoresView();
    }
    
    // public function checkLogIn(){
    //     session_start();
        
    //     if(!isset($_SESSION['userId'])){
    //         header("Location: " . URL_LOGIN);
    //         die();
    //     }

    //     if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
    //         header("Location: " . URL_LOGOUT);
    //         die(); 
    //     } 
    //     $_SESSION['LAST_ACTIVITY'] = time();
    // }

    public function GetActores(){
        //$this->checkLogIn();
        $actores = $this->model->GetActores();
        $this->view->DisplayActores($actores);
    }

    public function GetActor($params=null){
        $id_actor = $params [':ID'];
        $actor = $this->model->GetActor($id_actor);
        $this->view->DisplayActor($actor);
    }

    public function InsertarActor(){
        //$this->checkLogIn();
        $id_actor = $_POST['id_actor'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $producciones = $_POST['producciones'];
        if((!empty($id_actor))&&(!empty($nombre))&&(!empty($edad))&&(!empty($producciones))){
            $this->model->InsertarActor($id_actor,$nombre,$edad,$producciones); 
        }
        header("Location: " . ACTORES);
    }

    public function EditarActor($params=null){
        //$this->checkLogIn();
        $id_actor = $params [':ID'];
        if((!empty($id_actor))&&(!empty($nombre))&&(!empty($edad))&&(!empty($producciones))){
            $this->model->EditarActor($_POST['nombre'],$_POST['edad'],$_POST['producciones'], $id_actor);
        }
        header("Location: " . ACTORES);
    }

    public function BorrarActor($params=null){
        //$this->checkLogIn();
        $id_actor = $params [':ID'];
        $this->model->BorrarActor($id_actor);
        header("Location: " . ACTORES);
    }
}


?>
