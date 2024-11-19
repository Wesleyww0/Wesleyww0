<?php

$json = array(
    array('Nome', 'Telefone', 'Endereço'),
    array('Pessoa1', '44477774', "Raua das dalias"),
    array('Pessoa2', '336655366', 'Rua bonita')
);

$contatos = array ('contato' => $json);

$agenda = array ('agenda' => $contatos);

$fh = fopen("contatos.json", 'w');

fwrite($fh, json_encode($agenda, JSON_UNESCAPED_UNICODE));

fclose($fh);
