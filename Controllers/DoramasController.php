<?php
require_once "./Models/DoramasModel.php";
require_once "./Views/DoramasView.php";

class DoramasController {

    private $model;
    private $view;

	function __construct(){
        
        $this->model = new DoramasModel();
        $this->view = new DoramasView();
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

    public function GetDoramas(){
        //$this->checkLogIn();
        $doramas = $this->model->GetDoramas();
        $this->view->DisplayDoramas($doramas);
    }

    public function InsertarDorama(){
        $this->model->InsertarDorama($_POST['nombre'],$_POST['genero'],$_POST['sinopsis'],$_POST['cant_capitulos'],$_POST['en_emision'], $_POST['id_actor']);
        header("Location: " . doramas);
    }

    public function EditarDorama($id_dorama){
        //$this->checkLogIn();

        $this->model->EditarDorama($_POST['nombre'],$_POST['genero'],$_POST['sinopsis'],$_POST['cant_capitulos'],$_POST['en_emision'], $_POST['id_actor'],$id_dorama);
        //header("Location: " . doramas);
    }

    public function BorrarDorama($params=null){
        //$this->checkLogIn();
        $id_dorama=$params[':ID'];
        $this->model->BorrarDorama($id_dorama);
        //header("Location: " . doramas);
    }
}


?>
