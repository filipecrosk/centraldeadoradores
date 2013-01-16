CREATE  TABLE IF NOT EXISTS `adoradores`.`arquivo` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  `Mime` VARCHAR(45) NOT NULL ,
  `Tamanho` INT NOT NULL ,
  `Conteudo` MEDIUMBLOB NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;

CREATE  TABLE IF NOT EXISTS `adoradores`.`arquivo_email` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Id_Arquivo` INT(11) NOT NULL ,
  `Id_Email` INT(11) NOT NULL ,
  PRIMARY KEY (`Id`, `Id_Arquivo`, `Id_Email`) ,
  INDEX `fk_arquivo_has_email_header_email_header1` (`Id_Email` ASC) ,
  INDEX `fk_arquivo_has_email_header_arquivo1` (`Id_Arquivo` ASC) ,
  CONSTRAINT `fk_arquivo_has_email_header_arquivo1`
    FOREIGN KEY (`Id_Arquivo` )
    REFERENCES `adoradores`.`arquivo` (`Id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_arquivo_has_email_header_email_header1`
    FOREIGN KEY (`Id_Email` )
    REFERENCES `adoradores`.`email_header` (`Id_Email` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB