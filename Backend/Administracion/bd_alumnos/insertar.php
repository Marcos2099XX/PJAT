<?php
include("conexion.php");

$nombre=$_POST['nombre'];
$apellidoP=$_POST['apellidoP'];
$apellidoM=$_POST['apellidoM'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$grupo=$_POST['grupo'];
$matricula=$_POST['matricula'];


$consulta = "SELECT idGrupo FROM grupo WHERE nombreGrupo=?";
$resultado= $conexion->prepare($consulta);
$resultado->execute([$grupo]);
$idGrupo = $resultado->fetchColumn();


$consulta = "INSERT INTO alumno (nombre, apellidoP, apellidoM, edad, sexo, idGrupo, matricula) VALUES('$nombre', '$apellidoP', '$apellidoM', '$edad', '$sexo', '$idGrupo', '$matricula') ";			
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 

if($resultado){
    Header("Location: ../alumnos.php");
    
}else {

}
?>