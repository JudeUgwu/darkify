-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 11:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darkify`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `image` varchar(200) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `published_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `category_id`, `image`, `likes`, `views`, `user_id`, `published_status`, `created_at`, `updated_at`) VALUES
(1, 'Facebook Australia: PM Scott Morrison', 'Australian Prime Minister Scott Morrison has said his government will not be intimidated by Facebook blocking news feeds to users.\r\n\r\nHe described the move to \"unfriend Australia\" as arrogant and disappointing.\r\n\r\nFacebook is responding to a proposed law which would make tech giants pay for news content on their platforms.\r\n\r\nAustralians on Thursday woke up to find that Facebook pages of all local and global news sites were unavailable.\r\n\r\nPeople outside the country are also unable to read or access any Australian news publications on the platform.\r\n\r\nSeveral government health and emergency pages were also blocked. Facebook later asserted this was a mistake and many of these pages are now back online.\r\n\r\nGoogle and Facebook have fought the law because they say it doesn\'t reflect how the internet works, and unfairly \"penalises\" their platforms.', 1, 'https://image.shutterstock.com/image-photo/many-happy-diverse-ethnicity-different-260nw-1733872811.jpg', 0, 2, 1, 1, '2021-02-18 09:20:52', '2021-02-18 09:20:52'),
(2, 'Clothes should float in and out of our lives', 'That is the suggestion of a new report by academics from five countries around the globe. But what exactly is a circular economy? In simple terms, it means that products are made from recycled materials, and they themselves are intended to be easily reused or recycled. Hence a circle is formed.\r\n\r\n\"Products float seamlessly in and out of our lives as needed, without creating waste,\" says Kristy Caylor, founder of US clothing firm For Days. That is how she describes the economic model.\r\n\r\nHer Los Angeles-based company is a zero-waste firm. Its customers are encouraged to mail in their old clothes (either from For Days, or their wider wardrobe) for money-off vouchers on new items.\r\n\r\nFor Days then recycles all the material, turning the cotton into its new clothes. Nothing ends up in landfill, and the company is carbon neutral too.\r\n\r\n\"We believe that the circular economy provides an opportunity to innovate, driving superior business results, and better customer loyalty,\" adds Ms Caylor. \"If we can align incentives for customers, business and the planet - that\'s the win.\"', 2, 'https://ichef.bbci.co.uk/news/976/cpsprodpb/174A4/production/_116969359_copyofcopyoffd_fw_2020_092.jpg', 0, 0, 3, 1, '2021-02-18 09:20:52', '2021-02-18 09:20:52'),
(3, 'Saira Khan receives threats after saying she is not a practising Muslim', 'TV presenter Saira Khan has said she received death threats after revealing she is not a practising Muslim.\r\n\r\nThe former Loose Women panellist clarified her faith earlier this week in a column for The Daily Mirror.\r\n\r\n\"The problem for women like me, who have a Muslim name and are of Asian heritage, is that others make assumptions about us before we even open our mouths,\" she said.\r\n\r\nIn an Instagram Live on Monday, Khan said she had received death threats.\r\n\r\nShe also posted a statement on her account which said she had been abused and trolled online.\r\n\r\nKhan shot to fame as a contestant on The Apprentice. She has since appeared on Dancing on Ice and Celebrity Big Brother.\r\n\r\nFor the last five years she has been a regular panellist on ITV\'s Loose Women, but she stepped down from her role in December.', 0, 'https://ichef.bbci.co.uk/news/976/cpsprodpb/4A4A/production/_116881091_gettyimages-877242898.jpg', 0, 14, 3, 1, '2021-02-18 09:53:44', '2021-02-18 09:53:44'),
(4, 'US actress Mary Tyler Moore dies aged 80', 'Emmy award-winning US actress Mary Tyler Moore has died aged 80, her publicist says.\r\n\r\nShe was best known for her television roles in the 1960s sitcom The Dick Van Dyke Show and the eponymous The Mary Tyler Moore Show in the 1970s.\r\n\r\nShe was also nominated for a best actress Oscar in 1980 for the film Ordinary People.\r\n\r\nMara Buxbaum said in a statement she died in the company of friends and her husband, Dr S. Robert Levine', 0, 'https://ichef.bbci.co.uk/news/976/cpsprodpb/1444D/production/_93812038_5d5957da-be60-40f3-bdbc-11abe8842297.jpg', 0, 25, 2, 1, '2021-02-18 09:53:44', '2021-02-18 09:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`) VALUES
(1, 'Foods ', '2021-02-18 09:26:18'),
(2, 'Reciepes ', '2021-02-18 09:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `published_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `image`, `password`, `created_at`, `updated_at`, `status`) VALUES
(1, 'judeugwu9@gmail.com', 'jude', 'somto', '', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', '2021-02-16 09:17:20', '2021-02-16 09:17:20', 0),
(2, 'judeugwu9@gmail.com', 'mike', 'somto', '', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', '2021-02-16 09:34:11', '2021-02-16 09:34:11', 0),
(3, 'judeugwu19@gmail.com', 'bobby', 'somto', '', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', '2021-02-16 09:49:28', '2021-02-16 09:49:28', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
