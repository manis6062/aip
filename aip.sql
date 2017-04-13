-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: aip
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

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
-- Table structure for table `auth`
--

DROP TABLE IF EXISTS `auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth`
--

LOCK TABLES `auth` WRITE;
/*!40000 ALTER TABLE `auth` DISABLE KEYS */;
INSERT INTO `auth` VALUES (1,'create_user',1,'Create User'),(2,'edit_user',1,'Edit User'),(3,'delete_user',1,'Delete User'),(4,'add_student',1,'Add Student'),(5,'edit_student',1,'Edit Student'),(6,'delete_student',1,'Delete Student');
/*!40000 ALTER TABLE `auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` VALUES (1,'Nepal',0,'','',1),(2,'Australia',0,'','',1),(3,'USA',0,'','',1),(4,'Dhangadi',1,'dhangadi@dhangadi.com','9808265654',1),(5,'Kathmandu',1,'kathmandu@kathmandu.com','9841231545',1),(6,'Chitwan',1,'chitwan@chitwan.com','9841231545',1),(7,'Texas',3,'texas@texas.com','63522222524',1),(8,'New Jersey',3,'newjesey@new.com','85555325151',1),(9,'Sydney',2,'sydney@sydney.com','74444511514',1);
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `counsellor_job`
--

DROP TABLE IF EXISTS `counsellor_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `counsellor_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `counsellor_job_user_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`counsellor_job_user_id`),
  KEY `service_type_id_idx` (`service_type_id`),
  CONSTRAINT `counsellor_job_user_id` FOREIGN KEY (`counsellor_job_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `service_type_id` FOREIGN KEY (`service_type_id`) REFERENCES `enquiry_service_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `counsellor_job`
--

LOCK TABLES `counsellor_job` WRITE;
/*!40000 ALTER TABLE `counsellor_job` DISABLE KEYS */;
/*!40000 ALTER TABLE `counsellor_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designation`
--

LOCK TABLES `designation` WRITE;
/*!40000 ALTER TABLE `designation` DISABLE KEYS */;
INSERT INTO `designation` VALUES (1,'Admin',1,'Administrator'),(2,'Counseller',1,'Counseller'),(3,'Trainer',1,'Trainer'),(4,'Reception',1,'Reception');
/*!40000 ALTER TABLE `designation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discount_percent` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount`
--

LOCK TABLES `discount` WRITE;
/*!40000 ALTER TABLE `discount` DISABLE KEYS */;
/*!40000 ALTER TABLE `discount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(45) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education`
--

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` VALUES (1,'Year 12+',1),(2,'Advance Diploma',1),(3,'Associate Degree',1),(4,'Bachelor Degree',1),(5,'Certificate III',1),(6,'Certificate IV',1),(7,'Diploma',1),(8,'Doctor Degree',1),(9,'Graduate Certificate',1),(10,'Graduate Diploma',1),(11,'Master Degree (Course Work)',1),(12,'Master Degree (Research)',1),(13,'Non AQF Award',1),(14,'Vocational Graduacte Certificate',1),(15,'Vocational Graduacte Diploma',1),(16,'Year 10+',1),(17,'Trade Qualification',1),(18,'Undergraduate Degree',1),(19,'Graduate Degree',1);
/*!40000 ALTER TABLE `education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_log`
--

DROP TABLE IF EXISTS `email_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_log` (
  `id` int(11) NOT NULL,
  `email_log_user_id` int(11) NOT NULL,
  `sender` varchar(150) DEFAULT NULL,
  `receiver` varchar(150) DEFAULT NULL,
  `subject` text,
  `message` text,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`email_log_user_id`),
  CONSTRAINT `email_log_user_id` FOREIGN KEY (`email_log_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_log`
--

LOCK TABLES `email_log` WRITE;
/*!40000 ALTER TABLE `email_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enquiry_student_id` int(11) NOT NULL,
  `enquiry_service_type_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id_idx` (`enquiry_student_id`),
  KEY `enquiry_service_type_id_idx` (`enquiry_service_type_id`),
  CONSTRAINT `enquiry_service_type_id` FOREIGN KEY (`enquiry_service_type_id`) REFERENCES `enquiry_service_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `enquiry_student_id` FOREIGN KEY (`enquiry_student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquiry`
--

LOCK TABLES `enquiry` WRITE;
/*!40000 ALTER TABLE `enquiry` DISABLE KEYS */;
/*!40000 ALTER TABLE `enquiry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enquiry_service_type`
--

DROP TABLE IF EXISTS `enquiry_service_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enquiry_service_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquiry_service_type`
--

LOCK TABLES `enquiry_service_type` WRITE;
/*!40000 ALTER TABLE `enquiry_service_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `enquiry_service_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `followup`
--

DROP TABLE IF EXISTS `followup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `followup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `followup_student_id` int(11) NOT NULL,
  `followup_user_id` int(11) NOT NULL,
  `followup_enquiry_id` int(11) NOT NULL,
  `followup_training_id` int(11) NOT NULL,
  `description` text,
  `times` int(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(150) DEFAULT NULL,
  `email_template` text,
  `remarks` text,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id_idx` (`followup_student_id`),
  KEY `user_id_idx` (`followup_user_id`),
  KEY `enquiry_id_idx` (`followup_enquiry_id`),
  KEY `followup_training_id_idx` (`followup_training_id`),
  CONSTRAINT `followup_enquiry_id` FOREIGN KEY (`followup_enquiry_id`) REFERENCES `enquiry` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `followup_student_id` FOREIGN KEY (`followup_student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `followup_training_id` FOREIGN KEY (`followup_training_id`) REFERENCES `training` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `followup_user_id` FOREIGN KEY (`followup_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `followup`
--

LOCK TABLES `followup` WRITE;
/*!40000 ALTER TABLE `followup` DISABLE KEYS */;
/*!40000 ALTER TABLE `followup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `forum_user_id` int(11) NOT NULL,
  `post_id` varchar(45) NOT NULL,
  `parent_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`forum_user_id`),
  CONSTRAINT `forum_user_id` FOREIGN KEY (`forum_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum`
--

LOCK TABLES `forum` WRITE;
/*!40000 ALTER TABLE `forum` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gmat`
--

DROP TABLE IF EXISTS `gmat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gmat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gmat_student_id` int(11) NOT NULL,
  `category` varchar(150) DEFAULT NULL,
  `test_type` varchar(150) DEFAULT NULL,
  `test_score` varchar(45) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id_idx` (`gmat_student_id`),
  CONSTRAINT `gmat_student_id` FOREIGN KEY (`gmat_student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gmat`
--

LOCK TABLES `gmat` WRITE;
/*!40000 ALTER TABLE `gmat` DISABLE KEYS */;
/*!40000 ALTER TABLE `gmat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gre`
--

DROP TABLE IF EXISTS `gre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(150) DEFAULT NULL,
  `test_type` varchar(150) DEFAULT NULL,
  `test_score` varchar(45) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `gre_student_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id_idx` (`gre_student_id`),
  CONSTRAINT `gre_student_id` FOREIGN KEY (`gre_student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gre`
--

LOCK TABLES `gre` WRITE;
/*!40000 ALTER TABLE `gre` DISABLE KEYS */;
/*!40000 ALTER TABLE `gre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','Administrator'),(2,'reception','Reception'),(3,'trainer','Trainer'),(4,'counsellor','Counsellor');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ielts`
--

DROP TABLE IF EXISTS `ielts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ielts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ielts_student_id` int(11) NOT NULL,
  `category` varchar(150) DEFAULT NULL,
  `test_type` varchar(45) DEFAULT NULL,
  `test_score` varchar(45) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id_idx` (`ielts_student_id`),
  CONSTRAINT `ielts_student_id` FOREIGN KEY (`ielts_student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ielts`
--

LOCK TABLES `ielts` WRITE;
/*!40000 ALTER TABLE `ielts` DISABLE KEYS */;
/*!40000 ALTER TABLE `ielts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `label`
--

DROP TABLE IF EXISTS `label`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `label` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` text,
  `default` text,
  `label_module_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `label_module_id_idx` (`label_module_id`),
  CONSTRAINT `label_module_id` FOREIGN KEY (`label_module_id`) REFERENCES `label_module` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `label`
--

LOCK TABLES `label` WRITE;
/*!40000 ALTER TABLE `label` DISABLE KEYS */;
INSERT INTO `label` VALUES (1,'S.N.','S.N.',1,1),(2,'Branch','Branch',1,1),(3,'Name','Full Name',1,1),(4,'Username','Username',1,1),(5,'Email','Email',1,1),(6,'Designation','Designation',1,1),(7,'Department','Department',1,1),(8,'Status','Status',1,1),(9,'First Name','First Name',1,1),(10,'Last Name','Last Name',1,1),(11,'Phone','Phone',1,1),(12,'Password','Password',1,1);
/*!40000 ALTER TABLE `label` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `label_module`
--

DROP TABLE IF EXISTS `label_module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `label_module` (
  `id` int(11) NOT NULL,
  `module` varchar(100) DEFAULT NULL,
  `description` text,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `label_module`
--

LOCK TABLES `label_module` WRITE;
/*!40000 ALTER TABLE `label_module` DISABLE KEYS */;
INSERT INTO `label_module` VALUES (1,'user','User ',1);
/*!40000 ALTER TABLE `label_module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reply_id` int(11) DEFAULT NULL,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `title` text,
  `message` text,
  `documemt` varchar(250) DEFAULT NULL,
  `sent_date` date DEFAULT NULL,
  `deleted_by_id` int(11) DEFAULT NULL,
  `message_type` varchar(150) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `readed` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_training_id` int(11) DEFAULT NULL,
  `payment_type_id` int(11) DEFAULT NULL,
  `payment_student_id` int(11) DEFAULT NULL,
  `amount_paid` varchar(100) DEFAULT NULL,
  `amount_due` varchar(100) DEFAULT NULL,
  `package_amount` varchar(100) DEFAULT NULL,
  `receipt_no` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `remarks` text,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `training_id_idx` (`payment_training_id`),
  KEY `payment_type_id_idx` (`payment_type_id`),
  KEY `payment_student_id_idx` (`payment_student_id`),
  CONSTRAINT `payment_student_id` FOREIGN KEY (`payment_student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `payment_training_id` FOREIGN KEY (`payment_training_id`) REFERENCES `training` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `payment_type_id` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_type`
--

DROP TABLE IF EXISTS `payment_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_type` (
  `id` int(11) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_type`
--

LOCK TABLES `payment_type` WRITE;
/*!40000 ALTER TABLE `payment_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pte`
--

DROP TABLE IF EXISTS `pte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pte_student_id` int(11) NOT NULL,
  `category` varchar(150) DEFAULT NULL,
  `test_type` varchar(150) DEFAULT NULL,
  `test_score` varchar(45) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id_idx` (`pte_student_id`),
  CONSTRAINT `pte_student_id` FOREIGN KEY (`pte_student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pte`
--

LOCK TABLES `pte` WRITE;
/*!40000 ALTER TABLE `pte` DISABLE KEYS */;
/*!40000 ALTER TABLE `pte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sat`
--

DROP TABLE IF EXISTS `sat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sat_student_id` int(11) NOT NULL,
  `category` varchar(150) DEFAULT NULL,
  `test_type` varchar(150) DEFAULT NULL,
  `test_score` varchar(45) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id_idx` (`sat_student_id`),
  CONSTRAINT `sat_student_id` FOREIGN KEY (`sat_student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sat`
--

LOCK TABLES `sat` WRITE;
/*!40000 ALTER TABLE `sat` DISABLE KEYS */;
/*!40000 ALTER TABLE `sat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_config`
--

DROP TABLE IF EXISTS `site_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `config_name` varchar(100) DEFAULT NULL,
  `value` text,
  `placeholder` text,
  `description` text,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_config`
--

LOCK TABLES `site_config` WRITE;
/*!40000 ALTER TABLE `site_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `site_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `education_id` int(11) DEFAULT NULL,
  `discount_id` int(11) NOT NULL,
  `first_name` varchar(150) DEFAULT NULL,
  `last_name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `gender_options` enum('mr','miss','ms','mrs') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nationality` varchar(150) DEFAULT NULL,
  `landline_1` varchar(15) DEFAULT NULL,
  `landline_2` varchar(15) DEFAULT NULL,
  `landline_3` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `address` text,
  `email` varchar(250) DEFAULT NULL,
  `passport_no` varchar(50) DEFAULT NULL,
  `passport_issue_date` date DEFAULT NULL,
  `passport_expiry_date` date DEFAULT NULL,
  `visa_type` varchar(150) DEFAULT NULL,
  `visa_expiry_date` date DEFAULT NULL,
  `visa_number` varchar(50) DEFAULT NULL,
  `visa_status` varchar(150) DEFAULT NULL,
  `other_visa` varchar(150) DEFAULT NULL,
  `tax_file_number` varchar(25) DEFAULT NULL,
  `citizenship_no` varchar(45) DEFAULT NULL,
  `citizenship_document` varchar(150) DEFAULT NULL,
  `employment` varchar(150) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `dob_document` varchar(150) DEFAULT NULL,
  `police_report` varchar(15) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `status` varchar(150) DEFAULT NULL,
  `income_documents` varchar(150) DEFAULT NULL,
  `ca_report` varchar(150) DEFAULT NULL,
  `relationship_document` varchar(150) DEFAULT NULL,
  `exam_date` date DEFAULT NULL,
  `exam_result` date DEFAULT NULL,
  `toefl_total_score` varchar(100) DEFAULT NULL,
  `gre_total_score` varchar(100) DEFAULT NULL,
  `gmat_total_score` varchar(100) DEFAULT NULL,
  `pte_total_score` varchar(100) DEFAULT NULL,
  `sat_total_score` varchar(100) DEFAULT NULL,
  `ielts_total_score` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `branch_id_idx` (`branch_id`),
  KEY `education_id_idx` (`education_id`),
  KEY `discount_id_idx` (`discount_id`),
  CONSTRAINT `branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `discount_id` FOREIGN KEY (`discount_id`) REFERENCES `discount` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `education_id` FOREIGN KEY (`education_id`) REFERENCES `education` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Students Information';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_user_id` int(11) NOT NULL,
  `task_title` text,
  `task_detail` text,
  `end_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `priority` varchar(45) DEFAULT NULL,
  `completed` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `task_user_id_idx` (`task_user_id`),
  CONSTRAINT `task_user_id` FOREIGN KEY (`task_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task_assign`
--

DROP TABLE IF EXISTS `task_assign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task_assign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL,
  `assign_to_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `task_id_idx` (`task_id`),
  CONSTRAINT `task_id` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task_assign`
--

LOCK TABLES `task_assign` WRITE;
/*!40000 ALTER TABLE `task_assign` DISABLE KEYS */;
/*!40000 ALTER TABLE `task_assign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toefl`
--

DROP TABLE IF EXISTS `toefl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toefl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `toefl_student_id` int(11) NOT NULL,
  `test_type` varchar(150) DEFAULT NULL,
  `test_score` varchar(45) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `category` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id_idx` (`toefl_student_id`),
  CONSTRAINT `toefl_student_id` FOREIGN KEY (`toefl_student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toefl`
--

LOCK TABLES `toefl` WRITE;
/*!40000 ALTER TABLE `toefl` DISABLE KEYS */;
/*!40000 ALTER TABLE `toefl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trainer_job`
--

DROP TABLE IF EXISTS `trainer_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trainer_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trainer_job_student_id` int(11) NOT NULL,
  `trainer_job_user_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id_idx` (`trainer_job_student_id`),
  KEY `user_id_idx` (`trainer_job_user_id`),
  CONSTRAINT `student_id` FOREIGN KEY (`trainer_job_student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_id` FOREIGN KEY (`trainer_job_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trainer_job`
--

LOCK TABLES `trainer_job` WRITE;
/*!40000 ALTER TABLE `trainer_job` DISABLE KEYS */;
/*!40000 ALTER TABLE `trainer_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training`
--

DROP TABLE IF EXISTS `training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `training_student_id` int(11) NOT NULL,
  `training_course_id` int(11) NOT NULL,
  `enroll_date` date DEFAULT NULL,
  `class_time` varchar(150) DEFAULT NULL,
  `book_provided` int(1) DEFAULT NULL,
  `id_card_provided` int(1) DEFAULT NULL,
  `training_date` date DEFAULT NULL,
  `remarks` text,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id_idx` (`training_course_id`),
  KEY `student_id_idx` (`training_student_id`),
  CONSTRAINT `training_course_id` FOREIGN KEY (`training_course_id`) REFERENCES `course` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `training_student_id` FOREIGN KEY (`training_student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training`
--

LOCK TABLES `training` WRITE;
/*!40000 ALTER TABLE `training` DISABLE KEYS */;
/*!40000 ALTER TABLE `training` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_auth`
--

DROP TABLE IF EXISTS `user_auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `auth_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_auth_1_idx` (`auth_id`),
  KEY `fk_user_auth_2_idx` (`user_id`),
  CONSTRAINT `fk_user_auth_1` FOREIGN KEY (`auth_id`) REFERENCES `auth` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_auth_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_auth`
--

LOCK TABLES `user_auth` WRITE;
/*!40000 ALTER TABLE `user_auth` DISABLE KEYS */;
INSERT INTO `user_auth` VALUES (1,1,1,1),(2,3,4,1),(3,5,2,1),(4,7,2,1),(5,7,3,1),(6,7,4,1),(7,7,5,1),(8,7,6,1),(9,8,6,1),(10,9,3,1),(11,9,4,1),(12,10,1,1),(13,11,1,1),(14,11,2,1),(15,12,1,1),(16,13,1,1),(17,14,1,1),(18,15,1,1),(19,15,2,1),(20,15,3,1),(21,16,1,1),(22,20,1,1),(23,22,2,1),(24,23,1,1);
/*!40000 ALTER TABLE `user_auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_branch`
--

DROP TABLE IF EXISTS `user_branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_branch_1_idx` (`branch_id`),
  KEY `fk_user_branch_2_idx` (`user_id`),
  CONSTRAINT `fk_user_branch_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_branch_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_branch`
--

LOCK TABLES `user_branch` WRITE;
/*!40000 ALTER TABLE `user_branch` DISABLE KEYS */;
INSERT INTO `user_branch` VALUES (1,1,5,1),(2,2,5,1),(3,3,6,1),(4,4,7,1),(5,5,8,1),(6,6,9,1),(7,7,5,1),(8,8,4,1),(9,9,6,1),(10,10,9,1),(11,11,8,1),(12,12,9,1),(13,13,8,1),(14,14,5,1),(15,15,8,1);
/*!40000 ALTER TABLE `user_branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_designation`
--

DROP TABLE IF EXISTS `user_designation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_designation` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_designation_1_idx` (`designation_id`),
  KEY `fk_user_designation_2_idx` (`user_id`),
  CONSTRAINT `fk_user_designation_1` FOREIGN KEY (`designation_id`) REFERENCES `user_designation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_designation_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_designation`
--

LOCK TABLES `user_designation` WRITE;
/*!40000 ALTER TABLE `user_designation` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_designation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `designation` varchar(45) DEFAULT NULL,
  `user_designation_id` int(11) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `activation_code` varchar(100) DEFAULT NULL,
  `forgotten_password_code` varchar(45) DEFAULT NULL,
  `forgotten_password_time` int(11) DEFAULT NULL,
  `remember_code` varchar(45) DEFAULT NULL,
  `last_login` int(11) DEFAULT NULL,
  `company` varchar(45) DEFAULT NULL,
  `created_on` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `forgotten_password_time_UNIQUE` (`forgotten_password_time`),
  UNIQUE KEY `last_login_UNIQUE` (`last_login`),
  UNIQUE KEY `created_on_UNIQUE` (`created_on`),
  KEY `user_designation_id_idx` (`user_designation_id`),
  CONSTRAINT `user_designation_id` FOREIGN KEY (`user_designation_id`) REFERENCES `designation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'administrator','59zE6QwGByDHk','Admin','istrator','admin@admin.com','Admin',1,NULL,'8798797','545645646','koteshwor',1,'127.0.0.1',NULL,NULL,NULL,NULL,'jbU1VZXXlRiniTmgj7xa4O',1492072972,'ADMIN',NULL),(2,'trainer@trainer.com','$2y$08$6YA8jRdEN2akIdhXPi2hsOSkzgth9T1CGsVFSF9cYZ2PitUlVV71q','Manish','Awale','trainer@trainer.com',NULL,3,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1491982112),(3,'counseller@trainer.com','$2y$08$3UP9HfgEJovsReTLWg7pIOrp5uIEIdujAbZH2xV.fEShmWxfy1iH6','Manish2','Awale2','counseller@trainer.com',NULL,3,NULL,'admin@admin.com','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1491984031),(4,'train@trainer.com','$2y$08$Ul//m0WbasNepurm1XZIBu0TdRoFqROTgVriznKadPewmgk.3YaQy','Manish','Awale','train@trainer.com',NULL,4,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1491984318),(5,'csr@trainer.com','$2y$08$oUEZFG5I1kIVz8QG.9J1WuUVP09LYp2ss5wCV8OuDqx3QsifJ9fXe','Manish2','Awale','csr@trainer.com',NULL,1,NULL,'admin@admin.com','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1491984453),(6,'trasadasdin@trainer.com','$2y$08$R1gNdhZ3BIUXtfj0RI4zie1wI0xulGhj5Suh1fKCDFnTf6xPx56vS','Manish','Awale','trasadasdin@trainer.com',NULL,1,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1491984723),(7,'sdfsssssdf@trainer.com','$2y$08$.lYGjVNyDvoYSxbK57Fm4uhZY2QKY9..gb5w8ZWVMHR2bOKfbJbGG','Manish','Awale','sdfsssssdf@trainer.com',NULL,1,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1491984850),(8,'reception@aip.com','$2y$08$du2ITlM49FVQQz8Bjgbz9eR3hWDB109YJAzdQxYjSYzcwMR8umsa2','Manish','Awale','reception@aip.com',NULL,1,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,1491985295,NULL,1491985051),(9,'hello@trainer.com','$2y$08$6oP0Vx7/qzd/N6/2Ml/w6uzOZaU69LFV91urzaycJjpbdXxX4FZ6W','asdasd','asdasdasd','hello@trainer.com',NULL,1,NULL,'asdasd','asdasd','sadasd',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492065156),(10,'stone@cold.com','$2y$08$gyX93vvE7Co4PjBXG3xn8OVpodwVqDL2seyPpC2F/bNKFFeXKJF2u','Stone','Cold','stone@cold.com',NULL,4,NULL,'5646456465','54456464564','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,1492072944,NULL,1492072895),(11,'yeah@gmail.com','$2y$08$mJ.TGdlnfmet/8KBiPFHZeTDmAaMIOBwABmTwsacHel8O6QepvQ7W','hell','yeah','yeah@gmail.com',NULL,2,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492074120),(12,'don@don.com','$2y$08$Wv01Iumd/DRvhYV6.7BtZ.duU6FpUSxyko42C/vWN75TeVNdLCuFm','ram','sharan','don@don.com',NULL,1,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492074253),(13,'head@head.com','$2y$08$eWzLYFM2J.jtfGRWhaf.geT7SWG7sbk.oaxQBT8yA5IurCkIc/A3a','head','shit','head@head.com',NULL,3,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492074335),(14,'depak@deepak.com','$2y$08$uJADDuQqSTBYv/szNgiwc.WKs1ZaQjgAJqOi9O5BstYZ66SMbN7Mi','deepak','shrestha','depak@deepak.com',NULL,3,NULL,'985231254151','98544121211','Chabahil',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492077573),(15,'timi@admin.com','$2y$08$JGqRPRdOQ7yP7b/gxBdexOOSWKam9Ag6K0RDO/EEtpJK106ssF11S','Manish','asdasdasd','timi@admin.com',NULL,2,NULL,'89798797','45646456464','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492077902),(16,'rakesh@rakesh.com','$2y$08$Z5fI0uR1G90KnpNOiPkrt.leRqBByB5mV9qMJI2XHl16wSCn0EmSq','Rakesh','Sherchan','rakesh@rakesh.com',NULL,4,NULL,'5646456465','54456464564','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492078363),(17,'hger@staff.com','$2y$08$e5tP2BKRUDaRJdvR3313yuH0ql9MdeSBf15t1Yei/H.3kLPYHNK0K','Manish','Awale','hger@staff.com',NULL,3,NULL,'5646456465','435345345','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492078513),(18,'gre@gre.com','$2y$08$RnSdnkf3RbvvK8qCRVb70.iNGM2q74Su14VLEm6fa21R3NOL6QDra','Manish','asdasdasd','gre@gre.com',NULL,1,NULL,'32423','234234234','234234234',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492078601),(19,'aaahell@hell.com','$2y$08$cpobzWjodC3aaPODSVc2Feb/OkGqxTROoIhjW./yhX1bVkyFpYO3C','Manish','Awale','aaahell@hell.com',NULL,2,NULL,'234234234','234234234234','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492078658),(20,'tdfdfdfr@trainer.com','$2y$08$iGXLZySskQ6aDarZlhwS0OeFRj3iUp/iAQaRPTjJwzLJR44X8TTvi','Manish2','Awale','tdfdfdfr@trainer.com',NULL,3,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492078811),(21,'rock@staff.com','$2y$08$240F7OQ/K2YVHb6anPfRneX46lnME8ML8l6DAPGnczi8q1Bm2CEtW','Manish','Awale','rock@staff.com',NULL,3,NULL,'234234234','234234234234','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492079629),(22,'adminsdfsdfs@admin.com','$2y$08$Lket//iysj4y6J5CsX6SouDt1vQ4.A9C1hEWL1xfxnLEdFzPufEq.','Manish','Awale2','adminsdfsdfs@admin.com',NULL,3,NULL,'345345345','345345345','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492079740),(23,'trainerrtgrete@trainer.com','$2y$08$BhQwuXoIkzVPb.iRMyO9S.39un5Talx3xjKmhYEZqVYod/HQdqvyK','Adminss','Cold','trainerrtgrete@trainer.com',NULL,3,NULL,'32423','5464564','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492079976),(24,'adminasdasdas@admin.com','$2y$08$oftaY1w.A1yTB9n3nDfbJeNc0ibCVFh8IhoIle6EHyE4Ck2eF.41S','Manish2','asdasdasd','adminasdasdas@admin.com',NULL,3,NULL,'3425345345','345345345345','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492080047),(25,'admewrwerin@admin.com','$2y$08$9s.pYm0NU3U.HhcMjqfLaeJYof7a78sC5ToOTkNN5yJ95W1SMypYS','Administ','Cold','admewrwerin@admin.com',NULL,3,NULL,'897789','789789789','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492080184),(26,'trainddder@trainer.com','$2y$08$2LBSJgzPTwFaJ4RZccrP/O8.733Xov4PbERxGfPeX0dcElJt50Kny','Administ','asdasdasd','trainddder@trainer.com',NULL,3,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492080442),(27,'stafdfdfdff@staff.com','$2y$08$Kd1xQM3SXjDRnOA0IY4Lt.bAeqfQBsrFNgFSA7W5bAhwvSJTJDiH2','asdasd','asdasdasd','stafdfdfdff@staff.com',NULL,3,NULL,'5646456465','54456464564','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492080572),(28,'adminsdfsdfsd@admin.com','$2y$08$lh2KSwDzmBlCqFufo03cWea1pGSpZnT4zGc36Jq4E4Qm255svfOsa','Adminss','hamal','adminsdfsdfsd@admin.com',NULL,4,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492080662),(29,'stadfdfdfff@admin.com','$2y$08$K9bhktEfoB38o41T5TVz.ujgwqOJdi0F0Tp5KR/C1PxiPkxIjdNDS','Administ','hamal','stadfdfdfff@admin.com',NULL,4,NULL,'5646456465','54456464564','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492080767),(30,'recesdfsdfption@aip.com','$2y$08$0FxrRaP6oYKiSRX1jXuOQO1GRZEv7gevYsEpmuC19CX/4DqJWlEoy','Administ','Cold','recesdfsdfption@aip.com',NULL,4,NULL,'5646456465','54456464564','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492080917),(31,'stafsdsdsdf@staff.com','$2y$08$Kq83LOvu4oVc6XEBHQLliuiU1kz0RnRuVc9uB8p7J7fBkCS4yEEgq','Manish2','asdasdasd','stafsdsdsdf@staff.com',NULL,3,NULL,'5646456465','54456464564','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492081138),(32,'staerewrwerff@staff.com','$2y$08$k.AZDorfbJQ3URLjcRQ3OenHeDdtxUohqZpCxtyeXHSEzT4RKT9Yy','Adminss','Awale','staerewrwerff@staff.com',NULL,2,NULL,'435345345','34345345345','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492081334),(33,'dsfsdfsdfsdfff@staff.com','$2y$08$SIFJort07tv2whBDN3aqGO15Zmu.gTP4ptOh2cGcV8NfZlgwuFn3m','Rakesh','sdfsdfsdf','dsfsdfsdfsdfff@staff.com',NULL,3,NULL,'544646','54456464564','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492081461);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users2`
--

DROP TABLE IF EXISTS `users2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users2` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users2`
--

LOCK TABLES `users2` WRITE;
/*!40000 ALTER TABLE `users2` DISABLE KEYS */;
INSERT INTO `users2` VALUES (1,'127.0.0.1','administrator','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36','','admin@admin.com','',NULL,NULL,NULL,1268889823,1268889823,1,'Admin','istrator','ADMIN','0');
/*!40000 ALTER TABLE `users2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_groups_2_idx` (`group_id`),
  KEY `fk_users_userid_idx` (`user_id`),
  CONSTRAINT `fk_users_userid` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (1,1,1),(2,4,4),(3,6,3),(4,7,2),(5,8,4),(6,2,2),(7,3,3),(8,5,2),(9,9,4),(10,10,4),(11,13,3),(12,14,3);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-13 16:52:18
