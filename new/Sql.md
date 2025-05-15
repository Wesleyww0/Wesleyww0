-- -----------------------------------------------------
-- Estrutura de Banco de Dados para o site
-- -----------------------------------------------------

CREATE DATABASE Site;
USE Site;

-- Tabela para armazenar textos genéricos de páginas
CREATE TABLE paginas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    conteudo TEXT
);

-- Tabela para perguntas frequentes
CREATE TABLE faq (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pergunta TEXT NOT NULL,
    resposta TEXT NOT NULL
);

-- Tabela para "Business" (parceiros, patrocinadores, etc)
CREATE TABLE business (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    imagem VARCHAR(255)
);

-- Tabela para notícias
CREATE TABLE noticias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    conteudo TEXT,
    data_publicacao DATE
);

-- Tabela para programação do evento
CREATE TABLE programacao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    descricao TEXT,
    data_hora DATETIME
);

-- Tabela para ingressos
CREATE TABLE ingressos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(100),
    valor DECIMAL(10,2),
    descricao TEXT
);

-- Tabela de imagens e logos
CREATE TABLE imagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    caminho VARCHAR(255)
);

-- Tabela de quemSomos
CREATE TABLE quemsomos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    conteudo TEXT
);

-- Tabela de localização
CREATE TABLE localizacao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    endereco TEXT,
    mapa TEXT
);

-- Tabela para dados de contato
CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
   contato VARCHAR(255)
);
