<?php
include_once 'bd/conexion.php';

$idAlumno = $_GET['idAlumno'];

$consulta = "SELECT * FROM alumno WHERE idAlumno= '$idAlumno'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datosAlumno=$resultado->fetchAll(PDO::FETCH_ASSOC);
$idGrupo = $datosAlumno[0]['idGrupo'];

$consulta = "SELECT * FROM profesor WHERE idGrupo= '$idGrupo'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datosProfesor=$resultado->fetchAll(PDO::FETCH_ASSOC);

$consulta = "SELECT * FROM horario a INNER JOIN grupo b on a.idGrupo = b.idGrupo WHERE a.idGrupo= '$idGrupo'";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">   
    <title>Horario</title>
</head>
<body>


<nav class="navbar navbar-success bg-success py-3">
    <div class="container-fluid">
        <br>
        <h1>HORARIO DE CLASES</h1>
        <br>    
    </div>  
</nav>

<div class="container">
    <br>
    <br>
    <h5>Alumno:  <?php echo $datosAlumno[0]['nombre']?>  <?php echo $datosAlumno[0]['apellidoP']?>  <?php echo $datosAlumno[0]['apellidoM']?></h5>
    <h5>Matricula: <?php echo $datosAlumno[0]['matricula']?></h5>
    <h5>Grupo: <?php echo $data[0]['nombreGrupo']?></h5>
    <h5>Profesor encargado: <?php echo $datosProfesor[0]['nombre']?>  <?php echo $datosProfesor[0]['apellidoP']?>  <?php echo $datosProfesor[0]['apellidoM']?></h5>

</div>

<div class="d-flex justify-content-center">

<div class="row">
    

    <div class="table-responsive">


        <br>
        <br>
                <table class="table table-bordered table-stripeds">
                    <thead class="table-success">
                        <tr>                            
                            <th>Horas</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miercoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                
                                <td><?php echo $dat['horaI'] ?>-<?php echo $dat['horaF'] ?></td>
                                <td><?php echo $dat['materiaLunes'] ?></td>
                                <td><?php echo $dat['materiaMartes'] ?></td>
                                <td><?php echo $dat['materiaMiercoles'] ?></td> 
                                <td><?php echo $dat['materiaJueves'] ?></td>
                                <td><?php echo $dat['materiaViernes'] ?></td>
                            </tr>
                            <?php
                                }
                        ?>      
                    </tbody>
                </table>

                <br>
                <br>
                <a href="reporteHorario.php?idAlumno=<?php echo $datosAlumno[0]['idAlumno'] ?>" class="btn btn-success"><i class="bi bi-printer"></i> Imprimir</a>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"></script>
</body>
</html>