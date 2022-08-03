<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">
    <link rel="stylesheet" href="interfaz.css">

    <style></style>
</head>

<body>
    <?php require 'header.php';?>
    <form id="generarVenta" onSubmit="return validarCantidad(event);" action="ControladorVentas?menu=NuevaVenta"
        method="POST">
        <label for="fname">Ciudad origen:</label>
        <input type="text" name="origen" placeholder="origen">
        <label for="fname">Ciudad destino:</label>
        <input type="text" name="destino" placeholder="destino"><br>
        <label for="fname">Peso:</label><br>
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
    <a href="ControladorVentas?menu=NuevaVenta&accion=GenerarVenta" onclick="print()" class="btn btn-success">Cotizar
        envio</a>
    <div class="col-sm-6 ml-auto d-flex">
        <label class=" col-sm-6 text-right mt-2">Total a Pagar</label>
        <input type="text" name="txtTotal" value="${totalpagar}" class="form-control text-center font-weight-bold"
            style="font-size: 18px;">

        <?php require 'footer.php';?>
</body>

</html>