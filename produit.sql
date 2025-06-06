-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql:3306
-- Généré le : ven. 06 juin 2025 à 19:00
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

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
