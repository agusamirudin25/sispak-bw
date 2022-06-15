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

 Date: 16/06/2022 03:13:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_diagnosa
-- ----------------------------
DROP TABLE IF EXISTS `tb_diagnosa`;
CREATE TABLE `tb_diagnosa`  (
  `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `penyakit` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal` datetime(0) NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id_diagnosa`) USING BTREE,
  INDEX `username`(`username`) USING BTREE,
  INDEX `kd_penyakit`(`penyakit`) USING BTREE,
  CONSTRAINT `kd_penyakit` FOREIGN KEY (`penyakit`) REFERENCES `tb_penyakit` (`kode_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `tb_login` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_diagnosa
-- ----------------------------
INSERT INTO `tb_diagnosa` VALUES (26, 'user', 'P01', '2022-06-05 12:09:58');
INSERT INTO `tb_diagnosa` VALUES (27, 'user', 'P01', '2022-06-05 12:10:17');
INSERT INTO `tb_diagnosa` VALUES (28, 'user', 'P01', '2022-06-05 12:13:10');
INSERT INTO `tb_diagnosa` VALUES (29, 'user', 'P01', '2022-06-05 12:13:33');
INSERT INTO `tb_diagnosa` VALUES (30, 'user', 'P01', '2022-06-05 12:14:01');
INSERT INTO `tb_diagnosa` VALUES (31, 'user', 'P02', '2022-06-05 12:32:44');
INSERT INTO `tb_diagnosa` VALUES (32, 'user', 'P01', '2022-06-05 17:04:22');
INSERT INTO `tb_diagnosa` VALUES (33, 'user', 'P01', '2022-06-05 17:45:30');
INSERT INTO `tb_diagnosa` VALUES (34, 'user', 'P02', '2022-06-05 18:20:13');
INSERT INTO `tb_diagnosa` VALUES (35, 'elyzaa', 'P02', '2022-06-05 19:09:33');
INSERT INTO `tb_diagnosa` VALUES (36, 'user', 'P01', '2022-06-06 14:57:20');
INSERT INTO `tb_diagnosa` VALUES (37, 'user', 'P01', '2022-06-06 20:46:32');
INSERT INTO `tb_diagnosa` VALUES (38, 'user', 'P01', '2022-06-06 20:54:02');
INSERT INTO `tb_diagnosa` VALUES (39, 'user', 'P02', '2022-06-06 20:54:14');
INSERT INTO `tb_diagnosa` VALUES (40, 'user', 'P01', '2022-06-07 09:47:49');
INSERT INTO `tb_diagnosa` VALUES (41, 'user', 'P03', '2022-06-07 11:34:15');
INSERT INTO `tb_diagnosa` VALUES (42, 'user', 'P03', '2022-06-07 11:34:41');
INSERT INTO `tb_diagnosa` VALUES (43, 'user', 'P01', '2022-06-07 11:35:12');
INSERT INTO `tb_diagnosa` VALUES (44, 'user', 'P01', '2022-06-07 11:35:18');
INSERT INTO `tb_diagnosa` VALUES (45, 'user', 'P01', '2022-06-07 11:35:32');
INSERT INTO `tb_diagnosa` VALUES (46, 'user', 'P01', '2022-06-07 11:37:05');
INSERT INTO `tb_diagnosa` VALUES (47, 'user', 'P04', '2022-06-07 12:00:49');
INSERT INTO `tb_diagnosa` VALUES (48, 'user', 'P12', '2022-06-07 12:15:57');
INSERT INTO `tb_diagnosa` VALUES (49, 'user', 'P12', '2022-06-07 12:16:33');

-- ----------------------------
-- Table structure for tb_gejala
-- ----------------------------
DROP TABLE IF EXISTS `tb_gejala`;
CREATE TABLE `tb_gejala`  (
  `kode_gejala` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_gejala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`kode_gejala`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_gejala
-- ----------------------------
INSERT INTO `tb_gejala` VALUES ('G01', 'Bayi terlihat lemas');
INSERT INTO `tb_gejala` VALUES ('G02', 'Suhu bayi terasa dingin');
INSERT INTO `tb_gejala` VALUES ('G03', 'Kulit bayi memerah');
INSERT INTO `tb_gejala` VALUES ('G04', 'Bayi sulit bernapas');
INSERT INTO `tb_gejala` VALUES ('G05', 'Bayi sering buang air besar');
INSERT INTO `tb_gejala` VALUES ('G06', 'Tinja bayi berwarna hitam');
INSERT INTO `tb_gejala` VALUES ('G07', 'Nafas bayi tidak teratur');
INSERT INTO `tb_gejala` VALUES ('G08', 'Bayi  mendengus');
INSERT INTO `tb_gejala` VALUES ('G09', 'Kulit bayi membiru');
INSERT INTO `tb_gejala` VALUES ('G10', 'Bayi batuk');
INSERT INTO `tb_gejala` VALUES ('G11', 'Bayi buang air besar kurang dari tiga kali seminggu');
INSERT INTO `tb_gejala` VALUES ('G12', 'Bayi rewel karena kesakitan ketika mengejan saat buang air besar');
INSERT INTO `tb_gejala` VALUES ('G13', 'Bayi mengalami kesulitan mengeluarkan feses karena kering dan keras');
INSERT INTO `tb_gejala` VALUES ('G14', 'Bayi berkeringat ');
INSERT INTO `tb_gejala` VALUES ('G15', 'Bayi menggigil ');
INSERT INTO `tb_gejala` VALUES ('G16', 'Benjolan kemerahan di kelopak mata ');
INSERT INTO `tb_gejala` VALUES ('G17', 'Benjolan kecil di kelopak mata ');
INSERT INTO `tb_gejala` VALUES ('G18', 'Mata bayi berair');
INSERT INTO `tb_gejala` VALUES ('G19', 'Bayi demam hingga lebih dari 40° C ');
INSERT INTO `tb_gejala` VALUES ('G20', 'Muncul ruam di tubuh bayi');
INSERT INTO `tb_gejala` VALUES ('G21', 'Lingkar kepala bayi terlihat semakin membesar');
INSERT INTO `tb_gejala` VALUES ('G22', 'Urat urat pada kepala bayi terlihat jelas');
INSERT INTO `tb_gejala` VALUES ('G23', 'Ubun ubun bayi terlihat menggelembung');
INSERT INTO `tb_gejala` VALUES ('G24', 'Bayi mengalami bersin bersin');
INSERT INTO `tb_gejala` VALUES ('G25', 'Bayi mengeluarkan cairan/lendir pada hidung');
INSERT INTO `tb_gejala` VALUES ('G26', 'Bengkak disekitar hidung dan mata bayi');
INSERT INTO `tb_gejala` VALUES ('G27', 'Bayi demam');
INSERT INTO `tb_gejala` VALUES ('G28', 'Bayi menangis terus menerus ');
INSERT INTO `tb_gejala` VALUES ('G29', 'Bayi sulit mengkonsumsi asi');
INSERT INTO `tb_gejala` VALUES ('G30', 'Terdapat ruam serta bercak berwarna ungu');
INSERT INTO `tb_gejala` VALUES ('G31', 'Jumlah jari tangan atau kaki bayi berlebih');
INSERT INTO `tb_gejala` VALUES ('G32', 'Benjolan kecil jaringan lunak yang menonjol, tidak mengandung tulang');
INSERT INTO `tb_gejala` VALUES ('G33', 'Jari memiliki tulang namun tidak memiliki persendian');
INSERT INTO `tb_gejala` VALUES ('G34', 'Bayi kekurangan hemoglobin');
INSERT INTO `tb_gejala` VALUES ('G35', 'Tingkat oksigen dan darah rendah');
INSERT INTO `tb_gejala` VALUES ('G36', 'Kulit yang terlihat lebih pucat');
INSERT INTO `tb_gejala` VALUES ('G37', 'Kulit tubuh bayi terlihat kuning');
INSERT INTO `tb_gejala` VALUES ('G38', 'Benjolan lunak di area pusar');
INSERT INTO `tb_gejala` VALUES ('G39', 'Bengkak dan benjolan berubah warna');

-- ----------------------------
-- Table structure for tb_konsul
-- ----------------------------
DROP TABLE IF EXISTS `tb_konsul`;
CREATE TABLE `tb_konsul`  (
  `id_konsul` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pesan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tujuan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `waktu` datetime(0) NOT NULL,
  PRIMARY KEY (`id_konsul`) USING BTREE,
  INDEX `user_name`(`username`) USING BTREE,
  CONSTRAINT `user_name` FOREIGN KEY (`username`) REFERENCES `tb_login` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_konsul
-- ----------------------------
INSERT INTO `tb_konsul` VALUES (1, 'user', 'tess', 'pakar', '2022-06-09 09:47:26');
INSERT INTO `tb_konsul` VALUES (2, 'user', 'test lagi', 'pakar', '2022-06-09 09:50:00');
INSERT INTO `tb_konsul` VALUES (3, 'pakar', 'ya', 'user', '2022-06-09 09:58:28');
INSERT INTO `tb_konsul` VALUES (4, 'pakar', 'apa tuh', 'user', '2022-06-09 09:58:34');
INSERT INTO `tb_konsul` VALUES (5, 'user', 'ngga', 'pakar', '2022-06-09 09:58:52');

-- ----------------------------
-- Table structure for tb_login
-- ----------------------------
DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE `tb_login`  (
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hak_akses` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_login
-- ----------------------------
INSERT INTO `tb_login` VALUES ('alvins', 'alvin', '1234', 'admin');
INSERT INTO `tb_login` VALUES ('asd', 'as', '123', 'user');
INSERT INTO `tb_login` VALUES ('elyzaa', 'elyza', '1234', 'user');
INSERT INTO `tb_login` VALUES ('niv', 'Alvin Supriyan', '1234', 'user');
INSERT INTO `tb_login` VALUES ('pakar', 'pakar', 'pakar', 'pakar');
INSERT INTO `tb_login` VALUES ('user', 'user', 'user', 'user');

-- ----------------------------
-- Table structure for tb_pengetahuan
-- ----------------------------
DROP TABLE IF EXISTS `tb_pengetahuan`;
CREATE TABLE `tb_pengetahuan`  (
  `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_penyakit` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pengetahuan`) USING BTREE,
  INDEX `kd_gejala`(`kode_gejala`) USING BTREE,
  INDEX `kd_penyakit_pengetahuan`(`kode_penyakit`) USING BTREE,
  CONSTRAINT `kd_gejala` FOREIGN KEY (`kode_gejala`) REFERENCES `tb_gejala` (`kode_gejala`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `kd_penyakit_pengetahuan` FOREIGN KEY (`kode_penyakit`) REFERENCES `tb_penyakit` (`kode_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 91 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pengetahuan
-- ----------------------------
INSERT INTO `tb_pengetahuan` VALUES (45, 'G01', 'P01');
INSERT INTO `tb_pengetahuan` VALUES (46, 'G02', 'P01');
INSERT INTO `tb_pengetahuan` VALUES (47, 'G03', 'P01');
INSERT INTO `tb_pengetahuan` VALUES (48, 'G04', 'P01');
INSERT INTO `tb_pengetahuan` VALUES (49, 'G05', 'P02');
INSERT INTO `tb_pengetahuan` VALUES (50, 'G06', 'P02');
INSERT INTO `tb_pengetahuan` VALUES (51, 'G01', 'P02');
INSERT INTO `tb_pengetahuan` VALUES (52, 'G07', 'P03');
INSERT INTO `tb_pengetahuan` VALUES (53, 'G08', 'P03');
INSERT INTO `tb_pengetahuan` VALUES (54, 'G09', 'P03');
INSERT INTO `tb_pengetahuan` VALUES (55, 'G10', 'P03');
INSERT INTO `tb_pengetahuan` VALUES (56, 'G11', 'P04');
INSERT INTO `tb_pengetahuan` VALUES (57, 'G12', 'P04');
INSERT INTO `tb_pengetahuan` VALUES (58, 'G13', 'P04');
INSERT INTO `tb_pengetahuan` VALUES (59, 'G01', 'P05');
INSERT INTO `tb_pengetahuan` VALUES (60, 'G14', 'P05');
INSERT INTO `tb_pengetahuan` VALUES (61, 'G15', 'P05');
INSERT INTO `tb_pengetahuan` VALUES (62, 'G16', 'P06');
INSERT INTO `tb_pengetahuan` VALUES (63, 'G17', 'P06');
INSERT INTO `tb_pengetahuan` VALUES (64, 'G18', 'P06');
INSERT INTO `tb_pengetahuan` VALUES (65, 'G10', 'P07');
INSERT INTO `tb_pengetahuan` VALUES (66, 'G19', 'P07');
INSERT INTO `tb_pengetahuan` VALUES (67, 'G20', 'P07');
INSERT INTO `tb_pengetahuan` VALUES (68, 'G21', 'P08');
INSERT INTO `tb_pengetahuan` VALUES (69, 'G22', 'P08');
INSERT INTO `tb_pengetahuan` VALUES (70, 'G23', 'P08');
INSERT INTO `tb_pengetahuan` VALUES (71, 'G24', 'P09');
INSERT INTO `tb_pengetahuan` VALUES (72, 'G25', 'P09');
INSERT INTO `tb_pengetahuan` VALUES (73, 'G26', 'P09');
INSERT INTO `tb_pengetahuan` VALUES (74, 'G27', 'P10');
INSERT INTO `tb_pengetahuan` VALUES (75, 'G28', 'P10');
INSERT INTO `tb_pengetahuan` VALUES (76, 'G29', 'P10');
INSERT INTO `tb_pengetahuan` VALUES (77, 'G30', 'P10');
INSERT INTO `tb_pengetahuan` VALUES (78, 'G31', 'P11');
INSERT INTO `tb_pengetahuan` VALUES (79, 'G32', 'P11');
INSERT INTO `tb_pengetahuan` VALUES (80, 'G33', 'P11');
INSERT INTO `tb_pengetahuan` VALUES (81, 'G01', 'P12');
INSERT INTO `tb_pengetahuan` VALUES (82, 'G34', 'P12');
INSERT INTO `tb_pengetahuan` VALUES (83, 'G33', 'P12');
INSERT INTO `tb_pengetahuan` VALUES (84, 'G35', 'P12');
INSERT INTO `tb_pengetahuan` VALUES (85, 'G36', 'P12');
INSERT INTO `tb_pengetahuan` VALUES (86, 'G37', 'P12');
INSERT INTO `tb_pengetahuan` VALUES (87, 'G27', 'P13');
INSERT INTO `tb_pengetahuan` VALUES (88, 'G38', 'P13');
INSERT INTO `tb_pengetahuan` VALUES (89, 'G39', 'P13');

-- ----------------------------
-- Table structure for tb_penyakit
-- ----------------------------
DROP TABLE IF EXISTS `tb_penyakit`;
CREATE TABLE `tb_penyakit`  (
  `kode_penyakit` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_penyakit` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan_penyakit` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `foto` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `solusi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`kode_penyakit`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_penyakit
-- ----------------------------
INSERT INTO `tb_penyakit` VALUES ('P01', 'Hipotermia', 'Hipotermia merupakan salah satu penyebab utama tingginya angka morbiditas dan mortalitas bayi baru lahir. Hipotermia pada bayi baru lahir disebabkan belum sempurnanya pengaturan suhu tubuh bayi, maupun pengetahuan yang kurang tentang pengelolaan bayi baru lahir yang benar. Pengaturan suhu tubuh bayi baru lahir sangat penting untuk kelangsungan hidup dan mencegah terjadinya hipotermia. Hipotermia pada bayi baru lahir mempengaruhi metabolisme tubuh dan dapat mengakibatkan komplikasi hipoglikemia, asidosis metabolik, distres pernapasan, dan infeksi. Hipotermia terjadi apabila suhu tubuh di bawah 36,50 C. Hipotermia terjadi akibat ketidakseimbangan antara produksi panas dan kehilangan panas. Kehilangan panas pada bayi baru lahir dapat melalui 4 cara yaitu evaporasi, konduksi, radiasi, dan konveksi. Kesalahan penanganan sesudah lahir dapat menyebabkan bayi baru lahir kehilangan panas akibat keempat cara tersebut (Puspita dkk., 2007). Hipotermia menyebabkan terjadinya penyempitan pembuluh darah yang mengakibatkan terjadinya metabolis anaerobik, meningkatkan kebutuhan oksigen, mengakibatkan hipoksemia dan berlanjut dengan kematian (Saifuddin, 2008).', NULL, 'Apabila bayi kedinginan dan menunjukkan gejala hipotermia, cobalah untuk mengukur suhu tubuhnya. Pengukuran suhu yang paling akurat dapat dilakukan melalui rektal. Namun jika tidak memiliki termometer khusus rektal, pengukuran suhu lewat ketiak juga dapat dilakukan. Gunakan inkubator. Ganti pakaian basah dengan pakaian hangat disertai topi. Tempatkan bayi di ruangan hangat.\r\n');
INSERT INTO `tb_penyakit` VALUES ('P02', 'Diare', 'Diare merupakan sebuah kondisi ketika pengidapnya buang air besar (BAB) lebih sering dari biasanya. Selain itu, feses pengidap diare juga lebih encer. Meski diare bisa berlangsung singkat, ada kalanya diare bisa berlangsung selama beberapa hari. Dalam beberapa kasus, diare juga bisa terjadi hingga berminggu-minggu, diare merupakan penyakit kedua yang menyebabkan kematian pada anak-anak balita (bawah lima tahun) setelah pneumonia (WHO , 2013). Diare yang disebabkan oleh infeksi virus dapat sembuh dengan sendirinya dalam beberapa hari. Namun, bayi tetap perlu mendapatkan asupan cairan dan nutrisi yang cukup selama diare.', NULL, '1)	Bayi perlu mendapatkan asupan cairan dan nutrisi yang cukup selama diare\r\n2)	Memberikan asi dan cairan elektrolit\r\n3)	Memberikan suplemen zinc\r\n4)	Memberikan probiotik.\r\n');
INSERT INTO `tb_penyakit` VALUES ('P03', 'Dispnea', 'Sesak nafas, atau yang dalam bahasa medis disebut dispnea, adalah kondisi kesehatan di mana seseorang mengalami kesulitan bernapas. Beberapa orang yang mengalami kondisi ini menggambarkannya sebagai sensasi yang membuat tubuh seakan membutuhkan udara lebih banyak, dada menyempit, serta merasa tidak berdaya. Dispnea atau sesak napas adalah kondisi yang tidak nyaman, bahkan menyakitkan. Biasanya, ini menjadi gejala atau tanda adanya penyakit atau gangguan kesehatan. Frekuensi pernapasan normal pada bayi baru lahir adalah sekitar 40 kali per menit. Ini mungkin melambat hingga 20-40 kali per menit saat bayi sedang tidur. Pola pernapasan pada tiap bayi juga dapat berbeda-beda. Namun, beberapa kondisi dapat menyebabkan perubahan frekuensi dan pola pernapasan yang membuat napas bayi seperti sesak. ', NULL, '1)	Kurangi aktivitas anak di luar rumah saat udara sedang panas atau sedang dingin\r\n2)	Ciptakan lingkungan yang sehat untuk pernapasan bayi terutama di dalam rumah\r\n3)	Pastikan seluruh ruangan bebas dari debu, kotoran, polusi, dan asap rokok.\r\n');
INSERT INTO `tb_penyakit` VALUES ('P04', 'Konstipasi', 'Konstipasi merupakan masalah kesehatan yang umum terjadi pada bayi. Bayi yang mengalami sembelit, jarang buang air besar. Selain itu, feses yang keras dan kering juga bisa dialami bayi yang mengalami sembelit. Salah satu penyebab bayi mengalami sembelit adalah ketika bayi mulai makan makanan padat. Mengetahui frekuensi buang air besar bayi bisa membantu mengidentifikasi apakah bayi mengalami sembelit. Bayi yang mendapat asupan ASI akan lebih sering buang air besar daripada bayi yang diberi susu formula, karena ASI lebih mudah dicerna oleh bayi. Walaupun bayi sering buang air besar atau terlihat berusaha keras mengejan ketika buang air besar, selama feses bayi lunak, maka kemungkinan bayi mengalami konstipasi kecil.', NULL, '1)	Pijat perut bayi dengan baby-oil sebagai salah satu cara mengatasi sembelit pada bayi dengan gerakan lembut searah jarum jam\r\n2)	mandi air hangat dapat membantu otot-otot rileks\r\n3)	Gerakkan kaki bayi atau ajak bayi berolahraga seperti sedang bersepeda\r\n');
INSERT INTO `tb_penyakit` VALUES ('P05', 'Obs Febris', 'Febris adalah istilah kedokteran yang lebih dikenal dengan demam di masyarakat awam, yakni panas suhu tubuh lebih dari 37° C. Diketahui bahwa febris merupakan kondisi yang normal, karena bisa menjadi tanda bahwa tubuh sedang melawan benda asing atau kuman di dalamnya. Febris akan terjadi dengan cepat. Perubahan suhu yang cepat merupakan faktor pemicu kejang. Umumnya, febris akan berlangsung lebih dari 10-14 hari. Demam bisa berarti banyak hal, tetapi kebanyakan demam ringan dan ringan tidak perlu dikhawatirkan. Paling sering, peningkatan suhu tubuh adalah respons normal terhadap infeksi, seperti pilek atau flu.', NULL, '1)	Kompres air hangat atau air dingin\r\n2)	Pilih pakaian tipis\r\n3)	Buat kamar anak lebih sejuk\r\n');
INSERT INTO `tb_penyakit` VALUES ('P06', 'Hordeolum', 'Hordeolum atau bintitan adalah istilah medis dari penyakit bintitan atau dikenal juga dengan sebutan timbilan. Hordeolum adalah benjolan kecil yang sekilas terlihat seperti jerawat atau lepuhan di dekat bulu mata. Penyebab mata bintitan biasanya adalah infeksi bakteri. Secara umum, hordeolum bukan kondisi serius. Biasanya, benjolan akan hilang dengan sendirinya dalam beberapa hari. Hordeolum dapat muncul pada bagian atas, bawah, dalam, luar, maupun tepi kelopak mata anak. Selain menimbulkan rasa sakit, mata bintitan pada anak menyebabkan bengkak, akibat infeksi. Bakteri disebut-sebut sebagai penyebabnya.', NULL, '1)	Mengompres kelopak mata dengan air hangat\r\n2)	Mengompres dengan air garam\r\n3)	Membersihkan area sekitar kelopak matanya\r\n4)	Kompres dengan teh hitam\r\n');
INSERT INTO `tb_penyakit` VALUES ('P07', 'Campak', 'Bayi dan anak-anak menjadi kelompok yang rentan terserang virus penyebab penyakit campak. Penyakit ini terjadi karena serangan virus campak golongan Paramyxovirus. Campak ditandai dengan beberapa gejala yang khas, seperti demam hingga lebih dari 40° C, batuk, muncul ruam di tubuh. Campak pada bayi sama sekali tidak boleh dianggap sepele. Jika tidak ditangani dengan tepat, campak disebut bisa memicu berbagai gangguan kesehatan, bahkan berujung pada hilangnya nyawa. Sejauh ini, cara paling ampuh untuk mencegah penularan penyakit ini adalah dengan vaksin atau imunisasi campak. Bayi dan anak-anak yang mendapat vaksin ini akan lebih terlindungi dari serangan virus penyebab campak. Gangguan kesehatan ini sebenarnya bersifat umum, tetapi bukan berarti boleh diabaikan. Orangtua perlu mengetahui dan mengenal gejala penyakit campak pada bayi. Umumnya, campak ditandai dengan gejala berupa demam. Hal ini menjadi tanda bahwa tengah terjadi infeksi akibat serangan virus di dalam tubuh bayi. Langkah-langkah yang dapat dilakukan untuk mempercepat penyembuhan ', NULL, '1)	Istirahatkan bayi dengan cukup\r\n2)	Mengompres mata bayi\r\n3)	Imunisasi campak\r\n');
INSERT INTO `tb_penyakit` VALUES ('P08', 'Hidrosefalus', 'Hidrosefalus adalah penumpukan cairan di rongga otak, sehingga meningkatkan tekanan pada otak. Pada bayi dan anak-anak, hidrosefalus membuat ukuran kepala membesar. Sedangkan pada orang dewasa, kondisi ini bisa menimbulkan sakit kepala hebat. Cairan otak diproduksi oleh otak secara terus menerus, dan diserap oleh pembuluh darah. Fungsinya sangat penting, antara lain melindungi otak dari cedera, menjaga tekanan pada otak, dan membuang limbah sisa metabolisme dari otak. Hidrosefalus terjadi ketika produksi dan penyerapan cairan otak tidak seimbang. Hidrosefalus dapat dialami oleh siapa saja, tetapi lebih sering dialami oleh bayi dan orang-orang yang berusia 60 tahun ke atas.', NULL, 'Operasi pemasangan shunt, shunt merupakan alat khusus berbentuk selang yang dipasangkan oleh ahli bedah ke dalam kepala guna mengalirkan cairan otak ke bagian tubuh lain dan diserap oleh pembuluh darah.');
INSERT INTO `tb_penyakit` VALUES ('P09', 'Infeksi Sinus', 'Sinus merupakan ruang udara kecil di tulang sekitar hidung. Infeksi pada organ satu ini seringkali terjadi, tak terkecuali infeksi sinus pada bayi. Peradangan yang terjadi bisa menjadi kondisi normal hingga akut, sehingga setiap orangtua sebaiknya mewaspadainya. Infeksi sinus umumnya terlihat setelah pilek, radang alergi atau infeksi saluran pernapasan atas. Namun, peneliti Laboratorium Penelitian Penyakit Alergi Mayo Clinic, Dr. David Sherris mengatakan bahwa penyebab sinusitis kronis sejauh ini belum diketahui, khususnya pada bayi. Gejala yang muncul pada bayi yaitu bayi mengalami bersin-bersin, bayi mengeluarkan cairan atau lendir pada hidung, bengkak disekitar hidung dan mata. Penanganan sinusitis pada bayi dilakukan dengan membawa bayi ke dokter THT (telinga, hidung, dan tenggorokan). Pemeriksaan menyeluruh biasanya mengarah pada diagnosis yang benar. ', NULL, 'Operasi pemasangan shunt, shunt merupakan alat khusus berbentuk selang yang dipasangkan oleh ahli bedah ke dalam kepala guna mengalirkan cairan otak ke bagian tubuh lain dan diserap oleh pembuluh darah.');
INSERT INTO `tb_penyakit` VALUES ('P10', 'Meningitis', 'Meningitis adalah radang dari selaput otak yaitu lapisan arachnoid dan piameter yang disebabkan oleh bakteri dan virus (Judha & Rahil, 2012). Meningitis adalah infeksi akut yang mengenai selaput mengineal yang dapat disebabkan oleh berbagai mikroorganisme dengan ditandai adanya gejala spesifik dari sistem saraf pusat yaitu gangguan kesadaran, gejala rangsang meningkat, gejala peningkatan tekanan intrakranial dan gejala defisit neurologi (Widagdo, 2011). Perlu di ketahui bahwa bayi dan balita adalah kelompok yang paling rentan mengalami meningitis. Pasalnya, lebih dari 50 persen kasus meningitis terjadi pada kelompok ini. Meningitis bisa berkembang secara tiba-tiba sekaligus menjadi serius dengan cepat sehingga berbagai gejala kemudian akan bermunculan. Gejala meningitis pada bayi yaitu demam, menangis terus menerus, kurang mau atau tidak mau menyusu. Setelah di ketahui gejala-gejala yang timbul pada bayi yang terjangkit meningitis sebaiknya di bawa ke dokter. Pengobatan serta perawatan meningitis pada bayi akan dokter lakukan sesuai dengan gejala, usia, serta kondisi kesehatan sebelumnya. ', NULL, '1)	Setelah diketahui gejala-gejala yang timbul pada bayi yang terjangkit meningitis sebaiknya di bawa ke dokter. Pengobatan serta perawatan meningitis pada bayi akan dokter lakukan sesuai dengan gejala, usia, serta kondisi kesehatan sebelumnya. Sebagai contoh, jika penyebab meningitis adalah bakteri, dokter akan memberikan antibiotik melalui intravena (iv) serta obat kortikosteroid untuk mengurangi peradangan\r\n2)	Jika penyebab meningitis adalah virus, dokter hanya bisa memberikan obat pereda nyeri untuk meredakan gejala. Hal ini karena meningitis virus umumnya pulih dalam 7 – 10 hari.\r\n');
INSERT INTO `tb_penyakit` VALUES ('P11', 'Polidaktili', 'Polidaktili adalah cacat atau kelainan bawaan yang membuat bayi lahir dengan tambahan jumlah jari tangan atau kaki. Polidaktili adalah kondisi yang bisa terjadi pada salah satu maupun kedua tangan atau kaki. Istilah polidaktili berasal dari bahasa Yunani yakni poli yang berarti “banyak” dan dactylos yang artinya “jari”. Polidaktili adalah kondisi kelainan bawaan yang bisa terbagi menjadi beberapa jenis. Mengutip dari Kids Health, cacat lahir ini biasanya paling sering terjadi pada sisi jari kelingking atau jari kelima di tangan dan kaki. Jenis polidaktili ini adalah postaxial. Sebaliknya, cacat lahir ini paling jarang terjadi di sisi ibu jari (preaxial) maupun tumbuh di bagian tengah jari tangan dan kaki. Ukuran jari tambahan, entah pada tangan atau kaki, umumnya lebih kecil dari ukuran jari yang lainnya. Kelainan bawaan ini bisa menurun dalam keluarga dan dipengaruhi juga oleh faktor lingkungan. Jadi, berisiko melahirkan bayi dengan kondisi kelainan lahir ini bila memiliki anggota keluarga lain yang juga mengalaminya. Polidaktili adalah kondisi kelainan bawaan yang biasanya ditangani dalam kurun waktu dua tahun pertama usia bayi. Pengobatan untuk polidaktili dilakukan dengan operasi, tetapi disesuaikan kembali dengan jenisnya.', NULL, 'Pengobatan untuk polidaktili dilakukan dengan operasi, tetapi disesuaikan kembali dengan jenisnya.');
INSERT INTO `tb_penyakit` VALUES ('P12', 'Anemia', 'Mengutip Cleveland Clinic, bayi juga bisa mengalami anemia, yaitu saat jumlah sel darah merah lebih rendah jumlahnya dari kadar normal. Sel darah merah atau hemoglobin (hb) berfungsi untuk membawa oksigen ke seluruh tubuh. Maka dari itu, hb yang rendah pada bayi bisa membuatnya terlihat pucat serta lemas. Gejalanya yaitu kekurangan hemoglobin, Tingkat oksigen dan darah rendah, kulit yang terlihat lebih pucat, bayi terlihat lemas, kulit tubuh bayi terlihat kuning. Penanganan anemia pada bayi akan disesuaikan dengan penyebab yang mendasarinya. Jika anemia disebabkan oleh perdarahan, maka penanganannya adalah dengan menghentikan perdarahan dan mengganti darah yang hilang lewat transfusi darah. ', NULL, '1)	Jika penyebab anemia adalah kurang zat besi, maka penanganannya adalah dengan pemberian makanan tinggi zat besi\r\n2)	Pemberian suplemen zat besi\r\n');
INSERT INTO `tb_penyakit` VALUES ('P13', 'Hernia Umbilikalis', 'Hernia adalah Penonjolan (protusio) abnormal organ, sebagian organ atau jaringan ke dalam rongga abdomen melalui suatu celah alami dari individu tersebut atau lubang abnormal yang terjadi pada dinding abdomen atau diafragma (Krishnamurthy, 1995) Hernia umbilikalis adalah kegagalan cincin umbilicus pada peritoneum untuk menutup sempurna sehingga terjadi penonjolan omentun, organ atau sebagian organ abdomen melalui cincin umbilikalis yang terbuka (Smith, 2002). Hernia umbilikalis adalah suatu kondisi ketika terdapat bagian usus yang menonjol keluar dari pusar. Kondisi ini umumnya dialami oleh bayi dan tidak berbahaya. Meskipun demikian, hernia umbilikalis juga dapat terjadi pada orang dewasa. Hernia umbilikalis umumnya akan menghilang dengan sendirinya setelah bayi berumur satu atau dua tahun, tetapi dapat juga bertahan lebih lama. Jika hernia umbilikalis menetap hingga anak berusia empat tahun, disarankan untuk menjalani prosedur operasi. Penyebab hernia umbilikalis adalah otot perut yang gagal menutup lubang bekas tali pusar dengan sempurna, sesaat setelah bayi lahir. Kegagalan tersebut dapat menyebabkan hernia umbilikalis pada bayi maupun setelah dewasa.', NULL, 'Hernia umbilikalis yang terjadi pada bayi biasanya akan menghilang seiring bertambahnya usia (memasuki usia 1-2 tahun), tanpa memerlukan tindakan pembedahan. Sebagian besar lubang akan menutup dengan sendirinya, namun bila terdapat tanda obstruksi/strangulasi usus, maka harus segera dioperasi.');
INSERT INTO `tb_penyakit` VALUES ('P14', 'tess', 'tess', 'tess.png', 'tesdasdsad');

SET FOREIGN_KEY_CHECKS = 1;
