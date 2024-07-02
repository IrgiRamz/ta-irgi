SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `db_chatbot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `db_chatbot` ;

-- -----------------------------------------------------
-- Table `db_chatbot`.`user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_chatbot`.`user` (
  `iduser` INT(20) NOT NULL AUTO_INCREMENT ,
  `kodeuser` VARCHAR(100) NOT NULL ,
  `nama` VARCHAR(225) NOT NULL ,
  `email` VARCHAR(125) NOT NULL ,
  `password` VARCHAR(100) NOT NULL ,
  `telepon` VARCHAR(100) NULL ,
  `role` TEXT NOT NULL ,
  `status` TEXT NULL ,
  PRIMARY KEY (`iduser`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_chatbot`.`produkjasa`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_chatbot`.`produkjasa` (
  `idproduk` INT(20) NOT NULL AUTO_INCREMENT ,
  `kodeproduk` VARCHAR(100) NOT NULL ,
  `namaproduk` VARCHAR(225) NOT NULL ,
  `harga` FLOAT NOT NULL ,
  `deskripsi` TEXT NULL ,
  `gambar` VARCHAR(225) NULL ,
  `status` TEXT NULL ,
  PRIMARY KEY (`idproduk`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_chatbot`.`pertanyaan`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_chatbot`.`pertanyaan` (
  `idpertanyaan` INT(20) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `pertanyaan` TEXT NOT NULL ,
  `jawaban` TEXT NOT NULL ,
  `status` TEXT NULL ,
  `iduser` INT(20) NOT NULL ,
  PRIMARY KEY (`idpertanyaan`) ,
  INDEX `fk_pertanyaan_user1` (`iduser` ASC) ,
  CONSTRAINT `fk_pertanyaan_user1`
    FOREIGN KEY (`iduser` )
    REFERENCES `db_chatbot`.`user` (`iduser` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_chatbot`.`metodebayar`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_chatbot`.`metodebayar` (
  `idbayar` INT(20) NOT NULL AUTO_INCREMENT ,
  `kode` VARCHAR(100) NOT NULL ,
  `pembayaran` VARCHAR(225) NOT NULL ,
  `norek` VARCHAR(125) NOT NULL ,
  `status` TEXT NULL ,
  PRIMARY KEY (`idbayar`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_chatbot`.`pesanan`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_chatbot`.`pesanan` (
  `idpesanan` INT(20) NOT NULL AUTO_INCREMENT ,
  `invoice` VARCHAR(100) NOT NULL ,
  `namapemesan` VARCHAR(225) NOT NULL ,
  `emailpemesan` VARCHAR(125) NOT NULL ,
  `nohp` VARCHAR(100) NOT NULL ,
  `namaklinik` VARCHAR(100) NOT NULL ,
  `lamapakai` VARCHAR(45) NOT NULL ,
  `alamat` VARCHAR(100) NOT NULL ,
  `domain` VARCHAR(100) NOT NULL ,
  `waktupesan` DATETIME NOT NULL ,
  `bukti` VARCHAR(225) NULL ,
  `catatan` TEXT NULL ,
  `status` TEXT NULL ,
  `idproduk` INT(20) NOT NULL ,
  `iduser` INT(20) NOT NULL ,
  `idbayar` INT(20) NOT NULL ,
  PRIMARY KEY (`idpesanan`) ,
  INDEX `fk_pesanan_produkjasa` (`idproduk` ASC) ,
  INDEX `fk_pesanan_user1` (`iduser` ASC) ,
  INDEX `fk_pesanan_metodebayar1` (`idbayar` ASC) ,
  CONSTRAINT `fk_pesanan_produkjasa`
    FOREIGN KEY (`idproduk` )
    REFERENCES `db_chatbot`.`produkjasa` (`idproduk` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesanan_user1`
    FOREIGN KEY (`iduser` )
    REFERENCES `db_chatbot`.`user` (`iduser` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesanan_metodebayar1`
    FOREIGN KEY (`idbayar` )
    REFERENCES `db_chatbot`.`metodebayar` (`idbayar` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
