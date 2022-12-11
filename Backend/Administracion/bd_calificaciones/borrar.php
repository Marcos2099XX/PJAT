<?php

include("conexion.php");

$idCalificacion=$_GET['idCalificacion'];

$consulta="DELETE FROM calificacion WHERE idCalificacion='$idCalificacion'";
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 


    if($resultado){
        Header("Location: ../calificaciones.php");
    }
?>