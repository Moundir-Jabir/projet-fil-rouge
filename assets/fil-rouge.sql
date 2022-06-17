-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 17 juin 2022 à 15:28
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fil-rouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idArticle` int(11) NOT NULL,
  `datePublication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `titreArticle` varchar(255) NOT NULL,
  `contenue` text NOT NULL,
  `imageArticle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL,
  `etat` varchar(30) NOT NULL DEFAULT 'en cours de traitement',
  `dateCommande` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idClient` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idCommande`, `etat`, `dateCommande`, `idClient`, `total`) VALUES
(1, 'livrée', '2022-06-14 00:05:03', 5, 41600),
(2, 'en cours de livraison', '2022-06-14 00:17:44', 5, 3000),
(3, 'en cours de livraison', '2022-06-17 09:23:50', 5, 36200);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idCommentaire` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idArticle` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `dateCommentaire` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `idCompte` int(11) NOT NULL,
  `nomClient` varchar(50) NOT NULL,
  `emailClient` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `villeCompte` varchar(50) NOT NULL,
  `adresseCompte` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imageProfil` varchar(255) NOT NULL,
  `typeCompte` varchar(30) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`idCompte`, `nomClient`, `emailClient`, `telephone`, `villeCompte`, `adresseCompte`, `password`, `imageProfil`, `typeCompte`) VALUES
(1, 'Admin', 'admin@gmail.com', '', '', '', '17c4520f6cfd1ab53d8745e84681eb49', '', 'admin'),
(5, 'Moundir Jabir', 'moundirjabir@icloud.com', '0623731085', 'Marrakech', 'allal fassi', '3dbe00a167653a1aaee01d93e77e730e', 'assets/upload/A608DB19-EE6B-4A49-AC86-EED5D917443B.jpeg', 'client');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(11) NOT NULL,
  `nomProduit` varchar(255) NOT NULL,
  `prixProduit` float NOT NULL DEFAULT '0',
  `pouces` float DEFAULT NULL,
  `puce` varchar(30) DEFAULT NULL,
  `stockage` int(11) DEFAULT NULL,
  `touchBar` tinyint(1) DEFAULT '0',
  `touchId` tinyint(1) DEFAULT '0',
  `memoire` int(11) DEFAULT NULL,
  `couleur` varchar(100) DEFAULT NULL,
  `promotion` int(11) DEFAULT '0',
  `quantiteStock` int(11) DEFAULT NULL,
  `camera` int(11) DEFAULT NULL,
  `categorie` varchar(50) DEFAULT NULL,
  `dateAjout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `descriptionProduit` varchar(255) NOT NULL,
  `finPromotion` date DEFAULT NULL,
  `imageProduit` varchar(255) NOT NULL,
  `faceId` tinyint(1) DEFAULT '0',
  `accessoireCategorie` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `nomProduit`, `prixProduit`, `pouces`, `puce`, `stockage`, `touchBar`, `touchId`, `memoire`, `couleur`, `promotion`, `quantiteStock`, `camera`, `categorie`, `dateAjout`, `descriptionProduit`, `finPromotion`, `imageProduit`, `faceId`, `accessoireCategorie`) VALUES
(2, 'iphone 12 mini', 7560, 4, 'A13', 64, 0, 0, 8, '#ff2600', 10, 70, 13, 'iphone', '2022-06-08 10:48:22', 'generation 2021', '2022-06-09', 'assets/upload/iphone-12-mini-frandroid-2020.png', 1, NULL),
(3, 'iPhone 13 pro max', 17000, 6, 'A15 bionic', 512, 0, 0, 16, '#4f5503', 20, 18, 13, 'iphone', '2022-06-09 08:44:13', 'modele 2022', '2022-06-17', 'assets/upload/iphone-13-pro-green-select.png', 1, NULL),
(7, 'iPhone SE', 4500, 4, 'A15', 64, 0, 1, 8, '#ffffff', 20, 36, 13, 'iphone', '2022-06-09 08:52:16', 'iPhone se 3eme géneration', '2022-06-17', 'assets/upload/iphone-se-starlight-select-202203.png', 0, NULL),
(8, 'iMac', 13000, 24, 'M2', 1024, 0, 1, 32, '#00c7fc', 0, 13, NULL, 'mac', '2022-06-09 09:03:33', 'iMac nouvelle géneration', NULL, 'assets/upload/imac-24-blue-cto-hero-202104.jpeg', 0, NULL),
(9, 'Mac Mini', 9000, 0, 'i7 (8eme géneration)', 512, 0, 0, 8, '#aaaaaa', 0, 0, NULL, 'mac', '2022-06-09 09:08:58', 'modele 2019', NULL, 'assets/upload/mac-mini-202011-gallery-3.jpeg', 0, NULL),
(10, 'MacBook Air', 12000, 13, 'i5 (8ème géneration)', 128, 0, 1, 8, '#d6d6d6', 15, 14, NULL, 'mac', '2022-06-09 09:15:12', 'modele 2019', '2022-06-18', 'assets/upload/macbook-air-2020-m1-argent-silver-uno-maroc.jpeg', 0, NULL),
(11, 'Watch série 3', 2700, NULL, NULL, NULL, 0, 0, NULL, '#ebebeb', 0, 5, NULL, 'watch', '2022-06-09 09:23:35', 'modele 2017', NULL, 'assets/upload/42-alu-silver-sport-white-nc-s3-grid.jpeg', 0, NULL),
(12, 'iPad pro', 1100, 10, 'A13', 128, 0, 0, 8, '#4f5503', 0, 23, 13, 'ipad', '2022-06-09 09:28:10', 'modele 2021', NULL, 'assets/upload/ipad-2021-hero-space-wifi-select.png', 1, NULL),
(13, 'Air Pods Pro', 2700, NULL, NULL, NULL, 0, 0, NULL, '#ffffff', 0, 9, NULL, 'airpods', '2022-06-09 09:58:33', '2eme géneration', NULL, 'assets/upload/MWP22.jpeg', 0, NULL),
(14, 'iPhone SE Case', 150, NULL, NULL, NULL, 0, 0, NULL, '#ff2600', 10, 53, NULL, 'accessoires', '2022-06-09 10:01:31', 'Matiere : Silicone', '2022-06-12', 'assets/upload/MN6H3.jpeg', 0, 'iphone');

-- --------------------------------------------------------

--
-- Structure de la table `produit_commande`
--

CREATE TABLE `produit_commande` (
  `idProduitCommande` int(11) NOT NULL,
  `fProduit` int(11) NOT NULL,
  `fCommande` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit_commande`
--

INSERT INTO `produit_commande` (`idProduitCommande`, `fProduit`, `fCommande`, `quantite`) VALUES
(1, 3, 1, 2),
(2, 7, 1, 4),
(3, 14, 2, 2),
(4, 13, 2, 1),
(5, 10, 3, 1),
(6, 8, 3, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idArticle`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `constraint1` (`idClient`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idCommentaire`),
  ADD KEY `contraint1` (`idArticle`),
  ADD KEY `contraint2` (`idClient`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`idCompte`),
  ADD UNIQUE KEY `emailClient` (`emailClient`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`);

--
-- Index pour la table `produit_commande`
--
ALTER TABLE `produit_commande`
  ADD PRIMARY KEY (`idProduitCommande`),
  ADD KEY `contrain1` (`fProduit`),
  ADD KEY `contrain2` (`fCommande`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idCommentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `idCompte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `produit_commande`
--
ALTER TABLE `produit_commande`
  MODIFY `idProduitCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `constraint1` FOREIGN KEY (`idClient`) REFERENCES `compte` (`idCompte`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `contraint1` FOREIGN KEY (`idArticle`) REFERENCES `article` (`idArticle`),
  ADD CONSTRAINT `contraint2` FOREIGN KEY (`idClient`) REFERENCES `compte` (`idCompte`);

--
-- Contraintes pour la table `produit_commande`
--
ALTER TABLE `produit_commande`
  ADD CONSTRAINT `contrain1` FOREIGN KEY (`fProduit`) REFERENCES `produit` (`idProduit`),
  ADD CONSTRAINT `contrain2` FOREIGN KEY (`fCommande`) REFERENCES `commande` (`idCommande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
