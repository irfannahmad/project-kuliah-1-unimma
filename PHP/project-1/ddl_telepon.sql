-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema telepon
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema telepon
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `telepon` DEFAULT CHARACTER SET utf8 ;
USE `telepon` ;

-- -----------------------------------------------------
-- Table `telepon`.`buku_telepon`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `telepon`.`buku_telepon` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(50) NULL,
  `alamat` VARCHAR(50) NULL,
  `telp` VARCHAR(50) NULL,
  `email` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
