CREATE  TABLE IF NOT EXISTS `adoradores`.`escala_pessoa_funcao` (
  `Id_Escala_Pessoa_Funcao` INT(11) NOT NULL AUTO_INCREMENT ,
  `Id_Escala_Pessoa` INT(11) NOT NULL ,
  `Id_Funcao` INT(11) NOT NULL ,
  PRIMARY KEY (`Id_Escala_Pessoa_Funcao`) ,
  INDEX `escala_pessoa_funcao_escala_pessoa` (`Id_Escala_Pessoa` ASC) ,
  INDEX `escala_pessoa_funcao_funcao` (`Id_Funcao` ASC) ,
  CONSTRAINT `escala_pessoa_funcao_escala_pessoa`
    FOREIGN KEY (`Id_Escala_Pessoa` )
    REFERENCES `adoradores`.`escala_pessoa` (`Id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `escala_pessoa_funcao_funcao`
    FOREIGN KEY (`Id_Funcao` )
    REFERENCES `adoradores`.`funcao` (`Id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB