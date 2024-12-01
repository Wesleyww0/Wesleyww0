<?php

// funções de validação

// validando se esta escrito ou vazio
$nome = (isset($_POST['nome'])) ? $_POST ['nome'] : '' ;
$Iiade = (isset($_POST['idade'])) ? $_POST ['idade'] : '' ;
$trabalho = (isset($_POST['trabalho'])) ? $_POST ['trabalho'] : '' ;

// array das variaveis
$json = [
    'nome'=>$nome,
    'idade'=>$idade,
    'trabalho'=>$trabalho
];


//definindo o arquivo resultante
$fh = fopen("Dados.json", 'w');

//salvando o arquivo com json_encode
// definindo oque vai estar no arquivo .json
fwrite($fh, json_encode($json, JSON_UNESCAPED_UNICODE));


// fechando o recurso
fclose($fh);


