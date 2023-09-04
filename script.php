<?php
-- Criação do banco de dados "teste_bytecom"
CREATE DATABASE IF NOT EXISTS teste_bytecom;

-- Seleciona o banco de dados
USE teste_bytecom;

-- Criação da tabela "contador"
CREATE TABLE IF NOT EXISTS contador (
    id INT(10) PRIMARY KEY,
    nome_empresa VARCHAR(60),
    data_fundacao_empresa DATE,
    Nome_contador VARCHAR(60),
    data_aniversario_contador DATE,
    Telefone_empresa VARCHAR(20),
    Telefone_Contador VARCHAR(20),
    CRC VARCHAR(60),
    email VARCHAR(100),
    senha VARCHAR(100),
    data_cadastro DATE,
    Logo VARCHAR(60)
);

-- Criação da tabela "cliente"
CREATE TABLE IF NOT EXISTS cliente (
    id INT(11) PRIMARY KEY,
    id_contador INT(11),
    data_fundacao_empresa DATE,
    nome_empresa VARCHAR(60),
    Nome_contato VARCHAR(60),
    data_aniversario_contato DATE,
    Telefone_empresa VARCHAR(20),
    Telefone_Contador VARCHAR(20),
    email VARCHAR(100),
    senha VARCHAR(100),
    data_cadastro DATE,
    Logo VARCHAR(60)
?);
>