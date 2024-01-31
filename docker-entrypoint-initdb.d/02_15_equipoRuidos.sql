--
-- Table structure for table `equipoRuidos`
--

DROP TABLE IF EXISTS `equipoRuidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipoRuidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` char(1) DEFAULT NULL,
  `Marca` varchar(45) DEFAULT NULL,
  `Modelo` varchar(45) DEFAULT NULL,
  `Serie` varchar(45) DEFAULT NULL,
  `Clase` varchar(45) DEFAULT NULL,
  `Denominacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipoRuidos`
--

LOCK TABLES `equipoRuidos` WRITE;
/*!40000 ALTER TABLE `equipoRuidos` DISABLE KEYS */;
INSERT INTO `equipoRuidos` VALUES (1,'D','BRÜEL&KJEER','2238','2456892','I','1 D'),(2,'C','BRÜEL&KJEER','4231','2517878','I','1 C'),(3,'D','RION','NL-05','1050553','I','2 D'),(4,'C','BRÜEL&KJEER','2238','2542165','I','2 C'),(5,'C','RION','NC-74','34615268 ','I','3 C'),(6,'D','RION','NL - 52','710294','I','3 D'),(7,'D','BRÜEL&KJEER','2238','2702171','I','4 D'),(8,'C','BRÜEL&KJEER','2238',' 2694486','I','4 C'),(9,'D','BRÜEL&KJEER','4231','2702491','I','5 D'),(10,'C','BRÜEL&KJEER','................','2694488','I','5 C'),(11,'D','RION','NL-52','710296','I','6 D'),(12,'C','RION','................','34615264','I','6 C'),(13,'D','CASELLA','CEL - 450','116495','I','7 D'),(14,'C','CASELLA','................','103157','I','7 C'),(15,'C','RION','NC-73','2694488','I','8 C'),(16,'D','BRÜEL&KJEER','2238','2456895','I','8 D'),(17,'D','CASELLA','CEL-450','106454','I','10 D'),(18,'C','CASELLA','CEL-110/2','106083','I','10 C'),(19,'D','CASELLA','CEL-450','106451','I','11 D'),(20,'C','CASELLA','CEL - 110/2','106081','I','11 C'),(21,'D','BRÜEL&KJEER','2238','2476896','I','12 D'),(22,'C','CASELLA CE','CEL-110/2','106080','I','12 C'),(23,'D','BRÜEL&KJEER','2238','2702169','I','13 D'),(24,'C','BRÜEL&KJEER','4231','2517879','I','13 C'),(25,'D','CASELLA','CEL- 450','116474','I','14 D'),(26,'C','CASELLA','CEL - 110/2','106086','I','14 C'),(27,'D','BRÜEL&KJEER','2238','2702170 ','I','15 D'),(28,'C','RION','NC-74','34615265','I','15 C'),(29,'D','BRÜEL&KJEER','2238','2456890','I','16 D'),(30,'C','RION','NC-74','34615267','I','16 C'),(31,'D','CASELLA','CEL - 450','106447','I','17 D'),(32,'C','CASELLA','CEL-110/2','106159','I','17 C'),(33,'D','RION','NL-52','887250','I','18 D'),(34,'C','RION','NC-75','34980958','I','18 C'),(35,'D','RION','NL-52','887252','I','19 D'),(36,'C','RION','NC-75','34980959','I','19 C'),(37,'D','RION','NL-52','887251','I','20 D'),(38,'C','RION','NC-75','34980956','I','20 C'),(39,'D','RION','NL-52','887253','I','21 D'),(40,'C','RION','NC-75','34980953','I','21 C'),(41,'D','RION','NL-52','887255','I','22 D'),(42,'C','RION','NC-75','34980954','I','22 C'),(43,'D','RION','NL-52','887254','I','23 D'),(44,'C','RION','NC-75','34980957','I','23 C'),(45,'D','RION','NL-05','450366','I','14 D'),(46,'C','CEL','CEL-110/2','106082','I','14 C'),(47,'C','RION','NL-74','34615266','I','24 C'),(48,'D','RION','NL-52','710292','I','24 D'),(49,'D','CASELLA ','CEL-450','106445','I','25 D'),(50,'C','CASELLA ','CEL-110/2','106155','I','25 C'),(51,'D','NORSONIC','Nor131','1313996','I','26 D'),(52,'C','NORSONIC','Nor1255','12552538','I','26 C'),(53,'D','NORSONIC','Nor131','1313998','I','27 D'),(54,'C','NORSONIC','Nor1255','12552540','I','27 C'),(55,'D','NORSONIC','Nor131','1313997','I','28 D'),(56,'C','NORSONIC','Nor1255','125525239','I','28 C');
/*!40000 ALTER TABLE `equipoRuidos` ENABLE KEYS */;
UNLOCK TABLES;

