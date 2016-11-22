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

  CREATE TABLE `dbnegocios`.`usuarios` (
  `usuario_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `usuario_email` varchar(128) NOT NULL,
  `usuario_nombre` varchar(128) NOT NULL,
  `usuario_pswd` varchar(128) NOT NULL,
  `usuario_est` char(3) NOT NULL DEFAULT 'ACT',
  `usuario_fchIng` datetime NOT NULL,
  `usuario_exppwd` datetime NOT NULL,
  `usuario_pwdfail` int(11) NOT NULL DEFAULT '0',
  `usuario_lstlgn` datetime NOT NULL,
  PRIMARY KEY (`usuario_id`),
  UNIQUE KEY `usuario_name_UNIQUE` (`usuario_email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
