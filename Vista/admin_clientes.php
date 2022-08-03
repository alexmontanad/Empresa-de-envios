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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script type="text/javascript" language="Javascript" src="../JavaScript/funciones.js"></script>
    <title>GESTION DE EMPLEADOS</title>
</head>

<body onload="limpiar();">


    <div class="container">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white text-center">GESTION DE CLIENTES</h3>
                <a class="btn btn-primary" href="./salir.php" role="button">Salir</a></h3>
            </div>
        </div>
        <div class="card-body">
            <form name="form" action="insert.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label for="cod">CODIGO</label>
                        <input type="number" name="cod" class="form-control" placeholder="DIGITE EL CODIGO">
                    </div>
                    <div class="col-md-6">
                        <label for="nom">NOMBRE</label>
                        <input type="text" name="nom" class="form-control" placeholder="DIGITE EL NOMBRE">
                    </div>

                    <div class="col-md-6">
                        <label for="ape">APELLIDO</label>
                        <input type="text" name="ape" class="form-control" placeholder="DIGITE EL APELLIDO">
                    </div>
                    <div class="col-md-6">
                        <label for="em">EMAIL</label>
                        <input type="email" name="em" class="form-control" placeholder="DIGITE EL EMAIL">
                    </div>
                    <div class="col-md-6">
                        <label for="tel">TELEFONO</label>
                        <input type="text" name="tel" class="form-control" placeholder="DIGITE EL TELEFONO">
                    </div><br><br><br><br>
                    <div class="col-md-8">
                        <input type="button" value="INSERTAR EMPLEADO" class="btn btn-primary mb-3" onclick="validar()">
                    </div>
                    <div class="col-md-4">
                        <input type="reset" value="LIMPIAR" class="btn btn-danger mb-3">
                    </div>
            </form>
        </div>
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
                        onclick=window.location="./admin_editclientes.php?id=<?php echo $reg[$i]['NIT'];?>">
                        <span class="material-icons">Editar</span>
                    </button>
                    <button class="btn btn-danger"
                        onclick=window.location="../Controladores/cliente_controlador.php?accion=eliminar&id=<?php echo $reg[$i]['NIT'];?>">
                        <span class="material-icons">Eliminar</span>
                    </button>
                </td>
                </tr>
                <?php
       }
        ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>