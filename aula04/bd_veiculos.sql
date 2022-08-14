-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Mar-2018 às 18:53
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_veiculos`
--
CREATE DATABASE IF NOT EXISTS `bd_veiculos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_veiculos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculos`
--

CREATE TABLE IF NOT EXISTS `tb_veiculos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `montadora` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `cor` varchar(20) NOT NULL,
  `ano` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `tb_veiculos`
--

INSERT INTO `tb_veiculos` (`codigo`, `montadora`, `modelo`, `cor`, `ano`) VALUES
(1, 'Fiat', 'Carro do gerente', 'Rosa', 1912),
(2, 'Ferrari', 'Carro do Leão', 'Prata', 2080),
(3, 'Mercedes', 'Carro do leo', 'Laranja', 1900),
(4, 'Sandisk', 'Carro do João', 'Roxo', 1700),
(5, 'Nasa', 'Foguete', 'Branco', 2090),
(6, 'Apple', 'IPhone Car', 'Cinza', 1986),
(7, 'Gerente Motors', 'TCC_Pronto', 'Azul', 2019),
(8, 'Ford', 'HB20', 'Verde', 2000),
(9, 'Volkswagen', 'Fusca do erick', 'Amarelo', 1650),
(10, 'SkyNet', 'Robo', 'Cinza', 3000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
