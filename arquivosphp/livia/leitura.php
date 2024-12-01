<?php

$arquivo_recebido = $_GET['file'];

$arquivo = './teste/' . $arquivo_recebido;

// 1 - ABRIR O ARQUIVO EM MEMÓRIA (RECURSO)
$recurso = fopen($arquivo, 'r');

// 2 - LEITURA DO ARQUIVO
$json = fread($recurso, filesize($arquivo));

// 3 - FECHAR O RECURSO (EVITAR O CONSUMO DE MEMÓRIA)
fclose($recurso);

$dados = json_decode($json);

echo 'Nome: ' . $dados->nome . '<br>';
echo 'Idade: ' . $dados->idade . '<br>';
echo 'CPF: ' . $dados->cpf . '<br>';
echo 'Nascimento: ' . $dados->nascimento . '<br>';
echo 'E-mail: ' . $dados->email . '<br>';

