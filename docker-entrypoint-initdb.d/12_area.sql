--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `area` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cargo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D7943D68D7943D68` (`area`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area`
--

LOCK TABLES `area` WRITE;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` VALUES (1,'SUR','Lic. Flavia Sozzani','Subgerente Operativo de Fiscalización Ambiental Zona Sur'),(2,'NORTE','Dra. Gisela Marchese','Subgerente Operativo de Fiscalización Ambiental Zona Norte'),(3,'ESTE','Lic. Jorgelina Allemand','Subgerente Operativo de Fiscalización Ambiental Zona Este'),(4,'OESTE','Ing. Patricia Díaz','Subgerente Operativo de Fiscalización Ambiental Zona Oeste'),(5,'NOCTURNIDAD','Lic. Daniela Miguez','Subgerente Operativo de Fiscalización Ambiental Horario Nocturno'),(6,'LEGALES',NULL,NULL),(7,'GOFA',NULL,NULL),(8,'F.MOVILES',NULL,NULL),(9,'F.FIJAS',NULL,NULL),(10,'DEE',NULL,NULL),(11,'CUENCAS',NULL,NULL),(12,'EESS',NULL,NULL),(13,'EMPRESAS',NULL,NULL),(14,'V.Ambientales',NULL,NULL),(15,'INDUSRIAS',NULL,NULL),(17,'SIN AREA',NULL,NULL),(18,'UIT',NULL,NULL),(19,'CAMPO',NULL,NULL),(20,'BIOLOGICO',NULL,NULL),(21,'INSTRUMENTAL',NULL,NULL),(22,'FISICO-QUIMICA',NULL,NULL),(23,'Administracion-Lab',NULL,NULL),(24,'Privada',NULL,NULL),(25,'Consultas',NULL,NULL);
/*!40000 ALTER TABLE `area` ENABLE KEYS */;
UNLOCK TABLES;

