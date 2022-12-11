<?php

include("conexion.php");

$idHorario=$_GET['idHorario'];

$consulta="DELETE FROM horario WHERE idHorario='$idHorario'";
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 


    if($resultado){
        Header("Location: ../horarios.php");
    }
?>