
--
-- Table structure for table `tipo_tratamiento`
--

DROP TABLE IF EXISTS `tipo_tratamiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_tratamiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipoTratamiento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_54808E8415F5DDFB` (`tipoTratamiento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_tratamiento`
--

LOCK TABLES `tipo_tratamiento` WRITE;
/*!40000 ALTER TABLE `tipo_tratamiento` DISABLE KEYS */;
INSERT INTO `tipo_tratamiento` VALUES (1,'PRETRATAMIENTO (rejas/tamices)'),(2,'PRIMARIO (Físico)'),(3,'SECUNDARIO (Biológico)'),(4,'TERCIARIO (Químico)');
/*!40000 ALTER TABLE `tipo_tratamiento` ENABLE KEYS */;
UNLOCK TABLES;
