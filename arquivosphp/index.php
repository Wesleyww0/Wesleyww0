<?php

$json = array(
    array('Nome', 'Telefone', 'Endereço'),
    array('Pessoa1', '44477774', "Raua das dalias"),
    array('Pessoa2', '336655366', 'Rua bonita')
);
//criando o conjunto de contatos
$contatos = array ('contatos' => $json);
//definindo o arquivo resultante
$fh = fopen("contatos.json", 'w');
//salvando o arquivo com json_encode
fwrite($fh, json_encode($contatos, JSON_UNESCAPED_UNICODE));
//fechando o arquivo para poupar memoria
fclose($fh);
