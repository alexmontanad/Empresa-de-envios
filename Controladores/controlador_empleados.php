<?php
include_once('../Modelo/afiliado.php');
include_once('../Modelo/conductor.php');
include_once('../Modelo/usuario.php');
$accion = $_REQUEST['accion'];
switch ($accion) {
    case 'Crear afiliado':
        $afiliado = new Afiliado();
        $usuario = new usuario();
        $credenciales = $usuario->crear_getID($_REQUEST['usuario'],$_REQUEST['contraseña'],$_REQUEST['correo'],2);
        $afiliado->crear($_REQUEST['cedula'],$_REQUEST['nombre'],$_REQUEST['apellido'],$credenciales);
        header("Location: ../Vista_administrador/admin_empleados.php");
        exit();
        break;
    case 'Crear conductor':
        $conductor = new Conductor();
        $usuario = new usuario();
        $credenciales = $usuario->crear_getID($_REQUEST['usuario'],$_REQUEST['contraseña'],$_REQUEST['correo'],2);
        $conductor->crear($_REQUEST['cedula'],$_REQUEST['nombre'],$_REQUEST['apellido'],$credenciales);
        header("Location: ../Vista_administrador/admin_empleados.php");
        exit();
        break;
    case 'modificar':
        $cliente = new cliente();
        $usuario = new usuario();
        $cliente->modificar($_REQUEST['cedula'],$_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['ciudad'],$_REQUEST['direccion'],$_REQUEST['celular']);
        $usuario->modificar($_REQUEST['idusr'],$_REQUEST['usuario'],$_REQUEST['password'],$_REQUEST['correo']);
        header("Location: ../Vista/admin_clientes.php");
        exit();
        break;
}
?>