<?php
    
    require_once("../../Inventario_Ferreteria/models/productoModel.php");
    
    $respuestaInsertar = "";

    // Validar Entrada Mayusculas y Minusculas (Nombre)
    $nombre = strtolower($_POST['nombre']);
    $nombre = ucwords($nombre);

    // Validar Entrada Mayusculas y Minusculas (Descripcion)
    $descripcion = strtolower($_POST['descripcion']);
    $descripcion = ucfirst($descripcion);

    // Validar Entrada Mayusculas y Minusculas (Marca)
    $marca = strtolower($_POST['marca']);
    $marca = ucwords($marca);
    
    // Array a enviar los Datos
    $datosController = array (
        'nombre'=> $nombre,
        'descripcion'=> $descripcion,
        'marca'=> $marca
    );

    // Busca si el producto existe
    $respuestaSeleccionar = ProductoModel::seleccionarProductoModel($datosController);

    // Inserta el producto
    if (!$respuestaSeleccionar) {
        $respuestaInsertar = ProductoModel::insertarProductoModel($datosController);
    }
?>

