<?php
    
    require_once("../../Inventario_Ferreteria/models/ciudadModel.php");
    
    $id = $_POST['id'];
    
    // Validar Entrada Mayusculas y Minusculas (Nombre)
    $nombre = strtolower($_POST['nombreUp']);
    $nombre = ucwords($nombre);

    echo "<script>console.log('AAA');</script>";

    echo CiudadModel::actualizarCiudadModel($id, $nombre);
    
?>