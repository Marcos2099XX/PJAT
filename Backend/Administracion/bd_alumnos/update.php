<?php

require_once "bd_alumnos/conexion.php";
$con=conectar();

$idAlumno=$_POST['idAlumno'];
$nombre=$_POST["nombre"];
$apellidoP=$_POST["apellidoP"];
$apellidoM=$_POST["apellidoM"];
$sexo=$_POST["sexo"];
$curp=$_POST["curp"];
$fechaNac=$_POST["fechaNac"];
$matricula=$_POST["matricula"];
$direccion=$_POST["direccion"];

$sql="UPDATE alumno SET  nombre='$nombre',apellidoP='$apellidoP',apellidoM='$apellidoM',sexo='$sexo',curp='$curp',fechaNac='$fechaNac',matricula='$matricula',direccion='$direccion' WHERE idAlumno='$idAlumno'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumnos.php");
    }
?>