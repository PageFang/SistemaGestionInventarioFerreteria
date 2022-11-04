<?php

    require_once("../../Inventario_Ferreteria/models/pedidoModel.php");
    
   /* $datosController = array (
        'cantidad'=> $_POST['cantidad'],
        'fechaIngreso'=> $_POST['fechaIngreso'],
        'valorUnitario'=> $_POST['valorUnitario'],
        'producto_id'=> $_POST['productoSelect'],
        'proveedor_id'=> $_POST['proveedor_id']
    ); */

    $cantidad = $_POST['cantidad'];
    $fechaIngreso = $_POST['fechaIngreso'];
    $valorUnitario = $_POST['valorUnitario'];
    $producto_id =$_POST['productoSelect'];
    $proveedor_id = $_POST['proveedorSelect'];
    $valorTotal = ($_POST['cantidad'] *  $_POST['valorUnitario'] );

    echo PedidoModel::insertarPedidoModel($cantidad,$fechaIngreso,$valorUnitario,$producto_id,$proveedor_id,$valorTotal);
    