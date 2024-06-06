-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/06/2024 às 19:26
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
-- Banco de dados: `vitorhugo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`id`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `imagem` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `artistas`
--

CREATE TABLE `artistas` (
  `id` int(11) NOT NULL,
  `artista` varchar(255) NOT NULL,
  `idade` int(11) NOT NULL,
  `id_equipamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `artistas`
--

INSERT INTO `artistas` (`id`, `artista`, `idade`, `id_equipamento`) VALUES
(2, 'YAGO FORTANEX', 25, 1),
(3, 'VITOR', 17, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `biblioteca`
--

CREATE TABLE `biblioteca` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `imagem` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade_alto`
--

CREATE TABLE `cidade_alto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `imagem` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cpf` int(11) NOT NULL,
  `datadenascimento` date NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `estadocivil` varchar(100) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `logradouro` varchar(250) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(150) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `datadenascimento`, `sexo`, `estadocivil`, `estado`, `logradouro`, `numero`, `complemento`, `cidade`, `email`) VALUES
(1, 'aaaaaaaaaaaaaa', 2147483647, '2005-02-13', 'Feminino', 'Divorciado(a)', 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 2020202, 'aaaaaaaaaa', 'aaaaaaaaaa', 'vsdaaaaaaaaaaaaaaaaaaa'),
(2, 'nicolas', 15151, '2005-02-12', 'Feminino', 'Solteiro(a)', 'vsdvsdv', 'vsdvsd', 226262, 'vdsvsdvs', 'dvczdsvdsvdsvsdvsdvsdvsdvsdvdsv', 'sdvsdvsdv');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `id_equipamento` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `ano_fabricacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `equipamentos`
--

INSERT INTO `equipamentos` (`id_equipamento`, `nome`, `modelo`, `ano_fabricacao`) VALUES
(1, 'DJI', 'MAVIC AIR', 2018),
(2, 'CANON', 'G7X MARK III', 2016);

-- --------------------------------------------------------

--
-- Estrutura para tabela `nascer_sol`
--

CREATE TABLE `nascer_sol` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `imagem` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `rio`
--

CREATE TABLE `rio` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `imagem` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `senha`) VALUES
(2, 'a6666666', 'a666666', 'a666666', 'a666666'),
(3, 'b', 'b', 'b', 'b'),
(4, 'vitor', 'hugo', 'vitor', 'hugo'),
(5, 'vitor', 'hugo', 'hugo', '123'),
(6, 'vitor', 'hugo', 'vitorhugo', '123'),
(7, 'vitor', 'hugo', 'v', '1'),
(8, 'vitor', 'hugo', 'a', '2'),
(9, 'Antedeguemon', 'Antedeguemon', 'Antedeguemon@gmail.com', '123123'),
(10, 's', 's', 's', 'ss'),
(11, 'ç', 'ç', 'ç', 'ç'),
(12, 'Vitor', 'Hugo', 'hugo1', 'hugo1'),
(13, 'p', 'p', 'p', 'p'),
(14, 'o', 'o', 'o', 'o'),
(15, 'nicolas alzhaimer', 'merilio', 'nicolas', '123'),
(16, 'Vitor ', 'Hugo', 'vitor', '123'),
(17, 'rodrigo', 'atanasio', 'rodrigo', '123'),
(18, '1', '1', '1', '1'),
(19, 'lucas ', 'teixeira', 'lucasteixeira20002011@hotmail.com', 'aaaaaaaaa'),
(20, 'escobar', '12', '12', '12'),
(21, 'erick', 'tanto', '1239', '1239'),
(22, 'ss', 'ss', 'ss', 'ss'),
(23, 'luiza helena campos', 'goncalves', 'luizahelena99111@gmail.com', '@Helena1'),
(24, '', '', '', 'ppppppppppppppppppppppp'),
(26, '', '', 'mmm', 'mmm'),
(27, '', '', 'mmm', 'mmm'),
(28, '', '', 'mmm', 'mmm'),
(29, '', '', 'dsvsdv', 'dsvdsvsd'),
(30, '', '', 'dsvdsvsd', 'vdsvdsv'),
(31, '', '', 'kkk', 'ppp'),
(32, '', '', 'ooo', 'ooo'),
(33, '', '', 'bb', 'bbb'),
(34, 'h', 'h', 'h', 'h'),
(35, 'h', 'h', 'h', 'h'),
(36, 'vitor', 'hugo', 'uau', '56'),
(38, 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vegetacao`
--

CREATE TABLE `vegetacao` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `imagem` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_equipamento` (`id_equipamento`);

--
-- Índices de tabela `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cidade_alto`
--
ALTER TABLE `cidade_alto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD PRIMARY KEY (`id_equipamento`);

--
-- Índices de tabela `nascer_sol`
--
ALTER TABLE `nascer_sol`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `rio`
--
ALTER TABLE `rio`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vegetacao`
--
ALTER TABLE `vegetacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `biblioteca`
--
ALTER TABLE `biblioteca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `cidade_alto`
--
ALTER TABLE `cidade_alto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `id_equipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `nascer_sol`
--
ALTER TABLE `nascer_sol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `rio`
--
ALTER TABLE `rio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `vegetacao`
--
ALTER TABLE `vegetacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `artistas`
--
ALTER TABLE `artistas`
  ADD CONSTRAINT `artistas_ibfk_1` FOREIGN KEY (`id_equipamento`) REFERENCES `equipamentos` (`id_equipamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
