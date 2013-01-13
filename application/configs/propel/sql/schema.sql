
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- banda
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `banda`;

CREATE TABLE `banda`
(
    `Id` INTEGER NOT NULL AUTO_INCREMENT,
    `Nome` VARCHAR(45) NOT NULL,
    `Id_Lider` INTEGER,
    PRIMARY KEY (`Id`),
    INDEX `Banda_Lider` (`Id_Lider`),
    CONSTRAINT `Banda_Lider`
        FOREIGN KEY (`Id_Lider`)
        REFERENCES `usuario` (`Id`)
        ON DELETE SET NULL
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- dados
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `dados`;

CREATE TABLE `dados`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `estaEmCelula` bit(1),
    `diaCelula` INTEGER DEFAULT -1,
    `horaCelula` INTEGER DEFAULT -1,
    `minutoCelula` INTEGER DEFAULT -1,
    `periodoCelula` INTEGER DEFAULT -1,
    `coordenador` bit(1),
    `diaCoordenador` INTEGER DEFAULT -1,
    `frequenciaCoordenador` INTEGER DEFAULT -1,
    `horaCoordenador` INTEGER DEFAULT -1,
    `minutoCoordenador` INTEGER DEFAULT -1,
    `periodoCoordenador` INTEGER DEFAULT -1,
    `discipulador` bit(1),
    `diaDiscipulador` INTEGER DEFAULT -1,
    `frequenciaDiscipulador` INTEGER DEFAULT -1,
    `horaDiscipulador` INTEGER DEFAULT -1,
    `minutoDiscipulador` INTEGER DEFAULT -1,
    `periodoDiscipulador` INTEGER DEFAULT -1,
    `lider` bit(1),
    `nomeLider` VARCHAR(100),
    `liderTreinamento` bit(1) DEFAULT 'b\'0\'',
    `diaLider` INTEGER DEFAULT -1,
    `frequenciaLider` INTEGER DEFAULT -1,
    `horaLider` INTEGER DEFAULT -1,
    `minutoLider` INTEGER DEFAULT -1,
    `periodoLider` INTEGER DEFAULT -1,
    `ccm` bit(1),
    `diaCCM` INTEGER DEFAULT -1,
    `horaCCM` INTEGER DEFAULT -1,
    `minutoCCM` INTEGER DEFAULT -1,
    `periodoCCM` INTEGER DEFAULT -1,
    `manhaDomingo` bit(1) DEFAULT 'b\'0\'',
    `manhaSegunda` bit(1) DEFAULT 'b\'0\'',
    `manhaTerca` bit(1) DEFAULT 'b\'0\'',
    `manhaQuarta` bit(1) DEFAULT 'b\'0\'',
    `manhaQuinta` bit(1) DEFAULT 'b\'0\'',
    `manhaSexta` bit(1) DEFAULT 'b\'0\'',
    `manhaSabado` bit(1) DEFAULT 'b\'0\'',
    `tardeDomingo` bit(1) DEFAULT 'b\'0\'',
    `tardeSegunda` bit(1) DEFAULT 'b\'0\'',
    `tardeTerca` bit(1) DEFAULT 'b\'0\'',
    `tardeQuarta` bit(1) DEFAULT 'b\'0\'',
    `tardeQuinta` bit(1) DEFAULT 'b\'0\'',
    `tardeSexta` bit(1) DEFAULT 'b\'0\'',
    `tardeSabado` bit(1) DEFAULT 'b\'0\'',
    `noiteDomingo` bit(1) DEFAULT 'b\'0\'',
    `noiteSegunda` bit(1) DEFAULT 'b\'0\'',
    `noiteTerca` bit(1) DEFAULT 'b\'0\'',
    `noiteQuarta` bit(1) DEFAULT 'b\'0\'',
    `noiteQuinta` bit(1) DEFAULT 'b\'0\'',
    `noiteSexta` bit(1) DEFAULT 'b\'0\'',
    `noiteSabado` bit(1) DEFAULT 'b\'0\'',
    `observacao` LONGTEXT,
    `id_usuario` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `dados_usuario` (`id_usuario`),
    CONSTRAINT `dados_usuario`
        FOREIGN KEY (`id_usuario`)
        REFERENCES `usuario` (`Id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- email_detail
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `email_detail`;

CREATE TABLE `email_detail`
(
    `Id_Email_Enviado` INTEGER NOT NULL AUTO_INCREMENT,
    `Id_Email` INTEGER NOT NULL,
    `Id_Destinatarios` INTEGER NOT NULL,
    `Enviado` TINYINT(1) DEFAULT 0 NOT NULL,
    PRIMARY KEY (`Id_Email_Enviado`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- email_header
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `email_header`;

CREATE TABLE `email_header`
(
    `Id_Email` INTEGER NOT NULL AUTO_INCREMENT,
    `Id_Usuario` INTEGER NOT NULL,
    `Data_Cadastro` DATETIME NOT NULL,
    `Assunto` VARCHAR(50) NOT NULL,
    `Corpo_Mensagem` LONGTEXT NOT NULL,
    PRIMARY KEY (`Id_Email`),
    INDEX `email_usuario` (`Id_Usuario`),
    CONSTRAINT `email_usuario`
        FOREIGN KEY (`Id_Usuario`)
        REFERENCES `usuario` (`Id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- escala_pessoa
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `escala_pessoa`;

CREATE TABLE `escala_pessoa`
(
    `Id` INTEGER NOT NULL AUTO_INCREMENT,
    `Id_Usuario` INTEGER NOT NULL,
    `Id_Local` INTEGER NOT NULL,
    `Id_Funcao` INTEGER NOT NULL,
    `Data` DATETIME NOT NULL,
    `Id_Status_Escala` INTEGER DEFAULT 1 NOT NULL,
    `Id_Responsavel` INTEGER NOT NULL,
    PRIMARY KEY (`Id`),
    INDEX `EscalaPessoal_Usuario` (`Id_Usuario`),
    INDEX `EscalaPessoal_Local` (`Id_Local`),
    INDEX `EscalaPessoal_Funcao` (`Id_Funcao`),
    INDEX `EscalaPessoal_StatusEscala` (`Id_Status_Escala`),
    INDEX `EscalaPessoal_Responsavel` (`Id_Responsavel`),
    CONSTRAINT `EscalaPessoal_Funcao`
        FOREIGN KEY (`Id_Funcao`)
        REFERENCES `funcao` (`Id`),
    CONSTRAINT `EscalaPessoal_Local`
        FOREIGN KEY (`Id_Local`)
        REFERENCES `local` (`Id`),
    CONSTRAINT `EscalaPessoal_Responsavel`
        FOREIGN KEY (`Id_Responsavel`)
        REFERENCES `usuario` (`Id`),
    CONSTRAINT `EscalaPessoal_StatusEscala`
        FOREIGN KEY (`Id_Status_Escala`)
        REFERENCES `status_escala` (`Id`),
    CONSTRAINT `EscalaPessoal_Usuario`
        FOREIGN KEY (`Id_Usuario`)
        REFERENCES `usuario` (`Id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- funcao
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `funcao`;

CREATE TABLE `funcao`
(
    `Id` INTEGER NOT NULL AUTO_INCREMENT,
    `Nome` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`Id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- kits_ensaio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `kits_ensaio`;

CREATE TABLE `kits_ensaio`
(
    `Id` INTEGER NOT NULL AUTO_INCREMENT,
    `Nome` VARCHAR(45) NOT NULL,
    `Caminho` VARCHAR(100) NOT NULL,
    `Id_Funcao` INTEGER NOT NULL,
    PRIMARY KEY (`Id`),
    INDEX `kits_funcao` (`Id_Funcao`),
    CONSTRAINT `kits_funcao`
        FOREIGN KEY (`Id_Funcao`)
        REFERENCES `funcao` (`Id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- local
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `local`;

CREATE TABLE `local`
(
    `Id` INTEGER NOT NULL AUTO_INCREMENT,
    `Nome` VARCHAR(45) NOT NULL,
    `Endereco` VARCHAR(100) NOT NULL,
    `Link_Maps` VARCHAR(45),
    PRIMARY KEY (`Id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- ministerio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ministerio`;

CREATE TABLE `ministerio`
(
    `Id` INTEGER NOT NULL AUTO_INCREMENT,
    `Nome` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`Id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- status_escala
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `status_escala`;

CREATE TABLE `status_escala`
(
    `Id` INTEGER NOT NULL AUTO_INCREMENT,
    `Nome` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`Id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- usuario
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario`
(
    `Id` INTEGER NOT NULL AUTO_INCREMENT,
    `Nome` VARCHAR(50) NOT NULL,
    `Apelido` VARCHAR(50),
    `Email` VARCHAR(50) NOT NULL,
    `Senha` VARCHAR(50) NOT NULL,
    `Id_Ministerio` INTEGER,
    `Id_Banda` INTEGER,
    `Desabilitado` TINYINT(1) DEFAULT 0 NOT NULL,
    `NivelPermissao` INTEGER DEFAULT 1 NOT NULL,
    `Aniversario` VARCHAR(5),
    `Endereco` VARCHAR(100),
    `Telefone` VARCHAR(13),
    `Celular` VARCHAR(13),
    PRIMARY KEY (`Id`),
    INDEX `Usuario_Ministerio` (`Id_Ministerio`),
    INDEX `Usuario_Banda` (`Id_Banda`),
    CONSTRAINT `Usuario_Banda`
        FOREIGN KEY (`Id_Banda`)
        REFERENCES `banda` (`Id`),
    CONSTRAINT `Usuario_Ministerio`
        FOREIGN KEY (`Id_Ministerio`)
        REFERENCES `ministerio` (`Id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- usuario_funcao
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuario_funcao`;

CREATE TABLE `usuario_funcao`
(
    `Id` INTEGER NOT NULL AUTO_INCREMENT,
    `Id_Usuario` INTEGER NOT NULL,
    `Id_Funcao` INTEGER NOT NULL,
    PRIMARY KEY (`Id`),
    INDEX `UsuarioFuncao_Usuario` (`Id_Usuario`),
    INDEX `UsuarioFuncao_Funcao` (`Id_Funcao`),
    CONSTRAINT `UsuarioFuncao_Funcao`
        FOREIGN KEY (`Id_Funcao`)
        REFERENCES `funcao` (`Id`),
    CONSTRAINT `UsuarioFuncao_Usuario`
        FOREIGN KEY (`Id_Usuario`)
        REFERENCES `usuario` (`Id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- usuario_ministerio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuario_ministerio`;

CREATE TABLE `usuario_ministerio`
(
    `Id` INTEGER NOT NULL AUTO_INCREMENT,
    `Id_Usuario` INTEGER NOT NULL,
    `Id_Ministerio` INTEGER NOT NULL,
    PRIMARY KEY (`Id`),
    INDEX `usuario_ministerio_usuario` (`Id_Usuario`),
    INDEX `usuario_ministerio_ministerio` (`Id_Ministerio`),
    CONSTRAINT `usuario_ministerio_ministerio`
        FOREIGN KEY (`Id_Ministerio`)
        REFERENCES `ministerio` (`Id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `usuario_ministerio_usuario`
        FOREIGN KEY (`Id_Usuario`)
        REFERENCES `usuario` (`Id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
