-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Ago-2024 às 20:40
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_neon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_noticias`
--

DROP TABLE IF EXISTS `tb_noticias`;
CREATE TABLE IF NOT EXISTS `tb_noticias` (
  `CL_NOTICI` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `CL_IMAGEM` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `CL_NUMERO` bigint NOT NULL,
  `CL_TITULO` varchar(90) COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tb_noticias`
--

INSERT INTO `tb_noticias` (`CL_NOTICI`, `CL_IMAGEM`, `CL_NUMERO`, `CL_TITULO`) VALUES
('#gtrbrazil\r\n#gtr #skyline #nissan #nissangtr #nismo #jdm #r35 #r34 #r33 #r32 #godzilla #turbo #carrosantigos #jdmgram #jdmbrasil #carrosdeluxo ', 'imagem_1.jpg', 1, 'Noticia 1'),
('#gtrbrazil\r\n#gtr #skyline #nissan #nissangtr #nismo #jdm #r35 #r34 #r33 #r32 #godzilla #turbo #carrosantigos #jdmgram #jdmbrasil #carrosdeluxo ', 'imagem_2.jpg', 2, 'Noticia 2'),
('#gtrbrazil\r\n#gtr #skyline #nissan #nissangtr #nismo #jdm #r35 #r34 #r33 #r32 #godzilla #turbo #carrosantigos #jdmgram #jdmbrasil #carrosdeluxo ', 'imagem_3.jpg', 3, 'Noticia 3'),
('#gtrbrazil\r\n#gtr #skyline #nissan #nissangtr #nismo #jdm #r35 #r34 #r33 #r32 #godzilla #turbo #carrosantigos #jdmgram #jdmbrasil #carrosdeluxo ', 'imagem_4.jpg', 4, 'Noticia 4'),
('#gtrbrazil\r\n#gtr #skyline #nissan #nissangtr #nismo #jdm #r35 #r34 #r33 #r32 #godzilla #turbo #carrosantigos #jdmgram #jdmbrasil #carrosdeluxo ', 'imagem_5.jpg', 5, 'Noticia 5'),
('#gtrbrazil\r\n#gtr #skyline #nissan #nissangtr #nismo #jdm #r35 #r34 #r33 #r32 #godzilla #turbo #carrosantigos #jdmgram #jdmbrasil #carrosdeluxo ', 'imagem_6.jpg', 6, 'Noticia 6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sobre`
--

DROP TABLE IF EXISTS `tb_sobre`;
CREATE TABLE IF NOT EXISTS `tb_sobre` (
  `SO_NUMERO` decimal(3,0) NOT NULL,
  `SO_IMAGEM` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tb_sobre`
--

INSERT INTO `tb_sobre` (`SO_NUMERO`, `SO_IMAGEM`) VALUES
('1', 'Sobre_1.jpg'),
('2', 'Sobre_2.jpg'),
('3', 'Sobre_3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `SENHA` varchar(32) COLLATE utf8mb4_bin NOT NULL,
  `IMAGEN` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `EMAIL` varchar(32) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USUARIO` (`USUARIO`),
  UNIQUE KEY `EMAIL` (`EMAIL`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `USUARIO`, `SENHA`, `IMAGEN`, `EMAIL`) VALUES
(1, 'VITOR', '81dc9bdb52d04dc20036dbd8313ed055', 'b6652f9cab4dcaabcf7a269ade8a58fd.png', 'nois@gmail.com'),
(4, 'Rafa', '827ccb0eea8a706c4c34a16891f84e7b', '25b746313c84b9e62ebff60684039054.png', 'ra.almeida098@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
