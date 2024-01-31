--
-- Table structure for table `encuesta_modeloencuesta_grupopreguntas`
--

DROP TABLE IF EXISTS `encuesta_modeloencuesta_grupopreguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuesta_modeloencuesta_grupopreguntas` (
  `modeloencuesta_id` int(11) NOT NULL,
  `grupopreguntas_id` int(11) NOT NULL,
  PRIMARY KEY (`modeloencuesta_id`,`grupopreguntas_id`),
  KEY `IDX_2B89B7373CAF444E` (`modeloencuesta_id`),
  KEY `IDX_2B89B73752F37722` (`grupopreguntas_id`),
  CONSTRAINT `FK_2B89B7373CAF444E` FOREIGN KEY (`modeloencuesta_id`) REFERENCES `encuesta_modelo_encuesta` (`id`),
  CONSTRAINT `FK_2B89B73752F37722` FOREIGN KEY (`grupopreguntas_id`) REFERENCES `encuesta_grupo_preguntas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuesta_modeloencuesta_grupopreguntas`
--

LOCK TABLES `encuesta_modeloencuesta_grupopreguntas` WRITE;
/*!40000 ALTER TABLE `encuesta_modeloencuesta_grupopreguntas` DISABLE KEYS */;
INSERT INTO `encuesta_modeloencuesta_grupopreguntas` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(1,11),(1,12),(1,13),(1,14),(1,15),(1,16),(1,17),(1,18),(1,19),(1,20),(1,21),(1,22),(2,1),(2,2),(2,3),(2,4),(2,5),(2,6),(2,7),(2,8),(2,9),(2,10),(2,11),(2,12),(2,13),(2,14),(2,15),(2,16),(2,17),(2,18),(2,19),(2,20),(2,21),(2,22);
/*!40000 ALTER TABLE `encuesta_modeloencuesta_grupopreguntas` ENABLE KEYS */;
UNLOCK TABLES;

