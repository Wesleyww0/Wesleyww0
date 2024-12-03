<?php 

    $arquivo_recebido = $_GET ['file'];


    $arquivo = './arquivo/' . $arquivo_recebido;


    //1- abrir o arquivo em memória (recurso)
    $recurso = fopen($arquivo, 'r');

    //2- Leitura do arquivo
    $json = fread($recurso, filesize($arquivo));

    //3- Fechar o recurso (evitar o consumo de memória)
    fclose($recurso);

    /* forma de objeto*/
    $dados = json_decode($json);
    
    // var_dump($dados);
    
    echo 'Nome: ' . $dados -> nome . '<br>';
    echo 'Idade: ' . $dados -> idade . '<br>';
    echo 'trabalho'. $dados -> trabalho .'<br>';

    // header('Location: /listar.php');
    
    // Forma de array associativo (basta adicionar o 'true'  no json decode) 
    
    // echo 'Nome: ' . $dados['nome'] . '<br>';

    ?>