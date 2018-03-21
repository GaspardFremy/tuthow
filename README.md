# tuthow
tutorials platform. Made with (love) procedural PHP on a MVC pattern by @webstart students



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tutoId` int(11) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `commentDate` timestamp NULL DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `tutoId`, `pseudo`, `commentDate`, `comment`)
VALUES
	(1,1,'Gaspicheee',NULL,'Ceci est un commentaire test\n'),
	(19,5,'gaspiche','2018-03-15 00:51:40','uhuh'),
	(20,5,'gaspiche','2018-03-15 00:51:45','kkjnkjn'),
	(21,5,'gaspiche','2018-03-15 00:51:50','kjijij'),
	(22,5,'gaspiche','2018-03-15 00:55:34','jnjn\r\n');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table durationTypes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `durationTypes`;

CREATE TABLE `durationTypes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `durationType` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `durationTypes` WRITE;
/*!40000 ALTER TABLE `durationTypes` DISABLE KEYS */;

INSERT INTO `durationTypes` (`id`, `durationType`)
VALUES
	(1,'min'),
	(2,'hour'),
	(3,'week'),
	(4,'month');

/*!40000 ALTER TABLE `durationTypes` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table tutos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tutos`;

CREATE TABLE `tutos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `levelId` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `createdDate` date DEFAULT NULL,
  `upvote` int(11) DEFAULT NULL,
  `durationNumber` int(11) DEFAULT NULL,
  `durationTypeId` int(11) DEFAULT NULL,
  `headerImg` varchar(255) DEFAULT NULL,
  `layoutId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tutos` WRITE;
/*!40000 ALTER TABLE `tutos` DISABLE KEYS */;

INSERT INTO `tutos` (`id`, `userId`, `levelId`, `title`, `description`, `createdDate`, `upvote`, `durationNumber`, `durationTypeId`, `headerImg`, `layoutId`)
VALUES
	(1,NULL,3,'Supersonic Flow CFD Simulation of a Space Reentry Vehicle with ANSYS CFX','This step by step tutorial shows how to model/simulate supersonic flow around a space reentry vehicle (SpaceX\'s Dragon) using ANSYS CFX. To watch full tutorial refer to the video (on the right side). Mesh file required for this tutorial is also attached f',NULL,207,3,3,NULL,2),
	(2,NULL,2,'Starting Your Permaculture Garden','Most people passionate about living sustainably and harmoniously with nature will eventually stumble upon the system of Permaculture, it’s hard not to, it’s a world-wide phenomenon and it’s growing!\n\nMost people passionate about living sustainably and har',NULL,28,10,2,NULL,1),
	(3,NULL,5,'Herb Box Eco System','Since my plants do always suffer from too much or less water and I like to put a lot of herbs into my dishes, I decided to create a custom irrigation system. The box for my herbs should be configurable and work automatically or manually. Therefore an inte',NULL,826,1,3,NULL,1),
	(4,NULL,4,'JavaScript With Hardware','We\'re about to step up our Nodebot game here, since we\'ll be making a very simple interface using HTML, CSS and JavaScript. To serve the HTML, we\'ll also be using Node.JS and Express to make our Server, Webpack to bundle our client-side JavaScript, and us',NULL,110,1,3,NULL,1),
	(5,NULL,2,'Master Space Photography','Master the best camera settings, shutter speed, f-stop (controls aperture), and ISO, balancing the exposure triangle for night sky photography.',NULL,63,1,3,NULL,1),
	(6,NULL,6,'Robotic Car controlled over Bluetooth with Obstacle Avoidance ','Obstacle avoidance is made possible by using IR sensors which detect the obstacle. I was controlling the robotic car from my Android device and the car kept breaking because it would crash into things. So I added an obstacle avoidance system.',NULL,923,1,3,NULL,1),
	(7,NULL,3,'Herb Box Eco System','Since my plants do always suffer from too much or less water and I like to put a lot of herbs into my dishes, I decided to create a custom irrigation system. The box for my herbs should be configurable and work automatically or manually. Therefore an inte',NULL,435,1,3,NULL,1),
	(8,NULL,2,'Herb Box Eco System','Since my plants do always suffer from too much or less water and I like to put a lot of herbs into my dishes, I decided to create a custom irrigation system. The box for my herbs should be configurable and work automatically or manually. Therefore an inte',NULL,218,1,3,NULL,1),
	(9,NULL,1,'Create & Maintain Terrariums','Since my plants do always suffer from too much or less water and I like to put a lot of herbs into my dishes, I decided to create a custom irrigation system. The box for my herbs should be configurable and work automatically or manually. Therefore an inte',NULL,59,1,3,NULL,3),
	(10,NULL,4,'Build a Hoverboard You Can Ride','Remember those hover boards that everyone rides around. now you can build your very own electric hover board at home that you can ride. To see how you can go through my instructables tutorial and watch the video to complement the tutorial. You can find al',NULL,643,15,3,NULL,4),
	(11,NULL,2,'How to Brew Your Own Beer with Malt','here are many good books on homebrewing currently available, so why did I write one you ask? The answer is: a matter of perspective. When I began learning how to brew my own beer several years ago, I read every book I could find; books often published 15 ',NULL,97,2,3,NULL,5),
	(12,NULL,1,'Pick earth images from satellites using TV Tuner and DIY antena','Remember those hover boards that everyone rides around. now you can build your very own electric hover board at home that you can ride. To see how you can go through my instructables tutorial and watch the video to complement the tutorial. You can find al',NULL,120,3,3,NULL,6);

/*!40000 ALTER TABLE `tutos` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table tutosLayouts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tutosLayouts`;

CREATE TABLE `tutosLayouts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tutoLayout` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tutosLayouts` WRITE;
/*!40000 ALTER TABLE `tutosLayouts` DISABLE KEYS */;

INSERT INTO `tutosLayouts` (`id`, `tutoLayout`)
VALUES
	(1,'slider'),
	(2,'large'),
	(3,'half-large'),
	(4,'quarter'),
	(5,'half-quarter'),
	(6,'suggestion');

/*!40000 ALTER TABLE `tutosLayouts` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table tutosLevels
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tutosLevels`;

CREATE TABLE `tutosLevels` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tutoLevel` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tutosLevels` WRITE;
/*!40000 ALTER TABLE `tutosLevels` DISABLE KEYS */;

INSERT INTO `tutosLevels` (`id`, `tutoLevel`, `color`)
VALUES
	(1,'Détente','light-green'),
	(2,'Facile','green'),
	(3,'Moyen','orange'),
	(4,'Avancé','dark-orange'),
	(5,'Difficile','red'),
	(6,'Veteran','dark-red');

/*!40000 ALTER TABLE `tutosLevels` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date_inscription` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `pseudo`, `email`, `password`, `date_inscription`)
VALUES
	(17,'gaspiche','gaspardfremy123@gmail.com','$2y$10$rZuM0DmI/GRDVIt3fUwEUe28Gyce4rI1783.n9ZFEeQ6SBUySHNiG','2018-03-14 00:00:00'),
	(18,'Mehdi','mehdi@gmail.com','$2y$10$9v.LTAf9eBENr9hMil6CtON8ySXhKZxV6eDTtMqBtk3.NCpBMvaMe','2018-03-14 00:00:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
