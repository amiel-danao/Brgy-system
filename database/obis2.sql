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
-- Database: `obis2`
--

-- --------------------------------------------------------

--
-- Table structure for table `abkd_tbl`
--

CREATE TABLE `abkd_tbl` (
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
-- Dumping data for table `abkd_tbl`
--

INSERT INTO `abkd_tbl` (`id`, `quarter`, `ordinance(b1)`, `fund_allocation(b2)`, `distribution_center(b3)`, `distribution_iec_material_(c1)`, `anti_dengue_campaign(c2)`, `clean_up_drive(c3)`, `ol_trap_system_applicaton(c4)`, `number_dengue_case`, `remarks`, `year`, `brgy_code`) VALUES
(25, '2', '\\', '\\', '\\', '\\', '', '', '', '', '', '2018', 'BC2'),
(27, '4', 'b1', 'b2', 'b3', 'c1', '', '', '', '', '', '2018', 'BC2'),
(28, '1', '', '', '', '', '', '1x month', '', '2', 'Complete', '2019', 'BC2'),
(31, '1', 'No', '', 'No', 'Yes', 'No', '4x MONTHLY', 'Yes', '', 'On going', '2019', 'BC1'),
(39, '1', 'Yes', 'Yes', 'No', 'No', 'Yes', 'none', 'No', '0', '', '2019', 'PT3'),
(42, '1', 'No', 'No', 'No', 'No', 'No', '', 'No', '', '', '2019', 'PSB'),
(43, '1', 'No', 'No', 'No', 'No', 'No', '2x a month', 'No', '0', 'On Going', '2019', 'CP'),
(44, '1', 'Yes', 'Yes', 'No', 'No', 'Yes', '1', 'No', '0', '', '2019', 'SMB'),
(45, '1', 'No', 'No', 'No', 'No', 'No', '4x a month', 'No', '0', 'On Going', '2019', 'SMA'),
(46, '1', 'No', 'No', 'No', 'No', 'No', '0', 'No', '0', '', '2019', 'BC3B'),
(50, '2', 'No', 'No', 'No', 'No', 'No', '1x monthly', 'No', '5', 'Completed', '2020', 'BC1'),
(51, '4', 'No', 'Yes', 'No', 'No', 'No', '4x monthly', 'No', '5', 'On Going', '2020', 'BC1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `first_name`, `last_name`, `middle_name`, `email`, `username`, `password`, `token`) VALUES
(1, 'Ericson', 'Limpasan', 'M', 'OBISDILG@gmail.com', 'bsit_bsit_4A', '$2a$12$qSRdqaEN2ex.jDD1jnyi1.gWhsSDERy4Wo50UdDfy.QQmdsLhp0Ny', '');

-- --------------------------------------------------------

--
-- Table structure for table `barangay_goal_tbl`
--

CREATE TABLE `barangay_goal_tbl` (
  `id` int(255) NOT NULL,
  `goal` text NOT NULL,
  `bcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barangay_goal_tbl`
--

INSERT INTO `barangay_goal_tbl` (`id`, `goal`, `bcode`) VALUES
(6, 'Ang Barangay Bucal 2 ay may misyon at hangarin na maiangat ang antas ng edukasyon at ekonomiya para sa ikauunlad ng Barangay. May marubdob at mithiing ipagpatuloy ang pagtataguyod at pagmamalasakit sa kapwa. Matatamo ito sa pamamagitan ng pagkakaisa, pagtutulungan, pakikilahok at mulat ang isipan sa pagbabagong dulot ng hamon ng buhay at higit sa lahat ay may pananalig sa Dakilang Lumikha.', 'BC2'),
(11, 'Magkaroon ng pantay- pantay na pagkakataong makamtan ang mga pangunahing pangangailangan sa pamamagitan ng isang mahusay na pamamahalan.', 'BC1'),
(12, 'Isang Barangay na maunlad, mapayapa at produktibo na pamayanan na pinamumunuan at pinaninirahan ng mga mamamayang maka-Diyos, maka tao, maka-kalikasan, nagkakaisa, at nakatutugon sa kanilang pangangailangan.', 'BC4B'),
(13, 'Magkaroon ng pagkakaisa at determinasyon ang bawat isa upang maisakatuparan ang serbisyo publiko tungo sa pag-unlad ng pamayanan.', 'G1A'),
(14, 'Magkaroon ng patuloy na pagkakaisa ang pamunuan upang maisakatuparan ang hangarin na makamtan ang pangunahing pangangailangan at mapasa-ayos ang pagpapatupad ng tungkulin Magkaroon ng programang makakatulong sa mamamayan upang magkaroon ng maayos na pamayanan.\r\n', 'PSA'),
(15, 'Sama-sama na tugunan ang mga pangangailangan ng mga mamamayan', 'TKM'),
(16, 'Sama-sama na tugunan ang mga pangangailangan ng mga mamamayan\r\n', 'TSM'),
(17, 'Magkaroon ng pagtutulungan at pagkakaisa ang bawat mamamayan at pantay-pantay na pagkakataong makamtan ang mga pangunahing pangangailangan sa pamamagitan ng isang mahusay na pamamahala. ', 'PB1A'),
(18, 'Magkaroon ng pagtutulungan at pagkakaisa ng bawat kabarangay, upang maiangat ang antas ng pamumuhay ng mga tao sa aking pamamahala, sa pamamagitan ng isang maunlad na Barangay.', 'PB1B');

-- --------------------------------------------------------

--
-- Table structure for table `barangay_mission_tbl`
--

CREATE TABLE `barangay_mission_tbl` (
  `id` int(255) NOT NULL,
  `mission` text NOT NULL,
  `bcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barangay_mission_tbl`
--

INSERT INTO `barangay_mission_tbl` (`id`, `mission`, `bcode`) VALUES
(4, 'Maiangat ang antas pangkabuhayan ng Barangay lalo na sa pang-agrikultura at maging sa edukasyon. Pagbigkisin ang mamamayan tungo sa pagkakaisa para sa ikatatatag at ikatatagumpay ng Barangay. Paghikayat sa mga kabataan na sila ang pagasa ng bayan sa pamamagitan ng aktibo sa gawaing kapaki-pakinabang sa ikabubuti ng lahat. Pagbibigay ng tapat at patas na paglilingkod sa bawat isa.', 'BC2'),
(5, 'Isang mapayapa at maunlad na pamayanan na may pananalig at takot sa Diyos. tumatalima sa batas na umiiral, nagtitiwala sa lakas ng pagkakaisa at kumakalinga sa kalikasan.', 'BC1'),
(8, 'Committing to perform better duties and responsibilities to carry out the objectives and plan of the barangay, most especially in the improvement and healthcare of the residents of the barangay.', 'BC3A'),
(9, 'Pantay-pantay na pamumuhay at pananatiling kapayapaan ng Barangay.', 'BC3B'),
(10, 'Isakatuparan ang magandang adhikain at layunin ng pamunuan ng barangay tungo sa ikauunlad ng isang matatag na pamayanan.', 'BC4A'),
(11, 'Maging isang Barangay na maunlad, mapayapa at produktibo na pamayanan na pinamumunuan at pinaninirahan ng mga mamamayang maka-Diyos, maka tao, maka-kalikasan, nagkakaisa, at nakatutugon sa kanilang pangangailangan.', 'BC4B'),
(12, 'To formulate and enforce transparent plans program and regulation for the protection of interest of the community and environment, education and culture, insfrastructure health social services, financial rights, agriculture.', 'CP'),
(13, 'Makapag bigay ng makabuluhang serbisyo sa kalusugan, katahimikan at kapayapaan sa buong komunidad. Maitaguyod ang malawak na komersyalismo, upang makapag bigay ng sapat na hanapbuhay sa mga mamamayan.', 'G1A'),
(14, 'Patuloy na patatagin at palaguin ang kasipagan ng pagsasamahan na siyang tutulong sa pag angat ng kabuhayan ng mga mahihirap at pangagalaga sa likas na yaman. ', 'MB'),
(15, 'Maipagkaloob at maiangat ang edukasyon upang maiagapay ang bawat tao sa kasalukuyang pamantayan ng karunungan, mapanatili ang komunikasyon at elektripikasyon upang ang bawat mamamayan ay magkaroon ng pagkakaisa, maaliwalas na buhay.', 'PT1'),
(16, 'Maiangat ang kabuhayan ng mamamayan at mapanatili ang pagiging pamayanang agricultural na nangangalaga sa kalikasan. ', 'PT2'),
(17, 'Makatulong sa Pagpapa-unlad upang matugunan ang pangangailangan ng Barangay, mangalat ng impormasyon para sa kalusugan ng kabataan at mapagyaman ang kasaysayan lugar ng Pinagsanhan A. ', 'PSA'),
(18, 'Mapanatili ang kaayusan at katahimikan ng barangay, layunin din nito na magkaroon ng hanapbuhay ang bawat mamamayan dito.', 'SMA'),
(19, 'Sangguniang Barangay shall provide and \r\norder at all times. Maintain the cleanliness of the surroundings, provide adequate livelihood training programs for the out-of school youth and non working mothers. Shall respond to proper caring for its natural resources and to develop the responsibility of each person towards the progress of the Barangay. Shall also protect the human rights of every individual in the community as well as the components of the natural resources. ', 'SMB'),
(20, 'Magkaroon ng pagkakataong maisakatuparan ang mga nagagandang mithiin ng Sangguniang Barangay tungo sa maunlad, mapayapa, malinis na kapaligiran, may pagkakaisa at pagtutulungan upang ang kaunlaran av makamtan. ', 'STM'),
(21, 'To formulate and enforce Transparent Plans, Programs and Regulations for the protection of the interest of the community with regards to Environment, Education, Infrastructure, Health, Social Services, Moral, Financial, Peace and Order.', 'TLP'),
(22, 'Makapaglingkod sa Pamayanan na walang kinikilingan at pagkakapantay-pantay', 'TKM'),
(24, 'Maiangat ang antas ng pamumuhay ng mga mamamayan mapanatili ang isang masaya at mapayapang pamayanan.', 'TSM'),
(25, 'Paunlarin ang antas ng pamumuhay ng mga mamamayan at mapanatili ang isang maganda, tahimik, malinis at payapang lugar. ', 'PB1A'),
(26, 'Ang magkaroon ng isang may malinis at pagtutulungang pamumuno na may pagpapahalaga sa bawa\'t-isa sa ika-aangat ng antas ng pamumuhay tungo sa isang maunlad na Barangay.', 'PB1B'),
(27, 'Maingat ang antas ng Pamumuhay ng mga mamamayan at Mapanatili ang isang tahimik o mapayapang Pamayanan at Napakalinis na Kapaligiran. ', 'PB2A'),
(28, 'Our mission is to have a better employment for the people and better education for the youth, to uplift the economic progress and unite our people through effective governance,and sincere service. ', 'PB2B');

-- --------------------------------------------------------

--
-- Table structure for table `barangay_vision_tbl`
--

CREATE TABLE `barangay_vision_tbl` (
  `id` int(255) NOT NULL,
  `vision` text NOT NULL,
  `bcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barangay_vision_tbl`
--

INSERT INTO `barangay_vision_tbl` (`id`, `vision`, `bcode`) VALUES
(2, 'Magkaroon ng pantay- pantay na pagkakataong makamtan ang mga pangunahing pangangailangan sa pamamagitan ng isang mahusay na pamamahalan.', 'BC2'),
(4, 'Magkaroon ng pantay- pantay na pagkakataong makamtan ang mga pangunahing pangangailangan sa pamamagitan ng isang mahusay na pamamahalan.', 'BC1'),
(6, 'Barangay Bucal 3-A is a peaceful and united barangay people with God fearing. Industrious and well-off citizens.', 'BC3A'),
(7, 'We envision barangay Bucal 3-A to be more progressive, loving and peaceful place to live.', 'BC3A'),
(8, 'Bucal 3-B Matahimik na Barangay na may pagkakaisa sa mga Gawain at mga proyektong itinatag. Malinis at payapang Barangay.', 'BC3B'),
(9, 'Bucal 4-A may maganda, tahimik, malinis at maunlad na kabuhayan, matatag na pamahalaan na binubuo ng magkakaisang pamayanan na may pananalig sa poong maykapal.', 'BC4A'),
(10, 'Magkaroon ng pantay-pantay na pagkakataong makamtan ang mga pangunahing pangangailangan sa pamamagitan ng isang mahusay na pamamahala.', 'BC4B'),
(11, 'Envisions a progressive, healthy, peaceful community, empowered constituents and collectively participating in decision making gearing towards good governance', 'CP'),
(12, 'Isang tahimik, malinis, maayos at maunlad na pamayanan na may produktibong pamunuan, at ang mga naninirahan ay nagkakaisang mamamayan, makakalikasan at may pananampalataya sa Diyos.', 'G1A'),
(13, 'Ang barangay ay magkaroon ng malinis, makadiyos at nagkakaisang mamamayan para sa maunlad na kinabukasan ng mga taong naninirahan maging sa susunod na henerasyon.\r\n', 'MB'),
(14, 'Sa taong 2018 ang Pantihan I: \"Isang maunlad, mapayapa, matahimik na pamayanan kung saan ang bawat mamamayan ay malusog at mayroong sapat na hanapbuhay.', 'PT1'),
(15, 'Isang pamayanang mayaman sa produktong agricultural at di nakakasira sa kalikasan at may mamamayang maunlad ang kabuhayan. Malinis, tahimik at maunlad na barangay.', 'PT2'),
(16, 'Makasaysayang Barangay, Mayaman sa Lupain, Malusog na kabataan Malinis na Pamayanan, Simbolo ng Maunlad na Barangay. ', 'PSA'),
(17, 'San Miguel A, huwarang barangay, Malinis at maayos na kapaligiran na pinakikilos ng nagkakaisa, disiplinado at may takot sa Diyos na mamamayan, may matalino ay natatanging kabataan na handing makipagsapalaran tungo sa kaunlaran ng pamayanan.', 'SMA'),
(18, 'We envision our community as a progressive and peaceful community, clean environment with well bonded people that care for nature. It aims to develop its talent ready to handle every \r\nchallenge with regards to technology and modernization. \r\n', 'SMB'),
(19, 'Isang Barangay na alinis, mapayapa, masagana, mamamayang ay malasakit sa bawat isa,nagkakaisa para ikabubuti at ikauunlad ng lahat at higit pamayanang may pananalig sa Diyos. ', 'STM'),
(20, 'Talipusngo is a gateway to tourism in the mountains in Maragondon, a progressive barangay, with empowered, resilient, healthy and God fearing people, living in a peaceful and clean community with balanced ecology led by honest and passionate leaders', 'TLP'),
(21, 'Tungo sa Mapayapa, Malinis, Makatarungan, Matatag, Maunlad na Pamayanan at tapat na pamunuan', 'TKM'),
(23, 'Isang mapayapa, malinis at maunlad na Barangay na may pananalig at takot sa Diyos at pantay-pantay na pagtingin sa bawat isa na may matatag na pamunuan na kumakalainga sa kalikasan.', 'TSM'),
(24, 'Barangay na may maganda, tahimik, malinis at payapang lugar na pinaninirahan ng maka-Diyos, maka-tao, maka-bayan at makakalikasang mamamayan na nagkakatulong tulong, kabalikat ang mga kabataan tungo sa kaunlaran. ', 'PB1A'),
(25, 'Isang payak may pagtutulungan at nagkakaisang pamunuan na bukas sa nasasakupan upang makabuo ng isang Barangay na magseserbisyo ng malinis; taos sa puso at may takot sa Diyos.', 'PB1B'),
(26, 'Isang Napakalinis at Napakatahimik na Pamayanan na pinamumunuan at pinaglilingkuran ng isang Sangguniang Barangay na dagliang tumutugon sa pangangailangan ng mga naninirahan tungo sa Kaunlaran at Pag-unlad ng kabuhayan ng kanyang Mamamayan.', 'PB2A'),
(27, 'Our vision is to have a peaceful, healthy, and progressive barangay through the sincere efforts of the Barangay Officials with the unity of the people. ', 'PB2B');

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
(1, '', 'Purchase of School Supplies, Books for Daycare Center & Elementary Children, Supplementary Feedings and Other related programs', '', '4000.00', '3000.00', '3913.00', '3913.00', 2019, 'BC1'),
(2, '', 'Purchase of School Supplies, Books for Daycare Center & Elementary Children', 'SB', '2500.00', '2500.00', '2500.00', '2500.00', 2019, 'BC2'),
(9, '', 'Purchase of School Supplies, Books for Daycare Center & Elementary Children, Supplementary Feedings and Other related programs', 'SB', '3913.00', '3913.00', '3913.00', '3913.00', 2019, 'BC3B');

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
(4, 'Economic Services (8000)', 'Livelihood Program/ Candle making and other related products', 'SB', 'JAN', 'DEC', 'Additional income to help them up post their everyday living', '20% BDF', '0.00', '10.00', '0.00', '10.00', 'A4AAAA', 'A4BBBB', 2019, 'BC2'),
(5, 'Other Services (9000)', 'Maintenance of cleanliness of the Barangay / Waste Segregation', 'SB', 'JAN', 'DEC', 'Maintained cleanliness', '20% BDF', '0.00', '40000.00', '0.00', '40000.00', '', '', 2019, 'BC2'),
(7, 'Other Services (9000)', 'Implementation of flood control project such as de-clogging of canal', 'SB', 'JAN', 'DEC', 'Flood Free barangay', '20% BDF', '0.00', '60000.00', '0.00', '60000.00', 'A221-01', 'A221-01', 2019, 'BC2'),
(9, 'Social Services (3000)', '- Maintenance of CCTV Camera', 'SB', 'JAn', 'DEC', 'To avoid detrimental incidence along barangay road', '20% BDF', '0.00', '30000.00', '0.00', '30000.00', 'A424-03', '', 2019, 'BC1'),
(11, 'Economic Services (8000)', 'Livelihood Program/ Candle making and other related products', 'SB', 'JAN', 'DEC', 'Additional income to help them up post their everyday living', '20% BDF', '0.00', '10000.00', '0.00', '10000.00', '', '', 2019, 'BC1'),
(13, 'dv', '', '', '', '', '', '', '0.00', '22.00', '1.00', '0.00', '', '', 2019, 'BC3A'),
(14, 'Other Services (9000)', 'Maintenance of cleanliness of the Barangay / Waste Segregation', 'SB', 'JAN', 'DEC', 'Maintained cleanliness', '20% BDF', '0.00', '40000.00', '0.00', '40000.00', '', '', 2019, 'BC1'),
(15, 'Other Services (9000)', 'Implementation of flood control project such as de-clogging of canal', 'SB', 'JAN', 'DEC', 'Flood Free barangay', '20% BDF', '0.00', '80000.00', '0.00', '80000.00', 'A221-01', '', 2019, 'BC1'),
(16, 'Other Services (9000)', 'Rehabilitation of MRF', 'SB', 'JAN', 'DEC', '100% Compliance with RA 9003', '20% BDF', '0.00', '30000.00', '0.00', '30000.00', '', '', 2019, 'BC1'),
(17, 'Social Services (3000)', '- Construction/ Improvement/ Rehabilitation of Multi-Purpose Hall', 'SB', 'JAN', 'DEC', 'Comfortable multi-purpose hall', '20% BDF', '0.00', '55000.00', '0.00', '55000.00', '42403', '', 2019, 'BC3B'),
(18, 'Social Services (3000)', '- Maintenance of CCTV Camera', 'SB', 'JAN', 'DEC', 'To avoid detrimental incidence along barangay road ', '20% BDF', '0.00', '30000.00', '0.00', '30000.00', 'A424-03', '', 2019, 'BC3B'),
(19, 'Social Services (3000)', '- Purchase of Medical Equipment and other items appropriate for calamity rescue operation', 'SB', 'JAN', 'DEC', 'New Medical and rescue equipment', '20% BDF', '0.00', '20000.00', '0.00', '20000.00', '', '', 2019, 'BC3B'),
(20, 'Social Services (3000)', '- Maintenance of Street Lights System', 'SB', 'JAN', 'DEC', 'Enlightened street lighting', '20% BDF', '0.00', '68052.60', '0.00', '68052.60', 'A424-09', '', 2019, 'BC3B'),
(21, 'Economic Services (8000)', 'Livelihood Program/ Candle making and other related products', 'SB', 'JAN', 'DEC', 'Additional income to help them up post their everyday living', '20% BDF', '0.00', '10000.00', '0.00', '10000.00', '', '', 2019, 'BC3B'),
(22, 'Other Services (9000)', 'Maintenance of cleanliness of the Barangay / Waste Segregation', 'SB', 'JAN', 'DEC', 'Maintained cleanliness', '20% BDF', '0.00', '40000.00', '0.00', '40000.00', '', '', 2019, 'BC3B'),
(23, 'Other Services (9000)', 'Implementation of flood control project such as de-clogging of canal', 'SB', 'JAN', 'DEC', 'Flood Free barangay', '20% BDF', '0.00', '60000.00', '0.00', '60000.00', 'A221-01', '', 2019, 'BC3B'),
(24, 'Other Services (9000)', 'Rehabilitation of MRF', 'SB', 'JAN', 'DEC', '100% Compliance with RA 9003', '20% BDF', '0.00', '30000.00', '0.00', '30000.00', '', '', 2019, 'BC3B');

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
(5, 'Social Services (3000)', ' CCTV Camera', 'test1ok', 'JAN', 'OCT', '', '', '0.00', '0.00', '0.00', '1000.00', 2019, 'BC2'),
(6, '', 'Seminar/ Training', 'SB', 'JAN', 'DEC', 'Trained Officials', '5% BDRRMF ', '0.00', '0.00', '0.00', '57531.70', 2019, 'BC1'),
(7, '', 'Purchase of Stockpiles', 'SB', 'JAN', 'DEC', 'Stockpiles purchase', '5% BDRRMF', '0.00', '0.00', '0.00', '57531.70', 2019, 'BC1'),
(8, '', 'Disaster Response and rescue equipment expenses', 'SB', 'JAN', 'DEC', 'Rescue Supplies', '5% BDRRMF', '0.00', '0.00', '0.00', '57531.70', 2019, 'BC1'),
(9, '', 'Disaster Response and rescue tools and materials', 'SB', 'JAN', 'DEC', 'Rescue Supplies', '5% BDRRMF', '0.00', '0.00', '0.00', '57531.70', 2019, 'BC1'),
(10, '', 'Printing of IEC materials', 'SB', 'JAN', 'DEC', 'IEC materials disseminated and posted', '5% BDRRMF', '0.00', '0.00', '0.00', '57531.70', 2019, 'BC1'),
(11, '', 'Other related programs/miscellaneous expenses', 'SB', 'JAN', 'DEC', '', '5% BDRRMF', '0.00', '0.00', '0.00', '57531.70', 2019, 'BC1'),
(12, '', 'Seminar/ Training', 'SB', 'JAN', 'DEC', 'Trained Officials', '5% BDRRMF', '0.00', '0.00', '0.00', '57531.70', 2019, 'BC3B'),
(13, '', 'Purchase of Stockpiles', 'SB', 'JAN', 'DEC', 'Stockpiles purchase', '5% BDRRMF', '0.00', '0.00', '0.00', '57531.70', 2019, 'BC3B'),
(14, '', 'Disaster Response and rescue equipment expenses', 'SB', 'JAN', 'DEC', 'Rescue Supplies', '5% BDRRMF', '0.00', '0.00', '0.00', '57531.70', 2019, 'BC3B'),
(15, '', 'Disaster Response and rescue tools and materials', 'SB', 'JAN', 'DEC', 'Rescue Supplies', '5% BDRRMF', '0.00', '0.00', '0.00', '57531.70', 2019, 'BC3B'),
(16, '', 'Printing of IEC materials', 'SB', 'JAN', 'DEC', 'IEC materials disseminated and posted', '5% BDRRMF', '0.00', '0.00', '0.00', '57531.70', 2019, 'BC3B'),
(17, '', 'Other related programs/miscellaneous expenses', 'SB', 'JAN', 'DEC', '', '5% BDRRMF', '0.00', '0.00', '0.00', '57531.70', 2019, 'BC3B');

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
(1, '', 'Medical Assistance Program', '', '', '', 'Provide medical assistance during calamity', '5% BDRRMF', '10000.00', '0.00', '15000.00', '24188.15', 2019, 'BC2'),
(2, 'test2', 'secondtest', '', '', '', '', '20% BDF ok', '0.00', '0.00', '0.00', '0.00', 2019, 'BC2'),
(4, '', 'Food Assistance Program', 'SB', 'JAN', 'DEC', 'Provide Food in times of calamity', '5% BDRRMF', '0.00', '0.00', '0.00', '24188.15', 2019, 'BC1'),
(5, '', 'Medical Assistance Program', '', '', '', 'Provide medical assistance during calamity', '5% BDRRMF', '0.00', '0.00', '0.00', '24188.15', 2019, 'BC1'),
(6, '', 'Other related programs/miscellaneous expenses', 'SB', 'JAN', 'DEC', '', '5% BDRRMF', '0.00', '0.00', '0.00', '24188.15', 2019, 'BC1'),
(7, '', 'Food Assistance Program', 'SB', 'JAN', 'DEC', 'Provide Food in times of calamity', '5% BDRRMF', '0.00', '0.00', '0.00', '0.00', 2019, 'BC3B'),
(8, '', 'Medical Assistance Program', '', '', '', 'Provide medical assistance during calamity', '5% BDRRMF', '0.00', '0.00', '0.00', '0.00', 2019, 'BC3B'),
(9, '', 'Other related programs/miscellaneous expenses', 'SB', 'JAN', 'DEC', '', '5% BDRRMF', '0.00', '0.00', '0.00', '24188.15', 2019, 'BC3B');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_bclearance_tbl`
--

CREATE TABLE `brgy_bclearance_tbl` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `residents_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `type_of_certificate` varchar(255) NOT NULL,
  `bcno` int(100) NOT NULL,
  `ctcno` int(100) NOT NULL,
  `orno` int(100) NOT NULL,
  `paid` decimal(10,2) NOT NULL,
  `bcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brgy_bclearance_tbl`
--

INSERT INTO `brgy_bclearance_tbl` (`id`, `fname`, `lname`, `mname`, `residents_id`, `date`, `type_of_certificate`, `bcno`, `ctcno`, `orno`, `paid`, `bcode`) VALUES
(31, 'Pilar', 'MANALO', 'N', 61, '2019-04-25', 'Barangay Clearance', 100, 100, 100, '10.00', 'BC1'),
(32, 'Dionisio', 'BERGANOS', 'N', 63, '2019-04-25', 'Barangay Clearance', 101, 101, 101, '30.00', 'BC1');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_bpermit_tbl`
--

CREATE TABLE `brgy_bpermit_tbl` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `residents_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `bcno` int(100) NOT NULL,
  `business` varchar(255) NOT NULL,
  `type_of_certificate` varchar(255) NOT NULL,
  `bcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brgy_bpermit_tbl`
--

INSERT INTO `brgy_bpermit_tbl` (`id`, `fullname`, `residents_id`, `date`, `bcno`, `business`, `type_of_certificate`, `bcode`) VALUES
(7, ' Jorja N. BERGANOS', 62, '2019-04-25', 23, 'schiil', 'Barangay Business Permit', 'BC1'),
(8, ' Jorja N. BERGANOS', 62, '2019-04-25', 24, 'Comshop', 'Barangay Business Permit', 'BC1');

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
-- Table structure for table `brgy_certificate_tbl`
--

CREATE TABLE `brgy_certificate_tbl` (
  `id` int(100) NOT NULL,
  `residents_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `type_of_certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brgy_certificate_tbl`
--

INSERT INTO `brgy_certificate_tbl` (`id`, `residents_id`, `date`, `type_of_certificate`) VALUES
(4, 48, '2019-03-04', 'Barangay Clearance'),
(5, 48, '2019-03-04', 'Barangay Indigency'),
(6, 48, '2019-03-04', 'Barangay Business Permit'),
(7, 46, '2019-03-07', 'Barangay Clearance'),
(8, 46, '2019-03-07', 'Barangay Business Permit');

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
(1, 'Bucal 1', 'Maragondon Cavite', 'BC1'),
(2, 'Bucal 2', 'Maragondon', 'BC2'),
(3, 'Bucal 3A', 'Maragondon', 'BC3A'),
(4, 'Bucal 3B', 'Maragondon', 'BC3B'),
(5, 'Bucal 4A', 'Maragondon', 'BC4A'),
(6, 'Bucal 4B', 'Maragondon', 'BC4B'),
(7, 'Caingin', 'Maragondon', 'CP'),
(8, 'Garita A', 'Maragondon', 'G1A'),
(9, 'Garita B', 'Maragondon', 'G1B'),
(10, 'Layong Mabilog', 'Maragondon', 'LM'),
(11, 'Mabato', 'Maragondon', 'MB'),
(12, 'Pantihan 1', 'Maragondon', 'PT1'),
(13, 'Pantihan 2', 'Maragondon', 'PT2'),
(14, 'Pantihan 3', 'Maragondon', 'PT3'),
(15, 'Pantihan 4', 'Maragondon', 'PT4'),
(16, 'Sta. Mercedes (Patungan)', 'Maragondon', 'STM'),
(17, 'Pinagsanhan A', 'Maragondon', 'PSA'),
(18, 'Pinagsanhan B', 'Maragondon', 'PSB'),
(19, 'Poblacion 1A', 'Maragondon', 'PB1A'),
(20, 'Poblacion 1B', 'Maragondon', 'PB1B'),
(21, 'Poblacion 2A', 'Maragondon', 'PB2A'),
(22, 'Poblacion 2B', 'Maragondon', 'PB2B'),
(23, 'San Miguel A', 'Maragondon', 'SMA'),
(24, 'San Miguel B', 'Maragondon', 'SMB'),
(25, 'Talipusngo', 'Maragondon', 'TLP'),
(26, 'Tulay Kanluran', 'Maragondon', 'TKM'),
(27, 'Tulay Silangan', 'Maragondon', 'TSM');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_indigency_tbl`
--

CREATE TABLE `brgy_indigency_tbl` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `residents_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `type_of_certificate` varchar(255) NOT NULL,
  `bcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgy_info_tbl`
--

CREATE TABLE `brgy_info_tbl` (
  `id` int(100) NOT NULL,
  `message` text NOT NULL,
  `barangay_code` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brgy_info_tbl`
--

INSERT INTO `brgy_info_tbl` (`id`, `message`, `barangay_code`, `type`) VALUES
(7, 'Isang mapayapa at maunlad na pamayanan na may pananalig at takot sa Diyos. tumatalima sa batas na umiiral, nagtitiwala sa lakas ng pagkakaisa at kumakalinga sa kalikasan.', 'BC1', 'vision'),
(8, 'Maiangat ang antas ng pamumuhay ng mga mamamayan at mapanatili ang isang mapayapang pamayanan.', 'BC1', 'mission'),
(10, 'Maiangat ang antas pangkabuhayan ng Barangay lalo na sa pang-agrikultura at maging sa edukasyon. Pagbigkisin ang mamamayan tungo sa pagkakaisa para sa ikatatatag at ikatatagumpay ng Barangay. Paghikayat sa mga kabataan na sila ang pagasa ng bayan sa pamamagitan ng aktibo sa gawaing kapaki-pakinabang sa ikabubuti ng lahat. Pagbibigay ng tapat at patas na paglilingkod sa bawat isa.', 'BC2', 'mission'),
(11, 'Committing to perform better duties and responsibilities to carry out the objectives and plan of the barangay, most especially in the improvement and healthcare of the residents of the barangay.', 'BC3A', 'mission'),
(12, 'Pantay-pantay na pamumuhay at pananatiling kapayapaan ng Barangay.', 'BC3B', 'mission'),
(13, 'Isakatuparan ang magandang adhikain at layunin ng pamunuan ng barangay tungo sa ikauunlad ng isang matatag na pamayanan.', 'BC4A', 'mission'),
(14, 'Maging isang Barangay na maunlad, mapayapa at produktibo na pamayanan na pinamumunuan at pinaninirahan ng mga mamamayang maka-Diyos, maka tao, maka-kalikasan, nagkakaisa, at nakatutugon sa kanilang pangangailangan.', 'BC4B', 'mission'),
(15, 'To formulate and enforce transparent plans program and regulation for the protection of interest of the community and environment, education and culture, insfrastructure health social services, financial rights, agriculture.', 'CP', 'mission'),
(16, 'Makapag bigay ng makabuluhang serbisyo sa kalusugan, katahimikan at kapayapaan sa buong komunidad. Maitaguyod ang malawak na komersyalismo, upang makapag bigay ng sapat na hanapbuhay sa mga mamamayan.', 'G1A', 'mission'),
(17, 'Patuloy na patatagin at palaguin ang kasipagan ng pagsasamahan na siyang tutulong sa pag angat ng kabuhayan ng mga mahihirap at pangagalaga sa likas na yaman.', 'MB', 'mission'),
(18, 'Maipagkaloob at maiangat ang edukasyon upang maiagapay ang bawat tao sa kasalukuyang pamantayan ng karunungan, mapanatili ang komunikasyon at elektripikasyon upang ang bawat mamamayan ay magkaroon ng pagkakaisa, maaliwalas na buhay.', 'PT1', 'mission'),
(19, 'Maiangat ang kabuhayan ng mamamayan at mapanatili ang pagiging pamayanang agricultural na nangangalaga sa kalikasan.', 'PT2', 'mission'),
(20, 'Makatulong sa Pagpapa-unlad upang matugunan ang pangangailangan ng Barangay, mangalat ng impormasyon para sa kalusugan ng kabataan at mapagyaman ang kasaysayan lugar ng Pinagsanhan A. ', 'PSA', 'mission'),
(21, 'Mapanatili ang kaayusan at katahimikan ng barangay, layunin din nito na magkaroon ng hanapbuhay ang bawat mamamayan dito.', 'SMA', 'mission'),
(22, 'Sangguniang Barangay shall provide and \r\norder at all times. Maintain the cleanliness of the surroundings, provide adequate livelihood training programs for the out-of school youth and non working mothers. Shall respond to proper caring for its natural resources and to develop the responsibility of each person towards the progress of the Barangay. Shall also protect the human rights of every individual in the community as well as the components of the natural resources. ', 'SMB', 'mission'),
(23, 'Magkaroon ng pagkakataong maisakatuparan ang mga nagagandang mithiin ng Sangguniang Barangay tungo sa maunlad, mapayapa, malinis na kapaligiran, may pagkakaisa at pagtutulungan upang ang kaunlaran av makamtan. ', 'STM', 'mission'),
(24, 'To formulate and enforce Transparent Plans, Programs and Regulations for the protection of the interest of the community with regards to Environment, Education, Infrastructure, Health, Social Services, Moral, Financial, Peace and Order.', 'TLP', 'mission'),
(25, 'Makapaglingkod sa Pamayanan na walang kinikilingan at pagkakapantay-pantay', 'TKM', 'mission'),
(26, 'Maiangat ang antas ng pamumuhay ng mga mamamayan mapanatili ang isang masaya at mapayapang pamayanan.', 'TSM', 'mission'),
(27, 'Paunlarin ang antas ng pamumuhay ng mga mamamayan at mapanatili ang isang maganda, tahimik, malinis at payapang lugar. ', 'PB1A', 'mission'),
(28, 'Ang magkaroon ng isang may malinis at pagtutulungang pamumuno na may pagpapahalaga sa bawa\'t-isa sa ika-aangat ng antas ng pamumuhay tungo sa isang maunlad na Barangay.', 'PB1B', 'mission'),
(29, 'Maingat ang antas ng Pamumuhay ng mga mamamayan at Mapanatili ang isang tahimik o mapayapang Pamayanan at Napakalinis na Kapaligiran. ', 'PB2A', 'mission'),
(30, 'Our mission is to have a better employment for the people and better education for the youth, to uplift the economic progress and unite our people through effective governance,and sincere service. ', 'PB2B', 'mission'),
(31, 'Ang Barangay Bucal 2 ay may misyon at hangarin na maiangat ang antas ng edukasyon at ekonomiya para sa ikauunlad ng Barangay. May marubdob at mithiing ipagpatuloy ang pagtataguyod at pagmamalasakit sa kapwa. Matatamo ito sa pamamagitan ng pagkakaisa, pagtutulungan, pakikilahok at mulat ang isipan sa pagbabagong dulot ng hamon ng buhay at higit sa lahat ay may pananalig sa Dakilang Lumikha.', 'BC2', 'goal'),
(32, 'Isang Barangay na maunlad, mapayapa at produktibo na pamayanan na pinamumunuan at pinaninirahan ng mga mamamayang maka-Diyos, maka tao, maka-kalikasan, nagkakaisa, at nakatutugon sa kanilang pangangailangan.', 'BC4B', 'goal'),
(33, 'Magkaroon ng pagkakaisa at determinasyon ang bawat isa upang maisakatuparan ang serbisyo publiko tungo sa pag-unlad ng pamayanan.', 'G1A', 'goal'),
(34, 'Magkaroon ng patuloy na pagkakaisa ang pamunuan upang maisakatuparan ang hangarin na makamtan ang pangunahing pangangailangan at mapasa-ayos ang pagpapatupad ng tungkulin Magkaroon ng programang makakatulong sa mamamayan upang magkaroon ng maayos na pamayanan.', 'PSA', 'goal'),
(35, 'Sama-sama na tugunan ang mga pangangailangan ng mga mamamayan', 'TKM', 'goal'),
(36, 'Magkaroon ng pagtutulungan at pagkakaisa ang bawat mamamayan at pantay-pantay na pagkakataong makamtan ang mga pangunahing pangangailangan sa pamamagitan ng isang mahusay na pamamahala. ', 'PB1A', 'goal'),
(37, 'Magkaroon ng pagtutulungan at pagkakaisa ng bawat kabarangay, upang maiangat ang antas ng pamumuhay ng mga tao sa aking pamamahala, sa pamamagitan ng isang maunlad na Barangay.', 'PB1B', 'goal'),
(38, 'Magkaroon ng pantay- pantay na pagkakataong makamtan ang mga pangunahing pangangailangan sa pamamagitan ng isang mahusay na pamamahalan.', 'BC2', 'vision'),
(39, 'Barangay Bucal 3-A is a peaceful and united barangay people with God fearing. Industrious and well-off citizens.', 'BC3A', 'vision'),
(40, 'We envision barangay Bucal 3-A to be more progressive, loving and peaceful place to live.', 'BC3A', 'vision'),
(41, 'Bucal 3-B Matahimik na Barangay na may pagkakaisa sa mga Gawain at mga proyektong itinatag. Malinis at payapang Barangay.', 'BC3B', 'vision'),
(42, 'Bucal 4-A may maganda, tahimik, malinis at maunlad na kabuhayan, matatag na pamahalaan na binubuo ng magkakaisang pamayanan na may pananalig sa poong maykapal.', 'BC4A', 'vision'),
(43, 'Magkaroon ng pantay-pantay na pagkakataong makamtan ang mga pangunahing pangangailangan sa pamamagitan ng isang mahusay na pamamahala.', 'BC4B', 'vision'),
(44, 'Envisions a progressive, healthy, peaceful community, empowered constituents and collectively participating in decision making gearing towards good governance', 'CP', 'vision'),
(45, 'Isang tahimik, malinis, maayos at maunlad na pamayanan na may produktibong pamunuan, at ang mga naninirahan ay nagkakaisang mamamayan, makakalikasan at may pananampalataya sa Diyos.', 'G1A', 'vision'),
(46, 'Ang barangay ay magkaroon ng malinis, makadiyos at nagkakaisang mamamayan para sa maunlad na kinabukasan ng mga taong naninirahan maging sa susunod na henerasyon.', 'MB', 'vision'),
(47, 'Sa taong 2018 ang Pantihan I: \"Isang maunlad, mapayapa, matahimik na pamayanan kung saan ang bawat mamamayan ay malusog at mayroong sapat na hanapbuhay.', 'PT1', 'vision'),
(48, 'Isang pamayanang mayaman sa produktong agricultural at di nakakasira sa kalikasan at may mamamayang maunlad ang kabuhayan. Malinis, tahimik at maunlad na barangay.', 'PT2', 'vision'),
(49, 'Makasaysayang Barangay, Mayaman sa Lupain, Malusog na kabataan Malinis na Pamayanan, Simbolo ng Maunlad na Barangay. ', 'PSA', 'vision'),
(50, 'San Miguel A, huwarang barangay, Malinis at maayos na kapaligiran na pinakikilos ng nagkakaisa, disiplinado at may takot sa Diyos na mamamayan, may matalino ay natatanging kabataan na handing makipagsapalaran tungo sa kaunlaran ng pamayanan.', 'SMA', 'vision'),
(51, 'We envision our community as a progressive and peaceful community, clean environment with well bonded people that care for nature. It aims to develop its talent ready to handle every \r\nchallenge with regards to technology and modernization. ', 'SMB', 'vision'),
(52, 'Isang Barangay na alinis, mapayapa, masagana, mamamayang ay malasakit sa bawat isa,nagkakaisa para ikabubuti at ikauunlad ng lahat at higit pamayanang may pananalig sa Diyos. ', 'STM', 'vision'),
(53, 'Talipusngo is a gateway to tourism in the mountains in Maragondon, a progressive barangay, with empowered, resilient, healthy and God fearing people, living in a peaceful and clean community with balanced ecology led by honest and passionate leaders', 'TLP', 'vision'),
(54, 'Tungo sa Mapayapa, Malinis, Makatarungan, Matatag, Maunlad na Pamayanan at tapat na pamunuan', 'TKM', 'vision'),
(55, 'Isang mapayapa, malinis at maunlad na Barangay na may pananalig at takot sa Diyos at pantay-pantay na pagtingin sa bawat isa na may matatag na pamunuan na kumakalainga sa kalikasan.', 'TSM', 'vision'),
(56, 'Barangay na may maganda, tahimik, malinis at payapang lugar na pinaninirahan ng maka-Diyos, maka-tao, maka-bayan at makakalikasang mamamayan na nagkakatulong tulong, kabalikat ang mga kabataan tungo sa kaunlaran. ', 'PB1A', 'vision'),
(57, 'Isang payak may pagtutulungan at nagkakaisang pamunuan na bukas sa nasasakupan upang makabuo ng isang Barangay na magseserbisyo ng malinis; taos sa puso at may takot sa Diyos.', 'PB1B', 'vision'),
(58, 'Isang Napakalinis at Napakatahimik na Pamayanan na pinamumunuan at pinaglilingkuran ng isang Sangguniang Barangay na dagliang tumutugon sa pangangailangan ng mga naninirahan tungo sa Kaunlaran at Pag-unlad ng kabuhayan ng kanyang Mamamayan.', 'PB2A', 'vision'),
(59, 'Our vision is to have a peaceful, healthy, and progressive barangay through the sincere efforts of the Barangay Officials with the unity of the people. ', 'PB2B', 'vision'),
(60, 'Magkaroon ng pantay- pantay na pagkakataong makamtan ang mga pangunahing pangangailangan sa pamamagitan ng isang mahusay na pamamahala.', 'BC1', 'goal');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_official_tbl`
--

CREATE TABLE `brgy_official_tbl` (
  `brgy_id` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `bod` date DEFAULT NULL,
  `birth_of_place` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `highest_education` varchar(255) NOT NULL,
  `educ_status` varchar(100) NOT NULL,
  `course_school` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `brgy_code` varchar(100) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `term` varchar(5) NOT NULL,
  `date_elected` date NOT NULL,
  `picture` varchar(100) NOT NULL,
  `post_validation` varchar(20) NOT NULL DEFAULT 'Not Validate'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brgy_official_tbl`
--

INSERT INTO `brgy_official_tbl` (`brgy_id`, `first_name`, `last_name`, `middle_name`, `gender`, `age`, `bod`, `birth_of_place`, `address`, `email`, `contact_no`, `religion`, `civil_status`, `highest_education`, `educ_status`, `course_school`, `occupation`, `brgy_code`, `barangay`, `position`, `term`, `date_elected`, `picture`, `post_validation`) VALUES
('122490', 'Ciracio', 'Angeles', 'B.', 'Male', '29', '1281-08-08', 'Margondon', 'Cavite', 'melendez@gmail.com', '09972613335', 'Islam', 'Single', 'COLLEGE', 'UNDER GRADUATE', 'Cavite', 'none', 'BC2', 'Bucal 2', 'Punong Barangay', '', '0000-00-00', '1.png', 'Validate'),
('122491', 'EDMUNDO', 'SISAYAN', 'Arandia', 'Male', '28', '1999-07-24', 'Margondon', 'Cavite', 'melendez_Vincent@gmail.com', '09782342342', 'Islam', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'CvSu', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 1', '2nd', '2018-08-22', 'images (3).jpg', 'Validate'),
('122492', 'MARLO', 'NOVELO', 'Anglo', 'Male', '28', '1998-12-07', 'Margondon', 'Cavite', 'Bethanie@gmail.com', '09972316235', 'Iglesia ni Cristo', 'Single', 'COLLEGE', 'GRADUATE', 'CvSu', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 2', '', '0000-00-00', '3.jpg', 'Validate'),
('122493', 'Wilfredo', 'Pescasio', 'Sisayan', 'Male', '24', '1992-02-08', 'Margondon', 'Cavite', 'Millar@gmail.com', '09276263623', 'Roman Catholic Christianity', 'Single', 'POST GRADUATE', 'GRADUATE', 'CvSu', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 3', '', '0000-00-00', '6.jpg', 'Validate'),
('122494', 'Nelson', 'Ancayan', 'Ballecer', 'Male', '36', '2001-06-25', 'Margondon', 'Cavite', 'Cameron_Vincent@gmail.com', '09274626612', 'Others', 'Married', 'COLLEGE', 'GRADUATE', 'CvSu Trece', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 4', '', '0000-00-00', '4.png', 'Validate'),
('122495', 'Dexter Lee', 'Diroy', 'Castronuevo', 'Male', '26', '1992-01-31', 'Margondon', 'Cavite', 'melendez_Maisie@gmail.com', '09287465351', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'UNDER GRADUATE', 'CvSu', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 5', '', '0000-00-00', '7.jpg', 'Validate'),
('122496', 'Abner', 'Gelanga', 'De Leon', 'Male', '26', '1992-12-09', 'Margondon', 'Cavite', 'Trejo@gmail.com', '09817235545', 'Protestant Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'Cavite', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 6', '', '0000-00-00', 'download (1).jpg', 'Validate'),
('122497', 'Edita', 'Casaul', 'Angeles', 'Female', '37', '1992-04-24', 'Margondon', 'Cavite', 'OReilly@gmail.com', '09271625355', 'Protestant Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'Cavite', 'none', 'BC2', 'Bucal 2', 'Barangay Kagawad 7', '', '0000-00-00', '11.png', 'Validate'),
('122498', 'Neil Carlo', 'De Leon', 'R', 'Male', '26', '1991-12-08', 'Margondon', 'Cavite', 'Arellano@gmail.com', '09281772663', 'Islam', 'Single', 'COLLEGE', 'UNDER GRADUATE', 'BSIT', 'none', 'BC2', 'Bucal 2', 'SK Chairman', '', '0000-00-00', '9281537.jpg', 'Validate'),
('122499', 'Joan', 'Estrella', 'F', 'Female', '32', '1989-07-08', 'Margondon', 'Cavite', 'BuckleyTrejo@gmail.com', '09283765555', 'Others', 'Married', 'COLLEGE', 'UNDER GRADUATE', 'Cavite, Maragondon', 'none', 'BC2', 'Bucal 2', 'Secretary', '2nd', '2018-08-20', '10.png', 'Validate'),
('122500', 'Soledad', 'Eseque', ' ', 'Female', '27', '1991-12-08', 'Margondon', 'Cavite', 'Arellano@gmail.com', '09972616225', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'UNDER GRADUATE', 'CvSu', 'none', 'BC2', 'Bucal 2', 'Treasurer', '', '0000-00-00', 'xxsccv - Copy.png', 'Validate'),
('138320', 'Rico ', 'Granado	', 'V', 'Male', '29', '1990-02-09', 'Cavites', 'Bucal 3 Maragondon Cavite', 'psymonasegurado@gmail.com', '09972616235', 'Protestant Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'Pup', 'none', 'BC3A', 'Bucal 3A', 'Punong Barangay', '', '0000-00-00', 'images.jpg', 'Validate'),
('138321', 'Roderick ', 'Pescasio', 'Loyola', 'Male', '26', '1990-09-01', 'Cavite', 'Bucal 3 Maragondon Cavite', 'psymonasegurado@gmail.com', '09423423423', 'Others', 'Single', 'VOCATIONAL', 'UNDER GRADUATE', 'Pup', 'none', 'BC3A', 'Bucal 3A', 'Barangay Kagawad 1', '', '0000-00-00', 'download (1).jpg', 'Validate'),
('138322', 'Lucilo ', 'Lirio', 'Angue', 'Male', '29', '1990-12-09', 'Cavite', 'Bucal 3 Maragondon Cavite', 'psymonasegurado@gmail.com', '09972616235', 'Protestant Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'Cvsu Naic', 'none', 'BC3A', 'Bucal 3A', 'Barangay Kagawad 2', '', '0000-00-00', '80877710.png', 'Validate'),
('138323', 'Benilda ', 'Bautista ', 'Castronuevo', 'Female', '40', '1975-04-29', 'Cavite', 'Bucal 3 Maragondon Cavite', 'psymonasegurado@gmail.com', '09972616231', 'Others', 'Single', 'COLLEGE', 'UNDER GRADUATE', 'Pup', 'none', 'BC3A', 'Bucal 3A', 'Barangay Kagawad 3', '1st', '2018-08-20', '6.jpg', 'Validate'),
('138324', 'Lorelie ', 'Villanueva ', 'Oreto', 'Male', '30', '1985-12-01', 'Cavite', 'Bucal 3 Maragondon Cavite', 'psymonasegurado@gmail.com', '09342394823', 'Roman Catholic Christianity', 'Married', 'VOCATIONAL', 'GRADUATE', 'Pup', 'none', 'BC3A', 'Bucal 3A', 'Barangay Kagawad 4', '', '0000-00-00', '4.png', 'Validate'),
('138325', 'Antonio Jr', 'Domingo', 'Anglo', 'Male', '40', '1992-06-20', 'Cavite', 'Bucal 3 Maragondon Cavite', 'psymonasegurado@gmail.com', '09972616235', 'Roman Catholic Christianity', 'Single', 'POST GRADUATE', 'GRADUATE', 'Cvsu Naic', 'none', 'BC3A', 'Bucal 3A', 'Barangay Kagawad 5', '', '0000-00-00', 'images (3).jpg', 'Validate'),
('138326', 'Maricel ', 'Castro', 'Espineli', 'Female', '29', '1999-09-01', 'Cavite', 'Bucal 3 Maragondon Cavite', 'psymonasegurado@gmail.com', '09972616235', 'Protestant Christianity', 'Married', 'VOCATIONAL', 'GRADUATE', 'Cvsu Naic', 'none', 'BC3A', 'Bucal 3A', 'Barangay Kagawad 6', '', '0000-00-00', '5.png', 'Validate'),
('138327', 'Ralz ', 'Alota', 'Lauren', 'Female', '40', '1990-02-01', 'Cavite', 'Bucal 3 Maragondon Cavite', 'psymonasegurado@gmail.com', '09972616235', 'Islam', 'Single', 'COLLEGE', 'GRADUATE', 'Cvsu Naic', 'none', 'BC3A', 'Bucal 3A', 'Barangay Kagawad 7', '', '0000-00-00', '2.png', 'Validate'),
('138328', 'John Edward', 'Magsakay', 'A. ', 'Male', '26', '1992-08-09', 'Cavite', 'Bucal 3 Maragondon Cavite', 'psymonasegurado@gmail.com', '09972616235', 'Iglesia ni Cristo', 'Single', 'COLLEGE', 'GRADUATE', 'Pup', 'none', 'BC3A', 'Bucal 3A', 'SK Chairman', '', '0000-00-00', '10.png', 'Validate'),
('138329', 'Lorenza ', 'Angeles', 'A.', 'Female', '26', '1990-02-28', 'Cavite', 'Bucal 3 Maragondon Cavite', 'OBISDILG@gmail.com', '09353075820', 'Roman Catholic Christianity', 'Single', 'VOCATIONAL', 'UNDER GRADUATE', 'Pup', 'none', 'BC3A', 'Bucal 3A', 'Secretary', '1st', '2018-08-20', 'images (1).jpg', 'Validate'),
('138330', 'Diana ', 'Mojica', 'M.', 'Female', '27', '1993-08-15', 'Cavite', 'Bucal 3 Maragondon Cavite', 'psymonasegurado@gmail.com', '09476299578', 'Others', 'Single', 'COLLEGE', 'GRADUATE', 'Cvsu Naic', 'none', 'BC3A', 'Bucal 3A', 'Treasurer', '', '0000-00-00', 'avatar-girl.jpg', 'Validate'),
('190980', 'Trojan Carlo', 'Eseque', 'E', 'Male', '22', '1643-04-12', 'Maragondon', 'Maragondon', 'Mia@gmail.com', '09992129792', 'Roman Catholic Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Punong Barangay', '2nd', '2018-02-08', 'images (6).jpg', 'Not Validate'),
('190981', 'Placida ', 'Loyola', 'Ipil', 'Female', '30', '1988-07-08', 'Maragondon, Cavite', 'Bucal 1 Maragondon', 'Julien@gmail.com', '09287465667', 'Roman Catholic', 'Single', 'COLLEGE', 'GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 1', '1st', '2018-08-20', 'images (2).jpg', 'Validate'),
('190982', 'Erlinda ', 'Bago', 'Ramirez', 'Female', '28', '1990-12-08', 'Maragondon', 'Maragondon', 'Mert@gmail.com', '09774626636', 'Protestant Christianity', 'Single', 'POST GRADUATE', 'GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 2', '', '0000-00-00', '651727placeholder_girl.jpg', 'Validate'),
('190983', 'Frederick', 'Ramirez', 'Angeles', 'Male', '28', '1991-05-07', 'Maragondon', 'Maragondon', 'Taryn@gmail.com', '09272727841', 'Islam', 'Married', 'COLLEGE', 'GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 3', '', '0000-00-00', 'dimageg.jpg', 'Validate'),
('190984', 'Danilo Jr', 'Cancel', 'Bermil', 'Male', '21', '1999-02-07', 'Maragondon', 'Maragondon', 'SholaShola@gmail.com', '09837361727', 'Iglesia ni Cristo', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 4', '', '0000-00-00', 'dimagesss.png', 'Validate'),
('190985', 'Hernando', 'Acosta', 'Cenizal', 'Male', '29', '1682-08-08', 'Maragondon', 'Maragondon', 'Nazifa@gmail.com', '09287534433', 'Roman Catholic Christianity', 'Single', 'VOCATIONAL', 'UNDER GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 5', '1st', '2018-08-20', 'aqqqwdaass.png', 'Validate'),
('190986', 'Florencito', 'Diquit', 'Arandia', 'Male', '35', '1991-04-21', 'Maragondon', 'Maragondon', 'Tammy@gmail.com', '09887462121', 'Roman Catholic Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 6', '', '0000-00-00', 'wdwdwd.png', 'Validate'),
('190987', 'Maricel', 'Poblete', 'Punongbayan', 'Female', '28', '1990-02-16', 'Maragondon', 'Maragondon', 'Kalf@gmail.com', '09287688321', 'Iglesia ni Cristo', 'Single', 'VOCATIONAL', 'GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Barangay Kagawad 7', '2nd', '2018-08-20', '283688download.png', 'Validate'),
('190988', 'Ehmil Reden', 'Sena', 'C.', 'Male', '28', '1982-06-09', 'Maragondon', 'Maragondon', 'Mia@gmail.com', '09286355212', 'Roman Catholic Christianity', 'Single', 'VOCATIONAL', 'GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'SK Chairman', '', '0000-00-00', 'xxsccv.png', 'Validate'),
('190989', 'Florencio', 'Eseque', 'M.', 'Male', '28', '1911-12-08', 'Maragondon', 'Maragondon', 'Nazifa@gmail.com', '09274721727', 'Roman Catholic', 'Single', 'COLLEGE', 'GRADUATE', 'NOne', 'None', 'BC1', 'Bucal 1', 'Secretary', '2nd', '2018-08-20', 'dimages.png', 'Validate'),
('190990', 'Noralyn', 'Bello', ' ', 'Male', '20', '1998-08-19', 'Cavite', 'Maragondon', 'Linzsaa@yahoo.com', '09274762612', 'Others', 'Single', 'ELEMENTARY', 'GRADUATE', 'None', 'None', 'BC1', 'Bucal 1', 'Treasurer', '3rd', '2018-08-20', 'images (5).jpg', 'Validate'),
('231330', 'Erick ', 'Acosta', 'A.', 'Male', '30', '1989-11-09', 'Cavites', 'Maragondon', 'ako@gmail.com', '09972616231', 'Protestant Christianity', 'Married', 'COLLEGE', 'UNDER GRADUATE', 'Pup Cavite', 'None', 'BC3B', 'Bucal 3B', 'Punong Barangay', '', '0000-00-00', '1.png', 'Not Validate'),
('231331', 'Oscar ', 'Pescasio', 'Buena', 'Male', '45', '1980-08-01', 'Cavites', 'Maragondon', 'ako@gmail.com', '09971616234', 'Protestant Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'Pup Cavite', 'None', 'BC3B', 'Bucal 3B', 'Barangay Kagawad 1', '', '0000-00-00', '11.png', 'Not Validate'),
('231332', 'Rowena ', 'Castronuevo', 'Anglo', 'Female', '25', '1992-09-02', 'Cavites', 'Maragondon', 'ako@gmail.com', '09476299578', 'Iglesia ni Cristo', 'Single', 'ELEMENTARY', 'GRADUATE', 'Pup Cavite', 'None', 'BC3B', 'Bucal 3B', 'Barangay Kagawad 2', '', '0000-00-00', 'images (4).jpg', 'Not Validate'),
('231333', 'Rolando', 'Morada', 'Dipon', 'Female', '24', '1992-02-09', 'Maragondon', 'Maragondon cavite', 'Morada@gmail.com', '09281727277', 'Iglesia ni Cristo', 'Married', 'COLLEGE', 'UNDER GRADUATE', 'Pup', 'Chef', 'BC3B', 'Bucal 3B', 'Barangay Kagawad 3', '', '0000-00-00', 'images (3).jpg', 'Not Validate'),
('231334', 'Eldefonso jr', 'Bertulano', 'Panlima', 'Male', '35', '1981-08-11', 'Maragondon', 'Maragondon cavite', 'bertulano@gmail.com', '09287625535', 'Others', 'Single', 'COLLEGE', 'GRADUATE', 'Pup', 'Teacher', 'BC3B', 'Bucal 3B', 'Barangay Kagawad 4', '', '0000-00-00', 'images (1).png', 'Not Validate'),
('231335', 'Edgardo', 'Orenciano', 'Copino', 'Male', '35', '1985-04-28', 'Maragondon', 'Maragondon cavite', 'Orenciano@gmail.com', '09872717277', 'Others', 'Single', 'COLLEGE', 'GRADUATE', 'Pup', 'None', 'BC3B', 'Bucal 3B', 'Barangay Kagawad 5', '', '0000-00-00', '2.png', 'Not Validate'),
('231336', 'Nestor', 'Angue', 'Anglo', 'Male', '28', '1993-07-20', 'Maragondon', 'Maragondon cavite', 'Angue@gmail.com', '09281777373', 'Protestant Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'Pup', 'None', 'BC3B', 'Bucal 3B', 'Barangay Kagawad 6', '', '0000-00-00', 'download (1).jpg', 'Not Validate'),
('231337', 'Edgardo', 'Martinez', 'Dipon', 'Male', '27', '1990-09-02', 'Maragondon', 'Maragondon cavite', 'martines@gmail.com', '09282736455', 'Others', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'Pup', 'None', 'BC3B', 'Bucal 3B', 'Barangay Kagawad 7', '', '0000-00-00', 'images.png', 'Not Validate'),
('231338', 'Erwin', 'Baldoz', 'M', 'Male', '29', '1992-02-09', 'Maragondon', 'Maragondon cavite', 'erwin@gmail.com', '09817263612', 'Iglesia ni Cristo', 'Single', 'COLLEGE', 'GRADUATE', 'Pup', 'None', 'BC3B', 'Bucal 3B', 'SK Chairman', '', '0000-00-00', '10.png', 'Not Validate'),
('231339', 'Cesil', 'Dipon', 'R', 'Female', '35', '1990-12-21', 'Maragondon', 'Maragondon cavite', 'psymonasegurado@gmail.com', '09156530670', 'Iglesia ni Cristo', 'Single', 'COLLEGE', 'GRADUATE', 'Pup', 'None', 'BC3B', 'Bucal 3B', 'Secretary', '1st', '2018-08-20', '6.jpg', 'Not Validate'),
('231340', 'Diana', 'Mojica', 'M', 'Female', '35', '1987-02-09', 'Maragondon Cavite', 'Bucal 3b Maragondon Cavte', 'Cesil@gmail.com', '09859872777', 'Protestant Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'Pup Maragondon', 'IT', 'BC3B', 'Bucal 3B', 'Treasurer', '', '0000-00-00', '4.png', 'Not Validate'),
('244390', 'Manolo  ', 'Diño', 'A', 'Male', '40', '1950-04-12', 'Cavite', 'Bucal 4A Maragondon, Cavite', 'eseque.editha@gmail.com', '09782342342', 'Roman Catholic Christianity', 'Married', 'VOCATIONAL', 'GRADUATE', 'Cavite', 'Barangay Captain', 'BC4A', 'Bucal 4A', 'Punong Barangay', '', '0000-00-00', 'images.jpg', 'Not Validate'),
('244391', 'Agapito', 'Salorsano', 'Dionido', 'Male', '50', '1940-01-01', 'Cavite', 'Bucal 4A', 'Agapito@gmail.com', '09234828347', 'Roman Catholic Christianity', 'Married', 'VOCATIONAL', 'GRADUATE', 'PUP', 'Barangay Kagawad', 'BC4A', 'Bucal 4A', 'Barangay Kagawad 1', '', '0000-00-00', 'images (1).jpg', 'Not Validate'),
('244392', 'Danilo ', 'Salorsana', 'Anico', 'Male', '29', '1990-01-01', 'Cavite', 'Bucal 4A', 'Anico@gmail.com', '09762348237', 'Roman Catholic Christianity', 'Single', 'VOCATIONAL', 'GRADUATE', 'PUP', 'Barangay Kagawad', 'BC4A', 'Bucal 4A', 'Barangay Kagawad 2', '', '0000-00-00', 'images.png', 'Not Validate'),
('244393', 'Gray', 'Manguiat', 'Diño', 'Male', '30', '1989-01-01', 'Cavite', 'Bucal 4A', 'Gray@gmail.com', '09239472394', 'Roman Catholic Christianity', 'Married', 'VOCATIONAL', 'GRADUATE', 'PUP', 'Barangay Kagawad', 'BC4A', 'Bucal 4A', 'Barangay Kagawad 3', '', '0000-00-00', '941877images (1).jpg', 'Not Validate'),
('244394', 'Yolanda', 'Anico', 'Aniel', 'Female', '31', '1988-12-01', 'Manila', 'Bucal 4A', 'Aniel@gmail.com', '09234827349', 'Iglesia ni Cristo', 'Married', 'POST GRADUATE', 'UNDER GRADUATE', 'Cvsu ', 'Barangay Kagawad', 'BC4A', 'Bucal 4A', 'Barangay Kagawad 4', '', '0000-00-00', 'default_avatar_female.jpg', 'Not Validate'),
('244395', 'Marino ', 'Anico', 'Granado', 'Male', '33', '1987-05-31', 'PGH Manila', 'Bucal 4A', 'Marinokaygwapo@gmail.com', '09234672376', 'Roman Catholic Christianity', 'Married', 'VOCATIONAL', 'UNDER GRADUATE', 'Law / UP diliman ', 'Barangay Kagawad', 'BC4A', 'Bucal 4A', 'Barangay Kagawad 5', '', '0000-00-00', '987623images.jpg', 'Not Validate'),
('244396', 'Dennis ', 'Anico', 'Dionido', 'Male', '35', '1985-02-12', 'Cavite, City', 'Bucal 4A, Maragondon, Cavite', 'Denniskaygaling@gmail.com', '09472437423', 'Roman Catholic Christianity', 'Married', 'POST GRADUATE', 'UNDER GRADUATE', 'PUP/ Engineering', 'Barangay Kagawad', 'BC4A', 'Bucal 4A', 'Barangay Kagawad 6', '', '0000-00-00', 'photo.gif', 'Not Validate'),
('244397', 'Ireneo ', 'Anico', 'Lugami', 'Male', '36', '1983-05-25', 'Bucal 4A, Maragondon, Cavite', 'Bucal 4A, Maragondon, Cavite', 'Ireneo@gmail.com', '09723482342', 'Roman Catholic Christianity', 'Married', 'VOCATIONAL', 'GRADUATE', 'PUP', 'Barangay Kagawad', 'BC4A', 'Bucal 4A', 'Barangay Kagawad 7', '', '0000-00-00', '634926images.png', 'Not Validate'),
('244398', 'Junell J. Manilag ', 'Manilag ', 'Joros', 'Male', '40', '1979-08-24', 'Bucal 4A, Maragondon, Cavite', 'Bucal 4A, Maragondon, Cavite', 'Junell@gmail.com', '09234723423', 'Roman Catholic Christianity', 'Married', 'POST GRADUATE', 'GRADUATE', 'PUP', 'Barangay Kagawad', 'BC4A', 'Bucal 4A', 'SK Chairman', '', '0000-00-00', '372390images (1).jpg', 'Not Validate'),
('244399', 'Raquel', ' Pachew', 'C', 'Female', '39', '1980-06-21', 'Bucal 4A, Maragondon, Cavite', 'Bucal 4A, Maragondon, Cavite', 'Pachew@gmail.com', '08234892348', 'Roman Catholic Christianity', 'Married', 'POST GRADUATE', 'GRADUATE', 'PUP', 'Treasurer', 'BC4A', 'Bucal 4A', 'Treasurer', '', '0000-00-00', 'employee-female-default.jpg', 'Not Validate'),
('244400', 'Elmie ', 'Dimaisip', 'V', 'Female', '29', '1989-04-23', 'Bucal 4A, Maragondon, Cavite', 'Bucal 4A, Maragondon, Cavite', 'as36urad015@gmail.com', '09476299578', 'Roman Catholic', 'Single', 'POST GRADUATE', 'GRADUATE', 'PUP', 'Barangay Secretary', 'BC4A', 'Bucal 4A', 'Secretary', '2nd', '2018-08-20', '460143default_avatar_female.jpg', 'Not Validate'),
('318650', 'Roberto ', 'Salorsano', 'D', 'Male', '45', '1980-09-20', 'Maragondon', 'Maragondon Cavite', 'Salorsano@gmail.com', '09827165312', 'Protestant Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'BSOA', 'Barangay Campatin', 'BC4B', 'Bucal 4B', 'Punong Barangay', '', '0000-00-00', '2.png', 'Not Validate'),
('318651', 'Nolasco', 'Diño', 'Gonzales', 'Male', '40', '1978-03-29', 'Maragondon', 'Maragondon Cavite', 'Dino_Nolasco@gmail.com', '09281888828', 'Protestant Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'BSOA', 'Kagawad', 'BC4B', 'Bucal 4B', 'Barangay Kagawad 1', '', '0000-00-00', 'images (3).jpg', 'Not Validate'),
('318652', 'Jocelyn', 'Angue', 'Orenciano', 'Female', '37', '1980-06-10', 'Maragondon', 'Maragondon Cavite', 'Jocelyn_Angue@gmail.com', '09287816212', 'Protestant Christianity', 'Single', 'POST GRADUATE', 'GRADUATE', 'BSIT', 'Barangay Kagawad', 'BC4B', 'Bucal 4B', 'Barangay Kagawad 2', '', '0000-00-00', 'avatar-girl.jpg', 'Not Validate'),
('318653', 'Reylo', 'Diño', 'Diño', 'Male', '32', '1984-01-09', 'Maragondon', 'Maragondon Cavite', 'Reylo@gmail.com', '09281772717', 'Protestant Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Kagawad', 'BC4B', 'Bucal 4B', 'Barangay Kagawad 3', '', '0000-00-00', '11.png', 'Not Validate'),
('318654', 'Maria Salud', 'Villanueva', 'Diño', 'Female', '29', '1988-05-20', 'Maragondon', 'Maragondon Cavite', 'Maria_Salud@gmail.com', '09287635122', 'Protestant Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'BSED', 'Barangay Kagawad', 'BC4B', 'Bucal 4B', 'Barangay Kagawad 4', '', '0000-00-00', 'placeholder_girl.jpg', 'Not Validate'),
('318655', 'Renato', 'Villanueva', 'Caspillo', 'Male', '26', '1991-10-09', 'Maragondon', 'Maragondon Cavite', 'Villanueva_R@gmail.com', '09281766355', 'Islam', 'Single', 'COLLEGE', 'GRADUATE', 'BSCE', 'Barangay Kagawad', 'BC4B', 'Bucal 4B', 'Barangay Kagawad 5', '', '0000-00-00', 'images (1).png', 'Not Validate'),
('318656', 'Serano', 'Benesan', 'Tamayo', 'Male', '25', '1993-06-16', 'Maragondon', 'Maragondon Cavite', 'Benesan@gmail.com', '09287171111', 'Islam', 'Divorced', 'COLLEGE', 'UNDER GRADUATE', 'BSOA', 'Barangay Kagawad', 'BC4B', 'Bucal 4B', 'Barangay Kagawad 6', '', '0000-00-00', 'images.png', 'Not Validate'),
('318657', 'Anico', 'Rommel', 'Serna', 'Male', '30', '1989-03-25', 'Maragondon', 'Maragondon', 'Anico@gmail.com', '09243842342', 'Roman Catholic Christianity', 'Married', 'POST GRADUATE', 'GRADUATE', 'None', 'None', 'BC4B', 'Bucal 4B', 'Barangay Kagawad 7', '', '0000-00-00', '', 'Not Validate'),
('318658', 'Mary Grace', 'Angon', 'B', 'Female', '29', '1990-02-09', 'Maragondon', 'Maragondon Cavite', 'Mary_Grace_Angon@gmail.com', '09281765611', 'Protestant Christianity', 'Separated', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay SK Chairman', 'BC4B', 'Bucal 4B', 'SK Chairman', '', '0000-00-00', 'images (2).jpg', 'Not Validate'),
('318659', 'Margie', 'Diño', 'H', 'Female', '45', '1979-12-09', 'Maragondon', 'Maragondon Cavite', 'Margie_DINO@gmail.com', '09217274514', 'Protestant Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'BSED', 'Barangay Secretary', 'BC4B', 'Bucal 4B', 'Secretary', '1st', '2018-08-20', '4.png', 'Not Validate'),
('318660', 'Myra', 'Anglo', ' ', 'Male', '37', '0002-08-19', 'Maragondon', 'Maragondon Cavite', 'Anglo_Myra@gmail.com', '09287152312', 'Protestant Christianity', 'Separated', 'COLLEGE', 'GRADUATE', 'BSCS', 'Barangay Treasurer', 'BC4B', 'Bucal 4B', 'Treasurer', '', '0000-00-00', 'download (1).jpg', 'Not Validate'),
('375130', 'Marisa', 'Bello', 'E', 'Female', '45', '1980-09-02', 'Maragondon', 'Maragondon Cavite', 'Marisa_Bello@gmail.com', '09287615253', 'Protestant Christianity', 'Live-in', 'COLLEGE', 'GRADUATE', 'BSTM', 'Barangay Campatin', 'CP', 'Caingin', 'Punong Barangay', '', '0000-00-00', '5.png', 'Not Validate'),
('375131', 'Leonides', 'Anglo', 'Manalo', 'Female', '34', '1985-02-11', 'Maragondon', 'Maragondon Cavite', 'Leonides@gmail.com', '09281763332', 'Iglesia ni Cristo', 'Live-in', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay Kagawad', 'CP', 'Caingin', 'Barangay Kagawad 1', '', '0000-00-00', '6.jpg', 'Not Validate'),
('375132', 'Mario', 'Casama', 'Adona', 'Male', '26', '1990-10-27', 'Maragondon', 'Maragondon Cavite', 'Casama@gmail.com', '09281761233', 'Protestant Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'BSED', 'Barangay Kagawad', 'CP', 'Caingin', 'Barangay Kagawad 2', '', '0000-00-00', 'avatar-girl.jpg', 'Not Validate'),
('375133', 'Roberto', 'Anglo', 'Andulan', 'Male', '45', '1980-08-14', 'Maragondon', 'Maragondon Cavite', 'Roberto_Anglo@gmail.com', '09287616662', 'Protestant Christianity', 'Separated', 'COLLEGE', 'GRADUATE', 'BSOA', 'Barangay Kagawad', 'CP', 'Caingin', 'Barangay Kagawad 3', '', '0000-00-00', 'download (1).jpg', 'Not Validate'),
('375134', 'Russell', 'Villacarlos', 'Reyes', 'Male', '28', '1990-05-19', 'Maragondon', 'Maragondon Cavite', 'Villacarlos@gmail.com', '09543662612', 'Protestant Christianity', 'Widowed', 'COLLEGE', 'GRADUATE', 'BSED', 'Barangay Kagawad', 'CP', 'Caingin', 'Barangay Kagawad 4', '', '0000-00-00', 'images (3).jpg', 'Not Validate'),
('375135', 'Amado', 'Reloj', 'Balilla', 'Male', '41', '1981-08-29', 'Maragondon', 'Maragondon Cavite', 'Amado@gmail.com', '09265177261', 'Protestant Christianity', 'Separated', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay Kagawad', 'CP', 'Caingin', 'Barangay Kagawad 5', '', '0000-00-00', 'images.png', 'Not Validate'),
('375136', 'Victor', 'Climacosa', 'Contrano', 'Male', '27', '1991-01-27', 'Maragondon', 'Maragondon Cavite', 'Climacosa@gmail.com', '09287462332', 'Protestant Christianity', 'Separated', 'COLLEGE', 'UNDER GRADUATE', 'BSBM', 'Barangay Kagawad', 'CP', 'Caingin', 'Barangay Kagawad 6', '', '0000-00-00', 'images.jpg', 'Not Validate'),
('375137', 'Simplicio', 'Piedad', 'Angue', 'Male', '27', '1990-04-29', 'Maragondon', 'Maragondon Cavite', 'Simplicio@gmail.com', '09263542121', 'Protestant Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay Kagawad', 'CP', 'Caingin', 'Barangay Kagawad 7', '', '0000-00-00', '2.png', 'Not Validate'),
('375138', 'Bryan', 'Linson', 'M', 'Male', '32', '1982-04-21', 'Maragondon', 'Maragondon Cavite', 'Linson@gmail.com', '09261522121', 'Protestant Christianity', 'Live-in', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay SK Chairman', 'CP', 'Caingin', 'SK Chairman', '', '0000-00-00', 'images (1).png', 'Not Validate'),
('375139', 'Michelle', 'Icasiano', 'R', 'Female', '25', '1994-02-07', 'Maragondon', 'Maragondon Cavite', 'Icasiano_15@gmail.com', '09281653712', 'Protestant Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay Secretary', 'CP', 'Caingin', 'Secretary', '', '0000-00-00', 'images (1).jpg', 'Not Validate'),
('375140', 'Luzviminda', 'Joya', '  ', 'Female', '25', '1994-11-09', 'Maragondon', 'Maragondon Cavite', 'Luzviminda@gmail.com', '09286521752', 'Protestant Christianity', 'Separated', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay Treasurer', 'CP', 'Caingin', 'Treasurer', '', '0000-00-00', 'Female_Blank_Avatar.jpg', 'Not Validate'),
('394560', 'Romel', 'Manalo', 'A', 'Male', '27', '1992-05-15', 'Maragondon', 'Maragondon Cavite', 'Manalo_Romel@gmail.com', '09276141212', 'Protestant Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay Camptain', 'G1A', 'Garita A', 'Punong Barangay', '', '0000-00-00', '1.png', 'Not Validate'),
('394561', 'Larry', 'Andulan', 'Martinez', 'Male', '29', '1989-10-26', 'Maragondon', 'Maragondon Cavite', 'Andulan@gmail.com', '09281627121', 'Protestant Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay Kagawad', 'G1A', 'Garita A', 'Barangay Kagawad 1', '', '0000-00-00', '69687511.png', 'Not Validate'),
('394562', 'Jay', 'Ilagan', 'Pareja', 'Male', '38', '1981-09-06', 'Maragondon', 'Maragondon Cavite', 'Ilagan_15_Jay@gmail.com', '09283662632', 'Protestant Christianity', 'Separated', 'COLLEGE', 'UNDER GRADUATE', 'ACT', 'Barangay Kagawad', 'G1A', 'Garita A', 'Barangay Kagawad 2', '', '0000-00-00', 'download (1).jpg', 'Not Validate'),
('394563', 'Jess', 'Angeles', 'Pareja', 'Female', '49', '1975-05-27', 'Maragondon', 'Maragondon Cavite', 'AngelesAngeles@gmail.com', '09282764662', 'Protestant Christianity', 'Married', 'HIGH SCHOOL', 'UNDER GRADUATE', 'NONE', 'Barangay Kagawad', 'G1A', 'Garita A', 'Barangay Kagawad 3', '', '0000-00-00', '4.png', 'Not Validate'),
('394564', 'Rayvin Mark', 'Teaño', 'Riel', 'Male', '30', '1989-10-29', 'Maragondon', 'Maragondon Cavite', 'Rayvin_Mark00@gmail.com', '09287662121', 'Protestant Christianity', 'Separated', 'COLLEGE', 'UNDER GRADUATE', 'NONE', 'Barangay Kagawad', 'G1A', 'Garita A', 'Barangay Kagawad 4', '', '0000-00-00', 'images (1).png', 'Not Validate'),
('394565', 'Napoleon', 'De Sosa', 'Casasola', 'Male', '32', '1987-05-24', 'Maragondon', 'Maragondon Cavite', 'Napoleonsosa@gmail.com', '09282616262', 'Iglesia ni Cristo', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay Kagawad', 'G1A', 'Garita A', 'Barangay Kagawad 5', '', '0000-00-00', '488473images (1).png', 'Not Validate'),
('394566', 'Gerry', 'De Mesa', 'Joya', 'Male', '35', '1986-12-20', 'Maragondon', 'Maragondon Cavite', 'De_Mesa_Gerry@gmail.com', '09276354122', 'Iglesia ni Cristo', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay Kagawad', 'G1A', 'Garita A', 'Barangay Kagawad 6', '', '0000-00-00', 'images.png', 'Not Validate'),
('394567', 'Reynand', 'Casama', 'Angeo', 'Male', '37', '1982-04-19', 'Maragondon', 'Maragondon Cavite', 'Casama@gmail.com', '09287625125', 'Islam', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay Kagawad', 'G1A', 'Garita A', 'Barangay Kagawad 7', '', '0000-00-00', 'images (3).jpg', 'Not Validate'),
('394568', 'Tommy Kier', 'Montano', 'R', 'Male', '35', '1986-02-04', 'Maragondon', 'Maragondon Cavite', 'TommyKier@gmail.com', '09286162323', 'Protestant Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'BSED', 'Barangay SK Chairman', 'G1A', 'Garita A', 'SK Chairman', '', '0000-00-00', '3.jpg', 'Not Validate'),
('394569', 'Clarita', 'Casama', 'F', 'Female', '24', '1995-09-15', 'Maragondon', 'Maragondon Cavite', 'Casama_cc15@gmail.com', '09276252431', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay Secretary', 'G1A', 'Garita A', 'Secretary', '', '0000-00-00', 'download.png', 'Not Validate'),
('394570', 'Maria Veronica', 'Reyes', ' ', 'Female', '28', '1991-02-10', 'Maragondon', 'Maragondon Cavite', 'Maria100Veronica@gmail.com', '09282671223', 'Protestant Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'NONE', 'Barangay Treasurer', 'G1A', 'Garita A', 'Treasurer', '', '0000-00-00', 'avatar-girl.jpg', 'Not Validate'),
('405380', 'Joselito ', 'Gomez	', 'B,', 'Male', '50', '1970-02-20', 'Maragondon', 'Maragondon', 'Joselito@gmail.com', '09423842342', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'G1B', 'Garita B', 'Punong Barangay', '', '0000-00-00', '1.png', 'Not Validate'),
('405381', 'Felicitas ', 'Hornales', 'Pagara', 'Female', '40', '1980-03-15', 'Maragondon', 'Maragondon', 'Felicitas@gmail.com', '09872342342', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'G1B', 'Garita B', 'Barangay Kagawad 1', '', '0000-00-00', 'employee-female-default.jpg', 'Not Validate'),
('405382', 'Ar-Jay ', 'Abog', 'Cuevas', 'Male', '30', '1989-05-05', 'Maragondon', 'Maragondon', 'CuevasAr-jay@gmail.com', '09234874234', 'Roman Catholic Christianity', 'Single', 'POST GRADUATE', 'GRADUATE', 'None', 'None', 'G1B', 'Garita B', 'Barangay Kagawad 2', '', '0000-00-00', 'default_man_photo.jpg', 'Not Validate'),
('405383', 'Dave ', 'Reyes', 'Belmonte', 'Male', '40', '1979-06-10', 'Maragondon', 'Maragondon', 'Davebelmonte@gmail.com', '09674234234', 'Roman Catholic Christianity', 'Married', 'POST GRADUATE', 'GRADUATE', 'None', 'None', 'G1B', 'Garita B', 'Barangay Kagawad 3', '', '0000-00-00', 'default-avatar_0-1.png', 'Not Validate'),
('405384', 'Virgilio ', 'Sismaet', 'Caingal ', 'Male', '43', '1976-08-07', 'Maragondon', 'Maragondon', 'Virgillosismaet@gmail.com', '09243742342', 'Roman Catholic Christianity', 'Married', 'POST GRADUATE', 'GRADUATE', 'None', 'None', 'G1B', 'Garita B', 'Barangay Kagawad 4', '', '0000-00-00', 'man.png', 'Not Validate'),
('405385', 'Jeffrey ', 'Ventura', 'Mendoza', 'Male', '35', '1984-01-20', 'Maragondon', 'Maragondon', 'Venturajef@gmail.com', '09234823423', 'Protestant Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'G1B', 'Garita B', 'Barangay Kagawad 5', '', '0000-00-00', 'images.jpg', 'Not Validate'),
('405386', 'Allan ', 'Hornales', 'Decreto', 'Male', '36', '1983-03-15', 'Maragondon', 'Maragondon', 'Allanhornales@gmail.com', '09423742342', 'Roman Catholic Christianity', 'Married', 'POST GRADUATE', 'GRADUATE', 'None', 'None', 'G1B', 'Garita B', 'Barangay Kagawad 6', '', '0000-00-00', '965833images.jpg', 'Not Validate'),
('405387', 'Ariel ', 'Angeles', 'Caples', 'Male', '30', '1989-02-18', 'Maragondon', 'Maragondon', 'ArielAngeles@gmail.com', '09234283423', 'Roman Catholic Christianity', 'Single', 'POST GRADUATE', 'UNDER GRADUATE', 'None', 'None', 'G1B', 'Garita B', 'Barangay Kagawad 7', '', '0000-00-00', 'images (1).jpg', 'Not Validate'),
('405388', 'Jelo', 'De Guia', 'Bermil', 'Male', '20', '1999-03-03', 'Maragondon', 'Maragondon', 'BermilJelo@gmail.com', '09863240234', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'UNDER GRADUATE', 'None', 'None', 'G1B', 'Garita B', 'SK Chairman', '', '0000-00-00', 'male-icon-4.jpg', 'Not Validate'),
('405389', 'Cherrylyn', ' Bautista', 'Bermil', 'Female', '34', '1984-05-05', 'Maragondon', 'Maragondon', 'Cherrylyn0378@gmail.com', '09243472342', 'Roman Catholic Christianity', 'Married', 'POST GRADUATE', 'UNDER GRADUATE', 'None', 'None', 'G1B', 'Garita B', 'Treasurer', '', '0000-00-00', 'icon-female.png', 'Not Validate'),
('405390', 'Lovely ', 'Ocampo', 'Maine ', 'Female', '30', '1989-02-25', 'Maragondon', 'Maragondon', 'Maineocampo30@gmail.com', '09642342342', 'Roman Catholic Christianity', 'Single', 'POST GRADUATE', 'GRADUATE', 'None', 'None', 'G1B', 'Garita B', 'Secretary', '', '0000-00-00', '542483employee-female-default.jpg', 'Not Validate'),
('414180', 'Cornelio ', 'Agrimano ', 'R', 'Male', '50', '1969-05-21', 'Maragondon', 'Maragondon', 'Cornelio@gmail.com', '09672342342', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'LM', 'Layong Mabilog', 'Punong Barangay', '', '0000-00-00', 'man.png', 'Not Validate'),
('414181', 'Rodel ', 'Gloton', 'Villa', 'Male', '40', '1979-03-05', 'Maragondon', 'Maragondon', 'Glotonrodel23@gmail.com', '09823423423', 'Roman Catholic Christianity', 'Married', 'POST GRADUATE', 'UNDER GRADUATE', 'None', 'None', 'LM', 'Layong Mabilog', 'Barangay Kagawad 1', '', '0000-00-00', 'default_man_photo.jpg', 'Not Validate'),
('414182', 'Moises', 'Dimapilis', ' Signo', 'Male', '42', '1976-08-23', 'Maragondon', 'Maragondon', 'Dimapilismoises@gmail.com', '09723423423', 'Iglesia ni Cristo', 'Single', 'POST GRADUATE', 'UNDER GRADUATE', 'None', 'None', 'LM', 'Layong Mabilog', 'Barangay Kagawad 2', '', '0000-00-00', 'default-avatar_0-1.png', 'Not Validate'),
('414183', 'Leah ', 'Gloriaga', 'Binahunan', 'Female', '38', '1981-01-02', 'Maragondon', 'Maragondon', 'Leahgloriaga@gmail.com', '09672352352', 'Roman Catholic Christianity', 'Single', 'VOCATIONAL', 'GRADUATE', 'None', 'None', 'LM', 'Layong Mabilog', 'Barangay Kagawad 3', '', '0000-00-00', 'default_avatar_female.jpg', 'Not Validate'),
('414184', 'Lans Evans', ' Aganon', ' Glean', 'Male', '29', '1989-03-24', 'Maragondon', 'Maragondon', 'Lansevans24@gmail.com', '09789234234', 'Roman Catholic Christianity', 'Single', 'POST GRADUATE', 'UNDER GRADUATE', 'None', 'None', 'LM', 'Layong Mabilog', 'Barangay Kagawad 4', '', '0000-00-00', '325478man.png', 'Not Validate'),
('414185', 'Dante ', ' Berenguel', 'Dinco', 'Male', '43', '1976-02-20', 'Maragondon', 'Maragondon', 'Dantesparda@gmail.com', '09723423423', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'LM', 'Layong Mabilog', 'Barangay Kagawad 5', '', '0000-00-00', 'bio-thumb-male-default.png', 'Not Validate'),
('414186', 'Pamfilo', 'Dinlasan', ' Glean', 'Male', '40', '1979-03-20', 'Maragondon', 'Maragondon', 'Pamfilolacson@gmail.com', '09723423423', 'Others', 'Married', 'POST GRADUATE', 'GRADUATE', 'None', 'None', 'LM', 'Layong Mabilog', 'Barangay Kagawad 6', '', '0000-00-00', 'images.jpg', 'Not Validate'),
('414187', 'Christopher ', 'Beratio', 'Martal', 'Male', '35', '1983-05-18', 'Maragondon', 'Maragondon', 'Beratiomartal@gmail.com', '09673424234', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'LM', 'Layong Mabilog', 'Barangay Kagawad 7', '', '0000-00-00', '716904images (1).jpg', 'Not Validate'),
('414188', 'John Harold', 'Contrano', 'Belmonte', 'Male', '23', '1996-03-15', 'Maragondon', 'Maragondon', 'Haroldcontran15@gmail.com', '09723423423', 'Roman Catholic Christianity', 'Single', 'HIGH SCHOOL', 'UNDER GRADUATE', 'None', 'None', 'LM', 'Layong Mabilog', 'SK Chairman', '', '0000-00-00', 'images (1).jpg', 'Not Validate'),
('414189', 'Jovelyn ', 'Vega', 'Angue', 'Female', '33', '1986-05-25', 'Maragondon', 'Maragondon', 'Jovelynvega@gmail.com', '09623423423', 'Roman Catholic Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'LM', 'Layong Mabilog', 'Treasurer', '', '0000-00-00', 'employee-female-default.jpg', 'Not Validate'),
('414190', 'Jovie Ann ', 'Tanyag', 'Anglo', 'Female', '41', '1979-03-20', 'Maragondon', 'Maragondon', 'Jovieanglo@gmail.com', '09723423423', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'LM', 'Layong Mabilog', 'Secretary', '', '0000-00-00', 'icon-female.png', 'Not Validate'),
('446990', 'Fernando ', 'Hernandez', 'Manalo', 'Male', '50', '1969-03-20', 'Maragondon', 'Maragondon', 'Fernando20@gmail.com', '09232342342', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'MB', 'Mabato', 'Punong Barangay', '', '0000-00-00', 'bio-thumb-male-default.png', 'Validate'),
('446991', 'Santiago ', 'Angue jr.', 'Magtibay', 'Male', '40', '1979-02-20', 'Maragondon', 'Maragondon', 'Santiago2019@gmail.com', '09234234234', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'MB', 'Mabato', 'Barangay Kagawad 1', '', '0000-00-00', 'default_man_photo.jpg', 'Not Validate'),
('446992', 'Jimmy ', 'Contrano', 'Subiri', 'Male', '45', '1974-02-25', 'Maragondon', 'Maragondon', 'Jimmysubiri@gmail.com', '09234823423', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'MB', 'Mabato', 'Barangay Kagawad 2', '', '0000-00-00', 'default-avatar_0-1.png', 'Not Validate'),
('446993', 'Victorino ', ' Del Rosario', 'Beltran', 'Male', '47', '1973-08-25', 'Maragondon', 'Maragondon', 'Victorinobel@gmail.com', '09238236598', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'MB', 'Mabato', 'Barangay Kagawad 3', '', '0000-00-00', '437135default-avatar_0-1.png', 'Not Validate'),
('446994', 'Jessica ', 'Reyes', 'Gluda', 'Female', '40', '1978-07-28', 'Maragondon', 'Maragondon', 'Jessicagluda@gmail.com', '09456789032', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'MB', 'Mabato', 'Barangay Kagawad 4', '', '0000-00-00', 'icon-female.png', 'Not Validate'),
('446995', 'Bernaldo', 'Angue', ' Anciano', 'Male', '43', '1976-05-28', 'Maragondon', 'Maragondon', 'Anguean@gmail.com', '09456789024', 'Protestant Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'MB', 'Mabato', 'Barangay Kagawad 5', '', '0000-00-00', 'man.png', 'Not Validate'),
('446996', 'Lauro', 'Magtibay', ' Berber', 'Male', '49', '1969-06-20', 'Maragondon', 'Maragondon', 'Lauromagtibay20@gmail.com', '09567890234', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'MB', 'Mabato', 'Barangay Kagawad 6', '', '0000-00-00', 'images.png', 'Not Validate'),
('446997', 'Eduardo ', ' Angat', 'Ilao', 'Male', '36', '1984-02-20', 'Maragondon', 'Maragondon', 'Eduardoangat@gmail.com', '09467891233', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'MB', 'Mabato', 'Barangay Kagawad 7', '', '0000-00-00', 'images.jpg', 'Not Validate'),
('446998', 'Jerson ', ' Equillano', 'Reyes', 'Male', '22', '1997-01-20', 'Maragondon', 'Maragondon', 'Jersonone@gmail.com', '09523492342', 'Roman Catholic Christianity', 'Single', 'POST GRADUATE', 'UNDER GRADUATE', 'None', 'None', 'MB', 'Mabato', 'SK Chairman', '', '0000-00-00', '1.png', 'Not Validate'),
('446999', 'Lorena ', 'Macasadia', 'Angeles', 'Female', '40', '1979-03-12', 'Maragondon', 'Maragondon', 'Lorenaangeles@gmail.com', '09523423423', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'MB', 'Mabato', 'Treasurer', '', '0000-00-00', 'default_avatar_female.jpg', 'Not Validate'),
('447000', 'Rebeca ', 'Mojica', 'Bermil', 'Female', '43', '1975-07-20', 'Maragondon', 'Maragondon', 'Mojicarebeca@gmail.com', '09523423042', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'MB', 'Mabato', 'Secretary', '', '0000-00-00', 'woman.png', 'Not Validate'),
('475850', 'Rufo', 'Gancayco', 'M', 'Male', '45', '1987-12-31', 'pico', '2323', '12312@yahoo.com', '14141413141', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'asdasd', 'kpaitan', 'PT1', 'Pantihan 1', 'Punong Barangay', '', '0000-00-00', '', 'Not Validate'),
('475851', 'Alfred', 'Enitorio', 'P', 'Male', '45', '1987-12-24', 'sadad', '1231241', '212412@yahoo.com', '12412412412', 'Islam', 'Married', 'ELEMENTARY', 'UNDER GRADUATE', 'asdasdasdas', 'kpaitan', 'PT1', 'Pantihan 1', 'Barangay Kagawad 1', '', '0000-00-00', '', 'Not Validate'),
('475852', 'Evelyn', 'Angeles', 'D', 'Female', '45', '1987-02-14', 'asdas', 'sadada', '1241414@yahoo.com', '12414141413', 'Iglesia ni Cristo', 'Married', 'ELEMENTARY', 'GRADUATE', '124142', 'kpaitan', 'PT1', 'Pantihan 1', 'Barangay Kagawad 2', '', '0000-00-00', '', 'Not Validate'),
('475853', 'Mary Jane', 'Cabadin', 'G', 'Female', '45', '1987-02-11', 'asdasd', 'sadad', 'asdasd@yahoo.com', '21412434141', 'Protestant Christianity', 'Married', 'ELEMENTARY', 'UNDER GRADUATE', '13123', 'as', 'PT1', 'Pantihan 1', 'Barangay Kagawad 3', '', '0000-00-00', '', 'Not Validate'),
('475854', 'Rosalinda', 'Alano', 'M.', 'Female', '45', '1985-12-11', '12412', '1412', '21421@yahoo.com', '12124124124', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', '412421421', 'kpaitan', 'PT1', 'Pantihan 1', 'Barangay Kagawad 4', '', '0000-00-00', '', 'Not Validate'),
('475855', 'Anastacio', 'De Sosa', ' D', 'Male', '45', '1985-02-13', '1241', '12412', '1241@yahoo.com', '24124141241', 'Protestant Christianity', 'Married', 'ELEMENTARY', 'GRADUATE', '2412', 'kpaitan', 'PT1', 'Pantihan 1', 'Barangay Kagawad 5', '', '0000-00-00', '', 'Not Validate'),
('475856', 'Vicente', 'Casal', 'M', 'Male', '45', '1985-12-11', '21142', '1412', '241421@yahoo.com', '12412412421', 'Roman Catholic Christianity', 'Separated', 'ELEMENTARY', 'GRADUATE', '12412412', 'kpaitan', 'PT1', 'Pantihan 1', 'Barangay Kagawad 6', '', '0000-00-00', '', 'Not Validate'),
('475857', 'Alvin', 'De Mesa', 'V', 'Male', '45', '1982-02-23', '12123', '131', '1231@yahoo.com', '21311212414', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', 'sadasd', 'asda', 'PT1', 'Pantihan 1', 'Barangay Kagawad 7', '', '0000-00-00', '', 'Not Validate'),
('475858', 'Robert', 'Lizardo', 's', 'Male', '45', '1992-02-13', '12412', 'sadad', 'sada@yahoo.com', '24124124124', 'Roman Catholic Christianity', 'Married', 'ELEMENTARY', 'GRADUATE', '2412', 'kpaitan', 'PT1', 'Pantihan 1', 'SK Chairman', '', '0000-00-00', '', 'Not Validate'),
('475859', 'Arlyn', 'Ovida', 'assa', 'Female', '45', '0086-02-11', 'asda', 'asda', 'asdasd@yahoo.com', '12141212124', 'Protestant Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', '2412', 'kpaitan', 'PT1', 'Pantihan 1', 'Treasurer', '', '0000-00-00', '', 'Not Validate'),
('475860', 'Melencia', 'Novelo', 's', 'Male', '45', '1984-12-12', 'asda', 'asda', 'asdasd@yahoo.com', '24141241241', 'Others', 'Married', 'ELEMENTARY', 'GRADUATE', 'asdasd', 'sadada', 'PT1', 'Pantihan 1', 'Secretary', '', '0000-00-00', 'avatar-girl.jpg', 'Not Validate'),
('532720', 'Estelito', 'Hernandez	', 's', 'Male', '24124', '1988-12-23', 'asdasd', 'asdsa', '639092775998@yahoo.com', '21414124142', 'Roman Catholic Christianity', 'Separated', 'HIGH SCHOOL', 'GRADUATE', '13123', 'kpaitan', 'PT2', 'Pantihan 2', 'Punong Barangay', '', '0000-00-00', '', 'Not Validate'),
('532721', 'Zaldy', 'Marjes', 'M.', 'Male', '45', '1982-12-31', 'adad', 'asda', 'sada@yahoo.com', '24141241241', 'Iglesia ni Cristo', 'Single', 'ELEMENTARY', 'GRADUATE', '124124', '22132', 'PT2', 'Pantihan 2', 'Barangay Kagawad 1', '', '0000-00-00', '', 'Not Validate'),
('532722', 'Joseph', 'Panganiban', 'P', 'Male', '22141', '1985-02-13', 'asdasd', 'asda', '09272379839@yahoo.com', '24214124121', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', '2412412', '214124', 'PT2', 'Pantihan 2', 'Barangay Kagawad 2', '', '0000-00-00', '', 'Not Validate'),
('532723', 'Marlon', ' Bendo', 'D', 'Male', '21213', '1985-12-31', 'ada', 'asd', '41421@yahoo.com', '24122112412', 'Roman Catholic Christianity', 'Widowed', 'ELEMENTARY', 'GRADUATE', '2412412', 'sdad', 'PT2', 'Pantihan 2', 'Barangay Kagawad 3', '', '0000-00-00', '', 'Not Validate'),
('532724', 'Candido', 'Marjes', 'S', 'Female', '23', '1991-12-31', '12132', '23123123', '21412@yahoo.com', '21241212412', 'Others', 'Married', 'ELEMENTARY', 'GRADUATE', '21', '1241241', 'PT2', 'Pantihan 2', 'Barangay Kagawad 4', '', '0000-00-00', '', 'Not Validate'),
('532725', 'Pablo ', 'Tafalla', 'm', 'Male', '2414', '1944-02-13', 'asda', 'asd', 'asdasd@yahoo.com', '14121241241', 'Roman Catholic Christianity', 'Divorced', 'ELEMENTARY', 'GRADUATE', 'asdasdasdas', '22132', 'PT2', 'Pantihan 2', 'Barangay Kagawad 5', '', '0000-00-00', '', 'Not Validate'),
('532726', 'Tolentino', 'Panganiban', 'D', 'Male', '21', '1945-12-12', 'asd', 'asda', '1241414@yahoo.com', '12414513124', 'Roman Catholic Christianity', 'Widowed', 'ELEMENTARY', 'GRADUATE', '12', '21213', 'PT2', 'Pantihan 2', 'Barangay Kagawad 6', '', '0000-00-00', '', 'Not Validate'),
('532727', 'Benjamin', 'Casipi', 'c', 'Male', '12412', '1943-02-11', 'asdas', '1231241', '639092775998@yahoo.com', '24142121412', 'Islam', 'Live-in', 'HIGH SCHOOL', 'GRADUATE', '13123', '3', 'PT2', 'Pantihan 2', 'Barangay Kagawad 7', '', '0000-00-00', '', 'Not Validate'),
('532728', 'Allysa', 'Ronsairo', 'v ', 'Female', '21', '1988-12-12', '1221', '2141', '241421@yahoo.com', '12131231231', 'Roman Catholic Christianity', 'Separated', 'ELEMENTARY', 'GRADUATE', '24122', 'asda', 'PT2', 'Pantihan 2', 'SK Chairman', '', '0000-00-00', '', 'Not Validate'),
('532729', 'Nenith', 'Panganiban', 's', 'Female', '23', '1985-12-12', '21131', '1231', '1241414@yahoo.com', '22131244121', 'Protestant Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', '2113', '2313', 'PT2', 'Pantihan 2', 'Treasurer', '', '0000-00-00', '', 'Not Validate'),
('532730', 'Valentina', 'Gariando', ' ', 'Female', '41221', '1984-02-12', 'sad', 'sada', 'Valentina_Gariando@gmail.com', '09127777199', 'Iglesia ni Cristo', 'Married', 'ELEMENTARY', 'GRADUATE', 'None', 'sadada', 'PT2', 'Pantihan 2', 'Secretary', '1st', '2018-08-20', 'images (1).jpg', 'Not Validate'),
('565920', 'Manuel', 'Gloriani', 'p', 'Male', '12312', '1990-12-31', '1231', '213', '2131331231313123123123131321@yah.com', '12123123123', 'Iglesia ni Cristo', 'Single', 'ELEMENTARY', 'GRADUATE', '13221', '214124', 'PT3', 'Pantihan 3', 'Punong Barangay', '', '0000-00-00', '', 'Not Validate'),
('565921', 'Percina', 'Hernandez', 'D', 'Female', '45', '1985-12-11', '21321', '2312', '1241414@yahoo.com', '12141241412', 'Roman Catholic Christianity', 'Divorced', 'ELEMENTARY', 'GRADUATE', '212', 'as', 'PT3', 'Pantihan 3', 'Barangay Kagawad 1', '', '0000-00-00', '', 'Not Validate'),
('565922', 'Emelita', 'Bilbao', 'P.', 'Female', '2313', '1984-02-02', 'asdas', 'adasd', 'asdasd@yahoo.com', '21421412412', 'Islam', 'Married', 'ELEMENTARY', 'GRADUATE', '124142', '2123123', 'PT3', 'Pantihan 3', 'Barangay Kagawad 2', '', '0000-00-00', '', 'Not Validate'),
('565923', 'Marieta', 'Santos', 'E', 'Female', '45', '1986-01-31', 'sadad', '2323', 'kimdondiegoramos@yahoo.com', '21412434141', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', '124142', '22132', 'PT3', 'Pantihan 3', 'Barangay Kagawad 3', '', '0000-00-00', '', 'Not Validate'),
('565924', 'Pedro', 'Oliver', 'd', 'Male', '23', '1986-02-11', 'ad', '2323', '09272379839@yahoo.com', '12414141413', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', 'asdasdasdas', 'sadada', 'PT3', 'Pantihan 3', 'Barangay Kagawad 4', '', '0000-00-00', '', 'Not Validate'),
('565925', 'Roberto', 'Oliver', 'R', 'Male', '45', '1985-12-23', 'asda', 'asd', 'asdasd@yahoo.com', '12412412412', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', 'asdasdasdas', 'kpaitan', 'PT3', 'Pantihan 3', 'Barangay Kagawad 5', '', '0000-00-00', '', 'Not Validate'),
('565926', 'Magligtas', 'Mojica', 'G', 'Female', '45', '1986-12-31', '21131', '1412', '09272379839@yahoo.com', '14141413141', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', 'asdasdasdas', 'kpaitan', 'PT3', 'Pantihan 3', 'Barangay Kagawad 6', '', '0000-00-00', '', 'Not Validate'),
('565927', 'Celestino', 'Chaves', 'A', 'Female', '45', '1983-12-31', '21131', '2323', 'kimdondiegoramos@yahoo.com', '24214124121', 'Protestant Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', 'asdasd', 'asda', 'PT3', 'Pantihan 3', 'Barangay Kagawad 7', '', '0000-00-00', '', 'Not Validate'),
('565928', 'Anselma', 'Nuestro', 'M.', 'Female', '12312', '1985-12-29', 'asdasd', '1231241', '0930268080@yahoo.com', '24141241241', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'UNDER GRADUATE', '2412412', 'as', 'PT3', 'Pantihan 3', 'SK Chairman', '', '0000-00-00', '', 'Not Validate'),
('565929', 'Celicia', 'Oliver', 'G', 'Female', '45', '1984-12-11', 'asda', 'sadad', 'kimdondiegoramos@yahoo.com', '21412434141', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', 'asdasdasdas', 'kpaitan', 'PT3', 'Pantihan 3', 'Treasurer', '', '0000-00-00', '', 'Not Validate'),
('565930', 'Jether Dave', 'Incapas', 'D.', 'Male', '223', '1985-02-01', 'asdasd', 'asd', 'kimdondiegoramos@yahoo.com', '12412412412', 'Protestant Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', 'asdasdasdas', 'kpaitan', 'PT3', 'Pantihan 3', 'Secretary', '', '0000-00-00', '', 'Not Validate'),
('593980', 'Julita', 'Coronel', 'm', 'Female', '45', '1985-12-21', '12412', 'asda', 'kimdondiegoramos@yahoo.com', '12414141413', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', '2412', 'kpaitan', 'PT4', 'Pantihan 4', 'Punong Barangay', '', '0000-00-00', '', 'Not Validate'),
('593981', 'Marte', 'Romansanta', 'R', 'Male', '12312', '1985-02-11', 'sadad', '1412', 'kimdondiegoramos@yahoo.com', '14141413141', 'Roman Catholic Christianity', 'Live-in', 'ELEMENTARY', 'GRADUATE', '13123', 'kpaitan', 'PT4', 'Pantihan 4', 'Barangay Kagawad 1', '', '0000-00-00', '', 'Not Validate'),
('593982', 'Reynante', 'Digma', 'd', 'Male', '45', '1982-12-13', '12412', '2323', 'kimdondiegoramos@yahoo.com', '24214124121', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', '124142', '214124', 'PT4', 'Pantihan 4', 'Barangay Kagawad 2', '', '0000-00-00', '', 'Not Validate'),
('593983', 'Alfonso', 'Jimenez', 'g', 'Male', '45', '1985-02-01', 'asdasd', 'asda', 'kimdondiegoramos@yahoo.com', '24214124121', 'Roman Catholic Christianity', 'Live-in', 'ELEMENTARY', 'GRADUATE', 'asdasdasdas', 'sadada', 'PT4', 'Pantihan 4', 'Barangay Kagawad 3', '', '0000-00-00', '', 'Not Validate'),
('593984', 'Ronnie', 'Martonito', 'M', 'Male', '45', '1985-12-12', '21131', 'sadad', 'kimdondiegoramos@yahoo.com', '24214124121', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', 'asdasd', '22132', 'PT4', 'Pantihan 4', 'Barangay Kagawad 4', '', '0000-00-00', '', 'Not Validate'),
('593985', 'Oscar', 'Garcia', 'n', 'Male', '12', '1985-12-31', '1231', '1231', 'kimdondiegoramos@yahoo.com', '14141413141', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', '2412412', 'as', 'PT4', 'Pantihan 4', 'Barangay Kagawad 5', '', '0000-00-00', '', 'Not Validate'),
('593986', 'Jhimson', 'Hernandez', 'M.', 'Male', '45', '1985-12-31', 'asdas', '1231241', 'kimdondiegoramos@yahoo.com', '24141241241', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', '2412', 'kpaitan', 'PT4', 'Pantihan 4', 'Barangay Kagawad 6', '', '0000-00-00', '', 'Not Validate');
INSERT INTO `brgy_official_tbl` (`brgy_id`, `first_name`, `last_name`, `middle_name`, `gender`, `age`, `bod`, `birth_of_place`, `address`, `email`, `contact_no`, `religion`, `civil_status`, `highest_education`, `educ_status`, `course_school`, `occupation`, `brgy_code`, `barangay`, `position`, `term`, `date_elected`, `picture`, `post_validation`) VALUES
('593987', 'Ricardo', 'Masigla', 'm', 'Male', '45', '1985-12-31', 'sadad', 'asd', 'kimdondiegoramos@yahoo.com', '21412434141', 'Roman Catholic Christianity', 'Live-in', 'ELEMENTARY', 'GRADUATE', '124142', '214124', 'PT4', 'Pantihan 4', 'Barangay Kagawad 7', '', '0000-00-00', '', 'Not Validate'),
('593988', 'Mark Julius', 'Diroy', 'e', 'Male', '12', '1985-02-13', '12312', '1231', 'kimdondiegoramos@yahoo.com', '14141413141', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', '13123', 'asda', 'PT4', 'Pantihan 4', 'SK Chairman', '', '0000-00-00', '', 'Not Validate'),
('593989', 'Merlyn', 'Andalleon', 'G', 'Female', '23', '1985-02-13', '231', '2131', 'kimdondiegoramos@yahoo.com', '14141413141', 'Roman Catholic Christianity', 'Single', 'ELEMENTARY', 'GRADUATE', 'asdasd', 'kpaitan', 'PT4', 'Pantihan 4', 'Treasurer', '', '0000-00-00', '', 'Not Validate'),
('593990', 'Lorenita', 'Bello', ' ', 'Female', '38', '1988-08-19', 'Maragondon cavite', 'Pantihan 4 Marangondon', 'Lorenita_Bello@gmail.com', '09551232323', 'Born Again Christian', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'Barangay Secretary', 'PT4', 'Pantihan 4', 'Secretary', '1st', '2018-08-20', '', 'Not Validate'),
('638820', 'Jovenal ', 'Umandal', 'Loyola', 'Male', '50', '1969-03-02', 'Maragondon', 'Maragondon', 'Jovenalumandal24@gmail.com', '09197146236', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PSA', 'Pinagsanhan A', 'Punong Barangay', '', '0000-00-00', 'bio-thumb-male-default.png', 'Not Validate'),
('638821', 'Luis ', 'Diones', 'Consigo', 'Male', '38', '1980-03-28', 'Maragondon', 'Maragondon', 'luisdiones2019@gmail.com', '09197464234', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSA', 'Pinagsanhan A', 'Barangay Kagawad 1', '', '0000-00-00', '1.png', 'Not Validate'),
('638822', 'Rowena ', ' Reyes', 'Calderon', 'Female', '37', '1982-05-04', 'Maragondon', 'Maragondon', 'Rowenareyes37@gmail.com', '09196311677', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSA', 'Pinagsanhan A', 'Barangay Kagawad 2', '', '0000-00-00', 'default_avatar_female.jpg', 'Not Validate'),
('638823', 'John', ' Diño', ' Umandal', 'Male', '40', '1979-06-05', 'Maragondon', 'Maragondon', 'johndino000@gmail.com', '09198475662', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSA', 'Pinagsanhan A', 'Barangay Kagawad 3', '', '0000-00-00', 'default_man_photo.jpg', 'Not Validate'),
('638824', 'Domingo ', 'Leysico', 'Pielago', 'Male', '45', '1969-03-15', 'Maragondon', 'Maragondon', 'Domingoleysico@gmail.com', '09197154125', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSA', 'Pinagsanhan A', 'Barangay Kagawad 4', '', '0000-00-00', 'default-avatar.png', 'Not Validate'),
('638825', 'Danes', ' Andaya', ' Ramos', 'Female', '39', '1980-02-10', 'Maragondon', 'Maragondon', 'Danesandaya09@gmail.com', '09128372323', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSA', 'Pinagsanhan A', 'Barangay Kagawad 5', '', '0000-00-00', 'employee-female-default.jpg', 'Not Validate'),
('638826', 'Marianito', 'Punzalan', ' Reyes', 'Male', '37', '1982-01-05', 'Maragondon', 'Maragondon', 'Marianitopuzalan@gmail.com', '09197124742', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSA', 'Pinagsanhan A', 'Barangay Kagawad 6', '', '0000-00-00', 'download.jpg', 'Not Validate'),
('638827', 'Solita ', ' Carabata', 'Cuevas', 'Female', '41', '1978-03-20', 'Maragondon', 'Maragondon', 'Solitacaraba41@gmail.com', '09191871532', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSA', 'Pinagsanhan A', 'Barangay Kagawad 7', '', '0000-00-00', 'icon-female.png', 'Not Validate'),
('638828', 'Floyd ', 'Signo', 'De Leon', 'Male', '23', '1996-02-07', 'Maragondon', 'Maragondon', 'Floydsigno000@gmail.com', '09199312312', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSA', 'Pinagsanhan A', 'SK Chairman', '', '0000-00-00', 'default-avatar_0-1.png', 'Not Validate'),
('638829', 'Rosebie ', 'Nayat', 'Bermil', 'Female', '34', '1984-05-23', 'Maragondon', 'Maragondon', 'Rosebienayat@gmail.com', '09191231242', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSA', 'Pinagsanhan A', 'Treasurer', '', '0000-00-00', 'woman.png', 'Not Validate'),
('638830', 'Nimfa ', ' Caimol', 'Mendoza', 'Female', '40', '1980-03-12', 'Maragondon', 'Maragondon', 'nimfacaimol0900@gmail.com', '09123812344', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSA', 'Pinagsanhan A', 'Secretary', '', '0000-00-00', '360928employee-female-default.jpg', 'Not Validate'),
('658030', 'Wilfredo ', 'Umandal', 'Linezo', 'Male', '50', '1968-04-20', 'Maragondon', 'Maragondon', 'Wilfredoumandal@gmail.com', '01919671424', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PSB', 'Pinagsanhan B', 'Punong Barangay', '', '0000-00-00', '1.png', 'Not Validate'),
('658031', 'Alberto', ' Diones', ' Cuevas', 'Male', '40', '1978-05-04', 'Maragondon', 'Maragondon', 'Albertodiones@gmail.com', '09192414124', 'Protestant Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PSB', 'Pinagsanhan B', 'Barangay Kagawad 1', '', '0000-00-00', 'bio-thumb-male-default.png', 'Not Validate'),
('658032', 'Ronaldo ', 'Antic', 'Cuevas', 'Male', '45', '1974-01-05', 'Maragondon', 'Maragondon', 'Ronaldoantic234@gmail.com', '09129312341', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSB', 'Pinagsanhan B', 'Barangay Kagawad 2', '', '0000-00-00', 'default_man_photo.jpg', 'Not Validate'),
('658033', 'Antonio', 'Anit', ' Umandal', 'Male', '40', '1979-02-05', 'Maragondon', 'Maragondon', 'Antonioanit1000@gmail.com', '09476923467', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSB', 'Pinagsanhan B', 'Barangay Kagawad 3', '', '0000-00-00', 'default-avatar.png', 'Not Validate'),
('658034', 'Teodora ', 'Nayat', 'Benitez', 'Female', '47', '1972-09-09', 'Maragondon', 'Maragondon', 'Teodoranayat00@gmail.com', '09192135662', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PSB', 'Pinagsanhan B', 'Barangay Kagawad 4', '', '0000-00-00', 'default_avatar_female.jpg', 'Not Validate'),
('658035', 'Pedro  ', 'Madelar', 'Huab', 'Male', '35', '1984-10-01', 'Maragondon', 'Maragondon', 'Pedromadelar@gmail.com', '09192135724', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSB', 'Pinagsanhan B', 'Barangay Kagawad 5', '', '0000-00-00', 'images.jpg', 'Not Validate'),
('658036', 'Salvador ', 'Umandal', 'Ramos', 'Male', '46', '1973-09-02', 'Maragondon', 'Maragondon', 'Salvadorumandal0942@gmail.com', '09128471424', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PSB', 'Pinagsanhan B', 'Barangay Kagawad 6', '', '0000-00-00', 'man.png', 'Not Validate'),
('658037', 'Amelia ', 'Acbang ', ' Bello', 'Female', '40', '1979-08-27', 'Maragondon', 'Maragondon', 'Amelia005@gmail.com', '09197831235', 'Roman Catholic Christianity', 'Separated', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSB', 'Pinagsanhan B', 'Barangay Kagawad 7', '', '0000-00-00', 'icon-female.png', 'Not Validate'),
('658038', 'John Wesly ', ' Mallari', 'Castronuevo', 'Male', '23', '1996-02-22', 'Maragondon', 'Maragondon', 'Johnweslylol@gmail.com', '09192318512', 'Roman Catholic Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PSB', 'Pinagsanhan B', 'SK Chairman', '', '0000-00-00', 'default-avatar_0-1.png', 'Not Validate'),
('658039', 'Leonardo ', 'Cojito', 'Angue', 'Male', '35', '1986-04-04', 'Maragondon', 'Maragondon', 'Leonardopogi@gmail.com', '09193273123', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSB', 'Pinagsanhan B', 'Treasurer', '', '0000-00-00', 'images.png', 'Not Validate'),
('658040', 'Joanne ', ' Robledo', 'Lizardo', 'Female', '27', '1992-05-05', 'Maragondon', 'Maragondon', 'Joanne2015@gmail.com', '09193123455', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PSB', 'Pinagsanhan B', 'Secretary', '', '0000-00-00', 'woman.png', 'Not Validate'),
('683910', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1A', 'Poblacion 1A', 'Punong Barangay', '', '0000-00-00', '', 'Not Validate'),
('683911', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1A', 'Poblacion 1A', 'Barangay Kagawad 1', '', '0000-00-00', '', 'Not Validate'),
('683912', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1A', 'Poblacion 1A', 'Barangay Kagawad 2', '', '0000-00-00', '', 'Not Validate'),
('683913', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1A', 'Poblacion 1A', 'Barangay Kagawad 3', '', '0000-00-00', '', 'Not Validate'),
('683914', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1A', 'Poblacion 1A', 'Barangay Kagawad 4', '', '0000-00-00', '', 'Not Validate'),
('683915', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1A', 'Poblacion 1A', 'Barangay Kagawad 5', '', '0000-00-00', '', 'Not Validate'),
('683916', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1A', 'Poblacion 1A', 'Barangay Kagawad 6', '', '0000-00-00', '', 'Not Validate'),
('683917', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1A', 'Poblacion 1A', 'Barangay Kagawad 7', '', '0000-00-00', '', 'Not Validate'),
('683918', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1A', 'Poblacion 1A', 'SK Chairman', '', '0000-00-00', '', 'Not Validate'),
('683919', 'Felicita', 'Villanueva', '  ', 'Female', '34', '1990-12-07', 'Margondon', 'Poblacion maragondon cavite', 'Felicita@gmail.com', '09288162763', 'Protestant Christianity', 'Married', 'COLLEGE', 'UNDER GRADUATE', 'BSIT', 'Barangay Secretary', 'PB1A', 'Poblacion 1A', 'Secretary', '1st', '2018-02-08', '', 'Not Validate'),
('683920', 'Leny', 'Malimban', 'Nette', 'Female', '35', '1985-06-20', 'Margondon', 'Poblacion maragondon cavite', 'Leny_Malimban@gmail.com', '09281862868', 'Victory Chapel', 'Live-in', 'VOCATIONAL', 'UNDER GRADUATE', 'BSED', 'Vendor', 'PB1A', 'Poblacion 1A', 'Treasurer', '2nd', '2018-08-20', '', 'Not Validate'),
('741920', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1B', 'Poblacion 1B', 'Punong Barangay', '', '0000-00-00', '', 'Not Validate'),
('741921', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1B', 'Poblacion 1B', 'Barangay Kagawad 1', '', '0000-00-00', '', 'Not Validate'),
('741922', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1B', 'Poblacion 1B', 'Barangay Kagawad 2', '', '0000-00-00', '', 'Not Validate'),
('741923', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1B', 'Poblacion 1B', 'Barangay Kagawad 3', '', '0000-00-00', '', 'Not Validate'),
('741924', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1B', 'Poblacion 1B', 'Barangay Kagawad 4', '', '0000-00-00', '', 'Not Validate'),
('741925', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1B', 'Poblacion 1B', 'Barangay Kagawad 5', '', '0000-00-00', '', 'Not Validate'),
('741926', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1B', 'Poblacion 1B', 'Barangay Kagawad 6', '', '0000-00-00', '', 'Not Validate'),
('741927', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1B', 'Poblacion 1B', 'Barangay Kagawad 7', '', '0000-00-00', '', 'Not Validate'),
('741928', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 'PB1B', 'Poblacion 1B', 'SK Chairman', '', '0000-00-00', '', 'Not Validate'),
('741929', 'Jannette', 'Magante', 'G', 'Female', '35', '1985-02-09', 'Margondon', 'Poblacion maragondon cavite', 'Magante_Jannette@gmail.com', '09126187261', 'Born Again Christian', 'Married', 'COLLEGE', 'UNDER GRADUATE', 'N/A', 'Barangay secretary', 'PB1B', 'Poblacion 1B', 'Secretary', '2nd', '2018-08-20', '', 'Not Validate'),
('741930', 'Luisito', 'Samaniego', '  ', 'Female', '40', '1975-07-20', 'Margondon', 'Poblacion 1B maragondon cavite', 'Samaniego@gmail.com', '09218262637', 'Protestant Christianity', 'Married', 'COLLEGE', 'UNDER GRADUATE', 'N/A', 'Baranga Treasurer', 'PB1B', 'Poblacion 1B', 'Treasurer', '1st', '2018-08-20', '', 'Not Validate'),
('763120', 'Robert ', 'Angeo', 'Angeles', 'Male', '55', '1964-11-10', 'Maragondon', 'Maragondon', 'Robertangeo@gmail.com', '09196255876', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2A', 'Poblacion 2A', 'Punong Barangay', '', '0000-00-00', '1.png', 'Not Validate'),
('763121', 'Roboam ', 'Villanueva', 'Cuevas', 'Male', '41', '1978-08-15', 'Maragondon', 'Maragondon', 'Roboamvillan20@gmail.com', '09195377789', 'Protestant Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2A', 'Poblacion 2A', 'Barangay Kagawad 1', '', '0000-00-00', 'bio-thumb-male-default.png', 'Not Validate'),
('763122', 'Emelita ', 'Malimban', 'Joya', 'Female', '39', '1979-04-10', 'Maragondon', 'Maragondon', 'Emelitamalimban@gmail.com', '09478746788', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PB2A', 'Poblacion 2A', 'Barangay Kagawad 2', '', '0000-00-00', 'default_avatar_female.jpg', 'Not Validate'),
('763123', 'Gina', ' Paz', ' Igos', 'Female', '46', '1972-12-03', 'Maragondon', 'Maragondon', 'Ginapas20@gmail.com', '09471654678', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PB2A', 'Poblacion 2A', 'Barangay Kagawad 3', '', '0000-00-00', 'employee-female-default.jpg', 'Not Validate'),
('763124', 'Magtangggol ', ' Malimban', 'Nario', 'Male', '37', '1983-03-05', 'Maragondon', 'Maragondon', 'Magtanggol2019@gmail.com', '09196656777', 'Roman Catholic Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PB2A', 'Poblacion 2A', 'Barangay Kagawad 4', '', '0000-00-00', 'default_man_photo.jpg', 'Not Validate'),
('763125', 'Daisy ', 'Riego De Dios', 'Ramos', 'Female', '41', '1978-08-09', 'Maragondon', 'Maragondon', 'Daisyflower20@gmail.com', '09196532255', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2A', 'Poblacion 2A', 'Barangay Kagawad 5', '', '0000-00-00', 'icon-female.png', 'Not Validate'),
('763126', 'Albert ', 'Hernandez', 'Arendela', 'Male', '38', '1980-10-10', 'Maragondon', 'Maragondon', 'Alberhernandez03@gmail.com', '09197532252', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2A', 'Poblacion 2A', 'Barangay Kagawad 6', '', '0000-00-00', '669187bio-thumb-male-default.png', 'Not Validate'),
('763127', 'Apolinar', 'Climacosa', 'Villacarlos', 'Male', '36', '1982-03-05', 'Maragondon', 'Maragondon', 'Apolinarclimacosa23@gmail.com', '09196332225', 'Iglesia ni Cristo', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2A', 'Poblacion 2A', 'Barangay Kagawad 7', '', '0000-00-00', 'default-avatar.png', 'Not Validate'),
('763128', 'Raydel ', 'Orosa', 'De Leon', 'Male', '22', '1996-02-08', 'Maragondon', 'Maragondon', 'Raydelorosa@gmail.com', '09316323224', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'UNDER GRADUATE', 'None', 'None', 'PB2A', 'Poblacion 2A', 'SK Chairman', '', '0000-00-00', 'default-avatar_0-1.png', 'Not Validate'),
('763129', 'Elsie ', 'Piedad', 'Abito', 'Female', '33', '1985-09-05', 'Maragondon', 'Maragondon', 'elsieabito@gmail.com', '09472689994', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2A', 'Poblacion 2A', 'Treasurer', '', '0000-00-00', 'woman.png', 'Not Validate'),
('763130', 'Dianne ', 'Del Rosario', 'Cruz', 'Female', '29', '1990-02-03', 'Maragondon', 'Maragondon', 'Diannedelrosario23@gmail.com', '09197542222', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2A', 'Poblacion 2A', 'Secretary', '', '0000-00-00', '773330icon-female.png', 'Not Validate'),
('793990', 'Noel ', 'Riego De Dios', 'Marquez', 'Male', '55', '1963-10-25', 'Maragondon', 'Maragondon', 'Noelriegodedios033@gmail.com', '09197566778', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2B', 'Poblacion 2B', 'Punong Barangay', '', '0000-00-00', 'man.png', 'Not Validate'),
('793991', 'Gilberto Sr. ', 'De Guia', 'Dayuday', 'Male', '58', '1960-10-20', 'Maragondon', 'Maragondon', 'Gilbertosr@gmail.com', '09196778533', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PB2B', 'Poblacion 2B', 'Barangay Kagawad 1', '', '0000-00-00', '1.png', 'Not Validate'),
('793992', 'Ofelia ', 'Garcia', 'Gonzales', 'Female', '48', '1971-02-10', 'Maragondon', 'Maragondon', 'Ofelia2019@gmail.com', '09476389468', 'Roman Catholic Christianity', 'Widowed', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2B', 'Poblacion 2B', 'Barangay Kagawad 2', '', '0000-00-00', 'default_avatar_female.jpg', 'Not Validate'),
('793993', 'Rodolfo Jr.', 'Ramirez ', 'Eseque', 'Male', '39', '1969-08-10', 'Maragondon', 'Maragondon', 'Rodolforamirez@gmail.com', '09197569255', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PB2B', 'Poblacion 2B', 'Barangay Kagawad 3', '', '0000-00-00', 'bio-thumb-male-default.png', 'Not Validate'),
('793994', 'Jane ', 'Berganos', 'Lizardo', 'Female', '44', '1974-05-21', 'Maragondon', 'Maragondon', 'Janeberganos095@gmail.com', '09196244715', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2B', 'Poblacion 2B', 'Barangay Kagawad 4', '', '0000-00-00', 'employee-female-default.jpg', 'Not Validate'),
('793995', 'Rodelio Jr. ', 'Gonzales', 'Coronado', 'Male', '43', '1976-04-16', 'Maragondon', 'Maragondon', 'Rodeliogonzales10@gmail.com', '09196533966', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2B', 'Poblacion 2B', 'Barangay Kagawad 5', '', '0000-00-00', 'default_man_photo.jpg', 'Not Validate'),
('793996', 'Celestina ', 'Lachico', 'Manalo', 'Female', '40', '1979-03-12', 'Maragondon', 'Maragondon', 'Celestinalachico090@gmail.com', '09192466577', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2B', 'Poblacion 2B', 'Barangay Kagawad 6', '', '0000-00-00', 'icon-female.png', 'Not Validate'),
('793997', 'Bayani jr. ', 'Angeles', 'Lopez', 'Male', '38', '1981-10-27', 'Maragondon', 'Maragondon', 'Bayaniangeles002@gmail.com', '09197646899', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PB2B', 'Poblacion 2B', 'Barangay Kagawad 7', '', '0000-00-00', 'images.png', 'Not Validate'),
('793998', 'Jhemel ', 'Hernando', 'Gonzaga', 'Male', '24', '1994-11-07', 'Maragondon', 'Maragondon', 'Jhemelhernando@gmail.com', '09192846688', 'Roman Catholic Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PB2B', 'Poblacion 2B', 'SK Chairman', '', '0000-00-00', 'default-avatar_0-1.png', 'Not Validate'),
('793999', 'Glenda', ' Gonzales', 'Loyola', 'Female', '38', '1980-05-10', 'Maragondon', 'Maragondon', 'Glendaganda20@gmail.com', '09197558552', 'Roman Catholic Christianity', 'Live-in', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'PB2B', 'Poblacion 2B', 'Treasurer', '', '0000-00-00', 'woman.png', 'Not Validate'),
('794000', 'Kristine', 'Sisante', ' Marquez', 'Female', '42', '1978-02-19', 'Maragondon', 'Maragondon', 'Kristinesisante788@gmail.com', '09128467882', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'PB2B', 'Poblacion 2B', 'Secretary', '', '0000-00-00', '138106icon-female.png', 'Not Validate'),
('812040', 'Eric', 'Perea', ' Salazar', 'Male', '57', '1962-12-12', 'Maragondon', 'Maragondon', 'Ericperea2019@gmail.com', '09197526678', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMA', 'San Miguel A', 'Punong Barangay', '', '0000-00-00', '1.png', 'Not Validate'),
('812041', 'Jegger ', 'Angeles', 'De Boda', 'Male', '37', '1982-03-20', 'Maragondon', 'Maragondon', 'Jeggerangeles@gmail.com', '09194738567', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMA', 'San Miguel A', 'Barangay Kagawad 1', '', '0000-00-00', 'default_man_photo.jpg', 'Not Validate'),
('812042', 'Rogel ', ' Sorrel', 'Bagaporo', 'Male', '43', '1976-06-02', 'Maragondon', 'Maragondon', 'Rogelsorrel2000@gmail.com', '09193584677', 'Protestant Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMA', 'San Miguel A', 'Barangay Kagawad 2', '', '0000-00-00', 'bio-thumb-male-default.png', 'Not Validate'),
('812043', 'Nickson ', 'Manalang ', 'Del Rosario', 'Male', '40', '1979-10-10', 'Maragondon', 'Maragondon', 'Nicksonmanalang39@gmail.com', '09197868236', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMA', 'San Miguel A', 'Barangay Kagawad 3', '', '0000-00-00', 'default-avatar.png', 'Not Validate'),
('812044', 'Jay Ryan ', 'Valenzuela', 'Obaño', 'Male', '48', '1970-10-05', 'Maragondon', 'Maragondon', 'Jayryanvalenzuela24@gmail.com', '09196321995', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMA', 'San Miguel A', 'Barangay Kagawad 4', '', '0000-00-00', 'default-avatar_0-1.png', 'Not Validate'),
('812045', 'Ernesto Jr.', 'Nito', 'Berganos', 'Male', '39', '1981-09-11', 'Maragondon', 'Maragondon', 'Ernestonito60@gmail.com', '09193789777', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMA', 'San Miguel A', 'Barangay Kagawad 5', '', '0000-00-00', 'images (1).jpg', 'Not Validate'),
('812046', 'Warner ', 'Sagala', 'Anit', 'Male', '37', '1981-08-23', 'Maragondon', 'Maragondon', 'Warnersagalaanit@gmail.com', '09195648578', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMA', 'San Miguel A', 'Barangay Kagawad 6', '', '0000-00-00', 'images.jpg', 'Not Validate'),
('812047', 'Julius ', 'Arayat', 'Digma', 'Male', '46', '1972-06-28', 'Maragondon', 'Maragondon', 'Juliusarayat3000@gmail.com', '09197977787', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMA', 'San Miguel A', 'Barangay Kagawad 7', '', '0000-00-00', 'images.png', 'Not Validate'),
('812048', 'Markxon ', 'Sorrel', 'Alson', 'Male', '23', '1995-10-07', 'Maragondon', 'Maragondon', 'Markxonsorrel091@gmail.com', '09193548358', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMA', 'San Miguel A', 'SK Chairman', '', '0000-00-00', 'download.jpg', 'Not Validate'),
('812049', 'Jennon ', 'Andaya', 'Contrano', 'Male', '30', '1989-07-15', 'Maragondon', 'Maragondon', 'Jennonandaya016@gmail.com', '09191676898', 'Iglesia ni Cristo', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMA', 'San Miguel A', 'Treasurer', '', '0000-00-00', 'man.png', 'Not Validate'),
('812050', 'Teresita ', 'Valenzuela	', 'Orenciano', 'Female', '36', '1983-08-24', 'Maragondon', 'Maragondon', 'Teresitavalenzuela09@gmail.com', '09476322866', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'SMA', 'San Miguel A', 'Secretary', '', '0000-00-00', 'woman.png', 'Not Validate'),
('849550', 'Alfredo', 'Diño', ' Villa carlos', 'Male', '50', '1969-10-10', 'Maragondon', 'Maragondon', 'Alfredodino@gmail.com', '09198243234', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'SMB', 'San Miguel B', 'Punong Barangay', '', '0000-00-00', '1.png', 'Not Validate'),
('849551', 'Christopher ', 'Zagala', 'Narito', 'Male', '45', '1974-05-10', 'Maragondon', 'Maragondon', 'Christopherzagala@gmail.com', '09196397234', 'Protestant Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'SMB', 'San Miguel B', 'Barangay Kagawad 1', '', '0000-00-00', 'bio-thumb-male-default.png', 'Not Validate'),
('849552', 'Cynthia ', 'Bersabe', 'Bertulano', 'Female', '39', '1979-12-20', 'Maragondon', 'Maragondon', 'Cynthiabersabe39@gmail.com', '09191246234', 'Iglesia ni Cristo', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMB', 'San Miguel B', 'Barangay Kagawad 2', '', '0000-00-00', 'default_avatar_female.jpg', 'Not Validate'),
('849553', 'Necita ', 'Salamatin', 'Benebese', 'Female', '41', '1977-10-15', 'Maragondon', 'Maragondon', 'Necitasalamatin04@gmail.com', '09197634245', 'Others', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMB', 'San Miguel B', 'Barangay Kagawad 3', '', '0000-00-00', 'employee-female-default.jpg', 'Not Validate'),
('849554', 'Rizal ', 'Vidallon', 'Bersamina', 'Male', '37', '1981-09-10', 'Maragondon', 'Maragondon', 'Rizalvidallon2019@gmail.com', '09197423577', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMB', 'San Miguel B', 'Barangay Kagawad 4', '', '0000-00-00', 'download.jpg', 'Not Validate'),
('849555', 'Emilliano ', 'Panganiban', 'Anit', 'Male', '47', '1972-06-23', 'Maragondon', 'Maragondon', 'Emillianopanganiban2000@gmail.com', '09196542345', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'SMB', 'San Miguel B', 'Barangay Kagawad 5', '', '0000-00-00', 'default_man_photo.jpg', 'Not Validate'),
('849556', 'Andres ', 'Del Rosario', 'Custodio', 'Male', '49', '1969-05-10', 'Maragondon', 'Maragondon', 'Andresdelrosario@gmail.com', '09194394625', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'SMB', 'San Miguel B', 'Barangay Kagawad 6', '', '0000-00-00', 'default-avatar.png', 'Not Validate'),
('849557', 'Ramir ', 'Villarojo', 'Ordonez', 'Male', '46', '1972-04-29', 'Maragondon', 'Maragondon', 'Ramirvillarojo24@gmail.com', '09194937245', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'SMB', 'San Miguel B', 'Barangay Kagawad 7', '', '0000-00-00', 'default-avatar_0-1.png', 'Not Validate'),
('849558', 'Kevin Christian ', 'Tibayan', 'Torres', 'Male', '22', '1996-01-20', 'Maragondon', 'Maragondon', 'Kevinchristian2019@gmail.com', '09194783926', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'UNDER GRADUATE', 'None', 'None', 'SMB', 'San Miguel B', 'SK Chairman', '', '0000-00-00', 'man.png', 'Not Validate'),
('849559', 'Shiela', ' Ponceite', 'Bermil', 'Female', '33', '1985-05-17', 'Maragondon', 'Maragondon', 'Shielapoceite@gmail.com', '09197119655', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMB', 'San Miguel B', 'Treasurer', '', '0000-00-00', 'icon-female.png', 'Not Validate'),
('849560', 'Raquel ', 'Tañag', 'Dela Cruz', 'Female', '40', '1979-04-13', 'Maragondon', 'Maragondon', 'Raqueltanag@gmail.com', '09195339635', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'SMB', 'San Miguel B', 'Secretary', '', '0000-00-00', 'woman.png', 'Not Validate'),
('886010', 'Leonilo', ' Otara Jr.', ' Valdez', 'Male', '49', '1968-04-03', 'Maragondon', 'Maragondon', 'leonilootara@gmail.com', '09196233955', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'STM', 'Sta. Mercedes (Patungan)', 'Punong Barangay', '', '0000-00-00', 'default_man_photo.jpg', 'Not Validate'),
('886011', 'Arlito ', 'Lopez', 'Digno', 'Male', '42', '1976-05-14', 'Maragondon', 'Maragondon', 'Arlitolopez099@gmail.com', '09477494422', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'STM', 'Sta. Mercedes (Patungan)', 'Barangay Kagawad 1', '', '0000-00-00', 'bio-thumb-male-default.png', 'Not Validate'),
('886012', 'Jose Andro ', 'Lopez', 'Tampis', 'Male', '39', '1980-03-20', 'Maragondon', 'Maragondon', 'Joseandrolopez022@gmail.com', '09197211853', 'Protestant Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'STM', 'Sta. Mercedes (Patungan)', 'Barangay Kagawad 2', '', '0000-00-00', '1.png', 'Not Validate'),
('886013', 'Rolando ', 'Mojica', 'Moriente', 'Male', '43', '1975-09-10', 'Maragondon', 'Maragondon', 'Rolandomojica24@gmail.com', '09479484234', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'STM', 'Sta. Mercedes (Patungan)', 'Barangay Kagawad 3', '', '0000-00-00', 'default-avatar.png', 'Not Validate'),
('886014', 'Albert  ', 'Pelagio', 'Ramos', 'Male', '45', '1973-08-05', 'Maragondon', 'Maragondon', 'albertpelagio@gmail.com', '09194742342', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'STM', 'Sta. Mercedes (Patungan)', 'Barangay Kagawad 4', '', '0000-00-00', 'default-avatar_0-1.png', 'Not Validate'),
('886015', 'Nancy ', 'Cabubas', 'Arguelles', 'Female', '39', '1979-05-23', 'Maragondon', 'Maragondon', 'Nancyland@gmail.com', '09198742342', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'STM', 'Sta. Mercedes (Patungan)', 'Barangay Kagawad 5', '', '0000-00-00', 'employee-female-default.jpg', 'Not Validate'),
('886016', 'Julito ', 'Andallo', 'Dela Cruz', 'Male', '42', '1976-07-09', 'Maragondon', 'Maragondon', 'Julitoandallo05@gmail.com', '09198423423', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'STM', 'Sta. Mercedes (Patungan)', 'Barangay Kagawad 6', '', '0000-00-00', 'images (1).jpg', 'Not Validate'),
('886017', 'Benedicto', 'Moriente', ' Peñalosa', 'Male', '38', '1981-03-02', 'Maragondon', 'Maragondon', 'Benedictomoriente@gmail.com', '09196399852', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'STM', 'Sta. Mercedes (Patungan)', 'Barangay Kagawad 7', '', '0000-00-00', 'images.jpg', 'Not Validate'),
('886018', 'Analou ', 'Monsales', 'Montano', 'Female', '23', '1995-08-23', 'Maragondon', 'Maragondon', 'Analoumonsales05@gmail.com', '09196299563', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'UNDER GRADUATE', 'None', 'None', 'STM', 'Sta. Mercedes (Patungan)', 'SK Chairman', '', '0000-00-00', 'woman.png', 'Not Validate'),
('886019', 'Sherlyn ', 'Pelagio', 'Adona', 'Female', '35', '1984-03-24', 'Maragondon', 'Maragondon', 'Sherlynpelagio35@gmail.com', '09196311935', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'STM', 'Sta. Mercedes (Patungan)', 'Treasurer', '', '0000-00-00', 'default_avatar_female.jpg', 'Not Validate'),
('886020', 'Laiza ', 'Moriente', 'Serna', 'Female', '42', '1976-12-05', 'Maragondon', 'Maragondon', 'Laizamoriente42@gmail.com', '09197246342', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'STM', 'Sta. Mercedes (Patungan)', 'Secretary', '', '0000-00-00', 'icon-female.png', 'Not Validate'),
('929120', 'Cresencio ', 'Mojica Jr.', 'Martal', 'Male', '58', '1960-11-09', 'Maragondon', 'Maragondon', 'Cresenciomojica00@gmail.com', '09196233963', 'Protestant Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'TLP', 'Talipusngo', 'Punong Barangay', '', '0000-00-00', '1.png', 'Not Validate'),
('929121', 'Ronnel ', 'Angue', 'Alano', 'Male', '48', '1971-03-20', 'Maragondon', 'Maragondon', 'Ronnelangue033@gmail.com', '09475288572', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TLP', 'Talipusngo', 'Barangay Kagawad 1', '', '0000-00-00', 'bio-thumb-male-default.png', 'Not Validate'),
('929122', 'Felix', 'Causapin', ' Binauhan', 'Male', '44', '1974-08-05', 'Maragondon', 'Maragondon', 'Causapinfelix913@gmail.com', '09197631444', 'Roman Catholic Christianity', 'Married', 'POST GRADUATE', 'GRADUATE', 'None', 'None', 'TLP', 'Talipusngo', 'Barangay Kagawad 2', '', '0000-00-00', 'default_man_photo.jpg', 'Not Validate'),
('929123', 'Nolasco ', ' Bello', 'Hernandez', 'Male', '46', '1973-07-01', 'Maragondon', 'Maragondon', 'Nolascobello010@gmail.com', '09196211953', 'Roman Catholic Christianity', 'Married', 'POST GRADUATE', 'GRADUATE', 'None', 'None', 'TLP', 'Talipusngo', 'Barangay Kagawad 3', '', '0000-00-00', 'default-avatar.png', 'Not Validate'),
('929124', 'Elmer ', 'Causapin', 'Bersabe', 'Male', '48', '1970-05-20', 'Maragondon', 'Maragondon', 'elmercausapin@gmail.com', '09196255932', 'Roman Catholic Christianity', 'Married', 'POST GRADUATE', 'GRADUATE', 'None', 'None', 'TLP', 'Talipusngo', 'Barangay Kagawad 4', '', '0000-00-00', 'default-avatar_0-1.png', 'Not Validate'),
('929125', 'Ronald', 'Causapin', ' Ilagan', 'Male', '44', '1974-05-29', 'Maragondon', 'Maragondon', 'ronaldcausapin333@gmail.com', '09193789661', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TLP', 'Talipusngo', 'Barangay Kagawad 5', '', '0000-00-00', 'images (1).jpg', 'Not Validate'),
('929126', 'Alexander ', 'Cabingan', 'Cruzada', 'Male', '39', '1979-11-09', 'Maragondon', 'Maragondon', 'alexandercabingan@gmail.com', '09197924475', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'TLP', 'Talipusngo', 'Barangay Kagawad 6', '', '0000-00-00', 'images.jpg', 'Not Validate'),
('929127', 'Violeta ', 'Linantud', 'Causapin', 'Female', '41', '1978-03-09', 'Maragondon', 'Maragondon', 'violetalinantud099@gmail.com', '09194211973', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'TLP', 'Talipusngo', 'Barangay Kagawad 7', '', '0000-00-00', 'icon-female.png', 'Not Validate'),
('929128', 'Rhegie ', 'Glean', 'Cruz', 'Male', '21', '1997-05-29', 'Maragondon', 'Maragondon', 'Rhegieglean03@gmail.com', '09196273335', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'UNDER GRADUATE', 'None', 'None', 'TLP', 'Talipusngo', 'SK Chairman', '', '0000-00-00', 'download.jpg', 'Not Validate'),
('929129', 'Marlyn', ' Causapin', 'Cruz', 'Female', '31', '1984-02-20', 'Maragondon', 'Maragondon', 'Marlyncausapin@gmail.com', '09197592444', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TLP', 'Talipusngo', 'Treasurer', '', '0000-00-00', 'default_avatar_female.jpg', 'Not Validate'),
('929130', 'Arlene ', 'Montalban', 'Angue', 'Female', '33', '1984-10-09', 'Maragondon', 'Maragondon', 'Arlene099@gmail.com', '09197494423', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TLP', 'Talipusngo', 'Secretary', '', '0000-00-00', 'employee-female-default.jpg', 'Not Validate'),
('957970', 'Marianito Sr.', ' Casajeros', 'Loyola', 'Male', '54', '1964-11-09', 'Maragondon', 'Maragondon', 'Marianito09@gmail.com', '09196231346', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TKM', 'Tulay Kanluran', 'Punong Barangay', '', '0000-00-00', 'bio-thumb-male-default.png', 'Not Validate'),
('957971', 'Exxon', 'De Mesa', ' Murillo', 'Male', '45', '1973-12-09', 'Maragondon', 'Maragondon', 'Exxonmurillo06@gmail.com', '09196372212', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TKM', 'Tulay Kanluran', 'Barangay Kagawad 1', '', '0000-00-00', '1.png', 'Not Validate'),
('957972', 'Veronica ', ' Tañagras', 'Villarmo', 'Female', '42', '1976-07-06', 'Maragondon', 'Maragondon', 'Veronica055@gmail.com', '09197234423', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TKM', 'Tulay Kanluran', 'Barangay Kagawad 2', '', '0000-00-00', 'employee-female-default.jpg', 'Not Validate'),
('957973', 'Roberto', 'Angulo', ' Reyes', 'Male', '37', '1981-09-13', 'Maragondon', 'Maragondon', 'Robertuangulo033@gmail.com', '09197523423', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TKM', 'Tulay Kanluran', 'Barangay Kagawad 3', '', '0000-00-00', 'default_man_photo.jpg', 'Not Validate'),
('957974', 'Estebana', 'Reydado', ' Paraiso', 'Male', '39', '1979-11-09', 'Maragondon', 'Maragondon', 'Estebanarey09@gmail.com', '09197923423', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TKM', 'Tulay Kanluran', 'Barangay Kagawad 4', '', '0000-00-00', 'images.jpg', 'Not Validate'),
('957975', 'Severino ', 'Bello', 'Sisit', 'Male', '47', '1972-03-02', 'Maragondon', 'Maragondon', 'Severinobello@gmail.com', '09196792342', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TKM', 'Tulay Kanluran', 'Barangay Kagawad 5', '', '0000-00-00', 'man.png', 'Not Validate'),
('957976', 'Geraldo ', 'Dela Cruz', 'Linezo', 'Male', '42', '1977-02-15', 'Maragondon', 'Maragondon', 'Geraldodelacruz@gmail.com', '09197623424', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'TKM', 'Tulay Kanluran', 'Barangay Kagawad 6', '', '0000-00-00', 'default-avatar.png', 'Not Validate'),
('957977', 'Marvin', 'Javier', ' Binuncal', 'Male', '39', '1980-03-02', 'Maragondon', 'Maragondon', 'Marvinjavier003@gmail.com', '09197234234', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TKM', 'Tulay Kanluran', 'Barangay Kagawad 7', '', '0000-00-00', 'images.png', 'Not Validate'),
('957978', 'Lear', 'Pescasio', ' Signo', 'Male', '24', '1995-03-04', 'Maragondon', 'Maragondon', 'learpescasio012@gmail.com', '09192472344', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TKM', 'Tulay Kanluran', 'SK Chairman', '', '0000-00-00', '554279images.jpg', 'Not Validate'),
('957979', 'Marlon ', 'Dela Cruz', 'Castronuevo', 'Male', '30', '1988-09-15', 'Maragondon', 'Maragondon', 'Marlondelacruz@gmail.com', '09197482444', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TKM', 'Tulay Kanluran', 'Treasurer', '', '0000-00-00', 'default-avatar_0-1.png', 'Not Validate'),
('957980', 'Lorelie ', 'Samonte	', 'Angeles', 'Female', '33', '1985-11-25', 'Maragondon', 'Maragondon', 'Loreliesamonte@gmail.com', '09196277953', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TKM', 'Tulay Kanluran', 'Secretary', '', '0000-00-00', 'default_avatar_female.jpg', 'Not Validate'),
('991450', 'Anthony', 'Dimaisip		', ' Pascual', 'Male', '53', '1965-08-20', 'Maragondon', 'Maragondon', 'Anthonydimaisip2019@gmail.com', '09198234823', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'TSM', 'Tulay Silangan', 'Punong Barangay', '', '0000-00-00', '1.png', 'Not Validate'),
('991451', 'Melencia ', 'De Jesus', 'Mendoza', 'Female', '45', '1973-07-13', 'Maragondon', 'Maragondon', 'Malenciamedoza25@gmail.com', '09128372323', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'TSM', 'Tulay Silangan', 'Barangay Kagawad 1', '', '0000-00-00', 'default_avatar_female.jpg', 'Not Validate'),
('991452', 'Vicente Jr. ', 'Tañag', 'Marquez', 'Male', '38', '1978-02-10', 'Maragondon', 'Maragondon', 'Vicentejrtanga@gmail.com', '09148234234', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'TSM', 'Tulay Silangan', 'Barangay Kagawad 2', '', '0000-00-00', 'bio-thumb-male-default.png', 'Not Validate'),
('991453', 'Gilbert ', 'Serigal', 'Isayas', 'Male', '40', '1974-05-27', 'Maragondon', 'Maragondon', 'Isayasgilbertg09@gmail.com', '09487231842', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'TSM', 'Tulay Silangan', 'Barangay Kagawad 3', '', '0000-00-00', 'man.png', 'Not Validate'),
('991454', 'Eleuterio ', 'Anit', 'Medina', 'Male', '39', '1979-07-05', 'Maragondon', 'Maragondon', 'Eleuterioanit070@gmail.com', '09126432423', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'TSM', 'Tulay Silangan', 'Barangay Kagawad 4', '', '0000-00-00', 'images.png', 'Not Validate'),
('991455', 'Valerio ', 'Angue', 'Anico', 'Male', '40', '1979-12-09', 'Maragondon', 'Maragondon', 'Valerioangue03@gmail.com', '09196723424', 'Iglesia ni Cristo', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TSM', 'Tulay Silangan', 'Barangay Kagawad 5', '', '0000-00-00', 'images.jpg', 'Not Validate'),
('991456', 'Rodante ', 'Angue', 'Gancayco', 'Male', '37', '1982-12-10', 'Maragondon', 'Maragondon', 'Gancaycorodante@gmail.com', '09476375234', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TSM', 'Tulay Silangan', 'Barangay Kagawad 6', '', '0000-00-00', 'default-avatar.png', 'Not Validate'),
('991457', 'Marino ', 'Basco', 'Calderon', 'Male', '35', '1983-05-18', 'Maragondon', 'Maragondon', 'Bascomarino03@gmail.com', '09475334234', 'Roman Catholic Christianity', 'Married', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'TSM', 'Tulay Silangan', 'Barangay Kagawad 7', '', '0000-00-00', '926849images.png', 'Not Validate'),
('991458', 'Allysa Grace', 'Tañag', ' Salonga', 'Female', '19', '2000-01-20', 'Maragondon', 'Maragondon', 'allysagrace00@gmail.com', '09479328423', 'Roman Catholic Christianity', 'Single', 'HIGH SCHOOL', 'GRADUATE', 'None', 'None', 'TSM', 'Tulay Silangan', 'SK Chairman', '', '0000-00-00', 'woman.png', 'Not Validate'),
('991459', 'Lucia ', 'Obrador', 'Angue', 'Female', '35', '1984-01-01', 'Maragondon', 'Maragondon', 'Luciaorbrador22@gmail.com', '09197462344', 'Roman Catholic Christianity', 'Married', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TSM', 'Tulay Silangan', 'Treasurer', '', '0000-00-00', 'employee-female-default.jpg', 'Not Validate'),
('991460', 'Jasmin ', 'Laguza', 'Arandia', 'Female', '33', '1986-10-09', 'Maragondon', 'Maragondon', 'Jasminlaguza09@gmail.com', '09476289335', 'Roman Catholic Christianity', 'Single', 'COLLEGE', 'GRADUATE', 'None', 'None', 'TSM', 'Tulay Silangan', 'Secretary', '', '0000-00-00', 'icon-female.png', 'Not Validate');

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
(19, 'BY-PASS ROAD', 'DILG', '2019-01-10', 'Sa larawang ito makikita ang kalsadang inaasam asam na siyang magpapaginhawa sa ating mga kababayan at karatig lugar, patuloy po ang pagsasaayos at mabilis na aksyon ng DPWH Cavite District Engineering Office. Sa panunungkulan sa panahon ni Congressman Bambol Tolentino, Governor Boying Remulla walang imposible para sa nagkakaisang lalawigan ng Cavite. Mula sa pamumuno ng ating ALKALDE REY RILLO ang lahat ay gagawin para sa ikabubuti ng kanyang nasasakupan tungo para sa maunlad, masagana, makadiyos at mapayapang BAGONG MARAGONDON.', '', '947795-52553521_818225965197524_1422949491530530816_n.jpg'),
(20, 'ROAD DEVELOPMENT', 'Maragondon Government', '2019-02-22', 'Ito po ay sa lugar ng Pantihan 3 (Magay), Maragondon Cavite, taun-taon ay pinoponduhan ng ating alkalde Rey Rillo ang Barangay na ito na kaagad mapasamentohan at maisakatuparan ang hiling ng taga Sitio Magay. Kahit sa kasulok sulukan ng barangay ay pinaglalaan ng pondo para sa ikagaganda ng lugar lalo na sa mga daan tulad nito na marami ang makikinabang. Ang budget po nito ay nagmula sa 20% Municipal Economic Development Fund 2018 para sa Farm-to-Market road ng ating munisipyo na nagkakahalaga ng P1,000,000.00 Piso, na may haba na 165.5 meters at may lapad na 5 meters. Sa pagsusumikap ng ating butihing MAYOR REY RILLO lahat ay gagawin para sa ikauunlad ng BAGONG MARAGONDON.', '', '745008-52453388_814721248881329_3840751010976890880_n.jpg'),
(21, 'KASALANG BAYAN ', 'Maragondon Government', '2018-12-14', 'Pinangunahan ni Mayor Rey Rillo ang pagsisimula ng Kasalan Bayan na ginanap sa Covered Court ng Maragondon ngayon Disyembre 14, 2018. Sinimulan ni Pastor Bernie Ilagan na mabigyan ng mahahalagang payo at pagsasama ng mag-asawa para sa kanilang magiging pamilya. Thirty Nine couples (39) po ang lahat ng ikinasal, sa kawani ng munisipyo at opisyales na nagtulong-tulong para maisaayos ang programang ito at kay Mr. Jerry Punongbayan (Master of Ceremony).', 'Sa lahat ng mga ninong at ninang, mga magulang, kapatid, anak, kami po ay nagpapasalamat sa inyo at sa lahat ng dumalo sa araw ng pag-iisang dibdib ng lahat ng ikinasal, at siyempre ang lahat ay gagawin para sa mahusay na pamamalakad at tapat sa tungkulin para sa bayan ng Maragondon Mayor REY RILLO.', '652361-48407616_774803299539791_308903037294870528_n.jpg'),
(22, 'SERBISYO PUBLIKO HANDONG NG PAMAHALAANG BAYAN NG MARAGONDON CAVITE', 'Maragondon Government', '2018-12-07', 'SA PAKIKIPAGTULUNGAN NG NATIONAL BUREAU OF INVESTIGATION (NBI), NA SINA NBI TEAM ALVIN GREGORIO, CATTLEYA MARIE ORATE, JERWIN AYRAN AT NG PHILIPPINE STATISTICS AUTHORITY (TRECE MARTIRES CITY). NA SINA MARYGRACE A. DE CASTRO AT NERISSA G. AUREA, MAY 86 ANG NAKAKUHA NG NBI CLEARANCE AT MAY 229 NAMAN ANG NASERBISYUHAN NG ATING MGA KASAMAHAN MULA SA PHILIPPINE STATISTICS AUTHORITY. KAMI PO AY MALUGUD NA NAGPAPASALAMAT SA MABILIS NA PAGPROSESO NG MGA DOKUMENTO SA KATATAPOS LANG NA MOBILE PSA AT NBI, DITO SA BAYAN NG MARAGONDON.\r\nHANGAD PO NG ATING PUNONG BAYAN REY A. RILLO NA TAON-TAON AY MAGKAROON NG PARA SA BAYAN NG MARAGONDON.', '', '915789-47689405_770315376655250_7383202807941169152_n.jpg'),
(24, 'Maragondon Tourism', 'Maragondon', '2018-01-20', 'Nabiyayaan ng dalawang Bangka (fiber glass) at Motor ang barangay sta. Mercedes Maragondon Cavite, ito po ay nagkakahalaga ng P80,000.00 Pesos, sa pagsusumikap ng kanilang masipag at maaasahan na kapitan Leonilo V. Otara Jr., sa pakikipagtulungan ng Municipal Agriculturist ng Maragondon, Regional Director-BFAR Dir. Wilfredo M. Cruz at sa ating Mayor Reynaldo A. Rillo, ang bangkang ito ay magagamit nila sa kanilang pang araw-araw na pamumuhay para sa kanilang pamilya.', 'Sa pagsusumikap ng ating butihing MAYOR REY RILLO lahat ay gagawin para sa BAGONG MARAGONDON.', '403944-50724747_797799507240170_4220139658509549568_n.jpg'),
(25, 'PASSPORT ON WHEELS', 'Maragondon', '2018-12-19', 'Sa kauna-unahang PASSPORT ON WHEELS sa bayan ng Maragondon na ginanap ngayong Disyembre 19, 2018 sa pangunguna ng ating butihing Mayor Reynaldo A. Rillo, sa tulong ng Department of Foreign Affairs (DFA) at Public Employment Service Office (PESO) Maragondon. 591 po ang naserbisyuhan ng nasabing programa. Hindi na po kailangan pang lumuwas ng Maynila para lamang sa appointment or schedule ng pasaporte. Hindi na rin kailangan maghintay ng available slot ng appointment. Marami sa ating mga kababayan ang natulungan at nabigyan ng serbisyo publiko.', 'Kami po ay lubos na nagpapasalamat sa lahat ng tao na nakiisa at tumulong para maisakatuparan ang programang ito. Para sa mahusay na pamamalakad at tapat sa tungkulin para sa bayan ng Maragondon Mayor REY RILLO gagawin ang lahat sa BAGONG MARAGONDON.', '536288-48420870_776462266040561_1996847381013856256_n.jpg'),
(26, 'Pamamahagi ng educational assistance para sa kolehiyo', 'Municipality of Maragondon', '2018-11-30', 'Muling namahagi ng educational assistance si Mayor Rey A. Rillo para sa 285 college students. Ang bawat isa sa mga mag-aaral ay nakatanggap ng Isang Libong Piso(P1,000.00) bilang pinasyal na tulong mula sa ating Punong Bayan.\r\nAng pondong ginugol sa educational assistance na ito ay nagmula sa 5% Gender and Development(GAD) Fund ng munisipyo.', 'Lubos ang kasiyahan ng mga mag-aaral dahil malaking tulong din sa kanila ang pinansyal na suporta ni Mayor Rey.\r\nNaging katuwang ni Mayor Rey Rillo sina Vice Mayor Pinboy Angeles, Konsehala Thess Pinlac, Konsehal Alex Villanueva, SK Federation Neil Magallanes, Konsehal Joel Perio sa pagbibigay ng educational assistance.', '708216-47427725_766180520402069_4945774391758684160_n.jpg');

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
-- Table structure for table `kp_tbl_c1`
--

CREATE TABLE `kp_tbl_c1` (
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
-- Dumping data for table `kp_tbl_c1`
--

INSERT INTO `kp_tbl_c1` (`id`, `criminal(2a.1)`, `civil(2a.2)`, `others(2a.3)`, `totals(2a.4)`, `mediation_(2b.1)`, `concillation_(2b.2)`, `arbitrition_(2b.3)`, `total_(2b.4)`, `repudiated_cases_(2c.1)`, `withdrawn_cases_(2c.2)`, `pending_cases_(2c.3)`, `dismissed_cases_(2c.4)`, `certified_cases_(2c.5)`, `reffered_agencies_(2c.6)`, `total_(2c.7)`, `estimated_savings`, `month`, `year`, `brgy_code`) VALUES
(5, '1', '2', '3', '4', '5', '6', '7', '8', '9', '', '', '', '', '', '', '', 'February', '2019', ''),
(6, '111', '111', '111', '111', '111', '111', '', '', '', '', '', '', '', '', '', '', 'December', '2019', ''),
(7, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 'March', '2019', 'BC2'),
(10, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'April', '2019', 'BC1'),
(14, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 'March', '2019', 'PT3'),
(15, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 'April', '2019', 'BC4A'),
(16, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 'March', '2019', 'PT1'),
(17, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 'April', '2019', 'SMB'),
(18, '0', '3', '0', '3', '3', '0', '0', '3', '0', '0', '0', '0', '0', '1', '1', '38,000', 'March', '2019', 'CP'),
(19, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 'March', '2019', 'PSB'),
(20, '', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', 'November', '2019', 'PT2'),
(21, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'March', '2019', 'BC1');

-- --------------------------------------------------------

--
-- Table structure for table `kp_tbl_c2`
--

CREATE TABLE `kp_tbl_c2` (
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
-- Dumping data for table `kp_tbl_c2`
--

INSERT INTO `kp_tbl_c2` (`id`, `physical_abuse`, `sexual_abuse`, `physcological_abuse`, `economic_abuse`, `total`, `refferred_dswdo`, `refferred_pnp`, `refferred_court`, `issued_bpo`, `refferred_medical`, `total_vawc_case`, `training`, `iec`, `funds_allocated`, `funds_remarks`, `month`, `year`, `brgy_code`) VALUES
(1, '3', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', 'December', '2019', ''),
(3, '33', '32', '31', '', '', '', '', '', '', '', '', '', '', '', '', 'February', '2019', ''),
(4, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'none', 'none', 'March', '2019', 'BC2'),
(8, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'NONE', 'NONE', 'April', '2019', 'BC1'),
(10, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', 'March', '2019', 'PT3'),
(11, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'none', 'none', 'April', '2019', 'BC4A'),
(12, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'none', 'none', 'March', '2019', 'PT1'),
(13, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'none', 'none', 'April', '2019', 'SMB'),
(14, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 'March', '2019', 'CP'),
(15, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Barangay Fund', '', 'March', '2019', 'PSB');

-- --------------------------------------------------------

--
-- Table structure for table `maragondon_official_tbl`
--

CREATE TABLE `maragondon_official_tbl` (
  `id` int(100) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `maragondon_official_tbl`
--

INSERT INTO `maragondon_official_tbl` (`id`, `full_name`, `position`, `picture`) VALUES
(1, 'Reynaldo A. Rillo', 'Mayor', '554818images.png'),
(2, 'Ireneo C. Angeles', 'Vice Mayor', '561233images (7).jpg'),
(3, 'Lawrence NJ. Arca', 'Councilor', '293342images (1).png'),
(4, 'Receil P.Dino', 'Councilor', 'download (1).jpg'),
(5, 'Reagan E. Gulapa', 'Councilor', 'images.png'),
(6, 'Angelito S. Angeles', 'Councilor', 'images.jpg'),
(7, 'Danilo A. Angeles', 'Councilor', '10.png'),
(8, 'Alexander V. Villanueva', 'Councilor', 'images (7).jpg'),
(9, 'Joel A. Perio', 'Councilor', 'images (6).jpg'),
(10, 'Joel D. Angue', 'Councilor', 'dummy-male.png'),
(11, 'Alberto C. Malimban', 'LNB President', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_p1_tbl`
--

CREATE TABLE `monthly_p1_tbl` (
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
-- Dumping data for table `monthly_p1_tbl`
--

INSERT INTO `monthly_p1_tbl` (`id`, `description`, `on_going_status`, `completed_status`, `started_date`, `completed date`, `project_cost`, `funds`, `remarks`, `month`, `year`, `brgy_code`) VALUES
(2, 'Cleaning ', 'do', 'doing', '1889-07-09', '1998-07-10', '10,000', 'DILG', 'Complete', 'January', '2019', ''),
(3, 'Cleaning ', 'do', 'doing', '9119-12-07', '1123-01-27', '100,000', 'DILG', 'COMPLETE', 'January', '2019', ''),
(4, 'monthly1 testsssss', 'monthly1 testsssss', '', '0000-00-00', '0000-00-00', 'monthly1 testssss', 'monthly1 testssss', 'monthly1 testssss', 'December', '2019', ''),
(5, 'test1ok', '', '', '0003-06-06', '0003-02-23', '', '', '', 'February', '2019', ''),
(10, 'Alay Lakad', 'do', 'do', '2018-09-07', '2018-09-07', '', '', 'Completed', 'September', '2019', 'BC1'),
(11, 'Karakol', 'do', 'do', '2018-09-08', '2018-09-08', '', '', 'Completed', 'September', '2019', 'BC1'),
(12, '', '', '', '2019-03-07', '2019-03-07', '', '', '', 'March', '2019', 'TSM'),
(13, 'Zumba', 'do', 'do', '2018-09-09', '2018-09-09', '', '', 'Completed', 'September', '2019', 'BC1'),
(14, 'Regular Session', 'do', 'do', '2018-09-02', '2018-09-02', '', '', 'Completed', 'September', '2019', 'BC1'),
(15, 'Regular Session', 'do', 'do', '2018-09-12', '2018-09-12', '', '', 'Completed', 'September', '2019', 'BC1'),
(16, 'Lupon Tagapamaya Monthly Meeting', 'do', 'do', '2018-09-30', '2018-09-30', '', '', '', 'September', '2019', 'BC1'),
(17, 'Maintenance of Peace & Order ', 'Do', 'Do', '2019-03-01', '2019-03-31', '', 'Bry Fund', 'Complete', 'March', '2019', 'SMA'),
(18, 'Badac Meeting ', 'Do', 'Do', '2019-03-23', '2019-03-23', '', 'Bry Fund', 'Complete', 'March', '2019', 'SMA'),
(19, 'Clean up Drive ', 'Do', 'Do', '2019-03-01', '2019-03-31', '', 'Bry Fund', 'Complete', 'March', '2019', 'SMA'),
(20, 'Solid Waste Meeting ', 'Do', 'Do', '2019-03-23', '2019-03-23', '', 'Bry Fund', 'Complete', 'March', '2019', 'SMA'),
(21, 'Regular Meeting ', 'Do', 'Do', '2019-03-09', '2019-03-09', '', 'Bry Fund', 'Complete', 'March', '2019', 'SMA'),
(22, 'Regular Meeting ', 'Do', 'Do', '2019-03-23', '2019-03-23', '', 'Bry Fund', 'Complete', 'March', '2019', 'SMA'),
(23, 'GAD/ICP Seminar', 'Do', 'Do', '2019-03-15', '2019-03-17', '', 'Bry Fund', 'Complete', 'March', '2019', 'SMA'),
(24, 'Pb/Sec Meeting', 'Do', 'Do', '2019-04-15', '2019-04-17', '', 'Bry Fund', 'Complete', 'March', '2019', 'SMA'),
(25, 'Barangay Assembly Meeting', 'Do', 'Do', '2019-03-25', '2019-03-25', '', 'Bry Fund', 'Complete', 'March', '2019', 'SMA'),
(26, 'Barangay Assembly Meeting', 'Do', 'Do', '2019-03-03', '2019-03-03', '', '', 'Completed', 'March', '2019', 'PT1'),
(27, 'Monthly Visitation of Midwife', 'Do', 'Do', '2019-03-07', '2019-03-07', '', '', 'Completed', 'March', '2019', 'PT1'),
(28, 'Missile Vaccination  ', 'Do', 'Do', '2019-03-01', '2019-03-01', '', '', 'Completed', 'March', '2019', 'PT1'),
(29, 'Weekly Clean up Drive ', '', '', '2019-03-02', '2019-03-02', '', '', 'Completed', 'March', '2019', 'PT1'),
(30, 'Solid Waste Management Committee Monthly Meeting ', 'Do', 'Do', '2019-03-30', '2019-03-30', '', '', 'Completed', 'March', '2019', 'PT1'),
(31, 'Badac Monthly Meeting ', 'Do', 'Do', '2019-03-30', '2019-03-30', '', '', 'Completed', 'March', '2019', 'PT1'),
(32, 'Registration for Sk', 'Do', 'Do', '2019-01-01', '2019-01-17', '', 'Municipal', 'Completed', 'January', '2019', 'PT2'),
(33, 'Election of SK kagawad', 'Do', 'Do', '2019-01-19', '2019-01-19', '', 'Municipal/Barangay', 'Completed', 'January', '2019', 'PT2'),
(34, 'Clean up Drive ', 'Do', '', '2019-01-27', '2019-01-27', '', 'Barangay Fund', 'Completed', 'January', '2019', 'PT2'),
(35, 'Peace & Order / Roving Of Barangay Tanod', 'Do', '', '2019-01-01', '2019-01-31', '', 'Barangay Fund', 'Completed', 'January', '2019', 'PT2'),
(36, 'Solid Waste Meeting ', 'Do', 'Do', '2019-03-09', '2019-03-09', '', 'Bry Fund', 'Completed', 'March', '2019', 'BC3A'),
(37, 'Barangay Assembly', 'Do', 'Do', '2019-03-09', '2019-03-09', '', '-', 'Completed', 'March', '2019', 'BC3A'),
(38, 'Badac Meeting ', 'Do', 'Do', '2019-03-09', '2019-03-09', '', '-', 'Completed', 'March', '2019', 'BC3A'),
(39, 'Roving brgy tanod', '', '', '2019-03-01', '2019-03-31', '', '-', 'Completed', 'March', '2019', 'BC3A'),
(40, 'Clean up Drive ', 'Do', 'Do', '2019-03-09', '2019-03-09', '', '-', 'Completed', 'March', '2019', 'BC3A'),
(41, 'Clean up Drive ', 'Do', 'Do', '2019-03-02', '2019-03-23', '', 'Municipal', 'Completed', 'March', '2019', 'PT3'),
(42, 'Monthly Solid Waste Meeting ', 'Do', 'Do', '2019-03-10', '2019-03-10', '', 'Municipal/Barangay', 'Completed', 'March', '2019', 'PT3'),
(43, 'Badac Meeting ', 'Do', 'Do', '2019-03-15', '2019-03-15', '', '', 'Completed', 'March', '2019', 'PT3'),
(44, 'Monthly Meeting ', 'Do', 'Do', '2019-03-05', '2019-03-20', '', '', 'Completed', 'March', '2019', 'PT3'),
(45, 'Weekly Clean up Drive ', 'Do', 'Do', '2019-03-02', '2019-03-02', '', '', '', 'March', '2019', 'CP'),
(46, 'Stove Maintanance', '', 'Do', '2019-03-05', '2019-03-05', '', '', '', 'March', '2019', 'CP'),
(47, 'Provincial Congress Of Liga ng mga barangay Province Of Cavite', 'Do', 'Do', '2019-03-03', '2019-03-03', '', '', '', 'March', '2019', 'CP'),
(48, 'Sk Seminar', '', 'Do', '2019-03-07', '2019-03-07', '', '', '', 'March', '2019', 'CP'),
(49, 'Sipag Graduation Ceremony', '', '', '2019-03-19', '2019-03-19', '', '', '', 'March', '2019', 'CP'),
(50, 'Solid Waste Meeting ', 'do', 'do', '2019-03-06', '2019-03-06', '', '', 'Completed', 'March', '2019', 'BC2'),
(51, 'Monthly Meeting', 'do', 'do', '2019-03-24', '2019-03-24', '', '', 'Completed', 'March', '2019', 'BC2');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_p2_tbl`
--

CREATE TABLE `monthly_p2_tbl` (
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
-- Dumping data for table `monthly_p2_tbl`
--

INSERT INTO `monthly_p2_tbl` (`id`, `title`, `order_no`, `description`, `remarks`, `type`, `no`, `date_conducted`, `no_present`, `no_absent`, `month`, `year`, `brgy_code`) VALUES
(3, 'Monitoring', '21', 'Monitoring Level', 'Complete', 'Voluntarys', 56, '2019-02-01', 45, 22, 'February', '2019', ''),
(4, 'vvvv', 'vvvv', 'vvvv', 'monthly1 testssss', 'vvvvvv', 223, '2018-12-31', 23, 23, 'December', '2019', ''),
(5, 'vvvv', '', '', '', '', 0, '0000-00-00', 0, 0, 'October', '2021', ''),
(9, '', '', 'BADAC', 'Passed', '', 0, '2018-09-02', 0, 0, 'September', '2019', 'BC1'),
(10, '', '', 'BADAC', 'Passed', '', 0, '2018-09-02', 0, 0, 'September', '2019', 'BC1'),
(11, '', '', 'Solid Waste Management report', 'Passed', '', 0, '2018-09-02', 0, 0, 'September', '2019', 'BC1'),
(12, '', '', 'BCPC', 'Passed', '', 0, '2018-09-30', 0, 0, 'September', '2019', 'BC1'),
(13, '', '', '', '', 'Regular ', 2, '2019-03-09', 11, 0, 'March', '2019', 'SMA'),
(14, '', '', '', '', 'Regular ', 2, '2019-03-23', 11, 0, 'March', '2019', 'SMA'),
(15, '', '', '', '', 'Barangay Assembly', 1, '2019-03-16', 110, 0, 'March', '2019', 'SMA'),
(16, '', '', '', '', 'Regular ', 1, '2019-03-01', 11, 0, 'March', '2019', 'PT1'),
(17, '', '', '', '', 'Regular ', 1, '2019-03-20', 11, 0, 'March', '2019', 'PT1'),
(18, 'Republic Act 10742 or Sk Reform Act of 2015', '', '', 'Passed', 'Regular ', 1, '2019-01-06', 10, 0, 'January', '2019', 'PT2'),
(19, 'Solid Waste ', '', '', 'Passed', '', 0, '2019-01-06', 0, 0, 'March', '2019', 'PT2'),
(20, '', '', '', '', 'Regular ', 1, '2019-03-02', 22, 0, 'March', '2019', 'BC3A'),
(21, '', '', '', '', 'Regular ', 2, '2019-03-09', 20, 0, 'March', '2019', 'BC3A'),
(22, '', '', '', '', 'Regular Meeting', 1, '2019-03-05', 11, 0, 'March', '2019', 'PT3'),
(23, '', '', '', '', 'Regular Meeting', 2, '2019-03-20', 11, 0, 'March', '2019', 'PT3'),
(24, '', '', '', '', 'Special Meeting', 0, '2019-03-05', 0, 0, 'March', '2019', 'PT3'),
(25, '', '', '', '', 'Regular Meeting', 1, '2019-03-11', 11, 0, 'March', '2019', 'CP'),
(26, '', '', '', '', 'Regular', 1, '2019-03-20', 11, 0, 'March', '2019', 'BC2'),
(27, 'Buget resolution', '03-2019', '', 'Passed', 'Regular Meeting', 0, '2019-03-02', 10, 0, 'March', '2019', 'PT2'),
(28, 'AIP Resolution', '03-2019', '', 'Passed', 'Regular Meeting', 1, '2019-02-02', 10, 0, 'February', '2019', 'PT2');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_p3_tbl`
--

CREATE TABLE `monthly_p3_tbl` (
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
-- Dumping data for table `monthly_p3_tbl`
--

INSERT INTO `monthly_p3_tbl` (`id`, `dispute`, `filed`, `settled`, `reffered`, `withdraw`, `monthly`, `year`, `brgy_code`) VALUES
(2, 'Criminal', 31, 1, 2, 2, 'January', '2019', ''),
(3, 'Drugs', 11, 2, 4, 2, 'January', '2019', ''),
(4, 'dvv', 32, 23, 4, 2, 'January', '2019', ''),
(5, 'dvv', 32, 23, 4, 2, 'October', '2019', ''),
(9, 'Criminal', 3, 4, 1, 0, 'September', '2019', 'BC1'),
(10, 'Civil', 2, 2, 2, 10, 'September', '2019', 'BC1'),
(11, 'Others', 0, 0, 0, 0, 'September', '2019', 'BC1'),
(12, 'Criminal', 0, 0, 0, 0, 'March', '2019', 'SMA'),
(13, 'Civil', 0, 0, 0, 0, 'March', '2019', 'SMA'),
(14, 'Criminal', 0, 0, 0, 0, 'March', '2019', 'PT1'),
(15, 'Civil', 0, 0, 0, 0, 'March', '2019', 'PT1'),
(16, 'Others', 0, 0, 0, 0, 'March', '2019', 'PT1'),
(17, 'Criminal', 0, 0, 0, 0, 'March', '2019', 'PT2'),
(18, 'Civil', 0, 0, 0, 0, 'January', '2019', 'PT2'),
(19, 'Others', 0, 0, 0, 0, 'January', '2019', 'PT2'),
(20, 'Total', 0, 0, 0, 0, 'January', '2019', 'PT2'),
(21, 'Criminal', 0, 0, 0, 0, 'March', '2019', 'BC3A'),
(22, 'Civil', 0, 0, 0, 0, 'March', '2019', 'BC3A'),
(23, 'Others', 0, 0, 0, 0, 'March', '2019', 'BC3A'),
(24, 'Criminal', 0, 0, 0, 0, 'March', '2019', 'PT3'),
(25, 'Civil', 0, 0, 0, 0, 'March', '2019', 'PT3'),
(26, 'Others', 0, 0, 0, 0, 'March', '2019', 'PT3'),
(27, 'Total', 0, 0, 0, 0, 'March', '2019', 'PT3'),
(28, 'Criminal', 0, 0, 0, 0, 'March', '2019', 'CP'),
(29, 'Civil', 0, 3, 0, 0, 'March', '2019', 'CP'),
(30, 'Others', 0, 0, 0, 0, 'March', '2019', 'CP'),
(31, 'Criminal', 0, 0, 0, 0, 'March', '2019', 'BC2'),
(32, 'Civil', 0, 0, 0, 0, 'March', '2019', 'BC2'),
(33, 'Others', 0, 0, 0, 0, 'March', '2019', 'BC2');

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
(1, 'Social Development', '* Rehabilitation/ Construction/ Maintenance of Barangay Hall', 'SB', '55000.00', 2019, 'BC1'),
(3, '', '* Rehabilitation/ Construction/ Maintenance of Basketball Court', 'Municipal', '100000.00', 2019, 'BC1'),
(5, 'Social Development', 'Rehabilitation/ Construction/ Maintenance of Basketball Court', 'Municipal', '100000.00', 2019, 'BC2'),
(7, 'Social Development', '* Rehabilitation/ Construction/ Maintenance of Barangay Hall', 'SB', '55000.00', 2019, 'BC3B'),
(8, 'Social Development', '* Rehabilitation/ Construction/ Maintenance of Basketball Court', 'Municipal', '100000.00', 2019, 'BC3B');

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
(3, 'Drug Testing ', 'Sangguniang Barangay, Maragondon PNP, DILG', 'October 2019', 'December 2019', 'Drug cleared barangay', 'Barangay Fund', '1.00', '1.00', '1.00', '1.00', 'B. Illegal Drugs', 2019, 'BC1'),
(4, 'Reconstruction and Strengthening of BADAC', 'Sangguniang Barangay, Maragondon PNP, DILG', 'January 2019', 'April 2019', 'EO for the reconstruction of BADAC', 'N/A', '10.00', '10.00', '10.00', '10.00', 'B. Illegal Drugs', 2019, 'BC1'),
(7, 'vav', 'bwrbrwbrwb', 'bsdbsd', 'bwb', 'bsbd', '', '0.00', '0.00', '0.00', '0.00', '', 2019, ''),
(8, 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', '0.00', '0.00', '0.00', '0.00', 'test1', 2019, ''),
(11, 'Maintenance of CCTV Cameras', 'Sangguniang Barangay, PNP', 'January 2019', 'December 2019', 'Established monitoring system and footages for incidents', 'Barangay Fund', '0.00', '30000.00', '0.00', '30000.00', 'A. Crime Disorder', 2019, 'BC1'),
(12, 'Ronda Patrol', 'Sangguniang Barangay, PNP', 'January 2019 (Continuous)', 'December 2019', 'Security BPATS', 'N/A', '0.00', '0.00', '0.00', '0.00', 'A. Crime Disorder', 2019, 'BC1'),
(13, 'Capacity Building of BADAC', 'Sangguniang Barangay, Maragondon PNP, DILG', '2nd Quarter 2019', '2nd Quarter 2019', 'Trained BADAC Team', 'Barangay Fund', '0.00', '10000.00', '0.00', '10000.00', 'B. Illegal Drugs', 2019, 'BC1'),
(14, 'Establish livelihood program', 'Sangguniang Barangay', '2nd Quarter 2019', '2nd Quarter 2019', 'To have livelihood program', 'N/A', '0.00', '10000.00', '0.00', '0.00', 'C. Conflict', 2019, 'BC1'),
(15, 'Maintenance of CCTV Cameras', 'Sangguniang Barangay, PNP', 'January 2019', 'December 2019', 'Established monitoring system and footages for incidents', 'Barangay Fund', '0.00', '30000.00', '0.00', '30000.00', 'Crime Disorder', 2019, 'BC3B'),
(16, 'Ronda Patrol', 'Sangguniang Barangay, PNP', 'January 2019 (Continuous)', 'December 2019', 'Security BPATS', 'N/A', '0.00', '0.00', '0.00', '0.00', 'Crime Disorder', 2019, 'BC3B'),
(17, 'Drug Testing ', 'Sangguniang Barangay, Maragondon PNP, DILG', 'October 2019', 'December 2019', 'Drug cleared barangay', 'Barangay Fund', '0.00', '0.00', '0.00', '0.00', 'Illegal Drugs', 2019, 'BC3B'),
(18, 'Reconstruction and Strengthening of BADAC', 'Sangguniang Barangay, Maragondon PNP, DILG', 'January 2019', 'April 2019', 'EO for the reconstruction of BADAC', 'N/A', '0.00', '10000.00', '0.00', '10000.00', 'Illegal Drugs', 2019, 'BC3B'),
(19, 'Capacity Building of BADAC', 'Sangguniang Barangay, Maragondon PNP, DILG', '2nd Quarter 2019', '2nd Quarter 2019', 'Trained BADAC Team', 'Barangay Fund', '0.00', '10000.00', '0.00', '10000.00', 'Illegal Drugs', 2019, 'BC3B'),
(20, 'Establish livelihood program', 'Sangguniang Barangay', '2nd Quarter 2019', '2nd Quarter 2019', 'To have livelihood program', 'N/A', '0.00', '10000.00', '0.00', '10000.00', 'Conflict', 2019, 'BC3B');

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
(2, 'Rehabilitation of Barangay Road', 'Sangguniang Barangay CITMO', 'May 2019', 'May 2019', 'Rehabilitated  Road', 'N/A', '0.00', '0.00', '0.00', '0.00', 'B. Road and vehicle safety', 2019, 'BC1'),
(5, 'Training/Seminar in Disaster Preparedness', 'Sangguniang Barangay ', 'May 2019', 'May 2019', 'Conduct Seminar', 'Barangay Fund', '0.00', '5000.00', '0.00', '5000.00', 'A. Readiness during Disaster', 2019, 'BC1'),
(6, 'Training/Seminar in Disaster Preparedness', 'Sangguniang Barangay ', 'May 2019', 'May 2019', 'Conduct Seminar', 'Barangay Fund', '0.00', '5000.00', '0.00', '5000.00', 'Readiness during Disaster', 2019, 'BC3B'),
(7, 'Rehabilitation of Barangay Road', 'Sangguniang Barangay CITMO', 'August 2019', 'September 2019', 'Rehabilitated  Road', 'Barangay Fund', '0.00', '0.00', '0.00', '0.00', 'Road and vehicle safety', 2019, 'BC3B');

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
(2, '', 'Medical Supplies and Miscellaneous Expenses', 'SB', '0.00', '5000.00', '0.00', '0.00', 2019, 'BC2'),
(5, '', ' Medical Supplies and Miscellaneous Expenses', 'SB', '0.00', '4193.29', '0.00', '0.00', 2019, 'BC1'),
(11, '', ' Medical Supplies and Miscellaneous Expenses', 'SB', '0.00', '0.00', '0.00', '4931.29', 2019, 'BC3B');

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

--
-- Dumping data for table `reference_file_tbl`
--

INSERT INTO `reference_file_tbl` (`id`, `title`, `description`, `date`, `file`) VALUES
(6, 'd', 'aasfasf', '2019-03-11', 'AKSYON-BARANGAY-KONTRA-DENGUE-ABKD-1st-Qtr-2016.xlsx');

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
(11, 'FUND FOR KP', 'nerrhwrh', '6792kpvawc-1.xls', '2019-03-06', 'March 2019', 'BC1'),
(12, 'tulay b', '', 'barangay-residents.pdf', '2019-03-07', 'March 2019', 'TSM'),
(13, 'women&#39;s month', 'everybody is needed to participate', 'Database1.accdb', '2019-03-11', 'March 2019', 'BC1'),
(14, 'KP FUND', 'uhyb  y y ', 'compiler 3.pdf', '2019-03-14', 'March 2019', 'BC1'),
(15, 'kp', 'dsddvsdv', 'BGPMS2017.xls', '2019-03-21', 'March 2019', 'BC1');

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
  `age` int(3) NOT NULL,
  `house_no` int(100) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `job` varchar(255) NOT NULL,
  `street` varchar(100) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `elementary` varchar(255) NOT NULL,
  `highschool` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `college_school` varchar(255) NOT NULL,
  `college_course` varchar(255) NOT NULL,
  `family_role` varchar(100) NOT NULL,
  `no_of_families` int(2) NOT NULL,
  `no_of_hh` int(2) NOT NULL,
  `no_of_female` int(2) NOT NULL,
  `no_of_male` int(2) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `residents_tbl`
--

INSERT INTO `residents_tbl` (`id`, `first_name`, `last_name`, `middle_name`, `gender`, `bod`, `age`, `house_no`, `contact_no`, `job`, `street`, `religion`, `status`, `elementary`, `highschool`, `college`, `college_school`, `college_course`, `family_role`, `no_of_families`, `no_of_hh`, `no_of_female`, `no_of_male`, `picture`, `brgy_code`) VALUES
(51, 'jasmin', 'lagura', 'mendoza', 'Female', '1994-04-18', 24, 0, '', 'Employed', 'tulay b', 'Born Again Christian', 'Single', '', '', '', '', '', '', 0, 0, 0, 0, '', 'TSM'),
(61, 'Pilar', 'MANALO', 'Nuestro', 'Female', '1948-10-24', 70, 123, '09213141431', 'Employed', 'bucal 1', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 0, 0, 0, '5.png', 'BC1'),
(62, ' Jorja', 'BERGANOS', 'N/A', 'Female', '1940-04-23', 78, 1231, '09141341141', 'Unemployed', 'bucal 1', 'Roman Catholic', 'Married', 'Elementary Level', 'High School Level', 'Vocational', '', '', 'No', 2, 0, 0, 0, '', 'BC1'),
(63, 'Dionisio', 'BERGANOS', 'N/A', 'Male', '1942-05-08', 76, 1231, '09213141411', 'Unemployed', 'bucal 1', 'Roman Catholic', 'Married', 'Elementary Level', 'High School Graduate', 'Vocational', '', '', 'No', 4, 4, 2, 2, '', 'BC1'),
(64, 'Rommel', 'PESCASIO', '   Caraan', 'Female', '1971-10-22', 47, 213, '09341413141', 'Employed', 'bucal 1', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'Yes', 10, 10, 5, 5, '', 'BC1'),
(65, 'Dalisay', 'PESCASIO', 'Caraan', 'Female', '1971-11-01', 47, 21123, '09124141344', 'Unemployed', 'bucal 1', 'Roman Catholic', 'Married', 'Elementary Level', 'None', 'None', '', '', 'Yes', 5, 4, 3, 2, '', 'BC1'),
(66, 'Daryl Dane', 'PESCASIO', 'Caraan', 'Female', '2002-06-25', 16, 21321, '09124124124', 'Unemployed', 'bucal 1', 'Protestant Christianity', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 10, 10, 5, 5, '', 'BC1'),
(67, 'Maria', 'MICOR', 'N/A', 'Male', '1965-11-22', 53, 123123, '09213124421', 'Employed', 'bucal 1', 'Iglesia ni Cristo', 'Single', 'Elementary Level', 'High School Level', 'College Undergraduate', '', '', 'Yes', 16, 16, 8, 8, '', 'BC1'),
(68, 'Flordeliza', 'MICOR', 'N/A', 'Female', '1959-12-05', 59, 1231, '09123124112', 'Employed', 'bucal 1', 'International One Way Outreach', 'Married', 'Elementary Level', 'High School Level', 'College Undergraduate', '', '', 'No', 10, 10, 5, 5, '', 'BC1'),
(69, 'Loren Marit', 'MICOR', 'N/A', 'Female', '1999-06-14', 19, 134431, '09213213213', 'Unemployed', 'bucal 1', 'Conservative Baptist Church', 'Single', 'Elementary Level', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 10, 10, 5, 5, '', 'BC1'),
(70, 'Mart Lorence', 'MICOR', 'N/A', 'Male', '2000-12-31', 18, 1231, '09213123124', 'Unemployed', 'bucal 1', 'Conservative Baptist Church', 'Single', 'Elementary Graduate', 'High School Level', 'College Undergraduate', '', '', 'No', 10, 10, 5, 5, '', 'BC1'),
(71, 'Ralph Lourence', 'MICOR', 'N/A', 'Male', '2003-08-25', 15, 1232131, '09231232121', 'Unemployed', 'bucal 1', 'Aglipay', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 10, 10, 5, 5, '', 'BC1'),
(72, 'Joan Querada', 'MICOR', 'N/A', 'Female', '2000-06-26', 18, 1221, '09213123131', 'Unemployed', 'bucal 1', 'Conservative Baptist Church', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 10, 10, 5, 5, '', 'BC1'),
(73, 'Nida', 'DANCEL', 'De Guia', 'Female', '1994-11-11', 24, 123123, '09231231231', 'Unemployed', 'bucal 1', 'Alliance of Bible Christian', 'Single', 'Elementary Level', 'None', 'None', '', '', 'Yes', 1, 1, 1, 0, '', 'BC1'),
(74, 'Danilo', 'RAMIREZ', 'Castro', 'Male', '1946-10-06', 72, 213123213, '09123213123', 'Unemployed', 'bucal 1', 'Roman Catholic', 'Married', 'Elementary Level', 'None', 'None', '', '', 'No', 10, 10, 5, 5, '', 'BC1'),
(75, 'Cecil', 'RAMIREZ', 'Escarillar', 'Female', '1957-11-12', 61, 414141, '09123213122', 'Unemployed', 'bucal 1', 'Ceboley Baptist Church', 'Married', 'Elementary Level', 'None', 'None', '', '', 'Yes', 10, 10, 5, 5, '', 'BC1'),
(76, 'Aquelles', 'RAMIREZ', 'Escarillar', 'Male', '1980-09-13', 38, 1221313, '09221312123', 'Employed', 'bucal 1', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 10, 5, 5, 5, '', 'BC1'),
(77, 'Aquelles', 'RAMIREZ', 'Escarillar', 'Male', '1980-09-13', 38, 1221313, '09221312123', 'Employed', 'bucal 1', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 10, 5, 5, 5, '', 'BC1'),
(78, 'Diana- lyn', 'RAMIREZ', 'Reyes', 'Female', '1983-09-05', 35, 221313, '09213132131', 'Employed', 'bucal 1', 'Protestant Christianity', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 5, 5, 3, 2, '', 'BC1'),
(79, 'Carl Adrianne', 'RAMIREZ', 'Reyes', 'Male', '2002-05-04', 16, 123131, '09213123123', 'Unemployed', 'bucal 1', 'Iglesia ni Cristo', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 10, 10, 5, 5, '', 'BC1'),
(80, 'Carl Adrianne', 'RAMIREZ', 'Reyes', 'Male', '2002-05-04', 16, 123131, '09213123123', 'Unemployed', 'bucal 1', 'Iglesia ni Cristo', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 10, 10, 5, 5, '', 'BC1'),
(81, 'Anabelle', 'CAYABYAB ', 'Loyola', 'Female', '1978-12-10', 40, 31231, '09123123123', 'Unemployed', 'bucal 2', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 6, 3, 3, '', 'BC2'),
(83, ' Vladimir Idril', 'CAYABYAB', 'Loyola', 'Male', '2006-01-22', 13, 1221, '09123131312', 'Unemployed', 'bucal 2', 'Foursquare', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 3, 2, '', 'BC2'),
(84, 'Carl Jaylie', 'CAYABYAB ', 'Loyola', 'Male', '2009-07-17', 9, 1231, '09121313123', 'Unemployed', 'bucal 2', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 3, 2, 1, '', 'BC2'),
(85, 'Adela', 'LOYOLA', 'Gimena', 'Female', '1953-02-04', 66, 123123, '09232131313', 'Unemployed', 'bucal 2', 'Protestant Christianity', 'Married', 'Elementary Level', 'None', 'None', '', '', 'Yes', 1, 5, 2, 3, '', 'BC2'),
(86, 'Pedro', 'GAYCES', 'Solidad', 'Male', '1964-04-26', 54, 123213, '09123131231', 'Employed', 'bucal 2', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 1, 3, 1, 2, '', 'BC2'),
(87, 'Yolanda', 'MODANZA', 'Sinones', 'Female', '1970-07-04', 48, 1232131, '09213123131', 'Employed', 'bucal 2', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 2, 2, '', 'BC2'),
(88, 'Patrick', 'MODANZA', 'Sinones', 'Male', '1994-11-14', 24, 2312, '09232131231', 'Unemployed', 'bucal 2', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 3, 2, '', 'BC2'),
(89, 'Judy Ann', 'MODANZA', 'Sinones', 'Female', '1997-03-20', 22, 12312, '0923131', 'Unemployed', 'bucal 2', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 5, 3, 2, '', 'BC2'),
(90, 'Jerald', 'MODANZA', 'Sinones', 'Male', '2002-09-21', 16, 12312, '09232131232', 'Unemployed', 'bucal 2', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 3, 1, 2, '', 'BC2'),
(91, 'JohnRonnie', 'ALBATANA', 'Espeneli', 'Male', '1989-11-30', 29, 12312, '09123123', 'Employed', 'bucal 2', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 6, 3, 3, '', 'BC2'),
(92, 'Juvyline', 'MODANZA', 'Sinones', 'Female', '1993-04-30', 25, 221321, '09213123123', 'Unemployed', 'bucal 2', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 1, 4, 2, 2, '', 'BC2'),
(93, 'Ayesha Isabelle', 'ALBATANA', 'Modanza', 'Female', '2015-12-12', 3, 12312, '09122131221', 'Unemployed', 'bucal 2', 'Alliance of Bible Christian', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 5, 3, 2, '', 'BC2'),
(94, 'Manuel', 'DIMAYACYAC', 'Agoba', 'Male', '1974-08-19', 44, 12321, '09123213122', 'Employed', 'bucal 2', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Level', 'None', '', '', 'Yes', 1, 3, 1, 2, '', 'BC2'),
(95, 'Jasmin', 'HERNANDEZ', 'Completo', 'Female', '1986-06-25', 32, 213123, '09123131313', 'Unemployed', 'bucal 2', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 1, 4, 2, 2, '', 'BC2'),
(96, 'Trixie kiel', 'HERNANDEZ', 'Completo', 'Female', '2007-11-06', 11, 21312, '09121313213', 'Unemployed', 'bucal 2', 'Roman Catholic', 'Single', 'Elementary Level', 'High School Level', 'None', '', '', 'No', 1, 5, 3, 2, '', 'BC2'),
(97, 'Nickson', 'COMPLETO', 'Villanueva', 'Male', '1987-10-27', 31, 21312, '09123123132', 'Employed', 'bucal 2', 'Jehovah’s Witnesses', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 2, 2, '', 'BC2'),
(98, 'Jessa', 'MONTALLANA', 'N/A', 'Female', '1989-12-31', 29, 23123, '09232131231', 'Employed', 'bucal 2', 'Pentecostal', 'Married', 'Elementary Level', 'High School Level', 'College Undergraduate', '', '', 'Yes', 1, 10, 5, 5, '', 'BC2'),
(99, 'Patricia Nicole', 'COMPLETO', 'Montallana', 'Female', '2011-06-01', 7, 12321, '09123123123', 'Unemployed', 'bucal 2', 'Roman Catholic', 'Married', 'Elementary Level', 'High School Level', 'College Undergraduate', '', '', 'No', 1, 5, 3, 2, '', 'BC2'),
(100, 'Franz Nicolas', 'COMPLETO', 'Montallana', 'Female', '2013-12-23', 5, 22131, '09231233132', 'Unemployed', 'bucal 2', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 10, 5, 5, '', 'BC2'),
(101, 'Calrita', 'COMPLETO', 'Nuestro', 'Male', '1956-08-12', 62, 1231, '09213123213', 'Unemployed', 'bucal 2', 'Roman Catholic', 'Married', 'Elementary Level', 'High School Level', 'Post Baccalaureate', '', '', 'No', 1, 10, 5, 5, '', 'BC2'),
(102, 'Sesinando', 'MARQUEZ', 'Parado', 'Male', '1976-12-10', 42, 123123, '09123123212', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 10, 10, 5, 5, '', 'PSB'),
(103, 'Rocelle', 'MARQUEZ', 'Bening', 'Female', '2008-01-08', 11, 1232132, '09123123123', 'Employed', 'none', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 10, 10, 5, 5, '', 'PSB'),
(104, 'Rose Vher', 'MARQUEZ', 'Bening', 'Female', '2008-01-08', 11, 213213, '09123121212', 'Unemployed', 'none', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 10, 10, 5, 5, '', 'PSB'),
(105, 'Ray Ver', 'MARQUEZ', 'Bening', 'Male', '2012-03-10', 5, 321, '', 'none', 'none', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 4, 4, 2, 2, '', 'PSB'),
(106, 'Robert', 'AMORES', 'Cinco', 'Male', '1960-09-15', 57, 111, '', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 3, 3, 1, 2, '', 'PSB'),
(107, 'Irene', 'AMORES', 'Bilugan', 'Female', '1972-07-11', 45, 111, '09196245968', 'Unemployed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 3, 3, 1, 2, '', 'PSB'),
(108, 'John Bert', 'AMORES', 'Bilugan', 'Male', '2014-07-28', 4, 111, '', 'none', 'none', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 3, 3, 1, 2, '', 'PSB'),
(109, 'Jamaica', 'ADRIATICO', 'Amores', 'Female', '2005-11-08', 13, 111, '', 'none', 'none', 'Roman Catholic', 'Single', 'Elementary Level', 'High School Level', 'None', '', '', 'No', 4, 4, 2, 2, '', 'PSB'),
(110, 'John Lester', 'ROLLON', 'Basit', 'Male', '1991-08-31', 27, 112, '09476122983', 'Unemployed', 'none', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 4, 4, 1, 3, '', 'PSB'),
(111, 'Aiza', 'ROLLON', 'Amores', 'Female', '1990-07-24', 28, 112, '09196211578', 'Unemployed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', 'PUP', 'BSBA', 'No', 4, 4, 1, 3, '', 'PSB'),
(112, 'John Arun  ', 'ROLLON', 'Amores', 'Male', '2011-03-17', 7, 112, '', 'none', 'none', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 4, 4, 1, 3, '', 'PSB'),
(113, 'John Aldrich', 'ROLLON', 'Amores', 'Male', '2013-12-18', 5, 112, '', 'none', 'none', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 4, 4, 1, 3, '', 'PSB'),
(114, 'Tersesita', 'ENOFRE', 'Loranas', 'Female', '1955-11-03', 63, 113, '09197820585', 'Unemployed', 'none', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 6, 6, 4, 2, '', 'PSB'),
(115, 'Jaime Marie', 'AMATA', 'Tuazon', 'Female', '2000-10-08', 18, 113, '', 'Unemployed', 'none', 'Protestant Christianity', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 6, 6, 4, 2, '', 'PSB'),
(116, 'Gilbert', 'GUTIEREZ', 'Ibay', 'Male', '1980-11-11', 38, 113, '09192358767', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 6, 6, 4, 2, '', 'PSB'),
(117, 'Gemma', 'GUTIEREZ', 'Enofre', 'Female', '1987-11-04', 31, 113, '09196376545', 'Employed', 'none', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 6, 6, 4, 2, '', 'PSB'),
(118, 'Jean Aiyeeka', 'GUTIEREZ', 'Enofre', 'Female', '2008-07-09', 9, 113, '', 'none', 'none', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 6, 6, 4, 2, '', 'PSB'),
(119, 'James', 'GUTIEREZ', 'Enofre', 'Male', '2007-08-10', 11, 113, '', 'none', 'none', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 6, 6, 4, 2, '', 'PSB'),
(120, 'Romulo', 'VISCARRA', 'Bayaborda', 'Male', '1953-09-05', 63, 114, '09197892635', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 4, 4, 3, 1, '', 'PSB'),
(121, 'Luciana', 'VISCARRA', 'Garcia', 'Female', '1968-02-07', 51, 114, '09195635444', 'Unemployed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 4, 4, 3, 1, '', 'PSB'),
(122, 'Armando', 'AGRIMANO', 'Sernat', 'Male', '1973-06-19', 45, 115, '09198846454', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 5, 5, 3, 2, '', 'LM'),
(123, 'Marelen', 'DIMAALA', 'Dimailig', 'Female', '1976-05-04', 42, 115, '09196277835', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 5, 5, 3, 2, '', 'LM'),
(124, 'Zyrill', 'AGRIMANO', 'Dimaala', 'Female', '2003-01-16', 16, 115, '', 'Unemployed', 'none', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 5, 5, 3, 2, '', 'LM'),
(125, 'Kryll Ann', 'AGRIMANO', 'Dimaala', 'Female', '2004-12-23', 14, 115, '', 'Unemployed', 'none', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 5, 5, 3, 2, '', 'LM'),
(126, 'Zhyden', 'VALDEZ', 'Dimaala', 'Male', '2015-11-24', 3, 115, '', 'none', 'none', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 5, 5, 3, 2, '', 'LM'),
(127, 'Arjay', 'ARIMANO', 'Sernat', 'Male', '1990-03-11', 29, 116, '09191745542', 'Employed', 'none', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 3, 3, 1, 2, '', 'LM'),
(128, 'Jessa', 'LAO', 'Barotilyo', 'Female', '1989-12-24', 29, 116, '09193654234', 'Employed', 'none', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 3, 3, 1, 2, '', 'LM'),
(129, 'Kent Jerome', 'AGRIMANO', 'Lao', 'Male', '2014-12-25', 4, 116, '', 'none', 'none', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 3, 3, 1, 2, '', 'LM'),
(130, 'Joel', 'ILAGAN', 'Sernat', 'Male', '1978-10-15', 40, 117, '09191634542', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 4, 4, 2, 2, '', 'LM'),
(131, 'Baby Joy', 'ALBORO', 'Caldellero', 'Female', '1986-12-29', 32, 117, '09196732244', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 4, 4, 2, 2, '', 'LM'),
(132, 'Joshua', 'ILAGAN', 'Alboro', 'Male', '2008-02-12', 11, 117, '', 'Unemployed', 'none', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'Post Baccalaureate', '', '', 'No', 4, 4, 2, 2, '', 'LM'),
(133, 'Janieca', 'ILAGAN', 'Alboro', 'Female', '2011-12-10', 7, 117, '', 'Unemployed', 'none', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 4, 4, 2, 2, '', 'LM'),
(134, 'Arnel', 'ILAGAN', 'Sernat', 'Male', '1982-10-26', 36, 118, '0919193646', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 2, 2, 1, 1, '', 'LM'),
(135, 'Juliet', 'DULAY', 'Infanta', 'Female', '1982-12-07', 36, 118, '09196453245', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 2, 2, 1, 1, '', 'LM'),
(136, 'Loreto', 'ILAGAN', 'Villaluna', 'Male', '1950-09-12', 68, 119, '', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Level', 'None', '', '', 'Yes', 5, 5, 3, 2, '', 'LM'),
(137, 'Marieta', 'SERNAT', 'Berenguel', 'Female', '1954-10-05', 64, 119, '', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 5, 5, 3, 2, '', 'LM'),
(138, 'Ailyn', 'ILAGAN', 'Sernat', 'Female', '1989-05-22', 29, 119, '09197455253', 'Employed', 'none', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 5, 5, 3, 2, '', 'LM'),
(139, 'Joseph', 'ILAGAN', 'Sernat', 'Male', '1993-08-29', 25, 119, '09191746565', 'Unemployed', 'none', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 5, 5, 3, 2, '', 'LM'),
(140, 'Marianne', 'ILAGAN', 'Publico', 'Female', '2000-03-11', 19, 119, '09196455668', 'Unemployed', 'none', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 5, 5, 3, 2, '', 'LM'),
(141, 'Ruel', 'SERNAT', 'Contrano ', 'Male', '1983-02-17', 36, 120, '09193974555', 'Unemployed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 3, 3, 1, 2, '', 'LM'),
(142, 'Flaviano', 'MANDOS', 'Panganiban', 'Male', '1981-12-27', 37, 121, '09476278745', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 4, 4, 1, 3, '', 'PSB'),
(143, 'Alfie', 'DIROY', 'Ernie', 'Male', '1982-11-27', 36, 121, '01919654224', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'Yes', 3, 3, 1, 2, '', 'PT4'),
(144, 'Laarni', 'DIROY', 'Agrimano', 'Female', '1982-05-28', 36, 121, '09193723533', 'Unemployed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 3, 3, 1, 2, '', 'PT4'),
(145, 'Axel Drake', 'DIROY', 'Agrimano', 'Male', '2013-03-13', 6, 121, '', 'none', 'none', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 3, 3, 1, 2, '', 'PT4'),
(146, 'Liberato', 'DIROY', 'Feraer', 'Male', '1955-12-19', 63, 122, '', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'Yes', 5, 5, 2, 3, '', 'PT4'),
(147, 'Guadalupe', 'DIROY', '         Ernie', 'Female', '1951-12-11', 67, 122, '', 'Unemployed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', 'Teacher', 'No', 5, 5, 2, 3, '', 'PT4'),
(148, 'Ferdinand Benjie', 'DIROY', 'Ernie', 'Male', '1981-03-19', 38, 122, '09194746244', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 5, 5, 2, 3, '', 'PT4'),
(149, 'Irene Rose', 'DIROY', 'Motas', 'Female', '1989-06-10', 29, 122, '09192374746', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 5, 5, 2, 3, '', 'PT4'),
(150, 'Ferdielyn Gabrielle', 'DIROY', 'Motas', 'Male', '2016-12-19', 2, 122, '', 'none', 'none', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 5, 5, 2, 3, '', 'PT4'),
(151, 'Lauro', 'BAUTISTA', 'Bay', 'Male', '1961-11-03', 57, 123, '', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 14, 14, 4, 10, '', 'PT4'),
(152, 'Adoracion', 'BAUTISTA', 'Ferrer', 'Female', '1961-04-10', 57, 123, '', 'Unemployed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 14, 14, 4, 10, '', 'PT4'),
(153, ' John Lexter', 'BAUTISTA', 'Ferrer', 'Male', '1986-08-29', 32, 123, '09196353785', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 14, 14, 4, 10, '', 'PT4'),
(154, 'Jaylar', 'BAUTISTA', 'Ferrer', 'Male', '1988-02-28', 31, 123, '09193846654', 'Unemployed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 14, 14, 4, 10, '', 'PT4'),
(155, 'Jaylar', 'BAUTISTA', 'Ferrer', 'Male', '1988-02-28', 31, 123, '09193846654', 'Unemployed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 14, 14, 4, 10, '', 'PT4'),
(156, 'Roger', 'BAUTISTA', 'Bay', 'Male', '1952-05-23', 66, 123, '09193937544', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 14, 14, 4, 10, '', 'PT4'),
(157, 'Ronald', 'BAUTISTA', 'Ambion', 'Male', '1974-11-14', 44, 123, '09193783653', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 14, 14, 4, 10, '', 'PT4'),
(158, 'Rosevene', 'BAUTISTA', 'Gorner', 'Female', '1974-07-30', 44, 123, '09478328363', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 14, 14, 4, 10, '', 'PT4'),
(159, 'Mary Rose', 'BAUTISTA', 'Gorner', 'Female', '1997-12-23', 21, 123, '09194745544', 'Unemployed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 14, 14, 4, 10, '', 'PT4'),
(160, 'Mark Jerome', 'BAUTISTA', 'Gorner', 'Male', '1999-06-09', 19, 123, '09194846544', 'Unemployed', 'none', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 14, 14, 4, 10, '', 'PT4'),
(161, 'Mark Anthony', 'BAUTISTA', 'Gorner', 'Male', '2001-07-01', 17, 123, '', 'Unemployed', 'none', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 14, 14, 4, 10, '', 'PT4'),
(162, 'John Llyod', 'BAUTISTA', 'Gorner', 'Male', '2005-10-15', 13, 123, '', 'Unemployed', 'none', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 14, 14, 4, 10, '', 'PT4'),
(163, 'OLIVER', 'Leonara', 'Diroy', 'Female', '1928-05-11', 88, 6, '0997826422', 'Employed', 'none', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 6, 6, 3, 3, '', 'PT3'),
(165, 'Dominador', 'Oliver', 'Diroy', 'Male', '0047-06-26', 1971, 96, '09995425632', 'none', '45', 'Roman Catholic', 'Widowed', 'Elementary Level', 'High School Level', 'None', '', '', 'Yes', 7, 4, 4, 3, '', 'PT3'),
(166, 'Jessica Grace		', 'OLIVER', 'diroy', 'Female', '1957-06-17', 61, 49, '09996432562', 'none', '12', 'Roman Catholic', 'Married', 'Elementary Level', 'High School Level', 'None', '', '', 'Yes', 7, 4, 4, 3, '', 'PT3'),
(168, 'Celistino', 'CHAVEZ', 'cabadin', 'Male', '1963-05-19', 55, 5, '09562546321', 'Unemployed', '46', 'Roman Catholic', 'Married', 'Elementary Level', 'High School Level', 'None', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(169, 'Leonila', 'CHAVEZ	', 'Cabadin', 'Female', '1963-04-03', 56, 46, '09458741554', 'Employed', '46', 'Roman Catholic', 'Married', 'Elementary Level', 'High School Level', 'None', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(170, 'Alyssa', 'CHAVEZ	', 'Cabadin', 'Female', '1998-04-20', 20, 46, '09987526315', 'none', '46', 'Roman Catholic', 'Single', 'Elementary Level', 'High School Level', 'Vocational', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(171, 'Hana Nicole', 'CHAVEZ	', 'cabadin', 'Female', '2001-01-30', 18, 46, '09264452318', 'Unemployed', '46', 'Roman Catholic', 'Single', 'Elementary Level', 'High School Level', 'None', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(172, 'Guillermo	', 'PARAISO	', 'Villarva', 'Male', '1966-04-05', 52, 47, '09471564546', 'Unemployed', '48', 'Iglesia ni Cristo', 'Married', 'Elementary Level', 'High School Level', 'None', '', '', 'Yes', 3, 3, 2, 1, '', 'PT3'),
(173, 'Remedios', 'PARAISO	', 'PARAISO	', 'Female', '1958-03-11', 61, 48, '09131231864', 'Unemployed', '48', 'Iglesia ni Cristo', 'Married', 'Elementary Level', 'High School Level', 'None', '', '', 'Yes', 3, 3, 2, 1, '', 'PT3'),
(174, 'Mhilet', 'PARAISO	', 'Emelo', 'Female', '2000-10-27', 18, 48, '09785616546', 'Unemployed', '48', 'Iglesia ni Cristo', 'Single', 'Elementary Level', 'High School Level', 'None', '', '', 'Yes', 3, 3, 2, 1, '', 'PT3'),
(175, 'EMELO	', 'Cerela', 'Briones	', 'Female', '1938-04-22', 80, 49, '09878941654', 'none', '49', 'Aglipay', 'Widowed', 'Elementary Level', 'High School Level', 'None', '', '', 'Yes', 1, 1, 1, 1, '', 'PT3'),
(176, 'EMELO', 'Elmer', 'Briones	', 'Male', '1982-02-19', 37, 50, '09498413211', 'Employed', '50', 'Aglipay', 'Married', 'Elementary Level', 'High School Level', 'College Undergraduate', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(177, 'EMELO	', 'Phildress', 'Vernate', 'Female', '1987-11-12', 31, 50, '09879454146', 'Employed', '50', 'Aglipay', 'Married', 'Elementary Level', 'High School Level', 'College Undergraduate', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(178, 'EMELO', 'jayvee', 'Vernate', 'Male', '2007-10-06', 11, 50, '09498451657', 'none', '50', 'Aglipay', 'Single', 'Elementary Level', 'High School Level', 'None', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(179, 'EMELO', 'Nidia', 'Vernate', 'Female', '2009-06-07', 9, 51, '09484561448', 'none', '51', 'Aglipay', 'Single', 'Elementary Level', 'None', 'None', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(180, 'EMELO', 'Teodoro', 'Briones', 'Male', '1970-07-05', 48, 51, '09849846131', 'Unemployed', '51', 'Aglipay', 'Widowed', 'Elementary Level', 'High School Level', 'Vocational', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(181, 'EMELO', 'Juan', 'Briones', 'Male', '1954-06-16', 64, 52, '09984984321', 'none', '52', 'Roman Catholic', 'Married', 'Elementary Level', 'High School Level', 'Vocational', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(182, 'EMELO', 'Rosamia', 'Solis', 'Female', '1963-02-05', 56, 52, '09846121651', 'none', '52', 'Roman Catholic', 'Married', 'Elementary Level', 'High School Level', 'None', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(183, 'EMELO', 'Joelito', 'Solis', 'Male', '1983-10-08', 35, 52, '09874913218', 'Employed', '52', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(184, 'EMELO', 'Marjorie', 'Guiao', 'Female', '1981-12-27', 37, 53, '09498423168', 'Employed', '53', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 4, 4, 4, 2, '', 'PT3'),
(185, 'EMELO', 'Jeffry', 'Solis', 'Male', '1985-05-28', 32, 53, '09874546548', 'Employed', '53', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(186, 'EMELO', 'Rachelle', 'Angat', 'Female', '1992-10-29', 26, 53, '09784654864', 'Employed', '53', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Post Baccalaureate', '', '', 'Yes', 4, 4, 2, 2, '', 'PT3'),
(187, 'TIMAGOS', 'Adrean', 'Banelga', 'Male', '1978-05-09', 40, 55, '09798456416', 'Employed', '55', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 3, 3, 2, 1, '', 'PT3'),
(188, 'TIMAGOS', 'Marites', 'Emelo', 'Female', '1980-11-18', 38, 55, '09351321643', 'none', '56', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 3, 3, 2, 1, '', 'PT3'),
(189, 'TIMAGOS', 'Kevin Carl', 'Emelo', 'Male', '2006-01-15', 13, 56, '09846513214', 'none', '56', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'Yes', 3, 3, 2, 1, '', 'PT3'),
(190, 'BILBAO	', 'Richmond', 'Casipi', 'Male', '1987-10-25', 31, 57, '09743464654', 'Employed', '58', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 3, 3, 1, 2, '', 'PT3'),
(191, 'BILBAO', 'Jeny', 'Emelo', 'Female', '1988-06-23', 30, 58, '09798454543', 'Employed', '58', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 3, 3, 1, 2, '', 'PT3'),
(192, 'Eladio', 'ICASCIANO', 'Anos', 'Male', '1954-02-18', 65, 1231, '09123123131', 'Employed', 'Garita B', 'Missionary Baptist Church of the  Philippines', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 10, 10, 5, 5, '', 'G1B'),
(193, 'Gerry', 'MALABAY', 'Balansog', 'Male', '2001-12-08', 17, 11234123, '09231231231', 'Unemployed', 'Garita B', 'Victory Chapel', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 10, 10, 5, 5, '', 'G1B'),
(194, 'Gerry', 'CENDON', 'Icasiano', 'Male', '1967-07-14', 51, 21312, '09213213213', 'Employed', 'Garita B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 10, 10, 5, 5, '', 'G1B'),
(195, 'Marcela', 'CENDON', 'Paiton', 'Female', '1972-01-24', 47, 21312, '09213213122', 'Employed', 'Garita B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 10, 5, 5, 5, '', 'G1B'),
(196, 'Jessa', 'CENDON', '           Paiton', 'Female', '2005-12-05', 13, 2313, '09123122313', 'Unemployed', 'Garita B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 10, 5, 5, 5, '', 'G1B'),
(197, 'Gemer', 'CENDON', 'Paiton', 'Male', '1989-05-12', 29, 12321, '09131232132', 'Employed', 'Garita B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 10, 10, 5, 5, '', 'G1B'),
(198, 'Jay-ann', 'TAÑAGRAS', 'Cendon', 'Female', '1994-11-17', 24, 123123, '09123123213', 'Employed', 'Garita B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 10, 10, 5, 5, '', 'G1B'),
(199, 'Merysol', 'TAÑAGRAS', 'Cendon', 'Female', '2013-12-09', 5, 21312, '09123123123', 'Unemployed', 'Garita B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'None', 'None', '', '', 'No', 10, 10, 5, 5, '', 'G1B'),
(200, 'Shelina mae', 'LARAWAN', 'Cendon', 'Female', '1990-10-09', 28, 2312321, '09213123211', 'Unemployed', 'Garita B', 'Islam', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 10, 5, 5, 5, '', 'G1B'),
(201, 'Fernando', 'BUTOR', 'Alvarez', 'Male', '1967-01-18', 52, 12312, '09123121312', 'Employed', 'Garita B', 'Pentecostal', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 10, 10, 5, 5, '', 'G1B'),
(202, 'Precilla', 'OBRADOR', 'Conia', 'Female', '1970-10-03', 48, 12321, '09123213122', 'Unemployed', 'Garita B', 'Jehovah’s Witnesses', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 10, 10, 5, 5, '', 'G1B'),
(203, 'Florante', 'LEDNOR', 'Diquit', 'Male', '1946-04-28', 72, 12312, '09123123213', 'Employed', 'Garita B', 'Pentecostal', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 10, 10, 5, 5, '', 'G1B'),
(204, 'Rosela', 'CANADA', 'Bacani', 'Female', '1959-02-12', 60, 131231, '09123123131', 'Employed', 'Garita B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 10, 10, 5, 5, '', 'G1B'),
(205, 'Michael', 'ANTAZO', 'Escorido', 'Male', '1977-04-29', 42, 132132, '09211231231', 'Employed', 'Garita B', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 10, 10, 5, 5, '', 'G1B'),
(206, 'Diana', 'ANTAZO', 'Canada', 'Female', '1995-05-14', 23, 123, '09213123131', 'Unemployed', 'Garita B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 10, 10, 5, 5, '', 'G1B'),
(207, 'Mark Andrie', 'ANTAZO', 'Canada', 'Male', '2004-03-19', 15, 32123, '09312312312', 'Employed', 'Garita B', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 10, 10, 5, 5, '', 'G1B'),
(208, 'Maica Shane', 'ANTAZO', 'Canada', 'Female', '2008-05-22', 10, 12312321, '09123123123', 'Unemployed', 'Garita B', 'Foursquare', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 10, 10, 5, 5, '', 'G1B'),
(209, 'Khiel Mathew', 'ANTAZO', 'Canada', 'Male', '2015-06-27', 3, 21312321, '09131221312', 'Unemployed', 'Garita B', 'Pentecostal', 'Single', 'None', 'None', 'None', '', '', 'No', 10, 10, 5, 5, '', 'G1B'),
(210, 'Marciano', 'GONZALES', 'Lingal', 'Male', '1966-05-05', 52, 1212313, '09213123213', 'Employed', 'Garita B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 10, 5, 5, 5, '', 'G1B'),
(211, 'Felicidad', 'GONZALES', 'Legaspi', 'Female', '1971-11-23', 47, 23213, '09123212312', 'Employed', 'Garita B', 'UCCP', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 10, 10, 5, 5, '', 'G1B'),
(212, 'Nomer Sr.', 'TORREZ', 'Niyogan', 'Male', '1966-05-12', 52, 45, '', 'Employed', 'bucal 3A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 1, 3, '', 'BC3A'),
(213, 'Nelia', 'TORREZ', 'Paragas', 'Female', '1958-11-14', 60, 45, '', 'Unemployed', 'bucal 3A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 4, 1, 3, '', 'BC3A'),
(214, 'Jhon Nino', 'ALQUIROZ', 'Ibulan', 'Male', '1985-06-24', 33, 78, '', 'Employed', 'bucal 3A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 1, 2, '', 'BC3A'),
(215, 'Amie', 'ALQUIROZ', 'Torrez', 'Female', '1988-01-15', 31, 78, '', 'Unemployed', 'bucal 3A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 1, 2, '', 'BC3A'),
(216, 'Nestor', 'TORREZ', 'Paragas', 'Male', '1990-10-24', 28, 45, '', 'Employed', 'bucal 3A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 4, 1, 3, '', 'BC3A'),
(217, 'Jomen', 'ALQUIROZ', 'Torrez', 'Male', '2008-01-19', 11, 78, '', 'none', 'bucal 3A', 'Iglesia ni Cristo', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 3, 1, 2, '', 'BC3A'),
(218, 'Gerry', 'CATHEDRILLA', 'Baiares', 'Male', '1977-08-30', 41, 100, '', 'Employed', 'bucal 3A', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'Yes', 1, 4, 2, 2, '', 'BC3A'),
(219, 'Cynthia', 'CATHEDRILLA', 'San Jose', 'Female', '1970-06-09', 48, 100, '', 'Employed', 'bucal 3A', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 4, 2, 2, '', 'BC3A'),
(220, 'Jerri Ann', 'CATHEDRILLA', 'San Jose', 'Female', '2004-12-05', 14, 100, '', 'none', 'bucal 3A', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 4, 2, 2, '', 'BC3A'),
(221, 'Rich', 'CATHEDRILLA', 'San Jose', 'Male', '2007-08-22', 11, 100, '', 'none', 'bucal 3A', 'Born Again Christian', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'BC3A'),
(222, 'Oscar', 'RAMIREZ', 'San Jose', 'Male', '1964-02-13', 55, 23, '', 'Employed', 'bucal 3A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 3, 1, '', 'BC3A'),
(223, 'Lilibeth', 'RAMIREZ', 'Roxas', 'Female', '1964-01-15', 55, 23, '', 'Employed', 'bucal 3A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 4, 3, 1, '', 'BC3A'),
(224, 'Asheane', 'RAMIREZ', 'Roxas', 'Female', '1997-11-26', 21, 23, '', 'none', 'bucal 3A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 4, 3, 1, '', 'BC3A'),
(225, 'Ritchel', 'RAMIREZ', 'Roxas', 'Female', '1999-03-29', 20, 23, '', 'none', 'bucal 3A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 4, 3, 1, '', 'BC3A'),
(226, 'Jeff Aries', 'CABEROY', 'Bersabe', 'Male', '1995-06-15', 23, 30, '', 'none', 'bucal 3A', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 6, 2, 4, '', 'BC3A'),
(227, 'Kiel Aron', 'CABEROY', 'Bersabe', 'Male', '1996-12-13', 22, 30, '', 'none', 'bucal 3A', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 6, 2, 4, '', 'BC3A'),
(228, 'Precious Kyla', 'CABEROY', 'Bersabe', 'Female', '2001-08-10', 17, 30, '', 'none', 'bucal 3A', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 6, 2, 4, '', 'BC3A'),
(229, 'Renato', 'ANICO', 'Anglo', 'Male', '1950-04-29', 68, 50, '', 'Employed', 'bucal 3A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 3, 1, 2, '', 'BC3A'),
(230, 'Gavino', 'ORENCIANO', 'Anciano', 'Male', '1949-02-19', 70, 10, '', 'Unemployed', 'bucal 3A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 2, 1, 1, '', 'BC3A'),
(231, 'Marvin', 'VIAJE', 'Marero', 'Male', '1980-11-04', 38, 22, '', 'Employed', 'bucal 3A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 2, 2, '', 'BC3A'),
(232, 'Dennis', 'MENDOZA', 'Angue', 'Male', '1978-08-18', 40, 13, '', 'Unemployed', 'bucal 3B', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 5, 2, 3, '', 'BC3B'),
(233, 'Aime', 'MENDOZA', 'P', 'Female', '1978-05-20', 40, 22, '', 'Unemployed', 'bucal 3B', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 2, 3, '', 'BC3B'),
(234, 'Jasrel', 'MENDOZA', 'P', 'Male', '2002-09-27', 16, 10, '', 'none', 'bucal 3B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 2, 3, '', 'BC3B'),
(235, 'Romeo', 'ANGUE', 'Dimaala', 'Male', '1950-03-03', 69, 18, '', 'Unemployed', 'bucal 3B', 'Iglesia ni Cristo', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 2, 2, 1, '', 'BC3B'),
(236, 'Amado', 'MANZO', 'Dilasalas', 'Male', '1962-09-26', 56, 66, '', 'Employed', 'bucal 3B', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 10, 7, 3, '', 'BC3B'),
(237, 'Rossana', 'MANZO', 'Turirit', 'Male', '1970-10-27', 48, 66, '', 'Employed', 'bucal 3B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 10, 7, 3, '', 'BC3B'),
(238, 'Joven', 'MANZO', 'Turirit', 'Male', '1995-02-06', 24, 66, '', 'Employed', 'bucal 3B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 10, 7, 3, '', 'BC3B'),
(239, 'Jovilyn', 'MANZO', 'Turirit', 'Female', '1996-10-15', 22, 66, '', 'Employed', 'bucal 3B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 10, 7, 3, '', 'BC3B'),
(240, 'Jhon Nyke', 'MANZO', 'Turirit', 'Male', '1999-07-09', 19, 66, '', 'none', 'bucal 3B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 10, 7, 3, '', 'BC3B'),
(241, 'Josselle', 'MANZO', 'Turirit', 'Female', '2000-03-17', 19, 66, '', 'none', 'bucal 3B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 10, 7, 3, '', 'BC3B'),
(242, 'Jamaica', 'MANZO', 'Turirit', 'Female', '2001-05-13', 17, 66, '', 'none', 'bucal 3B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 10, 7, 3, '', 'BC3B'),
(243, 'Jamine', 'MANZO', 'Turirit', 'Female', '2010-12-12', 8, 66, '', 'none', 'bucal 3B', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 10, 7, 3, '', 'BC3B'),
(244, 'Espribado', 'ANGUE', 'Casaul', 'Male', '1956-08-22', 62, 52, '', 'Unemployed', 'bucal 3B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 6, 3, 3, '', 'BC3B'),
(245, 'Delia', 'ANGUE', 'Consay', 'Female', '1964-12-09', 54, 52, '', 'Employed', 'bucal 3B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 6, 3, 3, '', 'BC3B'),
(246, 'Victor', 'HERNANDEZ', 'Bareja', 'Male', '1975-04-04', 44, 8, '', 'Unemployed', 'bucal 3B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 3, 1, 2, '', 'BC3B'),
(247, 'Lorieliza', 'HERNANDEZ', 'Corbilla', 'Female', '1982-06-30', 36, 8, '', 'Unemployed', 'bucal 3B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 1, 2, '', 'BC3B'),
(248, 'Rhaniel', 'HERNANDEZ', 'Corbilla', 'Male', '2011-03-03', 8, 8, '', 'none', 'bucal 3B', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 3, 1, 2, '', 'BC3B'),
(249, 'Chester', 'LABRADOR', 'S', 'Male', '1986-10-27', 32, 33, '', 'Employed', 'bucal 3B', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 2, 1, 1, '', 'BC3B'),
(250, 'Jovylee', 'LABRADOR', 'Rada', 'Female', '1988-08-19', 30, 33, '', 'Unemployed', 'bucal 3B', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 2, 1, 1, '', 'BC3B'),
(251, 'Rodolfo', 'PESCASIO', 'Espineli', 'Male', '1956-04-20', 62, 25, '', 'Unemployed', 'bucal 3B', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 2, 1, 1, '', 'BC3B'),
(252, 'Renato', 'CAMPO SAGRADO', 'Marin', 'Male', '1947-04-05', 72, 70, '', 'none', 'bucal 4A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 6, 4, 2, '', 'BC4A'),
(253, 'Gloria', 'CAMPO SAGRADO', 'Arandia', 'Female', '1946-04-10', 72, 70, '', 'none', 'bucal 4A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 6, 4, 2, '', 'BC4A'),
(254, 'Cristine', 'CAMPO SAGRADO', 'Guci', 'Female', '1977-08-09', 41, 70, '', 'Unemployed', 'bucal 4A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 6, 4, 2, '', 'BC4A'),
(255, 'Ronaldo ', 'CAMPO SAGRADO', 'Arandia', 'Male', '1971-05-01', 47, 70, '', 'Employed', 'bucal 4A', 'Roman Catholic', 'Separated', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 6, 4, 2, '', 'BC4A'),
(256, 'Miguel', 'LLIANES', 'Carada', 'Male', '1975-02-18', 44, 49, '', 'Employed', 'bucal 4A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'Yes', 1, 5, 2, 3, '', 'BC4A'),
(257, 'Janette', 'LLIANES', 'Reydado', 'Female', '1979-04-02', 40, 49, '', 'Employed', 'bucal 4A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 5, 2, 3, '', 'BC4A'),
(258, 'John Mig', 'LLIANES', 'Reydado', 'Male', '1998-09-23', 20, 49, '', 'none', 'bucal 4A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 2, 3, '', 'BC4A'),
(259, 'Mark Juan', 'LLIANES', 'Reydado', 'Male', '2000-05-16', 18, 49, '', 'none', 'bucal 4A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 2, 3, '', 'BC4A'),
(260, 'Joana Mae', 'LLIANES', 'Reydado', 'Female', '2005-05-14', 13, 49, '', 'none', 'bucal 4A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 2, 3, '', 'BC4A'),
(261, 'Reynaldo', 'VARGAS', 'Valenzuela', 'Male', '1963-10-10', 55, 31, '', 'Employed', 'bucal 4A', 'Iglesia ni Cristo', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 2, 1, '', 'BC4A'),
(262, 'Juanita', 'MARYANBERY', 'Madrid', 'Female', '1954-05-04', 64, 31, '', 'Unemployed', 'bucal 4A', 'Iglesia ni Cristo', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 2, 1, '', 'BC4A'),
(263, 'Reynalyn', 'VARGAS', 'Salamatin', 'Female', '2006-05-29', 12, 31, '', 'none', 'bucal 4A', 'Iglesia ni Cristo', 'Live-in', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 3, 2, 1, '', 'BC4A'),
(264, 'Alexander', 'ESEQUE', 'Pescasio', 'Male', '1961-10-26', 57, 55, '', 'Employed', 'bucal 4A', 'Evangelical', 'Widowed', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 1, 2, '', 'BC4A'),
(265, 'Bernadette', 'ESEQUE', 'Novelo', 'Female', '1996-12-11', 22, 55, '', 'Employed', 'bucal 4A', 'Evangelical', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 3, 1, 2, '', 'BC4A'),
(266, 'Alexander', 'ESEQUE', 'Novelo', 'Male', '2001-05-12', 17, 55, '', 'none', 'bucal 4A', 'Evangelical', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 3, 1, 2, '', 'BC4A'),
(267, 'Noel', 'BAUTISTA', 'Villanueva', 'Male', '1972-08-02', 46, 41, '', 'Employed', 'bucal 4A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 5, 1, 4, '', 'BC4A'),
(268, 'Jacqueline', 'BAUTISTA', 'Fernandes', 'Female', '1986-01-25', 33, 41, '', 'Unemployed', 'bucal 4A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 1, 4, '', 'BC4A'),
(269, 'Patric Anthony', 'BAUTISTA', 'Fernandes', 'Male', '2008-10-18', 10, 41, '', 'none', 'bucal 4A', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 5, 1, 4, '', 'BC4A'),
(270, 'Antonio', 'BAUTISTA', 'Fernandes', 'Male', '2008-10-19', 10, 41, '', 'none', 'bucal 4A', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 5, 1, 4, '', 'BC4A'),
(271, 'Jonel', 'BAUTISTA', 'Fernandes', 'Male', '2015-01-18', 4, 41, '', 'none', 'bucal 4A', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 5, 1, 4, '', 'BC4A'),
(272, 'Angelo', 'Tanagras', 'Casaul', 'Male', '1977-04-10', 41, 20, '', 'Employed', 'bucal 4B', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 5, 1, 4, '', 'BC4B'),
(273, 'Annie', 'Borromeo', 'Tabayan', 'Female', '1967-04-07', 51, 20, '', 'Unemployed', 'bucal 4B', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 1, 4, '', 'BC4B'),
(274, 'Lyndon John', 'Borromeo', 'Tabayan', 'Male', '1994-07-14', 24, 20, '', 'Unemployed', 'bucal 4B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 5, 1, 4, '', 'BC4B'),
(275, 'Adrian', 'Borromeo', 'Tabayan', 'Male', '1997-07-13', 21, 20, '', 'none', 'bucal 4B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 1, 4, '', 'BC4B'),
(276, 'Celedonio', 'Castillo', 'Villarba', 'Male', '1966-08-31', 52, 40, '', 'Unemployed', 'bucal 4B', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 4, 1, '', 'BC4B'),
(277, 'Ma. Elena', 'Castillo', 'Cortez', 'Female', '1966-04-23', 52, 40, '', 'Unemployed', 'bucal 4B', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 4, 1, '', 'BC4B'),
(278, 'Jovelyn', 'Castillo', 'Cortez', 'Female', '1985-10-08', 33, 40, '', 'Unemployed', 'bucal 4B', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 5, 4, 1, '', 'BC4B'),
(279, 'Jessielyn', 'Castillo', 'Cortez', 'Female', '2001-02-17', 18, 40, '', 'none', 'bucal 4B', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 4, 1, '', 'BC4B'),
(280, 'Reynaldie', 'Imperial', 'Abiada', 'Male', '1975-04-26', 43, 51, '', 'Unemployed', 'bucal 4B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 2, 3, '', 'BC4B'),
(281, 'Nina', 'Tanag', 'Uy', 'Female', '1976-01-09', 43, 40, '', 'Unemployed', 'bucal 4B', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 2, 3, '', 'BC4B'),
(282, 'Randel', 'Imperial', 'Tanag', 'Male', '2010-06-11', 8, 40, '', 'none', 'bucal 4B', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 5, 2, 3, '', 'BC4B');
INSERT INTO `residents_tbl` (`id`, `first_name`, `last_name`, `middle_name`, `gender`, `bod`, `age`, `house_no`, `contact_no`, `job`, `street`, `religion`, `status`, `elementary`, `highschool`, `college`, `college_school`, `college_course`, `family_role`, `no_of_families`, `no_of_hh`, `no_of_female`, `no_of_male`, `picture`, `brgy_code`) VALUES
(283, 'Jenima Acie', 'Imperial', 'Tanag', 'Female', '2013-02-16', 6, 40, '', 'none', 'bucal 4B', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 5, 2, 3, '', 'BC4B'),
(284, 'John Russel', 'Imperial', 'Tanag', 'Male', '2017-09-08', 1, 40, '', 'none', 'bucal 4B', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 5, 2, 3, '', 'BC4B'),
(285, 'Griyan', 'Linezo', 'Alvarez', 'Male', '1995-01-17', 24, 38, '', 'Unemployed', 'bucal 4B', 'Evangelical', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 3, 1, 2, '', 'BC4B'),
(286, 'Sarah Jane', 'Ilagan', 'Animas', 'Female', '1995-10-07', 23, 38, '', 'Unemployed', 'bucal 4B', 'Evangelical', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 3, 1, 2, '', 'BC4B'),
(287, 'Heat Annerson', 'Linezo', 'Ilagan', 'Male', '2013-02-26', 6, 38, '', 'none', 'bucal 4B', 'Evangelical', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 3, 1, 2, '', 'BC4B'),
(288, 'Mark', 'Ticorda', 'Latoza', 'Male', '1994-09-03', 24, 19, '', 'Employed', 'bucal 4B', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 2, 1, 2, '', 'BC4B'),
(289, 'Carryl', 'dela Cruz', 'Monieva', 'Female', '1997-10-05', 21, 18, '', 'Employed', 'bucal 4B', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 1, 2, '', 'BC4B'),
(290, 'Carl Acher ', 'Ticorda', 'dela Cruz', 'Male', '2015-10-13', 3, 19, '', 'none', 'bucal 3B', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 3, 1, 2, '', 'BC4B'),
(291, 'Josel Jr.', 'Delgado', 'Pescasio', 'Male', '2001-11-29', 17, 14, '', 'none', 'bucal 4B', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 1, 4, '', 'BC4B'),
(292, 'Adelaida', 'ANIN', 'Diones', 'Female', '1942-05-14', 76, 70, '', 'Unemployed', 'caingin', 'Protestant Christianity', 'Widowed', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 4, 4, 0, '', 'CP'),
(293, 'Lydia', 'ANIN', 'Diones', 'Female', '1981-05-01', 37, 70, '', 'Employed', 'caingin', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 4, 4, 0, '', 'CP'),
(294, 'Ernesto', 'SALUDARES', 'Rogator', 'Male', '1980-02-23', 39, 58, '', 'Employed', 'caingin', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'Yes', 1, 3, 1, 2, '', 'CP'),
(295, 'Rizza', 'SALUDARES', 'Anin', 'Female', '1979-04-08', 39, 58, '', 'Employed', 'caingin', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 3, 1, 2, '', 'CP'),
(296, 'Rainer', 'SALUDARES', 'Anin', 'Male', '2008-07-02', 10, 58, '', 'none', 'caingin', 'Protestant Christianity', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 3, 1, 2, '', 'CP'),
(297, 'Rosendon', 'BERSABE', 'Bautista', 'Male', '1976-03-15', 43, 60, '', 'Employed', 'caingin', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 2, 1, '', 'CP'),
(298, 'Maribez', 'BERSABE', 'Anin', 'Male', '1977-01-28', 42, 60, '', 'Unemployed', 'caingin', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 3, 2, 1, '', 'CP'),
(299, 'Karen', 'BERSABE', 'Anin', 'Female', '1998-08-31', 20, 60, '', 'none', 'caingin', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 3, 2, 1, '', 'CP'),
(300, 'Rolando', 'LIZARDO', 'Fernandez', 'Male', '1976-06-28', 42, 45, '', 'Employed', 'caingin', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 7, 1, 6, '', 'CP'),
(301, 'Jinky', 'LIZARDO', 'Bello', 'Female', '1974-12-05', 44, 45, '', 'Unemployed', 'caingin', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 7, 1, 6, '', 'CP'),
(302, 'Rojan', 'LIZARDO', 'Bello', 'Male', '2004-08-22', 14, 45, '', 'none', 'caingin', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 7, 1, 6, '', 'CP'),
(303, 'Randel', 'LIZARDO', 'Bello', 'Male', '2005-12-27', 13, 45, '', 'none', 'caingin', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 7, 1, 6, '', 'CP'),
(304, 'Rafael', 'LIZARDO', 'Bello', 'Male', '2010-07-04', 8, 45, '', 'none', 'caingin', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 7, 1, 6, '', 'CP'),
(305, 'Jhon Rens', 'LIZARDO', 'Bello', 'Male', '2011-12-04', 7, 45, '', 'none', 'caingin', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 7, 1, 6, '', 'CP'),
(306, 'Kent', 'LIZARDO', 'Bello', 'Male', '2014-07-09', 4, 45, '', 'none', 'caingin', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 7, 1, 6, '', 'CP'),
(307, 'Annaliza', 'BASCO', 'Gomer', 'Male', '1981-11-28', 37, 35, '', 'Employed', 'caingin', 'Protestant Christianity', 'Widowed', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 3, 2, 1, '', 'CP'),
(308, 'Rhay Anne', 'BASCO', 'Gomer', 'Female', '2000-03-09', 19, 35, '', 'none', 'caingin', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 3, 2, 1, '', 'CP'),
(309, 'Arvin', 'CASASOLA', 'Cuevas', 'Male', '1975-02-07', 44, 38, '', 'Employed', 'caingin', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 1, 5, 4, 1, '', 'CP'),
(310, 'Regilda', 'CASASOLA', 'Parahinog', 'Female', '1976-11-12', 42, 38, '', 'Unemployed', 'caingin', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 4, 1, '', 'CP'),
(311, 'Arlyn Joy', 'CASASOLA', 'Parahinog', 'Female', '2007-01-11', 12, 38, '', 'none', 'caingin', 'Born Again Christian', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 5, 4, 1, '', 'CP'),
(312, 'Gerald', 'BERMUDEZ', 'Ancayan', 'Male', '1979-04-16', 39, 100, '', 'Unemployed', 'garita b', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 5, 3, 2, '', 'G1A'),
(313, 'Romina', 'BERMUDEZ', 'Sobreo', 'Female', '1978-10-12', 40, 100, '', 'Unemployed', 'garita b', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 5, 3, 2, '', 'G1A'),
(314, 'Gracel', 'BERMUDEZ', 'Sobreo', 'Female', '1998-03-16', 21, 100, '', 'Unemployed', 'garita b', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 5, 3, 2, '', 'G1A'),
(315, 'Gerard', 'BERMUDEZ', 'Sobreo', 'Male', '2007-11-27', 11, 100, '', 'none', 'garita b', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 5, 3, 2, '', 'G1A'),
(316, 'Gracious', 'BERMUDEZ', 'Sobreo', 'Female', '2002-10-24', 16, 100, '', 'none', 'garita b', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 3, 2, '', 'G1A'),
(317, 'Freddic', 'HIPOLITO', 'Miguel', 'Male', '1970-10-22', 48, 30, '', 'Unemployed', 'garita b', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 6, 4, 2, '', 'G1A'),
(318, 'Loida', 'HIPOLITO', 'Cuejas', 'Female', '1976-09-18', 42, 30, '', 'Unemployed', 'garita b', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 6, 4, 2, '', 'G1A'),
(319, 'Chelscy Ayanah', 'HIPOLITO', 'Cuejas', 'Female', '2010-11-03', 8, 30, '', 'none', 'garita b', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 4, 2, '', 'G1A'),
(320, 'Cazey Azanca', 'HIPOLITO', 'Cuejas', 'Female', '2012-12-28', 6, 30, '', 'none', 'garita b', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 4, 2, '', 'G1A'),
(321, 'Den Mark', 'CASAMA', 'Anglo', 'Male', '1987-07-07', 31, 35, '', 'Unemployed', 'garita b', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 3, 1, 2, '', 'G1A'),
(322, 'Shiela Marie', 'CASAMA', 'Bautista', 'Female', '1992-12-22', 26, 35, '', 'Unemployed', 'garita b', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 3, 2, 1, '', 'G1A'),
(323, 'Mack Nathan', 'CASAMA', 'Bautista', 'Male', '2011-11-04', 7, 35, '', 'none', 'garita b', 'Born Again Christian', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 3, 1, 2, '', 'G1A'),
(324, 'Maximo', 'BAUTISTA', 'Salome', 'Male', '1976-12-27', 42, 25, '', 'Employed', 'garita b', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 3, 1, '', 'G1A'),
(325, 'Laura', 'BAUTISTA', 'Hernandez', 'Female', '1972-06-02', 46, 25, '', 'Unemployed', 'garita b', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 4, 3, 1, '', 'G1A'),
(326, 'Judy Anne', 'BAUTISTA', 'Hernandez', 'Female', '1997-01-13', 22, 25, '', 'Employed', 'garita b', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 4, 3, 1, '', 'G1A'),
(327, 'Jhoana', 'BAUTISTA', 'Hernandez', 'Female', '1999-06-18', 19, 35, '', 'Unemployed', 'garita b', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 4, 3, 1, '', 'G1A'),
(328, 'Dante  ', 'DIJINA', 'Dig', 'Male', '1971-06-07', 47, 10, '', 'Unemployed', 'garita b', 'Evangelical', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 5, 4, 1, '', 'G1A'),
(329, 'Marieta', 'DIJINA', 'Hernandez', 'Female', '1969-11-11', 49, 10, '', 'Unemployed', 'garita b', 'Evangelical', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 1, 4, '', 'G1A'),
(330, 'Dante  Gabriel', ' DIJINA', 'Hernandez', 'Male', '2006-04-29', 12, 10, '', 'none', 'garita b', 'Evangelical', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 1, 4, '', 'G1A'),
(331, 'Vincent Miguel', 'DIJINA', 'Hernandez', 'Male', '2010-04-05', 9, 10, '', 'none', 'garita b', 'Evangelical', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 5, 1, 4, '', 'G1A'),
(332, 'Vergilio', 'CASAMA', 'de Guia', 'Male', '1939-02-05', 80, 25, '', 'Employed', 'Mabaro', 'Roman Catholic', 'Single', 'Elementary Graduate', 'None', 'None', '', '', 'No', 1, 1, 1, 1, '', 'MB'),
(333, 'Carolina', 'SISRACON', 'Andulan', 'Female', '1933-11-07', 85, 19, '', 'none', 'Mabaro', 'Evangelical', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 2, 1, 1, '', 'MB'),
(334, 'Marlon', 'BELLO', 'Sisracon', 'Male', '1975-08-17', 43, 19, '', 'Employed', 'Mabaro', 'Evangelical', 'Widowed', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 2, 1, 1, '', 'MB'),
(335, 'Felipe', 'ANDULAN', 'Hernandez', 'Male', '1933-05-01', 85, 55, '', 'Employed', 'Mabaro', 'Roman Catholic', 'Widowed', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 2, 1, '', 'MB'),
(336, 'Noralyn', 'CONCEPCION', 'Andulan', 'Female', '1975-10-02', 43, 35, '', 'Unemployed', 'Mabaro', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 2, 1, '', 'MB'),
(337, 'Althea', 'CONCEPCION', 'Andulan', 'Female', '2011-10-23', 7, 35, '', 'none', 'Mabaro', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 3, 2, 1, '', 'MB'),
(338, 'Precila', 'ANDULAN', 'Sabado', 'Female', '1969-11-06', 49, 60, '', 'Unemployed', 'Mabaro', 'Iglesia ni Cristo', 'Widowed', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 3, 1, 2, '', 'MB'),
(339, 'Ferdie', 'ANDULAN', 'Sabado', 'Male', '1992-05-28', 26, 60, '', 'Employed', 'Mabaro', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 3, 1, 2, '', 'MB'),
(340, 'Fernan', 'ANDULAN', 'Sabado', 'Male', '1994-05-22', 24, 60, '', 'Employed', 'Mabaro', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 3, 1, 2, '', 'MB'),
(341, 'Merwin', 'BELLO', 'Sisracon', 'Male', '1979-10-20', 39, 29, '', 'Employed', 'Mabaro', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 1, 4, 1, 3, '', 'MB'),
(342, 'Lucy', 'BELLO', 'Chavez', 'Female', '1983-03-11', 36, 29, '', 'Unemployed', 'Mabaro', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 4, 1, 3, '', 'MB'),
(343, 'John Paul', 'BELLO', 'Chavez', 'Male', '2003-12-19', 15, 29, '', 'none', 'Mabaro', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 4, 1, 3, '', 'MB'),
(344, 'Allen Vincent', 'BELLO', 'Chavez', 'Male', '2007-05-15', 11, 29, '', 'none', 'mabato', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 1, 3, '', 'MB'),
(345, 'Angelino', 'BERTULANO', 'Geronimo', 'Male', '1975-05-21', 43, 40, '', 'Employed', 'mabato', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 1, 2, '', 'MB'),
(346, 'Jocie', 'DELDA', 'Lartosa', 'Female', '1972-01-03', 47, 40, '', 'Unemployed', 'mabato', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 1, 2, '', 'MB'),
(347, 'Jomar', 'Pinon', 'Delda', 'Male', '1997-11-23', 21, 40, '', 'Unemployed', 'mabato', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 3, 1, 2, '', 'MB'),
(348, 'Jay', 'URETA', 'Angeles', 'Male', '1976-03-24', 43, 31, '', 'Unemployed', 'mabato', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 3, 1, 2, '', 'MB'),
(349, 'Noel', 'ANGELES', 'Pareja', 'Male', '1963-11-19', 55, 41, '', 'Unemployed', 'mabato', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 3, 2, 1, '', 'MB'),
(350, 'Emerlinda', 'ANGELES', 'Init', 'Female', '1967-12-16', 51, 41, '', 'Unemployed', 'mabato', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 2, 1, '', 'MB'),
(351, 'Paola Bianca', 'BERBI', 'Angeles', 'Female', '1991-10-12', 27, 41, '', 'Unemployed', 'mabato', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 3, 2, 1, '', 'MB'),
(352, 'Hilarion', 'GLOTON', 'Berenguel', 'Male', '1968-10-21', 50, 5, '', 'Unemployed', 'pantihan 1', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 1, 2, '', 'PT1'),
(353, 'Agnes', 'GLOTON', 'Andulan', 'Female', '1967-12-12', 51, 5, '', 'Unemployed', 'pantihan 1', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 1, 2, '', 'PT1'),
(354, 'Marlon', 'GLOTON', 'Andulan', 'Male', '2003-03-20', 16, 5, '', 'Unemployed', 'pantihan 1', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 3, 1, 2, '', 'PT1'),
(355, 'Ronnel', 'ANDULAN', 'De Guia', 'Male', '1969-08-04', 49, 6, '', 'Employed', 'pantihan 1', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 2, 1, '', 'PT1'),
(356, 'Norie', 'ESLON', 'Eripol', 'Female', '1968-01-02', 51, 6, '', 'Unemployed', 'pantihan 1', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 2, 1, '', 'PT1'),
(357, 'Sherriel Jhane', 'ANDULAN', 'Eslon', 'Female', '2003-11-16', 15, 6, '', 'none', 'pantihan 1', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 3, 2, 1, '', 'PT1'),
(358, 'Rommel', 'LANDICHO', 'Andulan', 'Male', '1988-07-02', 30, 7, '', 'Employed', 'pantihan 1', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 2, 2, '', 'PT1'),
(359, 'Jennylyn', 'LANDICHO', 'Dacanay', 'Female', '1989-10-17', 29, 7, '', 'Unemployed', 'pantihan 1', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 4, 2, 2, '', 'PT1'),
(360, 'Ronalyn', 'LANDICHO', 'Dacanay', 'Female', '2011-02-22', 8, 7, '', 'none', 'pantihan 1', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'PT1'),
(361, 'Renz Kevin', 'LANDICHO', 'Dacanay', 'Male', '2013-06-25', 5, 7, '', 'none', 'pantihan 1', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'PT1'),
(362, 'Al Ryan', 'GLEAN', 'Dinglasan', 'Male', '1986-09-08', 32, 8, '', 'Employed', 'pantihan 1', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 2, 2, '', 'PT1'),
(363, 'Venus', 'GLEAN', 'Landicho', 'Female', '1992-03-03', 27, 8, '', 'Unemployed', 'pantihan 1', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 4, 2, 2, '', 'PT1'),
(364, 'Reynan', 'GLEAN', 'Landicho', 'Male', '2010-03-10', 9, 8, '', 'none', 'pantihan 1', 'Protestant Christianity', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'PT1'),
(365, 'Lynna Alexa', 'GLEAN', 'Landicho', 'Female', '2012-06-02', 6, 8, '', 'none', 'pantihan 1', 'Protestant Christianity', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'PT1'),
(366, 'Jaypee', 'IGOS', 'Salas', 'Male', '1985-07-25', 33, 9, '', 'Employed', 'pantihan 1', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 2, 2, '', 'PT1'),
(367, 'Jonalyn', 'IGOS', 'Beltran', 'Female', '1988-09-28', 30, 9, '', 'Unemployed', 'pantihan 1', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 4, 2, 2, '', 'PT1'),
(368, 'Efrain Leonard', 'IGOS', 'Beltran', 'Male', '2009-03-30', 10, 9, '', 'none', 'pantihan 1', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'PT1'),
(369, 'Elaiza Louise', 'IGOS', 'Beltran', 'Female', '2011-05-18', 7, 9, '', 'none', 'pantihan 1', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'PT1'),
(370, 'Raymond', 'DELA CRUZ', 'Quiacos', 'Male', '1986-09-18', 32, 10, '', 'Employed', 'pantihan 1', 'Iglesia ni Cristo', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 1, 3, 2, 1, '', 'PT1'),
(371, 'Irene', 'CUMPUESTO', 'Opealda', 'Female', '1988-03-29', 31, 10, '', 'Unemployed', 'pantihan 1', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 2, 1, '', 'PT1'),
(372, 'Renante', 'BERNARDO', 'Kahing', 'Male', '1984-04-04', 35, 1, '', 'Unemployed', 'Pantihan 2', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 1, 3, 1, 2, '', 'PT2'),
(373, 'Mae Suzanne', 'ANGUE', 'Glean', 'Female', '1990-10-02', 28, 1, '', 'Employed', 'Pantihan 2', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 1, 2, '', 'PT2'),
(374, 'Jharres', 'BERNARDO', 'Ibanes', 'Male', '2011-05-23', 7, 1, '', 'none', 'Pantihan 2', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 3, 1, 2, '', 'PT2'),
(375, 'Alejandro', 'IBANEZ', 'Agravante', 'Male', '1981-03-03', 38, 3, '', 'Unemployed', 'Pantihan 2', 'Evangelical', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 6, 3, 3, '', 'PT2'),
(376, 'Jennifer', 'LAGADAY', 'Catalla', 'Female', '1978-05-04', 40, 3, '', 'Employed', 'Pantihan 2', 'Evangelical', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PT2'),
(377, 'Full Faith', 'IBANEZ', 'Lagaday', 'Female', '2007-08-18', 11, 3, '', 'none', 'Pantihan 2', 'Evangelical', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PT2'),
(378, 'Lorie', 'IBANEZ', 'Lagaday', 'Male', '2009-01-24', 10, 3, '', 'none', 'Pantihan 2', 'Evangelical', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PT2'),
(379, 'Althea', 'IBANEZ', 'Lagaday', 'Female', '2008-10-26', 10, 3, '', 'none', 'Pantihan 2', 'Evangelical', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PT2'),
(380, 'Reign Heart', 'IBANEZ', 'Lagaday', 'Male', '2012-08-20', 6, 3, '', 'none', 'Pantihan 2', 'Evangelical', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PT2'),
(381, 'Alberto', 'GLEAN', 'Signo', 'Male', '1959-11-29', 59, 4, '', 'Employed', 'Pantihan 2', 'Born Again Christian', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 2, 1, '', 'PT2'),
(382, 'Aurea', 'ANGUE', 'Cabral', 'Female', '1960-08-24', 58, 4, '', 'Employed', 'Pantihan 2', 'Born Again Christian', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 2, 1, '', 'PT2'),
(383, 'Ruth', 'GLEAN', 'Angue', 'Female', '1990-09-10', 28, 4, '', 'Employed', 'Pantihan 2', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 3, 2, 1, '', 'PT2'),
(384, 'Reden Ricardo', 'SUPANG', '  ', 'Male', '1983-09-15', 35, 5, '', 'Unemployed', 'Pantihan 2', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 4, 2, 2, '', 'PT2'),
(385, 'Judith', 'GLEAN', 'Angue', 'Female', '1986-03-13', 33, 5, '', 'Employed', 'Pantihan 2', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 4, 2, 2, '', 'PT2'),
(386, 'Reanne', 'SUPANG', 'Glean', 'Female', '2008-09-29', 10, 5, '', 'none', 'Pantihan 2', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'PT2'),
(387, 'Ralph Christian', 'SUPANG', 'Glean', 'Male', '2015-03-19', 4, 5, '', 'none', 'Pantihan 2', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'PT2'),
(388, 'Ernesto Jr.', 'LUCY', 'Bautista', 'Male', '1982-12-31', 36, 6, '', 'Unemployed', 'Pantihan 2', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 1, 5, 3, 2, '', 'PT2'),
(389, 'Loriz', 'ANGUE', 'de Taza', 'Female', '1983-06-28', 35, 6, '', 'Employed', 'Pantihan 2', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 3, 2, '', 'PT2'),
(390, 'Aizen Ann', 'LUCY', 'Angue', 'Female', '2002-09-04', 16, 6, '', 'none', 'Pantihan 2', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 3, 2, '', 'PT2'),
(391, 'Lanz Gabriel', 'LUCY', 'Angue', 'Male', '2004-12-30', 14, 6, '', 'none', 'Pantihan 2', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 4, 2, 2, '', 'PT2'),
(392, 'Gemma', 'AURELLANA', 'Bulanon', 'Female', '1985-01-25', 34, 9, '', 'Employed', 'Pinangsanhan A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 6, 2, 4, '', 'PSA'),
(393, 'Arjay', 'AURELLANA', 'Bulanon', 'Male', '2005-03-11', 14, 9, '', 'none', 'Pinangsanhan A', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 6, 2, 4, '', 'PSA'),
(394, 'Jhon Ray', 'AURELLANA', 'Bulanon', 'Male', '2007-05-01', 11, 9, '', 'none', 'Pinangsanhan A', 'Iglesia ni Cristo', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 2, 4, '', 'PSA'),
(395, 'Joshua', 'AURELLANA', 'Bulanon', 'Male', '2016-02-18', 3, 9, '', 'none', 'Pinangsanhan A', 'Iglesia ni Cristo', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 6, 2, 4, '', 'PSA'),
(396, 'Jessa Mae', 'AURELLANA', 'Bulanon', 'Female', '2016-02-18', 3, 9, '', 'none', 'Pinangsanhan A', 'Iglesia ni Cristo', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 6, 2, 4, '', 'PSA'),
(397, 'Joey', 'SINTOS', 'Landicho', 'Male', '1981-08-11', 37, 10, '', 'Employed', 'Pinangsanhan A', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 1, 3, '', 'PSA'),
(398, 'Marenil', 'ESTRESLENTE', 'Aquino', 'Female', '1976-12-24', 42, 10, '', 'Employed', 'Pinangsanhan A', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 4, 1, 3, '', 'PSA'),
(399, 'Joniel', 'SINTOS', 'Aquino', 'Male', '2011-11-08', 7, 10, '', 'none', 'Pinangsanhan A', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 1, 3, '', 'PSA'),
(400, 'Jhian Klye', 'SINTOS', 'Aquino', 'Male', '2010-08-27', 8, 10, '', 'none', 'Pinangsanhan A', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 1, 3, '', 'PSA'),
(401, 'Nielbert', 'SAULOG', 'S', 'Male', '1987-03-16', 32, 12, '', 'Employed', 'Pinangsanhan A', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 2, 1, '', 'PSA'),
(402, 'Merry Ann', 'LANDICHO', 'Andulan', 'Female', '1976-10-11', 42, 12, '', 'Employed', 'Pinangsanhan A', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 2, 1, '', 'PSA'),
(403, 'Precious', 'SAULOG', 'Andulan', 'Female', '2011-04-17', 7, 12, '', 'none', 'Pinangsanhan A', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 3, 2, 1, '', 'PSA'),
(404, 'Noel', 'DE TAZA', 'de Mesa', 'Male', '1986-09-22', 32, 16, '', 'Employed', 'Pinangsanhan A', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 6, 3, 3, '', 'PSA'),
(405, 'Dorina', 'CATALASAN', 'Macapagal', 'Female', '1981-08-09', 37, 16, '', 'Employed', 'Pinangsanhan A', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PSA'),
(406, 'Jhian Carlo', 'DE TAZA', 'Inoy', 'Male', '2001-12-24', 17, 16, '', 'none', 'Pinangsanhan A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PSA'),
(407, 'Carl Nathaniel', 'DE TAZA', 'Macapagal', 'Male', '2004-05-29', 14, 16, '', 'none', 'Pinangsanhan A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PSA'),
(408, 'Kate Nicole', 'DE TAZA', 'Macapagal', 'Female', '2007-09-08', 11, 16, '', 'none', 'Pinangsanhan A', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PSA'),
(409, 'Lean Faith', 'DE TAZA', 'Macapagal', 'Female', '2017-08-03', 1, 16, '', 'none', 'Pinangsanhan A', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PSA'),
(410, 'Librado', 'DE TAZA', 'Mendoza', 'Male', '1954-07-20', 64, 20, '', 'Employed', 'Pinangsanhan A', 'UCCP', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 2, 1, 1, '', 'PSA'),
(411, 'Liuminada', 'DE TAZA', 'de Mesa', 'Female', '1955-11-29', 63, 20, '', 'Unemployed', 'Pinangsanhan A', 'UCCP', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 2, 1, 1, '', 'PSA'),
(412, 'Virgilio', 'PEJI', 'Mojica', 'Male', '1974-10-19', 44, 25, '', 'Employed', 'San miguel A', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 8, 3, 5, '', 'SMA'),
(413, 'Angeline', 'OBLEA', 'Combis', 'Female', '1988-03-21', 31, 25, '', 'Unemployed', 'San miguel A', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 8, 3, 4, '', 'SMA'),
(414, 'Aljun', 'PEJI', 'Oblea', 'Male', '2008-10-01', 10, 25, '', 'none', 'San miguel A', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 8, 3, 5, '', 'SMA'),
(415, 'Virgilio Jr', 'PEJI', 'Oblea', 'Male', '2011-01-19', 8, 25, '', 'none', 'San miguel A', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 8, 3, 5, '', 'SMA'),
(416, 'Aljur', 'PEJI', 'Oblea', 'Male', '2012-11-23', 6, 25, '', 'none', 'San miguel A', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 8, 3, 5, '', 'SMA'),
(417, 'Aryana', 'PEJI', 'Oblea', 'Female', '2014-11-23', 4, 25, '', 'none', 'San miguel A', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 8, 3, 5, '', 'SMA'),
(418, 'Antonio', 'PEROLINO', 'Pabiton', 'Male', '1964-11-01', 54, 30, '', 'Employed', 'San miguel A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 7, 2, 5, '', 'SMA'),
(419, 'Milania', 'PEROLINO', 'Maranan', 'Female', '1965-01-06', 54, 30, '', 'Employed', 'San miguel A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 7, 2, 5, '', 'SMA'),
(420, 'Mark Anthony', 'PEROLINO', 'Maranan', 'Male', '1986-02-18', 33, 30, '', 'Employed', 'San miguel A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 7, 2, 5, '', 'SMA'),
(421, 'Antonio Jr.', 'PEROLINO', 'Maranan', 'Male', '1992-01-11', 27, 30, '', 'Employed', 'San miguel A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 7, 2, 5, '', 'SMA'),
(422, 'Mark Joseph', 'PEROLINO', 'Maranan', 'Male', '1995-06-08', 23, 30, '', 'Unemployed', 'San miguel A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 7, 2, 5, '', 'SMA'),
(423, 'Oscar', 'GARCIA', 'Mojica', 'Male', '1959-12-30', 59, 35, '', 'Employed', 'San miguel A', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 5, 3, 2, '', 'SMA'),
(424, 'Felisa', 'GARCIA', 'Malaluan', 'Female', '1955-05-18', 63, 35, '', 'Unemployed', 'San miguel A', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 3, 2, '', 'SMA'),
(425, 'Flordeliza', 'GARCIA', 'Malaluan', 'Female', '1990-10-04', 28, 30, '', 'Employed', 'San miguel A', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 5, 3, 2, '', 'SMA'),
(426, 'Alvin', 'GARCIA', 'Malaluan', 'Male', '1993-12-13', 25, 30, '', 'Employed', 'San miguel A', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 5, 3, 2, '', 'SMA'),
(427, 'Marife', 'GARCIA', 'Malaluan', 'Female', '1997-07-03', 21, 30, '', 'Employed', 'San miguel A', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 5, 3, 2, '', 'SMA'),
(428, 'Ronald', 'VERGARA', 'Dillion', 'Male', '1985-03-17', 34, 45, '', 'Employed', 'San miguel A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 2, 3, '', 'SMA'),
(429, 'Catherine', 'VERGARA', 'Malaluan', 'Female', '1988-01-12', 31, 45, '', 'Unemployed', 'San miguel A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 2, 3, '', 'SMA'),
(430, 'Jasmine', 'VERGARA', 'Malaluan', 'Female', '2005-09-28', 13, 45, '', 'none', 'San miguel A', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 2, 3, '', 'SMA'),
(431, 'Ronald Miguel', 'VERGARA', 'Malaluan', 'Male', '2014-10-14', 4, 45, '', 'none', 'San miguel A', 'Iglesia ni Cristo', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 5, 2, 3, '', 'SMA'),
(432, 'John Efren', 'ANGCAO', 'B', 'Female', '1968-06-18', 50, 10, '', 'Unemployed', 'San miguel B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 1, 2, '', 'SMB'),
(433, 'Nesitas', 'ANGCAO', 'Malaluan', 'Female', '1969-03-20', 50, 10, '', 'Unemployed', 'San miguel B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 1, 2, '', 'SMB'),
(434, 'Brian', 'ANGCAO', 'Malaluan', 'Male', '1997-04-23', 21, 10, '', 'Unemployed', 'San miguel B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 1, 2, '', 'SMB'),
(435, 'Alfonso', 'SALONGGA', 'Ocampo', 'Male', '1952-11-13', 66, 20, '', 'Employed', 'San miguel B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 5, 2, 3, '', 'SMB'),
(436, 'Benita', 'SALONGGA', 'Esteron', 'Female', '1950-03-21', 69, 20, '', 'Unemployed', 'San miguel B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 2, 3, '', 'SMB'),
(437, 'Allan Benitez', 'SALONGGA', 'Esteron', 'Female', '1986-01-12', 33, 20, '', 'Unemployed', 'San miguel B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 2, 3, '', 'SMB'),
(438, 'Agrifina', 'ESTERON', 'Riego de Dios', 'Female', '1953-10-09', 65, 29, '', 'Unemployed', 'San miguel B', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 2, 1, '', 'SMB'),
(439, 'Victorino', 'ESTERON', 'Riego de Dios', 'Male', '1961-11-02', 57, 29, '', 'Employed', 'San miguel B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 3, 2, 1, '', 'SMB'),
(440, 'Nicitas', 'BABANGCO', 'Esteron', 'Female', '1957-03-20', 62, 29, '', 'Unemployed', 'San miguel B', 'Roman Catholic', 'Widowed', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 2, 1, '', 'SMB'),
(441, 'Rogelio', 'LUAY', 'Bago', 'Male', '1961-06-18', 57, 35, '', 'Employed', 'San miguel B', 'Evangelical', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 6, 1, 5, '', 'SMB'),
(442, 'Sylvia', 'LUAY', 'Esteron', 'Female', '1964-02-17', 55, 35, '', 'Employed', 'San miguel B', 'Evangelical', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 6, 1, 5, '', 'SMB'),
(443, 'Rowell John', 'LUAY', 'Esteron', 'Male', '1991-09-04', 27, 35, '', 'Unemployed', 'San miguel B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 6, 1, 5, '', 'SMB'),
(444, 'Billy Jay', 'LUAY', 'Esteron', 'Male', '1993-07-01', 25, 35, '', 'Employed', 'San miguel B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 6, 1, 5, '', 'SMB'),
(445, 'John Jeffrey', 'LUAY', 'Esteron', 'Male', '1997-09-07', 21, 35, '', 'none', 'San miguel B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 6, 1, 5, '', 'SMB'),
(446, 'Jim Bryan', 'LUAY', 'Esteron', 'Male', '1999-05-03', 19, 35, '', 'none', 'San miguel B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 6, 1, 5, '', 'SMB'),
(447, 'Antonio', 'BALUNTON', 'Antonil', 'Male', '1964-08-04', 54, 50, '', 'Employed', 'San miguel B', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'Yes', 1, 6, 2, 4, '', 'SMB'),
(448, 'Adora', 'BALUNTON', 'Esteron', 'Female', '1967-07-08', 51, 45, '', 'Unemployed', 'San miguel B', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 6, 2, 4, '', 'SMB'),
(449, 'Aaron', 'BALUNTON', 'Esteron', 'Male', '1993-04-23', 25, 45, '', 'Unemployed', 'San miguel B', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 6, 2, 4, '', 'SMB'),
(450, 'John Adrian', 'BALUNTON', 'Esteron', 'Male', '1995-04-18', 23, 45, '', 'Employed', 'San miguel B', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 6, 2, 4, '', 'SMB'),
(451, 'James Mar', 'BALUNTON', 'Esteron', 'Male', '1999-07-26', 19, 45, '', 'none', 'San miguel B', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 6, 2, 4, '', 'SMB'),
(452, 'Josefina', 'MALIMBAN', 'Diroy', 'Female', '1953-04-15', 65, 46, '', 'Employed', 'santa mercedes', 'Born Again Christian', 'Widowed', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 4, 2, 2, '', 'STM'),
(453, 'Verna', 'MALIMBAN', 'Diroy', 'Female', '1987-04-27', 31, 46, '', 'Unemployed', 'santa mercedes', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 4, 2, 2, '', 'STM'),
(454, 'Jucell', 'MALIMBAN', 'Diroy', 'Male', '1979-07-11', 39, 46, '', 'Employed', 'santa mercedes', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 4, 2, 2, '', 'STM'),
(455, 'John Lenard', 'MALIMBAN', 'Emelo', 'Male', '2000-07-14', 18, 46, '', 'none', 'santa mercedes', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 4, 2, 2, '', 'STM'),
(456, 'Maureen Joy', 'PEROLINO', 'Malimban', 'Female', '1990-03-16', 29, 20, '', 'Unemployed', 'santa mercedes', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 4, 2, 2, '', 'STM'),
(457, 'Mark', 'PEROLINO', 'Andaleon', 'Male', '1995-09-05', 23, 20, '', 'Employed', 'santa mercedes', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 4, 2, 2, '', 'STM'),
(458, 'Martheena', 'PEROLINO', 'Malimban', 'Female', '2011-05-08', 7, 20, '', 'none', 'santa mercedes', 'Protestant Christianity', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'STM'),
(459, 'Mark Joseph', 'PEROLINO', 'Malimban', 'Male', '2014-08-16', 4, 20, '', 'none', 'santa mercedes', 'Protestant Christianity', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'STM'),
(460, 'Alfonso', 'AGPAWA', 'Villanueva', 'Male', '1949-04-26', 69, 21, '', 'Unemployed', 'santa mercedes', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 6, 4, 2, '', 'STM'),
(461, 'Florencia', 'AGPAWA', 'Lontov', 'Female', '1955-11-07', 63, 21, '', 'Unemployed', 'santa mercedes', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 6, 4, 2, '', 'STM'),
(462, 'Rico', 'AGPAWA', 'Lontov', 'Male', '1978-12-18', 40, 21, '', 'Employed', 'santa mercedes', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 6, 4, 2, '', 'STM'),
(463, 'Felisardo', 'LONTOC', 'Paraiso', 'Male', '1958-05-01', 60, 22, '', 'Employed', 'santa mercedes', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 7, 3, 4, '', 'STM'),
(464, 'Eulalia', 'LONTOC', 'Romasanta', 'Female', '1962-02-12', 57, 22, '', 'Unemployed', 'santa mercedes', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 7, 3, 4, '', 'STM'),
(465, 'Jayson', 'LONTOC', 'Romasanta', 'Male', '1987-10-06', 31, 22, '', 'Employed', 'santa mercedes', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 7, 3, 4, '', 'STM'),
(466, 'Jaypee', 'LONTOC', 'Romasanta', 'Male', '1989-05-12', 29, 22, '', 'Employed', 'santa mercedes', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 7, 3, 4, '', 'STM'),
(467, 'Lanie Joy', 'LONTOC', 'Romasanta', 'Female', '1990-07-07', 28, 22, '', 'Employed', 'santa mercedes', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 7, 3, 4, '', 'STM'),
(468, 'Jervin', 'LONTOC', 'Romasanta', 'Male', '1992-02-13', 27, 22, '', 'Employed', 'santa mercedes', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 7, 3, 4, '', 'STM'),
(469, 'Carissa Joy', 'LONTOC', 'Romasanta', 'Female', '2003-11-05', 15, 22, '', 'none', 'santa mercedes', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 7, 3, 4, '', 'STM'),
(470, 'Toriano', 'OLFATO', 'Verver', 'Male', '1960-07-13', 58, 10, '', 'Unemployed', 'santa mercedes', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'Yes', 1, 5, 2, 3, '', 'STM'),
(471, 'Ludia', 'OLFATO', 'Malimban', 'Female', '1962-10-24', 56, 10, '', 'Unemployed', 'santa mercedes', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 2, 3, '', 'STM'),
(472, 'Charlie', 'OBLIGADO', 'Sta. Teresa', 'Male', '1983-10-15', 35, 15, '', 'Employed', 'Talipusngo', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 1, 6, 3, 3, '', 'TLP'),
(473, 'Edlyn', 'OBLIGADO', 'Diroy', 'Female', '1982-05-19', 36, 15, '', 'Unemployed', 'Talipusngo', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 6, 3, 3, '', 'TLP'),
(474, 'Carl Charlie', 'OBLIGADO', 'Diroy', 'Male', '2004-11-19', 14, 15, '', 'none', 'Talipusngo', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 6, 3, 3, '', 'TLP'),
(475, 'Ashlyn Kate', 'OBLIGADO', 'Diroy', 'Female', '2008-10-02', 10, 15, '', 'none', 'Talipusngo', 'Iglesia ni Cristo', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'TLP'),
(476, 'Jerbie Josh', 'OBLIGADO', 'Diroy', 'Male', '2010-09-10', 8, 15, '', 'none', 'santa mercedes', 'Iglesia ni Cristo', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'TLP'),
(477, 'Kiah Vinice', 'OBLIGADO', 'Diroy', 'Female', '2016-08-06', 2, 15, '', 'none', 'Talipusngo', 'Iglesia ni Cristo', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'TLP'),
(478, 'Manuel', 'DIROY', 'Hernandez', 'Male', '1981-08-19', 37, 20, '', 'Unemployed', 'Talipusngo', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 5, 3, 2, '', 'TLP'),
(479, 'Susan', 'DIROY', 'Panganiban', 'Female', '1982-12-13', 36, 20, '', 'Employed', 'Talipusngo', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 5, 3, 2, '', 'TLP'),
(480, 'Kylie Nicole', 'DIROY', 'Panganiban', 'Female', '2008-10-28', 10, 20, '', 'none', 'Talipusngo', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 5, 3, 2, '', 'TLP'),
(481, 'Samantha Chloe', 'DIROY', 'Panganiban', 'Female', '2012-12-01', 6, 20, '', 'none', 'Talipusngo', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 5, 3, 2, '', 'TLP'),
(482, 'Kion Jake', 'DIROY', 'Panganiban', 'Male', '2014-09-22', 4, 20, '', 'none', 'Talipusngo', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 5, 3, 2, '', 'TLP'),
(483, 'Leovigildo', 'TEJIDOR', 'Perolino', 'Male', '1969-08-28', 49, 25, '', 'Employed', 'Talipusngo', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 8, 4, 4, '', 'TLP'),
(484, 'Marites', 'TEJIDOR', 'Venezuela', 'Female', '1974-04-24', 44, 25, '', 'Unemployed', 'Talipusngo', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 8, 4, 4, '', 'TLP'),
(485, 'Sarrah', 'TEJIDOR', 'Venezuela', 'Female', '1996-10-19', 22, 25, '', 'Unemployed', 'Talipusngo', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 8, 4, 4, '', 'TLP'),
(486, 'DJ Rovy', 'TEJIDOR', 'Venezuela', 'Male', '1999-07-20', 19, 25, '', 'none', 'Talipusngo', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 8, 4, 4, '', 'TLP'),
(487, 'Francheska', 'TEJIDOR', 'Venezuela', 'Female', '2002-09-11', 16, 25, '', 'none', 'Talipusngo', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 8, 4, 4, '', 'TLP'),
(488, 'Angel Nicole', 'TEJIDOR', 'Venezuela', 'Female', '2004-04-15', 14, 25, '', 'none', 'Talipusngo', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 8, 4, 4, '', 'TLP'),
(489, 'Prince Jairus', 'TEJIDOR', 'Venezuela', 'Male', '2008-03-23', 11, 25, '', 'none', 'Talipusngo', 'Iglesia ni Cristo', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 8, 4, 4, '', 'TLP'),
(490, 'Allyzah', 'TEJIDOR', 'Venezuela', 'Female', '2011-09-20', 7, 25, '', 'none', 'Talipusngo', 'Iglesia ni Cristo', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 8, 4, 4, '', 'TLP'),
(491, 'Xian', 'TEJIDOR', 'Venezuela', 'Male', '2017-03-21', 2, 25, '', 'none', 'Talipusngo', 'Iglesia ni Cristo', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 8, 4, 4, '', 'TLP'),
(492, 'Ezer', 'ANDALLON', 'Bon', 'Male', '1991-10-18', 27, 40, '', 'Unemployed', 'Tulay A', 'Born Again Christian', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 3, 2, 1, '', 'TKM'),
(493, 'Honeylyn', 'ARCAYOS', 'Panganiban', 'Female', '1995-10-08', 23, 40, '', 'Unemployed', 'Tulay A', 'Born Again Christian', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 3, 2, 1, '', 'TKM'),
(494, 'Erlyn Mae', 'ANDALLON', 'Arcayos', 'Female', '2016-04-02', 3, 40, '', 'none', 'Tulay A', 'Born Again Christian', 'Single', 'Elementary Graduate', 'None', 'None', '', '', 'No', 1, 3, 2, 1, '', 'TKM'),
(495, 'Tomas', 'ANDALEON', 'Gonzales', 'Male', '1958-09-18', 60, 45, '', 'Employed', 'Tulay A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 5, 2, 3, '', 'TKM'),
(496, 'Merlina', 'ANDALEON', 'Timagos', 'Female', '1962-02-25', 57, 45, '', 'Unemployed', 'Tulay A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 2, 3, '', 'TKM'),
(497, 'Jan Clark', 'ANDALEON', 'Timagos', 'Male', '1992-12-04', 26, 45, '', 'Unemployed', 'Tulay A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 5, 2, 3, '', 'TKM'),
(498, 'Shadonisa', 'ANDALEON', 'Timagos', 'Female', '1995-12-11', 23, 45, '', 'Unemployed', 'Tulay A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 2, 3, '', 'TKM'),
(499, 'Jhon Mel', 'ANDALEON', 'Timagos', 'Male', '1998-12-04', 20, 45, '', 'none', 'Tulay A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 2, 3, '', 'TKM'),
(500, 'Bhoy', 'IBAY', 'Sayco', 'Male', '1965-08-25', 53, 20, '', 'Unemployed', 'Tulay A', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 1, 2, '', 'TKM'),
(501, 'Evangeline', 'MALALUAN', 'Carillo', 'Female', '1976-11-14', 42, 20, '', 'Unemployed', 'Tulay A', 'Roman Catholic', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 3, 1, 2, '', 'TKM'),
(502, 'Jhon Edcel', 'MALALUAN', 'Carillo', 'Male', '2001-12-21', 17, 20, '', 'none', 'Tulay A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 3, 1, 2, '', 'TKM'),
(503, 'Henaro', 'PAPEL', 'Pabalan', 'Male', '1975-09-19', 43, 31, '', 'Employed', 'Tulay A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 2, 2, '', 'TKM'),
(504, 'Daria', 'PAPEL', 'Navarro', 'Female', '1982-10-02', 36, 31, '', 'Employed', 'Tulay A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 4, 2, 2, '', 'TKM'),
(505, 'Geraldine', 'PAPEL', 'Navarro', 'Female', '2004-01-12', 15, 31, '', 'none', 'Tulay A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 4, 2, 2, '', 'TKM'),
(506, 'Harold', 'PAPEL', 'Navarro', 'Male', '2013-11-12', 5, 31, '', 'none', 'Tulay A', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'TKM'),
(507, 'Richard', 'PAYAD', 'Perolino', 'Male', '1984-08-06', 34, 36, '', 'Employed', 'Tulay A', 'Evangelical', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 1, 4, 1, 3, '', 'TKM'),
(508, 'Marilou', 'PAYAD', 'Satam', 'Female', '1983-03-04', 36, 45, '', 'Unemployed', 'Tulay A', 'Evangelical', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 4, 1, 3, '', 'TKM'),
(509, 'Rein Mark', 'PAYAD', 'Satam', 'Male', '2008-09-04', 10, 45, '', 'none', 'Tulay A', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 1, 3, '', 'TKM');
INSERT INTO `residents_tbl` (`id`, `first_name`, `last_name`, `middle_name`, `gender`, `bod`, `age`, `house_no`, `contact_no`, `job`, `street`, `religion`, `status`, `elementary`, `highschool`, `college`, `college_school`, `college_course`, `family_role`, `no_of_families`, `no_of_hh`, `no_of_female`, `no_of_male`, `picture`, `brgy_code`) VALUES
(510, 'Cris Angel', 'PAYAD', 'Satam', 'Male', '2012-12-16', 6, 45, '', 'none', 'Tulay A', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 5, 1, 3, '', 'TKM'),
(511, 'Virginia ', 'MALIMBAN', 'Emelo', 'Female', '1937-05-25', 81, 100, '', 'none', 'Tulay A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 1, 1, 0, '', 'TKM'),
(512, 'Arvin', 'ANGCAO', ' ', 'Male', '1994-05-13', 24, 23, '', 'Employed', 'Tulay B', 'Iglesia ni Cristo', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 4, 2, 2, '', 'TSM'),
(513, 'Jocie', 'MONARES', 'Eroles', 'Male', '1992-03-22', 27, 23, '', 'Unemployed', 'Tulay B', 'Iglesia ni Cristo', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 4, 2, 2, '', 'TSM'),
(514, 'vince Ruzzel', 'ANGCAO', 'Eroles', 'Male', '2009-03-30', 10, 23, '', 'none', 'Tulay B', 'Iglesia ni Cristo', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'TSM'),
(515, 'Cloe', 'ANGCAO', 'Eroles', 'Female', '2012-11-25', 6, 23, '', 'none', 'Tulay B', 'Iglesia ni Cristo', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 2, 2, '', 'TSM'),
(516, 'Felisicimo', 'EROLES', ' Cosino', 'Male', '1936-04-04', 83, 47, '', 'none', 'Tulay B', 'Born Again Christian', 'Widowed', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 2, 0, 2, '', 'TSM'),
(517, 'Regie', 'EROLES', 'Esteron', 'Male', '1978-05-13', 40, 47, '', 'Employed', 'Tulay B', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 2, 0, 2, '', 'TSM'),
(518, 'Maricel', 'GONSAGA', 'Gonzales', 'Female', '1976-03-15', 43, 100, '', 'Unemployed', 'Tulay B', 'Protestant Christianity', 'Separated', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 2, 2, 0, '', 'TSM'),
(519, 'Leline', 'GONSAGA', 'Gonzales', 'Female', '1998-10-07', 20, 100, '', 'none', 'Tulay B', 'Protestant Christianity', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 2, 2, 0, '', 'TSM'),
(520, 'Rozalino', 'GLIPONA', 'Castillo', 'Male', '1967-09-17', 51, 70, '', 'Employed', 'Tulay B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 5, 2, 3, '', 'TSM'),
(521, 'Melody', 'GLIPONA', 'Gonsalez', 'Female', '1970-02-04', 49, 70, '', 'Unemployed', 'Tulay B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 2, 3, '', 'TSM'),
(522, 'Michael', 'GLIPONA', 'Gonsalez', 'Male', '1988-05-30', 30, 70, '', 'Unemployed', 'Tulay B', 'Roman Catholic', 'Separated', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 2, 3, '', 'TSM'),
(523, 'Cris', 'BENDO', 'Perolino', 'Male', '1979-02-01', 40, 60, '', 'Unemployed', 'Tulay B', 'Evangelical', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 6, 3, 3, '', 'TSM'),
(524, 'Isabelita', 'BENDO', 'Perolino', 'Female', '1979-11-19', 39, 60, '', 'Unemployed', 'Tulay B', 'Evangelical', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 6, 3, 3, '', 'TSM'),
(525, 'Christina', 'BENDO', 'Perolino', 'Female', '2004-06-06', 14, 60, '', 'none', 'Tulay B', 'Evangelical', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 6, 3, 3, '', 'TSM'),
(526, 'Christal', 'BENDO', 'Perolino', 'Female', '2007-10-30', 11, 60, '', 'none', 'Tulay B', 'Evangelical', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'TSM'),
(527, 'Christopher', 'BENDO', 'Perolino', 'Male', '2013-03-24', 6, 60, '', 'none', 'Tulay B', 'Evangelical', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'TSM'),
(528, 'Christian', 'BENDO', 'Perolino', 'Male', '2010-03-13', 9, 60, '', 'none', 'Tulay B', 'Evangelical', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'TSM'),
(529, 'Agapito', 'BAGO', 'Galvez', 'Male', '1955-08-18', 63, 44, '', 'Unemployed', 'Tulay B', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 8, 3, 5, '', 'TSM'),
(530, 'Fhe', 'BAGO', 'Lioren', 'Female', '1959-10-19', 59, 44, '', 'Unemployed', 'Tulay B', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 8, 3, 5, '', 'TSM'),
(531, 'Domingo', 'CABADIN', 'Oliver', 'Male', '1958-12-20', 60, 100, '', 'Employed', 'Poblacion 1A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'Yes', 1, 5, 3, 2, '', 'PB1A'),
(532, 'Elizabeth', 'CABADIN', 'de Taza', 'Female', '1957-01-01', 62, 100, '', 'Unemployed', 'Poblacion 1A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 3, 2, '', 'PB1A'),
(533, 'Michael', 'CABADIN', 'de Taza', 'Male', '1986-06-09', 32, 100, '', 'Employed', 'Poblacion 1A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 5, 3, 2, '', 'PB1A'),
(534, 'Sarah', 'CABADIN', 'de Taza', 'Female', '1984-11-23', 34, 100, '', 'Employed', 'Poblacion 1A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 5, 3, 2, '', 'PB1A'),
(535, 'Gabriel', 'PAITON', 'Reyes', 'Male', '1937-03-17', 82, 1, '', 'none', 'Poblacion 1A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 1, 6, 3, 3, '', 'PB1A'),
(536, 'Juliana', 'PAITON', 'Igos', 'Female', '1939-04-12', 79, 1, '', 'none', 'Poblacion 1A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PB1A'),
(537, 'Gerry', 'PAITON', 'Igos', 'Male', '1983-12-14', 35, 1, '', 'Employed', 'Poblacion 1A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PB1A'),
(538, 'Cornelio', 'BENEBESE', 'Mojica', 'Male', '1971-07-14', 47, 2, '', 'Employed', 'Poblacion 1A', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'Yes', 1, 3, 2, 1, '', 'PB1A'),
(539, 'Merlita', 'BENEBESE', 'Paiton', 'Female', '1976-02-06', 43, 2, '', 'Employed', 'Poblacion 1A', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 2, 1, '', 'PB1A'),
(540, 'Hazel Ann', 'BENEBESE', 'Paiton', 'Female', '2006-01-04', 13, 2, '', 'none', 'Poblacion 1A', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 3, 2, 1, '', 'PB1A'),
(541, 'Leopoldo', 'LOYOLA', 'Ramos', 'Male', '1968-12-28', 50, 3, '', 'Employed', 'Poblacion 1A', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 6, 3, 3, '', 'PB1A'),
(542, 'Amanda', 'LOYOLA', 'Villaran', 'Female', '1970-09-07', 48, 3, '', 'Employed', 'Poblacion 1A', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 6, 3, 3, '', 'PB1A'),
(543, 'Jean', 'LOYOLA', 'Villaran', 'Female', '2002-10-21', 16, 3, '', 'none', 'Poblacion 1A', 'Protestant Christianity', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PB1A'),
(544, 'Aj', 'LOYOLA', 'Villaran', 'Male', '2005-04-10', 13, 3, '', 'none', 'Poblacion 1A', 'Protestant Christianity', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PB1A'),
(545, 'Jona', 'LOYOLA', 'Villaran', 'Female', '2012-02-21', 7, 3, '', 'none', 'Poblacion 1A', 'Protestant Christianity', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PB1A'),
(546, 'Jonel', 'LOYOLA', 'Villaran', 'Male', '2015-06-01', 3, 3, '', 'none', 'Poblacion 1A', 'Protestant Christianity', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PB1A'),
(547, 'Enrico', 'ANIMAS', 'Gonzales', 'Male', '1979-01-14', 40, 4, '', 'Unemployed', 'Poblacion 1A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 6, 4, 2, '', 'PB1A'),
(548, 'Ginalyn', 'ANIMAS', 'Rodrin', 'Female', '1982-03-24', 37, 4, '', 'Employed', 'Poblacion 1A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 6, 4, 2, '', 'PB1A'),
(549, 'Carla', 'ANIMAS', 'Rodrin', 'Female', '2000-10-04', 18, 4, '', 'none', 'Poblacion 1A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 6, 3, 3, '', 'PB1A'),
(550, 'Kaycee', 'ANIMAS', 'Rodrin', 'Female', '2008-01-08', 11, 4, '', 'none', 'Poblacion 1A', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 6, 3, 3, '', 'PB1A'),
(551, 'Jonathan', 'PUGONG', ' ', 'Male', '1977-07-02', 41, 1, '', 'Employed', 'Poblacion 1B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 5, 3, 2, '', 'PB1B'),
(552, 'Michele', 'PUGONG', 'Leonzon', 'Female', '1975-10-16', 43, 1, '', 'Employed', 'Poblacion 1B', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 3, 2, '', 'PB1B'),
(553, 'Joyce', 'PUGONG', 'Leonzon', 'Female', '1997-03-10', 22, 1, '', 'Employed', 'Poblacion 1B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 5, 3, 2, '', 'PB1B'),
(554, 'Jonnele', 'PUGONG', 'Leonzon', 'Male', '1998-06-22', 20, 1, '', 'none', 'Poblacion 1B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 3, 2, '', 'PB1B'),
(555, 'Genzelle', 'PUGONG', 'Leonzon', 'Female', '2006-09-20', 12, 1, '', 'none', 'Poblacion 1B', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 3, 2, '', 'PB1B'),
(556, 'Dennis', 'INCAPAS', '  ', 'Male', '1992-01-17', 27, 2, '', 'Employed', 'Poblacion 1B', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 2, 1, '', 'PB1B'),
(557, 'Jennylyn', 'INCAPAS', 'Leonzon', 'Female', '1992-10-03', 26, 2, '', 'Unemployed', 'Poblacion 1B', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 2, 1, '', 'PB1B'),
(558, 'Zhian James', 'INCAPAS', 'Leonzon', 'Female', '2014-03-18', 5, 2, '', 'none', 'Poblacion 1B', 'Iglesia ni Cristo', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 3, 2, 1, '', 'PB1B'),
(559, 'Guillermo Sr.', 'ACOSTA', 'Olivr', 'Male', '1976-05-26', 42, 3, '', 'Employed', 'Poblacion 1B', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 5, 1, 4, '', 'PB1B'),
(560, 'Nercie', 'ACOSTA', 'Pasumbal', 'Female', '1979-11-09', 39, 3, '', 'Employed', 'Poblacion 1B', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 5, 1, 4, '', 'PB1B'),
(561, 'James Nathaniel', 'ACOSTA', 'Pasumbal', 'Male', '2000-07-19', 18, 3, '', 'none', 'Poblacion 1B', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 1, 4, '', 'PB1B'),
(562, 'Enrique', 'ACOSTA', 'Pasumbal', 'Male', '2003-03-16', 16, 3, '', 'none', 'Poblacion 1B', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 1, 4, '', 'PB1B'),
(563, 'Guillermo', 'ACOSTA', 'Pasumbal', 'Male', '2007-02-07', 12, 3, '', 'none', 'Poblacion 1B', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 1, 4, '', 'PB1B'),
(564, 'Marcelito', 'PASUMBAL', 'Briones', 'Male', '1971-05-26', 47, 5, '', 'Unemployed', 'Poblacion 1B', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 8, 6, 2, '', 'PB1B'),
(565, 'Glenda', 'PASUMBAL', 'Miraflor', 'Female', '1974-04-03', 45, 5, '', 'Employed', 'Poblacion 1B', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 8, 6, 2, '', 'PB1B'),
(566, 'Gale Ann', 'PASUMBAL', 'Miraflor', 'Female', '1998-08-23', 20, 5, '', 'none', 'Poblacion 1B', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 8, 6, 2, '', 'PB1B'),
(567, 'Eulegio', 'ALLA', 'Asaham alla', 'Male', '1963-07-27', 55, 6, '', 'Unemployed', 'Poblacion 1B', 'Protestant Christianity', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 3, 1, 2, '', 'PB1B'),
(568, 'myra Joy', 'ANDORA', 'Reyes', 'Female', '1982-10-12', 36, 7, '', 'Unemployed', 'Poblacion 1B', 'UCCP', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 4, 3, 1, '', 'PB1B'),
(569, 'Nelmie Jhane', 'MARTAL', 'Mojica', 'Female', '2011-07-19', 7, 8, '', 'none', 'Poblacion 1B', 'Evangelical', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 3, 1, '', 'PB1B'),
(570, 'Jhon Carlo', 'ISAYAS', 'Ponce', 'Male', '2000-11-03', 18, 9, '', 'none', 'Poblacion 1B', 'Protestant Christianity', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 5, 1, 3, '', 'PB1B'),
(571, 'Nelson', 'BARON', 'Borja', 'Male', '1969-05-28', 49, 10, '', 'Employed', 'Poblacion 2A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'None', 'None', '', '', 'Yes', 1, 7, 2, 5, '', 'PB2A'),
(572, 'Celia', 'BARON', 'Tanag', 'Female', '1969-04-30', 49, 10, '', 'Unemployed', 'Poblacion 2A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 7, 2, 5, '', 'PB2A'),
(573, 'Alvin', 'BARON', 'Tanag', 'Male', '1989-09-28', 29, 10, '', 'Employed', 'Poblacion 2A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 7, 2, 5, '', 'PB2A'),
(574, 'Aldrin', 'BARON', 'Tanag', 'Male', '1991-02-04', 28, 10, '', 'Employed', 'Poblacion 2A', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 7, 2, 5, '', 'PB2A'),
(575, 'Roy', 'JONSON ', 'Comendador', 'Male', '1968-12-29', 50, 11, '', 'Employed', 'Poblacion 2A', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 6, 4, 2, '', 'PB2A'),
(576, 'Rina rose', 'JONSON ', 'Tanag', 'Female', '2002-06-18', 16, 11, '', 'none', 'Poblacion 2A', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 6, 4, 2, '', 'PB2A'),
(577, 'Regina Coelie', 'JONSON ', 'Tanag', 'Female', '2014-07-14', 4, 11, '', 'none', 'Poblacion 2A', 'Iglesia ni Cristo', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 6, 4, 2, '', 'PB2A'),
(578, 'Edgardo', 'ATIVO', 'Ibon', 'Male', '1968-10-07', 50, 12, '', 'Unemployed', 'Poblacion 2A', 'UCCP', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 1, 3, '', 'PB2A'),
(579, 'Maria', 'ALEGRE', 'Oliver', 'Female', '1961-12-12', 57, 14, '', 'Unemployed', 'Poblacion 2A', 'Roman Catholic', 'Widowed', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 3, 1, 2, '', 'PB2A'),
(580, 'Rufino', 'ALEGRE', 'Oliver', 'Male', '1990-07-10', 28, 14, '', 'Unemployed', 'Poblacion 2A', 'Protestant Christianity', 'Single', 'Elementary Graduate', 'High School Graduate', 'College Undergraduate', '', '', 'No', 1, 3, 1, 2, '', 'PB2A'),
(581, 'Juanito', 'MALAJOS', 'Vivas', 'Male', '1985-09-21', 33, 16, '', 'Employed', 'Poblacion 2A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 3, 2, 1, '', 'PB2A'),
(582, 'Marita', 'MALAJOS', 'Alegre', 'Female', '1987-02-22', 32, 16, '', 'Employed', 'Poblacion 2A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 3, 2, 1, '', 'PB2A'),
(583, 'Romacel', 'SAN PEDRO', 'Glorioso', 'Female', '1983-09-15', 35, 17, '', 'Employed', 'Poblacion 2A', 'Iglesia ni Cristo', 'Widowed', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 1, 1, 1, '', 'PB2A'),
(584, 'Eladio', 'MOJICA', 'Oliver', 'Male', '1983-01-13', 36, 24, '', 'Unemployed', 'Poblacion 2A', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 1, 3, '', 'PB2A'),
(585, 'Vicky', 'MOJICA', 'Perez', 'Female', '1983-11-17', 35, 24, '', 'Unemployed', 'Poblacion 2A', 'Born Again Christian', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 4, 1, 3, '', 'PB2A'),
(586, 'Matt Ceazar', 'MOJICA', 'Perez', 'Male', '2004-09-07', 14, 24, '', 'none', 'Poblacion 2A', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 4, 1, 3, '', 'PB2A'),
(587, 'Nino', 'MOJICA', 'Perez', 'Male', '2001-01-18', 18, 24, '', 'none', 'Poblacion 2A', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 4, 1, 3, '', 'PB2A'),
(588, 'Mark Kennet', 'BUENVIAJE', 'Paguio', 'Male', '1993-04-06', 26, 27, '', 'Employed', 'Poblacion 2A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'Yes', 1, 3, 1, 2, '', 'PB2A'),
(589, 'Reanilyn', 'BUENVIAJE', 'Nuestro', 'Female', '1996-10-12', 22, 27, '', 'Unemployed', 'Poblacion 2A', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 3, 1, 2, '', 'PB2A'),
(590, 'Mark Khean', 'BUENVIAJE', 'Nuestro', 'Male', '2017-07-22', 1, 27, '', 'none', 'Poblacion 2A', 'Roman Catholic', 'Single', 'None', 'None', 'None', '', '', 'No', 1, 3, 1, 2, '', 'PB2A'),
(591, 'Romeo', 'BILBAO', 'Oliver', 'Male', '1961-05-10', 57, 35, '', 'Employed', 'Poblacion 2b', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 3, 2, 1, '', 'PB2B'),
(592, 'Teresita', 'BILBAO', 'Casipe', 'Female', '1954-12-09', 64, 35, '', 'Employed', 'Poblacion 2b', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', 'BSED', 'No', 1, 3, 2, 1, '', 'PB2B'),
(593, 'Terence', 'BILBAO', 'Casipe', 'Female', '1997-12-27', 21, 35, '', 'Unemployed', 'Poblacion 2b', 'Roman Catholic', 'Single', 'None', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 3, 2, 1, '', 'PB2B'),
(594, 'Percival', 'BUHAT', 'Alvarez', 'Male', '1972-12-14', 46, 46, '', 'Unemployed', 'Poblacion 2b', 'Born Again Christian', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 1, 3, '', 'PB2B'),
(595, 'Cenita', 'ANIMAS', 'Animas', 'Female', '1984-01-12', 35, 46, '', 'Unemployed', 'Poblacion 2b', 'Born Again Christian', 'Live-in', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 1, 4, '', 'PB2B'),
(596, 'Justine Kien', 'BUHAT', 'Animas', 'Male', '2005-10-26', 13, 46, '', 'none', 'Poblacion 2b', 'Born Again Christian', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 1, 4, '', 'PB2B'),
(597, 'Kian Lei', 'BUHAT', 'Animas', 'Male', '2007-08-11', 11, 46, '', 'none', 'Poblacion 2b', 'Born Again Christian', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 5, 1, 4, '', 'PB2B'),
(598, 'Maudy Jhasmin', 'BUHAT', 'Animas', 'Male', '2011-04-24', 7, 46, '', 'none', 'Poblacion 2b', 'Born Again Christian', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 5, 1, 4, '', 'PB2B'),
(599, 'Generoso', 'OLVEDA', 'Gluban', 'Male', '1984-09-18', 32, 50, '', 'Unemployed', 'Poblacion 2b', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 1, 4, 3, 1, '', 'PB2B'),
(600, 'Merry', 'OLVEDA', 'Animas', 'Female', '1978-05-26', 40, 50, '', 'Unemployed', 'Poblacion 2b', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 2, 5, 3, 1, '', 'PB2B'),
(601, 'Isha Monica', 'OLVEDA', 'Animas', 'Female', '2010-04-17', 8, 50, '', 'none', 'Poblacion 2b', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 3, 1, '', 'PB2B'),
(602, 'Meizha Rain', 'OLVEDA', 'Animas', 'Female', '2012-07-27', 6, 50, '', 'none', 'Poblacion 2b', 'Roman Catholic', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 3, 1, '', 'PB2B'),
(603, 'Teresito', 'ALANO', 'Hernandez', 'Male', '1977-10-03', 41, 55, '', 'Employed', 'Poblacion 2b', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'Yes', 1, 5, 3, 2, '', 'PB2B'),
(604, 'Mayeth', 'ALANO', 'Bugna', 'Female', '1984-10-07', 34, 55, '', 'Unemployed', 'Poblacion 2b', 'Iglesia ni Cristo', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'No', 1, 5, 3, 2, '', 'PB2B'),
(605, 'Irene Camille', 'ALANO', 'Bugna', 'Female', '2004-11-10', 14, 55, '', 'none', 'Poblacion 2b', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 3, 2, '', 'PB2B'),
(606, 'Troy Martin', 'ALANO', 'Bugna', 'Male', '2006-10-14', 12, 55, '', 'none', 'Poblacion 2b', 'Iglesia ni Cristo', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 5, 3, 2, '', 'PB2B'),
(607, 'Migs', 'SARA', 'Tapalia', 'Male', '2010-06-26', 8, 58, '', 'none', 'Poblacion 2b', 'Evangelical', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 1, 3, '', 'PB2B'),
(608, 'Jonharry', 'SARA', 'Tapalia', 'Male', '2013-01-06', 6, 58, '', 'none', 'Poblacion 2b', 'Evangelical', 'Single', 'Elementary Level', 'None', 'None', '', '', 'No', 1, 4, 1, 3, '', 'PB2B'),
(609, 'Althea Rain', 'LATAG', 'Gloriani', 'Female', '2002-07-13', 16, 65, '', 'none', 'Poblacion 2b', 'Roman Catholic', 'Single', 'Elementary Graduate', 'High School Level', 'None', '', '', 'No', 1, 3, 2, 1, '', 'PB2B'),
(610, 'Teresita', 'LATAG', 'Gloriani', 'Female', '1976-09-25', 42, 65, '', 'Employed', 'Poblacion 2b', 'Roman Catholic', 'Married', 'Elementary Graduate', 'High School Graduate', 'Academic Degree Holder', '', '', 'No', 1, 3, 2, 1, '', 'PB2B'),
(611, 'ewf', 'wf', 'wefwf', 'Female', '1990-12-09', 28, 3434, '', 'Employed', 'wqeq', 'Aglipay', 'Married', 'Elementary Graduate', 'High School Graduate', 'None', '', '', 'Yes', 12, 23, 31, 32, '', 'BC1'),
(612, 'Kimberly', 'BADILLOS', 'Badillos', 'Female', '2014-08-06', 4, 45, '09281982731', 'none', 'Bucal1', 'Victory Chapel', 'Single', 'None', 'None', 'None', '', '', 'No', 2, 8, 4, 4, '', 'BC1'),
(613, 'Arnold', 'URIAS', 'Subedo', 'Male', '1991-06-19', 27, 340, '', 'Unemployed', 'bucal1', 'Foursquare', 'Single', 'Elementary Graduate', 'High School Graduate', 'Vocational', '', '', 'No', 1, 5, 2, 3, 'images (1).png', 'BC1');

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
(4, '', ' Food supplies', 'SB', '0.00', '0.00', '10000.00', '0.00', 2019, 'BC2'),
(5, '', ' Food supplies, Uniform and Miscellaneous Expenses.', 'SB', '0.00', '0.00', '3333.80', '0.00', 2019, 'BC1'),
(9, '', 'Food supplies, Uniform and Miscellaneous Expenses', 'SB', '0.00', '0.00', '0.00', '11506.34', 2019, 'BC3B');

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
(6, 'Inadequate knowledge of youth in  Barangay Governance', 'Capacity Builders\r\n       A. Conduct of Leadership Training /Travelling           ', 'SK Officials & members of the task force', '35000.00', 'SB FUND', 'January December', 2019, '1643763.00', 'BC1'),
(11, 'cac', 'sacsacs ', 'acsasc', '1230.00', 'dcdc', 'dcdcddd', 2019, '100000.00', 'BC3A'),
(12, 'Prevalence of youth involved in drug issues', 'Substance Abuse Prevention Education\r\n   A.Orientation Seminar on Anti Drug Abuse   ', 'All youth members', '10000.00', 'SK FUND', 'January December', 2019, '1643763.00', 'BC1'),
(13, 'Involvement of youth in petty crimes in the Barangay', 'Socio-Cultural & Sports Development\r\n    A. Conduct of Talent Contest \r\n    B. Conduct Sports Fest/Liga\r\n    C. Honoraria for Referees\r\n    D.Purchase of SportSupplies & Physical Equipment', 'All youth members', '40000.00', 'SK FUND', 'January-December', 2019, '1643763.00', 'BC1'),
(14, 'Low environmental concern of youth', 'Environmental Awareness\r\n     A. Clean up Drive', 'All youth members', '10000.00', 'SK FUND', 'January-December', 2019, '1643763.00', 'BC1'),
(15, 'other expenses of SK members and SK treasurer', 'Others   ', '', '59376.30', 'SK FUND', 'January-December', 2019, '1643763.00', 'BC1'),
(16, 'Inadequate knowledge of youth in  Barangay Governance', 'Capacity Builders\r\n    A. Conduct of Leadership Training /Travelling', 'SK Officials & members of the task force', '35000.00', 'SK FUND', 'January-December', 2019, '1643763.00', 'BC3B'),
(17, 'Prevalence of youth involved in drug issues', 'Substance Abuse Prevention Education\r\n     A.Orientation Seminar on Anti Drug Abuse', 'All youth members', '10000.00', 'SK FUND', 'January-December', 2019, '1643763.00', 'BC3B'),
(18, 'Involvement of youth in petty crimes in the Barangay', 'Socio-Cultural & Sports Development\r\n    A. Conduct of Talent Contest\r\n    B. Conduct Sports Fest/Liga\r\n    C.Honoraria for Referees\r\n    D.Purchase of SportSupplies & Physical Equipment', 'All youth members', '40000.00', 'SK FUND', 'January-December', 2019, '1643763.00', 'BC3B'),
(19, 'Low environmental concern of youth', 'Environmental Awareness\r\n   A. Clean up Drive', 'All youth members', '10000.00', 'SK FUND', 'January-December', 2019, '1643763.00', 'BC3B'),
(20, 'other expenses of SK members and SK treasurer', 'Others', '', '59376.30', 'SK FUND', 'January-December', 2019, '1643763.00', 'BC3B');

-- --------------------------------------------------------

--
-- Table structure for table `user_account_tbl`
--

CREATE TABLE `user_account_tbl` (
  `id` int(100) NOT NULL,
  `brgy_id` int(100) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `registration_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `brgy_name` varchar(100) NOT NULL,
  `brgy_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_account_tbl`
--

INSERT INTO `user_account_tbl` (`id`, `brgy_id`, `username`, `password`, `email`, `contactno`, `registration_date`, `status`, `brgy_name`, `brgy_code`) VALUES
(31, 190990, 'bucal1secretary', '$2a$12$aGYbPL6qEf7EIpTyWhmY3.yu0S2OYRKRy9ZNjPpZ.NiXZ1ft5Wmzq', 'ericsonlimpasan@gmail.com', '09972816234', '2019-01-29', 'ACTIVE', 'Bucal 1', 'BC1'),
(58, 991460, 'Tulaybsecretary', '$2a$12$KfTROeThLVKsHyCF7YkbueyFrV59Wy3Iir6uVVMzh3jiCGUBRWFlq', 'jasmin.lagura18@gmail.com', '09177111418', '2019-03-07', 'ACTIVE', 'Tulay Silangan', 'TSM'),
(72, 122499, 'Bucal2sekratari', '$2y$10$No3LpVC6apTlxp8o8gzvf..uu/ZcdMEHYfPuDW5.YCaEmwtTqtLYW', 'Dantegulapa2019@gmail.com', '09972616235', '2019-03-29', 'ACTIVE', 'Bucal 2', 'BC2'),
(73, 138329, 'bucal3Asecretary', '$2y$10$YDWTMdkG3LKta5AS3ddmd.AGAMLRJObxYfTTKKVQqoSoVdTL8FfSS', 'OBISDILG@gmail.com', '09353075820', '2019-04-02', 'ACTIVE', 'Bucal 3A', 'BC3A'),
(74, 231339, 'bucal3Bsecretary', '$2y$10$z32WNRI4.X2yfr7Q8634rOVJVdV9EOnp6EZh6Vs/2DU/AurwqjgHa', 'psymonasegurado@gmail.com', '09156530670', '2019-04-02', 'ACTIVE', 'Bucal 3B', 'BC3B'),
(75, 244400, 'bucal4Asecretary', '$2y$10$Qvs9bHT6P8MyFaIDhCyH1uf2Aa1KjiTYRY4NwIFcR6Rv7VTo72SFO', 'as36urad015@gmail.com', '09476299578', '2019-04-02', 'ACTIVE', 'Bucal 4A', 'BC4A'),
(76, 658040, 'secretary_pin', '$2y$10$lq7ex2BIC1BrfJdVtiwSzOYt.w/X4kMWm0u7lzP5AZ44GSoPokWe6', 'Joanne2015@gmail.com', '09193123455', '2019-04-04', 'DEACTIVATE', 'Pinagsanhan B', 'PSB'),
(77, 414190, 'layongmabilogsecretary', '$2y$10$12KcSYP4zTAxQWv/HB18CeUxGjDQmU1A7HiNxhM/JOp/kSXYWTdK2', 'Jovieanglo@gmail.com', '09723423423', '2019-04-04', 'ACTIVE', 'Layong Mabilog', 'LM'),
(78, 394569, 'garita1Asecretary', '$2y$10$8P3HA68wm/uQB8/wn5gcV.T9sryG1F7oxwUI5LjKyJO2IY5W49rVi', 'Casama_cc15@gmail.com', '09276252431', '2019-04-04', 'ACTIVE', 'Garita A', 'G1A'),
(79, 593990, 'pantihan4secretary', '$2y$10$Y6StKsKXhW43pkPpAZE8S.E0UFjYp6X.9C6FaXJilK9XmdaEU9yHu', 'none@none.com', '09197654444', '2019-04-04', 'ACTIVE', 'Pantihan 4', 'PT4'),
(80, 565930, 'pantihan3secretary', '$2y$10$EUgLWDt8dEJ0lcTwdphhDelnOpfA1FhEOaGpbnnoZZPL1C1IF7RqS', 'kimdondiegoramos@yahoo.com', '12412412412', '2019-04-04', 'ACTIVE', 'Pantihan 3', 'PT3'),
(81, 658040, 'PinagsanhanBsecretary', '$2y$10$VmHMqvmETWdODYzzkhIXB.UKKqL/tQL1SdkSWyaRoO.Rchp5FFzcG', 'Joanne20015@gmail.com', '09194745566', '2019-04-04', 'ACTIVE', 'Pinagsanhan B', 'PSB'),
(82, 405390, 'GaritaBsecretary', '$2y$10$OPVtwyagnE6vwWUpIykhqeft2HxxethRm4CgXhqzTWQtQYyLqKuHm', 'Maineocampo30@gmail.com', '09642342342', '2019-04-04', 'ACTIVE', 'Garita B', 'G1B'),
(83, 318659, 'bucals4Bsecretary', '$2y$10$3OpOKbnBCt1Pelmjf.dxle7YZaofWFF5SLexlGtVfflsmNu5d7OSG', 'Margie_DINO@gmail.com', '09217274514', '2019-04-06', 'ACTIVE', 'Bucal 4B', 'BC4B'),
(84, 375139, 'cainginsecretary', '$2y$10$zUZjkIOBumBZPWGJpCkGFONuDXKhBA/gnS74Cohs8dIgD/TC0qMoy', 'Icasiano_15@gmail.com', '09281653712', '2019-04-06', 'ACTIVE', 'Caingin', 'CP'),
(85, 447000, 'mabatosecretary', '$2y$10$QxVK/4q77n28HjC9g2nUW.5St0bO8Zq0/NLgZHwNrliWE3HuyuCmq', 'Mojicarebeca@gmail.com', '09523423042', '2019-04-06', 'ACTIVE', 'Mabato', 'MB'),
(86, 475860, 'Pantihan1secretary', '$2y$10$M7XggurgdyamnOQ7rJrS0e5pUcj8sSk4T151hC0JYPtE8ao3rbc0W', 'asdasd@yahoo.com', '09141241241', '2019-04-06', 'ACTIVE', 'Pantihan 1', 'PT1'),
(87, 532730, 'Pantihan2secretary', '$2y$10$lTH.JBtMFNgfI84MsKswoOwgOOStu5Hc5u8OvGNJ3jZJGuXQdtU2e', 'Valentina_Gariando@gmail.com', '09827777199', '2019-04-06', 'ACTIVE', 'Pantihan 2', 'PT2'),
(88, 638830, 'PinagsanhanAsecretary', '$2y$10$joW01jgALS7ESjeNUA5lVO1pqcZom2Mr7C5/bUwAfotRT/iiShVYO', 'nimfacaimol0900@gmail.com', '09123812344', '2019-04-06', 'ACTIVE', 'Pinagsanhan A', 'PSA'),
(89, 812050, 'SanmiguelAsecretary', '$2y$10$dvJYUJv6mxRXSR.lhvcRdOCI1Fhz.S8i53r8b621V5jOtWRYGGpqK', 'Teresitavalenzuela09@gmail.com', '09476322866', '2019-04-06', 'ACTIVE', 'San Miguel A', 'SMA'),
(90, 849560, 'SanmiguelBsecretary', '$2y$10$fe0SO8cVY/5jZU7t5hnAQe3RNVS9TP7dhSgst6UMmMLDRIGVCQ5VK', 'Raqueltanag@gmail.com', '09195339635', '2019-04-06', 'ACTIVE', 'San Miguel B', 'SMB'),
(91, 886020, 'Santamercedessecretary', '$2y$10$GXSIn0kphVqegPjQQ5c/sekIDKjB/Pgq7zKCaLjm1szJLklDTiWWa', 'Laizamoriente42@gmail.com', '09197246342', '2019-04-06', 'ACTIVE', 'Sta. Mercedes (Patungan)', 'STM'),
(92, 929130, 'Talipusngosecretary', '$2y$10$NQaFTQWrs9jK5sD2qR4fn.w4DRzp1wLAKo32uYveLubhuE2OW0j6O', 'Arlene099@gmail.com', '09197494423', '2019-04-07', 'ACTIVE', 'Talipusngo', 'TLP'),
(93, 957980, 'tulaykanluransecretary', '$2y$10$vlZMZYov4pc4IXYPIO861OFkgO.PQDbyTbgKq.6t/csTZrhUOrxeC', 'Loreliesamonte@gmail.com', '09196277953', '2019-04-07', 'ACTIVE', 'Tulay Kanluran', 'TKM'),
(94, 991460, 'tulaysilangansecretary', '$2y$10$L4TBYP1OkrwMcox9cOZbZ.14ynIY.bZrPIVJQnKgkjM5pUI24Niza', 'Jasminlaguza09@gmail.com', '09476289335', '2019-04-07', 'ACTIVE', 'Tulay Silangan', 'TSM'),
(95, 683919, 'Poblacion1Asecretary', '$2y$10$LfRe7czFNexcZ6eialp3NOmwwwxG5n5/Pcds2vy6iBEacl6mUowGm', 'Felicita@gmail.com', '09288162763', '2019-04-07', 'ACTIVE', 'Poblacion 1A', 'PB1A'),
(96, 741929, 'Poblacion1Bsecretary', '$2y$10$Xz3bikA/KS.coKLSS1r7S.3OqEmo1Yli5x7VuCCzfEEOBjDOsqSPe', 'Magante_Jannette@gmail.com', '09126187261', '2019-04-07', 'ACTIVE', 'Poblacion 1B', 'PB1B'),
(97, 763130, 'Poblacion2Asecretary', '$2y$10$4VILU7ImkKD8LhIs/8V8lOZhA3hjb6l4uoFh8niOrQnxLroWiXKPO', 'Diannedelrosario23@gmail.com', '09197542222', '2019-04-07', 'ACTIVE', 'Poblacion 2A', 'PB2A'),
(98, 794000, 'Poblacion2Bsecretary', '$2y$10$5cMC863f120tmrw30EtmV.szhdKjDjBOvpA7YleUWXqOzOY42QVRC', 'Kristinesisante788@gmail.com', '09128467882', '2019-04-07', 'ACTIVE', 'Poblacion 2B', 'PB2B'),
(99, 122499, 'dfvdfvdfvdfvdfaaaa', '$2y$10$XS6rmYtfc1x0wSxf9bb5OOoH2.cvUN8MHtmBFx4hWtFDbxZ5OLXH2', 'BuckleyTrejo@gmail.com', '09283765555', '2019-04-12', 'ACTIVE', 'Bucal 2', 'BC2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abkd_tbl`
--
ALTER TABLE `abkd_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_goal_tbl`
--
ALTER TABLE `barangay_goal_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_mission_tbl`
--
ALTER TABLE `barangay_mission_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_vision_tbl`
--
ALTER TABLE `barangay_vision_tbl`
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
-- Indexes for table `brgy_bclearance_tbl`
--
ALTER TABLE `brgy_bclearance_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_bpermit_tbl`
--
ALTER TABLE `brgy_bpermit_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_bucal1_tbl`
--
ALTER TABLE `brgy_bucal1_tbl`
  ADD PRIMARY KEY (`brgy_id`);

--
-- Indexes for table `brgy_certificate_tbl`
--
ALTER TABLE `brgy_certificate_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_code_tbl`
--
ALTER TABLE `brgy_code_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_indigency_tbl`
--
ALTER TABLE `brgy_indigency_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_info_tbl`
--
ALTER TABLE `brgy_info_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy_official_tbl`
--
ALTER TABLE `brgy_official_tbl`
  ADD PRIMARY KEY (`brgy_id`);

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
-- Indexes for table `kp_tbl_c1`
--
ALTER TABLE `kp_tbl_c1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kp_tbl_c2`
--
ALTER TABLE `kp_tbl_c2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maragondon_official_tbl`
--
ALTER TABLE `maragondon_official_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_p1_tbl`
--
ALTER TABLE `monthly_p1_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_p2_tbl`
--
ALTER TABLE `monthly_p2_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_p3_tbl`
--
ALTER TABLE `monthly_p3_tbl`
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
-- AUTO_INCREMENT for table `abkd_tbl`
--
ALTER TABLE `abkd_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barangay_goal_tbl`
--
ALTER TABLE `barangay_goal_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `barangay_mission_tbl`
--
ALTER TABLE `barangay_mission_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `barangay_vision_tbl`
--
ALTER TABLE `barangay_vision_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `bcpc_tbl`
--
ALTER TABLE `bcpc_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bdf_tbl`
--
ALTER TABLE `bdf_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bdrrmf_a_tbl`
--
ALTER TABLE `bdrrmf_a_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bdrrmf_b_tbl`
--
ALTER TABLE `bdrrmf_b_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brgy_bclearance_tbl`
--
ALTER TABLE `brgy_bclearance_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `brgy_bpermit_tbl`
--
ALTER TABLE `brgy_bpermit_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brgy_certificate_tbl`
--
ALTER TABLE `brgy_certificate_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brgy_code_tbl`
--
ALTER TABLE `brgy_code_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `brgy_indigency_tbl`
--
ALTER TABLE `brgy_indigency_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `brgy_info_tbl`
--
ALTER TABLE `brgy_info_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `cms_table`
--
ALTER TABLE `cms_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `gad_a_tbl`
--
ALTER TABLE `gad_a_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kp_tbl_c1`
--
ALTER TABLE `kp_tbl_c1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kp_tbl_c2`
--
ALTER TABLE `kp_tbl_c2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `maragondon_official_tbl`
--
ALTER TABLE `maragondon_official_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `monthly_p1_tbl`
--
ALTER TABLE `monthly_p1_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `monthly_p2_tbl`
--
ALTER TABLE `monthly_p2_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `monthly_p3_tbl`
--
ALTER TABLE `monthly_p3_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pdp_tbl`
--
ALTER TABLE `pdp_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pops_a_tbl`
--
ALTER TABLE `pops_a_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pops_b_tbl`
--
ALTER TABLE `pops_b_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pwd_tbl`
--
ALTER TABLE `pwd_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reference_file_tbl`
--
ALTER TABLE `reference_file_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `residents_tbl`
--
ALTER TABLE `residents_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=614;

--
-- AUTO_INCREMENT for table `sc_tbl`
--
ALTER TABLE `sc_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sk_tbl`
--
ALTER TABLE `sk_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_account_tbl`
--
ALTER TABLE `user_account_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
