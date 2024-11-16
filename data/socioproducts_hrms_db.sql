-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2024 at 02:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socioproducts_hrms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement_board`
--

CREATE TABLE `announcement_board` (
  `id` int(11) NOT NULL,
  `announcement_text` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `author_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement_board`
--

INSERT INTO `announcement_board` (`id`, `announcement_text`, `status`, `author_id`, `app_id`, `created_at`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores incidunt amet odio beatae. Quaerat qui sed itaque, aut eveniet et delectus pariatur sequi vero maiores porro soluta doloremque! Eaque, consequuntur.', 1, 26, 1, '2024-06-03 10:35:49');

-- --------------------------------------------------------

--
-- Table structure for table `app_application_acess`
--

CREATE TABLE `app_application_acess` (
  `id` int(11) NOT NULL,
  `access_id` varchar(64) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_acess`
--

INSERT INTO `app_application_acess` (`id`, `access_id`, `subscription_id`, `created_at`) VALUES
(1, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 1, '2024-02-05 06:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `app_application_companies`
--

CREATE TABLE `app_application_companies` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `type` varchar(200) NOT NULL,
  `gstin` varchar(10) NOT NULL,
  `pan` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `state` varchar(200) NOT NULL,
  `logo_file` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_application_users`
--

CREATE TABLE `app_application_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `role` varchar(100) NOT NULL,
  `app_id` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_users`
--

INSERT INTO `app_application_users` (`id`, `first_name`, `last_name`, `email`, `password`, `profile_picture`, `role`, `app_id`, `created_at`, `status`) VALUES
(1, 'Hemant', 'Karekar', 'hemant@sociomark.in', '$2y$10$SNqAYb3L3ylGRL9shrU/PubnkUTGViIIebrAkPzmecLYiaa.VIObe', NULL, '3', '1', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `app_company_attendance`
--

CREATE TABLE `app_company_attendance` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `attendance_date` date DEFAULT NULL,
  `timepunchIn` varchar(20) DEFAULT NULL,
  `timepunchOut` varchar(20) DEFAULT NULL,
  `hours` varchar(100) DEFAULT NULL,
  `added_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_company_attendance`
--

INSERT INTO `app_company_attendance` (`id`, `app_id`, `emp_id`, `attendance_date`, `timepunchIn`, `timepunchOut`, `hours`, `added_at`, `updated_at`, `status`) VALUES
(1, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 1, '2024-03-04', '10:54:01', NULL, NULL, '2024-03-04 10:54:04', NULL, 0),
(2, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 1, '2024-05-10', '11:06:43', NULL, NULL, '2024-05-10 11:06:47', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `app_company_employee`
--

CREATE TABLE `app_company_employee` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `leave_date` date NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `report_to` int(11) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1' COMMENT '1=present,0=Not present',
  `created_at` datetime DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_company_employee`
--

INSERT INTO `app_company_employee` (`id`, `app_id`, `first_name`, `last_name`, `email`, `emp_id`, `password`, `mobile`, `pan`, `dob`, `gender`, `dept_id`, `designation_id`, `joining_date`, `leave_date`, `profile_picture`, `level`, `report_to`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Hemant', 'Karekar', 'hemant@sociomark.in', '', '$2y$10$SNqAYb3L3ylGRL9shrU/PubnkUTGViIIebrAkPzmecLYiaa.VIObe', '8689862375', '', '0000-00-00', '', 0, 0, '0000-00-00', '0000-00-00', NULL, NULL, NULL, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `app_company_employees`
--

CREATE TABLE `app_company_employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mobile` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pan` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `leave_date` date NOT NULL,
  `profile_picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `salary` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `comp_off` int(11) DEFAULT NULL,
  `remain_leaves` float DEFAULT NULL,
  `report_to` int(11) DEFAULT NULL,
  `status` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1' COMMENT '1=present,0=Not present',
  `created_at` datetime DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `app_company_employees`
--

INSERT INTO `app_company_employees` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `pan`, `dob`, `gender`, `dept_id`, `designation_id`, `joining_date`, `leave_date`, `profile_picture`, `level`, `salary`, `comp_off`, `remain_leaves`, `report_to`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vivek', 'Baandal', 'vivek@sociomark.in', '32964bf6afb3f9b7836ec67e8d153d4c', '9833842620', 'AQAPB5751B', '1987-11-07', 'm', 6, 10, '2017-10-06', '2030-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1606805625-vivek.jpg', 'admin', NULL, NULL, 5, NULL, '1', '2020-12-01 00:00:00', '2022-06-07 04:51:19'),
(2, 'Heta', 'Desai Baandal', 'heta@sociomark.in', 'd5df4ed1a8c65d3df87dc977bdaa7519', '8928668602', 'AMJPD5939J', '1988-01-06', 'f', 6, 16, '2017-10-06', '2028-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1606809107-heta.jpg', 'admin', NULL, NULL, 5, NULL, '1', '2020-12-01 00:00:00', '2022-06-07 04:51:19'),
(3, 'Sameer', 'yadav', 'sameer@sociomark.in', '656e51c81ef6789460e29a716d3763e1', '9029092585', 'ABAPY7128E', '1985-05-12', 'm', 6, 11, '2017-10-06', '2028-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1606809390-Sameer.jpg', 'employee', NULL, NULL, 14, NULL, '0', '2020-12-01 00:00:00', '2022-06-07 04:51:19'),
(4, 'Vishal', 'Desale', 'developer@sociomark.in', '6f8ac79d91dba3dd72591a08d177b050', '9730632224', 'BPXPD5118P', '1994-04-11', 'm', 1, 1, '2018-05-28', '2024-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1606809687-vishal-1.jpg', 'employee', NULL, NULL, 14, 2, '0', '2020-12-01 00:00:00', '2022-06-07 04:51:19'),
(5, 'Neetu', 'Manve', 'neetu@sociomark.in', '36a55bfd27a6ab00c9828fd7f1d73f1d', '8689840105', 'FDYPM2063K', '1992-08-10', 'f', 3, 3, '2018-06-17', '2021-03-30', '/home/x2zi6le57m15/public_html/admin/uploads/1606810141-Neetu.jpg', 'employee', NULL, NULL, 0.5, 0, '0', '2020-12-01 00:00:00', '2022-06-07 04:51:19'),
(6, 'Kuldeep Singh', 'Kumpawat', 'kuldeep@sociomark.in', '96fed0a759b1dd332ebd60dc1073111b', '8452961857', 'CLSPK4363F', '1992-11-25', 'm', 3, 3, '2019-03-11', '2024-02-29', '/home/x2zi6le57m15/public_html/admin/uploads/1606810350-Kuldeep.jpg', 'employee', NULL, NULL, 0.5, 1, '0', '2020-12-01 00:00:00', '2023-12-11 07:31:52 PM'),
(7, 'Mrunal Jaiwant', 'Karmele', 'mrunal@sociomark.in', 'ddcd89202794a954472bb6ac36e4c750', '8169262788', 'DOWPK5279A', '1996-03-31', 'm', 3, 3, '2019-04-30', '2026-01-31', '/home/x2zi6le57m15/public_html/admin/uploads/1606810484-Mrunal.jpg', 'employee', NULL, NULL, 14.5, 1, '1', '2020-12-01 00:00:00', '2024-06-04 04:14:34 PM'),
(8, 'Juilee ', 'Koli', 'juilee@sociomark.in', 'bfecd5a3dffb14428b706950d975da2c', '8108066650', 'DQAPK9095Q', '1996-03-16', 'f', 2, 3, '2019-07-29', '2021-08-18', '/home/x2zi6le57m15/public_html/admin/uploads/1606810714-juilee.jpg', 'employee', NULL, NULL, 0.5, 2, '0', '2020-12-01 00:00:00', '2022-06-07 04:51:19'),
(9, 'Deepak Parshuram', 'Nagre', 'deepak@sociomark.in', '5f2bcf37ade6eaf4897394cadc8c199b', '8369921507', 'ASKPN6302L', '1993-05-29', 'm', 3, 3, '2019-09-03', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1606811072-deepak.jpg', 'employee', NULL, NULL, 25.5, 2, '1', '2020-12-01 00:00:00', '2024-11-05 02:25:29 PM'),
(10, 'Vidisha', 'Dholkhedia', 'vidisha@Sociomark.in', '645d64810c0d96c25ebc9381cacf7021', '9769005132', 'CTIPD4693P', '1998-04-01', 'f', 2, 6, '2019-11-01', '2021-09-07', '/home/x2zi6le57m15/public_html/admin/uploads/1606812260-vidisha.jpg', 'employee', NULL, NULL, 0.5, 2, '0', '2020-12-01 00:00:00', '2022-06-07 04:51:19'),
(11, 'Chetna Surendra Kumar ', 'Medh', 'chetna@Sociomark.in', '4bd5615f8ba5d4fb35fa67a35697f887', '9320989422', 'FWMPM3994N', '1999-02-20', 'f', 2, 2, '2019-11-26', '2021-06-15', '/home/x2zi6le57m15/public_html/admin/uploads/1606812427-chetna.jpg', 'employee', NULL, NULL, 0.5, 2, '0', '2020-12-01 00:00:00', '2022-06-07 04:51:19'),
(12, 'Murtaza ', 'Patanwala', 'Murtaza@sociomark.in', '2dfd5557e5674a8ffd3c0d5f99f625dd', '7506055882', 'ENKPP0841K', '1997-12-30', 'm', 3, 13, '2020-02-10', '2021-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1606812581-murtaza.jpg', 'employee', NULL, NULL, 0.5, 6, '0', '2020-12-01 00:00:00', '2022-06-07 04:51:19'),
(13, 'Karan ', 'Krishnamurthy', 'karan@Sociomark.in', 'b4ebd3ee9025869a739a182eb9ae1a21', '8369709625', 'FPKPK3342R', '1997-02-07', 'm', 2, 7, '2020-05-11', '2021-07-31', '/home/x2zi6le57m15/public_html/admin/uploads/1606812768-karan.jpg', 'employee', NULL, NULL, 0.5, 2, '0', '2020-12-01 00:00:00', '2022-06-07 04:51:19'),
(14, 'Animesh ', 'Pendre', 'animesh@sociomark.in', '458ed6c9ab74c55f29ecd3361b1c6c71', '8097614531', 'FRLPP4387J', '1997-01-31', 'm', 3, 12, '2020-07-24', '2021-02-05', '/home/x2zi6le57m15/public_html/admin/uploads/1606812903-animesh.jpg', 'probation', NULL, NULL, 0.5, NULL, '0', '2020-12-01 00:00:00', '2022-06-07 04:51:19'),
(15, 'Sumit', 'Yewale', 'sumit@sociomark.in', '220268d71c18cb8334ccdf41ff21d40c', '9004206678', 'ANPPY4598K', '1997-05-05', 'm', 1, 5, '2020-08-12', '2021-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1606812978-sumit.jpg', 'employee', NULL, NULL, 23.5, 4, '0', '2020-12-01 00:00:00', '2022-06-07 04:51:19'),
(16, 'Sumit', 'Ranjane', 'sumit.r@sociomark.in', '109a429a8fd76df292bdc3f3f6c77055', '8999224639', 'CMWPR2159H', '1998-02-16', 'm', 3, 17, '2021-02-16', '2024-02-09', '/home/x2zi6le57m15/public_html/admin/uploads/1614778576-Sumit.jpg', 'employee', NULL, NULL, 1.5, 1, '0', '2021-03-03 19:06:16', '2023-12-11 11:26:13 AM'),
(29, 'Parth', 'Kapdi', 'kapdiparth@gmail.com', '1c2511ee15974a78632899baa833f387', '8850426383', 'KUQPK7922F', '2000-09-01', 'm', 3, 21, '2021-12-06', '2022-04-30', '/home/x2zi6le57m15/public_html/admin/uploads/1640762306-WhatsApp_Image_2021-12-29_at_12_47_12_PM.jpeg', 'probation', NULL, NULL, 0.5, 9, '0', '2021-12-29 12:48:26', '2022-06-07 04:51:19'),
(17, 'Sahil ', 'Bhiwandkar', 'sahil@sociomark.in', '3182b91a641747da3a2755259f6d5600', '7208304809', 'BPPPB2026G', '1994-08-31', 'm', 2, 6, '2021-06-14', '2022-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1625305819-Sahil.jpeg', 'probation', NULL, NULL, 0.5, 2, '0', '2021-07-03 15:20:19', '2022-06-07 04:51:19'),
(18, 'Sayali', 'Kulkarni', 'sayali@sociomark.in', 'd1f0c45511a4dbe31b5bf48eff0a1094', '9773272611', 'CSMPK2873D', '1994-09-16', 'f', 2, 7, '2021-06-14', '2022-09-06', '/home/x2zi6le57m15/public_html/admin/uploads/1625306076-sayali.jpeg', 'employee', NULL, NULL, 0, 2, '0', '2021-07-03 15:24:36', '2022-06-07 04:51:19'),
(19, 'Jeslin', 'John', 'intern0610@gmail.com', '75dda6023869e4e4b079df64ad3309cb', '9167281429', 'BRQPJ4467G', '1997-10-06', 'f', 2, 18, '2021-06-03', '2021-08-31', '/home/x2zi6le57m15/public_html/admin/uploads/1625306422-jeslin.jpeg', 'intern', NULL, NULL, 0.5, 2, '0', '2021-07-03 15:30:22', '2022-06-07 04:51:19'),
(20, 'Nishant', 'Bangera', 'seo@sociomark.in', '3d0a250eb8fce8bdb3777ce3a932d48f', '9820218563', 'DXYPB3258K', '1999-10-14', 'm', 2, 18, '2021-06-02', '2021-08-31', '/home/x2zi6le57m15/public_html/admin/uploads/1625310278-d4a80dfb-bdd3-409e-8192-5bca59ad3753.jpg', 'intern', NULL, NULL, 0.5, 2, '0', '2021-07-03 16:34:38', '2022-06-07 04:51:19'),
(21, 'Ganesh', 'Jalla', 'ganesh@sociomark.in', '74a1cdd6695ac0b8660c0830676a3526', '9987599984', 'APZPJ9939F', '1993-01-23', 'm', 2, 7, '2021-08-02', '2023-03-30', '/home/x2zi6le57m15/public_html/admin/uploads/1631006253-ganesh.jpg', 'employee', NULL, NULL, 13.5, 2, '0', '2021-09-07 14:47:33', '2022-06-07 04:51:19'),
(22, 'Yashika', 'Modi', 'yashika@sociomark.in', 'b1ffc473ae65c03f70e54e5188560017', '8779139990', 'EOEPM9307C', '1998-05-20', 'f', 2, 18, '2021-08-23', '2022-12-09', '/home/x2zi6le57m15/public_html/admin/uploads/1631007086-Yashika.png', 'employee', NULL, NULL, 2.5, 2, '0', '2021-09-07 15:01:26', '2022-12-01 05:12:42 PM'),
(23, 'Darwin ', 'Antony', 'Darwin@sociomark.in', '2eebb10d78036ce83e0994e5518e96e5', '9004589733', 'ELDPD9904E', '1996-08-07', 'm', 2, 2, '2021-09-01', '2023-08-11', '/home/x2zi6le57m15/public_html/admin/uploads/1631007282-Darwin.png', 'employee', NULL, NULL, 0, 2, '0', '2021-09-07 15:04:42', '2023-02-14 03:38:17 PM'),
(25, 'Pradhyuman', 'Jadeja', 'pradhyuman@sociomark.in', '62f27adbeaa3c194fa57452c0657756a', '8451012059', 'AYNPJ9407H', '1998-09-21', 'm', 2, 19, '2021-08-16', '2022-09-24', '/home/x2zi6le57m15/public_html/admin/uploads/1631023437-passport_size_picture_.jpg', 'employee', NULL, NULL, 1, 2, '0', '2021-09-07 19:33:57', '2022-06-07 04:51:19'),
(26, 'Nikita', 'Bandekar', 'hr@sociomark.in', 'bc975072faa701191668bca02acba172', '9552049559', 'CENPB1592K', '1997-06-12', 'f', 4, 20, '2021-10-18', '2024-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1634887007-nikita-bandekar.jpg', 'employee', NULL, NULL, 22, 2, '1', '2021-10-22 12:46:47', '2022-12-01 01:17:56 PM'),
(27, 'Pratiksha', 'Thombare', 'pratiksha@sociomark.in', '79ca162520b69bd9c1e626a6bcec3f4a', '9766314102', 'AXYPT1866E', '1995-08-26', 'f', 1, 5, '2021-10-25', '2022-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1635326241-5e05fb2a-4045-44a4-b97a-ae752b16aa02.jpg', 'employee', NULL, NULL, 0.5, 2, '0', '2021-10-27 14:47:21', '2022-06-07 04:51:19'),
(28, 'Mohit', 'Singh', 'hr@sociomark.in', 'd32eeb98c97c81e3e8391611d621ecca', '7082686404', 'JOPPS7027D', '2000-01-02', 'm', 3, 21, '2021-01-11', '2022-03-12', '/home/x2zi6le57m15/public_html/admin/uploads/1636526985-MOHIT_Passport_size_photo.jpg', 'employee', NULL, NULL, 0.5, 2, '0', '2021-11-10 12:19:45', '2022-06-07 04:51:19'),
(33, 'Kajal ', 'Agrawal', 'kajal.a@sociomark.in', '579a8295af8f71c4b2c4207d0037eb13', '7977023003', 'DHLPA82050H', '2000-01-19', 'f', 3, 4, '2022-04-04', '2022-12-09', '/home/x2zi6le57m15/public_html/demo_admin/uploads/1652180218-WhatsApp_Image_2022-05-10_at_4_26_27_PM.jpeg', 'probation', NULL, NULL, 1, 6, '0', '2022-05-10 16:26:58', '2022-06-07 04:51:19'),
(31, 'Zishan', 'Inamdar', 'zishan@sociomark.in', '6444ef1b0f46820135048361f60c6c0e', '7738505050', 'AIUPI4401P', '1994-04-11', 'm', 3, 21, '2021-11-25', '2022-08-29', '/home/x2zi6le57m15/public_html/admin/uploads/1640763687-WhatsApp_Image_2021-12-29_at_1_10_35_PM.jpeg', 'probation', NULL, NULL, 2.5, 9, '0', '2021-12-29 13:11:27', '2022-06-07 04:51:19'),
(32, 'Ayaz Nasir', 'Khan', 'ayaz.k@sociomark.in', '6fdce64f5b4659d174b33bdc6474db9f', '9867862305', 'CNYPK8759D', '1994-05-27', 'm', 1, 5, '2022-03-15', '2023-07-07', '/home/x2zi6le57m15/public_html/demo_admin/uploads/1650882682-ayaz.jpeg', 'employee', NULL, NULL, 0, 2, '0', '2022-04-25 16:01:22', '2023-01-18 01:56:54 PM'),
(34, 'Ruchita', 'Lalwani', 'ruchita@sociomark.in', 'ffd2eab3057fae24b845eb4e16811b8e', '9967371108', 'AVKPL8245P', '1999-02-08', 'f', 2, 18, '2022-03-28', '2022-10-31', '/home/x2zi6le57m15/public_html/demo_admin/uploads/1652180518-WhatsApp_Image_2022-05-10_at_4_31_31_PM.jpeg', 'probation', NULL, NULL, 3, 22, '0', '2022-05-10 16:31:58', '2022-06-07 04:51:19'),
(47, 'Madhav', 'Rathi ', 'madhav@sociomark.in', 'c70632d5bcfd5051b9301acd000ac438', '9753594401', 'DHQPR3204H', '1999-01-13', 'm', 3, 21, '2022-06-07', '2022-08-07', '/home/x2zi6le57m15/public_html/admin/uploads/1654585887-IMG_20220607_122032_(1).jpg', 'probation', NULL, NULL, 0, 9, '0', '2022-06-07 12:41:27', NULL),
(36, 'Karan ', 'Sengar', 'karan.s@sociomark.in', '44f784b3a21be0d7ae28fb0c0bf8a18f', '9082273191', 'GVCPS8415L', '1998-05-16', 'm', 2, 2, '2022-02-25', '2022-08-25', '/home/x2zi6le57m15/public_html/demo_admin/uploads/1653992244-WhatsApp_Image_2022-05-31_at_3_46_55_PM.jpeg', 'probation', NULL, NULL, 2.5, 2, '0', '2022-05-31 15:47:24', '2022-06-07 04:51:19'),
(37, 'Kunal ', 'Mahajan ', 'kunal@sociomark.in', 'fc0b5107552615ef5d3c26d6ea7dc32e', '9594343921', 'CVSPM7641A', '1995-09-18', 'm', 1, 5, '2022-05-11', '2025-05-11', '/home/x2zi6le57m15/public_html/demo_admin/uploads/1653993181-photo_page-0001.jpg', 'employee', NULL, NULL, 10.5, 2, '1', '2022-05-31 16:03:01', '2024-11-05 11:54:07 AM'),
(46, 'Nikhil ', 'Dhotre ', 'nikhil@sociomark.in', '34550022d768b6e48e2c738e840d1987', '9867650642', 'FAQPD3291B', '2000-06-14', 'm', 2, 23, '2022-05-04', '2023-07-07', '/home/x2zi6le57m15/public_html/demo_admin/uploads/1653997287-WhatsApp_Image_2022-05-31_at_5_10_58_PM.jpeg', 'probation', NULL, NULL, 0, 2, '0', '2022-05-31 17:11:27', NULL),
(45, 'Anudnya', 'Shinde', 'accounts@sociomark.in', '096fb5854f64850233fddf38a1dc0ef3', '8976518187', 'BLVPM6333F', '1991-03-01', 'f', 7, 22, '2022-04-06', '2023-12-29', '/home/x2zi6le57m15/public_html/demo_admin/uploads/1653995645-WhatsApp_Image_2022-05-31_at_4_43_39_PM.jpeg', 'employee', NULL, NULL, -27.5, 2, '0', '2022-05-31 16:44:05', '2022-11-28 10:53:57 AM'),
(48, 'Harshal', 'Kawade', 'harshal.k@sociomark.in', '01f7d2434fcaf4dc07dd05ae2648984c', '7666073938', 'EQAPK0088L', '1998-09-14', 'm', 2, 18, '2022-03-21', '2022-06-21', '/home/x2zi6le57m15/public_html/admin/uploads/1654609293-WhatsApp_Image_2022-06-02_at_12_37_42_PM.jpeg', 'intern', NULL, NULL, 0, 2, '0', '2022-06-07 19:11:33', NULL),
(49, 'Naveen', 'Mani', 'naveen@sociomark.in', '31d1972c6ce5e24648ac5c5f4a4b1561', '9920736359', 'FWPPS4735G', '1996-02-12', 'm', 2, 24, '2022-06-06', '2023-06-06', '/home/x2zi6le57m15/public_html/admin/uploads/1654684343-Document_1654684257546_page-0001.jpg', 'employee', NULL, NULL, 0, 2, '0', '2022-06-08 16:02:23', NULL),
(50, 'Sharvari', 'Ayare', 'sharvari@sociomark.in', '5c11f33e92da964c32db54657b026b63', '8657606144', 'DJOPA0847K', '2001-03-27', 'f', 2, 18, '2022-06-13', '2022-09-13', '/home/x2zi6le57m15/public_html/admin/uploads/1655104816-WhatsApp_Image_2022-06-13_at_12_49_47_PM.jpeg', 'intern', NULL, NULL, 0, 2, '0', '2022-06-13 12:50:16', NULL),
(51, 'Rucha ', 'Durne ', 'rucha@sociomark.in', '0a62a410ebeb796ccb3b588ac269c8c1', '9324146460', 'GVZPD9506C', '2002-01-11', 'f', 2, 18, '2022-06-28', '2022-09-28', '/home/x2zi6le57m15/public_html/admin/uploads/1656400115-WhatsApp_Image_2022-06-28_at_12_34_49_PM_(1).jpeg', 'intern', NULL, NULL, 0, 2, '0', '2022-06-28 12:38:35', NULL),
(52, 'Akshay ', 'Kadam', 'akshay.k@sociomark.in', '938521e5e5bf96701dfdd20662483565', '8108068145', 'DLPPK6142G', '1995-12-12', 'm', 3, 21, '2022-07-04', '2022-11-30', '/home/x2zi6le57m15/public_html/admin/uploads/1656914286-WhatsApp_Image_2022-07-04_at_11_24_12_AM.jpeg', 'probation', NULL, NULL, 0, 1, '0', '2022-07-04 11:28:06', NULL),
(53, 'Akshay', 'Dhabale', 'akshay.d@sociomark.in', 'b18e801df77dfef537ab0a732218c5cd', '7774883085', 'CXLPD4072R', '1998-05-02', 'f', 3, 4, '2022-07-19', '2023-03-08', '/home/x2zi6le57m15/public_html/admin/uploads/1658298162-WhatsApp_Image_2022-07-20_at_11_49_07_AM.jpeg', 'probation', NULL, NULL, 6, 6, '0', '2022-07-20 11:52:42', '2023-01-18 11:18:20 AM'),
(54, 'Gunvant', 'Sarode ', 'gunvant@sociomark.in', '6f36228aad3dbd4363ed81170b2e4782', '9167235717', 'DNGPS1985A', '1991-06-04', 'f', 3, 3, '2022-07-28', '2023-07-28', '/home/x2zi6le57m15/public_html/admin/uploads/1659158496-WhatsApp_Image_2022-07-30_at_10_22_29_AM.jpeg', 'probation', NULL, NULL, 0, 1, '0', '2022-07-30 10:51:36', NULL),
(55, 'Mohak', 'Naik', 'mohak@sociomark.in', '01a1ea0337f6e7d8a7b7daa4515e9967', '9594096921', 'BDAPN3880R', '1995-06-14', 'm', 2, 24, '2022-07-18', '2023-03-03', '/home/x2zi6le57m15/public_html/admin/uploads/1659159048-WhatsApp_Image_2022-07-27_at_10_12_47_AM.jpeg', 'probation', NULL, NULL, 2, 0, '0', '2022-07-30 11:00:48', NULL),
(56, 'Apurva ', 'Shinde ', 'apurva@sociomark.in', 'f609a5cb5b3a40ce4dbe020b65133b1f', '9619734065', 'GYCPS5486J', '1998-05-24', 'f', 2, 2, '2022-08-17', '2023-03-13', '/home/x2zi6le57m15/public_html/admin/uploads/1660713829-WhatsApp_Image_2022-08-17_at_10_49_31_AM.jpeg', 'probation', NULL, NULL, 5, 2, '0', '2022-08-17 10:53:49', '2023-02-01 03:21:12 PM'),
(67, 'Vaishnavi ', 'Bagve', 'vaishnavi@sociomark.in', 'af6a99c212c0313a2a6bff1992f03e24', '8779640047', 'ECDPB8864E', '2000-09-16', 'f', 2, 2, '2022-10-17', '2023-12-29', '/home/x2zi6le57m15/public_html/admin/uploads/1665989810-WhatsApp_Image_2022-10-17_at_12_22_46_PM.jpeg', 'probation', NULL, NULL, 0, 2, '0', '2022-10-17 12:26:50', '2023-10-03 02:59:28 PM'),
(66, 'Humaid', 'Shaikh', 'humaid@sociomark.in', 'e16a1b2835d3d409277fdc50451317ac', '7738066669', 'OFGPS1450K', '1999-10-04', 'm', 2, 23, '2022-10-13', '2025-01-23', '/home/x2zi6le57m15/public_html/admin/uploads/1665644796-WhatsApp_Image_2022-10-13_at_12_35_51_PM.jpeg', 'employee', NULL, NULL, 7.5, 2, '1', '2022-10-13 12:36:36', '2023-11-04 03:42:01 PM'),
(65, 'Vishal ', 'Sharma ', 'Vishal@sociomark.in', 'b69d739ef9c7ee8c0ce29f069392cf80', '1234567891', 'KUQPK7922F', '1997-06-12', 'm', 3, 21, '2022-09-01', '2023-09-30', '/home/x2zi6le57m15/public_html/admin/uploads/1665140415-All_product_banner.jpg', 'employee', NULL, NULL, 11, 26, '0', '2022-10-07 16:30:15', NULL),
(63, 'Khizar', 'Khot', 'khizar@sociomark.in', '9e8b3609d6cd116027d4ae450cf7b01d', '8767809779', 'CLCPK5805Q', '1993-08-20', 'm', 2, 28, '2022-09-12', '2024-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1662981540-WhatsApp_Image_2022-09-12_at_11_57_43_AM.jpeg', 'employee', NULL, NULL, 0.5, 2, '0', '2022-09-12 16:49:00', '2023-02-17 02:43:25 PM'),
(64, 'Omkar', 'Gadge ', 'omkar@sociomark.in', '586c06b7688ad00100f83b10c2fcc71b', '9833431289', 'COWPG9705G', '1998-06-01', 'm', 2, 2, '2022-09-12', '2023-12-22', '/home/x2zi6le57m15/public_html/admin/uploads/1663668237-WhatsApp_Image_2022-09-20_at_10_39_12_AM.jpeg', 'probation', NULL, NULL, 0, 2, '0', '2022-09-20 15:33:57', '2023-02-21 02:59:36 PM'),
(62, 'Deepa', 'Dubey ', 'deepa@sociomark.in', '3810fab8fabd90336f33259bf55bbc26', '7506247554', 'GRTPD3148C', '2000-07-07', 'f', 2, 21, '2022-09-08', '2022-12-16', '/home/x2zi6le57m15/public_html/admin/uploads/1662615847-WhatsApp_Image_2022-09-08_at_10_58_40_AM1.jpeg', 'probation', NULL, NULL, 4, 9, '0', '2022-09-08 11:14:07', '2022-11-28 10:54:04 AM'),
(68, 'Ashwaghosh', 'Bansode', 'ashwaghosh@sociomark.in', 'a0d9c72a1856a69fa7b069fd5be20d43', '8454816589', 'EDGPB3250Q', '1999-09-29', 'm', 2, 2, '2022-10-17', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1666156396-WhatsApp_Image_2022-10-18_at_10_40_44_AM.jpeg', 'employee', NULL, NULL, 18, 2, '1', '2022-10-19 10:43:16', '2024-09-16 10:51:52 AM'),
(69, 'Nutan ', 'Indulkar', 'nutan@sociomark.in', '8ede4c269ebc2e42337c02add879f1d9', '9137555745', 'AKCPI4017M', '1999-01-27', 'f', 3, 4, '2022-11-02', '2024-02-29', '/home/x2zi6le57m15/public_html/admin/uploads/1667367174-WhatsApp_Image_2022-11-02_at_11_02_19_AM.jpeg', 'employee', NULL, NULL, 0, 1, '0', '2022-11-02 11:02:54', '2023-10-31 02:29:49 PM'),
(94, 'Simran', 'Jain', 'pr@sociomark.in', '5308d9c4af8e715b18585a512e4887ea', '9930438905', 'ATIPJ1643F', '1997-03-30', 'f', 2, 26, '2023-08-01', '2023-08-22', '/home/x2zi6le57m15/public_html/admin/uploads/1690965781-Scanned_Documents_page-0001.jpg', 'probation', NULL, NULL, 0, 2, '0', '2023-08-02 14:13:02', NULL),
(70, 'Prakriti ', 'Yadav ', 'prakriti@sociomark.in', '9b6dcbe1ba58bba25fb3c57f0888cf21', '8369441525', 'AZDPY3649M', '1999-09-09', 'f', 3, 21, '2022-11-16', '2023-03-10', '/home/x2zi6le57m15/public_html/admin/uploads/1668580639-WhatsApp_Image_2022-11-16_at_11_53_35_AM.jpeg', 'probation', NULL, NULL, 1, 9, '0', '2022-11-16 12:07:19', '2023-01-23 08:16:29 PM'),
(71, 'Anirudhsathya ', 'Raju Iyer ', 'anirudh@sociomark.in', 'd99e7170009a7467cc77d8fffb18c7ce', '7039604638', 'AKQPI5822G', '2000-02-29', 'm', 3, 4, '2022-11-14', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1668581047-20210201_174758.jpg', 'employee', NULL, NULL, 28, 1, '1', '2022-11-16 12:14:07', '2024-08-28 11:04:00 AM'),
(73, 'Anushka', 'Gaikwad', 'anushka@sociomark.in', 'e6be6253933b9a6229b6ceb44775b4b2', '8097190885', 'BWIPG0896F', '1998-01-04', 'f', 3, 4, '2022-11-21', '2024-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1669008941-photograpgh.jpg', 'employee', NULL, NULL, 10, 1, '1', '2022-11-21 11:05:41', '2024-06-24 07:37:24 PM'),
(74, 'Pooja ', 'Juwatkar', 'pooja@sociomark.in', '8107fdb34a46753e7da26444b31ccc4e', '8693825078', 'BMFPJ9045L', '1999-02-05', 'f', 2, 2, '2022-11-21', '2024-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1669010142-WhatsApp_Image_2022-11-21_at_11_15_37_AM.jpeg', 'employee', NULL, NULL, 0.5, 2, '0', '2022-11-21 11:25:42', '2023-11-06 04:52:44 PM'),
(75, 'Dakshata', 'Parkar', 'dakshata@sociomark.in', 'fa7360159932b086c7bf65cdcc0f1dc1', '8291766768', 'FFQPP7667G', '2001-01-02', 'f', 3, 25, '2022-12-05', '2024-02-29', '/home/x2zi6le57m15/public_html/admin/uploads/1670316525-WhatsApp_Image_2022-12-06_at_10_59_46_AM.jpeg', 'employee', NULL, NULL, 3, 1, '0', '2022-12-06 14:18:45', '2023-10-09 02:14:25 PM'),
(77, 'Prachi ', 'Vishwasrao', 'prachi@sociomark.in', 'ecc06f14c3a454919e5322466479c817', '7738386146', 'CBKPV2948F', '2000-12-01', 'f', 2, 2, '2022-12-26', '2024-12-26', '/home/x2zi6le57m15/public_html/admin/uploads/1672038735-WhatsApp_Image_2022-12-26_at_12_34_25_PM.jpeg', 'employee', NULL, NULL, 7.5, 2, '1', '2022-12-26 12:42:15', '2024-05-06 03:29:27 PM'),
(81, 'Alfisha ', 'Khan ', 'alfisha@sociomark.in', 'db1e1a305ac1e2821042d54a89ff38e7', '9602233559', 'EDCPK7925M', '1997-06-06', 'f', 2, 26, '2023-01-03', '2023-07-31', '/home/x2zi6le57m15/public_html/admin/uploads/1672896198-WhatsApp_Image_2023-01-05_at_10_51_58_AM.jpeg', 'probation', NULL, NULL, 0, 2, '0', '2023-01-05 10:53:18', NULL),
(83, 'Aaryan', 'Sonsurkar', 'aaryan@sociomark.in', '0cc4dc371900bf130cfb082a45978b5d', '8454050666', 'LWTPS5542P', '2001-06-16', 'm', 3, 21, '2023-02-01', '2023-09-11', '/home/x2zi6le57m15/public_html/admin/uploads/1675231435-WhatsApp_Image_2023-02-01_at_11_29_12_AM.jpeg', 'probation', NULL, NULL, 0, 9, '0', '2023-02-01 11:33:55', '2023-04-24 08:29:02 PM'),
(87, 'Bhavesh ', 'Jame ', 'bhavesh@sociomark.in', '5194b37367cf6b0eb7d872b93f2c4b0c', '8693089196', 'ARIPJ3969Q', '1993-07-03', 'm', 2, 24, '2023-03-02', '2023-09-30', '/home/x2zi6le57m15/public_html/admin/uploads/1677736653-WhatsApp_Image_2023-03-02_at_11_21_08_.jpeg', 'probation', NULL, NULL, 0, 2, '0', '2023-03-02 11:27:33', NULL),
(86, 'Varshith', 'Shetty', 'varshith@sociomark.in', 'e49d4d9e8272ead4d1662c86043ecd4e', '8591848535', 'NUPPS4212C', '2001-02-05', 'm', 2, 18, '2023-02-22', '2023-08-22', '/home/x2zi6le57m15/public_html/admin/uploads/1677043734-WhatsApp_Image_2023-02-22_at_10_51_35_AM.jpeg', 'intern', NULL, NULL, 0, 2, '0', '2023-02-22 10:58:54', NULL),
(88, 'Tanmay', 'Kamale', 'tanmay@sociomark.in', '8e49817503a57f6aea8ef1a8f872e03a', '7045801345', 'JBQPK0487R', '2001-10-11', 'm', 3, 21, '2023-04-17', '2023-09-30', '/home/x2zi6le57m15/public_html/admin/uploads/1682314672-APZNZA~1_page-0001.jpg', 'probation', NULL, NULL, 0, 1, '0', '2023-04-24 11:07:52', NULL),
(92, 'Siddhant ', 'Kedare', 'siddhant@sociomark.in', 'e7ffa9223bbb0187bb97b66a345927a9', '8689842513', 'HYEPK8803C', '2000-10-06', 'm', 2, 19, '2023-06-20', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1687257109-WhatsApp_Image_2023-06-20_at_3_21_47_PM.jpeg', 'probation', NULL, NULL, 6, 2, '1', '2023-06-20 16:01:49', NULL),
(91, 'Atharva', 'Kadam ', 'atharva@sociomark.in', '6e320e92d882dce4d9efd72f3f0ebded', '9967823147', 'IASPK3851B', '2001-01-11', 'm', 3, 4, '2023-05-17', '2023-09-30', '/home/x2zi6le57m15/public_html/admin/uploads/1684301720-WhatsApp_Image_2023-05-17_at_11_02_32_AM.jpeg', 'probation', NULL, NULL, 0, 1, '0', '2023-05-17 11:05:20', NULL),
(93, 'Rachana ', 'Mhatre ', 'rachana@sociomark.in', 'b69d1bccfa1d942b230e148616bc2d61', '7875153382', 'DYNPP3439L', '1996-04-25', 'f', 2, 27, '2023-07-17', '2024-09-06', '/home/x2zi6le57m15/public_html/admin/uploads/1689572741-WhatsApp_Image_2023-07-17_at_11_14_10_AM.jpeg', 'probation', NULL, NULL, 4.5, 2, '0', '2023-07-17 11:15:41', NULL),
(95, 'Hemant ', 'Karekar', 'hemant@sociomark.in', '3158caf61628ce51b2e5fef1095180bf', '8689862375', 'GQAPK8221H', '1999-07-13', 'm', 1, 1, '2023-08-03', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1691139951-201516_PHOTO.jpg', 'probation', NULL, NULL, 13.5, 2, '1', '2023-08-04 14:35:54', '2024-08-29 11:26:38 AM'),
(96, 'Mandar', 'Sarnobat', 'mandar@sociomark.in', '71597e178fa7ecda4746b43971db54b4', '8879622010', 'LBVPS5732C', '1999-02-03', 'm', 2, 2, '2023-08-22', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1692795173-WhatsApp_Image_2023-08-23_at_5_56_41_PM.jpeg', 'probation', NULL, NULL, 7, 2, '0', '2023-08-23 18:22:53', '2023-12-29 05:48:14 PM'),
(97, 'Mandar', 'Sarnobat', 'mandar@sociomark.in', '71597e178fa7ecda4746b43971db54b4', '8879622010', 'LBVPS5732C', '1999-02-03', 'm', 2, 2, '2023-08-22', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1692795182-WhatsApp_Image_2023-08-23_at_5_56_41_PM.jpeg', 'probation', NULL, NULL, 0, 2, '0', '2023-08-23 18:23:02', NULL),
(98, 'Shravani', 'Kharpude', 'shravani@sociomark.in', '752429256fefc291878d985eed67c1df', '9372043942', 'IWDPK0259N', '2001-07-21', 'f', 3, 21, '2023-08-28', '2024-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1693203298-WhatsApp_Image_2023-08-28_at_11_44_07_AM.jpeg', 'probation', NULL, NULL, 0, 9, '0', '2023-08-28 11:44:58', NULL),
(99, 'Shravani', 'Kharpude', 'shravani@sociomark.in', '752429256fefc291878d985eed67c1df', '9372043942', 'IWDPK0259N', '2001-07-21', 'f', 3, 21, '2023-08-28', '2023-09-28', '/home/x2zi6le57m15/public_html/admin/uploads/1693203311-WhatsApp_Image_2023-08-28_at_11_44_07_AM.jpeg', 'probation', NULL, NULL, 0, 9, '0', '2023-08-28 11:45:11', '2023-09-22 07:38:33 PM'),
(100, 'Sonali ', 'Jadhav ', 'sonali@sociomark.in', '6a4f592994450672af0ecd689baa77ad', '9967635282', 'BRDPJ6678J', '2000-03-29', 'f', 2, 24, '2023-08-24', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1693203816-WhatsApp_Image_2023-08-24_at_11_18_36_AM.jpeg', 'probation', NULL, NULL, 4, 2, '1', '2023-08-28 11:53:36', NULL),
(101, 'Yash ', 'Gawde', 'pr@sociomark.in', 'ec17b1b34088b4e58b841b9f44af9037', '7045512044', 'BUAPG3452P', '2001-04-12', 'm', 2, 26, '2023-09-12', '2024-04-18', '/home/x2zi6le57m15/public_html/admin/uploads/1694500764-IMG_20230808_181553.jpg', 'probation', NULL, NULL, 7, 2, '0', '2023-09-12 12:09:24', NULL),
(102, 'Kiran ', 'Pagare ', 'pagarekiran2002@gmail.com', 'aab86657267b6e58bf8974b2534adb15', '9323918188', 'GNYPP5594P', '2002-12-20', 'f', 2, 18, '2023-08-23', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1695625714-Screenshot_2023-09-25_123738.png', 'probation', NULL, NULL, 7.5, 77, '1', '2023-09-25 12:38:34', '2024-06-26 08:59:08 AM'),
(103, 'tanay', 'More ', 'tanaymore03@gmail.com', 'f58ba1aba3a4f5ba933d9ed5f515cd74', '8454883197', 'EHLPM6660Q', '1999-10-03', 'm', 2, 18, '2023-08-24', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1695625988-Adobe_Scan_11-Feb-2022_(1)_1~2.jpg', 'intern', NULL, NULL, 10, 77, '1', '2023-09-25 12:43:08', '2024-05-07 10:39:04 AM'),
(104, 'Varshith', 'Shetty ', 'Varshithshetty810@gmail.com', 'e49d4d9e8272ead4d1662c86043ecd4e', '8591848535', 'NUPPS4212C', '2001-02-05', 'm', 2, 18, '2023-06-12', '2023-11-10', '/home/x2zi6le57m15/public_html/admin/uploads/1696513495-WhatsApp_Image_2023-10-05_at_2_31_10_PM.jpeg', 'intern', NULL, NULL, 0, 2, '0', '2023-10-05 19:14:55', NULL),
(105, 'Rishi ', 'Vishwakarma ', 'rishi@sociomark.in', '94a55e7966b04d16641d6a6ed6ee6bf7', '9372432501', 'CBMPV7414A', '2001-06-27', '', 2, 24, '2023-12-04', '2024-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1701762824-WhatsApp_Image_2023-12-05_at_10_04_56_AM.jpeg', 'probation', NULL, NULL, 10, 100, '1', '2023-12-05 13:23:44', NULL),
(106, 'Rishi ', 'Vishwakarma ', 'rishi@sociomark.in', '94a55e7966b04d16641d6a6ed6ee6bf7', '9372432501', 'CBMPV7414A', '2001-06-27', '', 2, 24, '2023-12-04', '2024-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1701762833-WhatsApp_Image_2023-12-05_at_10_04_56_AM.jpeg', 'probation', NULL, NULL, 0, 100, '0', '2023-12-05 13:23:53', NULL),
(107, 'Rishi ', 'Vishwakarma ', 'rishi@sociomark.in', '94a55e7966b04d16641d6a6ed6ee6bf7', '9372432501', 'CBMPV7414A', '2001-06-27', '', 2, 24, '2023-12-04', '2024-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1701762842-WhatsApp_Image_2023-12-05_at_10_04_56_AM.jpeg', 'probation', NULL, NULL, 0, 100, '0', '2023-12-05 13:24:02', NULL),
(108, 'Ishwari', 'Shahasane', 'ishwari@sociomark.in', '09261bce7f0f9c047a1428f4e44115e3', '8828358567', 'IPBPS7198P', '2000-03-30', 'f', 2, 2, '2023-12-11', '2024-05-31', '/home/x2zi6le57m15/public_html/admin/uploads/1702292453-WhatsApp_Image_2023-12-11_at_4_25_39_PM.jpeg', 'probation', NULL, NULL, 0, 68, '0', '2023-12-11 16:30:53', '2024-03-12 10:50:44 AM'),
(109, 'Amit ', 'Sonkusale', 'amit@sociomark.in', 'bc64b80b96813c14e8d9ef68a198b289', '9029177520', 'LNUPS3971C', '2001-03-08', 'm', 3, 4, '2023-12-12', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1702365250-WhatsApp_Image_2023-12-12_at_11_57_02_AM.jpeg', 'probation', NULL, NULL, 0, 1, '0', '2023-12-12 12:44:10', NULL),
(110, 'Amit ', 'Sonkusale', 'amit@sociomark.in', 'bc64b80b96813c14e8d9ef68a198b289', '9029177520', 'LNUPS3971C', '2001-03-08', 'm', 3, 4, '2023-12-12', '2024-06-10', '/home/x2zi6le57m15/public_html/admin/uploads/1702365259-WhatsApp_Image_2023-12-12_at_11_57_02_AM.jpeg', 'probation', NULL, NULL, 1.5, 7, '0', '2023-12-12 12:44:19', '2024-05-27 12:25:26 PM'),
(111, 'Varsha ', 'Kapase', 'accounts@sociomark.in', '422eef07b967cd33c8609bd1bd598faf', '8262028737', 'MPWPK2707P', '2001-05-29', 'f', 7, 22, '2023-12-18', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1702892558-WhatsApp_Image_2023-12-18_at_3_08_35_PM.jpeg', 'probation', NULL, NULL, 1.5, 2, '1', '2023-12-18 15:12:38', NULL),
(112, 'Anab ', 'Khan ', 'anab@sociomark.in', '60dd645eeaa4b9ed2d5820c405319459', '9769680584', 'JVRPK7648F', '1999-06-19', 'm', 2, 19, '2024-01-01', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1704087809-WhatsApp_Image_2024-01-01_at_11_09_22_AM.jpeg', 'probation', NULL, NULL, 8, 2, '1', '2024-01-01 11:13:29', '2024-04-19 12:41:03 AM'),
(113, 'Kaushal', 'Thakur', 'kaushal@sociomark.in', '5152ce8ebf5aa1c83eab83be341b89ee', '8433757451', 'BXOPT6689L', '2001-12-03', 'm', 2, 18, '2024-01-02', '2024-01-23', '/home/x2zi6le57m15/public_html/admin/uploads/1704176680-WhatsApp_Image_2024-01-02_at_11_41_12_AM.jpeg', 'intern', NULL, NULL, 0, 2, '0', '2024-01-02 11:54:40', NULL),
(118, 'Chotelal', 'Singh', 'schhotelal405@gmail.com', '41d124711f0b67a4933d398936c5c5a4', '8828183327', 'LUYPS9201C', '2000-01-01', 'm', 2, 18, '2023-12-20', '2024-09-30', '/home/x2zi6le57m15/public_html/admin/uploads/1705650574-WhatsApp_Image_2024-01-19_at_12_43_22_PM.jpeg', 'intern', NULL, NULL, 0, 100, '0', '2024-01-19 13:19:34', NULL),
(114, 'Misam ', 'Ahmed', 'misam@sociomark.in', 'dd9f858a097c5aaa218e7f1965c5aafd', '9967633066', 'DUUPA2208H', '2001-10-15', 'm', 2, 2, '2024-01-11', '2025-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1704953921-WhatsApp_Image_2024-01-11_at_11_47_38_AM.jpeg', 'probation', NULL, NULL, 5.5, 9, '1', '2024-01-11 11:48:41', '2024-05-28 11:04:07 AM'),
(115, 'Misam ', 'Ahmed', 'misam@sociomark.in', 'dd9f858a097c5aaa218e7f1965c5aafd', '9967633066', 'DUUPA2208H', '2001-10-15', 'm', 2, 2, '2024-01-11', '2025-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1704953932-WhatsApp_Image_2024-01-11_at_11_47_38_AM.jpeg', 'probation', NULL, NULL, 0, 9, '0', '2024-01-11 11:48:52', NULL),
(116, 'Prachi ', 'Patil ', 'pprachi947@gmail.com', '1169a3c898052a058de1de8c10ec519e', '7208642501', 'GAAPP5597R', '2002-10-30', 'f', 2, 18, '2024-01-11', '2024-07-11', '/home/x2zi6le57m15/public_html/admin/uploads/1704965180-Snapchat-2053571085.jpg', 'intern', NULL, NULL, 4.5, 68, '1', '2024-01-11 14:56:20', '2024-03-27 10:06:01 AM'),
(117, 'Akshata ', 'Zantye ', 'akshatazantye@gmail.com', '5fba5fc91dcd99a7c6ffc6c0542aead7', '9619364638', 'ADKPZ2201P', '2002-07-29', 'f', 2, 18, '2024-01-15', '2025-01-10', '/home/x2zi6le57m15/public_html/admin/uploads/1705298136-WhatsApp_Image_2024-01-15_at_11_17_18_AM.jpeg', 'intern', NULL, NULL, 0, 77, '1', '2024-01-15 11:25:36', '2024-04-24 11:30:37 AM'),
(119, 'Justin ', 'Varghese', 'varghesejustin04@gmail.com', 'af1666ef42b97aa1da3528d5d57974c5', '9372875150', 'CFFPV1643L', '1999-12-08', 'm', 2, 18, '2024-01-16', '2024-02-09', '/home/x2zi6le57m15/public_html/admin/uploads/1705666615-WhatsApp_Image_2024-01-19_at_2_55_54_PM.jpeg', 'intern', NULL, NULL, 0, 2, '0', '2024-01-19 17:46:55', NULL),
(120, 'Padam ', 'Damai', 'padam.sociomark@gmail.com', '8c84a63f58dcb3e2aa325bf2e4199b37', '9136740697', 'PIPPS0154B', '1999-08-15', 'm', 3, 17, '2024-02-19', '2024-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1708494014-WhatsApp_Image_2024-02-21_at_11_08_37_AM.jpeg', 'probation', NULL, NULL, 9, 7, '1', '2024-02-21 11:10:14', NULL),
(121, 'Deepali ', 'Kolhe ', 'deepali.sociomark@gmail.com', '7b670a7acb3ae6e45ef1871cfea59145', '9321433266', 'KKUPK3193N', '1999-10-05', 'f', 3, 25, '2024-02-19', '2024-04-12', '/home/x2zi6le57m15/public_html/admin/uploads/1708663830-WhatsApp_Image_2024-02-23_at_10_11_34_AM.jpeg', 'probation', NULL, NULL, 0, 1, '0', '2024-02-23 10:20:30', '2024-03-19 02:45:39 PM'),
(122, 'Omkar ', 'Borchate ', 'omkardb41@gmail.com', '38a72e046f7d0d5c2dda6c8ba2bdd320', '8828565154', 'FAYPB8808N', '2002-02-04', 'm', 2, 18, '2024-03-13', '2024-07-19', '/home/x2zi6le57m15/public_html/admin/uploads/1710333456-WhatsApp_Image_2024-03-13_at_11_26_06_AM.jpeg', 'intern', NULL, NULL, 0, 68, '0', '2024-03-13 18:07:36', '2024-05-07 05:02:42 PM'),
(123, 'Rahul', 'Poojary', 'rahulsociomark@gmail.com', '890777c6d23ccd3ed6018c351b7553b5', '7304366138', 'GPRPP8822M', '1999-05-27', 'm', 3, 4, '2024-03-14', '2030-12-30', '/home/x2zi6le57m15/public_html/admin/uploads/1710478466-WhatsApp_Image_2024-03-14_at_12_12_40_PM_(1).jpeg', 'probation', NULL, NULL, 10.5, 73, '1', '2024-03-15 10:24:26', '2024-08-05 11:51:50 AM'),
(124, 'Kunal', 'Katkar', 'kunal.sociomark@gmail.com', '0aa434f30369ceef77ba73d8a3e3f490', '7738744797', 'GNYPK0821C', '1999-08-15', 'm', 3, 25, '2024-04-01', '2026-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1712207929-WhatsApp_Image_2024-04-04_at_10_31_46_AM.jpeg', 'probation', NULL, NULL, 2, 73, '0', '2024-04-04 10:48:49', '2024-04-29 06:21:58 PM'),
(126, 'Viraj', 'Toradmal', 'viraj.sociomark@gmail.com', '911e5049cc6a45f426a00a926fcc1e4d', '8369124899', 'CRCPT1779C', '2005-04-07', 'm', 2, 35, '2024-04-22', '2025-03-31', '/home/x2zi6le57m15/public_html/admin/uploads/1714034964-WhatsApp_Image_2024-04-25_at_2_13_49_PM.jpeg', 'intern', NULL, NULL, 0, 66, '0', '2024-04-25 14:19:24', NULL),
(127, 'Neha', 'Gunjal ', 'neha.sociomark@gmail.com', 'a6bfbef8ffbb370dcd063422d174c74f', '9373583256', 'BSBPG7652N', '1999-09-02', 'f', 2, 18, '2024-05-13', '2024-09-16', '/home/x2zi6le57m15/public_html/admin/uploads/1715584407-WhatsApp_Image_2024-05-13_at_12_38_38_PM.jpeg', 'intern', NULL, NULL, 2, 68, '0', '2024-05-13 12:43:27', '2024-07-08 01:09:31 PM'),
(129, 'Poonam ', 'Dalvi ', 'poonam.sociomark@gmail.com', 'c09ebfded282d68654d2393d9a7f4e55', '9082084798', 'GQSPD2406P', '1999-02-05', 'f', 2, 37, '2024-07-15', '2024-09-10', '/home/x2zi6le57m15/public_html/admin/uploads/1721289129-WhatsApp_Image_2024-07-18_at_1_09_48_PM.jpeg', 'intern', NULL, NULL, 0, 68, '0', '2024-07-18 13:22:09', NULL),
(130, 'Krishna', 'Dabi', 'krishna.sociomark@gmail.com', 'c55b7e468e202d17a503242e55e37503', '9326170865', 'CFXPD2086P', '1997-02-17', 'm', 3, 21, '2024-07-22', '2025-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1721637934-WhatsApp_Image_2024-07-22_at_2_13_46_PM.jpeg', 'probation', NULL, NULL, 0, 9, '1', '2024-07-22 14:15:34', NULL),
(131, 'Sharvari', 'Saroj', 'sharvari.sociomark@gmail.com', '15fbd0298aca099f8abe9888f0051025', '7738801737', 'MHHPS8282G', '2002-08-16', 'f', 3, 25, '2024-08-01', '2025-08-31', '/home/x2zi6le57m15/public_html/payroll/uploads/1722496534-WhatsApp_Image_2024-08-01_at_12_32_35_PM.jpeg', 'probation', NULL, NULL, 2.5, 73, '1', '2024-08-01 12:45:34', NULL),
(135, 'Siddhesh', 'Suryawanshi ', 'siddhesh.sociomark@gmail.com', 'd7cbb52f845688efe85973c637be1568', '9152797676', 'KYDPS4308L', '2000-05-02', 'm', 2, 2, '2024-09-02', '2026-03-31', '/home/x2zi6le57m15/public_html/payroll/uploads/1725508857-IMG_20230724_202125_586.jpg', 'probation', NULL, NULL, 0, 68, '1', '2024-09-05 09:30:57', NULL),
(133, 'Shilratna', 'Shinde', 'shilratna.sociomark@gmail.com', 'd81ba490708d402f1c42c311f6fb4a2a', '9022068182', 'NUTPS4228E', '2001-07-06', 'm', 3, 4, '2024-08-01', '2024-10-01', '/home/x2zi6le57m15/public_html/payroll/uploads/1722496748-WhatsApp_Image_2024-08-01_at_12_33_16_PM.jpeg', 'probation', NULL, NULL, 0.5, 73, '0', '2024-08-01 12:49:08', NULL),
(136, 'Aniket ', 'Belekar', 'aniket.sociomark@gmail.com', '393895fb1ec56be1e24df7a6bb49deb8', '9004359505', 'FRFPB6892E', '2003-03-28', 'm', 3, 4, '2024-10-10', '2025-12-31', '/home/x2zi6le57m15/public_html/admin/uploads/1730695440-WhatsApp_Image_2024-11-04_at_10_06_35_AM.jpeg', 'probation', NULL, NULL, 0.5, 73, '1', '2024-11-04 10:14:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `app_company_holidays`
--

CREATE TABLE `app_company_holidays` (
  `id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `from_date` varchar(100) DEFAULT NULL,
  `to_date` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_company_holidays`
--

INSERT INTO `app_company_holidays` (`id`, `app_id`, `title`, `from_date`, `to_date`, `created_at`) VALUES
(1, 1, 'Republic Day', '26-01', '26-01', '2024-01-01 07:04:51'),
(2, 1, 'Holi / Dhulandi', '25-03', '25-03', '2024-01-01 07:08:38'),
(3, 1, 'Gudi Padwa', '09-04', '09-04', '2024-01-01 07:08:38'),
(4, 1, 'Maharashtra Day', '01-05', '01-05', '2024-01-01 07:10:04'),
(5, 1, 'Independence Day', '15-06', '15-06', '2024-01-01 07:10:04'),
(6, 1, 'Ganesh Chaturthi', '07-09', '07-09', '2024-01-01 07:10:04'),
(7, 1, 'Gandhi Jayanti', '02-10', '02-10', '2024-01-01 07:10:04'),
(8, 1, 'Diwali', '31-10', '31-10', '2024-01-01 07:10:04'),
(9, 1, 'Laxmi Pujan / Diwali', '01-11', '01-11', '2024-01-01 07:10:04'),
(10, 1, 'Christmas', '25-12', '25-12', '2024-01-01 07:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `app_company_roles`
--

CREATE TABLE `app_company_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_company_roles`
--

INSERT INTO `app_company_roles` (`id`, `name`, `created_at`) VALUES
(1, 'admin', '2024-06-10 13:16:30'),
(2, 'hr', '2024-06-10 13:16:30'),
(3, 'employee', '2024-06-10 13:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `app_company_settings`
--

CREATE TABLE `app_company_settings` (
  `id` int(11) NOT NULL,
  `app_id` varchar(64) NOT NULL,
  `settings_key` text NOT NULL,
  `settings_value` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_company_settings`
--

INSERT INTO `app_company_settings` (`id`, `app_id`, `settings_key`, `settings_value`, `created_at`) VALUES
(1, '1', '', '', '2024-05-10 05:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `app_salary_components`
--

CREATE TABLE `app_salary_components` (
  `id` int(11) NOT NULL,
  `component_name` varchar(200) NOT NULL,
  `component_type` varchar(100) NOT NULL,
  `calculations` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_subscriptions`
--

CREATE TABLE `app_subscriptions` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `att_year` varchar(100) NOT NULL,
  `att_month` varchar(100) NOT NULL,
  `present_days` varchar(100) NOT NULL,
  `paid_leaves` varchar(100) NOT NULL,
  `leaves_taken` float DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `changes_history`
--

CREATE TABLE `changes_history` (
  `id` int(11) NOT NULL,
  `change_key` varchar(255) DEFAULT NULL,
  `change_by` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `added_at` datetime DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '1=present,0=Not present',
  `logo` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_leaves`
--

CREATE TABLE `client_leaves` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `total_leaves` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `sick_leave` int(11) DEFAULT NULL,
  `paid_leave` int(11) DEFAULT NULL,
  `casual_leave` int(11) DEFAULT NULL,
  `earned_leave` int(11) DEFAULT NULL,
  `paternity_leave` int(11) DEFAULT NULL,
  `maternity_leave` int(11) DEFAULT NULL,
  `privilege_leave` int(11) DEFAULT NULL,
  `medical_leave` int(11) DEFAULT NULL,
  `date` varchar(100) NOT NULL,
  `updated_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_leave_value`
--

CREATE TABLE `client_leave_value` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `start_date` varchar(100) DEFAULT NULL,
  `end_date` varchar(100) DEFAULT NULL,
  `sick_leave` varchar(50) DEFAULT NULL,
  `paid_leave` varchar(50) DEFAULT NULL,
  `casual_leave` varchar(50) DEFAULT NULL,
  `earned_leave` varchar(50) DEFAULT NULL,
  `medical_leave` varchar(50) DEFAULT NULL,
  `maternity_leave` varchar(50) DEFAULT NULL,
  `paternity_leave` varchar(50) DEFAULT NULL,
  `privilege_leave` varchar(50) DEFAULT NULL,
  `total_leaves` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `updated_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_salary_heads`
--

CREATE TABLE `client_salary_heads` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL COMMENT '1 for active, 0 for inactive',
  `pf` varchar(25) DEFAULT NULL,
  `epf` varchar(25) DEFAULT NULL,
  `esic` varchar(25) DEFAULT NULL,
  `hra` varchar(25) DEFAULT NULL,
  `conveyance` varchar(25) DEFAULT NULL,
  `special_allowance` varchar(25) DEFAULT NULL,
  `medical_allowance` varchar(25) DEFAULT NULL,
  `health_insurance` varchar(25) DEFAULT NULL,
  `pt` varchar(25) DEFAULT NULL,
  `tds` varchar(25) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `updated_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comp_off`
--

CREATE TABLE `comp_off` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `comp_off` varchar(100) NOT NULL,
  `compoff_date` datetime NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT ' 0 = pending , 1= approved , 2= reject',
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept_name`, `app_id`, `created_at`) VALUES
(1, 'IT', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22'),
(2, 'Marketing', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22'),
(3, 'Creative', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22'),
(4, 'HR ', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22'),
(5, 'Legal', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22'),
(6, 'Founder', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22'),
(7, 'Accounts ', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `designation` varchar(255) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `app_id`, `designation`, `dept_id`) VALUES
(1, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Sr. Web Developer', 1),
(2, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Social Media Executive', 2),
(3, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Sr. Graphic Designer', 3),
(4, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Graphic Designer', 3),
(5, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Web Developer', 1),
(6, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Sr. Social Media Executive', 2),
(7, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'SEO Specialist', 2),
(17, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Executive - Motion Graphic Designer', 3),
(9, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'CEO & Co-founder', 6),
(10, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'CEO & Creative Director', 6),
(11, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Co-Founder', 6),
(12, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Executive - Motion Graphic Designer & Photographer', 3),
(13, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Sr. Motion Graphic Designer & Illustrator', 3),
(14, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Sr. Motion Graphic Designer', 3),
(15, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Sr. Content Writer', 3),
(16, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Managing Director', 6),
(18, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Intern', 2),
(19, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Executive - SEM', 2),
(20, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'HR Executive ', 4),
(21, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Content Writer', 3),
(22, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Accounts Executive ', 7),
(23, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Business Development Executive ', 2),
(24, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'SEO Executive ', 2),
(25, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Illustrator', 3),
(26, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Public Relations ', 2),
(27, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Ecommerce- Executive', 2);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `app_id` mediumtext NOT NULL,
  `aadhar_card` varchar(50) DEFAULT NULL,
  `proof_type` varchar(50) DEFAULT NULL,
  `pan_card` varchar(50) DEFAULT NULL,
  `last_marksheet` varchar(50) DEFAULT NULL,
  `doctor_certificate` varchar(50) DEFAULT NULL,
  `resigning_letter` varchar(50) DEFAULT NULL,
  `offer_letter` varchar(50) DEFAULT NULL,
  `monthly_salary_slip` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `half_day`
--

CREATE TABLE `half_day` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `app_id` mediumtext NOT NULL,
  `half_day_date` date DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0=pending , 1= approved , 2 = rejected'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `emp_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `total_days` int(11) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `sl` varchar(30) DEFAULT NULL,
  `pl` varchar(30) DEFAULT NULL,
  `wfh` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0 = pending, 1 = approved ,2 = reject',
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incentive`
--

CREATE TABLE `incentive` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amt` float DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `added_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landing_application_enquiries`
--

CREATE TABLE `landing_application_enquiries` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `work_email` varchar(200) NOT NULL,
  `max_employees` int(11) NOT NULL,
  `is_onboard` int(11) NOT NULL DEFAULT 0,
  `email_validated` int(11) NOT NULL DEFAULT 0,
  `email_validate_key` varchar(20) NOT NULL,
  `email_validate_key_expires` varchar(160) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `landing_application_enquiries`
--

INSERT INTO `landing_application_enquiries` (`id`, `full_name`, `organization_name`, `contact_number`, `work_email`, `max_employees`, `is_onboard`, `email_validated`, `email_validate_key`, `email_validate_key_expires`, `created_at`) VALUES
(1, 'Hemant Karekar', 'Sociomark', '+91 868 986 2375', 'hemant@sociomark.in', 5, 1, 1, 'ILGUsYAC9tczZy3b', '2024-03-05 03:53:52', '2024-03-04 10:12:44'),
(2, 'Kunal Mahajan', 'Sociomark', '+91 868 986 2375', 'kunal@sociomark.in', 5, 0, 0, 'ESb640n2CuOkayZX', '2024-03-05 05:19:07', '2024-03-04 11:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `leaves` varchar(100) NOT NULL,
  `status` int(11) DEFAULT 1 COMMENT ' 0 = pending , 1= approved , 2= reject',
  `sl` varchar(20) DEFAULT NULL,
  `pl` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `package` varchar(100) NOT NULL,
  `status` int(11) DEFAULT 1 COMMENT '0=Deleted,1=Not deleted',
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement_board`
--
ALTER TABLE `announcement_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_application_acess`
--
ALTER TABLE `app_application_acess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_application_companies`
--
ALTER TABLE `app_application_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_application_users`
--
ALTER TABLE `app_application_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_company_attendance`
--
ALTER TABLE `app_company_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_company_employee`
--
ALTER TABLE `app_company_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_company_employees`
--
ALTER TABLE `app_company_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_company_holidays`
--
ALTER TABLE `app_company_holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_company_roles`
--
ALTER TABLE `app_company_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_company_settings`
--
ALTER TABLE `app_company_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_salary_components`
--
ALTER TABLE `app_salary_components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_subscriptions`
--
ALTER TABLE `app_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `changes_history`
--
ALTER TABLE `changes_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_leaves`
--
ALTER TABLE `client_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_leave_value`
--
ALTER TABLE `client_leave_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_salary_heads`
--
ALTER TABLE `client_salary_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comp_off`
--
ALTER TABLE `comp_off`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `half_day`
--
ALTER TABLE `half_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incentive`
--
ALTER TABLE `incentive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_application_enquiries`
--
ALTER TABLE `landing_application_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement_board`
--
ALTER TABLE `announcement_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_application_acess`
--
ALTER TABLE `app_application_acess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_application_companies`
--
ALTER TABLE `app_application_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_application_users`
--
ALTER TABLE `app_application_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_company_attendance`
--
ALTER TABLE `app_company_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `app_company_employee`
--
ALTER TABLE `app_company_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_company_employees`
--
ALTER TABLE `app_company_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `app_company_holidays`
--
ALTER TABLE `app_company_holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `app_company_roles`
--
ALTER TABLE `app_company_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `app_company_settings`
--
ALTER TABLE `app_company_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_salary_components`
--
ALTER TABLE `app_salary_components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_subscriptions`
--
ALTER TABLE `app_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `changes_history`
--
ALTER TABLE `changes_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_leaves`
--
ALTER TABLE `client_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_leave_value`
--
ALTER TABLE `client_leave_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_salary_heads`
--
ALTER TABLE `client_salary_heads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comp_off`
--
ALTER TABLE `comp_off`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `half_day`
--
ALTER TABLE `half_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incentive`
--
ALTER TABLE `incentive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landing_application_enquiries`
--
ALTER TABLE `landing_application_enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
