-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Versie:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Databasestructuur van workhours wordt geschreven
CREATE DATABASE IF NOT EXISTS `workhours` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `workhours`;


-- Structuur van  tabel workhours.workdays wordt geschreven
CREATE TABLE IF NOT EXISTS `workdays` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date_workday` date NOT NULL,
  `start_time_hour` int(11) DEFAULT '0',
  `start_time_minutes` int(11) DEFAULT '0',
  `stop_time_hour` int(11) DEFAULT '0',
  `stop_time_minutes` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel workhours.workdays: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `workdays` DISABLE KEYS */;
INSERT INTO `workdays` (`id`, `date_workday`, `start_time_hour`, `start_time_minutes`, `stop_time_hour`, `stop_time_minutes`, `created_at`, `updated_at`) VALUES
	(1, '2015-01-05', 8, 3, 17, 20, '2015-01-12 15:37:23', '2015-01-12 15:37:23'),
	(2, '2015-01-06', 8, 3, 17, 22, '2015-01-12 15:37:23', '2015-01-12 15:37:23'),
	(3, '2015-01-07', 8, 10, 17, 30, '2015-01-12 15:37:23', '2015-01-12 15:37:23'),
	(4, '2015-01-08', 0, 0, 0, 0, '0000-00-00 00:00:00', NULL),
	(5, '2015-01-09', 0, 0, 0, 0, '0000-00-00 00:00:00', NULL),
	(6, '2015-01-12', 7, 59, 0, 0, '0000-00-00 00:00:00', NULL);
/*!40000 ALTER TABLE `workdays` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
