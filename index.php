<?php
   function api($ruta){
     $url="https://app-c935da0b-c862-426e-8b68-2dfdad35a3bd.cleverapps.io/";
     $respuesta=$url.$ruta;
     return $respuesta;
   }
   $direccion=api("");
   $json=file_get_contents($direccion);
   $datos=json_decode($json,true);
   print_r($datos);
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>API</title>
</head>
<body>
 <?php
  foreach ($datos as $key => $value){
    $id=$value["Dataid"];
    $correo=$value["Correo"];
    echo "
      <li>$id</li>
      <li>$correo</li>
    ";
  }
 ?>
  
</body>
</html>