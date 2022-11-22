<?php

session_start();
session_unset();
session_destroy();

header('location:../../../../Inventario_Ferreteria/views/modules/inicioSesion.php');
?>