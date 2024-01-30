

--
-- Table structure for table `acta_estado`
--

DROP TABLE IF EXISTS `acta_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acta_estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3301AC85265DE1E3` (`estado`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acta_estado`
--

LOCK TABLES `acta_estado` WRITE;
/*!40000 ALTER TABLE `acta_estado` DISABLE KEYS */;
INSERT INTO `acta_estado` VALUES (3,'Anulado'),(1,'Asignado'),(4,'EnviadoBoldt'),(6,'Legales'),(5,'Reasignar'),(2,'Utilizado');
/*!40000 ALTER TABLE `acta_estado` ENABLE KEYS */;
UNLOCK TABLES;