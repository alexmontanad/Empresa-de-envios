<?php
session_start();
$varsession = $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
    echo 'usted no tiene autorizacion';
    die();
}
include('../Modelo/cliente.php');
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
    <title>GESTION DE CLIENTES</title>
</head>

<body onload="limpiar();">
    <main class="d-flex flex-nowrap">
        <?php require 'navegacion_adm.php';?>

        <div class="conatiner">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="text-white text-center">GESTION DE CLIENTES</h3>
                </div>
            </div>
            <div class="card-body">
                <form name="form" action="../Controladores/cliente_controlador.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="id">NIT</label>
                            <input type="number" name="cedula" class="form-control" value=""
                                placeholder="DIGITE EL CODIGO">
                        </div>
                        <div class="col-md-6">
                            <label for="n">CIUDAD</label>
                            <input type="text" name="ciudad" class="form-control" value=""
                                placeholder="DIGITE EL NOMBRE">
                        </div>

                        <div class="col-md-6">
                            <label for="a">NOMBRE</label>
                            <input type="text" name="nombre" class="form-control" value=""
                                placeholder="DIGITE EL APELLIDO">
                        </div>
                        <div class="col-md-6">
                            <label for="e">DEPARTAMENTO</label>
                            <input type="text" name="departamento" class="form-control" value=""
                                placeholder="DIGITE EL EMAIL">
                        </div>
                        <div class="col-md-6">
                            <label for="t">APELLIDO</label>
                            <input type="text" name="apellido" class="form-control" value=""
                                placeholder="DIGITE EL TELEFONO">
                        </div>
                        <div class="col-md-6">
                            <label for="id">DIRECCION</label>
                            <input type="text" name="direccion" class="form-control" value=""
                                placeholder="DIGITE EL CODIGO">
                        </div>
                        <div class="col-md-6">
                            <label for="n">CORREO</label>
                            <input type="email" name="correo" class="form-control" value=""
                                placeholder="DIGITE EL NOMBRE">
                        </div>

                        <div class="col-md-6">
                            <label for="a">CELULAR</label>
                            <input type="text" name="celular" class="form-control" value=""
                                placeholder="DIGITE EL APELLIDO">
                        </div>
                        <div class="col-md-6">
                            <label for="id">USUARIO</label>
                            <input type="text" name="usuario" class="form-control" value=""
                                placeholder="DIGITE EL CODIGO">
                        </div>
                        <div class="col-md-6">
                            <label for="n">CONTRASEÑA</label>
                            <input type="text" name="contraseña" class="form-control" value=""
                                placeholder="DIGITE EL NOMBRE">
                        </div><br><br><br><br>
                        <div class="col-md-8">
                            <input type="button" name="accion" value="crear" class="btn btn-primary mb-3"
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
  $cliente=new Cliente();
  $reg=$cliente->ver();
     ?>
        <div class="table table-striped">
            <table class="table table-striped table-hover id=" table_id">
                <thead>
                    <th>NIT</th>
                    <TH>NOMBRE</TH>
                    <TH>APELLIDO</TH>
                    <TH>DEPARTAMENTO</TH>
                    <TH>CIUDAD</TH>
                    <TH>DIRECCION</TH>
                    <TH>CELULAR</TH>
                    <TH>ACCION</TH>
                    </TR>
                </thead>
                <tbody>
                    <?php
        for($i=0;$i<count($reg);$i++){
       echo "<tr>
       <td>".$reg[$i]['NIT']."</td>
       <td>".$reg[$i]['nombre']."</td>
       <td>".$reg[$i]['apellido']."</td>
       <td>".$reg[$i]['departamento']."</td>
       <td>".$reg[$i]['ciudad']."</td>
       <td>".$reg[$i]['direccion']."</td>
       <td>".$reg[$i]['celular']."</td>";
       ?>
                    <td align='center'>
                        <button class="btn btn-warning"
                            onclick=window.location="./admin_editclientes.php?id=<?php echo $reg[$i]['NIT'];?>">Editar</button>
                        <button class="btn btn-danger" name="eliminar"
                            onclick=window.location="../Controladores/cliente_controlador.php?accion=eliminar&id=<?php echo $reg[$i]['NIT'];?>">Eliminar</button>
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