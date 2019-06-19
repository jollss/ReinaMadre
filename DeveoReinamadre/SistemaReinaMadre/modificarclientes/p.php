<?php
$client = new SoapClient("https://api.mindbodyonline.com/0_5_1/ClientService.asmx?WSDL");
$metodos=var_dump($client->__getTypes());
echo $metodos."<br>";

//echo var_dump($client->__getFunctions());
$sourceCredentials = array('SourceName'=>'jollss',
'Password'=>"jt2HfafRmhnzxRBZAZeH7UGw/dU=",'SiteIDs'=>array('-99'));
$request = array('SourceCredentials'=>$sourceCredentials);

$client3=array ('Clients');
$client3["ID"] = "jollss";
$client3["FirstName"] = "jollss=";
$client3["LastName"] = "jollss=";
$client3["Email"] = "jollss=";
$client3["PostalCode"] = "jollss=";
$client3["AddressLine1"] = "jollss=";
$client3["MobilePhone"] = "jollss=";
$client3["City"] = "jollss=";



//$client = array('ID'=>'jollss', 'Password'=>"jt2HfafRmhnzxRBZAZeH7UGw/dU=",'SiteIDs'=>array('-99'));
/*
$client3 = array('ID'=>'jollss', 'FirstName'=>"jollss/dU=",'LastName'=>"jollss/dU=",
'Email'=>"jollss/dU=",'PostalCode'=>"jollss/dU=",
'AddressLine1'=>"jollss/dU=",'MobilePhone'=>"jollss/dU="
,'City'=>"jollss/dU=");*/
//$Clients = array('Clients'=>$client3);
 $result = $client->AddOrUpdateClients(array("Request"=>$request));
print_r($result);
try {

//print_r ($result);
} catch (SoapFault $fault) {
  echo ' <xmp> tag displays xml output in html';
  echo 'Request : <br/><xmp>',
    $client->client->__getLastRequest(),

  '</xmp><br/><br/> Error Message : <br/>',
  $fault->getMessage();

}


//print_r($result);
//$result = $client->__soapCall('AddOrUpdateClients',array('parameters' => array('username'=>$user,'password'=>$password,'token'=>$token)));
?>
