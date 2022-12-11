<?php

include("conexion.php");

$idMateria=$_GET['idMateria'];

$consulta="DELETE FROM materia WHERE idMateria='$idMateria'";
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 


    if($resultado){
        Header("Location: ../materias.php");
    }
?>