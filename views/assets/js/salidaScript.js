// Funcion mostrar lista de productos
function mostrarSalida(){

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaController.php",
        data:{funcion: "1"},
        
        success:function(r){
            $('#tablaSalida').html(r);
        }
    });
}

// Funcion Insertar Producto
function insertarSalida(){

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/insertarSalida.php",
        data:$('#formSalida').serialize(),
        
        success:function(r){
            console.log(r);
            mostrarSalida();
            if(r!= null){
                // Limpia el Formulario
                $('#formSalida')[0].reset();
            
                //swal("Producto Registrado", ":)", "success");
            }else{
                //swal("Error al Registrar", ":(", "error");
            }
        }
    });
    return false;
}


// Funcion Eliminar Producto
function eliminarSalida(id){

    swal({
        title:  "¿ Desea eliminar este proveedor del Inventario ?",
        text :  "Una vez eliminado no podra recuperarse",
        icon:   "warning",
        buttons : true,
        dangerMode : true,
    })

    .then((willDelete) => {
        
        $.ajax({
            type:"POST",
            url:"../../../../Inventario_Ferreteria/controllers/eliminarSalida.php",
            data:"id=" + id,
            success:function(r){
            console.log(r);
                if(r!=null){
                    mostrarSalida();
                    swal("Eliminado Exitosamente", ":)", "info");
                }else{
                    swal("Error al Eliminar", ":(", "error");
                }
            }
        });

    })
}

function ordenarMasRecientesSalida(){
    console.log("Salida Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaOrdenarController.php",
        data:{funcion: "1"},
        
        success:function(r){
            $('#tablaSalida').html(r);
        }
    });
}

function ordenarMasAntiguosSalida(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaOrdenarController.php",
        data:{funcion: "2"},
        
        success:function(r){
            $('#tablaSalida').html(r);
        }
    });
}

function ordenarMaxCantidadSalida(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaOrdenarController.php",
        data:{funcion: "3"},
        
        success:function(r){
            $('#tablaSalida').html(r);
        }
    });
}

function ordenarMinCantidadSalida(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaOrdenarController.php",
        data:{funcion: "4"},
        
        success:function(r){
            $('#tablaSalida').html(r);
        }
    });
}

function ordenarMaxValorUnidadSalida(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaOrdenarController.php",
        data:{funcion: "5"},
        
        success:function(r){
            $('#tablaSalida').html(r);
        }
    });
}

function ordenarMinValorUnidadSalida(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaOrdenarController.php",
        data:{funcion: "6"},
        
        success:function(r){
            $('#tablaSalida').html(r);
        }
    });
}
function ordenarMaxValorSalida(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaOrdenarController.php",
        data:{funcion: "7"},
        
        success:function(r){
            $('#tablaSalida').html(r);
        }
    });
}

function ordenarMinValorSalida(){
    console.log("Hola Recientes");
    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaOrdenarController.php",
        data:{funcion: "8"},
        
        success:function(r){
            $('#tablaSalida').html(r);
        }
    });
}
