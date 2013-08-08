CREATE  TABLE IF NOT EXISTS `adoradores`.`email_detail` (
  `Id_Email_Enviado` INT(11) NOT NULL AUTO_INCREMENT ,
  `Id_Email` INT(11) NOT NULL ,
  `Id_Destinatario` INT(11) NOT NULL ,
  `Enviado` TINYINT(1) NOT NULL DEFAULT 0 ,
  PRIMARY KEY (`Id_Email_Enviado`) )
ENGINE = InnoDB