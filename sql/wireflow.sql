-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 09:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wireflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `datetime`) VALUES
(1, 'Jai sri ganesh', 'dfdf', '1212', '2025-01-07 22:55:11'),
(2, 'dfd', 'dfdf', '$2y$10$Xyc3CFKLgMSzH4z1n1hcve78im4EV1xpc4OeHWbLFC6rVhkzzHjaW', '2025-01-07 22:55:57'),
(3, 'fdfdfd', 'ffdd', '$2y$10$sKvuCHbVBC8r9W79jnlfQOLOPT.nRezk8k1HBZ2S75dKsCuIjHSPS', '2025-01-08 22:41:33'),
(4, 'test', 't@t.t', '$2y$10$9C0rx3VYRUTKPUko1QNzNOXfMAXd2c45Fbq96wAvuuRn9EI99wOVK', '2025-01-08 22:41:58'),
(5, 'admin', 'admin@admin.admin', '$2y$10$p/6s2sOEbDvRn/uCX4hqa.WQ0c.NRD7Ze1frHpoAJFaSIHU0Kyqey', '2025-01-09 23:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_age` varchar(255) NOT NULL,
  `emp_mobile_no` varchar(255) NOT NULL,
  `emp_address` varchar(255) NOT NULL,
  `emp_job_role` varchar(255) NOT NULL,
  `emp_salary_structure` varchar(255) NOT NULL,
  `emp_assigned_shifts` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_name`, `emp_age`, `emp_mobile_no`, `emp_address`, `emp_job_role`, `emp_salary_structure`, `emp_assigned_shifts`, `datetime`) VALUES
(1, 'A', '1', '1', 'A1', 'Aj', 'A', 'day_shift', '2025-01-05 23:22:59'),
(2, 'B', '2', 'B', 'B', 'B', 'B', 'day_shift', '2025-01-05 23:41:37'),
(3, 'C', 'C', 'C', 'C', 'C', 'C', 'night_shift', '2025-01-05 23:42:24'),
(4, 'a', 'a', 'a', 'dd', 'a', 'a', 'day_shift', '2025-01-05 23:49:08'),
(6, 'df', 'fd', 'ss', 'ddge', 'fge', 'erfer', 'day_shift', '2025-01-05 23:51:23'),
(7, 'jai sri ganesh', '20', '20', 'dd', 'ff', 'dd', 'day_shift', '2025-01-07 11:46:56'),
(8, 'check', 'dfd', 'fdf', 'dfedf', 'dfd', 'fdf', 'day_shift', '2025-01-07 21:35:57'),
(9, 'fdfd', 'dfdf', 'dfdf', 'dfdf', 'dfd', 'fdfd', 'day_shift', '2025-01-07 21:36:11'),
(10, 'rfefjieoji', 'dfjk', 'fkjk', 'ckjklj', 'fkj', 'lkj', 'night_shift', '2025-01-07 21:36:28'),
(11, 'fdfd', 'fdf', 'dfd', 'fdf', 'erer', 'fef', 'night_shift', '2025-01-07 21:36:40'),
(12, 'dfd', 'erer', 'rere', 'rer', 'efef', 'fefe', 'day_shift', '2025-01-07 21:36:52'),
(13, 'Annonto', '25', '5121235', 'brahmanbaria, bd', 'engineer', '454545454454554', 'day_shift', '2025-01-08 19:33:20'),
(14, 'fd', 'fd', 'fdf', 'dfdf', 'fdfd', 'fdf', 'day_shift', '2025-01-09 22:49:17'),
(15, 'fd', 'fd', 'fdf', 'dfdfffffdfdfd', 'fdfd', 'fdf', 'night_shift', '2025-01-09 23:22:54'),
(16, 'fd', 'fd', 'fdf', 'dfdfgfgfgfgf', 'fdfd', 'fdf', 'night_shift', '2025-01-09 23:23:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
