-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 03:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obis`
--

-- --------------------------------------------------------

--
-- Table structure for table `abkd_bucal2_tbl`
--

CREATE TABLE `abkd_bucal2_tbl` (
  `id` int(255) NOT NULL,
  `quarter` varchar(100) NOT NULL,
  `ordinance(b1)` varchar(100) NOT NULL,
  `fund_allocation(b2)` varchar(100) NOT NULL,
  `distribution_center(b3)` varchar(100) NOT NULL,
  `distribution_iec_material_(c1)` varchar(100) NOT NULL,
  `anti_dengue_campaign(c2)` varchar(100) NOT NULL,
  `clean_up_drive(c3)` varchar(100) NOT NULL,
  `ol_trap_system_applicaton(c4)` varchar(100) NOT NULL,
  `number_dengue_case` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `abkd_bucal2_tbl`
--

INSERT INTO `abkd_bucal2_tbl` (`id`, `quarter`, `ordinance(b1)`, `fund_allocation(b2)`, `distribution_center(b3)`, `distribution_iec_material_(c1)`, `anti_dengue_campaign(c2)`, `clean_up_drive(c3)`, `ol_trap_system_applicaton(c4)`, `number_dengue_case`, `remarks`, `year`, `brgy_code`) VALUES
(24, '1', 'b1', 'b2', 'b3', 'c1', 'c2', 'c3', '4 times a month and i time in week', 'case', 'remarks', '2019', 'BC1'),
(25, '2', '\\', '\\', '\\', '\\', '', '', '', '', '', '2018', 'BC2'),
(26, '2', '\\', '', '', '', '\\', '', '\\', '\\', '', '2018', 'BC1'),
(27, '4', 'b1', 'b2', 'b3', 'c1', '', '', '', '', '', '2018', 'BC2'),
(28, '2', 'wrgw', 'bwrbrew', 'rbreber', 'berber', 'erberb', 'enern', 'ernerner', '', '', '2019', 'BC2'),
(29, '2', 'wb', 'wbew', '', 'bewb', 'breb', 'erberb', 'cacas', '', '', '2019', 'BC2'),
(30, '3', 'bfb', '', '', '', '', '', '', '', 'monthly1 tests', '2019', 'BC1'),
(31, '1', 'bdbb', 'eabaerb', 'aerbreab', 'brwb', 'rebrEB', '', '', 'vwvw', 'RW', '2019', 'BC1'),
(33, '1', 'bdbb', 'eabaerb', 'rrr', 'brwb', 'rebrEB', '', '', '', '', '2019', 'BC1'),
(34, '2', 'bdbb', 'eee', '', '', '', '', '', '', '', '2019', 'BC2'),
(35, '1', 'q', 'w', 'e', 'r', 't', 'y', 'u', 'io', '', '2019', 'BC2'),
(36, '3', 'q', '', 'e', '', 'thank u', '', 'Ayos to', 'io', 'OK na', '2019', 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `first_name`, `last_name`, `middle_name`, `email`, `username`, `password`, `token`) VALUES
(1, 'Ericson', 'Limpasan', 'M', 'ericsonlimpasan@gmail.com', 'admininobis', '$2a$12$qSRdqaEN2ex.jDD1jnyi1.gWhsSDERy4Wo50UdDfy.QQmdsLhp0Ny', '');

-- --------------------------------------------------------

--
-- Table structure for table `bcpc_tbl`
--

CREATE TABLE `bcpc_tbl` (
  `id` int(255) NOT NULL,
  `aipcode` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `implemetingoffice` varchar(255) NOT NULL,
  `quarter1` decimal(10,2) NOT NULL,
  `quarter2` decimal(10,2) NOT NULL,
  `quarter3` decimal(10,2) NOT NULL,
  `quarter4` decimal(10,2) NOT NULL,
  `year` int(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bcpc_tbl`
--

INSERT INTO `bcpc_tbl` (`id`, `aipcode`, `program`, `implemetingoffice`, `quarter1`, `quarter2`, `quarter3`, `quarter4`, `year`, `brgy_code`) VALUES
(1, 'fb', 'abafb', 'bsbfa', '221.00', '121.00', '121.00', '212.00', 2019, 'BC1'),
(2, '', '', 'pwd of bucal2', '222.00', '1.00', '333.00', '5.00', 2020, 'BC2'),
(3, '333333', 'grwbbreb', 'bwrbrwbrwb', '1.00', '2.00', '3.00', '5.00', 2021, 'BC2'),
(5, '333333', 'vfv3r', 'v3v', '3.00', '2.00', '1.00', '0.00', 2022, 'BC1'),
(6, 'test1ok', '', '', '100.00', '0.00', '0.00', '0.00', 2023, 'BC2'),
(7, 'test2ko', '', '', '0.00', '0.00', '200.00', '0.00', 2019, 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `bdf_tbl`
--

CREATE TABLE `bdf_tbl` (
  `id` int(255) NOT NULL,
  `aip` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `implemetationoffice` varchar(100) NOT NULL,
  `sdate` varchar(100) NOT NULL,
  `cdate` varchar(100) NOT NULL,
  `ExpectedOutput` varchar(100) NOT NULL,
  `FundingSource` varchar(100) NOT NULL,
  `ps` decimal(10,2) NOT NULL,
  `mooe` decimal(10,2) NOT NULL,
  `capital` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `climateadapt` varchar(100) NOT NULL,
  `climatemitigation` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bdf_tbl`
--

INSERT INTO `bdf_tbl` (`id`, `aip`, `program`, `implemetationoffice`, `sdate`, `cdate`, `ExpectedOutput`, `FundingSource`, `ps`, `mooe`, `capital`, `total`, `climateadapt`, `climatemitigation`, `year`, `brgy_code`) VALUES
(1, 'Social Services (3000)', '- Construction/ Improvement/ Rehabilitation of Multi-Purpose Hall', 'SB', 'JAN', 'DEC', 'Comfortable multi-purpose hall', '20% BDF', '0.00', '55000.00', '0.00', '55000.00', 'A424-03', '', 2019, 'BC2'),
(2, 'Social Services (4000)', '- Maintenance of CCTV Camera', 'SB', 'JAN', 'DEC', 'Comfortable multi-purpose hall', '20% BDF', '0.00', '55000.00', '0.00', '55000.00', 'A424-03', '', 2019, 'BC2'),
(4, 'Economic Services (8000)', 'Livelihood Program/ Candle making and other related products', 'SB', 'JAN', 'DEC', 'Additional income to help them up post their everyday living', '20% BDF', '0.00', '10.00', '0.00', '10.00', 'A4AAAA', 'A4BBBB', 2021, 'BC1'),
(5, 'Other Services (9000)', 'Maintenance of cleanliness of the Barangay / Waste Segregation', 'SB', 'JAN', 'DEC', 'Maintained cleanliness', '20% BDF', '0.00', '40000.00', '0.00', '40000.00', '', '', 2021, 'BC2'),
(7, 'Other Services (9000)', 'Implementation of flood control project such as de-clogging of canal', 'SB', 'JAN', 'DEC', 'Flood Free barangay', '20% BDF', '0.00', '60000.00', '0.00', '60000.00', 'A221-01', 'A221-01', 2020, 'BC2'),
(8, 'AS@ghhg', 'egewgwewe', 'bwebe', '', '', '', '', '0.00', '0.00', '0.00', '0.00', '', '', 2019, 'BC1'),
(9, 'AS@ghhg', 'egewgwewe', 'bwrbrwbrwb', 'bsdbsd', '', '', '', '0.00', '0.00', '0.00', '0.00', '', '', 2019, 'BC1'),
(10, 'Social Services (3000)', ' CCTV Camera', 'SB', 'JAN', 'OCT', 'multi-purpose hall', '20% BDF', '0.00', '0.00', '0.00', '0.00', 'test1', 'test1ok', 2020, 'BC1');

-- --------------------------------------------------------

--
-- Table structure for table `bdrrmf_a_tbl`
--

CREATE TABLE `bdrrmf_a_tbl` (
  `id` int(255) NOT NULL,
  `aipcode` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `implementoffice` varchar(100) NOT NULL,
  `starteddate` varchar(100) NOT NULL,
  `completiondate` varchar(100) NOT NULL,
  `expectedoutput` varchar(100) NOT NULL,
  `fundsource` varchar(100) NOT NULL,
  `personalservice` decimal(10,2) NOT NULL,
  `mooe` decimal(10,2) NOT NULL,
  `capital` decimal(10,2) NOT NULL,
  `totalbudgetallocation` decimal(10,2) NOT NULL,
  `year` int(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bdrrmf_a_tbl`
--

INSERT INTO `bdrrmf_a_tbl` (`id`, `aipcode`, `program`, `implementoffice`, `starteddate`, `completiondate`, `expectedoutput`, `fundsource`, `personalservice`, `mooe`, `capital`, `totalbudgetallocation`, `year`, `brgy_code`) VALUES
(2, '', 'Seminar/ Training', 'SB', 'JAN', 'NOV', 'Trained Officials', '5% BDRRMF', '100.50', '0.00', '0.00', '57531.70', 2019, ''),
(3, 'test2ok', 'Seminar/ Training', 'SB', 'JAN', 'JAN', 'Trained Officials', '5% BDRRMF', '12500.00', '0.00', '0.00', '57531.70', 2019, 'BC1'),
(4, 'Social Services (3000)', 'test1', 'SB', '', '', '', '', '0.00', '0.00', '100.00', '1000.00', 2019, 'BC1'),
(5, 'Social Services (3000)test1', ' CCTV Camera', 'test1ok', 'JAN', 'OCT', '', '', '0.00', '0.00', '0.00', '1000.00', 2019, 'BC1');

-- --------------------------------------------------------

--
-- Table structure for table `bdrrmf_b_tbl`
--

CREATE TABLE `bdrrmf_b_tbl` (
  `id` int(255) NOT NULL,
  `aipcode` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `implementoffice` varchar(100) NOT NULL,
  `starteddate` varchar(100) NOT NULL,
  `completiondate` varchar(100) NOT NULL,
  `expectedoutput` varchar(100) NOT NULL,
  `fundsource` varchar(100) NOT NULL,
  `personalservice` decimal(10,2) NOT NULL,
  `mooe` decimal(10,2) NOT NULL,
  `capital` decimal(10,2) NOT NULL,
  `totalbudgetallocation` decimal(10,2) NOT NULL,
  `year` int(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bdrrmf_b_tbl`
--

INSERT INTO `bdrrmf_b_tbl` (`id`, `aipcode`, `program`, `implementoffice`, `starteddate`, `completiondate`, `expectedoutput`, `fundsource`, `personalservice`, `mooe`, `capital`, `totalbudgetallocation`, `year`, `brgy_code`) VALUES
(1, '1000 AIP', 'Medical Assistance Program', '', '', '', 'Provide medical assistance during calamity', '5% BDRRMF', '10000.00', '0.00', '15000.00', '24188.15', 2019, 'BC1'),
(2, 'test2', 'secondtest', '', '', '', '', '20% BDF ok', '0.00', '0.00', '0.00', '0.00', 2019, 'BC1');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_bucal1_tbl`
--

CREATE TABLE `brgy_bucal1_tbl` (
  `brgy_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `bod` date NOT NULL,
  `birth_of_place` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `highest_education` varchar(255) NOT NULL,
  `course_school` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `brgy_code` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgy_bucal2_tbl`
--

CREATE TABLE `brgy_bucal2_tbl` (
  `brgy_id` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `bod` date NOT NULL,
  `birth_of_place` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `highest_education` varchar(255) NOT NULL,
  `course_school` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `brgy_code` varchar(100) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brgy_bucal2_tbl`
--

INSERT INTO `brgy_bucal2_tbl` (`brgy_id`, `first_name`, `last_name`, `middle_name`, `gender`, `age`, `bod`, `birth_of_place`, `address`, `email`, `contact_no`, `religion`, `civil_status`, `highest_education`, `course_school`, `occupation`, `brgy_code`, `barangay`, `position`, `picture`) VALUES
('122490', 'TROJAN CARLO', 'ESEQUE', 'R', 'Male', 29, '1281-08-08', 'Margondon', 'Cavite', 'melendez@gmail.com', '09829819291', 'Islam', 'Single', 'GRADUATE', 'Cavite', 'none', 'BC2', 'Bucal 2', 'Punong Barangay', '7465download.jpg'),
('122491', 'EDMUNDO', 'SISAYAN', 'ARANDIA', 'Male', 28, '1999-07-24', 'Margondon', 'Cavite', 'melendez_Vincent@gmail.com', '09899876688', 'Islam', 'Single', 'GRADUATE', 'CvSu', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 1', '3570images.jpg'),
('122492', 'MARLO', 'NOVELO', 'ANGLO', 'Male', 28, '1998-12-07', 'Margondon', 'Cavite', 'Bethanie@gmail.com', '098342397283', 'Iglesia ni Cristo', 'Single', 'POST GRADUATE', 'CvSu', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 2', '6126images.png'),
('122493', 'Radhika', 'Millar', 'Millar', 'Male', 24, '1992-02-08', 'Margondon', 'Cavite', 'Millar@gmail.com', '09829127823', 'Roman Catholic Christianity', 'Single', 'GRADUATE', 'CvSu', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 3', '5742images.jpg'),
('122494', 'WILFREDO', 'PESCASIO', 'SISAYAN', 'Male', 34, '2001-06-25', 'Margondon', 'Cavite', 'Cameron_Vincent@gmail.com', '099999999999', 'Others', 'Married', 'COLLEGE', 'CvSu', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 4', '3457download (1).png'),
('122495', 'NELSON', 'ANCAYAN', 'BALLECER', 'Male', 26, '1992-01-31', 'Margondon', 'Cavite', 'melendez_Maisie@gmail.com', '0999882716262', 'Roman Catholic Christianity', 'Single', 'GRADUATE', 'CvSu', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 5', '4769images (2).png'),
('122496', 'DEXTER LEE', 'DIROY', 'CASTRONUEVO', 'Male', 26, '1992-12-09', 'Margondon', 'Cavite', 'Trejo@gmail.com', '092171726534', 'Protestant Christianity', 'Single', 'GRADUATE', 'Cavite', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 6', '7371download.png'),
('122497', 'ABNER', 'GELANGA', 'DE LEON', 'Male', 37, '1992-04-24', 'Margondon', 'Cavite', 'OReilly@gmail.com', '09972616235', 'Protestant Christianity', 'Single', 'UNDER GRADUATE', 'Cavite', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 7', '9587download.jpg'),
('122498', 'EDITIIA', 'CASAUL', 'ANGELES', 'Female', 26, '1991-12-08', 'Margondon', 'Cavite', 'Arellano@gmail.com', '09872681872', 'Islam', 'Single', 'UNDER GRADUATE', 'Cavite', 'none', 'BC2', 'Bucal 2', 'SK Chairman', '9979download (1).png'),
('122499', 'NEIL CARLO', 'DE LEON', 'R', 'Male', 32, '1989-07-08', 'Margondon', 'Cavite', 'BuckleyTrejo@gmail.com', '09972616235', 'Others', 'Married', 'COLLEGE', 'Cavite, Maragondon', 'none', 'BC2', 'Bucal 2', 'Treasurer', '1888download.png'),
('122500', 'Maisie', 'Arellano', 'Arellano', 'Female', 27, '1991-12-08', 'Margondon', 'Cavite', 'Arellano@gmail.com', '09829819291', 'Roman Catholic Christianity', 'Single', 'UNDER GRADUATE', 'CvSu', 'none', 'BC2', 'Bucal 2', 'Secretary', '4861images (1).png'),
('190980', 'Miah', 'Barrow', 'b', 'Female', 24, '1643-04-12', 'Maragondon', 'Maragondon', 'Mia@gmail.com', '09972616235', 'Roman Catholic Christianity', 'Single', 'UNDER GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Punong Barangay', 'download (1).png'),
('190981', 'Julien', 'Mcguire', 'M', 'Female', 30, '1988-07-08', 'Maragondon', 'Maragondon', 'Julien@gmail.com', '09972616235', 'Roman Catholic Christianity', 'Single', 'UNDER GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 1', '5bf6205ccdceac2fa460d4cbc17828ba.jpg'),
('190982', 'Mert', 'Mcdonald', 'MM', 'Male', 28, '1990-12-08', 'Maragondon', 'Maragondon', 'Mert@gmail.com', '09972616235', 'Protestant Christianity', 'Single', 'POST GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 2', 'images (2).jpg'),
('190983', 'Taryn', 'Lutz', 'L', 'Female', 28, '1991-05-07', 'Maragondon', 'Maragondon', 'Taryn@gmail.com', '', 'Islam', 'Married', 'COLLEGE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 3', '9679images.jpg'),
('190984', 'Shola', 'Stanley', 'SS', 'Female', 21, '1999-02-07', 'Maragondon', 'Maragondon', 'SholaShola@gmail.com', '', 'Iglesia ni Cristo', 'Single', 'HIGH SCHOOL', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 4', '9260download.jpg'),
('190985', 'Nazifa', 'Boyer', 'NB', 'Female', 29, '1682-08-08', 'Maragondon', 'Maragondon', 'Nazifa@gmail.com', '', 'Roman Catholic Christianity', 'Single', 'UNDER GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 5', '7635images.png'),
('190986', 'Tammy', 'Mcfarland', 'TM', 'Male', 35, '1991-04-21', 'Maragondon', 'Maragondon', 'Tammy@gmail.com', '', 'Roman Catholic Christianity', 'Single', 'UNDER GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 6', 'images (3).jpg'),
('190987', 'Kaif ', 'Merritt', 'DS', 'Male', 28, '1990-02-16', 'Maragondon', 'Maragondon', 'Kalf@gmail.com', '', 'Iglesia ni Cristo', 'Single', 'UNDER GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 7', '2D-thumb.jpg'),
('190988', 'Juan', 'Barker', 'vfa', 'Female', 28, '1982-06-09', 'Maragondon', 'Maragondon', 'Mia@gmail.com', '', 'Roman Catholic Christianity', 'Single', 'POST GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'SK Chairman', '1814images.jpg'),
('190989', 'Tammy', 'Barker', 'Bark', 'Male', 28, '1911-12-08', 'Maragondon', 'Maragondon', 'Nazifa@gmail.com', '', 'Roman Catholic Christianity', 'Single', 'UNDER GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Treasurer', '6039images (3).jpg'),
('190990', 'Pysmon', 'Linz', 'Lins', 'Male', 20, '1998-08-19', 'Cavite', 'Maragondon', 'Linz@yahoo.com', '', 'Others', 'Single', 'ELEMENTARY', 'None', 'None', 'BC1', 'Bucal 1', 'Secretary', '6429images (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_code_tbl`
--

CREATE TABLE `brgy_code_tbl` (
  `id` int(100) NOT NULL,
  `brgy_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brgy_code_tbl`
--

INSERT INTO `brgy_code_tbl` (`id`, `brgy_name`, `address`, `brgy_code`) VALUES
(1, 'Bucal 1', 'Maragondon', 'BC1'),
(2, 'Bucal 2', 'Maragondon', 'BC2'),
(3, 'Bucal 3A', 'Maragondon', 'BC3A'),
(4, 'Bucal 3B', 'Maragondon', 'BC3B'),
(5, 'Bucal 4A', 'Maragondon', 'BC4A'),
(6, 'Bucal 4B', 'Maragondon', 'BC4B'),
(7, 'Caingin Pob.', 'Maragondon', 'CP'),
(8, 'Garita 1A', 'Maragondon', 'G1A'),
(9, 'Garita 1B', 'Maragondon', 'G1B'),
(10, 'Layong Mabilog', 'Maragondon', 'LM'),
(11, 'Mabato', 'Maragondon', 'MB'),
(12, 'Pantihan 1', 'Maragondon', 'PT1'),
(13, 'Pantihan 2', 'Maragondon', 'PT2'),
(14, 'Pantihan 3', 'Maragondon', 'PT3'),
(15, 'Pantihan 4', 'Maragondon', 'PT4'),
(16, 'Sta. Mercedes', 'Maragondon', 'STM'),
(17, 'Pinagsanhan A', 'Maragondon', 'PSA'),
(18, 'Pinagsanhan B', 'Maragondon', 'PSB'),
(19, 'Poblacion 1A', 'Maragondon', 'PB1A'),
(20, 'Poblacion 1B', 'Maragondon', 'PB1B'),
(21, 'Poblacion 2A', 'Maragondon', 'PB2A'),
(22, 'Poblacion 2B', 'Maragondon', 'PB2B'),
(23, 'San Miguel A', 'Maragondon', 'SMA'),
(24, 'San Miguel B', 'Maragondon', 'SMB'),
(25, 'Talipusngo', 'Maragondon', 'TLP'),
(26, 'Tulay Silangan', 'Maragondon', 'TSM'),
(27, 'Tulay Kanluran', 'KANLURAN', 'TKM');

-- --------------------------------------------------------

--
-- Table structure for table `cms_table`
--

CREATE TABLE `cms_table` (
  `id` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `published_date` text NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cms_table`
--

INSERT INTO `cms_table` (`id`, `title`, `author`, `published_date`, `content1`, `content2`, `image`) VALUES
(8, 'Nickelback', 'MEMEMEMME', '2018-12-01', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen \r\nbook. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'default_sitemap_style.jpg'),
(9, 'Murder', 'DILG', '2018-12-08', 'oegonwopmgopepvm[emvp[mwepvwvw', 'moprejaopgnobmpeambope', '9dca553d17c7ba6c3fad3dbe76c44e87.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gad_a_tbl`
--

CREATE TABLE `gad_a_tbl` (
  `id` int(11) NOT NULL,
  `gadissue` int(11) NOT NULL,
  `program` int(11) NOT NULL,
  `performancetarget` int(11) NOT NULL,
  `accomplishment` int(11) NOT NULL,
  `gadbudget` int(11) NOT NULL,
  `gadexpenditure` int(11) NOT NULL,
  `remarks` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kp_bucal2_tbl_c1`
--

CREATE TABLE `kp_bucal2_tbl_c1` (
  `id` int(255) NOT NULL,
  `criminal(2a.1)` varchar(100) NOT NULL,
  `civil(2a.2)` varchar(100) NOT NULL,
  `others(2a.3)` varchar(100) NOT NULL,
  `totals(2a.4)` varchar(100) NOT NULL,
  `mediation_(2b.1)` varchar(100) NOT NULL,
  `concillation_(2b.2)` varchar(100) NOT NULL,
  `arbitrition_(2b.3)` varchar(100) NOT NULL,
  `total_(2b.4)` varchar(100) NOT NULL,
  `repudiated_cases_(2c.1)` varchar(100) NOT NULL,
  `withdrawn_cases_(2c.2)` varchar(100) NOT NULL,
  `pending_cases_(2c.3)` varchar(100) NOT NULL,
  `dismissed_cases_(2c.4)` varchar(100) NOT NULL,
  `certified_cases_(2c.5)` varchar(100) NOT NULL,
  `reffered_agencies_(2c.6)` varchar(100) NOT NULL,
  `total_(2c.7)` varchar(100) NOT NULL,
  `estimated_savings` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kp_bucal2_tbl_c1`
--

INSERT INTO `kp_bucal2_tbl_c1` (`id`, `criminal(2a.1)`, `civil(2a.2)`, `others(2a.3)`, `totals(2a.4)`, `mediation_(2b.1)`, `concillation_(2b.2)`, `arbitrition_(2b.3)`, `total_(2b.4)`, `repudiated_cases_(2c.1)`, `withdrawn_cases_(2c.2)`, `pending_cases_(2c.3)`, `dismissed_cases_(2c.4)`, `certified_cases_(2c.5)`, `reffered_agencies_(2c.6)`, `total_(2c.7)`, `estimated_savings`, `month`, `year`, `brgy_code`) VALUES
(5, '1', '2', '3', '4', '5', '6', '7', '8', '9', '', '', '', '', '', '', '', 'February', '2020', 'BC2'),
(6, '100', '111', '75', '111', '111', '90', '', '', '', '', '', '', '', '', '', '', 'December', '2019', 'BC1');

-- --------------------------------------------------------

--
-- Table structure for table `kp_bucal2_tbl_c2`
--

CREATE TABLE `kp_bucal2_tbl_c2` (
  `id` int(255) NOT NULL,
  `physical_abuse` varchar(100) NOT NULL,
  `sexual_abuse` varchar(100) NOT NULL,
  `physcological_abuse` varchar(100) NOT NULL,
  `economic_abuse` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `refferred_dswdo` varchar(100) NOT NULL,
  `refferred_pnp` varchar(100) NOT NULL,
  `refferred_court` varchar(100) NOT NULL,
  `issued_bpo` varchar(100) NOT NULL,
  `refferred_medical` varchar(100) NOT NULL,
  `total_vawc_case` varchar(100) NOT NULL,
  `training` varchar(100) NOT NULL,
  `iec` varchar(100) NOT NULL,
  `funds_allocated` varchar(100) NOT NULL,
  `funds_remarks` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kp_bucal2_tbl_c2`
--

INSERT INTO `kp_bucal2_tbl_c2` (`id`, `physical_abuse`, `sexual_abuse`, `physcological_abuse`, `economic_abuse`, `total`, `refferred_dswdo`, `refferred_pnp`, `refferred_court`, `issued_bpo`, `refferred_medical`, `total_vawc_case`, `training`, `iec`, `funds_allocated`, `funds_remarks`, `month`, `year`, `brgy_code`) VALUES
(1, '3', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', 'December', '2019', 'BC2'),
(3, '33', '32', '31', '', '', '', '', '', '', '', '', '', '', '', '', 'February', '2019', 'BC2'),
(4, '12', '12', '12', '12', '55', '23', '23', '23', '23', '23', '23', '33', '33', '33', '33', 'February', '2020', 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_p1_bucal2_tbl`
--

CREATE TABLE `monthly_p1_bucal2_tbl` (
  `id` int(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `on_going_status` varchar(100) NOT NULL,
  `completed_status` varchar(100) NOT NULL,
  `started_date` date NOT NULL,
  `completed date` date NOT NULL,
  `project_cost` varchar(100) NOT NULL,
  `funds` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `monthly_p1_bucal2_tbl`
--

INSERT INTO `monthly_p1_bucal2_tbl` (`id`, `description`, `on_going_status`, `completed_status`, `started_date`, `completed date`, `project_cost`, `funds`, `remarks`, `month`, `year`, `brgy_code`) VALUES
(2, 'Cleaning ', 'do', 'doing', '1889-07-09', '1998-07-10', '10,000', 'DILG', 'Complete', 'January', '2019', ''),
(3, 'Cleaning ', 'do', 'doing', '9119-12-07', '1123-01-27', '100,000', 'DILG', 'COMPLETE', 'January', '2019', ''),
(4, 'monthly1 testsssss', 'monthly1 testsssss', '', '0000-00-00', '0000-00-00', 'monthly1 testssss', 'monthly1 testssss', 'monthly1 testssss', 'December', '2019', ''),
(5, 'test1ok', '', '', '0003-06-06', '0003-02-23', '', '', '', 'February', '2019', ''),
(6, 'test1ok', '', '', '0000-00-00', '0000-00-00', '', '', '', 'February', '2019', 'BC2'),
(7, '', 'test1ok', '', '0000-00-00', '0000-00-00', '', '', '', 'January', '2019', 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_p2_bucal2_tbl`
--

CREATE TABLE `monthly_p2_bucal2_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `order_no` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `no` int(100) NOT NULL,
  `date_conducted` date NOT NULL,
  `no_present` int(100) NOT NULL,
  `no_absent` int(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `monthly_p2_bucal2_tbl`
--

INSERT INTO `monthly_p2_bucal2_tbl` (`id`, `title`, `order_no`, `description`, `remarks`, `type`, `no`, `date_conducted`, `no_present`, `no_absent`, `month`, `year`, `brgy_code`) VALUES
(3, 'Monitoring', '21', 'Monitoring Level', 'Complete', 'Voluntarys', 56, '2019-02-01', 45, 22, 'February', '2019', ''),
(4, 'vvvv', 'vvvv', 'vvvv', 'monthly1 testssss', 'vvvvvv', 223, '2018-12-31', 23, 23, 'December', '2019', ''),
(5, 'vvvv', '', '', '', '', 0, '0000-00-00', 0, 0, 'October', '2021', ''),
(6, 'test2ok', '', '', '', '', 0, '0000-00-00', 0, 0, 'March', '2019', 'BC2'),
(7, '', 'test2ok', '', '', '', 0, '0000-00-00', 0, 0, 'March', '2019', 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_p3_bucal2_tbl`
--

CREATE TABLE `monthly_p3_bucal2_tbl` (
  `id` int(255) NOT NULL,
  `dispute` varchar(100) NOT NULL,
  `filed` int(100) NOT NULL,
  `settled` int(100) NOT NULL,
  `reffered` int(100) NOT NULL,
  `withdraw` int(100) NOT NULL,
  `monthly` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `monthly_p3_bucal2_tbl`
--

INSERT INTO `monthly_p3_bucal2_tbl` (`id`, `dispute`, `filed`, `settled`, `reffered`, `withdraw`, `monthly`, `year`, `brgy_code`) VALUES
(2, 'Criminal', 31, 1, 2, 2, 'January', '2019', ''),
(3, 'Drugs', 11, 2, 4, 2, 'January', '2019', ''),
(4, 'dvv', 32, 23, 4, 2, 'January', '2019', ''),
(5, 'dvv', 32, 23, 4, 2, 'October', '2019', ''),
(6, '3ok', 1, 0, 0, 0, 'April', '2019', 'BC2'),
(7, 'ok', 31, 0, 0, 0, 'April', '2019', 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `pdp_tbl`
--

CREATE TABLE `pdp_tbl` (
  `id` int(255) NOT NULL,
  `aip_reference` varchar(100) NOT NULL,
  `program_project` varchar(255) NOT NULL,
  `funding` varchar(100) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `year` int(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pdp_tbl`
--

INSERT INTO `pdp_tbl` (`id`, `aip_reference`, `program_project`, `funding`, `amount`, `year`, `brgy_code`) VALUES
(1, '3001', 'Monitoring', 'SB', '23450.97', 2019, ''),
(3, '', '* Rehabilitation/ Construction/ Maintenance of Barangay Hall', 'SBSB', '55000.00', 2019, ''),
(4, '3001ok', 'Monitoring', 'SB', '1000.00', 2019, 'BC2'),
(5, 'Social Services (3000)', 'test1ok', '20% BDF', '1000.00', 2019, 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `pops_a_tbl`
--

CREATE TABLE `pops_a_tbl` (
  `id` int(255) NOT NULL,
  `ppsa` varchar(255) NOT NULL,
  `ImplementingOffice` varchar(255) NOT NULL,
  `Started` varchar(255) NOT NULL,
  `Completed` varchar(255) NOT NULL,
  `ExpectedOutput` varchar(255) NOT NULL,
  `FundingSource` varchar(255) NOT NULL,
  `ps` decimal(10,2) NOT NULL,
  `mooe` decimal(10,2) NOT NULL,
  `co` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pops_a_tbl`
--

INSERT INTO `pops_a_tbl` (`id`, `ppsa`, `ImplementingOffice`, `Started`, `Completed`, `ExpectedOutput`, `FundingSource`, `ps`, `mooe`, `co`, `total`, `title`, `year`, `brgy_code`) VALUES
(1, 'Maintenance of CCTV Cameras', 'Sangguniang Barangay, PNP', 'January 2019', 'December 2019', 'Established monitoring system and footages for incidents', 'Barangay Fund', '30000.00', '0.00', '0.00', '30000.00', 'Crime Disorder', 2019, 'BC2'),
(2, 'Ronda Patrol', 'Sangguniang Barangay, PNP', 'January 2019 (Continuous)', 'December 2019', 'Security BPATS', 'N/A', '0.00', '0.00', '0.00', '0.00', 'Crime Disorder', 2019, 'BC2'),
(3, 'Drug Testing ', 'Sangguniang Barangay, Maragondon PNP, DILG', 'October 2019', 'December 2019', 'Drug cleared barangay', 'Barangay Fund', '1.00', '1.00', '1.00', '1.00', 'Illegal Drugs', 2019, ''),
(4, 'Reconstruction and Strengthening of BADAC', 'Sangguniang Barangay, Maragondon PNP, DILG', 'January 2019', 'April 2019', 'EO for the reconstruction of BADAC', 'N/A', '0.00', '10000.00', '0.00', '10000.00', 'Illegal Drugs', 2019, ''),
(7, 'vav', 'bwrbrwbrwb', 'bsdbsd', 'bwb', 'bsbd', '', '0.00', '0.00', '0.00', '0.00', '', 2019, ''),
(8, 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', '0.00', '0.00', '0.00', '0.00', 'test1', 2019, ''),
(9, 'test1ok', 'test1ok', 'test1ok', 'test1ok', 'test1ok', 'test1ok', '0.00', '0.00', '0.00', '0.00', 'test1ok', 2019, 'BC2'),
(10, 'test1ok', '', '', '', '', '', '0.00', '0.00', '0.00', '0.00', 'test1ok', 2019, 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `pops_b_tbl`
--

CREATE TABLE `pops_b_tbl` (
  `id` int(255) NOT NULL,
  `ppsa` varchar(255) NOT NULL,
  `ImplementingOffice` varchar(255) NOT NULL,
  `Started` varchar(255) NOT NULL,
  `Completed` varchar(255) NOT NULL,
  `ExpectedOutput` varchar(255) NOT NULL,
  `FundingSource` varchar(255) NOT NULL,
  `ps` decimal(10,2) NOT NULL,
  `mooe` decimal(10,2) NOT NULL,
  `co` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pops_b_tbl`
--

INSERT INTO `pops_b_tbl` (`id`, `ppsa`, `ImplementingOffice`, `Started`, `Completed`, `ExpectedOutput`, `FundingSource`, `ps`, `mooe`, `co`, `total`, `title`, `year`, `brgy_code`) VALUES
(1, 'Training/Seminar in Disaster Preparedness', 'Sangguniang Barangay ', 'May 2019', 'May 2019', 'Conduct Seminar', 'Barangay Fund', '0.00', '5000.00', '0.00', '5000.00', 'READDINES DURING DISASTERS', 2019, 'BC2'),
(2, 'Rehabilitation of Barangay Road', 'Sangguniang Barangay CITMO', 'May 2019', 'May 2019', 'Rehabilitated  Road', 'N/A', '1.00', '1.00', '1.02', '1.02', 'Road and vehicle safety', 2019, ''),
(3, 'test2ok', 'test2ok', 'test2ok', 'test2ok', 'test2ok', 'test2ok', '0.00', '0.00', '0.00', '0.00', 'test2ok', 2019, 'BC2'),
(4, 'test2', 'test2', 'test2', 'test2', 'test2', 'test2ok', '0.00', '0.00', '0.00', '0.00', 'test2ok', 2019, 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `pwd_tbl`
--

CREATE TABLE `pwd_tbl` (
  `id` int(255) NOT NULL,
  `aipcode` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `implemetingoffice` varchar(255) NOT NULL,
  `quarter1` decimal(10,2) NOT NULL,
  `quarter2` decimal(10,2) NOT NULL,
  `quarter3` decimal(10,2) NOT NULL,
  `quarter4` decimal(10,2) NOT NULL,
  `year` int(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pwd_tbl`
--

INSERT INTO `pwd_tbl` (`id`, `aipcode`, `program`, `implemetingoffice`, `quarter1`, `quarter2`, `quarter3`, `quarter4`, `year`, `brgy_code`) VALUES
(2, 'pwd', 'Medical Supplies and Miscellaneous Expenses', 'pwd of bucal2', '100.00', '200.00', '300.00', '400.00', 2019, 'BC2'),
(3, 'pwd', 'iobweoibinwvsav', 'pwd of bucal2', '0.00', '0.00', '0.00', '0.00', 2019, 'BC2'),
(5, 'aca', 'ntdmrtmdfmdtd', 'vwev', '0.00', '0.00', '0.00', '0.00', 2019, 'BC1'),
(6, 'test1', 'test1', 'test1', '0.00', '0.00', '0.00', '0.00', 2019, 'BC2'),
(7, 'test1', 'test1', 'test1', '0.00', '0.00', '0.00', '0.00', 2019, 'BC1'),
(8, 'test1ok', '', '', '0.00', '0.00', '0.00', '0.00', 2019, 'BC2'),
(9, 'test1ok', 'test1ok', '', '0.00', '0.00', '0.00', '0.00', 2019, 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `reference_file_tbl`
--

CREATE TABLE `reference_file_tbl` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title`, `description`, `file`, `date`, `month`, `sender`) VALUES
(1, 'GAD report', 'lnvpjglnlamvwoewmvlmwepov', 'questionaires.docx', '2019-01-05', 'January 2019', 'BC2'),
(2, 'kp', 'ybyv', 'AKSYON-BARANGAY-KONTRA-DENGUE-ABKD-1st-Qtr-2016.xlsx', '2019-01-16', 'January 2019', 'BC2'),
(3, 'GAD', 'FUND REPORT OF 2019', 'kpvawc-1.xls', '2019-01-30', 'January 2019', 'BC1'),
(4, 'KP', 'KPVAW FOR 2019', '9719kpvawc-1.xls', '2019-01-30', 'January 2019', 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `residents_tbl`
--

CREATE TABLE `residents_tbl` (
  `id` int(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bod` date NOT NULL,
  `house_no` int(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `residents_tbl`
--

INSERT INTO `residents_tbl` (`id`, `first_name`, `last_name`, `middle_name`, `gender`, `bod`, `house_no`, `street`, `religion`, `status`, `brgy_code`) VALUES
(17, 'Ericson', 'Limpasan', 'Mamad', 'Male', '1995-09-15', 14, 'Tuba', 'Iglesia ni Cristo', 'Single', 'BC1'),
(18, 'Jonel', 'Esidera', 'Gomez', 'Male', '1999-08-09', 49, 'Tabi', 'Iglesia ni Cristo', 'Single', 'BC1'),
(19, 'Ryan', 'Deleon', 'GnG', 'Male', '1998-05-04', 45, 'Tabi', 'Roman Catholic Christianity', 'Single', 'BC2'),
(20, 'fwqfw', 'febe', 'bfbefwb', 'Female', '1998-09-07', 12, 'sws', 'Protestant Christianity', 'Married', 'BC2'),
(21, 'Jaime', 'Davison', 'D', 'Male', '1928-09-24', 12, 'tuna', 'Protestant Christianity', 'Single', 'BC2'),
(22, 'Eshaan', 'Rigby', 'R', 'Female', '1988-03-12', 11, 'tuna', 'Others', 'Married', 'BC2'),
(23, 'Ellenor', 'Steadman', 'SE', 'Female', '1981-02-09', 45, 'tuna', 'Iglesia ni Cristo', 'Single', 'BC2'),
(24, 'Elana ', 'Byrne', 'D', 'Male', '1983-07-09', 42, 'tuna', 'Islam', 'Married', 'BC2'),
(25, 'Darla ', 'Cope', 'C', 'Male', '1986-12-07', 52, 'tuna', 'Islam', 'Married', 'BC2'),
(26, 'Freddy ', 'Mccartney', 'D', 'Male', '1911-07-08', 44, 'tuna', 'Roman Catholic Christianity', 'Single', 'BC2'),
(27, 'Esme ', 'Higgs', 'SE', 'Female', '1722-08-11', 71, 'tuna', 'Protestant Christianity', 'Married', 'BC2'),
(28, 'Demi-Leigh', 'Best', 'FG', 'Male', '1878-12-08', 23, 'tuna', 'Protestant Christianity', 'Married', 'BC2'),
(29, 'Brayden', 'Shea', 'Shaes', 'Male', '1222-07-08', 49, 'tuna', 'Protestant Christianity', 'Separated ', 'BC2'),
(30, 'Balraj ', 'Flowers', 'Flo', 'Male', '1972-08-02', 58, 'tuna', 'Roman Catholic Christianity', 'Single', 'BC2'),
(31, 'Shelbie ', 'Underwood', 'Und', 'Female', '1981-07-29', 121, 'tuna', 'Iglesia ni Cristo', 'Married', 'BC2'),
(32, 'Billy ', 'Leal', 'Lb', 'Male', '1999-06-18', 23, 'tuna', 'Protestant Christianity', 'Married', 'BC2'),
(33, 'Samira ', 'Meyers', 'MS', 'Male', '1888-09-11', 354, 'tuna', 'Iglesia ni Cristo', 'Married', 'BC2'),
(34, 'Eoin ', 'Cuevas', 'CIl', 'Male', '1982-07-08', 79, 'tuna', 'Others', 'Single', 'BC2'),
(35, 'Bartosz ', 'Lewis', 'LM', 'Male', '1879-12-09', 12, 'tuna', 'Islam', 'Married', 'BC1'),
(36, 'Magnus ', 'Cortez', 'MC', 'Female', '7612-08-01', 47, 'tuna', 'Others', 'Married', 'BC2'),
(37, 'Pedro', 'Penduko', 'Pen Pen', 'Male', '1999-07-01', 89, 'Santolan', 'Others', 'Married', 'BC2'),
(38, 'Juan', 'Tamad', 'Sipag', 'Male', '1991-08-28', 120, 'Santolan', 'Iglesia ni Cristo', 'Married', 'BC2'),
(39, 'Pedro', 'Penduko', 'Pen Pen', 'Female', '1112-12-15', 12, 'Santolan', 'Roman Catholic Christianity', 'Single', 'BC2'),
(40, 'Pedro', 'Penduko', 'Pen Pen', 'Female', '1112-12-15', 12, 'Santolan', 'Roman Catholic Christianity', 'Single', 'BC2'),
(41, 'Pedro', 'Penduko', 'Pen Pen', 'Female', '1112-12-15', 12, 'Santolan', 'Roman Catholic Christianity', 'Widowed', 'BC2'),
(42, 'Juan', 'Penduko', 'Pen Pen', 'Male', '7711-03-09', 222, 'Santolan', 'Others', 'Single', 'BC2'),
(43, 'Juan tamads', 'Penduko', 'Pen Pen disaperen', 'Male', '2019-03-09', 2147483647, 'Santolan', 'Others', 'Single', 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `sc_tbl`
--

CREATE TABLE `sc_tbl` (
  `id` int(255) NOT NULL,
  `aipcode` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `implemetingoffice` varchar(255) NOT NULL,
  `quarter1` decimal(10,2) NOT NULL,
  `quarter2` decimal(10,2) NOT NULL,
  `quarter3` decimal(10,2) NOT NULL,
  `quarter4` decimal(10,2) NOT NULL,
  `year` int(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sc_tbl`
--

INSERT INTO `sc_tbl` (`id`, `aipcode`, `program`, `implemetingoffice`, `quarter1`, `quarter2`, `quarter3`, `quarter4`, `year`, `brgy_code`) VALUES
(4, 'pwd', 'LOREMhibbwvbi iH(hiwhqin ', 'bdb', '222.90', '1.04', '3.00', '5.06', 2019, 'BC2'),
(5, 'pwd', ' Food supplies, Uniform and Miscellaneous Expenses.', 'bdb', '222.90', '103.00', '3333.80', '23434.00', 2019, 'BC2'),
(6, '7861', 'Cleaning', 'Barangay Bucal 22', '22.00', '100.00', '500.80', '5.00', 2019, 'BC2'),
(7, 'test2ok', 'test2ok', 'test2ok', '0.00', '0.00', '0.00', '0.00', 2019, 'BC2'),
(8, 'test2ok', '', '', '0.00', '0.00', '0.00', '0.00', 2019, 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `sk_tbl`
--

CREATE TABLE `sk_tbl` (
  `id` int(255) NOT NULL,
  `gap_issues` varchar(255) NOT NULL,
  `p_a_d` varchar(255) NOT NULL,
  `result_target` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `source` varchar(100) NOT NULL,
  `implementantion` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `total_budget` decimal(10,2) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sk_tbl`
--

INSERT INTO `sk_tbl` (`id`, `gap_issues`, `p_a_d`, `result_target`, `amount`, `source`, `implementantion`, `year`, `total_budget`, `brgy_code`) VALUES
(6, 'bdsbsdb', 'sdbsbsdb  ', 'sdbsd', '164.30', 'SB DILG', '', 2019, '1222.90', 'BC2'),
(7, 'Low environmental concern of youth', '            Environmental Awareness \r\nA.KKKKKKKKKKKKKKKKK ', '', '10000.00', '', '', 2019, '1222.92', 'BC2'),
(8, 'test1ok', 'test1ok', 'test1ok', '0.00', '', '', 2019, '0.00', 'BC2'),
(9, 'test1ok2', ' ', '', '0.00', '', '', 2019, '0.00', 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `user_account_tbl`
--

CREATE TABLE `user_account_tbl` (
  `id` int(100) NOT NULL,
  `brgy_id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `registration_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `brgy_name` varchar(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_account_tbl`
--

INSERT INTO `user_account_tbl` (`id`, `brgy_id`, `username`, `password`, `email`, `contactno`, `registration_date`, `status`, `brgy_name`, `brgy_code`) VALUES
(29, 122500, 'qwertyuiop1', '$2y$10$Ym0QMWHK9Ep8SGNJQVwh6emnT1DAA0A.DD4V27HIwrrbgA3bVZzFK', 'elimpasan@gmail.com', '09972616234', '2019-01-29', 'ACTIVE', 'Bucal 2', 'BC2'),
(31, 190990, 'bucal1secretary', '$2y$10$DCT6PefDPkhh5lqOsQtAA.lOs9S4KCOdRslOByawkDGloW0B864x2', 'ericsonlimpasan@gmail.com', '09972616235', '2019-01-29', 'ACTIVE', 'Bucal 1', 'BC1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abkd_bucal2_tbl`
--
ALTER TABLE `abkd_bucal2_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bcpc_tbl`
--
ALTER TABLE `bcpc_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bdf_tbl`
--
ALTER TABLE `bdf_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bdrrmf_a_tbl`
--
ALTER TABLE `bdrrmf_a_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bdrrmf_b_tbl`
--
ALTER TABLE `bdrrmf_b_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_bucal1_tbl`
--
ALTER TABLE `brgy_bucal1_tbl`
  ADD PRIMARY KEY (`brgy_id`);

--
-- Indexes for table `brgy_bucal2_tbl`
--
ALTER TABLE `brgy_bucal2_tbl`
  ADD PRIMARY KEY (`brgy_id`);

--
-- Indexes for table `brgy_code_tbl`
--
ALTER TABLE `brgy_code_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_table`
--
ALTER TABLE `cms_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gad_a_tbl`
--
ALTER TABLE `gad_a_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kp_bucal2_tbl_c1`
--
ALTER TABLE `kp_bucal2_tbl_c1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kp_bucal2_tbl_c2`
--
ALTER TABLE `kp_bucal2_tbl_c2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_p1_bucal2_tbl`
--
ALTER TABLE `monthly_p1_bucal2_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_p2_bucal2_tbl`
--
ALTER TABLE `monthly_p2_bucal2_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_p3_bucal2_tbl`
--
ALTER TABLE `monthly_p3_bucal2_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdp_tbl`
--
ALTER TABLE `pdp_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pops_a_tbl`
--
ALTER TABLE `pops_a_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pops_b_tbl`
--
ALTER TABLE `pops_b_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwd_tbl`
--
ALTER TABLE `pwd_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference_file_tbl`
--
ALTER TABLE `reference_file_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents_tbl`
--
ALTER TABLE `residents_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sc_tbl`
--
ALTER TABLE `sc_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_tbl`
--
ALTER TABLE `sk_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account_tbl`
--
ALTER TABLE `user_account_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abkd_bucal2_tbl`
--
ALTER TABLE `abkd_bucal2_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bcpc_tbl`
--
ALTER TABLE `bcpc_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bdf_tbl`
--
ALTER TABLE `bdf_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bdrrmf_a_tbl`
--
ALTER TABLE `bdrrmf_a_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bdrrmf_b_tbl`
--
ALTER TABLE `bdrrmf_b_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brgy_code_tbl`
--
ALTER TABLE `brgy_code_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cms_table`
--
ALTER TABLE `cms_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gad_a_tbl`
--
ALTER TABLE `gad_a_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kp_bucal2_tbl_c1`
--
ALTER TABLE `kp_bucal2_tbl_c1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kp_bucal2_tbl_c2`
--
ALTER TABLE `kp_bucal2_tbl_c2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `monthly_p1_bucal2_tbl`
--
ALTER TABLE `monthly_p1_bucal2_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `monthly_p2_bucal2_tbl`
--
ALTER TABLE `monthly_p2_bucal2_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `monthly_p3_bucal2_tbl`
--
ALTER TABLE `monthly_p3_bucal2_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pdp_tbl`
--
ALTER TABLE `pdp_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pops_a_tbl`
--
ALTER TABLE `pops_a_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pops_b_tbl`
--
ALTER TABLE `pops_b_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pwd_tbl`
--
ALTER TABLE `pwd_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reference_file_tbl`
--
ALTER TABLE `reference_file_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `residents_tbl`
--
ALTER TABLE `residents_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `sc_tbl`
--
ALTER TABLE `sc_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sk_tbl`
--
ALTER TABLE `sk_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_account_tbl`
--
ALTER TABLE `user_account_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
