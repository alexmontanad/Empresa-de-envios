
<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="interfaz.css">
    <script type="text/javascript" language="javascript" src="../js/funciones.js"></script>    
    <title>GESTION DE ADMINISTRADOR</title>
  </head>
  <body class="body">
  <?php require 'header.php';?>
  <section class="seccion-tres">
   <div class="contenido_sec3_cliente">
       <h1 class="titulo2_loginC"> Cliente</h1>
     
     
       <form name="form" action="Modelo\cliente_crear.php" method="post">
		<ul class="login-nav">
			<li class="login-nav__item active">
				<a href="login.php">Ingresar</a>
			</li>
			<li class="login-nav__item">
				<a href="vista_registrocliente.php">Registrar</a>
			</li>
		</ul>
       
        <label for="fname"  class="login__label">Nombre:</label>
        <input type="text" name="id" placeholder="Nombre" class="login__input"><br>
        <label for="fname" class="login__label">Apellido:</label>
        <input type="text" name="id" placeholder="Apellido"class="login__input"><br>
        <label for="fname" class="login__label">Cedula:</label>
        <input type="text" name="id" placeholder="Cedula"class="login__input"><br>
        <label for="fname"class="login__label">Ciudad:</label>
        <input type="text" name="id" placeholder="Ciudad"class="login__input"><br>       
        <label for="fname"class="login__label">Direccion:</label>
        <input type="text" name="id" placeholder="Direccion"class="login__input"<br>
        <label for="fname"class="login__label">Celular:</label>
        <input type="text" name="id" placeholder="Celular"class="login__input"><br>
        <label for="fname"class="login__label">Correo:</label>
        <input type="text" name="id" placeholder="Correo"class="login__input"><br>
        <label for="fname"class="login__label">Contraseña:</label>
        <input type="text" name="id" placeholder="Contraseña"class="login__input"><br>        
        <input type="submit" value="Registrar" class="boton_inicio">
    
	</form>
		<a href="./Recuperar/Recuperar.php"  style="color: black;"class="login__forgot">Recordar contraseña</a>
		<a href="index.php"  style="color: black;"class="login__forgot">Volver al inicio</a>
       
 
       </div>
     </section>
     <?php require 'footer.php';?>
    </body>
    </html>