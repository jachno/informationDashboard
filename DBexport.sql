-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: c9
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

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
-- Table structure for table `backlogs`
--

DROP TABLE IF EXISTS `backlogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `backlogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `targetedDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `backlogs`
--

LOCK TABLES `backlogs` WRITE;
/*!40000 ALTER TABLE `backlogs` DISABLE KEYS */;
INSERT INTO `backlogs` VALUES (1,'Save For Later','Productionising the save for later experiment','','2016-03-14 15:44:57','2016-03-15 18:16:45','5'),(2,'Sawley/Spalding Patch Testing','Os level patching on fusion boxes','','2016-03-14 15:45:56','2016-03-16 09:23:15','1'),(3,'Endeca Spidering ','Testing of Endaca output jobs, now split in to 4 executions','','2016-03-14 16:37:44','2016-03-15 17:42:09','8'),(4,'Workload Manager Revisions','Test the removal of the workload managers ','','2016-03-14 21:01:39','2016-03-15 18:16:34','99'),(5,'SAS RTDM testing','testing of the new PSO solution from the datahubs project','','2016-03-14 21:01:42','2016-03-15 18:16:16','99'),(6,'AppDynamics ','pre/post baseline test of the fusion app dynamics component','','2016-03-15 13:31:42','2016-03-16 09:23:21','2'),(7,'Customer Affordability Checks','Changes to the application process','','2016-03-15 14:12:33','2016-03-16 09:32:56','99'),(8,' JVM changes on Commerce and Gateway domains','More Detail Needed','','2016-03-16 10:15:17','2016-03-16 10:15:17','99'),(9,'Apache upgrade on gradbach','urrent version has security vulnerabilities and needs upgrading to 2.2.31','','2016-03-16 10:15:57','2016-03-16 10:15:57','99'),(10,'Arg 2 Email','Testing PDF letters ','','2016-03-17 11:02:23','2016-03-17 11:02:23','99'),(11,'Unified Extract Failure','ETT-2031','','2016-03-17 14:21:26','2016-03-17 14:21:26','99');
/*!40000 ALTER TABLE `backlogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2016_03_08_203701_create_timelines_table',1),('2016_03_09_171828_create_backlog',2),('2016_03_15_165749_create_users_table',3),('2016_03_15_171256_update_backlog_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timelines`
--

DROP TABLE IF EXISTS `timelines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timelines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timelines`
--

LOCK TABLES `timelines` WRITE;
/*!40000 ALTER TABLE `timelines` DISABLE KEYS */;
INSERT INTO `timelines` VALUES (33,'','restarting the current test as 4 agents have failed','2016-03-15 16:39:07','2016-03-15 16:39:07'),(34,'','Prototype Link sent to Leigh and it - Leigh reviewing','2016-03-16 09:24:38','2016-03-16 09:56:33'),(35,'','Reporting on the run from last night. Peak Hour identified as 16:30 - 19:30','2016-03-16 09:25:09','2016-03-16 09:25:09'),(36,'','Sent the Link to Rob Davies','2016-03-16 09:47:59','2016-03-16 09:48:09'),(37,'','updateContactPreferenceDetail error found in last nights test. Sent to Cloud_TS_Support for investigation','2016-03-16 10:03:22','2016-03-16 10:03:22'),(38,'','Ecom timings are found to be slow after last nights test this corresponds to a slowdown in order rates from ATG to CAM.  Current plan is to rerun the  test this afternoon and schdedule the removal of the patch overnight. If the results still look bad then the patch will be removed. Else the patch will be kept. Next step would be to priortise the testing of the appdynamics plugin. as this will enable further metrics to diagnose os patch problems','2016-03-16 10:50:05','2016-03-16 10:53:10'),(39,'','Meeting planned to discuss next steps and outcome for 12pm with the middleware team','2016-03-16 10:59:00','2016-03-16 10:59:11'),(40,'','Endeca Spidering test Rerun, is timing out after an hour. Development to investigate\r\n','2016-03-16 11:35:34','2016-03-16 11:35:34'),(41,'','it looks like there was a rouge piece of sql running atp44ppt doing a full tablescan. the table being full scanned GAZ_Destination_station. Bootle is using 5 CPUs more during this test than the pre basline','2016-03-16 12:02:39','2016-03-16 12:03:56'),(42,'','Nick Doggett is going to follow SQL issue with the logistics team. Steve wall and Steve Hughes','2016-03-16 12:05:01','2016-03-16 12:05:01'),(43,'','the same bad sql identified as an issue in production. Currently investigating if indexes need adding to resolve this issue','2016-03-16 13:16:37','2016-03-16 13:16:37'),(46,'','Ecom fusion bounce requested. We are going to attempt to execute a test and see if the APT table scan issue persists.  Nick Doggett will investigate solutions whilst the test is running. ','2016-03-16 13:40:00','2016-03-16 13:40:00'),(47,'','Defects 2819,2822 raised in QC for SAM Screens','2016-03-16 14:34:05','2016-03-16 14:34:05'),(48,'','System placed back in to fusion in mode. Shakedowns now being run','2016-03-16 14:47:13','2016-03-16 14:47:13'),(49,'','CM NFT Load Test is started with 100 Percent load with Fusion IN, to test slow processing of sql’s in ATP DB; below are the details\r\n\r\nStartTime	3/16/2016 3:34 PM\r\nStart Time	Wed 15:34\r\nEnd Time	Wed 19:34\r\n','2016-03-16 15:59:07','2016-03-16 15:59:07'),(50,'','SAM Screens test run on 16/03/2016 at 8:00 PM failed,Test ran for 30 minutes and crashed','2016-03-17 08:27:37','2016-03-17 08:27:37'),(51,'','Brigg and Belper had issues with paging memory last night. this was due to triad OFLN being brought up. We are currently investigation why this was turned on. It could be to do with the triad reversion testing that happened yesterday','2016-03-17 09:29:39','2016-03-17 09:29:39'),(52,'','Full pipe bounce requested ','2016-03-17 09:39:21','2016-03-17 09:39:21'),(53,'','Bounce complete. Lee Marsden is going to turn off Triad OFLN before we start a sam screens test.','2016-03-17 11:20:06','2016-03-17 11:20:06'),(54,'','SAM screens  test started at 13:00','2016-03-17 13:00:56','2016-03-17 13:00:56'),(56,'','SAM Screens test stopped after an hour due to Out of memory errors. Backend teams are investigating the issues','2016-03-17 14:47:16','2016-03-17 14:47:16'),(57,'','SAM Screens test stopped, server has run out of memory. TSG middleware and Eng. Investigating','2016-03-17 15:46:01','2016-03-17 15:46:01'),(58,'','middleware update: Did Thread dump Analysis  14% of the Threads are blocking  , most of them code relate like the one below , These blocking threads are holding up rest all requests causing OOM \r\n\r\n','2016-03-17 16:11:58','2016-03-17 16:11:58'),(59,'','Belper/Brigg Norton Normoss, request for bounce sent.','2016-03-17 16:12:47','2016-03-17 16:12:47'),(60,'','Requested PIPE2 Bounce for Norton,Normoss,Brigg and Belper ','2016-03-17 16:14:54','2016-03-17 16:14:54'),(61,'','test','2016-04-28 17:01:08','2016-04-28 17:01:08'),(62,'','dsads','2016-05-01 08:32:23','2016-05-01 08:32:23');
/*!40000 ALTER TABLE `timelines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','$2y$10$.t/cOBj/Ko1bWo9ZxIcfQODyJf4ea.9dWMhFYfllaUyhr/kJ9HXhe','2016-03-15 18:35:39','2016-04-28 17:00:21');
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

-- Dump completed on 2016-05-02 22:35:28
