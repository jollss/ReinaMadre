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

$paymentId1[]=$paymentId;
$paymentMethodId1[]=$paymentMethodId;
$paymentMethodName1[]=$paymentMethodName;
$paymentAmountPaid1[]=$paymentAmountPaid;
$paymentLastFour1[]=$paymentLastFour;
$paymentNotes1[]=$paymentNotes;
}
$paymentId0=$paymentId1[0];
$paymentMethodId0=$paymentMethodId1[0];
$paymentMethodName0=$paymentMethodName1[0];
$paymentAmountPaid0=$paymentAmountPaid1[0];
$paymentLastFour0=$paymentLastFour1[0];
$paymentNotes0=$paymentNotes1[0];
///////////////////////////////////////////////////////////
$paymentId2=$paymentId1[1];
$paymentMethodId2=$paymentMethodId1[1];
$paymentMethodName2=$paymentMethodName1[1];
$paymentAmountPaid2=$paymentAmountPaid1[1];
$paymentLastFour2=$paymentLastFour1[1];
$paymentNotes2=$paymentNotes1[1];
/////////////////////////////////////////////////////////////
$paymentId3=$paymentId1[2];
$paymentMethodId3=$paymentMethodId1[2];
$paymentMethodName3=$paymentMethodName1[2];
$paymentAmountPaid3=$paymentAmountPaid1[2];
$paymentLastFour3=$paymentLastFour1[2];
$paymentNotes3=$paymentNotes1[2];
///////////////////////////////////////////////////////////////////
$paymentId4=$paymentId1[3];
$paymentMethodId4=$paymentMethodId1[3];
$paymentMethodName4=$paymentMethodName1[3];
$paymentAmountPaid4=$paymentAmountPaid1[3];
$paymentLastFour4=$paymentLastFour1[3];
$paymentNotes4=$paymentNotes1[3];
///////////////////////////////////////////////////////////
$paymentId5=$paymentId1[4];
$paymentMethodId5=$paymentMethodId1[4];
$paymentMethodName5=$paymentMethodName1[4];
$paymentAmountPaid5=$paymentAmountPaid1[4];
$paymentLastFour5=$paymentLastFour1[4];
$paymentNotes5=$paymentNotes1[4];
//////////////////////////////////////////////////
$paymentId6=$paymentId1[5];
$paymentMethodId6=$paymentMethodId1[5];
$paymentMethodName6=$paymentMethodName1[5];
$paymentAmountPaid6=$paymentAmountPaid1[5];
$paymentLastFour6=$paymentLastFour1[5];
$paymentNotes6=$paymentNotes1[5];
///////////////////////////////////////////////////////////
$paymentId7=$paymentId1[6];
$paymentMethodId7=$paymentMethodId1[6];
$paymentMethodName7=$paymentMethodName1[6];
$paymentAmountPaid7=$paymentAmountPaid1[6];
$paymentLastFour7=$paymentLastFour1[6];
$paymentNotes7=$paymentNotes1[6];
/////////////////////////////////////////////////////////////
$paymentId8=$paymentId1[7];
$paymentMethodId8=$paymentMethodId1[7];
$paymentMethodName8=$paymentMethodName1[7];
$paymentAmountPaid8=$paymentAmountPaid1[7];
$paymentLastFour8=$paymentLastFour1[7];
$paymentNotes8=$paymentNotes1[7];
//////////////////////////////////////////////
$paymentId9=$paymentId1[8];
$paymentMethodId9=$paymentMethodId1[8];
$paymentMethodName9=$paymentMethodName1[8];
$paymentAmountPaid9=$paymentAmountPaid1[8];
$paymentLastFour9=$paymentLastFour1[8];
$paymentNotes9=$paymentNotes1[8];
//////////////////////////////////////////////////////
$paymentId10=$paymentId1[9];
$paymentMethodId10=$paymentMethodId1[9];
$paymentMethodName10=$paymentMethodName1[9];
$paymentAmountPaid10=$paymentAmountPaid1[9];
$paymentLastFour10=$paymentLastFour1[9];
$paymentNotes10=$paymentNotes1[9];
//////////////////////////////////////////////////
$paymentId11=$paymentId1[10];
$paymentMethodId11=$paymentMethodId1[10];
$paymentMethodName11=$paymentMethodName1[10];
$paymentAmountPaid11=$paymentAmountPaid1[10];
$paymentLastFour11=$paymentLastFour1[10];
$paymentNotes11=$paymentNotes1[10];
//////////////////////////////////////////////////
$paymentId12=$paymentId1[11];
$paymentMethodId12=$paymentMethodId1[11];
$paymentMethodName12=$paymentMethodName1[11];
$paymentAmountPaid12=$paymentAmountPaid1[11];
$paymentLastFour12=$paymentLastFour1[11];
$paymentNotes12=$paymentNotes1[11];
//////////////////////////////////////////////////
$paymentId13=$paymentId1[12];
$paymentMethodId13=$paymentMethodId1[12];
$paymentMethodName13=$paymentMethodName1[12];
$paymentAmountPaid13=$paymentAmountPaid1[12];
$paymentLastFour13=$paymentLastFour1[12];
$paymentNotes13=$paymentNotes1[12];
//////////////////////////////////////////////////
/*------------------------------------------------payments-----------------------------------------------------------------------*/
$cds =$items= $data->eventData->items;#recorrer en for
/*------------------------------------------------items-----------------------------------------------------------------------*/
foreach ($cds as $cdq){
$itemId1=$cdq->itemId;
$type1=$cdq->type;
$name1=$cdq->name;
$amountPaid1=$cdq->amountPaid;
$amountDiscounted1=$cdq->amountDiscounted;
$quantity1=$cdq->quantity;
$recipientClientId1=$cdq->recipientClientId;
$paymentReferenceId1=$cdq->paymentReferenceId;

$itemId12[]=$itemId1;
$type12[]=$type1;
$name12[]=$name1;
$amountPaid12[]=$amountPaid1;
$amountDiscounted12[]=$amountDiscounted1;
$quantity12[]=$quantity1;
$recipientClientId12[]=$recipientClientId1;
$paymentReferenceId12[]=$paymentReferenceId1;
}
$itemId=$itemId12[0];
$type=$type12[0];
$name=$name12[0];
$amountPaid=$amountPaid12[0];
$amountDiscounted=$amountDiscounted12[0];
$quantity=$quantity12[0];
$recipientClientId=$recipientClientId12[0];
$paymentReferenceId=$paymentReferenceId12[0];


$itemId1=$itemId12[1];
$type1=$type12[1];
$name1=$name12[1];
$amountPaid1=$amountPaid12[1];
$amountDiscounted1=$amountDiscounted12[1];
$quantity1=$quantity12[1];
$recipientClientId1=$recipientClientId12[1];
$paymentReferenceId1=$paymentReferenceId12[1];

$itemId2=$itemId12[2];
$type2=$type12[2];
$name2=$name12[2];
$amountPaid2=$amountPaid12[2];
$amountDiscounted2=$amountDiscounted12[2];
$quantity2=$quantity12[2];
$recipientClientId2=$recipientClientId12[2];
$paymentReferenceId2=$paymentReferenceId12[2];

$itemId3=$itemId12[3];
$type3=$type12[3];
$name3=$name12[3];
$amountPaid3=$amountPaid12[3];
$amountDiscounted3=$amountDiscounted12[3];
$quantity3=$quantity12[3];
$recipientClientId3=$recipientClientId12[3];
$paymentReferenceId3=$paymentReferenceId12[3];

$itemId4=$itemId12[5];
$type4=$type12[5];
$name4=$name12[5];
$amountPaid4=$amountPaid12[5];
$amountDiscounted4=$amountDiscounted12[5];
$quantity4=$quantity12[5];
$recipientClientId4=$recipientClientId12[5];
$paymentReferenceId4=$paymentReferenceId12[5];

$itemId5=$itemId12[6];
$type5=$type12[6];
$name5=$name12[6];
$amountPaid5=$amountPaid12[6];
$amountDiscounted5=$amountDiscounted12[6];
$quantity5=$quantity12[6];
$recipientClientId5=$recipientClientId12[6];
$paymentReferenceId5=$paymentReferenceId12[6];

$itemId6=$itemId12[7];
$type6=$type12[7];
$name6=$name12[7];
$amountPaid6=$amountPaid12[7];
$amountDiscounted6=$amountDiscounted12[7];
$quantity6=$quantity12[7];
$recipientClientId6=$recipientClientId12[7];
$paymentReferenceId6=$paymentReferenceId12[7];

$itemId7=$itemId12[8];
$type7=$type12[8];
$name7=$name12[8];
$amountPaid7=$amountPaid12[8];
$amountDiscounted7=$amountDiscounted12[8];
$quantity7=$quantity12[8];
$recipientClientId7=$recipientClientId12[8];
$paymentReferenceId7=$paymentReferenceId12[8];

$itemId9=$itemId12[9];
$type9=$type12[9];
$name9=$name12[9];
$amountPaid9=$amountPaid12[9];
$amountDiscounted9=$amountDiscounted12[9];
$quantity9=$quantity12[9];
$recipientClientId9=$recipientClientId12[9];
$paymentReferenceId9=$paymentReferenceId12[9];

$itemId10=$itemId12[10];
$type10=$type12[10];
$name10=$name12[10];
$amountPaid10=$amountPaid12[10];
$amountDiscounted10=$amountDiscounted12[10];
$quantity10=$quantity12[10];
$recipientClientId10=$recipientClientId12[10];
$paymentReferenceId10=$paymentReferenceId12[10];

$itemId11=$itemId12[11];
$type11=$type12[11];
$name11=$name12[11];
$amountPaid11=$amountPaid12[11];
$amountDiscounted11=$amountDiscounted12[11];
$quantity11=$quantity12[11];
$recipientClientId11=$recipientClientId12[11];
$paymentReferenceId11=$paymentReferenceId12[11];

$itemId12=$itemId12[12];
$type12=$type12[12];
$name12=$name12[12];
$amountPaid12=$amountPaid12[12];
$amountDiscounted12=$amountDiscounted12[12];
$quantity12=$quantity12[12];
$recipientClientId12=$recipientClientId12[12];
$paymentReferenceId12=$paymentReferenceId12[12];

$itemId13=$itemId12[13];
$type13=$type12[13];
$name13=$name12[13];
$amountPaid13=$amountPaid12[13];
$amountDiscounted13=$amountDiscounted12[13];
$quantity13=$quantity12[13];
$recipientClientId13=$recipientClientId12[13];
$paymentReferenceId13=$paymentReferenceId12[13];


/*------------------------------------------------items-----------------------------------------------------------------------*/
date_default_timezone_set('America/Mexico_City');
$fecha_servidor = date("Y-m-d H:i:s");
$insertarclientenuevo = "INSERT INTO clientsale_created_log
(siteId,saleId,purchasingClientId,saleDateTime,soldById,soldByName,locationId,totalAmountPaid,fecha_servidor,paymentId1,paymentMethodId1,
paymentMethodName1,paymentAmountPaid1,paymentLastFour1,paymentNotes1,paymentId2,paymentMethodId2,paymentMethodName2,paymentAmountPaid2,paymentLastFour2,
paymentNotes2,paymentId3,paymentMethodId3,paymentMethodName3,paymentAmountPaid3,paymentLastFour3,paymentNotes3,paymentId4,paymentMethodId4,paymentMethodName4,
paymentAmountPaid4,paymentLastFour4,paymentNotes4,paymentId5,paymentMethodId5,paymentMethodName5,paymentAmountPaid5,paymentLastFour5,paymentNotes5,paymentId6,
paymentMethodId6,paymentMethodName6,paymentAmountPaid6,paymentLastFour6,paymentNotes6,paymentId7,paymentMethodId7,paymentMethodName7,paymentAmountPaid7,
paymentLastFour7,paymentNotes7,paymentId8,paymentMethodId8,paymentMethodName8,paymentAmountPaid8,paymentLastFour8,paymentNotes8,paymentId9,paymentMethodId9,
paymentMethodName9,paymentAmountPaid9,paymentLastFour9,paymentNotes9,paymentId10,paymentMethodId10,paymentMethodName10,paymentAmountPaid10,paymentLastFour10,
paymentNotes10,paymentId11,paymentMethodId11,paymentMethodName11,paymentAmountPaid11,paymentLastFour11,paymentNotes11,paymentId12,paymentMethodId12,
paymentMethodName12,paymentAmountPaid12,paymentLastFour12,paymentNotes12,paymentId13,paymentMethodId13,paymentMethodName13,paymentAmountPaid13,paymentLastFour13,
paymentNotes13,itemId,type,name,amountPaid,amountDiscounted,quantity,recipientClientId,paymentReferenceId,itemId1,type1,name1,amountPaid1,amountDiscounted1,
quantity1,recipientClientId1,paymentReferenceId1,itemId2,type2,name2,amountPaid2,amountDiscounted2,quantity2,recipientClientId2,paymentReferenceId2,itemId3,type3,
name3,amountPaid3,amountDiscounted3,quantity3,recipientClientId3,paymentReferenceId3,itemId4,type4,name4,amountPaid4,amountDiscounted4,quantity4,recipientClientId4,
paymentReferenceId4,itemId5,type5,name5,amountPaid5,amountDiscounted5,quantity5,recipientClientId5,paymentReferenceId5,itemId6,type6,name6,amountPaid6,
amountDiscounted6,quantity6,recipientClientId6,paymentReferenceId6,itemId7,type7,name7,amountPaid7,amountDiscounted7,quantity7,recipientClientId7,paymentReferenceId7,
itemId9,type9,name9,amountPaid9,amountDiscounted9,quantity9,recipientClientId9,paymentReferenceId9,itemId10,type10,name10,amountPaid10,amountDiscounted10,
quantity10,recipientClientId10,paymentReferenceId10,itemId11,type11,name11,amountPaid11,amountDiscounted11,quantity11,recipientClientId11,paymentReferenceId11,
itemId12,type12,name12,amountPaid12,amountDiscounted12,quantity12,recipientClientId12,paymentReferenceId12,itemId13,type13,name13,amountPaid13,amountDiscounted13,
quantity13,recipientClientId13,paymentReferenceId13)
VALUES
('$siteId','$saleId','$purchasingClientId','$saleDateTime','$soldById','$soldByName','$locationId','$totalAmountPaid',
'$fecha_servidor','$paymentId0','$paymentMethodId0','$paymentMethodName0','$paymentAmountPaid0',
  '$paymentLastFour0','$paymentNotes0','$paymentId2','$paymentMethodId2',
  '$paymentMethodName2','$paymentAmountPaid2','$paymentLastFour2',
  '$paymentNotes2','$paymentId3','$paymentMethodId3','$paymentMethodName3',
  '$paymentAmountPaid3','$paymentLastFour3','$paymentNotes3','$paymentId4',
  '$paymentMethodId4','$paymentMethodName4','$paymentAmountPaid4','$paymentLastFour4',
  '$paymentNotes4','$paymentId5','$paymentMethodId5','$paymentMethodName5',
  '$paymentAmountPaid5','$paymentLastFour5','$paymentNotes5','$paymentId6',
  '$paymentMethodId6','$paymentMethodName6','$paymentAmountPaid6','$paymentLastFour6',
  '$paymentNotes6','$paymentId7','$paymentMethodId7','$paymentMethodName7',
  '$paymentAmountPaid7','$paymentLastFour7','$paymentNotes7','$paymentId8',
  '$paymentMethodId8','$paymentMethodName8','$paymentAmountPaid8',
  '$paymentLastFour8','$paymentNotes8','$paymentId9','$paymentMethodId9',
  '$paymentMethodName9','$paymentAmountPaid9','$paymentLastFour9','$paymentNotes9',
  '$paymentId10','$paymentMethodId10','$paymentMethodName10','$paymentAmountPaid10',
  '$paymentLastFour10','$paymentNotes10','$paymentId11','$paymentMethodId11',
  '$paymentMethodName11','$paymentAmountPaid11','$paymentLastFour11','$paymentNotes11',
  '$paymentId12','$paymentMethodId12','$paymentMethodName12','$paymentAmountPaid12',
  '$paymentLastFour12','$paymentNotes12','$paymentId13','$paymentMethodId13',
  '$paymentMethodName13','$paymentAmountPaid13','$paymentLastFour13','$paymentNotes13',
  '$itemId','$type','$name','$amountPaid','$amountDiscounted','$quantity',
  '$recipientClientId','$paymentReferenceId','$itemId1','$type1','$name1',
  '$amountPaid1','$amountDiscounted1','$quantity1','$recipientClientId1','$paymentReferenceId1',
  '$itemId2','$type2','$name2','$amountPaid2','$amountDiscounted2','$quantity2',
  '$recipientClientId2','$paymentReferenceId2','$itemId3','$type3','$name3',
  '$amountPaid3','$amountDiscounted3','$quantity3','$recipientClientId3','$paymentReferenceId3',
  '$itemId4','$type4','$name4','$amountPaid4','$amountDiscounted4','$quantity4',
  '$recipientClientId4','$paymentReferenceId4','$itemId5','$type5','$name5',
  '$amountPaid5','$amountDiscounted5','$quantity5','$recipientClientId5',
  '$paymentReferenceId5','$itemId6','$type6','$name6','$amountPaid6','$amountDiscounted6',
  '$quantity6','$recipientClientId6','$paymentReferenceId6','$itemId7','$type7',
  '$name7','$amountPaid7','$amountDiscounted7','$quantity7','$recipientClientId7',
  '$paymentReferenceId7','$itemId9','$type9','$name9','$amountPaid9','$amountDiscounted9',
  '$quantity9','$recipientClientId9','$paymentReferenceId9','$itemId10','$type10','$name10',
  '$amountPaid10','$amountDiscounted10','$quantity10','$recipientClientId10','$paymentReferenceId10',
  '$itemId11','$type11','$name11','$amountPaid11','$amountDiscounted11','$quantity11',
  '$recipientClientId11','$paymentReferenceId11','$itemId12',
  '$type12','$name12','$amountPaid12','$amountDiscounted12','$quantity12',
  '$recipientClientId12','$paymentReferenceId12','$itemId13','$type13','$name13',
  '$amountPaid13','$amountDiscounted13','$quantity13','$recipientClientId13','$paymentReferenceId13')";
           $resultinsertarclientenuevo = $mysqliL->query($insertarclientenuevo);



 ?>
