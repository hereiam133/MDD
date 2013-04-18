# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: mdd
# Generation Time: 2013-04-16 19:58:33 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL DEFAULT '',
  `body` longtext NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `username`, `body`, `created`, `modified`, `user_id`)
VALUES
	(3,'chrisbutt','my feature film will bring the stars to align with the horses.','2013-04-15 13:04:26','2013-04-15 13:04:26',7),
	(4,'admin','this is just a test 1 test test test','2013-04-15 13:28:31','2013-04-16 15:00:49',6),
	(5,'test2','testing again #2','2013-04-15 13:28:43','2013-04-15 13:28:43',6),
	(6,'locol','theeesss','2013-04-15 15:32:31','2013-04-15 15:32:31',5),
	(7,'testttttt','testy','2013-04-15 15:33:36','2013-04-16 10:34:33',5),
	(8,'local','bosy u a better','2013-04-16 12:00:01','2013-04-16 12:00:01',6),
	(9,'test2','test 2 post','2013-04-16 14:42:18','2013-04-16 14:42:18',8),
	(10,'test2','test again with test user 2','2013-04-16 14:56:10','2013-04-16 14:59:23',8);

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`)
VALUES
	(5,'hereiam133','5602060ac637f3aabd84ec54b9ab32032ca01391','admin','2013-04-15 15:14:08','2013-04-15 15:14:08'),
	(6,'test','ffbf7b4f19f4d2128b4a51f5af29bfd41e89d2f5','author','2013-04-15 15:17:04','2013-04-15 15:17:04'),
	(7,'admin','3ba765e118cb1dbe9c29b7435b718292f5095fdd','admin','2013-04-15 15:34:49','2013-04-15 15:34:49'),
	(8,'test2','f3f37c4b6f52dae8ebd8102bc8d81f24e2e3eda0','author','2013-04-16 14:41:52','2013-04-16 14:41:52');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
