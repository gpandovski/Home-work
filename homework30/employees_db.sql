-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.29-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for homestead
CREATE DATABASE IF NOT EXISTS `homestead` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `homestead`;

-- Dumping structure for table homestead.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `address` tinytext,
  `phone` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table homestead.employees: ~5 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `firstname`, `lastname`, `address`, `phone`, `age`) VALUES
	(1, 'Gogo', 'Pandovski', 'Venijamin Macukovski br.15/1 Skopje 1000 Macedonia', 551334, 38),
	(2, 'Atina ', 'Pesic', 'Skoevska br.55A Skopje 1000 Macedonia', 123456, 42),
	(3, 'Vesna ', 'Stankovska', 'Cico Popovic br.23 Skopje 1000 Macedonia', 789654, 45),
	(4, 'Vlado', 'Todorovski', 'Narodni heroi br.1 Bitola 1574 Macedonia', 456123, 39),
	(5, 'Dejan', 'Andovski', 'Sv.Martinija br.1 Ohrid 1477 Macedonia', 687456, 29);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table homestead.employees_db
CREATE TABLE IF NOT EXISTS `employees_db` (
  `Column 1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table homestead.employees_db: ~0 rows (approximately)
/*!40000 ALTER TABLE `employees_db` DISABLE KEYS */;
/*!40000 ALTER TABLE `employees_db` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
