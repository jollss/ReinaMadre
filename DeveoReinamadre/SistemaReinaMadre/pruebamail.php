<?php
include ('../conexiones/Localhost.php');
//pruebamail.php
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$insertarclientenuevo = "INSERT INTO pruebamail
(firstname,lastname)
VALUES('$firstname','$lastname')";
           $resultinsertarclientenuevo = $mysqliL->query($insertarclientenuevo);




 ?>
