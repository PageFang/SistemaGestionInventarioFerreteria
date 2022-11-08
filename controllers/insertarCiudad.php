<?php
    
    require_once("../../Inventario_Ferreteria/models/ciudadModel.php");
    
    $respuestaInsertar = "";

    // Validar Entrada Mayusculas y Minusculas (Nombre)
    $nombre = strtolower($_POST['nombre']);
    $nombre = ucwords($nombre);

    // Array a enviar los Datos
    $datosController = array (
        'nombre'=> $nombre
    );

    // Busca si el producto existe
    $respuestaSeleccionar = CiudadModel::seleccionarCiudadModel($datosController);

    // Inserta el producto
    if (!$respuestaSeleccionar) {
        $respuestaInsertar = CiudadModel::insertarCiudadModel($datosController);
    }else{
        echo "<script>console.log('El Producto Ingresado ya existe');</script>";

    }

?>
