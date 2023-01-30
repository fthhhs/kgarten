-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 08:52 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` char(20) NOT NULL,
  `class_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`) VALUES
('001', 'Leopard');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `stu_id` int(11) NOT NULL,
  `subject_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`stu_id`, `subject_id`) VALUES
(1, 'a123'),
(2, 'b123'),
(3, 'c123'),
(4, 'd123'),
(5, 'e123'),
(6, 'f123'),
(7, 'g123'),
(8, 'h123'),
(9, 'i123'),
(10, 'j123');

-- --------------------------------------------------------

--
-- Table structure for table `full_time`
--

CREATE TABLE `full_time` (
  `teacher_id` int(11) NOT NULL,
  `educational_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `full_time`
--

INSERT INTO `full_time` (`teacher_id`, `educational_type`) VALUES
(1, 'Diploma'),
(2, 'Diploma'),
(3, 'Degree'),
(4, 'Degree'),
(5, 'Diploma'),
(6, 'Diploma'),
(7, 'Degree'),
(8, 'Degree'),
(9, 'Diploma'),
(10, 'Degree');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` varchar(50) NOT NULL,
  `parent_name` varchar(50) DEFAULT NULL,
  `parent_age` varchar(50) DEFAULT NULL,
  `parent_phone` varchar(50) NOT NULL,
  `parent_address` varchar(50) DEFAULT NULL,
  `parent_email` varchar(50) DEFAULT NULL,
  `parent_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `parent_name`, `parent_age`, `parent_phone`, `parent_address`, `parent_email`, `parent_password`) VALUES
('1001', 'Pavel Tixall', '30', '194-591-4151', '87945 Esker Drive', 'ptixall6@google.com.hk', 'Y2HYtrK8'),
('1002', 'Neda Spykins', '26', '212-240-6293', '93 Weeping Birch Alley', 'nspykins0@miitbeian.gov.cn', 'OQ9jn76'),
('1003', 'Dionisio Naris', '25', '453-286-4654', '1 1st Hill', 'dnaris8@ameblo.jp', 'EZ8TjQTVnGG'),
('1004', 'Ginger Biggerdike', '40', '486-382-6756', '2038 Delaware Plaza', 'gbiggerdike9@mysql.com', 'RgPSUg0UgjV'),
('1005', 'Jeana Allderidge', '30', '548-391-6217', '5099 David Center', 'jallderidge3@bbb.org', '2YMjsb'),
('1006', 'Clayborn Porcher', '30', '623-663-0443', '9163 Talmadge Drive', 'cporcher4@bloomberg.com', '89B9cfBtC'),
('1007', 'Wes Yes', '31', '672-617-6915', '87 Emmet Pass', 'wyes5@amazon.com', 'C51vujBbaWqF'),
('1008', 'Odilia Letrange', '32', '679-921-0457', '3 Northridge Street', 'oletrange2@cbslocal.com', 'IRLPb1vQi'),
('1009', 'Vaughn Routham', '40', '682-685-7882', '145 Emmet Pass', 'vroutham1@bing.com', 'j7JAP02'),
('1010', 'Janelle MacGrath', '45', '755-948-4201', '96113 Aberg Plaza', 'jmacgrath7@bigcartel.com', 'jz1yi1k');

-- --------------------------------------------------------

--
-- Table structure for table `part_time`
--

CREATE TABLE `part_time` (
  `teacher_id` int(11) DEFAULT NULL,
  `overtime_hours` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `part_time`
--

INSERT INTO `part_time` (`teacher_id`, `overtime_hours`) VALUES
(1, 9),
(2, 2),
(3, 6),
(4, 1),
(5, 7),
(6, 9),
(7, 4),
(8, 5),
(9, 3),
(10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(50) DEFAULT NULL,
  `class_id` char(20) DEFAULT NULL,
  `stu_gender` varchar(50) DEFAULT NULL,
  `stu_dob` date DEFAULT NULL,
  `stu_year_enrolled` date DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `class_id`, `stu_gender`, `stu_dob`, `stu_year_enrolled`, `parent_id`) VALUES
(1, 'Conrado Paynes', '4', 'Female', '2022-04-08', '2022-02-27', 1001),
(2, 'Mirabelle Guitt', '5', 'Female', '2022-11-12', '2022-11-08', 1002),
(3, 'Nonna Tartt', '4', 'Female', '2022-05-06', '2022-11-13', 1003),
(4, 'Ade Eger', '4', 'Male', '2022-06-29', '2022-06-30', 1004),
(5, 'Freddie Kenewel', '6', 'Female', '2022-11-19', '2022-11-05', 1005),
(6, 'Alix Stapforth', '5', 'Male', '2022-10-26', '2022-10-22', 1006),
(7, 'Charlotta Rossiter', '5', 'Female', '2022-07-30', '2022-05-21', 1007),
(8, 'Steffie Lygoe', '6', 'Female', '2022-02-04', '2022-10-22', 1008),
(9, 'Kristel Tzarkov', '4', 'Female', '2022-04-14', '2022-10-09', 1009),
(10, 'Suzi Lindores', '5', 'Female', '2022-03-16', '2022-02-26', 1010);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` varchar(50) NOT NULL,
  `subject_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
('a123', 'Science'),
('b123', 'Mathematic'),
('c123', 'Jawi'),
('d123', 'History'),
('e123', 'Physical Education'),
('f123', 'Sivic'),
('g123', 'Quran'),
('h123', 'English'),
('i123', 'Bahasa Melayu'),
('j123', 'Art');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(50) DEFAULT NULL,
  `teacher_dob` date DEFAULT NULL,
  `teacher_phone` varchar(50) DEFAULT NULL,
  `teacher_email` varchar(50) DEFAULT NULL,
  `teacher_address` varchar(50) DEFAULT NULL,
  `teacher_gender` varchar(50) DEFAULT NULL,
  `teacher_status` varchar(50) DEFAULT NULL,
  `teacher_salary` varchar(50) DEFAULT NULL,
  `teacher_hiredate` date DEFAULT NULL,
  `teacher_password` varchar(50) DEFAULT NULL,
  `supervisor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_dob`, `teacher_phone`, `teacher_email`, `teacher_address`, `teacher_gender`, `teacher_status`, `teacher_salary`, `teacher_hiredate`, `teacher_password`, `supervisor_id`) VALUES
(1, 'Morena', '1993-12-09', '792-217-5391', 'mfayers0@msu.edu', '7 Boyd Park', 'Female', 'Diploma', '1200', '2022-04-27', '123', NULL),
(2, 'Orion', '1992-12-11', '542-188-7699', 'opoynzer1@craigslist.org', '7743 Chive Drive', 'Male', 'Diploma', '1200', '2022-12-07', '123', 1),
(3, 'Henri', '1998-09-09', '341-363-6896', 'hclows2@sakura.ne.jp', '0 Mallard Trail', 'Male', 'Degree', '1500', '2022-05-04', '123', 1),
(4, 'Cosette', '1998-05-03', '968-620-4005', 'cstollery3@seattletimes.com', '742 Bobwhite Park', 'Female', 'Degree', '1500', '2022-05-14', '123', 1),
(5, 'Nata', '1998-06-15', '123-821-2284', 'nspondley4@hubpages.com', '70230 Green Avenue', 'Female', 'Diploma', '1200', '2022-10-02', '123', 1),
(6, 'Phaedra', '1996-06-06', '447-374-7949', 'phackett5@senate.gov', '565 Nancy Park', 'Female', 'Diploma', '1200', '2021-12-30', '123', 1),
(7, 'Vivien', '1996-06-29', '655-299-7592', 'vmanley6@wufoo.com', '028 Warbler Street', 'Female', 'Degree', '1500', '2022-08-22', '123', 1),
(8, 'Walden', '1994-07-08', '155-191-0140', 'wwymer7@gnu.org', '57473 Oneill Drive', 'Male', 'Degree', '1500', '2022-04-24', '123', 1),
(9, 'Salomone', '1996-04-06', '566-959-1135', 'swedmore8@google.com.au', '59 Norway Maple Crossing', 'Male', 'Diploma', '1200', '2022-09-10', '123', 1),
(10, 'Veda', '1994-06-30', '428-312-7185', 'veasthope9@newyorker.com', '0 Manley Point', 'Female', 'Degree', '1500', '2022-10-25', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE `teacher_subject` (
  `teacher_id` varchar(50) DEFAULT NULL,
  `subject_id` varchar(50) DEFAULT NULL,
  `class_id` varchar(50) DEFAULT NULL,
  `register_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`teacher_id`, `subject_id`, `class_id`, `register_date`) VALUES
('1', 'a123', '1', '2021-12-19'),
('2', 'b123', '2', '2021-12-20'),
('3', 'c123', '3', '2022-01-01'),
('4', 'd123', '4', '2022-02-25'),
('5', 'e123', '5', '2022-04-17'),
('6', 'f123', '6', '2022-06-09'),
('7', 'g123', '7', '2022-06-15'),
('8', 'h123', '8', '2022-06-23'),
('9', 'i123', '9', '2022-07-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD PRIMARY KEY (`register_date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
