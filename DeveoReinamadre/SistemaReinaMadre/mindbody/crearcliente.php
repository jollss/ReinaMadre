<meta http-equiv="refresh" content="60" />
<?php
include ('../../conexiones/Localhost.php');#agregar la conexion
require_once("../includes/clientService.php");
$comnsultaBETWEENClientescreados = " SELECT * FROM createcliente   where accion3=0";
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
$gender= $rowBETWEENClientescreados['gender'];
$birthDateTime= $rowBETWEENClientescreados['birthDateTime'];
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
echo $mobilePhone4.'<br>';

$ModificarRCC2 = "UPDATE createcliente SET accion3='1'
WHERE idmindbody='$idmindbodyR'";
$resultModificarRCC2 = $mysqliL->query($ModificarRCC2);

$sourcename = "ReinaMadre";
  $Username = "ReinaMadre";
  $Password = "_ReinaMadre";
  $siteID = "296701";
  $SiteIDs = "296701";
  $password = "YQNV6Qm8Ww+1Fize3x58pR4Q7go=";
  $tests ='false';
  $UpdateAction='Update';
  $SendEmail='true';
  $PostalCode="00000";#de prueba eliminar no sirve
  $domicilio="S/N";#de prueba eliminar no sirve
  $city='S/N';
  $creds = new SourceCredentials($sourcename, $password, array($siteID));
  $clientService = new MBClientService();
  $clientService->SetDefaultCredentials($creds);
  $client3=array ('Clients');
  $client3["ID"] = $clientId;
  $client3["FirstName"] = $firstName;
  $client3["LastName"] = $lastName;
  $client3["Email"] = $email;
  $client3["PostalCode"] =$PostalCode;
  $client3["AddressLine1"] = $domicilio;
  $client3["MobilePhone"] = $mobilePhone4;
  $client3["City"] = $city;
  $client3["PromotionalEmailOptIn"] = "true";

$result = $clientService->AddOrUpdateClients($UpdateAction,$tests,array($client3),$SendEmail);




$test1=$birthDateTime;
$fe= date('d/m/Y',strtotime($test1));



$url = 'https://app.medicalmanik.com/MedicalManik/json/callback/registrarPaciente';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS,"aplicativoId=0bb0b24f-8aca-4048-8fa3-9a7ac2cc022cd02ccfcf-95b2-4398-8fa6-8fa622764a6072c9d947&password=6472b5e0-6782-4564-9cd0-adf6ede3a32f88a06bfb-8a94-4a31-bc887702de28acef772d7091&token=eyJhbGciOiJIUzM4NCJ9.eyJfX01NX18iOnsiYXBsaWNhdGl2b19pZCI6IjBiYjBiMjRmLThhY2EtNDA0OC04ZmEzLTlhN2FjMmNjMDIyY2QwMmNjZmNmLTk1YjItNDM5OC04ZmE2LThmYTYyMjc2NGE2MDcyYzlkOTQ3IiwiZ2lkIjoxNH0sImV4cCI6MTU2MTA2NjUwM30.BKdxnPXTRgmY3nuxT4rdAmdW8q_oBXTtHyTd23Fy4qDSI7EQLvwTQWYtNrhcadJQ&identificador=$clientId&nombre=$firstName&apellidos=$lastName&sexo=Femenino&correo=$email
&fechaNacimiento=$fe&telefonoMovil=$mobilePhone4&addRepetido=1&sexo=$gender&fechaNacimiento=$fe&notas_personales=$postalCode");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec ($ch);

$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

//if($http_code!=403){

  //echo "demasiados intentos";
//}
  //else{
//if($response)
//{
  echo $http_code;
    echo $response;


}






?>
