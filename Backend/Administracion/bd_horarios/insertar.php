<?php
include("conexion.php");

$grupo=$_POST['grupo'];
$materiaLunes=$_POST['materiaLunes'];
$materiaMartes=$_POST['materiaMartes'];
$materiaMiercoles=$_POST['materiaMiercoles'];
$materiaJueves=$_POST['materiaJueves'];
$materiaViernes=$_POST['materiaViernes'];
$horaI=$_POST['horaI'];
$horaF=$_POST['horaF'];


$consulta = "SELECT idGrupo FROM grupo WHERE nombreGrupo=?";
$resultado= $conexion->prepare($consulta);
$resultado->execute([$grupo]);
$idGrupo = $resultado->fetchColumn();


$consulta = "INSERT INTO horario (idGrupo, materiaLunes, materiaMartes, materiaMiercoles, materiaJueves, materiaViernes, horaI, horaF) VALUES('$idGrupo', '$materiaLunes', '$materiaMartes', '$materiaMiercoles', '$materiaJueves', '$materiaViernes', '$horaI', '$horaF') ";			
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 

if($resultado){
    Header("Location: ../horarios.php");
    
}else {

}
?>