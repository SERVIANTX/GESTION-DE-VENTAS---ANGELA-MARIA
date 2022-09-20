<?php

require "plantillaProducto.php";

require_once "prueba/Controlproductospdf.php";
require_once "prueba/ModelProductospdf.php"; 

    
   $Productos = clsControlArrayReporteProducto::medReporteProducto();

    
    
    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(13, 10, 10);
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(20, 5, "Id", 1, 0, "C");
    $pdf->Cell(65, 5, "producto", 1, 0, "C");
    $pdf->Cell(35, 5, "Marca", 1, 0, "C");
    $pdf->Cell(35, 5, "Unidad-Medida", 1, 0, "C");
    $pdf->Cell(35, 5, "Categoria", 1, 1, "C");


    $pdf->SetFont("Arial", "", 9);

    foreach ($Productos as $indice => $valor):
        $pdf->Cell(20, 5, $valor['IdProducto'], 1, 0, "C");
        $pdf->Cell(65, 5, utf8_decode($valor['Nombre']), 1, 0, "C");
        $pdf->Cell(35, 5, utf8_decode($valor['Marca']), 1, 0, "C");
        $pdf->Cell(35, 5, utf8_decode($valor['UnidadMedida']), 1, 0, "C");
        $pdf->Cell(35, 5, utf8_decode($valor['Categoria']), 1, 1, "C");
     endforeach;


    $pdf->Output();
?>
