-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: leave
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.17.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `casualleaves`
--

DROP TABLE IF EXISTS `casualleaves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casualleaves` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) DEFAULT NULL,
  `no_of_days` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `purpose` text,
  `contact_no` bigint(20) DEFAULT NULL,
  `status` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casualleaves`
--

LOCK TABLES `casualleaves` WRITE;
/*!40000 ALTER TABLE `casualleaves` DISABLE KEYS */;
INSERT INTO `casualleaves` VALUES (2,'8',7,'2018-03-13',NULL,'jj',9,'Approved'),(3,'8',8,'2018-03-08',NULL,'axaxu',8,'Rejected'),(4,'88',1,'2018-03-07',NULL,'dghdgh',11,'Reverted Back'),(6,'8',8,'2018-03-02',NULL,'hbhjbbbii',898799,'Approved'),(7,'8',8998,'2018-03-02',NULL,'uiui',98,'Approved'),(8,'8',898,'2018-03-02',NULL,'hbhhshxjskk',98,'Rejected'),(9,'9',8,'2018-03-09',NULL,'jhiuuiiu',899,'Approved'),(10,'8',4,'2018-04-25','2018-04-29','tfyt',5656,'Recommended'),(11,'8',4,'2018-04-25','2018-04-29','po',6776,'Recommended'),(12,'8',4,'2018-04-25','2018-04-28','qhedrfaytaugabb',67567,'Approved');
/*!40000 ALTER TABLE `casualleaves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `holidays`
--

DROP TABLE IF EXISTS `holidays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `holidays` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Description` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `holidays`
--

LOCK TABLES `holidays` WRITE;
/*!40000 ALTER TABLE `holidays` DISABLE KEYS */;
INSERT INTO `holidays` VALUES (1,'2018-04-27','xgsav'),(2,'2018-04-28','xaxahb');
/*!40000 ALTER TABLE `holidays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leavebalances`
--

DROP TABLE IF EXISTS `leavebalances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leavebalances` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) DEFAULT NULL,
  `clbalance` int(11) DEFAULT NULL,
  `specialcl` int(11) DEFAULT NULL,
  `onduty` int(11) DEFAULT NULL,
  `hpl` int(11) DEFAULT NULL,
  `el` int(11) DEFAULT NULL,
  `vacation` int(11) DEFAULT NULL,
  `eol` int(11) DEFAULT NULL,
  `maternity` int(11) DEFAULT NULL,
  `paternity` int(11) DEFAULT NULL,
  `study` int(11) DEFAULT NULL,
  `td` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leavebalances`
--

LOCK TABLES `leavebalances` WRITE;
/*!40000 ALTER TABLE `leavebalances` DISABLE KEYS */;
INSERT INTO `leavebalances` VALUES (1,'8',879,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-04-04 11:34:03');
/*!40000 ALTER TABLE `leavebalances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (13,'2018_03_12_185601_casualleave',1),(46,'2018_03_13_063818_create_casual_leaves_table',2),(51,'2014_10_12_000000_create_users_table',3),(52,'2014_10_12_100000_create_password_resets_table',3),(53,'2018_03_14_172205_create_casualleaves_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recommends`
--

DROP TABLE IF EXISTS `recommends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recommends` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `discipline` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `emp_id` (`emp_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recommends`
--

LOCK TABLES `recommends` WRITE;
/*!40000 ALTER TABLE `recommends` DISABLE KEYS */;
/*!40000 ALTER TABLE `recommends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `sex` enum('M','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` bigint(20) NOT NULL,
  `salutation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `physically_disabled` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnt_no` bigint(20) NOT NULL,
  `appointed_on_quota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discipline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `achievements` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hometown` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pan_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aadhaar` bigint(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `children` int(11) NOT NULL,
  `cl_balance` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_emp_id_unique` (`emp_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'8','u','recommending','a@b.com','$2y$10$c4P5nctgOmQhuZT1J.jV3e1moYgQMUwzh9N214I39fji/4qQRre7u','0011-11-11','M','l','l','l',99,'l','l','N',9,'l','l','l','l','9',888888888888,9,'l',9,9,'9','oELHBBBUXt5UevwBypmcyH4Sus8ZzwtuSpdNom1XbfdrqnG7dCjJh7asJ3TU','2018-03-14 11:55:12','2018-03-14 11:55:12'),(2,'88','uuuu','general','priyankarotte@gmail.com','$2y$10$bx2GeEOLlab.6hxIm7ittuWf/gOaMprBwyBgfI1/HAYwMY1O8HEu.','0077-07-07','M','jj','j','j',8,'8','8','N',8,'8','8','8','9','8',777777777777,8,'8',8,88,'8','0wEOgk9KrnKIDkXVfmJr5D2ZNkPNCfof5hIwie68dq5Un5NX4AiFY4zg9eGV','2018-03-14 13:22:39','2018-03-14 13:22:39'),(3,'9','9','approval','cse160001057@iiti.ac.in','$2y$10$Js.Qor8vGoB0CTrkEiBNneyMlqIe5qSPXqpZ4bIhEj4xzask9l1ru','0088-08-08','M','8','8','8',8,'8','88','N',8,'8','8','8','8','8',888888888888,8,'8',8,8,'8','n9YB3UvC5YJpqHBNoq7Z9zyCfuPxTdzvYL3o91pwqDISJQGZfJSV5AZXc1tw','2018-03-15 08:16:29','2018-03-15 08:16:29');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-04 17:32:51
