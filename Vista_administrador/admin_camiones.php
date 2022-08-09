<?php
session_start();
$varsession = $_SESSION['usuario'];
if ($varsession == null || $varsession = '') {
    echo 'usted no tiene autorizacion';
    die();
}
include('../Modelo/camion.php');
include('../Modelo/conductor.php');
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
    <title>GESTION DE CAMIONES</title>
</head>

<body onload="limpiar();">
    <main class="d-flex flex-nowrap">
        <?php require 'navegacion_adm.php';?>

        <div class="conatiner">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="text-white text-center">GESTION DE CAMIONES</h3>
                </div>
            </div>
            <div class="card-body">
                <form name="form" action="../Controladores/controlador_camion.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="id">PLACA</label>
                            <input type="text" name="placa" class="form-control" value=""
                                placeholder="DIGITE LA PLACA">
                        </div>
                        <br><br><br><br>
                        <div class="col-md-8">
                            <input type="submit" name="accion" value="crear" class="btn btn-primary mb-3"
                                onclick="validar()">
                        </div>
                        <div class="col-md-4">
                            <input type="reset" value="LIMPIAR" class="btn btn-danger mb-3">
                        </div>
                </form>
            </div>
        </div>

        <!--fin DIV Prin-->
        <?php
  //crear el objeto de la clase Empleados
  $camion=new Camion();
$reg=$camion->ver();
?>
        <div class="table table-striped">
            <table class="table table-striped table-hover id=" table_id">
                <thead>
                    <th>ID</th>
                    <TH>PLACA</TH>
                    <TH>ENCARGADO</TH>
                    <TH>ACCION</TH>
                    </TR>
                </thead>
                <tbody>
                    <?php
   for ($i=0;$i<count($reg);$i++) {
       $encargado=new Conductor();
       if($reg[$i]['encargado'] == NULL || $reg[$i]['encargado'] == ''){
        $responsable = $reg[$i]['encargado'];
       }else{
        $responsable=$encargado->get_conductor_id($reg[$i]['encargado']);
        $responsable = $responsable[0]['nombre'];
       }
       echo "<tr>
       <td>".$reg[$i]['idCamion']."</td>
       <td>".$reg[$i]['placa']."</td>
       <td>".$responsable."</td>"; ?>
                    <td align='center'>
                        <button class="btn btn-warning"
                            onclick=window.location="./admin_camionesEDIT.php?id=<?php echo $reg[$i]['idCamion']; ?>">Editar</button>
                        <button class="btn btn-danger" name="eliminar"
                            onclick=window.location="../Controladores/cliente_controlador.php?accion=eliminar&id=<?php echo $reg[$i]['idCamion']; ?>">Eliminar</button>
                    </td>
                    </tr>
                    <?php
   }
?>
                </tbody>
            </table>
        </div>
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/jquery-3.6.0.min.js"></script>
    </main>
</body>

</html>