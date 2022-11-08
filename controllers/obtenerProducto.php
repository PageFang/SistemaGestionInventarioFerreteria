<?php

    require_once("../../Inventario_Ferreteria/models/productoModel.php");

    $id = $_POST['id'];

    echo json_encode(ProductoModel::obtenerProducto($id));
    
?>