--
-- Table structure for table `denunciante`
--

DROP TABLE IF EXISTS `denunciante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `denunciante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orden_inspeccion_id` int(11) DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BAC65EB9FEA2F1E6` (`orden_inspeccion_id`),
  CONSTRAINT `FK_BAC65EB9FEA2F1E6` FOREIGN KEY (`orden_inspeccion_id`) REFERENCES `orden_inspeccion` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `denunciante`
--

LOCK TABLES `denunciante` WRITE;
/*!40000 ALTER TABLE `denunciante` DISABLE KEYS */;
INSERT INTO `denunciante` VALUES (1,52034,'adriana','sobral','URIBURU JOSE E., Pres. 1035 6A','15-5840-5656'),(2,52046,NULL,NULL,NULL,NULL),(3,52062,'JORGE EDUARDO','gell','CALLAO AV. 1290  2º f','48161048'),(4,52064,'Alejandro Martin','Bobeda','BOLIVAR 827','1558136150'),(5,52064,NULL,NULL,NULL,NULL),(6,52065,'Guido','Ferro','CIUDAD DE LA PAZ 1461','15-2334-5427'),(7,52066,'Guido','Ferro','CIUDAD DE LA PAZ 1461','15-2334-5427'),(8,52067,'Guido','Ferro','CIUDAD DE LA PAZ 1461','15-2334-5427'),(9,52068,'JORGE EDUARDO','gell','CALLAO AV. 1290  2º f','48161048'),(10,52089,'MARIO','PARTONY','SALGUERO JERONIMO 829','48637996'),(11,52109,'Monica Graciela','Eugenio','JUNCAL 2868','4821-1433 // 15-3171-6936'),(12,52112,'Karina Mariel','Ekert','MURILLO 970','1526757271'),(13,52114,'Mariana','Nicola','LAS HERAS GENERAL AV. 1649','1549805738'),(14,52115,'Maria Cecilia','Delli Quadri','NICARAGUA 4444','1562756663- 1537829895'),(15,52119,'Victoria','Anda','GUATEMALA 5777','47713185- 1557542535'),(16,52122,'sabrina','Eschembari','Emilio Lamarca 362','1563678421'),(17,52123,'sabrina','Eschembari','Emilio Lamarca 362','1563678421'),(18,52125,'Daniel','Russo','LARSEN 2850 5dto','15-3668-2465'),(19,52127,'Luisa Fernanda','Lassaque','Emilio Lamarca 775','45673140'),(20,52136,'Analia','Pratola','Condarco 1928 Dto D','1559528116'),(21,52137,'Elena','Rios','Camarones 2770','1565281673'),(22,52138,'Elena','Rios','Camarones 2770','1565281673'),(23,52143,'Marcia','Montivero','SALGUERO, JERONIMO 1143','15-6537-9862// 4862-1314'),(24,52148,'Iris Liliana','Tsipkis','BOULOGNE SUR MER 946 - 5B','15-3053-7194'),(25,52152,NULL,NULL,NULL,NULL),(26,52156,'Eva Catalina','Schulz','SAN LUIS 3039','4961-6025'),(27,52161,'Eva Catalina','Schulz','SAN LUIS 3039','4961-6025'),(28,52166,'Cinthia Evelyn','Meniw','PARAGUAY 3422','11-6601-5097'),(29,52168,'Alicia','Montaña','ARENALES 3844','1566942133'),(30,52169,'Maria Angeles','Nicastro','SAN MATEO 3746','4823-9284'),(31,52171,'Iris Liliana','Tsipkis','BOULOGNE SUR MER 946 5B','15-3053-7194'),(32,52504,'MARIA ANTONIA','ZUCCO',NULL,'1567516474'),(33,52518,'maria del rosario','cañas','arribeños 2455','1541713463   20659515'),(34,53152,'Vanina','Brachetti','Montiel 142','1533204024 / 46410399'),(35,53153,'Norma','Fernandez','Rivadavia 11080','46424565 / 1557802243'),(36,53177,'Natalia','Calderon','Fonrouge 1238','20873323 / 1536829954'),(37,53995,'Ezequiel','Saus','Genova 252','1558415129'),(38,53996,'Elizabeth','Thompson','Juan Agustin Garcia 2780 6°A','45842098 - 1541645685'),(39,54079,'Pablo','Nucera','Culpina 21 PB A','35295388'),(40,54080,'Alejandro','Gatti','Del Progreso 938','1551167757'),(41,54401,'CARLOS ALFREDO','GONZALEZ','TIMOTEO GORDILLO 5172','1156402474'),(42,54500,'LORENA','COBIAN','Tomas liberti 425','1568015400'),(43,54500,'SEBASTIAN','BRAMUGLIA',NULL,'1544061530'),(44,54642,'asdas','sdasd','dfsd 55','3423'),(45,54705,'Sabrina','Butera','Cnel. Ramon Lista 5253 1B','45664647 - 1556392897'),(46,54833,'Adriana Veronica','Negri','Virgilio 1287','39712036'),(47,54835,'Maria Alejandra','Rios martinez','Cortina 1121','20564604 / 1569440166'),(48,55013,'Carlos','Crescente','Montes de Oca 1001. PB. Dpto \"3\"','4301- 5484'),(49,55026,NULL,NULL,NULL,NULL),(50,55210,'CARLOS ALFREDO','GONZALEZ','TIMOTEO GORDILLO 5172','1146052227'),(51,55215,'Gioconda','de Rosa','Basualdo 2563 3 C','46019396'),(52,55223,'MIRTA','BOZZUTI','PATAGONES 2911','49111921'),(53,55318,'Elena','Seg','Ercilla 5919','46424666'),(54,55320,'Jorge Emilio','Ramponi','Bragado 4717 Dto 2','46350769 / 1553440255'),(55,55323,'Perla Graciela','Pereyra','Geronimo Cortes 776','1544041479'),(56,55617,'MARIA EUGENIA','REBOLIA','AZARA 1360 1° A','1162537739'),(57,55618,'ELCIRA LUCIA','FERNANDEZ','ALTE BROWN 1015 1° PISO',NULL),(58,55802,'Daniel Alberto','Martinelli','LA PLATA AV. 2358','15 6209 3732'),(59,55806,'juan carlos','linares','PINZON 1263','15 5512 5322'),(60,56323,'ISIDORA','GALEANO','RUCCI 3349','46029452'),(61,56325,'JORGE','GARCIA','ISABEL LA CATOLICA 933',NULL),(62,56524,NULL,NULL,NULL,NULL),(63,56706,'MARIA VICTORIA','RANDAZO','ALMIRANTE BROWN 886','1157159727'),(64,56712,'MARIA VICTORIA','RANDAZO','ALMIRANTE BROWN 886','1157159727'),(65,56726,'JULIA','ROSALES',NULL,'43031067'),(66,56804,'VERONICA','CORREIRA','CALIFORNIA 2160','1540556501'),(67,56852,'Nestor','Ibañez','Euclides 4885','46828526 / 1568510686'),(68,56854,'Ana Belen','Insaurralde','Rivadavia Av. 10233 timbre 5','0221-155250629'),(69,56856,'Claudio','Di Lemme','Yerbal 5248 6°D','46359814 / 1530962025'),(70,56857,'Alicia','Genasetti','Jose Cuba Dto 14','45041955 / 1534583869'),(71,56858,'Mariana','Lambruschini','Jose Cubas 4545 Dto 7','45038990 / 1534583871'),(72,56859,'Damian','Barbatelli','Pedro Moran 4611','45013013 / 1544043013'),(73,57370,'rodrigo','viaña','suarez 1012','1550085649'),(74,57457,'Maria Constanza','Curuchet','Juan Esteban Martinez 2159','20577110 / 1565047932'),(75,57832,'JORGE','HINDOIAN','PATRON 6426','1568839027'),(76,57950,'Estela','Coria','Arriola 92','49116860'),(77,57964,'ROQUE','RIOS','JUJUY 2033 DEPTO C','43083109'),(78,58128,NULL,NULL,'AUSTRALIA AV. 2435',NULL),(79,58867,'JUAN ESTEBAN','JARABA','SAN NICOLAS DTO 2','46724002 / 1549401599'),(80,58811,'ANA MARIA','CIMAROSTI','FERNANDEZ DE ENCISO 3926 1° 13','45026074'),(81,58865,'Gabriel Alberto','Ruggiero','San Nicolas 1074','46741415 / 1553072289'),(82,58861,'Pablo Daniel','Gennarino','Gavilan 1811','45825994 / 1525019971'),(83,58850,NULL,NULL,NULL,NULL),(84,58850,'Vivian','Vazquez Riesco',NULL,'46744704 / 1561370725'),(85,59033,'MARTA','BOADO','DARACT AV. 2227','1567347274'),(86,59183,'Claudio','Dimilta','Lafuente 2917','1157161588'),(87,59470,'fghfg','gfhfg','fghfghf','34534534'),(88,59674,'cristina','quinteros','Juabn B. Alberdi 3012','46131293 / 1550204311'),(89,59677,'cristina','quinteros','Juabn B. Alberdi 3012','46131293 / 1550204311'),(90,61523,'Fernando','Furer','San Blas 1748','45861709 / 1523861118'),(91,61524,NULL,NULL,NULL,NULL),(92,61525,'Martin Luis','Somoza Villa','Av. Donato Alvarez 1980 timbre 2','45850293 / 1567380138'),(93,71712,NULL,NULL,NULL,NULL),(94,59838,'ppi','uiyuiy','hjfjhf','1158454845'),(95,NULL,'ppi','uiyuiy','hjfjhf','1158454845'),(96,72537,NULL,NULL,NULL,NULL),(97,80440,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `denunciante` ENABLE KEYS */;
UNLOCK TABLES;
