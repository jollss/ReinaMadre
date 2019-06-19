<?php
include ('../../conexiones/Localhost.php');#agregar la conexion
$data = json_decode(file_get_contents('php://input'));#imprimir el json
$siteId = $data->eventData->siteId;
$appointmentId = $data->eventData->appointmentId;




date_default_timezone_set('America/Mexico_City');
$fecha_servidor = date("Y-m-d H:i:s");


$insertarclientenuevo = "INSERT INTO appointmentBooking_cancelled
(siteId,appointmentId,fecha_servidor)
VALUES
('$siteId','$appointmentId','$fecha_servidor')";
  $resultinsertarclientenuevo = $mysqliL->query($insertarclientenuevo);
 ?>
