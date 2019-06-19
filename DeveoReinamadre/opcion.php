
<?php
session_start();
	include ('conexiones/Localhost.php');
$email = $_POST['email'];
$password = md5($_POST['password']);


if (!empty($password) && !empty($email))
{
  $querys = " SELECT activo,id_usuario,nombre,correo_institucional, contrasena, nick
    FROM usuario WHERE correo_institucional = '$email' and contrasena='$password'";
    $resus = $mysqliL->query($querys);
    $total=$resus->num_rows;

    if($total==0){

      header('Location: index.php?error=1');
    }
      else{


    while($fi= $resus->fetch_assoc()) {
      $hash = $fi['contrasena'];
    	$activo = $fi['activo'];
    	$correo = $fi['correo_institucional'];
      $idusuario = $fi['id_usuario'];
      $nick = $fi['nick'];

    }











  //$result123 = mysqli_query($mysqliL, "SELECT activo,id_usuario,nombre,correo_institucional, contrasena, nick
    //FROM usuario WHERE correo_institucional = '$email' and contrasena='$password'");
    // Variable $row hold the result of the query
  //  $row = mysqli_fetch_assoc($result123);
  //  $idusuario = $row['id_usuario'];
  //  echo $row;

  }

    $query = "SELECT * FROM detalle_usuario_rol_site AS de
  INNER JOIN site AS s
  ON s.id_site=de.id_site
  INNER JOIN rol AS r
  ON r.id_rol=de.id_rol
  INNER JOIN AREA AS a
  ON a.id_area=r.id_area
  INNER JOIN area_general AS ag
  ON ag.id_area_general=a.id_area_general
  WHERE de.id_usuario='$idusuario' ";
  $result = $mysqliL->query($query);
  $totalw=$result->num_rows;

  while($filas = $result->fetch_assoc()) {
  $id_detallerol=$filas['id_detallerol'];
    }
  if($totalw>1){
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
    <title>Deveo Reina Madre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons CSS -->

     <!-- side nav css file -->
     <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
     <!-- side nav css file -->

     <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <!--//webfonts-->

    <!-- Metis Menu -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->

    </head>
    <body class="cbp-spmenu-push">
      <div class="main-content">
      <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <!--left-fixed -navigation-->

      </div>
        <!--left-fixed -navigation-->

        <!-- header-starts -->

        <!-- //header-ends -->
        <!-- main content start-->

        <div id="page-wrapper">
          <div class="main-page">
            <div class="forms">
              <h2 class="title1">Perfiles</h2>


              <div class="inline-form widget-shadow">
                <div class="form-title">
                  <h4>Selecciona tu perfil</h4>
                </div>
                <div class="form-body">
                  <center>
                    <form action="check-login.php" method="post">
                    <?php
              echo "    <label for='Manufacturer'> Perfil : </label>
                  <select  name='id_detallerol' >";

                      $querys1 = "SELECT u.id_usuario AS idu,u.nick AS nick ,r.nombre_rol AS rol,
                      a.nombre_area AS AREA ,s.nombre_site AS site,durs.id_detallerol,s.id_site
                  FROM detalle_usuario_rol_site AS durs
                  INNER JOIN usuario AS u ON u.id_usuario=durs.id_usuario
                   INNER JOIN rol AS r ON r.id_rol=durs.id_rol
                    INNER JOIN AREA AS a ON a.id_area=r.id_area
                    INNER JOIN site AS s ON s.id_site=durs.id_site
                    WHERE u.id_usuario='$idusuario'";

                      $resuss = $mysqliL->query($querys1);
                      while($fis= $resuss->fetch_assoc()) {

                        $idu = $fis['idu'];
                        $nick = $fis['nick'];
                             $rol = $fis['rol'];
                        $area = $fis['AREA'];
                          $site = $fis['site'];
                        $id_detallerol = $fis['id_detallerol'];
                        $id_site = $fis['id_site'];
												$nombre_rol = $fis['rol'];

                    echo " <option value='$id_detallerol'>$nombre_rol  $site </option>";

                  }

                  echo"  </select>";
                  echo "<input type=hidden name=email value=$email>
                    <input type=hidden name=password value=$password>";
                  ?>

                  <input type="submit" name="search" value="Enviar"/>
                </form>
              </center>
                </div>
              </div>


              </div>
              </div>
              </div>
              <!--footer-->
              <div class="footer">
              <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
              </div>
              <!--//footer-->
              </div>

              <!-- side nav js -->
              <script src='js/SidebarNav.min.js' type='text/javascript'></script>
              <script>
              $('.sidebar-menu').SidebarNav()
              </script>
              <!-- //side nav js -->

              <!-- Classie --><!-- for toggle left push menu script -->
              <script src="js/classie.js"></script>
              <script>
              var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
              showLeftPush = document.getElementById( 'showLeftPush' ),
              body = document.body;

              showLeftPush.onclick = function() {
              classie.toggle( this, 'active' );
              classie.toggle( body, 'cbp-spmenu-push-toright' );
              classie.toggle( menuLeft, 'cbp-spmenu-open' );
              disableOther( 'showLeftPush' );
              };

              function disableOther( button ) {
              if( button !== 'showLeftPush' ) {
              classie.toggle( showLeftPush, 'disabled' );
              }
              }
              </script>
              <!-- //Classie --><!-- //for toggle left push menu script -->

              <!--scrolling js-->
              <script src="js/jquery.nicescroll.js"></script>
              <script src="js/scripts.js"></script>
              <!--//scrolling js-->

              <!-- Bootstrap Core JavaScript -->
              <script src="js/bootstrap.js"> </script>

              </body>
              </html>
    <?php
  }
    else {
      echo "<form name='envia' method='post' action='check-login.php'>
      <input type=hidden name=id_detallerol value=$id_detallerol>
        <input type=hidden name=email value=$email>
          <input type=hidden name=password value=$password>
      </form>
     <script language='JavaScript'>
     document.envia.submit()
    </script>";
    }



}
else{
 header('Location: index.php');

}


?>
