-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 18 avr. 2018 à 09:11
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `instagram`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom_image` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `membre_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `nom_image`, `date`, `membre_id`) VALUES
(4, 'b030f4cbab0511ac9de4992f40612770.jpg', '2018-03-21 11:14:05.983785', 1),
(3, 'a648bdf8169015dd7475047c5b8a1a75.jpg', '2018-03-21 11:06:25.185781', 1),
(5, '79df5dfa457a3c2e3134fff72b13a14b.jpg', '2018-04-18 07:25:42.074084', 2),
(7, '8a1a199690a54d2c31438ca38b646ebe.png', '2018-04-18 08:58:17.309568', 2);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `login` varchar(255) NOT NULL,
  `membre_id` int(255) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`membre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`login`, `membre_id`, `password`, `description`) VALUES
('paul', 1, 'Password', 'bonjour je suis paul j\'ai 20 et je suis étudiant en informatique.'),
('clement', 2, 'clement', 'bonjour  ofbobeioe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
