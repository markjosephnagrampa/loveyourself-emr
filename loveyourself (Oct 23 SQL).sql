-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2016 at 09:40 PM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `CS128.1-16171-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('4af0c335b0b355de9d8d51d4e7c3a4e87cb0e181', '::1', 1473654029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333635343032393b),
('712f9e894e4cfa69574825faaedc120b40149dff', '::1', 1473665071, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333636353037313b),
('d6ca5c764ad5e99a95aa9621b6955d4e627bc132', '::1', 1473665480, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333636353438303b),
('c3385899b327537bfb7fc73b4488b84b78f48dfe', '::1', 1473665853, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333636353835333b),
('5b9f2063a329a60d8dea47ce854a7902bdb36115', '::1', 1473666198, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333636363139383b),
('b5e295b154dd0d5f6260b0de3129e1d1173a0f9e', '::1', 1473666748, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333636363734383b),
('8d5c632e5780ede139093b93cdb7c639ab751181', '::1', 1473667054, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333636373035343b),
('98b6d864c67255b5e9c8c0e0e75d36982f4fcb2c', '::1', 1473667369, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333636373336393b),
('e06f41bc5a618ff9fa71540459dbedaf95547889', '::1', 1473667690, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333636373639303b),
('32a9c62d1eaa12fd3bca817ea37d030d5def7954', '::1', 1473668421, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333636383432313b),
('dca3ee47bcdc91e8f9306b85cf600b00df335afa', '::1', 1473668818, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333636383831383b),
('9e3f2edf122ea2ab8545af05bec8d5b5f2d52e61', '::1', 1473669550, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333636393535303b),
('4cdc9906a0e14b64ebe5539a421f3caaa37729dc', '::1', 1473670305, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637303330353b),
('ffd637d10eb9a5c0c1d7a0ad72f415004a04c28a', '::1', 1473669889, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333636393838393b),
('1eb6079c3a804e0f310f8ff60d72392bcdd1e391', '::1', 1473670729, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637303732393b),
('9a3a7d74464d283066925229485931b5f805050a', '::1', 1473671129, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637313132393b73686f775f6c6f67696e7c733a31313a226c6f67696e5f6572726f72223b5f5f63695f766172737c613a313a7b733a31303a2273686f775f6c6f67696e223b733a333a226f6c64223b7d),
('770674c056c3ed064cba5cdbbc5812876c79e14a', '::1', 1473671440, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637313434303b6572726f727c733a31323a226c6f67696e206572726f7221223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('509d9364fbc4be02f2e3fa83d6d935bd8d03a775', '::1', 1473672193, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637323139333b6572726f727c733a31323a226c6f67696e206572726f7221223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('3531e6854bf42db5c0a706c832802698fe47b7c4', '::1', 1473672633, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637323633333b6572726f727c733a31323a226c6f67696e206572726f7221223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('270dcb05ac5f7f93e456fbadf33c036a17c53b84', '::1', 1473672970, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637323937303b),
('844f4b3e1d5b6e9649f5db6b2dc958ab682b937a', '::1', 1473673271, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637333237313b7573726e616d657c733a333a22776577223b5f5f63695f766172737c613a323a7b733a373a227573726e616d65223b733a333a226f6c64223b733a353a226572726f72223b733a333a226f6c64223b7d6572726f727c733a31323a226c6f67696e206572726f7221223b),
('b25079b868c93175bb770b731f25f21ca0323e2c', '::1', 1473674095, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637343039353b),
('7a545c1001b8765d5ea302c2988ebb1b3c860d93', '::1', 1473675810, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637353831303b6572726f727c733a31323a226c6f67696e206572726f7221223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('d9272e0847e514ff2ab8782e04eadaf6805c2e98', '::1', 1473676370, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637363131333b7573726e616d657c733a353a22726f6d656f223b5f5f63695f766172737c613a313a7b733a373a227573726e616d65223b733a333a226f6c64223b7d),
('db212e6022d4f9c1224471758479742f4a257a1b', '::1', 1473676113, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637363131333b7573726e616d657c733a363a22776577736461223b5f5f63695f766172737c613a313a7b733a373a227573726e616d65223b733a333a226e6577223b7d),
('9b6d6015565d92aa8ef2a8e421be06a12c051b5d', '::1', 1473677794, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637373739343b),
('c782bb1972235f5266f2e40a2857e54dfc5acee8', '::1', 1473678121, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637383132313b7573725f6572726f727c733a32363a22536f7272792c207573657220646f65736e27742065786973742e223b5f5f63695f766172737c613a313a7b733a393a227573725f6572726f72223b733a333a226e6577223b7d),
('3a89ff231ee609c0a1c6f52e83c093986c2ceb6d', '::1', 1473678436, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637383433363b),
('c89e2507d3d47bad38e0222d5f8551b393b30b2d', '::1', 1473678793, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637383739333b),
('ed03dc95c7978a56b35329631d227730499e7c47', '::1', 1473679115, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637393131353b),
('70e74e5a2dfec8e7da28daf8d59e56a8e17ac546', '::1', 1473679468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637393436383b7573725f6572726f727c733a32363a22536f7272792c207573657220646f65736e27742065786973742e223b5f5f63695f766172737c613a313a7b733a393a227573725f6572726f72223b733a333a226e6577223b7d),
('9120eda8cd5b23d7506171f41f576f15e3c23fc7', '::1', 1473679882, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333637393838323b7573726e616d657c733a353a22726f6d656f223b),
('11e9967f973063d6b99574feb7acc39da5c35e77', '::1', 1473680186, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333638303138363b7573726e616d657c733a353a22726f6d656f223b),
('6f3c775fdb23db75a3220e30174d842cf50573ba', '::1', 1473681245, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333638313234353b7573726e616d657c733a353a22726f6d656f223b),
('07d9e050250f8b4c79823004dd2aa40ddf10a1b4', '::1', 1473682532, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333638323533323b6e6f74696669636174696f6e7c733a32333a22596f7520617265206e6f77206c6f67676564206f757421223b5f5f63695f766172737c613a313a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b7d),
('f354d4ab50a0b0a3c06a7c4866daf5a9af6a63e4', '::1', 1473683180, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333638333138303b),
('a06fcdc4bca191a2702f0bbdc3c06b16d9417834', '::1', 1473686607, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333638363630373b),
('25178e279d378490ee416a48970689ff0901be03', '::1', 1473686915, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333638363931353b),
('f4bfb33454c5f79b579761e059ec989f78761264', '::1', 1473687329, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333638373332393b),
('ef0a04a204f6cbe836da5bf611d76ff06d1be8ce', '::1', 1473687659, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333638373635393b7573726e616d657c4e3b5f5f63695f766172737c613a313a7b733a31313a226c6f67696e5f6572726f72223b733a333a226f6c64223b7d6c6f67696e5f6572726f727c733a31323a226c6f67696e206572726f7221223b),
('fdb259bd3ea4d8481f2504857ba2ba54cc6f1f86', '::1', 1473689022, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333638393032323b7573726e616d657c4e3b),
('e2a493d8f0ff42d5a63cfcccd9b4d6adc359fdb0', '::1', 1473689641, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333638393634313b6c6f67696e5f70726f686962697465647c733a34323a22596f75206d757374206265206c6f6767656420696e20746f20616363657373207468697320736974652e223b5f5f63695f766172737c613a313a7b733a31363a226c6f67696e5f70726f68696269746564223b733a333a226f6c64223b7d),
('b5c9cd3fbd6c6acbf57fa73e4b64ea1fd299b967', '::1', 1473691450, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333639313435303b),
('8def2f27c03c2e1c809090539ab091a17c4e19ec', '::1', 1473691516, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333639313435303b),
('03ae0d08193dff57ea465424f60818d697338bc8', '::1', 1473694003, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333639333731393b),
('6e4b4be68bba8b81afe47e6109bf13e757cf2b8e', '::1', 1473694056, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437333639343035323b);

-- --------------------------------------------------------

--
-- Table structure for table `non_first_timer`
--

CREATE TABLE IF NOT EXISTS `non_first_timer` (
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `month_of_birth` int(2) NOT NULL,
  `day_of_birth` int(2) NOT NULL,
  `year_of_birth` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `non_first_timer`
--

INSERT INTO `non_first_timer` (`first_name`, `middle_name`, `last_name`, `month_of_birth`, `day_of_birth`, `year_of_birth`) VALUES
('romeo', 'romeo', 'romeo', 1, 1, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `patient_counselor_record`
--

CREATE TABLE IF NOT EXISTS `patient_counselor_record` (
  `patient_id` int(8) NOT NULL,
  `staff_id` int(5) NOT NULL,
  `clinical_picture` tinyint(1) NOT NULL COMMENT '0-Asymptomatic 1-Symptomatic',
  `clinical_picture_ssx` varchar(50) NOT NULL,
  `clinical_picture_who_staging` varchar(50) NOT NULL,
  PRIMARY KEY (`patient_id`,`staff_id`),
  KEY `patient_id` (`patient_id`,`staff_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_counselor_record`
--

INSERT INTO `patient_counselor_record` (`patient_id`, `staff_id`, `clinical_picture`, `clinical_picture_ssx`, `clinical_picture_who_staging`) VALUES
(1, 2, 1, 'Intensive Bleeding and Pale Skin', 'Stage 1'),
(2, 6, 0, 'Severe swelling of genital glands', ''),
(3, 2, 1, 'Cervical Cancer', 'Stage 3');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_record`
--

CREATE TABLE IF NOT EXISTS `patient_history_record` (
  `patient_id` int(8) NOT NULL,
  `had_blood_transfusion` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `had_blood_transfusion_year` int(4) NOT NULL,
  `injected_drugs` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `injected_drugs_year` int(4) NOT NULL,
  `accidental_needle_prick` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `accidental_needle_prick_year` int(4) NOT NULL,
  `sexually_transmitted_infections` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `sexually_transmitted_infections_year` int(4) NOT NULL,
  `sex_female_without_condom` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `sex_female_without_condom_year` int(4) NOT NULL,
  `sex_male_without_condom` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `sex_male_without_condom_year` int(4) NOT NULL,
  `sex_with_prostitute` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `sex_with_prostitute_year` int(4) NOT NULL,
  `sex_for_payment` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `sex_for_payment_year` int(4) NOT NULL,
  PRIMARY KEY (`patient_id`),
  KEY `patient_id` (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_record`
--

INSERT INTO `patient_history_record` (`patient_id`, `had_blood_transfusion`, `had_blood_transfusion_year`, `injected_drugs`, `injected_drugs_year`, `accidental_needle_prick`, `accidental_needle_prick_year`, `sexually_transmitted_infections`, `sexually_transmitted_infections_year`, `sex_female_without_condom`, `sex_female_without_condom_year`, `sex_male_without_condom`, `sex_male_without_condom_year`, `sex_with_prostitute`, `sex_with_prostitute_year`, `sex_for_payment`, `sex_for_payment_year`) VALUES
(1, 1, 2000, 1, 2001, 1, 2002, 1, 2003, 1, 2004, 1, 2005, 1, 2006, 1, 2007),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2007),
(3, 1, 2012, 1, 2013, 0, 0, 0, 0, 1, 2014, 1, 2015, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_medtech_record`
--

CREATE TABLE IF NOT EXISTS `patient_medtech_record` (
  `patient_id` int(8) NOT NULL,
  `staff_id` int(5) NOT NULL,
  `hiv_proficiency_number` varchar(20) NOT NULL,
  `month_issued` int(2) NOT NULL,
  `day_issued` int(2) NOT NULL,
  `year_issued` int(4) NOT NULL,
  `month_expired` int(2) NOT NULL,
  `day_expired` int(2) NOT NULL,
  `year_expired` int(4) NOT NULL,
  PRIMARY KEY (`patient_id`,`staff_id`),
  KEY `patient_id` (`patient_id`,`staff_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_medtech_record`
--

INSERT INTO `patient_medtech_record` (`patient_id`, `staff_id`, `hiv_proficiency_number`, `month_issued`, `day_issued`, `year_issued`, `month_expired`, `day_expired`, `year_expired`) VALUES
(1, 5, 'AB-0987-C-6543', 2, 14, 2015, 2, 14, 2016),
(2, 5, 'CD-0987-C-6543', 3, 16, 2014, 3, 17, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `patient_mother_record`
--

CREATE TABLE IF NOT EXISTS `patient_mother_record` (
  `patient_id` int(8) NOT NULL,
  `mother_first_name` varchar(20) NOT NULL,
  `mother_middle_name` varchar(20) NOT NULL,
  `mother_last_name` varchar(20) NOT NULL,
  `mother_hiv_infected` tinyint(1) NOT NULL,
  PRIMARY KEY (`patient_id`),
  KEY `patient_id` (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_mother_record`
--

INSERT INTO `patient_mother_record` (`patient_id`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `mother_hiv_infected`) VALUES
(1, 'Maria', 'Cristina', 'Lopez', 0),
(2, 'Gisilfrid', 'Slavko', 'Brune', 1),
(3, 'Nikolai', 'Aruzhan', 'Gerstle', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_reason_record`
--

CREATE TABLE IF NOT EXISTS `patient_reason_record` (
  `patient_id` int(8) NOT NULL,
  `mother_infected_hiv` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `partner_infected_hiv` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `needle_share_idu` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `accidental_needle_prick` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `physician_recommended` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `insurance_requirement` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `for_blood_transfusion` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `know_hiv_status` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `recheck_prev_hiv_result` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `employment_local` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `employment_abroad` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `female_pregnant` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `tb_patient` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `active_hepatitis` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `no_particular_reason` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `specify_other` varchar(50) NOT NULL,
  PRIMARY KEY (`patient_id`),
  UNIQUE KEY `patient_id` (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_reason_record`
--

INSERT INTO `patient_reason_record` (`patient_id`, `mother_infected_hiv`, `partner_infected_hiv`, `needle_share_idu`, `accidental_needle_prick`, `physician_recommended`, `insurance_requirement`, `for_blood_transfusion`, `know_hiv_status`, `recheck_prev_hiv_result`, `employment_local`, `employment_abroad`, `female_pregnant`, `tb_patient`, `active_hepatitis`, `no_particular_reason`, `specify_other`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Curiosity'),
(2, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, ''),
(3, 0, 0, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1, 'n/a');

-- --------------------------------------------------------

--
-- Table structure for table `patient_record`
--

CREATE TABLE IF NOT EXISTS `patient_record` (
  `patient_id` int(8) NOT NULL,
  `patient_reference_code` varchar(8) NOT NULL,
  `philhealth_number` varchar(12) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `mother_index` varchar(2) NOT NULL,
  `father_index` varchar(2) NOT NULL,
  `birth_order` varchar(2) NOT NULL,
  `month_of_birth` int(2) NOT NULL,
  `day_of_birth` int(2) NOT NULL,
  `year_of_birth` int(4) NOT NULL,
  `age` int(3) NOT NULL,
  `age_in_months` int(2) NOT NULL,
  `sex` varchar(1) NOT NULL COMMENT 'm-male f-female',
  `permanent_address` varchar(75) NOT NULL,
  `residence_municipality_city` varchar(30) NOT NULL,
  `residence_province` varchar(30) NOT NULL,
  `birth_municipality_city` varchar(30) NOT NULL,
  `birth_province` varchar(30) NOT NULL,
  `contact_numbers` text NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `highest_educational_attainment` tinyint(1) NOT NULL COMMENT '1-None 2-Highschool 3-Vocational 4-Elementary 5-College 6-Post-Graduate',
  `civil_status` tinyint(1) NOT NULL COMMENT '1-Single 2-Married 3-Separated 4-Widowed',
  `living_with_partner` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `number_of_children` int(3) NOT NULL,
  `presently_pregnant` varchar(3) NOT NULL COMMENT 'no yes n/a',
  `current_occupation` varchar(50) NOT NULL,
  `prev_occupation` varchar(50) NOT NULL,
  `work_abroad` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `work_abroad_month` int(2) NOT NULL,
  `work_abroad_year` int(4) NOT NULL,
  `work_abroad_based` tinyint(1) NOT NULL COMMENT '0-On a ship 1-Land',
  `work_abroad_country` varchar(50) NOT NULL,
  `sex_partner_female_number` int(5) NOT NULL,
  `sex_partner_female_year` int(4) NOT NULL,
  `sex_partner_male_number` int(5) NOT NULL,
  `sex_partner_male_year` int(4) NOT NULL,
  `hiv_test_before` tinyint(1) NOT NULL COMMENT '0-No 1-Yes',
  `hiv_test_before_month` int(2) NOT NULL,
  `hiv_test_before_year` int(4) NOT NULL,
  `hiv_test_before_facility` varchar(50) NOT NULL,
  `hiv_test_before_municipality_city` varchar(30) NOT NULL,
  `hiv_test_before_result` tinyint(1) NOT NULL COMMENT '0-Negative 1-Positive',
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_record`
--

INSERT INTO `patient_record` (`patient_id`, `patient_reference_code`, `philhealth_number`, `first_name`, `middle_name`, `last_name`, `mother_index`, `father_index`, `birth_order`, `month_of_birth`, `day_of_birth`, `year_of_birth`, `age`, `age_in_months`, `sex`, `permanent_address`, `residence_municipality_city`, `residence_province`, `birth_municipality_city`, `birth_province`, `contact_numbers`, `email_address`, `nationality`, `highest_educational_attainment`, `civil_status`, `living_with_partner`, `number_of_children`, `presently_pregnant`, `current_occupation`, `prev_occupation`, `work_abroad`, `work_abroad_month`, `work_abroad_year`, `work_abroad_based`, `work_abroad_country`, `sex_partner_female_number`, `sex_partner_female_year`, `sex_partner_male_number`, `sex_partner_male_year`, `hiv_test_before`, `hiv_test_before_month`, `hiv_test_before_year`, `hiv_test_before_facility`, `hiv_test_before_municipality_city`, `hiv_test_before_result`) VALUES
(1, '12345678', '123456789012', 'Juan', 'dela', 'Cruz', 'ma', 'mr', '12', 11, 22, 1994, 18, 0, 'm', '9553 THEATRE DR. GREER, SC 29650', 'Istanbul', 'Turkey', 'Rio de Janeiro', 'Brazil', '8751234', 'jdelacruz01@gmail.com', 'German', 1, 1, 0, 12, 'n/a', 'n/a', 'Barista', 1, 10, 2000, 0, 'South Korea', 2, 2001, 0, 0, 1, 10, 2013, 'Love Yourself Anglo', 'Mandaluyong', 0),
(2, '87654321', '098765432109', 'Vasanta', 'Savino', 'Mancuso', 'Gi', 'Ve', '2', 1, 2, 2015, 0, 11, 'f', '2626 Burwell Heights Road, Beaumont, Texas', 'Beaumont', 'Texas', 'Abilene', 'Texas', '8191716', 'vasantamancuso1@gmail.com', 'Filipino', 3, 1, 1, 2, 'yes', 'Accountant', 'n/a', 1, 2, 2013, 1, 'United States of America', 0, 0, 7, 2015, 1, 3, 2007, 'Loveyourself Uni', 'Metro Manila', 1),
(3, 'ABCDEFGH', '111111111111', 'Lilian', 'Katarina', 'Dioli', 'Ni', 'Ga', '4', 12, 6, 1997, 19, 0, 'f', '756 South County St. \r\nCuyahoga Falls, OH 44221', 'Ohio', 'Florida', 'Guangzhou', 'China', '1231231231', 'liliandioli@rocketmail.com', 'Chinese', 6, 3, 1, 7, 'no', 'Professor', 'n/a', 1, 2, 2011, 0, 'Spain', 0, 0, 1, 2016, 1, 10, 2013, 'AIDS Society of the Philippines', 'Quezon', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_saccl_record`
--

CREATE TABLE IF NOT EXISTS `patient_saccl_record` (
  `patient_id` int(8) NOT NULL,
  `staff_id` int(5) NOT NULL,
  `saccl_lab_code` varchar(10) NOT NULL,
  `month_hiv_confirmed` int(2) NOT NULL,
  `day_hiv_confirmed` int(2) NOT NULL,
  `year_hiv_confirmed` int(4) NOT NULL,
  `saccl_test` tinyint(1) NOT NULL,
  PRIMARY KEY (`patient_id`,`staff_id`),
  KEY `patient_id` (`patient_id`,`staff_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_saccl_record`
--

INSERT INTO `patient_saccl_record` (`patient_id`, `staff_id`, `saccl_lab_code`, `month_hiv_confirmed`, `day_hiv_confirmed`, `year_hiv_confirmed`, `saccl_test`) VALUES
(1, 1, 'SACCL12345', 9, 23, 2016, 0),
(2, 1, 'SACCL54321', 9, 20, 2016, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_record`
--

CREATE TABLE IF NOT EXISTS `staff_record` (
  `staff_id` int(5) NOT NULL,
  `testing_facility_id` int(2) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `staff_profession` tinyint(1) NOT NULL COMMENT '1-Admin 2-Counselor 3-Nurse 4-Physician 5-Medtech',
  `staff_password` varchar(32) NOT NULL,
  `sex` varchar(32) NOT NULL,
  `month_of_birth` int(2) NOT NULL,
  `day_of_birth` int(2) NOT NULL,
  `year_of_birth` int(4) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  PRIMARY KEY (`staff_id`,`testing_facility_id`),
  KEY `testing_facility_id` (`testing_facility_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_record`
--

INSERT INTO `staff_record` (`staff_id`, `testing_facility_id`, `first_name`, `middle_name`, `last_name`, `staff_profession`, `staff_password`, `sex`, `month_of_birth`, `day_of_birth`, `year_of_birth`, `email_address`, `contact_number`) VALUES
(1, 1, 'Mark', 'Lavena', 'Devin', 1, 'admin', 'M', 1, 2, 1990, 'iamfayealano@gmail.com', '09241219987'),
(2, 1, 'Divya', 'Putra', 'Dunst', 2, 'counselor', 'F', 2, 3, 1991, 'lopezabegaillyn@gmail.com', '09444540876'),
(3, 1, 'Jyrgal', 'Halcyon', 'Westenberg', 3, 'nurse', 'F', 3, 4, 1992, 'rvaldez0317@gmail.com', '09341219978'),
(4, 1, 'Arachne', 'Alysia', 'Courtemanche', 4, 'physician', 'M', 4, 5, 1993, 'marknagrampa489@gmail.com', '09684541133'),
(5, 1, 'Hildur', 'Katlego', 'Quinlan', 5, 'medtech', 'M', 5, 6, 1994, 'hkq44@outlook.com', '09138878877'),
(6, 2, 'Aemiliana', 'Marijke', 'Ryer', 2, 'counselor', 'F', 6, 7, 1995, 'aemilianaMarijkeRyer@mail.com', '09149969696');

-- --------------------------------------------------------

--
-- Table structure for table `testing_facility_record`
--

CREATE TABLE IF NOT EXISTS `testing_facility_record` (
  `testing_facility_id` int(2) NOT NULL,
  `facility_name` varchar(50) NOT NULL,
  `hiv_eqas_lab_code` varchar(20) NOT NULL,
  `hiv_eqas_last_year` int(4) NOT NULL,
  `mailing_address` varchar(75) NOT NULL,
  `contact_numbers` int(11) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  PRIMARY KEY (`testing_facility_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing_facility_record`
--

INSERT INTO `testing_facility_record` (`testing_facility_id`, `facility_name`, `hiv_eqas_lab_code`, `hiv_eqas_last_year`, `mailing_address`, `contact_numbers`, `email_address`) VALUES
(1, 'Love Yourself Uni', 'AB-1234-CD-U', 2012, 'LM Building 2nd floor 2028 Unit B,Taft Avenue', 1555123456, 'loveyourself@gmail.com'),
(2, 'Love Yourself Anglo', 'AB-45678-CD-A', 2013, '715-A Shaw Blvd, Mandaluyong, 1552 Metro Manila', 1555123456, 'loveyourself@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `staff_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`staff_id`, `password`) VALUES
('romeo', 'romeo'),
('ADM-1212', 'romeo'),
('NUR-1212', 'romeo'),
('ADM-1212', 'aa'),
('CNS-1212', 'romeo'),
('MDT-1212', 'romeo'),
('PHY-1212', 'romeo');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_record`
--

CREATE TABLE IF NOT EXISTS `visitor_record` (
  `patient_id` int(8) NOT NULL,
  `patient_reference_code` varchar(8) NOT NULL,
  `philhealth_number` varchar(12) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `mother_first_name` varchar(20) NOT NULL,
  `mother_middle_name` varchar(20) NOT NULL,
  `mother_last_name` varchar(20) NOT NULL,
  `mother_index` varchar(2) NOT NULL,
  `father_index` varchar(2) NOT NULL,
  `birth_order` varchar(2) NOT NULL,
  `month_of_birth` int(2) NOT NULL,
  `day_of_birth` int(2) NOT NULL,
  `year_of_birth` int(4) NOT NULL,
  `age` int(3) NOT NULL,
  `age_in_months` int(2) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `permanent_address` varchar(75) NOT NULL,
  `residence_municipality_city` varchar(30) NOT NULL,
  `residence_province` varchar(30) NOT NULL,
  `birth_municipality_city` varchar(30) NOT NULL,
  `birth_province` varchar(30) NOT NULL,
  `contact_numbers` varchar(11) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `highest_educational_attainment` tinyint(1) NOT NULL,
  `civil_status` tinyint(1) NOT NULL,
  `living_with_partner` tinyint(1) NOT NULL,
  `number_of_children` int(3) NOT NULL,
  `presently_pregnant` varchar(3) NOT NULL,
  `current_occupation` varchar(50) NOT NULL,
  `prev_occupation` varchar(50) NOT NULL,
  `work_abroad` tinyint(1) NOT NULL,
  `work_abroad_month` int(2) NOT NULL,
  `work_abroad_year` int(4) NOT NULL,
  `work_abroad_based` tinyint(1) NOT NULL,
  `work_abroad_country` varchar(50) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_record`
--

INSERT INTO `visitor_record` (`patient_id`, `patient_reference_code`, `philhealth_number`, `first_name`, `middle_name`, `last_name`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `mother_index`, `father_index`, `birth_order`, `month_of_birth`, `day_of_birth`, `year_of_birth`, `age`, `age_in_months`, `sex`, `permanent_address`, `residence_municipality_city`, `residence_province`, `birth_municipality_city`, `birth_province`, `contact_numbers`, `email_address`, `nationality`, `highest_educational_attainment`, `civil_status`, `living_with_partner`, `number_of_children`, `presently_pregnant`, `current_occupation`, `prev_occupation`, `work_abroad`, `work_abroad_month`, `work_abroad_year`, `work_abroad_based`, `work_abroad_country`) VALUES
(1, '12345678', '123456789012', 'Juan', 'dela ', 'Cruz', 'Maria', 'Cristina', 'Lopez', 'Ma', 'Mr', '1', 11, 22, 1994, 18, 0, 'm', '9553 Theatre Dr. Greer, SC 29650', 'Istanbul', 'Turkey', 'Rio de Janeiro', 'Brazil', '8751234', 'jdelacruz01@gmail.com', 'German', 1, 1, 0, 12, 'n/a', 'n/a', 'Barista', 1, 10, 2000, 0, 'South Korea'),
(2, '87654321', '098765432109', 'Vasanta', 'Savino', 'Mancuso', 'Gisilfrid', 'Slavko', 'Brune', 'Gi', 'Ve', '2', 1, 1, 2015, 0, 11, 'f', '2626 Burwell Heights Road, Beaumont, Texas', 'Beaumont', 'Texas', 'Abilene', 'Texas', '8191716', 'vasantamancuso1@gmail.com', 'Filipino', 3, 1, 1, 2, 'yes', 'Accountant', 'n/a', 1, 2, 2013, 1, 'United States of America');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient_counselor_record`
--
ALTER TABLE `patient_counselor_record`
  ADD CONSTRAINT `patient_counselor_record_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff_record` (`staff_id`),
  ADD CONSTRAINT `patient_counselor_record_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient_record` (`patient_id`);

--
-- Constraints for table `patient_history_record`
--
ALTER TABLE `patient_history_record`
  ADD CONSTRAINT `patient_history_record_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_record` (`patient_id`);

--
-- Constraints for table `patient_medtech_record`
--
ALTER TABLE `patient_medtech_record`
  ADD CONSTRAINT `patient_medtech_record_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff_record` (`staff_id`),
  ADD CONSTRAINT `patient_medtech_record_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient_record` (`patient_id`);

--
-- Constraints for table `patient_mother_record`
--
ALTER TABLE `patient_mother_record`
  ADD CONSTRAINT `patient_mother_record_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_record` (`patient_id`);

--
-- Constraints for table `patient_reason_record`
--
ALTER TABLE `patient_reason_record`
  ADD CONSTRAINT `patient_reason_record_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_record` (`patient_id`);

--
-- Constraints for table `patient_saccl_record`
--
ALTER TABLE `patient_saccl_record`
  ADD CONSTRAINT `patient_saccl_record_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff_record` (`staff_id`),
  ADD CONSTRAINT `patient_saccl_record_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient_record` (`patient_id`);

--
-- Constraints for table `staff_record`
--
ALTER TABLE `staff_record`
  ADD CONSTRAINT `staff_record_ibfk_1` FOREIGN KEY (`testing_facility_id`) REFERENCES `testing_facility_record` (`testing_facility_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
