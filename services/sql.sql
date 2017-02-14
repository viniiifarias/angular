-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Fev-2017 às 13:15
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angular`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `data` varchar(10) NOT NULL,
  `operadora` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `persons`
--

INSERT INTO `persons` (`id`, `nome`, `telefone`, `data`, `operadora`) VALUES
(1, 'VinÃ­cius', '(99) 99999-9999', '99/99/9999', 'Vivo'),
(2, 'Frank', '(88) 88888-8888', '99/99/9999', 'Tim'),
(3, 'Jilsara', '(77) 77777-7777', '99/99/9999', 'Tim'),
(4, 'Victoria', '(66) 66666-6666', '99/99/9999', 'Vivo'),
(5, 'Gustavo', '(55) 55555-5555', '99/99/9999', 'Claro'),
(6, 'Eduardo', '(44) 44444-4444', '99/99/9999', 'Oi'),
(7, 'Marcelo', '(33) 33333-3333', '99/99/9999', 'Claro'),
(8, 'Marcos', '(22) 22222-2222', '99/99/9999', 'Vivo'),
(9, 'Junior', '(11) 11111-1111', '99/99/9999', 'Tim'),
(10, 'Rafael', '(00) 00000-0000', '99/99/9999', 'Vivo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
