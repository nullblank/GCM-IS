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
-- Table structure for table `audit`
--

DROP TABLE IF EXISTS `audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(80) DEFAULT NULL,
  `tablename` varchar(45) DEFAULT NULL,
  `userid` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=419 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit`
--

LOCK TABLES `audit` WRITE;
/*!40000 ALTER TABLE `audit` DISABLE KEYS */;
INSERT INTO `audit` VALUES (319,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:45:37'),(318,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:45:34'),(317,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:45:29'),(316,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:45:23'),(315,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:45:19'),(313,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:44:58'),(314,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:45:18'),(311,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:44:45'),(312,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:44:48'),(310,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:44:44'),(308,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:44:12'),(309,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:44:43'),(306,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:43:44'),(307,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:44:09'),(305,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:43:32'),(304,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:43:24'),(303,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:42:57'),(302,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:41:15'),(301,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:37:53'),(300,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:36:25'),(299,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:34:55'),(298,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:34:14'),(297,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:33:49'),(296,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:33:05'),(295,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:32:42'),(294,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:32:38'),(293,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:31:43'),(292,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:31:40'),(291,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:30:54'),(290,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:18:58'),(289,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:18:53'),(288,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:07:53'),(287,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 05:18:07'),(286,'UPDATED the record of Sylvia Cindy Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 05:18:04'),(285,'UPDATED the record of Sylvia Cindy Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 05:17:58'),(284,'UPDATED the record of Sylvia Cindy Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 05:17:28'),(283,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-21 09:26:29'),(282,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-21 09:13:54'),(281,'UPDATED the record of Jenzon Baquiran','tblstudents','124','Diego Gerard Angeles Diego','2022-11-21 05:13:48'),(280,'REGISTERED the record of Jenzon Baquiran','tblstudent','39525220','Jenzon Baquiran','2022-11-21 05:11:42'),(279,'REGISTERED the record of Rey Esperanzate','tblstudent','34840200','Rey Esperanzate','2022-11-21 04:29:17'),(278,'UPDATED the record of Diego Gerard Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-19 10:36:41'),(277,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-19 10:36:28'),(276,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-19 10:34:25'),(275,'UPDATED the record of  ','tblstudents','124','Diego Gerard Angeles Diego','2022-11-19 08:53:07'),(274,'UPDATED the record of Sylvia Cindy Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-19 06:05:51'),(273,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-19 06:01:47'),(272,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-19 06:01:41'),(271,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-19 06:01:28'),(270,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-19 06:01:22'),(269,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-19 06:00:22'),(268,'UPDATED the record of Sylvia Cindy Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-19 06:00:19'),(267,'UPDATED the record of Diego Gerard Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-18 06:06:36'),(266,'UPDATED the record of Diego Gerard Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-18 06:06:30'),(265,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-17 11:37:58'),(264,'UPDATED the record of Sylvia Cindy Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-17 11:37:54'),(263,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-17 02:11:52'),(262,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-17 02:09:30'),(261,'UPDATED the record of Sylvia Cindy Diego33','tblstudents','124','Diego Gerard Angeles Diego','2022-11-17 00:02:18'),(260,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-17 00:02:11'),(259,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 10:01:53'),(258,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 10:01:43'),(257,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:50:50'),(256,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:50:35'),(255,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:50:30'),(254,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:48:25'),(253,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:48:18'),(252,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:47:45'),(251,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:34:26'),(250,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:33:40'),(249,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:33:35'),(248,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:33:10'),(247,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:33:02'),(246,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:32:58'),(245,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:32:05'),(244,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:32:00'),(243,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:31:37'),(242,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:31:29'),(241,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:29:05'),(240,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:27:14'),(239,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:24:59'),(238,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 09:13:40'),(237,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-16 06:29:49'),(320,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:45:40'),(321,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:45:43'),(322,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:45:50'),(323,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:46:48'),(324,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:46:53'),(325,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:47:05'),(326,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:47:36'),(327,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:48:41'),(328,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-23 08:48:42'),(329,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-23 08:48:46'),(330,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:39:58'),(331,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:41:53'),(332,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:42:21'),(333,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:43:02'),(334,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:43:24'),(335,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:43:28'),(336,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:43:31'),(337,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:46:22'),(338,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:46:24'),(339,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:47:07'),(340,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:47:24'),(341,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:47:39'),(342,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:48:10'),(343,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:48:51'),(344,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:49:38'),(345,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:50:23'),(346,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:55:09'),(347,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 02:55:16'),(348,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:55:25'),(349,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:56:10'),(350,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:58:03'),(351,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:58:14'),(352,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:59:00'),(353,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:59:01'),(354,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:59:01'),(355,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:59:02'),(356,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:59:02'),(357,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 02:59:03'),(358,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:00:51'),(359,'UPDATED the record of Sylvia Cindy Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:01:21'),(360,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:01:28'),(361,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:01:31'),(362,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:03:30'),(363,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:03:40'),(364,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:03:45'),(365,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:03:49'),(366,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:03:51'),(367,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:03:55'),(368,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:06:32'),(369,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:07:16'),(370,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:07:24'),(371,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:10:12'),(372,'UPDATED the record of Diego Dieg2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:11:50'),(373,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:11:53'),(374,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:11:55'),(375,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:13:23'),(376,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:13:27'),(377,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:14:11'),(378,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:14:52'),(379,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:15:27'),(380,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:15:30'),(381,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:15:34'),(382,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:16:44'),(383,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:16:52'),(384,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:16:54'),(385,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:16:56'),(386,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:16:59'),(387,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:17:04'),(388,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:19:42'),(389,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:19:47'),(390,'UPDATED the record of Diego Diego1','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:19:54'),(391,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:19:58'),(392,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:20:05'),(393,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:22:13'),(394,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:23:16'),(395,'UPDATED the record of Diego Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 03:23:22'),(396,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:23:27'),(397,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:23:29'),(398,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 03:23:31'),(399,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 04:12:46'),(400,'UPDATED the record of Diego Diego2','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 04:12:50'),(401,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:12:56'),(402,'UPDATED the record of Diego Gerard Diego','tblstudents','124','Diego Gerard Angeles Diego','2022-11-24 04:18:40'),(403,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:27:04'),(404,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:28:28'),(405,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:31:10'),(406,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:31:19'),(407,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:32:45'),(408,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:33:02'),(409,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:33:41'),(410,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:34:19'),(411,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:34:51'),(412,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:37:24'),(413,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:37:38'),(414,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-24 04:41:45'),(415,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-27 02:56:59'),(416,'UPDATED the record of  ','tbleducation','124','Diego Gerard Angeles Diego','2022-11-27 02:57:09'),(417,'REGISTERED the record of Diego Diego','tblstudent','32644170','Diego Diego','2022-11-28 01:56:40'),(418,'REGISTERED the record of Bernadette Beltran','tblstudent','32644171','Bernadette Beltran','2022-11-28 02:00:51');
/*!40000 ALTER TABLE `audit` ENABLE KEYS */;
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