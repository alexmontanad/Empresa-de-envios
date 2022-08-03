<?php
include('./cliente.php');
$paquete = new cliente();
$paquete->crear($_REQUEST['id'], $_REQUEST['peso'], $_REQUEST['alto'], $_REQUEST['ancho'], $_REQUEST['profundidad'], $_REQUEST['valor'], $_REQUEST['descripcion'],)
?>