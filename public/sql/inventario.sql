SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `Inventario` ;
CREATE SCHEMA IF NOT EXISTS `Inventario` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Inventario` ;

-- -----------------------------------------------------
-- Table `Inventario`.`departamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Inventario`.`departamento` ;

CREATE TABLE IF NOT EXISTS `Inventario`.`departamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inventario`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Inventario`.`usuario` ;

CREATE TABLE IF NOT EXISTS `Inventario`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre_usuario` VARCHAR(45) NULL,
  `contraseña` VARCHAR(80) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inventario`.`empleado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Inventario`.`empleado` ;

CREATE TABLE IF NOT EXISTS `Inventario`.`empleado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `Departamento_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Empleado_Departamento_idx` (`Departamento_id` ASC),
  INDEX `fk_empleado_usuario1_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_Empleado_Departamento`
    FOREIGN KEY (`Departamento_id`)
    REFERENCES `Inventario`.`departamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_empleado_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `Inventario`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inventario`.`equipo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Inventario`.`equipo` ;

CREATE TABLE IF NOT EXISTS `Inventario`.`equipo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `marca` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  `serie` VARCHAR(100) NULL,
  `precio` VARCHAR(45) NOT NULL,
  `memoria` VARCHAR(45) NULL,
  `procesador` VARCHAR(45) NULL,
  `caracteristica` TEXT NULL,
  `estatus` VARCHAR(45) NOT NULL COMMENT '1.- Asignada\n2.- No funciona\n3.- Partes\n4.- En reparación\n5.- En garantía\n6.- Baja\n7.- Almacenada',
  `tipo` VARCHAR(45) NULL COMMENT '1.-Laptop\n2.-Computadora de Escritorio\n',
  `fecha_instalacion` DATETIME NULL,
  `fecha_compra` DATETIME NOT NULL,
  `Empleado_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Equipo_Empleado1_idx` (`Empleado_id` ASC),
  CONSTRAINT `fk_Equipo_Empleado1`
    FOREIGN KEY (`Empleado_id`)
    REFERENCES `Inventario`.`empleado` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inventario`.`accesorio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Inventario`.`accesorio` ;

CREATE TABLE IF NOT EXISTS `Inventario`.`accesorio` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `marca` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  `serie` VARCHAR(45) NULL,
  `precio` VARCHAR(45) NOT NULL,
  `caracteristica` TEXT NULL COMMENT 'Caracteristicas adicionales que ayuden a identificar el accesorio',
  `estatus` VARCHAR(45) NOT NULL COMMENT '1.- Asignada\n2.- No funciona\n3.- Partes\n4.- En reparación\n5.- En garantía\n6.- Baja\n7.- Almacenada',
  `fecha_instalacion` DATETIME NULL,
  `fecha_compra` DATETIME NOT NULL,
  `equipo_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_accesorio_equipo1_idx` (`equipo_id` ASC),
  CONSTRAINT `fk_accesorio_equipo1`
    FOREIGN KEY (`equipo_id`)
    REFERENCES `Inventario`.`equipo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inventario`.`impresora`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Inventario`.`impresora` ;

CREATE TABLE IF NOT EXISTS `Inventario`.`impresora` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `marca` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  `serie` VARCHAR(100) NULL,
  `precio` VARCHAR(45) NOT NULL,
  `caracteristica` TEXT NULL COMMENT 'Caracteristicas adicionales que ayuden a identificar mejor la impresora',
  `estatus` VARCHAR(45) NOT NULL COMMENT '1.- Asignada\n2.- No funciona\n3.- Partes\n4.- En reparación\n5.- En garantía\n6.- Baja\n7.- Almacenada',
  `tipo` VARCHAR(45) NULL COMMENT '1.- Impresoras Laser\n2.-Inyeccion de tinta',
  `fecha_instalacion` DATETIME NULL,
  `fecha_compra` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inventario`.`mantenimiento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Inventario`.`mantenimiento` ;

CREATE TABLE IF NOT EXISTS `Inventario`.`mantenimiento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `estatus` VARCHAR(45) NOT NULL COMMENT 'define el tipo de mantenimiento que se efectuo\n\n1.- Preventivo\n2.- Correctivo',
  `fecha_mantenimiento` DATETIME NOT NULL,
  `descripcion` TEXT NULL COMMENT 'se coloca el motivo o que fue lo que se le hizo de mantenimiento',
  `impresora_id` INT NULL,
  `Equipo_id` INT NULL,
  `tipo_mantenimiento` INT NULL COMMENT '1 Correctivo\n2 Preventivo',
  PRIMARY KEY (`id`),
  INDEX `fk_mantenimiento_impresora1_idx` (`impresora_id` ASC),
  INDEX `fk_mantenimiento_Equipo1_idx` (`Equipo_id` ASC),
  CONSTRAINT `fk_mantenimiento_impresora1`
    FOREIGN KEY (`impresora_id`)
    REFERENCES `Inventario`.`impresora` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_mantenimiento_Equipo1`
    FOREIGN KEY (`Equipo_id`)
    REFERENCES `Inventario`.`equipo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inventario`.`departamento_has_impresora`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Inventario`.`departamento_has_impresora` ;

CREATE TABLE IF NOT EXISTS `Inventario`.`departamento_has_impresora` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `departamento_id` INT NOT NULL,
  `impresora_id` INT NOT NULL,
  PRIMARY KEY (`id`, `departamento_id`, `impresora_id`),
  INDEX `fk_departamento_has_impresora_impresora1_idx` (`impresora_id` ASC),
  INDEX `fk_departamento_has_impresora_departamento1_idx` (`departamento_id` ASC),
  CONSTRAINT `fk_departamento_has_impresora_departamento1`
    FOREIGN KEY (`departamento_id`)
    REFERENCES `Inventario`.`departamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_departamento_has_impresora_impresora1`
    FOREIGN KEY (`impresora_id`)
    REFERENCES `Inventario`.`impresora` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
