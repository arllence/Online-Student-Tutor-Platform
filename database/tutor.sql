-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 10:04 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `img_dir` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_id`, `img_dir`) VALUES
(2, 1, 'uploads/5bf781cd960503.50889407.jpg'),
(4, 2, 'uploads/5bf7a6c4bf32a9.93235638.jpg'),
(5, 1, 'uploads/5bffe23679e216.03410456.jpg'),
(6, 3, 'uploads/5c011554e014c1.29926778.png'),
(7, 4, 'uploads/5c066b766ee509.76173992.png'),
(8, 6, 'uploads/5c066d78bb3a33.46460838.jpg'),
(9, 8, 'uploads/5c0674c229aec0.52756139.jpg'),
(10, 8, 'uploads/5c0674def1d3e9.72542629.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `userid`, `content`) VALUES
(1, 1, 'Programming is the closest thing we have to magic!'),
(2, 1, 'Bro, do you even code!'),
(3, 2, 'I love Science, come, lets study together!'),
(4, 4, 'am good i maths');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `account` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `account`, `email`, `password`, `admin`) VALUES
(1, 'JOE ALLEN', 'PROGRAMMING', 'joe@gmail.com', '$2y$10$ZTbC33jlkzGhSvFLqo6YHOmsmfcurnbumqSJ5j5rtS5c77QMsl.pS', NULL),
(2, 'CYNTHIA CYNDY', 'SCIENCE', 'ccyndy@gmail.com', '$2y$10$NigpkHX1/v83blu3lfyr4.PGuBnr62qrywlELRZOFt6Yow92K4.gS', NULL),
(3, 'JAMES JOHN', 'MATHEMATICS', 'jj@gmail.com', '$2y$10$b355Cwp02Dh3DNXM9ZvwLeZ9EktacWH2cOeBnodeJOtaAdeWvVbBG', NULL),
(4, 'JAMES BOND', 'MATHEMATICS', 'ghh@gmail.com', '$2y$10$DEksAYmXW5jbROJThRm8JOBl7xIjjtkxa4jAPSSTtDI3Tw9jXliEu', NULL),
(5, 'BRIAN MWASHI', 'BUSINESS', 'brian@gmail.com', '$2y$10$mBEXlsqA8q1eBWATc.GRKufqgiTKPoS8bqc1U9PqWzOG0fyvdWpp6', NULL),
(8, 'EDWARD', 'DESIGN', 'ed@gmail.com', '$2y$10$DScbAqBzmphPl/nhmXScYO/2lBUsXGwBpc14Um3tHXJQWCtsVXZoa', NULL),
(9, 'ADMIN', 'ADMIN', 'admin@tutor.com', '$2y$10$eOaps4WtvcJAalhIPIwkUuICkJzy/3s8FiHCEgXqBqQ1tTBA9Qu9u', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
