<?php
require_once "./models/actorModel.php";
require_once "./views/actorView.php";

    class actorController {

        private $model;
        private $view;

        function __construct(){
            
            $this->model = new actorModel();
            $this->view = new actorView();
        }
        public function GetActores(){
            $actores = $this->model->GetActores();
            $this->views->DisplayActores($actores);
        }
        public function InsertarActor(){
            
            $this->model->InsertarActor($_POST['nombre'],$_POST['edad'],$_POST['producciones']);
            header("Location: " . BASE_URL);
        }
        public function EditarActor($id_actor,$nombre,$edad,$producciones){
            
            $this->model->EditarActor($id_actor,$nombre,$edad,$producciones);
            header("Location: " . BASE_URL);
        }
        public function BorrarActor($id_actor,$nombre,$edad,$producciones){
            
            $this->model->BorrarActor($id_actor,$nombre,$edad,$producciones);
            header("Location: " . BASE_URL);
        }
    
    }
?>
