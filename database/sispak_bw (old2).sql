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

 Date: 02/06/2022 19:48:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_diagnosa
-- ----------------------------
DROP TABLE IF EXISTS `tb_diagnosa`;
CREATE TABLE `tb_diagnosa`  (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penyakit` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` datetime(0) NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_diagnosa
-- ----------------------------
INSERT INTO `tb_diagnosa` VALUES (1, 'user', 'P1', '2022-06-02 19:24:04');
INSERT INTO `tb_diagnosa` VALUES (2, 'user', 'P1', '2022-06-02 19:37:48');
INSERT INTO `tb_diagnosa` VALUES (3, 'user', 'P1', '2022-06-02 19:39:36');
INSERT INTO `tb_diagnosa` VALUES (4, 'user', 'P1', '2022-06-02 19:39:44');
INSERT INTO `tb_diagnosa` VALUES (5, 'user', 'P1', '2022-06-02 19:47:19');

-- ----------------------------
-- Table structure for tb_gejala
-- ----------------------------
DROP TABLE IF EXISTS `tb_gejala`;
CREATE TABLE `tb_gejala`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_gejala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 76 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_gejala
-- ----------------------------
INSERT INTO `tb_gejala` VALUES (35, 'G1', 'Bayi terlihat lemas');
INSERT INTO `tb_gejala` VALUES (36, 'G2', 'Suhu bayi terasa dingin');
INSERT INTO `tb_gejala` VALUES (37, 'G3', 'Kulit bayi memerah');
INSERT INTO `tb_gejala` VALUES (38, 'G4', 'Bayi sulit bernapas');
INSERT INTO `tb_gejala` VALUES (39, 'G5', 'Bayi sering buang air besar');
INSERT INTO `tb_gejala` VALUES (40, 'G6', 'Tinja bayi berwarna hitam');
INSERT INTO `tb_gejala` VALUES (41, 'G7', 'Nafas bayi tidak teratur');
INSERT INTO `tb_gejala` VALUES (42, 'G8', 'Bayi  mendengus');
INSERT INTO `tb_gejala` VALUES (43, 'G9', 'Kulit bayi membiru');
INSERT INTO `tb_gejala` VALUES (44, 'G10', 'Bayi batuk');
INSERT INTO `tb_gejala` VALUES (47, 'G11', 'Bayi buang air besar kurang dari tiga kali seminggu');
INSERT INTO `tb_gejala` VALUES (48, 'G12', 'Bayi rewel karena kesakitan ketika mengejan saat buang air besar');
INSERT INTO `tb_gejala` VALUES (49, 'G13', 'Bayi mengalamai kesulitan mengeluarkan feses karena kering dan keras');
INSERT INTO `tb_gejala` VALUES (50, 'G14', 'Bayi berkeringat ');
INSERT INTO `tb_gejala` VALUES (51, 'G15', 'Bayi menggigil ');
INSERT INTO `tb_gejala` VALUES (52, 'G16', 'Benjolan kemerahan di kelopak mata ');
INSERT INTO `tb_gejala` VALUES (53, 'G17', 'Benjolan kecil di kelopak mata ');
INSERT INTO `tb_gejala` VALUES (54, 'G18', 'Mata bayi berair');
INSERT INTO `tb_gejala` VALUES (55, 'G19', 'Bayi demam hingga lebih dari 40° C ');
INSERT INTO `tb_gejala` VALUES (56, 'G20', 'Muncul ruam di tubuh bayi');
INSERT INTO `tb_gejala` VALUES (57, 'G21', 'Lingkar kepala bayi terlihat semakin membesar');
INSERT INTO `tb_gejala` VALUES (58, 'G22', 'Urat urat pada kepala bayi terlihat jelas');
INSERT INTO `tb_gejala` VALUES (59, 'G23', 'Ubun ubun bayi terlihat menggelembung');
INSERT INTO `tb_gejala` VALUES (60, 'G24', 'Bayi mengalami bersin-bersin');
INSERT INTO `tb_gejala` VALUES (61, 'G25', 'Bayi mengeluarkan cairan/lendir pada hidung');
INSERT INTO `tb_gejala` VALUES (62, 'G26', 'Bengkak disekitar hidung dan mata bayi');
INSERT INTO `tb_gejala` VALUES (63, 'G27', 'Bayi demam');
INSERT INTO `tb_gejala` VALUES (64, 'G28', 'Bayi menangis terus menerus ');
INSERT INTO `tb_gejala` VALUES (65, 'G29', 'Bayi sulit mengonsumsi asi');
INSERT INTO `tb_gejala` VALUES (66, 'G30', 'Terdapat ruam serta bercak berwarna ungu');
INSERT INTO `tb_gejala` VALUES (67, 'G31', 'Jumlah jari tangan atau kaki bayi berlebih');
INSERT INTO `tb_gejala` VALUES (68, 'G32', 'Benjolan kecil jaringan lunak yang menonjol, tidak mengandung tulang');
INSERT INTO `tb_gejala` VALUES (69, 'G33', 'Jari memiliki tulang namun tidak memiliki persendian');
INSERT INTO `tb_gejala` VALUES (70, 'G34', 'Bayi kekurangan hemoglobin');
INSERT INTO `tb_gejala` VALUES (71, 'G35', 'Tingkat oksigen dan darah rendah');
INSERT INTO `tb_gejala` VALUES (72, 'G36', 'Kulit yang terlihat lebih pucat');
INSERT INTO `tb_gejala` VALUES (73, 'G37', 'Kulit tubuh bayi terlihat kuning');
INSERT INTO `tb_gejala` VALUES (74, 'G38', 'Tonjolan lunak di area pusar');
INSERT INTO `tb_gejala` VALUES (75, 'G39', 'Bengkak dan benjolan berubah warna');

-- ----------------------------
-- Table structure for tb_konsul
-- ----------------------------
DROP TABLE IF EXISTS `tb_konsul`;
CREATE TABLE `tb_konsul`  (
  `id_konsul` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pesan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tujuan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `waktu` datetime(0) NOT NULL,
  PRIMARY KEY (`id_konsul`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 77 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_konsul
-- ----------------------------
INSERT INTO `tb_konsul` VALUES (61, 38, 'user', 'wwww', 'pakar', '2022-05-24 18:45:49');
INSERT INTO `tb_konsul` VALUES (62, 37, 'pakar', 'eee', '38', '2022-05-24 18:46:50');
INSERT INTO `tb_konsul` VALUES (63, 37, 'pakar', 'ttt', '38', '2022-05-24 18:47:25');
INSERT INTO `tb_konsul` VALUES (64, 37, 'pakar', 'hyhhh', '38', '2022-05-24 18:47:28');
INSERT INTO `tb_konsul` VALUES (65, 37, 'pakar', 'jjjjjjjjj', '38', '2022-05-24 18:47:31');
INSERT INTO `tb_konsul` VALUES (66, 37, 'pakar', 'iiiiiiiii', '38', '2022-05-24 18:47:35');
INSERT INTO `tb_konsul` VALUES (67, 37, 'pakar', 'uuuuuuuuuuuuuu', '38', '2022-05-24 18:47:38');
INSERT INTO `tb_konsul` VALUES (68, 37, 'pakar', 'uuuuuuuuuu', '38', '2022-05-24 18:47:40');
INSERT INTO `tb_konsul` VALUES (69, 37, 'pakar', 'uuuuuuu', '38', '2022-05-24 18:47:43');
INSERT INTO `tb_konsul` VALUES (70, 38, 'user', 'yyy', 'pakar', '2022-05-24 18:48:29');
INSERT INTO `tb_konsul` VALUES (71, 38, 'user', 'asdasdasd', 'pakar', '2022-05-24 18:50:06');
INSERT INTO `tb_konsul` VALUES (72, 38, 'user', 'gbggg', 'pakar', '2022-05-24 18:52:22');
INSERT INTO `tb_konsul` VALUES (73, 38, 'user', 'gblg', 'pakar', '2022-05-24 18:56:24');
INSERT INTO `tb_konsul` VALUES (74, 37, 'pakar', 'gl', '38', '2022-05-24 18:56:58');
INSERT INTO `tb_konsul` VALUES (75, 37, 'pakar', 'dsd', '38', '2022-05-30 17:31:53');
INSERT INTO `tb_konsul` VALUES (76, 38, 'user', 'test', 'pakar', '2022-05-31 22:08:10');

-- ----------------------------
-- Table structure for tb_login
-- ----------------------------
DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE `tb_login`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hak_akses` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_login
-- ----------------------------
INSERT INTO `tb_login` VALUES (28, 'alvin', 'alvins', '1234', 'admin');
INSERT INTO `tb_login` VALUES (37, 'pakar', 'pakar', 'pakar', 'pakar');
INSERT INTO `tb_login` VALUES (38, 'user', 'user', 'user', 'user');
INSERT INTO `tb_login` VALUES (39, 'as', 'asd', '123', 'user');

-- ----------------------------
-- Table structure for tb_pengetahuan
-- ----------------------------
DROP TABLE IF EXISTS `tb_pengetahuan`;
CREATE TABLE `tb_pengetahuan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_penyakit` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 45 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pengetahuan
-- ----------------------------
INSERT INTO `tb_pengetahuan` VALUES (1, 'G1', 'P1');
INSERT INTO `tb_pengetahuan` VALUES (2, 'G2', 'P1');
INSERT INTO `tb_pengetahuan` VALUES (3, 'G3', 'P1');
INSERT INTO `tb_pengetahuan` VALUES (4, 'G4', 'P1');
INSERT INTO `tb_pengetahuan` VALUES (5, 'G5', 'P2');
INSERT INTO `tb_pengetahuan` VALUES (6, 'G6', 'P2');
INSERT INTO `tb_pengetahuan` VALUES (7, 'G1', 'P2');
INSERT INTO `tb_pengetahuan` VALUES (8, 'G7', 'P3');
INSERT INTO `tb_pengetahuan` VALUES (9, 'G8', 'P3');
INSERT INTO `tb_pengetahuan` VALUES (10, 'G9', 'P3');
INSERT INTO `tb_pengetahuan` VALUES (11, 'G10', 'P3');
INSERT INTO `tb_pengetahuan` VALUES (12, 'G11', 'P4');
INSERT INTO `tb_pengetahuan` VALUES (13, 'G12', 'P4');
INSERT INTO `tb_pengetahuan` VALUES (14, 'G13', 'P4');
INSERT INTO `tb_pengetahuan` VALUES (15, 'G14', 'P5');
INSERT INTO `tb_pengetahuan` VALUES (16, 'G15', 'P5');
INSERT INTO `tb_pengetahuan` VALUES (17, 'G1', 'P5');
INSERT INTO `tb_pengetahuan` VALUES (18, 'G16', 'P6');
INSERT INTO `tb_pengetahuan` VALUES (19, 'G17', 'P6');
INSERT INTO `tb_pengetahuan` VALUES (20, 'G18', 'P6');
INSERT INTO `tb_pengetahuan` VALUES (21, 'G10', 'P7');
INSERT INTO `tb_pengetahuan` VALUES (22, 'G19', 'P7');
INSERT INTO `tb_pengetahuan` VALUES (23, 'G20', 'P7');
INSERT INTO `tb_pengetahuan` VALUES (24, 'G21', 'P8');
INSERT INTO `tb_pengetahuan` VALUES (25, 'G22', 'P8');
INSERT INTO `tb_pengetahuan` VALUES (26, 'G23', 'P8');
INSERT INTO `tb_pengetahuan` VALUES (27, 'G24', 'P9');
INSERT INTO `tb_pengetahuan` VALUES (28, 'G25', 'P9');
INSERT INTO `tb_pengetahuan` VALUES (29, 'G26', 'P9');
INSERT INTO `tb_pengetahuan` VALUES (30, 'G27', 'P10');
INSERT INTO `tb_pengetahuan` VALUES (31, 'G28', 'P10');
INSERT INTO `tb_pengetahuan` VALUES (32, 'G29', 'P10');
INSERT INTO `tb_pengetahuan` VALUES (33, 'G30', 'P10');
INSERT INTO `tb_pengetahuan` VALUES (34, 'G31', 'P11');
INSERT INTO `tb_pengetahuan` VALUES (35, 'G32', 'P11');
INSERT INTO `tb_pengetahuan` VALUES (36, 'G33', 'P11');
INSERT INTO `tb_pengetahuan` VALUES (37, 'G34', 'P12');
INSERT INTO `tb_pengetahuan` VALUES (38, 'G35', 'P12');
INSERT INTO `tb_pengetahuan` VALUES (39, 'G36', 'P12');
INSERT INTO `tb_pengetahuan` VALUES (40, 'G1', 'P12');
INSERT INTO `tb_pengetahuan` VALUES (41, 'G37', 'P12');
INSERT INTO `tb_pengetahuan` VALUES (42, 'G38', 'P13');
INSERT INTO `tb_pengetahuan` VALUES (43, 'G39', 'P13');
INSERT INTO `tb_pengetahuan` VALUES (44, 'G27', 'P13');

-- ----------------------------
-- Table structure for tb_penyakit
-- ----------------------------
DROP TABLE IF EXISTS `tb_penyakit`;
CREATE TABLE `tb_penyakit`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_penyakit` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_penyakit` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pengertian` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `solusi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_penyakit
-- ----------------------------
INSERT INTO `tb_penyakit` VALUES (1, 'P1', 'Hipotermia', 'testyaa', '-');
INSERT INTO `tb_penyakit` VALUES (2, 'P2', 'Diare', NULL, '');
INSERT INTO `tb_penyakit` VALUES (3, 'P3', 'Dispnea', NULL, '');
INSERT INTO `tb_penyakit` VALUES (4, 'P4', 'Konstipasi', NULL, '');
INSERT INTO `tb_penyakit` VALUES (5, 'P5', 'Obs Febris', NULL, '');
INSERT INTO `tb_penyakit` VALUES (6, 'P6', 'Hordeolum', NULL, '');
INSERT INTO `tb_penyakit` VALUES (7, 'P7', 'Campak', NULL, '');
INSERT INTO `tb_penyakit` VALUES (8, 'P8', 'Hidrosefalus', NULL, '');
INSERT INTO `tb_penyakit` VALUES (9, 'P9', 'Infeksi sinus', NULL, '');
INSERT INTO `tb_penyakit` VALUES (10, 'P10', 'Meningitis', NULL, '');
INSERT INTO `tb_penyakit` VALUES (11, 'P11', 'Polidaktili', NULL, '');
INSERT INTO `tb_penyakit` VALUES (12, 'P12', 'Anemia', NULL, '');
INSERT INTO `tb_penyakit` VALUES (13, 'P13', 'Hernia umbilikalis', NULL, '');

SET FOREIGN_KEY_CHECKS = 1;
