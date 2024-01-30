--
-- Table structure for table `encuesta_tipo_pregunta`
--

DROP TABLE IF EXISTS `encuesta_tipo_pregunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuesta_tipo_pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipoPregunta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_153DDDE43027437C` (`tipoPregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuesta_tipo_pregunta`
--

LOCK TABLES `encuesta_tipo_pregunta` WRITE;
/*!40000 ALTER TABLE `encuesta_tipo_pregunta` DISABLE KEYS */;
INSERT INTO `encuesta_tipo_pregunta` VALUES (3,'Boolean'),(8,'BooleanNa'),(11,'CalculoRuido'),(12,'CalculoVibraciones'),(6,'Combo'),(4,'Date'),(5,'DateTime'),(10,'DobleString'),(15,'Float'),(1,'Integer'),(7,'Multiple'),(14,'Resultado Vibraciones'),(13,'ResultadoRuido'),(2,'String'),(9,'Time');
/*!40000 ALTER TABLE `encuesta_tipo_pregunta` ENABLE KEYS */;
UNLOCK TABLES;

