-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 06:18 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courseware`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_photo` text NOT NULL,
  `admin_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_name`, `admin_email`, `admin_password`, `admin_address`, `admin_photo`, `admin_status`) VALUES
('Ahmed Al Kahir', 'm.kahir.2022@gmail.com', '123', 'bhatalia', 'admin.jpg', 'engineer');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `Assignment_id` int(11) NOT NULL,
  `Assignment_title` varchar(100) NOT NULL,
  `Assignment_date` date NOT NULL,
  `Assignment_time` varchar(100) NOT NULL,
  `Assignment_deadline` varchar(100) NOT NULL,
  `Assignment_text` varchar(1500) NOT NULL,
  `Assignment_file` varchar(200) NOT NULL,
  `Assignment_status` varchar(1000) NOT NULL,
  `Assignment_due_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_time` varchar(100) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_text` varchar(1000) NOT NULL,
  `comment_status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_time`, `comment_date`, `comment_text`, `comment_status`) VALUES
('11:51:49am', '2020-12-07', 'hello people', ''),
('11:51:49am', '2020-12-07', 'hello people', ''),
('11:51:49am', '2020-12-07', 'hello people', ''),
('', '0000-00-00', '', ''),
('11:27:33am', '2020-12-16', 'dip mama kmn aso', ''),
('11:27:33am', '2020-12-16', 'dip mama kmn aso', ''),
('11:27:33am', '2020-12-16', 'dip mama kmn aso', ''),
('11:27:33am', '2020-12-16', 'dip mama kmn aso', ''),
('11:27:33am', '2020-12-16', 'dip mama kmn aso', ''),
('11:27:33am', '2020-12-16', 'dip mama kmn aso', ''),
('11:27:33am', '2020-12-16', 'dip mama kmn aso', ''),
('11:27:33am', '2020-12-16', 'dip mama kmn aso', ''),
('07:43:14am', '2021-02-18', 'nvhnfghfhjk', ''),
('07:43:14am', '2021-02-18', 'nvhnfghfhjk', ''),
('07:43:14am', '2021-02-18', 'nvhnfghfhjk', ''),
('07:43:14am', '2021-02-18', 'nvhnfghfhjk', ''),
('07:43:15am', '2021-02-18', 'nvhnfghfhjk', ''),
('07:43:39am', '2021-02-18', 'kjhuyjhgtdthfgliobuvliukcfddcjukl.ckd', ''),
('07:43:39am', '2021-02-18', 'kjhuyjhgtdthfgliobuvliukcfddcjukl.ckd', ''),
('07:43:40am', '2021-02-18', 'kjhuyjhgtdthfgliobuvliukcfddcjukl.ckd', ''),
('07:43:40am', '2021-02-18', 'kjhuyjhgtdthfgliobuvliukcfddcjukl.ckd', ''),
('07:43:40am', '2021-02-18', 'kjhuyjhgtdthfgliobuvliukcfddcjukl.ckd', '');

-- --------------------------------------------------------

--
-- Table structure for table `course_post`
--

CREATE TABLE `course_post` (
  `course_post_id` int(11) NOT NULL,
  `course_post_text` text NOT NULL,
  `course_post_time` varchar(100) NOT NULL,
  `course_post_date` date NOT NULL,
  `course_post_file` varchar(500) NOT NULL,
  `course_post_status` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_work`
--

CREATE TABLE `course_work` (
  `course_work_id` int(11) NOT NULL,
  `course_work_title` varchar(100) NOT NULL,
  `course_work_code` varchar(20) NOT NULL,
  `course_work_date` varchar(50) NOT NULL,
  `course_work_security_mode` varchar(50) NOT NULL,
  `course_work_status` varchar(100) NOT NULL,
  `join_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_work`
--

INSERT INTO `course_work` (`course_work_id`, `course_work_title`, `course_work_code`, `course_work_date`, `course_work_security_mode`, `course_work_status`, `join_code`) VALUES
(43, 'Digital signal processing', 'CSE-431', 'spring17', '', '', '180574');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `department_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `join_courses`
--

CREATE TABLE `join_courses` (
  `join_codes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `join_courses`
--

INSERT INTO `join_courses` (`join_codes`) VALUES
('648428'),
('648428'),
('139992'),
('158839'),
('158839'),
('113193'),
('113193'),
('173291'),
('184852'),
('865792'),
('355044'),
('135030'),
('180574');

-- --------------------------------------------------------

--
-- Table structure for table `permission_student_registration`
--

CREATE TABLE `permission_student_registration` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_password` varchar(20) NOT NULL,
  `student_mobile` int(100) NOT NULL,
  `student_address` varchar(100) NOT NULL,
  `student_image` varchar(100) NOT NULL,
  `student_join_date` date NOT NULL,
  `student_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permission_student_registration`
--

INSERT INTO `permission_student_registration` (`student_id`, `student_name`, `student_email`, `student_password`, `student_mobile`, `student_address`, `student_image`, `student_join_date`, `student_status`) VALUES
(29, 'Gpc Dip', 'gpcdip60@gmail.com', '123', 1766400690, 'NEUB', 'dipmam.jpg', '2010-03-20', 'B.SC(Engg.) in CSE');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `id` int(11) NOT NULL,
  `tname` text NOT NULL,
  `cname` text NOT NULL,
  `question` text NOT NULL,
  `o1` text NOT NULL,
  `o2` text NOT NULL,
  `o3` text NOT NULL,
  `o4` text NOT NULL,
  `ans` text NOT NULL,
  `mark` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`id`, `tname`, `cname`, `question`, `o1`, `o2`, `o3`, `o4`, `ans`, `mark`) VALUES
(20, 'test-2', 'DSP', 'What is Architecture.?', 'SEO', 'EEE', 'reve', 'rev', 'B', 5),
(21, 'Test-1', 'DSP', 'what is Dsp.............?', 'a', 'c', 'd', 'e', 'A', 6);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_submited`
--

CREATE TABLE `quiz_submited` (
  `id` int(100) NOT NULL,
  `tname` text NOT NULL,
  `cname` text NOT NULL,
  `question` text NOT NULL,
  `o1` text NOT NULL,
  `o2` text NOT NULL,
  `o3` text NOT NULL,
  `o4` text NOT NULL,
  `ans` text NOT NULL,
  `mark` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_password` varchar(20) NOT NULL,
  `student_mobile` int(100) NOT NULL,
  `student_address` varchar(100) NOT NULL,
  `student_image` varchar(100) NOT NULL,
  `student_join_date` date NOT NULL,
  `student_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`student_id`, `student_name`, `student_email`, `student_password`, `student_mobile`, `student_address`, `student_image`, `student_join_date`, `student_status`) VALUES
(38, 'Ahmed Al Kahir', 'm.kahir.2022@gmail.com', '123', 1766400690, 'NEUB', 'kahir (1).jpg', '2010-03-20', 'B.SC(Engg.) in CSE');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `assignment_file` varchar(100) NOT NULL,
  `assignment_date` date NOT NULL,
  `assignment_time` varchar(100) NOT NULL,
  `assignment_text` varchar(1000) NOT NULL,
  `assignment_marks` float NOT NULL,
  `assignment_status` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_registration`
--

CREATE TABLE `teacher_registration` (
  `teacher_name` varchar(50) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `teacher_password` varchar(20) NOT NULL,
  `teacher_designation` varchar(50) NOT NULL,
  `teacher_website_link` varchar(50) NOT NULL,
  `teacher_address` varchar(100) NOT NULL,
  `teacher_image` varchar(100) NOT NULL,
  `teacher_join_date` varchar(20) NOT NULL,
  `teacher_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_registration`
--

INSERT INTO `teacher_registration` (`teacher_name`, `teacher_email`, `teacher_password`, `teacher_designation`, `teacher_website_link`, `teacher_address`, `teacher_image`, `teacher_join_date`, `teacher_status`) VALUES
('Shahadat Hussain Parvez', 'shparvez@neub.edu.bd ', '123', 'Assistance Professor', 'http://shp.rf.gd/', 'North East university', 'parvez sir.jpg', '05-12-2019', 'B.sc (Engg) in EEE');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `university_id` int(11) NOT NULL,
  `university_location` varchar(100) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `university_address` varchar(200) NOT NULL,
  `university_status` varchar(100) NOT NULL,
  `university_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`university_id`, `university_location`, `department_name`, `university_address`, `university_status`, `university_name`) VALUES
(19, '', 'Computer Science & Engineering', '', '', 'North East University Bangladesh'),
(20, '', 'Electrical & Electronic Engineering', '', '', 'North East University Bangladesh'),
(21, '', 'Civil & Environmental Engineering.', '', '', 'North East University Bangladesh'),
(22, '', 'Industrial & Production Engineering.', '', '', 'North East University Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`Assignment_id`);

--
-- Indexes for table `course_post`
--
ALTER TABLE `course_post`
  ADD PRIMARY KEY (`course_post_id`);

--
-- Indexes for table `course_work`
--
ALTER TABLE `course_work`
  ADD PRIMARY KEY (`course_work_id`,`course_work_code`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `permission_student_registration`
--
ALTER TABLE `permission_student_registration`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_submited`
--
ALTER TABLE `quiz_submited`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_registration`
--
ALTER TABLE `teacher_registration`
  ADD PRIMARY KEY (`teacher_email`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`university_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `Assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `course_post`
--
ALTER TABLE `course_post`
  MODIFY `course_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `course_work`
--
ALTER TABLE `course_work`
  MODIFY `course_work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `quiz_submited`
--
ALTER TABLE `quiz_submited`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `university_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
