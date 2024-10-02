-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/10/2024 às 02:50
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `preco` double NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `descricao`, `preco`, `url`) VALUES
(1, 'bosta', 'merda', 1.2309182431396264e23, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTEhMVFRUXFxcXGBcXFxUYFxcYFRcXFxYWGBUYHSggGB0lGxcYITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGislICUtLS0tLS0rLS0tLS0tLS0tLS0tKy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABAUCAwYBBwj/xAA8EAABAwIEAwUFCAIBBAMAAAABAAIRAwQFEiExQVFhBiJxgdETkaGx8BQVMkJSU5LBk+HxFiNygjNUYv/EABkBAQADAQEAAAAAAAAAAAAAAAABAgMEBf/EACQRAAICAgICAgMBAQAAAAAAAAABAhEDIRIxBFETQSIyYSMU/9oADAMBAAIRAxEAPwD7iiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIigYrijKDMzzrwHEqspKKtkpNukTpUK6xakzRzxPIarisU7R1X7EtB0hug8zuVWV6hcIJ23148lwZPPS/RHbj8Nv8AZncv7TU9YBMeHyUb/qpsEwPcSPmuTtS01IBGrQfdurLDbVj2uJcDr4e6VgvKyy6Zq/Gxx7LtvafX8EjodVIodpqZ3a4e4qs+5wRsW6AcFDvMMLRIJLQNQPxDqOa0+bNHZT4sMjtLa9Y/8LgenH3KQvlle5NIksJMQZGkcPrVX+G9qXNgVe9IGugPx9Vtj81PUtGeTxJLcdnaIolliFOqO67XlxUtdqaatHI01phEWFSqG6uIHipIM0VdWxdg21+AUOpjTuAA95WbyRRqsM39F6i5tuPPG8FXNhftqiRoeI5JHJFieGcFb'),
(2, 'asda', 'ds', 0, '12312');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
