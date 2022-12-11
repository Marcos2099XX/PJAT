<?php
include("conexion.php");


$idMateria=$_POST['idMateria'];
$nombreMateria=$_POST['nombreMateria'];


$consulta = "UPDATE materia SET nombreMateria='$nombreMateria' WHERE idMateria='$idMateria'";		
$resultado = $conexion->prepare($consulta);
$resultado->execute();  

if($resultado){
    Header("Location: ../materias.php");
    
}else {

}