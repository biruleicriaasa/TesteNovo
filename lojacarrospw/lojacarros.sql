-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Out-2021 às 19:37
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojacarros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

DROP TABLE IF EXISTS `carros`;
CREATE TABLE IF NOT EXISTS `carros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `ano_mod_fabri` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `cor` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `placa` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id`, `marca`, `modelo`, `descricao`, `ano_mod_fabri`, `cor`, `placa`, `valor`) VALUES
(10, 'FORD', 'SIVIC', '4P DIREÇÃO HIDRAULICA', '2010/2015', 'PRETO', 'SD47GF', 300000),
(7, 'CHEVROLÉ', 'HILUX', '4P Direção Hidraulica', '2050/2100', 'BRANCO', '78TV9', 8000),
(11, 'deu certo', 'SIVIC', '4P DIREÇÃO HIDRAULICA', '2010/2015', 'PRETO', 'SD47GF', 300000),
(12, 'diferente', 'SIVIC', '4P DIREÇÃO HIDRAULICA', '2010/2015', 'PRETO', 'SD47GF', 300000),
(13, 'zxczxczxcxzczxcxzc', 'SIVIC', '4P DIREÇÃO HIDRAULICA', '2010/2015', 'PRETO', 'SD47GF', 300000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
