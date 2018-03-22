# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: 127.0.0.1 (MySQL 5.6.38)
# Base de données: tuthow
# Temps de génération: 2018-03-22 09:06:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table bookmarks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bookmarks`;

CREATE TABLE `bookmarks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `tutoId` int(11) DEFAULT NULL,
  `bookmarkedDate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bookmarks` WRITE;
/*!40000 ALTER TABLE `bookmarks` DISABLE KEYS */;

INSERT INTO `bookmarks` (`id`, `userId`, `tutoId`, `bookmarkedDate`)
VALUES
	(77,17,14,'2018-03-20 19:33:52'),
	(90,17,41,'2018-03-21 15:24:37');

/*!40000 ALTER TABLE `bookmarks` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `category`)
VALUES
	(1,'adurino'),
	(2,'programation');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


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
	(35,2,'gaspiche','2018-03-15 14:07:45','msoifhsfoùn'),
	(36,2,'gaspiche','2018-03-15 14:07:56','mkfnmzen'),
	(37,2,'gaspiche','2018-03-15 14:36:56','nsd\r\n'),
	(39,2,'gaspiche','2018-03-15 23:54:51','jnsdjnjsdnc'),
	(40,2,'gaspiche','2018-03-16 07:55:34',':kjvljhv'),
	(41,2,'gaspiche','2018-03-16 07:56:22','kjkbd'),
	(42,2,'gaspiche','2018-03-16 08:10:28','test'),
	(43,2,'gaspiche','2018-03-16 08:11:25','putain\r\n'),
	(45,5,'gaspiche','2018-03-18 02:47:32','lnlkn'),
	(46,2,'gaspiche','2018-03-18 02:51:33','kjbkbkjb'),
	(47,2,'gaspiche','2018-03-18 11:25:00','fsvsdv'),
	(48,2,'gaspiche','2018-03-19 09:33:44',';jhvlvhj;'),
	(49,41,'gaspiche','2018-03-21 15:26:54','kljbjbjhbjhb'),
	(50,3,'gaspiche','2018-03-21 22:59:48',':kjbjb'),
	(51,3,'gaspiche','2018-03-21 22:59:51','lknkln');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table dislikes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dislikes`;

CREATE TABLE `dislikes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `tutoId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dislikes` WRITE;
/*!40000 ALTER TABLE `dislikes` DISABLE KEYS */;

INSERT INTO `dislikes` (`id`, `userId`, `tutoId`)
VALUES
	(36,17,8),
	(53,17,7),
	(60,17,4),
	(65,17,2),
	(67,17,42);

/*!40000 ALTER TABLE `dislikes` ENABLE KEYS */;
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


# Affichage de la table likes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `likes`;

CREATE TABLE `likes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tutoId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;

INSERT INTO `likes` (`id`, `tutoId`, `userId`)
VALUES
	(44,5,17),
	(53,41,17),
	(56,3,17);

/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
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
  `content` text,
  `author_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tutos` WRITE;
/*!40000 ALTER TABLE `tutos` DISABLE KEYS */;

INSERT INTO `tutos` (`id`, `userId`, `levelId`, `title`, `description`, `createdDate`, `upvote`, `durationNumber`, `durationTypeId`, `headerImg`, `layoutId`, `content`, `author_id`)
VALUES
	(1,NULL,3,'Supersonic Flow CFD Simulation of a Space Reentry Vehicle with ANSYS CFX','This step by step tutorial shows how to model/simulate supersonic flow around a space reentry vehicle (SpaceX\'s Dragon) using ANSYS CFX. To watch full tutorial refer to the video (on the right side). Mesh file required for this tutorial is also attached f',NULL,207,3,3,'1.jpg',2,NULL,NULL),
	(2,NULL,2,'Starting Your Permaculture Garden','Most people passionate about living sustainably and harmoniously with nature will eventually stumble upon the system of Permaculture, it’s hard not to, it’s a world-wide phenomenon and it’s growing!\n\nMost people passionate about living sustainably and har',NULL,28,10,2,'2.jpg',1,NULL,NULL),
	(3,NULL,5,'Herb Box Eco System','Since my plants do always suffer from too much or less water and I like to put a lot of herbs into my dishes, I decided to create a custom irrigation system. The box for my herbs should be configurable and work automatically or manually. Therefore an inte',NULL,826,1,3,'3.jpg',1,NULL,NULL),
	(4,NULL,4,'JavaScript With Hardware','We\'re about to step up our Nodebot game here, since we\'ll be making a very simple interface using HTML, CSS and JavaScript. To serve the HTML, we\'ll also be using Node.JS and Express to make our Server, Webpack to bundle our client-side JavaScript, and us',NULL,110,1,3,'4.jpg',1,NULL,NULL),
	(5,17,2,'Master Space Photography','Master the best camera settings, shutter speed, f-stop (controls aperture), and ISO, balancing the exposure triangle for night sky photography.',NULL,63,1,3,'5.jpg',1,NULL,NULL),
	(6,NULL,6,'Robotic Car controlled over Bluetooth with Obstacle Avoidance ','Obstacle avoidance is made possible by using IR sensors which detect the obstacle. I was controlling the robotic car from my Android device and the car kept breaking because it would crash into things. So I added an obstacle avoidance system.',NULL,923,1,3,'6.jpg',1,NULL,NULL),
	(7,NULL,3,'Herb Box Eco System','Since my plants do always suffer from too much or less water and I like to put a lot of herbs into my dishes, I decided to create a custom irrigation system. The box for my herbs should be configurable and work automatically or manually. Therefore an inte',NULL,435,1,3,'7.jpg',1,NULL,NULL),
	(8,NULL,2,'Herb Box Eco System','Since my plants do always suffer from too much or less water and I like to put a lot of herbs into my dishes, I decided to create a custom irrigation system. The box for my herbs should be configurable and work automatically or manually. Therefore an inte',NULL,218,1,3,'8.jpg',1,NULL,NULL),
	(9,NULL,1,'Create & Maintain Terrariums','Since my plants do always suffer from too much or less water and I like to put a lot of herbs into my dishes, I decided to create a custom irrigation system. The box for my herbs should be configurable and work automatically or manually. Therefore an inte',NULL,59,1,3,'9.jpg',3,NULL,NULL),
	(10,NULL,4,'Build a Hoverboard You Can Ride','Remember those hover boards that everyone rides around. now you can build your very own electric hover board at home that you can ride. To see how you can go through my instructables tutorial and watch the video to complement the tutorial. You can find al',NULL,643,15,3,'10.jpg',4,NULL,NULL),
	(11,NULL,2,'How to Brew Your Own Beer with Malt','here are many good books on homebrewing currently available, so why did I write one you ask? The answer is: a matter of perspective. When I began learning how to brew my own beer several years ago, I read every book I could find; books often published 15 ',NULL,97,2,3,'11.jpg',5,NULL,NULL),
	(12,NULL,1,'Pick earth images from satellites using TV Tuner and DIY antena','Remember those hover boards that everyone rides around. now you can build your very own electric hover board at home that you can ride. To see how you can go through my instructables tutorial and watch the video to complement the tutorial. You can find al',NULL,120,3,3,'12.jpg',6,NULL,NULL),
	(40,17,2,'Create a Vivarium','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i','2018-03-21',0,4,2,NULL,1,'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',NULL),
	(41,17,4,'Create a Vivarium','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i','2018-03-21',0,34,3,'41.jpg',1,'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',NULL);

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
	(18,'Mehdi','mehdi@gmail.com','$2y$10$9v.LTAf9eBENr9hMil6CtON8ySXhKZxV6eDTtMqBtk3.NCpBMvaMe','2018-03-14 00:00:00'),
	(21,'u','g@gz.fr','$2y$10$zPEI9MKfwll6B.m4zrowHuGSvXRvpGZ5KHKAic9Il4i6jLUpij6yq','2018-03-21 00:00:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
