-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema laporan
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema laporan
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `laporan` DEFAULT CHARACTER SET utf8 ;
USE `laporan` ;

-- -----------------------------------------------------
-- Table `laporan`.`data_pelapor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laporan`.`data_pelapor` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nik` VARCHAR(45) NULL,
  `nama_pelapor` VARCHAR(45) NULL,
  `no_hp` VARCHAR(45) NULL,
  `alamat` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laporan`.`data_pengaduan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laporan`.`data_pengaduan` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `petugas` VARCHAR(45) NULL,
  `tanggal` VARCHAR(45) NULL,
  `nama_pelapor` VARCHAR(45) NULL,
  `lokasi` VARCHAR(45) NULL,
  `detail_perkara` VARCHAR(45) NULL,
  `jenis_perkara` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laporan`.`data_petugas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laporan`.`data_petugas` (
  `id_datapetugas` INT NOT NULL AUTO_INCREMENT,
  `nrp` INT NULL,
  `nama_petugas` VARCHAR(45) NULL,
  PRIMARY KEY (`id_datapetugas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laporan`.`jabatan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laporan`.`jabatan` (
  `id_jab` INT NOT NULL AUTO_INCREMENT,
  `jabatan_pol` VARCHAR(45) NULL,
  PRIMARY KEY (`id_jab`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laporan`.`jenis_laporan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laporan`.`jenis_laporan` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `jenis_lapor` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laporan`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laporan`.`login` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(100) NULL,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laporan`.`pangkat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laporan`.`pangkat` (
  `id_pangkat` INT NOT NULL AUTO_INCREMENT,
  `pangkat_pol` VARCHAR(45) NULL,
  PRIMARY KEY (`id_pangkat`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laporan`.`petugas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laporan`.`petugas` (
  `id_petugas` INT NOT NULL AUTO_INCREMENT,
  `id_datapetugas` INT NULL,
  `id_pangkat` INT NULL,
  `id_jab` INT NULL,
  PRIMARY KEY (`id_petugas`),
  INDEX `datapetugas_idx` (`id_datapetugas` ASC),
  INDEX `pangkat_idx` (`id_pangkat` ASC),
  INDEX `jabatan_idx` (`id_jab` ASC),
  CONSTRAINT `datapetugas`
    FOREIGN KEY (`id_datapetugas`)
    REFERENCES `laporan`.`data_petugas` (`id_datapetugas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `pangkat`
    FOREIGN KEY (`id_pangkat`)
    REFERENCES `laporan`.`pangkat` (`id_pangkat`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `jabatan`
    FOREIGN KEY (`id_jab`)
    REFERENCES `laporan`.`jabatan` (`id_jab`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
