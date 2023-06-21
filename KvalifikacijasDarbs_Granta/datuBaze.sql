-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema kvalifikacija_TavamAuto
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema kvalifikacija_TavamAuto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `kvalifikacija_TavamAuto` DEFAULT CHARACTER SET utf8 ;
USE `kvalifikacija_TavamAuto` ;

-- -----------------------------------------------------
-- Table `kvalifikacija_TavamAuto`.`Klienti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kvalifikacija_TavamAuto`.`Klienti` (
  `idKlienti` INT NULL AUTO_INCREMENT,
  `KlientaVards` VARCHAR(45) NULL,
  `KlientaTelefons` VARCHAR(45) NULL,
  `KlientaEpasts` VARCHAR(45) NULL,
  PRIMARY KEY (`idKlienti`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kvalifikacija_TavamAuto`.`Atsauksme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kvalifikacija_TavamAuto`.`Atsauksme` (
  `idzina` INT NOT NULL AUTO_INCREMENT,
  `vards` VARCHAR(45) NULL,
  `zina` VARCHAR(45) NULL,
  `vertejums` INT NULL,
  PRIMARY KEY (`idzina`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kvalifikacija_TavamAuto`.`pakalpojums`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kvalifikacija_TavamAuto`.`pakalpojums` (
  `idpakalpojumi` INT NOT NULL AUTO_INCREMENT,
  `nosaukums` VARCHAR(45) NULL,
  `cena` INT NULL,
  `apraksts` TEXT NULL,
  `datums` DATE NULL,
  PRIMARY KEY (`idpakalpojumi`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kvalifikacija_TavamAuto`.`kontakti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kvalifikacija_TavamAuto`.`kontakti` (
  `idkontakti` INT NOT NULL AUTO_INCREMENT,
  `vards` VARCHAR(45) NULL,
  `telefons` VARCHAR(45) NULL,
  `epasts` VARCHAR(45) NULL,
  `zina` TEXT NULL,
  PRIMARY KEY (`idkontakti`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kvalifikacija_TavamAuto`.`lietotajs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kvalifikacija_TavamAuto`.`lietotajs` (
  `idlietotajs` INT NOT NULL AUTO_INCREMENT,
  `lietotajVards` VARCHAR(255) NULL,
  `lietotajaParole` VARCHAR(255) NULL,
  PRIMARY KEY (`idlietotajs`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO `kvalifikacija_tavamauto`.`klienti` (`KlientaVards`, `KlientaTelefons`, `KlientaEpasts`) VALUES ('Reinis', '28896704', 'reinislaukis@gmail.com');
INSERT INTO `kvalifikacija_tavamauto`.`klienti` (`KlientaVards`, `KlientaTelefons`, `KlientaEpasts`) VALUES ('Janis', '26678653', 'janisruksis@gmail.com');
INSERT INTO `kvalifikacija_tavamauto`.`lietotajs` (`lietotajVards`, `lietotajaParole`) VALUES ('admin', '$2y$10$mQmPQoe.WYpX6i29SOACqeZlMpWL.PwsvbbBW2nCKUKgUu6jpNNRS');
INSERT INTO `kvalifikacija_tavamauto`.`pakalpojums` (`nosaukums`) VALUES ('Lukturu pulēšana');
INSERT INTO `kvalifikacija_tavamauto`.`pakalpojums` (`nosaukums`) VALUES ('Traipu tīrīšana');
INSERT INTO `kvalifikacija_tavamauto`.`pakalpojums` (`nosaukums`) VALUES ('Auto krāsošana');
INSERT INTO `kvalifikacija_tavamauto`.`pakalpojums` (`nosaukums`) VALUES ('Disku krāsošana');
INSERT INTO `kvalifikacija_tavamauto`.`pakalpojums` (`nosaukums`) VALUES ('Virsbūves defektu labošan');
INSERT INTO `kvalifikacija_tavamauto`.`pakalpojums` (`nosaukums`) VALUES ('Ķīmiskā tīrīšana');
INSERT INTO `kvalifikacija_tavamauto`.`pakalpojums` (`nosaukums`) VALUES ('Auto detailings');
INSERT INTO `kvalifikacija_tavamauto`.`pakalpojums` (`nosaukums`) VALUES ('Auto restauracīja');
