
// Funcion Mostrar Lista Ciudad
function mostrarCiudad(){

    console.log("Mostrar Ciudad Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/ciudadMostrarController.php",
        data:{funcion: "1"},
        
        success:function(respuesta){
            //console.log("Respuesta Mostrar Ciudad : " + respuesta); 
            $('#tablaCiudad').html(respuesta);
        }
    });
}


// Funcion Insertar Ciudad
function insertarCiudad(){

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/ciudadInsertarController.php",
        data:$('#formInsertarCiudad').serialize(),
        
        success:function(respuesta){
            
            mostrarCiudad();
            console.log("Respuesta Insertar Ciudad : " + respuesta); 
            if(respuesta == 1) {
                
                // Limpia el formulario 
                $('#formInsertarCiudad')[0].reset();
                swal({
                    title: "Ciudad Registrado",
                    text: "La Ciudad ha sido registrado con exito",
                    icon: "success",
                    button: "Aceptar",
                });

            } else if(respuesta == 2) {
                
                // Limpia el formulario 
                $('#formInsertarCiudad')[0].reset();
                swal({
                    title: "Error al Registrar",
                    text: "La Ciudad que desea ingresar ya existe en el Inventario",
                    icon: "error",
                    button: "Aceptar",
                });
            }
        }
    });
    return false;
}


// Funcion Editar Producto *
function obtenerCiudad(id){
    
    $.ajax({
        type:"POST",
        data:"id="+id,
        url:"../../../../Inventario_Ferreteria/controllers/obtenerCiudad.php",
        
        success:function(r){
            r=jQuery.parseJSON(r);
            $('#idUp').val(r['id']);
            $('#nombreUp').val(r['nombre']);
        }
    });
}

function actualizarCiudad(){
    
    console.log("A");
    $.ajax({
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/actualizarProducto.php",
        data:$('#formUptadeCiudad').serialize(),
        
        success:function(r){
            mostrarCiudad();
            if(r!= null){
                //swal("El Producto ha sido Actualizado", "", "success");
            }else{
                //swal("El Producto no ha sido Actualizado", "", "error");
            }
        }
    });
    return false;
}