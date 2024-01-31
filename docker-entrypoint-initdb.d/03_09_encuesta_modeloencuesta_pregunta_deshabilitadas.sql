--
-- Table structure for table `encuesta_modeloencuesta_pregunta_deshabilitadas`
--

DROP TABLE IF EXISTS `encuesta_modeloencuesta_pregunta_deshabilitadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuesta_modeloencuesta_pregunta_deshabilitadas` (
  `modeloencuesta_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  PRIMARY KEY (`modeloencuesta_id`,`pregunta_id`),
  KEY `IDX_8F0A84733CAF444E` (`modeloencuesta_id`),
  KEY `IDX_8F0A847331A5801E` (`pregunta_id`),
  CONSTRAINT `FK_8F0A847331A5801E` FOREIGN KEY (`pregunta_id`) REFERENCES `encuesta_pregunta` (`id`),
  CONSTRAINT `FK_8F0A84733CAF444E` FOREIGN KEY (`modeloencuesta_id`) REFERENCES `encuesta_modelo_encuesta` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuesta_modeloencuesta_pregunta_deshabilitadas`
--

LOCK TABLES `encuesta_modeloencuesta_pregunta_deshabilitadas` WRITE;
/*!40000 ALTER TABLE `encuesta_modeloencuesta_pregunta_deshabilitadas` DISABLE KEYS */;
/*!40000 ALTER TABLE `encuesta_modeloencuesta_pregunta_deshabilitadas` ENABLE KEYS */;
UNLOCK TABLES;

