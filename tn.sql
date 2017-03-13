-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2017 at 08:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `jabatan`, `status`, `username`, `password`) VALUES
(1, 'Johan', 'Manager', 'super admin', 'admin', 'admin'),
(2, 'angel', 'sekertaris', 'admin', 'user', 'user'),
(4, 'cici', 'mahasiswa', 'admin', 'cici', 'cici');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_jalur`
--

CREATE TABLE `jumlah_jalur` (
  `id_jalur` int(11) NOT NULL,
  `jumlah_jalur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jumlah_jalur`
--

INSERT INTO `jumlah_jalur` (`id_jalur`, `jumlah_jalur`) VALUES
(1, 6),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id_link` int(11) NOT NULL,
  `nama_link` varchar(50) DEFAULT NULL,
  `id_port1` int(11) DEFAULT NULL,
  `id_port2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id_link`, `nama_link`, `id_port1`, `id_port2`) VALUES
(1, 'JTN-CKA', 21, 76),
(2, 'CKA-JTN', 76, 21);

-- --------------------------------------------------------

--
-- Table structure for table `link_statis`
--

CREATE TABLE `link_statis` (
  `id_link` int(5) NOT NULL,
  `host_a` varchar(100) DEFAULT NULL,
  `host_b` varchar(50) DEFAULT NULL,
  `fa_a` varchar(15) DEFAULT NULL,
  `fa_b` varchar(15) DEFAULT NULL,
  `nms` varchar(20) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `ne_a` varchar(30) DEFAULT NULL,
  `board_a` varchar(30) DEFAULT NULL,
  `rack_a` int(1) DEFAULT NULL,
  `shelf_a` int(2) DEFAULT NULL,
  `slot_a` int(2) DEFAULT NULL,
  `port_a` varchar(5) DEFAULT NULL,
  `freq_a` varchar(10) DEFAULT NULL,
  `ne_b` varchar(30) DEFAULT NULL,
  `board_b` varchar(30) DEFAULT NULL,
  `rack_b` int(1) DEFAULT NULL,
  `shelf_b` int(2) DEFAULT NULL,
  `slot_b` int(2) DEFAULT NULL,
  `port_b` varchar(5) DEFAULT NULL,
  `freq_b` varchar(10) DEFAULT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link_statis`
--


-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(5) NOT NULL,
  `nms` varchar(50) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `lng` double NOT NULL,
  `lat` double NOT NULL,
  `kd` varchar(5) NOT NULL,
  `warna` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nms`, `nama_lokasi`, `lng`, `lat`, `kd`, `warna`) VALUES
(1, 'SBCS', 'AMIR HAMZAH', 3.736264, 98.441425, 'SB', 'fa7124'),
(2, 'SBCS', 'ANCOL', 3.209604, 99.063093, 'SB', 'fa7124'),
(3, 'SBCS', 'BALIGE', 2.333737, 99.083255, 'SB', 'fa7124'),
(4, 'SBCS', 'BANDA ACEH', 5.54897, 95.32235, 'SB', 'fa7124'),
(5, 'SBCS', 'BANGKINANG', 0.341343, 101.026662, 'SB', 'fa7124'),
(6, 'SBCS', 'BATAM CENTER', 1.130712, 104.055527, 'SB', 'fa7124'),
(7, 'SBCS', 'BATURAJA', -4.12404, 104.166854, 'SB', 'fa7124'),
(8, 'SBCS', 'BELANTI', -3.287683, 104.916799, 'SB', 'fa7124'),
(9, 'SBCS', 'BIREUN', 5.204144, 96.70173, 'SB', 'fa7124'),
(10, 'SBCS', 'BLANGPIDIE', 3.743221, 96.833023, 'SB', 'fa7124'),
(11, 'SBCS', 'BUKIT  DANGAS', 1.12257, 103.945543, 'SB', 'fa7124'),
(12, 'SBCS', 'BUKIT TINGGI', -0.305164, 100.366744, 'SB', 'fa7124'),
(13, 'SBCS', 'CIKUPA', -6.215095, 106.51273, 'SB', 'fa7124'),
(14, 'SBCS', 'DUMAI', 1.666905, 101.39872, 'SB', 'fa7124'),
(15, 'SBCS', 'DURI', 1.259655, 101.213124, 'SB', 'fa7124'),
(16, 'SBCS', 'JATINEGARA', -6.222619, 106.869952, 'SB', 'fa7124'),
(17, 'SBCS', 'KABANJAHE', 3.105751, 98.500419, 'SB', 'fa7124'),
(18, 'SBCS', 'KALAPA', -1.850954, 105.599323, 'SB', 'fa7124'),
(19, 'SBCS', 'KENANGA', -1.921019, 106.119748, 'SB', 'fa7124'),
(20, 'SBCS', 'KISARAN', 2.983445, 99.627524, 'SB', 'fa7124'),
(21, 'SBCS', 'KOBA', -2.486412, 106.414243, 'SB', 'fa7124'),
(22, 'SBCS', 'LAMBARO', 5.51096, 95.35468, 'SB', 'fa7124'),
(23, 'SBCS', 'LAMPUNG', -5.048869, 105.303126, 'SB', 'fa7124'),
(24, 'SBCS', 'LANGSA', 4.472331, 97.974263, 'SB', 'fa7124'),
(25, 'SBCS', 'LHOKSEUMAWE', 5.183512, 97.141278, 'SB', 'fa7124'),
(26, 'SBCS', 'LUBUK BASUNG', -0.331018, 100.0568, 'SB', 'fa7124'),
(27, 'SBCS', 'LUBUK SIKAPUNG', 0.159271, 100.125088, 'SB', 'fa7124'),
(28, 'SBCS', 'MARPOYAN', 0.455989, 101.4339, 'SB', 'fa7124'),
(29, 'SBCS', 'MEDAN', 3.592936, 98.678406, 'SB', 'fa7124'),
(30, 'SBCS', 'MEULABOH', 4.143617, 96.129243, 'SB', 'fa7124'),
(31, 'SBCS', 'MUNTOK', -2.064361, 105.162851, 'SB', 'fa7124'),
(32, 'SBCS', 'PADANG', -0.949819, 100.412542, 'SB', 'fa7124'),
(33, 'SBCS', 'PADANG SIDEMPUAN', 1.37214, 99.273109, 'SB', 'fa7124'),
(34, 'SBCS', 'PALEMBANG', -2.976567, 104.782874, 'SB', 'fa7124'),
(35, 'SBCS', 'PANGKAL PINANG', -2.111534, 106.112973, 'SB', 'fa7124'),
(36, 'SBCS', 'PEKAN BARU', 0.506581, 101.454562, 'SB', 'fa7124'),
(37, 'SBCS', 'PEMATANG SIANTAR', 2.963734, 99.073447, 'SB', 'fa7124'),
(38, 'SBCS', 'PESAREAN', -6.923602, 109.124713, 'SB', 'fa7124'),
(39, 'SBCS', 'PULO BRAYAN', 3.627956, 98.667254, 'SB', 'fa7124'),
(40, 'SBCS', 'RANTAU PRAPAT', 3.550822, 98.654229, 'SB', 'fa7124'),
(41, 'SBCS', 'SIBOLGA', 1.736913, 98.786464, 'SB', 'fa7124'),
(42, 'SBCS', 'SIGLI', 5.387244, 95.962405, 'SB', 'fa7124'),
(43, 'SBCS', 'SUBULUSALAM', 2.645481, 98.014691, 'SB', 'fa7124'),
(44, 'SBCS', 'TAKENGON', 4.634468, 96.843821, 'SB', 'fa7124'),
(45, 'SBCS', 'TALANG KALAPA', -2.943104, 104.690018, 'SB', 'fa7124'),
(46, 'SBCS', 'TANJUNG BEMBAN', 2.237888, 102.338487, 'SB', 'fa7124'),
(47, 'SBCS', 'TEBING TINGGI', 3.327381, 99.161679, 'SB', 'fa7124'),
(48, 'SBCS', 'TEMBUANG', 0, 0, 'SB', 'fa7124'),
(49, 'SBCS', 'TOBOLALI', -2.999591, 106.46281, 'SB', 'fa7124'),
(50, 'JASUKA', 'ARIFIN ACHMAD', 0.480999, 101.441871, 'JS', 'fefd02'),
(51, 'JASUKA', 'BANDAR LAMPUNG', -5.396455, 105.267131, 'JS', 'fefd02'),
(52, 'JASUKA', 'BANGKINANG', 0.341, 101.02649, 'JS', 'fefd02'),
(53, 'JASUKA', 'BANGKO', -2.073945, 102.273547, 'JS', 'fefd02'),
(54, 'JASUKA', 'BATAM CENTER', 1.130712, 104.05542, 'JS', 'fefd02'),
(55, 'JASUKA', 'BATURAJA', -4.123898, 104.167974, 'JS', 'fefd02'),
(56, 'JASUKA', 'BELANTI', -3.359486, 104.745672, 'JS', 'fefd02'),
(57, 'JASUKA', 'BENGKULU', -3.794512, 102.264063, 'JS', 'fefd02'),
(58, 'JASUKA', 'BUKIT DANGAS', 1.122725, 103.945491, 'JS', 'fefd02'),
(59, 'JASUKA', 'CIKUPA', -6.204841, 106.514992, 'JS', 'fefd02'),
(60, 'JASUKA', 'DANGAS', 0, 0, 'JS', 'fefd02'),
(61, 'JASUKA', 'DUMAI', 1.667231, 101.400126, 'JS', 'fefd02'),
(62, 'JASUKA', 'DURI', 1.259705, 101.213097, 'JS', 'fefd02'),
(63, 'JASUKA', 'GAMBIR', -6.174941, 106.827091, 'JS', 'fefd02'),
(64, 'JASUKA', 'JAMBI', -1.611121, 103.611242, 'JS', 'fefd02'),
(65, 'JASUKA', 'JATINEGARA', -6.227142, 106.881195, 'JS', 'fefd02'),
(66, 'JASUKA', 'JATINEGARA2', -6.226984, 106.868344, 'JS', 'fefd02'),
(67, 'JASUKA', 'KENANGA', -6.198017, 106.680691, 'JS', 'fefd02'),
(68, 'JASUKA', 'KILIRANJAO', -0.876749, 101.316762, 'JS', 'fefd02'),
(69, 'JASUKA', 'KRUI', -5.192222, 103.930579, 'JS', 'fefd02'),
(70, 'JASUKA', 'LAHAT', -3.785728, 103.53993, 'JS', 'fefd02'),
(71, 'JASUKA', 'LAMPUNG', -4.556221, 105.374538, 'JS', 'fefd02'),
(72, 'JASUKA', 'LUBUK LINGGAU', -3.298957, 102.85463, 'JS', 'fefd02'),
(73, 'JASUKA', 'MUARA BULIAN', -1.659895, 103.274096, 'JS', 'fefd02'),
(74, 'JASUKA', 'MUARA BUNGO', -1.54359, 102.177333, 'JS', 'fefd02'),
(75, 'JASUKA', 'MUARA TEBO', -1.477181, 102.451537, 'JS', 'fefd02'),
(76, 'JASUKA', 'PADANG', -0.9457, 100.397436, 'JS', 'fefd02'),
(77, 'JASUKA', 'PADANG SIBULUK', -0.701573, 100.825497, 'JS', 'fefd02'),
(78, 'JASUKA', 'PALEMBANG', -2.974641, 104.746263, 'JS', 'fefd02'),
(79, 'JASUKA', 'PALEMBANG CENTRUM', 0, 0, 'JS', 'fefd02'),
(80, 'JASUKA', 'PEKANBARU', 0.504865, 101.446666, 'JS', 'fefd02'),
(81, 'JASUKA', 'PONTIANAK', -0.024408, 109.3391, 'JS', 'fefd02'),
(82, 'JASUKA', 'RANGAT', -0.36705, 102.546215, 'JS', 'fefd02'),
(83, 'JASUKA', 'SOLOK', -0.788567, 100.654949, 'JS', 'fefd02'),
(84, 'JASUKA', 'SOROK LANGUN', 0, 0, 'JS', 'fefd02'),
(85, 'JASUKA', 'TALANG KELAPA', -2.93419, 104.69534, 'JS', 'fefd02'),
(86, 'JASUKA', 'TANJUNG ENIM', -3.764835, 103.778388, 'JS', 'fefd02'),
(87, 'JASUKA', 'TANJUNG PAKIS', -5.970629, 107.126742, 'JS', 'fefd02'),
(88, 'JASUKA', 'TEBING TINGGI', 3.327293, 99.162757, 'JS', 'fefd02'),
(89, 'JASUKA', 'TELUK KUANTAN', -0.524036, 101.559744, 'JS', 'fefd02'),
(90, 'JASUKA', 'TJ PAKIS', -5.96834, 107.109217, 'JS', 'fefd02'),
(91, 'JASUKA', 'TJ PAUH', -0.243723, 100.626455, 'JS', 'fefd02'),
(92, 'JASUKA', 'TTC_DLD', 0, 0, 'JS', 'fefd02'),
(93, 'JVBB', 'Ampel', -7, 112, 'JV', '5ce3f0'),
(94, 'JVBB', 'Bandung', -6, 107, 'JV', '5ce3f0'),
(95, 'JVBB', 'Bangkalan', -7, 112, 'JV', '5ce3f0'),
(96, 'JVBB', 'banyuwangi', -8, 114, 'JV', '5ce3f0'),
(97, 'JVBB', 'BCA', 0, 0, 'JV', '5ce3f0'),
(98, 'JVBB', 'Benculuk', -8, 114, 'JV', '5ce3f0'),
(99, 'JVBB', 'Benoa', -8, 115, 'JV', '5ce3f0'),
(100, 'JVBB', 'Cianjur', -6, 107, 'JV', '5ce3f0'),
(101, 'JVBB', 'cicadas', -6, 107, 'JV', '5ce3f0'),
(102, 'JVBB', 'Cikupa', -6, 106, 'JV', '5ce3f0'),
(103, 'JVBB', 'cirebon', -6, 108, 'JV', '5ce3f0'),
(104, 'JVBB', 'dago', -6, 107, 'JV', '5ce3f0'),
(105, 'JVBB', 'Denpasar', -8, 115, 'JV', '5ce3f0'),
(106, 'JVBB', 'Garut', -6, 106, 'JV', '5ce3f0'),
(107, 'JVBB', 'Gayungan', -7, 112, 'JV', '5ce3f0'),
(108, 'JVBB', 'Gianyar', -8, 115, 'JV', '5ce3f0'),
(109, 'JVBB', 'Godong', -7, 110, 'JV', '5ce3f0'),
(110, 'JVBB', 'Gombel', -7, 110, 'JV', '5ce3f0'),
(111, 'JVBB', 'HR Muhammad', -7, 112, 'JV', '5ce3f0'),
(112, 'JVBB', 'intiland', -7, 112, 'JV', '5ce3f0'),
(113, 'JVBB', 'Jatinegara', -6, 106, 'JV', '5ce3f0'),
(114, 'JVBB', 'jember', -8, 113, 'JV', '5ce3f0'),
(115, 'JVBB', 'kaliasem', -8, 115, 'JV', '5ce3f0'),
(116, 'JVBB', 'Karya Mulya', 0, 0, 'JV', '5ce3f0'),
(117, 'JVBB', 'Kebalen', -6, 107, 'JV', '5ce3f0'),
(118, 'JVBB', 'Kediri', -7, 112, 'JV', '5ce3f0'),
(119, 'JVBB', 'Ketapang', -1, 110, 'JV', '5ce3f0'),
(120, 'JVBB', 'Kintamani', -8, 115, 'JV', '5ce3f0'),
(121, 'JVBB', 'Kuta', -8, 115, 'JV', '5ce3f0'),
(122, 'JVBB', 'madiun', -7, 111, 'JV', '5ce3f0'),
(123, 'JVBB', 'magelang', -7, 110, 'JV', '5ce3f0'),
(124, 'JVBB', 'malang', -7, 112, 'JV', '5ce3f0'),
(125, 'JVBB', 'mataram', -8, 116, 'JV', '5ce3f0'),
(126, 'JVBB', 'negara', -8, 114, 'JV', '5ce3f0'),
(127, 'JVBB', 'nusa2', -8, 115, 'JV', '5ce3f0'),
(128, 'JVBB', 'nusukan', -7, 110, 'JV', '5ce3f0'),
(129, 'JVBB', 'pamekasan', -7, 113, 'JV', '5ce3f0'),
(130, 'JVBB', 'purwokerto', -7, 109, 'JV', '5ce3f0'),
(131, 'JVBB', 'renon', -8, 115, 'JV', '5ce3f0'),
(132, 'JVBB', 'rungkut', -7, 112, 'JV', '5ce3f0'),
(133, 'JVBB', 'sampang', -7, 113, 'JV', '5ce3f0'),
(134, 'JVBB', 'sanur', -8, 115, 'JV', '5ce3f0'),
(135, 'JVBB', 'sigma', 0, 0, 'JV', '5ce3f0'),
(136, 'JVBB', 'singaraja', -8, 115, 'JV', '5ce3f0'),
(137, 'JVBB', 'situbondo', -7, 113, 'JV', '5ce3f0'),
(138, 'JVBB', 'soetta', 0, 0, 'JV', '5ce3f0'),
(139, 'JVBB', 'solo', -7, 110, 'JV', '5ce3f0'),
(140, 'JVBB', 'sukabumi', -6, 106, 'JV', '5ce3f0'),
(141, 'JVBB', 'tabanan', -8, 115, 'JV', '5ce3f0'),
(142, 'JVBB', 'tasikmalaya', -7, 108, 'JV', '5ce3f0'),
(143, 'JVBB', 'tegal', -6, 109, 'JV', '5ce3f0'),
(144, 'JVBB', 'yogya', -7, 110, 'JV', '5ce3f0');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id_merk` int(11) NOT NULL,
  `nama_merk` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id_merk`, `nama_merk`) VALUES
(1, 'HUAWEI'),
(2, 'ZTE'),
(3, 'CORIANT');

-- --------------------------------------------------------

--
-- Table structure for table `metro`
--

CREATE TABLE `metro` (
  `id_metro` int(11) NOT NULL,
  `asal` varchar(50) DEFAULT NULL,
  `tujuan` varchar(50) DEFAULT NULL,
  `id_port_asal` int(11) DEFAULT NULL,
  `id_port_tujuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `port`
--

CREATE TABLE `port` (
  `id_port` int(11) NOT NULL,
  `nama_nms` varchar(10) DEFAULT NULL,
  `nama_lokasi` varchar(20) DEFAULT NULL,
  `id_merk` int(11) DEFAULT NULL,
  `nama_ne` varchar(20) DEFAULT NULL,
  `rack` varchar(11) DEFAULT NULL,
  `shelf` varchar(11) DEFAULT NULL,
  `slot` varchar(11) DEFAULT NULL,
  `port` varchar(11) DEFAULT NULL,
  `board` varchar(11) DEFAULT NULL,
  `kapasitas` varchar(20) DEFAULT NULL,
  `frekuensi` float DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `deskripsi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `port`
--


-- --------------------------------------------------------

--
-- Table structure for table `tera`
--

CREATE TABLE `tera` (
  `id_tera` int(11) NOT NULL,
  `asal` varchar(50) DEFAULT NULL,
  `tujuan` varchar(50) DEFAULT NULL,
  `id_port_asal` int(11) DEFAULT NULL,
  `id_port_tujuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jumlah_jalur`
--
ALTER TABLE `jumlah_jalur`
  ADD PRIMARY KEY (`id_jalur`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id_link`),
  ADD KEY `id_port1` (`id_port1`),
  ADD KEY `id_port2` (`id_port2`);

--
-- Indexes for table `link_statis`
--
ALTER TABLE `link_statis`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `metro`
--
ALTER TABLE `metro`
  ADD PRIMARY KEY (`id_metro`),
  ADD KEY `id_port_asal` (`id_port_asal`),
  ADD KEY `id_port_tujuan` (`id_port_tujuan`);

--
-- Indexes for table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id_port`),
  ADD KEY `id_merk` (`id_merk`);

--
-- Indexes for table `tera`
--
ALTER TABLE `tera`
  ADD PRIMARY KEY (`id_tera`),
  ADD KEY `id_port_asal` (`id_port_asal`),
  ADD KEY `id_port_tujuan` (`id_port_tujuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jumlah_jalur`
--
ALTER TABLE `jumlah_jalur`
  MODIFY `id_jalur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `link_statis`
--
ALTER TABLE `link_statis`
  MODIFY `id_link` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1310;
--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `metro`
--
ALTER TABLE `metro`
  MODIFY `id_metro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `port`
--
ALTER TABLE `port`
  MODIFY `id_port` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4444;
--
-- AUTO_INCREMENT for table `tera`
--
ALTER TABLE `tera`
  MODIFY `id_tera` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `link`
--
ALTER TABLE `link`
  ADD CONSTRAINT `link_ibfk_1` FOREIGN KEY (`id_port1`) REFERENCES `port` (`id_port`),
  ADD CONSTRAINT `link_ibfk_2` FOREIGN KEY (`id_port2`) REFERENCES `port` (`id_port`);

--
-- Constraints for table `metro`
--
ALTER TABLE `metro`
  ADD CONSTRAINT `metro_ibfk_1` FOREIGN KEY (`id_port_asal`) REFERENCES `port` (`id_port`),
  ADD CONSTRAINT `metro_ibfk_2` FOREIGN KEY (`id_port_tujuan`) REFERENCES `port` (`id_port`);

--
-- Constraints for table `port`
--
ALTER TABLE `port`
  ADD CONSTRAINT `port_ibfk_1` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id_merk`);

--
-- Constraints for table `tera`
--
ALTER TABLE `tera`
  ADD CONSTRAINT `tera_ibfk_1` FOREIGN KEY (`id_port_asal`) REFERENCES `port` (`id_port`),
  ADD CONSTRAINT `tera_ibfk_2` FOREIGN KEY (`id_port_tujuan`) REFERENCES `port` (`id_port`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
