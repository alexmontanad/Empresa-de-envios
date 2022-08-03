<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="interfaz.css">
    <title>GESTION DE ADMINISTRADOR</title>
</head>

<body onload="limpiarUser();">
    <?php require 'header.php';?>

    <section class="seccion-tres">
        <div class="contenido_sec3_cliente">
            <h1 class="titulo2_loginC"> Cliente</h1>


            <form action="ValidarSesion.php" method="post" class="form-login">
                <ul class="login-nav">
                    <li class="login-nav__item active">
                        <a href="#">Ingresar</a>
                    </li>
                    <li class="login-nav__item">
                        <a href="vista_registrocliente.php">Registrar</a>
                    </li>
                </ul>
                <label for="login-input-user" style="color: black;" class="login__label">Username</label>
                <input id="login-input-user" name="id" class="login__input" type="text" />
                <label for="login-input-password" style="color: black;" class="login__label">Password</label>
                <input id="login-input-password" name="pass" class="login__input" type="password" />
                <button type="submit" class="boton_inicio">Ingresar</button>
            </form>
            <a href="./Recuperar/Recuperar.php" style="color: black;" class="login__forgot">Recordar contraseña</a>
            <a href="inicio.html" style="color: black;" class="login__forgot">Volver al inicio</a>


            </form>



        </div>


    </section>

    <?php require 'footer.php';?>
</body>

</html>