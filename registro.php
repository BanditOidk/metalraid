<?php

    include_once('conexion.php');

    
date_default_timezone_set("America/Lima");

$fecha = date('d-m-Y');

    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    
    $descripcion = $_POST['descripcion'];
    $objetivo = $_POST['objetivo'];
    $area = $_POST['area'];
    $persona =  $_POST['persona']; 
    $logistico =  $_POST['logistico'];
    $ubicacion = $_POST['ubicacion'];
    $tiempo = $_POST['tiempo'];
    $trabajo = $_POST['trabajo'];
    $prioridad = $_POST['prioridad'];
    $accesibilidad = $_POST['accesibilidad'];
    $disponibilidad = $_POST['disponibilidad'];
    $horario = $_POST['horario'];
    $anticorrupcion = $_POST['anticorrupcion'];
    $valorizacion = $_POST['valorizacion'];

    $negocio = $_POST['negocio'];
    $alcance = $_POST['alcance'];
    $mano = $_POST['mano'];
    $materiales = $_POST['materiales'];
    $servicios = $_POST['servicios'];
    $cliente = $_POST['cliente'];

    $tipotrabajo = $_POST['tipotrabajo'];
    $epp = $_POST['epp'];
    $equipos = $_POST['equipos'];
    $procedimientos = $_POST['procedimientos'];
    $jefe = $_POST['jefe'];
    $riesgos = $_POST['riesgos'];
    $observaciones = $_POST['observaciones'];


    $dir_subida = 'files/';
    $imagenRuta = $dir_subida . basename($_FILES['imagen']['name']);
    $imagenNombre = $_FILES['imagen']['name'];
    $imagenValida = false;
 
    $conectar = conexion();
    $sql="INSERT INTO formulario (nombre, descripcion, fecha, objetivo, area, persona, logistico, ubicacion, tiempo, trabajo, prioridad, accesibilidad, 
    disponibilidad, horario, anticorrupcion, valorizacion, negocio, alcance, mano, materiales, servicios, cliente, tipotrabajo, epp, equipos, procedimientos, jefe, riesgos, observaciones, imagen) 
    VALUES ('$nombre','$descripcion','$fecha','$objetivo','$area','$persona', '$logistico', '$ubicacion','$tiempo','$trabajo', '$prioridad', '$accesibilidad', '$disponibilidad', '$horario', 
    '$anticorrupcion', '$valorizacion', '$negocio', '$alcance', '$mano', '$materiales', '$servicios', '$cliente', '$tipotrabajo', '$epp', '$equipos', '$procedimientos', '$jefe', '$riesgos','$observaciones','$imagenRuta')";
    $resultado = mysqli_query($conectar, $sql);

    //$id_insert = mysqli_insert_id($conectar);

    if($_FILES['imagen']['error'] > 0){
    echo "Error al cargar archivo";
    } else {
        
        $permitidos = array('image/png', 'image/jpeg', 'image/jpg'); //FORMATOS PERMITIDOS
        $limite_kb = 500;

    if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        /*
        $ruta = 'files/'; 
        

        //$archivo = $ruta . basename($_FILES["archivo"]["name"]);

        $aleatorio = mt_rand(100, 999);
        $explode        = explode('.', $_FILES['imagen']['name']);
        $extension_foto = array_pop($explode);
        $nuevoNameFoto  = $aleatorio .".". $extension_foto;
        $archivo = $ruta. $nuevoNameFoto; 
        */

        if(!file_exists($dir_subida)){
            mkdir($dir_subida);
        }

        if(!file_exists($imagenRuta)){

            $resultado = move_uploaded_file($_FILES['imagen']['tmp_name'], $imagenRuta);
            $imagenValida = true;

        if($resultado){
            echo "Archivo Guardado";
        } else {
            echo "Error al guardar archivo";
        }   

        } else {
            echo "Archivo ya existe";
        }

    } else {
        echo "Archivo no permitido o excede el tamaño";
    }
    
    }

    
    
?>