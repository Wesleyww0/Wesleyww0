<?php

$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$idade = (isset($_POST['idade'])) ? $_POST['idade'] : '';
$cpf = (isset($_POST['cpf'])) ? $_POST['cpf'] : '';
$nascimento =  (isset($_POST['nascimento'])) ? $_POST['nascimento'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';

function limpa($documento){
    return str_replace(['.', '=', ' ', ',', '+', '-', '_', '*', '&', '%', '$', '*', '(', ')', '@', '!', '¨', '#', '~', ':', ';'], '', $documento);
}

$nomeLimpo = limpa($nome);
$idadeLimpo = limpa($idade);
$cpfLimpo = limpa($cpf);
$nascimentoLimpo = limpa($nascimento);
$emailLimpo = limpa($email);

$printar = [
    'nome' => $nomeLimpo,
    'idade' => $idadeLimpo,
    'cpf' => $cpfLimpo,
    'nascimento' => $nascimentoLimpo,
    'email' => $emailLimpo
];

$codigo = rand(0, 1000);

if (! file_exists('teste'))
    mkdir('teste');

$recurso = fopen("teste/cadastro{$codigo}.json", 'w');

fwrite($recurso, json_encode($printar));

fclose($recurso);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Obrigada por se cadastrar <?= date('d/m/Y') ?></h1>
<button type="buttom"><a href="./listar.php">Verificar dados cadastrados</button>
</body>
</html>

