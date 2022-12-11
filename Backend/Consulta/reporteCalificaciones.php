<?php
require('Reportes/fpdf.php');

$idAlumno = $_GET['idAlumno'];

require 'bd/conexion.php';

$consulta = "SELECT * FROM alumno WHERE idAlumno= '$idAlumno'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datosAlumno=$resultado->fetchAll(PDO::FETCH_ASSOC);

$consulta = "SELECT * FROM calificacion a INNER JOIN materia b on a.idMateria = b.idMateria INNER JOIN alumno c on a.idAlumno = c.idAlumno  WHERE a.idAlumno= '$idAlumno'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);


$nombreAlumno = $data[0]["nombre"]." ".$data[0]["apellidoP"]." ".$data[0]["apellidoM"];
$matricula = $data[0]["matricula"];

date_default_timezone_set('America/Monterrey');
$fecha = date("d/m/Y");


class PDF extends FPDF
{


// Cabecera de página
function Header()
{
    global $nombreAlumno;
    global $matricula;
    global $fecha;

    // Logo
    $this->Image('Reportes/logoEscuela.jpeg',10,10,50);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(70,10,'Calificaciones',0,0,'C');
    // Salto de línea
    $this->SetLeftMargin(12.5);
    $this->Ln(20);
    $this->SetFont('Arial','B',12);
    $this->SetTextColor(255,255,255);
    $this->SetFillColor(25, 135, 84);
    
    $this->Cell (50,10, utf8_decode("Matricula"),1,0,'C',1);
    $this->Cell (85,10, utf8_decode("Alumno"),1,0,'C',1);
    $this->Cell (50,10, utf8_decode("Fecha"),1,0,'C',1);
    $this->Ln();
    
    $this->SetFont('Arial','',12);
    $this->SetTextColor(0,0,0);
    $this->Cell (50,10, utf8_decode($matricula),1,0,'C',0);
    $this->Cell (85,10, utf8_decode($nombreAlumno),1,0,'C',0);
    $this->Cell (50,10, utf8_decode($fecha),1,0,'C',0);
    $this->Ln();
    
    $this->SetFont('Arial','B',12);
    $this->SetTextColor(255,255,255);
    $this->SetFillColor(25, 135, 84);
    $this->Cell (70,10, utf8_decode("Materia"),1,0,'C',1);
    $this->Cell (30,10, utf8_decode("1er bimestre"),1,0,'C',1);
    $this->Cell (30,10, utf8_decode("2do bimestre"),1,0,'C',1);
    $this->Cell (30,10, utf8_decode("3er bimestre"),1,0,'C',1);
    $this->Cell (25,10, utf8_decode("Promedio"),1,0,'C',1);
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
$pdf->SetLeftMargin(12.5);
$pdf->SetFont('Arial','',12);

foreach($data as $dat) { 
    $pdf->Cell (70,10, utf8_decode($dat['nombreMateria']),1,0,'L',0);
    $pdf->Cell (30,10, utf8_decode($dat['primerBimestre']),1,0,'L',0);
    $pdf->Cell (30,10, utf8_decode($dat['segundoBimestre']),1,0,'L',0);
    $pdf->Cell (30,10, utf8_decode($dat['tercerBimestre']),1,0,'L',0);
    $pdf->Cell (25,10, utf8_decode($dat['promedio']),1,0,'L',0); 
    $pdf->Ln();
}
$pdf->Output();