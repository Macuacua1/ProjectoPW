-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2016 at 12:39 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_locacao`
--

-- --------------------------------------------------------

--
-- Table structure for table `artigo`
--

CREATE TABLE `artigo` (
  `cod_artigo` int(11) NOT NULL,
  `designacao` varchar(45) COLLATE dec8_bin NOT NULL,
  `descricao` varchar(45) COLLATE dec8_bin DEFAULT NULL,
  `preco_unitario` decimal(8,2) NOT NULL,
  `quant` int(11) NOT NULL,
  `cor` varchar(45) COLLATE dec8_bin DEFAULT NULL,
  `nr_lugares` varchar(45) COLLATE dec8_bin DEFAULT NULL,
  `cod_formato` int(11) DEFAULT NULL,
  `categoria_cod_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=dec8 COLLATE=dec8_bin;

--
-- Dumping data for table `artigo`
--

INSERT INTO `artigo` (`cod_artigo`, `designacao`, `descricao`, `preco_unitario`, `quant`, `cor`, `nr_lugares`, `cod_formato`, `categoria_cod_categoria`) VALUES
(3, 'Copos', 'Copos para Champaign', '20.00', 4, 'transparente', NULL, NULL, 2),
(4, 'Mesa', 'Mesa de Vidro', '200.00', 23, 'transparente', '4', 2, 3),
(5, 'Capas', 'Capas Símples', '75.00', 90, 'Verde', NULL, NULL, 4),
(6, 'Prato', 'simples', '25.00', 5, 'transparente', '', 2, 4),
(7, 'teste', 'ao seu dispor', '45.00', 5, NULL, NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `cod_categoria` int(11) NOT NULL,
  `designacao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`cod_categoria`, `designacao`) VALUES
(1, 'Cadeiras'),
(2, 'Copos e Taças'),
(3, 'Mesas'),
(4, 'Toalhas');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nomecli` varchar(45) NOT NULL,
  `nuit` bigint(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone1` varchar(45) DEFAULT NULL,
  `telefone2` varchar(45) DEFAULT NULL,
  `cod_endereco` int(11) NOT NULL,
  `cod_utilizador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nomecli`, `nuit`, `email`, `telefone1`, `telefone2`, `cod_endereco`, `cod_utilizador`) VALUES
(2, 'Believe', 667373, 'believe@gmail.com', '8234566', '85432224', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `endereco`
--

CREATE TABLE `endereco` (
  `cod_endereco` int(11) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `quarteirao` varchar(45) DEFAULT NULL,
  `avenida_rua` varchar(45) DEFAULT NULL,
  `nr_casa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `endereco`
--

INSERT INTO `endereco` (`cod_endereco`, `bairro`, `quarteirao`, `avenida_rua`, `nr_casa`) VALUES
(1, 'Ferroviario', 'B', 'j nyerere', '67'),
(2, 'Inhassouro', '9B', '78', '88'),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

CREATE TABLE `estado` (
  `cod_estado` int(11) NOT NULL,
  `designacao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `estado_factura`
--

CREATE TABLE `estado_factura` (
  `estado_cod_estado` int(11) NOT NULL,
  `factura_cod_factura` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `estado_funcionario`
--

CREATE TABLE `estado_funcionario` (
  `cod_estado` int(11) NOT NULL,
  `cod_funcionario` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `estado_reserva`
--

CREATE TABLE `estado_reserva` (
  `cod_estado` int(11) NOT NULL,
  `reserva_od_artigo` int(11) NOT NULL,
  `reserva_cod_cliente` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE `evento` (
  `cod_evento` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cod_local` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

CREATE TABLE `factura` (
  `cod_factura` int(11) NOT NULL,
  `data_emissao` varchar(45) NOT NULL,
  `val_pagar` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `factura`
--

INSERT INTO `factura` (`cod_factura`, `data_emissao`, `val_pagar`) VALUES
(1, '03/06/2016', '3000');

-- --------------------------------------------------------

--
-- Table structure for table `formato`
--

CREATE TABLE `formato` (
  `cod_formato` int(11) NOT NULL,
  `designacao` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `formato`
--

INSERT INTO `formato` (`cod_formato`, `designacao`, `descricao`) VALUES
(1, 'retangular', NULL),
(2, 'hexagono', NULL),
(3, 'Circular', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `cod_foto` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `cod_artigo` int(11) DEFAULT NULL,
  `cod_evento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`cod_foto`, `nome`, `descricao`, `cod_artigo`, `cod_evento`) VALUES
(1, 'image01.jpg', 'Capas', 5, NULL),
(3, 'image03.jpg', 'Banhos', NULL, NULL),
(4, 'image05.jpg', NULL, NULL, NULL),
(5, 'image04.jpg', NULL, NULL, NULL),
(6, 'image06.jpg', NULL, 6, NULL),
(7, 'image08.jpg', 'Damn', 4, NULL),
(8, 'image07.jpg', 'Testeee', 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `cod_funcionario` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `bi` varchar(45) NOT NULL,
  `nuit` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone1` varchar(45) DEFAULT NULL,
  `telefone2` varchar(45) DEFAULT NULL,
  `cod_endereco` int(11) NOT NULL,
  `cod_utilizador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`cod_funcionario`, `nome`, `bi`, `nuit`, `email`, `telefone1`, `telefone2`, `cod_endereco`, `cod_utilizador`) VALUES
(1, 'Zitha', '76834838B', '35728783', 'kb@gmail.com', '828774884', '26627829', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `local`
--

CREATE TABLE `local` (
  `cod_local` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pagamento`
--

CREATE TABLE `pagamento` (
  `cod_pagamento` int(11) NOT NULL,
  `quantia` decimal(8,2) NOT NULL,
  `motivo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE `reserva` (
  `cod_artigo` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `data` date NOT NULL,
  `quant` int(4) NOT NULL,
  `cod_funcionario` int(11) DEFAULT NULL,
  `cod_factura` int(11) DEFAULT NULL,
  `cod_tipo_reserva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=dec8 COLLATE=dec8_bin;

--
-- Dumping data for table `reserva`
--

INSERT INTO `reserva` (`cod_artigo`, `cod_cliente`, `data`, `quant`, `cod_funcionario`, `cod_factura`, `cod_tipo_reserva`) VALUES
(4, 2, '0000-00-00', 3, 1, 1, 1),
(6, 2, '0000-00-00', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_reserva`
--

CREATE TABLE `tipo_reserva` (
  `cod_tipo_reserva` int(11) NOT NULL,
  `designacao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_reserva`
--

INSERT INTO `tipo_reserva` (`cod_tipo_reserva`, `designacao`) VALUES
(1, 'Ornametacao Completa');

-- --------------------------------------------------------

--
-- Table structure for table `utilizador`
--

CREATE TABLE `utilizador` (
  `cod_utilizador` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilizador`
--

INSERT INTO `utilizador` (`cod_utilizador`, `username`, `password`) VALUES
(1, 'clauciozitha@gmail.com', 'kb007'),
(2, 'macuacua@hotmail.com', 'believe'),
(3, 'comrade', 'julius'),
(4, 'adafgg@kkk.com', 'wahaaa'),
(5, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`cod_artigo`),
  ADD KEY `fk_artigo_formato1_idx` (`cod_formato`),
  ADD KEY `fk_artigo_categoria1_idx` (`categoria_cod_categoria`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`),
  ADD UNIQUE KEY `nuit_UNIQUE` (`nuit`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `telefone1_UNIQUE` (`telefone1`),
  ADD UNIQUE KEY `telefone2_UNIQUE` (`telefone2`),
  ADD KEY `fk_cliente_endereco1_idx` (`cod_endereco`),
  ADD KEY `fk_cliente_utilizador1_idx` (`cod_utilizador`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`cod_endereco`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`cod_estado`);

--
-- Indexes for table `estado_factura`
--
ALTER TABLE `estado_factura`
  ADD PRIMARY KEY (`estado_cod_estado`,`factura_cod_factura`),
  ADD KEY `fk_estado_has_factura_factura1_idx` (`factura_cod_factura`),
  ADD KEY `fk_estado_has_factura_estado1_idx` (`estado_cod_estado`);

--
-- Indexes for table `estado_funcionario`
--
ALTER TABLE `estado_funcionario`
  ADD PRIMARY KEY (`cod_estado`,`cod_funcionario`),
  ADD KEY `fk_estado_has_funcionario_funcionario1_idx` (`cod_funcionario`),
  ADD KEY `fk_estado_has_funcionario_estado1_idx` (`cod_estado`);

--
-- Indexes for table `estado_reserva`
--
ALTER TABLE `estado_reserva`
  ADD PRIMARY KEY (`cod_estado`,`reserva_od_artigo`,`reserva_cod_cliente`),
  ADD KEY `fk_estado_has_reserva_reserva1_idx` (`reserva_od_artigo`,`reserva_cod_cliente`),
  ADD KEY `fk_estado_has_reserva_estado1_idx` (`cod_estado`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`cod_evento`),
  ADD KEY `fk_evento_local1_idx` (`cod_local`);

--
-- Indexes for table `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`cod_factura`);

--
-- Indexes for table `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`cod_formato`),
  ADD UNIQUE KEY `designacao_UNIQUE` (`designacao`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`cod_foto`),
  ADD KEY `fk_foto_artigo1_idx` (`cod_artigo`),
  ADD KEY `fk_foto_evento1_idx` (`cod_evento`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cod_funcionario`),
  ADD UNIQUE KEY `bi_UNIQUE` (`bi`),
  ADD UNIQUE KEY `nuit_UNIQUE` (`nuit`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `telefone1_UNIQUE` (`telefone1`),
  ADD UNIQUE KEY `telefone2_UNIQUE` (`telefone2`),
  ADD KEY `fk_funcionario_endereco1_idx` (`cod_endereco`),
  ADD KEY `fk_funcionario_utilizador1_idx` (`cod_utilizador`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`cod_local`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`cod_pagamento`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`cod_artigo`,`cod_cliente`,`data`),
  ADD KEY `fk_artigo_has_cliente_cliente1_idx` (`cod_cliente`),
  ADD KEY `fk_artigo_has_cliente_artigo1_idx` (`cod_artigo`),
  ADD KEY `fk_reserva_funcionario1_idx` (`cod_funcionario`),
  ADD KEY `fk_reserva_factura1_idx` (`cod_factura`),
  ADD KEY `fk_reserva_tipo_reserva1_idx` (`cod_tipo_reserva`);

--
-- Indexes for table `tipo_reserva`
--
ALTER TABLE `tipo_reserva`
  ADD PRIMARY KEY (`cod_tipo_reserva`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`cod_utilizador`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigo`
--
ALTER TABLE `artigo`
  MODIFY `cod_artigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cod_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `cod_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `cod_estado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `cod_evento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `factura`
--
ALTER TABLE `factura`
  MODIFY `cod_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `formato`
--
ALTER TABLE `formato`
  MODIFY `cod_formato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `cod_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `cod_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
  MODIFY `cod_local` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `cod_pagamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_reserva`
--
ALTER TABLE `tipo_reserva`
  MODIFY `cod_tipo_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `cod_utilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `artigo`
--
ALTER TABLE `artigo`
  ADD CONSTRAINT `fk_artigo_categoria1` FOREIGN KEY (`categoria_cod_categoria`) REFERENCES `categoria` (`cod_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cod_formato` FOREIGN KEY (`cod_formato`) REFERENCES `formato` (`cod_formato`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_endereco1` FOREIGN KEY (`cod_endereco`) REFERENCES `endereco` (`cod_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_utilizador1` FOREIGN KEY (`cod_utilizador`) REFERENCES `utilizador` (`cod_utilizador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `estado_factura`
--
ALTER TABLE `estado_factura`
  ADD CONSTRAINT `fk_estado_has_factura_estado1` FOREIGN KEY (`estado_cod_estado`) REFERENCES `estado` (`cod_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estado_has_factura_factura1` FOREIGN KEY (`factura_cod_factura`) REFERENCES `factura` (`cod_factura`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `estado_funcionario`
--
ALTER TABLE `estado_funcionario`
  ADD CONSTRAINT `fk_estado_has_funcionario_estado1` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`cod_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estado_has_funcionario_funcionario1` FOREIGN KEY (`cod_funcionario`) REFERENCES `funcionario` (`cod_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `estado_reserva`
--
ALTER TABLE `estado_reserva`
  ADD CONSTRAINT `fk_estado_has_reserva_estado1` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`cod_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estado_has_reserva_reserva1` FOREIGN KEY (`reserva_od_artigo`,`reserva_cod_cliente`) REFERENCES `reserva` (`cod_artigo`, `cod_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `fk_evento_local1` FOREIGN KEY (`cod_local`) REFERENCES `local` (`cod_local`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_foto_artigo1` FOREIGN KEY (`cod_artigo`) REFERENCES `artigo` (`cod_artigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_foto_evento1` FOREIGN KEY (`cod_evento`) REFERENCES `evento` (`cod_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `fk_funcionario_endereco1` FOREIGN KEY (`cod_endereco`) REFERENCES `endereco` (`cod_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_funcionario_utilizador1` FOREIGN KEY (`cod_utilizador`) REFERENCES `utilizador` (`cod_utilizador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_artigo_has_cliente_artigo1` FOREIGN KEY (`cod_artigo`) REFERENCES `artigo` (`cod_artigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artigo_has_cliente_cliente1` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reserva_factura1` FOREIGN KEY (`cod_factura`) REFERENCES `factura` (`cod_factura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reserva_funcionario1` FOREIGN KEY (`cod_funcionario`) REFERENCES `funcionario` (`cod_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reserva_tipo_reserva1` FOREIGN KEY (`cod_tipo_reserva`) REFERENCES `tipo_reserva` (`cod_tipo_reserva`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
