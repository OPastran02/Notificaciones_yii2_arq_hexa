--
-- Table structure for table `leyes_clausura`
--

DROP TABLE IF EXISTS `leyes_clausura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leyes_clausura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Ley` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A05EE257B792FBCC` (`Ley`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leyes_clausura`
--

LOCK TABLES `leyes_clausura` WRITE;
/*!40000 ALTER TABLE `leyes_clausura` DISABLE KEYS */;
INSERT INTO `leyes_clausura` VALUES (15,'Código de Edificación'),(17,'Código de habilitaciones'),(21,'DECRETO 150-2015'),(4,'DECRETO 674'),(5,'DECRETO 776'),(22,'DI-329-DGCONTA-2017'),(11,'Ley 11843 ORD. 36352'),(6,'LEY 123'),(2,'LEY 1356'),(12,'LEY 154'),(3,'LEY 1540'),(14,'LEY 1854'),(25,'LEY 19587'),(7,'LEY 2156'),(1,'LEY 2214'),(23,'LEY 25675 Art. 22'),(13,'LEY 3166'),(16,'LEY 3295'),(8,'Ord. 36352 Dto. 8151/80'),(10,'Ord. 45593'),(9,'Ord. 45593 Dto. 2045/93'),(20,'RES-310-APRA-2015'),(18,'RES-326-APRA-2013'),(19,'RES-347-APRA-2015'),(24,'RES-71-APRA-2017');
/*!40000 ALTER TABLE `leyes_clausura` ENABLE KEYS */;
UNLOCK TABLES;

