<?php

require "PlantillaKardex.php";

require_once "prueba/ControlKardexpdf.php";
require_once "prueba/ModelKardexpdf.php"; 

    
   $Kardexs = clsControlArrayReporteKardex::medReporteKardex();
    

    
    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(4, 10, 10);
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(15, 5, "Id", 1, 0, "C");
    $pdf->Cell(57, 5, "Producto", 1, 0, "C");
    $pdf->Cell(30, 5, "Precio Venta", 1, 0, "C");
    $pdf->Cell(35, 5, "Stock Actual", 1, 0, "C");
    $pdf->Cell(35, 5, "Cantidad Entrada", 1, 0, "C");
    $pdf->Cell(35, 5, "Cantidad Salida", 1, 1, "C");


    $pdf->SetFont("Arial", "", 9);

    foreach ($Kardexs as $indice => $valor):
        $pdf->Cell(15, 5, $valor['IdKardex'], 1, 0, "C");
        $pdf->Cell(57, 5, utf8_decode($valor['Producto']), 1, 0, "C");
        $pdf->Cell(30, 5, utf8_decode($valor['PrecioVenta']), 1, 0, "C");
        $pdf->Cell(35, 5, utf8_decode($valor['StockMinimo']), 1, 0, "C");
        $pdf->Cell(35, 5, utf8_decode($valor['CantidadEntrada']), 1, 0, "C");
        $pdf->Cell(35, 5, $valor['CantidadSalida'], 1, 1, "C");
     endforeach;


    $pdf->Output();
?>
