<?php
include("../Modelo/usuario.php");
$ver = new Usuario();
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$ver->validar($user,$pass);
header("Location: ../Vista/admin_clientes.php");
exit();
?>