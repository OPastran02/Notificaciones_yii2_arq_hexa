--
-- Table structure for table `motivo_inspeccion`
--

DROP TABLE IF EXISTS `motivo_inspeccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motivo_inspeccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motivo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CD906AAD19F93866` (`motivo`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motivo_inspeccion`
--

LOCK TABLES `motivo_inspeccion` WRITE;
/*!40000 ALTER TABLE `motivo_inspeccion` DISABLE KEYS */;
INSERT INTO `motivo_inspeccion` VALUES (12,'Circuito Plan Inspectivo'),(9,'Control de Cedula'),(10,'Control de Disposición'),(30,'Control de obras Publicas'),(27,'Control Transportista'),(24,'Empresa de Tanques de Agua y/o Fumigación'),(25,'Eventos Nocturnos'),(2,'Inspección Previa (IP)'),(11,'Integral (Rutina)'),(29,'Natatorio'),(13,'Operativos en Conjunto'),(26,'Patrulla'),(1,'Re-Inspeccion'),(35,'Relevamiento TAVUS'),(31,'Requerimiento Externo (AGC)'),(18,'Requerimiento Externo (Defensoria del pueblo)'),(19,'Requerimiento Externo (Denuncia)'),(21,'Requerimiento Externo (DGAI)'),(34,'Requerimiento Externo (DGPOLEA)'),(32,'Requerimiento Externo (ERSP)'),(22,'Requerimiento Externo (Ley 104/303 Acceso a la información)'),(4,'Requerimiento Externo (Oficio Judicial)'),(20,'Requerimiento Externo (Presentación ciudadana)'),(39,'Requerimiento Externo (SUBTE)'),(3,'Solicitud DGEVA'),(37,'SUACI ( Sorbetes Plasticos)'),(36,'SUACI (Bolsas Plasticas)'),(14,'SUACI (Calor)'),(15,'SUACI (Efluentes)'),(38,'SUACI (IRREG. AVUS)'),(6,'SUACI (Olores)'),(16,'SUACI (Res. Pel./ Res. Pat.)'),(8,'SUACI (RNI)'),(5,'SUACI (Ruido)'),(17,'SUACI (Tq y Fumigación)'),(7,'SUACI (Vibración)'),(33,'Trazabilidad'),(28,'UIT');
/*!40000 ALTER TABLE `motivo_inspeccion` ENABLE KEYS */;
UNLOCK TABLES;
