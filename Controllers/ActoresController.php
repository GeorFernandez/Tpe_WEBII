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
    //         die(); // destruye la sesión, y vuelve al login
    //     } 
    //     $_SESSION['LAST_ACTIVITY'] = time();
    // }

    public function GetActores(){
        //$this->checkLogIn();
        $actores = $this->model->GetActores();
        $this->view->DisplayActores($actores);
    }

    public function InsertarActor(){
        //$this->checkLogIn();
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $producciones = $_POST['producciones'];
        if((!empty($nombre))&&(!empty($edad))&&(!empty($producciones))){
            $this->model->InsertarActor($nombre, $edad, $producciones);
            header("Location: " . BASE_URL);
        }else{
            echo "Sos horrible";
            
        }
    }

    public function EditarActor($id_actor){
        //$this->checkLogIn();

        $this->model->EditarActor($_POST['nombre'],$_POST['edad'],$_POST['producciones'], $id_actor);
        header("Location: " . actores);
    }

    public function BorrarActor($params=null){
        //$this->checkLogIn();
        $id_actor = $params [':ID'];
        $this->model->BorrarActor($id_actor);
        header("Location: " . BASE_URL);
    }
}


?>
