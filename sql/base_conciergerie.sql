-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 15 mai 2018 à 11:22
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `base_conciergerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

CREATE TABLE `accounts` (
  `idAccount` int(11) NOT NULL,
  `passwordAccount` varchar(275) NOT NULL,
  `dateAccount` date NOT NULL,
  `avatarAccount` varchar(275) NOT NULL,
  `statusAccount` varchar(275) NOT NULL,
  `lastNameAccount` varchar(275) NOT NULL,
  `firstNameAccount` varchar(275) NOT NULL,
  `mailAccount` varchar(275) NOT NULL,
  `birthdayAccount` date NOT NULL COMMENT 'Date de naissance de l''utilisateur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `accounts`
--

INSERT INTO `accounts` (`idAccount`, `passwordAccount`, `dateAccount`, `avatarAccount`, `statusAccount`, `lastNameAccount`, `firstNameAccount`, `mailAccount`, `birthdayAccount`) VALUES
(13, '$2y$10$pdmhIj4bDtiLX5NT9PCKfOQMiKYZcG77T4z9ASuyhOwBDzOSNBv6a', '2018-05-03', 'defautUser.jpg', 'User', 'Test', 'Test', 'test@test.test', '1983-12-12'),
(14, '$2y$10$lRGPctmiSLzM9T88jc0KheT2.OmNBKijUgjCBug..wWYuzymeUd/i', '2018-05-04', 'defautUser.jpg', 'User', 'Nom', 'Jean', 'truc@truc.fr', '1983-12-12'),
(15, '$2y$10$pdmhIj4bDtiLX5NT9PCKfOQMiKYZcG77T4z9ASuyhOwBDzOSNBv6a', '2018-05-11', 'defautUser.jpg', 'User', 'Vendeur', 'Test', 'vendeur@test.test', '1983-12-12');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `idArticle` int(11) NOT NULL,
  `nomArticle` varchar(275) NOT NULL,
  `descriptionArticle` varchar(1000) DEFAULT NULL,
  `originalPriceArticle` int(11) DEFAULT NULL,
  `reductionArticle` int(11) DEFAULT NULL,
  `reductionPriceArticle` int(11) DEFAULT NULL,
  `imageArticle` varchar(275) DEFAULT NULL,
  `beginingDateArticle` date DEFAULT NULL,
  `endDateArticle` date DEFAULT NULL,
  `statutArticle` varchar(255) NOT NULL,
  `idSeller` int(11) NOT NULL,
  `idCategory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`idArticle`, `nomArticle`, `descriptionArticle`, `originalPriceArticle`, `reductionArticle`, `reductionPriceArticle`, `imageArticle`, `beginingDateArticle`, `endDateArticle`, `statutArticle`, `idSeller`, `idCategory`) VALUES
(2, 'Truc à vendre', 'Truc à vendre description', 10, 50, 5, 'defaut.jpg', '2018-05-11', '2018-07-24', 'publish', 1, 1),
(3, 'Test Article mis en valleur', 'Article mis en valeur', 10, 50, 5, 'defaut.jpg', '2018-05-11', '2018-07-28', 'light', 1, 1),
(4, 'Test article en valeur 2', 'xfsdfdsdfsdfsf', 10, 50, 5, 'defaut.jpg', '2018-05-11', '2018-09-12', 'light', 1, 1),
(5, 'Article mis en valeur 3', 'ertzgregr ergth sth s ths t h', 10, 50, 5, 'defaut.jpg', '2018-05-11', '2018-09-11', 'light', 1, 1),
(6, 'Test Article en valeur', 'fgmjsfzeiufeiou ehzfe khf kuzeh uhzefh ez', 10, 50, 5, 'defaut.jpg', '2018-05-11', '2018-11-20', 'light', 1, 1),
(7, 'test d\'article mis en valeur', 'greqrgregq  th zthq eth eth t', 10, 50, 5, 'defaut.jpg', '2018-05-11', '2018-11-12', 'light', 1, 1),
(8, 'test article mis en valeur', '!d:jazlke hkh kjqflk hfkj nklqh lqbjjn klqhk ', 10, 50, 5, 'defaut.jpg', '2018-05-11', '2019-06-19', 'light', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `idCategory` int(11) NOT NULL,
  `nameCategory` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idCategory`, `nameCategory`) VALUES
(1, 'Truc'),
(2, 'Bidule'),
(3, 'Test');

-- --------------------------------------------------------

--
-- Structure de la table `enterprises`
--

CREATE TABLE `enterprises` (
  `idEnterprise` int(11) NOT NULL,
  `NameEnterprise` varchar(275) NOT NULL,
  `sirenEnterprise` int(11) NOT NULL,
  `adressSiegeEnterprise` varchar(275) NOT NULL,
  `postalCodeSiegeEnterprise` int(11) NOT NULL,
  `citySiegeEnterprise` varchar(275) NOT NULL,
  `idContractEnterprise` varchar(275) DEFAULT NULL,
  `codeEnterprise` varchar(275) DEFAULT NULL,
  `mailEnterprise` varchar(275) NOT NULL,
  `staticPhoneEnterprise` varchar(275) NOT NULL,
  `mobilPhoneEnterprise` varchar(275) DEFAULT NULL,
  `adressFacturationEnterprise` varchar(275) DEFAULT NULL,
  `postalCodeFacturationEnterprise` int(11) DEFAULT NULL,
  `cityFacturationEnterprise` varchar(275) DEFAULT NULL,
  `statutEnterprise` varchar(275) NOT NULL,
  `descriptionSubscriptionEnterprise` varchar(275) DEFAULT NULL,
  `agentNumberEnterprise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enterprises`
--

INSERT INTO `enterprises` (`idEnterprise`, `NameEnterprise`, `sirenEnterprise`, `adressSiegeEnterprise`, `postalCodeSiegeEnterprise`, `citySiegeEnterprise`, `idContractEnterprise`, `codeEnterprise`, `mailEnterprise`, `staticPhoneEnterprise`, `mobilPhoneEnterprise`, `adressFacturationEnterprise`, `postalCodeFacturationEnterprise`, `cityFacturationEnterprise`, `statutEnterprise`, `descriptionSubscriptionEnterprise`, `agentNumberEnterprise`) VALUES
(1, 'Test', 123456, '3 rue du test', 12123, 'TestCity', 'TestContract', 'Test123', 'testEntreprise@test.test', '1234567890', '1234567890', NULL, NULL, NULL, 'Abonné', NULL, 2558);

-- --------------------------------------------------------

--
-- Structure de la table `linked`
--

CREATE TABLE `linked` (
  `idAccount` int(11) NOT NULL,
  `idEnterprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `linked`
--

INSERT INTO `linked` (`idAccount`, `idEnterprise`) VALUES
(13, 1),
(14, 1);

-- --------------------------------------------------------

--
-- Structure de la table `sellers`
--

CREATE TABLE `sellers` (
  `idSeller` int(11) NOT NULL,
  `societyNameSeller` varchar(275) NOT NULL,
  `sirenSeller` int(11) NOT NULL,
  `activitySeller` varchar(275) NOT NULL,
  `descriptionSeller` varchar(1000) DEFAULT NULL,
  `adressSeller` varchar(275) NOT NULL,
  `postalCodeSeller` int(11) NOT NULL,
  `citySeller` varchar(60) NOT NULL,
  `staticPhoneSeller` int(11) NOT NULL,
  `mobilPhoneSeller` int(11) DEFAULT NULL,
  `imageSeller` varchar(275) NOT NULL,
  `idAccount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sellers`
--

INSERT INTO `sellers` (`idSeller`, `societyNameSeller`, `sirenSeller`, `activitySeller`, `descriptionSeller`, `adressSeller`, `postalCodeSeller`, `citySeller`, `staticPhoneSeller`, `mobilPhoneSeller`, `imageSeller`, `idAccount`) VALUES
(1, 'Test INC', 26295, 'Test Vendeur', 'Vendeur test afin de controller le fonctionnement du site', '3 rue du test', 66666, 'TestCity', 666666666, 666666666, 'defautVendeur.jpg', 15);

-- --------------------------------------------------------

--
-- Structure de la table `vouchers`
--

CREATE TABLE `vouchers` (
  `idVoucher` int(11) NOT NULL,
  `codeVoucher` varchar(60) NOT NULL,
  `dateVoucher` date NOT NULL,
  `idArticle` int(11) NOT NULL,
  `idAccount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`idAccount`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`idArticle`),
  ADD KEY `FK_articles_idSeller` (`idSeller`),
  ADD KEY `FK_articles_idCategory` (`idCategory`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCategory`);

--
-- Index pour la table `enterprises`
--
ALTER TABLE `enterprises`
  ADD PRIMARY KEY (`idEnterprise`);

--
-- Index pour la table `linked`
--
ALTER TABLE `linked`
  ADD PRIMARY KEY (`idAccount`,`idEnterprise`),
  ADD KEY `FK_Linked_idEntreprise` (`idEnterprise`);

--
-- Index pour la table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`idSeller`),
  ADD KEY `FK_sellers_idAccount` (`idAccount`);

--
-- Index pour la table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`idVoucher`),
  ADD KEY `FK_vouchers_idArticle` (`idArticle`),
  ADD KEY `FK_vouchers_idAccount` (`idAccount`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `idAccount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `enterprises`
--
ALTER TABLE `enterprises`
  MODIFY `idEnterprise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `idSeller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `idVoucher` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `FK_articles_idCategory` FOREIGN KEY (`idCategory`) REFERENCES `categories` (`idCategory`),
  ADD CONSTRAINT `FK_articles_idSeller` FOREIGN KEY (`idSeller`) REFERENCES `sellers` (`idSeller`);

--
-- Contraintes pour la table `linked`
--
ALTER TABLE `linked`
  ADD CONSTRAINT `FK_Linked_idAccount` FOREIGN KEY (`idAccount`) REFERENCES `accounts` (`idAccount`),
  ADD CONSTRAINT `FK_Linked_idEntreprise` FOREIGN KEY (`idEnterprise`) REFERENCES `enterprises` (`idEnterprise`);

--
-- Contraintes pour la table `sellers`
--
ALTER TABLE `sellers`
  ADD CONSTRAINT `FK_sellers_idAccount` FOREIGN KEY (`idAccount`) REFERENCES `accounts` (`idAccount`);

--
-- Contraintes pour la table `vouchers`
--
ALTER TABLE `vouchers`
  ADD CONSTRAINT `FK_vouchers_idAccount` FOREIGN KEY (`idAccount`) REFERENCES `accounts` (`idAccount`),
  ADD CONSTRAINT `FK_vouchers_idArticle` FOREIGN KEY (`idArticle`) REFERENCES `articles` (`idArticle`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
