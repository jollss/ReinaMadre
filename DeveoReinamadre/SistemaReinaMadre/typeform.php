<?php
include ('../conexiones/Localhost.php');
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
} else {
   header('Location: ../index.php');

    exit;
}
include('linkscss.php');

?>
<style>
.alert {
padding: 20px;
background-color: #3c763d;
color: white;
}
.alert1 {
padding: 20px;
background-color: #e21111;
color: white;
}
.alert2 {
padding: 20px;
background-color: #ff00d7;
color: white;
}
.closebtn {
margin-left: 15px;
color: white;
font-weight: bold;
float: right;
font-size: 22px;
line-height: 20px;
cursor: pointer;
transition: 0.3s;
}

.closebtn:hover {
color: black;
}
</style>

<body class="cbp-spmenu-push">
	<div class="main-content">
<?php
$id=$_SESSION['id_usuario'];
$rolarea = mysqli_query($mysqliL, "SELECT r.nombre_rol as rol ,a.nombre_area as area
FROM detalle_usuario_rol_site AS durs
INNER JOIN usuario AS u ON u.id_usuario=durs.id_usuario
INNER JOIN rol AS r ON r.id_rol=durs.id_rol
INNER JOIN AREA AS a ON a.id_area=r.id_area
INNER JOIN site AS s ON s.id_site=durs.id_site WHERE u.id_usuario='$id'");
#total de area y rol un count -$total=$rolarea->num_rows;
  // Variable $row hold the result of the query
  $rowarearol = mysqli_fetch_assoc($rolarea);
  $rol = $rowarearol['rol'];
  $area = $rowarearol['area'];
	include('menu.php');?>
		<!--left-fixed -navigation-->

		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">

				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new messages</h3>
									</div>
								</li>
								<li><a href="#">
								   <div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>
								</a></li>
								<li class="odd"><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>
								 </a></li>
								 <li class="odd"><a href="#">
									<div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>
								 </a></li>
								 <li><a href="#">
									<div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>
								 </a></li>
								 <li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">8</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>
									</div>
									<div class="progress progress-striped active">
										<div class="bar yellow" style="width:40%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
									   <div class="clearfix"></div>
									</div>
									<div class="progress progress-striped active">
										 <div class="bar green" style="width:90%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
										<div class="clearfix"></div>
									</div>
								   <div class="progress progress-striped active">
										 <div class="bar red" style="width: 33%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
									   <div class="clearfix"></div>
									</div>
									<div class="progress progress-striped active">
										 <div class="bar  blue" style="width: 80%;"></div>
									</div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">


				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span>
									<div class="user-name">
										<p>Admin Name</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>
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
				<div class="tables">
        <?php
       if(isset( $_SESSION['msg1'])){
      echo "   <div class='alert'>
           <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>

           <strong>Exitoso! </strong>"; echo  $_SESSION['msg1'];
          echo " </div>";

               unset($_SESSION['msg1']);
        }
        ////////////////////
        if(isset( $_SESSION['msg2'])){
       echo "   <div class='alert1'>
            <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>

            <strong>Error! </strong>"; echo  $_SESSION['msg2'];
           echo " </div>";

                unset($_SESSION['msg2']);
         }////

         if(isset( $_SESSION['msg3'])){
        echo "   <div class='alert2'>
             <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>

             <strong>Warning! </strong>"; echo  $_SESSION['msg3'];
            echo " </div>";

                 unset($_SESSION['msg3']);
          }
        ?>

      <!--  <div class="col-md-3 widget widget1">
          <div class="r3_counter_box">
            <center>
              <i class="fas fa-plus fa-4x"></i>
                  <div class="stats">
                    <h5><strong><a href="typeformantiguo.php"> Typeform Antiguo</a></strong></h5>

                  </div></center>
              </div>
        </div>-->
        <div class="col-md-3 widget widget1">
          <div class="r3_counter_box">
            <center>
                <i class="fas fa-database fa-4x"></i>
                  <div class="stats">
                    <h5><strong><a href="http://localhost:3000/auth/login">Metabase</a></strong></h5>

                  </div></center>
              </div>
        </div><br><br><br><br><br><br><br><br>
					<h2 class="title1">Mis Webhooks</h2>


          <?php include('diseñoboton.php');?>

					<div class="table-responsive bs-example widget-shadow">
						<h4>Consulta Tus Webhooks</h4>


<button class="open-button" onclick="openForm()">Crear Webhooks</button>

<div class="form-popup" id="myForm">
  <form action="guardartypeform.php" method="POST" class="form-container">
    <h2>Nueva URL</h2>


    <input type="text" placeholder="Ejemplo:encuesta medico" name="url" required>



    <button type="submit" class="btn">Enviar</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cerrar</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

						<table class="table table-bordered"> <thead> <tr>  <th>Typeform</th> <th>Fecha de Creacion</th> <th>¿ Quien la Creo?</th> <th>Cuantas Respuestas</th>  </tr> </thead>
               <tbody>

                 <script>

                 function Show(e){
                     var span = $(e).closest('span');
                     span.html(span.attr('data-full'));
                 }</script>
<style>
</style
                    <?php
                    $resultconsultasurl1 = "SELECT * FROM url AS u
INNER JOIN usuario AS us
 ON us.id_usuario=u.idusuario
 INNER JOIN totalencuesta AS te
 ON te.idform=u.idformulario";
                                $resultconsultasurl = $mysqliL->query($resultconsultasurl1);
                                  while($rowsconsulta = $resultconsultasurl->fetch_assoc()) {
                                  $idurl=$rowsconsulta['idurl'];
                                  $totalencuesta=$rowsconsulta['total'];
                                  $nombre=$rowsconsulta['nombre'];
                                  $apellidos=$rowsconsulta['apellidos'];
                                $idusuario=$rowsconsulta['idusuario'];
                                $fecha_creacion_url=$rowsconsulta['fecha_creacion_url'];
                                  $nombre_url=$rowsconsulta['nombre_url'];
                              $idformulario=$rowsconsulta['idformulario'];
                                 $nombre_encuesta=$rowsconsulta['nombre_encuesta'];





                       echo "<tr>
                        <td>";?><?php echo $nombre_encuesta?><?php echo "</td>

                        <td>
$fecha_creacion_url
                        </td> <td>$nombre $apellidos</td> <td>$totalencuesta</td></tr>";
                                }

                     ?>



                     </tbody>
                   </table>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
    <!--footer-->
    <div class="footer">
       <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
    </div>
      <!--//footer-->
    </div>

    <!-- new added graphs chart js-->


    <!-- new added graphs chart js-->

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

    <!-- side nav js -->
    <script src='js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
        $('.sidebar-menu').SidebarNav()
      </script>
    <!-- //side nav js -->

    <!-- for index page weekly sales java script -->

    <!-- //for index page weekly sales java script -->


    <!-- Bootstrap Core JavaScript -->
     <script src="js/bootstrap.js"> </script>
    <!-- //Bootstrap Core JavaScript -->

    </body>
    </html>
