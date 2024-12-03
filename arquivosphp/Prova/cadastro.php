<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <nav>
        <a href="listar.php">Lista de Cadastro</a>

    </nav>
    <br>
    <hr>

    <h1>Cadastrar</h1>

    <form action="gravar.php" method="post">
        <label>Nome</label>
        <input type="text" name="nome" id="nome" ><br><br><br> <!-- coloquei required para os campos serem obrigatorios -->
        
        <label>Idade</label>
        <input type="number" name="idade" id="idade" ><br><br><br>
        <label>Trabalho</label>
        <input type="text" name="trabalho" id="trabalho" >
        <button>Enviar</button>
    </form>

</body>

</html>