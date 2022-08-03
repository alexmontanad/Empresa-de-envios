<?php
require_once('../Config/conexion.php');

class Usuario{
    private $usuario;
    public function __construct(){
        $this->usuario=array();
    }

    public function crear($usuario,$contraseña,$correo,$permisos){
        $sql="insert into users values(NULL,'$usuario','$contraseña','$correo',$permisos)";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
    }

    public function getID($usr){
        $sql="select * from users where usuario='$usr'";
        $res=mysqli_query(Conexion::conectar(),$sql);
        if($reg=mysqli_fetch_assoc($res)){
          $id=$reg['idUser'];
        }
     return $id;
       }
}
?>