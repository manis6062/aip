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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth`
--

LOCK TABLES `auth` WRITE;
/*!40000 ALTER TABLE `auth` DISABLE KEYS */;
INSERT INTO `auth` VALUES (1,'create_user',1,'Create User'),(2,'edit_user',1,'Edit User'),(3,'delete_user',1,'Delete User'),(4,'view_user',1,'View Users'),(5,'create_leads',1,'Create Leads'),(6,'edit_leads',1,'Edit Leads'),(7,'view_leads',1,'View Leads'),(8,'delete_leads',1,'Delete Leads'),(9,'view_profession',1,'View Profession'),(10,'create_profession',1,'Create Profession'),(11,'edit_profession',1,'Edit Profession'),(12,'view_branch',1,'View Branch'),(13,'create_branch',1,'Create Branch'),(14,'edit_branch',1,'Edit Branch'),(15,'view_course',1,'View Course'),(16,'edit_course',1,'Edit Course'),(17,'create_course',1,'Create Course'),(18,'view_destination',1,'View Destination'),(19,'create_destination',1,'Create Destination'),(20,'edit_destination',1,'Edit Destination');
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` VALUES (1,'Nepal',0,'','',1),(2,'Australia',0,'','',1),(3,'USA',0,'','',1),(4,'Dhangadi',1,'dhangadi@dhangadi.com','9808265654',1),(5,'kathmandu',1,'kathmandu@kathmandu.com','9841231545',1),(6,'Chitwan',1,'chitwan@chitwan.com','9841231545',1),(7,'Texas',3,'texas@texas.com','63522222524',1),(8,'New Jersey',3,'newjesey@new.com','85555325151',1),(9,'Sydneysdfsd',2,'sydney@sydney.com','7444451151445654',1),(10,'India',0,'','',1),(11,'Chandigarh',10,'chandigarh@inida.com','985454121452',1),(12,'Hetauda',1,'trainer@trainer.com','5646456465',1),(13,'Makwanpur',1,'trainer@trainer.com','5646456465',1),(14,'Colorado',3,'action@admin.com','234234234',1),(15,'Mumbai',10,'mumbai@admin.com','234234234',1),(16,'Brisbane',2,'brisbane@brisbane.com','9856254522',1),(17,'Pokhara',1,'pokhara@pokhara.com','9808265545',1),(18,'Queensland',2,'queen@queen.com','1254122236',1),(19,'Goa',10,'goa@goa.com','745214523',1),(20,'Lumbini',1,'lumbini@lumbini.com','63253222256',1),(21,'New South Wales',2,'nei@nei.com','5233252214',1);
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
  `enquiry_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `service_type_id_idx` (`enquiry_id`),
  KEY `fk_counsellor_job_1_idx` (`counsellor_job_user_id`),
  CONSTRAINT `fk_counsellor_job_1` FOREIGN KEY (`counsellor_job_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_counsellor_job_2` FOREIGN KEY (`enquiry_id`) REFERENCES `enquiry` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `counsellor_job`
--

LOCK TABLES `counsellor_job` WRITE;
/*!40000 ALTER TABLE `counsellor_job` DISABLE KEYS */;
INSERT INTO `counsellor_job` VALUES (1,55,2,1,'2017-04-26 11:47:13'),(2,49,3,1,'2017-04-26 12:06:35'),(3,55,4,1,'2017-04-26 13:15:08'),(4,51,5,1,'2017-04-26 13:23:29'),(5,2,6,1,'2017-04-26 13:26:33'),(6,49,7,1,'2017-04-26 13:34:50'),(7,49,8,1,'2017-04-26 13:41:34'),(8,49,9,1,'2017-04-26 13:47:39');
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
  `description` text,
  `fee` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'IELTS preparation','3',1,'The International English Language Testing System (IELTS) is the world\'s most popular high-stakes English language proficiency test for study, work and migration with more than two million tests taken in the past year.','300'),(2,'TOEFL preparation','4',1,'Test of English as a Foreign Language is a standardized test to measure the English language ability of non-native speakers wishing to enroll in English-speaking universities. The test is accepted by many English-speaking academic and professional institutions.','500'),(3,'SAT preparation','5',1,'The SAT  is a standardized test widely used for college admissions in the United States. Introduced in 1926, its name and scoring have changed several times; originally called the Scholastic Aptitude Test, it was later called the Scholastic Assessment Test, then the SAT I: Reasoning Test, then the SAT Reasoning Test, and now, simply the SAT.','200'),(4,'GMAT preparation','6',1,'The GMAT (Graduate Management Admission Test) is a 3½-hour standardized exam designed to predict how test takers will perform academically in MBA (Masters in Business Administration) programs. GMAT scores are used by graduate business schools to make admission decisions.l','450'),(5,'PTE preparation','1.5',1,'The Pearson Test of English Academic. PTE Academic is a computer-based academic English language test aimed at non-native English speakers wanting to study abroad. It tests Reading, Writing, Listening and Speaking. Questions often test 2 skills together, such as listening and reading or reading and speaking.','650'),(6,'GRE preparation','4.5',1,'It\'s the most commonly required admission test for grad school. ... Much like the SAT and ACT, the GRE exam is a broad assessment of your critical thinking, analytical writing, verbal reasoning, and quantitative reasoning skills — all skills developed over the course of many years.','800');
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
-- Table structure for table `destination`
--

DROP TABLE IF EXISTS `destination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destination`
--

LOCK TABLES `destination` WRITE;
/*!40000 ALTER TABLE `destination` DISABLE KEYS */;
INSERT INTO `destination` VALUES (1,'Australia',1,'Australia'),(2,'Usa',1,'USA'),(3,'Newzealand',1,'NEWZEALAND'),(4,'Norway',1,'NORWAY'),(5,'Hongkong',1,'HONGKONG');
/*!40000 ALTER TABLE `destination` ENABLE KEYS */;
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
  `degree` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `affiliate_university` varchar(255) DEFAULT NULL,
  `start_date` year(4) DEFAULT NULL,
  `end_date` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education`
--

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` VALUES (12,NULL,'pu','pu',2009,2013),(13,NULL,'cu','cu',2013,2015),(14,NULL,'tu','tu',2008,2010),(15,NULL,'pu','pu',2017,2018),(16,NULL,'tu','tu',2009,2010),(17,NULL,'pu','pu',2006,2008),(18,NULL,'pu','pu',2009,2010),(19,NULL,'pu','pu',2017,2017),(20,NULL,'pu','pu',2017,2018),(21,NULL,'pu','pu',2015,2018),(22,NULL,'tu','tu',2011,2013),(23,NULL,'pu','pu',2013,2015),(24,NULL,'cu','cu',2015,2017);
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
  `course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id_idx` (`enquiry_student_id`),
  KEY `enquiry_service_type_id_idx` (`enquiry_service_type_id`),
  KEY `fk_enquiry_1_idx` (`course_id`),
  CONSTRAINT `enquiry_service_type_id` FOREIGN KEY (`enquiry_service_type_id`) REFERENCES `enquiry_service_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `enquiry_student_id` FOREIGN KEY (`enquiry_student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_enquiry_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquiry`
--

LOCK TABLES `enquiry` WRITE;
/*!40000 ALTER TABLE `enquiry` DISABLE KEYS */;
INSERT INTO `enquiry` VALUES (2,2,1,'2017-04-26',NULL),(3,4,1,'2017-04-26',NULL),(4,5,1,'2017-04-26',NULL),(5,6,1,'2017-04-26',NULL),(6,7,1,'2017-04-26',NULL),(7,8,1,'2017-04-26',NULL),(8,9,1,'2017-04-26',NULL),(9,11,1,'2017-04-26',NULL);
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
  `service_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_enquiry_service_type_1_idx` (`service_id`),
  CONSTRAINT `fk_enquiry_service_type_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquiry_service_type`
--

LOCK TABLES `enquiry_service_type` WRITE;
/*!40000 ALTER TABLE `enquiry_service_type` DISABLE KEYS */;
INSERT INTO `enquiry_service_type` VALUES (1,'Information',0,1,1),(2,'About Enrollment',0,1,1),(3,'About Examination',0,1,1),(4,'About Study',0,1,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','Administrator'),(2,'reception','Reception'),(3,'trainer','Trainer'),(4,'counsellor','Counsellor'),(5,'marketing','Marketing'),(6,'ceo','CEO'),(7,'accountant','Accountant'),(8,'hr','Human Resource');
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
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'enquiry','Enquiry','1'),(2,'enrollment','Enrollment','1'),(3,'study abroad','Study Abroad','1'),(4,'examination','Examination','1');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
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
  `discount_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nationality` varchar(150) DEFAULT NULL,
  `landline_1` varchar(15) DEFAULT NULL,
  `landline_2` varchar(15) DEFAULT NULL,
  `landline_3` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
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
  `dob_document` varchar(150) DEFAULT NULL,
  `police_report` varchar(15) DEFAULT NULL,
  `remarks` text,
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
  `salutation` enum('Mrs.','Ms.','Miss.') DEFAULT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `referred_by` varchar(255) DEFAULT NULL,
  `reason` text,
  `preffered_destination` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `fathers_name` varchar(255) DEFAULT NULL,
  `mothers_name` varchar(255) DEFAULT NULL,
  `guardians_name` varchar(255) DEFAULT NULL,
  `education_id` varchar(255) NOT NULL,
  `martial_status` enum('m','u') DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `discount_id_idx` (`discount_id`),
  KEY `education_id_idx` (`education_id`),
  CONSTRAINT `discount_id` FOREIGN KEY (`discount_id`) REFERENCES `discount` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='Students Information';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,NULL,'','',NULL,'1970-01-01','Nepali',NULL,NULL,NULL,'9856325552','manis6062@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mrs.','basantapur, ktm','basantapur, ktm','Online',NULL,NULL,NULL,NULL,'2017-04-26 11:43:38','Suku Basnet','Suki Basnet','Suki Basnet','3',NULL,'55889585','150'),(2,NULL,'','',NULL,'1970-01-01','Nepali',NULL,NULL,NULL,'9856325552','manis6062@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mrs.','basantapur, ktm','basantapur, ktm','Online',NULL,NULL,NULL,NULL,'2017-04-26 11:47:13','Suku Basnet','Suki Basnet','Suki Basnet','4',NULL,'55889585','150'),(3,NULL,'','',NULL,'2017-11-04','Nepali',NULL,NULL,NULL,'9856325552','juko@pavilionx2.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mrs.','basantapur, ktm','basantapur, ktm','Online',NULL,NULL,NULL,NULL,'2017-04-26 11:53:10','Ram Chalise','Sita Chalise','Sita Chalise','5',NULL,'55889585','150'),(4,NULL,'dwyane','johnson','dwyane','1970-01-01','American',NULL,NULL,NULL,'9856325552','juko@pavilionx2.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mrs.','basantapur, ktm','basantapur, ktm','Online',NULL,NULL,1,NULL,'2017-04-26 12:06:35','brock lesnar','','','6',NULL,'778855522','209'),(5,NULL,'dwyane','johnson','dwyane','1970-01-01','Nepali',NULL,NULL,NULL,'9856325552','juko@pavilionx2.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mrs.','basantapur, ktm','basantapur, ktm','Online',NULL,NULL,1,NULL,'2017-04-26 13:15:08','brock lesnar','Sita Chalise','Sita Chalise','12,13,14',NULL,'55889585','18'),(6,NULL,'ramesh','maharjan','ramesh','1970-01-01','American',NULL,NULL,NULL,'9856325552','juko@pavilionx2.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mrs.','basantapur, ktm','basantapur, ktm','Online',NULL,NULL,1,NULL,'2017-04-26 13:23:29','Hari Krishna','','','15,16',NULL,'778855522','50'),(7,NULL,'ramesh','johnson','ramesh','1970-01-01','Nepali',NULL,NULL,NULL,'9856325552','juko@pavilionx2.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mrs.','basantapur, ktm','basantapur, ktm','Online',NULL,NULL,1,NULL,'2017-04-26 13:26:33','brock lesnar','','','17,18',NULL,'55889585','196'),(8,NULL,'dwyane','johnson','dwyane','1970-01-01','Nepali',NULL,NULL,NULL,'9856325552','juko@pavilionx2.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mrs.','basantapur, ktm','basantapur, ktm','Online',NULL,NULL,1,NULL,'2017-04-26 13:34:50','brock lesnar','','','19',NULL,'55889585','196'),(9,NULL,'dwyane','johnson','dwyane','1970-01-01','Nepali',NULL,NULL,NULL,'9856325552','juko@pavilionx2.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mrs.','basantapur, ktm','basantapur, ktm','Online',NULL,NULL,1,NULL,'2017-04-26 13:41:34','brock lesnar','','','20',NULL,'55889585','3'),(10,NULL,'dwyane','johnson','dwyane','2016-12-07','Nepali',NULL,NULL,NULL,'9856325552','juko@pavilionx2.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mrs.','basantapur, ktm','basantapur, ktm','Online',NULL,NULL,1,NULL,'2017-04-26 13:44:07','brock lesnar','Sita Chalise','Sita Chalise','21',NULL,'55889585','32'),(11,NULL,'Janardan ','Sharma','Janardan ','2016-12-20','Nepali',NULL,NULL,NULL,'98605325325','juko@pavilionx2.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mrs.','basantapur, ktm','basantapur, ktm','Online',NULL,NULL,1,NULL,'2017-04-26 13:47:39','Shyam Krishna','','','22,23,24',NULL,'55632255','90');
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
) ENGINE=InnoDB AUTO_INCREMENT=431 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_auth`
--

LOCK TABLES `user_auth` WRITE;
/*!40000 ALTER TABLE `user_auth` DISABLE KEYS */;
INSERT INTO `user_auth` VALUES (2,2,4,1),(3,3,2,1),(4,4,2,1),(46,48,1,1),(47,48,2,1),(48,48,3,1),(49,48,4,1),(50,48,5,1),(51,48,6,1),(52,49,1,1),(53,49,2,1),(54,49,3,1),(55,50,1,1),(56,50,2,1),(57,50,3,1),(58,50,4,1),(59,50,5,1),(60,51,3,1),(61,51,4,1),(62,51,5,1),(63,52,4,1),(64,52,5,1),(65,52,6,1),(66,53,1,1),(67,53,2,1),(68,53,3,1),(108,54,1,1),(109,54,2,1),(110,54,3,1),(111,54,4,1),(112,54,5,1),(113,54,6,1),(114,54,7,1),(115,54,8,1),(120,55,1,1),(121,55,2,1),(122,55,3,1),(123,55,4,1),(149,56,1,1),(150,56,2,1),(151,56,3,1),(152,56,4,1),(153,56,5,1),(154,56,6,1),(155,56,7,1),(156,56,8,1),(157,56,9,1),(158,56,10,1),(159,56,11,1),(160,56,12,1),(161,56,13,1),(162,56,14,1),(163,57,1,1),(164,57,2,1),(165,57,3,1),(166,57,4,1),(167,57,9,1),(168,57,10,1),(169,57,11,1),(170,57,12,1),(171,57,13,1),(172,57,14,1),(299,1,1,1),(300,1,2,1),(301,1,3,1),(302,1,4,1),(331,59,1,1),(332,59,3,1),(333,59,4,1),(334,59,5,1),(335,58,12,1),(421,60,2,1),(422,60,4,1),(423,60,5,1),(424,60,12,1),(425,60,13,1),(426,60,15,1),(427,60,16,1),(428,60,18,1),(429,60,19,1),(430,60,20,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_branch`
--

LOCK TABLES `user_branch` WRITE;
/*!40000 ALTER TABLE `user_branch` DISABLE KEYS */;
INSERT INTO `user_branch` VALUES (1,1,5,1),(2,2,5,1),(3,3,6,1),(4,4,7,1),(25,48,8,1),(26,49,8,1),(27,50,7,1),(28,51,9,1),(29,52,8,1),(30,53,9,1),(31,54,16,1),(32,55,9,1),(33,56,12,1),(34,57,6,1),(35,58,16,1),(36,59,4,1),(37,60,7,1);
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
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `forgotten_password_time_UNIQUE` (`forgotten_password_time`),
  UNIQUE KEY `last_login_UNIQUE` (`last_login`),
  UNIQUE KEY `created_on_UNIQUE` (`created_on`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'administrator','59zE6QwGByDHk','Admin','istrator','admin@admin.com','Admin',NULL,'8798797','545645646','koteshwor',1,'127.0.0.1',NULL,NULL,NULL,NULL,'jbU1VZXXlRiniTmgj7xa4O',1493185596,'ADMIN',NULL,1),(2,'trainer','$2y$08$6YA8jRdEN2akIdhXPi2hsOSkzgth9T1CGsVFSF9cYZ2PitUlVV71q','Manish','Awale','trainer@trainer.com',NULL,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1491982112,1),(3,'counseller','$2y$08$3UP9HfgEJovsReTLWg7pIOrp5uIEIdujAbZH2xV.fEShmWxfy1iH6','Manish2','Awale2','counseller@trainer.com',NULL,NULL,'admin@admin.com','987654321','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1491984031,1),(4,'train','$2y$08$Ul//m0WbasNepurm1XZIBu0TdRoFqROTgVriznKadPewmgk.3YaQy','Manish','Awale','train@trainer.com',NULL,NULL,'5646456465','54456464564','bagmati',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1491984318,1),(48,'administator','$2y$08$GhgSSo2vMjKAFmit.Mkb6.2d9UmvDIcl3LtbEx51mfoo0DBIGcJgG','jackaaaa','Johnson','administator@administator.com',NULL,NULL,'9805362563','98562312552','huwaii',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492322329,1),(49,'janavi','$2y$08$hyNtWlmDxd9rm8hjzzmRJucDEEeLxMol8Pdt5SNvrmjikQ5EMX3hW','Janavi','shrestha','janavi@janavi.com',NULL,NULL,'5646456465','54456464564','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492329833,1),(50,'admsdfs','$2y$08$4zJzIU0eShbEsEdmjwqLvuXQy0ylTX5iARbxGEEdb7ek.x7YAmiqq','user1','user1','admsdfsdfsdfin@admin.com',NULL,NULL,'5646456465','54456464564','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492330462,1),(51,'staffsdfsdf','$2y$08$iPW/j8Zh/eamTeFWPlKm5OnOWNuVV0eIlxBfBYSeGOvTo.2X8mjGW','Jackie','Shroff','staffsdfsdfs@staff.com',NULL,NULL,'5646456465','54456464564','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492330506,1),(52,'stafdsfsdfsdff','$2y$08$10Xy/L3C3yGzQ7E/qlV8zuxoD8i1W3uc233G8rFGA3nDwLaZl1Gw.','hamro','nepal','stafdsfsdfsdff@staff.com',NULL,NULL,'5646456465','54456464564','nj-909 , west street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492330687,1),(53,'manu','$2y$08$AITT.PGJfcpJFfw7h.iQme.pOuVTBqeLOr7dhAIc15kERuIQchG9u','Manchester','United','manu@admin.com',NULL,NULL,'5646456465','435345345','new jersey',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,1492407320,NULL,1492330731,1),(54,'hitman','$2y$08$.QNwZYJEL5IZiKo1DAHxwOiBY3wKdb58lJodH.AFeO671lL3TZLQC','Hitman','Walesd','hitman@hitman.com',NULL,NULL,'05236523','9856324559','brisbane-street-34',1,'127.0.0.1',NULL,NULL,NULL,NULL,'v/9RICxUsehftnhTDN0cce',1492455471,NULL,1492419394,1),(55,'jimi','$2y$08$dclMZGLB9h00bdF2k8gU0.5R7MDF1AYDaRukQBifZyIyN49VMyIee','Jimi','Hendrix','jimi@jimi.com',NULL,NULL,'98563253','5236222325','Westhood-89 street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1492452332,1),(56,'alan','$2y$08$f5E0XyQVjG4DwCNG3/sRIO6LRBpTjEH5XsbPdRu9QGLkQjnjV.YPG','Alan Rana','Magar','aiptestuser@5music.top',NULL,NULL,'98655554','52485252574','nj-bris street',1,'127.0.0.1',NULL,NULL,NULL,NULL,NULL,1492597395,NULL,1492597251,1),(57,'darshan','$2y$08$sZMi.iqySrbH/OiN/6jmF.ii2d5b2b7I8L.yihxcK3hlKtviNkFG.','Darshan','Khadka','testpro@10host.top',NULL,NULL,'98655554','52485252574','nj-bris street',0,'127.0.0.1',NULL,'62496b24bf4d3d0a7b64afb47c9f3327f246e0d4','f.O0cQPp1dFS3qblj0mJGe2186d4d89396cfa70d',1492601653,NULL,NULL,NULL,1492599564,1),(58,'shawn','$2y$08$uDCDubrQW7.2Q8J/DF/8ieRVSQsgNzZgdcUQjPGCEwQ3Nm7JnAc9C','Shawn','Michael','aipedu@cloud99.top',NULL,NULL,'98655554','52485252574','nj-bris street',1,'127.0.0.1',NULL,NULL,'km4ta3hXepWy-9w91.0KNea0a02bd78c2ef4f9e4',1492665003,NULL,1492760881,NULL,1492662249,1),(59,'perception','$2y$08$41sKZYOQnJIlrNxbIeKQR.2tTNNryQierKeT3Emtu/uFQTwrP4q2u','Perception','Quales','perception0123@gmail.com',NULL,NULL,'98655554','52485252574','nj-bris street',1,'127.0.0.1',NULL,NULL,'FS.YElZb1ILPm3dm5tzYj.ac9cf55bf3879dd97f',1492667661,NULL,1492675105,NULL,1492665638,1),(60,'simplesdfsdfsd','$2y$08$nOEe9F3IlArjgtQR/g4ItukVOQiSmiExeVB22vyO16mJ746am1q.O','simple','planned','aipedutest@vpsorg.top',NULL,NULL,'98655554','52485252574','nj-bris street',1,'127.0.0.1',NULL,NULL,NULL,NULL,'.GsLXDk2ufcgjq0SWHU9ae',1493010763,NULL,1492676264,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (2,2,4),(4,4,2),(35,48,1),(36,49,4),(37,50,4),(38,51,4),(39,52,4),(49,3,2),(50,53,3),(57,54,6),(59,55,4),(60,56,8),(61,57,4),(73,58,5),(83,1,1),(99,59,5),(114,60,5);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usertracking`
--

DROP TABLE IF EXISTS `usertracking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usertracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(100) NOT NULL,
  `user_identifier` varchar(255) NOT NULL,
  `request_uri` text,
  `timestamp` varchar(20) NOT NULL,
  `client_ip` varchar(50) NOT NULL,
  `client_user_agent` text,
  `referer_page` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usertracking`
--

LOCK TABLES `usertracking` WRITE;
/*!40000 ALTER TABLE `usertracking` DISABLE KEYS */;
/*!40000 ALTER TABLE `usertracking` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-26 14:37:29
