-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 05:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_transfer`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_rec`
--

CREATE TABLE `applicant_rec` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`mem_id`, `trackid`, `date_created`, `firstname`, `lastname`, `section`, `address`) VALUES
(718, '', ' 2023/09/17', 'dict', 'gggg', '', ''),
(719, '', ' 2023/09/17', 'dict', 'nnn', '', ''),
(720, '', ' 2023/09/17', 'sds', 'gggfgfg', '', ''),
(721, '', ' 2023/09/17', 'sds', 'vvv', '', ''),
(722, '', ' 2023/09/17', 'sds', 'vvv', '', ''),
(723, '', ' 2023/09/17', 'recordnew', 'ffghfgh', '', ''),
(724, '', ' 2023/09/17', 'recordnew', 'gggg', '', ''),
(725, '', ' 2023/09/17', 'recordclaim', 'hhhh', '', ''),
(726, '', ' 2023/09/17', 'recordclaim', 'gggggggg', '', ''),
(727, '', ' 2023/09/17', 'recordclaim', 'hhhh', '', ''),
(728, '', ' 2023/09/17', 'recordclaim', 'hhhh', '', ''),
(729, '', ' 2023/09/17', 'recordclaim', 'IPCR', '', ''),
(730, '', ' 2023/09/17', 'recordclaim', 'ffff', '', ''),
(731, '', ' 2023/09/17', 'recordclaim', 'hhhhh', '', ''),
(732, '', ' 2023/09/17', 'recordclaim', 'hfghf', '', ''),
(733, '', ' 2023/09/17', 'recordclaim', 'gfhfg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `status`) VALUES
(1, 'asds', 'asds', 'active'),
(2, 'sds', 'sds', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `indexupdate`
--

CREATE TABLE `indexupdate` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member1`
--

CREATE TABLE `member1` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `member1`
--

INSERT INTO `member1` (`mem_id`, `trackid`, `date_created`, `firstname`, `lastname`, `section`, `address`) VALUES
(670, '2023-99-17292', '2023-9-9-21:25', 'Jupiter', 'IPCR', 'Records', '');

-- --------------------------------------------------------

--
-- Table structure for table `member2`
--

CREATE TABLE `member2` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberacct`
--

CREATE TABLE `memberacct` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `memberacct`
--

INSERT INTO `memberacct` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(93, '2023-99-89842', 'acct', 'acct', 'Records', '', '2023-09-09 13:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `memberasds`
--

CREATE TABLE `memberasds` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `memberasds`
--

INSERT INTO `memberasds` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(84, '2023-99-26831', 'asds', 'asds', 'Records', '', '2023-09-09 13:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `memberbudget`
--

CREATE TABLE `memberbudget` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `memberbudget`
--

INSERT INTO `memberbudget` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(77, '2023-99-72798', 'budget', 'budget', 'Records', '', '2023-09-09 13:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `membercashier`
--

CREATE TABLE `membercashier` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `membercashier`
--

INSERT INTO `membercashier` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(73, '2023-99-52025', 'cashier', 'cashier', 'Records', '', '2023-09-09 13:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `membercid`
--

CREATE TABLE `membercid` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `membercid`
--

INSERT INTO `membercid` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(65, '2023-99-74540', 'cid', 'cid', 'Records', '', '2023-09-09 13:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `memberclaim`
--

CREATE TABLE `memberclaim` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberclient`
--

CREATE TABLE `memberclient` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `memberclient`
--

INSERT INTO `memberclient` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(1664, '2023-824-37458', 'abueva', 'TAKE tim po', 'Records', '', '2023-08-24 13:58:14'),
(1665, '2023-824-67574', 'Jupiter', 'gggg', 'Records', '', '2023-08-24 13:58:28'),
(1666, '2023-824-45224', 'SCNHS', 'IPCR', 'Records', '', '2023-08-24 13:59:05'),
(1667, '2023-824-37458', 'Records', 'TAKE tim po', 'SDS', 'In Process', '2023-08-24 14:00:15'),
(1668, '2023-824-67574', 'Records', 'gggg', 'ASDS', 'In Process', '2023-08-24 14:00:22'),
(1669, '2023-824-45224', 'Records', 'IPCR', 'CID', 'In Process', '2023-08-24 14:00:33'),
(1670, '2023-824-67574', 'ASDS', 'gggg', 'Records', 'In Process', '2023-08-24 14:51:43'),
(1671, '2023-824-67574', 'Records', 'gggg', 'Client', 'Completed', '2023-08-24 14:56:08'),
(1672, '2023-824-37458', 'SDS', 'TAKE tim po', 'Records', 'Approved', '2023-08-24 14:59:35'),
(1673, '2023-824-37458', 'SDS', 'TAKE tim po', 'Records', 'Approved', '2023-08-24 15:00:30'),
(1674, '2023-91-568', 'ROY', 'IPCR', 'Records', '', '2023-09-01 04:39:28'),
(1675, '2023-91-568', 'ROY', 'IPCR', 'Records', '', '2023-09-01 05:10:29'),
(1676, '2023-91-48856', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 05:10:41'),
(1677, '2023-91-48856', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 05:16:40'),
(1678, '2023-91-49468', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 05:16:57'),
(1679, '2023-91-49468', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 05:17:31'),
(1680, '2023-91-76255', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 05:19:07'),
(1681, '2023-91-76255', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 05:22:33'),
(1682, '2023-91-29771', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-01 05:25:17'),
(1683, '2023-91-29771', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-01 05:37:23'),
(1684, '2023-91-6657', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-01 05:38:48'),
(1685, '2023-91-6657', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-01 05:39:01'),
(1686, '2023-91-91472', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-01 05:41:41'),
(1687, '2023-91-91472', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-01 05:41:50'),
(1688, '2023-91-16149', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-01 05:44:01'),
(1689, '2023-91-16149', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-01 05:44:09'),
(1690, '2023-91-39809', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-01 05:45:32'),
(1691, '2023-91-39809', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-01 05:45:39'),
(1692, '2023-91-5846', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-01 05:46:23'),
(1693, '2023-91-5846', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-01 05:46:30'),
(1694, '2023-91-43732', 'dgdf', 'roy', 'Records', '', '2023-09-01 05:47:42'),
(1695, '2023-91-43732', 'dgdf', 'roy', 'Records', '', '2023-09-01 05:47:52'),
(1696, '2023-91-10190', 'ERWIN', 'ee', 'Records', '', '2023-09-01 05:48:53'),
(1697, '2023-91-10190', 'ERWIN', 'ee', 'Records', '', '2023-09-01 05:49:00'),
(1698, '2023-91-40663', 's', 'w', 'Records', '', '2023-09-01 05:50:44'),
(1699, '2023-91-40663', 's', 'w', 'Records', '', '2023-09-01 05:50:48'),
(1700, '2023-91-25579', 's', 's', 'Records', '', '2023-09-01 05:53:17'),
(1701, '2023-91-25579', 's', 's', 'Records', '', '2023-09-01 05:53:23'),
(1702, '2023-91-27994', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 05:54:58'),
(1703, '2023-91-38664', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 05:56:49'),
(1704, '2023-91-38664', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 05:59:17'),
(1705, '2023-91-27994', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 05:59:19'),
(1706, '2023-91-43227', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 05:59:26'),
(1707, '2023-91-43227', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 06:02:19'),
(1708, '2023-91-47511', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 06:02:25'),
(1709, '2023-91-47511', 'ROY', 'ABUEVA', 'Records', '', '2023-09-01 06:23:27'),
(1710, '2023-91-84181', 'w', 'w', 'Records', '', '2023-09-01 06:26:19'),
(1711, '2023-95-93591', 'ABUEVA', 'TAKE tim po', 'Records', '', '2023-09-04 18:05:36'),
(1712, '2023-91-84181', 'w', 'w', 'Records', '', '2023-09-05 20:19:15'),
(1713, '2023-91-84181', 'SDS', 'w', 'Records', 'Disapproved', '2023-09-05 20:23:36'),
(1714, '2023-91-84181', 'SDS', 'w', 'Records', 'Disapproved', '2023-09-05 20:24:04'),
(1715, '2023-91-43227', 'ROY', 'ABUEVA', 'Records', '', '2023-09-05 20:24:08'),
(1716, '2023-91-27994', 'ROY', 'ABUEVA', 'Records', '', '2023-09-05 20:24:24'),
(1717, '2023-91-38664', 'ROY', 'ABUEVA', 'Records', '', '2023-09-05 20:24:27'),
(1718, '2023-91-25579', 's', 's', 'Records', '', '2023-09-05 20:24:29'),
(1719, '2023-91-40663', 's', 'w', 'Records', '', '2023-09-05 20:24:33'),
(1720, '2023-91-10190', 'ERWIN', 'ee', 'Records', '', '2023-09-05 20:24:35'),
(1721, '2023-91-43732', 'dgdf', 'roy', 'Records', '', '2023-09-05 20:24:38'),
(1722, '2023-91-5846', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-05 20:24:41'),
(1723, '2023-91-39809', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-05 20:24:44'),
(1724, '2023-91-16149', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-05 20:24:47'),
(1725, '2023-91-91472', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-05 20:24:51'),
(1726, '2023-91-6657', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-05 20:24:53'),
(1727, '2023-91-29771', 'ROY', 'henooo jkfdjksldfj lkjaslfk', 'Records', '', '2023-09-05 20:24:56'),
(1728, '2023-91-76255', 'ROY', 'ABUEVA', 'Records', '', '2023-09-05 20:24:59'),
(1729, '2023-95-93591', 'ABUEVA', 'TAKE tim po', 'Records', '', '2023-09-05 20:31:26'),
(1730, '2023-95-93591', 'ABUEVA', 'TAKE tim po', 'Records', '', '2023-09-05 20:33:39'),
(1731, '2023-96-70238', 'SCNHS', 'hello nana memo', 'Records', '', '2023-09-05 20:36:02'),
(1732, '2023-96-70238', 'SCNHS', 'hello nana memo', 'Records', '', '2023-09-05 20:36:17'),
(1733, '2023-96-70238', 'SDS', 'hello nana memo', 'ASDS', 'Approved', '2023-09-05 20:51:36'),
(1734, '2023-96-13539', 'ROY', 'abueva', 'Records', '', '2023-09-05 20:53:10'),
(1735, '2023-96-13539', 'ROY', 'abueva', 'Records', '', '2023-09-05 20:53:36'),
(1736, '2023-96-13539', 'ROY', 'abueva', 'Records', '', '2023-09-05 20:53:55'),
(1737, '2023-98-7208', 'Jupiter', 'IPCR', 'Records', '', '2023-09-07 21:17:19'),
(1738, '2023-98-7208', 'Jupiter', 'IPCR', 'Records', '', '2023-09-07 21:17:49'),
(1739, '2023-98-7208', 'Jupiter', 'IPCR', 'Records', '', '2023-09-07 21:18:26'),
(1740, '2023-98-87800', 'ABUEVA', 'TAKE tim po', 'Records', '', '2023-09-08 02:29:56'),
(1741, '2023-98-87800', 'ABUEVA', 'TAKE tim po', 'Records', '', '2023-09-08 02:44:59'),
(1742, '2023-98-87800', 'ABUEVA', 'TAKE tim po', 'Records', '', '2023-09-08 02:45:38'),
(1743, '2023-98-92861', 'ROY', 'vvv', 'Records', '', '2023-09-08 02:49:56'),
(1744, '2023-98-92861', 'ROY', 'vvv', 'Records', '', '2023-09-08 02:50:12'),
(1745, '2023-98-92861', 'ROY', 'vvv', 'Records', '', '2023-09-08 02:54:12'),
(1746, '2023-824-45224', 'Records', 'IPCR', 'CID', 'In Process', '2023-09-08 02:54:39'),
(1747, '2023-824-45224', 'Records', 'IPCR', 'CID', 'In Process', '2023-09-08 03:31:50'),
(1748, '2023-824-45224', 'Records', 'IPCR', 'CID', 'In Process', '2023-09-08 03:31:57'),
(1749, '2023-824-45224', 'Records', 'IPCR', 'CID', 'In Process', '2023-09-08 20:49:03'),
(1750, '2023-824-45224', 'Records', 'IPCR', 'CID', 'In Process', '2023-09-08 20:49:10'),
(1751, '2023-824-45224', 'Records', 'IPCR', 'CID', 'In Process', '2023-09-08 20:50:09'),
(1752, '2023-824-45224', 'Records', 'IPCR', 'CID', 'In Process', '2023-09-08 20:50:20'),
(1753, '2023-824-45224', 'Records', 'IPCR', 'CID', 'In Process', '2023-09-08 20:53:31'),
(1754, '2023-824-45224', 'Cashier', 'IPCR', 'SDS', 'for Claim', '2023-09-08 20:53:56'),
(1755, '2023-824-45224', 'Cashier', 'IPCR', 'SDS', 'for Claim', '2023-09-08 20:54:18'),
(1756, '2023-824-45224', 'Cashier', 'IPCR', 'SDS', 'for Claim', '2023-09-08 20:54:30'),
(1757, '2023-824-45224', 'Cashier', 'IPCR', 'SDS', 'for Claim', '2023-09-08 20:57:46'),
(1758, '2023-824-45224', 'Cashier', 'IPCR', 'SDS', 'for Claim', '2023-09-08 20:59:13'),
(1759, '2023-824-45224', 'Cashier', 'IPCR', 'SDS', 'for Claim', '2023-09-08 20:59:26'),
(1760, '2023-824-45224', 'Cashier', 'IPCR', 'SDS', 'for Claim', '2023-09-08 20:59:34'),
(1761, '2023-824-45224', 'SDS', 'IPCR', 'Accounting', 'Approved', '2023-09-08 21:02:54'),
(1762, '2023-824-45224', 'Accounting', 'IPCR', 'SDS', 'Approved', '2023-09-08 21:04:20'),
(1763, '2023-824-45224', 'Accounting', 'IPCR', 'SDS', 'Approved', '2023-09-08 21:06:49'),
(1764, '2023-824-45224', 'Accounting', 'IPCR', 'SDS', 'Approved', '2023-09-08 21:07:09'),
(1765, '2023-824-45224', 'SDS', 'IPCR', 'Legal', 'Approved', '2023-09-08 21:07:27'),
(1766, '2023-824-45224', 'SDS', 'IPCR', 'Legal', 'Approved', '2023-09-08 21:07:33'),
(1767, '2023-98-87800', 'SGOD', 'TAKE tim po', 'SDS', 'In Process', '2023-09-09 09:13:12'),
(1768, '2023-98-87800', 'SGOD', 'TAKE tim po', 'SDS', 'In Process', '2023-09-09 09:13:52'),
(1769, '2023-98-87800', 'SGOD', 'TAKE tim po', 'SDS', 'In Process', '2023-09-09 09:14:15'),
(1770, '2023-98-87800', 'SGOD', 'TAKE tim po', 'SDS', 'In Process', '2023-09-09 09:14:28'),
(1771, '2023-98-87800', 'SGOD', 'TAKE tim po', 'SDS', 'In Process', '2023-09-09 09:14:52'),
(1772, '2023-98-87800', 'SGOD', 'TAKE tim po', 'SDS', 'In Process', '2023-09-09 09:15:07'),
(1773, '2023-96-13539', 'ROY', 'abueva', 'Records', '', '2023-09-09 09:15:51'),
(1774, '2023-96-70238', 'SDS', 'hello nana memo', 'ASDS', 'Approved', '2023-09-09 09:15:53'),
(1775, '2023-98-87800', 'SGOD', 'TAKE tim po', 'SDS', 'In Process', '2023-09-09 09:16:07'),
(1776, '2023-98-87800', 'SGOD', 'TAKE tim po', 'SDS', 'In Process', '2023-09-09 09:16:26'),
(1777, '', '', '', '', '', '2023-09-09 09:17:06'),
(1778, '2023-824-45224', 'SDS', 'IPCR', 'Legal', 'Approved', '2023-09-09 09:27:35'),
(1779, '2023-824-45224', 'Supply', 'IPCR', 'SDS', 'In Process', '2023-09-09 09:28:52'),
(1780, '2023-824-45224', 'SDS', 'IPCR', 'Supply', 'Approved', '2023-09-09 09:29:09'),
(1781, '2023-824-45224', 'Supply', 'IPCR', 'SDS', 'In Process', '2023-09-09 09:29:30'),
(1782, '2023-824-45224', 'SDS', 'IPCR', 'Supply', 'Approved', '2023-09-09 09:29:58'),
(1783, '2023-824-45224', 'Supply', 'IPCR', 'Accounting', 'In Process', '2023-09-09 09:30:23'),
(1784, '2023-824-45224', 'Accounting', 'IPCR', 'Supply', 'Approved', '2023-09-09 09:30:47'),
(1785, '2023-824-45224', 'Accounting', 'IPCR', 'Supply', 'Approved', '2023-09-09 09:31:41'),
(1786, '2023-824-45224', 'ASDS', 'IPCR', 'Supply', 'In Process', '2023-09-09 09:32:10'),
(1787, '2023-824-45224', 'ASDS', 'IPCR', 'Supply', 'In Process', '2023-09-09 09:32:27'),
(1788, '2023-95-93591', 'ABUEVA', 'TAKE tim po', 'Records', '', '2023-09-09 09:59:02'),
(1789, '2023-91-49468', 'ROY', 'ABUEVA', 'Records', '', '2023-09-09 09:59:56'),
(1790, '2023-91-48856', 'Records', 'ABUEVA', 'Client', 'Completed/Claimed', '2023-09-09 10:00:08'),
(1791, '2023-91-48856', 'Records', 'ABUEVA', 'Client', 'Completed/Claimed', '2023-09-09 10:00:31'),
(1792, '2023-91-48856', 'Records', 'ABUEVA', 'Client', 'Completed/Claimed', '2023-09-09 10:01:05'),
(1793, '2023-91-48856', 'Records', 'ABUEVA', 'Client', 'Completed/Claimed', '2023-09-09 10:01:25'),
(1794, '2023-91-48856', 'Records', 'ABUEVA', 'Client', 'Completed/Claimed', '2023-09-09 10:01:38'),
(1795, '2023-91-48856', 'Records', 'ABUEVA', 'Client', 'Completed/Claimed', '2023-09-09 10:01:55'),
(1796, '2023-91-48856', 'Records', 'ABUEVA', 'Client', 'Completed/Claimed', '2023-09-09 10:08:13'),
(1797, '2023-91-568', 'ROY', 'IPCR', 'Records', '', '2023-09-09 10:13:34'),
(1798, '2023-91-49468', 'ROY', 'ABUEVA', 'Records', '', '2023-09-09 10:14:18'),
(1799, '2023-91-49468', 'ROY', 'ABUEVA', 'Records', '', '2023-09-09 10:18:28'),
(1800, '2023-91-49468', 'ROY', 'ABUEVA', 'Records', '', '2023-09-09 10:18:49'),
(1801, '2023-824-45224', 'ASDS', 'IPCR', 'Supply', 'In Process', '2023-09-09 10:25:57'),
(1802, '2023-824-45224', 'ASDS', 'IPCR', 'Supply', 'In Process', '2023-09-09 10:26:10'),
(1803, '2023-824-45224', 'ASDS', 'IPCR', 'Supply', 'In Process', '2023-09-09 10:26:24'),
(1804, '2023-824-45224', 'ASDS', 'IPCR', 'Supply', 'In Process', '2023-09-09 10:26:50'),
(1805, '2023-824-45224', 'ASDS', 'IPCR', 'Supply', 'In Process', '2023-09-09 10:27:37'),
(1806, '', '', '', '', '', '2023-09-09 10:27:52'),
(1807, '2023-824-45224', 'Legal', 'EIPCRF', 'SDS', 'In Process', '2023-09-09 10:29:56'),
(1808, '2023-824-45224', 'SDS', 'EIPCRF', 'SGOD', 'Approved', '2023-09-09 10:30:22'),
(1809, '2023-824-45224', 'SDS', 'EIPCRF', 'SGOD', 'Approved', '2023-09-09 10:30:59'),
(1810, '2023-98-7208', 'HRMO', 'IPCRFROY', 'Records', 'Approved', '2023-09-09 10:44:35'),
(1811, '2023-98-7208', 'HRMO', 'IPCRFROY', 'Records', 'Approved', '2023-09-09 10:47:22'),
(1812, '2023-98-7208', 'HRMO', 'IPCRFROY', 'Records', 'Approved', '2023-09-09 10:47:31'),
(1813, '2023-98-7208', 'HRMO', 'IPCRFROY', 'Records', 'Approved', '2023-09-09 10:47:42'),
(1814, '2023-98-7208', 'HRMO', 'IPCRFROY', 'Records', 'Approved', '2023-09-09 10:53:50'),
(1815, '2023-98-7208', 'HRMO', 'IPCRFROY', 'Records', 'Approved', '2023-09-09 10:54:16'),
(1816, '2023-98-7208', 'HRMO', 'IPCRFROY', 'Records', 'Approved', '2023-09-09 10:54:32'),
(1817, '2023-98-7208', 'HRMO', 'IPCRFROY', 'Records', 'Approved', '2023-09-09 10:54:46'),
(1818, '2023-98-87800', 'SGOD', 'TAKE tim po', 'DPSU', 'In Process', '2023-09-09 11:00:21'),
(1819, '2023-98-87800', 'DPSU', 'UNIT', 'DPSU', 'In Process', '2023-09-09 11:00:49'),
(1820, '2023-98-87800', 'DPSU', 'UNIT', 'DPSU', 'In Process', '2023-09-09 11:01:10'),
(1821, '2023-98-87800', 'DPSU', 'UNIT', 'DPSU', 'In Process', '2023-09-09 11:01:18'),
(1822, '2023-98-87800', 'DPSU', 'UNIT', 'DPSU', 'In Process', '2023-09-09 11:01:33'),
(1823, '2023-98-92861', 'ROY', 'vvv', 'Records', '', '2023-09-09 11:07:55'),
(1824, '2023-98-92861', 'ROY', 'vvv', 'Records', '', '2023-09-09 11:08:12'),
(1825, '2023-98-92861', 'ROY', 'vvv', 'Records', '', '2023-09-09 11:08:40'),
(1826, '2023-98-92861', 'ROY', 'vvv', 'Records', '', '2023-09-09 11:08:48'),
(1827, '2023-98-92861', 'ROY', 'vvv', 'Records', '', '2023-09-09 11:09:06'),
(1828, '2023-98-92861', 'ROY', 'vvv', 'Records', '', '2023-09-09 11:25:23'),
(1829, '2023-98-92861', 'Cashier', 'Cashier', 'SDS', 'for Claim', '2023-09-09 11:26:37'),
(1830, '2023-98-92861', 'Cashier', 'Cashier', 'SDS', 'for Claim', '2023-09-09 11:26:58'),
(1831, '2023-98-92861', 'Cashier', 'Cashier', 'SDS', 'for Claim', '2023-09-09 11:27:07'),
(1832, '2023-98-92861', 'Cashier', 'Cashier', 'SDS', 'for Claim', '2023-09-09 11:27:29'),
(1833, '2023-98-92861', 'Cashier', 'Cashier', 'SDS', 'for Claim', '2023-09-09 11:27:40'),
(1834, '2023-98-92861', 'Cashier', 'Cashier', 'SDS', 'for Claim', '2023-09-09 11:28:08'),
(1835, '2023-98-92861', 'Cashier', 'Cashier', 'SDS', 'for Claim', '2023-09-09 11:28:31'),
(1836, '2023-98-92861', 'Budget', 'Budget', 'SDS', 'In Process', '2023-09-09 11:46:55'),
(1837, '2023-98-92861', 'Budget', 'Budget', 'SDS', 'In Process', '2023-09-09 11:47:16'),
(1838, '2023-98-92861', 'Budget', 'Budget', 'SDS', 'In Process', '2023-09-09 11:47:28'),
(1839, '2023-98-92861', 'Budget', 'Budget', 'SDS', 'In Process', '2023-09-09 11:47:48'),
(1840, '2023-98-92861', 'Budget', 'Budget', 'SDS', 'In Process', '2023-09-09 11:48:02'),
(1841, '2023-98-92861', 'Budget', 'Budget', 'SDS', 'In Process', '2023-09-09 11:48:18'),
(1842, '2023-98-92861', 'Budget', 'Budget', 'SDS', 'In Process', '2023-09-09 12:09:27'),
(1843, '2023-98-92861', 'ASDS', 'ASDS', 'SDS', 'In Process', '2023-09-09 12:10:05'),
(1844, '2023-98-92861', 'ASDS', 'ASDS', 'SDS', 'In Process', '2023-09-09 12:10:22'),
(1845, '2023-98-92861', 'ASDS', 'ASDS', 'SDS', 'In Process', '2023-09-09 12:10:30'),
(1846, '2023-98-92861', 'ASDS', 'ASDS', 'SDS', 'In Process', '2023-09-09 12:10:47'),
(1847, '2023-98-92861', 'ASDS', 'ASDS', 'SDS', 'In Process', '2023-09-09 12:14:20'),
(1848, '2023-98-92861', 'Accounting', 'Accounting', 'SDS', 'Approved', '2023-09-09 12:14:56'),
(1849, '2023-98-92861', 'Accounting', 'Accounting', 'SDS', 'Approved', '2023-09-09 12:15:27'),
(1850, '2023-98-92861', 'Accounting', 'Accounting', 'SDS', 'Approved', '2023-09-09 12:15:37'),
(1851, '2023-98-92861', 'Accounting', 'Accounting', 'SDS', 'Approved', '2023-09-09 12:15:59'),
(1852, '2023-99-70018', 'ABUEVA', 'ABUEVA', 'Records', '', '2023-09-09 12:17:34'),
(1853, '2023-99-70018', 'index_trans', 'ABUEVA', 'Records', 'In Process', '2023-09-09 12:24:34'),
(1854, '2023-99-16018', 'ERWIN', 'IPCR', 'Records', '', '2023-09-09 12:28:08'),
(1855, '2023-99-16018', 'Records', 'ERWIN', 'Records', 'In Process', '2023-09-09 12:28:55'),
(1856, '2023-99-97741', 'SCNHS', 'EIPCRF', 'Records', '', '2023-09-09 12:42:20'),
(1857, '2023-99-97741', 'Records', 'EIPCRF', 'Records', 'In Process', '2023-09-09 12:43:43'),
(1858, '2023-99-97741', 'Records', 'EIPCRF', 'Records', 'In Process', '2023-09-09 12:44:30'),
(1859, '2023-99-22328', 'abueva', 'TAKE tim po', 'Records', '', '2023-09-09 12:46:45'),
(1860, '2023-99-22328', 'abueva', 'TAKE tim po', 'Records', '', '2023-09-09 12:58:25'),
(1861, '2023-99-10525', 'ABUEVA', 'TAKE tim po', 'Records', '', '2023-09-09 12:58:38'),
(1862, '2023-99-10525', 'ABUEVA', 'TAKE tim po', 'Records', '', '2023-09-09 12:58:55'),
(1863, '2023-99-22328', 'abueva', 'TAKE tim po', 'Records', '', '2023-09-09 12:59:33'),
(1864, '2023-99-16018', 'Records', 'ERWIN', 'Records', 'In Process', '2023-09-09 12:59:37'),
(1865, '2023-91-49468', 'ROY', 'ABUEVA', 'Records', '', '2023-09-09 12:59:41'),
(1866, '2023-99-27946', 'sds', 'sds', 'Records', '', '2023-09-09 13:00:23'),
(1867, '2023-99-27946', 'sds', 'sds', 'Records', '', '2023-09-09 13:00:37'),
(1868, '2023-99-27946', 'sds', 'sds', 'Records', '', '2023-09-09 13:00:57'),
(1869, '2023-99-70018', 'index_trans', 'ABUEVA', 'Records', 'In Process', '2023-09-09 13:01:02'),
(1870, '2023-98-7208', 'HRMO', 'IPCRFROY', 'Records', 'Approved', '2023-09-09 13:01:04'),
(1871, '2023-91-47511', 'ROY', 'ABUEVA', 'Records', '', '2023-09-09 13:01:06'),
(1872, '2023-824-45224', 'SDS', 'EIPCRF', 'SGOD', 'Approved', '2023-09-09 13:01:26'),
(1873, '2023-98-87800', 'DPSU', 'UNIT', 'DPSU', 'In Process', '2023-09-09 13:01:35'),
(1874, '2023-98-92861', 'Accounting', 'Accounting', 'SDS', 'Approved', '2023-09-09 13:01:41'),
(1875, '2023-99-10525', 'ABUEVA', 'TAKE tim po', 'Records', '', '2023-09-09 13:02:04'),
(1876, '2023-99-83643', 'sds', 'sds', 'Records', '', '2023-09-09 13:03:05'),
(1877, '2023-99-83643', 'sds', 'sds', 'Records', '', '2023-09-09 13:03:22'),
(1878, '2023-99-26831', 'asds', 'asds', 'Records', '', '2023-09-09 13:03:38'),
(1879, '2023-99-26831', 'asds', 'asds', 'Records', '', '2023-09-09 13:03:49'),
(1880, '2023-99-4232', 'hrmo', 'hrmo', 'Records', '', '2023-09-09 13:04:08'),
(1881, '2023-99-4232', 'hrmo', 'hrmo', 'Records', '', '2023-09-09 13:04:20'),
(1882, '2023-99-74540', 'cid', 'cid', 'Records', '', '2023-09-09 13:04:41'),
(1883, '2023-99-74540', 'cid', 'cid', 'Records', '', '2023-09-09 13:04:51'),
(1884, '2023-99-44016', 'sgod', 'sgod', 'Records', '', '2023-09-09 13:05:20'),
(1885, '2023-99-44016', 'sgod', 'sgod', 'Records', '', '2023-09-09 13:05:31'),
(1886, '2023-99-45286', 'supply', 'supply', 'Records', '', '2023-09-09 13:05:57'),
(1887, '2023-99-45286', 'supply', 'supply', 'Records', '', '2023-09-09 13:06:09'),
(1888, '2023-99-63282', 'legal', 'legal', 'Records', '', '2023-09-09 13:06:34'),
(1889, '2023-99-63282', 'legal', 'legal', 'Records', '', '2023-09-09 13:06:49'),
(1890, '2023-99-52025', 'cashier', 'cashier', 'Records', '', '2023-09-09 13:07:09'),
(1891, '2023-99-52025', 'cashier', 'cashier', 'Records', '', '2023-09-09 13:07:21'),
(1892, '2023-99-75262', 'dpsu', 'dpsu', 'Records', '', '2023-09-09 13:07:44'),
(1893, '2023-99-75262', 'dpsu', 'dpsu', 'Records', '', '2023-09-09 13:07:55'),
(1894, '2023-99-89842', 'acct', 'acct', 'Records', '', '2023-09-09 13:08:14'),
(1895, '2023-99-89842', 'acct', 'acct', 'Records', '', '2023-09-09 13:08:30'),
(1896, '2023-99-72798', 'budget', 'budget', 'Records', '', '2023-09-09 13:08:51'),
(1897, '2023-99-72798', 'budget', 'budget', 'Records', '', '2023-09-09 13:09:07'),
(1898, '2023-99-40110', 'rec', 'rec', 'Records', '', '2023-09-09 13:09:24'),
(1899, '2023-99-40110', 'rec', 'rec', 'Records', '', '2023-09-09 13:09:34'),
(1900, '2023-99-20611', 's', 's', 'Records', '', '2023-09-09 13:12:14'),
(1901, '2023-99-20611', 's', 's', 'Records', '', '2023-09-09 13:20:25'),
(1902, '2023-99-36085', 'SCNHS', 'vvvv', 'Records', '', '2023-09-09 13:20:44'),
(1903, '2023-99-36085', 'SCNHS', 'vvvv', 'Records', '', '2023-09-09 13:24:26'),
(1904, '2023-99-17292', 'Jupiter', 'IPCR', 'Records', '', '2023-09-09 13:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `memberdpsu`
--

CREATE TABLE `memberdpsu` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `memberdpsu`
--

INSERT INTO `memberdpsu` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(65, '2023-99-75262', 'dpsu', 'dpsu', 'Records', '', '2023-09-09 13:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `memberhrmo`
--

CREATE TABLE `memberhrmo` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `memberhrmo`
--

INSERT INTO `memberhrmo` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(79, '2023-99-4232', 'hrmo', 'hrmo', 'Records', '', '2023-09-09 13:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `memberlegal`
--

CREATE TABLE `memberlegal` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `memberlegal`
--

INSERT INTO `memberlegal` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(66, '2023-99-63282', 'legal', 'legal', 'Records', '', '2023-09-09 13:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `memberrecord`
--

CREATE TABLE `memberrecord` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(250) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `memberrecord`
--

INSERT INTO `memberrecord` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(316, '2023-99-40110', 'rec', 'rec', 'Records', '', '2023-09-09 13:09:34'),
(317, '2023-99-20611', 's', 's', 'Records', '', '2023-09-09 13:20:25'),
(318, '2023-99-36085', 'SCNHS', 'vvvv', 'Records', '', '2023-09-09 13:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `membersds`
--

CREATE TABLE `membersds` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `membersds`
--

INSERT INTO `membersds` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(121, '2023-99-83643', 'sds', 'sds', 'Records', '', '2023-09-09 13:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `membersgod`
--

CREATE TABLE `membersgod` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `membersgod`
--

INSERT INTO `membersgod` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(59, '2023-99-44016', 'sgod', 'sgod', 'Records', '', '2023-09-09 13:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `membersupply`
--

CREATE TABLE `membersupply` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `membersupply`
--

INSERT INTO `membersupply` (`mem_id`, `trackid`, `firstname`, `lastname`, `section`, `address`, `date_created`) VALUES
(59, '2023-99-45286', 'supply', 'supply', 'Records', '', '2023-09-09 13:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `membertracking`
--

CREATE TABLE `membertracking` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `serving`
--

CREATE TABLE `serving` (
  `mem_id` int(11) NOT NULL,
  `trackid` varchar(100) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useracct`
--

CREATE TABLE `useracct` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useracct`
--

INSERT INTO `useracct` (`id`, `username`, `password`, `email`, `country`) VALUES
(6, 'Accounting', 'Accounting', 'acct@gmail.com', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `userasds`
--

CREATE TABLE `userasds` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userasds`
--

INSERT INTO `userasds` (`id`, `username`, `password`, `email`, `country`) VALUES
(8, 'ASDS', 'ASDS', 'asds@deped.gov.ph', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `userbudget`
--

CREATE TABLE `userbudget` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userbudget`
--

INSERT INTO `userbudget` (`id`, `username`, `password`, `email`, `country`) VALUES
(4, 'Budget', 'Budget', 'roy.abueva@deped.gov.ph', 'US');

-- --------------------------------------------------------

--
-- Table structure for table `usercashier`
--

CREATE TABLE `usercashier` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usercashier`
--

INSERT INTO `usercashier` (`id`, `username`, `password`, `email`, `country`) VALUES
(6, 'Cashier', 'Cashier', 'cashier@deped.gov.ph', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `usercid`
--

CREATE TABLE `usercid` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usercid`
--

INSERT INTO `usercid` (`id`, `username`, `password`, `email`, `country`) VALUES
(6, 'CID', 'CID', 'cid@deped.gov.ph', 'US');

-- --------------------------------------------------------

--
-- Table structure for table `userdpsu`
--

CREATE TABLE `userdpsu` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdpsu`
--

INSERT INTO `userdpsu` (`id`, `username`, `password`, `email`, `country`) VALUES
(6, 'DPSU', 'DPSU', 'dpsu@deped.gov.ph', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `userhrmo`
--

CREATE TABLE `userhrmo` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userhrmo`
--

INSERT INTO `userhrmo` (`id`, `username`, `password`, `email`, `country`) VALUES
(8, 'HRMO', 'HRMO', 'hrmo@deped.gov.ph', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `userlegal`
--

CREATE TABLE `userlegal` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlegal`
--

INSERT INTO `userlegal` (`id`, `username`, `password`, `email`, `country`) VALUES
(8, 'Legal', 'Legal', 'legal@deped.gov.ph', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `userqueue`
--

CREATE TABLE `userqueue` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userqueue`
--

INSERT INTO `userqueue` (`id`, `username`, `password`, `email`, `country`) VALUES
(8, 'Queue', 'Queue', 'queue@deped.gov.ph', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `userrecord`
--

CREATE TABLE `userrecord` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userrecord`
--

INSERT INTO `userrecord` (`id`, `username`, `password`, `email`, `country`) VALUES
(8, 'RecordClaim', 'RecordClaim', 'record@deped.gov.ph', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `country`) VALUES
(6, 'RecordNew', 'RecordNew', 'RecordNew@deped.gov.ph', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `userschat`
--

CREATE TABLE `userschat` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userschat`
--

INSERT INTO `userschat` (`id`, `username`, `password`, `email`, `school`) VALUES
(67, 'cash', 'cash', 'abuevaroy@yahoo.com', ''),
(68, 'yes', 'yes', 'roy@yahoo.com', 'scnhs'),
(69, 'no', 'no', 'roy@yahoo.com', ''),
(70, 'yu', 'yu', 'yu@yahoo.com', 'yu'),
(71, 'dict', 'dict', 'dict@deped.gov.ph', 'dict'),
(72, 'dicts', 'dicts', 'dicts@deped.gov.ph', 'dicts'),
(73, 'ads', 'ads', 'dict@deped.gov.ph', ''),
(74, 'roabueva', 'roabueva', 'roabueva@yahoo.com', 'scnhs'),
(75, 'royas', 'royas', 'roabueva@yahoo.com', ''),
(76, 'nm', 'nm', 'nm', 'nm');

-- --------------------------------------------------------

--
-- Table structure for table `usersds`
--

CREATE TABLE `usersds` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersds`
--

INSERT INTO `usersds` (`id`, `username`, `password`, `email`, `country`) VALUES
(6, 'SDS', 'SDS', 'sds@deped.gov.ph', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `usersgod`
--

CREATE TABLE `usersgod` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersgod`
--

INSERT INTO `usersgod` (`id`, `username`, `password`, `email`, `country`) VALUES
(6, 'SGOD', 'SGOD', 'sgos@deped.gov.ph', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `usersupply`
--

CREATE TABLE `usersupply` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersupply`
--

INSERT INTO `usersupply` (`id`, `username`, `password`, `email`, `country`) VALUES
(4, 'Supply', 'Supply', 'supply@deped.gov.ph', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `usertrans`
--

CREATE TABLE `usertrans` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertrans`
--

INSERT INTO `usertrans` (`id`, `username`, `password`, `email`, `country`) VALUES
(6, 'admintrans', 'Admintrans', 'Admintrans@deped.gov.ph', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `username`, `email`, `password`, `role`, `status`, `created_at`, `department_id`) VALUES
(1, 'asds', 'asds@deped.gov.ph', 'asds', 'admin', 'active', '2023-09-19 01:25:52', 1),
(2, 'sds', 'sds@deped.gov.ph', 'sds', 'admin', 'active', '2023-09-19 01:25:59', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `applicant_rec`
--
ALTER TABLE `applicant_rec`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indexupdate`
--
ALTER TABLE `indexupdate`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `member1`
--
ALTER TABLE `member1`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `member2`
--
ALTER TABLE `member2`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `memberacct`
--
ALTER TABLE `memberacct`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `memberasds`
--
ALTER TABLE `memberasds`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `memberbudget`
--
ALTER TABLE `memberbudget`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `membercashier`
--
ALTER TABLE `membercashier`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `membercid`
--
ALTER TABLE `membercid`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `memberclaim`
--
ALTER TABLE `memberclaim`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `memberclient`
--
ALTER TABLE `memberclient`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `memberdpsu`
--
ALTER TABLE `memberdpsu`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `memberhrmo`
--
ALTER TABLE `memberhrmo`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `memberlegal`
--
ALTER TABLE `memberlegal`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `memberrecord`
--
ALTER TABLE `memberrecord`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `membersds`
--
ALTER TABLE `membersds`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `membersgod`
--
ALTER TABLE `membersgod`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `membersupply`
--
ALTER TABLE `membersupply`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `membertracking`
--
ALTER TABLE `membertracking`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `serving`
--
ALTER TABLE `serving`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `useracct`
--
ALTER TABLE `useracct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userasds`
--
ALTER TABLE `userasds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userbudget`
--
ALTER TABLE `userbudget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercashier`
--
ALTER TABLE `usercashier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercid`
--
ALTER TABLE `usercid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdpsu`
--
ALTER TABLE `userdpsu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userhrmo`
--
ALTER TABLE `userhrmo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlegal`
--
ALTER TABLE `userlegal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userqueue`
--
ALTER TABLE `userqueue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userrecord`
--
ALTER TABLE `userrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userschat`
--
ALTER TABLE `userschat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersds`
--
ALTER TABLE `usersds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersgod`
--
ALTER TABLE `usersgod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersupply`
--
ALTER TABLE `usersupply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertrans`
--
ALTER TABLE `usertrans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `applicant_rec`
--
ALTER TABLE `applicant_rec`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=734;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `indexupdate`
--
ALTER TABLE `indexupdate`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `member1`
--
ALTER TABLE `member1`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=671;

--
-- AUTO_INCREMENT for table `member2`
--
ALTER TABLE `member2`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `memberacct`
--
ALTER TABLE `memberacct`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `memberasds`
--
ALTER TABLE `memberasds`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `memberbudget`
--
ALTER TABLE `memberbudget`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `membercashier`
--
ALTER TABLE `membercashier`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `membercid`
--
ALTER TABLE `membercid`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `memberclaim`
--
ALTER TABLE `memberclaim`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;

--
-- AUTO_INCREMENT for table `memberclient`
--
ALTER TABLE `memberclient`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1905;

--
-- AUTO_INCREMENT for table `memberdpsu`
--
ALTER TABLE `memberdpsu`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `memberhrmo`
--
ALTER TABLE `memberhrmo`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `memberlegal`
--
ALTER TABLE `memberlegal`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `memberrecord`
--
ALTER TABLE `memberrecord`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `membersds`
--
ALTER TABLE `membersds`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `membersgod`
--
ALTER TABLE `membersgod`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `membersupply`
--
ALTER TABLE `membersupply`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `membertracking`
--
ALTER TABLE `membertracking`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT for table `serving`
--
ALTER TABLE `serving`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `useracct`
--
ALTER TABLE `useracct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userasds`
--
ALTER TABLE `userasds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userbudget`
--
ALTER TABLE `userbudget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usercashier`
--
ALTER TABLE `usercashier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usercid`
--
ALTER TABLE `usercid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userdpsu`
--
ALTER TABLE `userdpsu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userhrmo`
--
ALTER TABLE `userhrmo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userlegal`
--
ALTER TABLE `userlegal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userqueue`
--
ALTER TABLE `userqueue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userrecord`
--
ALTER TABLE `userrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userschat`
--
ALTER TABLE `userschat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `usersds`
--
ALTER TABLE `usersds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usersgod`
--
ALTER TABLE `usersgod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usersupply`
--
ALTER TABLE `usersupply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertrans`
--
ALTER TABLE `usertrans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
