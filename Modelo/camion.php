<?php

require_once('../Config/conexion.php');

class Camion
{
    private $camion;
    public function __construct()
    {
        $this->camion=array();
    }

    public function crear($placa)
    {
        $sql="insert into camion values(NULL,'$placa',NULL,1,1)";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
    }
    public function eliminar($id)
    {
        $sql="delete from camion where id_e=$id";
        $res=mysqli_query(Conexion::conectar(), $sql);
    }

    public function ver()
    {
        $sql="select * from camion";
        $res=mysqli_query(Conexion::conectar(), $sql);
        //recorrer la tabla empleados y almacenarla en el vector
        while ($row=mysqli_fetch_array($res)) {
            $this->camion[]=$row;
        }
        return $this->camion;
    }

    public function modificar($id, $n, $a, $e, $t)
    {
        $sql="update camion set nomb_e='$n',apel_e='$a',email_e='$e',tel_e='$t' where id_e=$id";
        $res=mysqli_query(Conexion::conectar(), $sql);
    }
    public function modificarResponsable($id, $r)
    {
        $sql="update camion set encargado=".$r." where idCamion=".$id;
        $res=mysqli_query(Conexion::conectar(), $sql);
    }
    public function get_camion_id($id)
    {
        $sql="select * from camion where idCamion=$id";
        $res=mysqli_query(Conexion::conectar(), $sql);
        if ($reg=mysqli_fetch_assoc($res)) {
            $this->camion[]=$reg;
        }
        return $this->camion;
    }
}
