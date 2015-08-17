SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

ALTER TABLE `adoradores`.`usuario` DROP FOREIGN KEY `Usuario_Ministerio` ;

ALTER TABLE `adoradores`.`usuario` CHANGE COLUMN `Id_Ministerio` `Id_Ministerio` INT(11) NULL DEFAULT NULL  , 
  ADD CONSTRAINT `Usuario_Ministerio`
  FOREIGN KEY (`Id_Ministerio` )
  REFERENCES `adoradores`.`ministerio` (`Id` )
  ON DELETE RESTRICT
  ON UPDATE RESTRICT;

CREATE  TABLE IF NOT EXISTS `adoradores`.`usuario_ministerio` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Id_Usuario` INT(11) NOT NULL ,
  `Id_Ministerio` INT(11) NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `usuario_ministerio_usuario` (`Id_Usuario` ASC) ,
  INDEX `usuario_ministerio_ministerio` (`Id_Ministerio` ASC) ,
  CONSTRAINT `usuario_ministerio_usuario`
    FOREIGN KEY (`Id_Usuario` )
    REFERENCES `adoradores`.`usuario` (`Id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `usuario_ministerio_ministerio`
    FOREIGN KEY (`Id_Ministerio` )
    REFERENCES `adoradores`.`ministerio` (`Id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
