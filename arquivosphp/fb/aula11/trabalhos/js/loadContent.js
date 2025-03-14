// Função que impede o comportamento padrão e carrega o conteúdo via AJAX

document.addEventListener('DOMContentLoaded', function() {
    // Seleciona todos os links com a classe "load-content"
    var links = document.querySelectorAll('a.load-content');

    links.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Impede o comportamento padrão (navegar e rolar para o topo)
    
            var page = link.getAttribute('href'); // Obtém o valor do href (URL do arquivo PHP)
    
            // Cria a requisição AJAX para carregar o conteúdo dinamicamente
            var xhr = new XMLHttpRequest();
            xhr.open('GET', page, true);
            xhr.onload = function() {
            if (xhr.status === 200) {
                // Insere o conteúdo na div com o id "content"
                document.getElementById('content').innerHTML = xhr.responseText;
            } else {
                console.error('Erro ao carregar o conteúdo: ' + xhr.status);
            }
            };
            xhr.onerror = function() {
            console.error('Erro de conexão ao tentar carregar o conteúdo.');
            };
            xhr.send();
        });
    });
});

//FUNÇÃO QUE COMANDA OS BOTÕES DE ROLAGEM

// Captura os elementos pelo ID
const imageContainer = document.getElementById('imageContainer');
const scrollLeftBtn = document.getElementById('scrollLeft');
const scrollRightBtn = document.getElementById('scrollRight');

// Função para calcular o tamanho da rolagem baseado na largura visível do contêiner
function getScrollAmount() {
    const containerWidth = imageContainer.offsetWidth; // Largura visível do contêiner
    const imageWidth = imageContainer.querySelector('img').offsetWidth; // Largura de uma imagem
    const imagesInView = Math.floor(containerWidth / imageWidth); // Quantas imagens cabem na tela
    return imagesInView * imageWidth; // Retorna a quantidade de pixels a rolar
}

// Função para rolar para a esquerda
scrollLeftBtn.addEventListener('click', function() {
    imageContainer.scrollBy({
        left: -getScrollAmount(), // Calcula a quantidade a rolar para a esquerda
        behavior: 'smooth' // Rolagem suave
    });
});

// Função para rolar para a direita
scrollRightBtn.addEventListener('click', function() {
    imageContainer.scrollBy({
        left: getScrollAmount(), // Calcula a quantidade a rolar para a direita
        behavior: 'smooth' // Rolagem suave
    });
});


