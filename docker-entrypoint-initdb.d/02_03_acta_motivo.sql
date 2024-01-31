--
-- Table structure for table `acta_motivo`
--

DROP TABLE IF EXISTS `acta_motivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acta_motivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motivo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `motivoCompleto` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CA5750019F93866` (`motivo`)
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acta_motivo`
--

LOCK TABLES `acta_motivo` WRITE;
/*!40000 ALTER TABLE `acta_motivo` DISABLE KEYS */;
INSERT INTO `acta_motivo` VALUES (1,'AN01F','Supera los límites de emisión de RNI establecidos en la normativa','F'),(2,'AV01D','No exhibe certificado de generador ni constancia de inicio de trámite de AVUS o no exhibe declaración jurada de no generador','D'),(3,'AV02D','No exhibe manifiesto de retiro de AVUS por transportista autorizado','D'),(4,'AV03D','Presenta certificado apócrifo o inicio de trámite apócrifo','D'),(5,'AV04D','Presenta certificado vencido','D'),(6,'AV05D','Realiza retiro con transportista no autorizado','D'),(7,'AV06F','Genera AVUS en exceso respecto a la declaración realizada','F'),(8,'AV07F','No cuenta con almacenamiento adecuado de AVUS (bidones)','F'),(9,'CA01D','No exhibe Certificado final de cierre de la Actividad','D'),(10,'CA02D','No exhibe certificado ni inicio de trámite','D'),(11,'CA03D','No exhibe transferencia a nombre de actual titular  o inicio de trámite','D'),(12,'CA04D','Presenta certificado apócrifo o inicio de trámite apócrifo','D'),(13,'CA05D','Presenta certificado vencido','D'),(14,'CA06F','El CAA no ajusta a la superficie y/o rubro desarrollado','F'),(15,'CA07F','La superficie real es mayor a la declarada para el certificado o inicio de trámite del mismo','F'),(16,'CA08F','No cumple con las condiciones de otorgamiento del CAA','F'),(17,'CE01D','Exhibe certificado de desratización previo a demolición apócrifo','D'),(18,'CE02F','Se dio inicio a la demolición sin el certificado de desratización previo','F'),(19,'CE03F','Falta Cartel de Obra','F'),(20,'CE04F','Falta de demarcación de senda peatonal en vereda','F'),(21,'CE05F','Falta de señalización de sentido de circulación vehicular','F'),(22,'EF01F','La rejilla perimetral descarga al cordón cuneta','F'),(23,'EF02F','La rejilla perimetral está deteriorada u obstruida','F'),(24,'EF03F','Baldes antiderrame con filtraciones','F'),(25,'EF04F','Falta de material absorbente','F'),(26,'EF05F','No posee cámara de toma de muestras y/o aforador a la salida de la cámara decantadora','F'),(27,'EF06F','Pérdidas en Sump Raiser','F'),(28,'EF07D','No exhibe autorización de vuelco AYSA ni carpeta técnica actualizada (DEC 555/2012)','D'),(29,'EF08D','No exhibe DDJJ de Efluentes Industriales Líquidos (DTO. 674/89 y 776/92)','D'),(30,'EF09D','No exhibe el certificado de destrucción de barros industriales','D'),(31,'EF10D','No exhibe factibilidad de vuelco AYSA, constancia de  no vuelco, o inicio de trámite','D'),(32,'EF11D','No exhibe manifiesto de retiro de barros industriales en el último año','D'),(33,'EF12D','Realiza retiros de barros o líquidos con transportista no habilitado','D'),(34,'EF13F','Cámara de toma de muestras inaccesible','F'),(35,'EF14F','No cuenta con cámara de toma de muestras y/o medidora de caudal','F'),(36,'EF15F','No existe planta de tratamiento siendo necesaria por el proceso','F'),(37,'EF16F','No tiene acopio reglamentario  de barros industriales','F'),(38,'EF17F','Planta de tratamiento no funciona adecuadamente.','F'),(39,'EF18F','La cámara decantadora está tapada o funciona en forma deficiente','F'),(40,'EF19F','Acopio de polvo de ladrillos???','F'),(41,'EF20F','Conexión clandestina al sistema pluvial','F'),(42,'EF21F','Vuelco al sistema pluvial de efluentes líquidos','F'),(43,'EG01D','No exhibe certificado de inscripción en REF ni inicio de trámite','D'),(44,'EG02D','Presenta certificado  vencido de inscripción en REF','D'),(45,'EG03D','Presenta certificado apócrifo o nicio de trámite apócrifo de REF','D'),(46,'EG04F','Las emisiones de humo superan los valores límite','F'),(47,'EG05F','Posee conductos que emiten efluentes gaseosos a la atmósfera no declarados','F'),(48,'EG06F','Posee fuentes generadoras de emisiones gaseosas no declaradas','F'),(49,'EG07F','Trascendencia de olores a fincas linderas de grado de intensidad mayor o igual a 3 y/o grado de irritabilidad mayor o igual a 2','F'),(50,'HA01D','No exhibe habilitación o constancia de inicio de trámite','D'),(51,'HA02D','No exhibe libro de registro de inspecciones','D'),(52,'HA03D','No exhibe plan y planos de evacuación','D'),(53,'HA04D','No exhibe plano de condiciones contra incendio','D'),(54,'HA05D','No exhibe plano de instalaciones de inflamables','D'),(55,'HA06D','No exhibe plano de instalaciones sanitarias','D'),(56,'HA07D','No exhibe plano de permiso de uso','D'),(57,'HA08D','No exhibe plano electromecánica','D'),(58,'HA09D','No exhibe solicitud de ampliación de superficie o inicio de trámite','D'),(59,'HA10D','No exhibe transferencia a nombre de actual titular  o inicio de trámite','D'),(60,'HA11F','Desvirtuación de rubro','F'),(61,'HA12F','Los planos exhibidos no se ajustan a la realidad','F'),(62,'HA13F','Venta de bebidas alcohólicas','F'),(63,'HA14D','No exhibe Inscripcion en el Registro de Actividades Industriales','D'),(64,'HA15F','Poseer conexión no autorizada con local lindero','F'),(65,'HA16F','Uso indebido de sector','F'),(66,'HA17F','Violacion de Clausura','F'),(67,'HA18D','No exhibe documentacion','D'),(68,'HI01F','Acopio de basura en condiciones inadecuadas','F'),(69,'HI02F','Falta de higiene','F'),(70,'HI03D','Exhibe certificado de limpieza de tanques de agua apócrifo','D'),(71,'HI04D','No exhibe certificado de limpieza de tanques de agua','D'),(72,'HI05F','El estado del tanque de agua es deficiente','F'),(73,'HI06D','Exhibe certificado de desinfección y desinfectación apócrifo','D'),(74,'HI07D','No exhibe certificado de desinfección y desinfectación','D'),(75,'HI08D','No exhibe certificado de desinsectación/desratización','D'),(76,'LA01D','Constancia de afiliación del personal a la ART','D'),(77,'LA02D','Control médico anual relativo al tipo de solvente utilizado (percloroetileno)','D'),(78,'LA03D','Controles médicos exigidos por la legislación laboral','D'),(79,'LA04D','No exhibe boletas de compra de solvente','D'),(80,'LA05D','No exhibe certificado de concentración de solvente en ambiente laboral (anual)','D'),(81,'LA06D','No exhibe Ficha de mantenimiento preventivo anual','D'),(82,'LA07D','No exhibe hojas de seguridad de solvente','D'),(83,'LA08D','No exhibe inscripcion en el Registro de tintorerías habilitadas','D'),(84,'LA09D','No exhibe plan de contigencia aprobado por DGET','D'),(85,'LA10F','Almacena solvente halogenado en cantidad superior a 65 kg fuera de las máquinas','F'),(86,'LA11F','La concentración de solvente en ambiente laboral supera las 25 ppm','F'),(87,'LA12F','No posee Responsable matriculado de Hig y Seg en el Trabajo','F'),(88,'LA13F','No posee ventilación/extracción a los 4 vientos','F'),(89,'OB01F','Obstrucción de procedimiento','F'),(90,'PA01D','No cuenta con el certificado de tratamiento y disposición final de residuos patogénicos','D'),(91,'PA02D','No cuenta con manifiesto de retiro en el último año','D'),(92,'PA03D','No exhibe certificado ni inicio de trámite','D'),(93,'PA04D','Presenta certificado apócrifo o inicio de trámite apócrifo','D'),(94,'PA05D','Presenta certificado vencido','D'),(95,'PA06D','Realiza retiros con transportista no habilitado','D'),(96,'PA07F','No tiene acopio reglamentario  de residuos patogénicos','F'),(97,'PE01D','No exhibe certificado ni inicio de trámite','D'),(98,'PE02D','No exhibe certificado ni inicio de trámite como Generador Eventual de Residuos Peligrosos','D'),(99,'PE03D','No exhibe el certificado de tratamiento y disposición final de residuos peligrosos','D'),(100,'PE04D','No exhibe manifiesto de retiro en el último año','D'),(101,'PE05D','Presenta certificado apócrifo o inicio de trámite apócrifo','D'),(102,'PE06D','Presenta certificado vencido','D'),(103,'PE07D','Realiza retiros con transportista no habilitado','D'),(104,'PE08F','Genera corrientes no declaradas','F'),(105,'PE09F','No cuenta con area de acopio reglamentaria de sustancias (insumos, productos intermedios y/o producto terminado) inflamables /peligrosas','F'),(106,'PE10F','No cuenta con bandeja antiderrame y/o batea de contención','F'),(107,'PE11F','No tiene acopio reglamentario  de residuos peligrosos','F'),(108,'RH01D','No cuenta con análisis de barros previo a su retiro','D'),(109,'RH02D','No exhibe análisis bacteriológicos seriados del ambiente','D'),(110,'RH03D','No exhibe constancia de entrega de elementos de protección personal (patogénicos 6 meses)','D'),(111,'RH04D','no exhibe habilitación y/o constancia de mantenimiento de las calderas','D'),(112,'RH05D','No exhibe inicio de trámite ni constancia de inscripción en el Registro de Lavaderos de ropa hospitalaria','D'),(113,'RH06D','No exhibe la documentación de los vehículos de transporte de residuos patogénicos o la misma es incompleta','D'),(114,'RH07F','Los operarios traspasan del sector limpio al sucio y viceversa sin cumplir con la reglamentación','F'),(115,'RH08F','Los vehículos no poseen la identificación del tipo de ropa que transportan','F'),(116,'RH09F','No cuenta con depósitos diferenciados para ropa limpia y sucia','F'),(117,'RH10F','No efectúa el traslado en carros desinfectables con cierre hermético','F'),(118,'RH11F','No posee barrera sanitaria entre sector limpio y sucio','F'),(119,'RH12F','No posee entrada doble para ropa sucia y limpia','F'),(120,'RH13F','No posee local para limpieza y lavado de los vehículos','F'),(121,'RH14F','No posee programa anual de capacitación de personal','F'),(122,'RH15F','No posee programa anual de vacunación','F'),(123,'RH16F','No se tratan las prendas con radioactividad de acuerdo a las disposiciones de la CONADEA','F'),(124,'RH17F','No utiliza bolsas diferenciadas por color (rotuladas ropa limpia / ropa sucia)','F'),(125,'RH18F','No utiliza bolsas solubles al agua para material infectocontagioso, cultivos de sangre, etc)','F'),(126,'RU01D','No exhibe inscripcion en el RAC','D'),(127,'RU02D','No exhibe permiso de obra','D'),(128,'RU03F','Falta de Cartel Acustico','F'),(129,'RU04F','Incumple condiciones acústicas fijadas por la DGET','F'),(130,'RU05F','Posee bocina antirreglamentaria','F'),(131,'RU06F','Supera los Limites Maximos Permitidos en ambiente exterior','F'),(132,'RU07F','Supera los Limites Maximos Permitidos en ambiente interior','F'),(133,'SC01D','No exhibe autorizacion de DGET para retiro de SASH','D'),(134,'SC02D','No exhibe autorizacion de DGET para retiro de tierra y/o agua de napas','D'),(135,'SC03D','No exhibe Conforme de Recomposicion Ambiental (CRA)','D'),(136,'SC04D','No exhibe informe trimestral de avance de Remediacion','D'),(137,'SC05D','No exhibe monitoreos adicionales exigidos por DGET','D'),(138,'SC06D','No exhibe Plan de Recomposicion Ambiental (PRA) aprobado ante DGET','D'),(139,'SC07F','Excede volumen autorizado por DGET de retiro de tierra y/o agua de napa','F'),(140,'SC08F','Derrame de combustible en playa','F'),(141,'SC09F','Tanque aéreo sin batea de contención','F'),(142,'SC10D','No exhibe Seguro de Caucion y/o Ambiental','D'),(143,'SC11D','Exhibe auditoría de seguridad apócrifa de instalaciones aéreas','D'),(144,'SC12D','No exhibe auditoría de seguridad vigente de instalaciones aéreas','D'),(145,'SC13D','No exhibe inscripcion en el Registro de bocas de expendio de combustible','D'),(146,'SC14D','No exhibe ninguna auditoría de seguridad de instalaciones aéreas','D'),(147,'SC15F','Falta o deficiencia en funcionamiento de sensores de gases con señal acústica y óptica','F'),(148,'SC16F','No funciona o funciona inadecuadamente el Panel de Control de Sensor de Gases','F'),(149,'SC17D','Exhibe  certificado de auditoría de superficie apócrifa','D'),(150,'SC18D','Exhibe auditoría de hermeticidad apócrifa del SASH','D'),(151,'SC19D','No exhibe auditoría de hermeticidad vigente del SASH','D'),(152,'SC20D','No exhibe certificado de auditoría de superficie vigente','D'),(153,'SC21D','No exhibe ninguna  certificado de auditoría de superficie','D'),(154,'SC22D','No exhibe ninguna auditoría de hermeticidad del SASH','D'),(155,'SC23D','No exhibe seguro por daño ambiental de incidencia colectiva','D'),(156,'SC24D','No exhibe estudio de suelo','D'),(157,'SC25D','No exhibe inscripción en Sitios Contaminados','D'),(158,'SC26D','nueva actividad u obra sin el Conforme de Recomposición Ambiental','D'),(159,'SC27F','remediación sin autorizacion previa de la APRA_DGET o las tareas exceden lo autorizado','F'),(160,'SC28F','Retiro de tanques sash sin autorización de APRA-DGET','F'),(161,'SE01F','Ejecución de obras sin las medidas de seguridad necesarias','F'),(162,'SE02F','Acceso vehicular por ochava','F'),(163,'SE03F','Deficiencias en las instalaciones a prueba de explosion','F'),(164,'SE04F','No cuenta con instalaciones a prueba de explosion','F'),(165,'SE05F','Obstrucción de los matafuegos y/o hidrantes','F'),(166,'SE06F','Acople para descarga no hermético','F'),(167,'SE07F','Bocas de descarga remota sin identificación de producto/capacidad y número de tanque','F'),(168,'SE08F','Descarga insegura de camión cisterna','F'),(169,'SE09F','Existencia de mangueras y/o picos en mal estado','F'),(170,'SE10F','Existencia de sótanos sin ventilación reglamentaria y/o con actividad no permitida','F'),(171,'SE11F','Falta de linterna antiexplosiva','F'),(172,'SE12F','Falta de protección peatonal','F'),(173,'SE13F','No posee los venteos de acuerdo a la reglamentacion','F'),(174,'SE14D','No exhibe protocolo de puesta a tierra vigente','D'),(175,'SE15F','No cumple con las observaciones de la auditoría','F'),(176,'SE16F','Deficiencias en las instalaciones \"palpables\" en la verificación ocular','F'),(177,'SE17F','No cuenta con los elementos de lucha contra incendio adecuados','F'),(178,'SE18F','Descarga remota fuera del perímetro del predio','F'),(179,'SE19F','Tenencia de garrafas????','F'),(180,'SE20D','No exhibe seguro de responsabilidad civil vigente','D'),(181,'SE21D','No exhibe prueba hidráulica de verificación de espesores vigente','D'),(182,'SE22F','Existen faltas de seguridad edilicias de relevancia','F'),(183,'SE23D','No exhibe Libreta Sanitaria','D'),(185,'FM01F','Humo','F'),(186,'FM02F','Bocina de Aire','F'),(187,'FM03F','Dominio Tapado','F'),(188,'FM04F','Estacionamiento Prohibido','F'),(189,'FM05F','Evadio Control','F'),(190,'FM06F','Obstrucción de procedimiento','F'),(191,'FM07F','Ruido','F'),(192,'FM08F','Sin Dominio','F'),(193,'FM09F','Sin Silenciador','F'),(194,'FM10F','Verter Liquidos','F'),(195,'RU08F','Parlanes en la Via Publica','F'),(197,'LI01D','No exhibe inscripción en el registro de lavaderos industriales , lavanderia, transporte de ropa de trabajo','D'),(199,'LI02D','No exhibe oblea habilitante para lavanderia, generador y transportista de ropa de trabajo conforme anexo III','D'),(200,'LI03D','No exhibe declaración jurada de generador y transportista de ropa de trabajo conforme anexo IV','D'),(201,'LI04D','No exhibe declaración jurada de cquien realiza el transporte anexo V','D'),(202,'LI05D','No exhibe inscripción como generador de lavaderos de ropa de trabajo','D'),(203,'SC29D','No exhibe certificado de cegado y/o erradicación de SASH','D'),(205,'RU09D','No exhibe permiso de música y/o canto','D'),(206,'PA08D','No exhibe certificado de no generador','D'),(207,'EF22F','No posee rejilla perimetral','F'),(208,'CE06F','Transmision de calor a fincas linderas','F'),(209,'EG08F','No cumple con las caracteristicas constructivas en el marco del REF','F'),(210,'PE12D','No exhibe Certificado de Gestión de Residuos Peligrosos.','D'),(211,'PE13D','Presenta Certificado de Gestión de Residuos Peligrosos vencido.','D'),(212,'BO01F','No cumple con la reso. 341-APRA-2016 de uso de bolsas y sobres biodegradables','F'),(214,'BO02F','No exhibe carteleria reglamentaria segun resol. 341-APRA-2016','F'),(216,'HI09D','No cumple con el anexo I de la resolución 310-APRA-2015','D'),(217,'SC30F','Pozo de monitoreo obstruido','F'),(218,'SC31D ','No exhibe inscripcion en el Registro de tanques SASH ','D'),(219,'RS01F ','No acredita Plan de Gestion de Residuos Solidos Urbanos ','F'),(220,'RS02D','No acredita inscripcion como Generador en el Registro de Residuos Solidos Urbanos','D'),(221,'RS03F','No cuenta con acopio reglamentario de Residuos Solidos Urbanos','F'),(222,'RS04D','No acredita manifiestos de retiro de Residuos Solidos Urbanos','D'),(223,'NA01D','No cuenta con certificado de aprobación de los equipos de tratamiento de agua','D'),(224,'NA02D','No cuenta con los libros reglamentarios','D'),(225,'NA03D','No cuenta con calidad de agua reglamentaria segun Decreto 150/15 Res.310-Apra-15. DI 2017-329-DGCONTA','D'),(226,'FA01F','Incumple Ley 451/2000 por venta y/o tenencia de animales sin autorizacion','F'),(227,'BO03F','No cumple con la reso. 29-APRA-2018 de uso de bolsas plasticas','F'),(228,'PE14D','No acredita Protocolo de Analisis de PCB','D'),(229,'RE01F','Disposición-576-DGEVA-2017','F'),(230,'EF23F','Derrame de Hidrocarburo a via pública','F'),(231,'VR01F','Vibraciones','F'),(232,'SO01F','No cumple con resolución 816-MAYEPGC-2019 exhibición y entrega de sorbetes','F'),(233,'PGP01','Plan de gestion de pilas en desuso resolucion 54/APRA/19','D'),(234,'SE24','No contar con cartel de señalizacion segun Resolución 202/95/Min. de Salud y Accion Social de la Nación ','F'),(235,'FM11F','Arrojar basura','F'),(236,'FM12F','Cruzar con semaforo en rojo','F'),(237,'FA02F','Incumple ordenanza 41831/87 art 22 por funcionar como criadero de animales','F'),(238,'FA03F','Incumple Ley 14346 por maltrato animal','F'),(239,'FA04F','Infracción a Ley 22421 por tenencia de animales silvestres protegidos','F'),(240,'DE01D','Incumple Decreto 316/2020','D'),(241,'DE02D','Incumple DECAD-2020-1738- APN-JGM','D'),(242,'FF01F','Falta de funcionamiento en el detector de líquidos','F'),(243,'FA05F','Incumple Ley 4078Por Inscripcion em el Registroo de Propietarioa de Perros Potenciales Peligrosos','F');
/*!40000 ALTER TABLE `acta_motivo` ENABLE KEYS */;
UNLOCK TABLES;