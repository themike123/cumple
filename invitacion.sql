-- MySQL dump 10.16  Distrib 10.1.44-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: invitacion
-- ------------------------------------------------------
-- Server version	10.1.44-MariaDB-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `invitacion`
--

DROP TABLE IF EXISTS `invitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invitacion` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `nombre_tutor` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `domicilio` varchar(200) NOT NULL,
  `referencia` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invitacion`
--

LOCK TABLES `invitacion` WRITE;
/*!40000 ALTER TABLE `invitacion` DISABLE KEYS */;
INSERT INTO `invitacion` VALUES (1,'miguel','miguel paap','migutl@gmail.com','9512','9513','Mi domicili',''),(2,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili','hola'),(3,'miguel','miguel paap','themike123me@gmail.com','9512','','Mi domicili',''),(4,'miguel','miguel paap','themike123me@gmail.com','9512','','Mi domicili',''),(5,'miguel','miguel paap','themike123me@gmail.com','9512','','Mi domicili',''),(6,'miguel','miguel paap','themike123me@gmail.com','9512','','Mi domicili',''),(7,'miguel','miguel paap','themike123me@gmail.com','9512','','Mi domicili',''),(8,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(9,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(10,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(11,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(12,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(13,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(14,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(15,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(16,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(17,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(18,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(19,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(20,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(21,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(22,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(23,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(24,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(25,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(26,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(27,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(28,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(29,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(30,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(31,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(32,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(33,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(34,'miguel','miguel paap','miguel.ramirez@facturacionmoderna.com','9512','','Mi domicili',''),(35,'','','','','','','');
/*!40000 ALTER TABLE `invitacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2021-03-06-021958','App\\Database\\Migrations\\Invitacion','default','App',1615006661,1),(2,'2021-03-06-022038','App\\Database\\Migrations\\User','default','App',1615006662,1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-12 15:11:13
