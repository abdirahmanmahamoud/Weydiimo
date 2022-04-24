-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 04:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weydiimo`
--

-- --------------------------------------------------------

--
-- Table structure for table `suaal`
--

CREATE TABLE `suaal` (
  `id` int(11) NOT NULL,
  `suaal` varchar(1000) NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `jawaab` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suaal`
--

INSERT INTO `suaal` (`id`, `suaal`, `a`, `b`, `c`, `d`, `jawaab`) VALUES
(1, 'adduunyo nin joogow , maxaa...', 'orod ku labaan', 'arragti ku labaan', 'amakaak ku labaan', 'maqal ku labaan', 'arragti ku labaan'),
(2, 'lacagta euro waddamadaan mid ka mid ah lagama isticmaal', 'colombia', 'italy', 'belgium', 'danmrk', 'colombia'),
(3, 'Eryga structure af soomaali waxuu noqonaya', 'qaab araag', 'qaab nololeed', 'qaab adeeg', 'qaab dhismeed', 'qaab dhismeed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `First_name` varchar(250) NOT NULL,
  `Last_name` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(34) NOT NULL,
  `Joined` varchar(80) NOT NULL,
  `image` varchar(40) NOT NULL,
  `code` varchar(6) NOT NULL,
  `jawaab` varchar(22) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suaal`
--
ALTER TABLE `suaal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `username` (`username`,`email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suaal`
--
ALTER TABLE `suaal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
