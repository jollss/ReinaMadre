<?php
include ('../../conexiones/Localhost.php');#agregar la conexion
$data = json_decode(file_get_contents('php://input'));#imprimir el json
date_default_timezone_set('America/Mexico_City');
$fecha_servidor = date("Y-m-d H:i:s");
$siteId = $data->eventData->siteId;
$appointmentId = $data->eventData->appointmentId;
$status = $data->eventData->status;
$isConfirmed = $data->eventData->isConfirmed;
$hasArrived = $data->eventData->hasArrived;
$locationId = $data->eventData->locationId;
$clientId = $data->eventData->clientId;
$clientFirstName = $data->eventData->clientFirstName;
$clientLastName = $data->eventData->clientLastName;
$clientEmail = $data->eventData->clientEmail;
$clientPhone = $data->eventData->clientPhone;
$staffId = $data->eventData->staffId;
$staffFirstName = $data->eventData->staffFirstName;
$staffLastName = $data->eventData->staffLastName;
$startDateTime = $data->eventData->startDateTime;
$fecha = new DateTime("$startDateTime");
$fecha->modify('-5 hours');
$fechastartDateTime= $fecha->format('Y-m-d H:i:s');







$endDateTime = $data->eventData->endDateTime;
$fecha1 = new DateTime("$endDateTime");
$fecha1->modify('-5 hours');
$fechaendDateTime= $fecha1->format('Y-m-d H:i:s');




$durationMinutes = $data->eventData->durationMinutes;
$genderRequested= $data->eventData->genderRequested;
$formulaNotes= $data->eventData->formulaNotes;
$notes = $data->eventData->notes;
$providerId = $data->eventData->providerId;
/////////////////////////////////////////
$cds1 =$payments= $data->eventData->resources;#recorrer en for
//////////////////////
foreach ($cds1 as $cd){
$id=$cd->id;
$name=$cd->name;
$id1[]=$id;
$name1[]=$name;
}
$id12=$id1[0];
$name12=$name1[0];

$cds =$payments= $data->eventData->icdCodes;
foreach ($cds as $cd2){
$code=$cd2->code;
$description=$cd2->description;
$code1[]=$code;
$description1[]=$description;
}
$code12=$code1[0];
$description12=$description1[0];

$insertarclientenuevo = "INSERT INTO appointmentbooking_created
(siteId,appointmentId,status,isConfirmed,hasArrived,locationId,clientId,clientFirstName,clientLastName,clientEmail,clientPhone,staffId,staffFirstName,staffLastName,startDateTime,endDateTime,durationMinutes,genderRequested,formulaNotes,
  notes,providerId,id,name,code,description,fecha_servidor)
VALUES
('$siteId','$appointmentId','$status','$isConfirmed','$hasArrived','$locationId',
  '$clientId','$clientFirstName','$clientLastName','$clientEmail',
  '$clientPhone','$staffId','$staffFirstName','$staffLastName','$fechastartDateTime','$fechaendDateTime',
  '$durationMinutes','$genderRequested','$formulaNotes','$notes','$providerId','$id12','$name12','$code12','$description12','$fecha_servidor')";
           $resultinsertarclientenuevo = $mysqliL->query($insertarclientenuevo);

 ?>
