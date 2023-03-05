<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html> 
<html>
<head>
	<title>Iniciar sesion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./css/login.css">
	<script
  src="https://code.jquery.com/jquery-3.6.2.js"
  integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4="
  crossorigin="anonymous"></script>

</head>
<body>

		<form method="POST" id="frm">
			<img src="./img/login.jpeg" alt="">
			<div class="form">
				<label for="">Iniciar Sesión</label>
				<hr>
			<div id="msg_error" style="width:100%; height:20%; background:#FFB6B6; margin:auto; color:#850B0B; display:flex; align-items:center; justify-content:center;">
				Usuario o contraseña inválidos
			</div>
			<input type="text" name="txtUsu" placeholder="Usuario" id="input_usuario">
			<input type="password" name="txtPass" placeholder="Password" id="input_password">
			<input type="submit" value="Ingresar" id="frm_login">
			</div>
		</form>
</body>
<script>
			document.getElementById("frm_login").addEventListener("click",function(e){
				e.preventDefault();
			})
		</script>
		<script src="./js/login.js"></script>
</html>