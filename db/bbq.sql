/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : bbq

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 23/06/2021 08:17:01
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
) ENGINE = MyISAM AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qiang
-- ----------------------------
INSERT INTO `qiang` VALUES (25, '杨颖', '小亮', '春风十里不如你', 1604479190, 12345678, 'u=3505435430,1761228101&fm=26&gp=0.jpg');
INSERT INTO `qiang` VALUES (24, '迪丽热巴', '啊啊', '啦啦啦啦啦', 1604471895, 123, 'u=1659681080,3339393941&fm=26&gp=0.jpg');
INSERT INTO `qiang` VALUES (26, '马保国', '波波鸡', '功夫大师', 1604561780, 4444, 'u=1312861432,1200329390&fm=26&gp=0.jpg');
INSERT INTO `qiang` VALUES (27, '彭于晏', '小美', '腹肌', 1604561873, 234, 'u=1651955093,2544366175&fm=26&gp=0.jpg');
INSERT INTO `qiang` VALUES (28, '波波鸡', '小亮', '波波鸡好帅', 1604562635, 123, '9b8973bd5a899c6df5b4b08faed025b5.jpeg');
INSERT INTO `qiang` VALUES (29, '红波波鸡', '方法', '啊啊啊啊', 1604562689, 134, 'u=1117019517,3410390244&fm=26&gp=0.jpg');
INSERT INTO `qiang` VALUES (30, '公鸡', '啊啊啊', '攻击', 1604562736, 333, 'u=1178376111,3851403958&fm=26&gp=0.jpg');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, '11111', '111111');
INSERT INTO `user` VALUES (2, 'admin', '123456');
INSERT INTO `user` VALUES (3, '123', '1223456');
INSERT INTO `user` VALUES (4, '1', '1');
INSERT INTO `user` VALUES (5, '1', '123');
INSERT INTO `user` VALUES (8, '111111', '222222');

SET FOREIGN_KEY_CHECKS = 1;
