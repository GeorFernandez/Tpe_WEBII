<?php
    require_once ('./views/indexView.php');

    class indexController {

        private $view;
        private $titulo= 'OH! My Dorama';
        function __construct(){
            $this->view = new indexView();
        }
        public function DisplayIndex(){
             $this->view->DisplayIndex($this->titulo);
        }
        // public function InsertarActor(){
            
        //     $this->model->InsertarActor($_POST['nombre'],$_POST['edad'],$_POST['producciones']);
        //     header("Location: " . BASE_URL);
        // }
        // public function EditarActor($id_actor,$nombre,$edad,$producciones){
            
        //     $this->model->EditarActor($id_actor,$nombre,$edad,$producciones);
        //     header("Location: " . BASE_URL);
        // }
        // public function BorrarActor($id_actor,$nombre,$edad,$producciones){
            
        //     $this->model->BorrarActor($id_actor,$nombre,$edad,$producciones);
        //     header("Location: " . BASE_URL);
        // }
    
    }
?>