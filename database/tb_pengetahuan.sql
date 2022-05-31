/*
 Navicat Premium Data Transfer

 Source Server         : kominfo
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : sispak_bw

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 01/06/2022 01:04:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_pengetahuan
-- ----------------------------
DROP TABLE IF EXISTS `tb_pengetahuan`;
CREATE TABLE `tb_pengetahuan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_penyakit` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
