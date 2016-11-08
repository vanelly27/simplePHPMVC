CREATE SCHEMA `dbnegocios` ;

CREATE TABLE `dbnegocios`.`productos` (
  `productoid` BIGINT(11) NOT NULL AUTO_INCREMENT,
  `productobarra` VARCHAR(128) NULL,
  `productocod` VARCHAR(45) NOT NULL,
  `productodsc` VARCHAR(128) NULL,
  `productoest` CHAR(3) NULL,
  `productoimg` VARCHAR(128) NULL,
  PRIMARY KEY (`productoid`),
  UNIQUE INDEX `productocod_UNIQUE` (`productocod` ASC));

  INSERT INTO `dbnegocios`.`productos` (`productobarra`, `productocod`, `productodsc`, `productoest`, `productoimg`) VALUES ('12345678', 'P00001', 'Leche Entera', 'ACT', 'public/prdimg/P00001.png');
  INSERT INTO `dbnegocios`.`productos` (`productobarra`, `productocod`, `productodsc`, `productoest`, `productoimg`) VALUES ('987654321', 'P00002', 'Queso Santa Elena', 'ACT', 'public/prdimg/P00002.png');
