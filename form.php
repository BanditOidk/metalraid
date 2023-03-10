<?php include "header.php"; ?>

<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header ("location: login.php");
}else{
    ?>
      <h1 id="bienvenido">Bienvenido </h1>
      <h2 id="parrafo"><?php echo $usuario; ?></h2>
    <?php    
}
?>

<!DOCTYPE html>
<html> 
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMATO DE VISTA TÉCNICA</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/style.css?<?=date('Y-m-d H:i:s')?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  
  <body>
    <div class="testbox">
      <form action="registro.php" method="post" enctype="multipart/form-data">
        
        <h3>INFORMACIÓN GENERAL DEL TRABAJO</h3>
        
        <hr>

        <div>
            <label for="descripcion">Nombre Del Trabajador<span>*</span></label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label for="descripcion">Descripción de Trabajo<span>*</span></label>
            <input type="text" name="descripcion" id="descripcion">
        </div>

        <div>
            <label for="objetivo">Objetivo de Trabajo<span>*</span></label>
            <input type="text" name="objetivo" id="objetivo">
        </div>

        <div>
            <label for="area">Área de trabajo de Cliente<span>*</span></label>
            <input type="text" name="area" id="area">
        </div>

        <div>
            <label for="persona">Persona de Contacto Usuario Final<span>*</span></label>
            <input type="text" name="persona" id="persona">
        </div>

        <div>
            <label for="logistico">Persona de Contacto Logístico<span>*</span></label>
            <input type="text" name="logistico" id="logistico">
        </div>
    
        <div>
            <label for="ubicacion">Ubicación / Localización<span>*</span></label>
            <input type="text" name="ubicacion" id="ubicacion">
        </div>

        <div>
            <label for="tiempo">Tiempo de Entrega de Valorización<span>*</span></label>
            <input type="text" name="tiempo" id="tiempo">
        </div>

        <div>
            <label for=trabajo"">Tiempo de Entrega de Trabajo<span>*</span></label>
            <input type="text" name="trabajo" id="trabajo">
        </div>
        
        <div>
        <label for="prioridad">Prioridad de Ejecución<span>*</span></label>
        <select id="prioridad" onchange="generarInput()" name="prioridad">
          <option value="-">-</option>
          <option value="Emergencia">Emergencia</option>
          <option value="Programado">Programado</option>
          <option value="Otros">Otros (especificar)</option>
        </select>   
        <div id="contenedor"></div>
            <script>
    function generarInput() {
      var select = document.getElementById("prioridad");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Otros";
      var contenedor = document.getElementById("contenedor");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "prioridad";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div>

        <div>
            <label for="accesibilidad">Accesibilidad a área de Trabajo<span>*</span></label>
            <select id="accesibilidad" onchange="generarInput2()" name="accesibilidad">
            <option value="-">-</option>
            <option value="Peatonal">Peatonal</option>
            <option value="Coche de trabajo">Coche de trabajo</option>
            <option value="Vehicular con camioneta">Vehicular con camioneta</option>
            <option value="Vehicular con Grúa">Vehicular con Grúa</option>
            <option value="Otros">Otros (especificar)</option>
            </select>
            <div id="contenedor2"></div>
            <script>
    function generarInput2() {
      var select = document.getElementById("accesibilidad");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Otros";
      var contenedor = document.getElementById("contenedor2");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "accesibilidad";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div>

        <div>
            <label for="disponibilidad">Disponibilidad de área, equipo, unidad de trabajo<span>*</span></label>
            <select id="disponibilidad" onchange="generarInput3()" name="disponibilidad">
                <option value="-">-</option>
                <option value="Trabaja las 24 horas">Trabaja las 24 horas</option>
                <option value="Tiene paradas de mantenimiento semanal">Tiene paradas de mantenimiento semanal</option>
                <option value="Tiene paradas de mantenimiento quincenal">Tiene paradas de mantenimiento quincenal</option>
                <option value="Tiene paradas de mantenimiento anual">Tiene paradas de mantenimiento anual</option>
                <option value="Otros">Otros (especificar)</option>
            </select>
            <div id="contenedor3"></div>
            <script>
    function generarInput3() {
      var select = document.getElementById("disponibilidad");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Otros";
      var contenedor = document.getElementById("contenedor3");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "disponibilidad";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div>

        <div>
            <label for="horario">Horario de trabajo para trabajo del cliente<span>*</span></label>
            <select id="horario" onchange="generarInput4()" name="horario">
                <option value="-">-</option>
                <option value="Lunes a sábado diurno">Lunes a sábado diurno</option>
                <option value="Lunes a sábado nocturno">Lunes a sábado nocturno</option>
                <option value="Domingo">Domingo</option>
                <option value="Feriados">Feriados</option>
                <option value="Otros">Otros (especificar)</option>
            </select>
            <div id="contenedor4"></div>
            <script>
    function generarInput4() {
      var select = document.getElementById("horario");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Otros";
      var contenedor = document.getElementById("contenedor4");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "horario";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div>    

        <div>
            <label for="anticorrupcion">Anticorrupción<span>*</span></label>
            <select id="anticorrupcion"onchange="generarInput5()" name="anticorrupcion">
                <option value="-">-</option>
                <option value="Logístico es transparente con la información">Logístico es transparente con la información</option>
                <option value="Jefe de área producción  es transparente con la información">Jefe de área producción  es transparente con la información</option>
                <option value="Jefe de mantenimiento  es transparente con la información">Jefe de mantenimiento  es transparente con la información</option>
                <option value="Otros indicios de hostigamiento a proveedor">Otros indicios de hostigamiento a proveedor (especificar)</option>
            </select>
            <div id="contenedor5"></div>
            <script>
    function generarInput5() {
      var select = document.getElementById("anticorrupcion");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Otros indicios de hostigamiento a proveedor";
      var contenedor = document.getElementById("contenedor5");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "anticorrupcion";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div> 

        <div>
            <label for="valorizacion">Tipo de Valorización<span>*</span></label>
            <select id="valorizacion" onchange="generarInput6()" name="valorizacion">
                <option value="-">-</option>
                <option value="Concursable">Concursable</option>
                <option value="Exploración de precios">Exploración de precios</option>
                <option value="Otros">Otros (esppecificar)</option>
            </select>
            <div id="contenedor6"></div>
            <script>
    function generarInput6() {
      var select = document.getElementById("valorizacion");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Otros";
      var contenedor = document.getElementById("contenedor6");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "valorizacion";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div>
        
        <hr>
        <h3>INFORMACIÓN ESPECIFICA DEL TRABAJO</h3>
        <hr>

        <div>
            <label for="negocio">Línea de Negocio<span>*</span></label>
            <select id="negocio" onchange="generarInput7()" name="negocio">
                <option value="-">-</option>
                <option value="Proyecto">Proyecto</option>
                <option value="Mantenimiento">Mantenimiento</option>
                <option value="Fabricación">Fabricación</option>
                <option value="Servicios Genenerales">Servicios Genenerales</option> 
                <option value="Otros">Otros (especificar)</option>           
            </select>
            <div id="contenedor7"></div>
            <script>
    function generarInput7() {
      var select = document.getElementById("negocio");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Otros";
      var contenedor = document.getElementById("contenedor7");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "negocio";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div>

        <div>
            <label for="alcance">Tipo de Documentación de alcance de servicio<span>*</span></label>
            <select id="alcance" onchange="generarInput8()" name="alcance">
            <option value="-">-</option>
            <option value="Bosquejo">Bosquejo</option>
            <option value="Memoria de Cálculo">Memoria de Cálculo</option>
            <option value="Planos de Detalle">Planos de Detalle</option>
            <option value="Información Verbal">Información Verbal</option>
            <option value="Otros">Otros (especificar)</option>
            </select>
            <div id="contenedor8"></div>
            <script>
    function generarInput8() {
      var select = document.getElementById("alcance");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Otros";
      var contenedor = document.getElementById("contenedor8");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "alcance";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div>

        <div>
            <label for="mano">Mano de Obra<span>*</span></label>
            <select id="mano" onchange="generarInput9()" name="mano">
              <option value="-">-</option>
              <option value="Técnicos">Técnicos </option>
              <option value="Ingeniería">Ingeniería</option>
              <option value="Mano de obra con certificación especial">Mano de obra con certificación especial (especificar)</option>
              <option value="Certificaciones de empresa específicos">Certificaciones de empresa específicos (especificar)</option>           
            </select>
            <div id="contenedor9"></div>
            <script>
    function generarInput9() {
      var select = document.getElementById("mano");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Certificaciones de empresa específicos";
      var contenedor = document.getElementById("contenedor9");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "mano";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div>

        <div>
            <label for="materiales">Materiales<span>*</span></label>
            <select id="materiales" onchange="generarInput10()" name="materiales">
              <option value="-">-</option>
              <option value="Materiales especiales">Materiales especiales (especificar)</option>          
            </select>
            <div id="contenedor10"></div>
            <script>
    function generarInput10() {
      var select = document.getElementById("materiales");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Materiales especiales";
      var contenedor = document.getElementById("contenedor10");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "materiales";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div>

        <div>
            <label for="servicios">Servicios<span>*</span></label>
            <select id="servicios" onchange="generarInput11()" name="servicios">
              <option value="-">-</option>
              <option value="Servicios externos especiales">Servicios externos especiales (especificar)</option>          
            </select>
            <div id="contenedor11"></div>
            <script>
    function generarInput11() {
      var select = document.getElementById("servicios");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Servicios externos especiales";
      var contenedor = document.getElementById("contenedor11");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "servicios";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div>
        
        <div>
            <label for="cliente">Servicios compartidos con Cliente<span>*</span></label>
            <select id="cliente" onchange="generarInput12()" name="cliente">
              <option value="-">-</option>
              <option value="Agua">Agua</option>
              <option value="Comedor">Comedor</option>
              <option value="Servicios Higiénicos">Servicios Higiénicos</option>
              <option value="Estacionamiento Interno, Externo">Estacionamiento Interno, Externo (especificar)</option>       
              <option value="Energía Eléctrica (Especificar voltaje y distancia de punto de energía)">Energía Eléctrica (Especificar voltaje y distancia de punto de energía)</option> 
              <option value="Aire Comprimido (especificar presión y distancia a punto de energía)">Aire Comprimido (especificar presión y distancia a punto de energía)</option>   
              <option value="Otros">Otros (especificar)</option>
            </select>
            <div id="contenedor12"></div>
            <script>
    function generarInput12() {
      var select = document.getElementById("cliente");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Otros";
      var contenedor = document.getElementById("contenedor12");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "cliente";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div>

        <hr>
        <h3>SEGURIDAD INDUSTRIAL</h3>
        <hr>

        <div>
            <label for="tipotrabajo">Tipo de Trabajo<span>*</span></label>
            <select id="tipotrabajo" onchange="generarInput13()" name="tipotrabajo">
              <option value="-">-</option>
              <option value="Trabajo en Caliente">Trabajo en Caliente</option>
              <option value="Trabajo Eléctrico">Trabajo Eléctrico</option>
              <option value="Trabajo en Altura">Trabajo en Altura</option>
              <option value="Trabajo de Maniobras de Izaje">Trabajo de Maniobras de Izaje</option> 
              <option value="Otros">Otros (especificar)</option>           
        </select>
        <div id="contenedor13"></div>
            <script>
    function generarInput13() {
      var select = document.getElementById("tipotrabajo");
      var opcionSeleccionada = select.options[select.selectedIndex].value == "Otros";
      var contenedor = document.getElementById("contenedor13");

      if (opcionSeleccionada) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "tipotrabajo";
        input.placeholder = "Especificar";

        contenedor.appendChild(input);
      }
    }
  </script>
        </div>

        <div>
            <label for="epp">EPP<span>*</span></label>
            <input type="text" name="epp" id="epp">
        </div>

        <div>
            <label for="equipos">Equipos<span>*</span></label>
            <input type="text" name="equipos" id="equipos">
        </div>

        <div>
            <label for="procedimientos">Procedimientos Específicos<span>*</span></label>
            <input type="text" name="procedimientos" id="procedimientos">
        </div>

        <div>
            <label for="jefe">Jefe de Seguridad de área y teléfono de contacto<span>*</span></label>
            <input type="text" name="jefe" id="jefe">
        </div>

        <div>
            <label for="riesgos">Riesgos de trabajo específicos (especificar)<span>*</span></label>
            <input type="text" name="riesgos" id="riesgos">
        </div><br> <br>
        <div>
            <label for="observaciones">Observaciones del trabajo<span>*</span></label>
            <textarea name="observaciones" rows="5" id="texarea"></textarea>
        </div>

        <br><br>
        
        <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="imagen" require>
    <label class="custom-file-label" for="validatedCustomFile">Elegir archivo...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>

        <!-- <div>
            <label for="imagen">Apuntes, medidas, gráficas de Campo</label>
            <input type="file" name="imagen" multiple id="imagen" accept="image/*">
        </div> -->

        <div class="btn-block">
          <button type="submit">Enviar</button>
        </div>
      </form>
    </div>
    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>