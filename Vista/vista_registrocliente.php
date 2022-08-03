<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquete</title>
</head>

<body>
<?php require 'header.php';?>
    <form name="form" action="paquete_crear.php" method="post">
        <label for="fname">Nombre:</label>
        <input type="text" name="id" placeholder="Nombre"><br>
        <label for="fname">Apellido:</label>
        <input type="text" name="id" placeholder="Apellido"><br>
        <label for="fname">Cedula:</label>
        <input type="text" name="id" placeholder="Cedula"><br>
        <label for="fname">Ciudad:</label>
        <input type="text" name="id" placeholder="Ciudad"><br>       
        <label for="fname">Direccion:</label>
        <input type="text" name="id" placeholder="Direccion"><br>
        <label for="fname">Celular:</label>
        <input type="text" name="id" placeholder="Celular"><br>
        <label for="fname">Correo:</label>
        <input type="text" name="id" placeholder="Correo"><br>
        <label for="fname">Contraseña:</label>
        <input type="text" name="id" placeholder="Contraseña"><br>        
        <input type="submit" value="Boton">
    </form>
    <?php require 'footer.php';?>
</body>

</html>