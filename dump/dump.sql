-- MySQL dump 10.13  Distrib 5.7.24, for macos10.14 (x86_64)
--
-- Host: localhost    Database: concertsBy
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `concerts`
--

DROP TABLE IF EXISTS `concerts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `concerts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_type_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `concerts_music_type_id_foreign` (`music_type_id`),
  CONSTRAINT `concerts_music_type_id_foreign` FOREIGN KEY (`music_type_id`) REFERENCES `music_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concerts`
--

LOCK TABLES `concerts` WRITE;
/*!40000 ALTER TABLE `concerts` DISABLE KEYS */;
INSERT INTO `concerts` VALUES (1,'LINDEMANN',5,NULL,NULL),(2,'Макс Барских',5,NULL,NULL),(3,'Ляпис 98',4,NULL,NULL),(4,'Ирина Аллегрова',4,NULL,NULL),(5,'HammAli & Navai',4,NULL,NULL),(6,'JONY, ELMAN, ANDRO',5,NULL,NULL),(7,'Полина Гагарина',5,NULL,NULL),(8,'MONATIK',6,NULL,NULL),(9,'Дискотека СССР',6,NULL,NULL),(10,'Димаш Кудайберген',6,NULL,NULL),(11,'Nothing But Thieves',7,NULL,NULL),(12,'Мот',8,NULL,NULL),(13,'Би-2',9,NULL,NULL);
/*!40000 ALTER TABLE `concerts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_logs`
--

DROP TABLE IF EXISTS `event_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_logs`
--

LOCK TABLES `event_logs` WRITE;
/*!40000 ALTER TABLE `event_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `place_id` int(10) unsigned NOT NULL,
  `concert_id` int(10) unsigned NOT NULL,
  `concert_date` date NOT NULL,
  `price` double NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  `limit` int(11) NOT NULL DEFAULT '300',
  `count_sell` int(11) NOT NULL DEFAULT '100',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_place_id_foreign` (`place_id`),
  KEY `events_concert_id_foreign` (`concert_id`),
  CONSTRAINT `events_concert_id_foreign` FOREIGN KEY (`concert_id`) REFERENCES `concerts` (`id`),
  CONSTRAINT `events_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,1,1,'2020-03-20',49,'17.jpg',0,1200,457,NULL,'2020-02-07 08:03:40'),(2,2,2,'2020-02-29',74,'1.jpg',0,12300,3208,NULL,'2019-05-25 11:44:54'),(3,3,3,'2019-12-29',85,'12.jpg',0,2300,1044,NULL,'2019-12-19 03:01:11'),(4,2,4,'2020-03-07',65,'ruki.jpg',0,7200,2010,NULL,NULL),(5,3,5,'2020-03-20',90,'3.jpg',0,2500,565,NULL,NULL),(6,3,6,'2020-02-16',80,'4.jpg',0,2400,638,NULL,NULL),(7,2,7,'2020-10-16',85,'5.jpg',0,5340,2148,NULL,NULL),(8,2,8,'2020-10-24',93,'scorp.jpg',0,5000,1320,NULL,NULL),(9,2,9,'2020-02-22',75,'len.jpg',1,8300,2412,NULL,NULL),(10,2,10,'2020-04-04',65,'fadeev.jpg',1,3700,1163,NULL,NULL),(11,3,11,'2020-03-25',70,'rasmus.jpg',1,4500,1237,NULL,NULL),(12,3,12,'2020-03-26',47,'olya.jpg',1,2000,822,NULL,NULL),(13,4,13,'2019-08-24',36,'22.png',1,14000,3649,NULL,NULL);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (112,'2014_10_12_000000_create_users_table',1),(113,'2014_10_12_100000_create_password_resets_table',1),(114,'2018_12_15_192316_create_user_payments',1),(115,'2018_12_15_193648_create_payments',1),(116,'2018_12_15_194927_create_orders',1),(117,'2018_12_15_195248_create_event',1),(118,'2018_12_15_195536_create_places',1),(119,'2018_12_15_195845_create_concerts',1),(120,'2018_12_19_121948_add_key',1),(121,'2018_12_25_140636_music_types',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `music_types`
--

DROP TABLE IF EXISTS `music_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `music_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `music_types_parent_id_foreign` (`parent_id`),
  CONSTRAINT `music_types_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `music_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `music_types`
--

LOCK TABLES `music_types` WRITE;
/*!40000 ALTER TABLE `music_types` DISABLE KEYS */;
INSERT INTO `music_types` VALUES (1,NULL,'90-2000s',NULL,NULL),(2,1,'BRIT-POP',NULL,NULL),(3,3,'GRUNGE',NULL,NULL),(4,2,'Hard Rock',NULL,NULL),(5,5,'Heavy Metal',NULL,NULL),(6,6,'Power Metal',NULL,NULL),(7,2,'Old School Rap',NULL,NULL),(8,8,'HIP-HOP',NULL,NULL),(9,9,'TRAP',NULL,NULL);
/*!40000 ALTER TABLE `music_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `concert_places_id` int(10) unsigned NOT NULL,
  `payment_id` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_concert_places_id_foreign` (`concert_places_id`),
  KEY `orders_payment_id_foreign` (`payment_id`),
  CONSTRAINT `orders_concert_places_id_foreign` FOREIGN KEY (`concert_places_id`) REFERENCES `events` (`id`),
  CONSTRAINT `orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `user_payments` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,2,2,1,74,'2019-05-14 19:37:38','2019-05-14 19:37:38'),(2,2,3,1,74,'2019-05-25 11:44:54','2019-05-25 11:44:54'),(3,1,4,1,49,'2019-12-09 14:53:04','2019-12-09 14:53:04');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
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
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,'Master Card',NULL,NULL),(2,'Visa',NULL,NULL),(3,'Ерип',NULL,NULL);
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `place_logs`
--

DROP TABLE IF EXISTS `place_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `place_logs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `msg` varchar(255) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `place_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `place_logs`
--

LOCK TABLES `place_logs` WRITE;
/*!40000 ALTER TABLE `place_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `place_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `places`
--

DROP TABLE IF EXISTS `places`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `places` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `places`
--

LOCK TABLES `places` WRITE;
/*!40000 ALTER TABLE `places` DISABLE KEYS */;
INSERT INTO `places` VALUES (1,'Дворец Спорта','пр-т. Победителей 4, г.Минск,',NULL,NULL),(2,'Минск Арена','пр-т. Победителей 111, Минск',NULL,NULL),(3,'PRIME HALL','пр-т. Победителей 65, Минск',NULL,NULL),(4,'Стадион динамо','ул. Кирова 8, Минск',NULL,NULL),(5,'Клуб Republic','ул. Кирова 65, Минск',NULL,NULL);
/*!40000 ALTER TABLE `places` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_payments`
--

DROP TABLE IF EXISTS `user_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `payment_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_payments_user_id_foreign` (`user_id`),
  CONSTRAINT `user_payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_payments`
--

LOCK TABLES `user_payments` WRITE;
/*!40000 ALTER TABLE `user_payments` DISABLE KEYS */;
INSERT INTO `user_payments` VALUES (1,2,1,'2019-05-13 08:49:57','2019-05-13 08:49:57'),(2,3,1,'2019-05-14 19:37:38','2019-05-14 19:37:38'),(3,2,1,'2019-05-25 11:44:54','2019-05-25 11:44:54'),(4,2,1,'2019-12-09 14:53:03','2019-12-09 14:53:03'),(5,4,2,'2019-12-19 03:01:11','2019-12-19 03:01:11'),(6,5,2,'2020-02-07 08:03:40','2020-02-07 08:03:40');
/*!40000 ALTER TABLE `user_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'fgVg9dbgN4','gpcM9wVI7Q@gmail.com',NULL,'$2y$10$XciLTppgE.mIcZpy/ghSGuGum2o7j5GkETX9Lc5VfL7yl6zDw98TC',NULL,NULL,NULL),(2,'egor','egorvolovich@mail.ru',NULL,'$2y$10$rC/kDtKvRNlKkUnM/gm2peGO9AbNcWlKU6YNJvfY7kQ0SywRn6tGm',NULL,'2019-05-13 08:49:43','2019-05-13 08:49:43'),(3,'Villanele','villanele@gmail.com',NULL,'$2y$10$e7UvBvz5NMXVeWyCCEk76upzPjDrfb1eypdmqgruKo6z6arWiPmc2',NULL,'2019-05-14 19:37:33','2019-05-14 19:37:33'),(4,'Егор','1egorvolovich@mail.ru',NULL,'$2y$10$iOY1Jgt20.gmZQGwCartY.HpQI0tamQzmXBxZ.QCdl2PN4uolGYgC',NULL,'2019-12-19 03:00:46','2019-12-19 03:00:46'),(5,'jkfhdsguj','www.vint4re205@mail.ru',NULL,'$2y$10$OjQ0n1/9LL.hyF6N7DSxzORKn6zuJVc84gQAIPVJ7bfks3IccXPam','3w5iKpjiuwGBnHUhjkndGEPzeYMiTQqL6SlUPn46jPgHTvaKkL3TJJW0sday','2020-02-07 08:03:31','2020-02-07 08:03:31'),(6,'fgeergw','rg@mail.ru',NULL,'$2y$10$jPUxWysB4KwGh.QCzs9Z9.2k4BH2RxApjyuDS/pRxwUDwpLGkU7Q6','sagHDmrgezlgDcAxVKJBKev3UATyZoxXm6CyBtmdT3BV25Z3f1r9NJLuWOkx','2020-02-07 08:08:01','2020-02-07 08:08:01'),(7,'Yehor Valovich','37529@erwe.com',NULL,'$2y$10$r6mDgdiIHRb./C7AlbwO9.8Qd91PyRaKRGOXRCJClMJhnjGBPxLna','IJIO9gjAbzffuJcizXWlBAq9PGIydBjMw3zNJdLupzUDt9qcwkg4fhS4A4lL','2020-02-07 08:12:26','2020-02-07 08:12:26'),(8,'edfwd','egorervolovich@mail.ru',NULL,'$2y$10$FGKz7sfbmz4UlrQd0bqdm.LUeL1oVlhurbPTz5wl9o6EjKBtorxx6','f8FjwYSgc5gqzJvofjRAdHSBZALRdl0JDgXNZ8piTrb7w90GBUJmwfNupMM0','2020-02-07 08:14:08','2020-02-07 08:14:08'),(9,'Yeh','vika@gml.com',NULL,'$2y$10$K9l0RKBSt0AjUlbF6acoVurJ1w6ih2zeDsqYSCbDiB65vJXaFNzEu','KzlEIt63j58hCDca3zRufIpqHpOPssO48gg4vrcdUtR678aM90mcsvqme5R7','2020-02-07 08:15:52','2020-02-07 08:15:52'),(10,'fghd','egorv555olovich@mail.ru',NULL,'$2y$10$Hw/dC8DoFFTnc9xnez6zxOB/vPpxt6kLM2aCZIpOs5kVtkIKf7P7i',NULL,'2020-02-07 08:30:08','2020-02-07 08:30:08'),(11,'Виктория','vi@mail.ru',NULL,'$2y$10$b3c5N4vf72LzlaB4c/9dFOZ51iIupd28dL87RD67HgeywMk1Cykae',NULL,'2020-03-08 10:12:03','2020-03-08 10:12:03');
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

-- Dump completed on 2020-03-08 16:34:59
