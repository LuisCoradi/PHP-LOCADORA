-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 25-Fev-2022 às 16:11
-- Versão do servidor: 8.0.28-0ubuntu0.20.04.3
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `BDLocadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbCategorias`
--

CREATE TABLE `tbCategorias` (
  `idCategoria` int NOT NULL,
  `nomeCategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `tbCategorias`
--

INSERT INTO `tbCategorias` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'ação'),
(2, 'Aventura'),
(3, 'Ficção Cientifica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbFilmes`
--

CREATE TABLE `tbFilmes` (
  `idFilme` int NOT NULL,
  `tituloFilme` varchar(100) NOT NULL,
  `duracaoFilme` varchar(10) NOT NULL,
  `valorLocacao` decimal(10,2) NOT NULL,
  `idCategoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `tbFilmes`
--

INSERT INTO `tbFilmes` (`idFilme`, `tituloFilme`, `duracaoFilme`, `valorLocacao`, `idCategoria`) VALUES
(1, 'Exterminador do Futuro', '1:30', '3.50', 1),
(2, 'Indiana Jones', '2:00', '3.00', 2),
(3, 'Rambo 2', '2:30', '3.00', 1),
(4, 'Star Wars', '1:45', '3.00', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbCategorias`
--
ALTER TABLE `tbCategorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `tbFilmes`
--
ALTER TABLE `tbFilmes`
  ADD PRIMARY KEY (`idFilme`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbCategorias`
--
ALTER TABLE `tbCategorias`
  MODIFY `idCategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbFilmes`
--
ALTER TABLE `tbFilmes`
  MODIFY `idFilme` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbFilmes`
--
ALTER TABLE `tbFilmes`
  ADD CONSTRAINT `tbFilmes_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbCategorias` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
