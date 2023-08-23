-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 07:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daily diet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `des` mediumtext DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `dop` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `des`, `img`, `dop`) VALUES
(6, 'Everything You Need to Maintain Your Diet', '**Title: Everything You Need to Maintain Your Diet**\r\n\r\nMaintaining a healthy and balanced diet is a cornerstone of overall well-being. It\'s not just about shedding a few pounds or following a fad; it\'s about nourishing your body with the right nutrients to ensure it functions optimally. Whether you\'re striving to lose weight, gain muscle, or simply improve your overall health, a well-maintained diet is key. In this comprehensive guide, we\'ll walk you through everything you need to know to maintain your diet successfully.\r\n\r\n**1. Set Clear Goals**\r\nBefore embarking on any dietary journey, it\'s important to define your goals. Are you aiming for weight loss, muscle gain, improved energy levels, or better digestion? Clear goals provide direction and motivation, making it easier to tailor your diet to your specific needs.\r\n\r\n**2. Understand Macronutrients**\r\nMacronutrients – carbohydrates, proteins, and fats – are the building blocks of your diet. Understanding the role of each macronutrient and finding the right balance for your goals is crucial. Carbs provide energy, proteins support muscle growth and repair, and healthy fats are essential for overall health.\r\n\r\n**3. Embrace Whole Foods**\r\nCenter your diet around whole, nutrient-dense foods. Fruits, vegetables, lean proteins, whole grains, and healthy fats should form the core of your meals. These foods are rich in vitamins, minerals, and fiber, promoting satiety and providing sustained energy.\r\n\r\n**4. Portion Control**\r\nMaintaining a healthy diet involves portion control. Even nutrient-dense foods can lead to weight gain if consumed in excess. Learning to listen to your body\'s hunger and fullness cues can help you avoid overeating.\r\n\r\n**5. Hydration is Key**\r\nWater is often overlooked but is essential for overall health and proper digestion. Aim to drink adequate water throughout the day. Herbal teas and infused water can also add variety to your hydration routine.\r\n\r\n**6. Meal Planning**\r\nPlan your meals in advance to avoid making impulsive, less nutritious choices. Having a well-thought-out meal plan makes grocery shopping easier and ensures you\'re getting a balanced variety of foods.\r\n\r\n**7. Snack Wisely**\r\nSnacking can either support or derail your diet efforts. Opt for nutrient-rich snacks like Greek yogurt, nuts, fruits, and vegetables. Avoid sugary and highly processed snacks that provide empty calories.\r\n\r\n**8. Mindful Eating**\r\nPractice mindful eating by paying attention to the flavors, textures, and sensations of each bite. This helps prevent overeating and allows you to enjoy your meals more fully.\r\n\r\n**9. Keep a Food Journal**\r\nMaintaining a food journal can provide valuable insights into your eating habits. Document what you eat, when you eat, and how you feel afterward. This self-awareness can help identify patterns and trigger foods.\r\n\r\n**10. Allow for Treats**\r\nDepriving yourself completely can lead to cravings and eventually binging. It\'s okay to indulge in your favorite treats occasionally, as long as it\'s in moderation.\r\n\r\n**11. Regular Physical Activity**\r\nA balanced diet goes hand in hand with regular exercise. Find an activity you enjoy, whether it\'s jogging, yoga, weightlifting, or dancing. Regular physical activity not only supports weight management but also boosts mood and energy levels.\r\n\r\n**12. Get Adequate Sleep**\r\nSleep is often underestimated, but it plays a vital role in maintaining a healthy diet. Lack of sleep can lead to hormonal imbalances that affect appetite and cravings. Aim for 7-9 hours of quality sleep each night.\r\n\r\n**13. Seek Professional Guidance**\r\nIf you have specific dietary requirements or health conditions, consider consulting a registered dietitian or nutritionist. They can provide personalized guidance tailored to your needs and goals.\r\n\r\n**14. Be Patient and Flexible**\r\nMaintaining a diet is a journey, not a destination. There will be ups and downs, and it\'s important to be patient with yourself. Don\'t be afraid to adjust your approach as needed to find what works best for you.\r\n\r\nIn conclusion, maintaining a healthy diet is a holistic endeavor that involves understanding your body\'s needs, making mindful choices, and embracing a sustainable approach. By setting clear goals, prioritizing whole foods, practicing portion control, and incorporating regular physical activity, you can achieve and maintain a diet that supports your overall well-being. Remember, it\'s not about perfection but about making consistent, positive choices that contribute to a healthier lifestyle.', 'images/69healthypyramid.jpg', '2023-08-22 13:20:33'),
(7, '10 Ways to Strategize for Long-Term Weight Loss', ' 10 Ways to Strategize for Long-Term Weight Loss\r\n\r\nLosing weight is a journey that requires commitment, patience, and a well-thought-out strategy. While quick fixes and fad diets might promise rapid results, they often lead to short-lived success. For sustainable and long-term weight loss, it\'s essential to adopt a holistic approach that focuses on healthy habits and gradual changes. Here are 10 effective strategies to help you achieve and maintain your weight loss goals for the long haul.\r\n\r\n 1. Set Realistic Goals\r\n\r\nSetting achievable goals is crucial for long-term success. Instead of aiming for a drastic weight loss within a short period, set small, realistic targets that you can reach over time. Celebrate each milestone, as these small victories will keep you motivated and committed to your journey.\r\n\r\n2. Prioritize Balanced Nutrition\r\n\r\nRather than restricting yourself with extreme diets, focus on balanced and nutritious eating. Incorporate a variety of whole foods, including lean proteins, whole grains, fruits, vegetables, and healthy fats. Portion control is key; listen to your body\'s hunger and fullness cues.\r\n\r\n 3. Mindful Eating\r\n\r\nPractice mindful eating by paying attention to your food, savoring each bite, and eating slowly. Avoid distractions such as screens and multitasking during meals. This approach helps you enjoy your food more, prevents overeating, and encourages better digestion.\r\n\r\n4. Stay Hydrated\r\n\r\nDrinking enough water is essential for weight loss and overall well-being. Water can help control appetite, boost metabolism, and support digestion. Replace sugary beverages with water or herbal tea to reduce unnecessary calorie intake.\r\n\r\n## 5. Regular Physical Activity\r\n\r\nIncorporate regular physical activity into your routine. Choose exercises you enjoy, whether it\'s walking, cycling, swimming, or dancing. Consistency is key; aim for at least 150 minutes of moderate-intensity exercise per week.\r\n\r\n## 6. Get Adequate Sleep\r\n\r\nQuality sleep is essential for weight management. Lack of sleep can disrupt hormonal balance, increase cravings, and hinder weight loss efforts. Aim for 7-9 hours of uninterrupted sleep each night to support your metabolism and overall health.\r\n\r\n## 7. Plan Meals and Snacks\r\n\r\nPlan your meals and snacks in advance to avoid impulsive choices. Having nutritious options readily available can prevent you from reaching for unhealthy foods when hunger strikes.\r\n\r\n## 8. Manage Stress\r\n\r\nChronic stress can contribute to weight gain. Engage in stress-reduction techniques such as meditation, yoga, deep breathing, or spending time in nature. Finding healthy ways to manage stress will positively impact your weight loss journey.\r\n\r\n## 9. Build a Support System\r\n\r\nEnlist the support of friends, family, or a weight loss group. Sharing your journey with others can provide accountability, encouragement, and a sense of community.\r\n\r\n## 10. Be Patient and Persistent\r\n\r\nRemember that weight loss is a gradual process. Be patient with yourself and stay persistent even when progress is slow. Embrace setbacks as learning opportunities and keep your long-term goals in mind.\r\n\r\n## Final Thoughts\r\n\r\nLong-term weight loss is achievable with a sustainable and balanced approach. By adopting healthy habits, focusing on nutrition, and incorporating physical activity into your daily routine, you can make meaningful progress toward your goals. Remember that the journey is about making lasting lifestyle changes that contribute to your overall health and well-being. Stay committed, stay positive, and enjoy the positive changes you\'ll experience along the way.', 'images/331.jpg', '2023-08-22 23:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `feeback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'Hanan', 'haris@gmail.com', 'This is good website.');

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `foodid` bigint(20) NOT NULL,
  `foodname` varchar(200) NOT NULL,
  `calories` varchar(20) DEFAULT NULL,
  `protein` varchar(20) DEFAULT NULL,
  `fats` varchar(20) DEFAULT NULL,
  `carbohydrates` varchar(20) DEFAULT NULL,
  `meal_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`foodid`, `foodname`, `calories`, `protein`, `fats`, `carbohydrates`, `meal_type`) VALUES
(3, 'apple', '52', '0.3', '0.2', '14', 'Snacks'),
(4, 'banana', '96', '22', '0.2', '22', 'Snacks'),
(5, 'chicken', '5', '6', '6', '7', 'Lunch'),
(6, 'Wheat Paratha', '162', '6.3', '5.2', '30.4', 'Breakfast'),
(7, 'Suji Halwa', '244', '3.7', '11.3', '66.7', 'Breakfast'),
(8, 'Kashmiri Rogan Josh', '230', '15.5', '10.4', '13.6', 'Lunch'),
(9, 'Dal Tadka', '140', '9.3', '5.6', '22.7', 'Lunch'),
(10, 'Butter Chicken', '280', '12.6', '18.2', '25.4', 'Lunch'),
(11, 'Palak Paneer', '240', '12.6', '11.8', '17.2', 'Lunch'),
(12, 'Eggs (2)', '150', '13.6', '11.3', '1.2', 'Breakfast'),
(13, 'Fruit Yogrut', '150', '5.3', '3.1', '24.5', 'Snacks'),
(14, ' Nun Chai with Bread', '95', '4', '2', '15.5', 'Breakfast'),
(15, 'Sheer Chai with Rusk', '115', '5', '4', '15', 'Breakfast'),
(16, 'Aloo Paratha with Curd', '310', '10', '13', '35', 'Breakfast'),
(17, 'Chana Masala with Roti', '360', '11', '8', '60', 'Breakfast'),
(18, ' Rogan Josh with Rice', '565', '22', '20.5', '65', 'Lunch'),
(19, 'Dum Aloo with Naan', '440', '10', '15', '55', 'Lunch'),
(20, 'Haak with Rice', '295', '6', '4.5', '51', 'Lunch'),
(21, 'Yakhni with Roti', '310', '12', '11', '35', 'Lunch'),
(22, 'Paneer Chaman with Pulao', '490', '90', '20', '50', 'Lunch'),
(23, ' Vegetable Biryani', '330', '8', '13', '45', 'Dinner'),
(24, 'Tandoori Chicken with Roti', '360', '24', '13', '32', 'Dinner'),
(25, 'Dal Makhani with Rice', '425', '10', '10.5', '65', 'Dinner'),
(26, 'Fish Curry with Rice', '425', '17', '10.5', '53', 'Dinner'),
(27, 'Chole Bhature', '480', '16', '18', '60', 'Dinner'),
(28, ' Vegetable Omelette', '82', '12', '0.5', '7', 'Dinner'),
(29, ' Grilled Chicken Salad', '285', '26', '17.5', '5', 'Dinner'),
(30, 'Grilled Fish with Quinoa', '270', '26', '8', '26', 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `foodlog`
--

CREATE TABLE `foodlog` (
  `logid` bigint(20) NOT NULL,
  `foodid` varchar(20) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL,
  `logdatetime` varchar(20) DEFAULT NULL,
  `qnty` varchar(20) DEFAULT NULL,
  `meal_typee` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodlog`
--

INSERT INTO `foodlog` (`logid`, `foodid`, `userid`, `logdatetime`, `qnty`, `meal_typee`) VALUES
(14, '12', '6', '2023-08-20', '150', NULL),
(15, '11', '6', '2023-08-24', '200', NULL),
(16, '13', '6', '2023-08-22', '120', NULL),
(17, '4', '6', '2023-08-23', '200', NULL),
(18, '8', '6', '2023-08-20', '105', NULL),
(21, '15', '8', '2023-08-23', '200', NULL),
(22, '20', '6', '2023-08-24', '300', NULL),
(23, '8', '6', '2023-08-23', '200', NULL),
(24, '10', '6', '2023-08-23', '222', NULL),
(25, '6', '10', '2023-08-24', '200', NULL),
(26, '9', '11', '2023-08-23', '200', 'Breakfast'),
(27, '21', '11', '2023-08-23', '300', 'Breakfast'),
(28, '5', '11', '2023-08-23', '100', 'Lunch'),
(29, '7', '9', '2023-08-23', '100', 'Lunch'),
(30, '13', '9', '2023-08-23', '200', 'Dinner'),
(31, '8', '13', '2023-08-23', '230', 'Lunch');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `age` int(20) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(20) DEFAULT 'active',
  `pass` varchar(20) DEFAULT NULL,
  `img` varchar(200) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `TDEE` int(100) NOT NULL,
  `activityLevel` varchar(500) NOT NULL,
  `goal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `age`, `gender`, `status`, `pass`, `img`, `height`, `weight`, `TDEE`, `activityLevel`, `goal`) VALUES
(6, 'Danish Shah', 'idanishshah7@gmail.com', 25, 'male', 'active', 'Danish', 'images/65boy4.jpg', 188, 90, 2825, '1.375', 'weight loss'),
(9, 'Imran Yousuf', 'meena@gmail.com', 44, 'male', 'active', 'Mine@66', 'images/90boy3.jpg', 169, 78, 2330, '1.375', 'weight loss'),
(10, 'Maria Yousuf', 'maria@gmail.com', 22, 'female', 'active', 'maria@11', '', 166, 70, 2335, '1.375', ''),
(11, 'Muhammad Qasim', 'qasim22@gmail.com', 45, 'male', 'active', 'Qasim@33', 'images/20boy1.jpg', 187, 88, 2625, '1.375', 'muscle gain'),
(12, 'Zahid Zahoor', 'zahid@gmail.com', 33, 'male', 'active', 'Zahid@44', '', 188, 99, 2928, '1.375', ''),
(13, 'Suraya Jan', 'suraya@gmail.com', 59, 'female', 'active', 'suraya', 'images/22boy2.jpg', 179, 60, 1947, '1.375', 'weight loss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fooditems`
--
ALTER TABLE `fooditems`
  ADD PRIMARY KEY (`foodid`),
  ADD UNIQUE KEY `foodname` (`foodname`);

--
-- Indexes for table `foodlog`
--
ALTER TABLE `foodlog`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fooditems`
--
ALTER TABLE `fooditems`
  MODIFY `foodid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `foodlog`
--
ALTER TABLE `foodlog`
  MODIFY `logid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
