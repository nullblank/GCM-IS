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
-- Table structure for table `tblhome`
--

DROP TABLE IF EXISTS `tblhome`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblhome` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(10) NOT NULL,
  `h_fname` varchar(45) DEFAULT NULL,
  `h_fage` varchar(45) DEFAULT NULL,
  `h_fstat` varchar(45) DEFAULT NULL,
  `h_feduc` varchar(45) DEFAULT NULL,
  `h_fjob` varchar(45) DEFAULT NULL,
  `h_faddr` varchar(200) DEFAULT NULL,
  `h_fno` int(11) DEFAULT NULL,
  `h_fdesc` varchar(800) DEFAULT NULL,
  `h_mname` varchar(45) DEFAULT NULL,
  `h_mage` varchar(45) DEFAULT NULL,
  `h_mstat` varchar(45) DEFAULT NULL,
  `h_meduc` varchar(45) DEFAULT NULL,
  `h_mjob` varchar(45) DEFAULT NULL,
  `h_maddr` varchar(200) DEFAULT NULL,
  `h_mno` int(11) DEFAULT NULL,
  `h_mdesc` varchar(800) DEFAULT NULL,
  `h_ofwchild` tinyint(4) DEFAULT '0',
  `h_ofwrel` varchar(45) DEFAULT NULL,
  `h_ofwemail` varchar(45) DEFAULT NULL,
  `h_pmarstat` varchar(80) DEFAULT NULL,
  `h_pecostat` varchar(80) DEFAULT NULL,
  `h_pbirthorder` varchar(45) DEFAULT NULL,
  `h_kmsdep` tinyint(4) DEFAULT '0',
  `h_kmsdeprel` varchar(45) DEFAULT NULL,
  `h_kms` tinyint(4) DEFAULT '0',
  `h_kmsrel` varchar(45) DEFAULT NULL,
  `h_kmsjk` tinyint(4) DEFAULT '0',
  `h_kmsjkrel` varchar(45) DEFAULT NULL,
  `h_kmsdrinkrel_f` tinyint(4) DEFAULT '0',
  `h_kmsdrinkrel_m` tinyint(4) DEFAULT '0',
  `h_kmsdrinkrel_bs` tinyint(4) DEFAULT '0',
  `h_kmsdrinkrel_ua` tinyint(4) DEFAULT '0',
  `h_kmsdrinkrel_me` tinyint(4) DEFAULT '0',
  `h_kmsdrinkrel_g` tinyint(4) DEFAULT '0',
  `h_kmsdrinkrel_na` tinyint(4) DEFAULT '0',
  `h_datecreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`h_id`),
  KEY `h_stud_id_idx` (`stud_id`),
  CONSTRAINT `h_stud_id` FOREIGN KEY (`stud_id`) REFERENCES `tblstudents` (`stud_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblhome`
--

LOCK TABLES `tblhome` WRITE;
/*!40000 ALTER TABLE `tblhome` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblhome` ENABLE KEYS */;
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
