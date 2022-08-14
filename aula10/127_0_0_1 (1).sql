-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2018 às 20:03
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
  `Nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  `ft_usuario` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`codigo`, `Nome`, `login`, `senha`, `nivel`, `ft_usuario`) VALUES
(11, 'lklkj', 'lkjlkj', '202cb962ac59075b964b07152d234b70', 7, ''),
(12, 'Fernanda', 'fefe', '202cb962ac59075b964b07152d234b70', 10, ''),
(13, 'Josiscreuza', 'creuzinha', '202cb962ac59075b964b07152d234b70', 10, ''),
(14, 'nome', 'login', 'senha', 11, ''),
(15, 'Jordão', 'jojo', '202cb962ac59075b964b07152d234b70', 10, 'fotos/f79bc01c45289e4d66a279367fc88bb8.jpg'),
(16, 'Giovanna', 'freire', 'd41d8cd98f00b204e9800998ecf8427e', 7, 'fotos/d4bcd217d57348f2545499d60ff06eda.jpg'),
(17, 'Fernanda', 'fefe', 'd41d8cd98f00b204e9800998ecf8427e', 10, 'fotos/18397473b9b52c292e416da0d4e60a0e.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
