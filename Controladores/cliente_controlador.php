<?php
include_once('../Modelo/cliente.php');
include_once('../Modelo/usuario.php');
$accion = $_REQUEST['accion'];
switch ($accion) {
    case 'crear':
        $cliente = new cliente();
        $usuario = new usuario();
        $usuario = $usuario->crear_getID($_REQUEST['usuario'],$_REQUEST['contraseña'],$_REQUEST['correo'],4);
        $cliente->crear($_REQUEST['cedula'], $_REQUEST['nombre'], $_REQUEST['apellido'], $_REQUEST['ciudad'], $_REQUEST['direccion'], $_REQUEST['celular'], $usuario);
        break;
    case 'eliminar':
        $cliente = new Cliente();
        $cliente->eliminar($_GET['id']);
        break;
    case 'modificar':
        $cliente = new cliente();
        $usuario = new usuario();
        $cliente->modificar($_REQUEST['cedula'],$_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['ciudad'],$_REQUEST['direccion'],$_REQUEST['celular']);
        $usuario->modificar($_REQUEST['idusr'],$_REQUEST['usuario'],$_REQUEST['password'],$_REQUEST['correo']);
        header("Location: ../Vista_administrador/admin_clientes.php");
        exit();
        break;
}
?>