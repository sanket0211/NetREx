-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: RiceResource
-- ------------------------------------------------------
-- Server version	5.1.73

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
-- Table structure for table `ABARoot`
--

DROP TABLE IF EXISTS `ABARoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ABARoot` (
  `source` varchar(15) NOT NULL,
  `destination` varchar(15) NOT NULL,
  `hash` varchar(30) NOT NULL,
  `PCC` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ABAShoot`
--

DROP TABLE IF EXISTS `ABAShoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ABAShoot` (
  `source` varchar(15) DEFAULT NULL,
  `destination` varchar(15) DEFAULT NULL,
  `hash` varchar(30) DEFAULT NULL,
  `PCC` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ColdRoot`
--

DROP TABLE IF EXISTS `ColdRoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ColdRoot` (
  `source` varchar(15) NOT NULL,
  `destination` varchar(15) NOT NULL,
  `hash` varchar(30) NOT NULL,
  `PCC` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ColdShoot`
--

DROP TABLE IF EXISTS `ColdShoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ColdShoot` (
  `source` varchar(15) DEFAULT NULL,
  `destination` varchar(15) DEFAULT NULL,
  `hash` varchar(30) DEFAULT NULL,
  `PCC` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `DroughtRoot`
--

DROP TABLE IF EXISTS `DroughtRoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DroughtRoot` (
  `source` varchar(15) NOT NULL,
  `destination` varchar(15) NOT NULL,
  `hash` varchar(30) NOT NULL,
  `PCC` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `DroughtRootCorEdges`
--

DROP TABLE IF EXISTS `DroughtRootCorEdges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DroughtRootCorEdges` (
  `edge_id` int(15) NOT NULL AUTO_INCREMENT,
  `node1` varchar(20) NOT NULL,
  `node2` varchar(20) NOT NULL,
  `correlation_value` double NOT NULL,
  PRIMARY KEY (`edge_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53240536 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `DroughtShoot`
--

DROP TABLE IF EXISTS `DroughtShoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DroughtShoot` (
  `source` varchar(15) DEFAULT NULL,
  `destination` varchar(15) DEFAULT NULL,
  `hash` varchar(30) DEFAULT NULL,
  `PCC` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `FloodRoot`
--

DROP TABLE IF EXISTS `FloodRoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FloodRoot` (
  `source` varchar(15) NOT NULL,
  `destination` varchar(15) NOT NULL,
  `hash` varchar(30) NOT NULL,
  `PCC` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `FloodShoot`
--

DROP TABLE IF EXISTS `FloodShoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FloodShoot` (
  `source` varchar(15) DEFAULT NULL,
  `destination` varchar(15) DEFAULT NULL,
  `hash` varchar(30) DEFAULT NULL,
  `PCC` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Genes`
--

DROP TABLE IF EXISTS `Genes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Genes` (
  `os_id` varchar(20) NOT NULL,
  `chromosome_no` int(10) NOT NULL DEFAULT '1',
  `strand` char(2) NOT NULL DEFAULT '+',
  `start_position` int(11) NOT NULL DEFAULT '0',
  `end_position` int(11) NOT NULL DEFAULT '0',
  `description` text,
  PRIMARY KEY (`os_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `JARoot`
--

DROP TABLE IF EXISTS `JARoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `JARoot` (
  `source` varchar(15) NOT NULL,
  `destination` varchar(15) NOT NULL,
  `hash` varchar(30) NOT NULL,
  `PCC` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `JAShoot`
--

DROP TABLE IF EXISTS `JAShoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `JAShoot` (
  `source` varchar(15) DEFAULT NULL,
  `destination` varchar(15) DEFAULT NULL,
  `hash` varchar(30) DEFAULT NULL,
  `PCC` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `KeggPathway`
--

DROP TABLE IF EXISTS `KeggPathway`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `KeggPathway` (
  `os_id` varchar(20) DEFAULT NULL,
  `kegg_pathway` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ModuleConnections`
--

DROP TABLE IF EXISTS `ModuleConnections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ModuleConnections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_id` int(10) DEFAULT NULL,
  `source` varchar(30) NOT NULL,
  `target` varchar(30) NOT NULL,
  `correlation_coefficient` double DEFAULT NULL,
  `HRR` int(5) DEFAULT NULL,
  `tissue_id` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=103154 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Modules`
--

DROP TABLE IF EXISTS `Modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Modules` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(256) NOT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `OsmoticRoot`
--

DROP TABLE IF EXISTS `OsmoticRoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `OsmoticRoot` (
  `source` varchar(15) NOT NULL,
  `destination` varchar(15) NOT NULL,
  `hash` varchar(30) NOT NULL,
  `PCC` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `OsmoticShoot`
--

DROP TABLE IF EXISTS `OsmoticShoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `OsmoticShoot` (
  `source` varchar(15) DEFAULT NULL,
  `destination` varchar(15) DEFAULT NULL,
  `hash` varchar(30) DEFAULT NULL,
  `PCC` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Pathways`
--

DROP TABLE IF EXISTS `Pathways`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pathways` (
  `os_id` varchar(15) DEFAULT NULL,
  `pathway` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `RootClusterDegree`
--

DROP TABLE IF EXISTS `RootClusterDegree`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RootClusterDegree` (
  `os_id` varchar(20) DEFAULT NULL,
  `degree` float DEFAULT NULL,
  `tissue_id` int(2) DEFAULT NULL,
  `module_id` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `RootGeneAnnotations`
--

DROP TABLE IF EXISTS `RootGeneAnnotations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RootGeneAnnotations` (
  `os_id` varchar(20) DEFAULT NULL,
  `Description` text,
  `GO` text,
  `tissue_id` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `RootModuleGo`
--

DROP TABLE IF EXISTS `RootModuleGo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RootModuleGo` (
  `module_id` int(2) DEFAULT NULL,
  `biological_process` text,
  `reflist_44321` int(8) DEFAULT NULL,
  `input_511` int(10) DEFAULT NULL,
  `input_expected` float DEFAULT NULL,
  `input_over_under` char(1) DEFAULT NULL,
  `input_fold_enrichment` float DEFAULT NULL,
  `input_raw_p_value` float DEFAULT NULL,
  `tissue_id` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `RootRanks`
--

DROP TABLE IF EXISTS `RootRanks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RootRanks` (
  `os_id` varchar(15) DEFAULT NULL,
  `k_total` float DEFAULT NULL,
  `rank` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ShootRanks`
--

DROP TABLE IF EXISTS `ShootRanks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ShootRanks` (
  `os_id` varchar(15) DEFAULT NULL,
  `k_total` float DEFAULT NULL,
  `rank` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Stress`
--

DROP TABLE IF EXISTS `Stress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Stress` (
  `stress_id` int(11) NOT NULL AUTO_INCREMENT,
  `stress_name` varchar(256) NOT NULL,
  PRIMARY KEY (`stress_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributes`
--

DROP TABLE IF EXISTS `StressAttributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributes` (
  `stress_attribute_id` int(11) NOT NULL AUTO_INCREMENT,
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL,
  PRIMARY KEY (`stress_attribute_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1928396 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesABARoot`
--

DROP TABLE IF EXISTS `StressAttributesABARoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesABARoot` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesABAShoot`
--

DROP TABLE IF EXISTS `StressAttributesABAShoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesABAShoot` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesColdRoot`
--

DROP TABLE IF EXISTS `StressAttributesColdRoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesColdRoot` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesColdShoot`
--

DROP TABLE IF EXISTS `StressAttributesColdShoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesColdShoot` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesDroughtRoot`
--

DROP TABLE IF EXISTS `StressAttributesDroughtRoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesDroughtRoot` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesDroughtRootFive`
--

DROP TABLE IF EXISTS `StressAttributesDroughtRootFive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesDroughtRootFive` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesDroughtRootFour`
--

DROP TABLE IF EXISTS `StressAttributesDroughtRootFour`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesDroughtRootFour` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesDroughtRootOne`
--

DROP TABLE IF EXISTS `StressAttributesDroughtRootOne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesDroughtRootOne` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesDroughtRootThree`
--

DROP TABLE IF EXISTS `StressAttributesDroughtRootThree`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesDroughtRootThree` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesDroughtRootTwo`
--

DROP TABLE IF EXISTS `StressAttributesDroughtRootTwo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesDroughtRootTwo` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesDroughtShoot`
--

DROP TABLE IF EXISTS `StressAttributesDroughtShoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesDroughtShoot` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesFloodRoot`
--

DROP TABLE IF EXISTS `StressAttributesFloodRoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesFloodRoot` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesFloodShoot`
--

DROP TABLE IF EXISTS `StressAttributesFloodShoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesFloodShoot` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesJARoot`
--

DROP TABLE IF EXISTS `StressAttributesJARoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesJARoot` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesJAShoot`
--

DROP TABLE IF EXISTS `StressAttributesJAShoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesJAShoot` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesOsmoticRoot`
--

DROP TABLE IF EXISTS `StressAttributesOsmoticRoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesOsmoticRoot` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressAttributesOsmoticShoot`
--

DROP TABLE IF EXISTS `StressAttributesOsmoticShoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressAttributesOsmoticShoot` (
  `stress_attribute_id` int(11) NOT NULL DEFAULT '0',
  `os_id` varchar(13) NOT NULL,
  `stress_id` int(11) NOT NULL,
  `fold_change` double NOT NULL,
  `module_id` int(11) NOT NULL DEFAULT '1',
  `tissue_id` int(11) NOT NULL,
  `time_point` int(11) NOT NULL,
  `p_value` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `StressSpecificPCC`
--

DROP TABLE IF EXISTS `StressSpecificPCC`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StressSpecificPCC` (
  `source` varchar(15) NOT NULL,
  `destination` varchar(15) NOT NULL,
  `PCC` double DEFAULT NULL,
  `stress_id` int(10) DEFAULT NULL,
  `tissue_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `TimePoints`
--

DROP TABLE IF EXISTS `TimePoints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TimePoints` (
  `time_point_id` int(11) NOT NULL AUTO_INCREMENT,
  `time_point` int(11) NOT NULL,
  PRIMARY KEY (`time_point_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Tissues`
--

DROP TABLE IF EXISTS `Tissues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Tissues` (
  `tissue_id` int(11) NOT NULL AUTO_INCREMENT,
  `tissue_name` varchar(256) NOT NULL,
  PRIMARY KEY (`tissue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-21 21:19:32
