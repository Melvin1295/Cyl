-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_cyl
-- ------------------------------------------------------
-- Server version	5.7.16-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `demanda_puestos`
--

DROP TABLE IF EXISTS `demanda_puestos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `demanda_puestos` (
  `codigo_puestos` int(11) NOT NULL,
  `fecha_actual` date NOT NULL,
  `ruc` char(11) DEFAULT NULL,
  `Denominacion` char(6) DEFAULT NULL,
  `Numero_Vancantes_Requeridos` int(11) DEFAULT NULL,
  `Numero_Candidato_Enviar` int(11) DEFAULT NULL,
  `Principales_Tareas` varchar(100) DEFAULT NULL,
  `Actitudes_Personales` varchar(100) DEFAULT NULL,
  `Estudios_Formales` int(11) DEFAULT NULL,
  `licencia_Conducir` char(2) DEFAULT NULL,
  `Categoria_licencia` varchar(10) DEFAULT NULL,
  `Otras_Licencias` varchar(100) DEFAULT NULL,
  `Años_Experiencia` smallint(6) DEFAULT NULL,
  `meses_Experiencia` smallint(6) DEFAULT NULL,
  `Edad_minima` smallint(6) DEFAULT NULL,
  `Edad_maxima` smallint(6) DEFAULT NULL,
  `Estado_civil` int(11) DEFAULT NULL,
  `Sexo` varchar(30) DEFAULT NULL,
  `Zona_ubicacion` int(11) DEFAULT NULL,
  `puesto_cargo` char(2) DEFAULT NULL,
  `Cantidad_cargo` smallint(6) DEFAULT NULL,
  `forma_trabajo` int(11) DEFAULT NULL,
  `Horario_trabajo` varchar(30) DEFAULT NULL,
  `Dias_Trabajo` varchar(50) DEFAULT NULL,
  `Horarios` varchar(50) DEFAULT NULL,
  `Area_Del_Trabajo` varchar(50) DEFAULT NULL,
  `Beneficios` varchar(100) DEFAULT NULL,
  `Lugar_Trabajo_Departamento` char(2) DEFAULT NULL,
  `Lugar_Trabajo_Provincia` char(4) DEFAULT NULL,
  `Lugar_Trabajo_Distrito` char(6) DEFAULT NULL,
  `Contrato_Discapacitados` char(2) DEFAULT NULL,
  `Renumeracion` decimal(8,2) DEFAULT NULL,
  `Tipo_forma_pago` int(11) DEFAULT NULL,
  `Informacion_ocupacional` int(11) DEFAULT NULL,
  `Observaciones` varchar(100) DEFAULT NULL,
  `Tipo_Trabajador` varchar(30) DEFAULT NULL,
  `Apellidos_nombres` varchar(100) DEFAULT NULL,
  `Puesto_ocupa` varchar(50) DEFAULT NULL,
  `Telefono` varchar(30) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Fecha_limite` date DEFAULT NULL,
  `Fecha_entrevista` date DEFAULT NULL,
  `Fecha_inicio_laboral` date DEFAULT NULL,
  `Consultor` int(11) DEFAULT NULL,
  `Situacion_Actual_Puesto` varchar(30) NOT NULL,
  PRIMARY KEY (`codigo_puestos`),
  KEY `fk_PUESTOS_EMPRESA` (`ruc`),
  KEY `fk_PUESTOS_RUBRO` (`Denominacion`),
  KEY `fk_PUESTOS_DEPARTAMENTO` (`Lugar_Trabajo_Departamento`),
  KEY `fk_PUESTOS_PROVINCIA` (`Lugar_Trabajo_Provincia`),
  KEY `fk_PUESTOS_DISTRITO` (`Lugar_Trabajo_Distrito`),
  KEY `fk_PUESTOS_ESTADOCIVIL` (`Estado_civil`),
  KEY `fk_PUESTOS_ZONARESIDENCIA` (`Zona_ubicacion`),
  KEY `fk_PUESTOS_FORMA_PAGO` (`Tipo_forma_pago`),
  KEY `fk_PUESTOS_INFO_OCUPACIONAL` (`Informacion_ocupacional`),
  KEY `fk_PUESTOS_ESTUDIOSFORMALES` (`Estudios_Formales`),
  KEY `fk_PUESTOS_FORMATRABAJO` (`forma_trabajo`),
  CONSTRAINT `fk_PUESTOS_DEPARTAMENTO` FOREIGN KEY (`Lugar_Trabajo_Departamento`) REFERENCES `departamento` (`codigo_Departamento`),
  CONSTRAINT `fk_PUESTOS_DISTRITO` FOREIGN KEY (`Lugar_Trabajo_Distrito`) REFERENCES `distrito` (`Codigo_Distrito`),
  CONSTRAINT `fk_PUESTOS_EMPRESA` FOREIGN KEY (`ruc`) REFERENCES `demanda_empresas` (`RUC`),
  CONSTRAINT `fk_PUESTOS_ESTADOCIVIL` FOREIGN KEY (`Estado_civil`) REFERENCES `estado_civil` (`Codigo_EstadoCivil`),
  CONSTRAINT `fk_PUESTOS_ESTUDIOSFORMALES` FOREIGN KEY (`Estudios_Formales`) REFERENCES `estudios_formales` (`codigo_EstudiosFormales`),
  CONSTRAINT `fk_PUESTOS_FORMATRABAJO` FOREIGN KEY (`forma_trabajo`) REFERENCES `forma_trabajo` (`codigo_FormaTrabajo`),
  CONSTRAINT `fk_PUESTOS_FORMA_PAGO` FOREIGN KEY (`Tipo_forma_pago`) REFERENCES `forma_pago` (`codigo_FormaPago`),
  CONSTRAINT `fk_PUESTOS_INFO_OCUPACIONAL` FOREIGN KEY (`Informacion_ocupacional`) REFERENCES `informacion_ocupacional` (`codigo_InfoOcupacional`),
  CONSTRAINT `fk_PUESTOS_PROVINCIA` FOREIGN KEY (`Lugar_Trabajo_Provincia`) REFERENCES `provincia` (`codigo_provincia`),
  CONSTRAINT `fk_PUESTOS_RUBRO` FOREIGN KEY (`Denominacion`) REFERENCES `denominacion` (`Codigo_Denominacion`),
  CONSTRAINT `fk_PUESTOS_ZONARESIDENCIA` FOREIGN KEY (`Zona_ubicacion`) REFERENCES `zona_residencia` (`Codigo_ZonaResidencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demanda_puestos`
--

LOCK TABLES `demanda_puestos` WRITE;
/*!40000 ALTER TABLE `demanda_puestos` DISABLE KEYS */;
/*!40000 ALTER TABLE `demanda_puestos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-07 10:53:58
