<?php
include('../Config/conexion.php');

class Paquete{
    private $paquete;
    public function __construct(){
        $this->paquete=array();
    }

    public function crear($id,$peso,$alto,$ancho,$profundidad,$precio,$descripcion){
        $sql="insert into paquete values($id,$peso,$alto,$ancho,$profundidad,$precio,'$descripcion')";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
        echo "El EMPLEADO SE REGISTRO CORRECTAMENTE <a href='vista_paquete.php'>VOLVER</a>";
    }
}
?>