<?php
include("conexion.php");

$nombreGrupo=$_POST['nombreGrupo'];



$consulta = "INSERT INTO grupo (nombreGrupo) VALUES('$nombreGrupo')";			
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 

if($resultado){
    Header("Location: ../grupos.php");
    
}else {

}
?>