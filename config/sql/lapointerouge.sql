SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `lapointerouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit_sur_mesure`
--

CREATE TABLE `produit_sur_mesure` (
  `uid_sur_mesure` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `metal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `poids` float UNSIGNED NOT NULL,
  `temps_conception` smallint UNSIGNED NOT NULL,
  `photo` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit_sur_mesure`
--

INSERT INTO `produit_sur_mesure` (`uid_sur_mesure`, `nom`, `description`, `dimensions`, `metal`, `poids`, `temps_conception`, `photo`) VALUES
(1, "Justice du chevalier", "Une lame finement ouvragée pour créer une épée digne d'un chevalier en mission.", '0.980 x 17 x 5', 'Argent, or', 1.3, 84, 'justice_du_chevalier.jpg'),
(2, "La claymore au Lys", "Epée proposant d'assembler la popularité de la claymore avec la royauté de la fleur de lys.", '1.3 x 21 x 6', 'Acier, or, ébène', 1.6, 79, 'la_claymore_au_lys.jpg'),
(3, "Justice du chevalier", "Une lame finement ouvragée pour créer une épée digne d'un chevalier en mission.", '0.980 x 17 x 5', 'Argent, or', 1.3, 84, 'justice_du_chevalier.jpg'),
(4, "Le poing de Sauron", "Une réplique de la mace utilisée par Sauron dans l'univers cinématographique.", '0.800 x 22 x 22', 'Acier', 2.4, 121, 'le_poing_de_sauron.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commande_sur_mesure`
--

CREATE TABLE `commande_sur_mesure` (
  `uid_commande` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- --------------------------------------------------------

--
-- Structure de la table `produit_sur_mesure`
--

CREATE TABLE `produit_standard` (
  `uid_standard` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `metal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `poids` float UNSIGNED NOT NULL,
  `temps_conception` smallint UNSIGNED NOT NULL,
  `prix` float UNSIGNED NOT NULL,
  `photo` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit_standard`
--

INSERT INTO `produit_standard` (`uid_standard`, `nom`, `description`, `dimensions`, `metal`, `poids`, `temps_conception`, `prix`, `photo`) VALUES
(1, 'La poigne du Rohan', 'Adoptez cette réplique de lame des cavaliers du Rohan !', '85 x 20 x 4', 'Acier', 1.1, 25, 250, 'la_poigne_du_rohan.jpg'),
(2, 'La dague', 'Essayez cette grande dague.', '35 x 8 x 4', 'Acier', 0.420, 10, 120, 'la_dague.jpg'),
(3, "L'épée longue", "Une réplique d'épée longue, populaire et courante.", '95 x 20 x 4', 'Acier', 0.945, 23, 250, 'l_epee_longue.jpg'),
(4, 'Dague ouvragée', 'Une version fantasy de la dague avec une poignée en plaqué or.', '35 x 12 x 3', 'Acier, or (placage)', 0.365, 30, 330, 'dague_ouvragee.jpg'),
(5, 'Epée ouvragée', "Une version fantasy d'une épée courte.", '50 x 20 x 4', 'Acier, zinc', 0.719, 36, 450, 'epee_ouvragee.jpg'),
(6, 'Le Wakizashi', "Un wakizashi, une épée japonaise à utiliser en seconde main.", '65 x 9 x 4', 'Acier', 0.680, 19, 240, 'wakizashi.jpg'),
(7, 'La Hache de Skyrim', "Une réplique d'une hache du célèbre jeu Skyrim ", '48 x 23 x 6', 'Acier, chêne', 1.1, 21, 190, 'la_hache_de_skyrim.jpg'),
(8, 'La Nordique', "Une hache d'inspiration nordique, viking.", '42 x 18 x 4', 'Acier, chêne', 0.480, 17, 150, 'la_nordique.jpg'),
(9, 'Hache unie', "Une hache d'un seul bloc de métal, poignée en lamelles de cuir.", '39 x 19 x 4', 'Acier, cuir', 0.480, 21, 200, 'hache_unie.jpg'),
(10, 'La Nordique', "Une hache d'inspiration nordique, viking.", '42 x 18 x 4', 'Acier, chêne', 0.480, 17, 150, 'la_nordique.jpg'),
(11, 'Hachette', "Une hachette avec manche et métal peints.", '35 x 17 x 4', 'Acier, chêne', 0.390, 13, 130, 'hachette.jpg')
(12, 'Hache fantasy', "Une hache d'inspiration fantasy avec un crâne, hallebarde courte.", '64 x 24 x 6', 'Acier, chêne', 0.640, 29, 300, 'hache_fantasy.jpg'),
(13, 'Hache ouvragée', "Une hache longue ouvragée.", '71 x 20 x 7', 'Acier, chêne', 0.940, 22, 280, 'hache_ouvragee.jpg'),
(14, 'Lance commune', "Une hache commune, simple et efficace.", '1.3 x 10 x 4', 'Acier, chêne', 1.09, 11, 150, 'lance_commune.jpg'),
(15, 'La Nordique', "Une lance de conception moderne, pour le chasseur d'aujourd'hui.", '1.2 x 8 x 4', 'Acier', 0.750, 26, 280, 'lance_moderne.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `uid_client` bigint UNSIGNED NOT NULL,
  `nom` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` int NOT NULL,
  `email` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`uid_client`, `nom`, `prenom`, `email`, `password`) VALUES
(), ;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `uid_panier` bigint UNSIGNED NOT NULL,
  `uid_client` bigint UNSIGNED NOT NULL,
  `uid_standard` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour la table `produit_standard`
--
ALTER TABLE `produit_standard`
  ADD PRIMARY KEY (`uid_standard`);

--
-- Index pour la table `produit_standard`
--
ALTER TABLE `produit_sur_mesure`
  ADD PRIMARY KEY (`uid_sur_mesure`);

-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`uid_client`);

-- Index pour la table `commande_sur_mesure`
--
ALTER TABLE `commande_sur_mesure`
  ADD PRIMARY KEY (`uid_commande`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`uid_panier`);
  
--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produi_standard`
--
ALTER TABLE `produit_standard`
  MODIFY `uid_standard` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produit_sur_mesure`
--
ALTER TABLE `produit_sur_mesure`
  MODIFY `uid_sur_mesure` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande_sur_mesure`
--
ALTER TABLE `commande_sur_mesure`
  MODIFY `uid_commande` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
  
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `client`
  MODIFY `uid_client` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `uid_panier` bigint UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `panier`
  ADD KEY `fk_panier_client` (`uid_client`),
  ADD KEY `fk_panier_produit` (`uid_standard`);

--
-- Contraintes pour la table `panier`
--

ALTER TABLE `panier`
  ADD CONSTRAINT `fk_panier_produit` FOREIGN KEY (`uid_standard`) REFERENCES `produit_standard` (`uid_standard`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_panier_client` FOREIGN KEY (`uid_client`) REFERENCES `client` (`uid_client`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;