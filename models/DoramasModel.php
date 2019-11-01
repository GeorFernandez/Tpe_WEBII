<?php

class DoramasModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=doramas;charset=utf8', 'root', '');
    }

	public function GetDoramas(){
        $sentencia = $this->db->prepare( "select * from dorama");
        $sentencia->execute();
        $doramas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $doramas;
    }

    public function GetDoramasConActores(){
        $sentencia = $this->db->prepare( "select * from dorama d, actor a where d.id_actor = a.id_actor");
        $sentencia->execute();
        $doramas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $doramas;
    }
    
     public function GetDorama($id_dorama){
         $sentencia = $this->db->prepare( "select * from dorama where id = ?");
         $sentencia->execute(array($id_dorama));
         $dorama = $sentencia->fetch(PDO::FETCH_OBJ);
         echo $dorama;
        return $dorama;

    }

    public function InsertarDorama($nombre,$genero,$sinopsis,$cant_capitulos,$en_emision,$id_actor){
        $sentencia = $this->db->prepare("INSERT INTO dorama(nombre, genero, sinopsis, cant_capitulos, en_emision, id_actor) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($nombre,$genero,$sinopsis,$cant_capitulos,$en_emision,$id_actor));
    }
    public function EditarDorama($id_dorama, $nombre,$genero,$sinopsis,$cant_capitulos,$en_emision,$id_actor){
        $sentencia =  $this->db->prepare("UPDATE dorama SET nombre=?, genero=?, sinopsis=?, cant_capitulos=?, en_emision=?, id_actor=? WHERE id_dorama=?");
        $sentencia->execute(array($nombre,$genero,$sinopsis,$cant_capitulos,$en_emision,$id_actor,$id_dorama));
    }

    public function BorrarDorama($id_dorama){
        $sentencia = $this->db->prepare("DELETE FROM dorama WHERE id_dorama=?");
        $sentencia->execute(array($id_dorama));
    }
}

?>
