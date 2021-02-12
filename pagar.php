
<?php
// SDK de Mercado Pago
require __DIR__ .  'vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-405779608341078-021203-794079c300ab2fce8ed5b3350d546c63-672452594');


// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
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