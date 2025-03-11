<?php

$line1 = readline();
$valores = explode(" ", $line1);
$N = (int)$valores[0];
$H = (int)$valores[1];

$linha2 = readline();
$alturas = explode(" ", $linha2);

$contador = 0;
for ($i = 0; $i < $N; $i++) {
    $altmin = (int)$alturas[$i];

    if ($H >= $altmin) {
        $contador++;
    }
}

echo $contador;
?>