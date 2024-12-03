<?php

// funções de validação

function limpa($documento){
    return str_replace(['.', '=', ',', '+', '-', '_', '*', '&', '%', '$', '*', '(', ')', '@', '!', '¨', '#', '~', ':', ';'], '', $documento); // escolhi não validade espaço para poder cadastrar varias Anas ( ana lucia, ana clara, ana maria), e também dar espaço a profissões com nome composto ( Analista de sistemas, Engenheiro civil).
}



//rand para criar arquivos json diferentes aleatorios ( porém acredito que sobrescreve, vou descobrir como resolver)
$controle = rand(1,555);

// validando se esta escrito ou vazio
$nome = (isset($_POST['nome'])) ? $_POST ['nome'] : '' ;
$idade = (isset($_POST['idade'])) ? $_POST ['idade'] : '' ;
$trabalho = (isset($_POST['trabalho'])) ? $_POST ['trabalho'] : '' ;



    
    

// limpando os campos de caracteres especiais
$nomeLimpo = limpa($nome);
$idadeLimpo = limpa($idade);
$trabalhoLimpo = limpa($trabalho);

// gerando mensagens de erro com if

$msgErro = '';

    if (empty($nomeLimpo) || empty($idadeLimpo) || empty($trabalhoLimpo)) {
        $msgErro .= '- Existem campos não preenchidos no cadastro <BR>';
    }

// array das variaveis
$json = [
    'nome'=>$nomeLimpo,
    'idade'=>(int)$idadeLimpo, // usando int você força a variavel a ser um numero inteiro
    'trabalho'=>$trabalhoLimpo
];


//definindo o arquivo resultante, abrindo o recurso
$fh = fopen("arquivo/Dados$controle.json", 'w');

//salvando o arquivo com json_encode
// definindo oque vai estar no arquivo .json
fwrite($fh, json_encode($json, JSON_UNESCAPED_UNICODE));


// fechando o recurso
fclose($fh);

//header('Location: listar.php');
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

