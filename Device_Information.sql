/*
Navicat MySQL Data Transfer

Source Server         : 192.168.85.128
Source Server Version : 50542
Source Host           : 192.168.85.128:3306
Source Database       : Device_Information

Target Server Type    : MYSQL
Target Server Version : 50542
File Encoding         : 65001

Date: 2016-12-11 22:38:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for device
-- ----------------------------
DROP TABLE IF EXISTS `device`;
CREATE TABLE `device` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` varchar(255) NOT NULL,
  `place` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `cpu` varchar(255) DEFAULT NULL,
  `memory` int(11) DEFAULT NULL,
  `disk` varchar(255) DEFAULT NULL,
  `school_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for maintenance_log
-- ----------------------------
DROP TABLE IF EXISTS `maintenance_log`;
CREATE TABLE `maintenance_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` varchar(11) DEFAULT NULL,
  `worker_id` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `boot` varchar(255) DEFAULT NULL,
  `system` varchar(255) DEFAULT NULL,
  `disk_warning` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for maintenance_records
-- ----------------------------
DROP TABLE IF EXISTS `maintenance_records`;
CREATE TABLE `maintenance_records` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` varchar(11) DEFAULT NULL,
  `worker_id` varchar(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
