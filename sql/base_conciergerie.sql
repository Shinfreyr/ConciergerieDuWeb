-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 27 juin 2018 à 11:21
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

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
(13, '$2y$10$pdmhIj4bDtiLX5NT9PCKfOQMiKYZcG77T4z9ASuyhOwBDzOSNBv6a', '2018-05-03', 'defautUser.jpg', 'AdminSU', 'Test', 'Test', 'test@test.test', '1983-12-12'),
(14, '$2y$10$lRGPctmiSLzM9T88jc0KheT2.OmNBKijUgjCBug..wWYuzymeUd/i', '2018-05-04', 'defautUser.jpg', 'User', 'Nom', 'Jean', 'truc@truc.fr', '1983-12-12'),
(15, '$2y$10$pdmhIj4bDtiLX5NT9PCKfOQMiKYZcG77T4z9ASuyhOwBDzOSNBv6a', '2018-05-11', 'defautUser.jpg', 'User', 'Vendeur', 'Test', 'vendeur@test.test', '1983-12-12'),
(16, '$2y$10$yq9nrsQs/ju96ovQRvu/BO6aYW31UoPst3r0kciJmxV6MuDD.FzyG', '2018-06-13', 'defautUser.jpg', 'User', 'LAMODIERE', 'François-Hugues', 'fh.lamodiere@gmail.com', '1983-04-20'),
(17, '$2y$10$G021qCDK6DxtthfUirtuiOkUmL7WTqIIYa.oUjDLmfnW9tPpLPEGS', '2018-06-19', 'defautUser.jpg', 'User', 'Herve', 'Anne-Claire', 'test@anneclaire.fr', '1982-05-29');

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
(8, 'test article mis en valeur', '!d:jazlke hkh kjqflk hfkj nklqh lqbjjn klqhk ', 10, 50, 5, 'defaut.jpg', '2018-05-11', '2019-06-19', 'light', 1, 1),
(9, 'Test brouillon', 'Ceci est un brouillon', 10, 50, 5, 'defaut.jpg', '2018-05-15', '2018-09-07', 'rough', 1, 1),
(10, 'fdfzerer', 'gr\"gregzrr\'r\"r', 10, 50, 5, 'defaut.jpg', '2018-05-15', '2018-10-10', 'publish', 1, 1),
(11, 'edgezrérérfezfezff', 'fezfezzfezf', 10, 50, 5, 'defaut.jpg', '2018-05-15', '2019-01-11', 'publish', 1, 2),
(12, 'grh(\'h(\"(g\"', 'grr\"fzefezfzref', 10, 50, 5, 'defaut.jpg\r\n', '2018-05-15', '2019-01-29', 'publish', 1, 3);

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
(14, 1),
(16, 1),
(17, 1);

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
  `dateEditionVoucher` datetime NOT NULL COMMENT 'Date d&#039;édition',
  `dateVoucher` date NOT NULL COMMENT 'Date de fin de validité',
  `idArticle` int(11) NOT NULL,
  `idAccount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vouchers`
--

INSERT INTO `vouchers` (`idVoucher`, `codeVoucher`, `dateEditionVoucher`, `dateVoucher`, `idArticle`, `idAccount`) VALUES
(3, '$2y$10$cC5eHZjdakWxizsFer7eZutfn98aZsd6ThBhkw6pIseWa1oclbOP2', '0000-00-00 00:00:00', '2019-06-19', 8, 13),
(4, '$2y$10$mTOdjaZb4QJ0ozWMECl.kevEvXXgEjYeagVgr1ZkOeaqfLx2w9G82', '2018-05-23 00:00:00', '2019-06-19', 8, 13),
(5, '$2y$10$L7mvB51kjxGeOHoOekx53OH8BsVrSP6KJB7Lsv9Xv8H4PzzUQA1Mq', '2018-05-23 00:00:00', '2019-06-19', 8, 13),
(6, '$2y$10$LbNCSb7EBkv7cqIgn7HUtu36EANBU37d19bqTFtKftIgPhnxYdhCq', '2018-05-23 00:00:00', '2019-06-19', 8, 13),
(7, '$2y$10$z8ezwRRdh8Zgg.SEiqWRa.7VU56ztESHN8WF.XV3sZ043g4MeES.e', '2018-05-23 11:31:26', '2019-06-19', 8, 13),
(8, '$2y$10$MGkjhlbUMaD0qropUFj8/.Uq0B7E.dsKZjHrP9FoK3abc15oYQsMK', '2018-05-23 11:32:47', '2019-06-19', 8, 13),
(9, '$2y$10$tpGyM2Ve5tVZuo4GPQ0YlOJ8MTZRHuROoFpC9TloKQRTHVCWFZczq', '2018-05-23 11:34:30', '2019-06-19', 8, 13),
(10, '$2y$10$BHfsCeejQruFKsNWJUfVyOrtgdEFqgS2zOPFOP0FDPDU/xd.zuZxe', '2018-05-23 11:37:18', '2019-06-19', 8, 13),
(11, '$2y$10$n9T.zhzVR8RlpXFe7tZlLezScBaIn8hA8Q7UdDRUNXZ3G665Nyd.C', '2018-05-23 11:37:31', '2019-06-19', 8, 13),
(12, '$2y$10$wg4wyazdG15PWWzvhXLSTuDf9hWZ8eL3JILdnNp0dBMU9hoTb46i.', '2018-05-23 11:38:48', '2019-06-19', 8, 13),
(13, '$2y$10$DXLsOswfPGTEoAvteve81.dIFGuOvthL9Vk/EQ0DL0G9clZ0BpFHq', '2018-05-23 11:39:02', '2019-06-19', 8, 13),
(14, '$2y$10$kJlxSwT/HdX2Jtp2/sLGZOQckerb/emKcp.ddJ5ydF0deFgoWvD5C', '2018-05-23 11:40:48', '2019-06-19', 8, 13),
(15, '$2y$10$fZYJ4CiipfpAQL32RaYHN...rtUYFmh.t3Q0C5ss/8MU1Cf4n1uiS', '2018-05-23 11:41:49', '2019-06-19', 8, 13),
(16, '$2y$10$uIwbILGoOVVOLsa9WH4S7O3RdfLHqUW/JmMtBZmEU1mv/T3t0DaXK', '2018-05-23 11:45:52', '2019-06-19', 8, 13),
(17, '$2y$10$gnCTNCBT5iT55ZmoyswkvOgvE0ZW0rij.TDBZ9xEDcaFCkG1Q/NBi', '2018-05-23 11:46:06', '2019-06-19', 8, 13),
(18, '$2y$10$i877KeIwlpH4Na.K3jTNbOCtuYBeMjh0Mi4JY4.vwbcSQi2lM4O0i', '2018-05-23 11:47:53', '2019-06-19', 8, 13),
(19, '$2y$10$F.EVXRTMRjf/XCGSpfq2v.QtBAAg/.mEDkxsc5kVFZf1vsG9mi7wq', '2018-05-23 11:47:59', '2019-06-19', 8, 13),
(20, '$2y$10$C0aV9s.gJuWRzXJwhJHeGeqhr7UojD2Jp9HOMwfYveav5K5g4z30C', '2018-05-23 11:48:24', '2019-06-19', 8, 13),
(21, '$2y$10$.toVWyLOKDpC8DTwqbTIkeBBdKPoTNteskHkdTe2Xmh2YMOFuEDOy', '2018-05-23 12:09:24', '2019-06-19', 8, 13),
(22, '$2y$10$DDgmqTX5v./M8c1xLD2zfujc6t9e0K5375970WKRJ8xyL5FZx0ogG', '2018-05-23 12:09:28', '2019-06-19', 8, 13),
(23, '$2y$10$bEZ5/6ILFboy3g4mogJrJ.XU7Vnxjf3gLKECjx5/pcJkB/bY2MrLq', '2018-05-23 12:11:01', '2019-06-19', 8, 13),
(24, '$2y$10$sCkBk.57dzu3nJ5UJ7R99OlQqwJwtg3RkOh.bEhZt8ECIPsYEYdAG', '2018-05-23 12:12:17', '2019-06-19', 8, 13),
(25, '$2y$10$ssz4eSHQhe2lTjXGIar3IeNvcTqCPglf7JMjX96LSI50mkv4/0D4W', '2018-05-24 11:30:49', '2019-06-19', 8, 13),
(26, '$2y$10$U7qBS7q/nHMy5knLolk.EuMMPJX7upK8baOMkcelbTVgGuzkh0uCa', '2018-05-24 11:31:16', '2019-06-19', 8, 13),
(27, '$2y$10$id0oUkIl0sOgtA02idL8Ye7pPqlBsJ3nYQCFsaPJktGqsX9xSs1O6', '2018-05-24 11:32:18', '2019-06-19', 8, 13),
(28, '$2y$10$VEyr3m7T8ZVgLQsmI1KsCuXVlA/vNJqfSyklAo0qeXV404Cafidhe', '2018-05-24 11:32:24', '2019-06-19', 8, 13),
(29, '$2y$10$Xn2be.P.gqLp3tyDDfBBte.QvSH6RObqnjcnCLuPprwPqeO4f0i0S', '2018-05-24 11:43:50', '2019-06-19', 8, 13),
(30, '$2y$10$hF530.1WcG52MDzzrIFn2uQ7VhCSO2YNfp/fPo/SOcyyI4T0.YKc.', '2018-05-24 11:44:40', '2019-06-19', 8, 13),
(31, '$2y$10$7mvO0I5bADimkyryplLqI.eSQDfXG5MRCPALU0jFTAuTsldxL9JvW', '2018-05-24 11:45:43', '2019-06-19', 8, 13),
(32, '$2y$10$oTVtaeSto8vfYUxFqqXrru.jIAgykeE7dUzvCqJ53d0Mad66WEfTa', '2018-05-24 12:24:35', '2019-06-19', 8, 13),
(33, '$2y$10$phsPOVuKZnvnALc9XSNbC.GHX3VAp2XdtaKza5b82zT416tFKnL4W', '2018-05-24 14:04:34', '2019-06-19', 8, 13),
(34, '$2y$10$v2i0FVRcDC6JcKU3b0tSxOc.zLNKSOEf1KrY62rHL8zUnyWtSierS', '2018-05-24 14:04:39', '2019-06-19', 8, 13),
(35, '$2y$10$hRWUwEi9qz/kF8C8I53aZunO6bQiQibXFRfab5Il8Q2GAPhgfIqk.', '2018-05-24 14:31:47', '2019-06-19', 8, 13),
(36, '$2y$10$pTJmEOCN0v2fuUsq/xJ8YevT9.oDksEG664AHdA58qQmmbuw6sk6a', '2018-05-24 14:32:01', '2019-06-19', 8, 13),
(37, '$2y$10$XhMqvFVAT/MAiDfDLrqvN.ywBdBFXLbm7QVA.uCQxJnZQvWCrb0tG', '2018-05-24 14:34:02', '2019-06-19', 8, 13),
(38, '$2y$10$oSmJcHK2Th5EF9ihUVbFsuThW1H33ya3zdUWFz2/lvEXLfDqsTpoy', '2018-05-24 14:36:36', '2019-06-19', 8, 13),
(39, '$2y$10$09.x.w6ut.lTEg3n39dgle2ZlQVowiU./GvVX/GsoR/XKg9qXOO3G', '2018-05-24 14:36:38', '2019-06-19', 8, 13),
(40, '$2y$10$lRIaBHUUdLkQzhRhX4t1QuXo8cPySZso0fdk/ddFGRzIb1ZqT.jI6', '2018-05-24 14:36:41', '2019-06-19', 8, 13),
(41, '$2y$10$YwAB8iYVirHQKYX4mxaUQ.rGA5yAn6EepADoZr9nCJk8ZnvBqPtRa', '2018-05-24 14:37:29', '2019-06-19', 8, 13),
(42, '$2y$10$Z0cXkweO8vbYDTwlw5IeiOeVc/K99ECiFzvobmY1w585T6z75RyA.', '2018-05-24 14:37:31', '2019-06-19', 8, 13),
(43, '$2y$10$r2tGakdRFzdpE1DP8OWt1udTQUEdEiN1SiwXnGbR1Xf5aEcXOtS32', '2018-05-24 15:02:15', '2019-06-19', 8, 13),
(44, '$2y$10$eP.ABEFBq6MElFByTzWyvuNz8GXGJHMj99NmJP7AemltUqh3KTQaK', '2018-05-24 15:06:29', '2019-06-19', 8, 13),
(45, '$2y$10$QUXbsizuA3qXOHGTwBsXiOIl4DLsOYNp5mNzwDiO4aicuzE0NGlH6', '2018-05-24 15:30:59', '2019-06-19', 8, 13),
(46, '$2y$10$3h293ADVRiqWDknZ/807B.P9n1HV96qf0YVNv5sQBB4MKcw8t9nTm', '2018-05-24 15:31:05', '2019-06-19', 8, 13),
(47, '$2y$10$rJz/PfSWoEQ.ZRG9h5v3x.prFTnFQ5gSwsuhZSVvQhOg/qSeJjehG', '2018-05-24 15:31:06', '2019-06-19', 8, 13),
(48, '$2y$10$9m3UP6VYcZAH6wrbR.6qreDKtjZVgPupkc4R2KxdMLqehxxhSlmUW', '2018-05-24 15:31:11', '2019-06-19', 8, 13),
(49, '$2y$10$kc4RHygqC4odhJm/FMxc3OrQBpKuBdQ8TcIJ66D5rLAEhpS/LRMVe', '2018-05-24 15:31:13', '2019-06-19', 8, 13),
(50, '$2y$10$obbVNG4bjrHc1TVQCPgE5Oo7qJHyY2uokGKzEyLDx8J9SiCV4vPwW', '2018-05-25 10:18:03', '2019-06-19', 8, 13),
(51, '$2y$10$iMgZDV2MAbJ2Fz4Hmhg5ROwBMDj5rJBgM4.Q/w12kNGmPked1vq1e', '2018-06-06 11:05:12', '2019-06-19', 8, 13),
(52, '$2y$10$z.V1uDoALnxlQFa/RYW20eNeObBr/UJEj7Cqic97jowVcZG1DdRkS', '2018-06-06 11:53:08', '2019-06-19', 8, 13),
(53, '$2y$10$BJbAOL69e5aMJCnlDQ1NuebQQn2bXtu1swjJjJQhcn3FacSxZHpMy', '2018-06-06 11:53:44', '2019-06-19', 8, 13),
(54, '$2y$10$huqjPj/BxGCNRoCplucEyeAWf29VjC4xO8gbcX4VZmbvYEgLCab76', '2018-06-06 11:59:26', '2019-06-19', 8, 13),
(55, '$2y$10$eLMMdZqszG1yKR7AnbxxBu4Y4k8g2NSfJdgipazK3xI3M0TFYj34i', '2018-06-06 15:15:00', '2019-06-19', 8, 13),
(56, '$2y$10$aWQsCjIuKJddOx9YRCZXqesDVmueXD42XEVcgPaTRfIE4sUxWqzTO', '2018-06-06 15:18:55', '2019-06-19', 8, 13),
(57, '$2y$10$yi0/dRhx1bW0PiPiB7sEwOtyFNj5RNEGLEgQqKzP9GX0lRdn4g4L6', '2018-06-06 15:18:59', '2019-06-19', 8, 13),
(58, '$2y$10$weDtmeBUnlEyAcPbabMZbuoNgBIFusL72UuiPNGDCRNCOTeq9lHBC', '2018-06-06 15:23:39', '2019-06-19', 8, 13),
(59, '$2y$10$Hf9rbIERNoRjg1p6.rFnBeMdYhfKFmKjv9keJTWma.u4omXdJEgFK', '2018-06-06 15:27:45', '2018-07-24', 2, 13),
(60, '$2y$10$lv/2pM7e1DGD/gbGjpY5Huddq.kM/NPSvQO6d60HEA9iILHmupfIS', '2018-06-06 15:29:20', '2019-06-19', 8, 13),
(61, '$2y$10$cakOZquepI9ILPPPBwFHkOTnk0vEZmjO9xPvs0kAtXGEiVMih8mTO', '2018-06-06 15:29:24', '2019-06-19', 8, 13),
(62, '$2y$10$QZgPS2/whU340XuAXN7wk.wNxhf..PE8l6xu/9TjndNcp279fBIeC', '2018-06-06 15:32:36', '2019-06-19', 8, 13),
(63, '$2y$10$UvU655S4wpzATFltve3QLubvZ2zJBO0VNLGKRbcQJuwcvHUMpKVya', '2018-06-06 15:32:58', '2019-06-19', 8, 13),
(64, '$2y$10$TX2CQR9N8NhX.xR9n2pFdO7eT/fuKxFnamNmQ13YpVOBKhUN2Dmc6', '2018-06-06 15:33:43', '2019-06-19', 8, 13),
(65, '$2y$10$AAFVcU7GY9bEhBKLAbK.gu0Al8Wa5DjARgo4LAFIne.A88PlAfPnm', '2018-06-06 15:34:37', '2019-06-19', 8, 13),
(66, '$2y$10$fvFDv52euO4LGBAxCwHlYOlqzFbFG3vX0QKySA76Iy8VXGBYFRvyq', '2018-06-06 15:35:54', '2019-06-19', 8, 13),
(67, '$2y$10$1U0LJluVutiunEAF943WSuxQthaSAiFZh8mPYLHcz5Z9LW3WhcTCy', '2018-06-06 15:36:46', '2019-06-19', 8, 13),
(68, '$2y$10$BVfQh1tNQfRKjqQseLrCKOy2YbsxP5WzeKqZ8ZmVRQp8hnSQ16PZy', '2018-06-06 15:43:44', '2019-06-19', 8, 13),
(69, '$2y$10$kM7H32wcYUXNPj0IpcLKQOa8kPYiWd.uYgPhe.SetLla56rVtBc3u', '2018-06-06 15:53:41', '2019-06-19', 8, 13),
(70, '$2y$10$2ZQ6sNvPODMD7.U5PRflheJRK4RHFumOqGjSJ81W6/q1d5vkYesa6', '2018-06-06 16:05:12', '2019-06-19', 8, 13),
(71, '$2y$10$EwgMinPkcgz9JtZvRzVa6O1JzOjz3ki7wNGV8gch/VicRXcTsQRze', '2018-06-06 16:06:41', '2019-06-19', 8, 13),
(72, '$2y$10$K2UW98Lz39uJIAdLD9kBCuX/LAduN9u.m1GeHDTToPnGyQerne.lm', '2018-06-06 16:11:25', '2019-06-19', 8, 13),
(73, '$2y$10$AGQTQHCTDmXDdwFH5lj8qepijAPNub1B6nzf14dS4pv/P58FO0nMS', '2018-06-06 16:11:29', '2019-06-19', 8, 13),
(74, '$2y$10$uzuJ.3jxvBscDEYo8qi9cOcxxATxRqn2Mh7ElTEoiOwG7hfhuK9py', '2018-06-06 16:12:05', '2019-06-19', 8, 13),
(75, '$2y$10$1FGOQ7L5QH9nI9khCLKomOFjzM8A2HG60a9xqKdxAgaDVLzdMhHBe', '2018-06-06 16:14:00', '2019-06-19', 8, 13),
(76, '$2y$10$o8gKbsFT3yBnqtA4X/2w6.auG0MTV0Sm7vG0UotBO5Kh9ws4OWUQW', '2018-06-06 16:15:30', '2019-06-19', 8, 13),
(77, '$2y$10$a9Uat7/c7CIbDT9g6c6Gf.AzeP1iCEHQVUXnViv8ApJ4EiNUiiWtW', '2018-06-06 16:15:58', '2019-06-19', 8, 13),
(78, '$2y$10$U7Xvvd3Tnd50CoGVPD3mu.3xAatVdXtz35sXjByEhxsB8E.qWE7Qi', '2018-06-06 16:16:44', '2019-06-19', 8, 13),
(79, '$2y$10$abJPuiEThm2r7JxKJUjBpOkepm6aSJJDc/aaAyCYhPpKx90quZUii', '2018-06-07 08:54:18', '2019-06-19', 8, 13),
(80, '$2y$10$ROdx/IpGSZnzd3uSyF.5euz8i4ye8FUfUru9CMoPS9dO95wWDMwgi', '2018-06-07 08:55:48', '2019-06-19', 8, 13),
(81, '$2y$10$aiTEY9UDFN98nc2ufVsJ4OuHAEHNtoUFsZDOque/nXcxMnL4VKQoa', '2018-06-07 08:56:20', '2019-06-19', 8, 13),
(82, '$2y$10$yC/R1AGm0.EpjaVCHE6h7.pFtUuuiGTzK0aauNdrUbzT/GnbLi2Cu', '2018-06-07 08:56:46', '2019-06-19', 8, 13),
(83, '$2y$10$xUf.qAdx7bd51sGn184w4OqnRe9XJCdKKYo5y8lIG.OzWinBQY1F2', '2018-06-07 09:26:19', '2019-06-19', 8, 13),
(84, '$2y$10$ZcvdPIX2QgrdyRKhVAJTM.e47yx135Uym0NgIi.F4lmfN2CZ.ivae', '2018-06-07 09:48:03', '2019-06-19', 8, 13),
(85, '$2y$10$w9XCpK6IiwwqtJe23CCd8.1KOMt0TPV/msbtYCcyR0z3Y32J1Agni', '2018-06-07 09:48:47', '2019-06-19', 8, 13),
(86, '$2y$10$7AdMMaAUiTJugNyoPiBQa.RYANLzqZ0krGnUlHjVEwPYqVStHbV9G', '2018-06-07 09:49:02', '2019-06-19', 8, 13),
(87, '$2y$10$jvxtsAx2UDu.FbX8R14g6.dclQ25jkoGehdEDb2ppMuO8mWgX5NK6', '2018-06-07 10:42:47', '2019-06-19', 8, 13),
(88, '$2y$10$.xQRXSoe3xSJhRPEcUrzCeBgztlxCSgR5pwU0H1DR0LY1FssNUhLq', '2018-06-07 10:43:22', '2019-06-19', 8, 13),
(89, '$2y$10$HQ4quN0TgaKw49OHYP3OluBoNd7JlGfvPRgPHxJpG9Hfx/3isHWRa', '2018-06-07 10:43:31', '2019-06-19', 8, 13),
(90, '$2y$10$tAUyOsBo3rUglVaRw.Uy7OcGhhdFAJDB2ARY/M.fDKnAFkbfZF0bq', '2018-06-07 10:43:59', '2019-06-19', 8, 13),
(91, '$2y$10$2vZ6.GTEeMOAXCACHOkDvuoMBjRp2HTBBgiNM5.0gZ2rTBfIiEuXa', '2018-06-07 10:44:26', '2019-06-19', 8, 13),
(92, '$2y$10$4/zHRx2d44SIutE9IxMPZegSGVSZ0GEKKBUL.wKKYtuUT2Qz/67Ji', '2018-06-07 11:30:21', '2019-06-19', 8, 13),
(93, '$2y$10$JZGDLegY.j.Glmaoh2Y8KOo/5ng.vMcvUBK.sIRnNKD/Ij10tRKuS', '2018-06-07 11:31:04', '2019-06-19', 8, 13),
(94, '$2y$10$6Yn5FSozlYmEi.Uy9SjRVOFCdhGkY.fOdsePuXZcLv.tBB8gPLO1K', '2018-06-07 11:35:13', '2019-06-19', 8, 13),
(95, '$2y$10$RIXB4LIsO9PDvu.RIsqyw.s.ZEYHgXqKupCA64b8PSH3k08vHpsZ.', '2018-06-07 11:36:16', '2019-06-19', 8, 13),
(96, '$2y$10$v1Cg7PGc8EAPmL0ez70JM.wr9mJ1rQc4O5Iw5BC8SDHLSjOduUEUa', '2018-06-07 11:37:40', '2019-06-19', 8, 13),
(97, '$2y$10$f8/J.yzQ0eFUBEUr5jSRq.XP4iWCLlu7SFVoR1hscHurnaa8scE7.', '2018-06-07 11:54:47', '2019-06-19', 8, 13),
(98, '$2y$10$R9RwohkVZy6c/3.jjjkgsOzeTdgFgzMZCuzqmwddNTbUTb3lFZjRS', '2018-06-07 12:06:32', '2019-06-19', 8, 13),
(99, '$2y$10$hC9bWaMFPsQY.dk8oY9sxuiFdyjWdfQcKJfJHwYjNogKob70p0Ix.', '2018-06-07 12:10:53', '2019-06-19', 8, 13),
(100, '$2y$10$CgX/c1UBGg1QcJyRyzSQ8uZikCc1.GDQyznO2E9DsIfgl3QS9.Bem', '2018-06-07 12:13:03', '2019-06-19', 8, 13),
(101, '$2y$10$BX9ab64ep4tATS4WZAq3z.cDzDDvBmRil6WUdCynea5UGDndcC/fS', '2018-06-07 12:14:40', '2019-06-19', 8, 13),
(102, '$2y$10$NjfqFm8EeZfHfq7g6bxGcuk5y6EZNzjcNLNFlgmtofMU6C9FIzonS', '2018-06-07 12:15:51', '2019-06-19', 8, 13),
(103, '$2y$10$45lzN6G3g3pxEe65.M3AfeQhO4YXcekD8iYLILXFXh/hClQUIBTWO', '2018-06-07 12:17:49', '2019-06-19', 8, 13),
(104, '$2y$10$iEt/0p77fu7RCW/p4ogRheo0qxi6bwC8I3MHeeXQIZX8Ags/UAt3G', '2018-06-07 12:30:55', '2019-06-19', 8, 13),
(105, '$2y$10$oWEvE2QLtqMmmGqa8AG4y.wSDoXoNVbb7yOLR2tEjjbp0adwO.1si', '2018-06-07 12:36:34', '2019-06-19', 8, 13),
(106, '$2y$10$M5sEkLmOGvLj8.DTZX7Q/eq3N4XZ8JWxaC1smcdi6GIDevls4o4xG', '2018-06-07 12:39:20', '2019-06-19', 8, 13),
(107, '$2y$10$vJtwR0aP/.eyIbW.S8vaB.f1QJXFL8X1Bv7e2urZFVseMMwExH9Uq', '2018-06-07 12:40:23', '2019-06-19', 8, 13),
(108, '$2y$10$ftWYRGDYW866WpNP3eIpSOdjUB/1J1CK2YrMuxz8DvLYhT3oiWMVu', '2018-06-08 14:44:44', '2019-06-19', 8, 13),
(109, '$2y$10$N4YAmcgikLCDWzdeGhFVW.3oIyTizaQwhsUCvZ0aElYTY6Tx9.KIi', '2018-06-13 15:33:08', '2019-06-19', 8, 13),
(110, '$2y$10$qlXt8VrjaY9nrSs7dAvtT.GPO6fbzZYWjzRQZRi6igkXAvt45ibJi', '2018-06-13 15:34:50', '2019-06-19', 8, 13),
(111, '$2y$10$GZdES9d4RiC/SaEez0IMt.jeaBKDZSU1kkg6tZZ9saOPrxhlW3wOG', '2018-06-13 15:35:37', '2019-06-19', 8, 13),
(113, '$2y$10$ugGFUFCwUit/n59e6PseJ.flSnfOzNlvIVgBT08LWesFOFzK1CILC', '2018-06-19 11:54:29', '2019-06-19', 8, 13),
(114, '$2y$10$88NrMEkCnmk83Grla2QQrOSghg.nhC.kL.qM2YS25BNYa6gvC3Owe', '2018-06-20 15:25:14', '2019-06-19', 8, 13),
(115, '$2y$10$XpLqfX.y4NrD93zk94zE8OZzDl4NTqdRZVSFQnooOybAteOomCEPW', '2018-06-20 15:52:02', '2019-06-19', 8, 13),
(116, '$2y$10$zDpgQZesmqdP6GtsZrNcvu0iDZ3BHKMlUEgime5N4./QywHQiHed6', '2018-06-26 09:08:42', '2019-06-19', 8, 13);

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
  MODIFY `idAccount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `idVoucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

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
