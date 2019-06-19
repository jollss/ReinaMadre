<meta http-equiv="refresh" content="60" />
<?php
include ('../../conexiones/Localhost.php');#agregar la conexion
$insertarclientenuevo = "DELETE t1 FROM createcliente_log_json t1
INNER JOIN createcliente_log_json t2
WHERE t1.idmindbody < t2.idmindbody  AND t1.clientId = t2.clientId";
$resultinsertarclientenuevo = $mysqliL->query($insertarclientenuevo);
if($resultinsertarclientenuevo==1){
$comnsultaBETWEENClientescreados = " SELECT * FROM createcliente_log_json  where accion2=0";
$resultBETWEENClientescreados = $mysqliL->query($comnsultaBETWEENClientescreados);
//echo $comnsultaBETWEENClientescreados;
while($rowBETWEENClientescreados= $resultBETWEENClientescreados->fetch_assoc()) {
$idmindbodyR = $rowBETWEENClientescreados['idmindbody'];
$siteID = $rowBETWEENClientescreados['siteID'];
$clientId = $rowBETWEENClientescreados['clientId'];
$clientUniqueId = $rowBETWEENClientescreados['clientUniqueId'];
$creationDateTime = $rowBETWEENClientescreados['creationDateTime'];
$status = $rowBETWEENClientescreados['status'];
$firstName = $rowBETWEENClientescreados['firstName'];
$lastName= $rowBETWEENClientescreados['lastName'];
$email = $rowBETWEENClientescreados['email'];
$mobilePhone4 = $rowBETWEENClientescreados['mobilePhone'];
$homePhone= $rowBETWEENClientescreados['homePhone'];
$workPhone = $rowBETWEENClientescreados['workPhone'];
$addressLine1 = $rowBETWEENClientescreados['addressLine1'];
$addressLine2 = $rowBETWEENClientescreados['addressLine2'];
$city = $rowBETWEENClientescreados['city'];
$state = $rowBETWEENClientescreados['state'];
$postalCode = $rowBETWEENClientescreados['postalCode'];
$country = $rowBETWEENClientescreados['country'];
$birthDateTime = $rowBETWEENClientescreados['birthDateTime'];
$appointmentGenderPreference = $rowBETWEENClientescreados['appointmentGenderPreference'];
$firstAppointmentDateTime = $rowBETWEENClientescreados['firstAppointmentDateTime'];
$referredBy = $rowBETWEENClientescreados['referredBy'];
$isProspect = $rowBETWEENClientescreados['isProspect'];
$isCompany = $rowBETWEENClientescreados['isCompany'];
$isLiabilityReleased = $rowBETWEENClientescreados['isLiabilityReleased'];
$liabilityAgreementDateTime = $rowBETWEENClientescreados['liabilityAgreementDateTime'];
$clientNumberOfVisitsAtSite = $rowBETWEENClientescreados['clientNumberOfVisitsAtSite'];
$sendPromotionalEmails = $rowBETWEENClientescreados['sendPromotionalEmails'];
$sendScheduleEmails = $rowBETWEENClientescreados['sendScheduleEmails'];
$sendAccountEmails= $rowBETWEENClientescreados['sendAccountEmails'];
$sendPromotionalTexts = $rowBETWEENClientescreados['sendPromotionalTexts'];
$sendScheduleTexts = $rowBETWEENClientescreados['sendScheduleTexts'];
$sendAccountTexts = $rowBETWEENClientescreados['sendAccountTexts'];
date_default_timezone_set('America/Mexico_City');
 $hoy = date("Y-m-d H:i:s");
 if($mobilePhone4==''){
###########################realizo el update
$ModificarRCC1 = "UPDATE createcliente_log_json SET accion2='1'
WHERE idmindbody='$idmindbodyR'";
$resultModificarRCC1 = $mysqliL->query($ModificarRCC1);
###########################realizo el update
###########################realizo el insert de excepciones
$insertarclientenuevo1 = "INSERT INTO createcliente
(siteID,clientId,clientUniqueId,creationDateTime,status,firstName,lastName,email,mobilePhone,homePhone,workPhone,addressLine1,addressLine2,city,state,postalCode,
country,birthDateTime,appointmentGenderPreference,firstAppointmentDateTime,referredBy,isProspect,isCompany,isLiabilityReleased,liabilityAgreementDateTime,
clientNumberOfVisitsAtSite,sendPromotionalEmails,sendScheduleEmails,sendAccountEmails,sendPromotionalTexts,sendScheduleTexts,sendAccountTexts,fecha_servidor,accion)
VALUES('$siteID','$clientId','$clientUniqueId','$creationDateTime','$status','$firstName','$lastName','$email','0000000000','$homePhone','$workPhone',
'$addressLine1','$addressLine2','$city','$state','$postalCode','$country','$birthDateTime','$appointmentGenderPreference','$firstAppointmentDateTime',
'$referredBy','$isProspect','$isCompany','$isLiabilityReleased','$liabilityAgreementDateTime','$clientNumberOfVisitsAtSite','$sendPromotionalEmails',
'$sendScheduleEmails','$sendAccountEmails','$sendPromotionalTexts','$sendScheduleTexts','$sendAccountTexts','$hoy','Se Migro sin repetidos Log_Creacioncliente')";
$resultinsertarclientenuevo1 = $mysqliL->query($insertarclientenuevo1);
###########################realizo el insert de excepciones
}
elseif($email==''){
  $ModificarRCC2 = "UPDATE createcliente_log_json SET accion2='1'
  WHERE idmindbody='$idmindbodyR'";
  $resultModificarRCC2 = $mysqliL->query($ModificarRCC2);
  $insertarclientenuevo2 = "INSERT INTO createcliente
  (siteID,clientId,clientUniqueId,creationDateTime,status,firstName,lastName,email,mobilePhone,homePhone,workPhone,addressLine1,addressLine2,city,state,postalCode,
  country,birthDateTime,appointmentGenderPreference,firstAppointmentDateTime,referredBy,isProspect,isCompany,isLiabilityReleased,liabilityAgreementDateTime,
  clientNumberOfVisitsAtSite,sendPromotionalEmails,sendScheduleEmails,sendAccountEmails,sendPromotionalTexts,sendScheduleTexts,sendAccountTexts,fecha_servidor,accion)
  VALUES('$siteID','$clientId','$clientUniqueId','$creationDateTime','$status','$firstName','$lastName','notiene@gmail.com','$mobilePhone4','$homePhone','$workPhone',
  '$addressLine1','$addressLine2','$city','$state','$postalCode','$country','$birthDateTime','$appointmentGenderPreference','$firstAppointmentDateTime',
  '$referredBy','$isProspect','$isCompany','$isLiabilityReleased','$liabilityAgreementDateTime','$clientNumberOfVisitsAtSite','$sendPromotionalEmails',
  '$sendScheduleEmails','$sendAccountEmails','$sendPromotionalTexts','$sendScheduleTexts','$sendAccountTexts','$hoy','Se Migro sin repetidos Log_Creacioncliente')";
  $resultinsertarclientenuevo2 = $mysqliL->query($insertarclientenuevo2);
}
else{
$ModificarRCC3 = "UPDATE createcliente_log_json SET accion2='1'
WHERE idmindbody='$idmindbodyR'";
$ModificarRCC3 = $mysqliL->query($ModificarRCC3);

$insertarclientenuevo3 = "INSERT INTO createcliente
(siteID,clientId,clientUniqueId,creationDateTime,status,firstName,lastName,email,mobilePhone,homePhone,workPhone,addressLine1,addressLine2,city,state,postalCode,
country,birthDateTime,appointmentGenderPreference,firstAppointmentDateTime,referredBy,isProspect,isCompany,isLiabilityReleased,liabilityAgreementDateTime,
clientNumberOfVisitsAtSite,sendPromotionalEmails,sendScheduleEmails,sendAccountEmails,sendPromotionalTexts,sendScheduleTexts,sendAccountTexts,fecha_servidor,accion)
VALUES('$siteID','$clientId','$clientUniqueId','$creationDateTime','$status','$firstName','$lastName','$email','$mobilePhone4','$homePhone','$workPhone',
'$addressLine1','$addressLine2','$city','$state','$postalCode','$country','$birthDateTime','$appointmentGenderPreference','$firstAppointmentDateTime',
'$referredBy','$isProspect','$isCompany','$isLiabilityReleased','$liabilityAgreementDateTime','$clientNumberOfVisitsAtSite','$sendPromotionalEmails',
'$sendScheduleEmails','$sendAccountEmails','$sendPromotionalTexts','$sendScheduleTexts','$sendAccountTexts','$hoy','Se Migro sin repetidos Log_Creacioncliente')";
$resultinsertarclientenuevo3 = $mysqliL->query($insertarclientenuevo3);
}
}
}
else{
echo 'no se hace nada ';
}
 ?>
