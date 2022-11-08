<?php

    require_once("../../Inventario_Ferreteria/models/inicioModel.php");
    $funcionExecute = "";

    class InventarioController {
        
        // Mostrar Inventario General 
        static public function mostrarInventarioController(){
            
            $obj = new inicioModel();
            $datos = $obj->mostrarInventarioModel();
            
            $tabla ='<table id="tablaInventario" class="table table-bordered border-dark table-hover">
                        <thead>
                            <tr class="table-dark"> 
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Marca</th>
                            </tr>
                        </thead> 
                        <tbody>';

            $datosTabla = "";
            
            foreach ($datos as $key => $value) {
                $datosTabla = $datosTabla.'<tr>
                                                <td>'.$value['id'].'</td>
                                                <td>'.$value['nombre'].'</td>
                                                <td>'.$value['descripcion'].'</td>
                                                <td>'.$value['marca'].'</td>
                                            </tr>';
            }

            echo $tabla.$datosTabla.'</tbody></table>';
        }
    }

    if(!empty($_POST['funcion'])) {
        
        $funcionExecute = $_POST['funcion'];

        switch($funcionExecute) {

            case '1': 
                $mostrar = new InventarioController();
                $mostrar->mostrarInventarioController();
                break;
        }
    }
?>
    
