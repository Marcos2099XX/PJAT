<?php
include("conexion.php");

$nombreMateria=$_POST['nombreMateria'];

$consulta = "INSERT INTO materia (nombreMateria) VALUES('$nombreMateria') ";			
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 

if($resultado){
    Header("Location: ../materias.php");
    
}else {

}
?>