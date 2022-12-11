<?php
include("conexion.php");

$nombre=$_POST['nombre'];
$apellidoP=$_POST['apellidoP'];
$apellidoM=$_POST['apellidoM'];
$sexo=$_POST['sexo'];
$matricula=$_POST['matricula'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$grupo=$_POST['grupo'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


$consulta = "SELECT idGrupo FROM grupo WHERE nombreGrupo=?";
$resultado= $conexion->prepare($consulta);
$resultado->execute([$grupo]);
$idGrupo = $resultado->fetchColumn();


$consulta = "INSERT INTO profesor (nombre, apellidoP, apellidoM, sexo, matricula, telefono, correo, idGrupo, imagen) VALUES('$nombre', '$apellidoP', '$apellidoM', '$sexo', '$matricula', '$telefono', '$correo', '$idGrupo', '$imagen') ";			
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 

if($resultado){
    Header("Location: ../profesores.php");
    
}else {

}
?>