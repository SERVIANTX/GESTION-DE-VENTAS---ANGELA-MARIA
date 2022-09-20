<?php
require_once "fpdf/fpdf.php";
$pdf = new FPDF('P','mm',array(80,200));
class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image("../asset/img/loginimg//2.png", 10, 5, 30);
        // Arial bold 15
        // BU subrayado
        //b normal
        $this->SetFont("Arial", "BU", 18);
        $this->SetTextColor(210,0,0);
        // Título
        $this->Cell(25);
        $this->Cell(148, 10, utf8_decode("Reporte de ventas"), 0, 0, "C");
        //Fecha
        $this->SetFont("Arial", "", 10);
        $this->Cell(25, 15, "Fecha: ". date("d/m/Y"), 0, 1, "C");
        // Salto de línea
        $this->Ln(10);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}