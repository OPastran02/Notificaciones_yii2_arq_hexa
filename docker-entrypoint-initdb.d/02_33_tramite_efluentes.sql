
--
-- Table structure for table `tramite_efluentes`
--

DROP TABLE IF EXISTS `tramite_efluentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tramite_efluentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tramiteEfluentes` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9E1DB25140D8E127` (`tramiteEfluentes`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tramite_efluentes`
--

LOCK TABLES `tramite_efluentes` WRITE;
/*!40000 ALTER TABLE `tramite_efluentes` DISABLE KEYS */;
INSERT INTO `tramite_efluentes` VALUES (4,'AUTORIZACION'),(5,'CARPETA'),(3,'FACTIBILIDAD');
/*!40000 ALTER TABLE `tramite_efluentes` ENABLE KEYS */;
UNLOCK TABLES;
