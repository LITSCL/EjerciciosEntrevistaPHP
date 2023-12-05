<?php
$palabra = "arenera";

$palabraArray = [];

for ($i = 0; $i < strlen($palabra); $i++) {
    array_push($palabraArray, $palabra[$i]);
}

$palindroma = true;
for ($i = 0; $i < sizeof($palabraArray); $i++) {
    if ($palabraArray[$i] != $palabraArray[sizeof($palabraArray) - 1 - $i]) {
        $palindroma = false;
        break;
    }
}

var_dump($palindroma);
?>