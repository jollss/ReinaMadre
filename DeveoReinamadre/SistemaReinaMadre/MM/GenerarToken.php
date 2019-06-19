<?php
include ('../../conexiones/Localhost.php');

// abrimos la sesión cURL
//$ch = curl_init();
$url = 'https://app.medicalmanik.com/MedicalManik/json/callback/generarToken';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);

 curl_setopt($ch, CURLOPT_POSTFIELDS,
          http_build_query(
              array(
                  'aplicativoId' => urlencode('0bb0b24f-8aca-4048-8fa3-9a7ac2cc022cd02ccfcf-95b2-4398-8fa6-8fa622764a6072c9d947'),
                  'password' => urlencode('6472b5e0-6782-4564-9cd0-adf6ede3a32f88a06bfb-8a94-4a31-bc88-7702de28acef772d7091')
              )
          )
 );

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec ($ch);

$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if($http_code!=403){

  echo "demasiados intentos";
}
  else{
if($response)
{
  echo $http_code;
    echo $response;
  //$response = json_decode(file_get_contents('php://input'));#imprimir el json

	$expira= $response->expira;
  	$token= $response->token;
    date_default_timezone_set('America/Mexico_City');
    $fecha_servidor = date("Y-m-d H:i:s");
    $guardarurl = "INSERT INTO token
 (expira,token,fecha_servidor,status)
 VALUES
 ('$expira','$token','$fecha_servidor','$http_code')";

     $resultguardarurl = $mysqliL->query($guardarurl);
}
else
{
	//echo curl_error($ch);
}

}
?>
