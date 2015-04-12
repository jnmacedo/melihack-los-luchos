<?php

require 'meli.php';

//if(!isset($_GET['code'])){
$meli = new Meli(3351068522076632, "N7hvLh8ISIXQ5OdTlpnlGQrdTUE7EQKD");
$redirectUrl = $meli->getAuthUrl('http://localhost');

echo $redirectUrl;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="index.js"></script>
    </head>
    <body>
        <div><a href="http://auth.mercadolibre.com.uy/authorization?client_id=3351068522076632&response_type=code&redirect_uri=http%3A%2F%2Flocalhost">Login a MercadoLibre</a></div>
    </body>
</html>
