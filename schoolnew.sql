-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 11:06 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `semester` set('1','2') NOT NULL,
  `firstDaily` int(11) NOT NULL DEFAULT '0',
  `secondDaily` int(11) NOT NULL DEFAULT '0',
  `monthly` int(11) NOT NULL DEFAULT '0',
  `thirdDaily` int(11) NOT NULL DEFAULT '0',
  `fourthDaily` int(11) NOT NULL DEFAULT '0',
  `final` int(11) NOT NULL DEFAULT '0',
  `avarage` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `student_id` int(11) NOT NULL,
  `absanceDate` date NOT NULL,
  `absanceDay` set('saturday','sunday','monday','tuesday','wednesday','thursday','friday') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `section` set('أ','ب','جـ','د','هـ','و','ز','ح','ط','ي','ك','ل','م','ن','س','ع') NOT NULL,
  `capacity` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `level_id`, `section`, `capacity`, `size`) VALUES
(4, 1, 'أ', 0, 0),
(6, 1, 'ب', 30, 15),
(7, 3, 'جـ', 30, 20),
(8, 3, 'د', 30, 25);

-- --------------------------------------------------------

--
-- Table structure for table `classes_lecture`
--

CREATE TABLE `classes_lecture` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `lecture_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `classes_teacher`
--

CREATE TABLE `classes_teacher` (
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `saturday` time NOT NULL DEFAULT '00:00:00',
  `sunday` time NOT NULL DEFAULT '00:00:00',
  `monday` time NOT NULL DEFAULT '00:00:00',
  `tuesday` time NOT NULL DEFAULT '00:00:00',
  `wednesday` time NOT NULL DEFAULT '00:00:00',
  `thursday` time NOT NULL DEFAULT '00:00:00',
  `friday` time NOT NULL DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `class_student`
--

CREATE TABLE `class_student` (
  `class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `class_subject`
--

CREATE TABLE `class_subject` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `coursename` varchar(20) NOT NULL,
  `grade` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `employee_id` int(11) NOT NULL,
  `name` set('الثانوية العامة','دبلوم','بكالوريس','دبلوم عالي','ماجستير') NOT NULL,
  `date` date NOT NULL,
  `source` varchar(20) NOT NULL,
  `avg` int(11) NOT NULL,
  `rating` set('ممتاز','جيد جدا','جيد','مقبول','ضعيف') NOT NULL,
  `specialty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `married` varchar(30) NOT NULL,
  `DoesPartnerWork` tinyint(1) NOT NULL,
  `numberOfChildren` int(11) NOT NULL,
  `childrenInSchool` int(11) NOT NULL,
  `childrenOtherSchools` int(11) NOT NULL,
  `job_type` varchar(20) NOT NULL,
  `hiring_date` date NOT NULL,
  `job_con` varchar(20) NOT NULL,
  `experince_abroad` int(11) NOT NULL,
  `experince_local` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `person_id`, `mobile`, `married`, `DoesPartnerWork`, `numberOfChildren`, `childrenInSchool`, `childrenOtherSchools`, `job_type`, `hiring_date`, `job_con`, `experince_abroad`, `experince_local`) VALUES
(1, 1, 598480111, 'no', 0, 0, 4, 2, 'progammer', '2016-04-04', 'nothin', 1, 5),
(46, 57, 0, '', 0, 0, 0, 0, 'contract', '0000-00-00', 'teacher', 0, 0),
(48, 59, 0, '', 0, 0, 0, 0, 'contract', '0000-00-00', 'teacher', 0, 0),
(53, 66, 0, '', 0, 0, 0, 0, 'teacher', '0000-00-00', '', 0, 0),
(54, 67, 0, '', 0, 0, 0, 0, 'teacher', '0000-00-00', '', 0, 0),
(55, 71, 0, '', 0, 0, 0, 0, 'teacher', '0000-00-00', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `englishnames`
--

CREATE TABLE `englishnames` (
  `person_id` int(11) NOT NULL,
  `first` varchar(20) CHARACTER SET latin1 NOT NULL,
  `second` varchar(20) CHARACTER SET latin1 NOT NULL,
  `third` varchar(20) CHARACTER SET latin1 NOT NULL,
  `last` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `employee_id` int(11) NOT NULL,
  `corporation_name` varchar(20) NOT NULL,
  `job_title` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` varchar(20) NOT NULL,
  `years` int(11) NOT NULL,
  `authenticated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `mark_id` int(11) NOT NULL,
  `semster` set('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `lecturetime_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `teacher_id`, `subject_id`, `class_id`, `lecturetime_id`) VALUES
(2, 1, 3, 4, 2),
(6, 1, 3, 6, 7),
(3, 35, 3, 4, 4),
(7, 37, 3, 4, 9),
(8, 43, 3, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `lecturetimes`
--

CREATE TABLE `lecturetimes` (
  `id` int(11) NOT NULL,
  `day` set('السبت','الاحد','الاثنين','الثلاثاء','الاربعاء','الخميس','الجمعة') NOT NULL,
  `time` set('1','2','3','4','5','6','7','8') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lecturetimes`
--

INSERT INTO `lecturetimes` (`id`, `day`, `time`) VALUES
(2, 'السبت', '1'),
(4, 'السبت', '2'),
(5, 'السبت', '3'),
(6, 'السبت', '4'),
(7, 'السبت', '5'),
(9, 'الاحد', '3'),
(10, 'الاحد', '4'),
(11, 'الاثنين', '7');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`) VALUES
(1, 'الصف الجديد'),
(3, 'الصف الثالث'),
(4, 'الصف الخامس');

-- --------------------------------------------------------

--
-- Table structure for table `level_subject`
--

CREATE TABLE `level_subject` (
  `level_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `first` int(11) NOT NULL DEFAULT '0',
  `second` int(11) NOT NULL DEFAULT '0',
  `monthly` int(11) NOT NULL DEFAULT '0',
  `third` int(11) NOT NULL DEFAULT '0',
  `fourth` int(11) NOT NULL DEFAULT '0',
  `final` int(11) NOT NULL DEFAULT '0',
  `avarage` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `send_to` int(11) NOT NULL,
  `send_from` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `send_date` date NOT NULL,
  `type` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `person_id` int(11) NOT NULL,
  `first` varchar(20) NOT NULL,
  `second` varchar(20) NOT NULL,
  `third` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`person_id`, `first`, `second`, `third`, `last`) VALUES
(1, 'dia', 'omar', 'sudqi', 'jawabreh'),
(57, 'mazen', 'mazen', 'mazen', 'mazen'),
(59, 'admin', 'admin', 'adnim', 'aa'),
(64, 'صدقي', '', '', ''),
(65, 'صدقي', '', '', ''),
(66, 'sudqi', '', '', ''),
(67, 'sudqi', '', '', ''),
(68, 'ضياء', '', '', ''),
(69, 'laith', '', '', ''),
(70, 'laith', '', '', ''),
(71, 'mahdi', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `persones`
--

CREATE TABLE `persones` (
  `id` int(11) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `religon` varchar(20) NOT NULL,
  `placeOfBirth` varchar(20) NOT NULL,
  `ni` int(9) NOT NULL,
  `idType` varchar(20) NOT NULL,
  `distanceFromSchool` int(11) NOT NULL,
  `phone` int(9) NOT NULL,
  `dateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persones`
--

INSERT INTO `persones` (`id`, `nationality`, `religon`, `placeOfBirth`, `ni`, `idType`, `distanceFromSchool`, `phone`, `dateOfBirth`) VALUES
(1, 'palestinan', 'muslim', 'nablus', 1234, 'green', 9, 92396650, '0000-00-00'),
(2, 'pal', 'muslim', 'am', 22, '', 0, 0, '0000-00-00'),
(57, '', 'Hello', '', 11, 'pal', 0, 0, '0000-00-00'),
(59, '', 'Hello', '', 11, 'pal', 0, 0, '0000-00-00'),
(64, '', '', '', 123456789, '', 0, 0, '0000-00-00'),
(65, '', '', '', 123456789, '', 0, 0, '0000-00-00'),
(66, '', '', '', 112233456, '', 0, 0, '0000-00-00'),
(67, '', '', '', 112233456, '', 0, 0, '0000-00-00'),
(68, '', '', '', 1155667, '', 0, 0, '0000-00-00'),
(69, '', '', '', 987654321, '', 0, 0, '0000-00-00'),
(70, '', '', '', 987654321, '', 0, 0, '0000-00-00'),
(71, '', '', '', 1155667788, '', 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `studentaddress`
--

CREATE TABLE `studentaddress` (
  `region` varchar(20) CHARACTER SET latin1 NOT NULL,
  `neighborhood` varchar(20) CHARACTER SET latin1 NOT NULL,
  `street` varchar(20) CHARACTER SET latin1 NOT NULL,
  `building` varchar(20) CHARACTER SET latin1 NOT NULL,
  `city` varchar(20) CHARACTER SET latin1 NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `person_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `transMorning` set('bus','parent','on foot') NOT NULL,
  `transAfternoon` set('bus','parent','on foot') NOT NULL,
  `regestrationDate` date NOT NULL,
  `numberBrothers` int(11) NOT NULL,
  `numberSisters` int(11) NOT NULL,
  `numberPartMemorize` int(11) NOT NULL,
  `diseases` varchar(20) NOT NULL,
  `surgeries` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`person_id`, `id`, `transMorning`, `transAfternoon`, `regestrationDate`, `numberBrothers`, `numberSisters`, `numberPartMemorize`, `diseases`, `surgeries`) VALUES
(64, 1, 'bus', 'bus', '0000-00-00', 0, 0, 0, '', ''),
(65, 2, 'bus', 'bus', '0000-00-00', 0, 0, 0, '', ''),
(68, 3, 'bus', 'bus', '0000-00-00', 0, 0, 0, '', ''),
(69, 4, 'bus', 'bus', '0000-00-00', 0, 0, 0, '', ''),
(70, 5, 'bus', 'bus', '0000-00-00', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(1, 'رياضيات'),
(3, 'علوم'),
(4, 'عربي');

-- --------------------------------------------------------

--
-- Table structure for table `teacherarrivales`
--

CREATE TABLE `teacherarrivales` (
  `teacher_id` int(11) NOT NULL,
  `dayDate` date NOT NULL,
  `arrivaltime` time NOT NULL,
  `arrivalDay` set('saturday','sunday','monday','tuesday','wednesday','thursday','friday') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacheres`
--

CREATE TABLE `teacheres` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacheres`
--

INSERT INTO `teacheres` (`id`, `employee_id`) VALUES
(1, 1),
(35, 46),
(37, 48),
(42, 53),
(43, 54),
(44, 55);

-- --------------------------------------------------------

--
-- Table structure for table `trained_courses`
--

CREATE TABLE `trained_courses` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `source` varchar(20) NOT NULL,
  `long_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `useres`
--

CREATE TABLE `useres` (
  `id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` set('admin','student','teacher','supervisor') NOT NULL,
  `remember_token` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `useres`
--

INSERT INTO `useres` (`id`, `person_id`, `password`, `type`, `remember_token`, `name`) VALUES
(11, 59, '$2y$10$6hLJGpnDJR/Is0SDZ.1yp.fesTNo7TVwGvIipYvQfBGa6jyAGN6tq', 'admin', 7, ''),
(1155667, 68, '$2y$10$ZJfGEhiYKdwWnCwzmQNjj.amhuPL1R55J1PrGasY2dl9JQITFhDOq', 'student', 0, ''),
(112233456, 66, '$2y$10$11L3fNi/eEb5rCUFnkHvLelFsARkgZeh82HieUCWiMFy8t9ZzoVwG', 'teacher', 0, ''),
(112233456, 67, '$2y$10$b0lz1yBSfcqOpQt.1ZpseuA1JB5bh5jp1sw3hC6zIbuB1JufB4mai', 'teacher', 0, ''),
(123456789, 64, '$2y$10$2psJnzjvXHRbH7dDQ4VQ5.oh2Tsx8ItUyZ7gUeqkQx5cQIJgcjdWm', 'student', 0, ''),
(123456789, 65, '$2y$10$8AQ2c64XKZAUNmHggoHdt.DqH48SO75OMB3k2B/ndIY6e8QhfBwGu', 'student', 0, ''),
(987654321, 69, '$2y$10$mojsUT03synbSXvl/vFHuOyXJHUpbpW.01m1KA94DdxpG1pjamGTq', 'student', 0, ''),
(987654321, 70, '$2y$10$j8ic2nsXi0561olNdOAPiu7DVHk2tkmbJGMZWj9TusmXnNJdIj2z6', 'student', 0, ''),
(1155667788, 71, '$2y$10$y6XtH9CFk.MB0Jbf3OVHiObYyjQyGIdOyMaUMvnJ2ECfDMF6NZcTi', 'teacher', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`student_id`,`course_id`,`class_id`,`year`,`semester`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`student_id`,`absanceDate`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`,`level_id`,`section`) USING BTREE,
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `classes_lecture`
--
ALTER TABLE `classes_lecture`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`class_id`,`lecture_id`);

--
-- Indexes for table `classes_teacher`
--
ALTER TABLE `classes_teacher`
  ADD PRIMARY KEY (`class_id`,`teacher_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `class_student`
--
ALTER TABLE `class_student`
  ADD PRIMARY KEY (`class_id`,`student_id`) USING BTREE,
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `class_subject`
--
ALTER TABLE `class_subject`
  ADD PRIMARY KEY (`id`,`class_id`,`subject_id`) USING BTREE,
  ADD KEY `class_id` (`class_id`),
  ADD KEY `teacher_id` (`subject_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`,`person_id`) USING BTREE,
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `englishnames`
--
ALTER TABLE `englishnames`
  ADD PRIMARY KEY (`person_id`) USING BTREE;

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`student_id`,`id`,`semster`,`subject_id`) USING BTREE,
  ADD UNIQUE KEY `markid_2` (`mark_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `class_id` (`subject_id`),
  ADD KEY `mark_id` (`mark_id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `teacher_id_2` (`teacher_id`,`subject_id`,`lecturetime_id`,`class_id`) USING BTREE,
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `subject_id` (`subject_id`) USING BTREE,
  ADD KEY `lectures_ibfk_1` (`lecturetime_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `lecturetimes`
--
ALTER TABLE `lecturetimes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`day`,`time`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`,`name`);

--
-- Indexes for table `level_subject`
--
ALTER TABLE `level_subject`
  ADD PRIMARY KEY (`level_id`,`subject_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `send_to` (`send_to`,`send_from`),
  ADD KEY `send_from` (`send_from`);

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `persones`
--
ALTER TABLE `persones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentaddress`
--
ALTER TABLE `studentaddress`
  ADD PRIMARY KEY (`student_id`) USING BTREE;

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`,`person_id`) USING BTREE,
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherarrivales`
--
ALTER TABLE `teacherarrivales`
  ADD PRIMARY KEY (`teacher_id`,`dayDate`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teacheres`
--
ALTER TABLE `teacheres`
  ADD PRIMARY KEY (`id`,`employee_id`) USING BTREE,
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `trained_courses`
--
ALTER TABLE `trained_courses`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `useres`
--
ALTER TABLE `useres`
  ADD PRIMARY KEY (`id`,`person_id`),
  ADD KEY `person_id` (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `classes_lecture`
--
ALTER TABLE `classes_lecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class_subject`
--
ALTER TABLE `class_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lecturetimes`
--
ALTER TABLE `lecturetimes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persones`
--
ALTER TABLE `persones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `teacheres`
--
ALTER TABLE `teacheres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `archives`
--
ALTER TABLE `archives`
  ADD CONSTRAINT `archive_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `archive_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `archive_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teacheres` (`id`),
  ADD CONSTRAINT `archive_ibfk_4` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`);

--
-- Constraints for table `classes_teacher`
--
ALTER TABLE `classes_teacher`
  ADD CONSTRAINT `class_teachers_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `class_teachers_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacheres` (`id`);

--
-- Constraints for table `class_student`
--
ALTER TABLE `class_student`
  ADD CONSTRAINT `class_students_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_students_ibfk_4` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `class_subject`
--
ALTER TABLE `class_subject`
  ADD CONSTRAINT `class_subject_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_subject_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `class_subject_ibfk_3` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);

--
-- Constraints for table `degrees`
--
ALTER TABLE `degrees`
  ADD CONSTRAINT `degrees_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `persones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `englishnames`
--
ALTER TABLE `englishnames`
  ADD CONSTRAINT `englishname_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `persones` (`id`);

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `grades_ibfk_3` FOREIGN KEY (`mark_id`) REFERENCES `marks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lectures`
--
ALTER TABLE `lectures`
  ADD CONSTRAINT `lectures_ibfk_1` FOREIGN KEY (`lecturetime_id`) REFERENCES `lecturetimes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lectures_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `teacher_courses_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teacher_courses_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacheres` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `level_subject`
--
ALTER TABLE `level_subject`
  ADD CONSTRAINT `level_subject_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `level_subject_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`send_to`) REFERENCES `useres` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`send_from`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `names`
--
ALTER TABLE `names`
  ADD CONSTRAINT `name_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `persones` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `studentaddress`
--
ALTER TABLE `studentaddress`
  ADD CONSTRAINT `studentaddress_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `persones` (`id`);

--
-- Constraints for table `teacherarrivales`
--
ALTER TABLE `teacherarrivales`
  ADD CONSTRAINT `teacherarrival_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacheres` (`id`);

--
-- Constraints for table `teacheres`
--
ALTER TABLE `teacheres`
  ADD CONSTRAINT `teacheres_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trained_courses`
--
ALTER TABLE `trained_courses`
  ADD CONSTRAINT `train_courses_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `useres`
--
ALTER TABLE `useres`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `persones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
