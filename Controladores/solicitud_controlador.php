<?php
include_once('../Modelo/solicitud.php');
include_once('../Modelo/destinatario.php');
include_once('../Modelo/paquete.php');
include_once('../Modelo/usuario.php');
$accion = $_REQUEST['accion'];
switch ($accion) {
    case 'Generar solicitud':
        $user= new Usuario();
        $cliente = $user->UsuarioAsociado('clientes',$_REQUEST['idcliente'], 'NIT');
        $destinatario = new Destinatario();
        $destinatario = $destinatario->crear_getID($_REQUEST['nombredes'],$_REQUEST['apedes'],$_REQUEST['ciudad'],$_REQUEST['direccion']);
        $paquete = new Paquete();     
        $paquete=$paquete->crear_getID($_REQUEST['peso'],$_REQUEST['alto'],$_REQUEST['ancho'],$_REQUEST['profundidad'],$_REQUEST['valor'],$_REQUEST['descripcion']);
        $solicitud = new Solicitud();
        $solicitud->crear($cliente,$paquete,$destinatario);
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