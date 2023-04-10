-- MySQL dump 10.19  Distrib 10.3.34-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: gsbFrais
-- ------------------------------------------------------
-- Server version	10.3.34-MariaDB-0+deb10u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comptable`
--

DROP TABLE IF EXISTS `comptable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comptable` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comptable`
--

LOCK TABLES `comptable` WRITE;
/*!40000 ALTER TABLE `comptable` DISABLE KEYS */;
INSERT INTO `comptable` VALUES ('d51','Debroise','Michel','mdebroise','sghkb','2 Bld Jourdain','44000','Nantes'),('e22','Desmarquest','Nathalie','ndesmarquest','f1fob','14 Place d Arc','45000','Orléans'),('e24','Desnost','Pierre','pdesnost','4k2o5','16 avenue des Cèdres','23200','Guéret'),('e39','Dudouit','Frédéric','fdudouit','44im8','18 rue de l église','23120','GrandBourg'),('e49','Duncombe','Claude','cduncombe','qf77j','19 rue de la tour','23100','La souteraine'),('e5','Enault-Pascreau','Céline','cenault','y2qdu','25 place de la gare','23200','Gueret'),('e52','Eynde','Valérie','veynde','i7sn3','3 Grand Place','13015','Marseille'),('f21','Finck','Jacques','jfinck','mpb3t','10 avenue du Prado','13002','Marseille'),('f39','Frémont','Fernande','ffremont','xs5tq','4 route de la mer','13012','Allauh'),('f4','Gest','Alain','agest','dywvt','30 avenue de la mer','13025','Berre');
/*!40000 ALTER TABLE `comptable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etat`
--

DROP TABLE IF EXISTS `etat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etat` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etat`
--

LOCK TABLES `etat` WRITE;
/*!40000 ALTER TABLE `etat` DISABLE KEYS */;
INSERT INTO `etat` VALUES ('CL','Saisie clôturée'),('CR','Fiche créée, saisie en cours'),('RB','Remboursée'),('VA','Validée et mise en paiement');
/*!40000 ALTER TABLE `etat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fiche_frais`
--

DROP TABLE IF EXISTS `fiche_frais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fiche_frais` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiteur_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_justificatifs` int(11) DEFAULT NULL,
  `montant_valide` decimal(12,2) DEFAULT NULL,
  `date_modif` date DEFAULT NULL,
  PRIMARY KEY (`id`,`visiteur_id`),
  KEY `IDX_5FC0A6A7D5E86FF` (`etat_id`),
  KEY `IDX_5FC0A6A77F72333D` (`visiteur_id`),
  CONSTRAINT `FK_5FC0A6A77F72333D` FOREIGN KEY (`visiteur_id`) REFERENCES `visiteur` (`id`),
  CONSTRAINT `FK_5FC0A6A7D5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fiche_frais`
--

LOCK TABLES `fiche_frais` WRITE;
/*!40000 ALTER TABLE `fiche_frais` DISABLE KEYS */;
INSERT INTO `fiche_frais` VALUES ('01/2023','b16','VA',10,500.08,'2022-01-19'),('02/2023','a131','VA',1,900.07,'2023-04-10'),('02/2023','b19','RB',11,800.60,'2022-02-06'),('02/2023','b34','VA',1,400.07,'2023-02-12'),('02/2023','b4','RB',1,100.07,'2023-02-12'),('03/2022','b13','VA',4,700.07,'2022-03-24'),('03/2023','b25','CL',8,500.07,'2023-03-25'),('04/2022','a17','CL',10,500.08,'2022-04-19'),('04/2022','b13','CL',4,300.70,'2022-04-24'),('04/2023','a131','CL',5,1077.72,'2023-04-10'),('04/2023','a17','CL',3,362.48,'2023-04-10'),('04/2023','b16','CR',10,500.08,'2023-04-19'),('04/2023','b28','CR',4,600.07,'2023-04-24'),('04/2023','b34','CR',1,900.07,'2023-04-12'),('05/2022','a17','VA',10,500.08,'2022-05-19'),('07/2022','b25','VA',8,500.07,'2022-07-25'),('08/2022','b34','CL',1,200.07,'2022-08-12'),('09/2022','a55','VA',11,800.60,'2022-09-06'),('10/2022','a55','RB',11,400.06,'2022-10-06'),('10/2022','b19','CL',11,800.06,'2022-10-06'),('11/2022','a93','RB',8,200.07,'2022-11-25'),('12/2022','a93','CL',8,500.07,'2022-12-25'),('12/2022','b28','RB',4,600.07,'2022-12-24');
/*!40000 ALTER TABLE `fiche_frais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frais_forfait`
--

DROP TABLE IF EXISTS `frais_forfait`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `frais_forfait` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frais_forfait`
--

LOCK TABLES `frais_forfait` WRITE;
/*!40000 ALTER TABLE `frais_forfait` DISABLE KEYS */;
INSERT INTO `frais_forfait` VALUES ('ETP','Forfait Etape',110.00),('KM','Frais Kilométrique',0.62),('NUI','Nuitée Hôtel',80.00),('REP','Repas Restaurant',25.00);
/*!40000 ALTER TABLE `frais_forfait` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ligne_frais_forfait`
--

DROP TABLE IF EXISTS `ligne_frais_forfait`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ligne_frais_forfait` (
  `visiteur_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fichefrais_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fraisforfait_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`visiteur_id`,`fichefrais_id`,`fraisforfait_id`),
  KEY `IDX_BD293ECF7F72333D` (`visiteur_id`),
  KEY `IDX_BD293ECFD318D763` (`fichefrais_id`),
  KEY `IDX_BD293ECFCEAFB3F4` (`fraisforfait_id`),
  CONSTRAINT `FK_BD293ECF7F72333D` FOREIGN KEY (`visiteur_id`) REFERENCES `visiteur` (`id`),
  CONSTRAINT `FK_BD293ECFCEAFB3F4` FOREIGN KEY (`fraisforfait_id`) REFERENCES `frais_forfait` (`id`),
  CONSTRAINT `FK_BD293ECFD318D763` FOREIGN KEY (`fichefrais_id`) REFERENCES `fiche_frais` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ligne_frais_forfait`
--

LOCK TABLES `ligne_frais_forfait` WRITE;
/*!40000 ALTER TABLE `ligne_frais_forfait` DISABLE KEYS */;
INSERT INTO `ligne_frais_forfait` VALUES ('a131','02/2023','ETP','2'),('a131','02/2023','KM','3'),('a131','02/2023','NUI','2'),('a131','02/2023','REP','4'),('a131','04/2023','ETP','1'),('a131','04/2023','KM','2'),('a131','04/2023','NUI','3'),('a131','04/2023','REP','4'),('a17','04/2022','ETP','3'),('a17','04/2022','KM','4'),('a17','04/2023','ETP','3'),('a17','04/2023','KM','4'),('a17','05/2022','KM','4'),('a17','05/2022','NUI','3'),('a55','09/2022','ETP','4'),('a55','09/2022','NUI','2'),('a55','10/2022','NUI','2'),('a55','10/2022','REP','4'),('a93','11/2022','ETP','2'),('a93','11/2022','KM','3'),('a93','12/2022','ETP','3'),('a93','12/2022','NUI','2'),('b16','01/2023','NUI','2'),('b16','01/2023','REP','4'),('b16','04/2023','ETP','2'),('b16','04/2023','KM','4'),('b19','02/2023','NUI','2'),('b19','02/2023','REP','1'),('b19','10/2022','KM','1'),('b19','10/2022','NUI','2'),('b25','03/2023','ETP','2'),('b25','03/2023','KM','3'),('b25','07/2022','NUI','3'),('b25','07/2022','REP','2'),('b28','04/2023','NUI','2'),('b28','04/2023','REP','1'),('b28','12/2022','ETP','2'),('b28','12/2022','KM','1'),('b34','02/2023','ETP','2'),('b34','02/2023','KM','3'),('b34','04/2023','NUI','1'),('b34','04/2023','REP','4'),('b34','08/2022','KM','3'),('b4','02/2023','KM','2'),('b4','02/2023','NUI','2'),('b4','02/2023','REP','1');
/*!40000 ALTER TABLE `ligne_frais_forfait` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ligne_frais_hors_forfait`
--

DROP TABLE IF EXISTS `ligne_frais_hors_forfait`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ligne_frais_hors_forfait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visiteur_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fichefrais_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `montant` decimal(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EC01626D7F72333D` (`visiteur_id`),
  KEY `IDX_EC01626DD318D763` (`fichefrais_id`),
  CONSTRAINT `FK_EC01626D7F72333D` FOREIGN KEY (`visiteur_id`) REFERENCES `visiteur` (`id`),
  CONSTRAINT `FK_EC01626DD318D763` FOREIGN KEY (`fichefrais_id`) REFERENCES `fiche_frais` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ligne_frais_hors_forfait`
--

LOCK TABLES `ligne_frais_hors_forfait` WRITE;
/*!40000 ALTER TABLE `ligne_frais_hors_forfait` DISABLE KEYS */;
INSERT INTO `ligne_frais_hors_forfait` VALUES (1,'a17','04/2022','Reservation de salle pour conférence','2022-04-18',15.00),(2,'a55','09/2022','Achat de fournitures','2022-09-18',15.00),(3,'a93','12/2022','Achat de fournitures','2022-12-18',10.00),(4,'a17','05/2022','Achat de fournitures','2022-05-18',10.00),(5,'a55','10/2022','Achat de fournitures','2022-10-18',11.00),(6,'a93','11/2022','Achat de fournitures','2022-11-18',11.00),(7,'a131','02/2023','Reservation de salle pour conférence','2023-02-20',12.00),(8,'b16','01/2023','Achat de fournitures','2023-01-18',12.00),(9,'b19','02/2023','Reservation de salle pour conférence','2023-02-18',13.00),(10,'b25','03/2023','Achat de fournitures','2023-03-18',13.00),(11,'b28','04/2023','Reservation de salle pour conférence','2023-04-18',14.00),(12,'b34','08/2022','Achat de fournitures','2022-08-18',14.00),(13,'b34','04/2023','Achat de fournitures','2023-04-18',15.00),(14,'b4','02/2023','Reservation de salle pour conférence','2023-02-20',15.00),(15,'a131','04/2023','Repas avac un spécialiste lors d\'une animation','2023-04-17',10.00),(16,'a17','04/2023','Reservation de salle pour conférence','2023-04-19',30.00);
/*!40000 ALTER TABLE `ligne_frais_hors_forfait` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visiteur`
--

DROP TABLE IF EXISTS `visiteur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visiteur` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdp` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_embauche` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visiteur`
--

LOCK TABLES `visiteur` WRITE;
/*!40000 ALTER TABLE `visiteur` DISABLE KEYS */;
INSERT INTO `visiteur` VALUES ('a131','Villechalane','Louis','lvillachane','jux7g','8 rue des Charmes','46000','Cahors','2005-12-21'),('a17','Andre','David','dandre','oppg5','1 rue Petit','46200','Lalbenque','1998-11-23'),('a55','Bedos','Christian','cbedos','gmhxd','1 rue Peranud','46250','Montcuq','1995-01-12'),('a93','Tusseau','Louis','ltusseau','ktp3s','22 rue des Ternes','46123','Gramat','2000-05-01'),('b13','Bentot','Pascal','pbentot','doyw1','11 allée des Cerises','46512','Bessines','1992-07-09'),('b16','Bioret','Luc','lbioret','hrjfs','1 Avenue gambetta','46000','Cahors','1998-05-11'),('b19','Bunisset','Francis','fbunisset','4vbnd','10 rue des Perles','93100','Montreuil','1987-10-21'),('b25','Bunisset','Denise','dbunisset','s1y1r','23 rue Manin','75019','paris','2010-12-05'),('b28','Cacheux','Bernard','bcacheux','uf7r3','114 rue Blanche','75017','Paris','2009-11-12'),('b34','Cadic','Eric','ecadic','6u8dc','123 avenue de la République','75011','Paris','2008-09-23'),('b4','Charoze','Catherine','ccharoze','u817o','100 rue Petit','75019','Paris','2005-11-12'),('b50','Clepkens','Christophe','cclepkens','bw1us','12 allée des Anges','93230','Romainville','2003-08-11'),('b59','Cottin','Vincenne','vcottin','2hoh9','36 rue Des Roches','93100','Monteuil','2001-11-18'),('d13','Debelle','Jeanne','jdebelle','nvwqq','134 allée des Joncs','44000','Nantes','2000-05-11');
/*!40000 ALTER TABLE `visiteur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-10 19:16:23
