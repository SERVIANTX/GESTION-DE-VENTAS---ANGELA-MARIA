<?php

require "plantillaEmpleado.php";

require_once "prueba/ControlEmpleadopdf.php";
require_once "prueba/ModelEmpleadopdf.php"; 

    
 $Empleado = clsControlArrayReporteEmpleado::medReporteEmpleado();

    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(5, 10, 10);
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(5, 5, "Id", 1, 0, "C");
    $pdf->Cell(35, 5, "Empleado", 1, 0, "C");
    $pdf->Cell(35, 5, "Direccion", 1, 0, "C");
    $pdf->Cell(22, 5, "Telefono", 1, 0, "C");
    $pdf->Cell(22, 5, "Cargo", 1, 0, "C");
    $pdf->Cell(22, 5, "Nacionalidad", 1, 0, "C");
    $pdf->Cell(18, 5, "Usuario", 1, 0, "C");
    $pdf->Cell(15, 5, "Doc.", 1, 0, "C");
     $pdf->Cell(20, 5, "Num_Doc.", 1, 0, "C");
    $pdf->Cell(12, 5, "Activo", 1, 1, "C");


    $pdf->SetFont("Arial", "", 9);

    foreach ($Empleado as $indice => $fila):
        $pdf->Cell(5, 5, $fila['IdEmpleado'], 1, 0, "C");
        $pdf->Cell(35, 5, utf8_decode($fila['Empleado']), 1, 0, "C");
        $pdf->Cell(35, 5, utf8_decode($fila['Direccion']), 1, 0, "C");
        $pdf->Cell(22, 5, $fila['Telefono'], 1, 0, "C");
        $pdf->Cell(22, 5, $fila['Cargo'], 1, 0, "C");
        $pdf->Cell(22, 5, utf8_decode($fila['Nacionalidad']), 1, 0, "C");
        $pdf->Cell(18, 5, utf8_decode($fila['NombreUsuario']), 1, 0, "C");
        $pdf->Cell(15, 5, $fila['DocumentoIdentificacion'], 1, 0, "C");
        $pdf->Cell(20, 5, $fila['NumeroDocumento'], 1, 0, "C");
        $pdf->Cell(12, 5,  utf8_decode($fila['Estado']), 1, 1, "C");
     endforeach;

    $pdf->Output();
?>

