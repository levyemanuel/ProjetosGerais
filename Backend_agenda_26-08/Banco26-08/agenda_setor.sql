-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: agenda
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.16.04.1

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
-- Table structure for table `setor`
--

DROP TABLE IF EXISTS `setor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setor` (
  `idSetor` int(11) NOT NULL AUTO_INCREMENT,
  `nomeSetor` varchar(150) NOT NULL,
  `SetorPai` varchar(150) DEFAULT NULL,
  `idFuncionario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idSetor`),
  UNIQUE KEY `idSetor` (`idSetor`),
  UNIQUE KEY `nomeSetor` (`nomeSetor`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setor`
--

LOCK TABLES `setor` WRITE;
/*!40000 ALTER TABLE `setor` DISABLE KEYS */;
INSERT INTO `setor` VALUES (1,'Almoxarife',NULL,NULL),(3,'Analista Contábil',NULL,NULL),(4,'Analista de BI',NULL,NULL),(5,'Analista de Compras',NULL,NULL),(6,'Analista de Contas a Receber',NULL,NULL),(7,'Analista de Contas a Pagar',NULL,NULL),(9,'Analista de Controladoria',NULL,NULL),(10,'Analista de Desenvolvimento Humano',NULL,NULL),(12,'Analista de DP',NULL,NULL),(13,'Analista de Meio Ambiente',NULL,NULL),(14,'Analista de Qualidade',NULL,NULL),(15,'Analista de Sistemas e Infraestrutura',NULL,NULL),(16,'Analista de Tesouraria',NULL,NULL),(18,'Assessor de Marketing',NULL,NULL),(19,'Assessor Jurídico',NULL,NULL),(20,'Assistente Administrativo da Manutenção',NULL,NULL),(21,'Assistente Comercial Máquinas',NULL,NULL),(22,'Assistente Contábil',NULL,NULL),(23,'Assistente Contas a Receber',NULL,NULL),(24,'Assistente de Compras',NULL,NULL),(25,'Assistente de Contas a Pagar',NULL,NULL),(26,'Assistente de Controladoria',NULL,NULL),(27,'Assistente de Desenvolvimento Humano',NULL,NULL),(28,'Assistente de DP',NULL,NULL),(30,'Assistente de Patrimônio',NULL,NULL),(31,'Assistente de Tesouraria',NULL,NULL),(32,'Assistente de Transportes',NULL,NULL),(33,'Auxiliar Contábil',NULL,NULL),(34,'Auxiliar de Almoxarifado','',NULL),(37,'Gestor de QSMA','',''),(38,'Secretaria Executiva','',''),(40,'TIC','',''),(44,'cccccc','Analista de BI',NULL);
/*!40000 ALTER TABLE `setor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-26 10:39:44
