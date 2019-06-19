<meta http-equiv="refresh" content="5" />
<?php
include('../conexiones/Localhost.php');
$querys = " SELECT *
  FROM paquetes WHERE status=0";
  $resus = $mysqliL->query($querys);
  $t=$resus->num_rows;


  while($fi= $resus->fetch_assoc()) {
    $id_paquetes = $fi['id_paquetes'];
    $fieldname3 = $fi['fieldname3'];
    $fieldname4 = $fi['fieldname4'];
    $fieldname7 = $fi['fieldname7'];
    $fieldname6 = $fi['fieldname6'];
    $fecha_servidor = $fi['fecha_servidor'];
    $fieldname8= $fi['fieldname8'];
    $status = $fi['status'];




    $ModificarRCC1 = "UPDATE paquetes SET status='1'
    WHERE id_paquetes='$id_paquetes'";
    $resultModificarRCC1 = $mysqliL->query($ModificarRCC1);


$subject="Paquetes ";
$detail="Nuevos usuarios fueron agregados,Nombre: $fieldname3,Correo: $fieldname4,Telefono: $fieldname7,Semena en la que se encuntra: $fieldname6";
$customer_mail="alertas@reinamadre.mx";
$name="hola";

// Contact subject
$subject ="$subject";

// Details
$message="$detail";

// Mail of sender
$mail_from="$customer_mail";

// From
$header="from: $name <$mail_from>";

// Enter your email address
$to ='lia.dmarquez@gmail.com';
$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email
// display message "We've recived your information"
if($send_contact){
echo "pase aqui";
}
else {
echo "ERROR";
}
}
?>
