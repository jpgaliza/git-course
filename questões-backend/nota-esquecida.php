<?php

$nota_conhecida = (int) readline();
$media = (int) readline();


$nota_esquecida = 2 * $media - $nota_conhecida;

echo $nota_esquecida;
?>