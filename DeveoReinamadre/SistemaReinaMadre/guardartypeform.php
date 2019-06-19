<?php
include ('../conexiones/Localhost.php');
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
} else {
   header('Location: ../index.php');

    exit;
}
$id=$_SESSION['id_usuario'];
$urls=$_POST['url'];
$url1 = preg_replace('[\s+]',"", $urls);
$url= strlen ($url1);
if($url>=50){
  header('location: typeform.php');
  //mostrar este echo una vez que la pagina haya sido redirrecionada.
  $_SESSION['msg3'] = "Demasiado largo el Nombre de : $urls";
}
else{
$consultaurl = mysqli_query($mysqliL, "SELECT nombre_encuesta as url FROM url WHERE nombre_encuesta = '$url1'");
$row = mysqli_fetch_assoc($consultaurl);
  $nombreurl = $row['url'];
  // Variable $row hold the result of the query
  if($nombreurl!=''){
    header('location: typeform.php');
    //mostrar este echo una vez que la pagina haya sido redirrecionada.
  $_SESSION['msg2'] = "Url Ya Existente $urls";
  }
  else{



$fichero ='typeform/recibirrespuestatypeform.php'  ;
$nuevo_fichero = 'typeform/'.$url1.'.php';

if (!copy($fichero, $nuevo_fichero)) {
   echo "Error al copiar $fichero...\n";
}
else {
date_default_timezone_set('America/Mexico_City');
     $hoy = date("Y-m-d H:i:s");
     $finalurl='https://www.myreinamadre.mx/DeveoReinamadre/SistemaReinaMadre/'.$nuevo_fichero;
       $guardarurl = "INSERT INTO url
    (idusuario,fecha_creacion_url,nombre_url,nombre_encuesta)
    VALUES
    ('$id','$hoy','$finalurl','$url1')";

        $resultguardarurl = $mysqliL->query($guardarurl);
      header('location: typeform.php');
      //mostrar este echo una vez que la pagina haya sido redirrecionada.
     $_SESSION['msg1'] = "Url Agregada Correctamente copia y pega $finalurl";
    }
}
}

 ?>
