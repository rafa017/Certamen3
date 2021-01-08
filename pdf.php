<?php
require('pdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
   
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(95,10,'Registro de clientes hora medica',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $$this->Cell(60, 10, 'Nombre', 1,0.'C',0); 
    $$this->Cell(60, 10, 'Apellido', 1,0.'C',0); 
    $$this->Cell(30, 10, 'Tipo de mascota', 1,0.'C',0); 
    $$this->Cell(20, 10, 'Raza', 1,0.'C',0); 
    $$this->Cell(20, 10, 'Sexo', 1,1.'C',0);  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'medico.php';
$consulta = "SELECT * FROM medico";
$resultado = $mysql->query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while ($row = $resultado->FETCH_ASSOC()) {
    $pdf->Cell(60, 10, $row[nombre_dueño], 1,0.'C',0); 
    $pdf->Cell(60, 10, $row[apellido_dueño], 1,0.'C',0); 
    $pdf->Cell(30, 10, $row[tipo_mascota], 1,0.'C',0); 
    $pdf->Cell(20, 10, $row[raza], 1,0.'C',0); 
    $pdf->Cell(20, 10, $row[sexo], 1,1.'C',0); 
}

$pdf->Output();
?>