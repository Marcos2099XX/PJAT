<?php

include("conexion.php");

$matricula=$_POST['matricula'];
$contrasenia=$_POST['contrasenia'];

$consulta = "SELECT * FROM administrador WHERE matricula=? AND  contrasenia=?";
$resultado= $conexion->prepare($consulta);
$resultado->execute([$matricula,$contrasenia]);
$count = $resultado->fetchColumn();

if($count>=1){
    Header("Location: ../Administracion/index.php");
    
}else {
    echo'<script type="text/javascript">
    alert("Matrícula o contraseña incorrectas");
    window.location.href="../../Frontend/LoginAdmin.php";
    </script>';
}
?>