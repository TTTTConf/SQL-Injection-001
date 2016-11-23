/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100108
Source Host           : localhost:3306
Source Database       : tttt001

Target Server Type    : MYSQL
Target Server Version : 100108
File Encoding         : 65001

Date: 2016-11-23 22:06:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for guestbook
-- ----------------------------
DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of guestbook
-- ----------------------------
INSERT INTO `guestbook` VALUES ('2', 'prhok', 'fpogh', 'npkobm\r\npo\r\nvcmh  dr', '0');
INSERT INTO `guestbook` VALUES ('4', 'gfjfgj', 'ytrufyj', 'jgh\r\ngukl\r\ngjhk', '0');
INSERT INTO `guestbook` VALUES ('5', 'gfjfgj', 'ytrufyj', 'jgh\r\ngukl\r\ngjhk', '0');
INSERT INTO `guestbook` VALUES ('6', 'hjkggjhkgh', 'tyui ti ', 'trityi tyi tyityi', '1479908071');
INSERT INTO `guestbook` VALUES ('7', 'tyu tyuty', 'tyruutyuuuuuuuuur', 'tryutt\r\ntuyi\r\nf', '1479908088');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '912ec803b2ce49e4a541068d495ab570');
SET FOREIGN_KEY_CHECKS=1;
