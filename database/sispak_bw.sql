-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2022 pada 15.12
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak_bw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diagnosa`
--

CREATE TABLE `tb_diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `username` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `penyakit` varchar(4) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tanggal` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_diagnosa`
--

INSERT INTO `tb_diagnosa` (`id_diagnosa`, `username`, `penyakit`, `tanggal`) VALUES
(26, 'user', 'P01', '2022-06-05 12:09:58'),
(27, 'user', 'P01', '2022-06-05 12:10:17'),
(28, 'user', 'P01', '2022-06-05 12:13:10'),
(29, 'user', 'P01', '2022-06-05 12:13:33'),
(30, 'user', 'P01', '2022-06-05 12:14:01'),
(31, 'user', 'P02', '2022-06-05 12:32:44'),
(32, 'user', 'P01', '2022-06-05 17:04:22'),
(33, 'user', 'P01', '2022-06-05 17:45:30'),
(34, 'user', 'P02', '2022-06-05 18:20:13'),
(35, 'elyzaa', 'P02', '2022-06-05 19:09:33'),
(36, 'user', 'P01', '2022-06-06 14:57:20'),
(37, 'user', 'P01', '2022-06-06 20:46:32'),
(38, 'user', 'P01', '2022-06-06 20:54:02'),
(39, 'user', 'P02', '2022-06-06 20:54:14'),
(40, 'user', 'P01', '2022-06-07 09:47:49'),
(41, 'user', 'P03', '2022-06-07 11:34:15'),
(42, 'user', 'P03', '2022-06-07 11:34:41'),
(43, 'user', 'P01', '2022-06-07 11:35:12'),
(44, 'user', 'P01', '2022-06-07 11:35:18'),
(45, 'user', 'P01', '2022-06-07 11:35:32'),
(46, 'user', 'P01', '2022-06-07 11:37:05'),
(47, 'user', 'P04', '2022-06-07 12:00:49'),
(48, 'user', 'P12', '2022-06-07 12:15:57'),
(49, 'user', 'P12', '2022-06-07 12:16:33'),
(50, 'user', 'P04', '2022-06-20 00:26:19'),
(51, 'user', 'P02', '2022-06-21 01:51:19'),
(52, 'user', 'P02', '2022-06-21 02:26:51'),
(53, 'user', 'P02', '2022-06-21 02:38:08'),
(54, 'user', 'P02', '2022-06-21 02:39:10'),
(55, 'user', 'P02', '2022-06-21 02:39:56'),
(56, 'user', 'P02', '2022-06-21 02:40:28'),
(57, 'user', 'P02', '2022-06-21 02:40:51'),
(58, 'user', 'P02', '2022-06-21 02:42:18'),
(59, 'user', 'P02', '2022-06-21 02:42:38'),
(60, 'user', 'P07', '2022-06-21 02:43:03'),
(61, 'user', 'P01', '2022-06-21 12:04:50'),
(62, 'user', 'P03', '2022-06-21 19:45:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `kode_gejala` varchar(4) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G01', 'Bayi terlihat lemas'),
('G02', 'Suhu bayi terasa dingin'),
('G03', 'Kulit bayi memerah'),
('G04', 'Bayi sulit bernapas'),
('G05', 'Bayi sering buang air besar'),
('G06', 'Tinja bayi berwarna hitam'),
('G07', 'Nafas bayi tidak teratur'),
('G08', 'Bayi  mendengus'),
('G09', 'Kulit bayi membiru'),
('G10', 'Bayi batuk'),
('G11', 'Bayi buang air besar kurang dari tiga kali seminggu'),
('G12', 'Bayi rewel karena kesakitan ketika mengejan saat buang air besar'),
('G13', 'Bayi mengalami kesulitan mengeluarkan feses karena kering dan keras'),
('G14', 'Bayi berkeringat '),
('G15', 'Bayi menggigil '),
('G16', 'Benjolan kemerahan di kelopak mata '),
('G17', 'Benjolan kecil di kelopak mata '),
('G18', 'Mata bayi berair'),
('G19', 'Bayi demam hingga lebih dari 40° C '),
('G20', 'Muncul ruam di tubuh bayi'),
('G21', 'Lingkar kepala bayi terlihat semakin membesar'),
('G22', 'Urat urat pada kepala bayi terlihat jelas'),
('G23', 'Ubun ubun bayi terlihat menggelembung'),
('G24', 'Bayi mengalami bersin bersin'),
('G25', 'Bayi mengeluarkan cairan/lendir pada hidung'),
('G26', 'Bengkak disekitar hidung dan mata bayi'),
('G27', 'Bayi demam'),
('G28', 'Bayi menangis terus menerus '),
('G29', 'Bayi sulit mengkonsumsi asi'),
('G30', 'Terdapat ruam serta bercak berwarna ungu'),
('G31', 'Jumlah jari tangan atau kaki bayi berlebih'),
('G32', 'Benjolan kecil jaringan lunak yang menonjol, tidak mengandung tulang'),
('G33', 'Jari memiliki tulang namun tidak memiliki persendian'),
('G34', 'Bayi kekurangan hemoglobin'),
('G35', 'Tingkat oksigen dan darah rendah'),
('G36', 'Kulit yang terlihat lebih pucat'),
('G37', 'Kulit tubuh bayi terlihat kuning'),
('G38', 'Benjolan lunak di area pusar'),
('G39', 'Bengkak dan benjolan berubah warna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsul`
--

CREATE TABLE `tb_konsul` (
  `id_konsul` int(10) NOT NULL,
  `username` varchar(32) NOT NULL,
  `pesan` text NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_konsul`
--

INSERT INTO `tb_konsul` (`id_konsul`, `username`, `pesan`, `tujuan`, `waktu`) VALUES
(1, 'user', 'tess', 'pakar', '2022-06-09 09:47:26'),
(2, 'user', 'test lagi', 'pakar', '2022-06-09 09:50:00'),
(3, 'pakar', 'ya', 'user', '2022-06-09 09:58:28'),
(4, 'pakar', 'apa tuh', 'user', '2022-06-09 09:58:34'),
(5, 'user', 'ngga', 'pakar', '2022-06-09 09:58:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`username`, `nama`, `password`, `hak_akses`) VALUES
('alvins', 'alvin', '1234', 'admin'),
('asd', 'as', '123', 'user'),
('elyzaa', 'elyza', '1234', 'user'),
('niv', 'Alvin Supriyan', '1234', 'user'),
('pakar', 'pakar', 'pakar', 'pakar'),
('user', 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengetahuan`
--

CREATE TABLE `tb_pengetahuan` (
  `id_pengetahuan` int(11) NOT NULL,
  `kode_gejala` varchar(4) CHARACTER SET utf8mb4 DEFAULT NULL,
  `kode_penyakit` varchar(4) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_pengetahuan`
--

INSERT INTO `tb_pengetahuan` (`id_pengetahuan`, `kode_gejala`, `kode_penyakit`) VALUES
(45, 'G01', 'P01'),
(46, 'G02', 'P01'),
(47, 'G03', 'P01'),
(48, 'G04', 'P01'),
(49, 'G05', 'P02'),
(50, 'G06', 'P02'),
(51, 'G01', 'P02'),
(52, 'G07', 'P03'),
(53, 'G08', 'P03'),
(54, 'G09', 'P03'),
(55, 'G10', 'P03'),
(56, 'G11', 'P04'),
(57, 'G12', 'P04'),
(58, 'G13', 'P04'),
(59, 'G01', 'P05'),
(60, 'G14', 'P05'),
(61, 'G15', 'P05'),
(62, 'G16', 'P06'),
(63, 'G17', 'P06'),
(64, 'G18', 'P06'),
(65, 'G10', 'P07'),
(66, 'G19', 'P07'),
(67, 'G20', 'P07'),
(68, 'G21', 'P08'),
(69, 'G22', 'P08'),
(70, 'G23', 'P08'),
(71, 'G24', 'P09'),
(72, 'G25', 'P09'),
(73, 'G26', 'P09'),
(74, 'G27', 'P10'),
(75, 'G28', 'P10'),
(76, 'G29', 'P10'),
(77, 'G30', 'P10'),
(78, 'G31', 'P11'),
(79, 'G32', 'P11'),
(80, 'G33', 'P11'),
(81, 'G01', 'P12'),
(82, 'G34', 'P12'),
(83, 'G33', 'P12'),
(84, 'G35', 'P12'),
(85, 'G36', 'P12'),
(86, 'G37', 'P12'),
(87, 'G27', 'P13'),
(88, 'G38', 'P13'),
(89, 'G39', 'P13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `kode_penyakit` varchar(4) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `keterangan_penyakit` text DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `solusi` text NOT NULL,
  `penyebab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`kode_penyakit`, `nama_penyakit`, `keterangan_penyakit`, `foto`, `solusi`, `penyebab`) VALUES
('P01', 'Hipotermia', 'Hipotermia merupakan salah satu penyebab utama tingginya angka morbiditas dan mortalitas bayi baru lahir. Hipotermia pada bayi baru lahir disebabkan belum sempurnanya pengaturan suhu tubuh bayi, maupun pengetahuan yang kurang tentang pengelolaan bayi baru lahir yang benar. Pengaturan suhu tubuh bayi baru lahir sangat penting untuk kelangsungan hidup dan mencegah terjadinya hipotermia. Hipotermia pada bayi baru lahir mempengaruhi metabolisme tubuh dan dapat mengakibatkan komplikasi hipoglikemia, asidosis metabolik, distres pernapasan, dan infeksi. Hipotermia terjadi apabila suhu tubuh di bawah 36,50 C. Hipotermia terjadi akibat ketidakseimbangan antara produksi panas dan kehilangan panas. Kehilangan panas pada bayi baru lahir dapat melalui 4 cara yaitu evaporasi, konduksi, radiasi, dan konveksi. Kesalahan penanganan sesudah lahir dapat menyebabkan bayi baru lahir kehilangan panas akibat keempat cara tersebut (Puspita dkk., 2007). Hipotermia menyebabkan terjadinya penyempitan pembuluh darah yang mengakibatkan terjadinya metabolis anaerobik, meningkatkan kebutuhan oksigen, mengakibatkan hipoksemia dan berlanjut dengan kematian (Saifuddin, 2008).', 'Hipotermia.jpg', 'Apabila bayi kedinginan dan menunjukkan gejala hipotermia, cobalah untuk mengukur suhu tubuhnya. Pengukuran suhu yang paling akurat dapat dilakukan melalui rektal. Namun jika tidak memiliki termometer khusus rektal, pengukuran suhu lewat ketiak juga dapat dilakukan. Gunakan inkubator. Ganti pakaian basah dengan pakaian hangat disertai topi. Tempatkan bayi di ruangan hangat.\r\n', '1)	Pastikan bayi selalu memakai pakaian kering dan hangat.\r\n2)	Pastikan bahan pakaian menyerap keringat untuk menghindari keringat berlebih selama bayi beraktivitas\r\n'),
('P02', 'Diare', 'Diare merupakan sebuah kondisi ketika pengidapnya buang air besar (BAB) lebih sering dari biasanya. Selain itu, feses pengidap diare juga lebih encer. Meski diare bisa berlangsung singkat, ada kalanya diare bisa berlangsung selama beberapa hari. Dalam beberapa kasus, diare juga bisa terjadi hingga berminggu-minggu, diare merupakan penyakit kedua yang menyebabkan kematian pada anak-anak balita (bawah lima tahun) setelah pneumonia (WHO , 2013). Diare yang disebabkan oleh infeksi virus dapat sembuh dengan sendirinya dalam beberapa hari. Namun, bayi tetap perlu mendapatkan asupan cairan dan nutrisi yang cukup selama diare.', '', '1)	Bayi perlu mendapatkan asupan cairan dan nutrisi yang cukup selama diare\r\n2)	Memberikan asi dan cairan elektrolit\r\n3)	Memberikan suplemen zinc\r\n4)	Memberikan probiotik.\r\n', 'Rotavirus sebagai penyebab penyakit gastroenteritis adalah salah satu penyebab utama bayi mencret.'),
('P03', 'Dispnea', 'Sesak nafas, atau yang dalam bahasa medis disebut dispnea, adalah kondisi kesehatan di mana seseorang mengalami kesulitan bernapas. Beberapa orang yang mengalami kondisi ini menggambarkannya sebagai sensasi yang membuat tubuh seakan membutuhkan udara lebih banyak, dada menyempit, serta merasa tidak berdaya. Dispnea atau sesak napas adalah kondisi yang tidak nyaman, bahkan menyakitkan. Biasanya, ini menjadi gejala atau tanda adanya penyakit atau gangguan kesehatan. Frekuensi pernapasan normal pada bayi baru lahir adalah sekitar 40 kali per menit. Ini mungkin melambat hingga 20-40 kali per menit saat bayi sedang tidur. Pola pernapasan pada tiap bayi juga dapat berbeda-beda. Namun, beberapa kondisi dapat menyebabkan perubahan frekuensi dan pola pernapasan yang membuat napas bayi seperti sesak. ', '', '1)	Kurangi aktivitas anak di luar rumah saat udara sedang panas atau sedang dingin\r\n2)	Ciptakan lingkungan yang sehat untuk pernapasan bayi terutama di dalam rumah\r\n3)	Pastikan seluruh ruangan bebas dari debu, kotoran, polusi, dan asap rokok.\r\n', 'Pneumonia neonatal merupakan radang paru-paru yang terjadi pada bayi baru lahir. Kondisi ini bisa menyebabkan bayi sesak napas hebat yang berujung pada syok hingga kematian.'),
('P04', 'Konstipasi', 'Konstipasi merupakan masalah kesehatan yang umum terjadi pada bayi. Bayi yang mengalami sembelit, jarang buang air besar. Selain itu, feses yang keras dan kering juga bisa dialami bayi yang mengalami sembelit. Salah satu penyebab bayi mengalami sembelit adalah ketika bayi mulai makan makanan padat. Mengetahui frekuensi buang air besar bayi bisa membantu mengidentifikasi apakah bayi mengalami sembelit. Bayi yang mendapat asupan ASI akan lebih sering buang air besar daripada bayi yang diberi susu formula, karena ASI lebih mudah dicerna oleh bayi. Walaupun bayi sering buang air besar atau terlihat berusaha keras mengejan ketika buang air besar, selama feses bayi lunak, maka kemungkinan bayi mengalami konstipasi kecil.', '', '1)	Pijat perut bayi dengan baby-oil sebagai salah satu cara mengatasi sembelit pada bayi dengan gerakan lembut searah jarum jam\r\n2)	mandi air hangat dapat membantu otot-otot rileks\r\n3)	Gerakkan kaki bayi atau ajak bayi berolahraga seperti sedang bersepeda\r\n', '1)	Alergi atau intoleransi makanan\r\n2)	Hipotiroid\r\n3)	Gangguan sistem pencernaan dari lahir seperti penyakit hirschsprung\r\n'),
('P05', 'Obs Febris', 'Febris adalah istilah kedokteran yang lebih dikenal dengan demam di masyarakat awam, yakni panas suhu tubuh lebih dari 37° C. Diketahui bahwa febris merupakan kondisi yang normal, karena bisa menjadi tanda bahwa tubuh sedang melawan benda asing atau kuman di dalamnya. Febris akan terjadi dengan cepat. Perubahan suhu yang cepat merupakan faktor pemicu kejang. Umumnya, febris akan berlangsung lebih dari 10-14 hari. Demam bisa berarti banyak hal, tetapi kebanyakan demam ringan dan ringan tidak perlu dikhawatirkan. Paling sering, peningkatan suhu tubuh adalah respons normal terhadap infeksi, seperti pilek atau flu.', '', '1)	Kompres air hangat atau air dingin\r\n2)	Pilih pakaian tipis\r\n3)	Buat kamar anak lebih sejuk\r\n', 'Penyebab umumnya adalah infeksi. Namun selain infeksi, bayi baru lahir juga dapat mengalami demam akibat dehidrasi, efek samping vaksinasi, atau kegerahan karena mengenakan pakaian yang terlalu ketat dan tertutup.'),
('P06', 'Hordeolum', 'Hordeolum atau bintitan adalah istilah medis dari penyakit bintitan atau dikenal juga dengan sebutan timbilan. Hordeolum adalah benjolan kecil yang sekilas terlihat seperti jerawat atau lepuhan di dekat bulu mata. Penyebab mata bintitan biasanya adalah infeksi bakteri. Secara umum, hordeolum bukan kondisi serius. Biasanya, benjolan akan hilang dengan sendirinya dalam beberapa hari. Hordeolum dapat muncul pada bagian atas, bawah, dalam, luar, maupun tepi kelopak mata anak. Selain menimbulkan rasa sakit, mata bintitan pada anak menyebabkan bengkak, akibat infeksi. Bakteri disebut-sebut sebagai penyebabnya.', '', '1)	Mengompres kelopak mata dengan air hangat\r\n2)	Mengompres dengan air garam\r\n3)	Membersihkan area sekitar kelopak matanya\r\n4)	Kompres dengan teh hitam\r\n', 'Diakibatkan oleh infeksi bakteri dan menyebabkan benjolan pada mata yang terasa nyeri.'),
('P07', 'Campak', 'Bayi dan anak-anak menjadi kelompok yang rentan terserang virus penyebab penyakit campak. Penyakit ini terjadi karena serangan virus campak golongan Paramyxovirus. Campak ditandai dengan beberapa gejala yang khas, seperti demam hingga lebih dari 40° C, batuk, muncul ruam di tubuh. Campak pada bayi sama sekali tidak boleh dianggap sepele. Jika tidak ditangani dengan tepat, campak disebut bisa memicu berbagai gangguan kesehatan, bahkan berujung pada hilangnya nyawa. Sejauh ini, cara paling ampuh untuk mencegah penularan penyakit ini adalah dengan vaksin atau imunisasi campak. Bayi dan anak-anak yang mendapat vaksin ini akan lebih terlindungi dari serangan virus penyebab campak. Gangguan kesehatan ini sebenarnya bersifat umum, tetapi bukan berarti boleh diabaikan. Orangtua perlu mengetahui dan mengenal gejala penyakit campak pada bayi. Umumnya, campak ditandai dengan gejala berupa demam. Hal ini menjadi tanda bahwa tengah terjadi infeksi akibat serangan virus di dalam tubuh bayi. Langkah-langkah yang dapat dilakukan untuk mempercepat penyembuhan ', '', '1)	Istirahatkan bayi dengan cukup\r\n2)	Mengompres mata bayi\r\n3)	Imunisasi campak\r\n', 'Disebabkan oleh virus paramyxovirus yang sangat menular. Virus ini disebarkan melalui udara dan menginfeksi saluran pernapasan lalu menyebar ke seluruh tubuh.'),
('P08', 'Hidrosefalus', 'Hidrosefalus adalah penumpukan cairan di rongga otak, sehingga meningkatkan tekanan pada otak. Pada bayi dan anak-anak, hidrosefalus membuat ukuran kepala membesar. Sedangkan pada orang dewasa, kondisi ini bisa menimbulkan sakit kepala hebat. Cairan otak diproduksi oleh otak secara terus menerus, dan diserap oleh pembuluh darah. Fungsinya sangat penting, antara lain melindungi otak dari cedera, menjaga tekanan pada otak, dan membuang limbah sisa metabolisme dari otak. Hidrosefalus terjadi ketika produksi dan penyerapan cairan otak tidak seimbang. Hidrosefalus dapat dialami oleh siapa saja, tetapi lebih sering dialami oleh bayi dan orang-orang yang berusia 60 tahun ke atas.', 'Hidrosefalus.jpg', 'Operasi pemasangan shunt, shunt merupakan alat khusus berbentuk selang yang dipasangkan oleh ahli bedah ke dalam kepala guna mengalirkan cairan otak ke bagian tubuh lain dan diserap oleh pembuluh darah.', 'Disebabkan oleh ketidakseimbangan antara produksi dan penyerapan cairan di dalam otak. Akibatnya, cairan di dalam otak terlalu banyak dan membuat tekanan dalam kepala meningkat. Kondisi ini bisa disebabkan oleh beberapa faktor, yaitu: aliran cairan otak yang tersumbat.'),
('P09', 'Infeksi Sinus', 'Sinus merupakan ruang udara kecil di tulang sekitar hidung. Infeksi pada organ satu ini seringkali terjadi, tak terkecuali infeksi sinus pada bayi. Peradangan yang terjadi bisa menjadi kondisi normal hingga akut, sehingga setiap orangtua sebaiknya mewaspadainya. Infeksi sinus umumnya terlihat setelah pilek, radang alergi atau infeksi saluran pernapasan atas. Namun, peneliti Laboratorium Penelitian Penyakit Alergi Mayo Clinic, Dr. David Sherris mengatakan bahwa penyebab sinusitis kronis sejauh ini belum diketahui, khususnya pada bayi. Gejala yang muncul pada bayi yaitu bayi mengalami bersin-bersin, bayi mengeluarkan cairan atau lendir pada hidung, bengkak disekitar hidung dan mata. Penanganan sinusitis pada bayi dilakukan dengan membawa bayi ke dokter THT (telinga, hidung, dan tenggorokan). Pemeriksaan menyeluruh biasanya mengarah pada diagnosis yang benar. ', '', 'Operasi pemasangan shunt, shunt merupakan alat khusus berbentuk selang yang dipasangkan oleh ahli bedah ke dalam kepala guna mengalirkan cairan otak ke bagian tubuh lain dan diserap oleh pembuluh darah.', 'Satu atau lebih dari sinus tersumbat, sehingga mencegah keluarnya drainase. Ketika hal itu terjadi, lendir menjadi terperangkap. Sinus pun menjadi meradang, dan bakteri dapat tumbuh, sehingga mengakibatkan infeksi.'),
('P10', 'Meningitis', 'Meningitis adalah radang dari selaput otak yaitu lapisan arachnoid dan piameter yang disebabkan oleh bakteri dan virus (Judha & Rahil, 2012). Meningitis adalah infeksi akut yang mengenai selaput mengineal yang dapat disebabkan oleh berbagai mikroorganisme dengan ditandai adanya gejala spesifik dari sistem saraf pusat yaitu gangguan kesadaran, gejala rangsang meningkat, gejala peningkatan tekanan intrakranial dan gejala defisit neurologi (Widagdo, 2011). Perlu di ketahui bahwa bayi dan balita adalah kelompok yang paling rentan mengalami meningitis. Pasalnya, lebih dari 50 persen kasus meningitis terjadi pada kelompok ini. Meningitis bisa berkembang secara tiba-tiba sekaligus menjadi serius dengan cepat sehingga berbagai gejala kemudian akan bermunculan. Gejala meningitis pada bayi yaitu demam, menangis terus menerus, kurang mau atau tidak mau menyusu. Setelah di ketahui gejala-gejala yang timbul pada bayi yang terjangkit meningitis sebaiknya di bawa ke dokter. Pengobatan serta perawatan meningitis pada bayi akan dokter lakukan sesuai dengan gejala, usia, serta kondisi kesehatan sebelumnya. ', '', '1)	Setelah diketahui gejala-gejala yang timbul pada bayi yang terjangkit meningitis sebaiknya di bawa ke dokter. Pengobatan serta perawatan meningitis pada bayi akan dokter lakukan sesuai dengan gejala, usia, serta kondisi kesehatan sebelumnya. Sebagai contoh, jika penyebab meningitis adalah bakteri, dokter akan memberikan antibiotik melalui intravena (iv) serta obat kortikosteroid untuk mengurangi peradangan\r\n2)	Jika penyebab meningitis adalah virus, dokter hanya bisa memberikan obat pereda nyeri untuk meredakan gejala. Hal ini karena meningitis virus umumnya pulih dalam 7 – 10 hari.\r\n', 'Penyebab umum terjadinya meningitis pada anak adalah adanya infeksi dari bakteri, virus, jamur, atau parasit. Infeksi ini berpindah ke cairan tulang belakang serebral (CSF). Sementara CSF merupakan cairan yang melindungi otak dan sumsum tulang belakang.'),
('P11', 'Polidaktili', 'Polidaktili adalah cacat atau kelainan bawaan yang membuat bayi lahir dengan tambahan jumlah jari tangan atau kaki. Polidaktili adalah kondisi yang bisa terjadi pada salah satu maupun kedua tangan atau kaki. Istilah polidaktili berasal dari bahasa Yunani yakni poli yang berarti “banyak” dan dactylos yang artinya “jari”. Polidaktili adalah kondisi kelainan bawaan yang bisa terbagi menjadi beberapa jenis. Mengutip dari Kids Health, cacat lahir ini biasanya paling sering terjadi pada sisi jari kelingking atau jari kelima di tangan dan kaki. Jenis polidaktili ini adalah postaxial. Sebaliknya, cacat lahir ini paling jarang terjadi di sisi ibu jari (preaxial) maupun tumbuh di bagian tengah jari tangan dan kaki. Ukuran jari tambahan, entah pada tangan atau kaki, umumnya lebih kecil dari ukuran jari yang lainnya. Kelainan bawaan ini bisa menurun dalam keluarga dan dipengaruhi juga oleh faktor lingkungan. Jadi, berisiko melahirkan bayi dengan kondisi kelainan lahir ini bila memiliki anggota keluarga lain yang juga mengalaminya. Polidaktili adalah kondisi kelainan bawaan yang biasanya ditangani dalam kurun waktu dua tahun pertama usia bayi. Pengobatan untuk polidaktili dilakukan dengan operasi, tetapi disesuaikan kembali dengan jenisnya.', 'Polidaktili.jpg', 'Pengobatan untuk polidaktili dilakukan dengan operasi, tetapi disesuaikan kembali dengan jenisnya.', 'Karena faktor genetik saat hamil atau keturunan keluarga. Dengan kata lain, genetik atau riwayat keturunan dari orangtua ke anak dapat menjadi penyebab bayi lahir dengan jumlah jari tangan atau kaki berlebih.'),
('P12', 'Anemia', 'Mengutip Cleveland Clinic, bayi juga bisa mengalami anemia, yaitu saat jumlah sel darah merah lebih rendah jumlahnya dari kadar normal. Sel darah merah atau hemoglobin (hb) berfungsi untuk membawa oksigen ke seluruh tubuh. Maka dari itu, hb yang rendah pada bayi bisa membuatnya terlihat pucat serta lemas. Gejalanya yaitu kekurangan hemoglobin, Tingkat oksigen dan darah rendah, kulit yang terlihat lebih pucat, bayi terlihat lemas, kulit tubuh bayi terlihat kuning. Penanganan anemia pada bayi akan disesuaikan dengan penyebab yang mendasarinya. Jika anemia disebabkan oleh perdarahan, maka penanganannya adalah dengan menghentikan perdarahan dan mengganti darah yang hilang lewat transfusi darah. ', '', '1)	Jika penyebab anemia adalah kurang zat besi, maka penanganannya adalah dengan pemberian makanan tinggi zat besi\r\n2)	Pemberian suplemen zat besi\r\n', 'Anemia pada bayi baru lahir bisa disebabkan oleh kerusakan sel darah merah. Umumnya, hal ini terjadi ketika bayi mengalami inkompatibilitas ABO atau rhesus (Rh), yaitu ketidakcocokan golongan darah bayi dengan ibu. Selain itu, kerusakan sel darah merah pada bayi juga bisa terjadi akibat thalassemia.'),
('P13', 'Hernia Umbilikalis', 'Hernia adalah Penonjolan (protusio) abnormal organ, sebagian organ atau jaringan ke dalam rongga abdomen melalui suatu celah alami dari individu tersebut atau lubang abnormal yang terjadi pada dinding abdomen atau diafragma (Krishnamurthy, 1995) Hernia umbilikalis adalah kegagalan cincin umbilicus pada peritoneum untuk menutup sempurna sehingga terjadi penonjolan omentun, organ atau sebagian organ abdomen melalui cincin umbilikalis yang terbuka (Smith, 2002). Hernia umbilikalis adalah suatu kondisi ketika terdapat bagian usus yang menonjol keluar dari pusar. Kondisi ini umumnya dialami oleh bayi dan tidak berbahaya. Meskipun demikian, hernia umbilikalis juga dapat terjadi pada orang dewasa. Hernia umbilikalis umumnya akan menghilang dengan sendirinya setelah bayi berumur satu atau dua tahun, tetapi dapat juga bertahan lebih lama. Jika hernia umbilikalis menetap hingga anak berusia empat tahun, disarankan untuk menjalani prosedur operasi. Penyebab hernia umbilikalis adalah otot perut yang gagal menutup lubang bekas tali pusar dengan sempurna, sesaat setelah bayi lahir. Kegagalan tersebut dapat menyebabkan hernia umbilikalis pada bayi maupun setelah dewasa.', 'Hernia Umbilikalis.jpg', 'Hernia umbilikalis yang terjadi pada bayi biasanya akan menghilang seiring bertambahnya usia (memasuki usia 1-2 tahun), tanpa memerlukan tindakan pembedahan. Sebagian besar lubang akan menutup dengan sendirinya, namun bila terdapat tanda obstruksi/strangulasi usus, maka harus segera dioperasi.', 'Perut yang tidak dapat menutup dengan sempurna. Hal ini mengakibatkan adanya lubang kecil bekas tali pusar yang terdapat pada otot perut. Melalui lubang tersebut, sebagian usus halus dapat keluar dan mengakibatkan munculnya benjolan pada pusar.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`) USING BTREE,
  ADD KEY `username` (`username`) USING BTREE,
  ADD KEY `kd_penyakit` (`penyakit`) USING BTREE;

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kode_gejala`) USING BTREE;

--
-- Indeks untuk tabel `tb_konsul`
--
ALTER TABLE `tb_konsul`
  ADD PRIMARY KEY (`id_konsul`) USING BTREE,
  ADD KEY `user_name` (`username`) USING BTREE;

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`) USING BTREE;

--
-- Indeks untuk tabel `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`) USING BTREE,
  ADD KEY `kd_gejala` (`kode_gejala`) USING BTREE,
  ADD KEY `kd_penyakit_pengetahuan` (`kode_penyakit`) USING BTREE;

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`kode_penyakit`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `tb_konsul`
--
ALTER TABLE `tb_konsul`
  MODIFY `id_konsul` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  MODIFY `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD CONSTRAINT `kd_penyakit` FOREIGN KEY (`penyakit`) REFERENCES `tb_penyakit` (`kode_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `tb_login` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_konsul`
--
ALTER TABLE `tb_konsul`
  ADD CONSTRAINT `user_name` FOREIGN KEY (`username`) REFERENCES `tb_login` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  ADD CONSTRAINT `kd_gejala` FOREIGN KEY (`kode_gejala`) REFERENCES `tb_gejala` (`kode_gejala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kd_penyakit_pengetahuan` FOREIGN KEY (`kode_penyakit`) REFERENCES `tb_penyakit` (`kode_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
