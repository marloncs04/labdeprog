-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2020 às 03:25
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `temvagaai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_imagens`
--

CREATE TABLE `tb_imagens` (
  `id_imagem` int(11) NOT NULL,
  `nome_imagem` varchar(100) DEFAULT NULL,
  `fk_id_vaga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vagas`
--

CREATE TABLE `tb_vagas` (
  `idVaga` int(11) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `preco` float NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_vagas`
--

INSERT INTO `tb_vagas` (`idVaga`, `titulo`, `descricao`, `preco`, `data`) VALUES
(19, 'Apartamento 2 Quartos', 'Vista para praia, preço acessível, contrato de 6 meses no mínimo.  ', 550, '2020-12-07 00:19:35'),
(26, 'Casa de praia', 'Quarto em casa de frente a praia, valor por diaria.', 155.9, '2020-12-07 00:44:40'),
(27, 'Casa de praia', 'Casa em copacabana, sete dias.', 1222, '2020-12-07 01:18:17');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_imagens`
--
ALTER TABLE `tb_imagens`
  ADD PRIMARY KEY (`id_imagem`),
  ADD KEY `fk_id_vaga` (`fk_id_vaga`);

--
-- Índices para tabela `tb_vagas`
--
ALTER TABLE `tb_vagas`
  ADD PRIMARY KEY (`idVaga`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_imagens`
--
ALTER TABLE `tb_imagens`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_vagas`
--
ALTER TABLE `tb_vagas`
  MODIFY `idVaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_imagens`
--
ALTER TABLE `tb_imagens`
  ADD CONSTRAINT `tb_imagens_ibfk_1` FOREIGN KEY (`fk_id_vaga`) REFERENCES `tb_vagas` (`idVaga`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
