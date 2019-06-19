<?php
session_start();
?>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
} else {
   header('Location: ../index.php');

    exit;
}
    // checking the time now when home page starts


include("../conexiones/Localhost.php");
/* create a prepared statement */
$id=$_SESSION['id_usuario'];

$result = $mysqliL->query("SELECT COUNT(*) AS totalperfil
FROM detalle_usuario_rol_site AS durs
INNER JOIN usuario AS u ON u.id_usuario=durs.id_usuario
INNER JOIN rol AS r ON r.id_rol=durs.id_rol
INNER JOIN AREA AS a ON a.id_area=r.id_area
INNER JOIN site AS s ON s.id_site=durs.id_site WHERE u.id_usuario=$id");
$row = $result->fetch_assoc();
$perfilotal=$row['totalperfil'];
///////////////////////////////////////////////
$resultroles = $mysqliL->query("SELECT u.id_usuario AS idu,u.nick AS nick ,r.nombre_rol AS rol,
                  a.nombre_area AS AREA ,s.nombre_site AS site,durs.id_detallerol,s.id_site

FROM detalle_usuario_rol_site AS durs
INNER JOIN usuario AS u ON u.id_usuario=durs.id_usuario
INNER JOIN rol AS r ON r.id_rol=durs.id_rol
INNER JOIN AREA AS a ON a.id_area=r.id_area
INNER JOIN site AS s ON s.id_site=durs.id_site WHERE u.id_usuario=$id");
$row1 = $resultroles->fetch_assoc();
$id_detallerol=$row1['id_detallerol'];
///////////////////////////////////////////////
if($perfilotal<=1){
  echo "<form name='envia' method='post' action='sistema.php'>
  <input type=hidden name=r value=$id_detallerol>
  </form>
  <script language='JavaScript'>
  document.envia.submit()
  </script>";
  //header("Location: Sistema.php?r=$id_detallerol");
}
else{
  $querys12 = "SELECT  nombre,apellidos from usuario where id_usuario=$id";

  $resuss2 = $mysqliL->query($querys12);
  while($fisa= $resuss2->fetch_assoc()) {

    $nombre = $fisa['nombre'];
    $apellidos = $fisa['apellidos'];



}
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
		<div class="sticky-header header-section ">

			<div class="header-right">



				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span>
									<div class="user-name">
										<p><?php echo  $nombre." ".$apellidos?></p>
										<!--<span><?php //echo  $rol ?></span>-->
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">

								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Cerrar Session</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
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
                <form action="sistema.php" method="post">
                <?php
          echo "    <label for='Manufacturer'> Perfil : </label>
              <select  name='r' >";

                  $querys1 = "SELECT u.id_usuario AS idu,u.nick AS nick ,r.nombre_rol AS rol,
                  a.nombre_area AS AREA ,s.nombre_site AS site,durs.id_detallerol,s.id_site
              FROM detalle_usuario_rol_site AS durs
              INNER JOIN usuario AS u ON u.id_usuario=durs.id_usuario
               INNER JOIN rol AS r ON r.id_rol=durs.id_rol
                INNER JOIN AREA AS a ON a.id_area=r.id_area
                INNER JOIN site AS s ON s.id_site=durs.id_site
                WHERE u.id_usuario=$id";

                  $resuss = $mysqliL->query($querys1);
                  while($fis= $resuss->fetch_assoc()) {

                    $idu = $fis['idu'];
                    $nick = $fis['nick'];
                         $rol = $fis['rol'];
                    $area = $fis['AREA'];
                      $site = $fis['site'];
                    $id_detallerol = $fis['id_detallerol'];
                    $id_site = $fis['id_site'];

                echo " <option value='$id_detallerol'>$area $site</option>";
              }
              echo"  </select>";
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
<?php } ?>
