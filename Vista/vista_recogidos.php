<?php
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script type="text/javascript" language="Javascript" src="../JavaScript/funciones.js"></script>
    <title>GESTION DE EMPLEADOS</title>
</head>

<body onload="limpiar();">
    <!--fin DIV Prin-->
    <?php
  //crear el objeto de la clase Empleados
  $envio=new Envio();
  $destinatario=new Destinatario();
  $camiones=new Camion();
  $reg=$envio->ver();
  $regcam=$camiones->ver();
     ?>
     <form name="form" action="../Controladores/envios_controlador.php" method="post">
    <div class="table table-striped">
        <table class="table table-striped table-hover id=" table_id">
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
       <input type='text' hidden name='id' value='".$reg[$i]['idEnvio']."'></label>
       <input type='text' hidden name='estado' value='Reparto'></label>
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
                    <input type="submit" class="btn btn-warning" name="accion" value="modificarestado">
                    <!--<button class="btn btn-danger"
                        >
                        <span class="material-icons">Eliminar solicitud</span>
                    </button>-->
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>