<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquete</title>
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
       
        <input type="submit" value="Boton" class="boton_inicio">
    </form>
    <?php require 'footer.php';?>
</body>

</html>