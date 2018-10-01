CREATE DATABASE  IF NOT EXISTS `db_event` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `db_event`;
-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_event
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
-- Table structure for table `tbl_client`
--

DROP TABLE IF EXISTS `tbl_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `address` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_client`
--

LOCK TABLES `tbl_client` WRITE;
/*!40000 ALTER TABLE `tbl_client` DISABLE KEYS */;
INSERT INTO `tbl_client` VALUES (12,'Gleyver',6654795,'46026502874','jd itaparica'),(13,'joao',6606130,'41965179860','jandira');
/*!40000 ALTER TABLE `tbl_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_event`
--

DROP TABLE IF EXISTS `tbl_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `qtd_table` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_event`
--

LOCK TABLES `tbl_event` WRITE;
/*!40000 ALTER TABLE `tbl_event` DISABLE KEYS */;
INSERT INTO `tbl_event` VALUES (1,'OBS',123,'Rua Maria mendonça','2008-09-07'),(2,'kotlyn',12,'jandira','2018-07-10');
/*!40000 ALTER TABLE `tbl_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_event_table`
--

DROP TABLE IF EXISTS `tbl_event_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_event_table` (
  `id_event_table` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) DEFAULT NULL,
  `ocupada` varchar(50) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_event_table`),
  KEY `FK_CLinet_idx` (`id_client`),
  KEY `fk_event_idx` (`id_event`),
  CONSTRAINT `FK_CLinet` FOREIGN KEY (`id_client`) REFERENCES `tbl_client` (`id_client`),
  CONSTRAINT `fk_event` FOREIGN KEY (`id_event`) REFERENCES `tbl_event` (`id_event`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_event_table`
--

LOCK TABLES `tbl_event_table` WRITE;
/*!40000 ALTER TABLE `tbl_event_table` DISABLE KEYS */;
INSERT INTO `tbl_event_table` VALUES (4,1,'182,123,19',12),(5,1,'182,123,192',12),(6,1,'1232,123,123',12),(7,2,'10, 12, 14',13);
/*!40000 ALTER TABLE `tbl_event_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-01  8:54:46
