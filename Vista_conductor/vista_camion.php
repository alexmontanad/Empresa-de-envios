<?php
include('../Modelo/usuario.php');
$user =new Usuario();
session_start();
$varsession = $_SESSION['usuario'];
$_SESSION['ID'] = $user->UsuarioAsociado('conductor', $_SESSION['usuario'], 'idConductor');
if ($varsession == null || $varsession = '') {
    echo 'usted no tiene autorizacion';
    die();
}
include('../Modelo/conductor.php');
include('../Modelo/envio.php');
include('../Modelo/destinatario.php');
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
-->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" language="Javascript" src="../JavaScript/funciones.js"></script>
    <title>GESTION DE EMPLEADOS</title>
</head>

<body onload="limpiar();">
    <!--fin DIV Prin-->
    <?php

$envio=new Envio();
$conductores=new Conductor();
$reg=$envio->ver();
$conductor = $conductores->get_conductor_id($_SESSION['ID']);
?>
    <?php require 'navegacion_conductor.php';?>
    <main class="d-flex flex-nowrap flex-fill">

        <form name="form" action="../Controladores/conductor_controlador.php" method="post">
            <div class="table table-striped flex-fill">
                <table class="table table-striped table-hover flex-fill id=">
                    <thead>
                        <th>ID DE RASTREO</th>
                        <th>ESTADO</th>
                        <TH>CIUDAD DESTINO</TH>
                        <TH>DIRECCION DESTINO</TH>
                        <TH>RECIBE</TH>
                        <TH>CELULAR</TH>
                        <TH>CAMBIAR ESTADO</TH>
                        <TH>ACCION</TH>
                        </TR>
                    </thead>
                    <tbody>
                        <?php
                            for ($i=0;$i<count($reg);$i++) {                           
                                if ($reg[$i]['camion']==$conductor[0]['camion']) {
                                    $destinatario=new Destinatario();
                                    $regdes=$destinatario->get_destinatario_id($reg[$i]['destinatario']);
                                    echo "<tr><input type='text' hidden name='id' value=".$reg[$i]['idEnvio']."><input type='text' hidden name='camion' value=".$conductor[0]['camion'].">";
                                    echo "<td>".$reg[$i]['idEnvio']."</td>";
                                    echo "<td>".$reg[$i]['estado']."</td>";
                                    echo "<td>".$regdes[0]['ciudad']."</td>";
                                    echo "<td>".$regdes[0]['direccion']."</td>";
                                    echo "<td>".$regdes[0]['nombre']." ".$regdes[0]['apellido']."</td>";
                                    echo "<td>".$regdes[0]['celular']."</td>"; ?>
                                 <td>
                                 <select name="estado" id="estado">
                                    <option value="Reparto">Reparto</option>
                                    <option value="En camino">En camino</option>
                                    <option value="Entregado">Entregado</option>
                                 </select>
                                </td>
                                <td align='center'>
                                 <input type="submit" class="btn btn-warning" name="accion" value="Actualizar estado">
                                 </td>
                                    </tr>
                                    
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </form>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="./js/jquery-3.6.0.min.js"></script>
</body>

</html>