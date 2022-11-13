<?php
    
    require_once("../../Inventario_Ferreteria/models/productoModel.php");

    class ActualizarProducto {

        public static function actualizarProductoController(){
            
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
            
        
            $respuestaActualizaDatos =  ProductoModel::actualizarProductoModel($id, $nombre, $descripcion,$marca);
            
            echo "1";
        }
    }

    // Ejecuta el metodo Insertar
    $actualizar = new ActualizarProducto();
    $actualizar->actualizarProductoController();

?>