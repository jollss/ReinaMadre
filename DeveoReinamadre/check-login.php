<?php
ob_start();
session_start();
	include ('conexiones/Localhost.php');
	$email = $_POST['email'];
	$id_detallerol = $_POST['id_detallerol'];
$password = $_POST['password'];
  function getUserIpAddr(){
      if(!empty($_SERVER['HTTP_CLIENT_IP'])){
          //IP de un servicio compartido
          $ip = $_SERVER['HTTP_CLIENT_IP'];
      }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
          //IP pass from proxy
          $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }else{
          $ip = $_SERVER['REMOTE_ADDR'];
      }
      return $ip;
  }
	//include 'conexion.php';
	// Query sent to database
	//$result123 = mysqli_query($mysqliL, "SELECT activo,id_usuario,nombre,correo, contrasena, usuario FROM usuario WHERE correo_institucional = '$email' and contrasena='$password'");

/*  $querys = " SELECT activo,id_usuario,nombre,correo_institucional, contrasena, nick FROM usuario WHERE correo_institucional = '$email' and contrasena='$password'";
  $resus = $mysqliL->query($querys);
  while($fi= $resus->fetch_assoc()) {
    $hash = $fi['contrasena'];
  	$activo = $fi['activo'];
  	$correo = $fi['correo_institucional'];
    $idusuario = $fi['id_usuario'];
    $nick = $fi['nick'];
  }
  */
  //////////////////////////////////////////////
 $result123 = mysqli_query($mysqliL, "SELECT de.id_detallerol, u.activo,u.id_usuario,u.nombre,u.correo_institucional, u.contrasena, u.nick
			FROM usuario AS u
	INNER JOIN detalle_usuario_rol_site AS de	ON de.id_usuario=u.id_usuario
			WHERE u.correo_institucional = '$email' AND u.contrasena='$password' AND de.id_detallerol='$id_detallerol'");

  	// Variable $row hold the result of the query
	$row = mysqli_fetch_assoc($result123);
  	// Variable $hash hold the password hash on database
  	$hash = $row['contrasena'];
 	$activo = $row['activo'];
$id_detallerol = $row['id_detallerol'];
	$correo = $row['correo_institucional'];
   $nick = $row['nick'];
$idusuario = $row['id_usuario'];
$id_detallerol = $row['id_detallerol'];
if($activo=='si'){
$ip=getUserIpAddr();
$pagina=$_SERVER['HTTP_REFERER'];
$puerto=$_SERVER['REMOTE_PORT'];
$navegador=$_SERVER['HTTP_USER_AGENT'];
date_default_timezone_set('America/Mexico_City');
 $hoy = date("Y-m-d H:i:s");


   ///////////////////para ver si es o no primera vez que inicia sessiones
   $sessionesas = mysqli_query($mysqliL, "SELECT s.id_session,s.session FROM detalle_sessiones AS ds
INNER JOIN sessiones AS s
ON s.id_session=ds.id_session
INNER JOIN bitacora_ingreso AS bi
ON bi.id_bitacora_ingresos=ds.id_bitacora
INNER JOIN usuario AS u
ON u.id_usuario=bi.id_usuario
WHERE u.id_usuario='$idusuario'");
   $totalw=$sessionesas->num_rows;
     // Variable $row hold the result of the query
     $rowwe = mysqli_fetch_assoc($sessionesas);
     	$sessionwq = $rowwe['session'];
$id_session = $rowwe['id_session'];


      if($sessionwq==''){
        #inicio session por primera vez
$sql11 = "INSERT INTO bitacora_ingreso
  (id_usuario,fecha_ingreso,accion,ip,puerto,navegador,paginaVisitada)
  VALUES
  ('$idusuario','$hoy','Inicio Session por primera vez','$ip','$puerto','$navegador','$pagina')";
       $resultaq = $mysqliL->query($sql11);
       $id_bitacora=$mysqliL->insert_id;
           $sql112 = "INSERT INTO sessiones
         (session)
         VALUES
         ('si')";
              $resultaq123 = $mysqliL->query($sql112);
              $id_sessiones=$mysqliL->insert_id;

              $resultaq123 = "INSERT INTO detalle_sessiones
                (id_session,id_bitacora)
                VALUES
                ('$id_sessiones','$id_bitacora')";
                     $resultaq123 = $mysqliL->query($resultaq123);
                     if ($hash!='' & $activo=='si' & $correo!='') {

                       $_SESSION['loggedin'] = true;
                       $_SESSION['nick'] = $row['nick'];
                    $_SESSION['id_usuario'] = $row['id_usuario'];
													$_SESSION['id_detallerol'] = $row['id_detallerol'];
                  header('Location: SistemaReinaMadre/Sistema.php');
                    }
                   }
                   elseif($sessionwq=='si'){
                     #ya no es primera vez que inicia sessiones
                     $sql11 = "INSERT INTO bitacora_ingreso
                       (id_usuario,fecha_ingreso,accion,ip,puerto,navegador,paginaVisitada)
                       VALUES
                       ('$idusuario','$hoy','Inicio Session ','$ip','$puerto','$navegador','$pagina')";
                            $resultaq = $mysqliL->query($sql11);
                            $id_bitacora=$mysqliL->insert_id;
                                   $resultaq123 = "INSERT INTO detalle_sessiones
                                     (id_session,id_bitacora)
                                     VALUES
                                     ('$id_session','$id_bitacora')";
                                          $resultaq123 = $mysqliL->query($resultaq123);
                                          if ($hash!='' & $activo=='si' & $correo!='') {
							#enviar en sessiones suma de roles y el rol que tiene y site



					###################3

          $_SESSION['loggedin'] = true;
              $_SESSION['nick'] = $row['nick'];
          $_SESSION['id_usuario'] = $row['id_usuario'];
					$_SESSION['id_usuario'] = $row['id_usuario'];
				$_SESSION['id_detallerol'] = $row['id_detallerol'];

                                   header('Location: SistemaReinaMadre/Sistema.php');

                                         }
                   }
                   }

                     elseif($activo=='no'){
  header('Location:../DeveoReinamadre/index.php?error=2');
                     }
                     elseif($activo==''){
                      header('Location:../DeveoReinamadre/index.php?error=3');
                     }
                     else{
                        header('Location:../DeveoReinamadre/index.php?error=3');
                     }

ob_end_flush();

?>
