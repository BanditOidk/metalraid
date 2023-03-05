<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingrese</title>
    <link rel="stylesheet" href="../estilos/login.css">
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">

          <h2 class="active"> Inicia Sesión </h2>
          
          <div class="fadeIn first">
            <img src="../fotos/Logotipo.png" id="icon"/>
          </div>
      
          <form method="POST" action="login_proceso.php">
            <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Usuario">
            <input type="password" id="password" class="fadeIn third" name="contraseña" placeholder="Contraseña">
            <input type="submit" class="fadeIn fourth" name="btningresar" value="Ingresar">
          </form>
          
        </div>
      </div>
</body>
</html>