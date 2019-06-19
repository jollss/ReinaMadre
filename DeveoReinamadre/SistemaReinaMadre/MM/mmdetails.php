<?php
include ('../../conexiones/Localhost.php');#agregar la conexion
$data = json_decode(file_get_contents('php://input'));#imprimir el json
$identificador= $data->data->identificador;
$nombre = $data->data->nombre;
$apellidos = $data->data->apellidos;
$fum = $data->data->fum;
$sdg = $data->data->sdg;
$fpp = $data->data->fpp;
$fuc = $data->data->fuc;
$fpc = $data->data->fpc;
$medicoId = $data->data->medicoId;
$mediconombre = $data->data->medicoNombre;
$citaId = $data->data->citaId;
date_default_timezone_set('America/Mexico_City');
$fecha_servidor = date("Y-m-d H:i:s");
$insertarmedicalmanik = "INSERT INTO medicalmanik
(identificador,nombre,apellidos,fum,sdg,fpp,fuc,fpc,medicoId,mediconombre,citaId,fecha_servidor)
VALUES('$identificador','$nombre','$apellidos','$fum','$sdg','$fpp','$fuc','$fpc','$medicoId','$mediconombre','$citaId','$fecha_servidor')";
$resultmedicalmanik = $mysqliL->query($insertarmedicalmanik);



$insertarclientenuevo = "DELETE t1 FROM medicalmanik t1
INNER JOIN medicalmanik t2
WHERE t1.idmindbody < t2.idmindbody  AND t1.clientId = t2.clientId";
$resultinsertarclientenuevo = $mysqliL->query($insertarclientenuevo);


$insertarmedicalmanik1 = "INSERT INTO medicalmanik_log
(identificador,nombre,apellidos,fum,sdg,fpp,fuc,fpc,medicoId,mediconombre,citaId,fecha_servidor)
VALUES('$identificador','$nombre','$apellidos','$fum','$sdg','$fpp','$fuc','$fpc','$medicoId','$mediconombre','$citaId','$fecha_servidor')";
$resultmedicalmanik1 = $mysqliL->query($insertarmedicalmanik1);

?>
