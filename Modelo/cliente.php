<?php
require_once('./conexion.php');

class Cliente{
    private $cliente;
    public function __construct(){
        $this->cliente=array();
    }

    public function crear($NIT,$nombre,$apellido,$departamento,$ciudad,$direccion,$celular,$credenciales){
        $sql="insert into clientes values($NIT,'$nombre','$apellido','$departamento','$ciudad','$direccion','$celular',$credenciales)";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
        echo "El CLIENTE SE REGISTRO CORRECTAMENTE <a href='vista_registrocliente.php'>VOLVER</a>";
    }
}
?>