<?php

require "plantillaCliente.php";

require_once "prueba/controlClientepdf.php";
require_once "prueba/ModelClientepdf.php"; 

    
   $Clientes = clsControlArrayReporteCliente::medReporteCliente();
            
    
    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(15, 10, 10);
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(20, 5, "Id", 1, 0, "C");
    $pdf->Cell(60, 5, "Cliente", 1, 0, "C");
    $pdf->Cell(55, 5, "Direccion", 1, 0, "C");
    $pdf->Cell(50, 5, "RUC/DNI", 1, 1, "C");
   

    $pdf->SetFont("Arial", "", 9);

    foreach ($Clientes as $indice => $valor):
        $pdf->Cell(20, 5, $valor['IdCliente'], 1, 0, "C");
        $pdf->Cell(60, 5, utf8_decode($valor['RazonSocial']), 1, 0, "C");
        $pdf->Cell(55, 5, utf8_decode($valor['Direccion']), 1, 0, "C");
        $pdf->Cell(50, 5, utf8_decode($valor['RucDNI']), 1, 1, "C");
    endforeach;

    $pdf->Output();
?>
