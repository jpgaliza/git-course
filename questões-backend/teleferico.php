<?php
$capacidadeCabine = (int)readline();
$totalAlunos = (int)readline();

$alunosPorViagem = $capacidadeCabine - 1;
$viagens = ceil($totalAlunos / $alunosPorViagem);

echo $viagens;
?>