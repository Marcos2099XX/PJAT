<?php

include("conexion.php");

$idEvento=$_GET['idEvento'];

$consulta="DELETE FROM evento WHERE idEvento='$idEvento'";
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 


    if($resultado){
        Header("Location: ../eventos.php");
    }
?>