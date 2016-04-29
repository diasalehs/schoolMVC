-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 29, 2016 at 10:16 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `school`
--

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `person_id`, `mobile`, `married`, `DoesPartnerWork`, `numberOfChildren`, `childrenInSchool`, `childrenOtherSchools`, `job_type`, `hiring_date`, `job_con`, `experince_abroad`, `experince_local`) VALUES
(1, 1, 598480111, 'no', 0, 0, 4, 2, 'progammer', '2016-04-04', 'nothin', 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`,`person_id`) USING BTREE,
  ADD KEY `person_id` (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `persones` (`id`) ON DELETE CASCADE;
