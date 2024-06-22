-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 05:27 AM
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
-- Database: `hazim`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` mediumint(9) NOT NULL,
  `Day` varchar(200) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Description` varchar(400) DEFAULT NULL,
  `Joined` int(11) DEFAULT NULL,
  `JoinDate` datetime DEFAULT NULL,
  `Timestart` time DEFAULT NULL,
  `Timeend` time DEFAULT NULL,
  `teacher` varchar(300) DEFAULT NULL,
  `subject` varchar(300) DEFAULT NULL,
  `username` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `Day`, `Date`, `Description`, `Joined`, `JoinDate`, `Timestart`, `Timeend`, `teacher`, `subject`, `username`) VALUES
(5, 'Monday', '2024-06-03', 'test', 1, '2024-05-06 15:55:29', '12:00:00', '14:00:00', 'teacher 1', 'matematik', 'hazim@gmail.com'),
(6, 'Wednesday', '2024-06-19', '<ul><li>Recipient of Deans Award</li><li>CGPA 4.00 PASUM</li><li>9A SPM</li></ul>', 1, '2024-06-09 12:55:41', '14:00:00', '16:00:00', 'Tutor Aisyah', 'Additional Mathematics', 'hazim@gmail.com'),
(7, 'Saturday', '2024-06-08', '<ul><li>Faculty of Medicine, University Malaya. (Bachelor of Medicine and Bachelor of Surgery) </li><li>PASUM Alumni</li><li>SPM 9As</li></ul>', 1, '2024-05-06 22:58:59', '10:00:00', '12:00:00', 'Tutor Anisha', 'Biology', 'hazim@gmail.com'),
(8, 'Saturday', '2024-06-01', '<ul><li>Faculty of Medicine, University Malaya. (Bachelor of Medicine and Bachelor of Surgery)</li><li> PASUM CGPA 4.0</li><li>SPM 8A+ 2A</li></ul>', 1, '2024-05-26 18:07:09', '08:00:00', '10:00:00', 'Tutor Kashful', 'Biology', 'hazim@gmail.com'),
(9, 'Monday', '2024-06-24', '<ul><li>Award for Anugerah Mata Pelajaran Terbaik Matematik, Kimia</li><li>SPM 9As (6A+)</li><li>PT3 7A</li></ul>', 1, '2024-05-07 11:52:42', '02:00:00', '04:00:00', 'Tutor Waliuddin', 'Mathematics', 'hazim@gmail.com'),
(10, 'Sunday', '2024-06-16', '<ul><li>Recipient of \"Top 20 University Malaya PASUM Physical Sciences Foundation Award\"</li><li>PASUM CGPA 4.0</li><li>SPM 9As (5A+)</li></ul>', 1, '2024-05-11 07:36:03', '08:00:00', '10:00:00', 'Tutor Waiz', 'Physics', 'hazim@gmail.com'),
(11, 'Thursday', '2024-06-13', '<ul><li>Recipient of \"Alumni Yayasan Tun Razak, AYTR.</li><li>Recipient of “Anugerah Pencapaian Subjek Terbaik Kimia SPMRSM.</li><li>Recipient of “Anugerah Tokoh Pelajar Lelaki\" MRSM Batu Pahat.</li></ul>', 0, NULL, '22:00:00', '00:00:00', 'Tutor Syafiq', 'Mathematics', 'hazim@gmail.com'),
(12, 'Thursday', '2024-06-27', '<ul><li>Recipient of Top 10% Award for Foundation of Science, UiTM Dengkil.</li><li> CGPA 4.00</li><li>SPM 8As</li></ul>', 1, '2024-05-12 19:00:21', '02:00:00', '04:00:00', 'Tutor Syadza', 'Chemistry', 'hazim@gmail.com'),
(13, 'Wednesday', '2024-06-05', '<ul><li>Faculty of Computer Science (Bachelor of Computer Science in Information Systems)</li><li>PASUM CGPA 4.00</li><li>SPM 8As</li></ul>', 0, NULL, '18:00:00', '20:00:00', 'Tutor Amrin', 'Chemistry', 'hazim@gmail.com'),
(14, 'Tuesday', '2024-06-04', '<ul><li>Faculty of Computer Science (Bachelor of Computer Science in Information Systems)</li><li>PASUM CGPA 4.00</li><li>SPM 8As</li></ul>', 0, NULL, '14:00:00', '16:00:00', 'Tutor Amrin', 'Chemistry', 'hazim@gmail.com'),
(15, 'Wednesday', '2024-06-19', '<ul><li>Recipient of Deans Award</li><li>CGPA 4.00 PASUM</li><li>9A SPM</li></ul>', 0, NULL, '14:00:00', '16:00:00', 'Tutor Aisyah', 'Additional Mathematics', 'hazim@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` mediumint(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `subject`, `description`) VALUES
(1, 'Tutor Kashful', 'Biology', '<ul><li>Faculty of Medicine, University Malaya. (Bachelor of Medicine and Bachelor of Surgery)</li><li> PASUM CGPA 4.0</li><li>SPM 8A+ 2A</li></ul>'),
(2, 'Tutor Amrin', 'Chemistry', '<ul><li>Faculty of Computer Science (Bachelor of Computer Science in Information Systems)</li><li>PASUM CGPA 4.00</li><li>SPM 8As</li></ul>'),
(3, 'Tutor Anisha', 'Biology', '<ul><li>Faculty of Medicine, University Malaya. (Bachelor of Medicine and Bachelor of Surgery) </li><li>PASUM Alumni</li><li>SPM 9As</li></ul>'),
(4, 'Tutor Auni', 'Chemistry', '<ul><li>Faculty of Science, University Malaya (Bachelor of Environmental Management) </li><li>PASUM CGPA 4.0</li><li>SPM 9As</li></ul>'),
(5, 'Tutor Syafiq', 'Mathematics', '<ul><li>Recipient of \"Alumni Yayasan Tun Razak, AYTR.</li><li>Recipient of “Anugerah Pencapaian Subjek Terbaik Kimia SPMRSM.</li><li>Recipient of “Anugerah Tokoh Pelajar Lelaki\" MRSM Batu Pahat.</li></ul>'),
(6, 'Tutor Waiz', 'Physics', '<ul><li>Recipient of \"Top 20 University Malaya PASUM Physical Sciences Foundation Award\"</li><li>PASUM CGPA 4.0</li><li>SPM 9As (5A+)</li></ul>'),
(7, 'Tutor Aisyah', 'Additional Mathematics', '<ul><li>Recipient of Deans Award</li><li>CGPA 4.00 PASUM</li><li>9A SPM</li></ul>'),
(8, 'Tutor Waliuddin', 'Mathematics', '<ul><li>Award for Anugerah Mata Pelajaran Terbaik Matematik, Kimia</li><li>SPM 9As (6A+)</li><li>PT3 7A</li></ul>'),
(9, 'Tutor Syadza', 'Chemistry', '<ul><li>Recipient of Top 10% Award for Foundation of Science, UiTM Dengkil.</li><li> CGPA 4.00</li><li>SPM 8As</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` mediumint(9) NOT NULL,
  `idteacher` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `timestart` time DEFAULT NULL,
  `timeend` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `idteacher`, `date`, `timestart`, `timeend`) VALUES
(1, 1, '2024-06-01', '08:00:00', '10:00:00'),
(2, 1, '2024-06-02', '10:00:00', '12:00:00'),
(3, 1, '2024-06-03', '12:00:00', '14:00:00'),
(4, 2, '2024-06-04', '14:00:00', '16:00:00'),
(5, 2, '2024-06-05', '18:00:00', '20:00:00'),
(6, 2, '2024-06-06', '20:00:00', '22:00:00'),
(7, 3, '2024-06-07', '08:00:00', '10:00:00'),
(8, 3, '2024-06-08', '10:00:00', '12:00:00'),
(9, 3, '2024-06-09', '12:00:00', '14:00:00'),
(10, 4, '2024-06-10', '14:00:00', '16:00:00'),
(11, 4, '2024-06-11', '18:00:00', '20:00:00'),
(12, 4, '2024-06-12', '20:00:00', '22:00:00'),
(13, 5, '2024-06-13', '22:00:00', '00:00:00'),
(14, 5, '2024-06-14', '00:00:00', '02:00:00'),
(15, 5, '2024-06-15', '02:00:00', '04:00:00'),
(16, 6, '2024-06-16', '08:00:00', '10:00:00'),
(17, 6, '2024-06-17', '10:00:00', '12:00:00'),
(18, 6, '2024-06-18', '12:00:00', '14:00:00'),
(19, 7, '2024-06-19', '14:00:00', '16:00:00'),
(20, 7, '2024-06-20', '18:00:00', '20:00:00'),
(21, 7, '2024-06-21', '20:00:00', '22:00:00'),
(22, 8, '2024-06-22', '22:00:00', '00:00:00'),
(23, 8, '2024-06-23', '00:00:00', '02:00:00'),
(24, 8, '2024-06-24', '02:00:00', '04:00:00'),
(25, 9, '2024-06-25', '22:00:00', '00:00:00'),
(41, 9, '2024-06-26', '00:00:00', '02:00:00'),
(42, 9, '2024-06-27', '02:00:00', '04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`username`, `password`, `status`, `name`) VALUES
('Hazim@gmail.com', 'hazim', 1, 'Hazim'),
('test@gmail.com', 'test', 1, 'test'),
('github@gmail.com', 'git', 1, 'git'),
('23002102@siswa.um.edu.my', 'hazwankacak', 1, '23002102'),
('amiradlanrahim@gmail.com', '123456789', 1, 'Amir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
