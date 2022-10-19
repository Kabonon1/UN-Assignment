-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `projectref` text,
  `title` text,
  `datecgf` text,
  `startdate` text,
  `grants` text,
  `duration` int DEFAULT NULL,
  `readiness` text,
  `typeofreadiness` text,
  `first_disb` text,
  `statuss` text,
  `countryid` int DEFAULT NULL,
  `idprojects` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idprojects`),
  KEY `un_idx` (`countryid`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES ('COM-RS-001','Waterborehole','01/11/2018','01/11/2018','426,080',24,'Readiness','Capacity','115,117.00','under',3,3),('CRI-RS-002','Test','23/10/2018','23/10/2018','2,861,917.00',36,'National','NAP','350575.33','under',4,4),('DOM-RS-002','Building capacity to advance National Adaptation Plan Process in the Dominican Republic','11/07/2018','11/07/2018',' 2,998,325.00 ',36,'National Adaptation Plans','NAP',' 1,161,912 ','under implementation',5,5),('EGY-RS-001','Supporting Egypt?s engagement with the Green Climate Fund: Logical framework support','02/05/2017','24/04/2017',' 300,000 ',18,'Readiness','Capacity Building',' 122,456.00 ','under implementation',6,6),('GHA-RS-001','Drought Early Warning and Forecasting System: Improving resiliency of crops to drought through strengthened early warning within Ghana, Uganda and Sudan','15/05/2017','15/05/2017',' 300,150 ',24,'Readiness','FI/TNA/other',' 300,150 ','completion report submitted',7,7),('HND-RS-002','Supporting strategic planning to engage with the GCF and comply with the national commitments under the Paris Agreement regarding the LULUCF sector','18/01/2018','18/01/2018',' 764,960 ',18,'Readiness','REDD+',' 243,515.00 ','under implementation',8,8),('JOR-RS-001','Strengthening NDA of Jordan to deliver on GCF Investment Framework','15/06/2017','15/06/2017',' 300,000 ',18,'Readiness','Capacity Building',' 150,000.00 ','under implementation',9,9),('MLY-RS-002','Accessing REDD+ result-based payments in Malaysia','12/11/2018','12/11/2018',' 819,230.00 ',24,'Readiness','REDD+',' 465,695.33 ','under implementation',11,11),('MDV-RS-001','Establishing and strengthening National Designated Authority (NDA), and developing strategic framework for engagement with the GCF in Maldives','16/06/2017','16/06/2017',' 300,000 ',12,'Readiness','Capacity Building',' 198,545.00 ','under implementation',12,12),('MRT-RS-002','Building capacity to advance National Adaptation Plan Process in Mauritania','17/07/2018','17/07/2018',' 2,670,374.00 ',36,'National Adaptation Plans','NAP','$742,163.00','under implementation',13,13),('MUS-RS-002','Climate Change Vulnerability and Adaptation Study for Port of Port Louis','22/01/2018','22/01/2018',' 324,764 ',15,'Readiness','FI/TNA/other',' 324,764.00 ','under implementation',14,14),('MNG-RS-003','Scaling-up of Implementation of Low-Carbon District Heating Systems in Mongolia','01/02/2018','01/02/18',' 368,000 ',12,'Readiness','FI/TNA/other',' 250,000.00 ','under implementation',15,15),('MNG-RS-004','Building capacity to advance National Adaptation Plan Process in Mongolia','20/06/18','20/06/18',' 2,895,461.00 ',36,'National Adaptation Plans','NAP',' 406,123 ','under implementation',15,16),('MNE-RS-001','1. Establishing and strengthening National Designated Authorities or Focal Points;\n2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.','15/11/2016','30/08/16',' 300,000 ',12,'Readiness','Capacity Building',' 145,300.00 ','under implementation',16,17),('MMR-RS-002','Establishing and Strengthening National Designated Authority (NDA), and Developing Strategic Framework for Engagement with the GCF in Myanmar','10/11/2017','10/11/17',' 300,000 ',18,'Readiness','Capacity Building',' 115,840.00 ','under implementation',17,18),('MMR-RS-001','Strengthened drought and flood management through improved science?based information availability and management in Myanmar','26/07/2017','26/07/17',' 336,520 ',12,'Readiness','FI/TNA/other',' 336,520.00 ','under implementation',17,19),('NPL-RS-001','Building Capacity to Advance National Adaptation Plan Process in Nepal','15/05/2017','15/05/2017',' 2,935,350.00 ',36,'National Adaptation Plans','NAP',' 465,410 ','under implementation',18,20),('NER-RS-002','Building Niger?s engagement with the GCF: Establishment and strengthening of the NDA, and elaboration of a country programme identifying strategic priorities','20/06/2018','20/06/2018',' 300,000.00 ',18,'Readiness','Capacity Building','$138,100.00','requesting funds',19,21),('PAK-RS-003','Building capacity to advance National Adaptation Plan Process in Pakistan','02/03/2018','03/03/2018',' 2,969,674.00 ',36,'National Adaptation Plans','NAP',' 675,420 ','under implementation',20,22),('PSE-RS-002','Technology Road Map for the Implementation of Climate Action Plans in Palestine.','18/10/2017','18/10/2017',' 254,100.00 ',12,'Readiness','FI/TNA/other',' 254,100.00 ','under implementation',21,23),('SRB-RS-001','Developing','12/01/2018','12/01/2018','300,000.00',12,'Readiness','Capacity','130,000.00','under',22,24),('SSD-RS-001','Republic of South Sudan Green Climate Fund?s Readiness and Preparatory Support Project ','20/06/2018','20/06/2018',' 300,000.00 ',18,'Readiness','Capacity Building',' 153,178.00 ','under implementation',23,25),('SWZ-RS-002','Green Climate Fund Readiness Support for Swaziland','12/03/2018','12/03/2018',' 299,032.00 ',24,'Readiness','Capacity Building',' 83,046.00 ','under implementation',24,26),('SWZ-RS-003','Building capacity to advance National Adaptation Plan process in Swaziland ','28/06/2018','28/06/2018',' 2,796,359.00 ',36,'National Adaptation Plans','NAP',' 744,662 ','under implementation',24,27),('TON-RS-002','To develop an energy efficiency master plan for the Kingdom of Tonga and East Africa','20/04/2017','20/04/2017',' 200,000 ',6,'Readiness','FI/TNA/other',' 200,000.00 ','under implementation',25,28),('ZWE-RS-001','1. Establishing and strengthening National Designated Authorities or Focal Points;\n2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.','05/03/2018','05/03/2018',' 300,000 ',24,'Readiness','Capacity Building',' 121,354.00 ','under implementation',26,29),('ZWE-RS-002','Building capacity to advance National Adaptation Plan Process in Zimbabwe','11/05/2018','11/05/2018',' 2,993,349.00 ',36,'National Adaptation Plans','NAP',' 877,525 ','under implementation',26,30);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-19 10:35:32
