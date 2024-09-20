<?php
   //incializar   
   session_start();
   //Mostrar errores
   error_reporting(E_ALL);
   //display_errors es para mostrar los errores que hay  
   ini_set('display_errors',1)
?>


<?php
   // Datos de conexión a la base de datos
   $host = "localhost";
   $user = "root";
   $password = "";
   $database = "p_artesanias";

   // Crear la conexión
   $conexion = new mysqli($host, $user, $password, $database);

   // Verificar la conexión
   if ($conexion->connect_error) {
      die("Conexión fallida: " . $conexion->connect_error);
   }
?>
