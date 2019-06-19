<?php
//error_reporting(0);
include ('../../conexiones/Localhost.php');#agregar la conexion
include ('../../conexiones/toluca.php');#agregar la conexion a toluca
/*
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
*/
//$index=array(2,1);
//$cuenta=count($index,COUNT_RECURSIVE);
$cuenta=0;
#buscar en tabla mia
$valor=0;

  switch ($valor) {
      case 0:
          include ('crearclienteM.php');
          break;
          case 1:
            //  echo "valor  es igual a 1";
              break;
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
    $sqlssss1 = "UPDATE pruebaDB SET Semana_en_la_que_se_encuentra='S/N',Mes_probable_de_parto='S/N',Prueba_Index='S/N'
     WHERE clientIds='$clientIds'";
     //echo $sqlssss1.'<br>';
     $resultqqd = $mysqliL->query($sqlssss1);
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


}
 ?>
