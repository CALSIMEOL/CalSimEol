-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 29 Janvier 2015 à 13:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `calsimeol_dev`
--
CREATE DATABASE IF NOT EXISTS `calsimeol_dev` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `calsimeol_dev`;

-- --------------------------------------------------------

--
-- Structure de la table `cse_place_rosewind`
--

CREATE TABLE IF NOT EXISTS `cse_place_rosewind` (
  `place_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wind_mean_speed` float NOT NULL,
  `wind_direction` varchar(255) NOT NULL,
  `wind_probability` float NOT NULL,
  PRIMARY KEY (`place_id`),
  KEY `place_id` (`place_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cse_place_weibull`
--

CREATE TABLE IF NOT EXISTS `cse_place_weibull` (
  `place_id` int(10) unsigned NOT NULL,
  `wind_speed` float NOT NULL,
  `place_probability` float NOT NULL,
  KEY `ws_id` (`place_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cse_places`
--

CREATE TABLE IF NOT EXISTS `cse_places` (
  `place_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `place_name` varchar(255) NOT NULL,
  `place_longitude` float NOT NULL,
  `place_latitude` float NOT NULL,
  `place_altitude` int(11) NOT NULL,
  `place_mean_temp` float NOT NULL,
  `place_rugosity` float NOT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cse_turbine_powers`
--

CREATE TABLE IF NOT EXISTS `cse_turbine_powers` (
  `turbine_power_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `turbine_id` int(10) unsigned NOT NULL,
  `wind_speed` float NOT NULL,
  `turbine_power` float NOT NULL,
  PRIMARY KEY (`turbine_power_id`),
  KEY `turbine_id` (`turbine_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=962 ;

--
-- Contenu de la table `cse_turbine_powers`
--

INSERT INTO `cse_turbine_powers` (`turbine_power_id`, `turbine_id`, `wind_speed`, `turbine_power`) VALUES
(1, 1, 0, 0),
(2, 1, 1, 0),
(3, 1, 2, 0),
(4, 1, 3, 9),
(5, 1, 4, 58),
(6, 1, 5, 139),
(7, 1, 6, 263),
(8, 1, 7, 437),
(9, 1, 8, 669),
(10, 1, 9, 964),
(11, 1, 10, 1300),
(12, 1, 11, 1580),
(13, 1, 12, 1647),
(14, 1, 13, 1666),
(15, 1, 14, 1670),
(16, 1, 15, 1670),
(17, 1, 16, 1655),
(18, 1, 17, 1583),
(19, 1, 18, 1476),
(20, 1, 19, 1365),
(21, 1, 20, 1254),
(22, 1, 21, 1144),
(23, 1, 22, 1033),
(24, 1, 23, 922),
(25, 1, 24, 812),
(26, 1, 25, 701),
(27, 1, 26, 0),
(28, 1, 27, 0),
(29, 1, 28, 0),
(30, 1, 29, 0),
(31, 1, 30, 0),
(32, 2, 0, 0),
(33, 2, 1, 0),
(34, 2, 2, 0),
(35, 2, 3, 3),
(36, 2, 4, 45),
(37, 2, 5, 124),
(38, 2, 6, 254),
(39, 2, 7, 435),
(40, 2, 8, 669),
(41, 2, 9, 954),
(42, 2, 10, 1248),
(43, 2, 11, 1482),
(44, 2, 12, 1612),
(45, 2, 13, 1658),
(46, 2, 14, 1669),
(47, 2, 15, 1670),
(48, 2, 16, 1662),
(49, 2, 17, 1636),
(50, 2, 18, 1593),
(51, 2, 19, 1542),
(52, 2, 20, 1495),
(53, 2, 21, 1445),
(54, 2, 22, 1397),
(55, 2, 23, 1349),
(56, 2, 24, 1310),
(57, 2, 25, 1280),
(58, 2, 26, 0),
(59, 2, 27, 0),
(60, 2, 28, 0),
(61, 2, 29, 0),
(62, 2, 30, 0),
(63, 3, 0, 0),
(64, 3, 1, 0),
(65, 3, 2, 0),
(66, 3, 3, 0),
(67, 3, 4, 47),
(68, 3, 5, 129),
(69, 3, 6, 253),
(70, 3, 7, 424),
(71, 3, 8, 651),
(72, 3, 9, 943),
(73, 3, 10, 1274),
(74, 3, 11, 1608),
(75, 3, 12, 1866),
(76, 3, 13, 1979),
(77, 3, 14, 2000),
(78, 3, 15, 2000),
(79, 3, 16, 2000),
(80, 3, 17, 2000),
(81, 3, 18, 1974),
(82, 3, 19, 1912),
(83, 3, 20, 1853),
(84, 3, 21, 1795),
(85, 3, 22, 1736),
(86, 3, 23, 1677),
(87, 3, 24, 1619),
(88, 3, 25, 1560),
(89, 3, 26, 0),
(90, 3, 27, 0),
(91, 3, 28, 0),
(92, 3, 29, 0),
(93, 3, 30, 0),
(94, 4, 0, 0),
(95, 4, 1, 0),
(96, 4, 2, 0),
(97, 4, 3, 11),
(98, 4, 4, 68),
(99, 4, 5, 168),
(100, 4, 6, 314),
(101, 4, 7, 515),
(102, 4, 8, 776),
(103, 4, 9, 1078),
(104, 4, 10, 1362),
(105, 4, 11, 1556),
(106, 4, 12, 1642),
(107, 4, 13, 1666),
(108, 4, 14, 1670),
(109, 4, 15, 1664),
(110, 4, 16, 1625),
(111, 4, 17, 1535),
(112, 4, 18, 1412),
(113, 4, 19, 1287),
(114, 4, 20, 1175),
(115, 4, 21, 1061),
(116, 4, 22, 952),
(117, 4, 23, 849),
(118, 4, 24, 765),
(119, 4, 25, 701),
(120, 4, 26, 0),
(121, 4, 27, 0),
(122, 4, 28, 0),
(123, 4, 29, 0),
(124, 4, 30, 0),
(125, 5, 0, 0),
(126, 5, 1, 0),
(127, 5, 2, 0),
(128, 5, 3, 16),
(129, 5, 4, 89),
(130, 5, 5, 219),
(131, 5, 6, 430),
(132, 5, 7, 728),
(133, 5, 8, 1112),
(134, 5, 9, 1572),
(135, 5, 10, 2071),
(136, 5, 11, 2517),
(137, 5, 12, 2814),
(138, 5, 13, 2951),
(139, 5, 14, 2992),
(140, 5, 15, 3000),
(141, 5, 16, 3000),
(142, 5, 17, 3000),
(143, 5, 18, 3000),
(144, 5, 19, 3000),
(145, 5, 20, 3000),
(146, 5, 21, 3000),
(147, 5, 22, 3000),
(148, 5, 23, 3000),
(149, 5, 24, 3000),
(150, 5, 25, 3000),
(151, 5, 26, 0),
(152, 5, 27, 0),
(153, 5, 28, 0),
(154, 5, 29, 0),
(155, 5, 30, 0),
(156, 6, 0, 0),
(157, 6, 1, 0),
(158, 6, 2, 0),
(159, 6, 3, 17),
(160, 6, 4, 105),
(161, 6, 5, 264),
(162, 6, 6, 511),
(163, 6, 7, 856),
(164, 6, 8, 1305),
(165, 6, 9, 1842),
(166, 6, 10, 2367),
(167, 6, 11, 2747),
(168, 6, 12, 2932),
(169, 6, 13, 2990),
(170, 6, 14, 3000),
(171, 6, 15, 2997),
(172, 6, 16, 2976),
(173, 6, 17, 2925),
(174, 6, 18, 2852),
(175, 6, 19, 2771),
(176, 6, 20, 2698),
(177, 6, 21, 2623),
(178, 6, 22, 2550),
(179, 6, 23, 2480),
(180, 6, 24, 2424),
(181, 6, 25, 2381),
(182, 6, 26, 0),
(183, 6, 27, 0),
(184, 6, 28, 0),
(185, 6, 29, 0),
(186, 6, 30, 0),
(187, 7, 0, 0),
(188, 7, 1, 0),
(189, 7, 2, 1.4),
(190, 7, 3, 8),
(191, 7, 4, 24.5),
(192, 7, 5, 53),
(193, 7, 6, 96),
(194, 7, 7, 156),
(195, 7, 8, 238),
(196, 7, 9, 340),
(197, 7, 10, 466),
(198, 7, 11, 600),
(199, 7, 12, 710),
(200, 7, 13, 790),
(201, 7, 14, 850),
(202, 7, 15, 880),
(203, 7, 16, 905),
(204, 7, 17, 910),
(205, 7, 18, 910),
(206, 7, 19, 910),
(207, 7, 20, 910),
(208, 7, 21, 910),
(209, 7, 22, 910),
(210, 7, 23, 910),
(211, 7, 24, 910),
(212, 7, 25, 910),
(213, 7, 26, 0),
(214, 7, 27, 0),
(215, 7, 28, 0),
(216, 7, 29, 0),
(217, 7, 30, 0),
(218, 8, 0, 0),
(219, 8, 1, 0),
(220, 8, 2, 2),
(221, 8, 3, 14),
(222, 8, 4, 38),
(223, 8, 5, 77),
(224, 8, 6, 141),
(225, 8, 7, 228),
(226, 8, 8, 336),
(227, 8, 9, 480),
(228, 8, 10, 645),
(229, 8, 11, 744),
(230, 8, 12, 780),
(231, 8, 13, 810),
(232, 8, 14, 810),
(233, 8, 15, 810),
(234, 8, 16, 810),
(235, 8, 17, 810),
(236, 8, 18, 810),
(237, 8, 19, 810),
(238, 8, 20, 810),
(239, 8, 21, 810),
(240, 8, 22, 810),
(241, 8, 23, 810),
(242, 8, 24, 810),
(243, 8, 25, 810),
(244, 8, 26, 0),
(245, 8, 27, 0),
(246, 8, 28, 0),
(247, 8, 29, 0),
(248, 8, 30, 0),
(249, 9, 0, 0),
(250, 9, 1, 0),
(251, 9, 2, 2),
(252, 9, 3, 18),
(253, 9, 4, 56),
(254, 9, 5, 127),
(255, 9, 6, 240),
(256, 9, 7, 400),
(257, 9, 8, 626),
(258, 9, 9, 892),
(259, 9, 10, 1223),
(260, 9, 11, 1590),
(261, 9, 12, 1900),
(262, 9, 13, 2080),
(263, 9, 14, 2230),
(264, 9, 15, 2300),
(265, 9, 16, 2310),
(266, 9, 17, 2310),
(267, 9, 18, 2310),
(268, 9, 19, 2310),
(269, 9, 20, 2310),
(270, 9, 21, 2310),
(271, 9, 22, 2310),
(272, 9, 23, 2310),
(273, 9, 24, 2310),
(274, 9, 25, 2310),
(275, 9, 26, 0),
(276, 9, 27, 0),
(277, 9, 28, 0),
(278, 9, 29, 0),
(279, 9, 30, 0),
(280, 10, 0, 0),
(281, 10, 1, 0),
(282, 10, 2, 3),
(283, 10, 3, 25),
(284, 10, 4, 82),
(285, 10, 5, 174),
(286, 10, 6, 321),
(287, 10, 7, 532),
(288, 10, 8, 815),
(289, 10, 9, 1180),
(290, 10, 10, 1612),
(291, 10, 11, 1890),
(292, 10, 12, 2000),
(293, 10, 13, 2050),
(294, 10, 14, 2050),
(295, 10, 15, 2050),
(296, 10, 16, 2050),
(297, 10, 17, 2050),
(298, 10, 18, 2050),
(299, 10, 19, 2050),
(300, 10, 20, 2050),
(301, 10, 21, 2050),
(302, 10, 22, 2050),
(303, 10, 23, 2050),
(304, 10, 24, 2050),
(305, 10, 25, 2050),
(306, 10, 26, 0),
(307, 10, 27, 0),
(308, 10, 28, 0),
(309, 10, 29, 0),
(310, 10, 30, 0),
(311, 11, 0, 0),
(312, 11, 1, 0),
(313, 11, 2, 0),
(314, 11, 3, 70),
(315, 11, 4, 183),
(316, 11, 5, 340),
(317, 11, 6, 563),
(318, 11, 7, 857),
(319, 11, 8, 1225),
(320, 11, 9, 1607),
(321, 11, 10, 1992),
(322, 11, 11, 2208),
(323, 11, 12, 2300),
(324, 11, 13, 2300),
(325, 11, 14, 2300),
(326, 11, 15, 2300),
(327, 11, 16, 2300),
(328, 11, 17, 2300),
(329, 11, 18, 2300),
(330, 11, 19, 2300),
(331, 11, 20, 2300),
(332, 11, 21, 2300),
(333, 11, 22, 2300),
(334, 11, 23, 2300),
(335, 11, 24, 2300),
(336, 11, 25, 2300),
(337, 11, 26, 0),
(338, 11, 27, 0),
(339, 11, 28, 0),
(340, 11, 29, 0),
(341, 11, 30, 0),
(342, 12, 0, 0),
(343, 12, 1, 0),
(344, 12, 2, 0),
(345, 12, 3, 0),
(346, 12, 4, 15),
(347, 12, 5, 120),
(348, 12, 6, 248),
(349, 12, 7, 429),
(350, 12, 8, 662),
(351, 12, 9, 964),
(352, 12, 10, 1306),
(353, 12, 11, 1658),
(354, 12, 12, 1984),
(355, 12, 13, 2264),
(356, 12, 14, 2450),
(357, 12, 15, 2450),
(358, 12, 16, 2470),
(359, 12, 17, 2500),
(360, 12, 18, 2500),
(361, 12, 19, 2500),
(362, 12, 20, 2500),
(363, 12, 21, 2500),
(364, 12, 22, 2500),
(365, 12, 23, 2500),
(366, 12, 24, 2500),
(367, 12, 25, 2500),
(368, 12, 26, 0),
(369, 12, 27, 0),
(370, 12, 28, 0),
(371, 12, 29, 0),
(372, 12, 30, 0),
(373, 13, 0, 0),
(374, 13, 1, 0),
(375, 13, 2, 0),
(376, 13, 3, 25),
(377, 13, 4, 87),
(378, 13, 5, 214),
(379, 13, 6, 377),
(380, 13, 7, 589),
(381, 13, 8, 855),
(382, 13, 9, 1162),
(383, 13, 10, 1453),
(384, 13, 11, 1500),
(385, 13, 12, 1500),
(386, 13, 13, 1500),
(387, 13, 14, 1500),
(388, 13, 15, 1500),
(389, 13, 16, 1500),
(390, 13, 17, 1500),
(391, 13, 18, 1500),
(392, 13, 19, 1500),
(393, 13, 20, 1500),
(394, 13, 21, 0),
(395, 13, 22, 0),
(396, 13, 23, 0),
(397, 13, 24, 0),
(398, 13, 25, 0),
(399, 13, 26, 0),
(400, 13, 27, 0),
(401, 13, 28, 0),
(402, 13, 29, 0),
(403, 13, 30, 0),
(404, 14, 0, 0),
(405, 14, 1, 0),
(406, 14, 2, 0),
(407, 14, 3, 24),
(408, 14, 4, 86),
(409, 14, 5, 188),
(410, 14, 6, 326),
(411, 14, 7, 526),
(412, 14, 8, 728),
(413, 14, 9, 1006),
(414, 14, 10, 1271),
(415, 14, 11, 1412),
(416, 14, 12, 1500),
(417, 14, 13, 1500),
(418, 14, 14, 1500),
(419, 14, 15, 1500),
(420, 14, 16, 1500),
(421, 14, 17, 1500),
(422, 14, 18, 1500),
(423, 14, 19, 1500),
(424, 14, 20, 1500),
(425, 14, 21, 1500),
(426, 14, 22, 1500),
(427, 14, 23, 1500),
(428, 14, 24, 1500),
(429, 14, 25, 1500),
(430, 14, 26, 0),
(431, 14, 27, 0),
(432, 14, 28, 0),
(433, 14, 29, 0),
(434, 14, 30, 0),
(435, 15, 0, 0),
(436, 15, 1, 0),
(437, 15, 2, 0),
(438, 15, 3, 20),
(439, 15, 4, 81),
(440, 15, 5, 159),
(441, 15, 6, 225),
(442, 15, 7, 385),
(443, 15, 8, 571),
(444, 15, 9, 760),
(445, 15, 10, 925),
(446, 15, 11, 1056),
(447, 15, 12, 1168),
(448, 15, 13, 1250),
(449, 15, 14, 1294),
(450, 15, 15, 1300),
(451, 15, 16, 1287),
(452, 15, 17, 1262),
(453, 15, 18, 1232),
(454, 15, 19, 1203),
(455, 15, 20, 1179),
(456, 15, 21, 1158),
(457, 15, 22, 1146),
(458, 15, 23, 1140),
(459, 15, 24, 1138),
(460, 15, 25, 1136),
(461, 15, 26, 0),
(462, 15, 27, 0),
(463, 15, 28, 0),
(464, 15, 29, 0),
(465, 15, 30, 0),
(466, 16, 0, 0),
(467, 16, 1, 0),
(468, 16, 2, 0),
(469, 16, 3, 29),
(470, 16, 4, 73),
(471, 16, 5, 131),
(472, 16, 6, 240),
(473, 16, 7, 376),
(474, 16, 8, 536),
(475, 16, 9, 704),
(476, 16, 10, 871),
(477, 16, 11, 1016),
(478, 16, 12, 1124),
(479, 16, 13, 1247),
(480, 16, 14, 1301),
(481, 16, 15, 1344),
(482, 16, 16, 1364),
(483, 16, 17, 1322),
(484, 16, 18, 1319),
(485, 16, 19, 1314),
(486, 16, 20, 1312),
(487, 16, 21, 1307),
(488, 16, 22, 1299),
(489, 16, 23, 1292),
(490, 16, 24, 1292),
(491, 16, 25, 1292),
(492, 16, 26, 0),
(493, 16, 27, 0),
(494, 16, 28, 0),
(495, 16, 29, 0),
(496, 16, 30, 0),
(497, 17, 0, 0),
(498, 17, 1, 0),
(499, 17, 2, 0),
(500, 17, 3, 0),
(501, 17, 4, 14),
(502, 17, 5, 51),
(503, 17, 6, 105),
(504, 17, 7, 179),
(505, 17, 8, 297),
(506, 17, 9, 427),
(507, 17, 10, 548),
(508, 17, 11, 697),
(509, 17, 12, 794),
(510, 17, 13, 885),
(511, 17, 14, 999),
(512, 17, 15, 1082),
(513, 17, 16, 1090),
(514, 17, 17, 1086),
(515, 17, 18, 1033),
(516, 17, 19, 1025),
(517, 17, 20, 1021),
(518, 17, 21, 1011),
(519, 17, 22, 1000),
(520, 17, 23, 990),
(521, 17, 24, 980),
(522, 17, 25, 970),
(523, 17, 26, 0),
(524, 17, 27, 0),
(525, 17, 28, 0),
(526, 17, 29, 0),
(527, 17, 30, 0),
(528, 18, 0, 0),
(529, 18, 1, 0),
(530, 18, 2, 0),
(531, 18, 3, 23),
(532, 18, 4, 57),
(533, 18, 5, 90),
(534, 18, 6, 165),
(535, 18, 7, 257),
(536, 18, 8, 359),
(537, 18, 9, 470),
(538, 18, 10, 572),
(539, 18, 11, 668),
(540, 18, 12, 747),
(541, 18, 13, 805),
(542, 18, 14, 838),
(543, 18, 15, 842),
(544, 18, 16, 840),
(545, 18, 17, 827),
(546, 18, 18, 808),
(547, 18, 19, 785),
(548, 18, 20, 757),
(549, 18, 21, 728),
(550, 18, 22, 743),
(551, 18, 23, 742),
(552, 18, 24, 745),
(553, 18, 25, 742),
(554, 18, 26, 0),
(555, 18, 27, 0),
(556, 18, 28, 0),
(557, 18, 29, 0),
(558, 18, 30, 0),
(559, 19, 0, 0),
(560, 19, 1, 0),
(561, 19, 2, 0),
(562, 19, 3, 2),
(563, 19, 4, 17),
(564, 19, 5, 45),
(565, 19, 6, 72),
(566, 19, 7, 124),
(567, 19, 8, 196),
(568, 19, 9, 277),
(569, 19, 10, 364),
(570, 19, 11, 444),
(571, 19, 12, 533),
(572, 19, 13, 584),
(573, 19, 14, 618),
(574, 19, 15, 619),
(575, 19, 16, 618),
(576, 19, 17, 619),
(577, 19, 18, 620),
(578, 19, 19, 610),
(579, 19, 20, 594),
(580, 19, 21, 592),
(581, 19, 22, 590),
(582, 19, 23, 580),
(583, 19, 24, 575),
(584, 19, 25, 570),
(585, 19, 26, 0),
(586, 19, 27, 0),
(587, 19, 28, 0),
(588, 19, 29, 0),
(589, 19, 30, 0),
(590, 20, 0, 0),
(591, 20, 1, 0),
(592, 20, 2, 0),
(593, 20, 3, 0),
(594, 20, 4, 2),
(595, 20, 5, 12),
(596, 20, 6, 24),
(597, 20, 7, 35),
(598, 20, 8, 58),
(599, 20, 9, 95),
(600, 20, 10, 128),
(601, 20, 11, 161),
(602, 20, 12, 190),
(603, 20, 13, 213),
(604, 20, 14, 225),
(605, 20, 15, 234),
(606, 20, 16, 245),
(607, 20, 17, 254),
(608, 20, 18, 261),
(609, 20, 19, 265),
(610, 20, 20, 271),
(611, 20, 21, 267),
(612, 20, 22, 263),
(613, 20, 23, 259),
(614, 20, 24, 253),
(615, 20, 25, 248),
(616, 20, 26, 0),
(617, 20, 27, 0),
(618, 20, 28, 0),
(619, 20, 29, 0),
(620, 20, 30, 0),
(621, 21, 0, 0),
(622, 21, 1, 0),
(623, 21, 2, 0),
(624, 21, 3, 8),
(625, 21, 4, 19),
(626, 21, 5, 31),
(627, 21, 6, 55),
(628, 21, 7, 83),
(629, 21, 8, 110),
(630, 21, 9, 136),
(631, 21, 10, 160),
(632, 21, 11, 170),
(633, 21, 12, 176),
(634, 21, 13, 180),
(635, 21, 14, 175),
(636, 21, 15, 172),
(637, 21, 16, 164),
(638, 21, 17, 155),
(639, 21, 18, 150),
(640, 21, 19, 145),
(641, 21, 20, 145),
(642, 21, 21, 140),
(643, 21, 22, 135),
(644, 21, 23, 130),
(645, 21, 24, 130),
(646, 21, 25, 130),
(647, 21, 26, 0),
(648, 21, 27, 0),
(649, 21, 28, 0),
(650, 21, 29, 0),
(651, 21, 30, 0),
(652, 22, 0, 0),
(653, 22, 1, 0),
(654, 22, 2, 0),
(655, 22, 3, 0),
(656, 22, 4, 44.1),
(657, 22, 5, 135),
(658, 22, 6, 261),
(659, 22, 7, 437),
(660, 22, 8, 669),
(661, 22, 9, 957),
(662, 22, 10, 1279),
(663, 22, 11, 1590),
(664, 22, 12, 1823),
(665, 22, 13, 1945),
(666, 22, 14, 1988),
(667, 22, 15, 1998),
(668, 22, 16, 2000),
(669, 22, 17, 2000),
(670, 22, 18, 2000),
(671, 22, 19, 2000),
(672, 22, 20, 2000),
(673, 22, 21, 2000),
(674, 22, 22, 2000),
(675, 22, 23, 2000),
(676, 22, 24, 2000),
(677, 22, 25, 2000),
(678, 22, 26, 0),
(679, 22, 27, 0),
(680, 22, 28, 0),
(681, 22, 29, 0),
(682, 22, 30, 0),
(683, 23, 0, 0),
(684, 23, 1, 0),
(685, 23, 2, 0),
(686, 23, 3, 0),
(687, 23, 4, 33.3),
(688, 23, 5, 93.9),
(689, 23, 6, 178),
(690, 23, 7, 294),
(691, 23, 8, 452),
(692, 23, 9, 655),
(693, 23, 10, 900),
(694, 23, 11, 1167),
(695, 23, 12, 1418),
(696, 23, 13, 1603),
(697, 23, 14, 1702),
(698, 23, 15, 1739),
(699, 23, 16, 1748),
(700, 23, 17, 1750),
(701, 23, 18, 1750),
(702, 23, 19, 1750),
(703, 23, 20, 1750),
(704, 23, 21, 1750),
(705, 23, 22, 1750),
(706, 23, 23, 1750),
(707, 23, 24, 1750),
(708, 23, 25, 1750),
(709, 23, 26, 0),
(710, 23, 27, 0),
(711, 23, 28, 0),
(712, 23, 29, 0),
(713, 23, 30, 0),
(714, 24, 0, 0),
(715, 24, 1, 0),
(716, 24, 2, 0),
(717, 24, 3, 0),
(718, 24, 4.5, 15.2),
(719, 24, 5, 79.3),
(720, 24, 6, 167),
(721, 24, 7, 286),
(722, 24, 8, 445),
(723, 24, 9, 640),
(724, 24, 10, 854),
(725, 24, 11, 1064),
(726, 24, 12, 1258),
(727, 24, 13, 1425),
(728, 24, 14, 1549),
(729, 24, 15, 1616),
(730, 24, 16, 1641),
(731, 24, 17, 1650),
(732, 24, 18, 1650),
(733, 24, 19, 1650),
(734, 24, 20, 1650),
(735, 24, 21, 1650),
(736, 24, 22, 1650),
(737, 24, 23, 1650),
(738, 24, 24, 1650),
(739, 24, 25, 1650),
(740, 24, 26, 0),
(741, 24, 27, 0),
(742, 24, 28, 0),
(743, 24, 29, 0),
(744, 24, 30, 0),
(745, 25, 0, 0),
(746, 25, 1, 0),
(747, 25, 2, 0),
(748, 25, 3, 0),
(749, 25, 4, 25.5),
(750, 25, 5, 67.4),
(751, 25, 6, 125),
(752, 25, 7, 203),
(753, 25, 8, 304),
(754, 25, 9, 425),
(755, 25, 10, 554),
(756, 25, 11, 671),
(757, 25, 12, 759),
(758, 25, 13, 811),
(759, 25, 14, 836),
(760, 25, 15, 846),
(761, 25, 16, 849),
(762, 25, 17, 850),
(763, 25, 18, 850),
(764, 25, 19, 850),
(765, 25, 20, 850),
(766, 25, 21, 850),
(767, 25, 22, 850),
(768, 25, 23, 850),
(769, 25, 24, 850),
(770, 25, 25, 850),
(771, 25, 26, 0),
(772, 25, 27, 0),
(773, 25, 28, 0),
(774, 25, 29, 0),
(775, 25, 30, 0),
(776, 26, 0, 0),
(777, 26, 1, 0),
(778, 26, 2, 0),
(779, 26, 3, 0),
(780, 26, 4, 2.9),
(781, 26, 5, 43.8),
(782, 26, 6, 96.7),
(783, 26, 7, 166),
(784, 26, 8, 252),
(785, 26, 9, 350),
(786, 26, 10, 450),
(787, 26, 11, 538),
(788, 26, 12, 600),
(789, 26, 13, 635),
(790, 26, 14, 651),
(791, 26, 15, 657),
(792, 26, 16, 659),
(793, 26, 17, 660),
(794, 26, 18, 660),
(795, 26, 19, 660),
(796, 26, 20, 660),
(797, 26, 21, 660),
(798, 26, 22, 660),
(799, 26, 23, 660),
(800, 26, 24, 660),
(801, 26, 25, 660),
(802, 26, 26, 0),
(803, 26, 27, 0),
(804, 26, 28, 0),
(805, 26, 29, 0),
(806, 26, 30, 0),
(807, 27, 0, 0),
(808, 27, 1, 0),
(809, 27, 2, 0),
(810, 27, 3, 0),
(811, 27, 4, 30.4),
(812, 27, 5, 77.3),
(813, 27, 6, 135),
(814, 27, 7, 206),
(815, 27, 8, 287),
(816, 27, 9, 371),
(817, 27, 10, 450),
(818, 27, 11, 514),
(819, 27, 12, 558),
(820, 27, 13, 582),
(821, 27, 14, 594),
(822, 27, 15, 598),
(823, 27, 16, 600),
(824, 27, 17, 600),
(825, 27, 18, 600),
(826, 27, 19, 600),
(827, 27, 20, 600),
(828, 27, 21, 0),
(829, 27, 22, 0),
(830, 27, 23, 0),
(831, 27, 24, 0),
(832, 27, 25, 0),
(833, 27, 26, 0),
(834, 27, 27, 0),
(835, 27, 28, 0),
(836, 27, 29, 0),
(837, 27, 30, 0),
(838, 28, 0, 0),
(839, 28, 1, 0),
(840, 28, 2, 0),
(841, 28, 3, 0),
(842, 28, 4, 21.5),
(843, 28, 5, 65.2),
(844, 28, 6, 120),
(845, 28, 7, 188),
(846, 28, 8, 268),
(847, 28, 9, 356),
(848, 28, 10, 440),
(849, 28, 11, 510),
(850, 28, 12, 556),
(851, 28, 13, 582),
(852, 28, 14, 594),
(853, 28, 15, 598),
(854, 28, 16, 600),
(855, 28, 17, 600),
(856, 28, 18, 600),
(857, 28, 19, 600),
(858, 28, 20, 600),
(859, 28, 21, 600),
(860, 28, 22, 600),
(861, 28, 23, 600),
(862, 28, 24, 600),
(863, 28, 25, 600),
(864, 28, 26, 0),
(865, 28, 27, 0),
(866, 28, 28, 0),
(867, 28, 29, 0),
(868, 28, 30, 0),
(869, 29, 0, 0),
(870, 29, 1, 0),
(871, 29, 2, 0),
(872, 29, 3, 0),
(873, 29, 4, 18.9),
(874, 29, 5, 57.4),
(875, 29, 6, 106),
(876, 29, 7, 166),
(877, 29, 8, 239),
(878, 29, 9, 320),
(879, 29, 10, 402),
(880, 29, 11, 476),
(881, 29, 12, 532),
(882, 29, 13, 568),
(883, 29, 14, 587),
(884, 29, 15, 595),
(885, 29, 16, 599),
(886, 29, 17, 600),
(887, 29, 18, 600),
(888, 29, 19, 600),
(889, 29, 20, 600),
(890, 29, 21, 600),
(891, 29, 22, 600),
(892, 29, 23, 600),
(893, 29, 24, 600),
(894, 29, 25, 600),
(895, 29, 26, 600),
(896, 29, 27, 600),
(897, 29, 28, 600),
(898, 29, 29, 600),
(899, 29, 30, 600),
(900, 30, 0, 0),
(901, 30, 1, 0),
(902, 30, 2, 0),
(903, 30, 3.5, 2.1),
(904, 30, 4, 7.1),
(905, 30, 5, 20.5),
(906, 30, 6, 38.3),
(907, 30, 7, 61.9),
(908, 30, 8, 92.2),
(909, 30, 9, 127.9),
(910, 30, 10, 164.9),
(911, 30, 11, 196.4),
(912, 30, 12, 215.5),
(913, 30, 13, 222.9),
(914, 30, 14, 225),
(915, 30, 15, 225),
(916, 30, 16, 225),
(917, 30, 17, 225),
(918, 30, 18, 225),
(919, 30, 19, 225),
(920, 30, 20, 225),
(921, 30, 21, 225),
(922, 30, 22, 225),
(923, 30, 23, 225),
(924, 30, 24, 225),
(925, 30, 25, 225),
(926, 30, 26, 0),
(927, 30, 27, 0),
(928, 30, 28, 0),
(929, 30, 29, 0),
(930, 30, 30, 0),
(931, 31, 0, 0),
(932, 31, 1, 0),
(933, 31, 2, 0),
(934, 31, 3.5, 1.5),
(935, 31, 4, 4.5),
(936, 31, 5, 16.6),
(937, 31, 6, 31.8),
(938, 31, 7, 52.5),
(939, 31, 8, 82.4),
(940, 31, 9, 114.5),
(941, 31, 10, 148.3),
(942, 31, 11, 181),
(943, 31, 12, 205),
(944, 31, 13, 217.6),
(945, 31, 14, 225),
(946, 31, 15, 225),
(947, 31, 16, 225),
(948, 31, 17, 225),
(949, 31, 18, 225),
(950, 31, 19, 225),
(951, 31, 20, 225),
(952, 31, 21, 225),
(953, 31, 22, 225),
(954, 31, 23, 225),
(955, 31, 24, 225),
(956, 31, 25, 225),
(957, 31, 26, 0),
(958, 31, 27, 0),
(959, 31, 28, 0),
(960, 31, 29, 0),
(961, 31, 30, 0);

-- --------------------------------------------------------

--
-- Structure de la table `cse_turbines`
--

CREATE TABLE IF NOT EXISTS `cse_turbines` (
  `turbine_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `turbine_name` varchar(255) NOT NULL,
  `turbine_manufacturer` varchar(255) NOT NULL,
  `turbine_power` int(11) NOT NULL,
  `turbine_blades` int(11) NOT NULL,
  `turbine_diameter` float NOT NULL,
  `turbine_height` float NOT NULL,
  `turbine_start_speed` float NOT NULL,
  `turbine_stop_speed` float NOT NULL,
  `turbine_verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`turbine_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `cse_turbines`
--

INSERT INTO `cse_turbines` (`turbine_id`, `turbine_name`, `turbine_manufacturer`, `turbine_power`, `turbine_blades`, `turbine_diameter`, `turbine_height`, `turbine_start_speed`, `turbine_stop_speed`) VALUES
(1, 'ECO 80 1,67 Class 2A', 'Alstom', 1670, 3, 80, 80, 3, 25),
(2, 'ECO 80 1,67 Class 3A', 'Alstom', 1670, 3, 80, 80, 3, 25),
(3, 'ECO 80 2.0 Class 2A', 'Alstom', 2000, 3, 80, 80, 4, 25),
(4, 'ECO 86 1.67 Class 3A', 'Alstom', 1670, 3, 85.5, 80, 3, 25),
(5, 'ECO 100 3.0 Class 2A', 'Alstom', 3000, 3, 100.8, 90, 3, 25),
(6, 'ECO 110 3.0 Class 3A', 'Alstom', 3000, 3, 109.8, 90, 3, 25),
(7, 'E44', 'Enercon', 900, 3, 44, 55, 2, 25),
(8, 'E53', 'Enercon', 800, 3, 53, 73, 2, 25),
(9, 'E70', 'Enercon', 2300, 3, 71, 80, 2, 25),
(10, 'E82', 'Enercon', 2000, 3, 82, 80, 2, 25),
(11, 'N90', 'Nordex', 2300, 3, 90, 80, 3, 25),
(12, 'N80', 'Nordex', 2500, 3, 80, 60, 4, 25),
(13, 'S77', 'Nordex', 1500, 3, 77, 61.5, 3, 20),
(14, 'S70', 'Nordex', 1500, 3, 70, 65, 3, 25),
(15, 'N62', 'Nordex', 1300, 3, 62, 60, 3, 25),
(16, 'N60', 'Nordex', 1300, 3, 60, 46, 3, 25),
(17, 'N54', 'Nordex', 1000, 3, 54, 50, 4, 25),
(18, 'N50', 'Nordex', 800, 3, 50, 46, 3, 25),
(19, 'N43', 'Nordex', 600, 3, 43, 40, 3, 25),
(20, 'N29', 'Nordex', 250, 3, 29, 30, 4, 25),
(21, 'N27', 'Nordex', 150, 3, 27, 30, 3, 25),
(22, 'V80 2000', 'Vestas', 2000, 3, 80, 80, 4, 25),
(23, 'V66 1750', 'Vestas', 1750, 3, 66, 66, 4, 25),
(24, 'V66 1650', 'Vestas', 1650, 3, 66, 60, 4.5, 25),
(25, 'V52 850', 'Vestas', 850, 3, 52, 44, 4, 25),
(26, 'V47 660', 'Vestas', 660, 3, 47, 40, 4, 25),
(27, 'V44 600', 'Vestas', 600, 3, 44, 35, 4, 20),
(28, 'V42 600', 'Vestas', 600, 3, 42, 35, 4, 25),
(29, 'V39 600', 'Vestas', 600, 3, 39, 35, 4, 30),
(30, 'V29 225', 'Vestas', 225, 3, 29, 31.5, 3.5, 25),
(31, 'V27 225', 'Vestas', 225, 3, 27, 31.5, 3.5, 25);
