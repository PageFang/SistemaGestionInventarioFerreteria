<?php

    require_once("../../Inventario_Ferreteria/models/pedidoModel.php");
    $funcionExecute = "";

    class PedidoController {
        
        // Mostrar Productos 
        static public function mostrarPedidoController(){
            
            $obj = new PedidoModel();
            $datos = $obj->mostrarPedidoModel();
           
            $tabla ='<table id="tablaPedido " class="table table-bordered border-dark table-hover">
                        <thead>
                            <tr class="table-dark"> 
                                <th>Id</th>
                                <th>Id</th>
                                <th>Cantidad</th>
                                <th>Fecha Ingreso</th>
                                <th>Valor Unitario</th>
                                <th>Valor Total</th>
                                <th> </th>
                                <th> </th>
                            </tr>
                        </thead> 
                        <tbody>';

            $datosTabla = "";

            foreach ($datos as $key => $value) {
                $datosTabla = $datosTabla.' <tr>
                                                <td>'.$value['id'].'</td>
                                                <td>'.$value['nombre'].'</td>
                                                <td>'.$value['cantidad'].'</td>
                                                <td>'.$value['fechaIngreso'].'</td>
                                                <td>'.$value['valorUnitario'].'</td>
                                                <td>'.$value['valorTotal'].'</td>
                                                <td>
                                                    <span class="btn btn-dark btn-sm" onclick="obtenerDatos('.$value['id'].')" data-toggle="modal" data-target="#actualizarModal">
                                                        <i class="fas fa-edit"></i>
                                                    </span>
											    </td>
                                                <td>
                                                    <span class="btn btn-dark" onclick="eliminarPedido('.$value['id'].')">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </span>
											    </td>
                                            </tr>';
            }

            echo $tabla.$datosTabla.' </tbody> </table>';
        }
    }

    if(!empty($_POST['funcion'])) {
        
        $funcionExecute = $_POST['funcion'];
        
        switch($funcionExecute) {

            case '1': 
                $mostrar = new PedidoController();
                $mostrar->mostrarPedidoController();
                break;
            
        }
    }
?>
    
