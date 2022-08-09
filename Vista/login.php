<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">
    <link rel="stylesheet" href="interfaz.css">

    <style></style>
</head>
  <body onload="limpiarUser() "class="body">
  <?php require 'header.php';?>
  <section class="seccion-tres">
   <div class="contenido_sec3_cliente">
       <h1 class="titulo2_loginC"> Cliente</h1>    
       <form action="../Controladores/controlador_users.php" method="post" class="form-login">
		<ul class="login-nav">
			<li class="login-nav__item active">
				<a href="#">Ingresar</a>
			</li>
			<li class="login-nav__item">
				<a href="vista_registrocliente.php">Registrar</a>
			</li>
		</ul>
		<label for="login-input-user" style="color: black;" class="login__label">Username</label>
		<input id="login-input-user" name="user" class="login__input" type="text" />
		<label for="login-input-password"  style="color: black;" class="login__label">Password</label>
		<input id="login-input-password" name="pass" class="login__input" type="password" />	
		<input type="submit" class="boton_inicio" name="accion" value="ingresar">		
	</form>
		<a href="./Recuperar/Recuperar.php"  style="color: black;"class="login__forgot">Recordar contraseña</a>
		<a href="index.php"  style="color: black;"class="login__forgot">Volver al inicio</a>
        </form>  
   </div>
 </section>
  </body>
</html>