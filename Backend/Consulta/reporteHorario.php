<?php
require('Reportes/fpdf.php');

$idAlumno = $_GET['idAlumno'];

require 'bd/conexion.php';

$consulta = "SELECT idGrupo FROM alumno WHERE idAlumno= '$idAlumno'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$idGrupo = $resultado->fetchColumn();

$consulta = "SELECT * FROM profesor WHERE idGrupo= '$idGrupo'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datosProfesor=$resultado->fetchAll(PDO::FETCH_ASSOC);

$consulta = "SELECT * FROM horario a INNER JOIN grupo b on a.idGrupo = b.idGrupo WHERE a.idGrupo= '$idGrupo'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

$nombreProfesor = $datosProfesor[0]["nombre"]." ".$datosProfesor[0]["apellidoP"]." ".$datosProfesor[0]["apellidoM"];
$grupo = $data[0]["nombreGrupo"];
$horas = $data[0]["horaI"]."-".$data[0]["horaF"];

date_default_timezone_set('America/Monterrey');
$fecha = date("d/m/Y");


class PDF extends FPDF
{


// Cabecera de página
function Header()
{
    global $nombreAlumno;
    global $matricula;
    global $nombreProfesor;
    global $grupo;
    global $fecha;

    // Logo
    $this->Image('Reportes/logoEscuela.jpeg',10,10,50);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(70,10,'Horario de clases',0,0,'C');
    // Salto de línea
    $this->SetLeftMargin(1);
    $this->Ln(20);
    $this->SetFont('Arial','B',12);
    $this->SetTextColor(255,255,255);
    $this->SetFillColor(25, 135, 84);
    
    $this->Cell (52,10, utf8_decode("Grupo"),1,0,'C',1);
    $this->Cell (104,10, utf8_decode("Profesor encargado"),1,0,'C',1);
    $this->Cell (52,10, utf8_decode("Fecha"),1,0,'C',1);
    $this->Ln();
    
    $this->SetFont('Arial','',12);
    $this->SetTextColor(0,0,0);
    $this->Cell (52,10, utf8_decode($grupo),1,0,'C',0);
    $this->Cell (104,10, utf8_decode($nombreProfesor),1,0,'C',0);
    $this->Cell (52,10, utf8_decode($fecha),1,0,'C',0);
    $this->Ln();
    
    $this->SetFont('Arial','B',12);
    $this->SetTextColor(255,255,255);
    $this->SetFillColor(25, 135, 84);
    $this->Cell (23,10, utf8_decode("Horas"),1,0,'C',1);
    $this->Cell (37,10, utf8_decode("Lunes"),1,0,'C',1);
    $this->Cell (37,10, utf8_decode("Martes"),1,0,'C',1);
    $this->Cell (37,10, utf8_decode("Miercoles"),1,0,'C',1);
    $this->Cell (37,10, utf8_decode("Jueves"),1,0,'C',1);
    $this->Cell (37,10, utf8_decode("Viernes"),1,0,'C',1);
    $this->Ln();
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}




$pdf = new PDF();
$pdf->AddPage();
$pdf->SetLeftMargin(1);
$pdf->SetFont('Arial','',12);

foreach($data as $dat) { 
    $pdf->Cell (23,10, utf8_decode($horas),1,0,'C',0);
    $pdf->Cell (37,10, utf8_decode($dat['materiaLunes']),1,0,'L',0);
    $pdf->Cell (37,10, utf8_decode($dat['materiaMartes']),1,0,'L',0);
    $pdf->Cell (37,10, utf8_decode($dat['materiaMiercoles']),1,0,'L',0);
    $pdf->Cell (37,10, utf8_decode($dat['materiaJueves']),1,0,'L',0); 
    $pdf->Cell (37,10, utf8_decode($dat['materiaViernes']),1,0,'L',0); 
    $pdf->Ln();
}
$pdf->Output();