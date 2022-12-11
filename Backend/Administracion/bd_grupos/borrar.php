<?php

include("conexion.php");

$idGrupo=$_GET['idGrupo'];

$consulta="DELETE FROM grupo WHERE idGrupo = '$idGrupo'";
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 


    if($resultado){
        Header("Location: ../grupos.php");
    }
?>