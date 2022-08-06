<?php
session_start();
$varsession = $_SESSION['usuario'];

if($varsession == null || $varsession = ''){
    header("Location: ../Vista/login.php");
    exit();
    die();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">
    <link rel="stylesheet" href="interfaz.css">

    <style></style>
</head>

<body class="body">
    <?php require 'header.php';?>
    <form name="form" action="../Controladores/solicitud_controlador.php" method="post">
        <input type='text' hidden name='idcliente' value="<?php echo $_SESSION['usuario'];?>">
        <label for="fname">Nombre del destinatario:</label><br>
        <input type="text" name="nombredes" placeholder="Nombre_re" class="login__input"><br>
        <label for="fname">Apellido del destinatario:</label><br>
        <input type="text" name="apedes" placeholder="Nombre_re" class="login__input"><br>
        <label for="fname">Ciudad: </label><br>
        <select name="ciudad" class="login__input">
            <option value="Bogota">Bogota</option>
            <option value="Medellin">Medellin</option>
            <option value="Cartagena">Cartagena</option>
            <option value="Cali">Cali</option>
            <option value="Santa Marta">Santa Marta</option>
            <option value="Barranquilla">Barranquilla</option>
        </select>
        <label for="fname">Direccion:</label><br>
        <input type="text" name="direccion" placeholder="Direccion" class="login__input">

        <br><br><label for="fname">Paquete</label><br><br>

        <label for="fname">Peso:</label><br>
        <input type="text" name="peso" placeholder="peso" class="login__input"><br>
        <label for="fname">Dimensiones:</label><br>
        <input type="text" name="alto" placeholder="alto" class="login__input">
        <input type="text" name="ancho" placeholder="ancho" class="login__input">
        <input type="text" name="profundidad" placeholder="profundidad" class="login__input"><br>
        <label for="fname">Precio comercial:</label><br>
        <input type="text" name="valor" placeholder="valor" class="login__input"><br>
        <label for="fname">Descripcion:</label><br>
        <input type="text" name="descripcion" placeholder="(opcional)" class="login__input"><br>

        <input type="submit" name="accion" value="Generar solicitud" class="boton_inicio">
    </form>
    <?php require 'footer.php';?>
</body>

</html>