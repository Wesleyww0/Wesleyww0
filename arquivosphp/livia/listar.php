<?php

function lerArquivo($caminho_arquivo){
  
        // 1 - ABRIR O ARQUIVO EM MEMÓRIA (RECURSO)
      $recurso = fopen($caminho_arquivo, 'r');
  
        // 2 - LEITURA DO ARQUIVO
      $json = fread($recurso, filesize($caminho_arquivo));
  
        // 3 - FECHAR O RECURSO (EVITAR O CONSUMO DE MEMÓRIA)
      fclose($recurso);
  
      return json_decode($json);

}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <h1>Lista de cadastros <?= date('d/m/Y') ?></h1>
    <thead>
      <tr>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Cadastro</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $pasta = './teste';

      // 1 - ABRIR A PASTA
      $arquivos = opendir($pasta);

      // 2 - PERCORRER O ARRAY DE ARQUIVOS
      $html = ' ';
      while($arquivo = readdir($arquivos)){
      if ($arquivo != '.' && $arquivo != '..'){
      
      $pasta = './teste/' . $arquivo;
      $dados = lerArquivo($pasta);
      
      $html .= "<tr>
                  <td>$dados->nome</td>
                  <td>$dados->cpf</td>
                  <td><a target='_blank' href='leitura.php?file=$arquivo'>$arquivo</a></td>
                </tr>";
      }
      }

      echo $html;

      // 3 - FECHAR O RECURSO
      closedir($arquivos);

      ?>
    </tbody>

</body>
</html> 