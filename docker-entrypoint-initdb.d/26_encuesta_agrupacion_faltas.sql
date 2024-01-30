--
-- Table structure for table `encuesta_agrupacion_faltas`
--

DROP TABLE IF EXISTS `encuesta_agrupacion_faltas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuesta_agrupacion_faltas` (
  `falta_id1` int(11) NOT NULL,
  `falta_id2` int(11) NOT NULL,
  PRIMARY KEY (`falta_id1`,`falta_id2`),
  KEY `IDX_1E5563EB29E13ADC` (`falta_id1`),
  KEY `IDX_1E5563EBB0E86B66` (`falta_id2`),
  CONSTRAINT `FK_1E5563EB29E13ADC` FOREIGN KEY (`falta_id1`) REFERENCES `encuesta_falta` (`id`),
  CONSTRAINT `FK_1E5563EBB0E86B66` FOREIGN KEY (`falta_id2`) REFERENCES `encuesta_falta` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuesta_agrupacion_faltas`
--

LOCK TABLES `encuesta_agrupacion_faltas` WRITE;
/*!40000 ALTER TABLE `encuesta_agrupacion_faltas` DISABLE KEYS */;
/*!40000 ALTER TABLE `encuesta_agrupacion_faltas` ENABLE KEYS */;
UNLOCK TABLES;