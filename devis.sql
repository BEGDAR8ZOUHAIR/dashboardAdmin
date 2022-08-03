-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 06:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profond`
--

-- --------------------------------------------------------

--
-- Table structure for table `devis`
--

CREATE TABLE `devis` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `services` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devis`
--

INSERT INTO `devis` (`id`, `first_name`, `last_name`, `email`, `company`, `message`, `services`, `phone`) VALUES
(1, 'James', 'Finch', 'casipozaq@mailinator.com', 'Pugh Ramirez Inc', 'In delectus do quas', 'Branding, e-commerce,Développement,Production,graphique', '+1 (894) 398-8523'),
(2, 'Logan', 'Baxter', 'wiqofynas@mailinator.com', 'Cox Fitzgerald Traders', 'Aut quia debitis exp', 'Développement,Communication ,Autre,site,', '+1 (253) 346-7482'),
(3, 'Rina', 'Charles', 'higaqanem@mailinator.com', 'Lawson Joyce Trading', 'Nisi et quod in quam', 'Digital,Production,Autre,', '+1 (548) 649-9401'),
(4, 'Guinevere', 'Harvey', 'gapobaw@mailinator.com', 'Nielsen and Goodwin Co', 'Laborum Occaecat au', 'Branding, e-commerce,Digital,Production,', '+1 (203) 255-6092'),
(5, 'Mechelle', 'Clarke', 'xelu@mailinator.com', 'Decker and Burns Co', 'Id aut quis sed sed ', 'Branding, e-commerce,Production,', '+1 (451) 804-8146'),
(6, 'ddd', 'ddd', 'begdar8zouhair@gmail.com', 'ddd', 'dddddddd', 'Branding, e-commerce,', '0680351898'),
(7, 'qq', 'qq', 'begdar8zouhair@gmail.com', 'q', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Branding, e-commerce,', '0680351898'),
(8, 'Maya', 'Burton', 'pahopodyxe@mailinator.com', 'Dale and Clayton LLC', 'Reprehenderit vitae HGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG', 'Branding, e-commerce,Développement,Digital,Production,graphique,Communication ,Autre,site,', '+1 (897) 823-4635'),
(9, 'Joy', 'Christensen', 'pygejahuji@mailinator.com', 'Duffy and Strong Traders', 'Numquam voluptas ull', 'Production,graphique,site,', '+1 (345) 991-5595'),
(10, 'Dean', 'Newman', 'bawofifuw@mailinator.com', 'Fleming and Nguyen Associates', 'Ut sit in mollitia ', ' e-commerce,Digital,graphique', '+1 (889) 883-4331');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devis`
--
ALTER TABLE `devis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
