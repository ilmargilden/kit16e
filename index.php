<?php

// Tekstimuutuja
$tervitus = 'Hello';
# Täisarvuline muutuja
$nr = 1;
// Kümnendmurd
$nr = 10.0121;
// Tõeväärtusmuutuja
$bool = False;
/*
Massiiv (php ja JS - array, python - list)
Üherealine kommentaar on // ja #
*/

$massiiv = array('Nimi',1974,10.81, 'Perenimi');

echo "$tervitus world!<br>";
echo '$tervitus world!<br>';
echo $massiiv[0];

if($bool == False){

  print_r ($massiiv);
} else {echo "Tõeväärtus ei vasta nõutule"; }



?>
