-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema crud_mysqli
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `crud_mysqli` ;

-- -----------------------------------------------------
-- Schema crud_mysqli
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `crud_mysqli` DEFAULT CHARACTER SET utf8 ;
USE `crud_mysqli` ;

-- -----------------------------------------------------
-- Table `crud_mysqli`.`buku`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crud_mysqli`.`buku` ;

CREATE TABLE IF NOT EXISTS `crud_mysqli`.`buku` (
  `kd_buku` VARCHAR(45) NOT NULL,
  `judul` VARCHAR(45) NOT NULL,
  `penerbit` VARCHAR(45) NOT NULL,
  `jumlah` INT NOT NULL,
  PRIMARY KEY (`kd_buku`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
