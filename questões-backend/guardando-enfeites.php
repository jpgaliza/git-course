<?php
$N = (int)readline();

$confianca = array();

for ($i = 0; $i < $N; $i++) {
    $linha = readline();
    $valores = explode(" ", $linha);
    
    for ($j = 0; $j < $N; $j++) {
        $confianca[$i][$j] = (int)$valores[$j];
    }
}

$posicaoUsada = array_fill(0, $N, false);
$resultado = array_fill(0, $N, -1);

for ($enfeite = 0; $enfeite < $N; $enfeite++) {
    $melhorPosicao = -1;
    $maiorConfianca = -1;
    
    for ($posicao = 0; $posicao < $N; $posicao++) {
        if (!$posicaoUsada[$posicao] && $confianca[$enfeite][$posicao] > $maiorConfianca) {
            $melhorPosicao = $posicao;
            $maiorConfianca = $confianca[$enfeite][$posicao];
        }
    }
    
    $resultado[$melhorPosicao] = $enfeite + 1;
    $posicaoUsada[$melhorPosicao] = true;
}

echo implode(" ", $resultado);
?>