<?php
error_reporting(0);
include ('../../conexiones/Localhost.php');#agregar la conexion a sql
$data = json_decode(file_get_contents('php://input'));#imprimir el json

$answersw = $data->form_response->definition->title;#objeto para obtener el titulo de la encuesta typeform
$preubadeid=$data->form_response->form_id;#traemos el id para insertarlo una vez creada la DB para hacer update sobre ese id

$url1 = preg_replace('[\s+]',"", $answersw);
$consultaurl = mysqli_query($mysqliL, "SELECT nombre_encuesta as url,idurl FROM url WHERE nombre_encuesta = '$url1'");
$row = mysqli_fetch_assoc($consultaurl);
  $nombreurl = $row['url'];
  $idurl = $row['idurl'];
  if($nombreurl!=''){
    $sqlssss1 = "UPDATE url SET idformulario='$preubadeid' WHERE idurl='$idurl'";


     $resultqqd = $mysqliL->query($sqlssss1);
  }



$submitted_ats = $data->form_response->submitted_at;#fecha de envio
$dates = strtotime($submitted_ats);#Analice cualquier descripción de fecha y hora textual en inglés en una marca de tiempo Unix
$submitted_at=date('Y-m-d H:i:s', $dates);#la convierto a la fecha que ira en la DB  echo $answers;
$landed_ats = $data->form_response->landed_at;#fecha de aterrisaje
$dates1 = strtotime($submitted_ats);#Analice cualquier descripción de fecha y hora textual en inglés en una marca de tiempo Unix
//$landed_at=date('Y-m-d H:i:s', $dates1);
$cds = $respuestas = $data->form_response->definition->fields;#llamo al objeto que contiene las preguntas print_r($cds);
$cdswdw212 = $respuestas = $data->form_response;
  print_r($data);
  $query="CREATE TABLE $preubadeid #ingreso la variable answer que trae el nombre de la encuesta
    (id_$preubadeid int  (11) PRIMARY KEY AUTO_INCREMENT NOT NULL )";#agrego el id que sera autoincrementable con el nombre de la encuesta sin espacios

  mysqli_query($mysqliL, $query);
    //if(mysqli_query($mysqliL, $query)){#valido si es correcto o no la creacion de la base de datos
        //echo "Base de datos creada correctamente";
        foreach ($cds as $cd){#inicio iteracion del objeto para traer su atributos

        $id=$cd->id;#id del formulario
        $title=$cd->title;#titulo de la encuesta

        $type=$cd->type;#tipo de dato que se tiene para los encabezados

        if($type=='long_text'){#valido que tipo de dato es para concaternarlo al correcto al DB
        $long_text="ALTER TABLE $preubadeid#linea para alterar la tabla
        ADD COLUMN $id varchar (250)";#valor para agregar el campo + el tipo
        mysqli_query($mysqliL, $long_text);#ejecutar la consulta
    }elseif($type=='yes_no'){
      $yes_no="ALTER TABLE $preubadeid
      ADD COLUMN $id TinyInt(1) DEFAULT 0";
      mysqli_query($mysqliL, $yes_no);#ejecutar la consulta
    }
    elseif($type=='phone_number'){
      $phone_number="ALTER TABLE $preubadeid
      ADD COLUMN $id varchar(20) ";
      mysqli_query($mysqliL, $phone_number);#ejecutar la consulta

      }
      elseif($type=='number'){
        $number="ALTER TABLE $preubadeid
        ADD COLUMN $id varchar (10)";
          mysqli_query($mysqliL, $number);#ejecutar la consulta

        }
        elseif($type=='dropdown'){
          $dropdown="ALTER TABLE $preubadeid
          ADD COLUMN $id varchar (250)";
            mysqli_query($mysqliL, $dropdown);#ejecutar la consulta
        }
        elseif($type=='multiple_choice'){
       $multiple_choice="ALTER TABLE $preubadeid
       ADD COLUMN $id varchar (500)";

      mysqli_query($mysqliL, $multiple_choice);#ejecutar la consulta
        }
        elseif($type=='picture_choice'){
          $picture_choice="ALTER TABLE $preubadeid
          ADD COLUMN $id varchar (300)";
            mysqli_query($mysqliL, $picture_choice);#ejecutar la consulta

        }
        elseif($type=='opinion_scale'){
          $opinion_scale="ALTER TABLE $preubadeid
          ADD COLUMN $id varchar (50)";

            mysqli_query($mysqliL, $opinion_scale);#ejecutar la consulta

        }
        elseif($type=='short_text'){

          $short_text="ALTER TABLE $preubadeid
          ADD COLUMN $id varchar (250)";

            mysqli_query($mysqliL,$short_text);#ejecutar la consulta

            ///////////////////////

        }
        elseif($type=='email'){
          $email="ALTER TABLE $preubadeid
          ADD COLUMN $id varchar (250)";

            mysqli_query($mysqliL,$email);#ejecutar la consulta
        }
        else{
          $error = "INSERT INTO errores_webhooks
       (error_webhooks,nombre_encuesta)
       VALUES
       ('$type','$preubadeid')";
           $resulterror = $mysqliL->query($error);
        }



        }#cierre de ciclo for

        $qlanded_atw="ALTER TABLE $preubadeid
        ADD COLUMN fecha_servidor  DATETIME ";

        mysqli_query($mysqliL, $qlanded_atw);

        $qsubmitted_atw="ALTER TABLE $preubadeid
        ADD COLUMN fecha_submit DATETIME ";
          mysqli_query($mysqliL, $qsubmitted_atw);

          $form_id="ALTER TABLE $preubadeid
          ADD COLUMN idform  varchar(150) ";
mysqli_query($mysqliL, $form_id);
          $cds1=$respuestas = $data->form_response->answers;

          $fechahoy="ALTER TABLE $preubadeid
          ADD COLUMN fecha_real  datetime ";
          mysqli_query($mysqliL, $fechahoy);

            foreach ($cds1 as $cds124)
            {
$idrespuesrtas[]=$cds124->field->id;

              $choicerespuesta =$cds124->choice->label;#respuesta
            $choicesrespuestas =$cds124->choices->labels;#respuesta
$yesno =$cds124->boolean;#respuesta

$otherrespuestas =$cds124->choices->other;
$textrespuestas =$cds124->text;#respuesta
$numberrespuestas =$cds124->number;#respuesta
$email =$cds124->email;#respuesta

$res[]=$choicerespuesta.implode (",",$choicesrespuestas).$textrespuestas.$numberrespuestas.$yesno.$otherrespuestas.$email;

//Joelteamjoelyslilis1821

            }
            $fecha = new DateTime("$submitted_ats");
  $fecha->modify('-5 hours');
$fechafinal= $fecha->format('Y-m-d H:i:s');
date_default_timezone_set('America/Mexico_City');
   $hoy = date("Y-m-d H:i:s");
            $a="";
            $a .= implode("','",$res);
            $a .= "";

            $fecha_servidor='fecha_servidor';
            $fecha_submit='fecha_submit';
            $idform='idform';
        $insert = "INSERT  into $preubadeid (";
        $insert.= implode(",",$idrespuesrtas);
        $insert.= ",$fecha_servidor,$fecha_submit,$idform,fecha_real) values ('$a','$hoy','$submitted_ats','$preubadeid','$fechafinal')";
        echo $insert;
        $query = mysqli_query($mysqliL,$insert);

        $consultatotalencuesta= mysqli_query($mysqliL, "SELECT idform,total FROM totalencuesta where idform='$preubadeid'");
        $rowtatotalencuesta = mysqli_fetch_assoc($consultatotalencuesta);
          $idforms = $rowtatotalencuesta['idform'];
          $total = $rowtatotalencuesta['total'];

          if($idforms==''){
            $guardarurl = "INSERT INTO totalencuesta
         (total,idform)
         VALUES
         ('1','$preubadeid')";
             $resultguardarurl = $mysqliL->query($guardarurl);
          }
            elseif($idforms!=''){
              $suma=$total + 1;
              $sqlssss = "UPDATE totalencuesta SET total='$suma' WHERE idform='$idforms'";


                   $resultqqd = $mysqliL->query($sqlssss);
            }
?>
|
