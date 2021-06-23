/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : bbq

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 04/11/2020 20:00:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for qiang
-- ----------------------------
DROP TABLE IF EXISTS `qiang`;
CREATE TABLE `qiang`  (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `btime` int(12) NOT NULL,
  `tel` int(15) NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qiang
-- ----------------------------
INSERT INTO `qiang` VALUES (25, '杨颖', '小亮', '春风十里不如你', 1604479190, 12345678, 'u=3505435430,1761228101&fm=26&gp=0.jpg');
INSERT INTO `qiang` VALUES (24, '迪丽热巴', '啊啊', '啦啦啦啦啦', 1604471895, 123, 'u=1659681080,3339393941&fm=26&gp=0.jpg');

SET FOREIGN_KEY_CHECKS = 1;
