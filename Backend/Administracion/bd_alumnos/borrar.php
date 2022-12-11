<?php

include("conexion.php");

$idAlumno=$_GET['idAlumno'];

$consulta="DELETE FROM alumno WHERE idAlumno='$idAlumno'";
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 


    if($resultado){
        Header("Location: ../alumnos.php");
    }
?>