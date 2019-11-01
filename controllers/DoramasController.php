<?php
require_once "./Models/DoramasModel.php";
require_once "./Views/DoramasView.php";
require_once "./Models/ActoresModel.php";

class DoramasController {

    private $model;
    private $view;

	function __construct(){
        
        $this->model = new DoramasModel();
        $this->modelActores = new ActoresModel();
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
    //         die(); 
    //     } 
    //     $_SESSION['LAST_ACTIVITY'] = time();
    // }

    public function GetDoramas(){
        //$this->checkLogIn();
        $doramas = $this->model->GetDoramasConActores();
        //$doramas = $this->model->GetDoramas();
        $actores = $this->modelActores->GetActores();
        $this->view->DisplayDoramas($doramas,$actores);
    }
    public function GetDoramasNoLog(){
        //$this->checkLogIn();
        $doramas = $this->model->GetDoramas();
        $this->view->DisplayDoramasNoLog($doramas);
    }

    public function GetDorama($params=null){
        $id_dorama = $params [':ID'];
        $dorama = $this->model->GetDorama($id_dorama);
        $this->view->DisplayDorama($dorama);
    }
    public function TraerDorama($params=null){
        $id_dorama = $params [':ID'];
        $dorama = $this->model->GetDorama($id_dorama);
        $this->view->DisplayDoramasForm($dorama);
    }

    public function InsertarDorama(){
        $this->model->InsertarDorama($_POST['nombre'],$_POST['genero'],$_POST['sinopsis'],$_POST['cant_capitulos'],$_POST['en_emision'], $_POST['id_actor']);
        header("Location: " . DORAMAS);
    }

    public function EditarDorama($id_dorama){
        //$this->checkLogIn();
        
            // $nombre = $_PUT['nombre'];
            // $genero = $_PUT['genero'];
            // $sinopsis = $_PUT['sinopsis'];
            // $cant_capitulos = $_PUT['cant_capitulos'];
            // $en_emision = $_PUT['en_emision'];
            // $id_actor = $_PUT['id_actor'];
            // if((!empty($nombre))&&(!empty($genero))&&(!empty($sinopsis))&&(!empty($cant_capitulos))&&(!empty($en_emision))&&(!empty($id_actor))){
            //     $this->model->EditarDorama($nombre, $genero, $sinopsis, $cant_capitulos, $en_emision, $id_actor);
            //     header("Location: " . DORAMAS);
            // }
            // $id_actor = $params [':ID'];
            // if((!empty($id_actor))&&(!empty($nombre))&&(!empty($edad))&&(!empty($producciones))){
            //     $this->model->EditarActor($_POST['nombre'],$_POST['edad'],$_POST['producciones'], $id_actor);
            // }
            // header("Location: " . ACTORES);
        }
    
    

    public function BorrarDorama($params=null){
        //$this->checkLogIn();
        $id_dorama=$params[':ID'];
        $this->model->BorrarDorama($id_dorama);
        header("Location: " . DORAMAS);
    }
}


?>
