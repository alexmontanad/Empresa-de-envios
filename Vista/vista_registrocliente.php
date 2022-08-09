<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">
    <link rel="stylesheet" href="interfaz.css">

    <style></style>
    <script type="text/javascript" language="Javascript" src="../JavaScript/funciones.js"></script>

</head>

<body class="body">
    <?php require 'header.php';?>
    <section class="seccion-tres">
        <div class="contenido_sec3_cliente">
            <h1 class="titulo2_loginC"> Cliente</h1>


            <form name="form" action="../Controladores/cliente_controlador.php" method="post">
                <ul class="login-nav">
                    <li class="login-nav__item active">
                        <a href="login.php">Ingresar</a>
                    </li>
                    <li class="login-nav__item">
                        <a href="vista_registrocliente.php">Registrar</a>
                    </li>
                </ul>
                <label for="fname" class="login__label">Nombre:</label>
                <input type="text" name="nombre" placeholder="Nombre" class="login__input"><br>
                <label for="fname" class="login__label">Apellido:</label>
                <input type="text" name="apellido" placeholder="Apellido" class="login__input"><br>
                <label for="fname" class="login__label">Cedula:</label>
                <input type="text" name="cedula" placeholder="Cedula" class="login__input"><br>
                <label for="fname" class="login__label">Ciudad:</label>
                <select name="ciudad" class="login__input">
                    <option value="Bogota">Bogota</option>
                    <option value="Medellin">Medellin</option>
                    <option value="Cartagena">Cartagena</option>
                    <option value="Cali">Cali</option>
                    <option value="Santa Marta">Santa Marta</option>
                    <option value="Barranquilla">Barranquilla</option>
                </select>
                <label for="fname" class="login__label">Direccion:</label>
                <input type="text" name="direccion" placeholder="Direccion" class="login__input"><br>
                <label for="fname" class="login__label">Celular:</label>
                <input type="text" name="celular" placeholder="Celular" class="login__input"><br>
                <label for="fname" class="login__label">Correo:</label>
                <input type="email" name="correo" placeholder="Correo" class="login__input"><br>
                <label for="fname" class="login__label">Usuario:</label>
                <input type="text" name="usuario" placeholder="Usuario" class="login__input"><br>
                <label for="fname" class="login__label">Contraseña:</label>
                <input type="text" name="contraseña" placeholder="Contraseña" class="login__input"><br>
                <input type="submit" name="accion" value="crear" class="boton_inicio">
            </form>
            <a href="./Recuperar/Recuperar.php" style="color: black;" class="login__forgot">Recordar contraseña</a>
            <a href="index.php" style="color: black;" class="login__forgot">Volver al inicio</a>
        </div>
    </section>
    <?php require 'footer.php';?>
</body>

</html>