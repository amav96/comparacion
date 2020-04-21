---------------------------------------
	CREATE TABLE `referencia` (
	  `sin_15` varchar(20) DEFAULT NULL,
	  `tipo` varchar(20) DEFAULT NULL,
	  `empresa` varchar(20) DEFAULT NULL,
	  `servicio` varchar(20) DEFAULT NULL,
	  `modalidad` varchar(20) DEFAULT NULL,
	  `localidad` varchar(20) DEFAULT NULL,
	  `indicativo` varchar(20) DEFAULT NULL,
	  `bloque` varchar(20) DEFAULT NULL,
	  `resolucion` varchar(20) DEFAULT NULL,
	  `fecha` varchar(20) DEFAULT NULL,
	  `reemplazar_por` varchar(20) DEFAULT NULL,
	  `caracteres` varchar(20) DEFAULT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;
---------------------------------------
	CREATE TABLE numeros(
		id_num INT PRIMARY KEY AUTO_INCREMENT,
		telefono VARCHAR(12) NULL DEFAULT NULL,
		buscar CHAR(6) NULL DEFAULT NULL,
		buscar_dos CHAR(8) NULL DEFAULT NULL,
		ident VARCHAR(20) NULL DEFAULT NULL
	);
---------------------------------------