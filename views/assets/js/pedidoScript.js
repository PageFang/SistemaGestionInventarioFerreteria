
// Funcion mostrar Pedidos
function mostrarPedido(){

    console.log("Entra Mostrar Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/pedidoController.php",
        data:{funcion: "1"},
        
        success:function(r){
            $('#tablaPedido').html(r);
        }
    });
}

// Funcion Insertar Pedido
function insertarPedido(){

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/insertarPedido.php",
        data:$('#formPedido').serialize(),
        
        success:function(r){
            console.log(r);
            mostrarPedido();
            if(r!= null){
                // Limpia el Formulario
                $('#formPedido')[0].reset();
                // swal("El Pedido ha sido Registrado", "", "success");
            }else{
                // swal("El Pedido no ha sido Registrado", "", "error");
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
        url:"../../../../Inventario_Ferreteria/controllers/ordenarPedidoController.php",
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
        url:"../../../../Inventario_Ferreteria/controllers/ordenarPedidoController.php",
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
        url:"../../../../Inventario_Ferreteria/controllers/ordenarPedidoController.php",
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
        url:"../../../../Inventario_Ferreteria/controllers/ordenarPedidoController.php",
        data:{funcion: "4"},
        
        success:function(r){
            $('#tablaPedido').html(r);
        }
    });
}

function ordenarMaxValorPedidos(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/ordenarPedidoController.php",
        data:{funcion: "5"},
        
        success:function(r){
            $('#tablaPedido').html(r);
        }
    });
}

function ordenarMinValorPedidos(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/ordenarPedidoController.php",
        data:{funcion: "6"},
        
        success:function(r){
            $('#tablaPedido').html(r);
        }
    });
}