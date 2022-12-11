<?php
include("conexion.php");


$idHorario=$_POST['idHorario'];
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

$consulta = "UPDATE horario SET idGrupo='$idGrupo', materiaLunes='$materiaLunes', materiaMartes='$materiaMartes', materiaMiercoles='$materiaMiercoles', materiaJueves='$materiaJueves', materiaViernes='$materiaViernes', horaI='$horaI', horaF='$horaF' WHERE idHorario='$idHorario'";		
$resultado = $conexion->prepare($consulta);
$resultado->execute();  

if($resultado){
    Header("Location: ../horarios.php");
    
}else {

}