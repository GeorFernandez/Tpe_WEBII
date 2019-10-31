<?php

// class LoginModel {

//     private $db;

//     function __construct(){
//         $this->db = new PDO('mysql:host=localhost;'.'dbname=doramas;charset=utf8', 'root', '');
//     }

//     public function GetUsuario($email){
//         $sentencia = $this->db->prepare( "SELECT * FROM usuarios WHERE email = ?");
//         $sentencia->execute(array($email));
//         return $sentencia->fetch(PDO::FETCH_OBJ);
//     }
//     public function InsertarUsuario($email,$password){
//         $sentencia = $this->db->prepare("INSERT INTO usuarios (email, password) VALUES(?,?)");
//         $sentencia->execute(array($email,$password));
//     }
// }
class LoginModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=doramas;charset=utf8', 'root', '');
    }

    public function GetPassword($user){
        $sentencia = $this->db->prepare( "SELECT * FROM usuarios WHERE email = ?");
        $sentencia->execute(array($user));
        
        $password = $sentencia->fetch(PDO::FETCH_OBJ);
        
        return $password;
    }
}



?>
