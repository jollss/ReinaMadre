<?php
include ('../../conexiones/Localhost.php');#agregar la conexion
$data = json_decode(file_get_contents('php://input'));#imprimir el json
/* ----------------------------inicio de varibles que contiene el objeto eventData--------------------------------------*/
$data = json_decode(file_get_contents('php://input'));#recibir el json
$siteId = $data->eventData->siteId;
$clientId = $data->eventData->clientId;
$clientUniqueId=$data->eventData->clientUniqueId;
$creationDateTime=$data->eventData->creationDateTime;
$status=$data->eventData->status;
$firstName=$data->eventData->firstName;
$lastName=$data->eventData->lastName;
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
#aqui van los indidexes
#fin de index
$sendPromotionalEmails=$data->eventData->sendPromotionalEmails;
$sendScheduleEmails=$data->eventData->sendScheduleEmails;
$sendAccountEmails=$data->eventData->sendAccountEmails;
$sendPromotionalTexts=$data->eventData->sendPromotionalTexts;
$sendScheduleTexts=$data->eventData->sendScheduleTexts;
$sendAccountTexts=$data->eventData->sendAccountTexts;
date_default_timezone_set('America/Mexico_City');
$fecha_servidor = date("Y-m-d H:i:s");
$cadena_formateada_nombre = trim($nombre);
$cadena_formateada_apellidos = trim($apellidos);
/* ----------------------------fin de varibles que contiene el objeto eventData--------------------------------------*/
/* ----------------------------inicio de se crean 2 funciones para tener la nomenclatura definida-------------------------------------- */
$apellidos = strtr(strtoupper($lastName),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
$nombre = strtr(strtoupper($firstName),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
$apellidos = str_replace(
              array('Á','É','Í','Ó','Ú'),
              array('A','E','I','O','U'),
              $apellidos
          );
$nombre = str_replace(
              array('Á','É','Í','Ó','Ú'),
              array('A','E','I','O','U'),
              $nombre
          );
/* ----------------------------fin de se crean 2 funciones para tener la nomenclatura definida-------------------------------------- */
$consultacreatecliente = mysqli_query($mysqliL, "SELECT clientId,clientUniqueId,firstName,lastName,CountR
  FROM createcliente  WHERE clientId = '$clientId' and clientUniqueId='$clientUniqueId'");
$totalcreatecliente=$consultacreatecliente->num_rows;
$row = mysqli_fetch_assoc($consultacreatecliente);
  $firstNameCC= $row['firstName'];
  $lastNameCC= $row['lastName'];
  $CountRCC= $row['CountR'];
  if($totalcreatecliente==0){

        /*-------------------------------------------------------inserto localmente ------------------------------------------- */
$insertarclientenuevo = "INSERT INTO createcliente
(siteId,clientId,clientUniqueId,creationDateTime,status,firstName,lastName,email,mobilePhone,homePhone,workPhone,addressLine1,addressLine2,city,
state,postalCode,country,birthDateTime,gender,appointmentGenderPreference,firstAppointmentDateTime,referredBy,isProspect,isCompany,isLiabilityReleased,
liabilityAgreementDateTime,homeLocation,clientNumberOfVisitsAtSite,
sendPromotionalEmails,sendScheduleEmails,sendAccountEmails,
sendPromotionalTexts,
sendScheduleTexts,sendAccountTexts,fecha_servidor,CountR)
VALUES('$siteId','$clientId','$clientUniqueId','$creationDateTime','$status','$cadena_formateada_nombre','$cadena_formateada_apellidos','$email','$mobilePhone','$homePhone','$workPhone',
'$addressLine1','$addressLine2','$city','$state','$postalCode','$country','$birthDateTime','$gender','$appointmentGenderPreference',
'$firstAppointmentDateTime','$referredBy','$isProspect','$isCompany','$isLiabilityReleased','$liabilityAgreementDateTime','$homeLocation',
'$clientNumberOfVisitsAtSite',
'$sendPromotionalEmails',
'$sendScheduleEmails',
'$sendAccountEmails',
'$sendPromotionalTexts',
'$sendScheduleTexts',
'$sendAccountTexts','$fecha_servidor','0')";
           $resultinsertarclientenuevo = $mysqliL->query($insertarclientenuevo);
                        /*-------------------------------------------------------fin inserto localmente ------------------------------------------- */

      }
        elseif($totalcreatecliente>0){


$CountRCCsum=$CountRCC+1;
       $ModificarRCC = "UPDATE createcliente SET accion='se repitio la insercion',CountR='$CountRCCsum'
         WHERE clientId='$clientId'";
         $resultModificarRCC = $mysqliL->query($ModificarRCC);
      }
 ?>
