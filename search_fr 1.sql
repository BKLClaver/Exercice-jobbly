-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 12 juil. 2019 à 14:05
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `search_fr`
--

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE `association` (
  `IDDomaine` int(11) DEFAULT NULL,
  `IDEntreprise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE `candidat` (
  `IDCandidat` int(11) NOT NULL,
  `LoginCandidat` varchar(20) DEFAULT NULL,
  `MdpCandidat` varchar(20) DEFAULT NULL,
  `NaissanceCandidat` date DEFAULT NULL,
  `SexeCandidat` varchar(5) DEFAULT NULL,
  `NomCandidat` varchar(20) DEFAULT NULL,
  `PrenomCandidat` varchar(20) DEFAULT NULL,
  `TelCandidat` int(11) DEFAULT NULL,
  `AdresseCandidat` varchar(50) DEFAULT NULL,
  `DepartementCandidat` varchar(20) DEFAULT NULL,
  `VilleCandidat` varchar(20) DEFAULT NULL,
  `RueCandidat` varchar(50) DEFAULT NULL,
  `NumeroderueCandidat` varchar(10) DEFAULT NULL,
  `QualificationCandidat` varchar(50) DEFAULT NULL,
  `CVCandidat` varchar(50) DEFAULT NULL,
  `IDContrat` int(11) DEFAULT NULL,
  `IDExperience` int(11) DEFAULT NULL,
  `MailCandidat` int(11) DEFAULT NULL,
  `numCodePostal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`IDCandidat`, `LoginCandidat`, `MdpCandidat`, `NaissanceCandidat`, `SexeCandidat`, `NomCandidat`, `PrenomCandidat`, `TelCandidat`, `AdresseCandidat`, `DepartementCandidat`, `VilleCandidat`, `RueCandidat`, `NumeroderueCandidat`, `QualificationCandidat`, `CVCandidat`, `IDContrat`, `IDExperience`, `MailCandidat`, `numCodePostal`) VALUES
(9, NULL, NULL, NULL, NULL, 'joi', 'mkj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'oiop', 'ji', NULL, NULL, 'joi', 'mkj', 0, NULL, '', '', '', '', NULL, '', NULL, NULL, 0, 0),
(11, 'mgs', '1234', NULL, NULL, 'gasselin', 'malcolm', 666666666, NULL, 'pays de la loire', 'le mans', 'jack', '3', NULL, '', NULL, NULL, 0, 72000),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '', '', NULL, NULL, 'qdsq', 'fqs', 0, NULL, '', '', '', '', NULL, '', NULL, NULL, 0, 0),
(14, '', '', NULL, NULL, '', '', 0, NULL, '', '', '', '', NULL, '', NULL, NULL, 0, 0),
(15, '', '', NULL, NULL, 'qsd', 'qfsd', 0, NULL, '', '', '', '', NULL, '', NULL, NULL, 0, 0),
(16, '', '', NULL, NULL, 'qsd', 'qfsd', 0, NULL, '', '', '', '', NULL, '', NULL, NULL, 0, 0),
(17, '', '', '1999-06-05', NULL, 'qsd', 'qfsd', 0, NULL, '', '', '', '', NULL, '', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

CREATE TABLE `choix` (
  `IDCandidat` int(11) DEFAULT NULL,
  `IDDomaine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE `contrat` (
  `IDContrat` int(11) NOT NULL,
  `TypeContrat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

CREATE TABLE `domaine` (
  `IDDomaine` int(11) NOT NULL,
  `NomDomaine` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `duree`
--

CREATE TABLE `duree` (
  `IDDuree` int(11) NOT NULL,
  `TempsDuree` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `employeur`
--

CREATE TABLE `employeur` (
  `IDEmployeur` int(11) NOT NULL,
  `LoginEmployeur` varchar(20) DEFAULT NULL,
  `MdpEmployeur` varchar(10) DEFAULT NULL,
  `NomEmployeur` varchar(20) DEFAULT NULL,
  `PrenomEmployeur` varchar(20) DEFAULT NULL,
  `MailEmployeur` varchar(30) DEFAULT NULL,
  `TelEmployeur` int(11) DEFAULT NULL,
  `IDEntreprise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `IDEntreprise` int(11) NOT NULL,
  `DescriptionEntreprise` varchar(30) DEFAULT NULL,
  `NomEntreprise` varchar(20) DEFAULT NULL,
  `AdresseEntreprise` varchar(30) DEFAULT NULL,
  `TelEntreprise` int(11) DEFAULT NULL,
  `MailEntreprise` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `IDExperience` int(11) NOT NULL,
  `TypeExperience` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `joint`
--

CREATE TABLE `joint` (
  `IDdomaine` int(11) DEFAULT NULL,
  `IDOffre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `IDOffre` int(11) NOT NULL,
  `TypecontratOffre` varchar(20) DEFAULT NULL,
  `DureeOffre` int(11) DEFAULT NULL,
  `RenumerationOffre` int(11) DEFAULT NULL,
  `DescriptionOffre` varchar(250) DEFAULT NULL,
  `ContactOffre` varchar(20) DEFAULT NULL,
  `IDDuree` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `qualification`
--

CREATE TABLE `qualification` (
  `IDQualification` int(11) NOT NULL,
  `DiplomeQualification` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `selection`
--

CREATE TABLE `selection` (
  `IDCandidat` int(11) DEFAULT NULL,
  `IDQualification` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `association`
--
ALTER TABLE `association`
  ADD KEY `IDDomaine3` (`IDDomaine`),
  ADD KEY `IDEntreprise2` (`IDEntreprise`);

--
-- Index pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`IDCandidat`),
  ADD KEY `IDContrat` (`IDContrat`),
  ADD KEY `IDExperience` (`IDExperience`);

--
-- Index pour la table `choix`
--
ALTER TABLE `choix`
  ADD KEY `IDCandidat` (`IDCandidat`),
  ADD KEY `IDDomaine` (`IDDomaine`);

--
-- Index pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD PRIMARY KEY (`IDContrat`);

--
-- Index pour la table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`IDDomaine`);

--
-- Index pour la table `duree`
--
ALTER TABLE `duree`
  ADD PRIMARY KEY (`IDDuree`);

--
-- Index pour la table `employeur`
--
ALTER TABLE `employeur`
  ADD PRIMARY KEY (`IDEmployeur`),
  ADD KEY `IDEntreprise` (`IDEntreprise`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`IDEntreprise`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`IDExperience`);

--
-- Index pour la table `joint`
--
ALTER TABLE `joint`
  ADD KEY `IDDomaine2` (`IDdomaine`),
  ADD KEY `IDOffre` (`IDOffre`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`IDOffre`),
  ADD KEY `IDDuree` (`IDDuree`);

--
-- Index pour la table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`IDQualification`);

--
-- Index pour la table `selection`
--
ALTER TABLE `selection`
  ADD KEY `IDQualification` (`IDQualification`),
  ADD KEY `IDCandidatFK` (`IDCandidat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `IDCandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `contrat`
--
ALTER TABLE `contrat`
  MODIFY `IDContrat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `domaine`
--
ALTER TABLE `domaine`
  MODIFY `IDDomaine` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `duree`
--
ALTER TABLE `duree`
  MODIFY `IDDuree` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `employeur`
--
ALTER TABLE `employeur`
  MODIFY `IDEmployeur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `IDEntreprise` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `IDExperience` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `IDOffre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `IDQualification` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `association`
--
ALTER TABLE `association`
  ADD CONSTRAINT `IDDomaine3` FOREIGN KEY (`IDDomaine`) REFERENCES `domaine` (`IDDomaine`),
  ADD CONSTRAINT `IDEntreprise2` FOREIGN KEY (`IDEntreprise`) REFERENCES `entreprise` (`IDEntreprise`);

--
-- Contraintes pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD CONSTRAINT `IDContrat` FOREIGN KEY (`IDContrat`) REFERENCES `contrat` (`IDContrat`),
  ADD CONSTRAINT `IDExperience` FOREIGN KEY (`IDExperience`) REFERENCES `experience` (`IDExperience`);

--
-- Contraintes pour la table `choix`
--
ALTER TABLE `choix`
  ADD CONSTRAINT `IDCandidat` FOREIGN KEY (`IDCandidat`) REFERENCES `candidat` (`IDCandidat`),
  ADD CONSTRAINT `IDDomaine` FOREIGN KEY (`IDDomaine`) REFERENCES `domaine` (`IDDomaine`);

--
-- Contraintes pour la table `employeur`
--
ALTER TABLE `employeur`
  ADD CONSTRAINT `IDEntreprise` FOREIGN KEY (`IDEntreprise`) REFERENCES `entreprise` (`IDEntreprise`);

--
-- Contraintes pour la table `joint`
--
ALTER TABLE `joint`
  ADD CONSTRAINT `IDDomaine2` FOREIGN KEY (`IDdomaine`) REFERENCES `domaine` (`IDDomaine`),
  ADD CONSTRAINT `IDOffre` FOREIGN KEY (`IDOffre`) REFERENCES `offre` (`IDOffre`);

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `IDDuree` FOREIGN KEY (`IDDuree`) REFERENCES `duree` (`IDDuree`);

--
-- Contraintes pour la table `selection`
--
ALTER TABLE `selection`
  ADD CONSTRAINT `IDCandidatFK` FOREIGN KEY (`IDCandidat`) REFERENCES `candidat` (`IDCandidat`),
  ADD CONSTRAINT `IDQualification` FOREIGN KEY (`IDQualification`) REFERENCES `qualification` (`IDQualification`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
