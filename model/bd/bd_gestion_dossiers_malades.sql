-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 02 août 2019 à 16:48
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_gestion_dossiers_malades`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_analyse_medicale`
--

DROP TABLE IF EXISTS `tb_analyse_medicale`;
CREATE TABLE IF NOT EXISTS `tb_analyse_medicale` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `patient_id` int(9) UNSIGNED ZEROFILL NOT NULL,
  `medecin_id` int(9) UNSIGNED ZEROFILL NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `medecin_id` (`medecin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_antecedent`
--

DROP TABLE IF EXISTS `tb_antecedent`;
CREATE TABLE IF NOT EXISTS `tb_antecedent` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `patient_id` int(9) UNSIGNED ZEROFILL NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_carte_abonnement`
--

DROP TABLE IF EXISTS `tb_carte_abonnement`;
CREATE TABLE IF NOT EXISTS `tb_carte_abonnement` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `entreprise_id` int(9) UNSIGNED ZEROFILL NOT NULL,
  `date_abonnement` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `entreprise_id` (`entreprise_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_consultation`
--

DROP TABLE IF EXISTS `tb_consultation`;
CREATE TABLE IF NOT EXISTS `tb_consultation` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `idPatient` int(9) UNSIGNED ZEROFILL NOT NULL,
  `idMedecin` int(9) UNSIGNED ZEROFILL NOT NULL,
  `type` varchar(255) NOT NULL,
  `dateConsultation` date NOT NULL,
  `dateRendezVous` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`idPatient`),
  KEY `medecin_id` (`idMedecin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_consultation`
--

INSERT INTO `tb_consultation` (`id`, `idPatient`, `idMedecin`, `type`, `dateConsultation`, `dateRendezVous`, `description`) VALUES
(000000001, 000000001, 000000001, 'exame sanguin', '2019-07-01', '2019-07-26', 'Test sanguin sur le patient Kalala');

-- --------------------------------------------------------

--
-- Structure de la table `tb_entreprise_abonnee`
--

DROP TABLE IF EXISTS `tb_entreprise_abonnee`;
CREATE TABLE IF NOT EXISTS `tb_entreprise_abonnee` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `num_tel` int(14) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_medecin`
--

DROP TABLE IF EXISTS `tb_medecin`;
CREATE TABLE IF NOT EXISTS `tb_medecin` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `matricule` int(10) NOT NULL,
  `nom` varchar(70) NOT NULL,
  `postNom` varchar(75) NOT NULL,
  `prenom` varchar(65) NOT NULL,
  `email` varchar(150) NOT NULL,
  `sexe` varchar(9) NOT NULL,
  `dateNaissance` date NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `num_tel` int(14) NOT NULL,
  `statutMatrimonial` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matricule` (`matricule`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `num_tel` (`num_tel`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_medecin`
--

INSERT INTO `tb_medecin` (`id`, `matricule`, `nom`, `postNom`, `prenom`, `email`, `sexe`, `dateNaissance`, `specialite`, `adresse`, `num_tel`, `statutMatrimonial`) VALUES
(000000001, 201912478, 'jean ', 'djoma', 'pierre', 'jeanpierred@yahoo.fr', 'masculin', '1987-12-01', 'dentiste', '76, av. kasubalesa', 976571256, 'celibataire');

-- --------------------------------------------------------

--
-- Structure de la table `tb_mode_sortie`
--

DROP TABLE IF EXISTS `tb_mode_sortie`;
CREATE TABLE IF NOT EXISTS `tb_mode_sortie` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `patient_id` int(9) UNSIGNED ZEROFILL NOT NULL,
  `date` date NOT NULL,
  `type` varchar(30) NOT NULL,
  `libelle` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_ordonnance`
--

DROP TABLE IF EXISTS `tb_ordonnance`;
CREATE TABLE IF NOT EXISTS `tb_ordonnance` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `patient_id` int(9) UNSIGNED ZEROFILL NOT NULL,
  `medecin_id` int(9) UNSIGNED ZEROFILL NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `medecin_id` (`medecin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_parametres_patient`
--

DROP TABLE IF EXISTS `tb_parametres_patient`;
CREATE TABLE IF NOT EXISTS `tb_parametres_patient` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `idPatient` int(9) UNSIGNED ZEROFILL NOT NULL,
  `tension` varchar(10) NOT NULL,
  `temperature` varchar(12) NOT NULL,
  `poids` char(8) NOT NULL,
  `nbrEnfants` int(2) UNSIGNED ZEROFILL NOT NULL,
  `numCarteAbonnement` int(10) DEFAULT NULL,
  `antecedent` varchar(5) NOT NULL,
  `allergies` varchar(5) NOT NULL,
  `numChambre` int(3) NOT NULL,
  `groupeSanguin` varchar(15) NOT NULL,
  `traitement` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`idPatient`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_parametres_patient`
--

INSERT INTO `tb_parametres_patient` (`id`, `idPatient`, `tension`, `temperature`, `poids`, `nbrEnfants`, `numCarteAbonnement`, `antecedent`, `allergies`, `numChambre`, `groupeSanguin`, `traitement`) VALUES
(000000001, 000000001, '23', '23', '75', 02, NULL, 'non', 'non', 4, 'ab', 'malaria');

-- --------------------------------------------------------

--
-- Structure de la table `tb_patient`
--

DROP TABLE IF EXISTS `tb_patient`;
CREATE TABLE IF NOT EXISTS `tb_patient` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `nom` varchar(70) NOT NULL,
  `postNom` varchar(75) NOT NULL,
  `prenom` varchar(65) NOT NULL,
  `email` varchar(150) NOT NULL,
  `sexe` varchar(9) NOT NULL,
  `dateNaissance` date NOT NULL,
  `numTel` int(14) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `profession` varchar(60) NOT NULL,
  `statutMatrimonial` varchar(35) DEFAULT NULL,
  `numAssurance` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `num_tel` (`numTel`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_patient`
--

INSERT INTO `tb_patient` (`id`, `nom`, `postNom`, `prenom`, `email`, `sexe`, `dateNaissance`, `numTel`, `adresse`, `profession`, `statutMatrimonial`, `numAssurance`) VALUES
(000000001, 'kalala', 'bwanga', 'herve', 'hervekalala@gmail.com', 'masculin', '1998-04-10', 345672714, '32, av. chemin public', 'directeur', 'celibataire', 0),
(000000002, 'Mwanza', 'Ngongo', 'Dieumerci', 'Dieumercingonga@yahoo.fr', 'Homme', '1995-05-09', 123543212, '23, Av. Golf, Q. abbe, C. lac', 'Liberal', NULL, 4336232);

-- --------------------------------------------------------

--
-- Structure de la table `tb_recu`
--

DROP TABLE IF EXISTS `tb_recu`;
CREATE TABLE IF NOT EXISTS `tb_recu` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `idPatient` int(9) UNSIGNED ZEROFILL NOT NULL,
  `nom` varchar(110) NOT NULL,
  `prenom` varchar(75) NOT NULL,
  `designation` varchar(254) NOT NULL,
  `type` varchar(50) NOT NULL,
  `datePayement` date DEFAULT NULL,
  `montant` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`idPatient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_resultat_analyse`
--

DROP TABLE IF EXISTS `tb_resultat_analyse`;
CREATE TABLE IF NOT EXISTS `tb_resultat_analyse` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `analyse_id` int(9) DEFAULT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `analyse_id` (`analyse_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `id_medecin` int(10) UNSIGNED ZEROFILL NOT NULL,
  `pseudo` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo_profil` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  KEY `id_medecin` (`id_medecin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_user`
--

INSERT INTO `tb_user` (`id`, `id_medecin`, `pseudo`, `password`, `photo_profil`) VALUES
(0001, 0000000001, 'rosie', '1234', 'model/photos-profils/profil.png');

-- --------------------------------------------------------

--
-- Structure de la table `tb_visiteur`
--

DROP TABLE IF EXISTS `tb_visiteur`;
CREATE TABLE IF NOT EXISTS `tb_visiteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPatient` int(11) DEFAULT NULL,
  `nom` varchar(156) DEFAULT NULL,
  `postNom` varchar(124) DEFAULT NULL,
  `prenom` varchar(145) DEFAULT NULL,
  `sexe` varchar(12) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `numTel` int(11) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `profession` varchar(45) NOT NULL,
  `lienParente` varchar(76) NOT NULL,
  `statutMatrimonial` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_visiteur`
--

INSERT INTO `tb_visiteur` (`id`, `idPatient`, `nom`, `postNom`, `prenom`, `sexe`, `email`, `numTel`, `adresse`, `profession`, `lienParente`, `statutMatrimonial`) VALUES
(1, 1, 'mike', 'jones', 'yan', 'masculin', '', 765434567, '23, Av. Mpanda, C. Gambela', 'travailleur', 'ami', ''),
(2, 2, 'kalend', 'mutomb', 'chadrack', 'homme', 'chadrackmutomb@yahoo.fr', 65712345, '21, av. du 30 juin', 'professionnelle', 'ami', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
