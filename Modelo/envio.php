<?php
class Envio{
    private $envio;
    public function __construct(){
        $this->envio=array();
    }


    public function crear($paquete,$cliente,$destinatario,$estado){
        $sql="insert into envios values(NULL,'$paquete','$cliente', NULL ,'$destinatario','$estado')";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
    }
    public function eliminar($id){
        $sql="delete from empleados where id_e=$id";
        $res=mysqli_query(Conexion::conectar(),$sql);
    }

    public function ver(){
        $sql="select * from envios";
        $res=mysqli_query(Conexion::conectar(),$sql);
        //recorrer la tabla empleados y almacenarla en el vector
        while($row=mysqli_fetch_array($res)){
          $this->envio[]=$row;
        }
        return $this->envio;
       }

       public function modificarestado($id,$c,$e){
        echo "codigo".$id;
        $sql="update envios set camion=$c,estado='$e' where idEnvio=$id";
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

    public function preciototal($paquetes){
        
    }
}
?>