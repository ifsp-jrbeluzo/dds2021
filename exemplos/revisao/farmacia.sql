-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 08/06/2021 às 01:34
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `farmacia`
--
CREATE DATABASE IF NOT EXISTS `farmacia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `farmacia`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `remedio`
--

CREATE TABLE `remedio` (
  `id_remedio` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `bula` text NOT NULL,
  `preco` float NOT NULL,
  `validade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `remedio`
--

INSERT INTO `remedio` (`id_remedio`, `nome`, `bula`, `preco`, `validade`) VALUES
(1, 'Dipirona', 'Remédio para febre.', 5, '2022-01-01'),
(2, 'Aspirina C', 'Remédio para aumentar a imunidade.', 10, '2023-02-01'),
(3, 'Doril', 'Remédio para dor de cabeça', 15, '2024-06-02');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `remedio`
--
ALTER TABLE `remedio`
  ADD PRIMARY KEY (`id_remedio`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `remedio`
--
ALTER TABLE `remedio`
  MODIFY `id_remedio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
