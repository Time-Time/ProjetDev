SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema bf_web
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bf_web
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bf_web` DEFAULT CHARACTER SET utf8 ;
USE `bf_web` ;

-- -----------------------------------------------------
-- Table `bf_web`.`membre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bf_web`.`membre` (
  `mem_id` INT NOT NULL AUTO_INCREMENT,
  `mem_pseudo` VARCHAR(45) NOT NULL,
  `mem_pwd` VARCHAR(45) NOT NULL,
  `mem_admin` TINYINT(1) NOT NULL,
  PRIMARY KEY (`mem_id`))
ENGINE = MyISAM;
-- Création d'un membre.
INSERT INTO membre (mem_admin, mem_pseudo, mem_pwd) VALUES (0, 'aze', 'a');


-- -----------------------------------------------------
-- Table `bf_web`.`image`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bf_web`.`image` (
  `img_id` INT NOT NULL AUTO_INCREMENT,
  `img_desc` VARCHAR(45) NOT NULL,
  `img_url` VARCHAR(45) NOT NULL,
  `img_disc_id` INT NULL,
  PRIMARY KEY (`img_id`),
  INDEX `fk_image_discipline1_idx` (`img_disc_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `bf_web`.`categorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bf_web`.`categorie` (
  `cat_id` INT NOT NULL AUTO_INCREMENT,
  `cat_nom` VARCHAR(45) NULL,
  `cat_img_id` INT NULL,
  PRIMARY KEY (`cat_id`),
  INDEX `fk_categorie_image_idx` (`cat_img_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `bf_web`.`discipline`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bf_web`.`discipline` (
  `disc_id` INT NOT NULL AUTO_INCREMENT,
  `disc_nom` VARCHAR(45) NULL,
  `disc_desc` LONGTEXT NULL,
  `disc_cat_id` INT NULL,
  PRIMARY KEY (`disc_id`),
  INDEX `fk_discipline_categorie1_idx` (`disc_cat_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `bf_web`.`commentaire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bf_web`.`commentaire` (
  `com_id` INT NOT NULL AUTO_INCREMENT,
  `com_mem_id` INT NOT NULL,
  `com_contenu` LONGTEXT NULL,
  `com_date` DATE NULL,
  PRIMARY KEY (`com_id`),
  INDEX `fk_commentaire_membre1_idx` (`com_mem_id` ASC))
ENGINE = MyISAM;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


-- -----------------------------------------------------
-- Table `bf_web`.`image`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `bf_web`.`image` (
  `img_id` int(11) NOT NULL,
  `img_desc` varchar(45) NOT NULL,
  `img_url` varchar(45) NOT NULL,
  `img_disc_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `image`
--
DELETE FROM image;
INSERT INTO `image` (`img_id`, `img_desc`, `img_url`, `img_disc_id`) VALUES
(1, 'flipyflux-metal', '../assets/img/flipyflux-metal.png', 1),
(2, 'contact-ball', '../assets/img/contactBall.jpg', 3),
(3, 'bolas', '../assets/img/bolas.jpg', 2),
(4, 'buugeng', '../assets/img/buugeng-light.jpg', 7),
(5, 'orbit', '../assets/img/orbit.jpg', 5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `image`
--
--	Ne fonctionne pas si les clés primaires et étrangères existes déjà.
--	ALTER TABLE `image`
--	  ADD PRIMARY KEY (`img_id`),
--	  ADD KEY `fk_image_discipline1_idx` (`img_disc_id`);

  


--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
	--	Ne fonctionne pas => Erreur SQL :
	--		Variable 'character_set_client' can't be set to the value of 'NULL'
--	/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
--	/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
--	/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
