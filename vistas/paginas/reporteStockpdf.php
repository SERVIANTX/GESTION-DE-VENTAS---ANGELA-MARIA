<?php

require "PlantillaStock.php";

require_once "prueba/ControlStockpdf.php";
require_once "prueba/ModelStockpdf.php"; 

    
   $Stock = clsControlArrayReporteStock::medReporteStock();
            
    
    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(13, 10, 10);
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 8);

    $pdf->Cell(20, 5, "IdKardex", 1, 0, "C");
    $pdf->Cell(70, 5, "Producto", 1, 0, "C");
    $pdf->Cell(50, 5, "Precio Venta", 1, 0, "C");
    $pdf->Cell(50, 5, "Stock Actual", 1, 1, "C");
   

    $pdf->SetFont("Arial", "", 9);

    foreach ($Stock as $indice => $valor):
        $pdf->Cell(20, 5, utf8_decode($valor['IdKardex']), 1, 0, "C");
        $pdf->Cell(70, 5, utf8_decode($valor['Producto']), 1, 0, "C");
        $pdf->Cell(50, 5, utf8_decode($valor['PrecioVenta']), 1, 0, "C");
        $pdf->Cell(50, 5, utf8_decode($valor['StockMinimo']), 1, 1, "C");
    endforeach;

    $pdf->Output();
?>





