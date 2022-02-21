-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 12:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `id` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `under` varchar(50) NOT NULL,
  `time taken` int(10) NOT NULL,
  `ingredients` text NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`id`, `title`, `under`, `time taken`, `ingredients`, `file`) VALUES
(70, 'PAV BHAJI', 'Main', 2, '1\r\n \r\nSachet\r\nMAGGI Masala-ae-Magic\r\n450\r\n \r\ngms\r\nMixed Vegetables (Potato, Cauliflower, Carrot, Beans, Capsicum)\r\n2\r\n \r\nTablespoons\r\nOil\r\n2\r\n \r\nOnion (Chopped)\r\n1\r\n \r\nTeaspoon\r\nGinger-Garlic Paste\r\n2\r\n \r\nTomato (Chopped)\r\n50\r\n \r\ngms\r\nPeas\r\n2\r\n \r\nCups\r\nWater\r\n2\r\n \r\nGreen Chillies (Chopped)\r\n0.5\r\n \r\nTeaspoon\r\nTurmeric Powder\r\n1\r\n \r\nTeaspoon\r\nRed Chilli Powder\r\n2\r\n \r\nTeaspoons\r\nCoriander Powder\r\n1\r\n \r\nTeaspoon\r\nCumin Powder\r\n1\r\n \r\nTeaspoon\r\nAmchur Powder\r\n2\r\n \r\nTablespoons\r\nCoriander Leaves (Chopped)\r\n2\r\n \r\nTablespoons\r\nLime Juice\r\n1\r\n \r\nPinch\r\nSalt', 'uploads/21022022051509.jpg'),
(71, 'KANDA BHAJIYA', 'Starter', 20, '1\r\n \r\nSachet\r\nMAGGI Masala-ae-Magic\r\n450\r\n \r\ngms\r\nMixed Vegetables (Potato, Cauliflower, Carrot, Beans, Capsicum)\r\n2\r\n \r\nTablespoons\r\nOil\r\n2\r\n \r\nOnion (Chopped)\r\n1\r\n \r\nTeaspoon\r\nGinger-Garlic Paste\r\n2\r\n \r\nTomato (Chopped)\r\n50\r\n \r\ngms\r\nPeas\r\n2\r\n \r\nCups\r\nWater\r\n2\r\n \r\nGreen Chillies (Chopped)\r\n0.5\r\n \r\nTeaspoon\r\nTurmeric Powder\r\n1\r\n \r\nTeaspoon\r\nRed Chilli Powder\r\n2\r\n \r\nTeaspoons\r\nCoriander Powder\r\n1\r\n \r\nTeaspoon\r\nCumin Powder\r\n1\r\n \r\nTeaspoon\r\nAmchur Powder\r\n2\r\n \r\nTablespoons\r\nCoriander Leaves (Chopped)\r\n2\r\n \r\nTablespoons\r\nLime Juice\r\n1\r\n \r\nPinch\r\nSalt', 'uploads/21022022051644.jpg'),
(72, 'COOKIES', 'Dessert', 2, '1\r\n \r\nSachet\r\nMAGGI Masala-ae-Magic\r\n450\r\n \r\ngms\r\nMixed Vegetables (Potato, Cauliflower, Carrot, Beans, Capsicum)\r\n2\r\n \r\nTablespoons\r\nOil\r\n2\r\n \r\nOnion (Chopped)\r\n1\r\n \r\nTeaspoon\r\nGinger-Garlic Paste\r\n2\r\n \r\nTomato (Chopped)\r\n50\r\n \r\ngms\r\nPeas\r\n2\r\n \r\nCups\r\nWater\r\n2\r\n \r\nGreen Chillies (Chopped)\r\n0.5\r\n \r\nTeaspoon\r\nTurmeric Powder\r\n1\r\n \r\nTeaspoon\r\nRed Chilli Powder\r\n2\r\n \r\nTeaspoons\r\nCoriander Powder\r\n1\r\n \r\nTeaspoon\r\nCumin Powder\r\n1\r\n \r\nTeaspoon\r\nAmchur Powder\r\n2\r\n \r\nTablespoons\r\nCoriander Leaves (Chopped)\r\n2\r\n \r\nTablespoons\r\nLime Juice\r\n1\r\n \r\nPinch\r\nSalt', 'uploads/21022022051740.jpg'),
(73, 'TEA', 'Drink', 5, '1\r\n \r\nSachet\r\nMAGGI Masala-ae-Magic\r\n450\r\n \r\ngms\r\nMixed Vegetables (Potato, Cauliflower, Carrot, Beans, Capsicum)\r\n2\r\n \r\nTablespoons\r\nOil\r\n2\r\n \r\nOnion (Chopped)\r\n1\r\n \r\nTeaspoon\r\nGinger-Garlic Paste\r\n2\r\n \r\nTomato (Chopped)\r\n50\r\n \r\ngms\r\nPeas\r\n2\r\n \r\nCups\r\nWater\r\n2\r\n \r\nGreen Chillies (Chopped)\r\n0.5\r\n \r\nTeaspoon\r\nTurmeric Powder\r\n1\r\n \r\nTeaspoon\r\nRed Chilli Powder\r\n2\r\n \r\nTeaspoons\r\nCoriander Powder\r\n1\r\n \r\nTeaspoon\r\nCumin Powder\r\n1\r\n \r\nTeaspoon\r\nAmchur Powder\r\n2\r\n \r\nTablespoons\r\nCoriander Leaves (Chopped)\r\n2\r\n \r\nTablespoons\r\nLime Juice\r\n1\r\n \r\nPinch\r\nSalt', 'uploads/21022022051834.jfif'),
(74, 'GULAB JAMUN', 'Dessert', 1, '1\r\n \r\nSachet\r\nMAGGI Masala-ae-Magic\r\n450\r\n \r\ngms\r\nMixed Vegetables (Potato, Cauliflower, Carrot, Beans, Capsicum)\r\n2\r\n \r\nTablespoons\r\nOil\r\n2\r\n \r\nOnion (Chopped)\r\n1\r\n \r\nTeaspoon\r\nGinger-Garlic Paste\r\n2\r\n \r\nTomato (Chopped)\r\n50\r\n \r\ngms\r\nPeas\r\n2\r\n \r\nCups\r\nWater\r\n2\r\n \r\nGreen Chillies (Chopped)\r\n0.5\r\n \r\nTeaspoon\r\nTurmeric Powder\r\n1\r\n \r\nTeaspoon\r\nRed Chilli Powder\r\n2\r\n \r\nTeaspoons\r\nCoriander Powder\r\n1\r\n \r\nTeaspoon\r\nCumin Powder\r\n1\r\n \r\nTeaspoon\r\nAmchur Powder\r\n2\r\n \r\nTablespoons\r\nCoriander Leaves (Chopped)\r\n2\r\n \r\nTablespoons\r\nLime Juice\r\n1\r\n \r\nPinch\r\nSalt', 'uploads/21022022051944.jpg'),
(75, 'FRIED RICE', 'Main', 3, '1 onion\r\n3 chicken breasts\r\n1 carrot\r\n4 cloves garlic\r\n1 bell pepper\r\n6 tbsp sunflower oil\r\n1 tbsp sesame oil\r\n2 eggs\r\n3 tbsp soy sauce\r\n2 cups of rice\r\n1 1/2 cups water\r\ngreen onion\r\n3 tbsp oyster sauce\r\nsalt and pepper to taste', 'uploads/21022022052240.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
