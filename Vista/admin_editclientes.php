<?php
include('../Modelo/cliente.php');
include('../Modelo/Usuario.php');
$emp= new Cliente();
$usr= new Usuario();
if(isset($_POST['grabar']) && $_POST['grabar'] == 'si'){
 $emp->editemple($_POST['id'],$_POST['n'],$_POST['a'],$_POST['e'],$_POST['t']);
 exit();
}
//llamar la funcion ver empleados
$reg=$emp->get_emple_id($_GET['id']);
$reguser=$usr->get_user_id($reg[0]['credenciales']);
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <title>GESTION DE EMPLEADOS</title>
</head>

<body onload="limpiar();">


    <div class="container">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="text-white text-center">GESTION DE CLIENTES</h3>
            </div>
        </div>
        <div class="card-body">
            <form name="form" action="editar.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label for="id">CODIGO</label>
                        <input type='hidden' name='grabar' value='si'>
                        <input type="number" name="cedula" class="form-control" value="<?php echo $reg[0]['NIT'];?>"
                            readonly placeholder="DIGITE EL CODIGO">
                    </div>
                    <div class="col-md-6">
                        <label for="n">CIUDAD</label>
                        <input type="text" name="ciudad" class="form-control" value="<?php echo $reg[0]['ciudad'];?>"
                            placeholder="DIGITE EL NOMBRE">
                    </div>

                    <div class="col-md-6">
                        <label for="a">NOMBRE</label>
                        <input type="text" name="nombre" class="form-control" value="<?php echo $reg[0]['nombre'];?>"
                            placeholder="DIGITE EL APELLIDO">
                    </div>
                    <div class="col-md-6">
                        <label for="e">DEPARTAMENTO</label>
                        <input type="email" name="departamento" class="form-control" value="<?php echo $reg[0]['departamento'];?>"
                            placeholder="DIGITE EL EMAIL">
                    </div>
                    <div class="col-md-6">
                        <label for="t">APELLIDO</label>
                        <input type="text" name="apellido" class="form-control" value="<?php echo $reg[0]['apellido'];?>"
                            placeholder="DIGITE EL TELEFONO">
                    </div>
                    <div class="col-md-6">
                        <label for="id">DIRECCION</label>
                        <input type="text" name="direccion" class="form-control" value="<?php echo $reg[0]['direccion'];?>"
                            readonly placeholder="DIGITE EL CODIGO">
                    </div>
                    <div class="col-md-6">
                        <label for="n">CORREO</label>
                        <input type="text" name="correo" class="form-control" value="<?php echo $reguser[0]['correo'];?>"
                            placeholder="DIGITE EL NOMBRE">
                    </div>

                    <div class="col-md-6">
                        <label for="a">CELULAR</label>
                        <input type="text" name="celular" class="form-control" value="<?php echo $reg[0]['celular'];?>"
                            placeholder="DIGITE EL APELLIDO">
                    </div>
                    <div class="col-md-6">
                        <label for="id">USUARIO</label>
                        <input type="text" name="usuario" class="form-control" value="<?php echo $reguser[0]['usuario'];?>"
                            readonly placeholder="DIGITE EL CODIGO">
                    </div>
                    <div class="col-md-6">
                        <label for="n">CONTRASEÑA</label>
                        <input type="text" name="contraseña" class="form-control" value="<?php echo $reguser[0]['contraseña'];?>"
                            placeholder="DIGITE EL NOMBRE">
                    </div>
                    <br><br><br><br>
                    <div class="col-md-8">
                        <input type="submit" name="accion" value="modificar" class="btn btn-primary mb-3" onclick=window.location="./admin_clientes.php">
                    </div>
            </form>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./sw/dist/sweetalert2.all.min.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>

</html>