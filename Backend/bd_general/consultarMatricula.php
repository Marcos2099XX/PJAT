<?php

include("conexion.php");

$matricula=$_POST['matricula'];

$consulta = "SELECT * FROM alumno WHERE matricula=?";
$resultado= $conexion->prepare($consulta);
$resultado->execute([$matricula]);
$count = $resultado->fetchColumn();

if($count>=1){
    Header("Location: ../Consulta/opciones.php?matricula=".$matricula);
    
}else {
    echo'<script type="text/javascript">
    alert("Matrícula no encontrada");
    window.location.href="../../Frontend/MenuOp.php";
    </script>';
}
?>