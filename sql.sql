-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `stats`;
CREATE TABLE `stats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `people` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `stats` (`id`, `city`, `people`, `created_at`) VALUES
(1,	'barcelona',	'200',	'2015-10-18 10:30:17'),
(2,	'madrid',	'150',	'2015-10-18 10:38:51'),
(3,	'sevilla',	'100',	'2015-10-18 10:38:51'),
(4,	'valencia',	'185',	'2015-10-18 10:38:51'),
(5,	'extremadura',	'50',	'2015-10-18 10:38:51'),
(6,	'galicia',	'80',	'2015-10-18 10:38:51');

-- 2015-12-30 19:27:35