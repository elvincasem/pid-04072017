/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.6.17 : Database - chris
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `empNo` varchar(10) NOT NULL DEFAULT 'NONE',
  `lname` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `ename` varbinary(100) DEFAULT 'NONE',
  `designation` varchar(100) NOT NULL DEFAULT 'NONE',
  `salary` varchar(500) DEFAULT 'NONE',
  `dob` date DEFAULT '0000-00-00',
  `pob` varchar(500) DEFAULT 'NONE',
  `gender` varchar(300) DEFAULT 'NONE',
  `civil_status` varchar(300) DEFAULT 'NONE',
  `citizenship` varchar(500) DEFAULT 'NONE',
  `height` varchar(500) DEFAULT '0',
  `weight` varchar(500) DEFAULT '0',
  `blood_type` varchar(500) DEFAULT 'NONE',
  `mobile_number` varchar(500) DEFAULT 'NONE',
  `email_address` varchar(500) DEFAULT 'NONE',
  `a_barangay` varchar(500) DEFAULT 'NONE',
  `a_towncity` varchar(500) DEFAULT 'NONE',
  `a_province` varchar(500) DEFAULT 'NONE',
  `a_zipcode` varchar(500) DEFAULT 'NONE',
  `date_hired` date DEFAULT NULL,
  `spouse_lname` varchar(500) DEFAULT 'NONE',
  `spouse_fname` varchar(500) DEFAULT 'NONE',
  `spouse_mname` varchar(500) DEFAULT 'NONE',
  `father_lname` varchar(500) DEFAULT 'NONE',
  `father_fname` varchar(500) DEFAULT 'NONE',
  `father_mname` varchar(500) DEFAULT 'NONE',
  `mother_lname` varchar(500) DEFAULT 'NONE',
  `mother_fname` varchar(500) DEFAULT 'NONE',
  `mother_mname` varchar(500) DEFAULT 'NONE',
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

/*Data for the table `employee` */

insert  into `employee`(`eid`,`empNo`,`lname`,`fname`,`mname`,`ename`,`designation`,`salary`,`dob`,`pob`,`gender`,`civil_status`,`citizenship`,`height`,`weight`,`blood_type`,`mobile_number`,`email_address`,`a_barangay`,`a_towncity`,`a_province`,`a_zipcode`,`date_hired`,`spouse_lname`,`spouse_fname`,`spouse_mname`,`father_lname`,`father_fname`,`father_mname`,`mother_lname`,`mother_fname`,`mother_mname`) values (12,'','ANCHETA-DIEGO','CHERRIE MELANIE','','','Director IV',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(13,'','CASIPIT','MA. GERALDINE','F','','Supervising Education Program Specialist',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(14,'','BUENIO','NYMPHA','N','','Chief Administrative Officer',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(15,'','ADQUILEN','EVELYN','C','','Administrative Officer III',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(16,'','AGCAOILI','REYNALDO','D','','Education Supervisor II',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(17,'','AGLUGUB','RODOLFO','E','','Education Supervisor II',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(18,'','ANCHETA','ARNOLD','V','','Education Supervisor II',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(19,'','BOSE','DANILO','B','','Education Supervisor II',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(20,'','CABANBAN','CHRISTIANNE LYNNETTE','G','MIT','EDUCATION SUPERVISOR II','SG 18 Step 1 (35,693.00)','1987-12-03','CABA LA UNION','FEMALE','SINGLE','FILIPINO','5\'0\"','60','B+','09175187911','clcabanban@ched.gov.ph','GANA','CABA','LA UNION','2503','2015-11-01','NONE','NONE','NONE','CABANBAN','REYNALDO','','GATBONTON','EILEEN',''),(21,'','CANTOR','MARK ANTHONY','L','','Administrative Aide VI',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(22,'','CHAN','CATHERINE','C','','Education Supervisor II',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(23,'','DOLORES','ANGELICA','Q','','Education Supervisor II',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(24,'','DULUEÃ‘A','PERFECTO','A','','Administrative Aide VI',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(25,'','FERRER','ANGELA','F','','Education Program Specialist II',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(26,'','GALERA JR.','ROGELIO','T','','Education Supervisor II',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(27,'','INIGO','KRIZZANE','C','','Administrative Assistant III',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(28,'','MENDOZA','MARVIN','I','','Administrative Aide IV',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(29,'','MINA','MYRELLE FAITH','D','','Education Supervisor II',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(30,'','MOLINA','FLORANTE','F','','Administrative Aide III',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(31,'','MONTEMAYOR','DIANNE JOYCE','B','','Administrative Officer III',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(32,'','OLI','CORNELIO','T','','Administrative Aide III',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(33,'','QUEZON','MAYROSE','L','','Education Supervisor II',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(34,'','NARCEDA','ARGIELYN','','','Job Order',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(35,'','PASCUA','CHARLES VINCENT','','','Job Order',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(36,'','TACTACAN','CIELITO','','','Job Order',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(37,'','VALENCIA','NASTASHA','A','','Job Order',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(38,'','YAMSON','VIC','','','Guard',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(39,'','OLPINDO','AUDIE','','','Guard',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(40,'','ESCAÃ‘O','MELODY','G','','Job Order',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(41,'','ANCHETA','MELQUIDES','','','PTS III',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(42,'','JONARD\r\n','GAVO\r\n','','','OJT',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(43,'','FRANCIA\r\n','POLIDO\r\n','','','OJT',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(44,'','CASEM','ELVIN','E','','PTS III',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE'),(46,'','juan','connect','','','',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','NONE','NONE','NONE','NONE','NONE','NONE','NONE',NULL,'NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE','NONE');

/*Table structure for table `employee_award` */

DROP TABLE IF EXISTS `employee_award`;

CREATE TABLE `employee_award` (
  `awardid` bigint(20) NOT NULL AUTO_INCREMENT,
  `award_date` date DEFAULT '0000-00-00',
  `award_department` varchar(500) DEFAULT 'NONE',
  `award_description` text,
  `eid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`awardid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee_award` */

/*Table structure for table `employee_career_service` */

DROP TABLE IF EXISTS `employee_career_service`;

CREATE TABLE `employee_career_service` (
  `civilserviceid` bigint(20) NOT NULL AUTO_INCREMENT,
  `career_description` varchar(500) DEFAULT NULL,
  `career_rating` double(10,2) DEFAULT '0.00',
  `career_date` date DEFAULT '0000-00-00',
  `career_place` varchar(500) DEFAULT 'NONE',
  `career_number` varchar(500) DEFAULT 'NONE',
  `career_validity` date DEFAULT '0000-00-00',
  `eid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`civilserviceid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `employee_career_service` */

insert  into `employee_career_service`(`civilserviceid`,`career_description`,`career_rating`,`career_date`,`career_place`,`career_number`,`career_validity`,`eid`) values (1,'Career Service - Professional',99.99,'2012-04-01','Saint Louis College - San Fernando City, La Union','12314843210897','2012-04-01',20);

/*Table structure for table `employee_children` */

DROP TABLE IF EXISTS `employee_children`;

CREATE TABLE `employee_children` (
  `childrenid` bigint(20) NOT NULL AUTO_INCREMENT,
  `eid` bigint(20) DEFAULT NULL,
  `children_name` varchar(500) DEFAULT NULL,
  `children_bdate` date DEFAULT NULL,
  PRIMARY KEY (`childrenid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `employee_children` */

insert  into `employee_children`(`childrenid`,`eid`,`children_name`,`children_bdate`) values (1,20,'Children 1','2018-01-01');

/*Table structure for table `employee_educational_background` */

DROP TABLE IF EXISTS `employee_educational_background`;

CREATE TABLE `employee_educational_background` (
  `educbackgroundid` bigint(20) NOT NULL AUTO_INCREMENT,
  `level` varchar(500) DEFAULT NULL,
  `name_of_school` varchar(500) DEFAULT NULL,
  `basic_education` varchar(500) DEFAULT NULL,
  `period_from` date DEFAULT '0000-00-00',
  `period_to` date DEFAULT '0000-00-00',
  `highest_level` varchar(500) DEFAULT 'NONE',
  `year_graduated` varchar(500) DEFAULT 'NONE',
  `scholar_received` varchar(500) DEFAULT 'NONE',
  `eid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`educbackgroundid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `employee_educational_background` */

insert  into `employee_educational_background`(`educbackgroundid`,`level`,`name_of_school`,`basic_education`,`period_from`,`period_to`,`highest_level`,`year_graduated`,`scholar_received`,`eid`) values (1,'Tertiary','AMA Computer College - La Union','Bachelor of Science in Information Technology','2005-06-01','2008-03-30','Bachelor\'s Degree','2008','NONE',20);

/*Table structure for table `employee_files` */

DROP TABLE IF EXISTS `employee_files`;

CREATE TABLE `employee_files` (
  `filesid` bigint(20) NOT NULL AUTO_INCREMENT,
  `file_document_type` varchar(500) DEFAULT NULL,
  `file_description` varchar(500) DEFAULT NULL,
  `file_date` date DEFAULT NULL,
  `file_name` varchar(500) DEFAULT NULL,
  `eid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`filesid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee_files` */

/*Table structure for table `employee_leave_application` */

DROP TABLE IF EXISTS `employee_leave_application`;

CREATE TABLE `employee_leave_application` (
  `appleaveid` bigint(20) NOT NULL AUTO_INCREMENT,
  `appleave_type` varchar(500) DEFAULT 'NONE',
  `appleave_location` varchar(500) DEFAULT 'NONE',
  `appleave_from` date DEFAULT NULL,
  `appleave_to` date DEFAULT NULL,
  `appleave_recommendation` text,
  `appleave_status` varchar(500) DEFAULT 'PENDING',
  `eid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`appleaveid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee_leave_application` */

/*Table structure for table `employee_leave_credits` */

DROP TABLE IF EXISTS `employee_leave_credits`;

CREATE TABLE `employee_leave_credits` (
  `leavecreditsid` bigint(20) NOT NULL AUTO_INCREMENT,
  `leave_from` date DEFAULT '0000-00-00',
  `leave_to` date DEFAULT '0000-00-00',
  `leave_particular` text,
  `leave_earned` double(10,3) DEFAULT '0.000',
  `leave_absences` date DEFAULT '0000-00-00',
  `leave_balance` double(10,3) DEFAULT '0.000',
  `leave_abswop` varchar(500) DEFAULT 'NONE',
  `sick_earned` double(10,3) DEFAULT '0.000',
  `sick_abswp` varbinary(500) DEFAULT 'NONE',
  `sick_balance` double(10,3) DEFAULT '0.000',
  `sick_abswop` varchar(500) DEFAULT 'NONE',
  `sick_action` text,
  `eid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`leavecreditsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee_leave_credits` */

/*Table structure for table `employee_other_information` */

DROP TABLE IF EXISTS `employee_other_information`;

CREATE TABLE `employee_other_information` (
  `otherid` bigint(20) NOT NULL AUTO_INCREMENT,
  `information_type` varchar(500) DEFAULT 'NONE',
  `information_description` text,
  `eid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`otherid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee_other_information` */

/*Table structure for table `employee_rating` */

DROP TABLE IF EXISTS `employee_rating`;

CREATE TABLE `employee_rating` (
  `ratingid` bigint(20) NOT NULL AUTO_INCREMENT,
  `rating_from` date DEFAULT '0000-00-00',
  `rating_to` date DEFAULT '0000-00-00',
  `rating` double(10,2) DEFAULT '0.00',
  `eid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`ratingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee_rating` */

/*Table structure for table `employee_service_record` */

DROP TABLE IF EXISTS `employee_service_record`;

CREATE TABLE `employee_service_record` (
  `servicerecordid` bigint(20) NOT NULL AUTO_INCREMENT,
  `service_from` date DEFAULT '0000-00-00',
  `service_to` date DEFAULT '0000-00-00',
  `service_position` varchar(500) DEFAULT 'NONE',
  `service_status` varchar(500) DEFAULT 'NONE',
  `service_salary` double(10,2) DEFAULT '0.00',
  `service_station` varchar(500) DEFAULT 'NONE',
  `service_branch` varchar(500) DEFAULT 'NONE',
  `service_leave` varchar(500) DEFAULT 'NONE',
  `service_separation` varchar(500) DEFAULT 'NONE',
  `eid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`servicerecordid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee_service_record` */

/*Table structure for table `employee_training` */

DROP TABLE IF EXISTS `employee_training`;

CREATE TABLE `employee_training` (
  `trainingid` bigint(20) NOT NULL AUTO_INCREMENT,
  `training_title` varchar(500) DEFAULT 'NONE',
  `training_from` date DEFAULT '0000-00-00',
  `training_to` date DEFAULT '0000-00-00',
  `training_hours` double(10,2) DEFAULT '0.00',
  `training_type` varchar(500) DEFAULT 'NONE',
  `training_by` varchar(500) DEFAULT 'NONE',
  `eid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`trainingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee_training` */

/*Table structure for table `employee_travel` */

DROP TABLE IF EXISTS `employee_travel`;

CREATE TABLE `employee_travel` (
  `authtravelid` bigint(20) NOT NULL AUTO_INCREMENT,
  `travel_from` date DEFAULT '0000-00-00',
  `travel_to` date DEFAULT '0000-00-00',
  `travel_location` varchar(500) DEFAULT NULL,
  `travel_description` text,
  `eid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`authtravelid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee_travel` */

/*Table structure for table `employee_travel_eid` */

DROP TABLE IF EXISTS `employee_travel_eid`;

CREATE TABLE `employee_travel_eid` (
  `travelemployeeid` bigint(20) NOT NULL AUTO_INCREMENT,
  `authtravelid` bigint(20) DEFAULT NULL,
  `eid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`travelemployeeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee_travel_eid` */

/*Table structure for table `settings_position_designation` */

DROP TABLE IF EXISTS `settings_position_designation`;

CREATE TABLE `settings_position_designation` (
  `positionid` bigint(20) NOT NULL AUTO_INCREMENT,
  `position_designation` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`positionid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `settings_position_designation` */

insert  into `settings_position_designation`(`positionid`,`position_designation`) values (1,'OJT'),(2,'PTS III'),(3,'GUARD'),(4,'JOB ORDER'),(5,'ADMINISTRATIVE AIDE III'),(6,'ADMINISTRATIVE AIDE IV'),(7,'ADMINISTRATIVE ASSISTANT III'),(8,'EDUCATION PROGRAM SPECIALIST II'),(9,'ADMINISTRATIVE AIDE VI'),(10,'EDUCATION SUPERVISOR II'),(11,'ADMINISTRATIVE OFFICE III'),(12,'CHIEF ADMINISTRATIVE OFFICE'),(13,'SUPERVISING EDUCATION PROGRAM SPECIALIST'),(14,'DIRECTOR IV');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'staff',
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`uid`,`username`,`password`,`name`,`usertype`,`status`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','Admin','admin','1'),(5,'lynnette','5f4dcc3b5aa765d61d8327deb882cf99','Lynnette','admin','1'),(6,'elvin','e77b6b04e50421f5d6e122e2b1df7d39','Elvin Casem','staff','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
