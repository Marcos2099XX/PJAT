<?php
include("conexion.php");

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


$consulta = "INSERT INTO calificacion (idAlumno, idMateria, primerBimestre, segundoBimestre, tercerBimestre, promedio) VALUES('$idAlumno', '$idMateria', '$primerBimestre', '$segundoBimestre', '$tercerBimestre', '$promedio')";			
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 

if($resultado){
    Header("Location: ../calificaciones.php");
    
}else {

}
?>