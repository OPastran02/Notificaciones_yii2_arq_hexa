--
-- Table structure for table `inspecciones_resultados_fotos`
--

DROP TABLE IF EXISTS `inspecciones_resultados_fotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inspecciones_resultados_fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resultado_id` int(11) DEFAULT NULL,
  `foto` longtext COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EC80050EFF51ECB6` (`resultado_id`),
  CONSTRAINT `FK_EC80050EFF51ECB6` FOREIGN KEY (`resultado_id`) REFERENCES `inspecciones_resultados` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspecciones_resultados_fotos`
--

LOCK TABLES `inspecciones_resultados_fotos` WRITE;
/*!40000 ALTER TABLE `inspecciones_resultados_fotos` DISABLE KEYS */;
/*!40000 ALTER TABLE `inspecciones_resultados_fotos` ENABLE KEYS */;
UNLOCK TABLES;

