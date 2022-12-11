
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

$consulta = "SELECT * FROM calificacion a INNER JOIN materia b on a.idMateria = b.idMateria INNER JOIN alumno c on a.idAlumno = c.idAlumno  WHERE a.idAlumno= '$idAlumno'";

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
    <title>Calificaciones</title>
</head>
<body>

<nav class="navbar navbar-success bg-success py-3">
    <div class="container-fluid">
        <br>
        <h1>CALIFICACIONES</h1>
        <br>    
    </div>  
</nav>

<div class="container">
    <br>
    <br>
    <h5>Alumno:  <?php echo $datosAlumno[0]['nombre']?>  <?php echo $datosAlumno[0]['apellidoP']?>  <?php echo $datosAlumno[0]['apellidoM']?></h5>
    <h5>Matricula: <?php echo $datosAlumno[0]['matricula']?></h5>
</div>
<div class="d-flex justify-content-center">

<div class="row">


    <div class="table-responsive">
        <br>
        <br>
        <table class="table table-bordered table-stripeds">
            <thead class="table-success">
                <tr>
                    <th>Alumno</th>
                    <th>Materia</th>
                    <th>1er bimestre</th>
                    <th>2do bimestre</th>
                    <th>3er bimestre</th>
                    <th>Promedio</th>
                </tr>
            </thead>

            <tbody>
                <?php                            
                    foreach($data as $dat) {                                                        
                    ?>
                    <tr>
                        <td><?php echo $dat['nombre'] ?> <?php echo $dat['apellidoP'] ?> <?php echo $dat['apellidoM'] ?></td>
                        <td><?php echo $dat['nombreMateria'] ?></td>
                        <td><?php echo $dat['primerBimestre'] ?></td>
                        <td><?php echo $dat['segundoBimestre'] ?></td>
                        <td><?php echo $dat['tercerBimestre'] ?></td>
                        <td><?php echo $dat['promedio'] ?></td>      
                    </tr>
                    <?php
                        }
                ?>      
            </tbody>
        </table>

        <br>
        <br>
        <a href="reporteCalificaciones.php?idAlumno=<?php echo $datosAlumno[0]['idAlumno']?>" class="btn btn-success"><i class="bi bi-printer"></i> Imprimir</a>
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
