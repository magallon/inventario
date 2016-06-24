-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Inventario
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Inventario
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Inventario` DEFAULT CHARACTER SET utf8 ;
USE `Inventario` ;

-- -----------------------------------------------------
-- Table `Inventario`.`departamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Inventario`.`departamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inventario`.`empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Inventario`.`empleado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `Departamento_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Empleado_Departamento_idx` (`Departamento_id` ASC),
  CONSTRAINT `fk_Empleado_Departamento`
    FOREIGN KEY (`Departamento_id`)
    REFERENCES `Inventario`.`departamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inventario`.`equipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Inventario`.`equipo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `marca` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  `serie` VARCHAR(100) NULL,
  `precio` VARCHAR(45) NOT NULL,
  `memoria` VARCHAR(45) NULL,
  `procesador` VARCHAR(45) NULL,
  `caracteristica` VARCHAR(500) NULL,
  `estatus` VARCHAR(45) NOT NULL COMMENT '1.- Asignada\n2.- No funciona\n3.- Partes\n4.- En reparación\n5.- En garantía\n6.- Baja\n7.- Almacenada',
  `tipo` VARCHAR(45) NULL COMMENT '1.-Laptop\n2.-Computadora de Escritorio\n',
  `fecha_instalacion` DATETIME(20) NULL,
  `fecha_compra` DATETIME(20) NOT NULL,
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
CREATE TABLE IF NOT EXISTS `Inventario`.`accesorio` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `marca` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  `serie` VARCHAR(45) NULL,
  `precio` VARCHAR(45) NOT NULL,
  `caracteristica` VARCHAR(500) NULL COMMENT 'Caracteristicas adicionales que ayuden a identificar el accesorio',
  `estatus` VARCHAR(45) NOT NULL COMMENT '1.- Asignada\n2.- No funciona\n3.- Partes\n4.- En reparación\n5.- En garantía\n6.- Baja\n7.- Almacenada',
  `fecha_instalacion` DATETIME NULL,
  `fecha_compra` DATETIME NOT NULL,
  `Equipo_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_accesorio_Equipo1_idx` (`Equipo_id` ASC),
  CONSTRAINT `fk_accesorio_Equipo1`
    FOREIGN KEY (`Equipo_id`)
    REFERENCES `Inventario`.`equipo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inventario`.`impresora`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Inventario`.`impresora` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `marca` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  `serie` VARCHAR(100) NULL,
  `precio` VARCHAR(45) NOT NULL,
  `caracteristica` VARCHAR(500) NULL COMMENT 'Caracteristicas adicionales que ayuden a identificar mejor la impresora',
  `estatus` VARCHAR(45) NOT NULL COMMENT '1.- Asignada\n2.- No funciona\n3.- Partes\n4.- En reparación\n5.- En garantía\n6.- Baja\n7.- Almacenada',
  `tipo` VARCHAR(45) NULL COMMENT '1.- Impresoras Laser\n2.-Inyeccion de tinta',
  `fecha_instalacion` DATETIME(20) NULL,
  `fecha_compra` DATETIME(20) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inventario`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Inventario`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre_usuario` VARCHAR(45) NULL,
  `contraseña` VARCHAR(80) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inventario`.`mantenimiento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Inventario`.`mantenimiento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `estatus` VARCHAR(45) NOT NULL COMMENT 'define el tipo de mantenimiento que se efectuo\n\n1.- Preventivo\n2.- Correctivo',
  `fecha_mantenimiento` DATETIME(20) NOT NULL,
  `descripcion` VARCHAR(500) NULL COMMENT 'se coloca el motivo o que fue lo que se le hizo de mantenimiento',
  `impresora_id` INT NOT NULL,
  `Equipo_id` INT NOT NULL,
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
CREATE TABLE IF NOT EXISTS `Inventario`.`departamento_has_impresora` (
  `departamento_id` INT NOT NULL,
  `impresora_id` INT NOT NULL,
  PRIMARY KEY (`departamento_id`, `impresora_id`),
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
