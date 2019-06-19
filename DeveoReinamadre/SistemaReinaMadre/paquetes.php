<?php
include ('../conexiones/Localhost.php');#agregar la conexion
$data = json_decode(file_get_contents('php://input'));#imprimir el json
//paquetes.php
$formid= $data->formid;
$fieldname3= $data->fieldname3;
$fieldname4= $data->fieldname4;
$fieldname7= $data->fieldname7;
$fieldname6= $data->fieldname6;
$ipaddress= $data->ipaddress;
$fieldname8= $data->fieldname8;


date_default_timezone_set('America/Mexico_City');
$fecha_servidor = date("Y-m-d H:i:s");


$insertarclientenuevo = "INSERT INTO paquetes
(formid,fieldname3,fieldname4,fieldname7,fieldname6,ipaddress,fecha_servidor,fieldname8)
VALUES
('$formid','$fieldname3','$fieldname4','$fieldname7','$fieldname6','$ipaddress','$fecha_servidor','$fieldname8')";
           $resultinsertarclientenuevo = $mysqliL->query($insertarclientenuevo);
 ?>
