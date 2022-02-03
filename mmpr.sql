-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: mmpr
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brand_modals`
--

DROP TABLE IF EXISTS `brand_modals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brand_modals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` bigint NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal_img` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand_modals`
--

LOCK TABLES `brand_modals` WRITE;
/*!40000 ALTER TABLE `brand_modals` DISABLE KEYS */;
INSERT INTO `brand_modals` VALUES (3,1,'iphone13 pro Max',NULL,'2022-02-03 07:40:27','2022-02-03 07:40:27'),(4,1,'iphone13 pro',NULL,'2022-02-03 07:42:50','2022-02-03 07:42:50'),(5,1,'iphone13 mini',NULL,'2022-02-03 07:43:32','2022-02-03 07:43:32'),(6,1,'iphone13',NULL,'2022-02-03 07:44:07','2022-02-03 07:44:07'),(7,1,'iphone 12 pro',NULL,'2022-02-03 07:44:32','2022-02-03 07:44:32'),(8,1,'iphone 12 pro Max',NULL,'2022-02-03 07:44:52','2022-02-03 07:44:52'),(9,1,'iphone 12 mini',NULL,'2022-02-03 07:45:14','2022-02-03 07:45:14'),(10,1,'iPhone 12',NULL,'2022-02-03 07:45:35','2022-02-03 07:45:35'),(11,1,'iphone SE 2020',NULL,'2022-02-03 07:46:11','2022-02-03 07:46:11'),(12,1,'iPhone 11pro',NULL,'2022-02-03 07:46:54','2022-02-03 07:46:54'),(13,1,'iPhone 11 pro Max',NULL,'2022-02-03 07:47:24','2022-02-03 07:47:24'),(14,1,'iPhone 11',NULL,'2022-02-03 07:47:45','2022-02-03 07:47:45'),(15,1,'iPhone XR',NULL,'2022-02-03 07:48:16','2022-02-03 07:48:16'),(16,1,'iPhone XR',NULL,'2022-02-03 07:48:16','2022-02-03 07:48:16'),(17,1,'iphone XS Max',NULL,'2022-02-03 07:49:12','2022-02-03 07:49:12'),(18,1,'iPhone XS',NULL,'2022-02-03 07:49:44','2022-02-03 07:49:44'),(19,1,'iPhone 8',NULL,'2022-02-03 07:50:18','2022-02-03 07:50:18'),(20,1,'iPhone 8',NULL,'2022-02-03 07:50:18','2022-02-03 07:50:18'),(21,1,'iPhone 8 plus',NULL,'2022-02-03 07:51:07','2022-02-03 07:51:07'),(22,1,'iPhone X',NULL,'2022-02-03 07:51:37','2022-02-03 07:51:37'),(23,1,'iPhone 7 plus',NULL,'2022-02-03 07:54:13','2022-02-03 07:54:13'),(24,1,'iPhone 7',NULL,'2022-02-03 07:54:40','2022-02-03 07:54:40'),(25,1,'iPhone 7',NULL,'2022-02-03 07:54:40','2022-02-03 07:54:40'),(26,1,'iPhone SE',NULL,'2022-02-03 07:55:59','2022-02-03 07:55:59'),(27,1,'iPhone 6s plus',NULL,'2022-02-03 07:56:40','2022-02-03 07:56:40'),(28,1,'iphone 6s',NULL,'2022-02-03 07:57:10','2022-02-03 07:57:10'),(29,1,'iphone 6 plus',NULL,'2022-02-03 07:57:46','2022-02-03 07:57:46'),(30,1,'iphone 6',NULL,'2022-02-03 07:58:33','2022-02-03 07:58:33'),(31,1,'iphone 5s',NULL,'2022-02-03 07:58:58','2022-02-03 07:58:58'),(32,1,'iphone 5s',NULL,'2022-02-03 08:01:39','2022-02-03 08:01:39'),(33,1,'iphone 5c',NULL,'2022-02-03 08:01:52','2022-02-03 08:01:52'),(34,1,'iphone 5',NULL,'2022-02-03 08:02:12','2022-02-03 08:02:12'),(35,1,'iphone 4s',NULL,'2022-02-03 08:02:34','2022-02-03 08:02:34'),(36,1,'iphone 4',NULL,'2022-02-03 08:02:56','2022-02-03 08:02:56'),(37,1,'iphone 3GS',NULL,'2022-02-03 08:03:22','2022-02-03 08:03:22'),(38,1,'iphone 3G',NULL,'2022-02-03 08:03:48','2022-02-03 08:03:48'),(39,2,'Galaxy M31',NULL,'2022-02-03 08:12:54','2022-02-03 08:12:54'),(40,2,'Galaxy S20 Ultra 5G',NULL,'2022-02-03 08:13:59','2022-02-03 08:13:59'),(41,2,'Galaxy S20 ultra',NULL,'2022-02-03 08:14:28','2022-02-03 08:14:28'),(42,2,'Galaxy S20 + 5G',NULL,'2022-02-03 08:15:40','2022-02-03 08:15:40'),(43,2,'Galaxy S20 +',NULL,'2022-02-03 08:16:17','2022-02-03 08:16:17'),(44,2,'Galaxy S20 5G UM',NULL,'2022-02-03 08:17:06','2022-02-03 08:17:06'),(45,2,'Galaxy S20 5G',NULL,'2022-02-03 08:17:54','2022-02-03 08:17:54'),(46,2,'Galaxy S20',NULL,'2022-02-03 08:18:37','2022-02-03 08:18:37'),(47,2,'Galaxy Z flip',NULL,'2022-02-03 08:19:17','2022-02-03 08:19:17'),(48,2,'Galaxy s6 5G',NULL,'2022-02-03 08:19:52','2022-02-03 08:19:52'),(49,2,'Galaxy Xcover pro',NULL,'2022-02-03 08:20:28','2022-02-03 08:20:28'),(50,2,'Galaxy note10 lite',NULL,'2022-02-03 08:21:58','2022-02-03 08:21:58'),(51,2,'Galaxy s10 lite',NULL,'2022-02-03 08:22:23','2022-02-03 08:22:23'),(52,2,'Galaxy A01',NULL,'2022-02-03 08:22:58','2022-02-03 08:22:58'),(53,2,'Galaxy A71',NULL,'2022-02-03 08:23:32','2022-02-03 08:23:32'),(54,2,'Galaxy A51',NULL,'2022-02-03 08:24:02','2022-02-03 08:24:02'),(55,2,'Galaxy Xcover Field pro',NULL,'2022-02-03 08:25:51','2022-02-03 08:25:51'),(56,2,'Galaxy A70s',NULL,'2022-02-03 08:26:22','2022-02-03 08:26:22'),(57,2,'Galaxy A20s',NULL,'2022-02-03 08:26:49','2022-02-03 08:26:49'),(58,2,'Galaxy M30s',NULL,'2022-02-03 08:27:12','2022-02-03 08:27:12'),(59,2,'Galaxy M10s',NULL,'2022-02-03 08:27:42','2022-02-03 08:27:42'),(60,2,'Galaxy fold 5G',NULL,'2022-02-03 08:28:38','2022-02-03 08:28:38'),(61,2,'Galaxy fold',NULL,'2022-02-03 08:30:40','2022-02-03 08:30:40'),(62,2,'Galaxy tab active pro',NULL,'2022-02-03 08:31:13','2022-02-03 08:31:13'),(63,2,'Galaxy A90 5G',NULL,'2022-02-03 08:31:49','2022-02-03 08:31:49'),(64,2,'Galaxy A30s',NULL,'2022-02-03 08:32:17','2022-02-03 08:32:17'),(65,2,'Galaxy A50s',NULL,'2022-02-03 08:32:39','2022-02-03 08:32:39'),(66,2,'Galaxy note10+5G',NULL,'2022-02-03 08:33:26','2022-02-03 08:33:26'),(67,2,'Galaxy note10+',NULL,'2022-02-03 08:34:13','2022-02-03 08:34:13'),(68,2,'Galaxy note10 5G',NULL,'2022-02-03 08:34:59','2022-02-03 08:34:59'),(69,2,'Galaxy note10',NULL,'2022-02-03 08:35:37','2022-02-03 08:35:37'),(70,2,'Galaxy watch active2',NULL,'2022-02-03 08:36:13','2022-02-03 08:36:13'),(71,2,'Galaxy watch active2 Aluminum',NULL,'2022-02-03 08:37:30','2022-02-03 08:37:30'),(72,2,'Galaxy A10s',NULL,'2022-02-03 08:37:50','2022-02-03 08:37:50'),(73,2,'Galaxy A10e',NULL,'2022-02-03 08:38:11','2022-02-03 08:38:11'),(74,2,'Galaxy tab S6',NULL,'2022-02-03 08:38:55','2022-02-03 08:38:55'),(75,2,'Galaxy tab  A 8.0 (2019)',NULL,'2022-02-03 08:40:04','2022-02-03 08:40:04'),(76,2,'Galaxy Xcover 4s',NULL,'2022-02-03 08:40:47','2022-02-03 08:40:47'),(77,2,'Galaxy A2 core',NULL,'2022-02-03 08:41:22','2022-02-03 08:41:22'),(78,2,'Galaxy watch active',NULL,'2022-02-03 08:41:48','2022-02-03 08:41:48'),(79,2,'Galaxy view 2',NULL,'2022-02-03 08:42:18','2022-02-03 08:42:18'),(80,2,'Galaxy S10 5G',NULL,'2022-02-03 08:42:49','2022-02-03 08:42:49'),(81,2,'Galaxy S10+',NULL,'2022-02-03 08:43:23','2022-02-03 08:43:23'),(82,2,'Galaxy S10',NULL,'2022-02-03 08:43:41','2022-02-03 08:43:41'),(83,2,'Galaxy S10e',NULL,'2022-02-03 08:46:10','2022-02-03 08:46:10'),(84,2,'Galaxy M40',NULL,'2022-02-03 08:47:29','2022-02-03 08:47:29'),(85,2,'Galaxy M30',NULL,'2022-02-03 08:48:05','2022-02-03 08:48:05'),(86,2,'Galaxy M20',NULL,'2022-02-03 08:49:17','2022-02-03 08:49:17'),(87,2,'Galaxy M10',NULL,'2022-02-03 08:49:31','2022-02-03 08:49:31'),(88,2,'Galaxy A70',NULL,'2022-02-03 09:02:04','2022-02-03 09:02:04'),(89,2,'Galaxy A60',NULL,'2022-02-03 09:02:29','2022-02-03 09:02:29'),(90,2,'Galaxy A50',NULL,'2022-02-03 09:02:50','2022-02-03 09:02:50'),(91,2,'Galaxy A40',NULL,'2022-02-03 09:03:01','2022-02-03 09:03:01'),(92,2,'Galaxy A30',NULL,'2022-02-03 09:03:16','2022-02-03 09:03:16'),(93,2,'Galaxy A20e',NULL,'2022-02-03 09:03:43','2022-02-03 09:03:43'),(94,2,'Galaxy A20',NULL,'2022-02-03 09:03:57','2022-02-03 09:03:57'),(95,2,'Galaxy A10',NULL,'2022-02-03 09:04:15','2022-02-03 09:04:15'),(96,2,'Galaxy tab S5e',NULL,'2022-02-03 09:04:50','2022-02-03 09:04:50'),(97,2,'Galaxy Tab A 10.1(2019)',NULL,'2022-02-03 09:06:13','2022-02-03 09:06:13'),(98,2,'Galaxy A8.0 & s pen (2019)',NULL,'2022-02-03 09:08:33','2022-02-03 09:08:33'),(99,2,'Galaxy tab advanced2',NULL,'2022-02-03 09:12:27','2022-02-03 09:12:27'),(100,2,'Galaxy tab A8.0 (2018)',NULL,'2022-02-03 09:13:08','2022-02-03 09:13:08'),(101,2,'Galaxy tab S4 10.5',NULL,'2022-02-03 09:14:33','2022-02-03 09:14:33'),(102,2,'Galaxy tab A 10.5',NULL,'2022-02-03 09:15:03','2022-02-03 09:15:03'),(103,2,'Galaxy A8s',NULL,'2022-02-03 09:15:20','2022-02-03 09:15:20'),(104,2,'Galaxy A6s',NULL,'2022-02-03 09:15:38','2022-02-03 09:15:38'),(105,2,'Galaxy A9 (2018)',NULL,'2022-02-03 09:16:10','2022-02-03 09:16:10'),(106,2,'Galaxy A7 (2018)',NULL,'2022-02-03 09:17:00','2022-02-03 09:17:00'),(107,2,'Galaxy note 9',NULL,'2022-02-03 09:17:15','2022-02-03 09:17:15'),(108,2,'Galaxy watch',NULL,'2022-02-03 09:20:31','2022-02-03 09:20:31'),(109,2,'Galaxy J6+',NULL,'2022-02-03 09:20:58','2022-02-03 09:20:58'),(110,2,'Galaxy J4 core',NULL,'2022-02-03 09:21:22','2022-02-03 09:21:22'),(111,2,'Galaxy J4+',NULL,'2022-02-03 09:21:57','2022-02-03 09:21:57'),(112,2,'Galaxy J2 core',NULL,'2022-02-03 09:22:25','2022-02-03 09:22:25'),(113,2,'Galaxy on6',NULL,'2022-02-03 09:22:43','2022-02-03 09:22:43'),(114,2,'Galaxy J7 (2018)',NULL,'2022-02-03 09:23:05','2022-02-03 09:23:05'),(115,2,'Galaxy J3 (2018)',NULL,'2022-02-03 09:23:33','2022-02-03 09:23:33'),(116,2,'Galaxy A8 star',NULL,'2022-02-03 09:23:59','2022-02-03 09:23:59'),(117,2,'Galaxy S light Luxury',NULL,'2022-02-03 09:24:31','2022-02-03 09:24:31'),(118,2,'Galaxy J8',NULL,'2022-02-03 09:24:48','2022-02-03 09:24:48'),(119,2,'Galaxy J6',NULL,'2022-02-03 09:25:07','2022-02-03 09:25:07'),(120,2,'Galaxy J6',NULL,'2022-02-03 09:25:07','2022-02-03 09:25:07'),(121,2,'Galaxy J4',NULL,'2022-02-03 09:25:25','2022-02-03 09:25:25'),(122,2,'Galaxy A6+',NULL,'2022-02-03 09:25:49','2022-02-03 09:25:49'),(123,2,'Galaxy J8',NULL,'2022-02-03 09:28:35','2022-02-03 09:28:35'),(124,2,'Galaxy J6',NULL,'2022-02-03 09:28:56','2022-02-03 09:28:56');
/*!40000 ALTER TABLE `brand_modals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_img` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Apple',2,'2022-02-02 15:12:52','2022-02-02 15:12:52'),(2,'Samsung',NULL,'2022-02-03 08:05:20','2022-02-03 08:05:20');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `counters`
--

DROP TABLE IF EXISTS `counters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `counters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `views` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `counters`
--

LOCK TABLES `counters` WRITE;
/*!40000 ALTER TABLE `counters` DISABLE KEYS */;
/*!40000 ALTER TABLE `counters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `files` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimensions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` VALUES (1,'p11.jpg','image/jpeg','8df262076b50d8973a82ac729a6640c3.jpg','117985',NULL,NULL,'2022-02-02 15:12:24','2022-02-02 15:12:24'),(2,'Apple-Logo-PNG-Image-715x715.png','image/png','a0fcf6bc4c99815576c65fc90a134a2f.png','14662',NULL,NULL,'2022-02-02 15:12:52','2022-02-02 15:12:52');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issues`
--

DROP TABLE IF EXISTS `issues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `issues` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` bigint NOT NULL,
  `modal_id` bigint NOT NULL,
  `issue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issues`
--

LOCK TABLES `issues` WRITE;
/*!40000 ALTER TABLE `issues` DISABLE KEYS */;
INSERT INTO `issues` VALUES (1,1,1,'screen',NULL,NULL,'2022-02-02 15:13:59','2022-02-02 15:13:59'),(2,1,1,'camera',NULL,NULL,'2022-02-02 15:14:10','2022-02-02 15:14:10');
/*!40000 ALTER TABLE `issues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_11_16_141627_create_files_table',1),(6,'2021_11_16_150741_create_roles_table',1),(7,'2021_11_16_150757_create_permissions_table',1),(8,'2021_11_16_150929_create_role_user_table',1),(9,'2021_11_16_151033_create_permission_role__table',1),(10,'2021_11_30_072031_create_brands_table',1),(11,'2021_11_30_072142_create_brand_modals_table',1),(12,'2021_12_02_093010_create_issues_table',1),(13,'2021_12_03_105241_create_quotes_table',1),(14,'2022_01_12_063744_create_jobs_table',1),(15,'2022_01_21_095822_create_vans_table',1),(16,'2022_01_28_095622_create_tickets_table',2),(17,'2022_02_03_060530_create_counters_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `permission_role_`
--

DROP TABLE IF EXISTS `permission_role_`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role_` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint NOT NULL,
  `permission_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role_`
--

LOCK TABLES `permission_role_` WRITE;
/*!40000 ALTER TABLE `permission_role_` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role_` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'view_user','user','View All user','2022-02-02 15:09:19','2022-02-02 15:09:19'),(2,'show_user','user','show single user','2022-02-02 15:09:19','2022-02-02 15:09:19'),(3,'create_user','user','create new user','2022-02-02 15:09:19','2022-02-02 15:09:19'),(4,'edit_user','user','edit user','2022-02-02 15:09:19','2022-02-02 15:09:19'),(5,'delete_user','user','delete user','2022-02-02 15:09:19','2022-02-02 15:09:19'),(6,'view_role','role','View All role','2022-02-02 15:09:19','2022-02-02 15:09:19'),(7,'show_role','role','show role','2022-02-02 15:09:19','2022-02-02 15:09:19'),(8,'create_role','role','create role','2022-02-02 15:09:19','2022-02-02 15:09:19'),(9,'edit_role','role','edit role','2022-02-02 15:09:19','2022-02-02 15:09:19'),(10,'delete_role','role','delete role','2022-02-02 15:09:19','2022-02-02 15:09:19');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotes`
--

DROP TABLE IF EXISTS `quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quotes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` bigint NOT NULL,
  `modal_id` bigint NOT NULL,
  `issue_id` bigint DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describtion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_preference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repairing_methods` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `reply` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes`
--

LOCK TABLES `quotes` WRITE;
/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `quotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `role_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,1,1,NULL,NULL);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','admin have all permission','2022-02-02 15:09:19','2022-02-02 15:09:19');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tickets` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` bigint DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@admin.com',1,NULL,'$2y$10$dE0fC1AW3khIhZxvE437IO.yoWn7lKEudiJc2ms.nDBc/lP/jCFMK',NULL,'2022-02-02 15:09:19','2022-02-02 15:12:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vans`
--

DROP TABLE IF EXISTS `vans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vans`
--

LOCK TABLES `vans` WRITE;
/*!40000 ALTER TABLE `vans` DISABLE KEYS */;
/*!40000 ALTER TABLE `vans` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-03 16:42:30
