/*

 Source Server         : MySQLConnection
 Source Server Type    : MySQL
 Source Server Version : 100410
 Source Host           : localhost:3306
 Source Schema         : schooldb

 Target Server Type    : MySQL
 Target Server Version : 100410
 File Encoding         : 65001

 Date: 13/02/2020 17:45:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_giaovien
-- ----------------------------
DROP TABLE IF EXISTS `tbl_giaovien`;
CREATE TABLE `tbl_giaovien`  (
  `giaovienid` int(11) NOT NULL AUTO_INCREMENT,
  `tengiaovien` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bomon` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ngaysinh` date NULL DEFAULT NULL,
  `gioitinh` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `anhdaidien` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`giaovienid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_giaovien
-- ----------------------------
INSERT INTO `tbl_giaovien` VALUES (2, 'Lê Thục Anh', 'Văn', '1995-03-04', 'Nữ', 'max-ilienerwise-YvWJOXHNJ94-unsplash.jpg');
INSERT INTO `tbl_giaovien` VALUES (3, 'Trần Hoài Thanh', 'Quân Sự', '1976-09-22', 'Nam', 'john-jackson-acyXkBqJlCQ-unsplash.jpg');
INSERT INTO `tbl_giaovien` VALUES (5, 'Nguyễn Phương Linh', 'Vật Lý', '1988-12-15', 'Nữ', 'guilherme-stecanella-_dH-oQF9w-Y-unsplash.jpg');
INSERT INTO `tbl_giaovien` VALUES (9, 'Trần Tuấn Kiệt', 'Văn', '2020-02-06', 'Nam', 'lachlan-dempsey-6VPEOdpFNAs-unsplash.jpg');
INSERT INTO `tbl_giaovien` VALUES (10, 'Đinh Tuấn Anh', 'Vật Lý', '1991-02-19', 'Nam', 'reza-biazar-eSjmZW97cH8-unsplash.jpg');

-- ----------------------------
-- Table structure for tbl_khoa
-- ----------------------------
DROP TABLE IF EXISTS `tbl_khoa`;
CREATE TABLE `tbl_khoa`  (
  `idkhoa` int(10) NOT NULL AUTO_INCREMENT,
  `tenkhoa` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ngaythanhlap` date NULL DEFAULT NULL,
  PRIMARY KEY (`idkhoa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_khoa
-- ----------------------------
INSERT INTO `tbl_khoa` VALUES (1, 'CNTT', NULL);
INSERT INTO `tbl_khoa` VALUES (2, 'Công trình', NULL);
INSERT INTO `tbl_khoa` VALUES (3, 'Cầu đường', NULL);
INSERT INTO `tbl_khoa` VALUES (4, 'Cơ khí', NULL);
INSERT INTO `tbl_khoa` VALUES (5, 'Xây dựng', NULL);

-- ----------------------------
-- Table structure for tbl_student
-- ----------------------------
DROP TABLE IF EXISTS `tbl_student`;
CREATE TABLE `tbl_student`  (
  `studentid` int(10) NOT NULL AUTO_INCREMENT,
  `studentcode` int(11) NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idkhoa` int(10) NOT NULL,
  `avatar` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`studentid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 47 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_student
-- ----------------------------
INSERT INTO `tbl_student` VALUES (2, 161912345, 'Đinh Ngọc Ánh', '2020-01-22', 'Nữ', 1, 'azamat-zhanisov-rtzN1TGIGWc-unsplash.jpg');
INSERT INTO `tbl_student` VALUES (27, 181513123, 'Nguyễn Văn Thảo', '1996-08-05', 'Nam', 1, 'harishan-kobalasingam-8PMvB4VyVXA-unsplash.jpg');
INSERT INTO `tbl_student` VALUES (39, 15975364, 'Nguyễn Anh Quyền', '2020-02-22', 'Nữ', 1, 'lachlan-dempsey-6VPEOdpFNAs-unsplash.jpg');

SET FOREIGN_KEY_CHECKS = 1;
