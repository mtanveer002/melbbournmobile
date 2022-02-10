-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: melbbournemobile
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.21.04.1

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
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal_img` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=914 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand_modals`
--

LOCK TABLES `brand_modals` WRITE;
/*!40000 ALTER TABLE `brand_modals` DISABLE KEYS */;
INSERT INTO `brand_modals` VALUES (1,1,'iPhone 13 Pro',NULL,NULL,NULL),(2,1,'iPhone 13',NULL,NULL,NULL),(3,1,'iPhone 13 mini',NULL,NULL,NULL),(4,1,'iPhone 12 Pro Max',NULL,NULL,NULL),(5,1,'iPhone 12 Pro',NULL,NULL,NULL),(6,1,'iPhone 12',NULL,NULL,NULL),(7,1,'iPhone 12 mini',NULL,NULL,NULL),(8,1,'iPhone SE',NULL,NULL,NULL),(9,1,'iPhone 11 Pro Max',NULL,NULL,NULL),(10,1,'iPhone 11 Pro',NULL,NULL,NULL),(11,1,'iPhone 11',NULL,NULL,NULL),(12,1,'iPhone XS Max',NULL,NULL,NULL),(13,1,'iPhone XS',NULL,NULL,NULL),(14,1,'iPhone XR',NULL,NULL,NULL),(15,1,'iPhone X',NULL,NULL,NULL),(16,1,'iPhone 8 Plus',NULL,NULL,NULL),(17,1,'iPhone 8',NULL,NULL,NULL),(18,1,'iPhone 7 Plus',NULL,NULL,NULL),(19,1,'iPhone 7',NULL,NULL,NULL),(20,1,'iPhone 6s Plus',NULL,NULL,NULL),(21,1,'iPhone 6s',NULL,NULL,NULL),(22,1,'iPhone 6 Plus',NULL,NULL,NULL),(23,1,'iPhone 6',NULL,NULL,NULL),(24,1,'iPhone 5s',NULL,NULL,NULL),(25,1,'iPhone 5c',NULL,NULL,NULL),(26,1,'iPhone 5',NULL,NULL,NULL),(27,1,'iPhone 4S',NULL,NULL,NULL),(28,1,'iPhone 4',NULL,NULL,NULL),(29,1,'Other',NULL,NULL,NULL),(30,15,'Zenfone 2',NULL,'2022-02-08 05:55:12','2022-02-08 05:55:12'),(31,15,'Zenfone 5 A500CG',NULL,'2022-02-08 05:55:43','2022-02-08 05:55:43'),(32,15,'Other',NULL,'2022-02-08 05:56:08','2022-02-08 05:56:08'),(33,10,'Torch 9800',NULL,NULL,NULL),(34,10,'Bold 9000',NULL,NULL,NULL),(35,10,'Bold 9700',NULL,NULL,NULL),(36,10,'Bold 9900',NULL,NULL,NULL),(37,10,'Q5',NULL,NULL,NULL),(38,10,'Q10',NULL,NULL,NULL),(39,10,'Q20',NULL,NULL,NULL),(40,10,'Z10',NULL,NULL,NULL),(41,10,'Z20',NULL,NULL,NULL),(42,10,'Z30',NULL,NULL,NULL),(43,10,'other',NULL,'2022-02-08 06:06:57','2022-02-08 06:06:57'),(44,13,'Pixel 4 XL',NULL,NULL,NULL),(45,13,'Pixel 4',NULL,NULL,NULL),(46,13,'Pixel 3A XL',NULL,NULL,NULL),(47,13,'Pixel 3A',NULL,NULL,NULL),(48,13,'Pixel 3 XL',NULL,NULL,NULL),(49,13,'Pixel 3',NULL,NULL,NULL),(50,13,'Pixel 2 XL',NULL,NULL,NULL),(51,13,'Pixel 2',NULL,NULL,NULL),(52,13,'Pixel XL',NULL,NULL,NULL),(53,13,'Pixel',NULL,NULL,NULL),(54,13,'Nexus 2nd Gen',NULL,NULL,NULL),(55,13,'Nexus 1st Gen',NULL,NULL,NULL),(56,13,'Others',NULL,'2022-02-08 06:18:14','2022-02-08 06:18:14'),(57,9,'Evo 3D',NULL,NULL,NULL),(58,9,'Nexus 9',NULL,NULL,NULL),(59,9,'Windows 8x',NULL,NULL,NULL),(60,9,'Windows 8s',NULL,NULL,NULL),(61,9,'Velocity 4g',NULL,NULL,NULL),(62,9,'Rhyme',NULL,NULL,NULL),(63,9,'Trophy 7',NULL,NULL,NULL),(64,9,'Aria',NULL,NULL,NULL),(65,9,'Incredible S',NULL,NULL,NULL),(66,9,'Wildfire S',NULL,NULL,NULL),(67,9,'Wildfire',NULL,NULL,NULL),(68,9,'HD7',NULL,NULL,NULL),(69,9,'Explorer',NULL,NULL,NULL),(70,9,'Sensation XE',NULL,NULL,NULL),(71,9,'Sensation XL',NULL,NULL,NULL),(72,9,'Sensation',NULL,NULL,NULL),(73,9,'U11',NULL,NULL,NULL),(74,9,'U Play',NULL,NULL,NULL),(75,9,'One X10',NULL,NULL,NULL),(76,9,'One X9',NULL,NULL,NULL),(77,9,'One XL',NULL,NULL,NULL),(78,9,'One X',NULL,NULL,NULL),(79,9,'One M9s',NULL,NULL,NULL),(80,9,'One M9 Plus',NULL,NULL,NULL),(81,9,'One M9',NULL,NULL,NULL),(82,9,'One M8s',NULL,NULL,NULL),(83,9,'One M8',NULL,NULL,NULL),(84,9,'One M7',NULL,NULL,NULL),(85,9,'One A9',NULL,NULL,NULL),(86,9,'One Mini 2',NULL,NULL,NULL),(87,9,'One Mini',NULL,NULL,NULL),(88,9,'One E9',NULL,NULL,NULL),(89,9,'One Max',NULL,NULL,NULL),(90,9,'One ME',NULL,NULL,NULL),(91,9,'One S',NULL,NULL,NULL),(92,9,'One SV',NULL,NULL,NULL),(93,9,'One V',NULL,NULL,NULL),(94,9,'Desire 820',NULL,NULL,NULL),(95,9,'Desire 816',NULL,NULL,NULL),(96,9,'Desire 628',NULL,NULL,NULL),(97,9,'Desire 626',NULL,NULL,NULL),(98,9,'Desire 625',NULL,NULL,NULL),(99,9,'Desire 620',NULL,NULL,NULL),(100,9,'Desire 616',NULL,NULL,NULL),(101,9,'Desire 610',NULL,NULL,NULL),(102,9,'Desire 601',NULL,NULL,NULL),(103,9,'Desire 530',NULL,NULL,NULL),(104,9,'ODesire 510',NULL,NULL,NULL),(105,9,'Desire 320',NULL,NULL,NULL),(106,9,'Desire 300',NULL,NULL,NULL),(107,9,'Desire HD',NULL,NULL,NULL),(108,9,'Desire S',NULL,NULL,NULL),(109,9,'Desire X',NULL,NULL,NULL),(110,9,'Desire C',NULL,NULL,NULL),(111,9,'Desire Z',NULL,NULL,NULL),(112,9,'Desire EYE',NULL,NULL,NULL),(113,9,'Other',NULL,'2022-02-09 03:31:28','2022-02-09 03:31:28'),(114,6,'Nova 7 Pro',NULL,NULL,NULL),(115,6,'Nova 7I',NULL,NULL,NULL),(116,6,'Nova 5T',NULL,NULL,NULL),(117,6,'Nova 5I Pro',NULL,NULL,NULL),(118,6,'Nova 5I',NULL,NULL,NULL),(119,6,'Nova 5',NULL,NULL,NULL),(120,6,'Nova 4E',NULL,NULL,NULL),(121,6,'Nova 4',NULL,NULL,NULL),(122,6,'Nova 3',NULL,NULL,NULL),(123,6,'Nova 2 Plus',NULL,NULL,NULL),(124,6,'Nova 2',NULL,NULL,NULL),(125,6,'Nova Plus',NULL,NULL,NULL),(126,6,'Nova',NULL,NULL,NULL),(127,6,'V30',NULL,NULL,NULL),(128,6,'Nova 6|5G',NULL,NULL,NULL),(129,6,'Nova 6 SE',NULL,NULL,NULL),(130,6,'Enjoy 10',NULL,NULL,NULL),(131,6,'Enjoy 9S',NULL,NULL,NULL),(132,6,'Enjoy 10 Plus',NULL,NULL,NULL),(133,6,'V30 Pro',NULL,NULL,NULL),(134,6,'Honor Play',NULL,NULL,NULL),(135,6,'Honor 9X',NULL,NULL,NULL),(136,6,'Honor Play 3',NULL,NULL,NULL),(137,6,'Honor 20 Pro',NULL,NULL,NULL),(138,6,'Honor 30s',NULL,NULL,NULL),(139,6,'Honor 30 Lite',NULL,NULL,NULL),(140,6,'Honor 30 Pro',NULL,NULL,NULL),(141,6,'Honor X10',NULL,NULL,NULL),(142,6,'Honor 9i',NULL,NULL,NULL),(143,6,'Honor 20',NULL,NULL,NULL),(144,6,'Honor View 20',NULL,NULL,NULL),(145,6,'Honor View 10',NULL,NULL,NULL),(146,6,'Honor 10',NULL,NULL,NULL),(147,6,'Honor 9 Lite',NULL,NULL,NULL),(148,6,'Honor 9',NULL,NULL,NULL),(149,6,'Honor 8X',NULL,NULL,NULL),(150,6,'Honor 8 Lite',NULL,NULL,NULL),(151,6,'Honor 8',NULL,NULL,NULL),(152,6,'Honor 7X',NULL,NULL,NULL),(153,6,'Honor 7C',NULL,NULL,NULL),(154,6,'Honor 4X',NULL,NULL,NULL),(155,6,'Honor 9 Lite',NULL,NULL,NULL),(156,6,'Honor 9',NULL,NULL,NULL),(157,6,'Honor 8X',NULL,NULL,NULL),(158,6,'Y300',NULL,NULL,NULL),(159,6,'P40',NULL,NULL,NULL),(160,6,'P40 Lite',NULL,NULL,NULL),(161,6,'GR5',NULL,NULL,NULL),(162,6,'GR3',NULL,NULL,NULL),(163,6,'Nexus 6P',NULL,NULL,NULL),(164,6,'G8',NULL,NULL,NULL),(165,6,'Y7 2020',NULL,NULL,NULL),(166,6,'Y6 2020',NULL,NULL,NULL),(167,6,'Y9 Prime 2019',NULL,NULL,NULL),(168,6,'Y9 2019',NULL,NULL,NULL),(169,6,'Y7 Pro 2019',NULL,NULL,NULL),(170,6,'Y7 Prime',NULL,NULL,NULL),(171,6,'Y7 2019',NULL,NULL,NULL),(172,6,'Y6 2019',NULL,NULL,NULL),(173,6,'Y9 2018',NULL,NULL,NULL),(174,6,'Y7 2018',NULL,NULL,NULL),(175,6,'Y6 2018',NULL,NULL,NULL),(176,6,'Y5 2018',NULL,NULL,NULL),(177,6,'Y7 2017',NULL,NULL,NULL),(178,6,'Y6 Pro',NULL,NULL,NULL),(179,6,'Y6',NULL,NULL,NULL),(180,6,'Y3',NULL,NULL,NULL),(181,6,'Y7 2019',NULL,NULL,NULL),(182,6,'Ascend P7',NULL,NULL,NULL),(183,6,'Ascend P6',NULL,NULL,NULL),(184,6,'Ascend G730',NULL,NULL,NULL),(185,6,'Ascend G600',NULL,NULL,NULL),(186,6,'Ascend G526',NULL,NULL,NULL),(187,6,'Ascend G510',NULL,NULL,NULL),(188,6,'Ascend G300',NULL,NULL,NULL),(189,6,'Ascend Y550',NULL,NULL,NULL),(190,6,'Ascend Y530',NULL,NULL,NULL),(191,6,'Ascend Y330',NULL,NULL,NULL),(192,6,'Ascend Y210',NULL,NULL,NULL),(193,6,'Mate 7',NULL,NULL,NULL),(194,6,'Mate 8',NULL,NULL,NULL),(195,6,'Mate 8 Lite',NULL,NULL,NULL),(196,6,'Mate 9',NULL,NULL,NULL),(197,6,'Mate 9 Lite',NULL,NULL,NULL),(198,6,'Mate 9 Pro',NULL,NULL,NULL),(199,6,'Mate 10',NULL,NULL,NULL),(200,6,'Mate 10 Lite',NULL,NULL,NULL),(201,6,'Mate 10 Pro',NULL,NULL,NULL),(202,6,'Mate 20',NULL,NULL,NULL),(203,6,'Mate 20 pro',NULL,NULL,NULL),(204,6,'Mate 20 X',NULL,NULL,NULL),(205,6,'Mate 20RS',NULL,NULL,NULL),(206,6,'Mate 30',NULL,NULL,NULL),(207,6,'Mate 30 Pro',NULL,NULL,NULL),(208,6,'Mate 40 Pro',NULL,NULL,NULL),(209,6,'Mate S',NULL,NULL,NULL),(210,6,'P40 Pro',NULL,NULL,NULL),(211,6,'P30 Pro',NULL,NULL,NULL),(212,6,'P30 Lite',NULL,NULL,NULL),(213,6,'P30',NULL,NULL,NULL),(214,6,'P20 Pro',NULL,NULL,NULL),(215,6,'P20 Lite',NULL,NULL,NULL),(216,6,'P20',NULL,NULL,NULL),(217,6,'P10 Plus',NULL,NULL,NULL),(218,6,'P10 Lite',NULL,NULL,NULL),(219,6,'P10',NULL,NULL,NULL),(220,6,'P9 Plus',NULL,NULL,NULL),(221,6,'P9 Lite',NULL,NULL,NULL),(222,6,'P9',NULL,NULL,NULL),(223,6,' P8 Lite',NULL,NULL,NULL),(224,6,'P8',NULL,NULL,NULL),(225,6,'P Smart',NULL,NULL,NULL),(226,6,'Other',NULL,'2022-02-09 04:34:21','2022-02-09 04:34:21'),(227,8,'Moto E 2',NULL,NULL,NULL),(228,8,'Moto E',NULL,NULL,NULL),(229,8,'X2 XT1096',NULL,NULL,NULL),(230,8,'X Style',NULL,NULL,NULL),(231,8,'X Force',NULL,NULL,NULL),(232,8,'X XT1562',NULL,NULL,NULL),(233,8,'X XT1058',NULL,NULL,NULL),(234,8,'Z Play',NULL,NULL,NULL),(235,8,'Z',NULL,NULL,NULL),(236,8,'G6',NULL,NULL,NULL),(237,8,'G4 Plus',NULL,NULL,NULL),(238,8,'G4 Play',NULL,NULL,NULL),(239,8,'G4',NULL,NULL,NULL),(240,8,'Nova 7I',NULL,NULL,NULL),(241,8,'G3',NULL,NULL,NULL),(242,8,'G2 XT1068',NULL,NULL,NULL),(243,8,'G XT1032',NULL,NULL,NULL),(244,8,'Other',NULL,'2022-02-09 04:59:23','2022-02-09 04:59:23'),(245,16,'Surface Go',NULL,NULL,NULL),(246,16,'Surface Pro 7',NULL,NULL,NULL),(247,16,'X2 XT1096',NULL,NULL,NULL),(248,16,'Surface Pro 6',NULL,NULL,NULL),(249,16,' Surface Pro 5',NULL,NULL,NULL),(250,16,'Surface Pro 4',NULL,NULL,NULL),(251,16,'Surface Pro 3',NULL,NULL,NULL),(252,16,'Surface Pro 2',NULL,NULL,NULL),(253,16,'Surface Pro',NULL,NULL,NULL),(254,16,'Surface RT3',NULL,NULL,NULL),(255,16,'Surface RT2',NULL,NULL,NULL),(256,16,'Surface Book 1703|1704',NULL,NULL,NULL),(257,16,'Surface Book 2',NULL,NULL,NULL),(258,16,'Surface Book 1',NULL,NULL,NULL),(259,16,'Surface Laptop (1st Gen)',NULL,NULL,NULL),(260,16,'Other',NULL,NULL,NULL),(261,2,'Galaxy J1',NULL,NULL,NULL),(262,2,'Galaxy J1 Mini',NULL,NULL,NULL),(263,2,'Galaxy J1 Ace',NULL,NULL,NULL),(264,2,'Galaxy J1 (2016)',NULL,NULL,NULL),(265,2,'Galaxy J2 2016',NULL,NULL,NULL),(266,2,'Galaxy J2 Pro',NULL,NULL,NULL),(267,2,'Galaxy S2 i9100',NULL,NULL,NULL),(268,2,'Galaxy S2 i9210 4G',NULL,NULL,NULL),(269,2,'Galaxy S3 i9300',NULL,NULL,NULL),(270,2,'Galaxy S3 4G i9305',NULL,NULL,NULL),(271,2,'Galaxy S3 Mini i8190',NULL,NULL,NULL),(272,2,'Galaxy S20 FE',NULL,NULL,NULL),(273,2,'Galaxy Core Prime',NULL,NULL,NULL),(274,2,'Galaxy Grand Prime',NULL,NULL,NULL),(275,2,'Galaxy Grand Duos I9082',NULL,NULL,NULL),(276,2,'Galaxy Duos 2 S7582',NULL,NULL,NULL),(277,2,'Xcover S5690',NULL,NULL,NULL),(278,2,'Galaxy C9 Pro',NULL,NULL,NULL),(279,2,'Galaxy Nexus i9250',NULL,NULL,NULL),(280,2,'Galaxy Ace Plus s7500',NULL,NULL,NULL),(281,2,'Galaxy Ace S5830',NULL,NULL,NULL),(282,2,'Galaxy Ace 3 S7270',NULL,NULL,NULL),(283,2,'Galaxy Duos S7562',NULL,NULL,NULL),(284,2,'Galaxy Express i8730',NULL,NULL,NULL),(285,2,'Galaxy Mega 6.3 i9205',NULL,NULL,NULL),(286,2,'Galaxy Alpha G850',NULL,NULL,NULL),(287,2,'Galaxy Mega 5.8 i9152',NULL,NULL,NULL),(288,2,'Galaxy Note 20 Ultra',NULL,NULL,NULL),(289,2,'Galaxy Note 20',NULL,NULL,NULL),(290,2,'Galaxy Note 10 Lite',NULL,NULL,NULL),(291,2,'Galaxy Note 10 Plus | 5G',NULL,NULL,NULL),(292,2,'Galaxy Note 10',NULL,NULL,NULL),(293,2,'Galaxy Note 9',NULL,NULL,NULL),(294,2,'Galaxy Note 8',NULL,NULL,NULL),(295,2,'Galaxy Note 5',NULL,NULL,NULL),(296,2,'Galaxy Note 4',NULL,NULL,NULL),(297,2,'Galaxy Note 3 N9005',NULL,NULL,NULL),(298,2,'Galaxy Note 2 4g N7105',NULL,NULL,NULL),(299,2,'Galaxy Note 2 N7100',NULL,NULL,NULL),(300,2,'Galaxy Note Edge',NULL,NULL,NULL),(301,2,'Galaxy Note i9220 n7000',NULL,NULL,NULL),(302,2,'Galaxy J8 J810 (2018)',NULL,NULL,NULL),(303,2,'Galaxy J7 Pro',NULL,NULL,NULL),(304,2,'Galaxy J7 Prime',NULL,NULL,NULL),(305,2,'Galaxy J7',NULL,NULL,NULL),(306,2,'Galaxy J6 Plus',NULL,NULL,NULL),(307,2,'Galaxy J6',NULL,NULL,NULL),(308,2,'Galaxy J5 Pro',NULL,NULL,NULL),(309,2,'Galaxy J5',NULL,NULL,NULL),(310,2,'Galaxy J3 Pro',NULL,NULL,NULL),(311,2,'Galaxy J3',NULL,NULL,NULL),(312,2,'Galaxy M11 2020',NULL,NULL,NULL),(313,2,'Galaxy M30',NULL,NULL,NULL),(314,2,'Galaxy M20',NULL,NULL,NULL),(315,2,'Galaxy M10',NULL,NULL,NULL),(316,2,'Galaxy A11 2020 A115',NULL,NULL,NULL),(317,2,'Galaxy A71 5G 2020 A716',NULL,NULL,NULL),(318,2,'Galaxy A71 2020 A715',NULL,NULL,NULL),(319,2,'Galaxy A51 5G 2020 A516',NULL,NULL,NULL),(320,2,'Galaxy A51 2020 A515',NULL,NULL,NULL),(321,2,'Galaxy A41 2020 A415',NULL,NULL,NULL),(322,2,'Galaxy A31 2020 A315',NULL,NULL,NULL),(323,2,'Galaxy A21S 2020 A217',NULL,NULL,NULL),(324,2,'Galaxy A21 2020 A215',NULL,NULL,NULL),(325,2,'Galaxy A90 2019 5G',NULL,NULL,NULL),(326,2,'Galaxy A80 2019 A805',NULL,NULL,NULL),(327,2,'Galaxy A70 2019 A705',NULL,NULL,NULL),(328,2,'Galaxy A60 2019 A606',NULL,NULL,NULL),(329,2,'Galaxy A50 2019 A505',NULL,NULL,NULL),(330,2,'Galaxy A40 2019 A405',NULL,NULL,NULL),(331,2,'Galaxy A30S 2019 A307',NULL,NULL,NULL),(332,2,'Galaxy A30 2019 A305',NULL,NULL,NULL),(333,2,'Galaxy A20S 2019 A207',NULL,NULL,NULL),(334,2,'Galaxy A20 2019 A205',NULL,NULL,NULL),(335,2,'Galaxy A20e 2019 A202',NULL,NULL,NULL),(336,2,'Galaxy A10 2019 A105',NULL,NULL,NULL),(337,2,'Galaxy A9 2018 A920',NULL,NULL,NULL),(338,2,'Galaxy A8 Plus 2018 A730',NULL,NULL,NULL),(339,2,'Galaxy A8 2018 A530',NULL,NULL,NULL),(340,2,'Galaxy A6 Plus 2018 A605',NULL,NULL,NULL),(341,2,'Galaxy A7 2017 (A720)',NULL,NULL,NULL),(342,2,'Galaxy A5 2017 (A520)',NULL,NULL,NULL),(343,2,'Galaxy A3 2017 (A320)',NULL,NULL,NULL),(344,2,'Galaxy A7 2016 (A710)',NULL,NULL,NULL),(345,2,'Galaxy A5 2016 (A510)',NULL,NULL,NULL),(346,2,'Galaxy A3 2016 (A310)',NULL,NULL,NULL),(347,2,'Galaxy A7 (A700)',NULL,NULL,NULL),(348,2,'Galaxy A5 (A500)',NULL,NULL,NULL),(349,2,'Galaxy A3 (A300)',NULL,NULL,NULL),(350,2,'Galaxy S20 Ultra',NULL,NULL,NULL),(351,2,'Galaxy S20 Plus',NULL,NULL,NULL),(352,2,'Galaxy S20',NULL,NULL,NULL),(353,2,'Galaxy S10 Lite',NULL,NULL,NULL),(354,2,'Galaxy S10 5G',NULL,NULL,NULL),(355,2,'Galaxy S10 Plus',NULL,NULL,NULL),(356,2,'Galaxy S10 E',NULL,NULL,NULL),(357,2,'Galaxy S10',NULL,NULL,NULL),(358,2,'Galaxy S9 Plus',NULL,NULL,NULL),(359,2,'Galaxy S9',NULL,NULL,NULL),(360,2,'Galaxy S8 Plus',NULL,NULL,NULL),(361,2,'Galaxy S8',NULL,NULL,NULL),(362,2,'Galaxy S7 Edge',NULL,NULL,NULL),(363,2,'Galaxy S7',NULL,NULL,NULL),(364,2,'Galaxy S6 Edge Plus',NULL,NULL,NULL),(365,2,'Galaxy S6 Edge',NULL,NULL,NULL),(366,2,'Galaxy S6 Edge',NULL,NULL,NULL),(367,2,'Galaxy S6',NULL,NULL,NULL),(368,2,'Galaxy S5 Mini',NULL,NULL,NULL),(369,2,'Galaxy S5',NULL,NULL,NULL),(370,2,'Galaxy S4 Active i9295',NULL,NULL,NULL),(371,2,'Galaxy S4 Mini i9195',NULL,NULL,NULL),(372,2,'Galaxy S4 4G i9507',NULL,NULL,NULL),(373,2,'Galaxy S4 4G i9505',NULL,NULL,NULL),(374,2,'Galaxy S4 i9506',NULL,NULL,NULL),(375,2,'Galaxy S4 i9500',NULL,NULL,NULL),(376,2,'Other',NULL,'2022-02-09 06:44:25','2022-02-09 06:44:25'),(377,11,'Nokia 1',NULL,NULL,NULL),(378,11,'Nokia 1.3',NULL,NULL,NULL),(379,11,'Nokia 2.4',NULL,NULL,NULL),(380,11,'Nokia 3.4',NULL,NULL,NULL),(381,11,'Nokia 5.3',NULL,NULL,NULL),(382,11,'Nokia 8.3s',NULL,NULL,NULL),(383,11,'Nokia 9 Pureview',NULL,NULL,NULL),(384,11,'Nokia C1/C2',NULL,NULL,NULL),(385,11,'Nokia 1 Plus',NULL,NULL,NULL),(386,11,'Nokia 3.1 Plus',NULL,NULL,NULL),(387,11,'Nokia 7.1 Plus',NULL,NULL,NULL),(388,11,'Nokia 8.1 Plus / X71',NULL,NULL,NULL),(389,11,'E5',NULL,NULL,NULL),(390,11,'5230',NULL,NULL,NULL),(391,11,'C7',NULL,NULL,NULL),(392,11,'N8',NULL,NULL,NULL),(393,11,'N97 Mini',NULL,NULL,NULL),(394,11,'Lumia 520',NULL,NULL,NULL),(395,11,'Lumia 650',NULL,NULL,NULL),(396,11,'Lumia 640 XL',NULL,NULL,NULL),(397,11,'Lumia 640',NULL,NULL,NULL),(398,11,'Lumia 635',NULL,NULL,NULL),(399,11,'Lumia 630',NULL,NULL,NULL),(400,11,'Lumia 625',NULL,NULL,NULL),(401,11,'Lumia 620',NULL,NULL,NULL),(402,11,'Lumia 730',NULL,NULL,NULL),(403,11,'Lumia 720',NULL,NULL,NULL),(404,11,'Lumia 710',NULL,NULL,NULL),(405,11,'Lumia 830',NULL,NULL,NULL),(406,11,'Lumia 820',NULL,NULL,NULL),(407,11,'Lumia 800',NULL,NULL,NULL),(408,11,'Lumia 950 XL',NULL,NULL,NULL),(409,11,'Lumia 950',NULL,NULL,NULL),(410,11,'Lumia 930',NULL,NULL,NULL),(411,11,'Lumia 925',NULL,NULL,NULL),(412,11,'Lumia 920',NULL,NULL,NULL),(413,11,'Lumia 1320',NULL,NULL,NULL),(414,11,'Lumia 1020',NULL,NULL,NULL),(415,11,'Nokia 8.1 / X7',NULL,NULL,NULL),(416,11,'Nokia 8 Sirocco',NULL,NULL,NULL),(417,11,'Nokia 8',NULL,NULL,NULL),(418,11,'Nokia 7.2',NULL,NULL,NULL),(419,11,'Nokia 7.1',NULL,NULL,NULL),(420,11,'Nokia 7 Plus',NULL,NULL,NULL),(421,11,'Nokia 7',NULL,NULL,NULL),(422,11,'Nokia 6.2',NULL,NULL,NULL),(423,11,'Nokia 6.1 Plus / X6',NULL,NULL,NULL),(424,11,'Nokia 6.1',NULL,NULL,NULL),(425,11,'Nokia 6 Plus',NULL,NULL,NULL),(426,11,'Nokia 6',NULL,NULL,NULL),(427,11,'Nokia 5.1 Plus / X5',NULL,NULL,NULL),(428,11,'Nokia 5.1',NULL,NULL,NULL),(429,11,'Nokia 5',NULL,NULL,NULL),(430,11,'Nokia 4.2',NULL,NULL,NULL),(431,11,'Nokia 3.2',NULL,NULL,NULL),(432,11,'Nokia 3.1',NULL,NULL,NULL),(433,11,'Nokia 3',NULL,NULL,NULL),(434,11,'Nokia 2.3',NULL,NULL,NULL),(435,11,'Nokia 2.2',NULL,NULL,NULL),(436,11,'Nokia 2.1',NULL,NULL,NULL),(437,11,'Nokia 2',NULL,NULL,NULL),(438,7,'Oppo Find X2 Lite',NULL,NULL,NULL),(439,7,'Oppo Find X2 Neo',NULL,NULL,NULL),(440,7,'Oppo A3s',NULL,NULL,NULL),(441,7,'Oppo F9',NULL,NULL,NULL),(442,7,'Oppo Realme X2',NULL,NULL,NULL),(443,7,'Oppo Find X',NULL,NULL,NULL),(444,7,'Oppo Mirror 5',NULL,NULL,NULL),(445,7,'Oppo Reno',NULL,NULL,NULL),(446,7,'Oppo Reno Z',NULL,NULL,NULL),(447,7,'Oppo Reno 10x zoom',NULL,NULL,NULL),(448,7,'Oppo Reno Ace',NULL,NULL,NULL),(449,7,'Oppo Reno 5G',NULL,NULL,NULL),(450,7,'Realme 6 Pro',NULL,NULL,NULL),(451,7,'Realme 6',NULL,NULL,NULL),(452,7,'Realme C3',NULL,NULL,NULL),(453,7,'Realme X2 Pro',NULL,NULL,NULL),(454,7,'RealMe X',NULL,NULL,NULL),(455,7,'RealMe 2 Pro',NULL,NULL,NULL),(456,7,'Realme 1',NULL,NULL,NULL),(457,7,'RealMe 3 Pro',NULL,NULL,NULL),(458,7,'RealMe Q',NULL,NULL,NULL),(459,7,'RealMe 5',NULL,NULL,NULL),(460,7,'RealMe 5 Pro',NULL,NULL,NULL),(461,7,'RealMe 2',NULL,NULL,NULL),(462,7,'RealMe U1',NULL,NULL,NULL),(463,7,'RealMe C1',NULL,NULL,NULL),(464,7,'Oppo A52',NULL,NULL,NULL),(465,7,'Oppo A9 2020',NULL,NULL,NULL),(466,7,'Oppo A5 2020',NULL,NULL,NULL),(467,7,'Oppo A91',NULL,NULL,NULL),(468,7,'Oppo A9X',NULL,NULL,NULL),(469,7,'Oppo A9',NULL,NULL,NULL),(470,7,'Oppo A7X',NULL,NULL,NULL),(471,7,'Oppo A7',NULL,NULL,NULL),(472,7,'Oppo AX7',NULL,NULL,NULL),(473,7,'Oppo A5S (AX5S)',NULL,NULL,NULL),(474,7,'Oppo AX5',NULL,NULL,NULL),(475,7,'Oppo A5',NULL,NULL,NULL),(476,7,'Oppo A83 2018',NULL,NULL,NULL),(477,7,'Oppo A79',NULL,NULL,NULL),(478,7,'OPPO A59',NULL,NULL,NULL),(479,7,'OPPO A53',NULL,NULL,NULL),(480,7,'Oppo A37',NULL,NULL,NULL),(481,7,'Oppo A73',NULL,NULL,NULL),(482,7,'Oppo A31 2020',NULL,NULL,NULL),(483,7,'Oppo F1s',NULL,NULL,NULL),(484,7,'Oppo F1 Plus',NULL,NULL,NULL),(485,7,'Oppo F1',NULL,NULL,NULL),(486,7,'Oppo R17 Pro',NULL,NULL,NULL),(487,7,'Oppo R17',NULL,NULL,NULL),(488,7,'Oppo R11S',NULL,NULL,NULL),(489,7,'Oppo R15 Pro',NULL,NULL,NULL),(490,7,'Oppo R15',NULL,NULL,NULL),(491,7,'Oppo R11S Plus',NULL,NULL,NULL),(492,7,'Oppo R11 Plus',NULL,NULL,NULL),(493,7,'Oppo R11',NULL,NULL,NULL),(494,7,'Oppo R9s Plus',NULL,NULL,NULL),(495,7,'Oppo R9s',NULL,NULL,NULL),(496,7,'Oppo R9 Plus',NULL,NULL,NULL),(497,7,'Oppo R9',NULL,NULL,NULL),(498,7,'Oppo R7s',NULL,NULL,NULL),(499,7,'Oppo R7 Plus',NULL,NULL,NULL),(500,14,'OnePlus Nord',NULL,NULL,NULL),(501,14,'OnePlus 8 Pro',NULL,NULL,NULL),(502,14,'OnePlus 8',NULL,NULL,NULL),(503,14,'OnePlus 7T',NULL,NULL,NULL),(504,14,'OnePlus 7 Pro',NULL,NULL,NULL),(505,14,'Oneplus 7',NULL,NULL,NULL),(506,14,'OnePlus 6T',NULL,NULL,NULL),(507,14,'OnePlus 6',NULL,NULL,NULL),(508,14,'OnePlus 5T',NULL,NULL,NULL),(509,14,'OnePlus 5',NULL,NULL,NULL),(510,14,'OnePlus 3T',NULL,NULL,NULL),(511,14,'OnePlus 3',NULL,NULL,NULL),(512,14,'OnePlus 2',NULL,NULL,NULL),(513,14,'One Plus One',NULL,NULL,NULL),(514,14,'OnePlus X',NULL,NULL,NULL),(515,14,'Other',NULL,NULL,NULL),(651,4,'Xperia L3',NULL,NULL,NULL),(652,4,'Xperia 10 Plus',NULL,NULL,NULL),(653,4,'Xperia 10',NULL,NULL,NULL),(654,4,'xPeria U ST25i',NULL,NULL,NULL),(655,4,'XPeria P LT22i',NULL,NULL,NULL),(656,4,'Xperia Play',NULL,NULL,NULL),(657,4,'Xperia C4',NULL,NULL,NULL),(658,4,'Xperia V lt25i',NULL,NULL,NULL),(659,4,'xPeria Arc/Arc S',NULL,NULL,NULL),(660,4,'XPeria S LT26i',NULL,NULL,NULL),(661,4,'Sony Z4 Tablet',NULL,NULL,NULL),(662,4,'Sony Z3 Tablet',NULL,NULL,NULL),(663,4,'Sony Z2 Tablet',NULL,NULL,NULL),(664,4,'Sony Z Tablet',NULL,NULL,NULL),(665,4,'Xperia M5',NULL,NULL,NULL),(666,4,'Xperia M4 Aqua',NULL,NULL,NULL),(667,4,'Xperia M2',NULL,NULL,NULL),(668,4,'xPeria M',NULL,NULL,NULL),(669,4,'XPeria Z L36',NULL,NULL,NULL),(670,4,'Xperia Z5 Premium',NULL,NULL,NULL),(671,4,'Xperia Z5 Compact',NULL,NULL,NULL),(672,4,'Xperia Z5',NULL,NULL,NULL),(673,4,'Xperia Z4 E6553',NULL,NULL,NULL),(674,4,'xPeria Z3 Compact',NULL,NULL,NULL),(675,4,'xPeria Z3 Plus',NULL,NULL,NULL),(676,4,'xPeria Z2',NULL,NULL,NULL),(677,4,'Xperia Z1 Compact',NULL,NULL,NULL),(678,4,'xPeria Z1 L39h',NULL,NULL,NULL),(679,4,'xPeria Z Ultra',NULL,NULL,NULL),(680,4,'Xperia XA2 Ultra',NULL,NULL,NULL),(681,4,'Xperia XA2',NULL,NULL,NULL),(682,4,'Xperia XA1 Ultra',NULL,NULL,NULL),(683,4,'Xperia XA1 Plus',NULL,NULL,NULL),(684,4,'Xperia XA1',NULL,NULL,NULL),(685,4,'xPeria XA',NULL,NULL,NULL),(686,4,'Xperia XZ3',NULL,NULL,NULL),(687,4,'Xperia XZ2',NULL,NULL,NULL),(688,4,'Xperia XZ1 Compact',NULL,NULL,NULL),(689,4,'Xperia XZ1',NULL,NULL,NULL),(690,4,'Xperia XZ Premium',NULL,NULL,NULL),(691,4,'Xperia XZ',NULL,NULL,NULL),(692,4,'Xperia X Performance',NULL,NULL,NULL),(693,4,'xPeria X',NULL,NULL,NULL),(694,4,'Xperia X10',NULL,NULL,NULL),(695,4,'Other',NULL,NULL,NULL),(696,3,'Y53',NULL,NULL,NULL),(787,5,'Xiaomi Black Shark Helo',NULL,NULL,NULL),(788,5,'Xiaomi Black Shark 2',NULL,NULL,NULL),(789,5,'Xiaomi Black Shark',NULL,NULL,NULL),(790,5,'Xiaomi Pocophone F1',NULL,NULL,NULL),(791,5,'Xiaomi Mi Pad 4 Plus',NULL,NULL,NULL),(792,5,'Xiaomi Mi Pad 4',NULL,NULL,NULL),(793,5,'Xiaomi Mi Pad 3',NULL,NULL,NULL),(794,5,'Xiaomi Mi Pad 2',NULL,NULL,NULL),(795,5,'Xiaomi Mi Pad 1',NULL,NULL,NULL),(796,5,'Xiaomi Redmi K30 Pro / Poco F2 Pro',NULL,NULL,NULL),(797,5,'Xiaomi Redmi K30 / Poco X2',NULL,NULL,NULL),(798,5,'Xiaomi Redmi K20 Pro',NULL,NULL,NULL),(799,5,'Xiaomi Redmi K20',NULL,NULL,NULL),(800,5,'Xiaomi Redmi 9A',NULL,NULL,NULL),(801,5,'Xiaomi Redmi 8a',NULL,NULL,NULL),(802,5,'Xiaomi Redmi 8',NULL,NULL,NULL),(803,5,'Xiaomi Redmi 7A',NULL,NULL,NULL),(804,5,'Xiaomi Redmi 7',NULL,NULL,NULL),(805,5,'Xiaomi Redmi 6A',NULL,NULL,NULL),(806,5,'Xiaomi Redmi 6',NULL,NULL,NULL),(807,5,'Xiaomi Redmi 5A',NULL,NULL,NULL),(808,5,'Xiaomi Redmi 5 Plus',NULL,NULL,NULL),(809,5,'Xiaomi Redmi 5',NULL,NULL,NULL),(810,5,'Xiaomi Redmi 4X',NULL,NULL,NULL),(811,5,'Xiaomi Redmi 4A',NULL,NULL,NULL),(812,5,'Xiaomi Redmi 4',NULL,NULL,NULL),(813,5,'Xiaomi Redmi 3S',NULL,NULL,NULL),(814,5,'Xiaomi Redmi 3',NULL,NULL,NULL),(815,5,'Xiaomi Redmi 2',NULL,NULL,NULL),(816,5,'Xiaomi Redmi 1S',NULL,NULL,NULL),(817,5,'Xiaomi Redmi Pro',NULL,NULL,NULL),(818,5,'Xiaomi Redmi S2',NULL,NULL,NULL),(819,5,'Xiaomi Redmi Note 9S',NULL,NULL,NULL),(820,5,'Xiaomi Redmi Note 9',NULL,NULL,NULL),(821,5,'Xiaomi Mi Note 10 Pro',NULL,NULL,NULL),(822,5,'Xiaomi Mi Note 10',NULL,NULL,NULL),(823,5,'Xiaomi Redmi Note 8T',NULL,NULL,NULL),(824,5,'Xiaomi Redmi Note 8 Pro',NULL,NULL,NULL),(825,5,'Xiaomi Redmi Note 8',NULL,NULL,NULL),(826,5,'Xiaomi Redmi Note 7 Pro',NULL,NULL,NULL),(827,5,'Xiaomi Redmi Note 7',NULL,NULL,NULL),(828,5,'Xiaomi Redmi Note 6 Pro',NULL,NULL,NULL),(829,5,'Xiaomi Redmi Note 5A Prime',NULL,NULL,NULL),(830,5,'Xiaomi Redmi Note 5A',NULL,NULL,NULL),(831,5,'Xiaomi Redmi Note 5 Pro',NULL,NULL,NULL),(832,5,'Xiaomi Redmi Note 5',NULL,NULL,NULL),(833,5,'Xiaomi Redmi Note 4X',NULL,NULL,NULL),(834,5,'Xiaomi Redmi Note 4',NULL,NULL,NULL),(835,5,'Xiaomi Redmi Note 3 Pro',NULL,NULL,NULL),(836,5,'Xiaomi Redmi Note 3',NULL,NULL,NULL),(837,5,'Xiaomi Redmi Note 2',NULL,NULL,NULL),(838,5,'Xiaomi Redmi Note 4G',NULL,NULL,NULL),(839,5,'Xiaomi Redmi Note 3G',NULL,NULL,NULL),(840,5,'Xiaomi Mi Note 2',NULL,NULL,NULL),(841,5,'Xiaomi Mi Note 1',NULL,NULL,NULL),(842,5,'Xiaomi Mi Note Pro',NULL,NULL,NULL),(843,5,'Xiaomi Mi Max 3',NULL,NULL,NULL),(844,5,'Xiaomi Mi Max 2',NULL,NULL,NULL),(845,5,'Xiaomi Mi Max',NULL,NULL,NULL),(846,5,'Xiaomi Mi Mix 3',NULL,NULL,NULL),(847,5,'Xiaomi MI Mix 2S',NULL,NULL,NULL),(848,5,'Xiaomi Mi Mix 2',NULL,NULL,NULL),(849,5,'Xiaomi Mi Mix',NULL,NULL,NULL),(850,5,'Xiaomi Mi 10 Pro',NULL,NULL,NULL),(851,5,'Xiaomi Mi 10',NULL,NULL,NULL),(852,5,'Xiaomi Mi A3',NULL,NULL,NULL),(853,5,'Xiaomi Mi 9 SE',NULL,NULL,NULL),(854,5,'Xiaomi Mi 9T',NULL,NULL,NULL),(855,5,'Xiaomi Mi 9 Pro',NULL,NULL,NULL),(856,5,'Xiaomi Mi 9 Lite',NULL,NULL,NULL),(857,5,'Xiaomi Mi 9',NULL,NULL,NULL),(858,5,'Xiaomi Mi 8 SE',NULL,NULL,NULL),(859,5,'Xiaomi MI 8 Lite',NULL,NULL,NULL),(860,5,'Xiaomi Mi 8',NULL,NULL,NULL),(861,5,'Xiaomi Mi 6',NULL,NULL,NULL),(862,5,'Xiaomi Mi 5S Plus',NULL,NULL,NULL),(863,5,'Xiaomi Mi 5s',NULL,NULL,NULL),(864,5,'Xiaomi Mi 5C',NULL,NULL,NULL),(865,5,'Xiaomi Mi 5',NULL,NULL,NULL),(866,5,'Xiaomi Mi 4S',NULL,NULL,NULL),(867,5,'Xiaomi Mi 4i',NULL,NULL,NULL),(868,5,'Xiaomi Mi 4C',NULL,NULL,NULL),(869,5,'Xiaomi Mi 4',NULL,NULL,NULL),(870,5,'Xiaomi Mi 3',NULL,NULL,NULL),(871,5,'Xiaomi Mi 2A',NULL,NULL,NULL),(872,5,'Xiaomi Mi A2 Lite',NULL,NULL,NULL),(873,5,'Xiaomi Mi A2',NULL,NULL,NULL),(874,5,'Xiaomi Mi A1',NULL,NULL,NULL),(875,5,'Other',NULL,NULL,NULL),(876,12,'Axon 20 5G',NULL,NULL,NULL),(877,12,'Nubia Red Magic 5s',NULL,NULL,NULL),(878,12,'Axon 11 SE 5G',NULL,NULL,NULL),(879,12,'Axon 11 SE',NULL,NULL,NULL),(880,12,'Blade 10 Prime',NULL,NULL,NULL),(881,12,'Blade 20',NULL,NULL,NULL),(882,12,'Nubia Red Magic',NULL,NULL,NULL),(883,12,'Nubia Red Magic 3',NULL,NULL,NULL),(884,12,'Blade A7',NULL,NULL,NULL),(885,12,'Blade A7 Vita',NULL,NULL,NULL),(886,12,'Nubia Red Magic Mars',NULL,NULL,NULL),(887,12,'Nubia Red Magic',NULL,NULL,NULL),(888,12,'Blade V10 Vita',NULL,NULL,NULL),(889,12,'Blade V10',NULL,NULL,NULL),(890,12,'Axon 10 Pro',NULL,NULL,NULL),(891,12,'Nubia Z20',NULL,NULL,NULL),(892,12,'Nubia X 5G',NULL,NULL,NULL),(893,12,'Nubia Red Magic 5G',NULL,NULL,NULL),(894,12,'Nubia Red Magic 7',NULL,NULL,NULL),(895,12,'Other',NULL,NULL,NULL),(896,11,'Other',NULL,'2022-02-10 03:10:35','2022-02-10 03:10:35'),(897,7,'Other',NULL,'2022-02-10 03:11:07','2022-02-10 03:11:07'),(898,3,'Y91i',NULL,NULL,NULL),(899,3,'Y11',NULL,NULL,NULL),(900,3,'Y1s',NULL,NULL,NULL),(901,3,'Y12s',NULL,NULL,NULL),(902,3,'Y20A',NULL,NULL,NULL),(903,3,'Y20i',NULL,NULL,NULL),(904,3,'Y20',NULL,NULL,NULL),(905,3,'Y20G',NULL,NULL,NULL),(906,3,'BY30',NULL,NULL,NULL),(907,3,'Y31',NULL,NULL,NULL),(908,3,'Y50',NULL,NULL,NULL),(909,3,'Y51',NULL,NULL,NULL),(910,3,'V20SE',NULL,NULL,NULL),(911,3,'V20',NULL,NULL,NULL),(912,3,'V19',NULL,NULL,NULL),(913,3,'Other',NULL,'2022-02-10 04:11:10','2022-02-10 04:11:10');
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
  `brand` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_img` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Apple',NULL,NULL,NULL),(2,'Sumsung',NULL,NULL,NULL),(3,'Vivo',NULL,NULL,NULL),(4,'Sony',NULL,NULL,NULL),(5,'Xiaomi',NULL,NULL,NULL),(6,'Huawei',NULL,NULL,NULL),(7,'Oppo',NULL,NULL,NULL),(8,'Motorola',NULL,NULL,NULL),(9,'HTC',NULL,NULL,NULL),(10,'BlackBerry',NULL,NULL,NULL),(11,'Nokia',NULL,NULL,NULL),(12,'ZTE',NULL,NULL,NULL),(13,'Google',NULL,NULL,NULL),(14,'One Plus',NULL,NULL,NULL),(15,'Asus',NULL,NULL,NULL),(16,'MS Surface',NULL,NULL,NULL),(17,'Other',NULL,'2022-02-08 05:17:46','2022-02-08 05:17:46');
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
  `views` int NOT NULL,
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
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimensions` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
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
  `issue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issues`
--

LOCK TABLES `issues` WRITE;
/*!40000 ALTER TABLE `issues` DISABLE KEYS */;
INSERT INTO `issues` VALUES (1,'Screen Replacement',NULL,NULL),(2,'Battery Replacement',NULL,NULL),(3,'Front Camera Replacement',NULL,NULL),(4,'Camera Lens Replacement',NULL,NULL),(5,'Charging Port Replacement',NULL,NULL),(9,'Earspeaker Replacement',NULL,NULL),(10,'Loudspeaker Replacement',NULL,NULL),(11,'Vibrator Replacement',NULL,NULL),(12,'Power Volume Flex Replacement ',NULL,NULL),(17,'Wifi Antena Replacement',NULL,NULL),(18,'Water Damage',NULL,NULL),(19,'Other',NULL,NULL);
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
  `queue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_11_16_141627_create_files_table',1),(6,'2021_11_16_150741_create_roles_table',1),(7,'2021_11_16_150757_create_permissions_table',1),(8,'2021_11_16_150929_create_role_user_table',1),(9,'2021_11_16_151033_create_permission_role__table',1),(10,'2021_11_30_072031_create_brands_table',1),(11,'2021_11_30_072142_create_brand_modals_table',1),(12,'2021_12_02_093010_create_issues_table',1),(13,'2021_12_03_105241_create_quotes_table',1),(14,'2022_01_12_063744_create_jobs_table',1),(15,'2022_01_21_095822_create_vans_table',1),(16,'2022_01_28_095622_create_tickets_table',1),(17,'2022_02_04_064406_create_counters_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
INSERT INTO `permissions` VALUES (1,'view_user','user','View All user','2022-02-08 05:17:29','2022-02-08 05:17:29'),(2,'show_user','user','show single user','2022-02-08 05:17:29','2022-02-08 05:17:29'),(3,'create_user','user','create new user','2022-02-08 05:17:29','2022-02-08 05:17:29'),(4,'edit_user','user','edit user','2022-02-08 05:17:29','2022-02-08 05:17:29'),(5,'delete_user','user','delete user','2022-02-08 05:17:29','2022-02-08 05:17:29'),(6,'view_role','role','View All role','2022-02-08 05:17:29','2022-02-08 05:17:29'),(7,'show_role','role','show role','2022-02-08 05:17:29','2022-02-08 05:17:29'),(8,'create_role','role','create role','2022-02-08 05:17:29','2022-02-08 05:17:29'),(9,'edit_role','role','edit role','2022-02-08 05:17:29','2022-02-08 05:17:29'),(10,'delete_role','role','delete role','2022-02-08 05:17:29','2022-02-08 05:17:29');
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
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `issue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `describtion` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_preference` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `repairing_methods` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `reply` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes`
--

LOCK TABLES `quotes` WRITE;
/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
INSERT INTO `quotes` VALUES (1,1,2,'Battery Replacement','Muhammad Tanveer','screen dim','mtanveerraj002@gmail.com','36656654662','Email','Mail In','0',NULL,'2022-02-10 03:30:49','2022-02-10 03:30:49'),(2,15,30,'Front Camera Replacement','Muhammad Tanveer','change this','mtanveerraj002@gmail.com','5645645456','Email','Van','0',NULL,'2022-02-10 03:59:03','2022-02-10 03:59:03');
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
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
INSERT INTO `roles` VALUES (1,'admin','admin have all permission','2022-02-08 05:17:29','2022-02-08 05:17:29');
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
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
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
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` bigint DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `users` VALUES (1,'admin','admin@admin.com',NULL,NULL,'$2y$10$V9bivui4BRHHyO/4rgt1VOtv92IiUhsNMZlOxzB89z2jETGCVrOsK',NULL,'2022-02-08 05:17:29','2022-02-08 05:17:29');
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
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
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

-- Dump completed on 2022-02-10 14:14:40
