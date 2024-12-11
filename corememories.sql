-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 07:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(10000) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'familyGather.jpg', ' This is one of my favorite family gatherings. It was Christmas and we all decided to celebrate it in Santa Rosa - Tagaytay at Nuvali. It is with the family and our relatives. We all enjoyed it there, we ate there, we watched the ponds, the fishes, the beautiful sceneries. It was awesome and fun with the family.\n', NULL),
(2, 1, 'familyGather2.jpg', 'This was the new year. A lot of our relatives were there. Fireworks are booming, foods are ready at the table, speakers playing music, families are all gathered, everyone’s having a fun discussion, fun activities. There was a lot going on but it was a fun new year because everyone was there having fun. \n', NULL),
(3, 1, 'familyGather3.jpeg', 'This was at the San Guillermo Parish Church in Talisay. It was the month of November and we went to the church in the evening because there was an opening of the lights with something like floating bubbles around that was supposed to be snow. It’s actually fun having fun around and just enjoying.', NULL),
(4, 2, 'nature1.jpg', 'The photo was taken after reaching a destination after a morning jog and let me tell you, it was one of the most awesome feelings a person can feel. Just seeing that sunrise in the morning with the fresh air, you\'re tired, and you\'re taking a rest at that spot looking at that beautiful scenery of the sunrise is just pure calmness.', NULL),
(5, 2, 'nature2.jpg', 'This photo was taken in Manila after going to an airport. Sometimes, I just feel like man-made buildings can go along with nature to a certain extent. I like the view of high buildings, the designs,  they’re awesome. And seeing the sun setting along with the buildings just makes it look more awesome. ', NULL),
(6, 2, 'nature3.jpg', 'This photo was taken in Banadero at the baywalk. I was with my friends and we used our bikes to get to the place. We were just sitting by the lake watching the beautiful sun set along the lake, it made the moment more serene and more fun.', NULL),
(7, 3, 'gamingMl.png', 'This is an old screenshot of a game called Mobile Legends. I found it in my gallery and realised how long it has been. I’ve always played and enjoyed this game back in high school, and sometimes I still do as of now. It’s a really fun game, I remember I was still using a really laggy phone to play the game and sometimes the phone would just turn off while playing. But the game is really fun to play.', NULL),
(8, 3, 'gamingCod.jpg', 'I’ve always liked shooting games, and one of the popular games that I play is Call of duty mobile. I remember when I was kid seeing those videos on youtube about call of duty, like about how awesome the game looked, and when I realised that they’re also releasing it on mobile, I started playing the game. The game was really fun to play developing your skill with it just like any other games.', NULL),
(9, 3, 'gamingValo.png', 'Valorant has been one of the games that I’ve been playing recently, the game is really really fun especially when I’m playing it with my friends. I’ve known the game before but haven’t downloaded it yet but when my friends and cousins kept telling me to download it, I did, and let me tell you, the game is really fun.', NULL),
(10, 4, 'physicalActivityWeights.jpg', 'This was the time of our Balagtasan competition during PUP-STC\'s \"Buwan ng Wika.\" It was one of those moments where I truly embraced the mindset that the show must go on, pushing myself to embody the role of a performer with confidence. This memory is a testament to stepping out of my comfort zone a', NULL),
(11, 4, 'physicalActivityJogging.jpg', 'Jogging has been one of the things that I perform occasionally. I sometimes do morning runs or afternoon runs. It’s just that feeling of the fresh air in the morning or the cold air, you running in a nature like environment, it is just calming, it helps me unwind. ', NULL),
(12, 4, 'physicalActivityBike.jpg', 'Cycling around places has been one of the things that I enjoy. In the picture is the first picture of my bike as of now that I mostly used to go around places with my friends, relatives. Cycling around not only helps me reach awesome places, but it also helps me exercise. It’s actually enjoyable going around places and seeing great sceneries.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'FAMILY', NULL, 'One of the main things that makes occasions and holidays more fun and wholesome is when families gather. Family gatherings are one of my favorites during holidays and occasions. We get to have fun and meet our family, relatives. We celebrate the occasion all together, we all eat together, and enjoy it all together.', 'F3C35F', 'personalityBG1.png', 'inactive'),
(2, 'NATURE', NULL, 'Sometimes, having the thought of how the days have gone so fast is one of the awakening realization we can have. One of the things that always reminds me to enjoy the present moment is nature. I take time to take a look and enjoy nature, appreciating the beautiful scenery, the fresh air. It’s just full of serenity.', '85B8ED', 'personalityBG2.png', 'inactive'),
(3, 'GAMING', NULL, 'From before as a kid to now, gaming is one of the most enjoyable and entertaining things that I did and it is really fun.  ', 'EA6F61', 'personalityBG3.png', 'inactive'),
(4, 'PHYSICAL ACTIVITIES', NULL, 'One of the things that I found enjoyable is physical activities. Physical activities have been one of my favorite things to do for my physical and mental health, it helps me with my overall well-being and with just that, taking care of myself is one of the main things that I always like to prioritize.', '8BC664', 'personalityBG4.png', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
