-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 04:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'hamza', 'hamza123', '20-01-2023 11:42:05 AM');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `consultancyFees` int(11) DEFAULT NULL,
  `appointmentDate` varchar(255) DEFAULT NULL,
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `userStatus` int(11) DEFAULT NULL,
  `doctorStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(3, 'Cardiology', 5, 5, 1000, '2023-05-26', '5:30 PM', '2023-05-14 11:38:21', 1, 1, NULL),
(6, 'ENT', 1, 3, 1000, '2023-05-23', '7:30 AM', '2023-05-15 02:29:47', 1, 1, NULL),
(7, 'Neurologist', 4, 3, 1000, '2023-05-17', '10:00 AM', '2023-05-20 04:49:17', 1, 1, NULL),
(8, 'General Medicine', 8, 3, 800, '2023-05-24', '9:15 AM', '2023-05-23 04:04:28', 1, 1, NULL),
(9, 'Cardiology', 9, 4, 1500, '2023-05-30', '3:30 PM', '2023-05-27 10:28:19', 1, 1, NULL),
(10, 'General Medicine', 8, 4, 800, '2023-05-31', '8:00 PM', '2023-05-27 14:57:56', 1, 1, NULL),
(11, 'ENT', 1, 3, 1000, '2023-07-28', '11:30 PM', '2023-07-11 18:30:45', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `docimage` varchar(255) NOT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `docimage`, `creationDate`, `updationDate`) VALUES
(1, 'ENT', 'Dr.Zafar Iqbal', 'La Salle Rd, Peer Khurshid Colony Multan,Pakistan', '1000', '3098090100', 'zafar@test.com', '3b8eb8d23ad703b5575ae585d39caf9f', '', '2022-10-30 18:16:52', '2023-05-20 10:08:24'),
(4, 'Neurologist', 'Dr.Amar Ali', 'Multan', '1000', '3018090100', 'amar@test.com', 'd01b8c6ea1a64ba2510df7cee1e4d604', '', '2023-05-20 04:48:01', '2023-05-20 10:16:12'),
(8, 'General Medicine', 'Dr. Zeinab Fatima', 'La Salle Rd, Peer Khurshid Colony Multan,Pakistan', '800', '3008090100', 'zeinab@test.com', '4fe326dce9423036a0608a4e5955f40b', '', '2023-05-20 10:15:59', NULL),
(9, 'Cardiology', 'Dr. Yasir Prvaiz', 'La Salle Rd, Peer Khurshid Colony Multan,Pakistan', '1500', '30038090100', 'yasir@test.com', 'be28a88d7e2de1fa4494a75e901f17d7', '', '2023-05-20 10:18:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(38, 4, 'amar@test.com', 0x3a3a3100000000000000000000000000, '2023-05-20 04:55:47', '20-05-2023 10:26:55 AM', 1),
(39, 1, 'zafar@test.com', 0x3a3a3100000000000000000000000000, '2023-05-20 08:43:23', '20-05-2023 02:14:45 PM', 1),
(40, 1, 'zafar@test.com', 0x3a3a3100000000000000000000000000, '2023-05-20 08:46:37', '20-05-2023 02:17:28 PM', 1),
(41, 1, 'zafar@test.com', 0x3a3a3100000000000000000000000000, '2023-05-20 10:06:47', '20-05-2023 03:37:03 PM', 1),
(44, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-20 10:22:55', NULL, 1),
(45, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-20 10:23:32', '20-05-2023 03:53:37 PM', 1),
(46, 1, 'zafar@test.com', 0x3a3a3100000000000000000000000000, '2023-05-20 10:23:46', '20-05-2023 03:56:17 PM', 1),
(47, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-21 04:04:01', '21-05-2023 09:34:12 AM', 1),
(48, 4, 'amar@test.com', 0x3a3a3100000000000000000000000000, '2023-05-21 04:04:29', '27-05-2023 08:28:14 PM', 1),
(49, 1, 'zafar@test.com', 0x3a3a3100000000000000000000000000, '2023-05-21 04:27:34', '21-05-2023 09:58:59 AM', 1),
(50, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-23 04:04:49', NULL, 1),
(51, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-24 14:26:13', NULL, 1),
(52, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-25 03:18:12', NULL, 1),
(53, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-25 03:24:02', '25-05-2023 08:54:31 AM', 1),
(54, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-25 07:36:03', NULL, 1),
(55, 1, 'zafar@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:10:08', '27-05-2023 03:40:42 PM', 1),
(56, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:12:51', NULL, 1),
(57, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:16:47', NULL, 1),
(58, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:22:26', NULL, 1),
(59, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:25:56', NULL, 1),
(60, 9, 'yasir@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:28:33', NULL, 1),
(61, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 14:56:51', NULL, 1),
(62, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 14:58:25', NULL, 1),
(63, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-28 06:34:36', '28-05-2023 12:08:36 PM', 1),
(64, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-28 06:54:37', NULL, 1),
(65, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-28 06:56:53', NULL, 1),
(66, 8, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-28 10:11:04', NULL, 1),
(67, 4, 'amar@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 05:22:16', NULL, 1),
(68, 4, 'amar@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 08:34:14', NULL, 1),
(69, 4, 'amar@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 17:41:32', NULL, 1),
(70, NULL, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 18:22:50', NULL, 0),
(71, 4, 'amar@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 18:25:50', NULL, 1),
(72, 4, 'amar@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 18:31:29', '12-07-2023 12:02:28 AM', 1),
(73, 4, 'amar@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 18:34:12', '12-07-2023 12:04:44 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(11, 'ENT', '2022-10-30 18:11:30', NULL),
(18, 'Neurologist', '2023-05-20 04:48:34', NULL),
(19, 'General Medicine', '2023-05-20 10:10:12', NULL),
(20, 'Cardiology', '2023-05-20 10:17:10', NULL),
(23, 'Family Medicine', '2023-07-11 19:07:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `spec_description` varchar(5000) NOT NULL,
  `spec_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `specilization`, `spec_description`, `spec_image`) VALUES
(25, 'Family Medicine', 'At Healhub we provides top notch family medicine services with 24/7 availability', '../../uploads/family medicine.jpg'),
(26, 'ENT ', 'At Healhub we provides top notch  ENT services with 24/7 availability', '../../uploads/ENT.jpg'),
(27, 'Cardiology', 'At Healhub we provides top notch Cardiology services with 24/7 availability', '../../uploads/Cardiology.jpg'),
(28, 'Eyes Unit', '	At Healhub we provides top notch Eye services with 24/7 availability', '../../uploads/eyes.jpg'),
(29, 'Neurology', 'At Healhub we provides top notch Neurology services with 24/7 availability', '../../uploads/neu.jpg'),
(30, 'General Surgery', 'At Healhub we provides top notch General Surgery services with 24/7 availability', '../../uploads/general.jpg'),
(31, 'Back Pain', '	At Healhub we provides top notch Back Pain services with 24/7 availability', '../../uploads/back pain.webp'),
(32, 'Thriod Treatment', '	At Healhub we provides top notch Thriod Treatment services with 24/7 availability', '../../uploads/thriod.jpg'),
(33, 'Dentistry', 'At Healhub we provides top notch Dentistry services with 24/7 availability', '../../uploads/Dentistry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `fullname`, `email`, `contactno`, `message`, `PostingDate`, `AdminRemark`, `LastupdationDate`, `IsRead`) VALUES
(6, 'Muhammad Adnan', 'adnananwar675@gmail.com', '03078117479', 'This is test form', '2023-05-25 07:08:55', 'Ok\r\n', '2023-05-25 07:18:15', 1),
(7, 'Muhammad Ahamd', 'ahmad675@gmail.com', '03078117479', 'This a test query', '2023-07-11 19:09:40', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalhistory`
--

CREATE TABLE `tblmedicalhistory` (
  `ID` int(10) NOT NULL,
  `PatientID` int(10) DEFAULT NULL,
  `BloodPressure` varchar(200) DEFAULT NULL,
  `BloodSugar` varchar(200) NOT NULL,
  `Weight` varchar(100) DEFAULT NULL,
  `Temperature` varchar(200) DEFAULT NULL,
  `MedicalPres` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblmedicalhistory`
--

INSERT INTO `tblmedicalhistory` (`ID`, `PatientID`, `BloodPressure`, `BloodSugar`, `Weight`, `Temperature`, `MedicalPres`, `CreationDate`) VALUES
(2, 2, 'Normal', 'Normal', '65', 'Normal', 'Everything is fine', '2023-05-20 08:44:21'),
(3, 4, 'Normal', 'Normal', '65', 'Normal', 'Reports are good', '2023-05-27 10:14:14'),
(4, 5, 'Normal', 'Normal', '65', 'Normal', 'Everything is good not need any medicine', '2023-05-27 10:24:52'),
(5, 6, 'Normal', 'Normal', '65', 'Normal', 'sha', '2023-05-27 10:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(10) NOT NULL,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `PatientContno` varchar(11) DEFAULT NULL,
  `PatientEmail` varchar(200) DEFAULT NULL,
  `PatientGender` varchar(50) DEFAULT NULL,
  `PatientAdd` mediumtext DEFAULT NULL,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `Docid`, `PatientName`, `PatientContno`, `PatientEmail`, `PatientGender`, `PatientAdd`, `PatientAge`, `PatientMedhis`, `CreationDate`, `UpdationDate`) VALUES
(4, 8, 'Adnan', '301809010', 'adnan@test.com', 'male', 'Chak No 110/15.L, Tehsil Main Channu\r\nDistrict Khanewal', 22, 'Not Yet', '2023-05-24 14:27:03', NULL),
(5, 8, 'Ahmad', '301809010', 'ahmad@test.com', 'male', 'Mian Channu Bypass\r\nDistrict Khanewal', 22, 'Not Yet', '2023-05-27 10:23:58', NULL),
(6, 9, 'usman', '3018090100', 'usman@test.com', 'male', 'Sahiwal', 21, 'Not Yet', '2023-05-27 10:29:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(10, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-14 17:20:27', '14-05-2023 10:56:14 PM', 1),
(11, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-14 17:59:13', '14-05-2023 11:32:55 PM', 1),
(12, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-15 02:29:25', NULL, 1),
(20, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-20 10:22:02', '20-05-2023 03:52:43 PM', 1),
(21, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-21 04:05:28', NULL, 1),
(22, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-21 04:25:02', '21-05-2023 09:56:24 AM', 1),
(23, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-21 11:09:42', NULL, 1),
(24, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-21 11:28:27', NULL, 1),
(25, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-21 11:33:13', '21-05-2023 05:07:10 PM', 1),
(26, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-22 04:44:12', '22-05-2023 10:14:59 AM', 1),
(27, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-22 11:04:47', '22-05-2023 04:35:14 PM', 1),
(28, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-22 11:14:35', NULL, 1),
(29, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-22 11:15:15', '22-05-2023 04:45:33 PM', 1),
(30, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-22 12:26:34', NULL, 1),
(31, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-22 12:31:05', '22-05-2023 06:01:17 PM', 1),
(32, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-23 04:04:13', NULL, 1),
(33, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-24 14:25:37', NULL, 1),
(34, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-24 14:28:04', NULL, 1),
(35, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:09:30', '27-05-2023 03:39:59 PM', 1),
(36, NULL, 'adnan@123.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:14:27', NULL, 0),
(37, NULL, 'adnan@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:14:42', NULL, 0),
(38, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:16:10', NULL, 1),
(39, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:18:46', NULL, 1),
(40, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:22:07', NULL, 1),
(41, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:25:04', NULL, 1),
(42, NULL, 'zeinab@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:25:44', NULL, 0),
(43, 4, 'usman@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:28:03', NULL, 1),
(44, 4, 'usman@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 10:29:53', NULL, 1),
(45, 4, 'usman@test.com', 0x3a3a3100000000000000000000000000, '2023-05-27 14:57:29', NULL, 1),
(46, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-28 05:38:22', NULL, 1),
(47, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-28 05:39:19', NULL, 1),
(48, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-28 06:11:15', '28-05-2023 11:46:29 AM', 1),
(49, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-28 10:19:40', NULL, 1),
(50, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-05-28 13:13:38', '28-05-2023 06:44:03 PM', 1),
(51, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 08:33:45', NULL, 1),
(52, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 17:41:50', NULL, 1),
(53, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 18:22:59', '11-07-2023 11:53:26 PM', 1),
(54, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 18:29:35', '12-07-2023 12:01:13 AM', 1),
(55, 3, 'ahmad@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 18:43:34', NULL, 1),
(56, NULL, 'horran@test.com', 0x3a3a3100000000000000000000000000, '2023-07-11 20:17:48', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(3, 'Ahmad', 'Mian Channu Bypass', 'Mian Channu', 'male', 'ahmad@test.com', '8de13959395270bf9d6819f818ab1a00', '2023-05-14 11:40:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorslog`
--
ALTER TABLE `doctorslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
