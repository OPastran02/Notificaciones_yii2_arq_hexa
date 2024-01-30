

--
-- Table structure for table `encuesta_agrupacion_siguiente_pregunta`
--

DROP TABLE IF EXISTS `encuesta_agrupacion_siguiente_pregunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuesta_agrupacion_siguiente_pregunta` (
  `siguientpregunta_id1` int(11) NOT NULL,
  `siguientepregunta_id2` int(11) NOT NULL,
  PRIMARY KEY (`siguientpregunta_id1`,`siguientepregunta_id2`),
  KEY `IDX_86764130E6316FE4` (`siguientpregunta_id1`),
  KEY `IDX_867641304C68AFDA` (`siguientepregunta_id2`),
  CONSTRAINT `FK_867641304C68AFDA` FOREIGN KEY (`siguientepregunta_id2`) REFERENCES `encuesta_siguiente_pregunta` (`id`),
  CONSTRAINT `FK_86764130E6316FE4` FOREIGN KEY (`siguientpregunta_id1`) REFERENCES `encuesta_siguiente_pregunta` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuesta_agrupacion_siguiente_pregunta`
--

LOCK TABLES `encuesta_agrupacion_siguiente_pregunta` WRITE;
/*!40000 ALTER TABLE `encuesta_agrupacion_siguiente_pregunta` DISABLE KEYS */;
/*!40000 ALTER TABLE `encuesta_agrupacion_siguiente_pregunta` ENABLE KEYS */;
UNLOCK TABLES;

