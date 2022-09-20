<?php

require "plantillaVentas.php";

require_once "prueba/ControlVentaspdf.php";
require_once "prueba/ModelVentaspdf.php"; 


$Ventas = clsControlArrayListVenta::medSeleccionarVenta();
    
    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(2, 10, 10);
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(5, 5, "Id", 1, 0, "C");
    $pdf->Cell(50, 5, "Cliente", 1, 0, "C");
    $pdf->Cell(35, 5, "FechaVenta", 1, 0, "C");
    $pdf->Cell(20, 5, "N.Doc", 1, 0, "C");
    $pdf->Cell(55, 5, "Producto", 1, 0, "C");
    $pdf->Cell(15, 5, "Cantidad", 1, 0, "C");
    $pdf->Cell(15, 5, "Precio/u", 1, 0, "C");
    $pdf->Cell(15, 5, "Lote", 1, 1, "C");
   

    $pdf->SetFont("Arial", "", 9);

    foreach ($Ventas as $indice => $fila):
        $pdf->Cell(5, 5, $fila['Idventa'], 1, 0, "C");
        $pdf->Cell(50, 5, utf8_decode($fila['RazonSocial']), 1, 0, "C");
        $pdf->Cell(35, 5, utf8_decode($fila['FechaEmision']), 1, 0, "C");
        $pdf->Cell(20, 5, utf8_decode($fila['NumeroDocumentoVenta']), 1, 0, "C");
        $pdf->Cell(55, 5, utf8_decode($fila['NombreProducto']), 1, 0, "C");
        $pdf->Cell(15, 5, utf8_decode($fila['CantidadProducto']), 1, 0, "C");
        $pdf->Cell(15, 5, $fila['PrecioUnitario'], 1, 0, "C");
        $pdf->Cell(15, 5, $fila['Lote'], 1, 1, "C");
    endforeach;

    $pdf->Output();
?>
