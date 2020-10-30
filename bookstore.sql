-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table bookstore.tb_book
CREATE TABLE IF NOT EXISTS `tb_book` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_book` char(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `year_publish` year(4) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `edition` int(11) DEFAULT NULL,
  `episode` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`_id`),
  KEY `id_book` (`id_book`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bookstore.tb_book: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_book` ENABLE KEYS */;

-- Dumping structure for table bookstore.tb_transaction
CREATE TABLE IF NOT EXISTS `tb_transaction` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaction` char(50) DEFAULT NULL,
  `id_user` char(50) DEFAULT NULL,
  `id_book` char(50) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  PRIMARY KEY (`_id`),
  KEY `KEY` (`id_book`,`id_transaction`,`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bookstore.tb_transaction: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_transaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_transaction` ENABLE KEYS */;

-- Dumping structure for table bookstore.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` char(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL COMMENT '1 Pria, 2 Wanita',
  `password` varchar(50) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL COMMENT '1 admin, 2 employee',
  PRIMARY KEY (`_id`),
  KEY `KEY` (`username`,`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table bookstore.tb_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
REPLACE INTO `tb_user` (`_id`, `id_user`, `username`, `name`, `email`, `gender`, `password`, `role`) VALUES
	(1, '5def885daa6bf', 'ayana', 'Ayana Cicilia', 'ayana@gmail.com', 2, '9570d238a935f4bad98ed85dac7659e9', 2),
	(2, '5def8868e36d1', 'admin', 'Adminstrator', 'admin@gmail.com', 1, '21232f297a57a5a743894a0e4a801fc3', 1);
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
