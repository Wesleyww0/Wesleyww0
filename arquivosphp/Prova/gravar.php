<?php

// funções de validação



//rand para criar arquivos json diferentes
$controle = rand(1,555);

// validando se esta escrito ou vazio
$nome = (isset($_POST['nome'])) ? $_POST ['nome'] : '' ;
$idade = (isset($_POST['idade'])) ? $_POST ['idade'] : '' ;
$trabalho = (isset($_POST['trabalho'])) ? $_POST ['trabalho'] : '' ;

// array das variaveis
$json = [
    'nome'=>$nome,
    'idade'=>$idade,
    'trabalho'=>$trabalho
];


//definindo o arquivo resultante, abrindo o recurso
$fh = fopen("arquivo/Dados$controle.json", 'w');

//salvando o arquivo com json_encode
// definindo oque vai estar no arquivo .json
fwrite($fh, json_encode($json, JSON_UNESCAPED_UNICODE));


// fechando o recurso
fclose($fh);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravado</title>
</head>
<body>

<h1>Dados cadastrados com sucesso!</h1>

<h2><a href="cadastro.php">Fazer novo Cadastro</a></h2>
<h2><a href="listar.php">Ver lista de Cadastro</a></h2>
    
</body>
</html>

