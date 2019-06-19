<?php
require_once("../includes/clientService.php");
include ('../../conexiones/Toluca.php');#agregar la conexion a toluca
include ('../../conexiones/Localhost.php');#agregar la conexion
//include ('../../conexiones/Patriotismo.php');#agregar la conexion a Patriotismo
require_once("../includes/clientService.php");#incluyo para
$data = json_decode(file_get_contents('php://input'));#imprimir el json
#tabla de preuba PMinbody
#en sicar representante es igual a la tabla de reinamadre clientId que esta al inicio de mindbody
#en sicr clave es igual a la tabla de reinamadre clientUniqueId que esta en la url
/* ----------------------------inicio de varibles que contiene el objeto eventData-------------------------------------- */
#$clientIds = "987654321";
#$clientUniqueIds="100074209";
$clientIds = "45678";
$clientUniqueIds="213213";
$nombre="CARLA MORRISON";
$lastNames="ESPINOSÁ SÁNCHÉZ";

/* ----------------------------fin de varibles que contiene el objeto eventData-------------------------------------- */

/* -----------inserto en la local y validare si existe o no si existe lo mando a exepciones---------------- */

$consultarlocalhost=mysqli_query($mysqliT,"SELECT representante,clave
   FROM cliente WHERE nombre='$variable $variable1' ");
$totaltablalocalhosst=$consultarlocalhost->num_rows;

$consultarlocalhost1234=mysqli_query($mysqliL,"SELECT clientId,clientUniqueId
   FROM pminbody WHERE firstName='$variable' and lastName='$variable1' ");
$totaltablalocalhosst1235456=$consultarlocalhost1234->num_rows;
echo $totaltablalocalhosst1235456;

if($totaltablalocalhosst1235456==0){
  $insertarexepcion_cliente_localhost_nuevo1 = "INSERT INTO pminbody
     (clientId,clientUniqueId,firstName,lastName)
      VALUES
  ('$clientIds','$clientUniqueIds','$variable','$variable1')";

  $resultexepcion_cliente_localhost_nuevo2 = $mysqliL->query($insertarexepcion_cliente_localhost_nuevo1);
  echo $insertarexepcion_cliente_localhost_nuevo1;
}


if($totaltablalocalhosst>0){

  $consultarlocalhost1=mysqli_query($mysqliL,"SELECT modificacion,idmindbody
     FROM exepcion_cliente WHERE firstName='$variable' AND lastName='$variable1'");
     $row = mysqli_fetch_assoc($consultarlocalhost1);
     $modificacion = $row['modificacion'];
     $idmindbody = $row['idmindbody'];

if($modificacion==""){
  $insertarexepcion_cliente_localhost = "INSERT INTO exepcion_cliente
     (status,firstName,lastName,modificacion,clientId)
      VALUES
  ('posible repetido de MINDBODY','$variable','$variable1',1,'$clientIds')";
   $resultexepcion_cliente_localhost = $mysqliL->query($insertarexepcion_cliente_localhost);
   $id_detalle_excepcion=$mysqliL->insert_id;

$insert_detalles_id_mindbody="INSERT INTO detalles_id_mindbody
   (idmindbody,clientId,clientUniqueId)
    VALUES
('$id_detalle_excepcion','$clientIds','$clientUniqueIds')";
$insert_detalles_id_mindbodyR = $mysqliL->query($insert_detalles_id_mindbody);
}
elseif($modificacion>0){
#CONSULTA PARA VER QUE ID MODIFICARE


  $suma=$modificacion+1;
  $sqlssss1 = "UPDATE exepcion_cliente SET modificacion='$suma' WHERE firstName='$variable' AND lastName='$variable1'";
   $resultqqd = $mysqliL->query($sqlssss1);
   //echo $sqlssss1;
#insertar los demas que van siendo agregados
$consultarlocalhost2=mysqli_query($mysqliL,"SELECT idmindbody
   FROM pminbody WHERE firstName='$variable' AND lastName='$variable1'");
   $row12 = mysqli_fetch_assoc($consultarlocalhost2);
   $idmindbody = $row12['idmindbody'];
   $insert_detalles_id_mindbody1="INSERT INTO detalles_id_mindbody
      (idmindbody,clientId,clientUniqueId)
       VALUES
   ('$idmindbody','$clientIds','$clientUniqueIds')";
  $insert_detalles_id_mindbody1R = $mysqliL->query($insert_detalles_id_mindbody1);
}
}
  else{
    $insertarexepcion_cliente_localhost_nuevo = "INSERT INTO cliente
       (representante,clave,nombre)
        VALUES
  ('$clientIds','$clientUniqueIds','$variable $variable1')";
     $resultexepcion_cliente_localhost_nuevo = $mysqliT->query($insertarexepcion_cliente_localhost_nuevo);

  }
/* empujo a mindbody el nombre correcto si importar que ya exista o no solo es para que este correcto */

$sourcename = "ReinaMadre";
  $Username = "ReinaMadre";
  $Password = "_ReinaMadre";
  $siteID = "296701";
  $SiteIDs = "296701";
  $password = "YQNV6Qm8Ww+1Fize3x58pR4Q7go=";
  $tests ='false';
  $UpdateAction='Update';
  $SendEmail='false';
  $mail="al2213@gmail.com";#de prueba eliminar no sirve
    $PostalCode="50850";#de prueba eliminar no sirve
      $domicilio="pues mi casa papu";#de prueba eliminar no sirve
        $celular="123456891";#de prueba eliminar no sirve
        $ciudad="toluca";#de prueba eliminar no sirve
  $creds = new SourceCredentials($sourcename, $password, array($siteID));
  $clientService = new MBClientService();
  $clientService->SetDefaultCredentials($creds);
  $client3=array ('Clients');
  $client3["ID"] = $clientIds;
  $client3["FirstName"] = $variable;
  $client3["LastName"] = $variable1;
  $client3["Email"] = $mail;
  $client3["PostalCode"] =$PostalCode;
  $client3["AddressLine1"] = $domicilio;
  $client3["MobilePhone"] = $celular;
  $client3["City"] = $ciudad;
$result = $clientService->AddOrUpdateClients($UpdateAction,$tests,array($client3),$SendEmail);
//echo $variable." ".$variable1;
/* fin empujo a mindbody el nombre correcto si importar que ya exista o no solo es para que este correcto */
/* ----------fin  para subir registro a mindbody de nuevo -------------------------------------- */
/* ----------------------------fin para subir registro a mindbody de nuevo-------------------------------------- */
?>
