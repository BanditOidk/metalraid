<?php 
	session_start();
	include_once 'model/conexion.php';
	$usuario = $_POST['txtUsu'];
	$contrasena = $_POST['txtPass'];
	$sentencia = mysqli_query($con,"select * from usuarios where usuario = '$usuario' and contraseña = '$contrasena';");
	$fila=mysqli_fetch_array($sentencia);

	if (!is_array($fila)) {
		header('Location: login_error.php');
	}elseif(count($fila)>0){
		$_SESSION['nombre']=$fila[1];
		header('Location:index.php');
	}
?>