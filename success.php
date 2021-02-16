<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label ><b>collection_id: </b></label> <?php echo $_GET['collection_id']; ?>
    <br>
    <label ><b>payment_id: </b></label> <?php echo $_GET['payment_id']; ?>
    <br>
    <label ><b>payment_type: </b></label> <?php echo $_GET['payment_type']; ?>
    <br>
    <label ><b>external_reference: </b></label> <?php echo $_GET['external_reference']; ?>
</body>
</html>

<?php

    $uri = 'https://api.mercadopago.com/v1/payments/';
    $id_pago = $_GET['payment_id'];
    $access = 'APP_USR-8208253118659647-112521-dd670f3fd6aa9147df51117701a2082e-677408439';

    $url = $uri.$id_pago.'?access_token='.$access;

	//echo file_get_contents($url);
?>