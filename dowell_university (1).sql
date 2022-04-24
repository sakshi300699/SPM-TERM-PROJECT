-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 01:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dowell university`
--

-- --------------------------------------------------------

--
-- Table structure for table `absence`
--

CREATE TABLE `absence` (
  `sid` varchar(255) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absence`
--

INSERT INTO `absence` (`sid`, `from`, `to`, `description`) VALUES
('268236', '2020-05-23', '2020-05-29', 'awai');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin1', 'admin123'),
('admin2', 'abcd123');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uc` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `seats` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `uc`, `semester`, `campus`, `Description`, `seats`) VALUES
('K101', 'Machine Learning', 'Michael Burry', 'first', 'Pandora', 'Machine learning (ML) is the study of computer algorithms that improve automatically through experience.[1] It is seen as a subset of artificial intelligence. Machine learning algorithms build a mathematical model based on sample data, known as \"training data\", in order to make predictions or decisions without being explicitly programmed to do so.[2][3]:2 Machine learning algorithms are used in a wide variety of applications, such as email filtering and computer vision, where it is difficult or infeasible to develop conventional algorithms to perform the needed tasks.\r\n\r\nMachine learning is closely related to computational statistics, which focuses on making predictions using computers. The study of mathematical optimization delivers methods, theory and application domains to the field of machine learning. Data mining is a related field of study, focusing on exploratory data analysis through unsupervised learning.[4][5] In its application across business problems, machine learning is also referred to as predictive analytics.', 20),
('K102', 'Artificial Intelligence', 'Kevin Nas', 'spring school', 'Pandora', 'In computer science, artificial intelligence (AI), sometimes called machine intelligence, is intelligence demonstrated by machines, in contrast to the natural intelligence displayed by humans and animals. Leading AI textbooks define the field as the study of \"intelligent agents\": any device that perceives its environment and takes actions that maximize its chance of successfully achieving its goals.[1] Colloquially, the term \"artificial intelligence\" is often used to describe machines (or computers) that mimic \"cognitive\" functions that humans associate with the human mind, such as \"learning\" and \"problem solving\".[2]\r\n\r\nAs machines become increasingly capable, tasks considered to require \"intelligence\" are often removed from the definition of AI, a phenomenon known as the AI effect.[3] A quip in Tesler\'s Theorem says \"AI is whatever hasn\'t been done yet.\"[4] For instance, optical character recognition is frequently excluded from things considered to be AI,[5] having become a routine technology.[6] Modern machine capabilities generally classified as AI include successfully understanding human speech,[7] competing at the highest level in strategic game systems (such as chess and Go),[8] autonomously operating cars, intelligent routing in content delivery networks, and military simulations[9].', 40),
('K103', 'Web Development', 'George  Bailey', 'first', 'Pandora', 'Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network).[1] Web development can range from developing a simple single static page of plain text to complex web-based internet applications (web apps), electronic businesses, and social network services. A more comprehensive list of tasks to which web development commonly refers, may include web engineering, web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development.\r\n\r\nAmong web professionals, \"web development\" usually refers to the main non-design aspects of building websites: writing markup and coding.[2] Web development may use content management systems (CMS) to make content changes easier and available with basic technical skills.\r\n\r\nFor larger organizations and businesses, web development teams can consist of hundreds of people (web developers) and follow standard methods like Agile methodologies while developing websites. Smaller organizations may only require a single permanent or contracting developer, or secondary assignment to related job positions such as a graphic designer or information systems technician. Web development may be a collaborative effort between departments rather than the domain of a designated department. There are three kinds of web developer specialization: front-end developer, back-end developer, and full-stack developer. Front-end developers are responsible for behavior and visuals that run in the user browser, while back-end developers deal with the servers.', 35),
('K104', 'Neural Networks', 'Sanjeeb Nath', 'second', 'Pandora', 'A neural network is a network or circuit of neurons, or in a modern sense, an artificial neural network, composed of artificial neurons or nodes.[1] Thus a neural network is either a biological neural network, made up of real biological neurons, or an artificial neural network, for solving artificial intelligence (AI) problems. The connections of the biological neuron are modeled as weights. A positive weight reflects an excitatory connection, while negative values mean inhibitory connections. All inputs are modified by a weight and summed. This activity is referred to as a linear combination. Finally, an activation function controls the amplitude of the output. For example, an acceptable range of output is usually between 0 and 1, or it could be −1 and 1.\r\n\r\nThese artificial networks may be used for predictive modeling, adaptive control and applications where they can be trained via a dataset. Self-learning resulting from experience can occur within networks, which can derive conclusions from a complex and seemingly unrelated set of information.[2]', 25);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `Title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`Title`, `file`, `type`, `size`, `id`) VALUES
('hey123', '6118-logo1.png', 'image/png', 18808, 1),
('hello', '7050-EXACKT TECHFLEETERS.pdf', 'applicatio', 1171956, 2),
('hey123', '4128-bubble-shooter-example.js', 'text/javas', 35272, 3);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adderess` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`FirstName`, `LastName`, `email`, `sid`, `subject`, `password`, `adderess`, `phone`, `dob`) VALUES
('George ', 'Bailey', 'admin@admin.com', '268236', 'Deep Learning', '26t1VAMMHMDBc', 'Christian-Wolff-Str. 47c', '01771789427', '2020-05-14'),
('Sanjeeb', 'Nath', 'admin@admin.com', '268237', 'Deep Learning', '26t1VAMMHMDBc', 'T.T.1 19/4 Mana Camp Raipur', '09893124852', '2020-05-08'),
('Kevin', 'Nas', 'admin@admin.com', '268238', 'Deep Learning', '26t1VAMMHMDBc', 'Christian-Wolff-Str. 47c', '01771789427', '2020-05-23'),
('Michael', 'Burry', 'admin@admin.com', '268246', 'Data Analytics', '26t1VAMMHMDBc', 'New York', '01771789427', '2020-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `studentcourses`
--

CREATE TABLE `studentcourses` (
  `reg_no` int(4) NOT NULL,
  `SID` varchar(255) NOT NULL,
  `CID` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `registered_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentcourses`
--

INSERT INTO `studentcourses` (`reg_no`, `SID`, `CID`, `fname`, `coursename`, `semester`, `campus`, `registered_on`) VALUES
(5, '268246', 'K101', 'Erhard', 'Machine Learning', 'first', 'Pandora', '2020-05-21'),
(6, '268246', 'K102', 'Erhard', 'Artificial Intelligence', 'spring school', 'Pandora', '2020-05-21'),
(7, '268256', 'K101', 'Loki', 'Machine Learning', 'first', 'Pandora', '2020-05-21'),
(8, '268256', 'K102', 'Loki', 'Artificial Intelligence', 'spring school', 'Pandora', '2020-05-21'),
(9, '268256', 'K103', 'Loki', 'Web Development', 'first', 'Pandora', '2020-05-21'),
(10, '268246', 'K103', 'Erhard', 'Web Development', 'first', 'Pandora', '2020-05-22'),
(11, '268296', 'K101', 'Sakshi', 'Machine Learning', 'first', 'Pandora', '2020-05-22'),
(12, '268296', 'K102', 'Sakshi', 'Artificial Intelligence', 'spring school', 'Pandora', '2020-05-22'),
(13, '268296', 'K103', 'Sakshi', 'Web Development', 'first', 'Pandora', '2020-05-22'),
(14, '268296', 'K104', 'Sakshi', 'Neural Networks', 'second', 'Pandora', '2020-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SID` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `Adderess` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(255) DEFAULT NULL,
  `DOB` varchar(255) DEFAULT NULL,
  `Semester` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `Date of Registration` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`FirstName`, `LastName`, `Email`, `SID`, `Password`, `Adderess`, `PhoneNumber`, `DOB`, `Semester`, `campus`, `Date of Registration`) VALUES
('Sanjeeb', 'Nath', 'sanjeebnath382@gmail.com', '268236', 'Abcd1234$', 'Raipur', '09893124852', '2000-08-30', 'Winter School', 'Neverland', '2020-04-29'),
('Erhard', 'Hein', 'admin@admin.com', '268246', '26t1VAMMHMDBc', 'Christian-Wolff-Str. 47c', '01771789427', '2020-05-20', 'Spring School', 'Riverdell', '2020-05-03'),
('Loki', 'Ajwani', 'admin@admin.com', '268256', '26t1VAMMHMDBc', 'Christian-Wolff-Str. 47c', '01771789427', '2020-05-14', 'Spring School', 'Riverdell', '2020-05-09'),
('Sakshi', 'Bhandarkar', 'admin@admin.com', '268296', '26t1VAMMHMDBc', 'Bhilai', '9899678543', '2020-05-21', 'Two', 'Neverland', '2020-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`time`) VALUES
('09:00:00'),
('09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `timetabble`
--

CREATE TABLE `timetabble` (
  `CID` varchar(255) NOT NULL,
  `Day1` varchar(255) NOT NULL,
  `Day2` varchar(255) NOT NULL,
  `Day3` varchar(255) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetabble`
--

INSERT INTO `timetabble` (`CID`, `Day1`, `Day2`, `Day3`, `time`) VALUES
('K101', 'Monday', 'Tuesday', 'Thursday', '09:00:00'),
('K102', 'Tuesday', 'Wednesday', 'Friday', '09:30:00'),
('K103', 'Thursday', 'Friday', 'Sunday', '11:40:00'),
('K104', 'Monday', 'Wednesday', 'Friday', '15:15:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `studentcourses`
--
ALTER TABLE `studentcourses`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `timetabble`
--
ALTER TABLE `timetabble`
  ADD PRIMARY KEY (`CID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentcourses`
--
ALTER TABLE `studentcourses`
  MODIFY `reg_no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
