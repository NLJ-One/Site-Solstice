-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql:3306
-- Généré le : ven. 06 juin 2025 à 19:57
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

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int NOT NULL,
  `nom` varchar(150) NOT NULL,
  `description` text,
  `prix` decimal(10,2) NOT NULL,
  `quantite` int DEFAULT '0',
  `image` varchar(150) NOT NULL,
  `date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `prix`, `quantite`, `image`, `date_ajout`) VALUES
(1, '\r\nBière Orange', 'Découvrez notre bière à l\'orange, avec des saveurs fruitées et une touche d\'agrumes.', 2.35, 0, '', '2025-06-06 18:50:15'),
(2, 'Bière Cerise', 'Une bière douce et rafraîchissante, parfaite pour les amateurs de cerise.', 2.69, 0, '', '2025-06-06 18:50:15'),
(3, 'Bière Fruit de la Passion', 'Notre bière exotique, pleine de saveurs tropicales, idéale pour l\'été.', 2.59, 0, '', '2025-06-06 18:50:15'),
(4, 'Bière Noix de Coco', 'Une bière crémeuse avec une touche subtile de noix de coco.', 2.99, 0, '', '2025-06-06 18:50:15'),
(5, 'Bière Pomme', 'Un classique revisité avec des notes fraîches de pomme.', 1.99, 0, '', '2025-06-06 18:50:15'),
(6, 'Bière Orange', 'Découvrez notre bière à l\'orange, avec des saveurs fruitées et une touche d\'agrumes.', 2.35, 0, 'b orange.png', '2025-06-06 18:59:43'),
(7, 'Bière Cerise', 'Une bière douce et rafraîchissante, parfaite pour les amateurs de cerise.', 2.69, 0, 'b cerise.png', '2025-06-06 18:59:43'),
(8, 'Bière Fruit de la Passion', 'Notre bière exotique, pleine de saveurs tropicales, idéale pour l\'été.', 2.59, 0, 'b passion.png', '2025-06-06 18:59:43'),
(9, 'Bière Noix de Coco', 'Une bière crémeuse avec une touche subtile de noix de coco.', 2.99, 0, 'b coco.png', '2025-06-06 18:59:43'),
(10, 'Bière Pomme', 'Un classique revisité avec des notes fraîches de pomme.', 1.99, 0, 'B pomme.png', '2025-06-06 18:59:43');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
