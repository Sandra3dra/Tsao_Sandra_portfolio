-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 03, 2020 at 03:44 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

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
  `ID` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `purposes` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(60) NOT NULL,
  `date` varchar(30) NOT NULL,
  `lead` varchar(40) NOT NULL,
  `collab` varchar(60) NOT NULL,
  `tech` varchar(70) NOT NULL,
  `hover_img` varchar(25) NOT NULL,
  `img_1` varchar(25) NOT NULL,
  `img_1t` varchar(25) NOT NULL,
  `img_1m` varchar(25) NOT NULL,
  `img_2` varchar(25) NOT NULL,
  `img_3` varchar(25) NOT NULL,
  `img_4` varchar(25) NOT NULL,
  `img_5` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`ID`, `title`, `purposes`, `description`, `link`, `date`, `lead`, `collab`, `tech`, `hover_img`, `img_1`, `img_1t`, `img_1m`, `img_2`, `img_3`, `img_4`, `img_5`) VALUES
(1, 'Anglers.org', 'Branding, Web design, and Development', 'TRAA is for the enhancement, protection and promotion of a viable, multi-species fishery within the Thames River watershed. The site is the goal to make friendly interaction, be attractive, confident, and better serve for the users. Ability to maintain proportions is key requirement of responsive design as mostly mobile devices nowadays.', 'https://anglers-org.herokuapp.com/', 'January-April 2019', 'Front-end developer', 'Luisa Valero', 'HTML5 | CSS | JavaScript', 'anglers_ss.png', 'anglers_1.jpg', 'anglers_1t.jpg', 'anglers_1m.jpg', 'anglers_2.jpg', 'anglers_3.jpg', 'anglers_4.jpg', 'anglers_5.jpg'),
(2, 'London Bakerology', 'Branding, Web Design, Development, Photography', 'Have a sweet tooth and live in London, Ontario? You are in luck! I present to you this website with places that are located in London, ON for you to find. This website is operated by a group of people that also love desserts and want to share their experiences with people, so no one miss on anything that might just be your favourite place to go. ', 'https://london-bakerology.herokuapp.com/', 'January-April 2018', 'Front-end developer | Photographer', 'Luisa Valero', 'HTML5 | CSS ', 'baker_ss.png', 'baker_1.jpg', 'baker_1t.jpg', 'baker_1m.jpg', 'baker_2.jpg', 'baker_3.jpg', 'baker_4.jpg', 'baker_5.jpg'),
(3, 'Music Mixer', 'Web Design & Development', 'This website can not be more simple as it is just a drag and drop functional website. Although it is very simple, it showcases the basic javascript usage in a very fun way. Music is always something entertaining to work with. Go ahead and jump in the website now. Create your own very special music mix!', 'https://music-mixer-2018.herokuapp.com/', 'March-April 2019', 'Front-end developer', 'Luisa Valero', 'HTML5 | CSS | JavaScript', 'music_ss.png', 'music_1.jpg', 'music_1t.jpg', 'music_1m.jpg', 'music_2.jpg', 'music_3.jpg', 'music_4.jpg', 'music_5.jpg'),
(4, 'Imagina', 'Branding, Web design, and Development', 'You Imagine, We Create. We are a company of ignited minds, imaginative solutions and endless ideas. Coming from different parts of the world, we are a collaboration of multidisciplinary designers. We think beyond the predictable boundaries to give your brand the right vision. We are forever keen to enhance human experiences and thrive on giving the best solutions.', 'https://imagina.herokuapp.com/', 'September 2019', 'Front-end Developer | Video Editor', 'Kahani Gajjar, Mariam Khalifa, Luisa Valero', 'HTML5 | CSS | JavaScript', 'imagina_ss.png', 'imagina_1.jpg', 'imagina_1t.jpg', 'imagina_1m.jpg', 'imagina_2.jpg', 'imagina_3.jpg', 'imagina_4.jpg', 'imagina_5.jpg'),
(5, 'Thermo Security', 'Branding, Web Design, Development, 3D animation', 'HouseCom™ ThermoSecurity™ System is a fully digital, hardwired and wireless (WiFi,Bluetooth) enabled home personal and secure environment control system. All communications with the central system are accessible and controlled through the wall unit, product app. and the secured portal on the parent website. The HouseCom™ ThermoSecurity™ System App is available on both iOS and Android devices.', 'https://thermo-security.herokuapp.com/', 'October 2019', 'Back-end Developer', 'Kahani Gajjar, Kayla Chang, Mariam Khalifa, Luisa Valero', 'HTML5 | CSS | JavaScript | SQL', 'thermo_ss.png', 'thermo_1.jpg', 'thermo_1t.jpg', 'thermo_1m.jpg', 'thermo_2.jpg', 'thermo_3.jpg', 'thermo_4.jpg', 'thermo_5.jpg'),
(6, 'Favourite Things', 'Web Design & Development', 'This website contains three things picked out by Sandra Tsao that she absolutely love and want to share with you. Go ahead and explore the website. See how Sandra demonstrates her favourites using the interactive features and visual experience through the web.', 'https://favourite-things-of-mine.herokuapp.com/', 'November 2019', 'Front & Back-end Developer ', 'N/A', 'HTML5 | CSS | JavaScript | SQL', 'fav_ss.png', 'fav_1.jpg', 'fav_1t.jpg', 'fav_1m.jpg', 'fav_2.jpg', 'fav_3.jpg', 'fav_4.jpg', 'fav_5.jpg'),
(7, 'Physics of Baseball', 'Video Editing, HUD', 'Start with collecting data and information related to the physics of baseball. My parnter and I were able to create some fantastic design and animation for some of the coolest HUD. By compiling the HUD with the edited videos, the story of the man playing baseball was demonstrated within 20 seconds. Along with the audio that gives the audiences an exciting and exceptional audio and visual experience. ', 'shorturl.at/juKM0', 'March 2020', 'Video Editor', 'Luisa Valero', 'After Effect | Adobe Illustrator', 'physics_ss.png', 'physics_1.jpg', 'physics_1t.jpg', 'physics_1m.jpg', 'physics_2.jpg', 'physics_3.jpg', 'physics_4.jpg', 'physics_5.jpg'),
(8, 'Login Page', 'Web Development, Database Handling', 'This is a website for simple yet functional user login interface. Users are able to easily navigate themselves after logging into the web page. Some of the main features of it is to create, edit, and delete users. Password encryption is also used in the process of making this website as well as some basic preventing of query injection.', 'https://sandra-login.herokuapp.com/', 'March 2020', 'Back-end Developer | Front-end Developer', 'N/A', 'HTML5 | CSS | PHP | MYSQL', 'login_ss.png', 'login_1.jpg', 'login_1t.jpg', 'login_1m.jpg', 'login_2.jpg', 'login_3.jpg', 'login_4.jpg', 'login_5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
