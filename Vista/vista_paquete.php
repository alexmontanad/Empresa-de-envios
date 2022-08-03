<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">
    <link rel="stylesheet" href="interfaz.css">

    <style></style>
</head>

<body>
<?php require 'header.php';?>
    <form name="form" action="paquete_crear.php" method="post">
        <label for="fname">Peso:</label><br>
        <input type="text" name="id" placeholder="id"><br>
        <input type="text" name="peso" placeholder="peso"><br>
        <label for="fname">Dimensiones:</label><br>
        <input type="text" name="alto" placeholder="alto">
        <input type="text" name="ancho" placeholder="ancho">
        <input type="text" name="profundidad" placeholder="profundidad"><br>
        <label for="fname">Precio comercial:</label><br>
        <input type="text" name="valor" placeholder="valor"><br>
        <label for="fname">Descripcion:</label><br>
        <input type="text" name="descripcion" placeholder="descripcion"><br>
        <input type="submit" value="Boton">
    </form>
    <?php require 'footer.php';?>
</body>

</html>