<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">







</head>

<body>
    <header>
        <?php include 'php/header.php'; ?>
    </header>

    <div class="container-fluid mx-5 ">
        <div class="row">
            <div class="col-lg-4 offset-lg-1 conteudo">
                <article>

                    <h2>FAQ - Fatecon</h2>
                    <p>Nosso FAQ funciona 24 horas, para apoiar as indagações dos usuários e permitir uma boa
                        expêriencia.</p>
                    <p>Adicione aqui suas perguntas e duvidas sobre o evento e em breve nossa equipe entrara em contato
                        por Email.</p>

                    <form class="form-faq" action="#" method="post">

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                placeholder="Adicione seu Email mais usual.">

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Pergunta</label>
                            <textarea type="text" name="pergunta" class="form-control"
                                placeholder="Adicione aqui sua dúvida ou pergunta."></textarea>

                        </div>
                        <button type="submit" class="btn btn-primary">Button</button>
                    </form>

                </article>
            </div>
            <div class="col-lg-4 offset-lg-1 conteudo">


                <aside>



                    
                        <section>
                            <h2>Perguntas Frequentes</h2>
                            <p>Qual a Localização do evento?</p>
                            <p>R: Escola Horácio Manley Lane - Av. João Pessoa, 556 - Centro, São Roque - SP,
                                18130-000.</p>
                            <p>Qual horario do inicio?</p>
                            <p>R: Inicia as 10 horas da manhã do dia 20 e 21 de setembro.</p>
                            <p>Qual a motivação desse encontro?</p>
                            <p>R: Expor o trabalho dos autores, junto a isso compartilhar da cultura geek.</p>
                            <p>Posso ir vestido com qual tipo de roupa?</p>
                            <p>R: Pode usar roupas normais, e também pode ir vestido de cosplay.</p>
                            <p>Consigo expor meu trabalho na Fatecon?</p>
                            <p>R: Consegue, entre em contato com a nossa equipe no menu <a href="#">Business</a>.
                            </p>
                            <p>Quando vai ser sa próxima Fatecon?</p>
                            <p>R: Esta programado para acontecer entre o meio e o final do próximo ano, vamos
                                informar pelo site em breve.</p>
                        </section>
                 
            
            </aside>
            </div>
        </div>

    </div>
    </div>
    <footer>
        <?php include 'php/footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>