<?php 
    function lerArquivo($caminho_arquivo){
        //1- abrir o arquivo em memória (recurso)
        $recurso = fopen($caminho_arquivo, 'r');

        //2- Leitura do arquivo
        $json = fread($recurso, filesize($caminho_arquivo));

        //3- Fechar o recurso (evitar o consumo de memória)
        fclose($recurso);
        /* forma de objeto*/
        return json_decode($json);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>lista de arquivos</title>
</head>
<body>
    <h1>LISTA DE ARQUIVOS <?= date('d/m/Y') ?></h1>
    <hr>
    <?php 

    $pasta = './teste';

    //1- abrir o diretório = Pasta
    $arquivos = opendir($pasta);
    
    ?>
    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Sobrenome</td>
                <td>Ver detalhes</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $html = '';
                //2- percorrer o array de arquivos
                while ($arquivo = readdir($arquivos)) {
                    if ($arquivo != '.' && $arquivo != '..') {

                        $caminho = './teste/' . $arquivo;
                        $dados = lerArquivo($caminho);

                        $html .= "<tr>
                                    <td>$dados->nome</td>
                                    <td>$dados->sobrenome</td>
                                    <td><a href='ler.php?file=$arquivo' target='_blank'>$arquivo</a></td>
                                </tr>";
                    }
                }
                echo $html;
                //3- fechar o recurso
                closedir($arquivos);
                // echo " <a href='ler.php?file=$arquivo' target='_blank'>$arquivo </a> <br>";
                ?>
        </tbody>
    </table>

</body>
</html>
