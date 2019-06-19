<?php
$url = 'https://app.medicalmanik.com/MedicalManik/json/callback/registrarPaciente';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS,"aplicativoId=0bb0b24f-8aca-4048-8fa3-9a7ac2cc022cd02ccfcf-95b2-4398-8fa6-8fa622764a6072c9d947&password=6472b5e0-6782-4564-9cd0-adf6ede3a32f88a06bfb-8a94-4a31-bc887702de28acef772d7091&token=eyJhbGciOiJIUzM4NCJ9.eyJfX01NX18iOnsiYXBsaWNhdGl2b19pZCI6IjBiYjBiMjRmLThhY2EtNDA0OC04ZmEzLTlhN2FjMmNjMDIyY2QwMmNjZmNmLTk1YjItNDM5OC04ZmE2LThmYTYyMjc2NGE2MDcyYzlkOTQ3IiwiZ2lkIjoxNH0sImV4cCI6MTU2MTA2NjUwM30.BKdxnPXTRgmY3nuxT4rdAmdW8q_oBXTtHyTd23Fy4qDSI7EQLvwTQWYtNrhcadJQ&identificador=100080974&nombre=RICARDO&apellidos=NUÑEZ  COLIN&sexo=Masculino&correo=ricardo0625nuez@gmail.com&fechaNacimiento=00/00/0000&telefonoMovil=7226762783&addRepetido=1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec ($ch);

$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
ECHO $response;
?>
