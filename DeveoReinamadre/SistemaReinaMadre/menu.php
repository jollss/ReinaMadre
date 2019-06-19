<?php
include("../conexiones/Localhost.php");
$id_detallerol=$_SESSION['id_detallerol'];
$id=$_SESSION['id_usuario'];
$rolarea = mysqli_query($mysqliL, "SELECT u.nick,a.nombre_area,u.nombre,u.apellidos,s.nombre_site,r.nombre_rol AS rol ,a.nombre_area AS AREA,ag.nombre_general
FROM detalle_usuario_rol_site AS durs
INNER JOIN usuario AS u ON u.id_usuario=durs.id_usuario
INNER JOIN rol AS r ON r.id_rol=durs.id_rol
INNER JOIN AREA AS a ON a.id_area=r.id_area
INNER JOIN site AS s ON s.id_site=durs.id_site
INNER JOIN area_general AS ag
ON ag.id_area_general=a.id_area_general WHERE u.id_usuario='$id'  and durs.id_detallerol='$id_detallerol'");
#total de area y rol un count -$total=$rolarea->num_rows;
 // Variable $row hold the result of the query
 $rowarearol = mysqli_fetch_assoc($rolarea);
 $rol = $rowarearol['rol'];
 $nombre_site = $rowarearol['nombre_site'];
$nombre_general = $rowarearol['nombre_general'];
 $nombre = $rowarearol['nombre'];
   $apellidos = $rowarearol['apellidos'];
$nombre_area = $rowarearol['nombre_area'];
$nick = $rowarearol['nick'];
if($nombre_site=='Toluca'){#inicio site esto para identificar de que site es
if($nombre_area=='Sistemas'){#inicio area esto para identificar de que area es
  if($rol=='Progrmacion' or $rol=='Gerente de Sistemas'){
  ?>
  <div class='cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left' id='cbp-spmenu-s1'>
  	<aside class='sidebar-left'>
       <nav class='navbar navbar-inverse'>
           <div class='navbar-header'>
             <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='.collapse' aria-expanded='false'>
             <span class='sr-only'>Toggle navigation</span>
             <span class='icon-bar'></span>
             <span class='icon-bar'></span>
             <span class='icon-bar'></span>
             </button>
             <h1><a class='navbar-brand' href='sistema.php'><i class='fas fa-heartbeat'></i> Deveo<span class='dashboard_text'>Reina Madre</span></a></h1>
           </div>
           <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
             <ul class='sidebar-menu'>
               <li class='header'>Menu <?php ECHO $area."/".$rol ?></li>
               <li class='treeview'>
                 <a href='Sistema.php'>
                 <i class="fas fa-infinity"></i> <span>Inicio</span>
                 </a>
               </li>
        <li class='treeview'>
                 <a href='#'>
                 <i class="fab fa-php fa-lg"></i>
                 <span>Apis</span>
                 <i class='fa fa-angle-left pull-right'></i>
                 </a>
                 <ul class='treeview-menu'>
                   <li><a href='typeform.php'><i class='fa fa-angle-right'></i> Typeform</a></li>
                   <li><a href='media.html'><i class='fa fa-angle-right'></i> MindBody</a></li>
                 </ul>
               </li>
             </ul>
           </div>
       </nav>
     </aside>
  </div>
<?php
}
}#fin area esto para identificar de que area es
  elseif($nombre_area=='Recursos Humanos'){}
                elseif($nombre_area=='Laboratorío'){}
                  elseif($nombre_area=='Mercadotécnia'){}
                    elseif($nombre_area=='Dirección'){}
                      elseif($nombre_area=='Call Center'){}
                        elseif($nombre_area=='Calidad'){}
                          elseif($nombre_area=='Cafetería'){}
                            elseif($nombre_area=='Biomédica'){}
                              elseif($nombre_area=='Atención al cliente'){}
                                elseif($nombre_area=='Administración'){}
                                  else{
                                    echo'no tienes area llama a sistemas';
                                  }

}#fin site esto para identificar de que site es
  elseif($nombre_site=='Patriotismo'){#inicio site esto para identificar de que site es
    if($nombre_area=='Sistemas'){}
      elseif($nombre_area=='Recursos Humanos'){}
                    elseif($nombre_area=='Laboratorío'){}
                      elseif($nombre_area=='Mercadotécnia'){}
                        elseif($nombre_area=='Dirección'){}
                          elseif($nombre_area=='Call Center'){}
                            elseif($nombre_area=='Calidad'){}
                              elseif($nombre_area=='Cafetería'){}
                                elseif($nombre_area=='Biomédica'){}
                                  elseif($nombre_area=='Atención al cliente'){}
                                    elseif($nombre_area=='Administración'){}
                                      else{
                                        echo'no tienes area llama a sistemas';
                                      }
    }#fin site esto para identificar de que site es

    ?>

<!--<div class='cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left' id='cbp-spmenu-s1'>
	<aside class='sidebar-left'>
     <nav class='navbar navbar-inverse'>
         <div class='navbar-header'>
           <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='.collapse' aria-expanded='false'>
           <span class='sr-only'>Toggle navigation</span>
           <span class='icon-bar'></span>
           <span class='icon-bar'></span>
           <span class='icon-bar'></span>
           </button>
           <h1><a class='navbar-brand' href='sistema.php'><i class='fas fa-heartbeat'></i> Deveo<span class='dashboard_text'>Reina Madre</span></a></h1>
         </div>
         <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
           <ul class='sidebar-menu'>
             <li class='header'>Menu del Area <?php ECHO $area  ?></li>
             <li class='treeview'>
               <a href='Sistema.php'>
               <i class="fas fa-infinity"></i> <span>Inicio</span>
               </a>
             </li>
      <li class='treeview'>
               <a href='#'>
               <i class="fab fa-php fa-lg"></i>
               <span>Apis</span>
               <i class='fa fa-angle-left pull-right'></i>
               </a>
               <ul class='treeview-menu'>
                 <li><a href='typeform.php'><i class='fa fa-angle-right'></i> Typeform</a></li>
                 <li><a href='media.html'><i class='fa fa-angle-right'></i> MindBody</a></li>
               </ul>
             </li>
           </ul>
         </div>
     </nav>
   </aside>
</div>-->
