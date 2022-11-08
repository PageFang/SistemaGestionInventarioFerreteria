<?php
    
    require_once("../../Inventario_Ferreteria/models/productoModel.php");
    
    $id = $_POST['id'];
    
    // Validar Entrada Mayusculas y Minusculas (Nombre)
    $nombre = strtolower($_POST['nombreUp']);
    $nombre = ucwords($nombre);

    // Validar Entrada Mayusculas y Minusculas (Descripcion)
    $descripcion = strtolower($_POST['descripcionUp']);
    $descripcion = ucfirst($descripcion);

    // Validar Entrada Mayusculas y Minusculas (Marca)
    $marca = strtolower($_POST['marcaUp']);
    $marca = ucwords($marca);
    echo "<script>console.log('AAA');</script>";

    echo ProductoModel::actualizarProductoModel($id, $nombre, $descripcion,$marca);
    
?>