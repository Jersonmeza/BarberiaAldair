/*
SQLyog Community v8.63 
MySQL - 5.6.17 : Database - baberia(sturin)
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`baberia(sturin)` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `baberia(sturin)`;

/*Table structure for table `barberos` */

DROP TABLE IF EXISTS `barberos`;

CREATE TABLE `barberos` (
  `Bb_id` int(12) NOT NULL,
  `Bb_Nombres` varchar(50) NOT NULL,
  `Bb_Celular` varchar(11) NOT NULL,
  `Bb_Email` varchar(30) NOT NULL,
  `Bb_Drcc` varchar(30) NOT NULL,
  `Bb_HorarioInic` timestamp NOT NULL,
  `Bb_HorarioFinal` timestamp NOT NULL,
  PRIMARY KEY (`Bb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barberos` */

insert  into `barberos`(`Bb_id`,`Bb_Nombres`,`Bb_Celular`,`Bb_Email`,`Bb_Drcc`,`Bb_HorarioInic`,`Bb_HorarioFinal`) values (12345556,'Jesus ','301225464','Jesus@3221','Calle123c','2018-11-22 09:45:00','2018-11-22 10:45:00'),(1125874962,'Mauricio Campos','3012254487','Mauri12@gmail.com','Carrera4#14-19','2018-11-22 07:00:00','2018-11-22 09:00:00'),(1135566982,'Adrian Suares','3012546879','Adrian@gmail.com','Carrera17#109d-25','2018-11-22 08:40:00','2018-11-22 09:04:00'),(1135698452,'Aldair paez ','3001254875','AldairB@gmail.com','Carrera23#47c-50','2018-11-22 07:20:13','2018-11-22 10:20:13'),(1225131704,'Natali Camacho','3108964323','Nati@gmail.com','Calle73c1#25-17','2018-11-22 07:30:00','2018-11-22 08:30:00');

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `Cl_id` int(15) NOT NULL,
  `Cl_Nombre` varchar(20) NOT NULL,
  `Cl_Celular` varchar(11) NOT NULL,
  `Cl_Email` varchar(30) NOT NULL,
  `Cl_Drcc` varchar(30) NOT NULL,
  PRIMARY KEY (`Cl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `clientes` */

insert  into `clientes`(`Cl_id`,`Cl_Nombre`,`Cl_Celular`,`Cl_Email`,`Cl_Drcc`) values (112233,'Jerson','300112234','jmeza@gmail.com','calle64d76'),(1163344258,'Daniel Perez','3001254789','PerezDaniel@gmail.com','Kra17#98b-35'),(1193377985,'Andres Martinez','3012547894','Andresito24@hotmail.com','Calle17#12d-20'),(1213644782,'Carlos Gomez','3002135692','CarloG2132@hotmail.com','Calle21#14-51'),(1452369877,'Camilo Vargas','3014566554','Cami02@gmail.com','Kra18#112c-41');

/*Table structure for table `combo_cortes` */

DROP TABLE IF EXISTS `combo_cortes`;

CREATE TABLE `combo_cortes` (
  `Cmbo_Id` int(12) NOT NULL,
  `Cmbo_Nombre` varchar(50) NOT NULL,
  `Cmbo_Precio` int(10) NOT NULL,
  PRIMARY KEY (`Cmbo_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `combo_cortes` */

insert  into `combo_cortes`(`Cmbo_Id`,`Cmbo_Nombre`,`Cmbo_Precio`) values (1,'Corte',5000),(2,'Cerquillo',2000),(3,'Barba',3000),(4,'Ceja',2000),(5,'Figura',3500),(6,'Corte + Cerquillo',7000),(7,'Corte + Barba',8000),(8,'Corte + Ceja',7000),(9,'Corte + Figura ',8500),(10,'Corte + Cerquilo + Barba',10000),(11,'Corte + Cerquillo + Barba + Ceja',12000),(12,'Corte + Barba + Figura + Cerquillo + Ceja',15500),(13,'Cerquillo + Barba',5000),(14,'Cerquillo + Ceja',4000),(15,'Cerquillo + Figura',5500),(16,'Cerquillo + Barba + Ceja',7000),(17,'Cerquill + Barba + Ceja + Figura',10500),(18,'Barba + Ceja',5000),(19,'Barba + Figura',6500),(20,'Barba + Ceja + Figura',7500);

/*Table structure for table `recepcion` */

DROP TABLE IF EXISTS `recepcion`;

CREATE TABLE `recepcion` (
  `Recep_id` int(10) NOT NULL,
  `Recep_Nombre` varchar(20) NOT NULL,
  `Recep_Celular` varchar(11) NOT NULL,
  `Recep_Email` varchar(30) NOT NULL,
  `Recep_Drcc` varchar(30) NOT NULL,
  PRIMARY KEY (`Recep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `recepcion` */

insert  into `recepcion`(`Recep_id`,`Recep_Nombre`,`Recep_Celular`,`Recep_Email`,`Recep_Drcc`) values (123,'Cliente','3000','Cliente@gmail.com','calle73'),(1119336574,'Andrea Perez','3002111325','AndreaP@Hotmail.com','CALLE 15 #24'),(1136998544,'Carlos Rodrigues','3012356987','Carlos345@gmail.com','Carrera15#36-85');

/*Table structure for table `reservas` */

DROP TABLE IF EXISTS `reservas`;

CREATE TABLE `reservas` (
  `Reserv_id` int(10) NOT NULL,
  `Cl_Id` int(15) NOT NULL,
  `Cmbo_Id` int(12) NOT NULL,
  `Tno_id` int(20) NOT NULL,
  `Recep_id` int(10) NOT NULL,
  PRIMARY KEY (`Reserv_id`),
  KEY `Cl_Id` (`Cl_Id`),
  KEY `Cmbo_Id` (`Cmbo_Id`),
  KEY `Tno_id` (`Tno_id`),
  KEY `reservas_ibfk_2` (`Recep_id`),
  CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`Cl_Id`) REFERENCES `clientes` (`Cl_id`),
  CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`Recep_id`) REFERENCES `recepcion` (`Recep_id`),
  CONSTRAINT `reservas_ibfk_3` FOREIGN KEY (`Cmbo_Id`) REFERENCES `combo_cortes` (`Cmbo_Id`),
  CONSTRAINT `reservas_ibfk_4` FOREIGN KEY (`Tno_id`) REFERENCES `turnos` (`Tno_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reservas` */

/*Table structure for table `turnos` */

DROP TABLE IF EXISTS `turnos`;

CREATE TABLE `turnos` (
  `Tno_id` int(20) NOT NULL,
  `Bb_id` int(12) NOT NULL,
  `Tno_Fecha_Hora` timestamp NOT NULL,
  `Tno_Hora_Venc` timestamp NOT NULL,
  `Tno_Disponible` varchar(2) NOT NULL,
  PRIMARY KEY (`Tno_id`),
  KEY `Bb_id` (`Bb_id`),
  CONSTRAINT `turnos_ibfk_1` FOREIGN KEY (`Bb_id`) REFERENCES `barberos` (`Bb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `turnos` */

insert  into `turnos`(`Tno_id`,`Bb_id`,`Tno_Fecha_Hora`,`Tno_Hora_Venc`,`Tno_Disponible`) values (1,1125874962,'2018-11-22 03:30:00','2018-11-22 04:30:00','NO'),(2,1135698452,'2018-11-22 05:46:15','2018-11-22 06:46:15','NO'),(3,1135566982,'2018-11-22 06:00:00','2018-11-22 07:00:00','NO'),(4,1125874962,'2018-11-22 07:30:00','2018-11-22 08:30:00','SI'),(5,1135698452,'2018-11-22 04:00:00','2018-11-22 05:00:00','NO'),(9,1125874962,'2018-11-22 09:10:00','2018-11-22 10:10:00','NO'),(10,1135698452,'2019-03-27 10:22:01','2018-11-22 04:30:00','SI'),(11,1135698452,'2019-03-27 10:22:01','2018-11-22 04:30:00','NO'),(12,1135698452,'2019-03-27 10:22:01','2018-11-22 04:30:00','SI'),(13,1135698452,'2019-03-27 10:22:01','2018-11-22 04:30:00','SI'),(14,1135698452,'2019-03-27 10:22:01','2018-11-22 04:30:00','SI'),(15,1135698452,'2030-03-19 12:10:00','2030-03-19 12:20:00','SI'),(16,1135698452,'2019-03-30 12:30:00','2019-03-30 02:00:00','SI'),(17,1135698452,'2019-04-01 12:05:00','2019-04-01 12:50:00','SI');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
