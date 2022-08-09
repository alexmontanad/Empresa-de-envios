<?php
include_once('../Modelo/camion.php');
include_once('../Modelo/conductor.php');
$accion = $_REQUEST['accion'];
switch ($accion) {
    case 'crear':
        $camion = new Camion();
        $camion->crear($_REQUEST['placa']);
        header("Location: ../Vista_administrador/admin_camiones.php");
        exit();
        break;
    case 'eliminar':
        $cliente = new Cliente();
        $cliente->eliminar($_GET['id']);
        break;
    case 'modificar':
        if($_REQUEST['encargado'] != 'cancelar'){
        $camion = new Camion();
        $conductor = new Conductor();
        $camion->modificarResponsable($_REQUEST['idcam'],$_REQUEST['encargado']);
            if($_REQUEST['encargado']!='NULL'){
                $conductor->modificarCamion($_REQUEST['encargado'],$_REQUEST['idcam']);
            }
            if($_REQUEST['encargado2']!='NULL'){
                $conductor->modificarCamion($_REQUEST['encargado2'],'NULL');
            }
        }
        header("Location: ../Vista_administrador/admin_camiones.php");
        exit();
        break;
}
?>