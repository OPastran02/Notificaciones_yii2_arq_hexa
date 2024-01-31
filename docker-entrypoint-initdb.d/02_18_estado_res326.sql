--
-- Table structure for table `estado_res326`
--

DROP TABLE IF EXISTS `estado_res326`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_res326` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estadoRes326` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_882E08B15CF80F5F` (`estadoRes326`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_res326`
--

LOCK TABLES `estado_res326` WRITE;
/*!40000 ALTER TABLE `estado_res326` DISABLE KEYS */;
INSERT INTO `estado_res326` VALUES (4,'CAA. Aptitud Ambiental (Antes de Reso. 326)'),(3,'Constancia de no necesidad recomposición Ambiental'),(2,'CRA. Certificación Recomposición Ambiental'),(5,'N/A'),(1,'Remediando');
/*!40000 ALTER TABLE `estado_res326` ENABLE KEYS */;
UNLOCK TABLES;

