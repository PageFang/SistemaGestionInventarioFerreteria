

// FUNCION MOSTRAR TABLA DE INVENTARIO GENERAL
function mostrarInventario(){

    console.log("Mostrar Inventario Js");

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/inventarioMostrarController.php",
        
        success:function(r){
            $('#tablaInventario').html(r);
        }

    });
}
