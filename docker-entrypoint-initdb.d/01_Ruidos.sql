-- MySQL dump 10.14  Distrib 5.5.68-MariaDB, for Linux (x86_64)
--
-- Host: 10.9.8.24    Database: notificaciones
-- ------------------------------------------------------
-- Server version	5.5.68-MariaDB

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
-- Table structure for table `Ruidos`
--

DROP TABLE IF EXISTS `ruidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ruidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asae` int(11) DEFAULT NULL,
  `ambiente` int(11) DEFAULT NULL,
  `perido` int(11) DEFAULT NULL,
  `asa` int(11) DEFAULT NULL,
  `recinto` int(11) DEFAULT NULL,
  `usoPredominante` int(11) DEFAULT NULL,
  `limiteMaximoPermitido` int(11) DEFAULT NULL,
  `correccion` int(11) DEFAULT NULL,
  `createdById` int(11) DEFAULT NULL,
  `createdDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,  
  `modifyById` int(11) DEFAULT NULL,
  `modifyDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isActive` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ruidos`
--

LOCK TABLES `Ruidos` WRITE;
/*!40000 ALTER TABLE `Ruidos` DISABLE KEYS */;
INSERT INTO `Ruidos` VALUES (1,7546,7514,5125,0,0,0,60,0),(2,7546,7514,5125,0,0,0,60,0),(3,7546,7514,5126,0,0,0,50,0),(4,7546,7513,5125,5881,7554,0,60,0),(5,7546,7513,5126,5881,7554,0,50,0),(6,7547,7514,5125,0,0,0,65,0),(7,7547,7514,5126,0,0,0,50,0),(8,7547,7513,5125,5881,7554,0,65,0),(9,7547,7513,5126,5881,7554,0,50,0),(10,7548,7514,5125,0,0,0,70,0),(11,7548,7514,5126,0,0,0,60,0),(12,7548,7513,5125,5881,5882,0,55,0),(13,7548,7513,5125,5881,5883,0,60,0),(14,7548,7513,5125,5881,7554,0,70,0),(15,7548,7513,5126,5881,5882,0,45,0),(16,7548,7513,5126,5881,5883,0,50,0),(17,7548,7513,5126,5881,7554,0,60,0),(18,7549,7514,5125,0,0,0,75,0),(19,7549,7514,5126,0,0,0,70,0),(20,7549,7513,5125,5881,5882,0,60,0),(21,7549,7513,5125,5881,5883,0,65,0),(22,7549,7513,5125,5881,7554,0,75,0),(23,7549,7513,5126,5881,5882,0,50,0),(24,7549,7513,5126,5881,5883,0,55,0),(25,7549,7513,5126,5881,7554,0,70,0),(26,7550,7514,5125,0,0,0,80,0),(27,7550,7514,5126,0,0,0,75,0),(28,7550,7513,5125,5881,5882,0,60,0),(29,7550,7513,5125,5881,5883,0,65,0),(30,7550,7513,5125,5881,7554,0,80,0),(31,7550,7513,5126,5881,5882,0,50,0),(32,7550,7513,5126,5881,5883,0,55,0),(33,7550,7513,5126,5881,7554,0,75,0),(34,7551,7514,5125,0,0,0,70,0),(35,7551,7514,5126,0,0,0,60,0),(36,7551,7513,5125,5881,5882,0,55,0),(37,7551,7513,5125,5881,5883,0,60,0),(38,7551,7513,5125,5881,7554,0,70,0),(39,7551,7513,5126,5881,5882,0,45,0),(40,7551,7513,5126,5881,5883,0,50,0),(41,7551,7513,5126,5881,7554,0,60,0),(42,7552,7514,5125,0,0,0,75,0),(43,7552,7514,5126,0,0,0,70,0),(44,7552,7513,5125,5881,5882,0,60,0),(45,7552,7513,5125,5881,5883,0,65,0),(46,7552,7513,5125,5881,7554,0,75,0),(47,7552,7513,5126,5881,5882,0,50,0),(48,7552,7513,5126,5881,5883,0,55,0),(49,7552,7513,5126,5881,7554,0,70,0),(50,7553,7514,5125,0,0,0,80,0),(51,7553,7514,5126,0,0,0,75,0),(52,7553,7513,5125,5881,5882,0,60,0),(53,7553,7513,5125,5881,5883,0,65,0),(54,7553,7513,5125,5881,7554,0,80,0),(55,7553,7513,5126,5881,5882,0,50,0),(56,7553,7513,5126,5881,5883,0,55,0),(57,7553,7513,5126,5881,7554,0,75,0),(58,0,7513,5125,5880,0,5393,55,0),(59,0,7513,5125,5880,0,5394,60,0),(60,0,7513,5125,5880,0,5889,60,0),(61,0,7513,5126,5880,0,5393,55,0),(62,0,7513,5126,5880,0,5394,60,0),(63,0,7513,5126,5880,0,5889,60,0),(64,7546,7513,5125,5881,5882,0,50,7),(65,7546,7513,5125,5881,5883,0,55,7),(66,7546,7513,5126,5881,5882,0,40,7),(67,7546,7513,5126,5881,5883,0,45,7),(68,7547,7513,5125,5881,5882,0,50,7),(69,7547,7513,5125,5881,5883,0,55,7),(70,7547,7513,5126,5881,5882,0,40,7),(71,7547,7513,5126,5881,5883,0,45,7),(74,0,7513,5125,5880,0,5390,50,7),(75,0,7513,5125,5880,0,5391,50,7),(76,0,7513,5125,5880,0,5392,50,7),(77,0,7513,5126,5880,0,5390,40,7),(78,0,7513,5126,5880,0,5391,50,7),(79,0,7513,5126,5880,0,5392,50,7),(80,5894,7513,0,0,0,0,70,0),(81,5895,7514,0,0,0,0,70,0),(82,5106,7514,5126,0,0,0,55,0),(83,5107,7514,5126,0,0,0,65,0),(86,0,7513,5126,5880,0,5889,60,0),(87,7553,7513,5125,5881,5882,0,60,0),(88,5106,7513,5126,0,7554,0,55,0),(89,5107,7513,5126,0,7554,0,65,0);
/*!40000 ALTER TABLE `Ruidos` ENABLE KEYS */;
UNLOCK TABLES;