<?php
include("conexion.php");


$idAlumno=$_POST['idAlumno'];
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

$consulta = "UPDATE alumno SET nombre='$nombre', apellidoP='$apellidoP', apellidoM='$apellidoM', edad='$edad', sexo='$sexo', idGrupo='$idGrupo', matricula='$matricula' WHERE idAlumno='$idAlumno'";		
$resultado = $conexion->prepare($consulta);
$resultado->execute();  

if($resultado){
    Header("Location: ../alumnos.php");
    
}else {

}