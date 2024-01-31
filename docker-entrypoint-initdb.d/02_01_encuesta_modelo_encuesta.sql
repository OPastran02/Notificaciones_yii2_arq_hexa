--
-- Table structure for table `encuesta_modelo_encuesta`
--

DROP TABLE IF EXISTS `encuesta_modelo_encuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuesta_modelo_encuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreEncuesta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_12A7426ACB7CAA2A` (`nombreEncuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuesta_modelo_encuesta`
--

LOCK TABLES `encuesta_modelo_encuesta` WRITE;
/*!40000 ALTER TABLE `encuesta_modelo_encuesta` DISABLE KEYS */;
INSERT INTO `encuesta_modelo_encuesta` VALUES (1,'Integral'),(2,'Integral_nueva_App');
/*!40000 ALTER TABLE `encuesta_modelo_encuesta` ENABLE KEYS */;
UNLOCK TABLES;

