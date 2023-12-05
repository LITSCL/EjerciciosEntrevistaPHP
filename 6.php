<?php
$codigo = "4921-AB";

$codigoSeparado = explode("-", $codigo);

$primeraParte = $codigoSeparado[0];
$segundaParte = $codigoSeparado[1];

$correcto = false;
if (strlen($primeraParte) == 4) {
    if (strlen($segundaParte) == 2) {
        if (is_numeric($primeraParte)) {
            if (!is_numeric($segundaParte)) {
                $contador = 0;
                for ($i = 0; $i < strlen($segundaParte); $i++) {
                    if (!is_numeric($segundaParte[$i])) {
                        $contador++;
                    }
                }
                if ($contador == 2) {
                    $correcto = true;
                }
            }
        }
    }
}

var_dump($correcto);
?>