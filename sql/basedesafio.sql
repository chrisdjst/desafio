-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Ago-2017 às 04:25
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basedesafio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `idempresas` int(11) NOT NULL,
  `razaosocial` varchar(200) NOT NULL,
  `nomefantasia` varchar(200) NOT NULL,
  `site` varchar(200) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `ddd` varchar(4) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`idempresas`, `razaosocial`, `nomefantasia`, `site`, `cnpj`, `ddd`, `telefone`, `status`) VALUES
(1, 'empresa16', 'awdawdawd', 'empresa16.com(', '87.688.936/0001-35', '(00)', '9999-99999', 0),
(2, 'empresa', 'empresa', 'empresa.com', '87.688.936/0002-35', '(00)', '3555-55555', 0),
(26, 'empresa1', 'empresa1', 'empresa1.com', '87.688.936/0003-35', '(00)', '9990-99999', 0),
(27, 'empresa2', 'empresa2', 'empresa2.com', '87.688.936/0005-35', '(01)', '9999-99999', 0),
(28, 'empresa4', 'empresa4', 'abc.com', '00.000.000/0000-01', '(47)', '0000-00000', 0),
(29, 'empresa5', 'empresa5', 'abcabc.com', '88.888.888/8888-88', '(09)', '9999-99999', 0),
(30, 'empresa6', 'empresa6', 'empresa6.com', '89.999.898/9898-99', '(02)', ' 3444-4444', 0),
(31, 'empresa3', 'empresa3', 'empresa3.com', '88.888.883/8888-88', '(99)', '9999-99999', 0),
(32, 'empresa7', 'empresa7', 'empresa7.com', '88.888.888/8888-22', '(99)', '8988-99999', 0),
(33, 'empresa8', 'empresa8', 'empresa8.com', '87.878.787/8778-88', '(88)', '8878-78888', 0),
(34, 'empresa9', 'empresa9', 'empresa9.com', '99.989.898/9998-33', '(89)', '8989-89898', 0),
(35, 'empresa10', 'empresa10', 'empresa10.com', '91.010.909/0909-09', '(78)', '8888-87777', 0),
(36, 'empresa11', 'empresa11', 'empresa11.com', '77.799.111/1998-98', '(11)', '1188-82288', 0),
(37, 'empresa12', 'empresa12', 'empresa12.com', '98.989.182/1898-98', '(12)', '4343-43434', 0),
(38, 'empresa13', 'empresa13', 'empresa13.com', '12.499.349/3493-43', '(12)', '3413-24343', 0),
(39, 'empresa14', 'empresa14', 'empresa14.com', '12.414.123/2323-23', '(13)', '1314-34334', 0),
(40, 'empresa15', 'empresa15', 'Sem site', '83.847.834/8734-83', '(09)', '3091-20390', 0),
(41, 'empresa17', 'empresa17', 'Sem site', '12.344.888/8888-88', '(98)', '4384-88888', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idempresas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `idempresas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
