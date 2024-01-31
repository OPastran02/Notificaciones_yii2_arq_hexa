--
-- Table structure for table `destino_vuelco`
--

DROP TABLE IF EXISTS `destino_vuelco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destino_vuelco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destinoVuelco` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D9DCCB394FFB0B5` (`destinoVuelco`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destino_vuelco`
--

LOCK TABLES `destino_vuelco` WRITE;
/*!40000 ALTER TABLE `destino_vuelco` DISABLE KEYS */;
INSERT INTO `destino_vuelco` VALUES (1,'CLOACAL'),(3,'CUERPO DE AGUA'),(2,'PLUVIAL');
/*!40000 ALTER TABLE `destino_vuelco` ENABLE KEYS */;
UNLOCK TABLES;

