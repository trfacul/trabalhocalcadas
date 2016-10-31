-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Out-2016 às 01:39
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calcadas_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `add_calcadas`
--

CREATE TABLE `add_calcadas` (
  `id` int(200) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `numero` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_usuarios`
--

CREATE TABLE `dados_usuarios` (
  `id` int(200) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(10) DEFAULT NULL,
  `sobrenome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dados_usuarios`
--

INSERT INTO `dados_usuarios` (`id`, `Nome`, `email`, `senha`, `sobrenome`) VALUES
(1, 'ick', 'ick@gmail.com', '1222', NULL),
(2, 'Adm', 'adm@adm.com.br', '123', 'boss');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inf_calcadas`
--

CREATE TABLE `inf_calcadas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cep` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `inf_calcadas`
--

INSERT INTO `inf_calcadas` (`id`, `nome`, `cep`) VALUES
(3, 'Av. Borges de Medeiros', 90020020),
(4, 'Av. Borges de Medeiros', 90020020),
(5, 'Rua Jerônimo Coelho', 90010241),
(6, ' Av. São Pedro', 90230120),
(7, 'Av. Benjamin Constant ', 90550000),
(8, 'Av. Benjamin Constant ', 90550000),
(9, 'Rua Jataí, 247', 90820190),
(10, 'R. Conde de Porto Alegre', 90220210),
(11, 'Rua Ramiro Barcelos', 90035003),
(12, 'Rua Voluntários da Pátria, 210', 90039900),
(13, 'Av. Francisco Silveira Bitencourt', 91150010),
(14, 'Rua Carumbé', 91420040),
(15, 'Av. Pátria ', 90230071),
(16, 'Rua Lagoinha', 90410000),
(17, 'Rua Cajú', 90690310),
(18, 'Rua Maranguape', 90690380),
(19, 'Av. Julio de Castilhos', 90030120),
(20, 'Rua Buarque de Macedo', 90230250),
(21, 'Av. Meridional', 91790070),
(22, 'Rua Marechal José Inácio da Silva', 90520280),
(23, 'Rua Mal. Floriano', 90020061),
(24, 'Rua Duque de Caxias', 90010280),
(25, 'Rua Gen. Vitorino', 90020170),
(26, 'Rua Annes Dias', 90020090),
(27, 'Sta. Cecília', 90420040),
(28, 'Av. Chuí', 90820080),
(29, 'Av. Nilo Wulff', 91790000),
(30, 'Rua Marcone', 91530160),
(31, 'Rua Orfanotrófio', 90840440),
(32, 'Rua Humberto de Campos', 90660280),
(33, 'Rua Modesto Franco', 91230100),
(34, 'Rua Fernando Machado', 90010320),
(35, 'Av.Oswaldo Aranha', 90035190),
(36, 'Sta.Cecília', 90420040),
(37, 'Av.Chuí', 90820080),
(38, 'Av.Oswaldo Aranha', 90035190),
(39, 'Av. Borges de Medeiros', 90020020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dados_usuarios`
--
ALTER TABLE `dados_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dados_usuarios`
--
ALTER TABLE `dados_usuarios`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
