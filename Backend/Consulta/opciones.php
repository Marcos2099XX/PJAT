<?php
    include_once 'bd/conexion.php';

    $matricula = $_GET['matricula'];
    
    $consulta = "SELECT * FROM alumno WHERE matricula= '$matricula'";
    
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
    <title>Opciones de consulta</title>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center has-bg-img">

        <img class = "bg-img" src="../fondo_opciones.jpeg" alt="">
        <div class="col-auto bg-light  p-5 text-center col-sm-5 position-absolute">
            <h2>Bienvenido <?php echo $data[0]['nombre']?></h2>
            <h2>¿Qué desea consultar?</h2>
            <br>
            <br>
            <div class ="container">
                <a href="horario.php?idAlumno= <?php echo $data[0]['idAlumno']?> " class = "btn btn-success">Horario</a>
                <a href="calificaciones.php?idAlumno= <?php echo $data[0]['idAlumno']?>"  class="btn btn-success">Calificaciones</a>
            </div>
        
        </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V  "
            crossorigin="anonymous"></script>
</body>
</html>