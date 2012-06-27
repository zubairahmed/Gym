/*
SQLyog Community v10.11 
MySQL - 5.5.24-log : Database - fitfiles
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fitfiles` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `fitfiles`;

/*Table structure for table `client_vitals` */

DROP TABLE IF EXISTS `client_vitals`;

CREATE TABLE `client_vitals` (
  `cvital_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  `height` decimal(10,0) DEFAULT NULL,
  `neck` decimal(10,0) DEFAULT NULL,
  `chest` decimal(10,0) DEFAULT NULL,
  `arms` decimal(10,0) DEFAULT NULL,
  `waist` decimal(10,0) DEFAULT NULL,
  `abs` decimal(10,0) DEFAULT NULL,
  `hips` decimal(10,0) DEFAULT NULL,
  `tri` decimal(10,0) DEFAULT NULL,
  `thigh` decimal(10,0) DEFAULT NULL,
  `bodyfat` decimal(10,0) DEFAULT NULL,
  `bmi` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`cvital_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `client_vitals` */

/*Table structure for table `clients` */

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `client_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `trainer_id` bigint(20) unsigned NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `clients` */

/*Table structure for table `trainers` */

DROP TABLE IF EXISTS `trainers`;

CREATE TABLE `trainers` (
  `trainer_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `logged_in` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`trainer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `trainers` */

insert  into `trainers`(`trainer_id`,`first_name`,`last_name`,`phone`,`email`,`password`,`logged_in`) values (1,'umer','sufyan','0321-529-4004','umer@citrusbits.com','user123',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
