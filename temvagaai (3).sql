-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Dez-2020 às 00:40
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

--
-- Extraindo dados da tabela `tb_imagens`
--

INSERT INTO `tb_imagens` (`id_imagem`, `nome_imagem`, `fk_id_vaga`) VALUES
(1, '8710ef23f974292757b7401762709c65.jpg', 37),
(2, '1cf79412aeb6d5210374df321d600fe5.jpg', 38),
(3, '7cf6996e7e674b0496e2a34c22b80b83.jpg', 39),
(4, '0190ce612e4fabfe8202a66b9be7c4c5.jpg', 40),
(5, 'def47f7d31ccd74781f2d1d51d68a32d.jpg', 41);

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
(37, 'Casa de praia', 'Mansão, valor por diaria.', 122, '2020-12-11 22:42:45'),
(38, 'Casa em Atibaia', 'Casa em condomínio na cidade de Atibaia-SP. Casa espaçosa e aconchegante.', 900, '2020-12-11 23:30:42'),
(39, 'Vaga em apartamento', 'Vaga em apartamento mobiliado em Rio Paranaíba, quarto indivual, contas em torno de 70,00 reais.', 300, '2020-12-11 23:32:42'),
(40, 'Vaga em apartamento', 'Apartamento todo mobiliado, quarto dividido com mais 3 pessoas. Contas em torno de 25,00 reais.', 180, '2020-12-11 23:37:46'),
(41, 'Hotel Praia ', 'Valor da diária, incluso café da manhã. Quarto contém ar-condicionado, televisão com pacote por assinatura e frigobar.', 214, '2020-12-11 23:39:55');

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
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_vagas`
--
ALTER TABLE `tb_vagas`
  MODIFY `idVaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
