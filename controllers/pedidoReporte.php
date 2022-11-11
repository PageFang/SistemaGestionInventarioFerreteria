<?php
     require("../../Inventario_Ferreteria/views/assets/plugins/fpdf/fpdf");

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',18);
    $pdf->header(40,10,'Informe General Pedidos Ferreteria La Avenida');
    $pdf->Output();