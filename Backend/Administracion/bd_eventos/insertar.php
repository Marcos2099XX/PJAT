<?php
include("conexion.php");

$tituloEvento=$_POST['tituloEvento'];
$descripcion=$_POST['descripcion'];
$fechaEvento=$_POST['fechaEvento'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$consulta = "INSERT INTO evento (tituloEvento, descripcion, fechaEvento, imagen) VALUES('$tituloEvento', '$descripcion', '$fechaEvento', '$imagen') ";			
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 

if($resultado){
    Header("Location: ../eventos.php");
    
}else {

}
?>