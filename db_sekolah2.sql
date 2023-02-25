-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 08:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah2`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `kantor` varchar(25) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kuliah_kerja` varchar(50) NOT NULL,
  `tahun_lulus` varchar(5) NOT NULL,
  `tempat_kuliah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nama`, `jenis_kelamin`, `jurusan`, `kantor`, `kota`, `kuliah_kerja`, `tahun_lulus`, `tempat_kuliah`) VALUES
(2, 'Aidil', 'Laki-laki', 'Rekayasa Perangkat Lunak', 'Belum Tau', 'Bandar Lampung', 'Belum Tau', '2023', 'Itera'),
(7, 'aidil', 'Laki-laki', 'Rekayasa Perangkat Lunak', '', 'Bandar Lampung', 'Kuliah', '2023', 'Itera'),
(8, 'Fikri', 'Laki-laki', 'Bisnis Konstruksi dan Pro', 'Pt. Apa Aja', 'Band', 'kerja', '2020', ''),
(9, 'teat', 'Perempuan', 'Teknik Sepeda Motor', '', 'Bandar Lampung', 'Kuliah', '2024', 'Unila'),
(10, 'Siapa aja', 'Perempuan', 'Teknik Audio Video', 'Pt. ntah', 'Metro', 'Kerja', '2001', '');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` text DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`, `create_at`, `update_at`) VALUES
(8, './img/538ce283ae24ccec8aceb7318e687bf8618df1a96f7c', 'Test', '2022-10-28 07:58:14', NULL),
(9, './img/f67c4df7aef29ba44b30440a29e48688a46e272528bd', 'Test', '2022-10-28 08:02:16', NULL),
(10, './img/1479e1faaf1687dc38dd4514f3c400b5515628528dd7', 'Test', '2022-10-28 08:03:46', NULL),
(11, './img/5d33253f6fd73c862dc7d637b44eeff14e2825896ca8', '', '2022-10-28 08:04:47', NULL),
(12, './img/fbbcd97543e1dc4ca98685d75941a583f50648365e5738e2380b8ec9ae642765jpg', 'Manto', '2022-10-28 08:05:29', NULL),
(13, './img/fbae4086f18095824015a1505427617cf05bb9af4d2d15648d92e0a26110e1ebpng', '', '2022-10-28 08:05:41', NULL),
(14, './img/f7c2599681e9284ce1c403459e22b730e997d67d16c45c4f593108e8372029a9', '', '2022-10-28 08:16:03', NULL),
(15, './img/862cd532fe177c0ff170fd34830de8bdc5d99ac9c5e5fce715d0536b7f59a9c1docx', '', '2022-10-28 08:16:11', NULL),
(16, './img/49ce9a1e2f5bf2e43aa51eb1cb6984c9f64e7c97507f29194ad2eeb0f06ca7c8docx', 'foto sekolah', '2022-10-28 08:16:39', NULL),
(17, './img/0741b82abf5d19f6056cb345743e0547adb1f51f30c800280920fb317c231926.png', 'foto sekolah', '2022-10-28 08:18:39', NULL),
(18, './img/214e473f907f78b765eaa7eb6de89fd75fe0237b3012bb5c11789607e17eeb5a.jpg', 'foto sekolah', '2022-10-28 08:20:48', NULL),
(19, './img/24444a780b3a8c3249c9b9b90a1fb9953dc60f4537e22d496370bf558617f4f1png', '', '2022-11-02 03:43:59', NULL),
(20, './img/93edf77ba2845e7bad127c15908cd4e8e0ba5d6e52661e8cf8c96557520a276fpng', 'afdsaf', '2022-11-22 13:09:06', NULL),
(21, './img/641af5a7256df7e516ffb0e0934fc7546899decd38e9f0f9726559d0ef024e3fpng', '', '2023-02-25 07:16:10', NULL),
(22, './img/df156e8465ff477c90a1393a0ab5947e448ed696ac0d3ea982480f5c237a29e1', '', '2023-02-25 07:16:49', NULL),
(23, './img/5036fd7e3703c9fceb20bdac24bcc2bc2bb98ad4724d39bf3d25d5bb6bfcc01cjpg', '', '2023-02-25 07:17:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `keterangan`, `create_at`, `update_at`, `created_by`) VALUES
(1, 'BKK', 'Sekolah Menengah Kejuruan (SMK) adalah sebuah lembaga pendidikan yang berupakan sub sistem pendidikan nasional dalam rangka menyiapkan SDM yang unggul, handal dan sesuai dengan kebutuhan pasar di tingkat sekolah menengah serta terpenuhinya tingkat kepuasan para pencari kerja. Untuk mendukung hal itu, pada lulusan SMK perlu mendapatkan sebuah sarana dalam memudahkan mereka untuk segera tersalurkan ke dunia kerja yang dibutuhkan berdasarkan skill yang telah didapatkan pada jenjang pendidikan menengah kejuruan.\r\n\r\nOleh karena itulah, dibentuklah Bursa Kerja Khusus (BKK), dimana peran BKK adalah sangat penting bagi berbagai kalangan, mulai dari sekolah, pihak industri dan juga para alumni SMK itu sendiri. Apa itu BKK dan apa manfaat lebih bagi lulusan sekolah menengah serta pihak lainnya? Simak aritkel ini hingga selesai.', '2022-10-27 07:42:51', '2022-10-27 09:39:11', 1),
(2, 'Sejarah SMK Negeri 2 Bandar Lampung', 'Sejarah berdirinya SMK Negeri 2 Bandar Lampung diawali berdirinya Yayasan 2 Mei pada tahun 1962 / 1963. Pada tahun 1968 / 1992 sekolah ini masih berstatus swasta penuh dengan menggunakan kurikulum 1964. dengan Surat Keputusan Direktorat Pendidikan Dasar, Departemen Pendidikan dan Kebudayaan tanggal 25 Juli 1968 lahirlah STM Negeri Tanjung Karang dengan jurusan Bangunan Air dan Bangunan Gedung.\r\n\r\nPada penghujung tahun 1969, STM Negeri Tanjung Karang menerima kompleks sekolah dan perumahan yang berada di Gedung Meneng. Pelaksanaan kurikulum 1976 / 1977 sesuai dengan keputusan Dierktorat Jenderal Pendidikan Dasar dan Menengah tanggal 1 Februari 1977, nomor 1 . 3 ; 08. Kep. 1977, menggunakan kurikulum 1976. Dengan demikian STM Negeri Tanjung Karang memliki tiga jurusan, yaitu Mesin, Listrik dan Bangunan.Pada perkembangan selanjutnya, dengan bertambahnya fasilitas dan minat baru yaitu jurusan Elektronik dan jurusan Mesin. Dengan demikian jurusan yang ada di STM Negeri Tanjung Karang menjadi lima jurusan yaitu: Bangunan, Elektro, Listrik, Mesin Otomotif, dan Mesin Produksi.Mengikuti perubahan sistem pendidikan yang berlaku di Pendidikan Dasar dan Menengah serta Kejurusan, maka dengan adanya Surat Keputusan Menteri Pendidikan dan Kebudayaan RI tanggal 7 Maret Nomor : 034, 035 dan 036 / 0 / 1997 tentang Perubahan Nomor Klatur Sekolah Menengah Kejurusan Atas menjadi Sekolah Menengah Kejurusan dan Tata Kerja Sekolah Menengah Kejurusan. Perubahan ini mulai berlaku pada tanggal 29 Mei 1997 untuk STM Negeri Tanjung Karang. Dengan demikian secara resmi STM Negeri Tanjung Karang berubah menjadi Sekolah Menengah Kejuruan Negeri 2 Bandar Lampung, yang berlokasi di Jalan Sumantri Brojonegoro. Lokasinya cukup strategis karena jauh dari kebisingan dan keramaian sehingga sangat menunjang pada pencapaian tujuan pendidikan melalui proses belajar mengajar.', '2022-10-28 03:13:36', NULL, 1),
(3, 'Terbatu', '<p><strong>sdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</strong></p>\r\n', '2023-02-25 07:18:07', NULL, NULL),
(4, 'Terbatu', 'sdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2023-02-25 07:17:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `kajur` varchar(25) NOT NULL,
  `idgaleri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `keterangan`, `create_at`, `update_at`, `kajur`, `idgaleri`) VALUES
(11, 'Rekayasa Perangkat Lunak', 'RPL adalah singkatan dari Rekayasa Perangkat Lunak dan merupakan sebuah jurusan yang ada di Sekolah Menengah Kejuruan (SMK). RPL adalah sebuah jurusan yang mempelajari dan mendalami  semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas. Bukan hanya itu RPL juga  berkaitan dengan software computer mulai dari pembuatan website, aplikasi, game dan semua yang berkaitan dengan pemrograman dengan menguasai bahasa pemrograman tersebut. Intinya RPL tidak akan jauh-jauh dari tiga hal yaitu Coding, Desain dan Algoritma yang akan menjadi kunci keberhasilan rekayasa perangkat lunak tersebut.', '2023-02-25 07:16:10', NULL, 'Kusnadi, S.T', 21),
(12, 'RPL', 'Rekayasa Perangkat Lunak', '2023-02-25 07:17:16', NULL, 'Kusnadi S,T', 23);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(4) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `judul`, `isi`) VALUES
(1, 'Alamat', 'Jl. Prof. Dr. Ir. Sumantri Brojonegoro No.1, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35141'),
(2, 'Telepon', '(0721) 701966'),
(3, 'Email ', 'smkn2bandarlampung@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `favicon` varchar(50) DEFAULT NULL,
  `tentang` text DEFAULT NULL,
  `foto_sekolah` varchar(50) DEFAULT NULL,
  `goggle_maps` text DEFAULT NULL,
  `nama_ketuajurusan` varchar(50) DEFAULT NULL,
  `foto_kepsek` varchar(50) DEFAULT NULL,
  `sambutan_kepalajurusan` text DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `email`, `telepon`, `alamat`, `logo`, `favicon`, `tentang`, `foto_sekolah`, `goggle_maps`, `nama_ketuajurusan`, `foto_kepsek`, `sambutan_kepalajurusan`, `create_at`, `update_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18', NULL, NULL, NULL, NULL, '2022-10-28 08:20:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` enum('Super admin','Admin') DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`, `create_at`, `update_at`, `logo`) VALUES
(1, 'admin', 'admin', 'admin', 'Admin', '2022-10-26 06:22:46', '2022-10-26 08:22:16', ''),
(2, 'super', 'super', 'super', 'Super admin', '2022-10-26 06:22:46', '2022-10-26 08:22:16', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `pengguna` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
