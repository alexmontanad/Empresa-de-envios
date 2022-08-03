<head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="interfaz.php">
    <script type="text/javascript" language="javascript" src="../js/funciones.js"></script>    
    <title>GESTION DE ADMINISTRADOR</title>
  </head>
  <body onload="limpiarUser();">
  <?php require 'header.php';?>
<div class="container">
<div class="card-body">
       <div class="row">
       
                 <div class="col-md-4">
            <form name="form" action="insertUser.php" method="post">
            
                   <label for="nit">NIT:</label>
                   <input type="number" id ="nit" name="nit" class="form-control" placeholder="Digite su NIT">
                </div>
                
                <div class="col-md-4"> 
                  <label for='nomb'>NOMBRES:</label>
                <input type="text" id="nomb" name="nomb" class="form-control" placeholder="Digite los Nombres">
                </div>
                <div class="col-md-4"> 
                  <label for='ape'>APELLIDOS:</label>
                <input type="text" id="ape" name="ape" class="form-control" placeholder="Digite los apellidos">
                </div>                
                                
                <div class="col-md-4"> 
                  <label for='Con'>CONTRASEÑA:</label>
                <input type="number" id="Con" name="Con" class="form-control" placeholder="Digite la contraseña">            
                </div>                              
                <div class="col-md-4"> 
                  <label for='tel'>Telefono:</label>
                <input type="number" id="tel" name="tel" class="form-control" placeholder="Digite el telefono">
                </div>
                <div class="col-md-4"> 
                  <label for='correo'>Correo:</label>
                <input type="email" id="correo" name="correo" class="form-control" placeholder="Digite el correo">
                </div>
                <br>
                <br>
                <br>
                <br>           
                <div class="col-md-2 ">  
                <input type="button" value="Registrar Usuario"
                    class="btn btn-success" title="Registrar Zoo" onclick="validarUser()">
                  </div>  
                  <div class="col-md-2" >  
                <input type="button" value="Volver"
                    class="btn btn-success"  onclick="window.location='cliente.html'" title="Registrar Zoo">
                  </div>
                  <label id="ban" name="ban" value="1"></label>                              
             </form>

           </div>
       </div>
  </div>
  <?php require 'footer.php';?>
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <script src="../sw/dist/sweetalert2.all.min.js"></script>   
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>