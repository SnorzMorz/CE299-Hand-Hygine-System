-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: my-testing.mysql.database.azure.com    Database: ce299
-- ------------------------------------------------------
-- Server version	5.6.47.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `RFID` int(11) NOT NULL,
  `UserName` varchar(45) NOT NULL,
  `Department` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1111112345,'Andy','Computer Science'),(2,1111112346,'Obama','Marketing'),(3,1111112347,'John','Accounting'),(4,1111112348,'Biden','HR Management'),(5,1111112349,'Lee Jaramillo','Marketing'),(6,1111112350,'Micah Kenny','Accounting'),(7,1111112351,'Martha','Marketing'),(8,1111112352,'Faizal','HR Management'),(9,1111112353,'Patrick','Marketing'),(10,1111112354,'Darwin','Accounting'),(11,1111112355,'Carly','HR Management'),(12,1111112356,'Zeeshan','Computer Science'),(13,1111112357,'Leanne','Computer Science'),(14,1111112358,'Ferne','Computer Science'),(15,1111112359,'Harvey','Accounting'),(16,1111112360,'Asher','Marketing'),(17,1111112361,'Hayley','HR Management'),(18,1111112362,'Mohammed','Marketing'),(19,1111112363,'Miller','Accounting'),(20,1111112364,'Usman','Accounting'),(21,1111112365,'Alan','Computer Science'),(22,1111112366,'Cooper','Marketing'),(23,1111112367,'Enid','HR Management'),(24,1111112368,'Reiner','Marketing'),(25,1111112369,'Amir','Accounting'),(26,1111112370,'Jay','Marketing'),(27,1111112371,'Amelia','Computer Science'),(28,1111112372,'Bailey','HR Management'),(29,1111112373,'Simran','Marketing'),(30,1111112374,'Lawrence','Computer Science'),(31,1111112375,'Yi','Computer Science');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-29 22:17:01
