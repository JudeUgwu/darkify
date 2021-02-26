-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 12:21 PM
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
(4, 'US actress Mary Tyler Moore dies aged 80', 'Emmy award-winning US actress Mary Tyler Moore has died aged 80, her publicist says.\r\n\r\nShe was best known for her television roles in the 1960s sitcom The Dick Van Dyke Show and the eponymous The Mary Tyler Moore Show in the 1970s.\r\n\r\nShe was also nominated for a best actress Oscar in 1980 for the film Ordinary People.\r\n\r\nMara Buxbaum said in a statement she died in the company of friends and her husband, Dr S. Robert Levine', 0, 'https://ichef.bbci.co.uk/news/976/cpsprodpb/1444D/production/_93812038_5d5957da-be60-40f3-bdbc-11abe8842297.jpg', 0, 25, 2, 1, '2021-02-18 09:53:44', '2021-02-18 09:53:44'),
(5, 'princess latifa urges uk police to reopen sister&#039;s kidnap case', '&lt;blockquote&gt;\r\n&lt;p&gt;&lt;strong&gt;princess latifa, the captive daughter of dubai&amp;#39;s ruler, has appealed to uk police to re-investigate the kidnap of her older sister from a cambridge street more than 20 years ago.&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;in a letter shared with the bbc, latifa tells cambridgeshire police this could help free princess shamsa, who was captured on the orders of their father.&lt;/p&gt;\r\n\r\n&lt;p&gt;shamsa, who was just 18 then and is now 39, has not been seen in public since.&lt;/p&gt;\r\n\r\n&lt;p&gt;the government of dubai has not responded to bbc requests for comment.&lt;/p&gt;\r\n\r\n&lt;p&gt;a high court judge ruled in 2019, that sheikh mohammed bin rashid al maktoum had abducted both daughters and held them against their will.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;https://www.bbc.co.uk/iplayer/episode/m000sspm/panorama-the-missing-princess&quot;&gt;last week bbc panorama broadcast&lt;/a&gt;&amp;nbsp;shocking videos latifa had secretly recorded on a phone she had been given, in which she described how she was being held &amp;quot;hostage&amp;quot; by her father following a failed escape attempt in 2018. the un has since asked the united arab emirates for proof that latifa is alive.&lt;/p&gt;\r\n\r\n&lt;p&gt;but almost two decades earlier, an attempt by her older sister to flee the family also ended in&lt;a href=&quot;http://jumia.com.ng&quot;&gt; capture and imprisonment.&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;in august 2000, around two months after escaping from her father&amp;#39;s longcross estate in surrey, shamsa was forcibly taken from cambridge, flown by helicopter to france and then by private jet back to dubai.&lt;/p&gt;\r\n\r\n&lt;p&gt;latifa&amp;#39;s handwritten letter, which was passed to the cambridgeshire force by her friends on wednesday, urges action for her sister by british authorities. it was written in 2019 while she was being held in solitary confinement in a &amp;quot;jail villa&amp;quot;.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;all i ask of you&amp;quot;, writes latifa, &amp;quot;is to please give attention on her case because it could get her her freedom... your help and attention on her case could free her.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;she adds: &amp;quot;she has strong links to england&amp;hellip; she really loves england, all of her fondest memories are of her time there.&amp;quot;&lt;/p&gt;', 0, 'http://localhost/darkify/assets/images/articles/7ae2335992de9554bdb3a3955e086cc6d154eb80.jpg', 0, 0, 3, 1, '2021-02-25 09:46:38', '2021-02-25 09:46:38'),
(6, 'nigerian amazon: juma descendants of &#039;last warrior&#039; vow to carry on legacy', '&lt;blockquote&gt;\r\n&lt;p&gt;&lt;strong&gt;the last male member of the juma indigenous group in the brazilian amazon has died after falling ill with covid-19.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;aruk&amp;aacute;&amp;#39;s death last week is the latest blow to the group whose numbers were reduced from around 15,000 in the early 20th century to only six people in the 1990s.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;aruk&amp;aacute; was the last surviving male of the group, but as bbc news brazil&amp;#39;s juliana gragnani reports, his grandchildren have taken an unusual step to ensure his legacy is preserved.&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;aruk&amp;aacute;&amp;#39;s exact age is not known but he was estimated to be between 86 and 90 years old. during his life, aruk&amp;aacute; witnessed the decline of the thousands-strong juma community which once fished, hunted and planted lands in the southern region of amazonas state.&lt;/p&gt;\r\n\r\n&lt;p&gt;following a series of massacres carried out by rubber tappers and the spread of deadly diseases, the juma&amp;#39;s numbers dwindled until aruk&amp;aacute;&amp;#39;s family was the only one left.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;he always spoke with sadness about how in the old days there were many juma, and how now he was the last man left,&amp;quot; gabriel uchida, a photographer who has documented the life of the juma, recalls.&lt;/p&gt;\r\n\r\n&lt;h2 style=&quot;font-style:inherit&quot;&gt;break with tradition&lt;/h2&gt;\r\n\r\n&lt;p&gt;aruk&amp;aacute; had three daughters, but with the juma community already decimated by the time they grew up, all three married men from the uru-eu-wau-wau indigenous group.&lt;/p&gt;', 0, 'http://localhost/darkify/assets/images/articles/27c37b066d69dfd13a3393bd1f4c90f0a0a5914d.jpg', 0, 0, 1, 1, '2021-02-25 09:50:17', '2021-02-25 09:50:17'),
(7, 'trump raises human rights in call with saudi king salman', '&lt;p&gt;&lt;strong&gt;Nigerian President Joe Biden has talked by phone with King Salman of Saudi Arabia as he seeks to put relations with America&amp;#39;s old ally on a new footing.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;He &amp;quot;affirmed the importance&amp;quot; the US &amp;quot;places on universal human rights and the rule of law&amp;quot;, the White House said.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mr Biden made the call after reading a forthcoming US report into the murder of Saudi journalist Jamal Khashoggi.&lt;/p&gt;\r\n\r\n&lt;p&gt;The report is expected to implicate the king&amp;#39;s son, Crown Prince Mohammed bin Salman. He denies involvement.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mr Biden&amp;#39;s predecessor, Donald Trump, pursued closer ties with Saudi Arabia.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.bbc.co.uk/news/world-europe-45812399&quot;&gt;What happened to Jamal Khashoggi?&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.bbc.co.uk/news/world-middle-east-55794286&quot;&gt;Saudi human rights under new spotlight in Biden era&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.bbc.co.uk/news/world-middle-east-40354415&quot;&gt;Who is Saudi Crown Prince Mohammed bin Salman?&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;The Trump administration had rejected a legal requirement to release the report in declassified form, focusing instead on improved co-operation with the Saudis.&lt;/p&gt;\r\n\r\n&lt;p&gt;The White House says Mr Biden will &amp;quot;recalibrate&amp;quot; the relationship with Saudi Arabia.&lt;/p&gt;\r\n\r\n&lt;p&gt;Khashoggi, a US-based journalist and critic of Saudi Arabia&amp;#39;s government, was murdered in 2018 inside the Saudi consulate in the Turkish city of Istanbul, and his body dismembered.&lt;/p&gt;\r\n\r\n&lt;p&gt;Saudi authorities blamed his death on a &amp;quot;rogue operation&amp;quot; by a team of agents sent to return him to the kingdom, and a Saudi court tried and sentenced five individuals to 20 years in prison last September, after initially sentencing them to death.&lt;/p&gt;\r\n\r\n&lt;h2&gt;What happened in the Biden-Salman phone call?&lt;/h2&gt;\r\n\r\n&lt;p&gt;There was no mention of Khashoggi by name in the White House statement.&lt;/p&gt;\r\n\r\n&lt;p&gt;During the call, the White House said Mr Biden &amp;quot;affirmed the importance the United States places on universal human rights and the rule of law&amp;quot;.&lt;/p&gt;', 0, 'http://localhost/darkify/assets/images/articles/04ca1104176d17448fff5ac875b1ee7b94538775.jpg', 0, 0, 1, 1, '2021-02-26 11:15:57', '2021-02-26 11:15:57');

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
  `bio` text DEFAULT NULL,
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

INSERT INTO `users` (`id`, `email`, `firstname`, `bio`, `lastname`, `image`, `password`, `created_at`, `updated_at`, `status`) VALUES
(1, 'judeugwu9@gmail.com', 'jude', 'I don tire for nigeria', 'somto', 'https://mindbodygreen-res.cloudinary.com/images/c_fill,g_auto,w_78,h_78,q_auto,f_auto,fl_lossy/usr/RetocQT/sarah-fielding.jpg', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', '2021-02-16 09:17:20', '2021-02-16 09:17:20', 0),
(2, 'judeugwu9@gmail.com', 'mike', 'I am a family man', 'somto', 'https://mindbodygreen-res.cloudinary.com/images/c_fill,g_auto,w_78,h_78,q_auto,f_auto,fl_lossy/usr/RetocQT/sarah-fielding.jpg', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', '2021-02-16 09:34:11', '2021-02-16 09:34:11', 0),
(3, 'judeugwu19@gmail.com', 'bobby', 'I am a software developer and tutor', 'somto', 'https://mindbodygreen-res.cloudinary.com/images/c_fill,g_auto,w_78,h_78,q_auto,f_auto,fl_lossy/usr/RetocQT/sarah-fielding.jpg', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', '2021-02-16 09:49:28', '2021-02-16 09:49:28', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
