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
-- Table structure for table `oferta_postulante`
--

DROP TABLE IF EXISTS `oferta_postulante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oferta_postulante` (
  `codigo_postulante` int(11) NOT NULL,
  `Tipo_Documento` int(11) NOT NULL,
  `documento_indentidad` char(10) NOT NULL,
  `Fecha_Actual` date NOT NULL,
  `observaciones` varchar(50) DEFAULT NULL,
  `Apellido_Paterno` varchar(40) DEFAULT NULL,
  `Apellido_Materno` varchar(40) DEFAULT NULL,
  `Nombres` varchar(60) NOT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Departamento` char(2) DEFAULT NULL,
  `Provincia` char(4) DEFAULT NULL,
  `Distrito` char(6) DEFAULT NULL,
  `Telefono_Personal` varchar(9) DEFAULT NULL,
  `Telefono1` varchar(9) DEFAULT NULL,
  `Telefono_tipo` varchar(10) DEFAULT NULL,
  `Telefono_Contacto` varchar(30) DEFAULT NULL,
  `Pais` varchar(8) DEFAULT NULL,
  `Departamento_nacimiento` char(2) DEFAULT NULL,
  `Provincia_nacimiento` char(4) DEFAULT NULL,
  `distrito_nacimiento` char(6) DEFAULT NULL,
  `Fecha_nacimiento` date DEFAULT NULL,
  `edad` date DEFAULT NULL,
  `Estado_Civil` int(11) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Autoridad_Hogar` char(2) NOT NULL,
  `Conforman_Hogar` smallint(6) DEFAULT NULL,
  `Aportan_Hogar` smallint(6) DEFAULT NULL,
  `Publicidad` char(2) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `Pregunta1` char(2) NOT NULL,
  `Respuesta1` varchar(50) NOT NULL,
  `Pregunta2` varchar(50) NOT NULL,
  `Estudios_formales` int(11) NOT NULL,
  `completa` varchar(10) DEFAULT NULL,
  `numero_año_estudio` smallint(6) DEFAULT NULL,
  `grado` varchar(9) DEFAULT NULL,
  `licencia_conducir` char(2) DEFAULT NULL,
  `categoria_Licencia` varchar(5) DEFAULT NULL,
  `otros` varchar(100) DEFAULT NULL,
  `zonas` varchar(50) DEFAULT NULL,
  `modalidad` int(11) DEFAULT NULL,
  `horario` int(11) DEFAULT NULL,
  `pretencion_salarial` decimal(10,2) DEFAULT NULL,
  `disposicion_servicios` char(2) DEFAULT NULL,
  `actual_Trabajo` int(11) DEFAULT NULL,
  `ocupacion_actual` varchar(50) DEFAULT NULL,
  `horas_Semana` int(11) DEFAULT NULL,
  `ingreso` decimal(10,2) DEFAULT NULL,
  `tipo_Postulante` int(11) DEFAULT NULL,
  `observaciones2` varchar(100) DEFAULT NULL,
  `persona_Consultora` char(10) NOT NULL,
  PRIMARY KEY (`codigo_postulante`),
  KEY `FK_OfertaPostulante_TipoDocumento` (`Tipo_Documento`),
  KEY `FK_OfertaPostulante_departamento` (`Departamento`),
  KEY `fk_ofertaPostulante_Provincia` (`Provincia`),
  KEY `fk_ofertaPostulante_Distrito` (`Distrito`),
  KEY `FK_OfertaPostulante_departamento_nac` (`Departamento_nacimiento`),
  KEY `fk_ofertaPostulante_Provincia_nac` (`Provincia_nacimiento`),
  KEY `fk_ofertaPostulante_Distrito_nac` (`distrito_nacimiento`),
  KEY `fk_OfertaPostulante_actualEmpleo` (`actual_Trabajo`),
  KEY `fk_OfertaPostulante_estadoCivil` (`Estado_Civil`),
  KEY `fk_OfertaPostulante_Publicidad` (`Publicidad`),
  KEY `fk_OfertaPostulante_EstudiosFormales` (`Estudios_formales`),
  KEY `fk_OfertaPostulante_HorarioTrabajo` (`horario`),
  KEY `fk_OfertaPostulante_HorarioTrabajoActual` (`horas_Semana`),
  CONSTRAINT `FK_OfertaPostulante_TipoDocumento` FOREIGN KEY (`Tipo_Documento`) REFERENCES `tipo_documento` (`codigo_TipoDocumento`),
  CONSTRAINT `FK_OfertaPostulante_departamento` FOREIGN KEY (`Departamento`) REFERENCES `departamento` (`codigo_Departamento`),
  CONSTRAINT `FK_OfertaPostulante_departamento_nac` FOREIGN KEY (`Departamento_nacimiento`) REFERENCES `departamento` (`codigo_Departamento`),
  CONSTRAINT `fk_OfertaPostulante_EstudiosFormales` FOREIGN KEY (`Estudios_formales`) REFERENCES `estudios_formales` (`codigo_EstudiosFormales`),
  CONSTRAINT `fk_OfertaPostulante_HorarioTrabajo` FOREIGN KEY (`horario`) REFERENCES `horario_trabajo` (`codigo_HorarioTrabajo`),
  CONSTRAINT `fk_OfertaPostulante_HorarioTrabajoActual` FOREIGN KEY (`horas_Semana`) REFERENCES `horario_trabajo` (`codigo_HorarioTrabajo`),
  CONSTRAINT `fk_OfertaPostulante_Publicidad` FOREIGN KEY (`Publicidad`) REFERENCES `publicidad` (`Codigo_Publicidad`),
  CONSTRAINT `fk_OfertaPostulante_actualEmpleo` FOREIGN KEY (`actual_Trabajo`) REFERENCES `actual_empleo` (`codigo_ActualEmpleo`),
  CONSTRAINT `fk_OfertaPostulante_estadoCivil` FOREIGN KEY (`Estado_Civil`) REFERENCES `estado_civil` (`Codigo_EstadoCivil`),
  CONSTRAINT `fk_ofertaPostulante_Distrito` FOREIGN KEY (`Distrito`) REFERENCES `distrito` (`Codigo_Distrito`),
  CONSTRAINT `fk_ofertaPostulante_Distrito_nac` FOREIGN KEY (`distrito_nacimiento`) REFERENCES `distrito` (`Codigo_Distrito`),
  CONSTRAINT `fk_ofertaPostulante_Provincia` FOREIGN KEY (`Provincia`) REFERENCES `provincia` (`codigo_provincia`),
  CONSTRAINT `fk_ofertaPostulante_Provincia_nac` FOREIGN KEY (`Provincia_nacimiento`) REFERENCES `provincia` (`codigo_provincia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oferta_postulante`
--

LOCK TABLES `oferta_postulante` WRITE;
/*!40000 ALTER TABLE `oferta_postulante` DISABLE KEYS */;
/*!40000 ALTER TABLE `oferta_postulante` ENABLE KEYS */;
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
