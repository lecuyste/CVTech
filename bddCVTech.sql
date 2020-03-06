-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 06 mars 2020 à 09:12
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cvtech`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `object` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `mail`, `object`, `message`, `createdAt`) VALUES
(1, 'admin@gmail.com', 'azzdadsqfq', 'zfezddsvezzdzvezezezvezzvdzs', '2020-03-04 11:56:58'),
(2, 'admin@gmail.com', 'ezfefezfezfezfezf', 'fezfezfezfezezfezfezfezfezfezfefezfez', '2020-03-04 11:59:36'),
(3, 'azeffdbfb@zregdgf.fr', 'aezregf', 'azergeffdzéreterz', '2020-03-05 22:24:11');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `codePostal` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `lien` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `modifiedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`id`, `title`, `telephone`, `street`, `codePostal`, `city`, `lien`, `createdAt`, `modifiedAt`) VALUES
(1, 'cocou', 606060606, 'jacqueline', 76000, 'rouen', '', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `idCv` int(11) NOT NULL,
  `experienceName` varchar(255) NOT NULL,
  `experienceDate` date NOT NULL,
  `experienceCity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` int(11) NOT NULL,
  `idCv` int(11) NOT NULL,
  `formationName` varchar(255) DEFAULT NULL,
  `formationDate` date NOT NULL,
  `formationCity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `keywordscv`
--

CREATE TABLE `keywordscv` (
  `id` int(11) NOT NULL,
  `keywordId` int(11) NOT NULL,
  `cvId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `programationlanguages`
--

CREATE TABLE `programationlanguages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `programationlanguages`
--

INSERT INTO `programationlanguages` (`id`, `name`) VALUES
(1, 'HTML / CSS'),
(2, 'PHP'),
(3, 'JavaScript'),
(4, 'Python'),
(5, 'JAVA'),
(6, 'SQL'),
(7, 'Ruby'),
(8, 'C#');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL,
  `modifiedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `mail`, `password`, `token`, `role`, `createdAt`, `modifiedAt`) VALUES
(1, 'deniro', 'robert', 'rdeniro@gmail.com', '$2y$10$BSqTuW65uVVWL0/EaoYO2O5t99dDDuUPeO.VAnXc.jujY5EZnmU1i', 'CkILBocicAXHKqkCgf5cPksuDpLJ0KkZ1a6CTx1xR0zx5A4lViquexjFX14GgoBbqVDrlMMfxivFyyULuC3LBOGIdA0v79dbfnktFqUKtX1Hatwutp7fpixuO2P9t3830vHWk81yxkzOdIBl3lcptGWqeU14Z5wuEztJqJvkuL0mC2J9wYZSLlZt4aZ1l7denQOqBe6EqwJvFRZ7Sstm36SRpCEC9pGK5LZLrcI40l7wzbLCqgObzog2xtwdCsM', 'users', '2020-03-04 16:42:19', NULL),
(2, 'deniro', 'robert', 'rdeniro@gmail.com', '$2y$10$7GUZF0q03ppTcKahKDiDPuKSsyEDL4BiJwRNdlv7wlTnyZJOCfjjS', 'vGuZ9RblbqzpcWJsd4bHiNkVFwB8FCm273DKB1vdzf6Rf8aZKo6uaKEeOYpAG2Gs2fPrrI1PdiPAE88AXy2tu6zn0PQ7DzKU3IMWQprOe7t1EewWYF0egPkZhjwKo0HdY45VM74eI9eVTkPFqYkfSkOAUpF7S4hlJKAOeyae4dlNN6QFZx4meUOvJ66UIdJDSR7fH4wdytsSnt0hcU8oMfq291DD5SGLjK9M55rr3YpJf2MsZHlpDWUc82k7yFG', 'users', '2020-03-04 16:42:23', NULL),
(3, 'admin', 'admin', 'admin@admin.com', '$2y$10$PNA4Ng3SOG0mKfAU0I3cDuRVkY.kXDoXg/TbauJrZWiEhQRV/shby', 'ewxlT6b7SRWHwR6IGBuY8zOFQZvtQeLc789IWAFsb4XEdiUb72801EeckmynZcSaa6d3NFsF2eYtc7lXRYJznxqw2KsNDm1WYrhlSVRS64bzYm7uVtaRff2XY6I3f4ofDkOeztloef0qEyuvNlxeUae83jQd3tvCQ1El21VEY76HisOv5ZXQ9eZ9PFGe79UHrPyzxXvTKibJFZuR81TWpIjyuTZ9LMFXhHBCyRpSp8i8rszIrFT1TWrTSRZvXky', 'admin', '2020-03-05 15:14:53', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `usersmailto`
--

CREATE TABLE `usersmailto` (
  `id` int(11) NOT NULL,
  `idUserFrom` int(11) NOT NULL,
  `idUserTo` int(11) NOT NULL,
  `object` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `keywordscv`
--
ALTER TABLE `keywordscv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `programationlanguages`
--
ALTER TABLE `programationlanguages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `usersmailto`
--
ALTER TABLE `usersmailto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `keywordscv`
--
ALTER TABLE `keywordscv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `programationlanguages`
--
ALTER TABLE `programationlanguages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `usersmailto`
--
ALTER TABLE `usersmailto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
