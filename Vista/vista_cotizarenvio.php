<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizar envio</title>
</head>

<body>
    <div class="d-flex">
        <div class="col-lg-5 parte01">
            <div class="card">
                <form id="generarVenta" onSubmit="return validarCantidad(event);"
                    action="ControladorVentas?menu=NuevaVenta" method="POST">
                    <label for="fname">Ciudad origen:</label>
                    <input type="text" name="id" placeholder="origen">
                    <label for="fname">Ciudad destino:</label>
                    <input type="text" name="id" placeholder="destino"><br>
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
            </div>
        </div>
        <div class="col-sm-7">
            <div class="card parte02">
                <div class="card-body">

                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>N°</th>
                                <th>ID</th>
                                <th>PRODUCTO</th>
                                <th>PRECIO</th>
                                <th>CANTIDAD</th>
                                <th>SUBTOTAL</th>
                                <th class="accion">ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <c:forEach var="list" items="${lista}">
                                <tr class="text-center">
                                    <td>${list.getItem()}</td>
                                    <td>${list.getIdproducto()}</td>
                                    <td>${list.getDescripcionP()}</td>
                                    <td>${list.getPrecio()}</td>
                                    <td>${list.getCantidad()}</td>
                                    <td>${list.getSubtotal()}</td>
                                    <td class="d-flex">
                                        <a href="#" class="btn btn-warning">Editar</a>
                                        <a href="#" class="btn btn-danger" style="margin-left: 5px">Delete</a>
                                    </td>
                                </tr>
                            </c:forEach>

                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="ControladorVentas?menu=NuevaVenta&accion=GenerarVenta" onclick="print()"
                                class="btn btn-success">Cotizar envio</a>
                            <input type="submit" name="accion" value="Cancelar" class="btn btn-danger">
                        </div>
                        <div class="col-sm-6 ml-auto d-flex">
                            <label class=" col-sm-6 text-right mt-2">Total a Pagar</label>
                            <input type="text" name="txtTotal" value="${totalpagar}"
                                class="form-control text-center font-weight-bold" style="font-size: 18px;">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>