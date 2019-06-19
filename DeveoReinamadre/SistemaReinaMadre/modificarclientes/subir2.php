<html>
<HEAD>
<!--<meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">-->
<meta http-equiv="Content-Type"  content="text/html"; charset="iso-8859-1"/>
</HEAD>
<body>
<?php

//error_reporting(0);
include ('../conexiones/conexionpatriotismo.php');
include ('../conexiones/conexionlocalhost.php');
require_once("../includes/clientService.php");
#----------------------------------------------
//probar limite de datos en la subida de 1000 propondria yo jajaja osea 56 veces
#---------------------------------------------
#------------------------------------------------------------------------
//traer parametros para la modificacion ya que me hacen falta
#------------------------inicio consulta------------------------------------------------
$query = "SELECT  cli_id,representante,nombre,mail,codigoPostal,domicilio,celular,ciudad FROM cliente ";
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
echo $cli_id."<br>";
$nombre = $cambiarnombre;

$nombre = str_replace(
        array('Á','É','Í','Ó','Ú'),
        array('A','E','I','O','U'),
        $nombre
    );
echo $nombre."nombre sin acentos<br>";
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
          $querys="INSERT INTO clientas
          (nombre,apellido,representante,domicilio,codigoPostal,mail,ciudad,celular)
          VALUES
          ('$nombres','$apellidos','$clave','$domicilio','$PostalCode','$mail','$ciudad','$celular')";
          mysqli_query($mysqliL,$querys);
          break;
      case 2:
          $nombres    = $names[0];
          $apellidos  = $names[1];
          $querys="INSERT INTO clientas
          (nombre,apellido,representante,domicilio,codigoPostal,mail,ciudad,celular)
          VALUES
          ('$nombres','$apellidos','$clave','$domicilio','$PostalCode','$mail','$ciudad','$celular')";
          mysqli_query($mysqliL,$querys);
          break;
          case 3:
              $nombres    = $names[0];
              $apellidos  = $names[1].' '.$names[2];
              $querys="INSERT INTO clientas
              (nombre,apellido,representante,domicilio,codigoPostal,mail,ciudad,celular)
              VALUES
              ('$nombres','$apellidos','$clave','$domicilio','$PostalCode','$mail','$ciudad','$celular')";
              mysqli_query($mysqliL,$querys);
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
$querys="INSERT INTO clientas
(nombre,apellido,representante,domicilio,codigoPostal,mail,ciudad,celular)
VALUES
('$nombres','$apellidos','$clave','$domicilio','$PostalCode','$mail','$ciudad','$celular')";
mysqli_query($mysqliL,$querys);


    break;
}
}

/*

*/
?>
</body>
</html>
