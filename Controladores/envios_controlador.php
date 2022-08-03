<?php
include_once('../Modelo/solicitud.php');
include_once('../Modelo/envio.php');
$accion = $_REQUEST['accion'];
switch ($accion) {
    case 'crear':
        $envio = new envio();
        $envio->crear($_REQUEST['paquete'], $_REQUEST['cliente'], $_REQUEST['destinatario'], $_REQUEST['estado']);
        break;
    case 'eliminar':
        $cliente = new Cliente();
        $cliente->eliminar($_GET['id']);
        break;
    case 'modificarestado':
        $envio = new envio();
        $idcamion = $_REQUEST['camion'];
        $envio->modificarestado($_REQUEST['id'], $idcamion, $_REQUEST['estado']);
        break;
    case 'modificar':

        break;
}
?>