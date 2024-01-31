
--
-- Table structure for table `tipo_actuacion`
--

DROP TABLE IF EXISTS `tipo_actuacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_actuacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipoActuacion` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D07B3C9D48E11ED9` (`tipoActuacion`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_actuacion`
--

LOCK TABLES `tipo_actuacion` WRITE;
/*!40000 ALTER TABLE `tipo_actuacion` DISABLE KEYS */;
INSERT INTO `tipo_actuacion` VALUES (5,'CA'),(7,'CO'),(1,'EE'),(2,'EX'),(8,'IF'),(4,'NO'),(3,'PA'),(6,'RE');
/*!40000 ALTER TABLE `tipo_actuacion` ENABLE KEYS */;
UNLOCK TABLES;
