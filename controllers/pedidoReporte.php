<?php
require('../../Inventario_Ferreteria/views/assets/plugins/fpdf/fpdf.php');
require('../../Inventario_Ferreteria/models/pedidoModel.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../../Inventario_Ferreteria/views/assets/img/LogoFerreteria.png',7,15,20);
        // Arial bold 15
        $this->SetFont('Helvetica','B',10);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,25,'Reporte Pedidos Ferreteria "La Avenida"',0,0,'C');
        // Salto de línea
        $this->Ln(30);
        $this-> Cell(35,6,'Producto',1,0,'C',0); 
        $this-> Cell(35,6,'Proveedor',1,0,'C',0); 
        $this-> Cell(25,6,'Cantidad',1,0,'C',0); 
        $this->Cell(32,6,'Fecha de ingreso',1,0,'C',0); 
        $this-> Cell(30,6,'Valor Unitario',1,0,'C',0); 
        $this->Cell(30,6,'Valor Total',1,1,'C',0); 
    }

    function Footer()
    {
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Helvetica','B',10);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }
}
    $fechaInicio="";
    $fechaFin="";

    if (!empty($_GET["fechaInicio"]) and !empty($_GET["fechaFin"]) ) {

        $fechaInicio=$_GET["fechaInicio"] ;
        $fechaFin=$_GET["fechaFin"] ;
    }

    $object = new PedidoModel();
    $datos = $object->generarReportePedido($fechaInicio,$fechaFin);

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Helvetica','B',10);
    
    $valorTotal = 0;

    $pdf->Cell(35, 6,  "Desde",1,0,'C',0);
    $pdf->Cell(35, 6,  $fechaInicio,1,0,'C',0);
    
    $pdf->Cell(35, 6,  "Hasta",1,0,'C',0);
    $pdf->Cell(35, 6,  $fechaFin,1,1,'C',0);

    foreach ($datos as $key => $value) {
            $pdf->Cell(35, 6, $value['nombre'],1,0,'C',0);
            $pdf->Cell(35, 6, $value['nombreProveedor'],1,0,'C',0);
            $pdf->Cell(25, 6, $value['cantidad'],1,0,'C',0);
            $pdf->Cell(32, 6, $value['fechaIngreso'],1,0,'C',0);
            $pdf->Cell(30, 6, $value['valorUnitario'],1,0,'C',0);
            $pdf->Cell(30, 6, $value['valorTotal'],1,1,'C',0);

            $valorTotal += intval($value['valorTotal']);
    }
    $pdf->Cell(35, 6,'Valor Total Pedidos',1,0,'C',0);
    $pdf->Cell(35, 6, $valorTotal,1,1,'C',0);
    $pdf->Output();
?>