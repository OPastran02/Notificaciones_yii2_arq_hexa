--
-- Table structure for table `tipo_residuos`
--

DROP TABLE IF EXISTS `tipo_residuos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_residuos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigoResiduo` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `tipoResiduo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_509F875DCE094176` (`codigoResiduo`),
  UNIQUE KEY `UNIQ_509F875D25521882` (`tipoResiduo`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_residuos`
--

LOCK TABLES `tipo_residuos` WRITE;
/*!40000 ALTER TABLE `tipo_residuos` DISABLE KEYS */;
INSERT INTO `tipo_residuos` VALUES (42,'Y1 ','  Desechos clínicos.'),(43,'Y2 ','  Desechos de producción farmacéutica.'),(44,'Y3 ','  Desechos de medicamentos.'),(45,'Y4 ','  Desechos de biocidas y productos fitosanitarios.'),(46,'Y5 ','  Desechos de la preservación de la madera.'),(47,'Y6 ','  Desechos de disolventes orgánicos.'),(48,'Y7 ','  Desechos que contengan cianuros.'),(49,'Y8 ','  Desechos de aceites minerales.'),(50,'Y9 ','  Mezclas y emulsiones de desecho de aceite y agua o de hidrocarburos y agua.'),(51,'Y10 ','  Sustancias y artículos de desecho que contengan PCB, PCT o bifenilos polibromados (PBB).'),(52,'Y11 ','  Residuos alquitranados.'),(53,'Y12 ','  Desechos de tintas, colorantes, pigmentos, pinturas, lacas o barnices.'),(54,'Y13 ','  Desechos de resinas, látex, plastificantes o colas y adhesivos.'),(55,'Y14 ','  Sustancias químicas de desecho nuevas, cuyos efectos no se conozcan.'),(56,'Y15 ','  Desechos de carácter explosivo.'),(57,'Y16 ','  Desechos de químicos y materiales para fines fotográficos.'),(58,'Y17 ','  Desechos de metales y plásticos.'),(59,'Y18 ','  Residuos de eliminación de desechos industriales.'),(60,'Y19 ','  Metales carbonilos.'),(61,'Y20 ','  Berilio, compuesto de berilio.'),(62,'Y21 ','  Compuestos de cromo hexavalente.'),(63,'Y22 ','  Compuestos de cobre.'),(64,'Y23 ','  Compuestos de zinc.'),(65,'Y24 ','  Arsénico, compuestos de arsénico.'),(66,'Y25 ','  Selenio, compuestos de selenio.'),(67,'Y26 ','  Cadmio, compuestos de cadmio.'),(68,'Y27 ','  Antimonio, compuestos de antimonio.'),(69,'Y28 ','  Telurio, compuestos de telurio.'),(70,'Y29 ','  Mercurio, compuestos de mercurio.'),(71,'Y30 ','  Talio, compuestos de talio.'),(72,'Y31 ','  Plomo, compuestos de plomo.'),(73,'Y32 ','  Compuestos inorgánicos de flúor.'),(74,'Y33 ','  Cianuros inorgánicos.'),(75,'Y34 ','  Soluciones ácidas o ácidos en forma sólida.'),(76,'Y35 ','  Soluciones básicas o bases en forma sólida.'),(77,'Y36 ','  Asbestos (polvo y fibras).'),(78,'Y37 ','  Compuestos orgánicos de fósforo.'),(79,'Y38 ','  Cianuros orgánicos.'),(80,'Y39 ','  Fenoles, no clorofenoles.'),(81,'Y40 ','  Éteres.'),(82,'Y41 ','  Solventes orgánicos halogenados.'),(83,'Y42 ','  Disolventes orgánicos, no disolventes halogenados.'),(84,'Y43 ','  Cualquier sustancia del grupo de los dibenzofuranos y policlorados.'),(85,'Y44 ','  Cualquier sustancia del grupo de las dibenzoparadioxinas policloradas.'),(86,'Y45 ',' Y46 | Y47 | Otros Compuestos organohalogenados.'),(87,'Y48 ','  Material contaminado con residuos peligrosos.'),(88,'SC1','Sustancia de carácter explosiva'),(89,'SC2','Líquidos inflamables'),(90,'SC3','Sólidos inflamables'),(91,'SC4','Sustancias o desechos susceptibles de combustión espontánea'),(92,'SC5','Sustancias o desechos que, en contacto con el agua, emiten gases inflamables'),(93,'SC6','Sustancias Oxidantes'),(94,'SC7','Peróxidos orgánicos'),(95,'SC8','Tóxicos (venenosos) agudos'),(96,'SC9','Sustancias infecciosas'),(97,'SC10','Sustancias Corrosivas'),(98,'SC11','Sustancias que puedan liberar gases tóxicos en contacto con el aire o el agua'),(99,'SC12','Sustancias tóxicas (con efectos retardados o crónicos)'),(100,'SC13','Sustancias Ecotóxicas'),(101,'SC14','Lixiviados');
/*!40000 ALTER TABLE `tipo_residuos` ENABLE KEYS */;
UNLOCK TABLES;
