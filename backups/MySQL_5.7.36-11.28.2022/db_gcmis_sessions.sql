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
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('u45kr8k9r8nu8rvt4bhbmo0v39iumbdb','127.0.0.1',1669353677,_binary '__ci_last_regenerate|i:1669353677;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-25 12:10:20\";loggedin|b:1;|N;'),('lhedfkpjv0u1hnkc0dpqaiah2pndctk3','127.0.0.1',1669354155,_binary '__ci_last_regenerate|i:1669353677;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-25 12:10:20\";loggedin|b:1;|N;'),('scsh112ltnc4bib0lr9p74ri85of6gd8','127.0.0.1',1669430591,_binary '__ci_last_regenerate|i:1669430591;'),('rioskhgtj0cunpe36q7bdsdjtvf5vb73','127.0.0.1',1669433610,_binary '__ci_last_regenerate|i:1669433610;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-26 10:43:14\";loggedin|b:1;|N;'),('eq3nh59rmci6c7kkjfa0hogvr3n4caad','127.0.0.1',1669437799,_binary '__ci_last_regenerate|i:1669437799;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-26 10:43:14\";loggedin|b:1;|N;'),('bd8ooeeruac9o1rbujuarto6tpuqjeua','127.0.0.1',1669437799,_binary '__ci_last_regenerate|i:1669437799;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-26 10:43:14\";loggedin|b:1;|N;'),('8jthg0lpg8r0onfo69fgk1utl7kj6cld','127.0.0.1',1669456296,_binary '__ci_last_regenerate|i:1669456296;'),('rs96e346rkmdisp9egc9kqb1p4ekq74t','127.0.0.1',1669458034,_binary '__ci_last_regenerate|i:1669456296;username|s:5:\"admin\";last_login|s:19:\"2022-11-26 18:16:04\";|N;id|s:3:\"124\";userid|s:3:\"124\";loggedin|b:1;'),('t372sou7pbmr9j2gb33qmcnh70pibre1','127.0.0.1',1669466868,_binary '__ci_last_regenerate|i:1669465625;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-26 20:27:11\";loggedin|b:1;|N;'),('2d9j5s5jvuk33dmcvb8nuh4m93fuujah','127.0.0.1',1669520121,_binary '__ci_last_regenerate|i:1669520121;username|s:5:\"admin\";last_login|s:19:\"2022-11-27 10:44:24\";|N;'),('b949ghnfpv7m2e0acnd6pqd6qr8m0qmb','127.0.0.1',1669521676,_binary '__ci_last_regenerate|i:1669520121;username|s:5:\"admin\";last_login|s:19:\"2022-11-27 10:44:24\";|N;'),('v5hi6rthd2b7h24dubo6p7l6ud9g9dci','127.0.0.1',1669550577,_binary '__ci_last_regenerate|i:1669549862;'),('tamvk2eb5o28petblm8u354p3r7qqalt','127.0.0.1',1669561152,_binary '__ci_last_regenerate|i:1669561146;'),('qs3hqbhn6hklud71j9649h96cvd4oejg','127.0.0.1',1669599525,_binary '__ci_last_regenerate|i:1669599525;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-28 08:28:54\";loggedin|b:1;'),('kv48ophkp1njiu45l2sht8tqvt4nacrp','127.0.0.1',1669600898,_binary '__ci_last_regenerate|i:1669599525;username|s:5:\"admin\";last_login|s:19:\"2022-11-28 10:01:06\";id|s:3:\"124\";userid|s:3:\"124\";loggedin|b:1;|N;');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
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
