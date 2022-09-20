<?php

require "plantillaProveedores.php";

require_once "prueba/Controlproveedorpdf.php";
require_once "prueba/ModelProveedorespdf.php"; 

    
   $Proveedor = clsControlArrayListProveedor::medSeleccionarProveedor();
            
    
    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(1, 10, 10);
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 8);

    $pdf->Cell(45, 5, "Razon Social", 1, 0, "C");
    $pdf->Cell(25, 5, "RUC", 1, 0, "C");
    $pdf->Cell(25, 5, "Telefono", 1, 0, "C");
    $pdf->Cell(60, 5, "Direccion", 1, 0, "C");
    $pdf->Cell(58, 5, "Correo", 1, 1, "C");
   

    $pdf->SetFont("Arial", "", 9);

    foreach ($Proveedor as $indice => $valor):
        $pdf->Cell(45, 5, utf8_decode($valor['NombreEmpresa']), 1, 0, "C");
        $pdf->Cell(25, 5, utf8_decode($valor['RUC']), 1, 0, "C");
         $pdf->Cell(25, 5, utf8_decode($valor['Telefono']), 1, 0, "C");
          $pdf->Cell(60, 5, utf8_decode($valor['Direccion']), 1, 0, "C");
        $pdf->Cell(58, 5, utf8_decode($valor['Correo']), 1, 1, "C");
    endforeach;

    $pdf->Output();
?>
