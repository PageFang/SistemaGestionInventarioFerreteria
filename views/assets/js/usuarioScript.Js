function iniciarSesion(){

    console.log("Iniciar Sesion Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/iniciarSesionController.php",
        data:$('#formInicioSesion').serialize(),

        success:function(respuesta){
            console.log("Respuesta Inciar Sesion : " + respuesta);

            if(respuesta == 1) {

                $('#formInicioSesion')[0].reset();
                Swal.fire({
                    title: "Inicio de Sesion Correcto",
                    text: ":)",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                });

                window.location.assign("../../../../Inventario_Ferreteria/views/template.php");

            } else if(respuesta == 2) {
                
                // Limpia el formulario 
                
                Swal.fire({
                    title: "Error al Iniciar Sesion",
                    text: "El Usuario y Contraseña no se encunetran registrados",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                });
            }

        }
        
    });
    return false;
}


// REGSITRAR
function registrarUsuario(){

    console.log("Registrar Usuario Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/usuarioRegistrar.php",
        data:$('#formRegistrarUsuario').serialize(),

        success:function(respuesta){
            console.log("Respuesta Insertar Usuario : " + respuesta);

            if(respuesta == 1) {
                
                // Limpia el formulario 
                $('#formRegistrarUsuario')[0].reset();
                Swal.fire({
                    title: "Usuario Registrado",
                    text: "El Usuario ha sido registrado con exito",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                });

            } 
        }

        
    });
    return false;
}

