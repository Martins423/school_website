-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2025 at 12:10 AM
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
-- Database: `school_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_sent` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `student_id`, `subject`, `message`, `date_sent`) VALUES
(6, NULL, 'Welcome All New Student', 'Hello, we are glad to have you all student on board', '2025-05-01 15:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `phone_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `course`, `phone_num`, `email`, `password`, `image`, `date`) VALUES
(11, 'Bazunu', 'Web Development', '080895959303', 'efe@gmail.com', '$2y$10$JQiq4CyqJQ1Y71/B5mK9iet3pYSS0mV5UWJrcBf1c/QNC8yVxRKi2', 'footer-pic-6.jpg', '2025-04-20 20:00:27'),
(16, 'hope', 'Software Engineering', '858599303', 'hope432@gmail.com', '$2y$10$sUldDHgkrWkpXsGgi0zCneYFChK7lxkqTNFIs7oIamPKhUMnphfF.', 'lec-3.jpg', '2025-04-20 20:58:03'),
(17, 'ifeoma', 'Computer Science', '85859494944', 'ify@gmail.com', '$2y$10$XIBtuL6sOzYS7XzImijSgOsKHhgtDrI/kJqCCAsEuD5ppohsYBika', 'student-2.jpg', '2025-04-20 20:59:08'),
(18, 'kingsely', 'Software Engineering', '0908083845', 'king@gmail.com', '$2y$10$O.nKLMhg.kSAjwbP0FVjouqJhKFFRTQK7sQQrrJI4ugKnWKEJgCzm', 'uni-5.jpg', '2025-04-21 13:02:12'),
(20, 'mart', 'Cyber Security', '080895984', 'mart@gmail.com', '$2y$10$SEeyBBk6U5buLY8RlVM7Sead6RLFBlHufLgjFmenE/X3NOWVhl.oG', 'footer-pic-6.jpg', '2025-04-23 03:31:18'),
(21, 'Marto', 'Computer Science', '0955940039394', 'mato@gmal.com', '$2y$10$ww9MUD0H5ATZNUZQ6H0IkuoQyKAQ6EexYDSxhSnC7wdevC6XBnTcK', 'lec-1 (2).jpg', '2025-04-29 07:48:56'),
(22, 'shuga', 'Computer Science', '08121447000', 'bazunuomoefe@gmail.com', '$2y$10$051tzvNYCU40ZbvDE0lY4.2qTHvhsjV9i26lkEeZp7/ZcP5VnKBvi', 'bg-img-3.jpg', '2025-05-01 22:57:35'),
(23, 'Davido', 'Computer Science', '0809698489', 'dave17@gmail.com', '$2y$10$9pAHOz1e3J25X3WSjDNDhe5BhNeagW4WMMdpDiUC5VbeVI/XtXx.W', 'lec-4.jpg', '2025-05-05 22:37:08'),
(24, 'hope1234', 'Cyber Security', '08065783939', 'hope10@gmail.com', '$2y$10$XkjgDaAm2ngt5qRW7CqphOo1B4.Elj8oyoQB4PxrsqBoh5RzqbrVK', 'lec-3.jpg', '2025-05-05 22:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `reply_text` text NOT NULL,
  `reply_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `message_id`, `student_id`, `reply_text`, `reply_date`) VALUES
(1, 5, 0, 'you are welcome here', '2025-04-29 08:36:25'),
(2, 6, 0, 'okay', '2025-04-29 08:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_role`, `user_image`) VALUES
(1, 'admin', '12345', 'admin', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`),
  ADD KEY `course` (`course`) USING BTREE;

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
