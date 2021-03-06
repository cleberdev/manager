-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 05:57 PM
-- Server version: 5.6.37
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
CREATE DATABASE IF NOT EXISTS `sistema_c` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sistema_c`;

-- --------------------------------------------------------

--
-- Table structure for table `AccessList`
--

DROP TABLE IF EXISTS `AccessList`;
CREATE TABLE IF NOT EXISTS `AccessList` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AccessList`
--

INSERT INTO `AccessList` (`id`, `name`, `description`) VALUES
(3, 'Modificar', 'permitir ao usuário modificar registros no sistema'),
(4, 'Excluir', 'permitir ao usuário excluir registros no sistema'),
(7, 'Lista de Acesso', 'permite ou não se o usuário irá  ter acesso ao módulo Lista de acesso'),
(8, 'Níveis de acesso', 'permite se o usuário terá acesso ou não ao módulo de nível de acesso\r\nmodificado para teste'),
(15, 'Criar', 'teste sá fé tê teste ');

-- --------------------------------------------------------

--
-- Table structure for table `permissionList`
--

DROP TABLE IF EXISTS `permissionList`;
CREATE TABLE IF NOT EXISTS `permissionList` (
  `id` int(11) NOT NULL,
  `idUserlevel` int(11) NOT NULL,
  `idAccessList` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissionList`
--

INSERT INTO `permissionList` (`id`, `idUserlevel`, `idAccessList`) VALUES
(155, 24, 3),
(156, 29, 3),
(157, 29, 4),
(158, 29, 7),
(159, 29, 8),
(160, 29, 15);

-- --------------------------------------------------------

--
-- Table structure for table `Userlevel`
--

DROP TABLE IF EXISTS `Userlevel`;
CREATE TABLE IF NOT EXISTS `Userlevel` (
  `id` int(11) NOT NULL,
  `typeLevel` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Userlevel`
--

INSERT INTO `Userlevel` (`id`, `typeLevel`, `description`) VALUES
(24, 'Restrito', 'acesso a partes do sistema controlado pelo ACL'),
(27, 'teste alterado', 'testesalvarteste'),
(28, 'Teste café 33', 'café de teste para saber. '),
(29, 'Administrador', 'Acesso total ao sistema\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `login`, `password`, `type`, `inputDate`) VALUES
(49, 'Cleber Santos Silva ', 'clsprogramador@outlook.com', '(83)98899-4455', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 29, '2018-11-16 17:39:39');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_permissionlist`
--
DROP VIEW IF EXISTS `vw_permissionlist`;
CREATE TABLE IF NOT EXISTS `vw_permissionlist` (
`id` int(11)
,`idUserlevel` int(11)
,`idAccessList` int(11)
,`typeLevel` varchar(100)
,`name` varchar(150)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_permissionlist`
--
DROP TABLE IF EXISTS `vw_permissionlist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_permissionlist` AS select `a`.`id` AS `id`,`a`.`idUserlevel` AS `idUserlevel`,`a`.`idAccessList` AS `idAccessList`,`b`.`typeLevel` AS `typeLevel`,`c`.`name` AS `name` from ((`permissionlist` `a` left join `userlevel` `b` on((`a`.`idUserlevel` = `b`.`id`))) left join `accesslist` `c` on((`a`.`idAccessList` = `c`.`id`))) where 1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AccessList`
--
ALTER TABLE `AccessList`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissionList`
--
ALTER TABLE `permissionList`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKUserLevel` (`idUserlevel`),
  ADD KEY `FKAccessList` (`idAccessList`);

--
-- Indexes for table `Userlevel`
--
ALTER TABLE `Userlevel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AccessList`
--
ALTER TABLE `AccessList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `permissionList`
--
ALTER TABLE `permissionList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `Userlevel`
--
ALTER TABLE `Userlevel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `permissionList`
--
ALTER TABLE `permissionList`
  ADD CONSTRAINT `FKAccessList` FOREIGN KEY (`idAccessList`) REFERENCES `AccessList` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKUserLevel` FOREIGN KEY (`idUserlevel`) REFERENCES `Userlevel` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_userlevel` FOREIGN KEY (`type`) REFERENCES `Userlevel` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
