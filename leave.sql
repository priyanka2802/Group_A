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
  `approving` varchar(30) DEFAULT NULL,
  `recommending` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casualleaves`
--

LOCK TABLES `casualleaves` WRITE;
/*!40000 ALTER TABLE `casualleaves` DISABLE KEYS */;
INSERT INTO `casualleaves` VALUES (1,'23827',2,'2018-04-13',NULL,'g',7676,'Recommended','cse160001049@iiti.ac.in','cse160001049@iiti.ac.in'),(2,'23827',2,'2018-04-13',NULL,'g',7676,'Recommended','cse160001049@iiti.ac.in','cse160001049@iiti.ac.in'),(3,'23827',2,'2018-04-13',NULL,'g',7676,'Recommended','cse160001049@iiti.ac.in','cse160001049@iiti.ac.in'),(4,'23827',2,'2018-04-06',NULL,'ff',5,'Recommended','cse160001049@iiti.ac.in','cse160001049@iiti.ac.in'),(5,'23827',2,'2018-04-06',NULL,'ff',5,'Recommended','cse160001049@iiti.ac.in','cse160001049@iiti.ac.in'),(6,'23827',4,'2018-04-04','2018-04-07','vytvyt',5566,'Recommended','cse160001049@iiti.ac.in','cse160001049@iiti.ac.in'),(7,'11221',3,'2018-04-04','2018-04-06','gg',6767,'Application submitted','cse160001049@iiti.ac.in','cse160001048@iiti.ac.in'),(8,'11221',4,'2018-04-14','2018-04-17','yty',566,'Application submitted','cse160001049@iiti.ac.in','cse160001048@iiti.ac.in'),(9,'11221',4,'2018-04-01','2018-04-04','tyty',7767,'Application submitted','cse160001049@iiti.ac.in','cse160001048@iiti.ac.in'),(10,'11221',3,'2018-04-21','2018-04-23','ttyt',67677,'Application submitted','cse160001049@iiti.ac.in','cse160001048@iiti.ac.in'),(11,'11221',3,'2018-05-16','2018-05-18','tyty',76677,'Application submitted','cse160001049@iiti.ac.in','cse160001048@iiti.ac.in'),(12,'11221',4,'2018-06-15','2018-06-18','ytyt',5677,'Application submitted','cse160001049@iiti.ac.in','cse160001048@iiti.ac.in'),(13,'11221',4,'2018-07-06','2018-07-09','tr',565665,'Application submitted','cse160001049@iiti.ac.in','cse160001048@iiti.ac.in'),(14,'11221',4,'2018-07-29','2018-08-01','tr',565665,'Application submitted','cse160001049@iiti.ac.in','cse160001048@iiti.ac.in'),(15,'11221',4,'2018-11-10','2018-11-13','tr',565665,'Rejected','cse160001049@iiti.ac.in','cse160001048@iiti.ac.in');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `holidays`
--

LOCK TABLES `holidays` WRITE;
/*!40000 ALTER TABLE `holidays` DISABLE KEYS */;
INSERT INTO `holidays` VALUES (1,'2018-04-18','asas'),(2,'2018-04-05','dadsad');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leavebalances`
--

LOCK TABLES `leavebalances` WRITE;
/*!40000 ALTER TABLE `leavebalances` DISABLE KEYS */;
INSERT INTO `leavebalances` VALUES (1,'23827',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-04-04 13:42:27'),(2,'11221',199,14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-04-04 13:51:34'),(3,'1254',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-04-05 13:07:19');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_03_14_172205_create_casualleaves_table',1),(4,'2018_03_15_170317_create_recommends_table',1),(5,'2018_04_03_123027_create_leavebalances_table',1),(6,'2018_04_04_112748_create_holidays_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `onduties`
--

DROP TABLE IF EXISTS `onduties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `onduties` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `Leave_info` text,
  `conference` text,
  `contact` bigint(20) DEFAULT NULL,
  `status` text,
  `pdf_file` text,
  `approving` varchar(30) DEFAULT NULL,
  `recommending` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `onduties`
--

LOCK TABLES `onduties` WRITE;
/*!40000 ALTER TABLE `onduties` DISABLE KEYS */;
INSERT INTO `onduties` VALUES (1,'11221','2018-04-05','2018-04-07','yuyu','National_intl_conference',66776,'Application submitted','1522760064download.png','cse160001049@iiti.ac.in','cse160001048@iiti.ac.in'),(2,'11221','2018-04-06','2018-04-15','ytyy76','National_intl_conference',767678,'Application submitted','1522849293.png','cse160001049@iiti.ac.in','cse160001048@iiti.ac.in');
/*!40000 ALTER TABLE `onduties` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
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
  `joined_date` date NOT NULL,
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
  `achievement_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caste_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aadhaar_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pan_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disability_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_emp_id_unique` (`emp_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'11221','hvvhjv','general','cse160001057@iiti.ac.in','$2y$10$qVbnXKiGOBohw3yd3.xcfudEaVT.WkpqYx0nUahOIj22z6e..7SXG','2017-04-23','0000-00-00','M','bxjj','bhbhj','hbhj',12345678890,'bhbh','hbhh','N',12,'hbh','cs','hbhbh','777','54665',111111111113,1802,'7',777,80,'1522848703.jpeg','15228487031522698369MST using Union Find data structure.pdf','15228487031522760824download.png','15228487031522698369.png','15228487031522760064.png','15228487031522760064download.png','RceIsBbS3AQQE0300zoFQrKhlo3ZwE4aYS2kNLaFUgHHWpEb8HBaNkgqkxDP','2018-04-04 08:01:43','2018-04-04 08:01:43'),(2,'23827','hshq','recommending','cse160001048@iiti.ac.in','$2y$10$Y/MeeF2L0MEDnhfyLbWLH.oNgEAVfnVp4tCg03gYpSif/WewmJkm6','2017-04-03','0000-00-00','M','888','8','8',888888,'88','8','N',8,'8','hh','8','8','8',266666666664,30,'8',8,100,'1522849293.png','15228492931522698369MST using Union Find data structure.pdf','15228492931522855340.png','15228492931522760824download.png','15228492931522433787.jpeg','15228492931522855054download.png','eRDTUlOnYckdFbsOtLUnnbGVYJCbMHuMs25YNHStjMGjv3LQOw3mazF091Yd','2018-04-04 08:11:33','2018-04-04 08:11:33'),(4,'238','hshq','approval','cse160001049@iiti.ac.in','$2y$10$A/A9U653cRIwvjxvE85k1un8qafqm5bJT3C5sPeKP8kNzUGe5jucm','2017-04-03','0000-00-00','F','888','8','8',888,'88','8','N',8,'8','hh','8','8','8',266666366662,30,'8',8,100,'1522849347.png','15228493471522698369MST using Union Find data structure.pdf','15228493471522855340.png','15228493471522760824download.png','15228493471522433787.jpeg','15228493471522855054download.png','Q9kxwutZljkZ79sQ1ys76fL0GWXt6Z7MRfRtRhhOdo8WYtWdBa1xZii6Alu9','2018-04-04 08:12:27','2018-04-04 08:12:27'),(5,'9832','jnjkankj','admin','cse160001017@iiti.ac.in','$2y$10$3.mMV80EIQGMqRVVU.s7ZebjqfV2/GHaiRQZTrOP6CIc/WW2HJmku','2017-03-04','0000-00-00','M','7','7','7',77,'7','7','N',7,'7','h','7','7','7',999999999999,29,'7',7,199,'1522849894.png','15228498941522698369MST using Union Find data structure.pdf','15228498941522857541.png','15228498941522849347.png','15228498941522855340download.png','15228498941522855054download.png','Xhp6pymoweDLsuaweHZig4lDbDJqUqyjvWb4mEmLuIMC2OAGAdxnRYGxN7Kg','2018-04-04 08:21:34','2018-04-04 08:21:34');
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

-- Dump completed on 2018-04-06 22:41:14
