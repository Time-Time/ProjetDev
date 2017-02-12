-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 12 Février 2017 à 19:52
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bf_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `cat_id` int(11) NOT NULL,
  `cat_nom` varchar(45) DEFAULT NULL,
  `cat_img_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `cat_nom`, `cat_img_id`) VALUES
(1, 'Jonglage', 1),
(3, 'Flux', 2),
(4, 'Light Toys', 3);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `com_id` int(11) NOT NULL,
  `com_mem_id` int(11) NOT NULL,
  `com_contenu` longtext,
  `com_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `discipline`
--

CREATE TABLE `discipline` (
  `disc_id` int(11) NOT NULL,
  `disc_nom` varchar(45) DEFAULT NULL,
  `disc_desc` longtext,
  `disc_cat_id` int(11) DEFAULT NULL,
  `disc_img_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `discipline`
--

INSERT INTO `discipline` (`disc_id`, `disc_nom`, `disc_desc`, `disc_cat_id`, `disc_img_id`) VALUES
(1, 'FlipyFlux', 'Le FlipyFlux roule le long de vos bras (bras nus de préférence) et produit un effet de massage doux et relaxant. Il possède des propriétés importantes et bénéfiques au niveau de la psychomotricité. <br/> <br/>\r\nVous pouvez le faire passer d\'une personne à l\'autre et faire de belles chorégraphies en groupe ! Il est aussi possible de le faire rouler dans un cerceau, dans une corde, ect. <br/><br/>\r\n\r\nLe FlipyFlux est tout ce que vous voulez qu\'il soit... Réveillez votre imagination !\r\n<br/><br/>\r\nSite officiel : <a href="http://in-torus.com/" target="_blank">in-torus.com</a>', 3, 1),
(2, 'Bolas', 'Les bolas, aussi appelées poïs, sont une catégorie de la jonglerie et plus précisément du swinging. Ils permettent de réaliser des figures très esthétiques, ce qui explique que cette discipline soit particulièrement en vogue depuis quelques années.<br/><br/>\r\n\r\nQue sont les bolas ?<br/><br/>\r\n\r\nLes bolas se composent d’une ficelle à laquelle est reliée une boule ou un ruban. Ils s’utilisent très simplement : il vous suffit de tenir la ficelle et de faire tourner les bolas autour de vous !<br/>\r\nIl existe aussi d’autres sortes de bolas avec des chaînes : ils sont spécialement conçus pour réaliser des figures enflammées. Il s’agit dans ce cas de bolas enflammées.', 1, 3),
(3, 'Contact', 'Le contact est une discipline de jonglerie consistant à garder en contact avec le corps humain un ou plusieurs objets. En opposition avec le reste de la jonglerie de lancer, le contact est le jonglage du toucher.\r\nIl se divise principalement en deux catégories :<br/>\r\nle contact et les points d’équilibre sur l’ensemble du corps ;<br/>\r\nla manipulation : les balles restent au contact des mains seulement (en anglais palm spinning).<br/><br/>\r\n\r\nLe contact est une discipline où la patience joue un rôle important. Pour vulgariser, il y a deux types de pratiques : <br/>le multi-balles où on utilisera plusieurs balles de petite taille en même temps et la pratique à une balle où on cherchera à avoir une balle plutôt grande dans le but de "d\'exagérer" les effets visuels. Plusieurs types de balles peuvent être utilisés.', 1, 2),
(4, 'Staff', 'Le bâton (ou « staff » en anglais) est un accessoire de jonglerie. Le jongleur peut utiliser un ou deux bâtons. Dans le deuxième cas, il utilisera des bâtons de taille réduite.<br/><br/>\r\n\r\nUn bâton peut être constitué d’un long tube d’aluminium (entre 80 cm et 1,60 m) au milieu duquel on pose un grip pour le confort et l’exécution de certaines techniques.<br/> S’il doit être enflammé on parle de bâton de feu, on fixe aux extrémités des mèches généralement en kevlar qu’on imbibera de kerdane.<br/><br/>\r\n\r\nLes techniques en staff sont assez variées et différentes selon que l’on utilise un ou deux bâtons. On note trois grandes familles :<br/>\r\nles rotations qui s’apparentent aux techniques des bollas ;<br/>\r\nle contact, où l’on fait passer le bâton sur une partie de son corps ;\r\nles lancers.<br/><br/>\r\n\r\nIl existe un autre instrument de jonglerie appelé le « bâton du diable », manipulé avec deux baguettes.', 1, 6),
(5, 'Orbit', 'Orbit light shows are a rising flow art where users spin a shining disc of LED orbit lights in circular patterns around their bodies. <br/>It\'s super hypnotic to watch, but even more fun to spin with. The all new Orbite X3 features a clear, vibrant casing with a full body of illuminated rave lights. Rave orbits have been around for years, but only recently has it blown up and become a truly skill-based art form. <br/><br/>\r\n\r\nOrbiting is easy to learn, but fun and difficult to master. Orbits use two strings to twist up and release the spinning housing in the middle, causing a whirlwind of light. Spin shapes, create trails, and imagine new universes with LED orbits. <br/><br/>\r\n\r\nPick up one of these light up toys and create a brilliant orbit light show in minutes. Join the ranks of the orbit community and discover new ways to spin and create orbit light shows!', 4, 5),
(6, 'Light gloves', 'At EmazingLights, we provide the highest quality, most user friendly LED gloves on the market. If you\'ve never used light gloves before, we recommend trying out the Electro Gloves. If you\'re a glover, you\'ll have to check out our top of the line motion reactive glove set, the Element V2. \r\n\r\nRave gloves represent a staple art form in the music festival and rave scenes. We make it our mission to pioneer the art of gloving into a legitimate art form and competition. \r\n\r\nStart gloving and unleash your full light show potential with some of the best glove sets on the planet.', 4, 7),
(7, 'Buugeng', 'Le buugeng est un instrument de jonglerie inventé en 2003 par Daï Zaobab et fortement inspiré d’un numéro de Michael Moschen, Moschen in Motion1.<br/> C’est un bâton en S (bâton incurvé) avec une forme spécifique. <br/>Buugeng signifie littéralement « arme » (buu) « illusion » (geng).<br/><br/>\r\n\r\nC’est un bâton en forme de S ou de fleur à trois branches pouvant se replier sur lui-même pour former un arc de cercle, sa forme caractéristique produit un effet visuel très particulier lorsqu\'il est manipulé.<br/> Les buugengs sont le plus souvent manipulés par deux et produisent une illusion d\'optique.<br/>\r\nLe buugeng est aujourd\'hui pratiqué par de nombreux jongleurs et les ateliers pour en apprendre le maniement en convention de jonglerie sont de plus en plus fréquents.', 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `img_id` int(11) NOT NULL,
  `img_desc` varchar(45) NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `img_disc_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`img_id`, `img_desc`, `img_url`, `img_disc_id`) VALUES
(1, 'flipyflux-metal', 'http://localhost/ProjetWeb/assets/img/flipyflux-metal.png', 1),
(2, 'contact-ball', 'http://localhost/ProjetWeb/assets/img/contactBall.jpg', 3),
(3, 'bolas', 'http://localhost/ProjetWeb/assets/img/bolas.jpg', 2),
(4, 'buugeng', 'http://localhost/ProjetWeb/assets/img/buugeng-light.jpg', 7),
(5, 'orbit', 'http://localhost/ProjetWeb/assets/img/orbit.jpg', 5),
(6, 'staff-fire', 'http://localhost/ProjetWeb/assets/img/staff-fire.jpg', 4),
(7, 'gloves', 'http://localhost/ProjetWeb/assets/img/gloves.jpg', 6);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `mem_id` int(11) NOT NULL,
  `mem_pseudo` varchar(45) NOT NULL,
  `mem_pwd` varchar(45) NOT NULL,
  `mem_admin` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`mem_id`, `mem_pseudo`, `mem_pwd`, `mem_admin`) VALUES
(1, 'panda', 'panda', 1),
(8, 'Pandaflux', 'panda', 0),
(11, 'Tim', 'Tim', 1),
(6, 'simon', 'flux', 0),
(10, 'Pandadd', 'Panda', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `fk_categorie_image_idx` (`cat_img_id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `fk_commentaire_membre1_idx` (`com_mem_id`);

--
-- Index pour la table `discipline`
--
ALTER TABLE `discipline`
  ADD PRIMARY KEY (`disc_id`),
  ADD KEY `fk_discipline_categorie1_idx` (`disc_cat_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `fk_image_discipline1_idx` (`img_disc_id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `discipline`
--
ALTER TABLE `discipline`
  MODIFY `disc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
