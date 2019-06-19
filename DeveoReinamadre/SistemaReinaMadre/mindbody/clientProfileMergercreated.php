<?php
include ('../../conexiones/Localhost.php');#agregar la conexion
$data = json_decode(file_get_contents('php://input'));#imprimir el json
$mergeDateTime = $data->eventData->mergeDateTime;
$mergedByStaffId = $data->eventData->mergedByStaffId;
$keptClientId = $data->eventData->keptClientId;
$keptClientUniqueId = $data->eventData->keptClientUniqueId;
$removedClientUniqueId = $data->eventData->removedClientUniqueId;
date_default_timezone_set('America/Mexico_City');
   $hoy = date("Y-m-d H:i:s");

$insertarclientprofilemerger_created = "INSERT INTO clientprofilemerger_created
   (mergeDateTime,mergedByStaffId,keptClientId,keptClientUniqueId,removedClientUniqueId,fecha_servidor)
    VALUES
('$mergeDateTime','$mergedByStaffId','$keptClientId','$keptClientUniqueId','$removedClientUniqueId','$hoy')";
 $resultinsertarclientprofilemerger_created = $mysqliL->query($insertarclientprofilemerger_created);
 ?>
