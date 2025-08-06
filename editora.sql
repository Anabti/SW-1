-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/08/2025 às 17:48
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `editora`
--
CREATE DATABASE IF NOT EXISTS `editora` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `editora`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `idlivro` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `ano` int(11) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `paginas` varchar(255) NOT NULL,
  `preco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`idlivro`, `titulo`, `genero`, `ano`, `autor`, `paginas`, `preco`) VALUES
(1, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(2, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(3, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(4, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(5, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(6, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(7, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(8, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(9, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(10, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(11, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(12, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(13, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(14, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(15, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200),
(16, 'O pequeno principe', ' aventura', 1999, 'Fred', '150', 200);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`idlivro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `idlivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
