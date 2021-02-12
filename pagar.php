
<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setIntegratorId("dev_2e4ad5dd362f11eb809d0242ac130004");
MercadoPago\SDK::setAccessToken('APP_USR-8208253118659647-112521-dd670f3fd6aa9147df51117701a2082e-677408439');

$payer = new MercadoPago\Payer();
  $payer->name = "Lalo";
  $payer->surname = "Landa";
  $payer->email = "test_user_46542185@testuser.com";
  $payer->date_created = "2018-06-02T12:58:41.425-04:00";
  $payer->phone = array(
    "area_code" => "52",
    "number" => "5549737300"
  );
  
  $payer->identification = array(
    "type" => "DNI",
    "number" => "22334445"
  );
  
  $payer->address = array(
    "street_name" => "Insurgentes Sur",
    "street_number" => 1602,
    "zip_code" => "03940"
  );


// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;

$preference->items = array($item);
$preference->payer = $payer;
$preference->save();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script
  src="https://www.mercadopago.com.pe/integrations/v1/web-payment-checkout.js"
  data-preference-id="<?php echo $preference->id; ?>">
</script>

        
</body>
</html>