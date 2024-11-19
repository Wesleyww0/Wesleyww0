<?php

// funções de validação

// validando se esta escrito ou vazio
$Nome = (isset($_POST['Nome'])) ? $_POST ['Nome'] : '' ;
$Idade = (isset($_POST['Idade'])) ? $_POST ['Idade'] : '' ;
$Trabalho = (isset($_POST['Trabalho'])) ? $_POST ['Trabalho'] : '' ;

// array das variaveis
$json = [
    'Nome'=>$Nome,
    'Idade'=>$Idade,
    'Trabalho'=>$Trabalho
];


//definindo o arquivo resultante
$fh = fopen("Dados.json", 'w');

//salvando o arquivo com json_encode
// definindo oque vai estar no arquivo .json
fwrite($fh, json_encode($json, JSON_UNESCAPED_UNICODE));


// fechando o recurso
fclose($fh);


