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
  </head>
  <?php include "header.php"; ?>
  <body>
    <div class="testbox">
      <form action="registro.php" method="post" enctype="multipart/form-data">
        <br><br>
        <h3>INFORMACIÓN GENERAL DEL TRABAJO</h3>
        
        <hr>

        <div>
            <label for="descripcion">Nombre Del Trabajador<span>*</span></label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label for="descripcion">Fecha de la Observacion<span>*</span></label>
            <input type="date" name="fecha" id="fecha">
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
        <select id="prioridad" name="prioridad">
          <option value="-">-</option>
          <option value="Emergencia">Emergencia</option>
          <option value="Programado">Programado</option>
          <option value="Otros">Otros (especificar)</option>
        </select>
        </div>

        
        <div>
            <label for="accesibilidad">Accesibilidad a área de Trabajo<span>*</span></label>
            <select id="accesibilidad" name="accesibilidad">
            <option value="-">-</option>
            <option value="Peatonal">Peatonal</option>
            <option value="Coche de trabajo">Coche de trabajo</option>
            <option value="Vehicular con camioneta">Vehicular con camioneta</option>
            <option value="Vehicular con Grúa">Vehicular con Grúa</option>
            <option value="Otros">Otros (especificar)</option>
            </select>
        </div>


        <div>
            <label for="disponibilidad">Disponibilidad de área, equipo, unidad de trabajo<span>*</span></label>
            <select id="disponibilidad" name="disponibilidad">
                <option value="-">-</option>
                <option value="Trabaja las 24 horas">Trabaja las 24 horas</option>
                <option value="Tiene paradas de mantenimiento semanal">Tiene paradas de mantenimiento semanal</option>
                <option value="Tiene paradas de mantenimiento quincenal">Tiene paradas de mantenimiento quincenal</option>
                <option value="Tiene paradas de mantenimiento anual">Tiene paradas de mantenimiento anual</option>
                <option value="Otros">Otros (especificar)</option>
            </select>
        </div>

        <div>
            <label for="horario">Horario de trabajo para trabajo del cliente<span>*</span></label>
            <select id="horario" name="horario">
                <option value="-">-</option>
                <option value="Lunes a sábado diurno">Lunes a sábado diurno</option>
                <option value="Lunes a sábado nocturno">Lunes a sábado nocturno</option>
                <option value="Domingo">Domingo</option>
                <option value="Feriados">Feriados</option>
                <option value="Otros">Otros (especificar)</option>
            </select>
        </div>    

        <div>
            <label for="anticorrupcion">Anticorrupción<span>*</span></label>
            <select id="anticorrupcion" name="anticorrupcion">
                <option value="-">-</option>
                <option value="Logístico es transparente con la información">Logístico es transparente con la información</option>
                <option value="Jefe de área producción  es transparente con la información">Jefe de área producción  es transparente con la información</option>
                <option value="Jefe de mantenimiento  es transparente con la información">Jefe de mantenimiento  es transparente con la información</option>
                <option value="Otros indicios de hostigamiento a proveedor">Otros indicios de hostigamiento a proveedor (especificar)</option>
            </select>
        </div> 

        <div>
            <label for="valorizacion">Tipo de Valorización<span>*</span></label>
            <select id="valorizacion" name="valorizacion">
                <option value="-">-</option>
                <option value="Concursable">Concursable</option>
                <option value="Exploración de precios">Exploración de precios</option>
                <option value="Otros">Otros (esppecificar)</option>
            </select>
        </div>
        
        <hr>
        <h3>INFORMACIÓN ESPECIFICA DEL TRABAJO</h3>
        <hr>

        <div>
            <label for="negocio">Línea de Negocio<span>*</span></label>
            <select id="negocio" name="negocio">
                <option value="-">-</option>
                <option value="Proyecto">Proyecto</option>
                <option value="Mantenimiento">Mantenimiento</option>
                <option value="Fabricación">Fabricación</option>
                <option value="Servicios Genenerales">Servicios Genenerales</option> 
                <option value="Otros">Otros (especificar)</option>           
            </select>
        </div>

        <div>
            <label for="alcance">Tipo de Documentación de alcance de servicio<span>*</span></label>
            <select id="alcance" name="alcance">
            <option value="-">-</option>
            <option value="Bosquejo">Bosquejo</option>
            <option value="Memoria de Cálculo">Memoria de Cálculo</option>
            <option value="Planos de Detalle">Planos de Detalle</option>
            <option value="Información Verbal">Información Verbal</option>
            <option value="Otros">Otros (especificar)</option>
            </select>
        </div>

        <div>
            <label for="mano">Mano de Obra<span>*</span></label>
            <select id="mano" name="mano">
              <option value="-">-</option>
              <option value="Técnicos">Técnicos </option>
              <option value="Ingeniería">Ingeniería</option>
              <option value="Mano de obra con certificación especial">Mano de obra con certificación especial (especificar)</option>
              <option value="Certificaciones de empresa específicos">Certificaciones de empresa específicos (especificar)</option>           
            </select>
        </div>

        <div>
            <label for="materiales">Materiales<span>*</span></label>
            <select id="materiales" name="materiales">
              <option value="-">-</option>
              <option value="Materiales especiales">Materiales especiales (especificar)</option>          
            </select>
        </div>

        <div>
            <label for="servicios">Servicios<span>*</span></label>
            <select id="servicios" name="servicios">
              <option value="-">-</option>
              <option value="Servicios externos especiales">Servicios externos especiales (especificar)</option>          
            </select>
        </div>
        
        <div>
            <label for="cliente">Servicios compartidos con Cliente<span>*</span></label>
            <select id="cliente" name="cliente">
              <option value="-">-</option>
              <option value="Agua">Agua</option>
              <option value="Comedor">Comedor</option>
              <option value="Servicios Higiénicos">Servicios Higiénicos</option>
              <option value="Estacionamiento Interno, Externo">Estacionamiento Interno, Externo (especificar)</option>       
              <option value="Energía Eléctrica (Especificar voltaje y distancia de punto de energía)">Energía Eléctrica (Especificar voltaje y distancia de punto de energía)</option> 
              <option value="Aire Comprimido (especificar presión y distancia a punto de energía)">Aire Comprimido (especificar presión y distancia a punto de energía)</option>   
              <option value="Otros">Otros (especificar)</option>
            </select>
        </div>

        <hr>
        <h3>SEGURIDAD INDUSTRIAL</h3>
        <hr>

        <div>
            <label for="tipotrabajo">Tipo de Trabajo<span>*</span></label>
            <select id="tipotrabajo" name="tipotrabajo">
              <option value="-">-</option>
              <option value="Trabajo en Caliente">Trabajo en Caliente</option>
              <option value="Trabajo Eléctrico">Trabajo Eléctrico</option>
              <option value="Trabajo en Altura">Trabajo en Altura</option>
              <option value="Trabajo de Maniobras de Izaje">Trabajo de Maniobras de Izaje</option> 
              <option value="Otros">Otros (especificar)</option>           
        </select>
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
            <input type="text" name="observaciones" id="observaciones">
        </div><br> <br>
        
        <div>
            <label for="imagen">Apuntes, medidas, gráficas de Campo</label>
            <input type="file" name="imagen" multiple id="imagen" accept="image/*">
        </div>

        <div class="btn-block">
          <button type="submit">Enviar</button>
        </div>
      </form>
    </div>
  </body>
</html>