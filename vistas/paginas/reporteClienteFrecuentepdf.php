<?php

require "plantillaClienteFrecuente.php";

require_once "prueba/ControlClienteFrecuente.php";
require_once "prueba/ModelClienteFrecuentepdf.php"; 

    
   $ClientesF = clsControlArrayReporteClienteFrecuente::medReporteClienteFrecuente();
    

    
    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(35, 10, 10);
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(30, 5, "Id", 1, 0, "C");
    $pdf->Cell(65, 5, "Cliente", 1, 0, "C");
    $pdf->Cell(50, 5, "Cantidad_de_Compras", 1, 1, "C");


    $pdf->SetFont("Arial", "", 9);

    foreach ($ClientesF as $indice => $valor):
        $pdf->Cell(30, 5, $valor['IdCliente'], 1, 0, "C");
        $pdf->Cell(65, 5, utf8_decode($valor['NombreC']), 1, 0, "C");
        $pdf->Cell(50, 5, $valor['Comprado'], 1, 1, "C");
     endforeach;


    $pdf->Output();
?>

