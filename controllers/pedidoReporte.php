<?php
require('../../Inventario_Ferreteria/views/assets/plugins/fpdf/fpdf.php');
require('../../Inventario_Ferreteria/models/pedidoModel.php');

class PDF extends FPDF
{
    // Cabecera de página
    /*function Header()
    {
        // Logo
        $this->Image('../../Inventario_Ferreteria/views/assets/img/LogoFerreteria.png',7,15,20);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,25,'Reporte Pedidos Ferreteria "La Avenida"',0,0,'C');
        // Salto de línea
        $this->Ln(30);
        $this-> Cell(25,6,'Producto',1,0,'c',0);    
        $this-> Cell(28,6,'Cantidad',1,0,'c',0); 
        $this->Cell(48,6,'Fecha de ingreso',1,0,'c',0); 
        $this-> Cell(50,6,'Valor Unitario',1,0,'c',0); 
        $this->Cell(60,6,'Valor Total',1,1,'c',0); 
    }

    function Footer()
    {
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }*/
}
    $object = new PedidoModel();
    $datos = $object->generarReportePedido();

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',12);
    
    foreach ($datos as $key => $value) {
        $pdf->Cell(90, 10, $value['cantidad'],1,0,'C',0);
        $pdf->Cell(90, 10, $value['fechaIngreso'],1,0,'C',0);
        $pdf->Cell(90, 10, $value['valorUnitario'],1,0,'C',0);
        $pdf->Cell(90, 10, $value['valorTotal'],1,0,'C',0);
    
    }

    $pdf->Output();
?>