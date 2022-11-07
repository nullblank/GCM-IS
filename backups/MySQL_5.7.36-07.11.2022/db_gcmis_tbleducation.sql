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
-- Table structure for table `tbleducation`
--

DROP TABLE IF EXISTS `tbleducation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbleducation` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(10) NOT NULL,
  `e_ename` varchar(45) DEFAULT NULL,
  `e_eyear` varchar(45) DEFAULT NULL,
  `e_ehonor` varchar(45) DEFAULT NULL,
  `e_jname` varchar(45) DEFAULT NULL,
  `e_jyear` varchar(45) DEFAULT NULL,
  `e_jhonor` varchar(45) DEFAULT NULL,
  `e_sname` varchar(45) DEFAULT NULL,
  `e_syear` varchar(45) DEFAULT NULL,
  `e_shonor` varchar(45) DEFAULT NULL,
  `e_cname` varchar(45) DEFAULT NULL,
  `e_cyear` varchar(45) DEFAULT NULL,
  `e_chonor` varchar(45) DEFAULT NULL,
  `e_datecreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`e_id`),
  KEY `e_stud_id_idx` (`stud_id`),
  CONSTRAINT `e_stud_id` FOREIGN KEY (`stud_id`) REFERENCES `tblstudents` (`stud_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbleducation`
--

LOCK TABLES `tbleducation` WRITE;
/*!40000 ALTER TABLE `tbleducation` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbleducation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-07 19:49:22
