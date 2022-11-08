<?php
    
    require_once("../../Inventario_Ferreteria/models/proveedorModel.php");
    
    // Validar Entrada Mayusculas y Minusculas (Nombre)
    $nombre = strtolower($_POST['nombre']);
    $nombre = ucwords($nombre);

    // Validar Entrada Mayusculas y Minusculas (Direccion)
    $direccion = strtolower($_POST['direccion']);
    $direccion = ucwords($nombre);
    
    $datosController = array (
        'nombre'=> $nombre,
        'direccion'=> $direccion,
        'correoElectronico'=> $_POST['correoElectronico'],
        'telefono'=> $_POST['telefono'],
        'ciudad_id'=> $_POST['ciudadProveedor']
    );

    $respuestaSeleccionar = ProveedorModel::seleccionarProveedorModel($datosController);

    if (!$respuestaSeleccionar) {
        $respuestaInsertar = ProveedorModel::insertarProveedorModel($datosController);
    }else{
        echo "<script>console.log('El Proveedor Ingresado ya existe');</script>";
    }

?>