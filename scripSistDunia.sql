SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `SistDunia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `SistDunia` ;

-- -----------------------------------------------------
-- Table `SistDunia`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SistDunia`.`producto` (
  `idproducto` INT NOT NULL,
  `nom_pro` VARCHAR(45) NULL,
  `unidad_med` VARCHAR(45) NULL,
  `precio` DECIMAL(10) NULL,
  PRIMARY KEY (`idproducto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SistDunia`.`comida`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SistDunia`.`comida` (
  `idcomida` INT NOT NULL,
  `nom_com` VARCHAR(45) NULL,
  `tipo_com` VARCHAR(45) NULL,
  `producto_idproducto` INT NULL,
  PRIMARY KEY (`idcomida`),
  INDEX `fk_comida_producto1_idx` (`producto_idproducto` ASC),
  CONSTRAINT `fk_comida_producto1`
    FOREIGN KEY (`producto_idproducto`)
    REFERENCES `SistDunia`.`producto` (`idproducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SistDunia`.`actividad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SistDunia`.`actividad` (
  `idactividad` INT NULL,
  `nom_act` VARCHAR(45) NULL,
  `fech_ini` DATETIME NULL,
  `fech_fin` DATETIME NULL,
  PRIMARY KEY (`idactividad`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SistDunia`.`menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SistDunia`.`menu` (
  `idmenu` INT NOT NULL,
  `comida_idcomida` INT NULL,
  `actividad_idactividad` INT NULL,
  PRIMARY KEY (`idmenu`),
  INDEX `fk_menu_comida1_idx` (`comida_idcomida` ASC),
  INDEX `fk_menu_actividad1_idx` (`actividad_idactividad` ASC),
  CONSTRAINT `fk_menu_comida1`
    FOREIGN KEY (`comida_idcomida`)
    REFERENCES `SistDunia`.`comida` (`idcomida`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_menu_actividad1`
    FOREIGN KEY (`actividad_idactividad`)
    REFERENCES `SistDunia`.`actividad` (`idactividad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SistDunia`.`Uusuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SistDunia`.`Uusuario` (
  `idUusuario` INT NOT NULL,
  `nombre` VARCHAR(20) NULL,
  `contraseña` VARCHAR(8) NULL,
  `menu_idmenu` INT NULL,
  PRIMARY KEY (`idUusuario`),
  INDEX `fk_Uusuario_menu1_idx` (`menu_idmenu` ASC),
  CONSTRAINT `fk_Uusuario_menu1`
    FOREIGN KEY (`menu_idmenu`)
    REFERENCES `SistDunia`.`menu` (`idmenu`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
