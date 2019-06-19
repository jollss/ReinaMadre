<?php
require_once("../includes/clientService.php");

$sourcename = "ReinaMadre";
  $Username = "ReinaMadre";
  $Password = "_ReinaMadre";
  $siteID = "296701";
  $SiteIDs = "296701";
  $password = "YQNV6Qm8Ww+1Fize3x58pR4Q7go=";
  $tests ='false';
  $UpdateAction='Update';
  $SendEmail='false';
  $mail='$email';#de prueba eliminar no sirve
    $PostalCode="00000";#de prueba eliminar no sirve
      $domicilio="S/N";#de prueba eliminar no sirve
      $city='S/N';
  $creds = new SourceCredentials($sourcename, $password, array($siteID));
  $clientService = new MBClientService();
  $clientService->SetDefaultCredentials($creds);
  $client3=array ('Clients');
  $client3["ID"] = '100064341';
  $client3["FirstName"] = 'joel';
  $client3["LastName"] = 'carmen serdan Robles';
  $client3["Email"] = 'jo@gmail.com';
  $client3["PostalCode"] ='50850';
  $client3["AddressLine1"] = 'cerca dem icsa ';
  $client3["MobilePhone"] = '7291836294';
  $client3["City"] = 'mexico';
  $client3["Notes"] = 'dasdasdsadas';
  $client3["Gender"] = 'male';
//$client3["ClientIndexes"] =array('ClientIndex'=>array('ID'=>'2','values'=>array('ClientIndexValue'=>array('ID'=>'59'))));
    print_r($client3);
$result = $clientService->AddOrUpdateClients($UpdateAction,$tests,array($client3),$SendEmail);

//print_r($result);
#inserto cliente en mi tabla de modificacion
/*
foreach ($cds as $cd){
  $indexValue=$cd->indexValue;
$indexName=$cd->indexName;
$indexValue1[]=$indexValue;
$indexName2[]=$indexName;
}
###################nombre de la variable
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
$sql = "SELECT * from pruebaDB";
$res = mysqli_query($mysqliL,$sql);
$row = mysqli_fetch_assoc($res);
$fields = array_keys($row);
$Semana_en_la_que_se_encuentra=$fields[1];
$Mes_probable_de_parto=$fields[2];
$Prueba_Index=$fields[3];
$arraycase2=array($Semana_en_la_que_se_encuentra,$Mes_probable_de_parto,$Prueba_Index);
$longitud = count($arraycase2);
switch ($cuenta) {
  case 0:
  $insertar_localmente_Modificacion_Cliente = "INSERT INTO Modificacion_Cliente
(siteId,clientId,clientUniqueId,creationDateTime,status,firstName,lastName,
  email,mobilePhone,homePhone,workPhone,addressLine1,addressLine2,city,state,
postalCode,country,birthDateTime,gender,appointmentGenderPreference,
firstAppointmentDateTime,referredBy,isProspect,isCompany,isLiabilityReleased,
liabilityAgreementDateTime,homeLocation,clientNumberOfVisitsAtSite,
Semana_en_la_que_se_encuentra,Mes_probable_de_parto,Prueba_Index,fecha,accion)
      VALUES
('$siteIds','$clientIds','$clientUniqueIds','$creationDateTime','$status',
  '$firstNames','$lastNames','$email','$mobilePhone','$homePhone'
,'$workPhone','$addressLine1','$addressLine2','$city','$state','$postalCode'
,'$country','$birthDateTime','$gender','$appointmentGenderPreference'
,'$firstAppointmentDateTime','$referredBy','$isProspect','$isCompany'
,'$isLiabilityReleased','$liabilityAgreementDateTime','$homeLocation'
,'$clientNumberOfVisitsAtSite','S/N','S/N','S/N','$hoy','Se agrego ya que no existia en Localhost')";#linea los datos que traigo que son las variables
   $insertar_localmente_Modificacion_Clientes = $mysqliL->query($insertar_localmente_Modificacion_Cliente);#linea para ejecutar el insert into


      break;
  case 1:
#########################################################
$caps=$indexNameaD;
for($i=0; $i<$longitud; $i++)
    {
    //saco el valor de cada elemento
  $r= $arraycase2[$i];
  if($r==$caps){
    $sqlssss1 = "UPDATE pruebaDB SET $r='$indexValueX'
     WHERE clientIds='$clientIds'";
     echo $sqlssss1.'<br>';
      $resultqqd = $mysqliL->query($sqlssss1);
  }
  else{
    $sqlssss = "UPDATE pruebaDB SET $r='S/N'
     WHERE clientIds='$clientIds'";
     echo $sqlssss.'<br>';
       $resultqqd = $mysqliL->query($sqlssss);
  }
    }
      break;
  case 2:
        $caps=$indexNameaD;
    $caps1=$indexNameaE;
      $result123 = mysqli_query($mysqliL, "SHOW FIELDS FROM pruebaDB
       WHERE FIELD NOT IN ('id_KjD8Tc', 'verga','clientIds','$caps','$caps1') ");
      while($datos = mysqli_fetch_assoc($result123))
      {
          $r= $datos['Field'];
          }

          $sqlssss1 = "UPDATE pruebaDB SET $caps='$indexValueX',$caps1='$indexValueX1',$r='S/N'
           WHERE clientIds='$clientIds'";
           //echo $sqlssss1.'<br>';
           $resultqqd = $mysqliL->query($sqlssss1);
      break;
      case 3:
      $caps=$indexNameaD;
  $caps1=$indexNameaE;
$caps3=  $indexNameaF;
      $sqlssss1 = "UPDATE pruebaDB SET $caps='$indexValueX',$caps1='$indexValueX1',$caps3='$indexValueX2'
       WHERE clientIds='$clientIds'";
       //echo $sqlssss1.'<br>';
       $resultqqd = $mysqliL->query($sqlssss1);
          break;
}
*/
?>
