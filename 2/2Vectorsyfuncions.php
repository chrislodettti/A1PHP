<?php
$apellidos= array();
$primero[0]='Lopez';
$primero[1]='Valls';
$primero[2]='Irusta';
$primero[3]='Abellan';
$primero[4]='Delgado';

$segundo[0]='Lorenzo';
$segundo[1]='Ybarra';
$segundo[2]= 'Muñoz';
$segundo[3]='Beltran';
$segundo[4]='Catala';
//sort($segundo);
//sort($primero);
$ordenar = array_merge($primero,$segundo);
//sort Ordena un array
sort($ordenar);
  echo "Apellidos ordenados: <p>";
  foreach ($ordenar as $key => $value) {
  echo $value."<br> ";
}
echo " </p>";
?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>2 Vector y funciones</title>
   </head>
   <body>
   </body>
 </html>
