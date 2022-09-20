<?php
require_once "fpdf/fpdf.php";
    
  
  
class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {

        // Arial bold 15
        // BU subrayado
        //b normal
        
        $this->SetFont('Courier', 'B', 25);
        // Título
        $this->Cell(25);
        $this->Cell(1, 10, utf8_decode("COMERCIAL 'ANGELA MARIA'"), 0, 0, "C");
        // Derecha
        $this->SetFont('Courier', 'B', 15);
        $this->Ln(2);
        $this->Cell(100);
        $this->Cell(70, 10, utf8_decode("RUC 10206500510"), 1, 0, "C");
        $this->Ln(10);
        $this->Cell(100);
        $this->Cell(70, 10, utf8_decode("BOLETA DE VENTA"), 1, 0, "C");
        $this->Ln(10);
        $this->Cell(100);
        $this->Cell(70, 10, utf8_decode(""), 1, 0, "C");
        $this->Ln(4);
        // Izquierda
        $this->Ln(-24);
        $this->SetFont('Courier', 'B', 10);
        $this->Ln(5);
        $this->Cell(50, 10, utf8_decode("DE: LUZ GREGORIA GALARZA LEÓN"), 0, 0, "C");
        $this->Ln(5);
        $this->Cell(50, 10, utf8_decode("VENTA DE ÚTILES ESCOLARES, ABARROTES, GASEOSAS,"), 0, 0, "C");
        $this->Ln(4);
        $this->Cell(50, 10, utf8_decode("DULCES, LICORES, REGALOS Y OTROS AL POR MENOR."), 0, 0, "C");
        $this->Ln(4);
        $this->Cell(50, 10, utf8_decode("JR.CUZCO 591 YAUYOS - JAUJA - JUNIN (Plaza antigua de Yauyos)"), 0, 0, "C");
        //Fecha
        $this->Ln(4);

        $this->SetFont("Courier", "B", 9);

        $this->SetMargins(12, 12, 12);
        $this->Ln(6);
        $this->Cell(-10);
        $this->Cell(140, 7, utf8_decode("Señor: "),1, 0, "L");
        $this->Ln(7);
        $this->Cell(-10);
        $this->Cell(150, 7, utf8_decode("Dirección: "),1, 0, "L");
        $this->Ln(0);
        $this->SetFont("Courier", "B", 11);
        date_default_timezone_set('America/Mexico_City');
        $this->Cell(143);
        $this->Cell(60, 7, utf8_decode("Fecha: "). date("d/m/Y"), 1, 1, "C");
        $this->Ln(1);
        $this->SetFont("Courier", "B", 11);
        $this->Ln(3);
        $this->Cell(-10);
        $this->Cell(15, 7, utf8_decode("  CANT. "),1, 0, "C");
        $this->Cell(0.15);
        $this->Cell(150, 7, utf8_decode("DESCRIPCIÓN "),1, 0, "C");
        $this->Ln(0.01);
        $this->Cell(155.15);
        $this->Cell(48, 7, utf8_decode("IMPORTE"),1, 0, "C");
        $this->Ln(7);
        $this->Cell(-10);
        $this->Cell(15, 7, utf8_decode(""),1, 0, "C");
        $this->Cell(0.15);
        $this->Cell(150, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(0.01);
        $this->Cell(155.15);
        $this->Cell(48, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(7);
        $this->Cell(-10);
        $this->Cell(15, 7, utf8_decode(""),1, 0, "C");
        $this->Cell(0.15);
        $this->Cell(150, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(0.01);
        $this->Cell(155.15);
        $this->Cell(48, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(7);
        $this->Cell(-10);
        $this->Cell(15, 7, utf8_decode(""),1, 0, "C");
        $this->Cell(0.15);
        $this->Cell(150, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(0.01);
        $this->Cell(155.15);
        $this->Cell(48, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(7);
        $this->Cell(-10);
        $this->Cell(15, 7, utf8_decode(""),1, 0, "C");
        $this->Cell(0.15);
        $this->Cell(150, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(0.01);
        $this->Cell(155.15);
        $this->Cell(48, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(7);
        $this->Cell(-10);
        $this->Cell(15, 7, utf8_decode(""),1, 0, "C");
        $this->Cell(0.15);
        $this->Cell(150, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(0.01);
        $this->Cell(155.15);
        $this->Cell(48, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(7);
        $this->Cell(-10);
        $this->Cell(15, 7, utf8_decode(""),1, 0, "C");
        $this->Cell(0.15);
        $this->Cell(150, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(0.01);
        $this->Cell(155.15);
        $this->Cell(48, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(7);
        $this->Cell(-10);
        $this->Cell(15, 7, utf8_decode(""),1, 0, "C");
        $this->Cell(0.15);
        $this->Cell(150, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(0.01);
        $this->Cell(155.15);
        $this->Cell(48, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(7);
        $this->Cell(-10);
        $this->Cell(15, 7, utf8_decode(""),1, 0, "C");
        $this->Cell(0.15);
        $this->Cell(150, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(0.01);
        $this->Cell(155.15);
        $this->Cell(48, 7, utf8_decode(""),1, 0, "C");
        $this->Ln(7);

        $this->Ln(0.01);
        $this->Cell(155.15);
        $this->Cell(48, 7, utf8_decode(""),1, 0, "C");
       
        $this->Ln(0.01);
        $this->Cell(132);
        $this->Cell(23, 7, utf8_decode("Total S/."),0, 0, "C");
        $this->Ln(7);

    }


}