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
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `Codigo_Personal` char(10) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono1` varchar(9) DEFAULT NULL,
  `Telefono2` varchar(9) DEFAULT NULL,
  `Dni` char(8) NOT NULL,
  `Hora_Ingreso` time NOT NULL,
  `Hora_Salida` time NOT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Edad` smallint(6) NOT NULL,
  `LugarNacimiento_Departamento` char(2) NOT NULL,
  `LugarNacimiento_Provincia` char(4) NOT NULL,
  `LugarNacimiento_Distrito` char(6) NOT NULL,
  `Estado_Civil` varchar(20) NOT NULL,
  `Correo_Electronico` varchar(50) DEFAULT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Foto` varchar(200) DEFAULT NULL,
  `CONTRASEÑA` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Codigo_Personal`),
  KEY `fk_personal_departamento` (`LugarNacimiento_Departamento`),
  KEY `fk_personal_provincia` (`LugarNacimiento_Provincia`),
  KEY `fk_personal_distrito` (`LugarNacimiento_Distrito`),
  CONSTRAINT `fk_personal_departamento` FOREIGN KEY (`LugarNacimiento_Departamento`) REFERENCES `departamento` (`codigo_Departamento`),
  CONSTRAINT `fk_personal_distrito` FOREIGN KEY (`LugarNacimiento_Distrito`) REFERENCES `distrito` (`Codigo_Distrito`),
  CONSTRAINT `fk_personal_provincia` FOREIGN KEY (`LugarNacimiento_Provincia`) REFERENCES `provincia` (`codigo_provincia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-07 10:54:04
