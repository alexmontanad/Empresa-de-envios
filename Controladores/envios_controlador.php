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
    case 'Asignar camion':
        $envio = new envio();
        $idcamion = $_REQUEST['camion'];
        $envio->modificarestado($_REQUEST['id'], $idcamion, $_REQUEST['estado']);
        header("Location: ../Vista_afiliados/vista_recogidos.php");
        exit();
        break;
    case 'modificar':

        break;
}
?>