<?php

    require('../../Inventario_Ferreteria/views/assets/plugins/fpdf/fpdf.php');
    require('../../Inventario_Ferreteria/models/pedidoModel.php');
    $inicio = "";
    $final = "";

    if(strlen($_POST['fechaIncio'])>0 and strlen($_POST['fechaFinal'])>0){
        $fechaInicio = $_POST['fechaIncio'];
        $fechaFin = $_POST['fechaFinal'];
    
        $verDesde = date('d/m/Y', strtotime($inicio));
        $verHasta = date('d/m/Y', strtotime($final));
    }else{
        $inicio = '1111-01-01';
        $final = '9999-12-30';
    
        $verDesde = '__/__/____';
        $verHasta = '__/__/____';
    }
    
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Helvetica','B',10);
    $pdf->Image('../../Inventario_Ferreteria/views/assets/img/LogoFerreteria.png',7,15,20);
    $pdf->Cell(80);
    $pdf->Cell(30,25,'Reporte Pedidos Ferreteria "La Avenida"',0,0,'C');
    $pdf->Cell(50, 10, 'Fecha Reporte: '.date('d-m-Y').'', 0);
    $pdf->Ln(30);
    $pdf-> Cell(35,6,'Producto',1,0,'C',0); 
    $pdf-> Cell(35,6,'Proveedor',1,0,'C',0); 
    $pdf-> Cell(25,6,'Cantidad',1,0,'C',0); 
    $pdf->Cell(32,6,'Fecha de ingreso',1,0,'C',0); 
    $pdf-> Cell(30,6,'Valor Unitario',1,0,'C',0); 
    $pdf->Cell(30,6,'Valor Total',1,1,'C',0);

    $object = new PedidoModel();
    $datos = $object->generarReportePedido($fechaInicio,$fechaFin);
    $valorTotal = 0;

    foreach ($datos as $key => $value) {
        $pdf->Cell(35, 6, $value['nombre'],1,0,'C',0);
        $pdf->Cell(35, 6, $value['nombreProveedor'],1,0,'C',0);
        $pdf->Cell(25, 6, $value['cantidad'],1,0,'C',0);
        $pdf->Cell(32, 6, $value['fechaIngreso'],1,0,'C',0);
        $pdf->Cell(30, 6, $value['valorUnitario'],1,0,'C',0);
        $pdf->Cell(30, 6, $value['valorTotal'],1,1,'C',0);
    
        $valorTotal += intval($value['valorTotal']);
    }
    $pdf->Ln(4);
    $pdf->Cell(35, 6,'Valor Total Pedidos = ',0,0,'C',0);
    $pdf->Cell(35, 6, $valorTotal,0,0,'C',0);
    $pdf->Output();  
?>