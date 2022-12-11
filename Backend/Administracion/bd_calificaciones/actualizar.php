<?php
include("conexion.php");


$idCalificacion=$_POST['idCalificacion'];
$matricula=$_POST['matricula'];
$nombreMateria=$_POST['nombreMateria'];
$primerBimestre=$_POST['primerBimestre'];
$segundoBimestre=$_POST['segundoBimestre'];
$tercerBimestre=$_POST['tercerBimestre'];
$promedio=$_POST['promedio'];


$consulta = "SELECT idAlumno FROM alumno WHERE matricula=?";
$resultado= $conexion->prepare($consulta);
$resultado->execute([$matricula]);
$idAlumno = $resultado->fetchColumn();

$consulta = "SELECT idMateria FROM materia WHERE nombreMateria=?";
$resultado= $conexion->prepare($consulta);
$resultado->execute([$nombreMateria]);
$idMateria = $resultado->fetchColumn();

$consulta = "UPDATE calificacion SET idAlumno='$idAlumno', idMateria='$idMateria', primerBimestre='$primerBimestre', segundoBimestre='$segundoBimestre', tercerBimestre='$tercerBimestre', promedio='$promedio' WHERE idCalificacion='$idCalificacion'";		
$resultado = $conexion->prepare($consulta);
$resultado->execute();  

if($resultado){
    Header("Location: ../calificaciones.php");
    
}else {

}