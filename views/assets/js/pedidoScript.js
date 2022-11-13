

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

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoInsertarController.php",
        data:$('#formInsertarPedido').serialize(),
        
        success:function(respuesta){
            console.log("Respuesta Insertar Pedido " + respuesta);
            mostrarPedido();
            
            if(respuesta == 1) {
                
                // Limpia el formulario 
                $('#formInsertarPedido')[0].reset();
                swal({
                    title: "Pedido Registrado",
                    text: "El Pedido ha sido registrado con exito",
                    icon: "success",
                    button: "Aceptar",
                });

            } else if(respuesta == 2) {
                
                // Limpia el formulario 
                $('#formInsertarPedido')[0].reset();
                swal({
                    title: "Error al Registrar",
                    text: "No se ha podido Insertar el pedido",
                    icon: "error",
                    button: "Aceptar",
                });
            }
        }
    });
    return false;
}


// Funcion Eliminar Pedido
function eliminarPedido(id){

    swal({
        title:  "¿ Desea eliminar este registro de pedido del Inventario ?",
        text :  "Una vez eliminado el registro no podra recuperarse",
        icon:   "warning",
        buttons : true,
        dangerMode : true,
    })

    .then((willDelete) => {
        
        $.ajax({
            type:"POST",
            url:"../../../../Inventario_Ferreteria/controllers/eliminarPedido.php",
            data:"id=" + id,
            success:function(r){
            
                if(r!=null) {
                mostrarPedido();
                    swal("Pedido Eliminado Exitosamente", "", "info");
                }else{
                    swal("Error al Eliminar", "", "error");
                }
            }
        });

    })
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