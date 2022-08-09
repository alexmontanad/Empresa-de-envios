<?php
session_start();
$varsession = $_SESSION['usuario'];
if ($varsession == null || $varsession = '') {
    echo 'usted no tiene autorizacion';
    die();
}
include('../Modelo/camion.php');
include('../Modelo/conductor.php');
$id = $_REQUEST['id'];
$camion=new Camion();
$reg=$camion->get_camion_id($id);
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
                <input type='text' name='idcam' hidden value="<?php echo $reg[0]['idCamion'];?>">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="id">PLACA</label>
                            <input type="text" name="placa" class="form-control" readonly value="<?php echo $reg[0]['placa'];?>">
                        </div>
                        <div class="col-md-6">
                            <label for="id">ENCARGADO</label>
                            <?php
                            $encargado = new Conductor();
                            $regcond = $encargado->ver();
                                    if($reg[0]['encargado']==NULL){
                                        echo "<input type='text' hidden name='encargado2' value='NULL'>";
                                        echo "<select name='encargado' class='form-select form-select-md mb-3'>";
                                        echo "<option value='cancelar' selected>NINGUNO</option>";
                                    }else{
                                        $encargado2 = new Conductor();
                                        $actual = $encargado2->get_conductor_id($reg[0]['encargado']);                                      
                                        echo "<input type='text' hidden name='encargado2' value=".$actual[0]['idConductor'].">";                           
                                        echo "<select name='encargado' class='form-select form-select-md mb-3'>";          
                                        echo "<option value='NULL'>NINGUNO</option>";
                                        echo "<option value='cancelar' selected>".$actual[0]['nombre']."</option>";
                                    }
                                for($i=0;$i<count($regcond);$i++){
                                    if($regcond[$i]['camion']==NULL){
                                        echo "<option value=".$regcond[$i]['idConductor'].">".$regcond[$i]['nombre']."</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <br><br><br><br>
                        <div class="col-md-8">
                            <input type="submit" name="accion" value="modificar" class="btn btn-primary mb-3"
                                onclick="validar()">
                        </div>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/jquery-3.6.0.min.js"></script>
    </main>
</body>

</html>