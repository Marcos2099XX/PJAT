<?php
include("conexion.php");


$idEvento=$_POST['idEvento'];
$tituloEvento=$_POST['tituloEvento'];
$descripcion=$_POST['descripcion'];
$fechaEvento=$_POST['fechaEvento'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));



$consulta = "UPDATE evento SET tituloEvento='$tituloEvento', descripcion='$descripcion', fechaEvento='$fechaEvento' , imagen='$imagen' WHERE idEvento='$idEvento'";		
$resultado = $conexion->prepare($consulta);
$resultado->execute();  

if($resultado){
    Header("Location: ../eventos.php");
    
}else {

}