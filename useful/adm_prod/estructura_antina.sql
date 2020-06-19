-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.11-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla reality2_postalmarketing.antina
CREATE TABLE IF NOT EXISTS `antina` (
  `fecha` varchar(50) DEFAULT NULL,
  `abonado` varchar(50) DEFAULT NULL,
  `contrato` varchar(50) DEFAULT NULL,
  `nombre_del_abonado` varchar(50) DEFAULT NULL,
  `tdoc` varchar(50) DEFAULT NULL,
  `documento` varchar(50) DEFAULT NULL,
  `domicilio` varchar(50) DEFAULT NULL,
  `detalle_zona` varchar(50) DEFAULT NULL,
  `codigo_postal` varchar(50) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `tel_normal_1` varchar(50) DEFAULT NULL,
  `tel_normal_2` varchar(50) DEFAULT NULL,
  `tel_normal_3` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `decos1` varchar(50) DEFAULT NULL,
  `fecha_asignado_desasignado` varchar(50) DEFAULT NULL,
  `asignacion_gsc` varchar(50) DEFAULT NULL,
  `deuda` varchar(50) DEFAULT NULL,
  `fecinst` varchar(50) DEFAULT NULL,
  `decos` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `smarts` varchar(50) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `tec_ins` varchar(50) DEFAULT NULL,
  `des_tec_ins` varchar(50) DEFAULT NULL,
  `emp_ins` varchar(50) DEFAULT NULL,
  `des_emp_ins` varchar(50) DEFAULT NULL,
  `mot_baja` varchar(50) DEFAULT NULL,
  `des_mot_baja` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
