SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `adoradores` DEFAULT CHARACTER SET utf8 ;
USE `adoradores` ;

-- -----------------------------------------------------
-- Table `adoradores`.`ministerio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`ministerio` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adoradores`.`usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`usuario` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(50) NOT NULL ,
  `Email` VARCHAR(50) NOT NULL ,
  `Senha` VARCHAR(50) NOT NULL ,
  `Id_Ministerio` INT(11) NOT NULL ,
  `Id_Banda` INT(11) NULL ,
  `Desabilitado` TINYINT(1) NOT NULL DEFAULT 0 ,
  `NivelPermissao` INT NOT NULL DEFAULT 1 ,
  `Aniversario` VARCHAR(5) NULL ,
  `Endereco` VARCHAR(100) NULL ,
  `Telefone` VARCHAR(13) NULL ,
  `Celular` VARCHAR(13) NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `Usuario_Ministerio` (`Id_Ministerio` ASC) ,
  INDEX `Usuario_Banda` (`Id_Banda` ASC) ,
  CONSTRAINT `Usuario_Ministerio`
    FOREIGN KEY (`Id_Ministerio` )
    REFERENCES `adoradores`.`ministerio` (`Id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `Usuario_Banda`
    FOREIGN KEY (`Id_Banda` )
    REFERENCES `adoradores`.`banda` (`Id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adoradores`.`banda`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`banda` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  `Id_Lider` INT(11) NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `Banda_Lider` (`Id_Lider` ASC) ,
  CONSTRAINT `Banda_Lider`
    FOREIGN KEY (`Id_Lider` )
    REFERENCES `adoradores`.`usuario` (`Id` )
    ON DELETE SET NULL
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adoradores`.`local`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`local` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  `Endereco` VARCHAR(100) NOT NULL ,
  `Link_Maps` VARCHAR(45) NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adoradores`.`funcao`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`funcao` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adoradores`.`status_escala`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`status_escala` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adoradores`.`escala_pessoa`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`escala_pessoa` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Id_Usuario` INT(11) NOT NULL ,
  `Id_Local` INT(11) NOT NULL ,
  `Id_Funcao` INT(11) NOT NULL ,
  `Data` DATETIME NOT NULL ,
  `Id_Status_Escala` INT(11) NOT NULL DEFAULT 1 ,
  `Id_Responsavel` INT(11) NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `EscalaPessoal_Usuario` (`Id_Usuario` ASC) ,
  INDEX `EscalaPessoal_Local` (`Id_Local` ASC) ,
  INDEX `EscalaPessoal_Funcao` (`Id_Funcao` ASC) ,
  INDEX `EscalaPessoal_StatusEscala` (`Id_Status_Escala` ASC) ,
  INDEX `EscalaPessoal_Responsavel` (`Id_Responsavel` ASC) ,
  CONSTRAINT `EscalaPessoal_Usuario`
    FOREIGN KEY (`Id_Usuario` )
    REFERENCES `adoradores`.`usuario` (`Id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `EscalaPessoal_Local`
    FOREIGN KEY (`Id_Local` )
    REFERENCES `adoradores`.`local` (`Id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `EscalaPessoal_Funcao`
    FOREIGN KEY (`Id_Funcao` )
    REFERENCES `adoradores`.`funcao` (`Id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `EscalaPessoal_StatusEscala`
    FOREIGN KEY (`Id_Status_Escala` )
    REFERENCES `adoradores`.`status_escala` (`Id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `EscalaPessoal_Responsavel`
    FOREIGN KEY (`Id_Responsavel` )
    REFERENCES `adoradores`.`usuario` (`Id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adoradores`.`usuario_funcao`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`usuario_funcao` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Id_Usuario` INT(11) NOT NULL ,
  `Id_Funcao` INT(11) NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `UsuarioFuncao_Usuario` (`Id_Usuario` ASC) ,
  INDEX `UsuarioFuncao_Funcao` (`Id_Funcao` ASC) ,
  CONSTRAINT `UsuarioFuncao_Usuario`
    FOREIGN KEY (`Id_Usuario` )
    REFERENCES `adoradores`.`usuario` (`Id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `UsuarioFuncao_Funcao`
    FOREIGN KEY (`Id_Funcao` )
    REFERENCES `adoradores`.`funcao` (`Id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adoradores`.`dados`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`dados` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `estaEmCelula` BIT(1) NULL DEFAULT NULL ,
  `diaCelula` INT(11) NULL DEFAULT '-1' ,
  `horaCelula` INT(11) NULL DEFAULT '-1' ,
  `minutoCelula` INT(11) NULL DEFAULT '-1' ,
  `periodoCelula` INT(11) NULL DEFAULT '-1' ,
  `coordenador` BIT(1) NULL DEFAULT NULL ,
  `diaCoordenador` INT(11) NULL DEFAULT '-1' ,
  `frequenciaCoordenador` INT(11) NULL DEFAULT '-1' ,
  `horaCoordenador` INT(11) NULL DEFAULT '-1' ,
  `minutoCoordenador` INT(11) NULL DEFAULT '-1' ,
  `periodoCoordenador` INT(11) NULL DEFAULT '-1' ,
  `discipulador` BIT(1) NULL DEFAULT NULL ,
  `diaDiscipulador` INT(11) NULL DEFAULT '-1' ,
  `frequenciaDiscipulador` INT(11) NULL DEFAULT '-1' ,
  `horaDiscipulador` INT(11) NULL DEFAULT '-1' ,
  `minutoDiscipulador` INT(11) NULL DEFAULT '-1' ,
  `periodoDiscipulador` INT(11) NULL DEFAULT '-1' ,
  `lider` BIT(1) NULL DEFAULT NULL ,
  `nomeLider` VARCHAR(100) NULL DEFAULT NULL ,
  `liderTreinamento` BIT(1) NULL DEFAULT b'0' ,
  `diaLider` INT(11) NULL DEFAULT '-1' ,
  `frequenciaLider` INT(11) NULL DEFAULT '-1' ,
  `horaLider` INT(11) NULL DEFAULT '-1' ,
  `minutoLider` INT(11) NULL DEFAULT '-1' ,
  `periodoLider` INT(11) NULL DEFAULT '-1' ,
  `ccm` BIT(1) NULL DEFAULT NULL ,
  `diaCCM` INT(11) NULL DEFAULT '-1' ,
  `horaCCM` INT(11) NULL DEFAULT '-1' ,
  `minutoCCM` INT(11) NULL DEFAULT '-1' ,
  `periodoCCM` INT(11) NULL DEFAULT '-1' ,
  `manhaDomingo` BIT(1) NULL DEFAULT b'0' ,
  `manhaSegunda` BIT(1) NULL DEFAULT b'0' ,
  `manhaTerca` BIT(1) NULL DEFAULT b'0' ,
  `manhaQuarta` BIT(1) NULL DEFAULT b'0' ,
  `manhaQuinta` BIT(1) NULL DEFAULT b'0' ,
  `manhaSexta` BIT(1) NULL DEFAULT b'0' ,
  `manhaSabado` BIT(1) NULL DEFAULT b'0' ,
  `tardeDomingo` BIT(1) NULL DEFAULT b'0' ,
  `tardeSegunda` BIT(1) NULL DEFAULT b'0' ,
  `tardeTerca` BIT(1) NULL DEFAULT b'0' ,
  `tardeQuarta` BIT(1) NULL DEFAULT b'0' ,
  `tardeQuinta` BIT(1) NULL DEFAULT b'0' ,
  `tardeSexta` BIT(1) NULL DEFAULT b'0' ,
  `tardeSabado` BIT(1) NULL DEFAULT b'0' ,
  `noiteDomingo` BIT(1) NULL DEFAULT b'0' ,
  `noiteSegunda` BIT(1) NULL DEFAULT b'0' ,
  `noiteTerca` BIT(1) NULL DEFAULT b'0' ,
  `noiteQuarta` BIT(1) NULL DEFAULT b'0' ,
  `noiteQuinta` BIT(1) NULL DEFAULT b'0' ,
  `noiteSexta` BIT(1) NULL DEFAULT b'0' ,
  `noiteSabado` BIT(1) NULL DEFAULT b'0' ,
  `observacao` LONGTEXT NULL DEFAULT NULL ,
  `id_usuario` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `dados_usuario` (`id_usuario` ASC) ,
  CONSTRAINT `dados_usuario`
    FOREIGN KEY (`id_usuario` )
    REFERENCES `adoradores`.`usuario` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 90
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adoradores`.`kits_ensaio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adoradores`.`kits_ensaio` (
  `Id` INT NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  `Caminho` VARCHAR(100) NOT NULL ,
  `Id_Funcao` INT(11) NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `kits_funcao` (`Id_Funcao` ASC) ,
  CONSTRAINT `kits_funcao`
    FOREIGN KEY (`Id_Funcao` )
    REFERENCES `adoradores`.`funcao` (`Id` )
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `adoradores`.`ministerio`
-- -----------------------------------------------------
START TRANSACTION;
USE `adoradores`;
INSERT INTO `adoradores`.`ministerio` (`Id`, `Nome`) VALUES (NULL, 'Louvor');

COMMIT;

-- -----------------------------------------------------
-- Data for table `adoradores`.`usuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `adoradores`;
INSERT INTO `adoradores`.`usuario` (`Id`, `Nome`, `Email`, `Senha`, `Id_Ministerio`, `Id_Banda`, `Desabilitado`, `NivelPermissao`, `Aniversario`, `Endereco`, `Telefone`, `Celular`) VALUES (NULL, 'Pedro Xavier', 'phmxavier@gmail.com', 'c1210473c214e0cf5968bf147ed079d9', 1, NULL, 0, 3, NULL, NULL, NULL, NULL);

COMMIT;

-- -----------------------------------------------------
-- Data for table `adoradores`.`banda`
-- -----------------------------------------------------
START TRANSACTION;
USE `adoradores`;
INSERT INTO `adoradores`.`banda` (`Id`, `Nome`, `Id_Lider`) VALUES (NULL, 'Banda Teste', 1);

COMMIT;

-- -----------------------------------------------------
-- Data for table `adoradores`.`local`
-- -----------------------------------------------------
START TRANSACTION;
USE `adoradores`;
INSERT INTO `adoradores`.`local` (`Id`, `Nome`, `Endereco`, `Link_Maps`) VALUES (NULL, 'Ibc2', 'Rua Mar de Espanha', NULL);

COMMIT;

-- -----------------------------------------------------
-- Data for table `adoradores`.`funcao`
-- -----------------------------------------------------
START TRANSACTION;
USE `adoradores`;
INSERT INTO `adoradores`.`funcao` (`Id`, `Nome`) VALUES (NULL, 'Baterista');

COMMIT;

-- -----------------------------------------------------
-- Data for table `adoradores`.`status_escala`
-- -----------------------------------------------------
START TRANSACTION;
USE `adoradores`;
INSERT INTO `adoradores`.`status_escala` (`Id`, `Nome`) VALUES (1, 'Pendente');
INSERT INTO `adoradores`.`status_escala` (`Id`, `Nome`) VALUES (2, 'Confirmada');
INSERT INTO `adoradores`.`status_escala` (`Id`, `Nome`) VALUES (3, 'Recusada');

COMMIT;

-- -----------------------------------------------------
-- Data for table `adoradores`.`usuario_funcao`
-- -----------------------------------------------------
START TRANSACTION;
USE `adoradores`;
INSERT INTO `adoradores`.`usuario_funcao` (`Id`, `Id_Usuario`, `Id_Funcao`) VALUES (NULL, 1, 1);

COMMIT;
