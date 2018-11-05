-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 05-Nov-2018 às 01:10
-- Versão do servidor: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_c`
--
CREATE DATABASE IF NOT EXISTS `sistema_c` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema_c`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `AccessList`
--

DROP TABLE IF EXISTS `AccessList`;
CREATE TABLE IF NOT EXISTS `AccessList` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `AccessList`
--

INSERT INTO `AccessList` (`id`, `name`, `description`) VALUES
(2, 'Criar', 'criar novos registros em qualquer módulo do sitema'),
(3, 'alterar', 'permitir ao usuário modificar registros no sistema'),
(4, 'delete', 'permitir ao usuário excluir registros no sistema'),
(5, 'Usuários', 'determinar se o usuário irá ter acesso ou não ao módulo de Users'),
(7, 'Lista de Acesso', 'permite ou não se o usuário irá  ter acesso ao módulo Lista de acesso'),
(8, 'Níveis de acesso', 'permite se o usuário terá acesso ou não ao módulo de nível de acesso');

-- --------------------------------------------------------

--
-- Estrutura da tabela `manageAccess`
--

DROP TABLE IF EXISTS `manageAccess`;
CREATE TABLE IF NOT EXISTS `manageAccess` (
  `id` int(11) NOT NULL,
  `idTypeLevel` int(11) NOT NULL,
  `idAccessList` int(11) NOT NULL,
  `flag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Userlevel`
--

DROP TABLE IF EXISTS `Userlevel`;
CREATE TABLE IF NOT EXISTS `Userlevel` (
  `id` int(11) NOT NULL,
  `typeLevel` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Userlevel`
--

INSERT INTO `Userlevel` (`id`, `typeLevel`, `description`) VALUES
(17, 'Administrador', 'acesso completo ao sistema'),
(18, 'Normal', 'acesso restrito do sistema'),
(24, 'Restrito', 'acesso a partes do sistema controlado pelo ACL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `type` int(11) NOT NULL,
  `inputDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `login`, `password`, `type`, `inputDate`) VALUES
(49, 'Cleber Santos Silva ', 'clsprogramador@outlook.com', '(83)98899-4455', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 1, '2018-10-07 12:47:55'),
(51, 'Luis Gustavo', 'cleber@wdcom.com.br', '(83)98899-4466', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 1, '2018-10-07 12:48:05'),
(52, 'Fred Henrique Souza', 'fhs@gmail.com', '063987380711', 'fred', 'f4b23f2c70974c5310f65169cb5fbca084721adb', 1, '2018-11-04 18:44:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AccessList`
--
ALTER TABLE `AccessList`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manageAccess`
--
ALTER TABLE `manageAccess`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idTypeLevel` (`idTypeLevel`),
  ADD KEY `idAccessList` (`idAccessList`);

--
-- Indexes for table `Userlevel`
--
ALTER TABLE `Userlevel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AccessList`
--
ALTER TABLE `AccessList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `manageAccess`
--
ALTER TABLE `manageAccess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Userlevel`
--
ALTER TABLE `Userlevel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `manageAccess`
--
ALTER TABLE `manageAccess`
  ADD CONSTRAINT `accessList` FOREIGN KEY (`idAccessList`) REFERENCES `AccessList` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `userlevel` FOREIGN KEY (`idTypeLevel`) REFERENCES `Userlevel` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
