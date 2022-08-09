<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">
    <link rel="stylesheet" href="interfaz.css">

    <style></style>
</head>

<body class="body">
    <?php require 'header.php';?>
    <form id="generarVenta" onSubmit="return validarCantidad(event);" action="ControladorVentas?menu=NuevaVenta"
        method="POST">
        <label for="fname">Ciudad origen:</label>
        <input type="text" name="origen" placeholder="origen" class="login__input">
        <label for="fname">Ciudad destino:</label>
        <input type="text" name="destino" placeholder="destino" class="login__input"><br>
        <label for="fname">Peso:</label><br>
        <input type="text" name="peso" placeholder="peso" class="login__input"><br>
        <label for="fname">Dimensiones:</label><br>
        <input type="text" name="alto" placeholder="alto" class="login__input">
        <input type="text" name="ancho" placeholder="ancho" class="login__input">
        <input type="text" name="profundidad" placeholder="profundidad" class="login__input"><br>
        <label for="fname">Precio comercial:</label><br>
        <input type="text" name="valor" placeholder="valor" class="login__input"><br>
        <label for="fname">Descripcion:</label><br>
        <input type="text" name="descripcion" placeholder="descripcion" class="login__input"><br>
        <input type="submit" value="Cotizar envio" class="boton_inicio">
    </form>
    <div class="col-sm-6 ml-auto d-flex">
        <label class=" col-sm-6 text-right mt-2">Total a Pagar</label>
        <input type="text" name="txtTotal" value="totalpagar" class="login__input""
            style="font-size: 18px;">

        <?php require 'footer.php';?>
</body>

</html>