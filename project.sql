-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 06:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` varchar(6) NOT NULL,
  `author_name` varchar(30) NOT NULL,
  `book_title` varchar(70) NOT NULL,
  `price` double NOT NULL,
  `category` varchar(25) NOT NULL,
  `pages` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `author_name`, `book_title`, `price`, `category`, `pages`) VALUES
('bk0001', 'J B  Popat', 'General Studies', 600, 'G.P.S.C', 756),
('bk0002', 'J B  Popat', 'AnkGanit', 250, 'G.P.S.C', 292),
('bk0003', 'J B Popat', 'Buddhichaturya', 250, 'G.P.S.C', 284),
('bk0004', 'J B  Popat', 'G.P.S.C. Nayab Mamlatdar Exam', 300, 'G.P.S.C', 418),
('bk0005', 'J B  Popat', 'Gram Panchayat Secretary Exam', 280, 'Panchayat', 296),
('bk0006', 'J B Popat', 'Nayab Chitnis Exam', 240, 'Panchayat', 352),
('bk0007', 'J B Popat', 'Female Health Worker Exam', 240, 'Panchayat', 296),
('bk0008', 'J B Popat', 'Mukhya Sevika Exam\r\n', 240, 'Panchayat', 288),
('bk0009', 'J B  Popat', 'Staff Selection Commission Higher Secondary Level Exam', 160, 'SSC', 240),
('bk0010', 'J B Popat', 'Revenue Talati Exam', 260, 'Talati', 352),
('bk0011', 'J B Popat', 'Assistant, Assistant Depot Manager Exam', 200, '', 272),
('bk0012', 'J B  Popat', 'Railway Recruitment Board Exam', 250, 'Railway', 352),
('bk0013', 'J B Popat', 'GSRTC Clerk, Suraksha Madadnish, Trafic Contraler Exam', 250, 'GSRTC (ST)', 352),
('bk0014', 'J B Popat', 'GSRTC Junior Assistant Exam', 250, 'GSRTC (ST)', 352),
('bk0015', 'J B Popat', 'Department of Post Postmen/Mailguard Exam', 220, 'Department of Post', 288),
('bk0016', 'J B  Popat', 'Staff Nurse Exam', 240, 'Nurse', 276),
('bk0017', 'J B Popat', 'Multipurpose health worker Exam', 240, 'Panchayat', 304),
('bk0018', 'J B Popat', 'Constable Jail Shipai Exam', 220, 'Police', 314),
('bk0019', 'J B Popat', 'P.S.I. Main Exam', 460, 'Police', 464),
('bk0020', 'J B  Popat', 'Binsachivalay Clerk Office Assistant Exam', 280, 'GSSSB', 404),
('bk0021', 'J B Popat', 'Vanrakshak Exam', 230, 'Vanrakshak', 280),
('bk0022', 'J B Popat', 'Highcourt peon Exam', 170, 'Highcourt', 216),
('bk0023', 'J B Popat', 'TET 1 to 5 Exam', 350, 'TET', 456),
('bk0024', 'J B Popat', 'TET 6 to 8 bhasha Exam', 300, 'TET', 408),
('bk0025', 'J B Popat', 'Samanya Bauddhik Kshamata', 500, 'G.P.S.C.', 612),
('bk0026', 'J B  Popat', 'Railway Recruitment Board Sahayak Locopilot exam', 250, 'Railway', 302),
('bk0027', 'J B Popat', 'Peta Hisabnish/Sub Auditors class 3, Ankanda madadnish Exam', 350, 'G.P.S.C.', 484),
('bk0028', 'J B Popat', 'Senior Clerk class 3 Exam', 300, 'G.P.S.C.', 404),
('bk0029', 'J B Popat', 'Indian Post Payments Bank Limited Assistant Manager (Territory) Exam', 220, 'Department of Post', 272),
('bk0030', 'J B Popat', 'Department of Post Multitasking Staff Exam', 220, 'Department of Post', 288),
('bk0031', 'J B  Popat', 'Staff Nurse, Nurseing tutor Exam', 350, 'Nurse', 468),
('bk0032', 'J B Popat', 'IBPS Bank Clerk Exam', 220, 'Bank', 272),
('bk0033', 'J B Popat', 'SBI JUNIOR ASSOCIATES Exam', 220, 'Bank', 260),
('bk0034', 'J B Popat', 'Homeopathy Medical Officers Exam', 350, 'Panchayat', 436),
('bk0035', 'J B Popat', 'Railway Recruitment Board Group D Exam', 220, 'Railway', 276),
('bk0036', 'J B  Popat', 'High Court of Gujarat Driver Exam', 220, 'High Court', 296),
('bk0037', 'J B  Popat', 'GSRTC Conductor Exam', 250, 'GSRTC', 340),
('bk0038', 'J B Popat', 'High court of Gujarat Assistant Exam', 240, 'High Court', 312),
('bk0039', 'J B  Popat', 'High court of Gujarat Deputy Section Officers Exam ', 240, 'High court', 312),
('bk0040', 'J B Popat', 'Bank of Baroda Peon Exam', 250, 'Bank', 312),
('bk0041', 'J B Popat', 'P.S.I. Priliminary Exam', 600, 'Police', 756),
('bk0042', 'J B  Popat', 'Staff Nurse Compounder, Laboratory Technician class 3 Exam', 250, 'Nurse', 400);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `product_id` varchar(6) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `type`, `product_id`, `quantity`) VALUES
('a@gmail.com', 'book', 'bk0027', 1),
('vp@gmail.com', 'book', 'bk0001', 1),
('vp@gmail.com', 'book', 'bk0010', 1),
('vp@gmail.com', 'book', 'bk0031', 1),
('vp@gmail.com', 'book', 'bk0038', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mailus`
--

CREATE TABLE `mailus` (
  `email` varchar(40) NOT NULL,
  `name` varchar(60) NOT NULL,
  `tel` int(11) NOT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mailus`
--

INSERT INTO `mailus` (`email`, `name`, `tel`, `message`) VALUES
('vp@gmail.com', 'abc', 123456789, 'nice service');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`email`) VALUES
('vp@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` varchar(6) NOT NULL,
  `test_id` varchar(6) NOT NULL,
  `q_title` varchar(500) NOT NULL,
  `optionA` varchar(100) NOT NULL,
  `optionB` varchar(100) NOT NULL,
  `optionC` varchar(100) NOT NULL,
  `optionD` varchar(100) NOT NULL,
  `correct_ans` varchar(2) NOT NULL,
  `difficulty` varchar(10) NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `test_id`, `q_title`, `optionA`, `optionB`, `optionC`, `optionD`, `correct_ans`, `difficulty`, `category`) VALUES
('q00001', 'TEST01', 'Choose the correct option to fill the blank for correct grammatical use.\r\n______ Angry Birds is a new game, it has quickly become very popular\r\n', 'Although', 'Just like', 'Similarly', 'But', 'A', 'easy', 'G.P.S.C'),
('q00002', 'TEST01', 'Read each sentence to find out in which word there is an error.\r\n  Although I have worked in this office for over two years, I am yet to find a person with who I feel comfortable', 'although', 'FOR', 'yet', 'who', 'D', 'easy', 'G.P.S.C'),
('q00003', 'TEST02', 'Select the most appropriate meaning of the idiomatic phrase \'Down in dumps\'\r\n Poor Jagjit has been down in the dumps since he came to know of his result.\r\n', 'depressed', 'elated', 'furious', 'ill-tempered', 'A', 'easy', 'G.P.S.C'),
('q00004', 'TEST03', 'Choose the word or pair of words that best completes the relationship to the given pair:\r\nPastoral: Rural ::', 'Agriculture: Industry ', 'Prosperity: Happiness', 'Metropolitan: Urban', 'Struggle: Goal', 'C', 'easy', 'G.P.S.C'),
('q00005', 'TEST04', 'A trader sells two goods having identical cost price (CP). On one he earns a margin of profit equal to 20%, and in the other he cheats on weight claiming to sell at no-profit-no-loss basis.Actually he cheats his customers by going 800 gm only instead of 1 kg. What is his overall percentage gain?', '20%', '22%', '25%', '30%', 'C', 'medium', 'G.P.S.C'),
('q00006', 'TEST05', 'The smallest number of 6 digits which is exactly divisible by 10, 12 & 25 is:', '1,00,100', '1,00,200', '1,00,300', '1,20,000', 'B', 'hard', 'G.P.S.C'),
('q00007', 'TEST06', 'A man borrows 4000 at 15% compound rate of interest. All the end of first and second years, he pays respectively 1500 and off the debt? 2000. How much should he pay at end to third year to clear his debt?', '1605', '1715', '1800', '2005', 'C', 'hard', 'G.P.S.C'),
('q00008', 'TEST01', 'To BEST communicate with a client who is totally deaf, the nurse aide should:', 'smile frequently and speak loudly', 'smile often and talk rapidly', 'avoid eye contact', 'write out information', 'D', 'easy', 'Nurse'),
('q00009', 'TEST02', 'If a client says, “God is punishing me” or “Why me?”, how should the nurse aide respond?', 'Reply, “God doesn’t punish people.”\r\n\r\n', 'Listen quietly', 'Ignore the client', 'Make jokes', 'B', 'easy', 'Nurse'),
('q00010', 'TEST03', 'If a client is confused, the nurse aide should:', 'ignore the client until he starts to make sense', 'restrain the client so that he does not hurt himself', 'keep the client away from other clients', 'help the client to recognize familiar things and people', 'D', 'medium', 'Nurse'),
('q00011', 'TEST04', 'To avoid pulling the catheter when turning a male client, the catheter tube must be taped to the client’s:', 'bed sheet', 'upper thigh\r\n', 'bed frame', 'hip', 'B', 'medium', 'Nurse'),
('q00012', 'TEST05', 'The Heimlich maneuver (abdominal thrust) is used for a client who has:', 'a bloody nose', 'a blocked airway', 'fallen out of bed', 'impaired eyesight', 'B', 'hard', 'Nurse'),
('q00013', 'TEST06', 'The following are the standard tuberculosis drug except:', 'Chloromycin', 'Streptomycin', 'INH', 'PAS', 'A', 'hard', 'Nurse'),
('q00014', 'TEST06', 'When transferring a client, MOST of the client’s weight should be supported by the nurse aide’s:', 'back', 'shoulders', 'wrists', 'legs', 'D', 'medium', 'Nurse'),
('q00015', 'TEST01', '1. What is the term for a device used to take the place of a missing body part?', 'Pronation', 'Abduction', 'External rotation', 'Prosthesis', 'D', 'medium', 'Nurse'),
('q00016', 'TEST03', 'When a client has left-sided weakness, what part of a sweater is put on first?', 'Both sleeves', 'Left sleeve', 'Clients choice', 'Right sleeve', 'B', 'medium', 'Nurse'),
('q00017', 'TEST04', 'What is the process of restoring a disabled client to the highest level of functioning possible?', 'Responsibility', 'Retention ', 'Reincarnation', 'Rehabilitation', 'D', 'medium', 'Nurse'),
('q00018', 'TEST01', 'Netizen means :', 'City using net', 'Citizen using net', 'Citizen having computer', 'Hyper link', 'B', 'easy', 'GSRTC'),
('q00019', 'TEST02', 'Who was the first governor of Gujarat?', 'Sharda Mukherjee', 'Nityanand Kanungo', 'Shriman Narayan', 'Mehdi Nawaz Jung', 'D', 'medium', 'GSRTC'),
('q00020', 'TEST03', 'when did the motor vehicle act come into force', '1 July 1989 ', '1 July 1988', '1 January 1988', '1 March 1989', 'A', 'medium', 'GSRTC'),
('q00021', 'TEST05', 'Which clause states about vehicle registration', '37', '38', '39', '40', 'D', 'medium', 'GSRTC'),
('q00022', 'TEST04', 'Duty of driver in case of accident and injury to a person is stated in which act', '133', '134', '135', '136', 'B', 'hard', 'GSRTC'),
('q00023', 'TEST06', 'bc roy award is given in the field of', 'Music', 'Medicine', 'Environment', 'Journalism', 'B', 'medium', 'GSRTC'),
('q00024', 'TEST04', 'Entomology is the science that studies:', 'insects ', 'soil ', 'rock and earth', 'human behaviour', 'A', 'hard', 'GSRTC'),
('q00025', 'TEST02', '(1)swaraj is my birthright and i shall have it - by bhagat singh\r\n(2)Give me blood, and I shall give you freedom -  by Subhas Chandra Bose\r\nWhich of the following is correct?', 'ONLY 1', 'ONLY 2', 'BOTH 1 AND 2', 'NONE OF THE ABOVE', 'B', 'easy', 'GSRTC'),
('q00026', 'TEST01', 'mohiniattam dance from developed originally in which state', 'Tamilnadu', 'Orissa', 'Orissa', 'Karnataka', 'C', 'easy', 'GSRTC'),
('q00027', 'TEST02', 'The Non-cooperation movement was withdrawn because of', 'Chauri Chaura incident', 'Fear of government', 'Pact with the Britishers', 'Inadequate work force', 'A', 'medium', 'GSRTC'),
('q00028', 'TEST01', 'How many years of work experience in High Court is required to become Justice of the Supreme Court ?', '8 years', '10 years', '12 years', '15 years', 'B', 'easy', 'Panchayat'),
('q00029', 'TEST02', 'Sunderban in Hooghly delta is known for ', 'Conifers', 'Mangroves ', 'Grasslands ', 'Arid Forests', 'B', 'easy', 'Panchayat'),
('q00030', 'TEST03', 'Who holds the post of Director. Gate for Accelerated Innovation in Nuclear (GAIN) initiative, USA', 'Rita Baranwal ', 'Nikki Haley', 'Raj Shah ', 'Indra Nooyi', 'A', 'medium', 'Panchayat'),
('q00031', 'TEST04', 'When did Vasco da Game discover the sea route from Europe to India ?', '1524', '1497', '1519', '1460', 'B', 'medium', 'Panchayat'),
('q00032', 'TEST05', 'Which Article is related With \"Abolition of Untouchability\" ? ', 'Article 47', 'Article 18', 'Article 19', 'Article 20', 'A', 'medium', 'Panchayat'),
('q00033', 'TEST06', 'In 1953, under whose chairmanship was the first OBC Commission formed ? ', 'KK. Shetty ', 'Hardekar Manjappa', 'Kaka Kalelkar', 'Joachim Alva', 'C', 'hard', 'Panchayat'),
('q00034', 'TEST01', 'Which one of the following is NOT a tributary of river Kaveri?', 'Bhavani', 'Amravati', 'Kabini', 'Vaigai', 'D', 'medium', 'SSC'),
('q00035', 'TEST02', 'Rovers Cup is associated with which of the following sports?', 'Lawn Tennis', 'Football', 'Snooker', 'Swimming', 'A', 'easy', 'SSC'),
('q00036', 'TEST03', 'A can complete a piece of work in 20 days and B can complete 20% of the work in 6 days. If they work together in how many days can they finish 50% of the work, if they work together?', '6', '8', '9', '12', 'A', 'medium', 'SSC'),
('q00037', 'TEST04', 'The ten digit number 2x600000y8 is exactly divisible by 24. If x ≠ 0 and y ≠ 0, then the least value of (x + y) is equal to:', '2', '5', '8', '9', 'B', 'hard', 'SSC'),
('q00038', 'TEST05', 'The average of 1088 real numbers is zero. At most how many of them can be negative?', '88', '100', '1087', '544', 'C', 'hard', 'SSC'),
('q00039', 'TEST06', 'A biochemical compound is any:', 'carbon-based compound found in living things', 'hydrogen-based compound found in living things\r\n', 'mineral-based compound found in living things', 'sulfur-based compound found in living things', 'A', 'hard', 'SSC'),
('q00040', 'TEST03', 'Select the option that is related to the third letter-pair in the same way as the second letter-pair is related to the first letter-pair.\r\nGP : TK : : DR ?', 'WX', 'VU', 'IW', 'WI', 'D', 'medium', 'SSC'),
('q00041', 'TEST05', 'Which number will replace the question mark (?) in the following series?\r\n2, 3, 8, 31, ?', '95', '154', '105', '134', 'B', 'medium', 'SSC'),
('q00042', 'TEST02', 'Change the voice - \'Everyone must pay taxes.\' ', 'Everyone must be pay taxes', 'Everyone must be paid taxes ', 'Taxes must be paid by everyone ', 'Taxes must be paid to everyone', 'C', 'easy', 'Talati'),
('q00043', 'TEST06', 'who is called the india napoleon', 'Ashoka ', 'Samudragupt ', 'Vikramaditya ', 'Chandragupt maurya', 'B', 'hard', 'Talati'),
('q00044', 'TEST05', 'Gujarat vidhan sabha is named after ', 'Vithalbhai Patel', 'Indulal yagnik', 'Vallabhbhai patel ', 'chhotubhai purani ', 'A', 'hard', 'Talati'),
('q00045', 'TEST04', 'nifty is associated with', 'OCTEL', 'BSE', 'ASE', 'NSE ', 'D', 'medium', 'Talati'),
('q00046', 'TEST03', 'what is the only backwater port of Gujarat?', 'Porbandar ', 'okha ', 'kandla ', 'veraval', 'C', 'medium', 'Talati'),
('q00047', 'TEST02', 'Where is the main office of National Dairy Development Board', 'surat', 'Mehsana', 'Anand', 'Bhavnagar', 'C', 'easy', 'Talati'),
('q00048', 'TEST01', '______ is an ore of mercury?', 'magnetite ', 'bauxite ', 'Cinnabar ', 'hematite', 'C', 'easy', 'Railway'),
('q00049', 'TEST02', '_____ can be used as an olfactory indicator', 'Alum', 'Amla', 'Tamarind', 'Vanilla', 'D', 'easy', 'Railway'),
('q00050', 'TEST03', 'What comes next in this series ?\r\n12B, 2H,14C, 4G, 16D, ___', '18E ', '6E ', '6Q ', '6F', 'D', 'medium', 'Railway'),
('q00051', 'TEST04', 'The diagonals of a rhombus are 12 and 16 cm area of the figure formed by joining their mid points is', '96 cm2', '64 cm2', '48 cm2', '192 cm2', 'C', 'medium', 'Railway'),
('q00052', 'TEST05', 'In which year was battle of waterloo fought?', '1835', '1850', '1840', '1815', 'D', 'hard', 'Railway'),
('q00053', 'TEST01', 'Which of the following ports has been renamed as \'Deendayal Port\' by the Union Ministry of Shipping? ', 'Mandvi Port ', 'Porbandar Port ', 'Bhavnagar Port', 'Kandla Port ', 'D', 'medium', 'Department of Post'),
('q00054', 'TEST02', 'Complete the series. 4, 6, 10, 18, (....), 66 ', '34', '22', '24', '32', 'A', 'easy', 'Department of Post'),
('q00055', 'TEST03', 'Introducing a man, Nirmal said, \"His wife is the only daughter of my wife\". How is Nirmal related to that man? ', 'Father-in-law', 'Father', 'Grandfather', 'Son', 'A', 'easy', 'Department of Post'),
('q00056', 'TEST06', 'Which of the following events is celebrated every year on January 9 to mark the contribution of the overseas Indian 0 community in the development of India? ', 'Unnatiya Bharat Divas (UBD)', 'Pravasi Bharatiya Divas (PBD)', 'Akhil Bharatiya Divas (ABD) ', 'Overseas Indian Development Day (OIDD)', 'D', 'hard', 'Railway'),
('q00057', 'TEST04', 'Archery is the National Sport of ?', 'India ', 'Pakistan ', 'Bhutan ', 'Bangladesh ', 'C', 'medium', 'Department of Post'),
('q00058', 'TEST05', 'Complete the series. Q, N, K, H, (....) ', 'G', 'F', 'E', 'J', 'C', 'medium', 'Department of Post'),
('q00059', 'TEST06', 'Who appoints the Chief Justice and other judges of the High Courts in India?', 'President ', 'Chief Minister', 'Prime Minister ', 'Governor', 'A', 'hard', 'Department of Post');

-- --------------------------------------------------------

--
-- Table structure for table `take_test`
--

CREATE TABLE `take_test` (
  `email` varchar(40) NOT NULL,
  `test_id` varchar(6) NOT NULL,
  `score` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `test_id` varchar(6) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`test_id`, `price`) VALUES
('TEST01', 0),
('TEST02', 0),
('TEST03', 0),
('TEST04', 360),
('TEST05', 360),
('TEST06', 380);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `name`) VALUES
('a@gmail.com', 'aaaa', 'ABC'),
('abcd@gmail.com', 'ab', 'abc'),
('unknown', 'unknown', 'unknown'),
('vp@gmail.com', 'abcd', 'Vibhuti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `email` (`user_id`,`type`,`product_id`) USING BTREE,
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `take_test`
--
ALTER TABLE `take_test`
  ADD KEY `test_id` (`test_id`),
  ADD KEY `take_test_ibfk_1` (`email`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`email`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `tests` (`test_id`);

--
-- Constraints for table `take_test`
--
ALTER TABLE `take_test`
  ADD CONSTRAINT `take_test_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `take_test_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `tests` (`test_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
