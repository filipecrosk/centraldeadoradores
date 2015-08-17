CREATE  TABLE IF NOT EXISTS `adoradores`.`conta_email` (
  `Id_Conta_Email` INT(11) NOT NULL AUTO_INCREMENT ,
  `UserName` VARCHAR(100) NOT NULL ,
  `Password` VARCHAR(45) NOT NULL ,
  `Emails_Enviados` INT NOT NULL DEFAULT 0 ,
  `Ultimo_Envio` DATETIME NOT NULL ,
  PRIMARY KEY (`Id_Conta_Email`) )
ENGINE = InnoDB