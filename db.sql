-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema db_frutaria
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_frutaria
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_frutaria` DEFAULT CHARACTER SET latin1 ;
USE `db_frutaria` ;

-- -----------------------------------------------------
-- Table `db_frutaria`.`produtores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_frutaria`.`produtores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `contacto` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `db_frutaria`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_frutaria`.`produtos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `preco` DECIMAL(10,0) NOT NULL,
  `quantidade` VARCHAR(45) NOT NULL,
  `descricao` TEXT NOT NULL,
  `nome_produtor` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `produtor_FK_idx` (`nome_produtor` ASC) VISIBLE,
  CONSTRAINT `produtor_FK`
    FOREIGN KEY (`nome_produtor`)
    REFERENCES `db_frutaria`.`produtores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 17
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `db_frutaria`.`utilizadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_frutaria`.`utilizadores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(45) NOT NULL,
  `pass` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
