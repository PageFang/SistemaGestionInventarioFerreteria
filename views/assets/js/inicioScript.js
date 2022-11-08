
// Funcion mostrar tabla Inventario General
function mostrarInventario(){

    $.ajax({
        
        type:"POST",
        url:"../../../../Inventario_Ferreteria/controllers/inicioController.php",
        data:{funcion: "1"},
        
        success:function(r){
            $('#tablaInventario').html(r);
        }
    });
}
