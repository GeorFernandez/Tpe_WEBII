<?php
require_once ('models/doramaModel.php');
require_once ('views/doramaView.php');

class doramaController {

    private $model;
    private $view;

	function __construct(){
        
        $this->model = new doramaModel();
        $this->view = new doramaView();
    }
    public function GetDoramas(){
        $titulo = $this->model->GetDoramas();
        $this->views->DisplayDoramas($titulo);
    }
    public function InsertarDorama(){
        
        $this->model->InsertarDorama($_POST['nombre'],$_POST['genero'],$_POST['sinopsis'],$_POST['cant_capitulos'],$_POST['en_emision'],$_POST['id_actor']);
        header("Location: " . BASE_URL);
    }
    public function EditarDorama($id_dorama,$nombre,$genero, $sinopsis,$cant_capitulos,$en_emision,$id_actor){
        
        $this->model->EditarDorama($id_dorama,$nombre,$genero, $sinopsis,$cant_capitulos,$en_emision,$id_actor);
        header("Location: " . BASE_URL);
    }
    public function BorrarDorama($id_dorama,$nombre,$genero, $sinopsis,$cant_capitulos,$en_emision,$id_actor){
        
        $this->model->BorrarDorama($id_dorama,$nombre,$genero, $sinopsis,$cant_capitulos,$en_emision,$id_actor);
        header("Location: " . BASE_URL);
    }

   
}
?>