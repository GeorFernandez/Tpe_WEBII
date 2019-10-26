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
    
    public function checkLogIn(){
        session_start();
        
        if(!isset($_SESSION['userId'])){
            header("Location: " . URL_LOGIN);
            die();
        }

        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
            header("Location: " . URL_LOGOUT);
            die(); // destruye la sesión, y vuelve al login
        } 
        $_SESSION['LAST_ACTIVITY'] = time();
    }

    public function GetActores(){
        $this->checkLogIn();
        $actores = $this->model->GetActores();
        $this->view->DisplayActores($actores);
    }

    public function InsertarActor(){
        $this->checkLogIn();
        // $finalziada = 0;
        // if($_POST['finalizada'] == 'on'){
        //     $finalziada = 1;
        // }
        $this->model->InsertarActor($_POST['nombre'],$_POST['edad'],$_POST['producciones']);
        header("Location: " . BASE_URL);
    }

    public function EditarActor($id){
        $this->checkLogIn();
        $this->model->EditarActor($id);
        header("Location: " . BASE_URL);
    }

    public function BorrarActor($id){
        $this->checkLogIn();
        $this->model->BorrarActor($id);
        header("Location: " . BASE_URL);
    }
}


?>
