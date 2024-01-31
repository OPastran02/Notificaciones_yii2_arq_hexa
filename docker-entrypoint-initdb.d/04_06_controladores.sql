--
-- Table structure for table `controladores`
--

DROP TABLE IF EXISTS `controladores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `controladores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reparticion_id` int(11) DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CAAF0D1F201FA7E6` (`reparticion_id`),
  CONSTRAINT `FK_CAAF0D1F201FA7E6` FOREIGN KEY (`reparticion_id`) REFERENCES `reparticion` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controladores`
--

LOCK TABLES `controladores` WRITE;
/*!40000 ALTER TABLE `controladores` DISABLE KEYS */;
INSERT INTO `controladores` VALUES (1,NULL,' Maria Ines','Albano ',0),(2,NULL,' Eva','Alcorta ',0),(3,3,' Glenda','Alimen ',110),(4,NULL,' Alonso José','Alvarez ',0),(5,NULL,' Ricardo','Alvarez ',0),(6,3,' Leonardo','Anania ',24),(7,NULL,' Benegas Facundo','Bargallo ',0),(8,NULL,' Regina','Baron ',0),(9,NULL,' Martelli Ricardo','Bauzá ',0),(10,NULL,' Andrea','Beresiarte ',0),(11,NULL,' Pablo','Borizonik ',0),(12,NULL,' Ricardo','Borthwick ',0),(13,NULL,' Vilma','Bouza ',0),(14,NULL,' Liliana Hebe','Bouzo ',0),(15,NULL,' Jose Maria','Buera ',0),(16,NULL,' Adriana','Calabro ',0),(17,NULL,' Alfonso','Canale ',0),(18,3,' Silvia','Canjalli ',16),(19,NULL,' Stella','Carrascal ',0),(20,NULL,' Marisa','Carreira ',0),(21,NULL,' Javier','Caviglia ',0),(22,3,' Patricia','Ceriani ',112),(23,3,' Sebastián','Chacur ',43),(24,3,' Horacio','Cingolani ',27),(25,NULL,' Oscar','Cobo ',0),(26,NULL,' Sandra','Cocco ',0),(27,NULL,' Manuela','Cortelezzi ',0),(28,NULL,' M.mercedes','Corvalan ',0),(29,3,'Paula','Del  Río',30),(30,NULL,' Graciela','Devita ',0),(31,3,' Marcos','Dobanton ',44),(32,NULL,' Bibiana','Doldán ',0),(33,NULL,'Consuelo','Dos  Santos',0),(34,NULL,' Ignacio','Durand ',0),(35,NULL,'Nancy','El  Hares',0),(36,NULL,' Gustavo','Escoz ',0),(37,NULL,' Victoria','Espósito ',0),(38,NULL,' Saavedra Omar','Estrugo ',0),(39,3,' Torres Marcela','Fajardo ',39),(40,3,' José','Fanciullo ',33),(41,NULL,' Battolla Alejandra','Fernandez ',0),(42,NULL,' Vidal Guillermo','Fernandez ',0),(43,NULL,' Margarita','Finocchi ',0),(44,NULL,' Karina','Fleitas ',0),(45,NULL,' Belen','Foncuberta ',0),(46,NULL,' Luciana','Galvalisi ',0),(47,NULL,' de Leonardo Macarena','García ',0),(48,NULL,' Marcelo','Garcia ',0),(49,1,' Valeria','Gentelesca ',92),(50,3,' Ricardo','Goldchluk ',94),(51,NULL,' Alfredo','Gomez ',0),(52,NULL,' Marcelo','Gómez ',0),(53,NULL,' Alejandra','Gonzalez ',0),(54,NULL,' Andrea Viviana','Gonzalez ',0),(55,3,' Cariboni Diana','Gonzalez ',119),(56,NULL,' Silvano Edith','González ',0),(57,NULL,' Silvina','Güerri ',0),(58,NULL,' Celina','Gutierrez ',0),(59,NULL,' Alsina Silvia','Hamann ',0),(60,NULL,' Natalia','Hassassian ',0),(61,NULL,' Elsa','Juarez ',0),(62,NULL,' Carmén','Juri ',0),(63,NULL,' Diego','Korolik ',0),(64,NULL,'Monica','La  Fuente',0),(65,NULL,' Carolina','Leone ',0),(66,NULL,' Caride Francisco','Linares ',0),(67,NULL,' Mónica','López ',0),(68,NULL,' Carignano','Martinez ',0),(69,NULL,' Liliana','Mazariche ',0),(70,NULL,' Laura','Melchi ',0),(71,NULL,' Valeria','Mena ',0),(72,3,' Marcela','Micieli ',114),(73,NULL,' Miguel','Milone ',0),(74,NULL,' Capdevila Claudia','Molina ',0),(75,NULL,' Fernando','Mora ',0),(76,NULL,' Claudio','Musella ',0),(77,3,' Olga','Odasso ',109),(78,NULL,' Febre Ramon','Ojeda ',0),(79,NULL,' Alberto','Orlandoni ',0),(80,NULL,' Mariana','Osre ',0),(81,NULL,' Fernanda','Outón ',0),(82,NULL,' Gustavo','Palopoli ',0),(83,NULL,' Marina','Parrini ',0),(84,NULL,' Jonathan','Patti ',0),(85,NULL,' Gustavo','Perec ',0),(86,NULL,' Acosta Mariana','Perez ',0),(87,NULL,' Demaría Hernan','Perez ',0),(88,NULL,' Fernando','Perez ',0),(89,NULL,' Fabiana','Piraino ',0),(90,NULL,' Gisela','Polverari ',0),(91,NULL,' Martín','Pourrain ',0),(92,NULL,' Clara','Privitello ',0),(93,NULL,' Fernando','Prota ',0),(94,NULL,' Marcela','Pulido ',0),(95,NULL,' Daniel','Raban ',0),(96,NULL,' Andrea','Radice ',0),(97,NULL,' Barbara','Raffa ',0),(98,NULL,' Luis','Roldán ',0),(99,NULL,' Mauricio','Roller ',0),(100,3,' Claudia','Romano ',63),(101,NULL,' Alex','Royffer ',0),(102,3,' María Inés','Sammartino ',58),(103,NULL,' Laura','Santoro ',0),(104,NULL,' Luciano','Scarano ',0),(105,3,' Daniela','Schiavoni ',120),(106,NULL,' Peretti','Sergio ',0),(107,NULL,' Sebastian','Silvestri ',0),(108,NULL,' y Medrano Gaston','Soria ',0),(109,NULL,' luciano','Suarez ',0),(110,NULL,' Romina','Szczyry ',0),(111,NULL,' Sergio','Thau ',0),(112,3,' Mariana','Tognetti ',47),(113,NULL,' Angela Carina','Vazquez ',0),(114,NULL,' Javier','Vazquez ',0),(115,NULL,' Marina','Vigliani ',0),(116,NULL,' Marión Alexis','Vilariño ',0),(117,NULL,' Alfonsin Hugo','Vilches ',0),(118,3,' Lina','Vinelli ',115),(119,NULL,' Mariela','Volando ',0),(120,NULL,' Herman','Werber ',0);
/*!40000 ALTER TABLE `controladores` ENABLE KEYS */;
UNLOCK TABLES;

