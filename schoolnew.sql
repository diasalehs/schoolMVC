-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 30, 2016 at 01:26 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
  `classname` varchar(20) NOT NULL,
  `section` set('أ','ب','جـ','د','هـ','و','ز','ح','ط','ي','ك','ل','م','ن','س','ع') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `classname`, `section`) VALUES
(1, 'الصف الاول', 'أ'),
(2, 'الصف الاول', 'ب'),
(3, 'الثاني', 'ب');

-- --------------------------------------------------------

--
-- Table structure for table `classes_teacher`
--

CREATE TABLE `classes_teacher` (
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `class_course`
--

CREATE TABLE `class_course` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `saturday` time NOT NULL DEFAULT '00:00:00',
  `sunday` time NOT NULL DEFAULT '00:00:00',
  `monday` time NOT NULL DEFAULT '00:00:00',
  `tuesday` time NOT NULL DEFAULT '00:00:00',
  `wednesday` time NOT NULL DEFAULT '00:00:00',
  `thursday` time NOT NULL DEFAULT '00:00:00',
  `friday` time NOT NULL DEFAULT '00:00:00',
  `sum` int(11) NOT NULL DEFAULT '0'
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
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `coursename` varchar(20) NOT NULL,
  `grade` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course_teacher`
--

CREATE TABLE `course_teacher` (
  `teacher_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `person_id`, `mobile`, `married`, `DoesPartnerWork`, `numberOfChildren`, `childrenInSchool`, `childrenOtherSchools`, `job_type`, `hiring_date`, `job_con`, `experince_abroad`, `experince_local`) VALUES
(1, 1, 598480111, 'no', 0, 0, 4, 2, 'progammer', '2016-04-04', 'nothin', 1, 5),
(31, 42, 0, '', 0, 0, 0, 0, '', '0000-00-00', '', 0, 0),
(32, 43, 0, '', 0, 0, 0, 0, '', '0000-00-00', '', 0, 0),
(33, 44, 0, '', 0, 0, 0, 0, '', '0000-00-00', '', 0, 0);

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
  `course_id` int(11) NOT NULL,
  `mark_id` int(11) NOT NULL,
  `semster` set('1','2') NOT NULL
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
(42, 'mazen', '', '', ''),
(43, 'laith', '', '', ''),
(44, 'Nael', '', '', '');

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
  `phone` int(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persones`
--

INSERT INTO `persones` (`id`, `nationality`, `religon`, `placeOfBirth`, `ni`, `idType`, `distanceFromSchool`, `phone`) VALUES
(1, 'palestinan', 'muslim', 'nablus', 1234, 'green', 9, 92396650),
(42, '', 'hello', '', 0, '', 0, 0),
(43, '', 'hello', '', 0, '', 0, 0),
(44, '', 'hello', '', 0, '', 0, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacheres`
--

INSERT INTO `teacheres` (`id`, `employee_id`) VALUES
(1, 1),
(22, 31),
(23, 32),
(24, 33);

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
  `password` int(11) NOT NULL,
  `type` set('admin','students','teacher','supervisor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes_teacher`
--
ALTER TABLE `classes_teacher`
  ADD PRIMARY KEY (`class_id`,`teacher_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `class_course`
--
ALTER TABLE `class_course`
  ADD PRIMARY KEY (`id`,`class_id`,`course_id`) USING BTREE,
  ADD KEY `class_id` (`class_id`),
  ADD KEY `teacher_id` (`course_id`);

--
-- Indexes for table `class_student`
--
ALTER TABLE `class_student`
  ADD PRIMARY KEY (`class_id`,`student_id`) USING BTREE,
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD PRIMARY KEY (`teacher_id`,`course_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `course_id` (`course_id`);

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
  ADD PRIMARY KEY (`student_id`,`id`,`semster`,`course_id`) USING BTREE,
  ADD UNIQUE KEY `markid_2` (`mark_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `class_id` (`course_id`),
  ADD KEY `mark_id` (`mark_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `class_course`
--
ALTER TABLE `class_course`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacheres`
--
ALTER TABLE `teacheres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
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
-- Constraints for table `classes_teacher`
--
ALTER TABLE `classes_teacher`
  ADD CONSTRAINT `class_teachers_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `class_teachers_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacheres` (`id`);

--
-- Constraints for table `class_course`
--
ALTER TABLE `class_course`
  ADD CONSTRAINT `class_course_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `class_student`
--
ALTER TABLE `class_student`
  ADD CONSTRAINT `class_students_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_students_ibfk_4` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD CONSTRAINT `teacher_courses_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teacher_courses_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacheres` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `degrees`
--
ALTER TABLE `degrees`
  ADD CONSTRAINT `degrees_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `persones` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `grades_ibfk_3` FOREIGN KEY (`mark_id`) REFERENCES `marks` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `persones` (`id`);