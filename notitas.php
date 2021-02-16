 <?php

require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setIntegratorId("dev_2e4ad5dd362f11eb809d0242ac130004");
MercadoPago\SDK::setAccessToken('APP_USR-8208253118659647-112521-dd670f3fd6aa9147df51117701a2082e-677408439');

$datos = array(
    "type" => $_POST["type"],
    "date_created" => $_POST["date_created"]
);

file_put_contents(
    'registro.txt',
    json_encode($_POST).PHP_EOL,
    FILE_APPEND
  );


    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            file_put_contents(
                'registro.txt',
                json_encode($payment) . PHP_EOL,
                FILE_APPEND
              );
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
    }

?>