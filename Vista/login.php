<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div>
            <div>
                <div>
                    <form action="Validar" method="POST">
                        <div>
                            <h1>Login</h1>
                            
                            <br/>
                            <label><h3>¡Bienvenidos al Sistema de Ventas!</h3></label>
                        </div>
                        <div >
                            <label>Usuario:</label>
                            <input type="text" name="txtuser" value="emp01">
                        </div>
                        <div >
                            <label>Password:</label>
                            <input type="password" name="txtpass" value="123">
                        </div>
                        <input type="submit" name="accion" value="Ingresar">
                        <br/>
                        <!--<% if(request.getAttribute("Error") != null){
                            //out.println("<center><span class='bg-danger' style='font-weight: 900; padding: 10px;'>");
                            //out.println(request.getAttribute("Error"));
                            //out.println("</span></center>");
                        //}%> -->
                    </form>
                </div>
            </div>
        </div>
</body>
</html>