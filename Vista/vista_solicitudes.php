<?php
include('../Modelo/solicitud.php');
include('../Modelo/cliente.php');
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
  //crear el objeto de la clase Empleados
  $solicitud=new Solicitud();
  $cliente=new Cliente();
  $destinatario=new Destinatario();
  $reg=$solicitud->ver();
     ?>
     <main class="d-flex flex-nowrap">
    <?php require 'navegacion_adm.php';?>
    <div class="table table-striped">
        <table class="table table-striped table-hover id=" table_id">
            <thead>
                <th>ID</th>
                <TH>ORIGEN</TH>
                <TH>DESTINO</TH>
                <TH>DIRECCION ORIGEN</TH>
                <TH>DIRECCION DESTINO</TH>
                <TH>CLIENTE</TH>
                <TH>ACCION</TH>
                </TR>
            </thead>
            <tbody>
                <?php
        for($i=0;$i<count($reg);$i++){
            $regcli=$cliente->get_cliente_id($reg[$i]['cliente']);
            $regdes=$destinatario->get_destinatario_id($reg[$i]['destinatario']);
       echo "<tr>
       <td>".$reg[$i]['idSolicitud']."</td>
       <td>".$regcli[0]['ciudad']."</td>
       <td>".$regdes[0]['ciudad']."</td>
       <td>".$regcli[0]['direccion']."</td>
       <td>".$regdes[0]['direccion']."</td>
       <td>".$regcli[0]['nombre']." ".$regcli[0]['apellido']."</td>";
       ?>
                <td align='center'>
                    <button class="btn btn-warning"
                        onclick=window.location="../Controladores/envios_controlador.php?accion=crear&paquete=<?php echo $reg[$i]['paquete'];?>&cliente=<?php echo $reg[$i]['cliente'];?>&destinatario=<?php echo $reg[$i]['destinatario'];?>&estado=Recogido">
                        <span class="material-icons">Generar envio</span>
                    </button>
                    <button class="btn btn-danger">
                        <span class="material-icons">Eliminar solicitud</span>
                    </button>
                </td>
                </tr>
                <?php
       }
        ?>
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script src="./js/jquery-3.6.0.min.js"></script>
</body>

</html>