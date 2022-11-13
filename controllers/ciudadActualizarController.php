<?php
    
    require_once("../../Inventario_Ferreteria/models/ciudadModel.php");
    
    class ActualizarCiudad {

        static public function actualizarDatosCiudadController(){
            
            $id = $_POST['idUp'];
    
            // Validar Entrada Mayusculas y Minusculas (Nombre)
            $nombre = strtolower($_POST['nombreUp']);
            $nombre = ucwords($nombre);
        
            $respuestaActualizarDatosCiudad =  CiudadModel::actualizarDatosCiudadModel($id, $nombre);
            echo "1";
            
        }
    }

    // Ejecuta el metodo Insertar
    $actualizar = new ActualizarCiudad();
    $actualizar->actualizarDatosCiudadController();

?>