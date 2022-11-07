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
-- Table structure for table `tblmental`
--

DROP TABLE IF EXISTS `tblmental`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblmental` (
  `mt_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(10) NOT NULL,
  `mt_die` tinyint(4) DEFAULT '0',
  `mt_q1` int(2) DEFAULT '0',
  `mt_q2` int(2) DEFAULT '0',
  `mt_q3` int(2) DEFAULT '0',
  `mt_q4` int(2) DEFAULT '0',
  `mt_q5` int(2) DEFAULT '0',
  `mt_diein` tinyint(4) DEFAULT '0',
  `mt_hurtdesc` varchar(500) DEFAULT NULL,
  `mt_hurtres` varchar(500) DEFAULT NULL,
  `mt_hurtfirst` varchar(500) DEFAULT NULL,
  `mt_hurtlast` varchar(500) DEFAULT NULL,
  `mt_hurtquan` varchar(500) DEFAULT NULL,
  `mt_hurttalk` varchar(500) DEFAULT NULL,
  `mt_datecreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mt_id`),
  KEY `mt_stud_id_idx` (`stud_id`),
  CONSTRAINT `mt_stud_id` FOREIGN KEY (`stud_id`) REFERENCES `tblstudents` (`stud_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmental`
--

LOCK TABLES `tblmental` WRITE;
/*!40000 ALTER TABLE `tblmental` DISABLE KEYS */;
INSERT INTO `tblmental` VALUES (1,34248190,1,5,3,0,2,3,0,'','','',NULL,NULL,'','2022-10-28 06:01:45'),(2,32644172,1,6,6,8,3,3,1,'with a stick','because of the stick','how old was the stick','1','1','12312','2022-10-30 14:51:57');
/*!40000 ALTER TABLE `tblmental` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-07 19:49:23
