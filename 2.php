<?php
$array = array("Naranja", "Pera", "Arroz", "Manzana", "Zarzamora", "Guinda");

sort($array);

$arrayOrdenado = $array;

foreach ($arrayOrdenado as $texto) {
    echo $texto . "</br>";
}
?>