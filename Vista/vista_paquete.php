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
        gjgjg
    </form>
    <?php require 'footer.php';?>
</body>

</html>