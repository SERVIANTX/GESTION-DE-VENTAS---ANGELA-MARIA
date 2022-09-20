<?php

require "plantillaEntreFechasVencimiento.php";

require_once "prueba/ControlEntreFechasVencimiento.php";
require_once "prueba/ModelEntreFechasVencimiento.php"; 

require_once "prueba/ControlLotesCompletopdf.php";
require_once "prueba/ModelLoteCompletopdf.php"; 

    
	
 
    	
    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(30, 5, "Marca", 1, 0, "C");
    $pdf->Cell(65, 5, "Producto", 1, 0, "C");
    $pdf->Cell(65, 5, "Lote", 1, 0, "C");
    $pdf->Cell(35, 5, "Fecha Vencimiento", 1, 1, "C");


    $pdf->SetFont("Arial", "", 9);

       $LoteconFechas = clsControlArrayListLotes::medControlArrayListLotes();
       if($LoteconFechas==null)
       {
		$LotesinFechas = clsControlArrayReporteFecha::medReporteFecha();
   		 foreach ($LotesinFechas as $indice => $valor):
        $pdf->Cell(30, 5, utf8_decode($valor['marca']), 1, 0, "C");
        $pdf->Cell(65, 5, utf8_decode($valor['producto']), 1, 0, "C");
        $pdf->Cell(65, 5, utf8_decode($valor['Lote']), 1, 0, "C");
        $pdf->Cell(35, 5, $valor['FechaVencimiento'], 1, 1, "C");
    	 endforeach;
 		}
 		else
 		{
 		foreach ($LoteconFechas as $indice => $valor):
        $pdf->Cell(30, 5, utf8_decode($valor['marca']), 1, 0, "C");
        $pdf->Cell(65, 5, utf8_decode($valor['producto']), 1, 0, "C");
        $pdf->Cell(65, 5, utf8_decode($valor['Lote']), 1, 0, "C");
        $pdf->Cell(35, 5, $valor['FechaVencimiento'], 1, 1, "C");
     	endforeach;

 		}


    $pdf->Output();
?>
