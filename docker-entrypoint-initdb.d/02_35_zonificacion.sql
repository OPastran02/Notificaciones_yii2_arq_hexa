
--
-- Table structure for table `zonificacion`
--

DROP TABLE IF EXISTS `zonificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zonificacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zonificacion` varchar(45) NOT NULL,
  `ASATIPO` varchar(10) DEFAULT NULL,
  `ASAETIPO` varchar(10) DEFAULT NULL,
  `DIURNO_HABITABLE` int(11) DEFAULT NULL,
  `DIURNO_SERVICIO` int(11) DEFAULT NULL,
  `NOCTURNO_HABITABLE` int(11) DEFAULT NULL,
  `NOCTURNO_SERVICIO` int(11) DEFAULT NULL,
  `DIURNO_EXTERIOR` int(11) DEFAULT NULL,
  `NOCTURNO_EXTERIOR` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `zonificacioncol_UNIQUE` (`zonificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zonificacion`
--

LOCK TABLES `zonificacion` WRITE;
/*!40000 ALTER TABLE `zonificacion` DISABLE KEYS */;
INSERT INTO `zonificacion` VALUES (1,'Área Ecológica','VII','I',50,55,40,45,60,50),(2,'R1a','VII','II',50,55,40,45,65,50),(3,'R1b','VII','II',50,55,40,45,65,50),(4,'R2a','VII','II',50,55,40,45,65,50),(5,'R2b','VII','II',50,55,40,45,65,50),(6,'C1','VII','III',55,60,45,50,70,60),(7,'C2','VII','III',55,60,45,50,70,60),(8,'C3','VII','III',55,60,45,50,70,60),(9,'E1','VII','III',55,60,45,50,70,60),(10,'E2','VII','III',55,60,45,50,70,60),(11,'E3','VII','III',55,60,45,50,70,60),(12,'I1','VII','IV',60,65,50,55,75,70),(13,'I2','VII','IV',60,65,50,55,75,70),(14,'RUA zona 2 (50-100)','VII','IV',60,65,50,55,70,70),(15,'RUA zona 3 (100-150)','VII','III',55,60,45,50,60,60),(16,'RUA zona 4 (150-200)','VII','II',50,55,40,45,50,50),(17,'RUA zona 1 (0-50)',NULL,'V',0,0,0,0,80,75),(18,'Deslinde II y III',NULL,'II',0,0,0,0,55,55),(19,'Deslinde III y IV',NULL,'III',0,0,0,0,65,65),(20,'Aviso Acústico',NULL,NULL,0,0,0,0,70,70),(21,'ASAE I','VII','I',50,55,40,45,60,50),(22,'ASAE II','VII','II',50,55,40,45,65,50),(23,'ASAE III','VII','III',55,60,45,50,70,60),(24,'ASAE IV','VII','IV',60,65,50,55,75,70),(25,'ASAE V','VII','V',60,65,50,55,80,75),(26,'Deslinde Autopista ASAE IV','VII','IV',60,65,50,55,75,70),(27,'Deslinde Autopista ASAE III','VII','IV',55,60,45,50,70,60),(28,'Deslinde Vereda ASAE II y III','-','II - III',0,0,0,0,0,55),(29,'Deslinde Vereda ASAE III y IV','-','III - IV',0,0,0,0,0,65);
/*!40000 ALTER TABLE `zonificacion` ENABLE KEYS */;
UNLOCK TABLES;
