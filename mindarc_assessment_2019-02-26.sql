# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.24)
# Database: mindarc_assessment
# Generation Time: 2019-02-26 00:14:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table migrated_data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrated_data`;

CREATE TABLE `migrated_data` (
  `product_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sku` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `migrated_data` WRITE;
/*!40000 ALTER TABLE `migrated_data` DISABLE KEYS */;

INSERT INTO `migrated_data` (`product_id`, `sku`, `name`, `image_url`, `date`)
VALUES
	(61,'men_red_shirt','Mens Red Shirt','http://localhost/mindarc/media/354 (1).jpeg','2019-02-26 10:58:27'),
	(62,'women_red_blouse','Womens Red Blouse','http://localhost/mindarc/media/354.jpeg','2019-02-26 10:58:35'),
	(63,'men_blue_shorts','Mens Blue Shorts','http://localhost/mindarc/media/354 (2).jpeg','2019-02-26 10:58:59'),
	(64,'women_blue_skirt','Womens Blue Skirt',NULL,'2019-02-25 11:35:04'),
	(65,'women_rainbow_singlet','Singlet in Rainbow Colours',NULL,'2019-02-25 11:35:04'),
	(66,'women_sun_one','Aviator Sunglasses',NULL,'2019-02-25 11:35:04'),
	(67,'women_gold_neck','Gold Necklace Chain',NULL,'2019-02-25 11:35:04'),
	(68,'women_iph_case','Iphone Case pink',NULL,'2019-02-25 11:35:04'),
	(69,'men_sam_case','Samsung Case Skulls',NULL,'2019-02-25 11:35:04'),
	(70,'men_black_shirt','AC/DC Shirt',NULL,'2019-02-25 11:35:04');

/*!40000 ALTER TABLE `migrated_data` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table original_data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `original_data`;

CREATE TABLE `original_data` (
  `product_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) NOT NULL,
  `product_label` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `original_data` WRITE;
/*!40000 ALTER TABLE `original_data` DISABLE KEYS */;

INSERT INTO `original_data` (`product_id`, `product_code`, `product_label`, `gender`, `date`)
VALUES
	(11,'red_shirt','Mens Red Shirt','m','2019-02-25 11:34:43'),
	(12,'red_blouse','Womens Red Blouse','f','2019-02-25 11:34:43'),
	(13,'blue_shorts','Mens Blue Shorts','m','2019-02-25 11:34:43'),
	(14,'blue_skirt','Womens Blue Skirt','f','2019-02-25 11:34:43'),
	(15,'rainbow_singlet','Singlet in Rainbow Colours','v','2019-02-25 11:34:43'),
	(16,'sun_one','Aviator Sunglasses','f','2019-02-25 11:34:43'),
	(17,'gold_neck','Gold Necklace Chain','','2019-02-25 11:34:43'),
	(18,'iph_case','Iphone Case pink',' F','2019-02-25 11:34:43'),
	(19,'sam_case','Samsung Case Skulls','M','2019-02-25 11:34:43'),
	(20,'black_shirt','AC/DC Shirt','m','2019-02-25 11:34:43');

/*!40000 ALTER TABLE `original_data` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
