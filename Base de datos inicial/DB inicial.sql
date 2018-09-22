CREATE DATABASE  IF NOT EXISTS `biblioteca` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `biblioteca`;
-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: localhost    Database: biblioteca
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `autor` (
  `id_Autor` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`id_Autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autor`
--

LOCK TABLES `autor` WRITE;
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
INSERT INTO `autor` VALUES (1,'James','Stewart','Ciencias Basicas'),(2,'Rafael','Ferre Masip','Ingenieria'),(3,'Gustavo ','Loaiza Chalarca','Ciencias Basicas'),(4,'Harvey M','Deitel','Ingenieria'),(5,'Francis','Weston','Fisica');
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `busqueda`
--

DROP TABLE IF EXISTS `busqueda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `busqueda` (
  `idBusqueda` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `editorial` varchar(45) DEFAULT NULL,
  `Material_id_material` varchar(45) NOT NULL,
  `Autor_id_Autor` int(11) NOT NULL,
  PRIMARY KEY (`idBusqueda`,`Material_id_material`,`Autor_id_Autor`),
  KEY `fk_Busqueda_Material_idx` (`Material_id_material`),
  KEY `fk_Busqueda_Autor1_idx` (`Autor_id_Autor`),
  CONSTRAINT `fk_Busqueda_Autor1` FOREIGN KEY (`Autor_id_Autor`) REFERENCES `autor` (`id_autor`),
  CONSTRAINT `fk_Busqueda_Material` FOREIGN KEY (`Material_id_material`) REFERENCES `material` (`id_material`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `busqueda`
--

LOCK TABLES `busqueda` WRITE;
/*!40000 ALTER TABLE `busqueda` DISABLE KEYS */;
/*!40000 ALTER TABLE `busqueda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estante`
--

DROP TABLE IF EXISTS `estante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `estante` (
  `idEstante` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `Ubicacion_idUbicacion` int(11) NOT NULL,
  PRIMARY KEY (`idEstante`,`Ubicacion_idUbicacion`),
  KEY `fk_Estante_Ubicacion1_idx` (`Ubicacion_idUbicacion`),
  CONSTRAINT `fk_Estante_Ubicacion1` FOREIGN KEY (`Ubicacion_idUbicacion`) REFERENCES `ubicacion` (`idubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estante`
--

LOCK TABLES `estante` WRITE;
/*!40000 ALTER TABLE `estante` DISABLE KEYS */;
INSERT INTO `estante` VALUES (1,'Ciencias Basicas',2),(2,'Ciencias Basicas',2),(3,'Fisica',5),(4,'Administracion',9),(5,'Ingenieria',5);
/*!40000 ALTER TABLE `estante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugares`
--

DROP TABLE IF EXISTS `lugares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `lugares` (
  `idLugares` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `Ubicacion_idUbicacion` int(11) NOT NULL,
  PRIMARY KEY (`idLugares`,`Ubicacion_idUbicacion`),
  KEY `fk_Lugares_Ubicacion1_idx` (`Ubicacion_idUbicacion`),
  CONSTRAINT `fk_Lugares_Ubicacion1` FOREIGN KEY (`Ubicacion_idUbicacion`) REFERENCES `ubicacion` (`idubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugares`
--

LOCK TABLES `lugares` WRITE;
/*!40000 ALTER TABLE `lugares` DISABLE KEYS */;
INSERT INTO `lugares` VALUES (1,'bańo',1),(2,'cabinas de estudio',10),(3,'sala de cinema',4),(4,'sala de estudio',6),(5,'mezanine',8);
/*!40000 ALTER TABLE `lugares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `material` (
  `titulo` varchar(60) NOT NULL,
  `autor` varchar(75) NOT NULL,
  `editor` varchar(45) NOT NULL,
  `temas` varchar(95) NOT NULL,
  `idioma` varchar(45) NOT NULL,
  `isbn` varchar(45) DEFAULT NULL,
  `clasificacion` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `fecha_Edicion` varchar(45) NOT NULL,
  `id_material` varchar(45) NOT NULL,
  `Estante_idEstante` int(11) NOT NULL,
  PRIMARY KEY (`id_material`,`Estante_idEstante`),
  KEY `fk_Material_Estante1_idx` (`Estante_idEstante`),
  CONSTRAINT `fk_Material_Estante1` FOREIGN KEY (`Estante_idEstante`) REFERENCES `estante` (`idestante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
INSERT INTO `material` VALUES ('COMO PROGRAMAR EN JAVA','DEITEL, HARVEY M ; DEITEL, P. J ','MEXICO : PRENTICE HALL HISPANOAMERICANA','JAVA; LENGUAJES DE PROGRAMACION; MULTIMEDIA; PROGRAMACION DE COMPUTADORAS','SPA','9701700449','005.133D325','Libro','1998','1',5),('COMO PROGRAMAR UN CONTROL NUMERICO','FERRE MASIP, RAFAEL ','BARCELONA : MARCOMBO','CONTROL NUMERICO; AUTOMATIZACION','SPA','8426707106','658.514F382C','Libro','1988','2',5),('Física universitaria con física moderna','	ZEMANSKY, MARK W ; YOUNG, HUGH D ; SEARS, FRANCIS WESTON ','MEXICO : PEARSON','ELECTROMAGNETISMO; FISICA; FISICA MODERNA; MECANICA; GRAVITACION; OPTICA; TEORIA CUANTICA','SPA','9702606721','530S439E11','Libro','2004','3',3),('ALGEBRA LINEAL','LOAIZA CHALARCA, GUSTAVO ','MEDELLIN : UNIVERSIDAD EAFIT','ALGEBRA LINEAL; TESIS. MAESTRIA EN MATEMATICAS APLICADAS','SPA','','512.5L795','Tesis','1984','4',1),('	CALCULO','STEWART, JAMES ','MEXICO : GRUPO EDITORIAL IBEROAMERICA,','SEDE LLANOGRANDE; CALCULO','SPA','970625028','515S849','Libro','1994','5',2);
/*!40000 ALTER TABLE `material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material_has_autor`
--

DROP TABLE IF EXISTS `material_has_autor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `material_has_autor` (
  `Material_id_material` varchar(45) NOT NULL,
  `Autor_id_Autor` int(11) NOT NULL,
  PRIMARY KEY (`Material_id_material`,`Autor_id_Autor`),
  KEY `fk_Material_has_Autor_Autor1_idx` (`Autor_id_Autor`),
  KEY `fk_Material_has_Autor_Material1_idx` (`Material_id_material`),
  CONSTRAINT `fk_Material_has_Autor_Autor1` FOREIGN KEY (`Autor_id_Autor`) REFERENCES `autor` (`id_autor`),
  CONSTRAINT `fk_Material_has_Autor_Material1` FOREIGN KEY (`Material_id_material`) REFERENCES `material` (`id_material`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material_has_autor`
--

LOCK TABLES `material_has_autor` WRITE;
/*!40000 ALTER TABLE `material_has_autor` DISABLE KEYS */;
INSERT INTO `material_has_autor` VALUES ('5',1),('2',2),('4',3),('1',4),('3',5);
/*!40000 ALTER TABLE `material_has_autor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubicacion`
--

DROP TABLE IF EXISTS `ubicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ubicacion` (
  `idUbicacion` int(11) NOT NULL,
  `piso` varchar(45) NOT NULL,
  `orientacion` varchar(45) NOT NULL,
  PRIMARY KEY (`idUbicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubicacion`
--

LOCK TABLES `ubicacion` WRITE;
/*!40000 ALTER TABLE `ubicacion` DISABLE KEYS */;
INSERT INTO `ubicacion` VALUES (1,'1','norte'),(2,'2','sur'),(3,'3','oeste'),(4,'1','sur'),(5,'2','norte'),(6,'3','este'),(7,'3','sur'),(8,'2','este'),(9,'2','oeste'),(10,'1','este');
/*!40000 ALTER TABLE `ubicacion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-22 15:52:27
