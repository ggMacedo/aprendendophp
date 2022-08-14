-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Abr-2018 às 22:52
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_imagens`
--
CREATE DATABASE IF NOT EXISTS `bd_imagens` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_imagens`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_imagens`
--

DROP TABLE IF EXISTS `tb_imagens`;
CREATE TABLE IF NOT EXISTS `tb_imagens` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_imagens`
--

INSERT INTO `tb_imagens` (`codigo`, `nome`, `foto`) VALUES
(2, 'gabriel', 'imgs/f77bf90852e076f1ad54cf6f4633e576.jpg'),
(3, 'kleber', 'imgs/7fb21575bc5286842c9dddcbeed41b73.jpg'),
(4, 'leao', 'imgs/eb59c3fc53b98f8e73332ae3d60e88cc.jpg'),
(5, 'leo', 'imgs/8df836c94bac8859195718e2c1466155.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
