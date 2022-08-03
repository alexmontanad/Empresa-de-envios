<?php
include('./conexion.php');

class Usuario{
    private $usuario;
    public function __construct(){
        $this->usuario=array();
    }

    public function crear($usuario,$contraseña,$correo,$permisos){
        $sql="insert into cliente values(NULL,'$usuario','$contraseña','$correo',$permisos)";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
        echo "El CLIENTE SE REGISTRO CORRECTAMENTE <a href='vista_registrocliente.php'>VOLVER</a>";
    }
}
?>