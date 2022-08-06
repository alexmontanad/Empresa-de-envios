<?php
include("../Modelo/usuario.php");
$accion = $_REQUEST['accion'];
switch ($accion) {
    case 'ingresar':
        $ver = new Usuario();
        $user=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
        $permisos=$ver->validar($user,$pass);
        switch($permisos){
            case 1:
                header("Location: ../Vista_administrador/admin_empleados.php");
                exit();
            break;
            case 2:
                header("Location: ../Vista_afiliados/vista_solicitudes.php");
                exit();
            break;
            case 3:
                header("Location: ../Vista_conductor/vista_solicitudes.php");
                exit();
            break; 
            case 4:
                header("Location: ../Vista/index.php");
                exit();
            break;
        }
        break;
    case 'cerrar':
        session_start();
        session_destroy();
        header("Location: ../Vista/index.php");
        exit();
        break;
    }

?>