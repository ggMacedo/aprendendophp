-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Abr-2018 às 20:17
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_usuarios`
--
CREATE DATABASE IF NOT EXISTS `bd_usuarios` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_usuarios`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`codigo`, `nome`, `login`, `senha`, `nivel`) VALUES
(1, 'Danilo', 'danilo00', 'g777', 2),
(3, 'Joao', 'joao789', 'jao743', 2),
(4, 'Leandro', 'leandrinho00', 'leandro43', 2),
(5, 'Adilson', 'adilson908', 'adilsonprofessor', 1),
(6, 'Marcelo', 'marcelO00', 'marcelocordenador', 1),
(7, 'Gleyce', 'gleyce43', 'gleycee', 2),
(10, 'naruto', 'naruto666', 'ff', 2),
(11, 'toninho', 'toninhu33', 'asas', 2),
(12, 'ff', 'ff', '202cb962ac59075b964b07152d234b70', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
