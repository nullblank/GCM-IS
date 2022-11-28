-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: db_gcmis
-- ------------------------------------------------------
-- Server version	5.7.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tblmedical`
--

DROP TABLE IF EXISTS `tblmedical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblmedical` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(10) NOT NULL,
  `m_conf` tinyint(4) DEFAULT '0',
  `m_confdesc` varchar(45) DEFAULT NULL,
  `m_medill` tinyint(4) DEFAULT '0',
  `m_medcon1` tinyint(4) DEFAULT '0',
  `m_medcon2` tinyint(4) DEFAULT '0',
  `m_medcon3` tinyint(4) DEFAULT '0',
  `m_medcon4` tinyint(4) DEFAULT '0',
  `m_medcon5` tinyint(4) DEFAULT '0',
  `m_medcon6` tinyint(4) DEFAULT '0',
  `m_medcon7` tinyint(4) DEFAULT '0',
  `m_medcon8` tinyint(4) DEFAULT '0',
  `m_medcon9` tinyint(4) DEFAULT '0',
  `m_medcon10` tinyint(4) DEFAULT '0',
  `m_medcon11` tinyint(4) DEFAULT '0',
  `m_medcon12` tinyint(4) DEFAULT '0',
  `m_medcon13` tinyint(4) DEFAULT '0',
  `m_medcon14` tinyint(4) DEFAULT '0',
  `m_medcon15` tinyint(4) DEFAULT '0',
  `m_medcon16` tinyint(4) DEFAULT '0',
  `m_medcon17` tinyint(4) DEFAULT '0',
  `m_medcon18` tinyint(4) DEFAULT '0',
  `m_medcon19` tinyint(4) DEFAULT '0',
  `m_medcon20` tinyint(4) DEFAULT '0',
  `m_medconO` varchar(80) DEFAULT NULL,
  `m_medwhen` varchar(80) DEFAULT NULL,
  `m_presmed` tinyint(4) DEFAULT '0',
  `m_presmeddesc` varchar(200) DEFAULT NULL,
  `m_pastmed` tinyint(4) DEFAULT '0',
  `m_pastmeddesc` varchar(200) DEFAULT NULL,
  `m_dis` tinyint(4) DEFAULT '0',
  `m_disdesc` varchar(200) DEFAULT NULL,
  `m_disass` tinyint(4) DEFAULT '0',
  `m_dismonth` varchar(45) DEFAULT NULL,
  `m_disyear` int(4) DEFAULT NULL,
  `m_datecreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`m_id`),
  KEY `m_stud_id_idx` (`stud_id`),
  CONSTRAINT `m_stud_id` FOREIGN KEY (`stud_id`) REFERENCES `tblstudents` (`stud_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmedical`
--

LOCK TABLES `tblmedical` WRITE;
/*!40000 ALTER TABLE `tblmedical` DISABLE KEYS */;
INSERT INTO `tblmedical` VALUES (1,32664173,1,'kjrwekwjwke',1,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,1,NULL,NULL,NULL,1,NULL,NULL,NULL,1,NULL,NULL,NULL,'','More or less a month ago',1,'Escitalopram',1,'djwdkw',1,'kajkdjwk',1,'March',2022,'2022-11-14 01:00:08');
/*!40000 ALTER TABLE `tblmedical` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-28 10:07:19
