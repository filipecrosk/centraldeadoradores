CREATE  TABLE IF NOT EXISTS `adoradores`.`email_header` (
  `Id_Email` INT(11) NOT NULL AUTO_INCREMENT ,
  `Id_Usuario` INT(11) NOT NULL ,
  `Data_Cadastro` DATETIME NOT NULL ,
  `Assunto` VARCHAR(50) NOT NULL ,
  `Corpo_Mensagem` LONGTEXT NOT NULL ,
  PRIMARY KEY (`Id_Email`) ,
  INDEX `email_usuario` (`Id_Usuario` ASC) ,
  CONSTRAINT `email_usuario`
    FOREIGN KEY (`Id_Usuario` )
    REFERENCES `adoradores`.`usuario` (`Id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB
