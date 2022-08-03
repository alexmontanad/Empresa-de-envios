<?php
require_once('../Config/conexion.php');

class Conductor{
    private $cliente;
    public function __construct(){
        $this->cliente=array();
    }

    public function crear($NIT,$nombre,$apellido,$departamento,$ciudad,$direccion,$celular,$credenciales){
        $sql="insert into clientes values($NIT,'$nombre','$apellido','$departamento','$ciudad','$direccion','$celular',$credenciales)";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
    }
    public function eliminar($id){
        $sql="delete from empleados where id_e=$id";
        $res=mysqli_query(Conexion::conectar(),$sql);
    }

    public function ver(){
        $sql="select * from empleados";
        $res=mysqli_query(Conexion::conectar(),$sql);
        //recorrer la tabla empleados y almacenarla en el vector
        while($row=mysqli_fetch_array($res)){
          $this->emple[]=$row;
        }
        return $this->emple;
       }

       public function modificar($id,$n,$a,$e,$t){
        $sql="update empleados set nomb_e='$n',apel_e='$a',email_e='$e',tel_e='$t' where id_e=$id";
        $res=mysqli_query(Conexion::conectar(),$sql);
       }
       public function get_emple_id($id){
        $sql="select * from empleados where id_e=$id";
        $res=mysqli_query(Conexion::conectar(),$sql);
        if($reg=mysqli_fetch_assoc($res)){
          $this->emple[]=$reg;
        }
     return $this->emple;
       }

       
}
?>