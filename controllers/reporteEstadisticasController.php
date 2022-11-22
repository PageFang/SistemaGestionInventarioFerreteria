<?php

    require_once("../../Inventario_Ferreteria/models/reporteModel.php");
    $funcionExecute = "";

    class ReporteEstadisticas {

        static public function totalIngresos(){


            $respuestaTotalIngresos =  ReporteModel::totalIngresos();
            $totalIngresos = 0;

            foreach ($respuestaTotalIngresos as $key => $value) {
                $totalIngresos += intval($value['valorTotal']);
            }
            
            echo $totalIngresos;
        }

        static public function totalEgresos(){


            $respuestaTotalEgresos =  ReporteModel::totalEgresos();
            $totalEgresos = 0;

            foreach ($respuestaTotalEgresos as $key => $value) {
                $totalEgresos += intval($value['valorTotal']);
            }
            
            echo $totalEgresos;
        }

        static public function total(){

            $respuestaTotalIngresos =  ReporteModel::totalIngresos();
            $respuestaTotalEgresos =  ReporteModel::totalEgresos();
            $totalEgresos = 0;
            $totalIngresos = 0;
            $total = 0;

            foreach ($respuestaTotalIngresos as $key => $value) {
                $totalIngresos += intval($value['valorTotal']);
            }
            
            foreach ($respuestaTotalEgresos as $key => $value) {
                $totalEgresos += intval($value['valorTotal']);
            }
            $total = $totalEgresos - $totalIngresos;

            echo $total;
        }

        static public function productoMasVendido(){

            $respuestaMasVendidoNombre =  ReporteModel::productoMasVendidoNombre();
            $respuestaMasVendido =  ReporteModel::productoMasVendido();
            $Nombre = "";
            $CantidadProducto = 0;
            
            foreach ($respuestaMasVendidoNombre as $key => $value) {
            
            
            }
            echo $CantidadProducto;
        }

        static public function productoMenosVendido(){

            $respuestaMasVendido =  ReporteModel::productomasvendido();
            $CantidadProducto = 0;
            
            foreach ($respuestaMasVendido as $key => $value) {
                $CantidadProducto += intval($value['cantidad']);
            }
            
            echo $total;
        }
    }

    if(!empty($_POST['funcion'])) {
        
        $funcionExecute = $_POST['funcion'];
        
        switch($funcionExecute) {
            
            case '1': 
                $reporte = new ReporteEstadisticas();
                $reporte->totalIngresos();
                break;
            case '2': 
                $reporte = new ReporteEstadisticas();
                $reporte->totalEgresos();
                break;
            case '3': 
                $reporte = new ReporteEstadisticas();
                $reporte->total();
                break;
            case '4': 
                $mostrar = new ReporteEstadisticas();
                $mostrar->productoMasVendido();
                break;

            case '4': 
                $mostrar = new OrdenarProveedorController();
                $mostrar->productoMenosVendido();
                break;
        }
    }
?>