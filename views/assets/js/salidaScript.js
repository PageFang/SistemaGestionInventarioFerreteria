

// Funcion mostrar lista de productos
function mostrarSalida(){

    console.log("Mostrar Salida Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaMostrarController.php",
        data:{funcion: "1"},
        
        success:function(r){
            $('#tablaSalida').html(r);
        }
    });
}


// Funcion Insertar Salida
function insertarSalida(){

    console.log("Insertar Salida Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaInsertarController.php",
        data:$('#formInsertarSalida').serialize(),
        
        success:function(respuesta){
            console.log("Respuesta Insertar Salida : " + respuesta);
            mostrarSalida();

            if(respuesta == 1) {
                
                // Limpia el formulario 
                $('#formInsertarSalida')[0].reset();
                Swal.fire({
                    title: "Salida Registrada",
                    text: "la salida ha sido registrada con exito",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                });

            } else if(respuesta == 2) {
                
                // Limpia el formulario 
                $('#formInsertarSalida')[0].reset();
                Swal.fire({
                    title: "Error al Registrar",
                    text: "No existe la cantidad suficiente en Stock para realizar esta salida",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                });
            }
        }
    });
    return false;
}


// Funcion Eliminar Salida
function eliminarSalida(id){

    console.log("Eliminar Salida Js");

    Swal.fire({
        title: " ¿ Desea eliminar este salida del Inventario ? ",
        text : " Una vez eliminada la informacion de la salida no podra recuperarse ",
        icon:  "warning",
        showCancelButton: true,
        confirmButtonText: "Eliminar",
        cancelButtonText: "Cancelar",
    })

    .then(resultado  => {
        
        if(resultado.value){
            
            $.ajax({
                
                type: "POST",
                url: "../../../../Inventario_Ferreteria/controllers/salidaEliminarController.php",
                data:"id=" + id,
                
                success:function(respuesta){
                    console.log("Respuesta Eliminar Salida : " + respuesta);
                    mostrarSalida();
    
                    if(respuesta == 1) {
                        
                        Swal.fire({
                            title: "Salida Eliminada",
                            text: "La Salida ha sido eliminado con exito",
                            icon: "success",
                            confirmButtonText: "Aceptar",
                        });
    
                    } else if(respuesta == 2) {
                        
                        Swal.fire({
                            title: "Error al Eliminar",
                            text: "No se ha podido Eliminar la Salida del Inventario",
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


// Funcion Obtener Datos Salida
function obtenerDatosSalida(id){
    
    console.log("Obtener Datos Salida Js");

    $.ajax({
        
        type:"POST",
        data:"id="+id,
        url:"../../../../Inventario_Ferreteria/controllers/salidaObtenerDatosController.php",
        
        success:function(respuesta){
            console.log("Respuesta Obtener Datos Producto : " + respuesta);

            respuesta=jQuery.parseJSON(respuesta);
            $('#idUp').val(respuesta['id']);
            $('#productoSalidaUp').val(respuesta['producto_id']);
            $('#cantidadUp').val(respuesta['cantidad']);
            $('#fechaSalidaUp').val(respuesta['fechaSalida']);
            $('#valorUnitarioUp').val(respuesta['valorUnitario']);
        }
    });
}


// Funcion Actualizar Salida
function actualizarSalida(){
    
    console.log("Actualizar Datos Salida Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/salidaActualizarController.php",
        data:$('#formUpdateSalida').serialize(),
        
        success:function(respuesta){
            console.log("Respuesta Actualizar Datos Salida : " + respuesta);
            mostrarSalida();

            if(respuesta == 1) {
                        
                Swal.fire({
                    title: "Salida Actualizada",
                    text: "Se han actualizado los Datos de la Salida",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                });

            } else if(respuesta == 2) {
                
                Swal.fire({
                    title: "Error al Actualizar",
                    text: "No se ha podido actualizar la informacion de la Salida",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                });
            }

        }
    });
    return false;
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
