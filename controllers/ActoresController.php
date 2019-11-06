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
    public function GetActoresNoLog(){
        //$this->checkLogIn();
        $actores = $this->model->GetActores();
        $this->view->DisplayActoresNoLog($actores);
    }

    public function GetActor($params=null){
        $id_actor = $params [':ID'];
        $actor = $this->model->GetActor($id_actor);
        $this->view->DisplayActor($actor);
    }
    public function MostrarEditarActor($params=null){
        $id_actor = $params [':ID'];
        //var_dump($id_actor);die;
        $actor = $this->model->GetActor($id_actor);
        
        $this->view->DisplayActoresForm($actor);
    }

    public function InsertarActor(){
        //$this->checkLogIn();
        $id_actor = $_POST['id_actor'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $producciones = $_POST['producciones'];
        
        if((!empty($nombre))&&(!empty($edad))&&(!empty($producciones))){
            $this->model->InsertarActor($nombre,$edad,$producciones); 
        }
        header("Location: " . ACTORES);
    }

    public function EditarActor(){
        //$this->checkLogIn();
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $producciones = $_POST['producciones'];
        $id_actor = $_POST['id_actor'];
        $save = $_POST['save'];
        if((isset($save))&&(!empty($nombre))&&(!empty($edad))&&(!empty($producciones))&&(!empty($id_actor))){
            $this->model->EditarActor($id_actor,$nombre, $edad,$producciones);
            header("Location: " . ACTORES);
        }
        // $id_actor = $params [':ID'];
        // if((!empty($id_actor))&&(!empty($nombre))&&(!empty($edad))&&(!empty($producciones))){
        //     $this->model->EditarActor($_POST['nombre'],$_POST['edad'],$_POST['producciones'], $id_actor);
        // }
        // header("Location: " . ACTORES);
    }

    public function BorrarActor($params=null){
        //$this->checkLogIn();
        $id_actor = $params [':ID'];
        $this->model->BorrarActor($id_actor);
        header("Location: " . ACTORES);
    }
}


?>
