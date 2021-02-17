<?php
var_dump(http_response_code(201));

$uri = 'https://api.mercadopago.com/v1/payments/';
$id_pago = $_POST['id'];
$access = 'APP_USR-8208253118659647-112521-dd670f3fd6aa9147df51117701a2082e-677408439';

    $url = $uri.$id_pago.'?access_token='.$access;
	print $url;
	echo file_get_contents($url);


    ?>
