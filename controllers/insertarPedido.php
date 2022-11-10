<?php

    require_once("../../Inventario_Ferreteria/models/pedidoModel.php");
    
    
    $cantidad = $_POST['cantidad'];
    $fechaIngreso = $_POST['fechaIngreso'];
    $valorUnitario = $_POST['valorUnitario'];
    $producto_id =$_POST['productoSelect'];
    $proveedor_id = $_POST['proveedorSelect'];
    $valorTotal = ($_POST['cantidad'] *  $_POST['valorUnitario'] );
    
    $respuestaInsertarPedido =  PedidoModel::insertarPedidoModel($cantidad,$fechaIngreso,$valorUnitario,$producto_id,$proveedor_id,$valorTotal);
    echo "<script>console.log('Id Pedido Controller: {$respuestaInsertarPedido}');</script>"; //BIEN

    //$obj = new PedidoModel();
    //$datosCantidad = $obj->buscarPedidoInventarioModel();
    //echo "<script>console.log('HOLA_1');</script>";
    
    $datos=PedidoModel::buscarPedidoInventarioModel();

    while ($datos->fetch_object()){
        
    }
?>