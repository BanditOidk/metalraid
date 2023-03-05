<?php 
  require "../conexion.php";
  session_start();
  
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];
  $sql = ("SELECT COUNT(*) as contar FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña' ");
  $result = mysqli_query($prueba,$sql);
  $array = mysqli_fetch_array($result);

  if($array['contar']>0){
    $_SESSION['username'] = $usuario; 
    header("location: ../form.php");
  }else{

    echo "DATOS INCORRECTOS";
  }

  // if(!empty($_POST['btningresar'])){
  //   if (empty($_POST['usuario']) and empty ($_POST['contraseña'])) {
  //     echo "LOS CAMPOS ESTAN VACIOS";
  //   } else {
  //     $usuario = $_POST['usuario'];
  //     $contraseña = $_POST['contraseña'];

  //     $conectar = conexion();

  //     $sql = ("SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña' ");
  //     $result= mysqli_query($conectar,$sql);
  //     if ($datos = mysqli_fetch_object($result)) {
  //       header("location:form.php");
  //     } else {
  //       echo "EL USUARIO NO EXISTE";
  //     }
  //   }
  // }
	
?>