
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>DeveoReinamadre</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
		<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
<link rel="shortcut icon" href="images/icono.png" />
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main">
	<div class="bg-layer">
		<h1>Deveo Reinamadre</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="opcion.php" method="POST">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" name='email' placeholder="Correo Electronico" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" name='password' placeholder="Contraseña" required=""/>
					</div>
					<!--<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
					</div>-->
					<?php
					if(isset($_GET['error'])){
 if($_GET['error']==1){
//imprimes el error
echo '<enter><h4><font color="white">Usuario Y contraseña Incorrecta</font></h4></center>';
}

}
if(isset($_GET['error'])){
if($_GET['error']==2){
//imprimes el error
echo '<enter><h4><font color="white">Usuario No Activo</font></h4></center>';
}

}
if(isset($_GET['error'])){
if($_GET['error']==3){
//imprimes el error
echo '<enter><h4><font color="white">Contacta A Soporte</font></h4></center>';
}

}
?>
					<div class="bottom">
						<button class="btn">Ingresar</button>
					</div>
					<div class="links">
						<p><a class="popup-with-zoom-anim" href="#small-dialog1">Registrarse</a></p>

						<p class="right">	<a class="popup-with-zoom-anim" href="#small-dialog2">Recuperar Contraseña</a></p>
						<div class="clear"></div>
					</div>
				</form>
			</div>
			<div class="social">
				<ul>
					<li>O Usa  : </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div>
		</div>
		<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop" >
<p style="color:#069"><font size=16>Registrate</font></p>
			<div class="header-left-bottom">
				<form action="#" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" placeholder="Correo Electronico" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" placeholder="Nombre" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" placeholder="Apellidos" required=""/>
					</div>

					<div class="bottom">
						<button class="btn">Guardar</button>
					</div>

				</form>
			</div>


			</div>
			<div id="small-dialog2" class="mfp-hide w3ls_small_dialog wthree_pop">
				<p style="color:#069"><font size=16>Recupera Contraseña</font></p>
								<div class="header-left-bottom">
									<form action="#" method="post">
										<div class="icon1">
											<span class="fa fa-user"></span>
											<input type="email" placeholder="Email Address" required=""/>
										</div>
										<div class="bottom">
											<button class="btn">Enviar</button>
										</div>

									</form>
								</div>
				</div>
		<script src="js/jquery-2.2.3.min.js"></script>
	<!-- pop-up-box -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>

	<!--//pop-up-box -->
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
		<!-- copyright -->
		<div class="copyright">
			<p>© 2019 Slide Login Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div>
		<!-- //copyright -->
	</div>
</div>
<!-- //main -->

</body>
</html>
