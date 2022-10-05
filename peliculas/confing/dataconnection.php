<?php
 
 class Conexion
 {
     public function conectar()
     {

       
         $enlace = mysqli_connect('sql521.main-hosting.eu','u413489667_equipoUno','@equipoUno202240','u413489667_equipoUno');
         if($enlace){
             echo "Conexion correcta a la base de datos, si pude mamá";
         }
         return $enlace;
     }

    
 }
?>