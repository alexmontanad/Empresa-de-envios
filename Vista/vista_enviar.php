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
        
        <label for="fname">Direccion:</label><br>
        <input type="text" name="Direccion" placeholder="Direccion" class="login__input"  >       
        <label for="fname">Nombre de quien recibe:</label><br>
        <input type="text" name="Nombre_re" placeholder="Nombre_re"class="login__input"><br>
        <label for="fname">Ciudad: </label><br>
        <input type="text" name="ciudad" placeholder="ciudad"class="login__input"><br>
        <label for="fname">Descripcion Adicional</label><br>
        <input type="text" name="Descripcion" placeholder="decripcion"class="login__input"><br>
       
        <label for="fname">Peso:</label><br>
        <input type="text" name="id" placeholder="id" class="login__input"><br>
        <input type="text" name="peso" placeholder="peso"class="login__input"><br>
        <label for="fname">Dimensiones:</label><br>
        <input type="text" name="alto" placeholder="alto"class="login__input">
        <input type="text" name="ancho" placeholder="ancho"class="login__input">
        <input type="text" name="profundidad" placeholder="profundidad"class="login__input"><br>
        <label for="fname">Precio comercial:</label><br>
        <input type="text" name="valor" placeholder="valor"class="login__input"><br>
        <label for="fname">Descripcion:</label><br>
        <input type="text" name="descripcion" placeholder="descripcion"class="login__input"><br>

        <input type="submit" value="Boton" class="boton_inicio">
    </form>
    <?php require 'footer.php';?>
</body>

</html>