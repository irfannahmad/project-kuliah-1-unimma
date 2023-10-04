-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema pertemuan12
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pertemuan12
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pertemuan12` DEFAULT CHARACTER SET utf8 ;
USE `pertemuan12` ;

-- -----------------------------------------------------
-- Table `pertemuan12`.`mahasiswa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pertemuan12`.`mahasiswa` (
  `npm` INT NOT NULL AUTO_INCREMENT,
  `nama_mahasiswa` VARCHAR(45) NULL,
  PRIMARY KEY (`npm`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pertemuan12`.`mata_kuliah`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pertemuan12`.`mata_kuliah` (
  `kode_mk` VARCHAR(50) NOT NULL,
  `nama_mata_kuliah` VARCHAR(45) NULL,
  PRIMARY KEY (`kode_mk`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pertemuan12`.`daftar_kuliah`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pertemuan12`.`daftar_kuliah` (
  `nama_mahasiswa` VARCHAR(50) NOT NULL,
  `mata_kuliah` VARCHAR(45) NULL,
  PRIMARY KEY (`nama_mahasiswa`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
