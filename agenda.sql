-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Out-2023 às 00:57
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compromissos`
--

CREATE TABLE `compromissos` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `data_comp` datetime NOT NULL,
  `data_criacao` datetime NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `importancia` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `compromissos`
--

INSERT INTO `compromissos` (`id`, `descricao`, `data_comp`, `data_criacao`, `titulo`, `importancia`) VALUES
(1, 'tarefa', '2023-10-10 10:00:00', '2023-10-06 17:37:22', 'Titulo tarefa', 1),
(2, 'tarefa', '2023-10-18 20:48:00', '2023-10-07 01:49:41', 'Titulo tarefa', 1),
(3, 'tarefa', '2023-10-18 20:48:00', '2023-10-07 02:11:15', 'Titulo tarefa', 1),
(4, 'tarefa', '2023-10-18 20:48:00', '2023-10-06 21:12:56', 'Titulo tarefa', 1),
(5, 'fazer compras ', '2023-10-31 12:00:00', '2023-10-06 22:01:22', 'Titulo tarefa', 4),
(6, 'REUNIÃO ', '2023-10-25 16:30:00', '2023-10-08 00:31:00', 'REUNIÃO EMPRESA', 5),
(7, 'tarefa', '2023-10-30 12:00:00', '2023-10-08 17:00:53', 'Titulo tarefa', 3),
(8, 'tarefa', '2024-11-10 18:00:00', '2023-10-08 17:02:46', 'Titulo tarefa ', 2),
(9, 'tarefa', '1969-12-31 21:00:00', '2023-10-08 18:12:48', 'Titulo tarefa ', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compromissos`
--
ALTER TABLE `compromissos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compromissos`
--
ALTER TABLE `compromissos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
