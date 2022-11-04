<?php
 require_once("../../Inventario_Ferreteria/models/proveedorModel.php");
    

    $datosController = array (
        'nombre'=> $_POST['nombre'],
        'direccion'=> $_POST['direccion'],
        'telefono'=> $_POST['telefono'],
        'ciudad_id'=> $_POST['ciudadProveedor']
    );

    echo ProveedorModel::insertarProveedorModel($datosController);