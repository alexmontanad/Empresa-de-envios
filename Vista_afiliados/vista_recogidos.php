<?php
session_start();
$varsession = $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
    echo 'usted no tiene autorizacion';
    die();
}
include('../Modelo/envio.php');
include('../Modelo/destinatario.php');
include('../Modelo/camion.php');
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
  $destinatario=new Destinatario();
  $camiones=new Camion();
  $reg=$envio->ver();
  $regcam=$camiones->ver();
     ?>
     <?php require 'navegacion_afiliado.php';?>
     <main class="d-flex flex-nowrap flex-fill">
    
     <form name="form" action="../Controladores/envios_controlador.php" method="post">
    <div class="table table-striped flex-fill">
        <table class="table table-striped table-hover flex-fill id=" table_id">
            <thead>
                <th>ID</th>
                <TH>DESTINO</TH>
                <TH>DIRECCION DESTINO</TH>
                <TH>CAMION</TH>
                <TH>ACCION</TH>
                </TR>
            </thead>
            <tbody>
                <?php
        for($i=0;$i<count($reg);$i++){
            if($reg[$i]['camion']==NULL){                
            $regdes=$destinatario->get_destinatario_id($reg[$i]['destinatario']);
       echo "
       <input type='text' hidden name='id' value='".$reg[$i]['idEnvio']."'>
       <input type='text' hidden name='estado' value='Reparto'>
       <tr>
       <td>".$reg[$i]['idEnvio']."</td>
       <td>".$regdes[0]['ciudad']."</td>
       <td>".$regdes[0]['direccion']."</td>
       <td><select name='camion'>
       <option value='NULL'>NULL</option>}";
       for($j=0;$j<count($regcam);$j++){
        echo "<option value=".$regcam[$j]['idCamion'].">".$regcam[$j]['placa']."</option>";
       }    
     "</select></td>";
       ?>
                <td align='center'>
                    <input type="submit" class="btn btn-warning" name="accion" value="Asignar camion">
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