<?php
require_once('../Config/conexion.php');

class Cliente{
    private $cliente;
    public function __construct(){
        $this->cliente=array();
    }

    public function crear($NIT,$nombre,$apellido,$departamento,$ciudad,$direccion,$celular,$credenciales){
        $sql="insert into clientes values($NIT,'$nombre','$apellido','$departamento','$ciudad','$direccion','$celular',$credenciales)";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
    }
    public function eliminar($id){
        $sql="delete from clientes where NIT=$id";
        $res=mysqli_query(Conexion::conectar(),$sql);
    }

    public function ver(){
        $sql="select * from clientes";
        $res=mysqli_query(Conexion::conectar(),$sql);
        //recorrer la tabla empleados y almacenarla en el vector
        while($row=mysqli_fetch_array($res)){
          $this->cliente[]=$row;
        }
        return $this->cliente;
       }

       public function modificar($id,$n,$a,$dep,$cdad,$dir,$cel){
        $sql="update clientes set nombre='$n',apellido='$a',departamento='$dep',ciudad='$cdad', direccion='$dir', celular='$cel' where NIT=$id";
        $res=mysqli_query(Conexion::conectar(),$sql);
       }
       public function get_cliente_id($id){
        $sql="select * from clientes where NIT=$id";
        $res=mysqli_query(Conexion::conectar(),$sql);
        if($reg=mysqli_fetch_assoc($res)){
          $this->cliente[]=$reg;
        }
     return $this->cliente;
       }

       
}
?>