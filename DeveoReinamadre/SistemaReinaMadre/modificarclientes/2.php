<html>
<HEAD>
<meta name="Content-Type" content="text/html;" http-equiv="content-type" charset="utf-8">
<meta http-equiv="Content-Type"  content="text/html"; charset="iso-8859-1"/>
</HEAD>
<body>
<?php
$uid = $_POST["id"];

//error_reporting(0);
//include ('../conexiones/conexionpatriotismo.php');
require_once("../includes/clientService.php");
#----------------------------------------------
//probar limite de datos en la subida de 1000 propondria yo jajaja osea 56 veces
#---------------------------------------------
#------------------------------------------------------------------------
//traer parametros para la modificacion ya que me hacen falta
#------------------------inicio consulta------------------------------------------------
$query = "SELECT cli_id,representante,nombre,mail,codigoPostal,domicilio,celular,ciudad FROM cliente where cli_id=$uid";

$resultado=$mysqliP->query($query);
while($row = $resultado->fetch_assoc()) {
  $cambiarnombre=$row['nombre'];
  $mail=$row['mail'];
  $domicilio=$row['domicilio'];
  $PostalCode=$row['codigoPostal'];
    $clave=$row['representante'];
    $celular=$row['celular'];
    $ciudad=$row['ciudad'];
      $cli_id=$row['cli_id'];
      $nombre = $cambiarnombre;

      $nombre = str_replace(
              array('Á','É','Í','Ó','Ú'),
              array('A','E','I','O','U'),
              $nombre
          );
echo $nombre."nombre sin acentos<br>";
//echo $cli_id."<br>";
  //  $clave=$row['clave'];
    $celular=$row['celular'];
      /* separar el nombre completo en espacios */
  $tokens = explode(' ', trim($nombre));

  /* arreglo donde se guardan las "palabras" del nombre */
  $names = array();
  /* palabras de apellidos (y nombres) compuetos */
  $special_tokens = array('da', 'de', 'del', 'la', 'las', 'los', 'mac', 'mc', 'van', 'von', 'y', 'i', 'san', 'santa');

  $prev = "";
  foreach($tokens as $token) {
      $_token = strtolower($token);
      if(in_array($_token, $special_tokens)) {
          $prev .= "$token ";
      } else {
          $names[] = $prev. $token;
          $prev = "";
      }
  }

  $num_nombres = count($names);
  $nombres = $apellidos = "";
  switch ($num_nombres) {
      case 0:
          $nombres = '';

          break;
      case 1:
          $nombres = $names[0];
          $apellidos='X';

          $sourcename = $_POST["sName"];
          $Username = $_POST["Username"];
          $Password = $_POST["Passwordw"];
          $siteID = $_POST["siteID"];
          $SiteIDs = $_POST["siteID"];
          $password = $_POST["password"];
          $tests ='false';
          $UpdateAction='Update';
          $SendEmail='false';
          $creds = new SourceCredentials($sourcename, $password, array($siteID));
          $clientService = new MBClientService();
          $clientService->SetDefaultCredentials($creds);
          $client3=array ('Clients');
          $client3["ID"] = $clave;
          $client3["FirstName"] = $nombres;
          $client3["LastName"] = $apellidos;
          $client3["Email"] = $mail;
          $client3["PostalCode"] =$PostalCode;
          $client3["AddressLine1"] = $domicilio;
          $client3["MobilePhone"] = $celular;
          $client3["City"] = $ciudad;

          $result = $clientService->AddOrUpdateClients($UpdateAction,$tests,array($client3),$SendEmail);
          $cds = toArray($result->AddOrUpdateClientsResult->Clients->Client);

          $cdsHtml = '<table><tr><td>Nombre</td><td>Apellido</td><td>ID</td><td>UniqueID</td></tr>';

          foreach ($cds as $cd){
            $cdsHtml .= sprintf('<tr><td>%s</td><td>%s</td><td>%d</td><td>%d</td></tr>',$cd->FirstName, $cd->LastName,$cd->ID,$cd->UniqueID);

          //------------------------------/*fin del for que trae el tamaño */--------------------------------------------
          $cdsHtml .= '</table>';

          }
          	echo($cdsHtml);
          break;
      case 2:
          $nombres    = $names[0];
          $apellidos  = $names[1];
          $sourcename = $_POST["sName"];
          $Username = $_POST["Username"];
          $Password = $_POST["Passwordw"];
          $siteID = $_POST["siteID"];
          $SiteIDs = $_POST["siteID"];
          $password = $_POST["password"];
          $tests ='false';
          $UpdateAction='Update';
          $SendEmail='false';
          $creds = new SourceCredentials($sourcename, $password, array($siteID));
          $clientService = new MBClientService();
          $clientService->SetDefaultCredentials($creds);
          $client3=array ('Clients');
          $client3["ID"] = $clave;
          $client3["FirstName"] = $nombres;
          $client3["LastName"] = $apellidos;
          $client3["Email"] = $mail;
          $client3["PostalCode"] =$PostalCode;
          $client3["AddressLine1"] = $domicilio;
          $client3["MobilePhone"] = $celular;
          $client3["City"] = $ciudad;

          $result = $clientService->AddOrUpdateClients($UpdateAction,$tests,array($client3),$SendEmail);
          $cds = toArray($result->AddOrUpdateClientsResult->Clients->Client);

          $cdsHtml = '<table><tr><td>Nombre</td><td>Apellido</td><td>ID</td><td>UniqueID</td></tr>';

          foreach ($cds as $cd){
            $cdsHtml .= sprintf('<tr><td>%s</td><td>%s</td><td>%d</td><td>%d</td></tr>',$cd->FirstName, $cd->LastName,$cd->ID,$cd->UniqueID);

          //------------------------------/*fin del for que trae el tamaño */--------------------------------------------
          $cdsHtml .= '</table>';

          }
          	echo($cdsHtml);
          break;
          case 3:
              $nombres    = $names[0];
              $apellidos  = $names[1].' '.$names[2];
              $sourcename = $_POST["sName"];
              $Username = $_POST["Username"];
              $Password = $_POST["Passwordw"];
              $siteID = $_POST["siteID"];
              $SiteIDs = $_POST["siteID"];
              $password = $_POST["password"];
              $tests ='false';
              $UpdateAction='Update';
              $SendEmail='false';
              $creds = new SourceCredentials($sourcename, $password, array($siteID));
              $clientService = new MBClientService();
              $clientService->SetDefaultCredentials($creds);
              $client3=array ('Clients');
              $client3["ID"] = $clave;
              $client3["FirstName"] = $nombres;
              $client3["LastName"] = $apellidos;
              $client3["Email"] = $mail;
              $client3["PostalCode"] =$PostalCode;
              $client3["AddressLine1"] = $domicilio;
              $client3["MobilePhone"] = $celular;
              $client3["City"] = $ciudad;

              $result = $clientService->AddOrUpdateClients($UpdateAction,$tests,array($client3),$SendEmail);
              $cds = toArray($result->AddOrUpdateClientsResult->Clients->Client);

              $cdsHtml = '<table><tr><td>Nombre</td><td>Apellido</td><td>ID</td><td>UniqueID</td></tr>';

              foreach ($cds as $cd){
                $cdsHtml .= sprintf('<tr><td>%s</td><td>%s</td><td>%d</td><td>%d</td></tr>',$cd->FirstName, $cd->LastName,$cd->ID,$cd->UniqueID);

              //------------------------------/*fin del for que trae el tamaño */--------------------------------------------
              $cdsHtml .= '</table>';

              }
              	echo($cdsHtml);
              break;

          case 4:
                    $nombres = $names[0] . ' ' . $names[1];
                    $apellidos = $names[2];
                default:
                    $nombres = $names[0] . ' ' . $names[1];
                    unset($names[0]);
                    unset($names[1]);

                    $apellidos = implode(' ', $names);

#-----------------------------------fin de consulta----------------------
$sourcename = $_POST["sName"];
$Username = $_POST["Username"];
$Password = $_POST["Passwordw"];
$siteID = $_POST["siteID"];
$SiteIDs = $_POST["siteID"];
$password = $_POST["password"];
$tests ='false';
$UpdateAction='Update';
$SendEmail='false';
$creds = new SourceCredentials($sourcename, $password, array($siteID));
$clientService = new MBClientService();
$clientService->SetDefaultCredentials($creds);
$client3=array ('Clients');
$client3["ID"] = $clave;
$client3["FirstName"] = $nombres;
$client3["LastName"] = $apellidos;
$client3["Email"] = $mail;
$client3["PostalCode"] =$PostalCode;
$client3["AddressLine1"] = $domicilio;
$client3["MobilePhone"] = $celular;
$client3["City"] = $ciudad;

$result = $clientService->AddOrUpdateClients($UpdateAction,$tests,array($client3),$SendEmail);
$cds = toArray($result->AddOrUpdateClientsResult->Clients->Client);

$cdsHtml = '<table><tr><td>Nombre</td><td>Apellido</td><td>ID</td><td>UniqueID</td></tr>';

foreach ($cds as $cd){
  $cdsHtml .= sprintf('<tr><td>%s</td><td>%s</td><td>%d</td><td>%d</td></tr>',$cd->FirstName, $cd->LastName,$cd->ID,$cd->UniqueID);

//------------------------------/*fin del for que trae el tamaño */--------------------------------------------
$cdsHtml .= '</table>';

}
	echo($cdsHtml);
  break;


}
}

/*

*/
?>
</body>
</html>
