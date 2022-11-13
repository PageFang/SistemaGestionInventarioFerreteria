<?php
    
    require_once("../../Inventario_Ferreteria/models/productoModel.php");
    $funcionExecute = "";

    class MostrarProducto {
        
        // Funcion Mostrar Lista Producto 
        static public function mostrarProductoController(){
            
            $object = new ProductoModel();
            $datos = $object->mostrarProductoModel();
            $datosTabla = "";

            $tabla = '<table id="tablaProducto" class="table table-bordered border-dark table-hover">
                        <thead>
                            <tr class="table-dark"> 
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Marca </th>
                                <th> </th>
                                <th> </th>
                            </tr>
                        </thead>
                        
                        <tbody>';

            foreach ($datos as $key => $value) {
                $datosTabla = $datosTabla.' <tr>
                                                <td>'.$value['id'].'</td>
                                                <td>'.$value['nombre'].'</td>
                                                <td>'.$value['descripcion'].'</td>
                                                <td>'.$value['marca'].'</td>
                                                
                                                <td>
                                                    <span class = "btn btn-dark btn-sm" onclick = "obtenerDatosProducto('.$value['id'].')" data-bs-toggle = "modal" data-bs-target = "#modalActualizarProducto">
                                                        <i class = "fa-solid fa-pen"></i>
                                                    </span>
											    </td>
                                                <td>
                                                    <span class = "btn btn-dark" onclick = "eliminarProducto('.$value['id'].')">
                                                        <i class = "fa-solid fa-trash"></i>
                                                    </span>
											    </td>
                                            </tr>';
            }
            echo $tabla.$datosTabla.'</tbody> </table>';
        }
    }
    
    // Buscar La Funcion a Ejecutar
    if(!empty($_POST['funcion'])) {
        
        $funcionExecute = $_POST['funcion'];
        
        switch ($funcionExecute) {
            
            case '1': 
                $mostrar = new MostrarProducto();
                $mostrar->mostrarProductoController();
                break;
        }
    }
    
?>

