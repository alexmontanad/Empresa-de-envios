<?php
include_once('../Config/conexion.php');

class Paquete{
    private $paquete;
    public function __construct(){
        $this->paquete=array();
    }

    public function crear($peso,$alto,$ancho,$profundidad,$precio,$descripcion){
        $sql="insert into paquete values(NULL,$peso,$alto,$ancho,$profundidad,$precio,'$descripcion')";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
    }

    public function crear_getID($peso,$alto,$ancho,$profundidad,$precio,$descripcion){
      $sql="insert into paquete values(NULL,$peso,$alto,$ancho,$profundidad,$precio,'$descripcion')";
      $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
      $sql="SELECT MAX(idpaquete) AS id FROM paquete";
      $res=mysqli_query(Conexion::conectar(),$sql);
      if($reg=mysqli_fetch_assoc($res)){
        $id=$reg['id'];
      }
        return $id;
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
       public function get_paquete_id($id){
        $sql="select * from paquete where idpaquete=$id";
        $res=mysqli_query(Conexion::conectar(),$sql);
        if($reg=mysqli_fetch_assoc($res)){
          $this->paquete[]=$reg;
        }
     return $this->paquete;
       }
}
?>