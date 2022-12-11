<?php

include("conexion.php");

$idProfesor=$_GET['idProfesor'];

$consulta="DELETE FROM profesor WHERE idProfesor='$idProfesor'";
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 


    if($resultado){
        Header("Location: ../profesores.php");
    }
?>