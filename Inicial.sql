/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  edison quijano
 * Created: 13/05/2017
 */

CREATE DATABASE IF NOT EXISTS `merlin_data` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `merlin_data`;

CREATE TABLE IF NOT EXISTS `merlin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `cc` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` DATE DEFAULT NULL,
  `sexo` varchar(20) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`email`)
)ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

DELETE FROM `merlin_user`;

CREATE TABLE IF NOT EXISTS `merlin_rol_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `FK_USERROL_USERID` (`id_user`),
  CONSTRAINT `FK_USERROL_USERID` FOREIGN KEY (`id_user`) REFERENCES `merlin_user` (`id`),
  INDEX `FK_USERROL_ROLID` (`id_rol`),
  CONSTRAINT `FK_USERROL_ROLID` FOREIGN KEY (`id_rol`) REFERENCES `merlin_rol` (`id`)
)ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

DELETE FROM `merlin_rol_user`;

CREATE TABLE IF NOT EXISTS `merlin_rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
)ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

DELETE FROM `merlin_rol`;
