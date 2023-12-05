<?php
$array = array(5, 3, 7, 1, 9, 12);

sort($array);

$arrayOrdenado = $array;

foreach ($arrayOrdenado as $numero) {
    echo $numero . "</br>";
}
?>