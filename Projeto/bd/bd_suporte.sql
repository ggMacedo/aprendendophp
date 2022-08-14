-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Maio-2018 às 22:21
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_suporte`
--
CREATE DATABASE IF NOT EXISTS `bd_suporte` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_suporte`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_reclamacoes`
--

CREATE TABLE IF NOT EXISTS `tb_reclamacoes` (
  `codigo` int(100) NOT NULL AUTO_INCREMENT,
  `nome_pessoa` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `opcao` varchar(1) NOT NULL,
  `mensagem` varchar(280) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tb_reclamacoes`
--

INSERT INTO `tb_reclamacoes` (`codigo`, `nome_pessoa`, `email`, `opcao`, `mensagem`) VALUES
(1, 'joao', 'joao_professor@hotmail.com', 's', 'Não precisa escrever tanto!!!!'),
(2, 'Gerente', 'gerentinho89@hotmail.com', 'f', 'O download de nanatsu no taizai está fora do ar'),
(3, 'Kleber', 'kleber@eumesmo.com', 's', 'COLOQUEM HENTAI - HOMEM ARANHA MORRE'),
(4, 'gabriel', 'gabriel.macedo90@hotmail.com', 'o', 'oloco');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
