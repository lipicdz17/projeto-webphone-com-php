-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2017 às 21:46
-- Versão do servidor: 5.7.10-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webphone`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE IF NOT EXISTS `itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_venda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `qtd` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(150) NOT NULL,
  `nada` varchar(100) NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `img`, `marca`, `modelo`, `nada`, `valor`) VALUES
(1, 'dt-iphone-5s-16gb-cinza-espacial.png', 'iPhone', '5S Preto 16GB Espacial', 'a partir de', 950),
(2, 'moto_x_play.png', 'Moto X Play', '32GB 4G Dual Preto', 'a partir de', 800),
(3, 's5-branco.png', 'Galaxy S5', '16GB Branco', 'a partir de', 619),
(4, 'note-4.png', 'Galaxy Note 4', '16GB 4G Dual Branco', 'a partir de', 909),
(5, '6s.png', 'iPhone S6', '32GB  Dourado', 'a partir de', 2379),
(6, 's7.png', 'galaxy S7', '32GB  Rosa', 'a partir de', 1619),
(7, 'dt-g5-se-titanium-1.jpg', 'LG G5 SE', '32GB  Titânio', 'a partir de', 1589),
(8, 'Sony Xperia Z3.png', 'Sony Xperia Z3', '8GB  Branco', 'a partir de', 909);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE IF NOT EXISTS `venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
