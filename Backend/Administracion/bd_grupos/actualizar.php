<?php
include("conexion.php");


$idGrupo=$_POST['idGrupo'];
$nombreGrupo=$_POST['nombreGrupo'];


$consulta = "UPDATE grupo SET nombreGrupo='$nombreGrupo' WHERE idGrupo='$idGrupo'";		
$resultado = $conexion->prepare($consulta);
$resultado->execute();  

if($resultado){
    Header("Location: ../grupos.php");
    
}else {

}