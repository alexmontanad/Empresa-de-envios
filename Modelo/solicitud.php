<?php

require_once('../Config/conexion.php');

class Solicitud
{
    private $solicitud;
    public function __construct()
    {
        $this->solicitud=array();
    }

    public function crear($cliente, $paquete, $destinatario)
    {
        $sql="insert into solicitud values(NULL,$cliente, $paquete, $destinatario)";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
    }
    public function eliminar($id)
    {
        $sql="delete from solicitud where idSolicitud=$id";
        $res=mysqli_query(Conexion::conectar(), $sql);
    }

    public function ver()
    {
        $sql="select * from solicitud";
        $res=mysqli_query(Conexion::conectar(), $sql);
        //recorrer la tabla empleados y almacenarla en el vector
        while ($row=mysqli_fetch_array($res)) {
            $this->solicitud[]=$row;
        }
        return $this->solicitud;
    }

    public function modificar($id, $n, $a, $e, $t)
    {
        $sql="update empleados set nomb_e='$n',apel_e='$a',email_e='$e',tel_e='$t' where id_e=$id";
        $res=mysqli_query(Conexion::conectar(), $sql);
    }
    public function get_solicitud_id($id)
    {
        $sql="select * from clientes where NIT=$id";
        $res=mysqli_query(Conexion::conectar(), $sql);
        if ($reg=mysqli_fetch_assoc($res)) {
            $this->cliente[]=$reg;
        }
        return $this->cliente;
    }
}
