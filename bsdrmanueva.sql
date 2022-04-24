/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.1.32-MariaDB : Database - dbrma
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbrma` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `dbrma`;

/*Table structure for table `estado_rma` */

DROP TABLE IF EXISTS `estado_rma`;

CREATE TABLE `estado_rma` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `estado_rma` */

/*Table structure for table `rma` */

DROP TABLE IF EXISTS `rma`;

CREATE TABLE `rma` (
  `id_rma` int(11) NOT NULL AUTO_INCREMENT,
  `facha_solicitud` datetime DEFAULT NULL,
  `informe_tecnico` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_estado_rma` int(11) DEFAULT NULL,
  `id_solucion_rma` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_rma`),
  KEY `id_estado_rma` (`id_estado_rma`),
  KEY `id_solucion_rma` (`id_solucion_rma`),
  CONSTRAINT `rma_ibfk_1` FOREIGN KEY (`id_estado_rma`) REFERENCES `rol` (`id_rol`),
  CONSTRAINT `rma_ibfk_2` FOREIGN KEY (`id_solucion_rma`) REFERENCES `solucion_rma` (`id_solucion_rma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `rma` */

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `rol` */

insert  into `rol`(`id_rol`,`nombre_rol`) values 
(1,'administrador'),
(2,'tecnico'),
(3,'vendedor'),
(4,'cliente');

/*Table structure for table `solucion_rma` */

DROP TABLE IF EXISTS `solucion_rma`;

CREATE TABLE `solucion_rma` (
  `id_solucion_rma` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_solucion_rma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `solucion_rma` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ci` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` bit(1) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `usuario` */

insert  into `usuario`(`id_usuario`,`nombre`,`apellidos`,`ci`,`direccion`,`telefono`,`email`,`password`,`activo`,`id_rol`) values 
(1,'jhonatan','rojas','12556193','calle monseñor',76935491,'jhonatanrojasmercado@gmail.com','21232f297a57a5a743894a0e4a801fc3','',1),
(2,'ramiro','mendoza','1234567','av america',72347557,'ramiromendoza@gmail.com','75f33e6eebce7012b8c74a889fa8a7ed','',2),
(3,'alain','rojas','7654321','av blaco galindo',74336816,'alainrojas@gmail.com','0407e8c8285ab85509ac2884025dcf42','',3),
(4,'sandro','massi','12345678','calle padilla',76562214,'sandromassi@gmail.com','4983a0ab83ed86e0e7213c8783940193','',4);

/*Table structure for table `venta` */

DROP TABLE IF EXISTS `venta`;

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `num_serie` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_venta` datetime DEFAULT NULL,
  `fecha garantia` datetime DEFAULT NULL,
  `codigo_producto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_rma` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `id_rma` (`id_rma`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_rma`) REFERENCES `rma` (`id_rma`),
  CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `venta` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
