<?php

require __DIR__ . "/classes/Utente.php";
require __DIR__ . "/classes/Prodotto.php";
// Utenti
$utenteUno = new Utenti("Pippo", "Premium", "Master Card");
$utenteDue = new Utenti("Pluto", "Normal", "Visa Card");
var_dump($utenteUno);
var_dump($utenteDue);

// Prodotti
$prodotto = new Prodotti("audi", "villa", "yatch", "rolex");
var_dump($prodotto);



?>

 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>

<body>

</body>

</html>