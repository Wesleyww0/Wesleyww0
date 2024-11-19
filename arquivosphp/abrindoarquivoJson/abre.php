<?php



$DadosRetornados = file_get_contents("../formularioCriaJson/Dados.json");
$DadosDecodificados = json_decode($DadosRetornados, true);

//print_r ($DadosDecodificados);

foreach ($DadosDecodificados as $json) {
    echo $json  . PHP_EOL;
}