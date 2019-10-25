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
    }
?>