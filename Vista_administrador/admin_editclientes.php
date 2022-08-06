<?php
session_start();
$varsession = $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
    echo 'usted no tiene autorizacion';
    die();
}
include('../Modelo/cliente.php');
include('../Modelo/Usuario.php');
$cliente= new Cliente();
$usr= new Usuario();
if(isset($_POST['grabar']) && $_POST['grabar'] == 'si'){
 $cliente->editemple($_POST['id'],$_POST['n'],$_POST['a'],$_POST['e'],$_POST['t']);
 exit();
}
//llamar la funcion ver empleados
$reg=$cliente->get_cliente_id($_GET['id']);
$reguser=$usr->get_user_id($reg[0]['credenciales']);
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>EDITAR CLIENTE</title>
</head>

<body onload="limpiar();">
    <main class="d-flex flex-nowrap">
        <?php require 'navegacion_adm.php';?>

        <div class="container">
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
                            <input type='hidden' name='grabar' value='si'>
                            <input type="number" name="cedula" class="form-control" value="<?php echo $reg[0]['NIT'];?>"
                                readonly placeholder="DIGITE EL CODIGO">
                        </div>
                        <div class="col-md-6">
                            <label for="n">CIUDAD</label>
                            <input type="text" name="ciudad" class="form-control"
                                value="<?php echo $reg[0]['ciudad'];?>" placeholder="DIGITE EL NOMBRE">
                        </div>

                        <div class="col-md-6">
                            <label for="a">NOMBRE</label>
                            <input type="text" name="nombre" class="form-control"
                                value="<?php echo $reg[0]['nombre'];?>" placeholder="DIGITE EL APELLIDO">
                        </div>
                        <div class="col-md-6">
                            <label for="e">DEPARTAMENTO</label>
                            <input type="text" name="departamento" class="form-control"
                                value="<?php echo $reg[0]['departamento'];?>" placeholder="DIGITE EL EMAIL">
                        </div>
                        <div class="col-md-6">
                            <label for="t">APELLIDO</label>
                            <input type="text" name="apellido" class="form-control"
                                value="<?php echo $reg[0]['apellido'];?>" placeholder="DIGITE EL TELEFONO">
                        </div>
                        <div class="col-md-6">
                            <label for="id">DIRECCION</label>
                            <input type="text" name="direccion" class="form-control"
                                value="<?php echo $reg[0]['direccion'];?>" placeholder="DIGITE EL CODIGO">
                        </div>
                        <div class="col-md-6">
                            <label for="n">CORREO</label>
                            <input type="email" name="correo" class="form-control"
                                value="<?php echo $reguser[0]['correo'];?>" placeholder="DIGITE EL NOMBRE">
                        </div>

                        <div class="col-md-6">
                            <label for="a">CELULAR</label>
                            <input type="text" name="celular" class="form-control"
                                value="<?php echo $reg[0]['celular'];?>" placeholder="DIGITE EL APELLIDO">
                        </div>
                        <div class="col-md-6">
                            <label for="id">USUARIO</label>
                            <input type="text" name="usuario" class="form-control"
                                value="<?php echo $reguser[0]['usuario'];?>" placeholder="DIGITE EL CODIGO">
                        </div>
                        <div class="col-md-6">
                            <label for="n">CONTRASEÑA</label>
                            <input type="text" name="password" class="form-control"
                                value="<?php echo $reguser[0]['password'];?>" placeholder="DIGITE EL NOMBRE">
                            <input type='text' hidden name='idusr' value='<?php echo $reguser[0]['idUser']?>'>
                        </div>
                        <br><br><br><br>
                        <div class="col-md-8">
                            <input type="submit" name="accion" value="modificar" class="btn btn-primary mb-3">
                        </div>
                </form>
            </div>
        </div>
        </div>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="./js/jquery-3.6.0.min.js"></script>

</body>

</html>