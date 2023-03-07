<?php 
    include("conexion.php");

    $conectar = conexion();
    $sql="SELECT *  FROM formulario";
    $query=mysqli_query($conectar,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css?<?=date('Y-m-d H:i:s')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title >Formatos</title>
    
</head>
<?php include "header.php"; ?>
</head>
<br>
<center>
<body>
    <h1 id="title">Formatos</h1>
<br>
    <div class="col-md-8">
                            <table class="table" >
                                <thead class="table table-striped table-dark">
                                    <tr>
                                    <th></th>
                                        <th>N° Formulario</th>
                                        <th>Nombre</th>
                                        <th>Fecha</th>
                                        <th></th>
                                        <th></th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th></th>
                                                <th id="id"><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th> <a href="reporte.php?id=<?php echo $row['id']?>">Descargar Excel</a></th>    
                                                <th></th>                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
</body>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>