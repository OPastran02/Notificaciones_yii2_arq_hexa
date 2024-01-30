

--
-- Table structure for table `usuarios_tipousuarios`
--

DROP TABLE IF EXISTS `usuarios_tipousuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_tipousuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`,`id_tipo_usuario`),
  KEY `IDX_223ED2ADFCF8192D` (`id_usuario`),
  KEY `IDX_223ED2AD125DE48F` (`id_tipo_usuario`),
  CONSTRAINT `FK_54B14EDB125DE48F` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `usuario_tipo` (`id`),
  CONSTRAINT `FK_54B14EDBFCF8192D` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_tipousuarios`
--

LOCK TABLES `usuarios_tipousuarios` WRITE;
/*!40000 ALTER TABLE `usuarios_tipousuarios` DISABLE KEYS */;
INSERT INTO `usuarios_tipousuarios` VALUES (1,1),(1,2),(1,7),(3,1),(4,1),(5,2),(45,1),(46,1),(48,1),(56,1),(60,1),(62,1),(62,3),(63,1),(64,1),(64,2),(64,7),(65,1),(66,1),(69,1),(70,1),(76,1),(77,1),(79,1),(79,3),(84,1),(85,1),(87,1),(88,1),(89,1),(90,1),(91,1),(92,1),(93,1),(95,1),(96,1),(97,1),(98,1),(99,1),(100,2),(101,1),(103,1),(104,1),(105,1),(106,1),(107,1),(108,1),(110,1),(111,1),(112,1),(113,1),(114,1),(115,1),(116,2),(117,1),(118,1),(118,2),(119,2),(120,1),(121,1),(121,2),(121,7),(122,1),(123,1),(128,1),(130,1),(130,2),(130,3),(130,7),(132,1),(133,1),(134,1),(135,1),(136,2),(138,1),(139,1),(139,2),(139,7),(140,1),(140,2),(140,3),(140,7),(141,1),(141,7),(142,1),(143,2),(144,1),(145,1),(146,1),(147,1),(148,1),(149,1),(150,1),(151,1),(152,1),(153,1),(155,1),(156,1),(157,1),(158,1),(161,3),(163,2),(164,3),(166,2),(169,3),(174,2),(175,3),(176,2),(179,2),(179,3),(180,2),(181,3),(184,2),(185,2),(186,2),(187,3),(188,2),(190,2),(191,2),(193,2),(197,2),(199,3),(200,2),(202,2),(204,2),(205,2),(206,2),(208,2),(209,3),(210,2),(211,2),(212,2),(214,3),(217,2),(218,2),(219,3),(221,2),(222,3),(224,2),(227,2),(228,2),(230,2),(231,2),(232,2),(234,2),(236,2),(237,2),(238,2),(241,2),(242,1),(242,2),(245,2),(247,2),(254,2),(261,1),(264,1),(266,1),(267,2),(270,1),(271,1),(271,2),(271,7),(272,2),(275,2),(280,3),(282,1),(283,7),(284,1),(285,1),(286,1),(289,1),(290,1),(291,1),(292,1),(294,4),(296,1),(297,1),(298,2),(299,1),(301,1),(303,1),(304,1),(305,2),(306,1),(309,1),(310,1),(311,1),(313,2),(314,2),(315,2),(316,2),(317,2),(319,1),(320,1),(321,1),(322,1),(323,1),(324,2),(325,1),(326,1),(327,2),(328,6),(329,2),(330,7),(331,2),(332,1),(336,1),(592,2),(593,1),(594,1),(595,1),(596,1),(597,2),(598,1),(599,1),(605,1),(608,1),(609,1),(610,1),(611,1),(612,1),(613,1),(614,3),(616,2),(617,3),(618,2),(628,1),(629,1),(630,2),(631,1),(632,2),(634,1),(635,2),(639,2),(640,2),(641,7),(642,7),(643,2),(644,2),(645,2),(646,2),(647,2),(648,7),(650,1),(650,2),(650,7);
/*!40000 ALTER TABLE `usuarios_tipousuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `view_actuaciones`
--

DROP TABLE IF EXISTS `view_actuaciones`;
/*!50001 DROP VIEW IF EXISTS `view_actuaciones`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_actuaciones` (
  `Actuaciones` tinyint NOT NULL,
  `Id_Establecimiento` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_direcciones`
--

DROP TABLE IF EXISTS `view_direcciones`;
/*!50001 DROP VIEW IF EXISTS `view_direcciones`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_direcciones` (
  `direccion` tinyint NOT NULL,
  `Id_Establecimiento` tinyint NOT NULL,
  `comuna` tinyint NOT NULL,
  `smp` tinyint NOT NULL,
  `cmr` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_establecimientos`
--

DROP TABLE IF EXISTS `view_establecimientos`;
/*!50001 DROP VIEW IF EXISTS `view_establecimientos`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_establecimientos` (
  `id` tinyint NOT NULL,
  `Estado` tinyint NOT NULL,
  `Rubros` tinyint NOT NULL,
  `RubroPrincipal` tinyint NOT NULL,
  `Direcciones` tinyint NOT NULL,
  `Comunas` tinyint NOT NULL,
  `Actuaciones` tinyint NOT NULL,
  `RazonSocial` tinyint NOT NULL,
  `cuit` tinyint NOT NULL,
  `SMP` tinyint NOT NULL,
  `favorito` tinyint NOT NULL,
  `cmr` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_inspecciones`
--

DROP TABLE IF EXISTS `view_inspecciones`;
/*!50001 DROP VIEW IF EXISTS `view_inspecciones`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_inspecciones` (
  `id` tinyint NOT NULL,
  `id_sap` tinyint NOT NULL,
  `checklist` tinyint NOT NULL,
  `fecha_inspeccion` tinyint NOT NULL,
  `area` tinyint NOT NULL,
  `Direcciones` tinyint NOT NULL,
  `Inspectores` tinyint NOT NULL,
  `circuito` tinyint NOT NULL,
  `SMP` tinyint NOT NULL,
  `comuna` tinyint NOT NULL,
  `establecimiento_id` tinyint NOT NULL,
  `anulada` tinyint NOT NULL,
  `motivo` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_inspectores`
--

DROP TABLE IF EXISTS `view_inspectores`;
/*!50001 DROP VIEW IF EXISTS `view_inspectores`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_inspectores` (
  `Inspectores` tinyint NOT NULL,
  `inspeccion_id` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_rubros`
--

DROP TABLE IF EXISTS `view_rubros`;
/*!50001 DROP VIEW IF EXISTS `view_rubros`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_rubros` (
  `Rubros` tinyint NOT NULL,
  `establecimiento_id` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `vista_all_direcciones`
--

DROP TABLE IF EXISTS `vista_all_direcciones`;
/*!50001 DROP VIEW IF EXISTS `vista_all_direcciones`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `vista_all_direcciones` (
  `direccion` tinyint NOT NULL,
  `Id_Establecimiento` tinyint NOT NULL,
  `comuna` tinyint NOT NULL,
  `smp` tinyint NOT NULL,
  `cmr` tinyint NOT NULL,
  `longitud` tinyint NOT NULL,
  `latitud` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

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

--
-- Dumping events for database 'notificaciones'
--
/*!50106 SET @save_time_zone= @@TIME_ZONE */ ;
/*!50106 DROP EVENT IF EXISTS `VencerCedulas` */;
DELIMITER ;;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;;
/*!50003 SET character_set_client  = utf8mb4 */ ;;
/*!50003 SET character_set_results = utf8mb4 */ ;;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;;
/*!50003 SET @saved_time_zone      = @@time_zone */ ;;
/*!50003 SET time_zone             = 'SYSTEM' */ ;;
/*!50106 CREATE*/ /*!50117 DEFINER=`root`@`localhost`*/ /*!50106 EVENT `VencerCedulas` ON SCHEDULE EVERY 4 HOUR STARTS '2019-05-03 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO call vencerNotificacion() */ ;;
/*!50003 SET time_zone             = @saved_time_zone */ ;;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;;
/*!50003 SET character_set_client  = @saved_cs_client */ ;;
/*!50003 SET character_set_results = @saved_cs_results */ ;;
/*!50003 SET collation_connection  = @saved_col_connection */ ;;
DELIMITER ;
/*!50106 SET TIME_ZONE= @save_time_zone */ ;

--
-- Dumping routines for database 'notificaciones'
--
/*!50003 DROP FUNCTION IF EXISTS `asd` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `asd`(valuea INT, valueb INT) RETURNS text CHARSET latin1
BEGIN
DECLARE strineOutPut TEXT;

select re.RespuestaLibre INTO strineOutPut from orden_inspeccion as o
inner join inspecciones_resultados as re on o.id = re.orden_inspeccion_id
where pregunta_id =valuea and o.id= valueb ;

RETURN strineOutPut;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `asd2` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `asd2`(valuea INT, valueb INT) RETURNS text CHARSET latin1
BEGIN
DECLARE strineOutPut TEXT;

select r.Respuesta INTO strineOutPut from orden_inspeccion as o
inner join inspecciones_resultados as re on o.id = re.orden_inspeccion_id
inner join inspecciones_respuestas as res on re.id = res.resultado_id
inner join encuesta_respuestas as r on r.id = res.respuesta_id
where pregunta_id =valuea and o.id= valueb ;

RETURN strineOutPut;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `convertir_uai` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `convertir_uai`(`entrada` VARCHAR(9999)) RETURNS varchar(9999) CHARSET utf8
BEGIN
    DECLARE salida VARCHAR(9999);
        SET salida = REPLACE(entrada , 'Ã¡', 'á');
        SET salida = REPLACE(salida , 'Ã©', 'é');
        SET salida = REPLACE(salida , 'Ã*', 'í');
        SET salida = REPLACE(salida , 'Ã³', 'ó');
        SET salida = REPLACE(salida , 'Ãº', 'ú');
        SET salida = REPLACE(salida , 'Ã ', 'à');
        SET salida = REPLACE(salida , 'Ã¨', 'è');
        SET salida = REPLACE(salida , 'Ã¬', 'ì');
        SET salida = REPLACE(salida , 'Ã²', 'ò');
        SET salida = REPLACE(salida , 'Ã¹', 'ù');
        SET salida = REPLACE(salida , 'Ã¤', 'ä');
        SET salida = REPLACE(salida , 'Ã«', 'ë');
        SET salida = REPLACE(salida , 'Ã¯', 'ï');
        SET salida = REPLACE(salida , 'Ã¶', 'ö');
        SET salida = REPLACE(salida , 'Ã¼', 'ü');
        SET salida = REPLACE(entrada , 'Ã', 'Á');
        SET salida = REPLACE(entrada , 'Ã‰', 'É');
        SET salida = REPLACE(entrada , 'Ã', 'Í');
        SET salida = REPLACE(entrada , 'Ã“', 'Ó');
        SET salida = REPLACE(entrada , 'Ãš', 'Ú');
        SET salida = REPLACE(entrada , 'Ã‘', 'Ñ');
        SET salida = REPLACE(entrada , 'Ã€', 'À');
        SET salida = REPLACE(entrada , 'Ãˆ', 'È');
        SET salida = REPLACE(entrada , 'ÃŒ', 'Ì');
        SET salida = REPLACE(entrada , 'Ã’', 'Ò');
        SET salida = REPLACE(entrada , 'Ã™', 'Ù');
        SET salida = REPLACE(entrada , 'Ã‘', 'Ñ');
        SET salida = REPLACE(entrada , 'Ã„', 'Ä');
        SET salida = REPLACE(entrada , 'Ã‹', 'Ë');
        SET salida = REPLACE(entrada , 'Ã', 'Ï');
        SET salida = REPLACE(entrada , 'Ã–', 'Ö');
        SET salida = REPLACE(entrada , 'Ãœ', 'Ü');
        SET salida = REPLACE(entrada , 'Â°', '°');
    RETURN salida;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnCantidadInspeccionesPorOrden` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnCantidadInspeccionesPorOrden`(`idOrden` INT) RETURNS int(255)
BEGIN



DECLARE integerOutPut int(255);



select count(*) into integerOutPut from inspeccion where orden_inspeccion_id = idOrden;







RETURN integerOutPut;





END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnCantidadInspeccionesPorOrdenNulas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnCantidadInspeccionesPorOrdenNulas`(`idOrden` INT) RETURNS int(255)
BEGIN



DECLARE integerOutPut int(255);



select count(*) into integerOutPut from inspeccion where orden_inspeccion_id = idOrden and fecha_inspeccion is null;







RETURN integerOutPut;





END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnCuitUltimaRazonSocialEstablecimiento` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnCuitUltimaRazonSocialEstablecimiento`(`idEstablecimiento` INT) RETURNS varchar(1000) CHARSET utf8
BEGIN

DECLARE strineOutPut VARCHAR(1000);

SELECT cuit INTO strineOutPut FROM establecimientos_razonessociales as er 
INNER JOIN razon_social as r on er.razon_social_id = r.id
where er.establecimiento_id = idEstablecimiento
order by er.fecha_inicio desc limit 1;

RETURN strineOutPut;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnEstablecimientoActuaciones` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnEstablecimientoActuaciones`(`idEstablecimiento` INT) RETURNS varchar(20000) CHARSET latin1
BEGIN



DECLARE strineOutPut VARCHAR(20000);



SELECT GROUP_CONCAT(ta.tipoActuacion,"-",a.numero,"-",r.reparticion,"-",a.anio) strineOutPut INTO strineOutPut

from establecimiento as e

LEFT JOIN actuacion as a on e.id = a.Id_Establecimiento

LEFT JOIN reparticion as r on a.reparticion_id = r.id

LEFT JOIN tipo_actuacion as ta on a.tipo_id = ta.id

where e.id  = idEstablecimiento;





RETURN strineOutPut;



END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnEstablecimientoCmr` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnEstablecimientoCmr`(`idEstablecimiento` INT) RETURNS int(255)
BEGIN

DECLARE integerOutPut int(255);

SELECT cmr INTO integerOutPut
FROM direccion
WHERE Id_Establecimiento = idEstablecimiento
ORDER BY cmr desc
LIMIT 1;


RETURN integerOutPut;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnEstablecimientoComuna` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnEstablecimientoComuna`(`idEstablecimiento` INT) RETURNS varchar(20000) CHARSET latin1
BEGIN



DECLARE strineOutPut VARCHAR(20000);



SELECT DISTINCT group_concat(DISTINCT d.Comuna) INTO strineOutPut

FROM direccion as d

WHERE d.Id_Establecimiento = idEstablecimiento;





RETURN strineOutPut;



END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnEstablecimientoDomicilios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnEstablecimientoDomicilios`(`idEstablecimiento` INT) RETURNS varchar(20000) CHARSET latin1
BEGIN



DECLARE strineOutPut VARCHAR(20000);



SELECT group_concat(c.Calle," ",d.Altura," ",COALESCE(d.Piso,"")," ",COALESCE(d.Dpto,"")," ",COALESCE(d.Local,""),"<br>") INTO strineOutPut

FROM direccion as d

INNER JOIN calles as c on d.Id_Calle = c.id

WHERE d.Id_Establecimiento = idEstablecimiento;





RETURN strineOutPut;





END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnEstablecimientoParcelas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnEstablecimientoParcelas`(`idEstablecimiento` INT) RETURNS varchar(20000) CHARSET latin1
BEGIN

DECLARE strineOutPut VARCHAR(20000);

SELECT group_concat(distinct COALESCE(d.SMP,""),"<br>") INTO strineOutPut
FROM direccion as d
INNER JOIN calles as c on d.Id_Calle = c.id
WHERE d.Id_Establecimiento = idEstablecimiento;


RETURN strineOutPut;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnEstablecimientoRubros` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnEstablecimientoRubros`(`idEstablecimiento` INT) RETURNS varchar(20000) CHARSET latin1
BEGIN



DECLARE strineOutPut VARCHAR(20000);



SELECT GROUP_CONCAT(ru.Rubro) strineOutPut INTO strineOutPut

FROM establecimientos_rubros as er

INNER JOIN rubro as ru on er.rubro_id = ru.id

where er.establecimiento_id  = idEstablecimiento;





RETURN strineOutPut;



END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnInspectoresPorIdInspeccion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnInspectoresPorIdInspeccion`(`idInsp` INT) RETURNS varchar(255) CHARSET utf8
BEGIN

DECLARE stringOutPut varchar(255);


SELECT GROUP_CONCAT(u.apellido,", ",u.nombre) INTO stringOutPut FROM inspeccion_usuario as i 
INNER JOIN usuarios as u on u.id = i.usuario_id
WHERE i.inspeccion_id = idInsp;


RETURN stringOutPut;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnMotivosActas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnMotivosActas`(`idActa` INT) RETURNS varchar(20000) CHARSET latin1
BEGIN

DECLARE strineOutPut VARCHAR(20000);

SELECT group_concat(m.motivo," | ",m.motivoCompleto) INTO strineOutPut
FROM acta_motivo as m
INNER JOIN acta_utilizada_motivo as am on am.id_acta_motivo = m.id
WHERE am.id_acta_utilizada = idActa;


RETURN strineOutPut;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnMotivosActasTipo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnMotivosActasTipo`(`idActa` INT) RETURNS varchar(20000) CHARSET latin1
BEGIN

DECLARE strineOutPut VARCHAR(20000);

SELECT group_concat(m.tipo) INTO strineOutPut
FROM acta_motivo as m
INNER JOIN acta_utilizada_motivo as am on am.id_acta_motivo = m.id
WHERE am.id_acta_utilizada = idActa;


RETURN strineOutPut;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnOrdenInspeccionComuna` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnOrdenInspeccionComuna`(`idOrden` INT) RETURNS varchar(20000) CHARSET latin1
BEGIN



DECLARE strineOutPut VARCHAR(20000);



SELECT DISTINCT group_concat(DISTINCT d.Comuna) INTO strineOutPut

FROM direccion_provisoria as d

WHERE d.orden_inspeccion_id = idOrden;





RETURN strineOutPut;



END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnOrdenInspeccionDenunciantes` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnOrdenInspeccionDenunciantes`(`idOrden` INT) RETURNS varchar(1000) CHARSET latin1
BEGIN

DECLARE strineOutPut VARCHAR(1000);

SELECT group_concat(COALESCE(d.nombre,"")," ",COALESCE(d.apellido,"")," ",COALESCE(d.telefono,"")," ",COALESCE(d.direccion,"")) INTO strineOutPut
FROM denunciante as d
WHERE d.orden_inspeccion_id = idOrden;


RETURN strineOutPut;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnOrdenInspeccionDomiciliosProvisorios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnOrdenInspeccionDomiciliosProvisorios`(`idOrden` INT) RETURNS varchar(1000) CHARSET latin1
BEGIN



DECLARE strineOutPut VARCHAR(1000);



SELECT group_concat(c.Calle," ",d.Altura," ",COALESCE(d.Piso,"")," ",COALESCE(d.Dpto,"")," ",COALESCE(d.Local,"")) INTO strineOutPut

FROM direccion_provisoria as d

INNER JOIN calles as c on d.calle_id = c.id

WHERE d.orden_inspeccion_id = idOrden;





RETURN strineOutPut;



END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnOrdenInspeccionParcela` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnOrdenInspeccionParcela`(`idOrden` INT) RETURNS varchar(1000) CHARSET latin1
BEGIN

DECLARE strineOutPut VARCHAR(1000);

SELECT group_concat(distinct COALESCE(d.SMP,"")) INTO strineOutPut
FROM direccion_provisoria as d
INNER JOIN calles as c on d.calle_id = c.id
WHERE d.orden_inspeccion_id = idOrden;


RETURN strineOutPut;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnUltimaFechaInspeccionPorOrden` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnUltimaFechaInspeccionPorOrden`(`idOrden` INT) RETURNS varchar(255) CHARSET utf8
BEGIN

DECLARE integerOutPut varchar(255);

select fecha_inspeccion into integerOutPut from inspeccion where orden_inspeccion_id = idOrden ORDER BY fecha_inspeccion desc LIMIT 1;



RETURN integerOutPut;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnUltimaRazonSocialEstablecimiento` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnUltimaRazonSocialEstablecimiento`(`idEstablecimiento` INT) RETURNS varchar(1000) CHARSET utf8
BEGIN

DECLARE strineOutPut VARCHAR(1000);

SELECT CONCAT(COALESCE(r.nombre1,"")," ",COALESCE(r.nombre2,"")) INTO strineOutPut FROM establecimientos_razonessociales as er 
INNER JOIN razon_social as r on er.razon_social_id = r.id
where er.establecimiento_id = idEstablecimiento
order by er.fecha_inicio desc limit 1;

RETURN strineOutPut;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnUltimaRazonSocialEstablecimientoCUIT` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnUltimaRazonSocialEstablecimientoCUIT`(`idEstablecimiento` INT) RETURNS varchar(1000) CHARSET utf8
BEGIN

DECLARE strineOutPut VARCHAR(1000);

SELECT r.cuit INTO strineOutPut FROM establecimientos_razonessociales as er 
INNER JOIN razon_social as r on er.razon_social_id = r.id
where er.establecimiento_id = idEstablecimiento
order by er.fecha_inicio desc limit 1;

RETURN strineOutPut;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnUltimosInspectoresPorOrden` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnUltimosInspectoresPorOrden`(`idOrden` INT) RETURNS varchar(255) CHARSET utf8
BEGIN

DECLARE stringOutPut varchar(255);
DECLARE idInspeccion int(255);

SELECT id INTO idInspeccion from inspeccion WHERE orden_inspeccion_id = idOrden ORDER BY fecha_inspeccion desc LIMIT 1;

SELECT GROUP_CONCAT(u.apellido,", ",u.nombre SEPARATOR ' - ') INTO stringOutPut FROM inspeccion_usuario as i 
INNER JOIN usuarios as u on u.id = i.usuario_id
WHERE i.inspeccion_id = idInspeccion;


RETURN stringOutPut;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnUsuariosInspectoresPorInspecciones` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `fnUsuariosInspectoresPorInspecciones`(`idInspeccion` INT) RETURNS varchar(20000) CHARSET latin1
BEGIN

DECLARE strineOutPut VARCHAR(20000);

SELECT group_concat(CONCAT(u.nombre," ",u.apellido)) INTO strineOutPut
FROM inspeccion_usuario as i
inner join usuarios as u on i.usuario_id = u.id
WHERE i.inspeccion_id = idInspeccion;

RETURN strineOutPut;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `tienefaltas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `tienefaltas`(`idChecklist` INT) RETURNS int(11)
BEGIN
DECLARE countResult INTEGER;
SELECT COUNT(*) INTO countResult FROM nuevo_esquema.acta_utilizada AS au WHERE au.checklist = idChecklist;
RETURN countResult;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `ultimaInspeccionEstablecimiento` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `ultimaInspeccionEstablecimiento`(`idEstablecimiento` INT) RETURNS datetime
BEGIN



declare fechaOutput datetime;



SELECT i.fecha_inspeccion INTO fechaOutput FROM orden_inspeccion as o INNER JOIN inspeccion as i on o.id = i.orden_inspeccion_id

and i.fecha_inspeccion = (SELECT max(fecha_inspeccion) FROM inspeccion WHERE id = i.id)

WHERE o.establecimiento_id = idEstablecimiento

ORDER BY i.fecha_inspeccion DESC

LIMIT 1;



RETURN fechaOutput;



END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `ultimaProgramacionEstablecimiento` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`lucho`@`%` FUNCTION `ultimaProgramacionEstablecimiento`(`idEstablecimiento` INT) RETURNS datetime
BEGIN


declare fechaOutput datetime;



SELECT i.fecha_programado INTO fechaOutput FROM orden_inspeccion as o INNER JOIN inspeccion as i on o.id = i.orden_inspeccion_id

and i.fecha_programado = (SELECT max(fecha_programado) FROM inspeccion WHERE id = i.id)

WHERE o.establecimiento_id = idEstablecimiento

ORDER BY i.fecha_programado DESC

LIMIT 1;



RETURN fechaOutput;



END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `LocalAbiertoNo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`checklist`@`%` PROCEDURE `LocalAbiertoNo`(IN num_checklist INT)
BEGIN

DECLARE num_orden_inspeccion INT;

SET @num_orden_inspeccion = (SELECT id FROM nuevo_esquema.orden_inspeccion where nuevo_esquema.orden_inspeccion.checklist = num_checklist);

CREATE TABLE IF NOT EXISTS tabla_temporario_id_resultados (
id INT,
orden_inspeccion_id INT,
pregunta_id INT,
grupo_id INT
);

INSERT INTO tabla_temporario_id_resultados (id, orden_inspeccion_id,pregunta_id,grupo_id)
SELECT id, orden_inspeccion_id,pregunta_id,grupo_id FROM nuevo_esquema.inspecciones_resultados WHERE orden_inspeccion_id = @num_orden_inspeccion;

 DELETE FROM tabla_temporario_id_resultados WHERE tabla_temporario_id_resultados.pregunta_id=1 AND tabla_temporario_id_resultados.grupo_id=1;
 DELETE FROM tabla_temporario_id_resultados WHERE tabla_temporario_id_resultados.pregunta_id=346 AND tabla_temporario_id_resultados.grupo_id=18;
 DELETE FROM tabla_temporario_id_resultados WHERE tabla_temporario_id_resultados.pregunta_id=352 AND tabla_temporario_id_resultados.grupo_id=1;
 DELETE FROM tabla_temporario_id_resultados WHERE tabla_temporario_id_resultados.pregunta_id=357 AND tabla_temporario_id_resultados.grupo_id=1;
 DELETE FROM tabla_temporario_id_resultados WHERE tabla_temporario_id_resultados.pregunta_id=358 AND tabla_temporario_id_resultados.grupo_id=18;

DELETE FROM nuevo_esquema.inspecciones_resultados_fotos WHERE resultado_id IN (SELECT id FROM tabla_temporario_id_resultados);
DELETE FROM nuevo_esquema.inspecciones_respuestas WHERE resultado_id IN (SELECT id FROM tabla_temporario_id_resultados);
DELETE FROM nuevo_esquema.inspecciones_resultados WHERE id IN (SELECT id FROM tabla_temporario_id_resultados);

DROP TABLE tabla_temporario_id_resultados;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ultimaAsignacionActaId` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`checklist`@`%` PROCEDURE `ultimaAsignacionActaId`(id INT)
BEGIN

	select acta_id,fecha,inspector_id from acta_asignacion where acta_id = id Order By Fecha desc limit 1;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `vencerNotificacion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`checklist`@`%` PROCEDURE `vencerNotificacion`()
BEGIN
update notificacion SET estado_id = 5
WHERE 
(
	DATE_ADD(fecha_notificacion,INTERVAL plazo1 DAY) < NOW() AND fecha_notificacion IS NOT NULL  AND (presentacion_agregar = 0 or presentacion_agregar is null) and plazo1 <> plazo2 AND (estado_id <5 or estado_id = 9)
)
OR 
(
	DATE_ADD(fecha_notificacion,INTERVAL plazo2 DAY) < NOW() AND fecha_notificacion IS NOT NULL  AND (estado_id <5 or estado_id = 9)
);
UPDATE notificacion SET estado_id = 10
WHERE presentacion_agregar = 1 AND (estado_id <5 or estado_id = 9) AND fecha_notificacion IS NOT NULL;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `Tabla_Establecimientos`
--

/*!50001 DROP TABLE IF EXISTS `Tabla_Establecimientos`*/;
/*!50001 DROP VIEW IF EXISTS `Tabla_Establecimientos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY INVOKER */
/*!50001 VIEW `Tabla_Establecimientos` AS select `e`.`id` AS `id`,`es`.`Estado` AS `Estado`,`rp`.`RubroPrincipal` AS `RubroPrincipal`,`d`.`comuna` AS `Comunas`,`a`.`Actuaciones` AS `Actuaciones`,concat(coalesce(`rz`.`nombre1`,''),' ',coalesce(`rz`.`nombre2`,'')) AS `RazonSocial`,`rz`.`cuit` AS `cuit`,`d`.`longitud` AS `longitud`,`d`.`latitud` AS `latitud`,`d`.`cmr` AS `cmr` from ((((((((`establecimiento` `e` join `vista_all_direcciones` `d` on((`e`.`id` = `d`.`Id_Establecimiento`))) left join `estado` `es` on((`es`.`id` = `e`.`Id_Estado`))) left join `resultados_ultima_inspeccion` `rut` on((`rut`.`establecimiento_id` = `e`.`id`))) left join `rubro_principal` `rp` on((`e`.`Id_Rubro_Principal` = `rp`.`id`))) left join `establecimientos_razonessociales` `er` on(((`e`.`id` = `er`.`establecimiento_id`) and (`er`.`fecha_inicio` = (select max(`establecimientos_razonessociales`.`fecha_inicio`) from `establecimientos_razonessociales` where (`establecimientos_razonessociales`.`establecimiento_id` = `e`.`id`)))))) left join `razon_social` `rz` on((`rz`.`id` = `er`.`razon_social_id`))) left join `view_rubros` `ru` on((`ru`.`establecimiento_id` = `e`.`id`))) left join `view_actuaciones` `a` on((`a`.`Id_Establecimiento` = `e`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `Tabla_Faltas`
--

/*!50001 DROP TABLE IF EXISTS `Tabla_Faltas`*/;
/*!50001 DROP VIEW IF EXISTS `Tabla_Faltas`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`lucho`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `Tabla_Faltas` AS select `au`.`checklist` AS `checklist`,`au`.`fechaRecepcion` AS `fechaRecepcion`,`am`.`motivo` AS `Falta`,`am`.`motivoCompleto` AS `Falta_motivo_completo`,`am`.`tipo` AS `Falta_tipo` from ((`acta_utilizada` `au` join `acta_utilizada_motivo` `aum` on((`au`.`id` = `aum`.`id_acta_utilizada`))) join `acta_motivo` `am` on((`aum`.`id_acta_motivo` = `am`.`id`))) where ((`au`.`checklist` <> 0) or (not(NULL))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `Tabla_Inspecciones`
--

/*!50001 DROP TABLE IF EXISTS `Tabla_Inspecciones`*/;
/*!50001 DROP VIEW IF EXISTS `Tabla_Inspecciones`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY INVOKER */
/*!50001 VIEW `Tabla_Inspecciones` AS select `o`.`id` AS `id`,`o`.`checklist` AS `checklist`,`i`.`fecha_inspeccion` AS `fecha_inspeccion`,`o`.`establecimiento_id` AS `establecimiento_id`,`o`.`anulada` AS `anulada` from ((((((`orden_inspeccion` `o` join `area` `a` on((`o`.`area_id` = `a`.`id`))) join `circuito` `ci` on((`o`.`circuito_id` = `ci`.`id`))) join `inspeccion` `i` on((`i`.`orden_inspeccion_id` = `o`.`id`))) join `motivo_inspeccion` `mo` on((`o`.`motivo_inspeccion_id` = `mo`.`id`))) left join `view_inspectores` `ins` on((`ins`.`inspeccion_id` = `i`.`id`))) left join `view_direcciones` `d` on((`o`.`establecimiento_id` = `d`.`Id_Establecimiento`))) where ((isnull(`o`.`eliminada`) or (`o`.`eliminada` = 0)) and (`o`.`checklist` is not null)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `Tabla_preguntas_inspeccion`
--

/*!50001 DROP TABLE IF EXISTS `Tabla_preguntas_inspeccion`*/;
/*!50001 DROP VIEW IF EXISTS `Tabla_preguntas_inspeccion`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY INVOKER */
/*!50001 VIEW `Tabla_preguntas_inspeccion` AS select `ir`.`id` AS `Id_resultado`,`oi`.`checklist` AS `checklist`,`erp`.`pregunta_id` AS `pregunta_id`,`ep`.`pregunta` AS `pregunta` from (((`inspecciones_resultados` `ir` join `orden_inspeccion` `oi` on((`ir`.`orden_inspeccion_id` = `oi`.`id`))) join `encuesta_requisitos_pregunta_grupo` `erp` on((`erp`.`pregunta_id` = `ir`.`pregunta_id`))) join `encuesta_pregunta` `ep` on((`ep`.`id` = `erp`.`pregunta_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `Tabla_preguntas_respuestas_calificadas`
--

/*!50001 DROP TABLE IF EXISTS `Tabla_preguntas_respuestas_calificadas`*/;
/*!50001 DROP VIEW IF EXISTS `Tabla_preguntas_respuestas_calificadas`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY INVOKER */
/*!50001 VIEW `Tabla_preguntas_respuestas_calificadas` AS select `tpi`.`pregunta_id` AS `id_pregunta`,`iresp`.`respuesta_id` AS `respuesta_id`,`ir`.`grupo_id` AS `grupo_pregunta`,`er`.`Respuesta` AS `Respuesta`,`ir`.`RespuestaLibre` AS `respuestaLibre`,'' AS `RiesgoSeveroS/N` from (((`Tabla_preguntas_inspeccion` `tpi` join `inspecciones_resultados` `ir` on(((`tpi`.`Id_resultado` = `ir`.`orden_inspeccion_id`) and (`tpi`.`pregunta_id` = `ir`.`pregunta_id`)))) left join `inspecciones_respuestas` `iresp` on((`ir`.`id` = `iresp`.`resultado_id`))) left join `encuesta_respuestas` `er` on((`iresp`.`respuesta_id` = `er`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `Vista_total_faltas`
--

/*!50001 DROP TABLE IF EXISTS `Vista_total_faltas`*/;
/*!50001 DROP VIEW IF EXISTS `Vista_total_faltas`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY INVOKER */
/*!50001 VIEW `Vista_total_faltas` AS select `au`.`checklist` AS `checklist`,count(0) AS `cantidad de faltas` from `acta_utilizada` `au` group by `au`.`checklist` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_actuaciones`
--

/*!50001 DROP TABLE IF EXISTS `view_actuaciones`*/;
/*!50001 DROP VIEW IF EXISTS `view_actuaciones`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY INVOKER */
/*!50001 VIEW `view_actuaciones` AS select group_concat(`ta`.`tipoActuacion`,'-',`a`.`numero`,'-',`r`.`reparticion`,'-',`a`.`anio` separator ',') AS `Actuaciones`,`a`.`Id_Establecimiento` AS `Id_Establecimiento` from ((`actuacion` `a` left join `reparticion` `r` on((`a`.`reparticion_id` = `r`.`id`))) left join `tipo_actuacion` `ta` on((`a`.`tipo_id` = `ta`.`id`))) group by `a`.`Id_Establecimiento` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_direcciones`
--

/*!50001 DROP TABLE IF EXISTS `view_direcciones`*/;
/*!50001 DROP VIEW IF EXISTS `view_direcciones`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY INVOKER */
/*!50001 VIEW `view_direcciones` AS select group_concat(`c`.`Calle`,' ',`d`.`Altura`,' ',coalesce(`d`.`Piso`,''),' ',coalesce(`d`.`Dpto`,''),' ',coalesce(`d`.`Local`,''),'<br>' separator ',') AS `direccion`,`d`.`Id_Establecimiento` AS `Id_Establecimiento`,group_concat(distinct `d`.`Comuna` separator ',') AS `comuna`,group_concat(distinct `d`.`SMP` separator ',') AS `smp`,group_concat(distinct `d`.`cmr` separator ',') AS `cmr` from (`direccion` `d` join `calles` `c` on((`d`.`Id_Calle` = `c`.`id`))) group by `d`.`Id_Establecimiento` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_establecimientos`
--

/*!50001 DROP TABLE IF EXISTS `view_establecimientos`*/;
/*!50001 DROP VIEW IF EXISTS `view_establecimientos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY INVOKER */
/*!50001 VIEW `view_establecimientos` AS select `e`.`id` AS `id`,`es`.`Estado` AS `Estado`,`ru`.`Rubros` AS `Rubros`,`rp`.`RubroPrincipal` AS `RubroPrincipal`,`d`.`direccion` AS `Direcciones`,`d`.`comuna` AS `Comunas`,`a`.`Actuaciones` AS `Actuaciones`,concat(coalesce(`rz`.`nombre1`,''),' ',coalesce(`rz`.`nombre2`,'')) AS `RazonSocial`,`rz`.`cuit` AS `cuit`,`d`.`smp` AS `SMP`,`e`.`favorito` AS `favorito`,`d`.`cmr` AS `cmr` from ((((((((`notificaciones`.`establecimiento` `e` join `notificaciones`.`view_direcciones` `d` on((`e`.`id` = `d`.`Id_Establecimiento`))) left join `notificaciones`.`estado` `es` on((`es`.`id` = `e`.`Id_Estado`))) left join `notificaciones`.`rubro_principal` `rp` on((`e`.`Id_Rubro_Principal` = `rp`.`id`))) left join `notificaciones`.`establecimientos_razonessociales` `er` on(((`e`.`id` = `er`.`establecimiento_id`) and (`er`.`fecha_inicio` = (select max(`notificaciones`.`establecimientos_razonessociales`.`fecha_inicio`) from `notificaciones`.`establecimientos_razonessociales` where (`notificaciones`.`establecimientos_razonessociales`.`establecimiento_id` = `e`.`id`)))))) left join `notificaciones`.`razon_social` `rz` on((`rz`.`id` = `er`.`razon_social_id`))) left join `notificaciones`.`view_rubros` `ru` on((`ru`.`establecimiento_id` = `e`.`id`))) left join `notificaciones`.`view_actuaciones` `a` on((`a`.`Id_Establecimiento` = `e`.`id`))) left join `notificaciones`.`view_inspecciones` `vi` on((`vi`.`establecimiento_id` = `e`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_inspecciones`
--

/*!50001 DROP TABLE IF EXISTS `view_inspecciones`*/;
/*!50001 DROP VIEW IF EXISTS `view_inspecciones`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY INVOKER */
/*!50001 VIEW `view_inspecciones` AS select `o`.`id` AS `id`,`o`.`id_sap` AS `id_sap`,`o`.`checklist` AS `checklist`,`i`.`fecha_inspeccion` AS `fecha_inspeccion`,`a`.`area` AS `area`,`d`.`direccion` AS `Direcciones`,`ins`.`Inspectores` AS `Inspectores`,`ci`.`circuito` AS `circuito`,`d`.`smp` AS `SMP`,`d`.`comuna` AS `comuna`,`o`.`establecimiento_id` AS `establecimiento_id`,`o`.`anulada` AS `anulada`,`mo`.`motivo` AS `motivo` from ((((((`notificaciones2`.`orden_inspeccion` `o` join `notificaciones2`.`area` `a` on((`o`.`area_id` = `a`.`id`))) join `notificaciones2`.`circuito` `ci` on((`o`.`circuito_id` = `ci`.`id`))) join `notificaciones2`.`inspeccion` `i` on((`i`.`orden_inspeccion_id` = `o`.`id`))) join `notificaciones2`.`motivo_inspeccion` `mo` on((`o`.`motivo_inspeccion_id` = `mo`.`id`))) left join `notificaciones2`.`view_inspectores` `ins` on((`ins`.`inspeccion_id` = `i`.`id`))) left join `notificaciones2`.`view_direcciones` `d` on((`o`.`establecimiento_id` = `d`.`Id_Establecimiento`))) where ((isnull(`o`.`eliminada`) or (`o`.`eliminada` = 0)) and (`o`.`checklist` is not null)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_inspectores`
--

/*!50001 DROP TABLE IF EXISTS `view_inspectores`*/;
/*!50001 DROP VIEW IF EXISTS `view_inspectores`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY INVOKER */
/*!50001 VIEW `view_inspectores` AS select group_concat(`u`.`apellido`,', ',`u`.`nombre` separator ',') AS `Inspectores`,`i`.`inspeccion_id` AS `inspeccion_id` from (`inspeccion_usuario` `i` join `usuarios` `u` on((`u`.`id` = `i`.`usuario_id`))) group by `i`.`inspeccion_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_rubros`
--

/*!50001 DROP TABLE IF EXISTS `view_rubros`*/;
/*!50001 DROP VIEW IF EXISTS `view_rubros`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY INVOKER */
/*!50001 VIEW `view_rubros` AS select group_concat(`ru`.`Rubro` separator ',') AS `Rubros`,`er`.`establecimiento_id` AS `establecimiento_id` from (`establecimientos_rubros` `er` join `rubro` `ru` on((`er`.`rubro_id` = `ru`.`id`))) group by `er`.`establecimiento_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vista_all_direcciones`
--

/*!50001 DROP TABLE IF EXISTS `vista_all_direcciones`*/;
/*!50001 DROP VIEW IF EXISTS `vista_all_direcciones`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY INVOKER */
/*!50001 VIEW `vista_all_direcciones` AS select group_concat(`c`.`Calle`,' ',`d`.`Altura`,' ',coalesce(`d`.`Piso`,''),' ',coalesce(`d`.`Dpto`,''),' ',coalesce(`d`.`Local`,''),'<br>' separator '//') AS `direccion`,`d`.`Id_Establecimiento` AS `Id_Establecimiento`,group_concat(distinct `d`.`Comuna` separator '//') AS `comuna`,group_concat(distinct `d`.`SMP` separator '//') AS `smp`,group_concat(distinct `d`.`cmr` separator '//') AS `cmr`,group_concat(distinct `d`.`Lon` separator '//') AS `longitud`,group_concat(distinct `d`.`Lat` separator '//') AS `latitud` from (`direccion` `d` join `calles` `c` on((`d`.`Id_Calle` = `c`.`id`))) group by `d`.`Id_Establecimiento` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-01 17:52:07
