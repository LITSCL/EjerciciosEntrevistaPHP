<?php
$array = array(5, 3, 7, 1, 9, 12, 1, 3, 1, 12);

sort($array);

$arrayOrdenado = $array;

$arrayLimpio = [];
for ($i = 0; $i < sizeof($arrayOrdenado); $i++) {
    
    if ($i + 1 == sizeof($arrayOrdenado)) {
        array_push($arrayLimpio, $arrayOrdenado[$i]);
        break;
    }
    
    $actual = $arrayOrdenado[$i];
    $siguiente = $arrayOrdenado[$i + 1];
    
    if ($actual != $siguiente) {
        array_push($arrayLimpio, $actual);
    }

}

foreach ($arrayLimpio as $valor) {
    echo $valor . "<br/>";
}
?>