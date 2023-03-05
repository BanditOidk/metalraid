function validar_login() {
  let usuario = document.getElementById("input_usuario");

  document.getElementById("frm_login").addEventListener("click", function () {
    let data=$("#frm").serialize();
    if (usuario.value.length > 0) {
      if (document.getElementById("input_password").value.length > 0) {
        $.ajax({
            url:'./loginProceso.php',
            method:'post',
            data:data,
            success:function(){
                location.href ='./loginProceso.php';
            }
         }
        )
      }else{
        document.getElementById("msg_error").style.display = "flex";
        document.getElementById("msg_error").innerText =
          "Por favor ingrese una Contraseña";
      }
    } else {
      document.getElementById("msg_error").style.display = "flex";
      document.getElementById("msg_error").innerText =
        "Por favor ingrese un Usuario";
    }
  });
}
validar_login();
