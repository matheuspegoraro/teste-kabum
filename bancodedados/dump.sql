-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para teste_kabum
CREATE DATABASE IF NOT EXISTS `teste_kabum` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `teste_kabum`;

-- Copiando estrutura para tabela teste_kabum.tb_addresses
CREATE TABLE IF NOT EXISTS `tb_addresses` (
  `id_address` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `address` varchar(120) NOT NULL,
  `city` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id_address`),
  KEY `FK__tb_clients` (`id_client`),
  CONSTRAINT `FK__tb_clients` FOREIGN KEY (`id_client`) REFERENCES `tb_clients` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela teste_kabum.tb_clients
CREATE TABLE IF NOT EXISTS `tb_clients` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth` date NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `RG` varchar(12) NOT NULL,
  `celphone` varchar(15) NOT NULL,
  PRIMARY KEY (`id_client`),
  KEY `FK_tb_clients_tb_users` (`id_user`),
  CONSTRAINT `FK_tb_clients_tb_users` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela teste_kabum.tb_users
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
