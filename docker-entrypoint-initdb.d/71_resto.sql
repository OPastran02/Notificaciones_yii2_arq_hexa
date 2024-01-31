/*
ALTER TABLE `inspeccion`
ADD CONSTRAINT `FK_343F5BA3FEA2F1E6`
FOREIGN KEY (`orden_inspeccion_id`)
REFERENCES `orden_inspeccion` (`id`);

ALTER TABLE `acta`
ADD CONSTRAINT `FK_99A9D73F91B5DB74`
FOREIGN KEY (`id_inspeccion`)
REFERENCES `orden_inspeccion` (`id`);

ALTER TABLE `acta`
ADD CONSTRAINT `FK_99A9D73F9F5A440B`
FOREIGN KEY (`estado_id`)
REFERENCES `acta_estado` (`id`);

ALTER TABLE `direccion_provisoria`
ADD CONSTRAINT `FK_77BF1B73A08B711E`
FOREIGN KEY (`calle_id`)
REFERENCES `calles` (`id`);

ALTER TABLE `direccion_provisoria`
ADD CONSTRAINT `FK_77BF1B73FEA2F1E6`
FOREIGN KEY (`orden_inspeccion_id`)
REFERENCES `orden_inspeccion` (`id`);

ALTER TABLE `disposicion`
ADD CONSTRAINT `FK_8196D046201FA7E6`
FOREIGN KEY (`reparticion_id`)
REFERENCES `reparticion` (`id`);

ALTER TABLE `disposicion`
ADD CONSTRAINT `FK_8196D046A9276E6C`
FOREIGN KEY (`tipo_id`)
REFERENCES `tipo_dispo` (`id`);

ALTER TABLE `disposicion`
ADD CONSTRAINT `FK_8196D046BF396750`
FOREIGN KEY (`id`)
REFERENCES `notificacion` (`id`)
ON DELETE CASCADE;

ALTER TABLE `faja`
ADD CONSTRAINT `FK_D3BB04375CB4216A`
FOREIGN KEY (`id_area`)
REFERENCES `area` (`id`);

ALTER TABLE `faja`
ADD CONSTRAINT `FK_D3BB04376A540E`
FOREIGN KEY (`id_estado`)
REFERENCES `faja_estado` (`id`);

ALTER TABLE `faja`
ADD CONSTRAINT `FK_D3BB043791B5DB74`
FOREIGN KEY (`id_inspeccion`)
REFERENCES `orden_inspeccion` (`id`);

ALTER TABLE `faja`
ADD CONSTRAINT `FK_D3BB0437E12B893F`
FOREIGN KEY (`id_tipo_clausura`)
REFERENCES `faja_tipo_clausura` (`id`);

ALTER TABLE `inspecciones_respuestas`
ADD CONSTRAINT `FK_22DD3258FF51ECB6`
FOREIGN KEY (`resultado_id`)
REFERENCES `inspecciones_resultados` (`id`);

ALTER TABLE `inspecciones_respuestas`
ADD CONSTRAINT `FK_22DD3258D9BA57A2`
FOREIGN KEY (`respuesta_id`)
REFERENCES `encuesta_respuestas` (`id`);

ALTER TABLE `inspecciones_resultados`
ADD CONSTRAINT `FK_7109E174FEA2F1E6`
FOREIGN KEY (`orden_inspeccion_id`)
REFERENCES `orden_inspeccion` (`id`);

ALTER TABLE `inspecciones_resultados`
ADD CONSTRAINT `FK_7109E17431A5801E`
FOREIGN KEY (`pregunta_id`)
REFERENCES `encuesta_pregunta` (`id`);

ALTER TABLE `inspecciones_resultados`
ADD CONSTRAINT `FK_7109E1749C833003`
FOREIGN KEY (`grupo_id`)
REFERENCES `encuesta_grupo_preguntas` (`id`);

ALTER TABLE `laboratorio_carga_resultados`
  ADD KEY `IDX_67BED1A0AA7041B7` (`determinacion_id`),
  ADD KEY `IDX_67BED1A031177579` (`muestra_id`),
  ADD KEY `IDX_67BED1A0644ABBDE` (`legislacion_id`),
  ADD KEY `IDX_67BED1A09B5F2C0B` (`legislacion_sin_contacto_id`),
  ADD KEY `IDX_67BED1A086B5E41E` (`legislacion_pasivo_id`),
  ADD KEY `IDX_67BED1A0DB38439E` (`usuario_id`);

ALTER TABLE `laboratorio_carga_resultados`
  ADD CONSTRAINT `FK_67BED1A031177579` FOREIGN KEY (`muestra_id`) REFERENCES `laboratorio_muestra` (`id`),
  ADD CONSTRAINT `FK_67BED1A0644ABBDE` FOREIGN KEY (`legislacion_id`) REFERENCES `laboratorio_legislacion` (`id`),
  ADD CONSTRAINT `FK_67BED1A086B5E41E` FOREIGN KEY (`legislacion_pasivo_id`) REFERENCES `laboratorio_legislacion` (`id`),
  ADD CONSTRAINT `FK_67BED1A09B5F2C0B` FOREIGN KEY (`legislacion_sin_contacto_id`) REFERENCES `laboratorio_legislacion` (`id`),
  ADD CONSTRAINT `FK_67BED1A0AA7041B7` FOREIGN KEY (`determinacion_id`) REFERENCES `laboratorio_determinacion` (`id`),
  ADD CONSTRAINT `FK_67BED1A0DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

ALTER TABLE `laboratorio_determinacion_legislacion`
  ADD KEY `IDX_C7F6548EAA7041B7` (`determinacion_id`),
  ADD KEY `IDX_C7F6548E644ABBDE` (`legislacion_id`),
  ADD KEY `IDX_C7F6548EA9276E6C` (`tipo_id`);

ALTER TABLE `laboratorio_determinacion_legislacion`
  ADD CONSTRAINT `FK_C7F6548E644ABBDE` FOREIGN KEY (`legislacion_id`) REFERENCES `laboratorio_legislacion` (`id`),
  ADD CONSTRAINT `FK_C7F6548EA9276E6C` FOREIGN KEY (`tipo_id`) REFERENCES `laboratorio_tipo_determinacion_legislacion` (`id`),
  ADD CONSTRAINT `FK_C7F6548EAA7041B7` FOREIGN KEY (`determinacion_id`) REFERENCES `laboratorio_determinacion` (`id`);

-- Creación de índices en la tabla 'laboratorio_historial_carga_resultados'
ALTER TABLE `laboratorio_historial_carga_resultados`
  ADD KEY `IDX_650FDF83DC9099C4` (`id_resultado_id`),
  ADD KEY `IDX_650FDF83AA7041B7` (`determinacion_id`),
  ADD KEY `IDX_650FDF83644ABBDE` (`legislacion_id`),
  ADD KEY `IDX_650FDF839B5F2C0B` (`legislacion_sin_contacto_id`),
  ADD KEY `IDX_650FDF8386B5E41E` (`legislacion_pasivo_id`),
  ADD KEY `IDX_650FDF83DB38439E` (`usuario_id`);

-- Creación de restricciones en la tabla 'laboratorio_historial_carga_resultados'
ALTER TABLE `laboratorio_historial_carga_resultados`
  ADD CONSTRAINT `FK_650FDF83644ABBDE` FOREIGN KEY (`legislacion_id`) REFERENCES `laboratorio_legislacion` (`id`),
  ADD CONSTRAINT `FK_650FDF8386B5E41E` FOREIGN KEY (`legislacion_pasivo_id`) REFERENCES `laboratorio_legislacion` (`id`),
  ADD CONSTRAINT `FK_650FDF839B5F2C0B` FOREIGN KEY (`legislacion_sin_contacto_id`) REFERENCES `laboratorio_legislacion` (`id`),
  ADD CONSTRAINT `FK_650FDF83AA7041B7` FOREIGN KEY (`determinacion_id`) REFERENCES `laboratorio_determinacion` (`id`),
  ADD CONSTRAINT `FK_650FDF83DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `FK_650FDF83DC9099C4` FOREIGN KEY (`id_resultado_id`) REFERENCES `laboratorio_carga_resultados` (`id`);

  -- Creación de referencias para la tabla 'laboratorio_muestra'
ALTER TABLE `laboratorio_muestra`
  ADD CONSTRAINT `FK_BFD757414854653A` FOREIGN KEY (`pedido_id`) REFERENCES `laboratorio_pedido` (`id`),
  ADD CONSTRAINT `FK_BFD7574133790B12` FOREIGN KEY (`usuario_supervisador_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `FK_BFD7574120533D01` FOREIGN KEY (`usuario_autorizador_id`) REFERENCES `usuarios` (`id`);

-- Creación de referencias para la tabla 'laboratorio_pedido'
ALTER TABLE `laboratorio_pedido`
  ADD CONSTRAINT `FK_573D9EF871B61351` FOREIGN KEY (`establecimiento_id`) REFERENCES `establecimiento` (`id`),
  ADD CONSTRAINT `FK_573D9EF8922C27` FOREIGN KEY (`usuario_eliminador_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `FK_573D9EF8961E0D4C` FOREIGN KEY (`estado_pedido_id`) REFERENCES `laboratorio_estado_pedido` (`id`),
  ADD CONSTRAINT `FK_573D9EF8AA3ADA74` FOREIGN KEY (`tipo_pedido_id`) REFERENCES `laboratorio_tipo_pedido` (`id`),
  ADD CONSTRAINT `FK_573D9EF8BDD13D7A` FOREIGN KEY (`prioridad_id`) REFERENCES `laboratorio_prioridad` (`id`),
  ADD CONSTRAINT `FK_573D9EF8CD589383` FOREIGN KEY (`usuario_anulador_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `FK_573D9EF8F4EAFA4C` FOREIGN KEY (`usuario_autorizado_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `FK_573D9EF8FD8A7328` FOREIGN KEY (`programa_id`) REFERENCES `laboratorio_programa` (`id`);


*/
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
