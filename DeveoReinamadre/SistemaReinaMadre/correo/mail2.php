<meta http-equiv="refresh" content="20" />
<?php
/*

*/
include ('../../conexiones/Localhost.php');

  require_once("../includes/clientService.php");
#consulta para traer los datos del cliente
$result123 = mysqli_query($mysqliL, "SELECT fieldname9 as apellidos,fieldname3 as nombre,fieldname4 as correo ,fieldname7 as telefono,fieldname6 as semana,
  fieldname8 as lugar,id_paquetes as ids  FROM paquetes where status=0");

   // Variable $row hold the result of the query
 $row = mysqli_fetch_assoc($result123);
   // Variable $hash hold the password hash on database
   $nombre = $row['nombre'];
      $apellidos= $row['apellidos'];
   $correo = $row['correo'];
   $telefono = $row['telefono'];
   $semana = $row['semana'];
   $lugar = $row['lugar'];
   $ids = $row['ids'];
     ////////////////////////////////////////////////////////////////////////////////////

     /* ----------------------------fin de varibles que contiene el objeto eventData--------------------------------------*/
     /* ----------------------------inicio de se crean 2 funciones para tener la nomenclatura definida-------------------------------------- */
     $apellidos1 = strtr(strtoupper($apellidos),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
     $nombres = strtr(strtoupper($nombre),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
     $apellidos1 = str_replace(
                   array('Á','É','Í','Ó','Ú'),
                   array('A','E','I','O','U'),
                   $apellidos1
               );
     $nombres = str_replace(
                   array('Á','É','Í','Ó','Ú'),
                   array('A','E','I','O','U'),
                   $nombres
               );

     $lugar1=substr($lugar, 0, 1);
if($lugar1=='T'){

//echo $nombres;
echo $apellidos1;
  $sourcename = "ReinaMadre";
  $siteID = "296701";
  $password = "YQNV6Qm8Ww+1Fize3x58pR4Q7go=";

  $FirstName=$nombres;
  $LastName=$apellidos1;
  $BirthDate='1989-12-12';#1989-12-12
  $PostalCode='00000';
  $MobilePhone=$telefono;

  $creds = new SourceCredentials($sourcename, $password, array($siteID));
  $clientService = new MBClientService();
  $clientService->SetDefaultCredentials($creds);
  $crearcliente=array ('Clients');
  $crearcliente["FirstName"] = $FirstName;
  $crearcliente["LastName"] = $LastName;
  $crearcliente["BirthDate"] = $BirthDate;
  $crearcliente["PostalCode"] = $PostalCode;
  $crearcliente["MobilePhone"] =$MobilePhone;
    $crearcliente["Gender"] ='Female';
  $result = $clientService->CrearCliente(array($crearcliente));
  $error=$result->AddOrUpdateClientsResult->ErrorCode;

print_r ($result);
  if($error!=200){
    echo "paso algo papu en toluca";
    $error=$result->AddOrUpdateClientsResult->ErrorCode;
  }
  else{
  $cds = toArray($result->AddOrUpdateClientsResult->Clients->Client);

  foreach ($cds as $cd) {

  	  $id=$cd->UniqueID;
  echo $id;

  }
  // abrimos la sesión cURL
  //$ch = curl_init();
  $url = 'https://app.medicalmanik.com/MedicalManik/json/callback/registrarPaciente';
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, 1);

  curl_setopt($ch, CURLOPT_POSTFIELDS,"aplicativoId=0bb0b24f-8aca-4048-8fa3-9a7ac2cc022cd02ccfcf-95b2-4398-8fa6-8fa622764a6072c9d947&password=6472b5e0-6782-4564-9cd0-adf6ede3a32f88a06bfb-8a94-4a31-bc88-7702de28acef772d7091&token=eyJhbGciOiJIUzM4NCJ9.eyJfX01NX18iOnsiYXBsaWNhdGl2b19pZCI6IjBiYjBiMjRmLThhY2EtNDA0OC04ZmEzLTlhN2FjMmNjMDIyY2QwMmNjZmNmLTk1YjItNDM5OC04ZmE2LThmYTYyMjc2NGE2MDcyYzlkOTQ3IiwiZ2lkIjoxNH0sImV4cCI6MTU2MTA2NjUwM30.BKdxnPXTRgmY3nuxT4rdAmdW8q_oBXTtHyTd23Fy4qDSI7EQLvwTQWYtNrhcadJQ&
  identificador=$id&nombre=$nombres&apellidos=$apellidos1&sexo=Femenino&correo=$correo&fechaNacimiento=00/00/0000&telefonoMovil=$telefono&addRepetido=1");
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

      $destinatario = "alertas@reinamadre.mx";
      $asunto = "Nuevo Prospecto!";
      $cuerpo = '
      <html>
      <head>

      </head>
      <body>
      	<style>
      	table {
      		width: 40%;
      	}
      	td, th {
      		text-align: left;
      		padding: 8px;
      	}
      	</style>
      	<div id="pa" style=" width: 800px;
      margin: 4px auto ; " >
      <center><img src="https://www.myreinamadre.mx/DeveoReinaMadre/img.png" /></center>
      <div id="cabecera" style="color:white;
      			background-color:#ec80a8;  margin: 0 auto;
      			 width:100%">
      			<center><FONT SIZE=9>	<h2><p>Nuevo Prospecto!</p></h2></font></center>
      			</div>
      		<center>
      <H2><font style="color:#828081">Adjuntamos datos del Px que dejo desde la URL de</font> <b>Paquetes de Materniadad</b></H2>
      </center>
      	<div>
      	  <table style ="width: 130%;">
      	    <tr>
      	      <td style=" text-align: center;">Nombre</td>
      	     <td style=" text-align: left;">'.$nombres.' '.$apellidos1.'</td>
      	    </tr>
      	    <tr>
      	     <td style=" text-align: center;">Correo Electronico</td>
      	      <td style=" text-align: left;">'.$correo.'</td>
      	    </tr>
      	    <tr>
      	   <td style=" text-align: center;">Telefono</td>
      	     <td style=" text-align: left;">'.$telefono.'</td>
      	    </tr><tr>
      	      <td style=" text-align: center;">Semana de Gestacion</td>
      	     <td style=" text-align: left;">'.$semana.'</td>
      	    </tr>
      	  </table>
      	</div><center>
      <H2><p style="color:#828081";> Esperando que la informacion sea de utilidad ,cualquier duda o comentario favor de contar al siguiente correo alertas@reinamadre.mx
      </p></H2></center>
      <center><H2><p style="color:#828081";>
      Desarrollo Reina Madre</H2><p></center>
      </div>
      </body>
      </html>
      ';
      //para el envío en formato HTML
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

      //dirección del remitente
      $headers .= "From: alertas <alertas@reinamadre.mx>\r\n";

      //dirección de respuesta, si queremos que sea distinta que la del remitente
      $headers .= "Reply-To: alertas@reinamadre.mx\r\n";

      //ruta del mensaje desde origen a destino
      $headers .= "Return-path: al221310531@gmail.com\r\n";
  //direcciones que recibián copia
  $headers .= "Cc: caromaoc@gmail.com\r\n";#este es el chido jajajaj

  //direcciones que recibirán copia oculta
  $headers .= "Bcc: al221310531@gmail.com,lia.dmarquez@gmail.com\r\n";

  mail($destinatario,$asunto,$cuerpo,$headers);
  $modificarestatus = "UPDATE paquetes SET status='1',idbody='$id'
   WHERE id_paquetes='$ids'";
  $resultmodificarestatus = $mysqliL->query($modificarestatus);
}
}
  elseif($lugar1=='P'){


    $sourcename = "ReinaMadre";
    $siteID = "296701";
    $password = "YQNV6Qm8Ww+1Fize3x58pR4Q7go=";

    $FirstName=$nombres;
    $LastName=$apellidos1;
    $BirthDate='1989-12-12';
    $PostalCode='00000';
    $MobilePhone=$telefono;

    $creds = new SourceCredentials($sourcename, $password, array($siteID));
    $clientService = new MBClientService();
    $clientService->SetDefaultCredentials($creds);
    $crearcliente=array ('Clients');
    $crearcliente["FirstName"] = $FirstName;
    $crearcliente["LastName"] = $LastName;
    $crearcliente["BirthDate"] = $BirthDate;
    $crearcliente["PostalCode"] = $PostalCode;
    $crearcliente["MobilePhone"] =$MobilePhone;
    $crearcliente["Gender"] ='Female';
    $result = $clientService->CrearCliente(array($crearcliente));
    $error=$result->AddOrUpdateClientsResult->ErrorCode;
print_R ($result);

    if($error!=200){
      echo "paso algo papu en pat";
      $error=$result->AddOrUpdateClientsResult->ErrorCode;
    }
    else{
    $cds = toArray($result->AddOrUpdateClientsResult->Clients->Client);

    foreach ($cds as $cd) {

    	  $id=$cd->UniqueID;
    echo $id;

    }
    // abrimos la sesión cURL
    //$ch = curl_init();
    $url = 'https://app.medicalmanik.com/MedicalManik/json/callback/registrarPaciente';
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);

    curl_setopt($ch, CURLOPT_POSTFIELDS,"aplicativoId=0bb0b24f-8aca-4048-8fa3-9a7ac2cc022cd02ccfcf-95b2-4398-8fa6-8fa622764a6072c9d947&password=6472b5e0-6782-4564-9cd0-adf6ede3a32f88a06bfb-8a94-4a31-bc887702de28acef772d7091&token=eyJhbGciOiJIUzM4NCJ9.eyJfX01NX18iOnsiYXBsaWNhdGl2b19pZCI6IjBiYjBiMjRmLThhY2EtNDA0OC04ZmEzLTlhN2FjMmNjMDIyY2QwMmNjZmNmLTk1YjItNDM5OC04ZmE2LThmYTYyMjc2NGE2MDcyYzlkOTQ3IiwiZ2lkIjoxNH0sImV4cCI6MTU2MTA2NjUwM30.BKdxnPXTRgmY3nuxT4rdAmdW8q_oBXTtHyTd23Fy4qDSI7EQLvwTQWYtNrhcadJQ&identificador=$id&nombre=$nombres&apellidos=$apellidos1&sexo=Femenino&correo=$correo&fechaNacimiento=00/00/0000&telefonoMovil=$telefono&addRepetido=1");
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
        $destinatario = "alertas@reinamadre.mx";
        $asunto = "Nuevo Prospecto!";
        $cuerpo = '
        <html>
        <head>
           <title>Prueba de correo</title>
        </head>
        <body>
        	<style>
        	table {
        		width: 40%;
        	}
        	td, th {
        		text-align: left;
        		padding: 8px;
        	}
        	</style>
        	<div id="pa" style=" width: 800px;
        margin: 4px auto ; " >
        <center><img src="https://www.myreinamadre.mx/DeveoReinaMadre/img.png" /></center>
        <div id="cabecera" style="color:white;
        			background-color:#ec80a8;  margin: 0 auto;
        			 width:100%">
        			<center><FONT SIZE=9>	<h2><p>Nuevo Prospecto!</p></h2></font></center>
        			</div>
        		<center>
        <H2><font style="color:#828081">Adjuntamos datos del Px que dejo desde la URL de</font> <b>Paquetes de Materniadad</b></H2>
        </center>
        	<div>
        	  <table style ="width: 130%;">
        	    <tr>
              <td style=" text-align: center;">Nombre</td>
             <td style=" text-align: left;">'.$nombres.' '.$apellidos1.'</td>
            </tr>
            <tr>
             <td style=" text-align: center;">Correo Electronico</td>
              <td style=" text-align: left;">'.$correo.'</td>
            </tr>
            <tr>
           <td style=" text-align: center;">Telefono</td>
             <td style=" text-align: left;">'.$telefono.'</td>
            </tr><tr>
              <td style=" text-align: center;">Semana de Gestacion</td>
             <td style=" text-align: left;">'.$semana.'</td>
        	    </tr>
        	  </table>
        	</div><center>
        <H2><p style="color:#828081";> Esperando que la informacion sea de utilidad ,cualquier duda o comentario favor de contar al siguiente correo alertas@reinamadre.mx
        </p></H2></center>
        <center><H2><p style="color:#828081";>
        Desarrollo Reina Madre</H2><p></center>
        </div>
        </body>
        </html>
        ';
        //para el envío en formato HTML
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: alertas <alertas@reinamadre.mx>\r\n";

        //dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: alertas@reinamadre.mx\r\n";

        //ruta del mensaje desde origen a destino
        $headers .= "Return-path: al221310531@gmail.com\r\n";
    //direcciones que recibián copia
    $headers .= "Cc: jessica.jpm@gmail.com\r\n";#este es el chido jajajaj

    //direcciones que recibirán copia oculta
    $headers .= "Bcc: al221310531@gmail.com,lia.dmarquez@gmail.com\r\n";

    mail($destinatario,$asunto,$cuerpo,$headers);


    $modificarestatus = "UPDATE paquetes SET status='1',idbody='$id'
     WHERE id_paquetes='$ids'";
    $resultmodificarestatus = $mysqliL->query($modificarestatus);
  }
  }
  else{
echo 'no hay nada 2';
  }
   /*

*/
?>
