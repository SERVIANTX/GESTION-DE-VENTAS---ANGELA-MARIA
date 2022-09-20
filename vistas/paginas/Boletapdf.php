<?php

require "plantillaBoleta.php";

require_once "prueba/ControlBoletapdf.php";
require_once "prueba/ModelBoletapdf.php"; 
require_once "prueba/conexionpdf.php";



require_once "prueba/ControlClienteVentapdf.php";
require_once "prueba/ModelClienteVentapdf.php"; 

    $con = conexion::conectar();

            $stmt = $con->prepare("SELECT  c.RazonSocial AS Clientes,c.Direccion AS Direccion FROM venta v INNER JOIN cliente c
                                                     ON c.idcliente = v.idcliente
                                                     ORDER BY idventa DESC  LIMIT 1");
            $stmt->execute();
            $Clientepdo =$stmt->fetch(PDO::FETCH_ASSOC);
            
            $Direccion = $Clientepdo['Direccion'];
            $Cliente = $Clientepdo['Clientes'];

            $stmt1 = $con->prepare("SELECT NumeroDocumentoVenta AS boleta FROM venta ORDER BY idventa DESC  LIMIT 1");
            $stmt1->execute();
            $NBoleta =$stmt1->fetch(PDO::FETCH_ASSOC);
            $NumBoleta = $NBoleta['boleta'];


            $stmt2 = $con->prepare("SELECT idventa AS id FROM detalleventa ORDER BY idventa DESC LIMIT 1");
            $stmt2->execute();
            $IdVenta =$stmt2->fetch(PDO::FETCH_ASSOC);
            $Id = $IdVenta['id'];

            $stmt3 = $con->prepare(" SELECT SUM(dv.Importe) + 0.00 AS importe 
                                     FROM detalleventa dv INNER JOIN producto p
                                     ON p.IdProducto = dv.IdProducto  WHERE idventa = $Id");
            $stmt3->execute();
            $Importe =$stmt3->fetch(PDO::FETCH_ASSOC);
            $ImporteTotal = $Importe['importe'];

             $stmt4 = $con->prepare("SELECT p.Nombre AS Producto,dv.Importe,dv.cantidadProducto
                                     FROM detalleventa dv INNER JOIN producto p
                                     ON p.IdProducto = dv.IdProducto  WHERE idventa = $Id");
            $stmt4->execute();
            $Productos =$stmt4->fetchAll();


    $pdf = new PDF("L", "mm", array(145,220));
    $pdf->AliasNbPages();
    $pdf->SetMargins(45, 2, 2);
    $pdf->AddPage();
    $pdf->SetFont("Courier", "B", 15);
    
   
    $pdf->Ln(-83.5);
    $pdf->Cell(125);
    
    $pdf->Cell(83, -16, utf8_decode($NumBoleta), 0, 0, "C");
   

    $pdf->SetFont("Courier", "B", 10);
    $pdf->Ln(7.2);
    $pdf->Cell(4);
    $pdf->Cell(83, -16, utf8_decode($Cliente), 0, 0, "L");
    $pdf->Ln(6.8);
    $pdf->Cell(11);
    $pdf->Cell(83, -16, utf8_decode($Direccion), 0, 0, "L");
    $pdf->Ln(6);
    $pdf->SetFont("Courier", "B", 10);
    foreach ($Productos as $indice => $valor):
    $pdf->Cell(-5);
    $pdf->Cell(6, 7, utf8_decode($valor['cantidadProducto']), 0, 0, "L");
    $pdf->Cell(8);
    $pdf->Cell(40, 7, utf8_decode($valor['Producto']), 0, 0, "L");
    $pdf->Cell(127);
    $pdf->Cell(40, 7, utf8_decode($valor['Importe']), 0, 0, "L");
    $pdf->Ln(7);
    endforeach;

    
    $pdf->SetFont("Courier", "B", 10);
    $pdf->setY(125);
    $pdf->setX(182);
    $pdf->Cell(20, -16, utf8_decode($ImporteTotal), 0, 0, "C");
    $pdf->Output();
    
?>
