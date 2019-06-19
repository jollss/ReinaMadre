<!--<meta http-equiv="refresh" content="60" />-->
<?php
require_once("../includes/clientService.php");
	include ('../../conexiones/Localhost.php');
#selecciono el ultimo que se quedo en la modificacion
$consultaultimoidmindbodycon1 = mysqli_query($mysqliL, "SELECT MAX(idmindbody) AS idmindbody  FROM createcliente WHERE accion2='1'");
$rowultimoidmindbodycon1 = mysqli_fetch_assoc($consultaultimoidmindbodycon1);
  $idmindbody= $rowultimoidmindbodycon1['idmindbody'];
  if($idmindbody==''){
    $consultaultimoidmindbodyminimo = mysqli_query($mysqliL, "SELECT MIN(idmindbody)  as idmindbody,clientId,firstName,lastName FROM createcliente ");
    $rowultimoidmindbodyminimo = mysqli_fetch_assoc($consultaultimoidmindbodyminimo);
      $idmindbodyAQ= $rowultimoidmindbodyminimo['idmindbody'];
$clientId= $rowultimoidmindbodyminimo['clientId'];
$firstName= $rowultimoidmindbodyminimo['firstName'];
$lastName= $rowultimoidmindbodyminimo['lastName'];
$sourcename = "ReinaMadre";
  $Username = "ReinaMadre";
  $Password = "_ReinaMadre";
  $siteID = "296701";
  $SiteIDs = "296701";
  $password = "YQNV6Qm8Ww+1Fize3x58pR4Q7go=";
  $tests ='false';
  $UpdateAction='Update';
  $SendEmail='false';
  $mail='S/N@S/N.com';#de prueba eliminar no sirve
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
  $client3["Email"] = $mail;
  $client3["PostalCode"] =$PostalCode;
  $client3["AddressLine1"] = $domicilio;
  $client3["MobilePhone"] = '0000000000';
  $client3["City"] = $city;
$result = $clientService->AddOrUpdateClients($UpdateAction,$tests,array($client3),$SendEmail);
      $ModificarRCC = "UPDATE createcliente SET accion2='1'
        WHERE  idmindbody='$idmindbodyAQ'";
     $resultModificarRCC = $mysqliL->query($ModificarRCC);
  }
    else{
#termino la seleccion el ultimo que se quedo en la modificacion
#selecciono el ultimo
$consultaultimoidmindbody = mysqli_query($mysqliL, " SELECT MAX(idmindbody) AS idmindbody  FROM createcliente ");
$rowultimoidmindbody = mysqli_fetch_assoc($consultaultimoidmindbody);
$idmindbody1= $rowultimoidmindbody['idmindbody'];
#termino la seleccion
#realizo un BETWEEN entre los valores de las consultas
$comnsultaBETWEENClientescreados = " SELECT * FROM createcliente WHERE idmindbody BETWEEN '$idmindbody' AND '$idmindbody1' ";
  $resultBETWEENClientescreados = $mysqliL->query($comnsultaBETWEENClientescreados);
//  echo $comnsultaBETWEENClientescreados;
  while($rowBETWEENClientescreados= $resultBETWEENClientescreados->fetch_assoc()) {
    $idmindbodyR = $rowBETWEENClientescreados['idmindbody'];
      $mobilePhone4 = $rowBETWEENClientescreados['mobilePhone'];
        $email = $rowBETWEENClientescreados['email'];
    $clientId = $rowBETWEENClientescreados['clientId'];
        $clientUniqueId = $rowBETWEENClientescreados['clientUniqueId'];
$firstName = $rowBETWEENClientescreados['firstName'];
$lastName= $rowBETWEENClientescreados['lastName'];
  $sourcename = "ReinaMadre";
    $Username = "ReinaMadre";
    $Password = "_ReinaMadre";
    $siteID = "296701";
    $SiteIDs = "296701";
    $password = "YQNV6Qm8Ww+1Fize3x58pR4Q7go=";
    $tests ='false';
    $UpdateAction='Update';
    $SendEmail='false';
    //$mail=$email;#de prueba eliminar no sirve
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
    $client3["PostalCode"] ='00000';
    $client3["AddressLine1"] = $domicilio;
    $client3["MobilePhone"] = $mobilePhone4;
    $client3["City"] = $city;
  $result = $clientService->AddOrUpdateClients($UpdateAction,$tests,array($client3),$SendEmail);
  $ModificarRCC = "UPDATE createcliente SET accion2='1'
    WHERE clientId='$clientId' and clientUniqueId='$clientUniqueId'";
  $resultModificarRCC = $mysqliL->query($ModificarRCC);
}

}


?>
