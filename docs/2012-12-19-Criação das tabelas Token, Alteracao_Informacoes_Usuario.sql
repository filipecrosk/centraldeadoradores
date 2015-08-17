SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `adoradores` DEFAULT CHARACTER SET utf8 ;
USE `adoradores` ;

-- -----------------------------------------------------
-- Table `adoradores`.`tipo_informacao`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`tipo_informacao` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  `Requer_Confirmacao` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adoradores`.`token`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`token` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `chave` VARCHAR(32) NOT NULL ,
  `utilizada` INT NOT NULL DEFAULT 0 ,
  `data` DATE NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adoradores`.`alteracao_informacao_usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`alteracao_informacao_usuario` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Data` DATE NOT NULL ,
  `Nova_Informacao` VARCHAR(100) NOT NULL ,
  `Informacao_Antiga` VARCHAR(100) NOT NULL ,
  `Id_Usuario` INT(11) NOT NULL ,
  `Id_Tipo_Informacao_Id` INT(11) NOT NULL ,
  `Id_Token` INT(11) NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Alteracao_Informacao_Usuario_usuario1` (`Id_Usuario` ASC) ,
  INDEX `fk_Alteracao_Informacao_Usuario_Tipo_Informacao1` (`Id_Tipo_Informacao_Id` ASC) ,
  INDEX `fk_alteracao_informacao_usuario_token1` (`Id_Token` ASC) ,
  CONSTRAINT `fk_Alteracao_Informacao_Usuario_usuario1`
    FOREIGN KEY (`Id_Usuario` )
    REFERENCES `adoradores`.`usuario` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Alteracao_Informacao_Usuario_Tipo_Informacao1`
    FOREIGN KEY (`Id_Tipo_Informacao_Id` )
    REFERENCES `adoradores`.`tipo_informacao` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_alteracao_informacao_usuario_token1`
    FOREIGN KEY (`Id_Token` )
    REFERENCES `adoradores`.`token` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `adoradores`.`tipo_informacao`
-- -----------------------------------------------------
START TRANSACTION;
USE `adoradores`;
INSERT INTO `adoradores`.`tipo_informacao` (`Id`, `Nome`, `Requer_Confirmacao`) VALUES (NULL, 'Nome', '1');
INSERT INTO `adoradores`.`tipo_informacao` (`Id`, `Nome`, `Requer_Confirmacao`) VALUES (NULL, 'Apelido', '0');
INSERT INTO `adoradores`.`tipo_informacao` (`Id`, `Nome`, `Requer_Confirmacao`) VALUES (NULL, 'Email', '0');
INSERT INTO `adoradores`.`tipo_informacao` (`Id`, `Nome`, `Requer_Confirmacao`) VALUES (NULL, 'Senha', '1');
INSERT INTO `adoradores`.`tipo_informacao` (`Id`, `Nome`, `Requer_Confirmacao`) VALUES (NULL, 'Aniversario', '0');
INSERT INTO `adoradores`.`tipo_informacao` (`Id`, `Nome`, `Requer_Confirmacao`) VALUES (NULL, 'Endereco', '0');
INSERT INTO `adoradores`.`tipo_informacao` (`Id`, `Nome`, `Requer_Confirmacao`) VALUES (NULL, 'Telefone', '0');
INSERT INTO `adoradores`.`tipo_informacao` (`Id`, `Nome`, `Requer_Confirmacao`) VALUES (NULL, 'Celular', '0');

COMMIT;
