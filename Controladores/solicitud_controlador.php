<?php
include_once('../Modelo/solicitud.php');
$accion = $_REQUEST['accion'];
switch ($accion) {
    case 'crear':
        $cliente = new cliente();
        $usuario = new usuario();
        $usuario->crear($_REQUEST['nombre'],$_REQUEST['contraseña'],$_REQUEST['correo'],"4");
        $user = $usuario->getID($_REQUEST['nombre']);
        $cliente->crear($_REQUEST['cedula'], $_REQUEST['nombre'], $_REQUEST['apellido'], $_REQUEST['departamento'], $_REQUEST['ciudad'], $_REQUEST['direccion'], $_REQUEST['celular'], $user);
        break;
    case 'eliminar':
        $cliente = new Cliente();
        $cliente->eliminar($_GET['id']);
        break;
    case 'modificar':

        break;
    case 'modificar':

        break;
}
?>