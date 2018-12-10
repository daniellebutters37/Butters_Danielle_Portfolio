-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 05, 2018 at 04:29 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(40) NOT NULL,
  `project_number` varchar(15) NOT NULL,
  `project_thumbnail` varchar(30) NOT NULL,
  `project_image` varchar(30) NOT NULL,
  `project_roles` varchar(30) NOT NULL,
  `project_objective` text NOT NULL,
  `project_result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`project_id`, `project_name`, `project_number`, `project_thumbnail`, `project_image`, `project_roles`, `project_objective`, `project_result`) VALUES
(1, 'celladore', '01', 'celladore_thumb.jpg', 'celladore.jpg', 'back-end dev, co-designer', 'To brand and build a website that connects people with much more than a face moisturizer. Delivering a collective experience of branding, scientific research, skincare and shopping.', 'Logo decisions were made with the aim to brand Celladore from a medical perspective connecting to the history of their scientific breakthroughs with Hyaluronic Acid. Celladore’s scientific breakthrough allows for a deep, long lasting moisturizer which we represent with an array of pastel colours. The back-end development was achieved with the Model View Controller framework, Laravel. '),
(2, 'tidal infuser bottle', '02', 'tidal_thumb.jpg', 'tidal.jpg', 'design, branding', 'To brand and design an infuser bottle with the functionality for a thermal container with a detachable infuser pod. ', 'We wanted to create a physically and aesthetically versatile water bottle with the aim of balance and sustainability at the forefront. Imagery and designs were chosen specifically to create and invoke a sensory experience and a feeling of balance and relaxation. \r\n'),
(3, 'purevolume', '03', 'purevolume_thumb.jpg', 'purevolume.jpg', 'project manager', 'Rebrand an existing music sharing platform that transformed many music careers. The new direction of purevolume was to create and brand a website that offers a media platform for not only music, but entertainment and pop culture. ', 'Our team provided a fully functional and responsive website that delivered an array of content within pop culture, entertainment and music. We wanted to give a direct and fresh approach to a media platform website that invites engagement with our audience and the world. Our logo, colour, and website layout were designed to give an effortless and comfortable experience, while maintaining the history of purevolume.'),
(4, 'colgate beer', '04', 'colgate_thumb.jpg', 'colgate.jpg', 'design', 'Take a popular existing brand and explore the idea of the company’s branding and apply it to beer products.\r\n', 'Inspired by the colours of the Colgate-Optic White line of toothpaste, two flavours of beer were designed. A red ale and a witbier give a playful way of adhering to Colgate’s colour scheme to display a bold beer can and bottle label. Wheat was added as a subtle design to indicate and symbolize the process of brewing beer. '),
(5, 'eco culinarius', '05', 'eco_thumb.jpg', 'eco.jpg', 'design, branding', 'To design and brand an environmentally conscious and healthy fast food restaurant chain.', 'Eco culinarious allows fast food to take on a new meaning. Our branding speaks to those who want quick healthy options. Our logos incorporated a geometric design that gives a modern feel that allows the brand to set itself apart as a new age fast food restaurant. '),
(6, 'organ donation campaign', '06', 'organ_thumb.jpg', 'organ.jpg', 'design, branding', 'Dr. Ott from Harvard University has developed an organ transplant process involving the regeneration and experimental orthotopic transplantation of bioengineered organs. This process essentially washes the organs from their existing genetic cells. The goal was to create a campaign to help encourage the donation of money and organs. \r\n', 'Our campaign was called Organ Revive. Dr. Ott is doing just that, and we wanted to show a representation of his procedure by depicting organs being cleaned through playful water activities. This lends a warm and positive take on organ donation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
