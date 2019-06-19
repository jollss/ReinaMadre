<?php
include ('../../conexiones/Localhost.php');#agregar la conexion
$data = json_decode(file_get_contents('php://input'));#imprimir el json
$siteId = $data->eventData->siteId;
$saleId = $data->eventData->saleId;
$purchasingClientId = $data->eventData->purchasingClientId;
//$payments = $data->eventData->payments;#recorrer en for
$saleDateTime = $data->eventData->saleDateTime;
$soldById = $data->eventData->soldById;
$soldByName = $data->eventData->soldByName;
$locationId = $data->eventData->locationId;
$totalAmountPaid = $data->eventData->totalAmountPaid;
/*------------------------------------------------payments-----------------------------------------------------------------------*/
$cds1 =$payments= $data->eventData->payments;#recorrer en for
foreach ($cds1 as $cd){
$paymentId=$cd->paymentId;
$paymentMethodId=$cd->paymentMethodId;
$paymentMethodName=$cd->paymentMethodName;
$paymentAmountPaid=$cd->paymentAmountPaid;
$paymentLastFour=$cd->paymentLastFour;
$paymentNotes=$cd->paymentNotes;

$insertarpayments_r = "INSERT INTO payments_r
(paymentId,paymentMethodId,paymentMethodName,paymentAmountPaid,paymentLastFour,paymentNotes,saleId)
VALUES
('$paymentId','$paymentMethodId','$paymentMethodName','$paymentAmountPaid','$paymentLastFour','$paymentNotes','$saleId')";
           $resulpayments_r = $mysqliL->query($insertarpayments_r);

}

/*------------------------------------------------payments-----------------------------------------------------------------------*/
$cds =$items= $data->eventData->items;#recorrer en for
/*------------------------------------------------items-----------------------------------------------------------------------*/
foreach ($cds as $cdq){
$itemId=$cdq->itemId;
$type=$cdq->type;
$name=$cdq->name;
$amountPaid=$cdq->amountPaid;
$amountDiscounted=$cdq->amountDiscounted;
$quantity=$cdq->quantity;
$recipientClientId=$cdq->recipientClientId;
$paymentReferenceId=$cdq->paymentReferenceId;
$insertaritems_r = "INSERT INTO items_r
(itemId,type,name,amountPaid,amountDiscounted,quantity,recipientClientId,paymentReferenceId,saleId)
VALUES
('$itemId','$type','$name','$amountPaid','$amountDiscounted','$quantity','$recipientClientId','$paymentReferenceId',
'$saleId')";
           $resultitems_r = $mysqliL->query($insertaritems_r);

}


/*------------------------------------------------items-----------------------------------------------------------------------*/
date_default_timezone_set('America/Mexico_City');
$fecha_servidor = date("Y-m-d H:i:s");
$insertarclientsale_created_r_log = "INSERT INTO clientsale_created_r_log
(siteId,saleId,purchasingClientId,saleDateTime,soldById,soldByName,locationId,totalAmountPaid,fecha_servidor)
VALUES
('$siteId','$saleId','$purchasingClientId','$saleDateTime','$soldById','$soldByName','$locationId','$totalAmountPaid',
'$fecha_servidor')";
           $resultclientsale_created_r_log = $mysqliL->query($insertarclientsale_created_r_log);



 ?>
