<?php
include('../Modelo/paquete.php');
$paquete = new Paquete;
$paquete->crear($_REQUEST['id'], $_REQUEST['peso'], $_REQUEST['alto'], $_REQUEST['ancho'], $_REQUEST['profundidad'], $_REQUEST['valor'], $_REQUEST['descripcion'],)
?>