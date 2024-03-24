-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2024 at 04:15 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegetp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` date NOT NULL,
  `ville_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `etudiants_ville_id_foreign` (`ville_id`)
) ENGINE=InnoDB AUTO_INCREMENT=204 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `adresse`, `telephone`, `email`, `date_de_naissance`, `ville_id`, `created_at`, `updated_at`) VALUES
(104, 'Amina Wilkinson', 'Cole O\'Reilly', '814-306-8057', 'barrett81@example.org', '1976-07-25', 111, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(105, 'Mr. Ben Hahn IV', 'Ms. Zula Ritchie', '779-446-8111', 'sallie86@example.org', '2000-07-31', 101, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(106, 'Olin Collins', 'Miss Melyssa Jerde', '918-050-1099', 'norris28@example.net', '2022-09-16', 110, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(107, 'Asa Hoeger', 'Veronica Price', '446-923-9148', 'turcotte.brennan@example.org', '1981-02-26', 101, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(108, 'Elody Brekke', 'Mr. Gunner Hagenes', '475-586-9498', 'emilie.schmitt@example.com', '2015-10-25', 115, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(109, 'Mollie DuBuque', 'Maryjane Little', '614-426-0616', 'marvin.bogan@example.net', '1989-11-04', 104, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(110, 'Mr. Cleveland Funk', 'Karine Kessler IV', '310-202-6717', 'reynolds.cody@example.org', '1971-03-10', 106, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(111, 'Kristoffer Halvorson', 'Prof. Rory Gleichner II', '050-335-4942', 'aconn@example.org', '2002-06-02', 113, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(112, 'Gerardo Pfeffer', 'Keon Carroll', '792-422-6983', 'imacejkovic@example.net', '2004-11-18', 105, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(113, 'Prof. Filiberto Larkin Jr.', 'Prof. Brett Huel DDS', '300-027-5124', 'pledner@example.net', '1971-03-14', 113, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(114, 'Dr. Bell Rogahn III', 'Dr. Ervin Will', '569-589-4843', 'sbergnaum@example.net', '1987-09-15', 104, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(115, 'Hazle Lebsack DVM', 'Dr. Rubye Wolf', '566-352-9049', 'dhoppe@example.org', '1994-07-15', 110, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(116, 'Dr. Melba Reichel', 'Ansley Waters II', '455-141-6852', 'ospencer@example.org', '2012-05-13', 103, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(117, 'Miss Antonette Dibbert DDS', 'Elias Daugherty', '198-011-9954', 'gerard28@example.net', '2010-01-25', 103, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(118, 'June McCullough', 'Domingo Bayer', '725-630-4895', 'pollich.oma@example.net', '1984-04-11', 109, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(119, 'Franco Miller', 'Leonie Walter', '834-097-5977', 'green.ray@example.net', '1974-12-02', 111, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(120, 'Thurman Howell', 'Christine Cremin', '640-527-7777', 'gwintheiser@example.net', '1978-11-18', 105, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(121, 'Mr. Keaton Rogahn PhD', 'Prof. Herminia Strosin', '425-218-0120', 'zcummings@example.com', '1971-03-23', 112, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(122, 'Prof. Izaiah Reynolds V', 'Kiel Schinner', '720-195-4060', 'graham.ophelia@example.net', '1977-09-25', 114, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(123, 'Dina Parisian', 'Dr. Francisco Tromp', '054-711-5705', 'braun.sincere@example.com', '2016-10-16', 108, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(124, 'Prof. River Schroeder III', 'Prof. Nia Olson II', '292-171-2328', 'dach.brian@example.org', '2002-04-10', 110, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(125, 'Paula Hackett', 'Antwon Carter', '838-071-9162', 'wilkinson.tillman@example.org', '2014-05-23', 107, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(126, 'Trisha Osinski', 'Ms. Kenna Grant PhD', '305-959-7224', 'green.jordy@example.net', '1977-10-02', 113, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(127, 'Dr. Virgil Willms Jr.', 'Miss Josephine Goldner IV', '766-723-4374', 'madaline66@example.net', '1980-06-09', 104, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(128, 'Johanna Medhurst', 'Mrs. Ofelia Daugherty', '352-987-3765', 'caleb.heathcote@example.org', '2005-08-12', 104, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(129, 'Dr. Keira Bernhard MD', 'Margarete Schiller', '111-280-3146', 'sunny.erdman@example.com', '2010-05-12', 114, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(130, 'Dr. Gayle Sawayn IV', 'Wyman Waelchi IV', '652-078-9541', 'aaliyah.breitenberg@example.org', '2014-05-28', 104, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(131, 'Luz Upton', 'Mrs. Jada Harber V', '558-931-5935', 'doris.huels@example.com', '1999-04-04', 105, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(132, 'Jessika VonRueden', 'Gunner Schoen', '781-943-1417', 'dgreenholt@example.com', '1991-05-05', 115, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(133, 'Dr. Trenton Purdy PhD', 'Turner Aufderhar I', '784-591-2381', 'kayden.hauck@example.com', '2021-03-21', 106, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(134, 'Kayley Blick', 'Mr. Edmund Harber', '248-000-1575', 'greg65@example.org', '2022-09-29', 104, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(135, 'Theron Dickens', 'Nadia DuBuque', '665-730-8530', 'lehner.remington@example.org', '1988-08-12', 109, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(136, 'Russell Mann', 'Matilde Block DVM', '419-473-5793', 'warren.hirthe@example.com', '2023-12-24', 109, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(137, 'Demond McLaughlin', 'Dr. Talon Reilly DDS', '670-484-0648', 'willow.bernhard@example.com', '2007-05-18', 108, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(138, 'Mr. Sid Prohaska V', 'Christian Heller', '037-319-6512', 'jan.reilly@example.com', '1999-11-25', 104, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(139, 'Terry Murazik', 'Ceasar Ferry', '330-567-1258', 'lavon.herzog@example.com', '1987-10-11', 112, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(140, 'Dr. Trenton Ruecker PhD', 'Dr. Brook Nader PhD', '355-504-2828', 'runolfsson.elaina@example.com', '1984-03-17', 111, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(141, 'Harvey Gorczany DVM', 'Makenna Stark', '628-624-0456', 'harley.johnson@example.com', '1998-08-31', 114, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(142, 'Mrs. Alessandra Brakus', 'Bud Considine', '304-549-0545', 'pacocha.deontae@example.org', '2018-04-30', 102, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(143, 'Gwen Schroeder', 'Danial Mante IV', '080-622-0256', 'lina02@example.org', '1999-12-18', 108, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(144, 'Zetta Jakubowski', 'Prof. Eleazar Schneider V', '908-073-4747', 'vicente08@example.net', '1986-08-22', 115, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(145, 'Ms. Joanie Klein', 'Gerson Collier', '063-104-9531', 'sylvester97@example.org', '2000-08-25', 101, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(146, 'Alfred Larkin Jr.', 'Dr. Philip Dach II', '308-033-2011', 'baylee32@example.com', '2011-05-28', 102, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(147, 'Prof. Carol Gerlach DVM', 'Colleen Labadie PhD', '670-965-4447', 'juanita.blanda@example.net', '2018-06-09', 109, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(148, 'Morris Herman', 'Faye Shanahan', '421-959-3384', 'pasquale55@example.net', '1989-09-21', 110, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(149, 'Shania Treutel', 'Mr. Greg Becker', '539-344-9658', 'wkunze@example.com', '2003-02-24', 101, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(150, 'Stan Blanda', 'Dale Lebsack', '628-449-5944', 'roconnell@example.net', '2009-11-26', 106, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(151, 'Lolita Smith', 'Prof. Lance Christiansen DVM', '469-073-3482', 'qbradtke@example.com', '2005-12-02', 113, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(152, 'Cletus Rogahn', 'Prof. Larry Larson DDS', '297-551-8858', 'maryse84@example.org', '1974-10-19', 101, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(153, 'Cathryn Parisian Jr.', 'Royce Sawayn V', '695-441-8523', 'xbashirian@example.com', '1983-04-03', 113, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(154, 'Keanu Collier III', 'Mr. Aurelio Crist MD', '861-770-6944', 'wunsch.demarcus@example.net', '1978-05-29', 113, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(155, 'Filiberto Altenwerth', 'Priscilla Feil', '463-608-4965', 'streich.trace@example.org', '1996-05-11', 112, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(156, 'Maurine Dare', 'Roel Littel', '951-934-4781', 'trent18@example.com', '2013-08-05', 112, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(157, 'Alena Renner', 'Johnson Murphy I', '807-813-3344', 'karlee85@example.com', '1980-05-02', 113, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(158, 'Hunter Conroy PhD', 'Prof. Queenie Kulas II', '180-049-6060', 'yfahey@example.org', '1993-07-09', 111, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(159, 'Prof. Melvin Hodkiewicz PhD', 'Harrison Kreiger', '468-140-8708', 'yflatley@example.org', '2014-06-12', 104, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(160, 'Dr. Celine Harber', 'Justine Schaden', '420-281-7495', 'witting.mandy@example.com', '1989-09-18', 111, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(161, 'Loma Farrell MD', 'Dr. Chris Emmerich Sr.', '679-938-7227', 'catalina.lebsack@example.net', '2023-08-13', 103, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(162, 'Mrs. Dawn Powlowski', 'Abe Harvey', '528-862-9483', 'cade69@example.org', '1994-10-18', 104, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(163, 'Dallin Hoppe', 'Maddison Mitchell', '014-208-0952', 'tressa.barrows@example.org', '1984-12-17', 113, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(164, 'Prof. Katelin Welch Sr.', 'Miss Catharine Dicki MD', '972-175-2870', 'jorge15@example.org', '2007-08-12', 101, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(165, 'Scarlett Quigley', 'Nova Block PhD', '162-519-5107', 'irohan@example.com', '2002-12-15', 106, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(166, 'Dr. Clint Gutmann DVM', 'Ida Runolfsdottir', '327-972-0813', 'vkub@example.com', '1994-07-30', 110, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(167, 'Baby Schaden', 'Cara Bahringer', '584-440-3251', 'mlebsack@example.net', '1987-05-31', 115, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(168, 'Prudence Harris', 'Francisco Swaniawski', '707-369-1480', 'amie.legros@example.com', '2010-06-29', 104, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(169, 'Prof. Emerson Rau', 'Brayan Walsh', '467-727-2488', 'bailey.ralph@example.com', '1984-12-16', 107, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(170, 'Raegan Doyle', 'Terrill McClure', '001-717-9538', 'price.keon@example.net', '2008-08-03', 114, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(171, 'Jarrett Von', 'Hal Schmitt', '569-993-2523', 'selena78@example.com', '1972-12-28', 112, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(172, 'Mr. Floyd Ernser II', 'Bernie Langworth', '793-237-1336', 'spurdy@example.com', '1971-02-04', 114, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(173, 'Prof. Emiliano Rowe', 'Patience Kuphal', '153-979-9316', 'fbatz@example.org', '2003-09-23', 112, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(174, 'Prof. Weston D\'Amore', 'Dr. Laney Fadel', '538-875-3207', 'flittel@example.org', '1983-08-12', 104, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(175, 'Prof. Shirley Dietrich', 'Prof. Rudolph Farrell', '043-721-9195', 'arthur59@example.org', '1977-04-11', 113, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(176, 'Dallas Effertz', 'Elvie Lehner', '490-538-3925', 'arthur.weimann@example.org', '1998-06-29', 103, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(177, 'Prof. Lance Connelly PhD', 'Makenzie Abernathy', '882-311-9257', 'tevin56@example.com', '1977-08-12', 105, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(178, 'Elise Bartoletti', 'Dr. Colin Russel', '471-068-8343', 'faustino.price@example.org', '2004-12-16', 105, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(179, 'Tamia Robel II', 'Bernita Ledner V', '523-037-6371', 'pietro.lang@example.com', '2022-07-14', 111, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(180, 'Lavon Sporer', 'Obie Gleichner', '541-516-6669', 'gkling@example.net', '1986-04-24', 113, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(181, 'Xzavier Aufderhar DDS', 'Elta Jacobi', '914-351-5670', 'eaufderhar@example.com', '1987-12-23', 107, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(182, 'Demarco Roberts', 'Laury Satterfield', '075-128-9699', 'haley.freddy@example.org', '2008-12-06', 110, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(183, 'Ms. Marie Romaguera I', 'Harvey Murphy', '508-133-2235', 'zrohan@example.com', '1994-05-07', 111, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(184, 'Kathleen Schumm', 'Prof. Raphael Zboncak', '974-634-0308', 'robel.collin@example.net', '2008-01-07', 114, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(185, 'Carolyne Huels', 'Franco Carroll', '056-002-3126', 'bahringer.mikel@example.com', '1980-12-26', 101, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(186, 'Miss Hertha Predovic MD', 'Ruthie O\'Keefe', '850-127-5042', 'kulas.obie@example.org', '2016-05-11', 111, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(187, 'Karina Fay', 'Geovanni Casper', '178-154-8596', 'agustina97@example.net', '2010-05-16', 101, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(188, 'Prof. Guido Gleason MD', 'Ebba Bogan', '427-414-5284', 'kaci30@example.org', '1991-11-17', 101, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(189, 'Dessie Hackett', 'Mr. Emmitt Green DDS', '629-539-2896', 'garland.marquardt@example.net', '2019-01-31', 104, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(190, 'Dr. Nicolette Hickle Sr.', 'Devyn Weber', '533-804-8824', 'lilyan20@example.com', '2022-04-16', 107, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(191, 'Bradford Powlowski', 'Vinnie Zboncak DVM', '287-022-8205', 'alba40@example.net', '1971-06-16', 101, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(192, 'Prof. Vallie Lindgren', 'Aryanna Turcotte', '923-863-3862', 'xdoyle@example.com', '2019-05-18', 106, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(193, 'Mrs. Desiree Cartwright II', 'Kraig Kuvalis', '351-332-1983', 'collier.chesley@example.net', '1991-07-20', 105, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(194, 'Vena Toy', 'Germaine Durgan', '385-610-5317', 'huels.lafayette@example.com', '2001-07-07', 115, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(195, 'Mrs. Myrtice Pouros', 'Dr. Shea Breitenberg', '911-330-2512', 'reva.hill@example.net', '1986-11-24', 103, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(196, 'Ted Reilly II', 'Maia Herzog', '961-816-3166', 'kbuckridge@example.com', '2008-10-27', 114, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(197, 'Ewald Becker', 'Josianne Gislason', '384-269-0766', 'elisabeth57@example.com', '1980-07-25', 107, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(198, 'Wilma Muller DDS', 'Krystal Weber', '527-777-0259', 'showe@example.com', '1985-10-15', 113, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(199, 'Dr. Lorenza Wilderman DDS', 'Magdalen Bauch', '913-862-8837', 'rachelle09@example.net', '1991-06-13', 108, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(200, 'Dessie Greenfelder', 'Bonnie Stamm', '703-763-1293', 'federico.hegmann@example.net', '2017-02-04', 108, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(201, 'Laney Rosenbaum', 'Mrs. Ada Stracke', '415-584-2089', 'meaghan.rosenbaum@example.net', '2017-05-17', 111, '2024-02-23 19:38:19', '2024-02-23 19:38:19'),
(202, 'Gabriel', 'gab2005', '514-707-4570', 'gab2005@live.ca', '2024-02-19', 101, '2024-02-24 01:47:59', '2024-02-24 02:23:40'),
(203, 'Gabriel', '801 Brennan', '514-707-4570', 'gab2005@live.ca', '2024-03-01', 101, '2024-03-04 19:12:48', '2024-03-04 19:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_14_163533_create_villes_table', 2),
(6, '2024_02_14_163642_create_etudiants_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `villes`
--

INSERT INTO `villes` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(101, 'Frederik Erdman', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(102, 'Evans Auer', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(103, 'Dr. Norwood Brakus V', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(104, 'Immanuel Ondricka', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(105, 'Harvey Kutch', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(106, 'Dr. Norbert Moore V', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(107, 'Greg O\'Kon', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(108, 'Telly Johnson', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(109, 'Dante Fisher', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(110, 'Austyn Trantow', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(111, 'Chance Prosacco Sr.', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(112, 'Sibyl Bednar IV', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(113, 'Ursula Kuhlman', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(114, 'Rosie Becker', '2024-02-19 21:55:59', '2024-02-19 21:55:59'),
(115, 'Vladimir Williamson', '2024-02-19 21:55:59', '2024-02-19 21:55:59');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_ville_id_foreign` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
