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

MercadoPago\SDK::setIntegratorId("dev_2e4ad5dd362f11eb809d0242ac130004"); 
MercadoPago\SDK::setAccessToken('APP_USR-8208253118659647-112521-dd670f3fd6aa9147df51117701a2082e-677408439');



    /*switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            break;
    }*/

    $payment = MercadoPago\Payment.find_by_id($_GET['payment_id']);

    echo  $payment;
?>