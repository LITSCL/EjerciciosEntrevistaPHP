<?php
$array = array(5, 3, 7, 1, 9, 12);

sort($array);

$arrayOrdenado = $array;

$chico = $arrayOrdenado[0];
$grande = $arrayOrdenado[sizeof($arrayOrdenado) - 1];

echo "Chico: {$chico} | Grande: {$grande}";
?>