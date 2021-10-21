-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 21 oct. 2021 à 14:08
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(255) UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `mail` varchar(191) DEFAULT NULL,
  `mdp` varchar(60) DEFAULT NULL,
  `date_creation_compte` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `mail`, `mdp`, `date_creation_compte`) VALUES
(6, 'toto', 'test@test.be', '$2y$10$/Sfs1saR1P2THc9jVaqNQuLWggErUXnTjzgzzpNwYCL7EJs8u6xhO', '2021-10-18 16:42:53'),
(7, 'carla', 'test@gmail.be', '$2y$10$/Sfs1saR1P2THc9jVaqNQuLWggErUXnTjzgzzpNwYCL7EJs8u6xhO', '2021-10-19 10:07:57'),
(8, 'fdgsd', 'tes2t@test.be', '$2y$10$v9ELUGt3quExpaYly0Y/G.rdSMRcyVjt3fkBx0LSgPNBfSpT0aMqa', '2021-10-19 11:12:57'),
(9, 'fdgsd', 'tes3t@test.be', '$2y$10$i3Fmd8TGoLeE4jadIFJu.eIjY7.2gjvc/nDdXcAImQJkNYAfszvhi', '2021-10-19 11:16:47'),
(10, 'fdgsd', 'tes4t@test.be', '$2y$10$Zet/FU4rn9.hGYaxQW15JeUVpZOj7C1FM/3PDWFY9gTcZqgsnUT9q', '2021-10-19 11:18:31'),
(11, 'fdgsd', 'tes5t@test.be', '$2y$10$Cy1pMtzZGuE9cE6ZTE4amOEZ25tUx1Yrg2bwxKAvUbqik5LlaECGy', '2021-10-19 11:19:02'),
(12, '1234', 'tes6t@test.be', '$2y$10$.h0729DfLGPcsz0RjSiACuPD3aehjd3GvKiAvqbHyqIcU0GhDJpsq', '2021-10-19 11:20:04'),
(13, 'zaza', 'zaza@gmail.com', '$2y$10$oKdrWGvpEQz1PNkvXlLBpOaD0e9oUVHIfsh50MNlGBcIuLoJGLn8O', '2021-10-19 11:53:01');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
