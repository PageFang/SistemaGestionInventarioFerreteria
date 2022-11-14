

// Funcion mostrar Pedidos
function mostrarPedido(){

    console.log("Mostar Pedido Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoMostrarController.php",
        data:{funcion: "1"},
        
        success:function(r){
            //console.log("Respuesta Mostrar Producto : " + respuesta); 
            $('#tablaPedido').html(r);
        }
    });
}


// Funcion Insertar Pedido
function insertarPedido(){

    console.log("Ingresar Pedido Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoInsertarController.php",
        data:$('#formInsertarPedido').serialize(),
        
        success:function(respuesta){
            console.log("Respuesta Insertar Pedido : " + respuesta);
            mostrarPedido();

            if(respuesta == 1) {
                
                // Limpia el formulario 
                $('#formInsertarPedido')[0].reset();
                Swal.fire({
                    title: "Pedido Registrado",
                    text: "El Pedido ha sido registrado con exito",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                });

            } else if(respuesta == 2) {
                
                // Limpia el formulario 
                $('#formInsertarPedido')[0].reset();
                Swal.fire({
                    title: "Error al Registrar",
                    text: "El pedido que desea ingresar no he a podido Registrar",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                });
            }
        }
    });
    return false;
}

// Funcion Eliminar Producto
function eliminarPedido(id){
    
    Swal.fire({
        title: " ¿ Desea eliminar este pedido del Inventario ? ",
        text : " Una vez eliminado el pedido no podra recuperarse ",
        icon:  "warning",
        showCancelButton: true,
        confirmButtonText: "Eliminar",
        cancelButtonText: "Cancelar",
    })

    .then(resultado  => {
        
        if(resultado.value){
            
            $.ajax({
                
                type: "POST",
                url: "../../../../Inventario_Ferreteria/controllers/pedidoEliminarController.php",
                data:"id=" + id,
                
                success:function(respuesta){
                    console.log("Respuesta Eliminar Producto : " + respuesta);
                    mostrarPedido();
    
                    if(respuesta == 1) {
                        
                        Swal.fire({
                            title: "Pedido Eliminado",
                            text: "El Pedido ha sido eliminado con exito",
                            icon: "success",
                            confirmButtonText: "Aceptar",
                        });
    
                    } else if(respuesta == 2) {
                        
                        Swal.fire({
                            title: "Error al Eliminar",
                            text: "No se ha podido Eliminar el Pedido del Inventario",
                            icon: "error",
                            confirmButtonText: "Aceptar",
                        });
                    }
                }
            });
    
        } else {

        }
    });
}


// FUNCION OBTENER DATOS PEDIDO
function obtenerDatosPedido(id){
    
    console.log("Obtener Datos Pedido Js");

    $.ajax({
        
        type:"POST",
        data:"id="+id,
        url:"../../../../Inventario_Ferreteria/controllers/pedidoObtenerDatosController.php",
        
        success:function(respuesta){
            console.log("Respuesta Obtener Datos Pedido : " + respuesta);

            respuesta=jQuery.parseJSON(respuesta);
            $('#idUp').val(respuesta['id']);
            $('#cantidadUp').val(respuesta['cantidad']);
            $('#fechaIngresoUp').val(respuesta['fechaIngreso']);
            $('#valorUnitarioUp').val(respuesta['valorUnitario']);
        }
    });
}


// Funcion Actualizar Salida
function actualizarPedido(){
    
    console.log("Actualizar Datos Pedido Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoActualizarController.php",
        data:$('#formUpdatePedido').serialize(),
        
        success:function(respuesta){
            console.log("Respuesta Actualizar Datos Pedido : " + respuesta);
            mostrarPedido();

            if(respuesta == 1) {
                        
                Swal.fire({
                    title: "Pedido Actualizado",
                    text: "Se han actualizado los Datos del Pedido",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                });

            } else if(respuesta == 2) {
                
                Swal.fire({
                    title: "Error al Actualizar",
                    text: "No se ha podido actualizar la informacion del Pedido",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                });
            }

        }
    });
    return false;
}

function ordenarMasRecientesPedidos(){
    console.log("Pedidos Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoOrdenarController.php",
        data:{funcion: "1"},
        
        success:function(r){
            $('#tablaPedido').html(r);
        }
    });
}

function ordenarMasAntiguosPedidos(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoOrdenarController.php",
        data:{funcion: "2"},
        
        success:function(r){
            $('#tablaPedido').html(r);
        }
    });
}

function ordenarMaxCantidadPedidos(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoOrdenarController.php",
        data:{funcion: "3"},
        
        success:function(r){
            $('#tablaPedido').html(r);
        }
    });
}

function ordenarMinCantidadPedidos(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoOrdenarController.php",
        data:{funcion: "4"},
        
        success:function(r){
            $('#tablaPedido').html(r);
        }
    });
}

function ordenarMaxValorUnidadPedidos(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoOrdenarController.php",
        data:{funcion: "5"},
        
        success:function(r){
            $('#tablaPedido').html(r);
        }
    });
}

function ordenarMinValorUnidadPedidos(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoOrdenarController.php",
        data:{funcion: "6"},
        
        success:function(r){
            $('#tablaPedido').html(r);
        }
    });
}
function ordenarMaxValorPedidos(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoOrdenarController.php",
        data:{funcion: "7"},
        
        success:function(r){
            $('#tablaPedido').html(r);
        }
    });
}

function ordenarMinValorPedidos(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoOrdenarController.php",
        data:{funcion: "8"},
        
        success:function(r){
            $('#tablaPedido').html(r);
        }
    });
}

/// ****++
function generarReportePedido(){
    console.log("Generar Reporte Pedidos");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoReporte.php",
        data:{funcion: "1"},
    });
}