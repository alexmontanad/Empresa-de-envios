<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">
    <link rel="stylesheet" href="interfaz.css">

    <style></style>
</head>

<body class="body">
<?php require 'header.php';?>
    <form name="form" action="paquete_crear.php" method="post">
        
        <label for="fname">Rastrear:</label><br>
        <input type="text" name="rastreo" placeholder="Rastrear" class="login__input"  >
        <input type="submit" value="Rastrear" class="boton_inicio">
    </form>
    <?php require 'footer.php';?>
</body>

</html>