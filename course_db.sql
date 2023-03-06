-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2022 at 08:11 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`) VALUES
(1, 'Arts and Humanities'),
(2, 'Business'),
(3, 'Computer Science'),
(4, 'Data Science'),
(5, 'Information Technology'),
(6, 'Health'),
(7, 'Math and Logic'),
(8, 'Personal Development'),
(9, 'Physical Science and Engineering'),
(10, 'Social Sciences'),
(11, 'Language Learning');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Short_des` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Detail_des` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Created_date` datetime DEFAULT NULL,
  `Updated_date` datetime DEFAULT NULL,
  `Price` double NOT NULL DEFAULT '0',
  `New` tinyint(4) DEFAULT NULL,
  `Popular` tinyint(4) DEFAULT NULL,
  `For_level` enum('Beginner','Intemediate','Advanced') COLLATE utf8_unicode_ci DEFAULT NULL,
  `Average_star_review` float DEFAULT NULL,
  `Review` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `University_ID` int(11) DEFAULT NULL,
  `Category_ID` int(11) DEFAULT NULL,
  `Created_user_ID` int(11) DEFAULT NULL,
  `Updated_user_ID` int(11) DEFAULT NULL,
  `Duration` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Course_University_idx` (`University_ID`),
  KEY `fk_Course_Industry1_idx` (`Category_ID`),
  KEY `fk_Course_user1_idx` (`Created_user_ID`),
  KEY `fk_Course_user2_idx` (`Updated_user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `Name`, `Short_des`, `Detail_des`, `Image`, `Created_date`, `Updated_date`, `Price`, `New`, `Popular`, `For_level`, `Average_star_review`, `Review`, `University_ID`, `Category_ID`, `Created_user_ID`, `Updated_user_ID`, `Duration`) VALUES
(1, 'The Structured Query Language (SQL)', 'Introduction to SQL - Structured Query Language\r\nThe origins of SQL, what it is and how it works.', 'In this course you will learn all about the Structured Query Language (\"SQL\".)   We will review the origins of the language and its conceptual foundations.   But primarily, we will focus on learning all the standard SQL commands, their syntax, and how to use these commands to conduct analysis of the data within a relational database.  Our scope includes not only the SELECT statement for retrieving data and creating analytical reports, but also includes the DDL (\"Data Definition Language\") and DML (\"Data Manipulation Language\") commands necessary to create and maintain database objects.\r\n\r\nThe Structured Query Language (SQL) can be taken for academic credit as part of CU Boulder’s Master of Science in Data Science (MS-DS) degree offered on the Coursera platform. The MS-DS is an interdisciplinary degree that brings together faculty from CU Boulder’s departments of Applied Mathematics, Computer Science, Information Science, and others. With performance-based admissions and no application process, the MS-DS is ideal for individuals with a broad range of undergraduate education and/or professional experience in computer science, information science, mathematics, and statistics. Learn more about the MS-DS program at https://www.coursera.org/degrees/master-of-science-data-science-boulder.', 'SQL.jpg', '2022-01-07 00:00:00', NULL, 0, NULL, 1, 'Beginner', 4.7, 'Excellent course. The instructor took the time to teach SQL in a comprehensive way and the labs and quizes are very well prepared to help with the learning.\r\n', 2, 3, 1, 1, 'A month'),
(2, 'SQL for Data Science', 'You will be able to compare and contrast the roles of a database administrator and a data scientist.', 'As data collection has increased exponentially, so has the need for people skilled at using and interacting with data; to be able to think critically, and provide insights to make better decisions and optimize their businesses. This is a data scientist, “part mathematician, part computer scientist, and part trend spotter” (SAS Institute, Inc.). According to Glassdoor, being a data scientist is the best job in America; with a median base salary of $110,000 and thousands of job openings at a time. The skills necessary to be a good data scientist include being able to retrieve and work with data, and to do that you need to be well versed in SQL, the standard language for communicating with database systems.\r\n\r\nThis course is designed to give you a primer in the fundamentals of SQL and working with data so that you can begin analyzing it for data science purposes. You will begin to ask the right questions and come up with good answers to deliver valuable insights for your organization. This course starts with the basics and assumes you do not have any knowledge or skills in SQL. It will build on that foundation and gradually have you write both simple and complex queries to help you select data from tables.  You\'ll start to work with different types of data like strings and numbers and discuss methods to filter and pare down your results. ', 'Data.png', '2022-04-06 00:00:00', NULL, 0, 1, NULL, 'Intemediate', 5, 'I thought this course was great! Great introduction to Relational Databases and SQLite. Highly recommend for anyone new to SQL, Databases, or someone looking to get started with a data science career.', 3, 4, 2, 2, '2 months'),
(3, 'Mathematics for Machine Learning: PCA', 'This intermediate-level course introduces the mathematical foundations to derive Principal Component Analysis (PCA).', 'At the end of this course, you\'ll be familiar with important mathematical concepts and you can implement PCA all by yourself. If you’re struggling, you\'ll find a set of jupyter notebooks that will allow you to explore properties of the techniques and walk you through what you need to do to get on track. If you are already an expert, this course may refresh some of your knowledge.\r\n\r\nThe lectures, examples and exercises require:\r\n1. Some ability of abstract thinking\r\n2. Good background in linear algebra (e.g., matrix and vector algebra, linear independence, basis)\r\n3. Basic background in multivariate calculus (e.g., partial derivatives, basic optimization)\r\n4. Basic knowledge in python programming and numpy', 'PCA.jpg', '2022-06-24 00:00:00', NULL, 0, NULL, 1, 'Intemediate', 4.9, 'Relatively tougher than previous two courses in the specialization. I\'d suggest giving more time and being patient in pursuit of completing this course and understanding the concepts involved.\r\n\r\n', 5, 7, 3, 3, '1.5 months'),
(4, 'Spatial Analysis and Satellite Imagery in a GIS', 'In this course, you will learn how to analyze map data using different data types and methods to answer geographic questions.', 'First, you will learn how to filter a data set using different types of queries to find just the data you need to answer a particular question. Then, we will discuss simple yet powerful analysis methods that use vector data to find spatial relationships within and between data sets. In this section, you will also learn about how to use ModelBuilder, a simple but powerful tool for building analysis flowcharts that can then also be run as models. You will then learn how to find, understand, and use remotely sensed data such as satellite imagery, as a rich source of GIS data. You will then learn how to analyze raster data. Finally, you will complete your own project where you get to try out the new skills and tools you have learned about in this course.\r\n\r\nNote: software is not provided for this course.', 'GIS.jpg', '2022-09-19 00:00:00', NULL, 0, 1, NULL, 'Advanced', 4.9, 'The best course on spatial analysis and satellite imagery in a GIS. The instructor fully explained the course very well, every tool is thoroughly defined. I recommend this course to everyone.', 7, 9, 4, NULL, '3 months'),
(5, 'Data Analytics Methods for Marketing', 'This course explores common analytics methods used by marketers.', 'You’ll learn how to define a target audience using segmentation with K-means clustering.  You’ll also explore how linear regression can help marketers plan and forecast.  You’ll learn to evaluate the effectiveness of advertising using experiments as well as observational methods and you’ll explore methods to optimize your marketing mix; marketing mix modeling and attribution.  Finally, you’ll learn to evaluate sales funnel shapes, visualize and optimize them. \r\n\r\nBy the end of this course you will be able to:\r\n• Describe when analytics is most commonly used in marketing \r\n• Understand your audience using analytics and variable descriptions\r\n• Segment a population into different audiences using cluster analysis\r\n• Use historical data to plan your marketing across different channels\r\n• Use linear regression to forecast marketing outcomes\r\n• Describe marketing mix modeling\r\n• Describe attribution modeling\r\n• Apply different attribution models\r\n• Evaluate advertising effectiveness and describe the shortcomings\r\n• Describe the use of experiments to evaluate advertising effectiveness\r\n• Explain how A/B testing works and how you can use it to optimize ads\r\n• Evaluate results of an experiment and assess the strength of the experiment\r\n• Evaluate and optimize your sales funnel', 'Marketing.jpg', '2021-11-06 00:00:00', NULL, 0, NULL, 1, 'Advanced', 5, 'I feel that this course has given me many tools to be able to apply them to marketing from an analytics perspective. This course has taught me to recognize the consumer perspective and their journey.', 6, 5, 5, 5, '2.5 months'),
(6, 'Google Data Analytics Professional Certificate', 'This is your path to a career in data analytics.', 'Get started in the high-growth field of data analytics with a professional certificate from Google. Learn how to process and analyze data, use key analysis tools, and create visualizations that can inform key business decisions.\r\nPrepare for a new career in the high-growth field of data analytics, no experience or degree is required. Get professional training designed by Google and have the opportunity to connect with top employers. There are 380,000 U.S. job openings in data analytics with a $74,000 median entry-level salary.¹', 'DataAnalytics.png', '2020-11-08 00:00:00', NULL, 0, NULL, 1, 'Intemediate', 4.9, 'This course has taught me to recognize the consumer perspective and their journey.', 3, 5, 1, NULL, '2 months'),
(7, 'Meta Database Engineer Professional Certificate', 'Launch your career as a Database Engineer. ', 'Want to get started in the world of database engineering? This program is taught by industry-recognized experts at Meta. You’ll learn the key skills required to create, manage and manipulate databases, as well as industry-standard programming languages and software such as SQL, Python, and Django. \r\n\r\nUpon completion, you’ll get exclusive access to the Meta Career Programs Job Board—a job search platform that connects you with 200+ employers who have committed to sourcing talent through Meta’s certificate programs, as well as career support resources to help you with your job search.', 'Meta.png', '2021-12-25 00:00:00', NULL, 0, 1, NULL, 'Advanced', 4.9, 'In this course, I am introduced to databases and explored the modern ways in which they are used.', 6, 4, 2, 2, '4 months'),
(8, 'IBM Data Science Professional Certificate', 'Kickstart your career in data science & ML. Build data science skills.', 'Data science is one of the hottest professions of the decade, and the demand for data scientists who can analyze data and communicate results to inform data driven decisions has never been greater. This Professional Certificate will help anyone interested in pursuing a career in data science or machine learning develop career-relevant skills.\r\n\r\nIt’s a myth that to become a data scientist you need a Ph.D. Anyone with a passion for learning can take this Professional Certificate – no prior knowledge of computer science or programming languages required – and develop the skills, tools, and portfolio to have a competitive edge in the job market as an entry level data scientist.', 'datascience.png', '2022-03-25 00:00:00', NULL, 0, 1, NULL, 'Intemediate', 4.8, 'To be able to take courses at my own pace and rhythm has been an amazing experience', 7, 9, 3, NULL, '1.5 months'),
(9, 'IBM Data Science Professional Certificate', 'You will need access to spreadsheet software (Excel, Google Sheets, Numbers or the equivalent) for some activities in this course.', 'Whether you are starting out or looking for a career change, the Intuit Bookkeeping Professional Certificate prepares you for a variety of jobs in public accounting, private industry, government, and non-profit organizations—and for the Intuit Certified Bookkeeping Professional exam. If you are detail-oriented and passionate about solving clients’ problems, this program is for you. You’ll gain a foundational understanding of accounting principles and an introduction to QuickBooks Online through hands-on practice working with real-world accounting scenarios. Upon completion, you’ll be ready to take the Intuit Certified Bookkeeping Professional exam. With this certification, you will be qualified to apply for a position as a bookkeeper at Intuit QuickBooks Live or anywhere in the field. To learn more, visit https://home.pearsonvue.com/intuit. ', 'Bookkeeping.jpg', '2021-04-25 00:00:00', NULL, 0, 1, NULL, 'Intemediate', 4.8, 'If you are looking to take the QuickBooks Online ProAdvisor Certification exam, take this course', 7, 10, 4, 4, '2 months'),
(10, 'Google Project Management: Professional Certificate', 'Start your path to a career in project management.', 'repare for a new career in the high-growth field of project management, no experience or degree required. Get professional training designed by Google and get on the fastrack to a competitively paid job. There are 479,000 U.S. job openings in project management with a $73,000 median entry-level salary.¹\r\n\r\nProject managers are natural problem-solvers. They set the plan and guide teammates, and manage changes, risks, and stakeholders.\r\n\r\nGain in-demand skills that will prepare you for an entry-level job. Learn from Google employees whose foundations in project management served as launchpads for their own careers. ', 'GGproject.png', '2021-05-25 00:00:00', NULL, 0, NULL, 1, 'Beginner', 4.8, 'This course is very complete, detailed and didactic.', 1, 2, 5, NULL, 'a half month'),
(11, 'Meta Front-End Developer Professional Certificate', 'Launch your career as a front-end developer.', 'Want to get started in the world of coding and build beautiful websites as a career? This 9-course program, designed by the software engineering experts at Meta, will prepare you for a career as a front-end developer.\r\n\r\nOnce you complete the program, you’ll get exclusive access to the Meta Career Programs Job Board—a job search platform that connects you with 200+ employers who have committed to sourcing talent through Meta’s certificate programs, as well as career support resources to help you with your job search.', 'frontend.jpg', '2021-07-17 00:00:00', NULL, 0, NULL, 1, 'Advanced', 4.8, 'When I need course on topics that my university doesn\'t offer, Course is one of the best places to go', 2, 3, 1, 1, 'two months'),
(12, 'Google Digital Marketing & E-commerce Professional Certificate', 'This is your path to a career in digital marketing.', 'Prepare for a new career in the high-growth fields of digital marketing and e-commerce, in under six months, no experience or degree required. Businesses need digital marketing and e-commerce talent more than ever before; 86% of business leaders report that digital commerce will be the most important route to growth. There are 218,000 U.S. job openings in this growing field, with a median entry-level salary of $51,000.¹\r\n\r\nThroughout this program, you will gain in-demand skills that prepare you for an entry-level job and learn how to use tools and platforms like Canva, Constant Contact, Google Ads, Google Analytics, Hootsuite, HubSpot, Mailchimp, Shopify, and Twitter. You will learn from subject-matter experts at Google and have a chance to build your own portfolio with projects like customer personas and social media calendars to show to potential employers. ', 'digital.jpg', '2021-09-17 00:00:00', NULL, 0, 1, NULL, 'Advanced', 4, 'Course is one of the best places to go', 5, 3, 4, NULL, 'a month');

-- --------------------------------------------------------

--
-- Table structure for table `login_information`
--

DROP TABLE IF EXISTS `login_information`;
CREATE TABLE IF NOT EXISTS `login_information` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Created_time` datetime NOT NULL,
  `Updated_time` datetime DEFAULT NULL,
  `Status` enum('active','disable') COLLATE utf8_unicode_ci NOT NULL,
  `User_information_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Password_hash_UNIQUE` (`Password`),
  UNIQUE KEY `Username_UNIQUE` (`Username`),
  KEY `fk_Login_information_User_information1_idx` (`User_information_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_information`
--

INSERT INTO `login_information` (`ID`, `Username`, `Password`, `Created_time`, `Updated_time`, `Status`, `User_information_ID`) VALUES
(1, 'Alan Paradise', 'Thisisaps!@215', '2022-10-07 00:00:00', NULL, 'active', 1),
(2, 'Sadie St.Lawrence', 'anoTHerps683A&^', '2022-07-24 00:00:00', NULL, 'active', 2),
(3, 'Marc Peter Deisenroth', 'AsTROng23*&pas', '2022-08-27 00:00:00', NULL, 'active', 3),
(4, 'Don Boyes', 'AsreaLLYstrOng8$@pw', '2022-04-29 00:00:00', NULL, 'active', 4),
(5, 'Anke Audenaert', 't2hereisa)$^pw3', '2022-09-06 00:00:00', NULL, 'active', 5);

-- --------------------------------------------------------

--
-- Table structure for table `login_role`
--

DROP TABLE IF EXISTS `login_role`;
CREATE TABLE IF NOT EXISTS `login_role` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Login_information_ID` int(11) NOT NULL,
  `Role_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Login_Role_Login_information1_idx` (`Login_information_ID`),
  KEY `fk_Login_Role_Role1_idx` (`Role_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_role`
--

INSERT INTO `login_role` (`ID`, `Login_information_ID`, `Role_ID`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 1, 1),
(4, 3, 3),
(5, 4, 2),
(6, 5, 1),
(7, 5, 2),
(8, 2, 1),
(10, 2, 2),
(11, 4, 1),
(12, 3, 2),
(13, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` datetime DEFAULT NULL,
  `Result` enum('Pass','Fail','In Process') COLLATE utf8_unicode_ci DEFAULT NULL,
  `Course_ID` int(11) DEFAULT NULL,
  `Student_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Register_Course1_idx` (`Course_ID`),
  KEY `fk_Register_Student1_idx` (`Student_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `Date`, `Result`, `Course_ID`, `Student_ID`) VALUES
(6, '2022-11-25 00:00:00', 'Pass', 1, 1),
(7, '2022-12-24 00:00:00', 'Pass', 4, 4),
(8, '2023-01-15 00:00:00', 'Fail', 5, 5),
(9, '2023-02-24 00:00:00', 'In Process', 1, 3),
(10, '2023-02-15 00:00:00', 'Fail', 2, 2),
(11, '2023-11-05 00:00:00', 'Fail', 3, 3),
(12, '2022-12-12 00:00:00', 'Pass', 4, 5),
(15, '2023-08-27 00:00:00', 'Pass', 4, 3),
(16, '2023-06-04 00:00:00', 'In Process', 3, 2),
(17, '2023-01-24 00:00:00', 'In Process', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Role` enum('Student','Instructor','Administrator') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Student',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID`, `Role`) VALUES
(1, 'Student'),
(2, 'Instructor'),
(3, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Content` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`ID`, `Content`) VALUES
(1, ' Data Analysis'),
(2, 'Statistical Programming'),
(3, ' Probability & Statistics'),
(4, 'Machine Learning'),
(5, 'Data Management'),
(6, ' Computer Programming'),
(7, 'General Statistics'),
(8, ' Theoretical Computer Science'),
(9, 'Data Visualization'),
(10, ' Python Programming'),
(11, ' Mathematics'),
(12, 'Databases'),
(13, 'Big Data'),
(14, '  Machine Learning Algorithms'),
(15, ' Communication'),
(16, 'Statistical Analysis'),
(17, 'Deep Learning'),
(18, ' Applied Machine Learning'),
(19, 'Data Analysis Software'),
(20, 'Data Structures');

-- --------------------------------------------------------

--
-- Table structure for table `tag_course`
--

DROP TABLE IF EXISTS `tag_course`;
CREATE TABLE IF NOT EXISTS `tag_course` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tag_ID` int(11) DEFAULT NULL,
  `Course_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Tag_Course_Tag1_idx` (`Tag_ID`),
  KEY `fk_Tag_Course_Course1_idx` (`Course_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tag_course`
--

INSERT INTO `tag_course` (`ID`, `Tag_ID`, `Course_ID`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(4, 1, 5),
(5, 14, 1),
(6, 2, 2),
(7, 2, 3),
(8, 2, 4),
(9, 2, 5),
(10, 3, 1),
(11, 3, 2),
(12, 16, 3),
(13, 12, 3),
(14, 11, 4),
(15, 19, 4),
(16, 7, 1),
(17, 6, 4),
(18, 17, 4),
(19, 7, 5),
(20, 12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
CREATE TABLE IF NOT EXISTS `university` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Logo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`ID`, `Name`, `Logo`) VALUES
(1, 'Arizona State University', 'Arizona.png'),
(2, 'Emory University', 'Emory.png'),
(3, 'London Business School', 'London.png'),
(4, 'McMaster University', 'McMaster.png'),
(5, 'National University of Singapore', 'Singapore.jpg'),
(6, 'The University of Sydney', 'sydney.png'),
(7, 'Hebrew University of Jerusalem', 'Hebrew.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

DROP TABLE IF EXISTS `user_information`;
CREATE TABLE IF NOT EXISTS `user_information` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Avatar` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Date_of_birth` datetime DEFAULT NULL,
  `Gender` enum('Male','Female') COLLATE utf8_unicode_ci DEFAULT NULL,
  `Number_of_course` int(11) DEFAULT NULL,
  `Industry` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Employer` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Occupation` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Experience_Level` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Highest_Degree` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `University` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Field_of_Major` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone_number` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Email_UNIQUE` (`Email`),
  UNIQUE KEY `Phone_number_UNIQUE` (`Phone_number`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`ID`, `Full_name`, `Email`, `Avatar`, `Date_of_birth`, `Gender`, `Number_of_course`, `Industry`, `Employer`, `Occupation`, `Experience_Level`, `Highest_Degree`, `University`, `Field_of_Major`, `Phone_number`, `Location`) VALUES
(1, 'Alan Paradise', 'Alan_Paradise@gmail.com', 'Alan Paradise.jpg', '1982-10-14 00:00:00', 'Male', 5, 'Computer Science', 'Manager', 'Computer Science', 'Expert', 'Phd', 'London Business School', 'Computer Science', '324697261205', 'Texas'),
(2, 'Sadie St.Lawrence', 'Sadie_St.Lawrence@gmail.com', 'SadieSt.Lawrence.png', '1983-01-12 00:00:00', 'Female', 12, 'Computer Science', 'Founder and CEO Women in Data (WID)', 'Computer Science', 'Expert', 'Phd', 'Emory University', 'Continuing and Professional Education', '324662861205', 'London'),
(3, 'Marc Peter Deisenroth', 'Marc_Peter_Deisenroth@gmail.com', 'MarcPeterDeisenroth.jpg', '1990-01-24 00:00:00', 'Female', 9, 'Data Analysis', 'Lecturer in Statistical Machine Learning', 'Computer Science', 'Expert', 'Phd', 'Arizona University', 'Department of Computing', '340662861205', 'London'),
(4, 'Don Boyes', 'DonBoyes@gmail.com', 'DonBoyes.jpg', '1986-12-16 00:00:00', 'Male', 24, 'Geography and Planning', 'Professor, Teaching Stream', 'Computer Science', 'Expert', 'Phd', 'McMaster University', 'Geography and Planning', '34097861205', 'Sydney'),
(5, 'Anke Audenaert', 'AnkeAudenaert@gmail.com', 'AnkeAudenaert.jpg', '1995-08-16 00:00:00', 'Female', 15, 'Education', 'UCLA Anderson School of Management', 'CEO & Co-Founder Aptly', 'Expert', 'Phd', 'National University of Singapore', 'Education', '987136426864', 'Singapore');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk_Course_Industry1` FOREIGN KEY (`Category_ID`) REFERENCES `category` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Course_University` FOREIGN KEY (`University_ID`) REFERENCES `university` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Course_user1` FOREIGN KEY (`Created_user_ID`) REFERENCES `login_information` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Course_user2` FOREIGN KEY (`Updated_user_ID`) REFERENCES `login_information` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login_information`
--
ALTER TABLE `login_information`
  ADD CONSTRAINT `fk_Login_information_User_information1` FOREIGN KEY (`User_information_ID`) REFERENCES `user_information` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login_role`
--
ALTER TABLE `login_role`
  ADD CONSTRAINT `fk_Login_Role_Login_information1` FOREIGN KEY (`Login_information_ID`) REFERENCES `login_information` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Login_Role_Role1` FOREIGN KEY (`Role_ID`) REFERENCES `role` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `fk_Register_Course1` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Register_Student1` FOREIGN KEY (`Student_ID`) REFERENCES `user_information` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tag_course`
--
ALTER TABLE `tag_course`
  ADD CONSTRAINT `fk_Tag_Course_Course1` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tag_Course_Tag1` FOREIGN KEY (`Tag_ID`) REFERENCES `tag` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
