
--
-- Table structure for table `faja_tipo_clausura`
--

DROP TABLE IF EXISTS `faja_tipo_clausura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faja_tipo_clausura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_clausura` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `habilitado` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6D30EFC65F03585A` (`tipo_clausura`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faja_tipo_clausura`
--

LOCK TABLES `faja_tipo_clausura` WRITE;
/*!40000 ALTER TABLE `faja_tipo_clausura` DISABLE KEYS */;
INSERT INTO `faja_tipo_clausura` VALUES (1,'TOTAL',NULL),(2,'PARCIAL',NULL);
/*!40000 ALTER TABLE `faja_tipo_clausura` ENABLE KEYS */;
UNLOCK TABLES;
