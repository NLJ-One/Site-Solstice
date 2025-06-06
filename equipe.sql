-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql:3306
-- Généré le : ven. 06 juin 2025 à 19:01
-- Version du serveur : 8.0.42
-- Version de PHP : 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Site_Solstice`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `role` varchar(150) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `nom`, `role`, `photo`) VALUES
(1, 'Noah Jean-Louis', 'Chef de projet digital', 'Noah coté.jpg'),
(2, 'Arwen Capgras', 'Contributeur principal', 'arwen.png'),
(3, 'Clayton Obega', 'Contributeur principal', 'clayton.png'),
(4, 'Mateo Allet', 'Contributeur principal', '	mateo.webp'),
(5, '	Ilyes Hassani', 'Contributeur secondaire', 'membre6.jpg'),
(6, 'Davy Alberto', 'Contributeur secondaire', 'davy.webp'),
(7, '	Dorian Thiébault-Némitz', 'Chef de projet Brasserie\r\nIngénieur en processus', 'membre7.jpg'),
(8, 'Emma Jérôme', 'Chercheuse en biochimie', 'emma.jpg'),
(9, '	Ewen Berdoula', 'Expert en fermentation', 'ewen.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
