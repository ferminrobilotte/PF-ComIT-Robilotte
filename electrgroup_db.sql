-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para electrogroup_db
CREATE DATABASE IF NOT EXISTS `electrogroup_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `electrogroup_db`;

-- Volcando estructura para tabla electrogroup_db.articulo
CREATE TABLE IF NOT EXISTS `articulo` (
  `idArticulo` int(45) NOT NULL AUTO_INCREMENT,
  `Precio` decimal(11,0) DEFAULT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Stock` int(45) DEFAULT NULL,
  `Descripcion` text,
  `Imagen` varchar(255) DEFAULT NULL,
  `Categoria` varchar(255) DEFAULT NULL,
  `Marca` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idArticulo`),
  KEY `fk_idarticulo` (`idArticulo`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla electrogroup_db.articulo: ~55 rows (aproximadamente)
/*!40000 ALTER TABLE `articulo` DISABLE KEYS */;
INSERT INTO `articulo` (`idArticulo`, `Precio`, `Nombre`, `Stock`, `Descripcion`, `Imagen`, `Categoria`, `Marca`) VALUES
	(1, 6499, 'TV LED SMART 32" J4300', 1, NULL, 'SMART TV SAMSUNG 4300.jpg', 'TV', 'Samsung'),
	(2, 6499, 'TV 40 SMART 3D J6400', 1, NULL, 'SAMSUNG 40 SMART 3D J6400.jpg', 'TV', 'Samsung'),
	(3, 17599, 'TV LG FULL HD 49 LH 5700', 1, NULL, 'TV LG FULL HD 49 LH 5700 (2).jpg', 'TV', 'LG'),
	(4, 16999, 'NOTEBOOK 14-BS022LA', 1, NULL, 'NOTEBOOK 14-BS022LA-2-.jpg', 'Informatica', 'HP'),
	(5, 8299, 'NOTEBOOK 110-15IBR', 1, NULL, 'NOTEBOOK LENOVO 110-15IBR.jpg', 'Informatica', 'Lenovo'),
	(6, 11999, 'PLAY STATION 4 500GB 3 JUEGOS 1 JOISTIK', 1, NULL, 'PS4.jpg', 'Informatica', 'Sony'),
	(7, 3399, 'TABLET 10.1" CURI PCB-T101', 1, NULL, 'TABLET PCBOX 10.1.jpg', 'Informatica', 'PCBOX'),
	(8, 1549, 'LICUADORA HR2031/90', 0, NULL, 'LICUADORA PHILIPS HR2031.jpg', 'Electrodomesticos', 'Philips'),
	(9, 649, 'PAVA ELECTRICA 5712', 1, NULL, 'PAVA ATMA 5712.jpg', 'Electrodomesticos', 'Atma'),
	(10, 999, 'PAVA ELECTRICA HD4691/20', 1, NULL, 'PAVA ELECTRICA PHILIPS HD4691.png', 'Electrodomesticos', 'Philips'),
	(11, 869, 'CAFETERA HD7447/20', 1, NULL, 'CAFETERA PHILIPS HD7447-20(1).png', 'Electrodomesticos', 'Philips'),
	(12, 899, 'SANDWICHERA HD2393', 1, NULL, 'SANDWICHERA PHILIPS 2393.jpg', 'Electrodomesticos', 'Philips'),
	(13, 899, 'TOSTADORA HD2586/20', 1, NULL, 'TOSTADORA PHILIPS HD2586-20.jpg', 'Electrodomesticos', 'Philips'),
	(14, 9399, 'AIRE ACONDICIONADO 3200 FRIO', 1, NULL, 'aire-acondicionado-tcl-sense-eco-taca-3200-csa-kc-frio.jpg', 'Climatizacion', 'TCL'),
	(15, 3299, 'MICROONDAS 30L MD930GXN', 1, NULL, 'MICROONDAS 30L MD930GXN.jpg', 'Cocina', 'Atma'),
	(16, 2199, 'MICROONDAS PHILCO MPD 8620', 1, NULL, 'MICROONDAS PHILCO MPD 8620.jpg', 'Cocina', 'Philco'),
	(17, 7699, 'FREEZER 120L', 1, NULL, 'FREEZER GAFA 120L.jpg', 'Heladeras y freezers', 'GAFA'),
	(18, 14499, 'HELADERA KDA-4394 416L', 1, NULL, 'HELADERA KDA-4394 416L.jpg', 'Heladeras y freezers', 'Kohinoor'),
	(19, 8499, 'HELADERA COLUMBIA 2334 317L', 1, NULL, 'HELADERA COLUMBIA 2334 317L.jpg', 'Heladeras y freezers', 'Columbia'),
	(21, 3339, 'GPS DRIVE 40', 1, NULL, 'GPS DRIVE GARMIN 40.jpg', 'Otros', 'Garmin'),
	(22, 9999, 'AIRE ACONDICIONADO VITA 2250 FRIO', 1, NULL, 'AIRE ACONDICIONADO VITA 2250 FRIO SURREY', 'Climatizacion', 'Surrey'),
	(23, 10499, 'AIRE ACONDICIONADO VITA 2250 F/C', 1, NULL, 'AIRE ACONDICIONADO SURREY VITA FC 2250.jpg', 'Climatizacion', 'Surrey'),
	(24, 12799, 'AIRE ACONDICIONADO VITA 2900 F/C', 0, NULL, 'AIRE ACONDICIONADO SURREY VITA FC 2900.jpg', 'Climatizacion', 'Surrey'),
	(25, 10199, 'AIRE ACONDICIONADO 3200 F/C', 1, NULL, 'AIRE ACONDICIONADO TCL FRIO CALOR TACA 3200.jpg', 'Climatizacion', 'TCL'),
	(26, 399, 'CALOVENTOR EIFFEL E307', 1, NULL, 'CALOVENTOR EIFFEL E307.jpg', 'Climatizacion', 'Eiffel'),
	(27, 399, 'ESTUFA HALOGENA E303', 2, NULL, 'ESTUFA HALOGENA EIFFEL E303.jpg', 'Climatizacion', 'Eiffel'),
	(28, 799, 'ESTUFA HALOGENA NSB L160', 1, NULL, 'ESTUFA HALOGENA KACEMASTER NSB L160.jpg', 'Climatizacion', 'Kacemaster'),
	(29, 2099, 'PLACAS ENERGY LINE HOUSE LH2000W', 1, NULL, 'PLACAS ENERGY LINE HOUSE LH2000W.jpg', 'Climatizacion', 'Energy Safe'),
	(30, 999, 'ANAFE ULTRACOMB A6600', 0, NULL, 'ANAFE ULTRACOMB A6600.jpg', 'Cocina', 'Ultracomb'),
	(31, 2699, 'HORNO ELECTRICO M-52', 1, NULL, 'HORNO ELECTRICO AURORA M-52', 'Cocina', 'Aurora'),
	(32, 3499, 'HORNO ELECTRICO M-70', 3, NULL, 'HORNO ELECTRICO AURORA M-70', 'Cocina', 'Aurora'),
	(33, 2599, 'HORNO ELECTRICO UC 40 AC', 1, NULL, 'HORNO ELECTRICO UC 40 AC', 'Cocina', 'Ultracomb'),
	(34, 2699, 'HORNO ELECTRICO UC-54CL', 0, NULL, 'HORNO ELECTRICO ULTRACOMB UC-54CL', 'Cocina', 'Ultracomb'),
	(35, 1999, 'HORNO ELECTRICO YL-32A', 1, NULL, 'HORNO ELECTRICO YELMO YL 42C', 'Cocina', 'Yelmo'),
	(36, 2199, 'MICROONDAS 20L MD1020X', 1, NULL, 'MICROONDAS ATMA 20l Md1020', 'Cocina', 'Atma'),
	(37, 1399, 'AFEITADORA AT759/14', 1, NULL, '0401-philips-barbeador', 'Cuidado personal', 'Philips'),
	(38, 1599, 'AFEITADORA AT760', 1, NULL, 'AFEITADORA PHILIPS AT760', 'Cuidado personal', 'Philips'),
	(39, 1849, 'AFEITADORA AT884', 1, NULL, 'AFEITADORA PHILIPS AT884', 'Cuidado personal', 'Philips'),
	(40, 1149, 'AFEITADORA HQ6906', 0, NULL, 'AFEITADORA PHILIPS HQ 6906(1)', 'Cuidado personal', 'Philips'),
	(41, 869, 'CORTABARBA QG3344/16', 1, NULL, 'CORTABARBA PHILIPS QG3344', 'Cuidado personal', 'Philips'),
	(42, 849, 'CORTABARBA QT4022', 1, NULL, 'CORTABARBA PHILIPS QT4022-15(1)', 'Cuidado personal', 'Philips'),
	(43, 569, 'CORTAPELO 8824', 1, NULL, 'CORTAPELO ATMA 8824', 'Cuidado personal', 'Atma'),
	(44, 549, 'DEPILADORA BRT383/15', 1, NULL, 'DEPILADORA PHILIPS BRT383-15', 'Cuidado personal', 'Philips'),
	(45, 1649, 'ROLLERS TALLE 32-43', 1, NULL, 'rollers tuxs', 'Otros', 'Tuxs'),
	(46, 799, 'ATOMLUX 2020 LED', 0, NULL, 'LUZ DE EMERGENCIA ATOMLUX 2020', 'Otros', 'Atomlux'),
	(47, 10999, 'TV LED SMART 43"', 1, NULL, 'TV LED SMART 43 PHILCO', 'TV', 'Philco'),
	(48, 18999, 'TV LED SMART 55" CDH-LE55SMART10', 1, NULL, 'TV LED SMART 55 CDH-LE55SMART10', 'TV', 'Hitachi'),
	(49, 9999, 'TV LED SMART 40" ', 0, NULL, 'TV SMART TCL L40S4900 -1-', 'TV', 'TCL'),
	(50, 8199, 'NOTEBOOK ES1-431-C3SD', 3, NULL, 'NBC-ACER-NXGJ4SM001+m170 (3)-700x700', 'Informatica', 'Acer'),
	(51, 9999, 'NOTEBOOK 14-BS007LA', 2, NULL, 'NOTEBOOK 14-BS007LA -2-', 'Informatica', 'HP'),
	(52, 7699, 'NOTEBOOK 250 G5', 0, NULL, 'NOTEBOOK 250 G5', 'Informatica', 'HP'),
	(53, 8999, 'NOTEBOOK EDI CONVERTIBLE 360', 1, NULL, 'NOTEBOOK PCBOX EDI CONVERTIBLE(1)', 'Informatica', 'PCBOX'),
	(54, 9399, 'FREEZER 290L', 2, NULL, 'FREEZER GAFA 290L', 'Heladeras y freezers', 'Gafa'),
	(55, 9999, 'HELADERA 357 281L', 0, NULL, 'Heladera-Gafa-Hgf-377-Ab-20160712193636', 'Heladeras y freezers', 'Gafa'),
	(56, 13999, 'HELADERA KD-4394 416L', 3, NULL, 'HELADERA KD-4394 416L', 'Heladeras y freezers', 'Kohinoor');
/*!40000 ALTER TABLE `articulo` ENABLE KEYS */;

-- Volcando estructura para tabla electrogroup_db.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_usuario` int(255) NOT NULL AUTO_INCREMENT,
  `DNI` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellido` varchar(100) DEFAULT NULL,
  `Contrasenia` varchar(300) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla electrogroup_db.clientes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id_usuario`, `DNI`, `Email`, `Nombre`, `Apellido`, `Contrasenia`, `Telefono`) VALUES
	(1, 38531662, 'ferrobilotte@gmail.com', 'Fermin', 'Robilotte', 'cf30dd467fc45c4335b031c7220c2d982429615f3f16ffed3b702644a7a5f9aebabd6a5d8781123c89f3aad2129290daf7131e50e35779becee2568205dc5c11', '2923429900'),
	(18, 38531622, 'juan@gmail.com', 'Juan', 'pedro', 'cf30dd467fc45c4335b031c7220c2d982429615f3f16ffed3b702644a7a5f9aebabd6a5d8781123c89f3aad2129290daf7131e50e35779becee2568205dc5c11', '23212211');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para tabla electrogroup_db.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `Id_pedidos` varchar(45) NOT NULL,
  `Cliente_Email` varchar(255) DEFAULT NULL,
  `Articulo_idArticulo` int(100) DEFAULT NULL,
  `Estado` varchar(100) DEFAULT NULL,
  `fecha_pedido` date DEFAULT NULL,
  `medio_pago` varchar(100) DEFAULT NULL,
  `fecha_envio` date DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_pedidos`),
  KEY `fk_articulo_idarticulo` (`Articulo_idArticulo`),
  KEY `fk_cliente_email` (`Cliente_Email`),
  CONSTRAINT `fk_articulo_idarticulo` FOREIGN KEY (`Articulo_idArticulo`) REFERENCES `articulo` (`idArticulo`),
  CONSTRAINT `fk_cliente_email` FOREIGN KEY (`Cliente_Email`) REFERENCES `clientes` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla electrogroup_db.pedidos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
