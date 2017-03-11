-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Jeu 09 Mars 2017 à 22:42
-- Version du serveur :  5.6.25
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exo_cards`
--

-- --------------------------------------------------------

--
-- Structure de la table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `title` varchar(80) CHARACTER SET utf8 NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cards`
--

INSERT INTO `cards` (`id`, `title`, `img`) VALUES
(1, 'Pen tool', 'https://d13yacurqjgara.cloudfront.net/users/255/screenshots/3347637/pen_tool_1x.png'),
(2, 'Coast Dead Arm', 'https://d13yacurqjgara.cloudfront.net/users/3007/screenshots/3347711/dead-arm-800x670_1x.png'),
(3, 'Airbnb', 'https://d13yacurqjgara.cloudfront.net/users/31398/screenshots/3347768/i_m_joining_airbnb__1x.png'),
(4, 'International Woman', 'https://d13yacurqjgara.cloudfront.net/users/116499/screenshots/3348353/women_s-day_1x.png'),
(5, 'Switch', 'https://d13yacurqjgara.cloudfront.net/users/763/screenshots/3348456/switch_1x.png'),
(6, 'Patagonia', 'https://d13yacurqjgara.cloudfront.net/users/203133/screenshots/3348454/patagonia_ss_2017-2_1x.png'),
(7, 'Wolverine Whale', 'https://d13yacurqjgara.cloudfront.net/users/354716/screenshots/3347940/wolverine_monstro_dribbble_1x.jpg'),
(8, 'Liberty Torch', 'https://d13yacurqjgara.cloudfront.net/users/698/screenshots/3347798/pp-torch_1x.jpg'),
(9, 'Matches ', 'https://d13yacurqjgara.cloudfront.net/users/14357/screenshots/3347687/hail_to_the_cheif_1x.jpg'),
(10, 'Buffalo River', 'https://d13yacurqjgara.cloudfront.net/users/631114/screenshots/3347754/lco_buffalo_800x600_1x.png'),
(11, 'Flowers', 'https://d13yacurqjgara.cloudfront.net/users/77553/screenshots/3348208/sdfghj.jpg'),
(12, 'Boomville', 'https://d13yacurqjgara.cloudfront.net/users/105362/screenshots/3347999/dribbble100_1x.jpg'),
(13, 'Boots are ....', 'https://d13yacurqjgara.cloudfront.net/users/540300/screenshots/3349164/dribbble11-01_1x.png'),
(14, 'Cup 93', 'https://d13yacurqjgara.cloudfront.net/users/2060/screenshots/3350886/logo_wip_tadcarpenter-02_1x.jpg'),
(15, 'Beardman', 'https://d13yacurqjgara.cloudfront.net/users/1286394/screenshots/3350686/boy4_1x.png');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
