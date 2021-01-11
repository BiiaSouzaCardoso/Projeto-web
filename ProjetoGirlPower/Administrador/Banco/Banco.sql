CREATE DATABASE GirlPower;

USE GirlPower;

CREATE TABLE Cliente(
    CpfCliente INT NOT NULL AUTO_INCREMENT,
    Nome VARCHAR(30) NOT NULL,
    Sobrenome VARCHAR(70) NOT NULL,
    Telefone INT(15) NOT NULL,
    Email VARCHAR(70) NOT NULL,
    Senha VARCHAR(20) NOT NULL,
    PRIMARY KEY (CpfCliente)
);

CREATE TABLE Endereco(
    CpfCliente INT NOT NULL,
    Estado VARCHAR(30) NOT NULL,
    Cidade VARCHAR(30) NOT NULL,
    Bairro VARCHAR(30) NOT NULL,
    Rua VARCHAR(30) NOT NULL,
    Numero INT(5) NOT NULL,
    FOREIGN KEY (CpfCliente) REFERENCES Cliente (CpfCliente) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Categoria(
    IdCategoria INT NOT NULL AUTO_INCREMENT,
    DescricaoCategoria VARCHAR(20) NOT NULL,
    PRIMARY KEY (IdCategoria)
);

CREATE TABLE Produto(
    IdProduto INT NOT NULL AUTO_INCREMENT,
    IdCategoria INT NOT NULL,
    ImagemProduto VARCHAR(50),
    Nomeproduto VARCHAR(30) NOT NULL,
    DescricaoProduto VARCHAR(200) NOT NULL,
    PrecoProduto INT NOT NULL,
    PRIMARY KEY (IdProduto),
    FOREIGN KEY (IdCategoria) REFERENCES Categoria (IdCategoria) ON UPDATE CASCADE ON DELETE CASCADE
);