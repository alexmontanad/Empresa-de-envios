<?php
error_reporting(0);
include("./conexion.php");
   
    $user=new Usuario();
    $user->crear($_REQUEST['nit'],$_REQUEST['nomb'],$_REQUEST['ape'],$_REQUEST['Con'],$_REQUEST['tel'],$_REQUEST['correo']);
?>      