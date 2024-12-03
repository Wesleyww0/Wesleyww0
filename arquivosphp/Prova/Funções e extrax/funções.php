<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    <main>
        <?php
            function validarNumeros($numero1, $numero2) {
                if (is_numeric($numero1) && is_numeric($numero2)) {
                    return true;
                } else {
                    return false;
                }
            }

            function soma($numero1, $numero2) {
                return $numero1 + $numero2;
            }

            function subtracao($numero1, $numero2) {
                return $numero1 - $numero2;
            }

            function multiplicacao($numero1, $numero2) {
                return $numero1 * $numero2;
            }

            function divisao($numero1, $numero2) {
                if ($numero2 != 0) {
                    return $numero1 / $numero2;
                } else {
                    return "\"PARCEIRO, AINDA NÃO DESCOBRIRAM COMO DIVIDIR ALGO POR ZERO!!\"";
                }
            }

            function somaNumerosArray ($p) {
                $acumulador = 0;
                for ($i=0; $i < count($p); $i++) { 
                    $acumulador += intval ($p[$i]);
                }
                return $acumulador;
            }

            function limpaCaracteresDocumento ($documento) {
                return str_replace (['.', '-', ' ', ',', '/'], '', $documento);
            }
        
            function validaDocumento ($documento, $tipoDocumento) {
                $docLimpo = limpaCaracteresDocumento($documento);
        
                if ($tipoDocumento == 'cpf') {
                    return strlen ($docLimpo) == 11;
                } else if ($tipoDocumento == 'cnpj') {
                    return strlen ($docLimpo) == 14;
                }
            }

            function limpa($documento){
                return str_replace(['.', '=', ' ', ',', '+', '-', '_', '*', '&', '%', '$', '*', '(', ')', '@', '!', '¨', '#', '~', ':', ';'], '', $documento);
            }
        ?>
</main>

</body>
</html>