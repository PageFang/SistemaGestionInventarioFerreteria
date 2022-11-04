<?php
    
    // Conexion  a la base de Datos
    class Connect {
       
        static public function connectBd() {   
            $conn = new PDO("mysql:host=localhost;dbname=inventario_ferreteria","root","");
            return $conn;

            /*if($conn){
                echo "Conectado a la Base de Datos";
            }else{
                echo "No esta conectado  a la Base de Datos";
            }*/
        }
    }
    

           
        
       
    