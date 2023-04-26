-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 26 avr. 2023 à 09:42
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `legende 21`
--

-- --------------------------------------------------------

--
-- Structure de la table `competition`
--

DROP TABLE IF EXISTS `competition`;
CREATE TABLE IF NOT EXISTS `competition` (
  `id_competition` varchar(10) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `lieux` varchar(250) NOT NULL,
  `saison` int NOT NULL,
  `texte` text NOT NULL,
  `last_win` text NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  PRIMARY KEY (`id_competition`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `competition`
--

INSERT INTO `competition` (`id_competition`, `nom`, `lieux`, `saison`, `texte`, `last_win`, `image1`, `image2`) VALUES
('LCK', 'Ligue Corée', 'Corée', 2023, 'ablablablabla', 'T1', 'image1', 'image2'),
('LCS', 'Ligue Américaine', 'Amérique', 2023, 'nuvlubfqljfhna', 'TSM', 'image1', 'imgage2'),
('LFL', 'Ligue francaise', 'france', 2023, 'ksvgjkgdjkzbjkz', 'Vitality.Bee', 'image1', 'image2');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id_equipe` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  PRIMARY KEY (`id_equipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id_equipe`, `nom`) VALUES
('E-LCK-BRION', 'BRION'),
('E-LCK-Dplus Kia', 'Dplus Kia'),
('E-LCK-DRX', 'DRX'),
('E-LCK-Gen.G', 'Gen.G'),
('E-LCK-Hanwha Life Esports', 'Hanwha Life Esports'),
('E-LCK-Kt Rolster', 'Kt Rolster'),
('E-LCK-Kwangdong Freecs', 'Kwangdong Freecs'),
('E-LCK-Liiv SANDBOX', 'Liiv SANDBOX'),
('E-LCK-NongShim REDFORCE', 'NongShim REDFORCE'),
('E-LCK-T1', 'T1'),
('E-LCS-100 Thieves', '100 Thieves'),
('E-LCS-CLG', 'CLG'),
('E-LCS-Cloud9', 'Cloud9'),
('E-LCS-Dignitas', 'Dignitas'),
('E-LCS-Evil Geniuses', 'Evil Geniuses'),
('E-LCS-FlyQuest', 'FlyQuest'),
('E-LCS-Golden Guardians', 'Golden Guardians'),
('E-LCS-Immortals Progressive', 'Immortals Progressive'),
('E-LCS-Team Liquid Honda', 'Team Liquid Honda'),
('E-LCS-TSM', 'TSM'),
('E-LFL-Aegis', 'Aegis'),
('E-LFL-BK ROG Esports', 'BK ROG Esports'),
('E-LFL-GameWard', 'GameWard'),
('E-LFL-IZIDREAM', 'IZIDREAM'),
('E-LFL-Karmine Corp', 'Karmine Corp'),
('E-LFL-LDLC OL', 'LDLC OL'),
('E-LFL-Solary', 'Solary'),
('E-LFL-Team BDS Academy', 'Team BDS Academy'),
('E-LFL-Team GO', 'Team GO'),
('E-LFL-Vitality.Bee', 'Vitality.Bee');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `id_joueur` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(250) DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL,
  `equipe_code` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_joueur`),
  KEY `equipe_code` (`equipe_code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`id_joueur`, `pseudo`, `position`, `equipe_code`) VALUES
(1, 'ROM/1', 'SUPP', 'E-LFL-Aegis');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) NOT NULL,
  `resume` text NOT NULL,
  `texte` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id_news`, `titre`, `resume`, `texte`, `image`) VALUES
(1, 'Titre test', 'Résumé test', 'Texte test', 'news_test.png'),
(2, 'Titre test 2', 'résumé test 2', 'texte test 2', 'news_test.png');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `mdp` text NOT NULL,
  `date_creation_compte` datetime NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `mail`, `mdp`, `date_creation_compte`) VALUES
(1, 'CERNON', 'Romain', 'romain.cernon@gmail.com', '$6$rounds=5000$usesomesillystri$pP3sRCbg4pYffth7RJt0JL8G2.Sg3g5Drzk2XtM4oj1EoZjcfI6eWlcc12r.WR8bJbnfVUrxkBttDJq.LOhnX.', '2023-04-21 12:02:23');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`equipe_code`) REFERENCES `equipe` (`id_equipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
