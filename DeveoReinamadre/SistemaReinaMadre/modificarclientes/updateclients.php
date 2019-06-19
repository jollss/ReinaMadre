<html>
<HEAD>
<!--<meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">-->
<meta http-equiv="Content-Type"  content="text/html"; charset="iso-8859-1"/>
</HEAD>
<body>
<?php
$v1 = $_POST["v1"];
$v2 = $_POST["v2"];
for($i=$v1;$i<=$v2;$i++)
{
//error_reporting(0);
//include ('../conexiones/conexionpatriotismo.php');
include ('../conexiones/conexionlocalhost.php');
require_once("../includes/clientService.php");
#----------------------------------------------
//probar limite de datos en la subida de 1000 propondria yo jajaja osea 56 veces
#---------------------------------------------
#------------------------------------------------------------------------
//traer parametros para la modificacion ya que me hacen falta
#------------------------inicio consulta------------------------------------------------
$query = "SELECT  cli_id,representante,nombre,apellido,mail,codigoPostal,domicilio,celular,ciudad FROM clientas where cli_id=$i ";
$resultado=$mysqliL->query($query);
while($row = $resultado->fetch_assoc()) {
  $nombres=$row['nombre'];
  $apellidos=$row['apellido'];
  $mail=$row['mail'];
  $domicilio=$row['domicilio'];
  $PostalCode=$row['codigoPostal'];
    $clave=$row['representante'];
    $celular=$row['celular'];
    $ciudad=$row['ciudad'];
      $cli_id=$row['cli_id'];
echo $cli_id."<br>";

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

}
}

/*

*/
?>
</body>
</html>
