<?php
//error_reporting(0);
include ('../../conexiones/Localhost.php');#agregar la conexion
$data = json_decode(file_get_contents('php://input'));#imprimir el json
$siteIds = $data->eventData->siteId;
$clientIds = $data->eventData->clientId;
$clientUniqueIds=$data->eventData->clientUniqueId;
$creationDateTime=$data->eventData->creationDateTime;
$status=$data->eventData->status;
$firstNames=$data->eventData->firstName;
$lastNames=$data->eventData->lastName;
$email=$data->eventData->email;
$mobilePhone=$data->eventData->mobilePhone;
$homePhone=$data->eventData->homePhone;
$workPhone=$data->eventData->workPhone;
$addressLine1=$data->eventData->addressLine1;
$addressLine2=$data->eventData->addressLine2;
$city=$data->eventData->city;
$state=$data->eventData->state;
$postalCode=$data->eventData->postalCode;
$country=$data->eventData->country;
$birthDateTime=$data->eventData->birthDateTime;
$gender=$data->eventData->gender;
$appointmentGenderPreference=$data->eventData->appointmentGenderPreference;
$firstAppointmentDateTime=$data->eventData->firstAppointmentDateTime;
$referredBy=$data->eventData->referredBy;
$isProspect=$data->eventData->isProspect;
$isCompany=$data->eventData->isCompany;
$isLiabilityReleased=$data->eventData->isLiabilityReleased;
$liabilityAgreementDateTime=$data->eventData->liabilityAgreementDateTime;
$homeLocation=$data->eventData->homeLocation;
$clientNumberOfVisitsAtSite=$data->eventData->clientNumberOfVisitsAtSite;
$index=$data->eventData->indexes;#el que cuenta jaja la declare de mas porque ya veo mucho codigo jaja
$clientIds = $data->eventData->clientId;
$cds  = $data->eventData->indexes;#el que recorre para sacar los valores
date_default_timezone_set('America/Mexico_City');
   $hoy = date("Y-m-d H:i:s");

   foreach ($cds as $cd){
     $indexValue=$cd->indexValue;
 $indexName=$cd->indexName;
 $indexValue1[]=$indexValue;
 $indexName2[]=$indexName;
   }
   $indexValueX=$indexValue1[0];
   $indexValueX1=$indexValue1[1];
     $indexValueX2=$indexValue1[2];
     ###################nombre del campo
     $indexNameA=$indexName2[0];
       $indexNameB=$indexName2[1];
         $indexNameC=$indexName2[2];
 $indexNameaD = str_replace(" ", "_", $indexNameA);
 $indexNameaE = str_replace(" ", "_", $indexNameB);
 $indexNameaF = str_replace(" ", "_", $indexNameC);
 $insertarclientenuevo = "INSERT INTO appointmentbooking_created_log
 (siteId,clientId,clientUniqueId,creationDateTime,status,firstName,lastName,email,mobilePhone,
   homePhone,workPhone,addressLine1,addressLine2,city,
   state,postalCode,country,birthDateTime,
   gender,appointmentGenderPreference,
   firstAppointmentDateTime,referredBy,isProspect,isCompany,code,
   description,fecha_servidor,isLiabilityReleased,liabilityAgreementDateTime
   ,homeLocation,clientNumberOfVisitsAtSite,Semana_en_la_que_se_encuentra
   ,Mes_probable_de_parto,fecha_servidor,accion1,primera_vez,accion2,accion3)
 VALUES
 ('$siteIds','$clientIds','$clientUniqueIds','$creationDateTime','$status','$firstNames','$lastNames','$clientFirstName','$clientLastName','$clientEmail',
   '$clientPhone','$staffId','$staffFirstName','$staffLastName','$fechastartDateTime','$fechaendDateTime',
   '$durationMinutes','$genderRequested','$formulaNotes','$notes','$providerId','$id12','$name12','$code12','$description12','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')";
            $resultinsertarclientenuevo = $mysqliL->query($insertarclientenuevo);

?>
