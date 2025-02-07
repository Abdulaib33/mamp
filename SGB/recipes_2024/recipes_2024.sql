-- MySQL Script generated by MySQL Workbench
-- Wed Dec  4 09:32:21 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema reciepes_2024
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema reciepes_2024
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `reciepes_2024` DEFAULT CHARACTER SET utf8 ;
USE `reciepes_2024` ;

-- -----------------------------------------------------
-- Table `reciepes_2024`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reciepes_2024`.`table1` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `description` VARCHAR(45) NULL,
  `price_level` TINYINT(1) UNSIGNED NULL,
  `prep_time` TIME NULL,
  `niveauDif` TINYINT(1) UNSIGNED NOT NULL,
  `created_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
