-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220521.3d3010916e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 06:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gl`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `username`, `email`, `sub`, `msg`) VALUES
(1, 'fffff', 'ssawddf@fgf.lol', 'ffrtdd', 'ddddddddddddddddddddddddddd'),
(2, 'fffff', 'ssawddf@fgf.lol', 'ffrtddssssssss', 'sssssssssss'),
(3, 'fffff', 'ssawddf@fgf.lol', 'ffrtdd', 'ssss');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `email`) VALUES
(3, 'sausithd@yahoo.com'),
(4, 'ggllkffgg@gmail.com'),
(5, 'ggllkffgg@gmail.com'),
(6, 'ssawddf@fgf.lol'),
(7, '123@gmail.com'),
(8, 'ggllkffgg@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `full_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `age` int(4) NOT NULL,
  `Phone` int(12) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`full_Name`, `Email`, `age`, `Phone`, `Message`) VALUES
('asdf', 'asd@asdfg', 43, 1234567, 'ferghnmj,'),
('asdf', 'asd@asdfg', 43, 1234567, 'gvcx'),
('sathya', 'sathya@gmail.com', 22, 762221060, 'im done.'),
('sathya', 'sathya@gmail.com', 22, 762221060, 'im done.'),
('asdf', 'asd@asdfg', 23, 1234567, 'mmmmmmmmmmmmmmm'),
('asdf', 'asd@asdfg', 23, 1234567, 'iuygtrfedgfvd'),
('pmkya', '123@gmail.com', 23, 56677334, 'sathtfbdbdfb ssf v');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `inquiry_id` int(11) NOT NULL,
  `details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`inquiry_id`, `details`) VALUES
(5, 'ffffffffffffffffff'),
(6, 'gggggggggggggggggggggggggggggggggggggggggggggggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `landowner`
--

CREATE TABLE `landowner` (
  `id` int(20) NOT NULL,
  `landType` enum('Agricultural','Residential','Commercial','Other') NOT NULL,
  `LandSize` varchar(20) NOT NULL,
  `units` enum('Purches','meters','kilometers','') NOT NULL,
  `lAddress` varchar(100) NOT NULL,
  `descptn` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `LOname` varchar(100) NOT NULL,
  `LOemail` varchar(100) NOT NULL,
  `mobileNo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landowner`
--

INSERT INTO `landowner` (`id`, `landType`, `LandSize`, `units`, `lAddress`, `descptn`, `Price`, `LOname`, `LOemail`, `mobileNo`) VALUES
(29, 'Agricultural', '223', 'kilometers', '147/2,mankadawala,saliyapura', ' ffsef', '100000', 'dawd', 'wdada', '0716748676'),
(32, '', '40', 'Purches', 'dawawdad', 'sample ', '500000', 'woof', 'hirankaushalya123@gmail.com', '0711234567'),
(33, 'Residential', '10', 'Purches', 'hmmmmmmmmmmmmmm', ' ddddddddddd', '1000000000', 'hiran', 'hirankaushalya123@gmail.com', '111111111'),
(34, 'Residential', 'sausith', 'Purches', 'bandarawela', ' ggllkk', '2234566', 'deshgggg', 'sase@gmail.com', '224456667');

-- --------------------------------------------------------

--
-- Table structure for table `land_details`
--

CREATE TABLE `land_details` (
  `Land_ID` varchar(10) NOT NULL,
  `Land_Name` varchar(50) NOT NULL,
  `Land_City` varchar(50) NOT NULL,
  `Land_Price` varchar(25) NOT NULL,
  `Land_Description` varchar(1000) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Contact_No` varchar(15) NOT NULL,
  `Reservation_Fee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land_details`
--

INSERT INTO `land_details` (`Land_ID`, `Land_Name`, `Land_City`, `Land_Price`, `Land_Description`, `Image`, `Contact_No`, `Reservation_Fee`) VALUES
('LO1001', 'ELINOR', 'BATTARAMULLA', '2,840,000 LKR', 'Gold Lands invites you to live in the most demanded neighborhood. Elinor, Signature Lands in Battaramulla by Gold Lands, the Best Developer in Sri Lanka with a credit rating of \"A stable\" from ICRA Lanka. Elinor offers you exclusive living in a high residential neighborhood in Battaramulla, with just 300m to Koswatta Junction, Close Proximity to all the Leading Banks & Supermarkets, 1km to Sethsiripaya, Close proximity to government offices, and convenience to all your urban needs', '../images/elinor-battaramulla.jpg', '0777268468', '250,000'),
('LO1002', 'PRIME-SERENE', 'GALLE', '1,495,000 LKR', 'Build your dream home in Cripps Road, Galle which is located with a close proximity to leading schools in Galle such as Mahinda college, Southland Girls’ high school, St. Aloysiuss’ College, Secret Heart Convent , Sangamiththa Balika and Richmond College. 2km to Galle highway exit and 300m to Galle Railway Station and Bus Stand. Developed by the best developer in Sri Lanka, Gold Lands. Reserve your land plots ranging from 7 to 11perch today.', '../images/prime serene-galle.jpg', '0777268468', '250,000'),
('LO1003', 'ETERNITY', 'PANADURA', '985,000 LKR', '\"Eternity\", esteem valued lands project for your residential and investment purposes from Panadura Nalluruwa, brought to you by Gold Lands, The Best Developer in Sri Lanka with a credit rating of \"A stable\" from ICRA Lanka.\r\nSituated within 50m from Galle road and with just 2km to Panadura Town \"Eternity\" offers ease to all your urban conveniences where it offers close proximity to leading banks, supermarkets, schools, etc.\r\nReserve your land plot today and enjoy the interest-free payment facilities offered by Gold Lands...!!!', '../images/eternity-panadura.jpg', '0777268468', '250,000'),
('LO1004', 'GLIMMER', 'WARAGODA', '1,495,000 LKR', 'Glimmer, another excellently located lands project from Gold Lands, The Best Developer in Sri Lanka with a credit rating of \"A stable\" from ICRA Lanka. With just 800m to Kandy road, 2 minutes to Peliyagoda Expressway interchange and just 400m to Kelaniya Dharmaloka College, the location of Glimmer is selected to create utmost convenience and ease to your day to day living.\r\nDo not miss this excellent chance. Reserve your land plot today...!!!', '../images/glimmer-waragoda.jpg', '0777268468', '250,000'),
('LO1005', 'CELESTE', 'JA-ELA', '575,000 LKR', 'Lands from an Excellent Location with just 5 mins to Ja-Ela Highway Entrance by Gold Lands, The Best Developer in Sri Lanka with a credit rating of \"A stable\" from ICRA Lanka. Celeste, Ja-Ela is located to bring convenience to your lifestyle where the property is Facing Ja-Ela 266/1 Bus Route & Located within 5 mins to Kandana Town.\r\nReserve your land plot today and enjoy the interest-free payment plan facilities offered by Gold Lands.', '../images/celeste-jaela.jpg', '0777268468', '250,000'),
('LO1006', 'EMINENT-PALACE', 'KELANIYA', '1,750,000 LKR', 'Ever dreamed of living in a quiet peaceful surrounding, yet so close to all conveniences? 100m to Colombo-Kandy main road. Reserve your land plot today!', '../images/eminent palace-kelaniya.jpg', '0777268468', '250,000'),
('LO1007', 'FINEST', 'MALABE', '1,750,000 LKR', 'A great opportunity from the best developer in Sri Lanka, Gold Lands to build your dream home with access to all your needs within close proximity. Valuable land plots inclusive of all facilities from Walivita road with a few minutes drive to Kadawatha highway entrance, MIT, Horizon Campus, SLIIT and many more.', '../images/finest-malabe.jpg', '0777268468', '250,000'),
('LO1008', 'GREEN EMBAZY', 'MALABE', '660,000 LKR', 'Green Embazy, Land Plots from Homagama for Residential and Investment Purposes by Gold Lands, The Best Developer in Sri Lanka with a credit rating of \"A stable\" from ICRA Lanka.\r\nGreen Embazy, Homagama offers you the ultimate living experience with a variety of nature views, mesmerizing lake & the scenic view of a paddy field.\r\nEnjoy the perfect blend of lush greenery & experience the utmost convenience with just 10mins to Homagama town, 4km to Meegoda Economic Center, and minutes away to many more urban needs.', '../images/green embazy-homagama.jpg', '0777268468', '250,000');

-- --------------------------------------------------------

--
-- Table structure for table `land_images`
--

CREATE TABLE `land_images` (
  `Land_ID` varchar(200) NOT NULL,
  `Image1` varchar(200) NOT NULL,
  `Image2` varchar(200) NOT NULL,
  `Image3` varchar(200) NOT NULL,
  `Image4` varchar(200) NOT NULL,
  `Image5` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land_images`
--

INSERT INTO `land_images` (`Land_ID`, `Image1`, `Image2`, `Image3`, `Image4`, `Image5`) VALUES
('LO1003', '../images/eternity-panadura1.jpg', '../images/eternity-panadura2.jpg', '../images/eternity-panadura3.jpg', '../images/eternity-panadura4.jpg', '../images/eternity-panadura5.jpg'),
('LO1004', '../images/glimmer-waragoda1.jpg', '../images/glimmer-waragoda2.jpg', '../images/glimmer-waragoda3.jpg', '../images/glimmer-waragoda4.jpg', '../images/glimmer-waragoda5.jpg'),
('LO1001', '../images/elinor-battaramulla1.jpg', '../images/elinor-battaramulla2.jpg', '../images/elinor-battaramulla3.jpg', '../images/elinor-battaramulla4.jpg', '../images/elinor-battaramulla5.jpg'),
('LO1002', '../images/prime serene-galle1.jpg', '../images/prime serene-galle2.jpg', '../images/prime serene-galle3.jpg', '../images/prime serene-galle4.jpg', '../images/prime serene-galle5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cvv` int(3) NOT NULL,
  `cardno` int(16) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `cvv`, `cardno`, `month`, `year`) VALUES
(2, 'P.P.H Sasuith Deshagra Wimansa', 112, 3345226, 'Jan', '2017'),
(3, 'hiran', 334, 1166778833, 'Oct', '2017'),
(4, 'P.P.H Sasuith Deshagra Wimansa', 223, 123334444, 'Jan', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`full_name`, `email`, `password`, `cpassword`, `photo`) VALUES
('asdf', 'asd@asdfg', 'qwerty', 'qwert', 'logo.png'),
('asdf', 'asd@asdfg', 'qwertyu', 'qwertyui', 'logo.png'),
('asdf', 'asd@asdfg', 'asdfghjk', 'asdfghj', 'logo.png'),
('pmkya', '123@gmail.com', '1234567', '1234567', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_request`
--

CREATE TABLE `reservation_request` (
  `ReservationID` int(10) NOT NULL,
  `Title` enum('Rev','Mr','Mrs','Miss') NOT NULL,
  `Name_with_initials` varchar(40) NOT NULL,
  `Full_name` varchar(50) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Occupation` varchar(30) NOT NULL,
  `Nationality` varchar(25) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Mobile_No` int(11) NOT NULL,
  `Home_No` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Land_ID` varchar(10) NOT NULL,
  `Monthly_income` int(11) NOT NULL,
  `Tax_payer` varchar(10) NOT NULL,
  `NIC_Document` varchar(200) NOT NULL,
  `Birth_Certificate_Document` varchar(200) NOT NULL,
  `Salary_Slip_Document` varchar(200) NOT NULL,
  `Other_Document` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` int(225) NOT NULL,
  `district` varchar(255) NOT NULL DEFAULT 'Colombo',
  `dob` date NOT NULL,
  `password` varchar(225) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `email`, `contact_no`, `district`, `dob`, `password`, `user_type`) VALUES
(1, 'sausith', 'sausithd@yahoo.com', 703365723, 'Kandy', '2022-05-11', 'e10adc3949ba59abbe56e057f20f883e', 'Estate agent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `landowner`
--
ALTER TABLE `landowner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_details`
--
ALTER TABLE `land_details`
  ADD PRIMARY KEY (`Land_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_request`
--
ALTER TABLE `reservation_request`
  ADD PRIMARY KEY (`ReservationID`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `landowner`
--
ALTER TABLE `landowner`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation_request`
--
ALTER TABLE `reservation_request`
  MODIFY `ReservationID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



