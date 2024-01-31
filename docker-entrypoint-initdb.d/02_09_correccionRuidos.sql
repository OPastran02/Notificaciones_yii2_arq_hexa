--
-- Table structure for table `correcionRuidos`
--

DROP TABLE IF EXISTS `correcionRuidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `correcionRuidos` (
  `variacion` decimal(3,1) NOT NULL DEFAULT '0.0',
  `delta` decimal(2,1) NOT NULL,
  PRIMARY KEY (`variacion`),
  UNIQUE KEY `variacion_UNIQUE` (`variacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correcionRuidos`
--

LOCK TABLES `correcionRuidos` WRITE;
/*!40000 ALTER TABLE `correcionRuidos` DISABLE KEYS */;
INSERT INTO `correcionRuidos` VALUES (2.9,0.0),(3.0,3.0),(3.1,2.9),(3.2,2.8),(3.3,2.7),(3.4,2.7),(3.5,2.6),(3.6,2.5),(3.7,2.4),(3.8,2.3),(3.9,2.3),(4.0,2.2),(4.1,2.1),(4.2,2.1),(4.3,2.0),(4.4,2.0),(4.5,1.9),(4.6,1.8),(4.7,1.8),(4.8,1.7),(4.9,1.7),(5.0,1.7),(5.1,1.6),(5.2,1.6),(5.3,1.5),(5.4,1.5),(5.5,1.4),(5.6,1.4),(5.7,1.4),(5.8,1.3),(5.9,1.3),(6.0,1.3),(6.1,1.2),(6.2,1.2),(6.3,1.2),(6.4,1.1),(6.5,1.1),(6.6,1.1),(6.7,1.0),(6.8,1.0),(6.9,1.0),(7.0,1.0),(7.1,0.9),(7.2,0.9),(7.3,0.9),(7.4,0.9),(7.5,0.9),(7.6,0.8),(7.7,0.8),(7.8,0.8),(7.9,0.8),(8.0,0.7),(8.1,0.7),(8.2,0.7),(8.3,0.7),(8.4,0.7),(8.5,0.7),(8.6,0.6),(8.7,0.6),(8.8,0.6),(8.9,0.6),(9.0,0.6),(9.1,0.6),(9.2,0.6),(9.3,0.5),(9.4,0.5),(9.5,0.5),(9.6,0.5),(9.7,0.5),(9.8,0.5),(9.9,0.5),(10.0,0.0);
/*!40000 ALTER TABLE `correcionRuidos` ENABLE KEYS */;
UNLOCK TABLES;

