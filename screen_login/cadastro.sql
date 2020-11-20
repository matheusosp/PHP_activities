-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: Out 26, 2018 as 02:13 PM
-- Versão do Servidor: 5.6.10
-- Versão do PHP: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `dia` int(5) NOT NULL,
  `mes` int(5) NOT NULL,
  `ano` int(5) NOT NULL,
  `RG` int(7) NOT NULL,
  `CPF` int(9) NOT NULL,
  `CPF2` int(2) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(5) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` text NOT NULL,
  `CEP` int(5) NOT NULL,
  `CEP2` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Imagem` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`login`, `senha`, `nome`, `sobrenome`, `dia`, `mes`, `ano`, `RG`, `CPF`, `CPF2`, `rua`, `numero`, `bairro`, `estado`, `cidade`, `CEP`, `CEP2`, `email`, `Imagem`) VALUES
('mthz', '91128993', 'Matheus', 'Oliveira', 20, 9, 2001, 6779788, 77656489, 4, '', 90, 'varzea', 'ac', 'Lages', 88511, 560, 'llllllllllll@hotmail.com', 0x4368727973616e7468656d756d2e6a7067);
