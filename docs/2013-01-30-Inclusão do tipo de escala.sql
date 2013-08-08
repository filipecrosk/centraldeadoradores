CREATE  TABLE IF NOT EXISTS `adoradores`.`tipo_escala` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;
ALTER TABLE `escala_pessoa` ADD COLUMN `Id_Tipo_Escala` INT(11);
ALTER TABLE `escala_pessoa` ADD FOREIGN KEY (`Id_Tipo_Escala`) REFERENCES `tipo_escala` (`Id`);
CREATE INDEX `fk_escala_pessoa_tipo_escala1` ON `escala_pessoa` (`Id_Tipo_Escala` ASC) USING BTREE;
INSERT INTO `adoradores`.`tipo_escala` (`Id`, `Nome`) VALUES (1, 'Louvor');
INSERT INTO `adoradores`.`tipo_escala` (`Id`, `Nome`) VALUES (2, 'Ensaio');
update escala_pessoa set `Id_Tipo_Escala` = 1;