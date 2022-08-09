<?php
include_once('../Modelo/solicitud.php');
include_once('../Modelo/envio.php');
$accion = $_REQUEST['accion'];
switch ($accion) {
    case 'recogido':
        $solicitud = new Solicitud();
        $envio = new envio();
        $envio->crear($_REQUEST['paquete'], $_REQUEST['cliente'], $_REQUEST['destinatario'], $_REQUEST['estado']);
        $solicitud->eliminar($_REQUEST['id']);
        header("Location: ../Vista_afiliados/vista_solicitudes.php");
        exit();
        break;
    case 'eliminar':
        $cliente = new Cliente();
        $cliente->eliminar($_GET['id']);
        break;
    case 'Actualizar estado':
        $envio = new envio();
        $envio->modificarestado($_REQUEST['id'], $_REQUEST['camion'], $_REQUEST['estado']);
        header("Location: ../Vista_conductor/vista_camion.php");
        exit();
        break;
    case 'modificar':

        break;
}
?>