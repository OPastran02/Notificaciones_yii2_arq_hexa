
--
-- Table structure for table `faja_estado`
--

DROP TABLE IF EXISTS `faja_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faja_estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7ACDF0D8265DE1E3` (`estado`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faja_estado`
--

LOCK TABLES `faja_estado` WRITE;
/*!40000 ALTER TABLE `faja_estado` DISABLE KEYS */;
INSERT INTO `faja_estado` VALUES (3,'Anulado'),(1,'Asignado'),(5,'Reasignar'),(2,'Utilizado');
/*!40000 ALTER TABLE `faja_estado` ENABLE KEYS */;
UNLOCK TABLES;
