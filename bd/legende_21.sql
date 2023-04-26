-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 26 avr. 2023 à 13:33
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
('LCK', 'Ligue Coréenne', 'Corée', 2023, 'La League of Legends Champions Korea (LCK) est le championnat professionnel coréen de League of Legends organisée par Riot Games en collaboration avec la Korean e-Sports Association.', 'T1', 'image1LCK', 'image2LCK'),
('LCS', 'Ligue Américaine', 'Amérique', 2023, 'Les League of Legends Championship Series (LCS) anciennement League of Legends Championship Series North America (LCS NA) sont la plus haute division nord-américaine de la scène professionnelle de League of Legends. Gérée par Riot Games, la compétition se joue entre 10 équipes franchisées dans un championnat bi-annuel.', 'TSM', 'image1LCS', 'image2LCS'),
('LFL', 'Ligue francaise', 'france', 2023, 'La Ligue Française de League of Legends (LFL) est la principale ligue professionnelle de League of Legends en France produite par Webedia, en partenariat avec One Trick Production (OTP) et Riot Games France, dans laquelle s\'affrontent les dix meilleures équipes françaises.', 'LDLC OL', 'image1LFL', 'image2LFL');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`id_joueur`, `pseudo`, `position`, `equipe_code`) VALUES
(2, 'Lot', 'TOP', 'E-LFL-Aegis'),
(3, 'SkewMond', 'JUNG', 'E-LFL-Aegis'),
(4, 'Eika', 'MID', 'E-LFL-Aegis'),
(5, 'Shiganari', 'BOT', 'E-LFL-Aegis'),
(6, 'Hantera', 'SUPP', 'E-LFL-Aegis');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id_news`, `titre`, `resume`, `texte`, `image`) VALUES
(2, 'Titre test 2', 'résumé test 2', 'texte test 2', 'news_test.png'),
(3, 'CONCEPTION DE MILIO : DES FLAMMES ET DES AMIS', 'Riot Emizery explique le processus de création de Milio.', 'Milio, la Douce flamme, a hâte de se faire des amis dans la Faille ! Nous savions, en concevant ce personnage, que nous voulions un enchanteur masculin qui s\'intègre parfaitement à la longue liste d\'enchanteurs et qui utilise le feu de manière peu conventionnelle pour protéger ses alliés. Au fil du temps, cela a débouché sur le kit que nous connaissons : un kit focalisé sur le renforcement, la protection, les soins et l\'inspiration des alliés grâce à des compétences lancées rapidement.', 'Milio.png'),
(4, 'GO rejoint LDLC OL en finale de LFL', 'En s\'imposant rapidement face à Aegis ce jeudi (3-0), la Team GO s\'est qualifiée pour la finale de la Ligue Française de League of Legends. En pleine confiance, elle défiera LDLC OL pour le titre national, ce vendredi.', 'Vainqueur en trois manches sèches face à Aegis ce jeudi (3-0), dans un match étrange et bien plus serré que ce que le score n\'indique, la Team GO s\'est qualifiée pour la grande finale de la Ligue Française de League of Legends (LFL), qu\'elle disputera face à LDLC OL vendredi. Promise à tout gagner en début d\'année, la structure francilienne, qui surfe sur une bonne série, est désormais en position d\'accrocher son premier titre de la saison. Même si la route pour y accéder aura été bien plus périlleuse que prévue.', 'Team_GO.png'),
(5, 'LDLC OL à nouveau champion de France', 'LDLC OL a remporté son troisième titre de champion de France de League of Legends de rang, ce vendredi soir, en battant Team GO en finale (3-0). Une performance remarquable, surtout après les nombreux changements opérés au sein du club lors de l\'intersaison.', 'Et de trois d\'affilée. Déjà vainqueur des deux titres de champion de France de League of Legends en jeu en 2022, LDLC OL a conservé son bien ce vendredi soir, en remportant le segment de printemps 2023 de la LFL. Opposés à Team GO en finale, les Lyonnais ont parfaitement maîtrisé leur sujet (3-0) pour inscrire une cinquième fois au total leur nom au palmarès de la compétition. Pourtant très solide jeudi contre Aegis en demi-finale, GO a eu beaucoup de mal contre son adversaire du jour, bien trop solide collectivement et notamment en mid game. Pas vraiment dérangés en early dans les deux premières manches, les joueurs de LDLC OL, étouffants, un cran supérieurs, déroulaient ensuite grâce à un parfait contrôle de la carte et une gestion parfaite des teamfights. En très bonne posture pour remettre ça lors de la troisième partie, le club lyonnais ne passait cependant pas loin de relancer son opposant, jusqu\'ici sans solution. Moins précise, peut-être un peu rattrapée par la pression d\'un titre à portée de main, sa formation laissait Team GO recoller. Mais dans un late game débridé et indécis, LDLC OL s\'en sortait finalement - grâce notamment à son duo de Français Aslan « White » Panglose et Théo « Zoelys » Le Scornec - pour conclure sur un score sec.', 'LDLC_OL.png'),
(6, 'LDLC OL et Team GO s\'arrêtent en quarts de finale des EMEA Masters', 'Les deux derniers représentants de la LFL sont tombés en quarts de finale des EMEA Masters le second échelon compétitif de League of Legends en Europe, ce jeudi. Pourtant favorite, la France ne sera pas en demi-finale de la compétition, une première depuis l\'été 2019.', 'Après une première déception pour la LFL, la ligue Français de League of Legends, avec l\'élimination d\'Aegis lors des phases de poules, c\'est maintenant Team GO et LDLC OL qui se sont fait sortir, jeudi, lors des quarts de finale des EMEA Masters, le second échelon compétitif en Europe. C\'est la première fois depuis le segment d\'été 2019 qu\'il n\'y aura pas de représentants de la ligue Française dans le dernier carré de cette compétition.\r\nLe vainqueur du segment de printemps de la LFL est tombé en premier, mardi soir, face à Istanbul Wildcats. D\'abord devant au score, les Renards n\'ont pas su se défendre face à la contre-offensive turque. Ces derniers ont conclu la rencontre 3-1, s\'offrant une place en demi-finale. Comme une finale avant l\'heure, les Chats sauvages semblent partis pour le titre européen. Ils retrouveront SK Gaming Prime, équipe académique de SK Gaming, locataire du LEC, l\'échelon supérieur européen, qui s\'est imposé face à l\'organisation Italienne Macko Esports. Le club allemand est d\'ailleurs la résidence du dernier Français de la compétition, Olivier « Prime » Payet, qui s\'élancera de nouveau dans la faille de l\'invocateur mercredi 26, pour une place en finale.', 'defeat_LDLC.png');

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
