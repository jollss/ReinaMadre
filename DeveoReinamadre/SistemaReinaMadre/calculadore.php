<?php
//calculadore.php

include ('../conexiones/Localhost.php');#agregar la conexion
$data = json_decode(file_get_contents('php://input'));#imprimir el json
//paquetes.php
$formid= $data->formid;#4 calculadora
$fieldname11= $data->fieldname11;#nombre
$fieldname10= $data->fieldname10;#correo
$fieldname1= $data->fieldname1;#fecha que ingresa la persona
$fieldname6= $data->fieldname6;#fecha probable de parto
$fieldname7= $data->fieldname7;#cauntas semanas tiene
$final_price= $data->final_price;#precio no se que pedo jjajaj
$itemnumber= $data->itemnumber;#numero que no se jajaja
$fecha_es = explode("/","$fieldname1");
krsort($fecha_es);
$fecha_ingresa_persona= implode("-",$fecha_es);
$fecha_es1 = explode("/","$fieldname6");
krsort($fecha_es1);
$fecha_probable_parto=implode("-",$fecha_es1);
date_default_timezone_set('America/Mexico_City');
$fecha_servidor = date("Y-m-d H:i:s");
date_default_timezone_set('America/Mexico_City');
$fecha_que_hizo_prueba = date("Y-m-d ");
$insertarclientenuevo = "INSERT INTO calculadore
(formid,fieldname11,fieldname10,fieldname1,fieldname6,fieldname7,final_price,itemnumber,fecha_que_hizo_prueba,fecha_servidor)
VALUES
('$formid','$fieldname11','$fieldname10','$fecha_ingresa_persona','$fecha_probable_parto','$fieldname7','$final_price','$itemnumber','$fecha_que_hizo_prueba','$fecha_servidor')";
           $resultinsertarclientenuevo = $mysqliL->query($insertarclientenuevo);
 ?>
