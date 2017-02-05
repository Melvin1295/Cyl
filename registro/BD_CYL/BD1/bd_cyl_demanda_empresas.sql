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
-- Table structure for table `demanda_empresas`
--

DROP TABLE IF EXISTS `demanda_empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `demanda_empresas` (
  `RUC` char(11) NOT NULL,
  `Nombre` varchar(150) DEFAULT NULL,
  `Direccion` varchar(250) DEFAULT NULL,
  `Departamento` char(2) DEFAULT NULL,
  `provincia` char(4) DEFAULT NULL,
  `Distrito` char(6) DEFAULT NULL,
  `Telefono1` varchar(20) DEFAULT NULL,
  `Telefono2` varchar(20) DEFAULT NULL,
  `Telefono_Personal` varchar(20) DEFAULT NULL,
  `Correo_Electronico` varchar(100) DEFAULT NULL,
  `LOGO` varchar(200) DEFAULT NULL,
  `Persona_Contactar` varchar(100) DEFAULT NULL,
  `Cargo_Persona` varchar(100) DEFAULT NULL,
  `Rubro` char(5) DEFAULT NULL,
  `Tipo_Empresa` char(2) DEFAULT NULL,
  `Numero_Personal` int(11) DEFAULT NULL,
  `Existencia_cyl` char(2) DEFAULT NULL,
  `Motivo` varchar(30) DEFAULT NULL,
  `Nombre_Consultor` varchar(100) NOT NULL,
  PRIMARY KEY (`RUC`),
  KEY `fk_empresa_rubro` (`Rubro`),
  KEY `fk_empresa_departamento` (`Departamento`),
  KEY `fk_empresa_provincia` (`provincia`),
  KEY `fk_empresa_distrito` (`Distrito`),
  KEY `fk_empresa_tipo_Empresa` (`Tipo_Empresa`),
  KEY `fk_empresa_publicidad` (`Existencia_cyl`),
  CONSTRAINT `fk_empresa_departamento` FOREIGN KEY (`Departamento`) REFERENCES `departamento` (`codigo_Departamento`),
  CONSTRAINT `fk_empresa_distrito` FOREIGN KEY (`Distrito`) REFERENCES `distrito` (`Codigo_Distrito`),
  CONSTRAINT `fk_empresa_provincia` FOREIGN KEY (`provincia`) REFERENCES `provincia` (`codigo_provincia`),
  CONSTRAINT `fk_empresa_publicidad` FOREIGN KEY (`Existencia_cyl`) REFERENCES `publicidad` (`Codigo_Publicidad`),
  CONSTRAINT `fk_empresa_rubro` FOREIGN KEY (`Rubro`) REFERENCES `rubro` (`Codigo_rubro`),
  CONSTRAINT `fk_empresa_tipo_Empresa` FOREIGN KEY (`Tipo_Empresa`) REFERENCES `tipo_empresa` (`Codigo_tipoEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demanda_empresas`
--

LOCK TABLES `demanda_empresas` WRITE;
/*!40000 ALTER TABLE `demanda_empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `demanda_empresas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-07 10:54:03
