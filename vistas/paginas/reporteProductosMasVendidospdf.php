<?php

require "plantillaProductosMasVendidos.php";

require_once "prueba/ControlproductosmasV.php";
require_once "prueba/ModelProductosmasVendidos.php"; 

    
   $Productomas = clsControlArrayReporteProductoMasVendido::medReporteProductoMasVendido();

    
   
    
    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(50, 10, 10);
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(20, 5, "Id", 1, 0, "C");
    $pdf->Cell(65, 5, "Producto", 1, 0, "C");
    $pdf->Cell(35, 5, "Cantidad_Vendida", 1, 1, "C");


    $pdf->SetFont("Arial", "", 9);

     foreach ($Productomas as $indice => $fila):
        $pdf->Cell(20, 5, $fila['IdProducto'], 1, 0, "C");
        $pdf->Cell(65, 5, utf8_decode($fila['NombreP']), 1, 0, "C");
        $pdf->Cell(35, 5, $fila['cantidad'], 1, 1, "C");
       endforeach;
    $pdf->Output();
?>
