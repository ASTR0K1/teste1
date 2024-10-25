-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 01, 2024 at 07:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ecobazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `Carrinho`
--

CREATE TABLE `Carrinho` (
  `id` int(11) NOT NULL,
  `Cliente_id` int(11) NOT NULL,
  `Produto_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Carrinho`
--

INSERT INTO `Carrinho` (`id`, `Cliente_id`, `Produto_id`, `quantidade`, `price`) VALUES
(245, 51, 29, 16, 870.00),
(246, 51, 34, 19, 1999.99),
(247, 51, 26, 10, 3050.00);

-- --------------------------------------------------------

--
-- Table structure for table `Categorias`
--

CREATE TABLE `Categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Categorias`
--

INSERT INTO `Categorias` (`id`, `nome`, `descricao`) VALUES
(1, 'Merciaria', ''),
(2, 'Laticíos & Ovos', ''),
(4, 'Bebidas', ''),
(5, 'Higiene & Beleza', ''),
(6, 'Frutas & Legumes', ''),
(7, 'Brinquedos & Jogos', ''),
(8, 'Peixaria & Talho', '');

-- --------------------------------------------------------

--
-- Table structure for table `Clientes`
--

CREATE TABLE `Clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `usertype` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Clientes`
--

INSERT INTO `Clientes` (`id`, `nome`, `apelido`, `tel`, `email`, `senha`, `usertype`) VALUES
(2, 'Administrador', 'Ecobazar', '99', 'EcoAdmin@bazar.com', '$2y$12$F0.SnW18cOynaE8gN74KqeDygFG035.EUK1Vtb5npBhPkYx1mU/by', 'admin'),
(17, 'Noelio', 'Bastos', '940896800', 'noelio.bastos@gmail.com', '$2y$12$jGB1WWtXroIpCLflLEFQ0OiSI1OeKW7.re7RL7k2Un/Khq2sppazy', 'user'),
(47, 'Ariel', 'Delgado', '940189297', 'ariel@gmail.com', '$2y$12$PI.QEwaWLIhzZilWVM0u6.Xjm1l3fKXBw2w4Gx.BQSrWxZYtgvKmy', 'user'),
(48, 'Amorim ', 'Sebastião ', '940896718', 'amorimluisandro4353@gmail.com', '$2y$12$jj2Dp1YMMJyb4.SfsWfuOeHiQcLOrc5NTngId.r4ixkz.MiAogLIS', 'user'),
(49, 'Noelio', 'Bastos', '923456765', 'noelio@gmaiil.com', '$2y$12$0w8uO.FldEin2tCEIU3I6.6wa429MTTHW71ijvczuFMF14ph8F2F.', 'user'),
(50, 'Osmar', 'Inacio', '926219234', 'osmardaniel@gmail.com', '$2y$12$z25PUTPvHxqDAWyolsioN.3nFLR.uD2BBsPr63dEDJtzfW2CLgmhu', 'user'),
(51, 'Noélio', 'Bastos', '923228345', 'noeliob@gmail.com', '$2y$12$QVS8TVtq7uzw8Evg4CwaN.vQAbiTyjeOSDbQoYyb.jlZX40vyUDAy', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `Encomendas`
--

CREATE TABLE `Encomendas` (
  `id` varchar(9) NOT NULL,
  `Cliente_id` int(11) NOT NULL,
  `Morada_id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `dataC` date NOT NULL DEFAULT current_timestamp(),
  `dataE` timestamp NULL DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'A aguardar transferência bancaria'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Encomendas`
--

INSERT INTO `Encomendas` (`id`, `Cliente_id`, `Morada_id`, `price`, `dataC`, `dataE`, `status`) VALUES
('1038337', 17, 16, 2000, '2024-06-28', NULL, 'Entregue'),
('1378747', 17, 16, 4789, '2024-06-28', NULL, 'Entregue'),
('1C4OVQR', 47, 18, 21621, '2024-06-28', NULL, 'Entregue'),
('43PLI7L', 17, 16, 2813, '2024-06-28', NULL, 'Entregue'),
('4BKE3Z2', 17, 16, 1943, '2024-06-28', NULL, 'Entregue'),
('6X21XH3', 47, 18, 8936, '2024-06-28', NULL, 'Entregue'),
('7NVOXB7', 17, 16, 3050, '2024-06-28', NULL, 'Entregue'),
('9VSHINI', 17, 16, 4000, '2024-06-28', NULL, 'A aguardar transferência bancaria'),
('ADVJQWA', 50, 20, 31960, '2024-06-28', NULL, 'A aguardar transferência bancaria'),
('F264F1J', 17, 16, 2000, '2024-06-28', NULL, 'Entregue'),
('GD0F9R6', 47, 18, 2000, '2024-06-28', NULL, 'A aguardar transferência bancaria'),
('GK8OZLD', 17, 16, 3050, '2024-06-28', NULL, 'Cancelada'),
('O6GQ73N', 17, 16, 8936, '2024-06-28', NULL, 'A aguardar transferência bancaria'),
('PTK56OG', 17, 16, 5829, '2024-06-28', NULL, 'A aguardar transferência bancaria'),
('S2GFJL8', 48, 19, 13782, '2024-06-28', NULL, 'A aguardar transferência bancaria'),
('YKDPJRH', 50, 20, 31960, '2024-06-28', NULL, 'A aguardar transferência bancaria'),
('ZXYGJD2', 17, 16, 11782, '2024-07-15', NULL, 'Cancelada');

-- --------------------------------------------------------

--
-- Table structure for table `Morada`
--

CREATE TABLE `Morada` (
  `id` int(11) NOT NULL,
  `Cliente_id` int(11) NOT NULL,
  `endereco` text NOT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `telefone` varchar(13) NOT NULL,
  `provincia` varchar(10) NOT NULL,
  `zona` varchar(30) NOT NULL,
  `pontoDr` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Morada`
--

INSERT INTO `Morada` (`id`, `Cliente_id`, `endereco`, `empresa`, `telefone`, `provincia`, `zona`, `pontoDr`) VALUES
(16, 17, 'Condominio Austin casa n16', 'ASTROcORP', '940896800', 'Luanda', 'Camama', 'Proximo ao novo hospital materno infantil'),
(18, 47, 'Patriota rua 122A', '', '940189297', 'Luanda', 'Patriota', 'administração do Patriota'),
(19, 48, 'Camama ', '', '940896718', 'Luanda', 'Talatona', 'proximo ao novo hospital materno'),
(20, 50, 'rua dos 11 mortos', '', '926219234', 'Luanda', 'Camama', 'jardin do eden');

-- --------------------------------------------------------

--
-- Table structure for table `Produtos`
--

CREATE TABLE `Produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `price` float(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `fornecedor` varchar(50) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `descricao` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `destaque` varchar(3) NOT NULL DEFAULT 'nao'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Produtos`
--

INSERT INTO `Produtos` (`id`, `nome`, `price`, `stock`, `fornecedor`, `marca`, `descricao`, `image`, `categoria_id`, `destaque`) VALUES
(26, 'Cereais Estrelitas ', 3050.00, 20, 'Nestlé', 'Nestlé', 'melhor pequeno almoço', 'uploads_pictures/estrelitas1.jpeg', 1, 'nao'),
(28, 'Compal Origens Néctar Laranja Algarve 1L', 1943.00, 20, 'Compal Fresco', 'Compal', 'melhor sumo do momento', 'uploads_pictures/suminho.jpg', 4, 'sim'),
(29, 'Água pura 5L', 870.00, 44, 'Pura', 'Pura', 'Melhor água do país', 'uploads_pictures/water_pura.JPG', 4, 'nao'),
(30, 'Cereais Chocapic 625g', 1943.00, 18, 'Nestlé', 'Nestlé', '2º Melhor pequeno alomoço', 'uploads_pictures/chocapic.jpeg', 1, 'nao'),
(31, 'Leite Gordo Mimosa 1L', 2000.00, 46, 'Mimosa', 'Mimosa', 'O leite pertence ao grupo dos lacticínios na roda dos alimentos. O teor de gordura do leite varia consoante seja magro, meio gordo ou gordo. Com essa variação, diferem também os teores de algumas vitaminas que estão associadas à gordura, como as vitaminas A e D, mais abundantes nas versões com percentagens superiores de gordura. Já no que diz respeito ao teor de proteínas, que são de alto valor biológico, minerais, como cálcio, potássio e fósforo, e vitaminas do complexo B, sobretudo B2 e B12, não se registam diferenças significativas.', 'uploads_pictures/LEITE-GORDO-MIMOSA-1L.png', 2, 'nao'),
(32, 'Batata Frita Original Lay\'s 45g', 1400.00, 11, 'Matudis. Lda.', 'Lay\'s', 'me', 'uploads_pictures/batata-lays-45g.jpg', 1, 'nao'),
(33, 'Peito de Frango', 4789.00, 11, 'Modelo EcoBazaar Minimercado', 'EcoBazar', 'Sendo uma carne branca é uma ótima opção para as dietas alimentares com baixo teor de gordura, desde que não seja consumida a sua pele...', 'uploads_pictures/peitodefrango.jpg', 8, 'nao'),
(34, 'Fruta Lima 300g (3uni)', 1999.99, 29, 'Modelo EcoBazaar Minimercado', 'EcoBazar', 'Apesar da enorme riqueza e variedade nutritiva que encontra neste fruto, o seu valor calórico é muito reduzido!\r\n', 'uploads_pictures/lima.jpg', 6, 'nao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Carrinho`
--
ALTER TABLE `Carrinho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cliente_id(Fk)` (`Cliente_id`),
  ADD KEY `Produtos_id(Fk)` (`Produto_id`),
  ADD KEY `Produtos_id` (`Produto_id`) USING BTREE;

--
-- Indexes for table `Categorias`
--
ALTER TABLE `Categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Encomendas`
--
ALTER TABLE `Encomendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cliente_id` (`Cliente_id`) USING BTREE,
  ADD KEY `Morada_id` (`Morada_id`);

--
-- Indexes for table `Morada`
--
ALTER TABLE `Morada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cliente_id` (`Cliente_id`);

--
-- Indexes for table `Produtos`
--
ALTER TABLE `Produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id(Fk)` (`categoria_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Carrinho`
--
ALTER TABLE `Carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `Categorias`
--
ALTER TABLE `Categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Clientes`
--
ALTER TABLE `Clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `Morada`
--
ALTER TABLE `Morada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `Produtos`
--
ALTER TABLE `Produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Carrinho`
--
ALTER TABLE `Carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`Cliente_id`) REFERENCES `Clientes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`Produto_id`) REFERENCES `Produtos` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `Encomendas`
--
ALTER TABLE `Encomendas`
  ADD CONSTRAINT `encomendas_ibfk_1` FOREIGN KEY (`Morada_id`) REFERENCES `Morada` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Morada`
--
ALTER TABLE `Morada`
  ADD CONSTRAINT `morada_ibfk_1 cascade` FOREIGN KEY (`Cliente_id`) REFERENCES `Clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Produtos`
--
ALTER TABLE `Produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `Categorias` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
