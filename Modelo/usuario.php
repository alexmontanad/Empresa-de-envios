<?php

require_once('../Config/conexion.php');

class Usuario
{
    private $usuario;
    public function __construct()
    {
        $this->usuario=array();
    }

    public function validar($user, $pass)
    {
        $sql="select * from users where usuario='$user'";
        $res=mysqli_query(Conexion::conectar(), $sql);
        if ($row=mysqli_fetch_array($res)) {
            $sql="select * from users where usuario='$user' and password='$pass'";
            $res=mysqli_query(Conexion::conectar(), $sql);
            if ($row=mysqli_fetch_array($res)) {
                //creamos la variable de sesion
                session_start();
                $_SESSION['usuario']=$row['idUser'];
                $_SESSION['permisos']=$row['permisos'];
                $permisos = $_SESSION['permisos'];
            }

            return $permisos;
        }
    }

    public function UsuarioAsociado($tabla, $idUser, $name)
    {
        $sql="select * from $tabla where credenciales=$idUser";
        $res=mysqli_query(Conexion::conectar(), $sql);
        if ($reg=mysqli_fetch_assoc($res)) {
            $id=$reg[$name];
        }
        return $id;
    }

    public function crear($usuario, $password, $correo, $permisos)
    {
        $sql="insert into users values(NULL,'$usuario','$password','$correo',$permisos)";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
    }

    public function crear_getID($usuario, $password, $correo, $permisos)
    {
        $sql="insert into users values(NULL,'$usuario','$password','$correo',$permisos)";
        $res=mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta $sql".mysqli_error($link));
        $sql="SELECT MAX(idUser) AS id FROM users";
        $res=mysqli_query(Conexion::conectar(), $sql);
        if ($reg=mysqli_fetch_assoc($res)) {
            $id=$reg['id'];
        }
        return $id;
    }

    public function get_user_id($id)
    {
        $sql="select * from users where idUser=$id";
        $res=mysqli_query(Conexion::conectar(), $sql);
        if ($reg=mysqli_fetch_assoc($res)) {
            $this->usuario[]=$reg;
        }
        return $this->usuario;
    }

    public function modificar($id, $u, $p, $c)
    {
        $sql="update users set usuario='$u',password='$p',correo='$c' where idUser=$id";
        $res=mysqli_query(Conexion::conectar(), $sql);
    }
    public function get_cliente_id($id)
    {
        $sql="select * from clientes where NIT=$id";
        $res=mysqli_query(Conexion::conectar(), $sql);
        if ($reg=mysqli_fetch_assoc($res)) {
            $this->cliente[]=$reg;
        }
        return $this->cliente;
    }

    public function getID($usr)
    {
        $sql="select * from users where usuario='$usr'";
        $res=mysqli_query(Conexion::conectar(), $sql);
        if ($reg=mysqli_fetch_assoc($res)) {
            $id=$reg['idUser'];
        }
        return $id;
    }
}
