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
