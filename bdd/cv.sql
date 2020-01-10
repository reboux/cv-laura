-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 10 jan. 2020 à 11:11
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `tel` int(10) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `mail`, `tel`, `message`) VALUES
(1, 'hhhh', 'hhh', 'hhh@mjh.com', NULL, ''),
(2, 'hhhh', 'hhh', 'hhh@mjh.com', NULL, ''),
(3, 'oooo', 'ijk', 'jghjghj@mhgyjk', NULL, 'essaie'),
(4, 'yfut', 'yfg', 'yuygjh@jikgy.fr', NULL, 'ahahah'),
(6, 'Hubert', 'Klarisse', 'hubert@gmail.com', 655421765, 'ffff'),
(7, 'Hubert', 'Klarisse', 'gyhfgjgjhgj@msn.com', 655421765, 'hfhtdhfvfkdt'),
(8, 'Hubert', 'Klarisse', 'yuuifvgbfvcbsvfbn@cjhgvhjscvg.fr', 655421765, 'ffdsgfdgbdf&lt;gb'),
(9, 'ghfnn', 'ndefhgtyik,', 'nn@mhg.com', 655421765, 'fgfhfdjng'),
(10, 'fefaregerfh', 'eirhglskfgh', 'nnfrsoidfgusdh@mhg.com', 785642518, 'fgfhfdjng'),
(11, 'juste', 'huguette', 'huguettejuste@hotmail.fr', 852467060, 'gbdfhbdfghn'),
(12, 'justice', 'hugo', 'hugojustice@hotmail.fr', 782156395, 'fsdfsv'),
(13, 'claire', 'clarisse', 'clarisseclaire@hotmail.fr', 854602790, 'gdfgfgfdg'),
(14, 'gfdgdfb', 'vnbnvfbnbn', 'nfgnbf@fgnvfb.fr', 420345342, 'vbncvnvcbn'),
(15, 'Reboux', 'Laura', 'laurareboux@gmail.fr', 420345342, 'je suis de telqjhsjkdf'),
(16, 'vvv', 'bffnbn', 'ngngn@flmgjoidhg', 874595648, 'dffgbhned');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
