<?php

    require_once("connection.php");
    
    class ReporteModel {
        

        ## MOSTRAR LISTA DE SALIDAS
        static public function totalIngresos(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT valorTotal FROM salida");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }

         ## MOSTRAR LISTA DE SALIDAS
         static public function totalEgresos(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT valorTotal FROM pedido");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }
        
        static public function productoMasVendidoNombre(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT nombre from producto");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }
        
        static public function productoMasVendido(){
            
            $stmt = Connect::connectBd()-> prepare("SELECT p.nombre, s.cantidad from producto p left join salida s ON s.producto_id = p.id");
            $stmt->execute();

            return $stmt->fetchAll();
            $stmt = null;
        }

    }