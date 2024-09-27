<?php 

$caminhoArquivo = file_get_contents(__DIR__ . '/filme.json');

$teste = json_decode($caminhoArquivo, true);

print_r($teste);
