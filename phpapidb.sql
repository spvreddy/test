-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 09:29 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpapidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `userId` varchar(256) DEFAULT 'empty',
  `channel` varchar(200) DEFAULT NULL,
  `psid` varchar(220) NOT NULL,
  `appId` varchar(255) NOT NULL,
  `event` varchar(244) NOT NULL,
  `ts` varchar(244) NOT NULL,
  `tid` varchar(244) NOT NULL,
  `message` varchar(244) NOT NULL,
  `attachments` varchar(244) NOT NULL,
  `locale` varchar(244) NOT NULL,
  `gender` varchar(244) NOT NULL,
  `timezone` varchar(233) NOT NULL,
  `pciInfo` varchar(244) DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `userId`, `channel`, `psid`, `appId`, `event`, `ts`, `tid`, `message`, `attachments`, `locale`, `gender`, `timezone`, `pciInfo`, `created`) VALUES
(92, '62', 'Facebook', '4970366172990194', 'a_637599364350340000', 'MO', '2021-06-23T05:52:49.273Z', '0a098e4e-1e94-4282-8ef1-20d6041fc300_0', 'heloo', 'http://google.com/tester.png', 'localstorage', 'Male', 'Time zone in India (GMT+5:30)', 'Fully Supported', '2021-06-27 20:49:33'),
(98, '', 'Facebook', '4970366172990194', 'a_637599364350340000', 'MO', '2021-06-23T05:48:32.914Z', 'fc323c8f-f0ff-40bc-91f8-cd7cb6aca11c_0', 'IMI System Alert: Message couldn\'t be received due to API Issues', 'http://127.0.0.1/phpmyadmin/themes/pmahomme/img/logo_left.png', 'localstorageinthemaster', 'male', '+5.30 GMT IST', '{\"droppedAttachmentCount\":0,\"isPCICompliance\":false,\"isPCIValidationDone\":false,\"isAttachmentEnabled\":false,\"nonPCIComplianceReason\":{\"text\":\"IMI System Alert: Message couldn\'t be received due to API Issues\"}}', '2021-06-28 09:26:44'),
(99, '', 'Facebook', '4970366172990194', 'a_637599364350340000', 'MO', '2021-06-23T05:48:31.944Z', '1f30d78c-c35f-4b01-b513-f1746cce1422_0', 'IMI System Alert: Message couldn\'t be received due to API Issues', '', '', '', '', '{\"droppedAttachmentCount\":0,\"isPCICompliance\":false,\"isPCIValidationDone\":false,\"isAttachmentEnabled\":false,\"nonPCIComplianceReason\":{\"text\":\"IMI System Alert: Message couldn\'t be received due to API Issues\"}}', '2021-06-28 09:27:17'),
(100, '', 'Facebook', '4970366172990194', 'a_637599364350340000', 'MO', '2021-06-23T05:48:30.287Z', '1c0b424a-b8ce-44c0-9d0b-ed59c45d0158_0', 'IMI System Alert: Message couldn\'t be received due to API Issues', '', '', '', '', '{\"droppedAttachmentCount\":0,\"isPCICompliance\":false,\"isPCIValidationDone\":false,\"isAttachmentEnabled\":false,\"nonPCIComplianceReason\":{\"text\":\"IMI System Alert: Message couldn\'t be received due to API Issues\"}}', '2021-06-28 09:27:33'),
(101, '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2021-06-28 09:28:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
