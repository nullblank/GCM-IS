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
INSERT INTO `sessions` VALUES ('qrmlmtmdm20d9mvbab418p5bct4uq16i','127.0.0.1',1667456317,_binary '__ci_last_regenerate|i:1667453482;username|s:5:\"admin\";created|N;last_login|s:19:\"2022-11-03 12:34:28\";id|s:2:\"40\";userid|s:2:\"40\";loggedin|b:1;'),('asa6tu3t6tvvn68cqbpsiveft8cbtiuf','127.0.0.1',1667141593,_binary '__ci_last_regenerate|i:1667141272;username|s:5:\"admin\";created|N;last_login|s:19:\"2022-10-30 22:52:22\";|N;'),('6oehcem2p6897mgj6n7e962f0nie053o','127.0.0.1',1667453482,_binary '__ci_last_regenerate|i:1667453482;username|s:5:\"admin\";created|N;last_login|s:19:\"2022-11-03 12:34:28\";id|s:2:\"40\";userid|s:2:\"40\";loggedin|b:1;'),('8kt6i6lesf40gh7m0cjj0hb5hiff6slr','127.0.0.1',1666949521,_binary '__ci_last_regenerate|i:1666949521;'),('nd1asmekl76jqb0g76e7lq303bhsib70','127.0.0.1',1666938417,_binary '__ci_last_regenerate|i:1666936222;username|s:5:\"admin\";created|N;last_login|s:19:\"2022-10-28 14:07:06\";|N;'),('73vertmu9252rfmhmsmcb74t1t52vukj','127.0.0.1',1666936222,_binary '__ci_last_regenerate|i:1666936222;'),('lnsoms40ri394ss4darumbd0a7vj9d75','127.0.0.1',1666873425,_binary '__ci_last_regenerate|i:1666871755;username|s:5:\"admin\";created|N;last_login|s:19:\"2022-10-27 20:23:28\";|N;'),('38a3li2hqh3eeg6te72nu9joc5aft8eo','127.0.0.1',1666705392,_binary '__ci_last_regenerate|i:1666702668;'),('1bdfmmr4c3nh0ue86n9l35ma0godkmji','127.0.0.1',1666871755,_binary '__ci_last_regenerate|i:1666871755;'),('i8jdu2rq0m02r7lol0iqkhtoclou5eck','127.0.0.1',1666702668,_binary '__ci_last_regenerate|i:1666702668;'),('14evnfjgmtl0no8sd5c95hth51a83fvo','127.0.0.1',1666682015,_binary '__ci_last_regenerate|i:1666680280;username|s:5:\"admin\";created|N;last_login|s:19:\"2022-10-25 15:12:15\";|N;'),('fj0r9qu6omtgs18t5d1hmqr6vk4kloeg','127.0.0.1',1666680280,_binary '__ci_last_regenerate|i:1666680280;username|s:5:\"admin\";created|N;last_login|s:19:\"2022-10-25 13:23:43\";|N;'),('kb5f7agpt4c9ogfj2h0ndu56eaaqitt9','127.0.0.1',1666672895,_binary '__ci_last_regenerate|i:1666672895;'),('cf7t3k3akegikov92035k80m0sjlbsq4','127.0.0.1',1666675996,_binary '__ci_last_regenerate|i:1666675996;username|s:5:\"admin\";created|N;last_login|s:19:\"2022-10-25 13:23:43\";|N;'),('q2qpj7kn78u17hkg20eqc6glatr51pt1','127.0.0.1',1667540367,_binary '__ci_last_regenerate|i:1667540367;id|s:2:\"40\";username|s:5:\"admin\";created|N;userid|s:2:\"40\";last_login|s:19:\"2022-11-04 12:12:25\";loggedin|b:1;'),('9hs3h2ul0lu2c1m14ilj7v47p1vtdnl8','127.0.0.1',1667545333,_binary '__ci_last_regenerate|i:1667545333;username|s:5:\"admin\";created|N;last_login|s:19:\"2022-11-04 14:25:32\";|N;id|s:3:\"124\";userid|s:3:\"124\";loggedin|b:1;'),('j2m5dv80h4d0ub8rl8fekg95c5aelbh0','127.0.0.1',1667549147,_binary '__ci_last_regenerate|i:1667549147;username|s:5:\"admin\";created|N;last_login|s:19:\"2022-11-04 14:25:32\";|N;id|s:3:\"124\";userid|s:3:\"124\";loggedin|b:1;'),('0t82bfsns2cl5c9jjcohq8v8sv25et53','127.0.0.1',1667551926,_binary '__ci_last_regenerate|i:1667549147;username|s:5:\"admin\";created|N;last_login|s:19:\"2022-11-04 16:26:08\";|N;id|s:3:\"124\";userid|s:3:\"124\";loggedin|b:1;'),('7dfg8bd9j6bgjodtbkjv6q3jtsi6kqe1','127.0.0.1',1667561020,_binary '__ci_last_regenerate|i:1667560649;username|s:5:\"admin\";last_login|s:19:\"2022-11-04 19:18:17\";'),('e5cp8d2t18gvpnlmtr63qhdmfljo3eoe','127.0.0.1',1667704979,_binary '__ci_last_regenerate|i:1667704979;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-06 10:43:12\";loggedin|b:1;|N;'),('58cavd1bakjj4dd9o2ok4e244kg8dqig','127.0.0.1',1667708063,_binary '__ci_last_regenerate|i:1667708063;username|s:5:\"admin\";last_login|s:19:\"2022-11-06 10:43:12\";|N;'),('onsh6bugv881ed7je6ih48v81kh1g917','127.0.0.1',1667712488,_binary '__ci_last_regenerate|i:1667712488;username|s:5:\"admin\";last_login|s:19:\"2022-11-06 12:21:40\";|N;id|s:3:\"124\";userid|s:3:\"124\";loggedin|b:1;'),('o6vin0s4a0bjk6t3t15nmnd75785ineg','127.0.0.1',1667720015,_binary '__ci_last_regenerate|i:1667720015;username|s:5:\"admin\";last_login|s:19:\"2022-11-06 14:15:21\";|N;id|s:3:\"124\";userid|s:3:\"124\";loggedin|b:1;'),('88m829p2r1l7u1st5kae6p098auvcd3u','127.0.0.1',1667723471,_binary '__ci_last_regenerate|i:1667723471;username|s:5:\"admin\";last_login|s:19:\"2022-11-06 14:15:21\";|N;id|s:3:\"124\";userid|s:3:\"124\";loggedin|b:1;'),('aa7mahigmhr0l89vdcmivmab66iaaskn','127.0.0.1',1667731344,_binary '__ci_last_regenerate|i:1667731344;username|s:5:\"admin\";last_login|s:19:\"2022-11-06 14:15:21\";|N;id|s:3:\"124\";userid|s:3:\"124\";loggedin|b:1;'),('ravjn6pmh11agubtfhs9r7h644bu7alv','127.0.0.1',1667731385,_binary '__ci_last_regenerate|i:1667731344;username|s:5:\"admin\";last_login|s:19:\"2022-11-06 14:15:21\";|N;id|s:3:\"124\";userid|s:3:\"124\";loggedin|b:1;'),('p44r007uglml2qsk8rv17lafa16bd9ag','127.0.0.1',1667791541,_binary '__ci_last_regenerate|i:1667791541;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-07 10:35:26\";loggedin|b:1;|N;'),('uvvu3tqek950mo6shh0hnafqr05mdpte','127.0.0.1',1667796335,_binary '__ci_last_regenerate|i:1667796335;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-07 10:35:26\";loggedin|b:1;|N;'),('s40cufq1uufefi26povtmtscgr9s7v96','127.0.0.1',1667799339,_binary '__ci_last_regenerate|i:1667799339;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-07 10:35:26\";loggedin|b:1;|N;'),('aom04d701grrjvr9kt1hj2ij60itj82f','127.0.0.1',1667805936,_binary '__ci_last_regenerate|i:1667805936;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-07 10:35:26\";loggedin|b:1;|N;'),('88gki39kv5v4ouv1kik8iausemgmak71','127.0.0.1',1667809861,_binary '__ci_last_regenerate|i:1667809861;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-07 10:35:26\";loggedin|b:1;|N;'),('mb94r23e7v8bhuc6161dugglomq9tgd9','127.0.0.1',1667811777,_binary '__ci_last_regenerate|i:1667809861;id|s:3:\"124\";username|s:5:\"admin\";userid|s:3:\"124\";last_login|s:19:\"2022-11-07 10:35:26\";loggedin|b:1;|N;');
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

-- Dump completed on 2022-11-07 19:49:21
