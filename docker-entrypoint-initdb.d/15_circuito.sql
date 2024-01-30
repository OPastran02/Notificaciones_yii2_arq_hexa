--
-- Table structure for table `circuito`
--

DROP TABLE IF EXISTS `circuito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `circuito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `circuito` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_30A9B06A30A9B06A` (`circuito`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `circuito`
--

LOCK TABLES `circuito` WRITE;
/*!40000 ALTER TABLE `circuito` DISABLE KEYS */;
INSERT INTO `circuito` VALUES (37,'---'),(1,'ACUMAR'),(30,'BOLSAS-SUPERMERCADO'),(38,'CERVECERIA'),(41,'CONTROL DE OBRAS PUBLICAS'),(4,'EESS'),(42,'EFLUENTES LIQUIDOS'),(40,'GALVANOPLASTIAS - METALURGICAS'),(2,'HOSPITALES'),(43,'LAVADEROS'),(39,'PATOGENICOS'),(34,'POLO GASTRONÓMICO'),(45,'Relevamiento TAVUS'),(35,'SITIOS CONTAMINADOS'),(44,'TALLER MECANICO');
/*!40000 ALTER TABLE `circuito` ENABLE KEYS */;
UNLOCK TABLES;

