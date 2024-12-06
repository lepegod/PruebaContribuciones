<?php
require('fpdf186/fpdf.php');

$pdf = new FPDF('L', 'mm', array(150, 200));
$pdf->AddPage();

$pdf->SetFont('ZapfDingbats', 'B', 24);
$pdf->Cell(40, 10, 'Hola, MUNDO!');
$pdf->Ln(18); // Agrega un salto de línea

$pdf->SetFont('Times', 'I', 22);
$pdf->MultiCell(0, 10, 'Escuela:    Instituto Tecnologico Industriales y De Servicios No.84');
$pdf->Ln(10); // Agrega un salto de línea

$pdf->SetFont('Arial', 'U', 18); 
$pdf->MultiCell(0, 10, 'Materia: Desarrolla Aplicaciones Con Conexion A Base De Datos');
$pdf->Ln(10); // Agrega un salto de línea

$pdf->SetFont('Courier', 'B', 14);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(0, 50, 100);
$pdf->MultiCell(0, 10, 'Alumno: Axel Yeray Lepe Gonzalez');

$pdf->Output();
?>
