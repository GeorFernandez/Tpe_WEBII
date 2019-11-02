<?php

class ActoresModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=doramas;charset=utf8', 'root', '');
    }

	public function GetActores(){
        $sentencia = $this->db->prepare( "select * from actor order by nombre asc");
        $sentencia->execute();
        $actores = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $actores;
    }
    
    public function GetActor($id_actor){
        $sentencia = $this->db->prepare( "select * from actor where id = ?");
        $sentencia->execute([$id_actor]);
        $actor = $sentencia->fetch(PDO::FETCH_OBJ);
        return $actor;
    }

    public function InsertarActor($nombre,$edad,$producciones){
        $sentencia = $this->db->prepare("INSERT INTO actor(nombre, edad,producciones) VALUES(?,?,?)");
        $sentencia->execute(array($nombre,$edad,$producciones));
    }
    public function EditarActor($id, $nombre, $edad, $producciones){
        $sentencia =  $this->db->prepare("UPDATE actor SET nombre=?, edad=?, producciones=? WHERE id=?");
        $sentencia->execute(array($nombre, $edad, $producciones, $id));
    }

    public function BorrarActor($id_actor){
        $sentencia = $this->db->prepare('DELETE FROM actor WHERE id_actor=?');
        $sentencia->execute([$id_actor]);
    }
}

?>
