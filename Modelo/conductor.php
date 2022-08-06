<?php
require_once('../Config/conexion.php');

class Conductor{
    private $conductor;
    public function __construct(){
        $this->conductor=array();
    }

    public function crear($NIT,$nombre,$apellido,$credenciales){
        $sql="insert into conductor values(NULL,'$nombre','$apellido','$NIT',NULL,$credenciales)";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
    }
    public function eliminar($id){
        $sql="delete from empleados where id_e=$id";
        $res=mysqli_query(Conexion::conectar(),$sql);
    }

    public function ver(){
      $sql="select * from conductor";
      $res=mysqli_query(Conexion::conectar(),$sql);
      while($row=mysqli_fetch_array($res)){
        $this->conductor[]=$row;
      }
      return $this->conductor;
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