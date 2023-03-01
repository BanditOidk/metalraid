<?php
//mysqli_connect
    function conexion(){

        $host = "localhost:3307";
        $usuario = "root";
        $contraseña = "";
        $db = "formulario_metalraid";
        
        $mysqli = new mysqli($host, $usuario, $contraseña, $db);
        return $mysqli;
    }

    $prueba = conexion();

/*
    if ($prueba) {
        echo "exitoso";

    }else{
        "no conecta master";
    }
*/

?>