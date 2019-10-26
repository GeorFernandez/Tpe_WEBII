<?php
require_once("./Models/ActoresModel.php");
require_once("./api/ApiController.php");
require_once("./api/JSONView.php");

class ActoresApiController extends ApiController{
  
    public function getActores($params = null) {
        $actores = $this->model->getActores();
        $titulo = $actores->titulo;
        $this->view->response($actores, 200);
    }

    /**
     * Obtiene una tarea dado un ID
     * 
     * $params arreglo asociativo con los parámetros del recurso
     */
    public function getActor($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $actor = $this->model->GetActor($id);
        
        if ($tarea) {
            $this->view->response($actor, 200);   
        } else {
            $this->view->response("No existe el actor con el id={$id}", 404);
        }
    }

    // TareasApiController.php
    public function deleteActor($params = []) {
        $actor_id = $params[':ID'];
        $actor = $this->model->GetActor($actor_id);

        if ($actor) {
            $this->model->BorrarActor($actor_id);
            $this->view->response("Actor id=$actor_id eliminado con éxito", 200);
        }
        else 
            $this->view->response("Actor id=$actor_id not found", 404);
    }

    // TareaApiController.php
   public function addActor($params = []) {     
        $body = $this->getData();

        // inserta la tarea
        $nombre = $body->nombre;
        $edad = $body->edad;
        $producciones = $body->producciones;
        $actor = $this->model->InsertarActor($nombre,$edad,$producciones);
    }

    // TaskApiController.php
    public function updateActor($params = []) {
        $actor_id = $params[':ID'];
        $actor = $this->model->GetActor($actor_id);

        if ($actor) {
            $body = $this->getData();
            $nombre = $body->nombre;
            $edad = $body->edad;
            $producciones = $body->producciones;
            $actor = $this->model->ActualizarActor($actor_id, $nombre, $edad, $producciones);
            $this->view->response("Actor id=$actor_id actualizado con éxito", 200);
        }
        else 
            $this->view->response("Actor id=$actor_id not found", 404);
    }


}
