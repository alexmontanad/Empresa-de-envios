<?php
include("../Modelo/usuario.php");
$accion = $_REQUEST['accion'];
switch ($accion) {
    case 'ingresar':
        $ver = new Usuario();
        $user=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
        $ver->validar($user,$pass);
        header("Location: ../Vista/admin_clientes.php");
        exit();
        break;
    case 'cerrar':
        session_start();
        session_destroy();
        header("Location: ../Vista/index.php");
        exit();
        break;
    }

?>