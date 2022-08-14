-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Maio-2018 às 22:20
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_animes`
--
CREATE DATABASE IF NOT EXISTS `bd_animes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_animes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_episodios`
--

CREATE TABLE IF NOT EXISTS `tb_episodios` (
  `codigo` int(50) NOT NULL AUTO_INCREMENT,
  `nome_ep` varchar(80) NOT NULL,
  `data_de_lancamento` date NOT NULL,
  `numero_de_download` int(255) NOT NULL,
  `visualizacoes` int(255) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Extraindo dados da tabela `tb_episodios`
--

INSERT INTO `tb_episodios` (`codigo`, `nome_ep`, `data_de_lancamento`, `numero_de_download`, `visualizacoes`) VALUES
(1, 'Boku no Hero Academia - Ep1', '2018-05-08', 0, 0),
(2, 'Boku no Hero Academia - Ep2', '2018-05-08', 0, 0),
(3, 'Boku no Hero Academia - Ep3', '2018-05-08', 0, 0),
(4, 'Boku no Hero Academia - Ep4', '2018-05-08', 0, 0),
(5, 'Boku no Hero Academia - Ep5', '2018-05-08', 0, 0),
(6, 'Code Geass - Ep1', '2018-05-08', 0, 0),
(7, 'Code Geass - Ep2', '2018-05-08', 0, 0),
(8, 'Code Geass - Ep3', '2018-05-08', 0, 0),
(9, 'Code Geass - Ep4', '2018-05-08', 0, 0),
(10, 'Code Geass - Ep5', '2018-05-08', 0, 0),
(11, 'Death Note - Ep1', '2018-05-08', 0, 0),
(12, 'Death Note - Ep2', '2018-05-08', 0, 0),
(13, 'Death Note - Ep3', '2018-05-08', 0, 0),
(14, 'Death Note - Ep4', '2018-05-08', 0, 0),
(15, 'Death Note - Ep5', '2018-05-08', 0, 0),
(19, 'Dragon Ball Super - Ep1', '2018-05-08', 0, 0),
(20, 'Dragon Ball Super - Ep2', '2018-05-08', 0, 0),
(21, 'Dragon Ball Super - Ep3', '2018-05-08', 0, 0),
(22, 'Dragon Ball Super - Ep4', '2018-05-08', 0, 0),
(23, 'Dragon Ball Super - Ep5', '2018-05-08', 0, 0),
(24, 'Hunter X Hunter - Ep1', '2018-05-08', 0, 0),
(25, 'Hunter X Hunter - Ep2', '2018-05-08', 0, 0),
(26, 'Hunter X Hunter - Ep3', '2018-05-08', 0, 0),
(32, 'Hunter X Hunter - Ep4', '2018-05-08', 0, 0),
(33, 'Hunter X Hunter - Ep5', '2018-05-08', 0, 0),
(34, 'Nanatsu no Taizai - Ep1', '2018-05-08', 0, 0),
(35, 'Nanatsu no Taizai - Ep2', '2018-05-08', 0, 0),
(36, 'Nanatsu no Taizai - Ep3', '2018-05-08', 0, 0),
(37, 'Nanatsu no Taizai - Ep4', '2018-05-08', 0, 0),
(38, 'Nanatsu no Taizai - Ep5', '2018-05-08', 0, 0),
(39, 'Naruto Clássico - Ep1', '2018-05-08', 0, 0),
(40, 'Naruto Clássico - Ep2', '2018-05-08', 0, 0),
(41, 'Naruto Clássico - Ep3', '2018-05-08', 0, 0),
(42, 'Naruto Clássico - Ep4', '2018-05-08', 0, 0),
(43, 'Naruto Clássico - Ep5', '2018-05-08', 0, 0),
(44, 'One Piece - Ep1', '2018-05-08', 0, 0),
(45, 'One Piece - Ep2', '2018-05-08', 0, 0),
(46, 'One Piece - Ep3', '2018-05-08', 0, 0),
(47, 'One Piece - Ep4', '2018-05-08', 0, 0),
(48, 'One Piece - Ep5', '2018-05-08', 0, 0),
(49, 'Re:Zero - Ep1', '2018-05-08', 0, 0),
(50, 'Re:Zero - Ep2', '2018-05-08', 0, 0),
(51, 'Re:Zero - Ep3', '2018-05-08', 0, 0),
(52, 'Re:Zero - Ep4', '2018-05-08', 0, 0),
(53, 'Re:Zero - Ep5', '2018-05-08', 0, 0),
(54, 'Zatch Bell! - Ep1', '2018-05-08', 0, 0),
(55, 'Zatch Bell! - Ep2', '2018-05-08', 0, 0),
(56, 'Zatch Bell! - Ep3', '2018-05-08', 0, 0),
(57, 'Zatch Bell! - Ep4', '2018-05-08', 0, 0),
(58, 'Zatch Bell! - Ep5', '2018-05-08', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
