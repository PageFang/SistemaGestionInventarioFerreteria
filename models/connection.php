<?php
    
    // Conexion  a la base de Datos
    class Connect  {
        
            static public function connectBd() {   
            $conn = new PDO("mysql:host=localhost;dbname=inventario_ferreteria","root","");
            
            return $conn;
        }
    }