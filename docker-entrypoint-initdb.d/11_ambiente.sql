--
-- Table structure for table `ambiente`
--

DROP TABLE IF EXISTS `ambiente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ambiente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` char(1) NOT NULL,
  `ambiente` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ambiente`
--

LOCK TABLES `ambiente` WRITE;
/*!40000 ALTER TABLE `ambiente` DISABLE KEYS */;
INSERT INTO `ambiente` VALUES (1,'E','Balcón hacia vía pública'),(2,'E','Patio/ Jardín contiguo a la vía pública'),(3,'E','Terraza/Azotea hacia la vía pública'),(4,'E','Vía publica'),(5,'S','Altillo'),(6,'S','Balcón interno'),(7,'S','Baño'),(8,'S','Baulera'),(9,'S','Cochera/Garage'),(10,'S','Cocina'),(11,'H','Comedor'),(12,'S','Hall de distribución / circulación'),(13,'S','Lavadero / Lavandería'),(14,'S','Oficina / Escritorio / Estudio'),(15,'S','Pasillo Interno'),(16,'S','Patio/ Jardín interno'),(17,'S','Terraza/Azotea interna'),(18,'S','Toilette'),(19,'S','Vestidor'),(20,'H','Dormitorio'),(21,'H','Habitación de servicio'),(22,'H','Living'),(23,'H','Monoambiente'),(24,'H','Playroom'),(25,'H','Sala de estar');
/*!40000 ALTER TABLE `ambiente` ENABLE KEYS */;
UNLOCK TABLES;

