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
-- Table structure for table `tblstudents`
--

DROP TABLE IF EXISTS `tblstudents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblstudents` (
  `stud_id` int(10) NOT NULL,
  `s_first` varchar(50) DEFAULT NULL,
  `s_last` varchar(50) DEFAULT NULL,
  `s_mi` varchar(45) DEFAULT NULL,
  `s_course` varchar(45) DEFAULT NULL,
  `s_school` varchar(45) DEFAULT NULL,
  `s_year` varchar(45) DEFAULT NULL,
  `s_schoolyear` varchar(45) DEFAULT NULL,
  `s_stat` varchar(80) DEFAULT NULL,
  `s_email` varchar(80) DEFAULT NULL,
  `s_gender` varchar(6) DEFAULT NULL,
  `s_bday` varchar(45) DEFAULT NULL,
  `s_age` int(2) DEFAULT NULL,
  `s_eth` varchar(45) DEFAULT NULL,
  `s_rel` varchar(80) DEFAULT NULL,
  `s_marstat` varchar(45) DEFAULT NULL,
  `s_nspouse` varchar(45) DEFAULT NULL,
  `s_nchild` varchar(45) DEFAULT NULL,
  `s_brgy` varchar(45) DEFAULT NULL,
  `s_muni` varchar(45) DEFAULT NULL,
  `s_provi` varchar(45) DEFAULT NULL,
  `s_nor` varchar(45) DEFAULT NULL,
  `s_guardn` varchar(45) DEFAULT NULL,
  `s_guardadd` varchar(45) DEFAULT NULL,
  `s_guardrel` varchar(45) DEFAULT NULL,
  `s_guardno` varchar(11) DEFAULT NULL,
  `s_datecreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstudents`
--

LOCK TABLES `tblstudents` WRITE;
/*!40000 ALTER TABLE `tblstudents` DISABLE KEYS */;
INSERT INTO `tblstudents` VALUES (32644170,'Diego','Diego','G','BSED',NULL,'1',NULL,'Freshman','nullblank@protonmail.com','Male','10/12/1999',23,'Ilocano','Iglesia','Single','','','Vista Alegre','Bayombong','Isabela','Boarding House','','','','','2022-11-28 01:56:40'),(32644171,'Bernadette','Beltran','K','BS PSYCHOLOGY',NULL,'1',NULL,'Freshman','Benjohn@grr.la','Female','11/10/1994',28,'Gaddang','Mormon','Married','Ben Jason','2','Vista Alegre','Bayombong','Isabela','Apartment','','','','','2022-11-28 02:00:51'),(32644172,'Diego Gerard','Diego','A','BSIT','','1','','Freshman','nullblank@protonmail.com','Male','',0,'Bisaya','Saint Mary\'s University','Single','','','Vista Alegre','Bayombong','Cagayan','Dormitory','Diego Gerard Diego','#40 Old Hospital Street','','+6394997449','2022-10-30 14:50:42'),(32664173,'Sylvia Cindy','Diego','G','BS PSYCHOLOGY','','2','','Freshman','nullblank@protonmail.com','Female','10/12/1999',23,'Ilocano','Roman Catholic','Single','','','Vista Alegre','Bayombong','Nueva Vizcaya','Apartment','Diego Gerard Diego','#40 Old Hospital Street','Father','+6394997449','2022-11-14 00:58:37'),(34248190,'Ameer Aiman','Hassan','B','BSIT',NULL,'4',NULL,'Freshman','ameeraiman@outlook.com','Male','01/29/2000',22,'Tagalog','Muslim','Single','','','Vista Alegre','Bayombong','Nueva Vizcaya','Apartment','','','','0','2022-10-28 05:57:03'),(34840200,'Rey','Esperanzate','G','BSIT',NULL,'3',NULL,'Freshman','prnztchrey20@gmail.com','Male','01/20/2002',20,'Ilocano','Roman Catholic','Single','','','Vista Alegre','Bayombong','Nueva Vizcaya','Family Home','','','','','2022-11-21 04:29:17'),(39525220,'Jenzon','Baquiran','N','BSIT',NULL,'1',NULL,'Freshman','baquiranjenzon@gmail.com','Male','10/01/2003',19,'Ilocano','Iglesia','Single','','','Vista Alegre','Solano','Nueva Vizcaya','Family Home','f','dfdf','fdfdf','dfdf','2022-11-21 05:11:42');
/*!40000 ALTER TABLE `tblstudents` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-28 10:07:18
