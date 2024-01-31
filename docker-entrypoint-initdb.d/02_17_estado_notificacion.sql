--
-- Table structure for table `estado_notificacion`
--

DROP TABLE IF EXISTS `estado_notificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_notificacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_19CB44F1265DE1E3` (`estado`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_notificacion`
--

LOCK TABLES `estado_notificacion` WRITE;
/*!40000 ALTER TABLE `estado_notificacion` DISABLE KEYS */;
INSERT INTO `estado_notificacion` VALUES (11,'Anulada'),(3,'Asignado'),(6,'Cumple Parcial'),(7,'Cumplio'),(4,'Eliminado'),(10,'En Analisis Legal'),(14,'Enviado DGAI'),(1,'Firma'),(13,'Inspeccionado'),(12,'Inspeccionado Patrulla'),(8,'No Cumplio'),(9,'Notificado'),(2,'Programacion'),(5,'Vencida');
/*!40000 ALTER TABLE `estado_notificacion` ENABLE KEYS */;
UNLOCK TABLES;

