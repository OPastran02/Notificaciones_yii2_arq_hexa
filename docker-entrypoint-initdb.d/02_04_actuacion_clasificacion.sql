--
-- Table structure for table `actuacion_clasificacion`
--

DROP TABLE IF EXISTS `actuacion_clasificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actuacion_clasificacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipo` (`tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actuacion_clasificacion`
--

LOCK TABLES `actuacion_clasificacion` WRITE;
/*!40000 ALTER TABLE `actuacion_clasificacion` DISABLE KEYS */;
INSERT INTO `actuacion_clasificacion` VALUES (8,'AVUS'),(2,'CAA'),(1,'FISCALIZACION'),(6,'RAC'),(7,'REF'),(4,'RESPAT'),(3,'RESPEL'),(5,'SITIOS');
/*!40000 ALTER TABLE `actuacion_clasificacion` ENABLE KEYS */;
UNLOCK TABLES;

