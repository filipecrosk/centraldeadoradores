CREATE  TABLE IF NOT EXISTS `adoradores`.`arquivo` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  `Mime` VARCHAR(45) NOT NULL ,
  `Tamanho` INT NOT NULL ,
  `Conteudo` MEDIUMBLOB NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;

ALTER TABLE `adoradores`.`email_header` ADD `Id_Arquivo` INT(11) NULL;

ALTER TABLE `adoradores`.`email_header`
ADD CONSTRAINT `email_arquivo`
FOREIGN KEY (`Id_Arquivo` )
REFERENCES `adoradores`.`arquivo` (`Id` )
ON DELETE CASCADE
ON UPDATE CASCADE;