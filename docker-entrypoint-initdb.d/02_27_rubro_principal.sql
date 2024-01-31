--
-- Table structure for table `rubro_principal`
--

DROP TABLE IF EXISTS `rubro_principal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rubro_principal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RubroPrincipal` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Frecuencia` smallint(6) NOT NULL,
  `Habilitado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FC81E242B696E56E` (`RubroPrincipal`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubro_principal`
--

LOCK TABLES `rubro_principal` WRITE;
/*!40000 ALTER TABLE `rubro_principal` DISABLE KEYS */;
INSERT INTO `rubro_principal` VALUES (1,'Domicilio Inexistente',32767,1),(2,'Estación de Servicios GNC',120,1),(3,'Estación de Servicios DUAL',120,1),(5,'Establecimientos gubernamentales',365,1),(6,'Hoteles-Hostels',365,1),(7,'Supermercado',365,1),(8,'Fábrica',240,1),(9,'Acopio combustibles-sustancias peligrosas',120,1),(10,'Transporte',240,1),(11,'Comercio MAY-MIN',32767,1),(12,'Sanidad Y Salud',240,1),(13,'Club',365,1),(14,'Frigorificos',180,1),(15,'Depositos',365,1),(17,'Galvanoplastía',180,1),(18,'Casas expendio de comida',365,1),(19,'Mantenimiento automotor',270,1),(20,'Laboratorio-drogerias -no farmacias-',180,1),(21,'Industria quimica',180,1),(22,'Curtiembre',180,1),(23,'Lavadero de vehiculos',270,1),(24,'Lavadero industrial',365,1),(25,'Tintorería',365,1),(26,'Centro comercial',365,1),(27,'Centros educativos',365,1),(28,'Fuentes moviles',32767,1),(29,'Imprenta',365,1),(30,'Geriatrico',365,1),(31,'Empresas de servicios publicos',365,1),(32,'Elaboracion de alimentos-bebidas',270,0),(33,'Antenas',540,1),(34,'Industria textil',270,1),(35,'Petroquimica',180,1),(36,'Vivienda',32767,1),(38,'Espacio público',32767,1),(39,'Obra edilicia-infraestructura urbana',360,1),(40,'Productoras-canales TV',365,1),(41,'Talleres oficios varios',365,1),(42,'Estación de Servicios Con Líquido',120,1),(43,'Oficina',32767,1),(44,'Eventos',32767,1),(46,'Garage',365,1),(48,'Metalurgica',180,1),(49,'Lavanderia Mecanica',360,1),(50,'Consorcio',32767,1),(51,'Deporte',32767,1),(52,'Terreno',360,1),(53,'Local Bailable ',180,1),(54,'UIT',32767,1),(55,'Local Grande Indeterminado',270,1),(56,'Local Pequeño Indeterminado',270,1),(57,'Cafe-Bar',180,1),(58,'Cervecería',180,1),(59,'Restaurante',180,1),(60,'Centro Cultural',360,1),(61,'Teatro Independiente',360,1),(62,'Salon de Fiestas',360,1),(63,'Iglesias / Templos',360,1);
/*!40000 ALTER TABLE `rubro_principal` ENABLE KEYS */;
UNLOCK TABLES;

