<?php

include ("funcion_convertir.php");


$numero = 123456789;
$numeroLetras = convertir_a_letras($numero);

print "<br>Numero Original: ";
print number_format($numero);
print "<br>Numero en Letras: ";
print $numeroLetras;

?>