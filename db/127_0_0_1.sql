-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 11:15 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aes`
--
CREATE DATABASE IF NOT EXISTS `aes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aes`;

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(25) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_lengkap`, `username`, `password`, `email`) VALUES
(1, 'doni sanjaya', 'doni19', 'doni19', 'donis293@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(13) NOT NULL,
  `nama_fakultas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(1, 'sains dan teknologi'),
(2, 'tarbiyah'),
(55380, 'pertanian dan pertenakan');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(25) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `fakultas` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `fakultas`) VALUES
(2, 'teknik inform', 2),
(3, 'ind', 1),
(12, 'kimia', 1),
(72082, 'doni', 2),
(77439, 'contoh', 1),
(93598, 'sanjaya', 3);

-- --------------------------------------------------------

--
-- Table structure for table `karya_ilmiah`
--

CREATE TABLE `karya_ilmiah` (
  `id_karyailmiah` int(12) NOT NULL,
  `abstrak` text NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `lembaga_penulis` varchar(255) NOT NULL,
  `status_publikasi` enum('publish','draft') NOT NULL,
  `judul_publikasi` varchar(255) NOT NULL,
  `ISSN` varchar(255) NOT NULL,
  `penerbit` varchar(225) NOT NULL,
  `tanggal_update` date NOT NULL,
  `kata_kunci` text NOT NULL,
  `file_karyailmiah` varchar(255) NOT NULL,
  `file_enkripsi_dekripsi` varchar(255) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `jurusan` int(25) NOT NULL,
  `idtype` int(10) NOT NULL,
  `id_subjek` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karya_ilmiah`
--

INSERT INTO `karya_ilmiah` (`id_karyailmiah`, `abstrak`, `penulis`, `lembaga_penulis`, `status_publikasi`, `judul_publikasi`, `ISSN`, `penerbit`, `tanggal_update`, `kata_kunci`, `file_karyailmiah`, `file_enkripsi_dekripsi`, `editor`, `jurusan`, `idtype`, `id_subjek`) VALUES
(101, 'sistem informasi pengarsipan adalah', 'joko susilo', 'uin suska', 'draft', 'sistem informasi pengarsipan', 'e1312324-58675-y6454', '3331', '2018-09-04', 'sistem inofrmasi perpustakaan', '', 'bab VI', 'doni sanjaya', 2, 2, 0),
(10350, 'abstak', 'penulis', 'lembaga penulis', 'draft', 'sistem enkripsi repository', 'issn', 'penerbit uin suska', '2018-09-24', 'ini kata kunci', '', '', 'editor nya siapa	', 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_data`
--

CREATE TABLE `permintaan_data` (
  `id_permintaan` int(25) NOT NULL,
  `nama_anggota` int(25) NOT NULL,
  `judul` int(12) NOT NULL,
  `file` int(12) NOT NULL,
  `status` varchar(255) NOT NULL,
  `type` int(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan_data`
--

INSERT INTO `permintaan_data` (`id_permintaan`, `nama_anggota`, `judul`, `file`, `status`, `type`, `tanggal`) VALUES
(1, 1, 101, 101, 'jomblo', 0, '2018-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE `subjek` (
  `id_subjek` int(13) NOT NULL,
  `nama_subjek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek`
--

INSERT INTO `subjek` (`id_subjek`, `nama_subjek`) VALUES
(24213, 'berita'),
(54137, 'hoax'),
(7364734, 'bohong');

-- --------------------------------------------------------

--
-- Table structure for table `sub_subjek`
--

CREATE TABLE `sub_subjek` (
  `id_sub_subjek` int(12) NOT NULL,
  `subjek` int(13) NOT NULL,
  `nama_sub_subjek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_subjek`
--

INSERT INTO `sub_subjek` (`id_sub_subjek`, `subjek`, `nama_sub_subjek`) VALUES
(18325, 54137, 'tukang'),
(23131, 24213, 'ilmu komputer'),
(43908, 7364734, 'lol');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(10) NOT NULL,
  `nama_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `nama_type`) VALUES
(0, 'Skripsi'),
(2, 'Prosiding'),
(25739, 'persija jakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `fakultas` (`fakultas`);

--
-- Indexes for table `karya_ilmiah`
--
ALTER TABLE `karya_ilmiah`
  ADD PRIMARY KEY (`id_karyailmiah`),
  ADD KEY `idtype` (`idtype`),
  ADD KEY `id_subjek` (`id_subjek`),
  ADD KEY `idjurusan` (`jurusan`);

--
-- Indexes for table `permintaan_data`
--
ALTER TABLE `permintaan_data`
  ADD PRIMARY KEY (`id_permintaan`),
  ADD KEY `type` (`type`),
  ADD KEY `nama_anggota` (`nama_anggota`),
  ADD KEY `judul` (`judul`),
  ADD KEY `file` (`file`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`id_subjek`);

--
-- Indexes for table `sub_subjek`
--
ALTER TABLE `sub_subjek`
  ADD PRIMARY KEY (`id_sub_subjek`),
  ADD KEY `subjek` (`subjek`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55381;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93599;

--
-- AUTO_INCREMENT for table `karya_ilmiah`
--
ALTER TABLE `karya_ilmiah`
  MODIFY `id_karyailmiah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10351;

--
-- AUTO_INCREMENT for table `permintaan_data`
--
ALTER TABLE `permintaan_data`
  MODIFY `id_permintaan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
  MODIFY `id_subjek` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7364735;

--
-- AUTO_INCREMENT for table `sub_subjek`
--
ALTER TABLE `sub_subjek`
  MODIFY `id_sub_subjek` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43909;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25740;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karya_ilmiah`
--
ALTER TABLE `karya_ilmiah`
  ADD CONSTRAINT `karya_ilmiah_ibfk_3` FOREIGN KEY (`idtype`) REFERENCES `type` (`id_type`);

--
-- Constraints for table `permintaan_data`
--
ALTER TABLE `permintaan_data`
  ADD CONSTRAINT `permintaan_data_ibfk_1` FOREIGN KEY (`nama_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `permintaan_data_ibfk_2` FOREIGN KEY (`judul`) REFERENCES `karya_ilmiah` (`id_karyailmiah`),
  ADD CONSTRAINT `permintaan_data_ibfk_3` FOREIGN KEY (`file`) REFERENCES `karya_ilmiah` (`id_karyailmiah`),
  ADD CONSTRAINT `permintaan_data_ibfk_4` FOREIGN KEY (`type`) REFERENCES `type` (`id_type`);

--
-- Constraints for table `sub_subjek`
--
ALTER TABLE `sub_subjek`
  ADD CONSTRAINT `sub_subjek_ibfk_1` FOREIGN KEY (`subjek`) REFERENCES `subjek` (`id_subjek`);
--
-- Database: `cms`
--
CREATE DATABASE IF NOT EXISTS `cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(17, 'PHP'),
(18, 'Java Programmingg'),
(19, 'React Js'),
(20, 'php'),
(21, 'php');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL DEFAULT 'Unapproved',
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(21, 54, 'Umesh', 'umesh@gmail.com', 'This is Umesh', 'Approved', '2018-02-25'),
(22, 52, 'Raju', 'raju@raju.com', 'This is raju', 'Approved', '2018-02-25'),
(23, 52, 'Umesh', 'umesh@gmail.com', 'This is umesh gm\r\nThis is umesh gmThis is umesh gmThis is umesh gmThis is umesh gmThis is umesh gmThis is umesh gm', 'Approved', '2018-02-25'),
(24, 65, 'doni', 'c@gmail.com', 'keren', 'Approved', '2018-10-13'),
(25, 65, 'doni', 'c@gmail.com', 'keren', 'Unapproved', '2018-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `file_name_source` varchar(255) DEFAULT NULL,
  `file_name_finish` varchar(255) DEFAULT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `file_size` float DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `tgl_upload` timestamp NULL DEFAULT NULL,
  `status` enum('1','2') DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `username`, `file_name_source`, `file_name_finish`, `file_url`, `file_size`, `password`, `tgl_upload`, `status`, `keterangan`) VALUES
(133, 'doni', '40237-doni.pdf', '53473-doni.rda', 'file_encrypt/53473-doni.rda', 151.221, '698d51a19d8a121c', '2018-10-16 11:09:41', '2', '111'),
(134, 'doni', '46575-makalah_ta-dian-intania.pdf', '97783-makalah_ta-dian-intania.rda', 'file_encrypt/97783-makalah_ta-dian-intania.rda', 133.001, '698d51a19d8a121c', '2018-10-17 15:31:31', '1', '111'),
(132, 'doni', '88172-doni.pdf', '65419-doni.rda', 'file_encrypt/53473-doni.rda', 151.221, '698d51a19d8a121c', '2018-10-16 11:07:02', '2', '111'),
(131, 'doni', '81102-makalah_ta-dian-intania.pdf', '93009-makalah_ta-dian-intania.rda', 'file_encrypt/65419-doni.rda', 133.001, '698d51a19d8a121c', '2018-10-16 11:05:18', '1', '111'),
(130, 'doni', '69344-makalah_ta-dian-intania.pdf', '30251-makalah_ta-dian-intania.rda', 'file_encrypt/93009-makalah_ta-dian-intania.rda', 133.001, '698d51a19d8a121c', '2018-10-16 10:08:01', '1', '111'),
(129, 'admin', '26544-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '76954-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/76954-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 4553.14, '698d51a19d8a121c', '2018-10-16 07:16:02', '2', '111'),
(128, 'admin', '85813-makalah_ta-dian-intania.pdf', '13958-makalah_ta-dian-intania.rda', 'file_encrypt/13958-makalah_ta-dian-intania.rda', 133.001, '698d51a19d8a121c', '2018-10-16 07:14:45', '1', '111'),
(127, 'admin', '34357-makalah_ta-dian-intania.pdf', '22094-makalah_ta-dian-intania.rda', 'file_encrypt/13958-makalah_ta-dian-intania.rda', 133.001, '698d51a19d8a121c', '2018-10-16 07:10:51', '1', '111'),
(125, 'doni', '24115-doni.pdf', '16372-doni.rda', 'file_encrypt/97964-doni.rda', 151.221, '202cb962ac59075b', '2018-10-16 02:04:19', '1', '123'),
(126, 'doni', '80353-doni.pdf', '97964-doni.rda', 'file_encrypt/22094-makalah_ta-dian-intania.rda', 151.221, '202cb962ac59075b', '2018-10-16 02:14:37', '1', '123'),
(124, 'doni', '67072-pengantar-kriptografi.pdf', '54857-pengantar-kriptografi.rda', 'file_encrypt/16372-doni.rda', 172.519, '202cb962ac59075b', '2018-10-16 01:00:03', '1', '123'),
(123, 'doni', '94692-penerapan-aes-pada-url.pdf', '86175-penerapan-aes-pada-url.rda', 'file_encrypt/86175-penerapan-aes-pada-url.rda', 5935.58, '698d51a19d8a121c', '2018-10-15 22:37:37', '2', '111'),
(122, 'doni', '31058-pengantar-kriptografi.pdf', '15169-pengantar-kriptografi.rda', 'file_encrypt/15169-pengantar-kriptografi.rda', 172.519, '698d51a19d8a121c', '2018-10-15 22:36:47', '1', '111'),
(120, 'doni', '86057-penerapan-aes-pada-url.pdf', '76211-penerapan-aes-pada-url.rda', 'file_encrypt/76211-penerapan-aes-pada-url.rda', 5935.58, '698d51a19d8a121c', '2018-10-15 22:22:40', '2', '111'),
(121, 'doni', '34666-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '71153-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/71153-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 4553.14, '698d51a19d8a121c', '2018-10-15 22:30:25', '1', '111'),
(119, 'doni', '14634-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '50325-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/50325-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 4553.14, '698d51a19d8a121c', '2018-10-15 22:17:40', '1', '111'),
(117, 'doni', '74468-makalah_ta-dian-intania.pdf', '44270-makalah_ta-dian-intania.rda', 'file_encrypt/44270-makalah_ta-dian-intania.rda', 133.001, '698d51a19d8a121c', '2018-10-15 22:11:21', '1', '111'),
(118, 'doni', '49156-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '23236-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/23236-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 4553.14, '698d51a19d8a121c', '2018-10-15 22:12:31', '1', '111'),
(116, 'sidang', '20336-penerapan-aes-pada-url.pdf', '66915-penerapan-aes-pada-url.rda', 'file_encrypt/66915-penerapan-aes-pada-url.rda', 0, '698d51a19d8a121c', '2018-10-15 10:41:02', '1', '111'),
(114, 'sidang', '19236-buku-advanced-encryption-standard-(aes)-rinaldi-munir.pdf', '64606-buku-advanced-encryption-standard-(aes)-rinaldi-munir.rda', 'file_encrypt/64606-buku-advanced-encryption-standard-(aes)-rinaldi-munir.rda', 274.019, '698d51a19d8a121c', '2018-10-15 10:23:57', '2', '111'),
(115, 'sidang', '58386-penerapan-aes-pada-url.pdf', '3716-penerapan-aes-pada-url.rda', 'file_encrypt/3716-penerapan-aes-pada-url.rda', 0, '202cb962ac59075b', '2018-10-15 10:33:35', '1', '123'),
(113, 'sidang', '45587-penerapan-aes-pada-url.pdf', '62800-penerapan-aes-pada-url.rda', 'file_encrypt/62800-penerapan-aes-pada-url.rda', 0, '698d51a19d8a121c', '2018-10-15 10:18:33', '2', '111'),
(112, 'sidang', '17169-penerapan-aes-pada-url.pdf', '55917-penerapan-aes-pada-url.rda', 'file_encrypt/55917-penerapan-aes-pada-url.rda', 0, '698d51a19d8a121c', '2018-10-15 10:18:02', '2', '111'),
(111, 'sidang', '61147-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '4616-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/4616-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 0, 'c4ca4238a0b92382', '2018-10-15 09:57:39', '1', '1'),
(110, 'sidang', '19822-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '51150-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/51150-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 0, '698d51a19d8a121c', '2018-10-15 09:50:07', '1', '111'),
(109, 'sidang', '55271-pdf-password-kiswanto-2016-skripsi-daftar-pustaka.pdf', '33895-pdf-password-kiswanto-2016-skripsi-daftar-pustaka.rda', 'file_encrypt/33895-pdf-password-kiswanto-2016-skripsi-daftar-pustaka.rda', 233.852, '698d51a19d8a121c', '2018-10-15 09:47:36', '1', '111'),
(108, 'sidang', '97360-plagiarisme-akademik-2014.pdf', '87695-plagiarisme-akademik-2014.rda', 'file_encrypt/87695-plagiarisme-akademik-2014.rda', 0, '698d51a19d8a121c', '2018-10-15 09:46:44', '1', '111'),
(107, 'sidang', '2812-penerapan-aes-pada-url.pdf', '99762-penerapan-aes-pada-url.rda', 'file_encrypt/99762-penerapan-aes-pada-url.rda', 0, '698d51a19d8a121c', '2018-10-15 09:45:26', '1', '111'),
(103, 'admin', '7701-doni.pdf', '35499-doni.rda', 'file_encrypt/35499-doni.rda', 151.221, '698d51a19d8a121c', '2018-10-14 07:55:07', '2', '111'),
(104, 'doni', '45890-makalah_ta-dian-intania.pdf', '89544-makalah_ta-dian-intania.rda', 'file_encrypt/89544-makalah_ta-dian-intania.rda', 133.001, '202cb962ac59075b', '2018-10-14 11:18:26', '1', 'pass 123'),
(105, 'sidang', '79429-makalah_ta-dian-intania.pdf', '49787-makalah_ta-dian-intania.rda', 'file_encrypt/49787-makalah_ta-dian-intania.rda', 133.001, '202cb962ac59075b', '2018-10-15 04:45:01', '1', '123'),
(106, 'sidang', '70495-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '73737-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/73737-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 0, '698d51a19d8a121c', '2018-10-15 09:43:34', '1', '111');

-- --------------------------------------------------------

--
-- Table structure for table `karyailmiah`
--

CREATE TABLE `karyailmiah` (
  `id_karyailmiah` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `file_name_source` varchar(255) NOT NULL,
  `file_name_finish` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `file_size` float NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('1','2') NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `status_publikasi` varchar(225) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `abstrak` text NOT NULL,
  `lembaga_penulis` varchar(255) NOT NULL,
  `issn` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `editor` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyailmiah`
--

INSERT INTO `karyailmiah` (`id_karyailmiah`, `username`, `file_name_source`, `file_name_finish`, `file_url`, `file_size`, `password`, `tgl_upload`, `status`, `keterangan`, `judul`, `tipe`, `status_publikasi`, `nama_penulis`, `abstrak`, `lembaga_penulis`, `issn`, `penerbit`, `jurusan`, `subjek`, `editor`) VALUES
(3, 'doni', '42726-makalah_ta-dian-intania.pdf', '40204-makalah_ta-dian-intania.rda', '', 133.001, '698d51a19d8a121c', '2018-10-17 12:21:51', '1', '111', 'sistem informasi makalah intan', 'skripsi', 'publish', 'intan', 'abstrak', 'uin suska riau', 'belum ada', 'perpustakaan uin suska', 'sistem informasi', 'teknologi informasi', 'Doni sanjayass');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'Draft',
  `post_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views`) VALUES
(52, 17, 'Pre-Proccessed PHP', 'Sanish', '2018-02-25', 'image_1.jpg', 'This is a php course  This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course ', 'Php', 0, 'Publish', 8),
(53, 17, 'Pre-Proccessed PHP', 'Sanish', '2018-02-25', 'image_1.jpg', 'This is a php course  This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course ', 'Php', 0, 'Publish', 1),
(54, 18, 'Java Programming with Sanish', 'Sanish', '2018-02-25', '172445.jpg', 'This is JavaScript Programming and is super easy...', 'java, javascript', 0, 'Publish', 5),
(55, 18, 'Java Programming with Sanish', 'Sanish', '2018-02-25', '172445.jpg', 'This is JavaScript Programming and is super easy...', 'java, javascript', 0, 'Publish', 2),
(56, 17, 'Pre-Proccessed PHP', 'Sanish', '2018-02-25', 'image_1.jpg', 'This is a php course  This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course ', 'Php', 0, 'Publish', 4),
(57, 17, 'Pre-Proccessed PHP', 'Sanish', '2018-09-15', 'image_1.jpg', '<p style=\"text-align: justify; padding-left: 30px;\">This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course</p>', 'Php', 0, 'Publish', 7),
(58, 17, 'Pre-Proccessed PHP', 'Sanish', '2018-09-20', 'image_1.jpg', '<p style=\"text-align: justify; padding-left: 30px;\">This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course</p>', 'Php', 0, 'Publish', 1),
(59, 17, 'Pre-Proccessed PHP', 'Sanish', '2018-09-20', 'image_1.jpg', 'This is a php course  This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course ', 'Php', 0, 'Publish', 1),
(60, 18, 'Java Programming with Sanish', 'Sanish', '2018-09-20', '172445.jpg', 'This is JavaScript Programming and is super easy...', 'java, javascript', 0, 'Publish', 1),
(61, 18, 'Java Programming with Sanish', 'Sanish', '2018-09-20', '172445.jpg', 'This is JavaScript Programming and is super easy...', 'java, javascript', 0, 'Publish', 0),
(62, 17, 'Pre-Proccessed PHP', 'Sanish', '2018-09-20', 'image_1.jpg', 'This is a php course  This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course ', 'Php', 0, 'Publish', 3),
(63, 17, 'Pre-Proccessed PHP', 'Sanish', '2018-09-20', 'image_1.jpg', 'This is a php course  This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course This is a php course ', 'Php', 0, 'Publish', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL DEFAULT 'Subscriber',
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(18, 'Sanish', '$2y$10$4wJQ5vQx8DRtDHe5GmK1a.WbFLMzgJblBRgy30OnOSSl5G2.FGv72', 'Sanish', 'Gurung', 'sanish@gmail.com', '8468-spongebob-square-pants-spongebobs-face.jpg', 'Admin', '$2y$10$iusesomecrazystrings22'),
(22, 'Peter', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'Peter', 'Pan', 'peter@gmail.com', '172445.jpg', 'Admin', '$2y$10$iusesomecrazystrings22'),
(23, 'doni', 'doni', 'doni', 'doni', 'doni@gmail.com', '172445.jpg', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(24, 'joko', '$2y$10$iusesomecrazystrings2unILXXqlVDfo1ZcvgsRL28.eg1hvUV6q', 'joko', 'joko', 'j@gmail.com', 'Capture diagram.JPG', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(25, 'doni', '$2y$10$iusesomecrazystrings2upRdFCkqiaRehfWnGuiTS27WG.hA97ZK', 'doni', 'doni', 'd@gmail.com', 'Tulips.jpg', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(26, 'doni', '-©Íe?cÀ¶ÖÅ¥­sþ2', 'doni', 'doni', 'doni@gmail.com', 'Penguins.jpg', 'Admin', '$2y$10$iusesomecrazystrings22'),
(27, 'coba', '$2y$10$iusesomecrazystrings2uPchmqSxO3/.vjfkSlQhZ7fL2QSddlPS', 'coba', 'coba', 'coba@gmial.com', 'Koala.jpg', 'Admin', '$2y$10$iusesomecrazystrings22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `karyailmiah`
--
ALTER TABLE `karyailmiah`
  ADD PRIMARY KEY (`id_karyailmiah`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `karyailmiah`
--
ALTER TABLE `karyailmiah`
  MODIFY `id_karyailmiah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Database: `coba`
--
CREATE DATABASE IF NOT EXISTS `coba` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `coba`;

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `id_coba` int(25) NOT NULL,
  `coba` varchar(225) NOT NULL,
  `lagi` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coba`
--

INSERT INTO `coba` (`id_coba`, `coba`, `lagi`) VALUES
(1, 'jbk', 7767),
(2, 'vvju', 546);

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE `relasi` (
  `relasi` int(25) NOT NULL,
  `id_coba` int(25) NOT NULL,
  `haha` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id_coba`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`relasi`),
  ADD KEY `id_coba` (`id_coba`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id_coba` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `relasi`
--
ALTER TABLE `relasi`
  MODIFY `relasi` int(25) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `relasi`
--
ALTER TABLE `relasi`
  ADD CONSTRAINT `relasi_ibfk_1` FOREIGN KEY (`id_coba`) REFERENCES `coba` (`id_coba`);
--
-- Database: `db_kkp`
--
CREATE DATABASE IF NOT EXISTS `db_kkp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_kkp`;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(25) NOT NULL,
  `nama_fakultas` varchar(225) NOT NULL,
  `jumlah` int(25) NOT NULL,
  `subjurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `file_name_source` varchar(255) DEFAULT NULL,
  `file_name_finish` varchar(255) DEFAULT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `file_size` float DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `tgl_upload` timestamp NULL DEFAULT NULL,
  `status` enum('1','2') DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_tipe` int(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `username`, `file_name_source`, `file_name_finish`, `file_url`, `file_size`, `password`, `tgl_upload`, `status`, `keterangan`, `id_tipe`) VALUES
(133, 'doni', '40237-doni.pdf', '53473-doni.rda', 'file_encrypt/53473-doni.rda', 151.221, '698d51a19d8a121c', '2018-10-16 11:09:41', '2', '111', 0),
(134, 'doni', '46575-makalah_ta-dian-intania.pdf', '97783-makalah_ta-dian-intania.rda', 'file_encrypt/97783-makalah_ta-dian-intania.rda', 133.001, '698d51a19d8a121c', '2018-10-17 15:31:31', '1', '111', 0),
(132, 'doni', '88172-doni.pdf', '65419-doni.rda', 'file_encrypt/53473-doni.rda', 151.221, '698d51a19d8a121c', '2018-10-16 11:07:02', '2', '111', 0),
(131, 'doni', '81102-makalah_ta-dian-intania.pdf', '93009-makalah_ta-dian-intania.rda', 'file_encrypt/65419-doni.rda', 133.001, '698d51a19d8a121c', '2018-10-16 11:05:18', '1', '111', 0),
(130, 'doni', '69344-makalah_ta-dian-intania.pdf', '30251-makalah_ta-dian-intania.rda', 'file_encrypt/93009-makalah_ta-dian-intania.rda', 133.001, '698d51a19d8a121c', '2018-10-16 10:08:01', '1', '111', 0),
(129, 'admin', '26544-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '76954-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/76954-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 4553.14, '698d51a19d8a121c', '2018-10-16 07:16:02', '2', '111', 0),
(128, 'admin', '85813-makalah_ta-dian-intania.pdf', '13958-makalah_ta-dian-intania.rda', 'file_encrypt/13958-makalah_ta-dian-intania.rda', 133.001, '698d51a19d8a121c', '2018-10-16 07:14:45', '1', '111', 0),
(127, 'admin', '34357-makalah_ta-dian-intania.pdf', '22094-makalah_ta-dian-intania.rda', 'file_encrypt/13958-makalah_ta-dian-intania.rda', 133.001, '698d51a19d8a121c', '2018-10-16 07:10:51', '1', '111', 0),
(125, 'doni', '24115-doni.pdf', '16372-doni.rda', 'file_encrypt/97964-doni.rda', 151.221, '202cb962ac59075b', '2018-10-16 02:04:19', '1', '123', 0),
(126, 'doni', '80353-doni.pdf', '97964-doni.rda', 'file_encrypt/22094-makalah_ta-dian-intania.rda', 151.221, '202cb962ac59075b', '2018-10-16 02:14:37', '1', '123', 0),
(124, 'doni', '67072-pengantar-kriptografi.pdf', '54857-pengantar-kriptografi.rda', 'file_encrypt/16372-doni.rda', 172.519, '202cb962ac59075b', '2018-10-16 01:00:03', '1', '123', 0),
(123, 'doni', '94692-penerapan-aes-pada-url.pdf', '86175-penerapan-aes-pada-url.rda', 'file_encrypt/86175-penerapan-aes-pada-url.rda', 5935.58, '698d51a19d8a121c', '2018-10-15 22:37:37', '2', '111', 0),
(122, 'doni', '31058-pengantar-kriptografi.pdf', '15169-pengantar-kriptografi.rda', 'file_encrypt/15169-pengantar-kriptografi.rda', 172.519, '698d51a19d8a121c', '2018-10-15 22:36:47', '1', '111', 0),
(120, 'doni', '86057-penerapan-aes-pada-url.pdf', '76211-penerapan-aes-pada-url.rda', 'file_encrypt/76211-penerapan-aes-pada-url.rda', 5935.58, '698d51a19d8a121c', '2018-10-15 22:22:40', '2', '111', 0),
(121, 'doni', '34666-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '71153-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/71153-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 4553.14, '698d51a19d8a121c', '2018-10-15 22:30:25', '1', '111', 0),
(119, 'doni', '14634-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '50325-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/50325-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 4553.14, '698d51a19d8a121c', '2018-10-15 22:17:40', '1', '111', 0),
(117, 'doni', '74468-makalah_ta-dian-intania.pdf', '44270-makalah_ta-dian-intania.rda', 'file_encrypt/44270-makalah_ta-dian-intania.rda', 133.001, '698d51a19d8a121c', '2018-10-15 22:11:21', '1', '111', 0),
(118, 'doni', '49156-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '23236-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/23236-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 4553.14, '698d51a19d8a121c', '2018-10-15 22:12:31', '1', '111', 0),
(116, 'sidang', '20336-penerapan-aes-pada-url.pdf', '66915-penerapan-aes-pada-url.rda', 'file_encrypt/66915-penerapan-aes-pada-url.rda', 0, '698d51a19d8a121c', '2018-10-15 10:41:02', '1', '111', 0),
(114, 'sidang', '19236-buku-advanced-encryption-standard-(aes)-rinaldi-munir.pdf', '64606-buku-advanced-encryption-standard-(aes)-rinaldi-munir.rda', 'file_encrypt/64606-buku-advanced-encryption-standard-(aes)-rinaldi-munir.rda', 274.019, '698d51a19d8a121c', '2018-10-15 10:23:57', '2', '111', 0),
(115, 'sidang', '58386-penerapan-aes-pada-url.pdf', '3716-penerapan-aes-pada-url.rda', 'file_encrypt/3716-penerapan-aes-pada-url.rda', 0, '202cb962ac59075b', '2018-10-15 10:33:35', '1', '123', 0),
(113, 'sidang', '45587-penerapan-aes-pada-url.pdf', '62800-penerapan-aes-pada-url.rda', 'file_encrypt/62800-penerapan-aes-pada-url.rda', 0, '698d51a19d8a121c', '2018-10-15 10:18:33', '2', '111', 0),
(112, 'sidang', '17169-penerapan-aes-pada-url.pdf', '55917-penerapan-aes-pada-url.rda', 'file_encrypt/55917-penerapan-aes-pada-url.rda', 0, '698d51a19d8a121c', '2018-10-15 10:18:02', '2', '111', 0),
(111, 'sidang', '61147-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '4616-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/4616-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 0, 'c4ca4238a0b92382', '2018-10-15 09:57:39', '1', '1', 0),
(110, 'sidang', '19822-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '51150-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/51150-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 0, '698d51a19d8a121c', '2018-10-15 09:50:07', '1', '111', 0),
(109, 'sidang', '55271-pdf-password-kiswanto-2016-skripsi-daftar-pustaka.pdf', '33895-pdf-password-kiswanto-2016-skripsi-daftar-pustaka.rda', 'file_encrypt/33895-pdf-password-kiswanto-2016-skripsi-daftar-pustaka.rda', 233.852, '698d51a19d8a121c', '2018-10-15 09:47:36', '1', '111', 0),
(108, 'sidang', '97360-plagiarisme-akademik-2014.pdf', '87695-plagiarisme-akademik-2014.rda', 'file_encrypt/87695-plagiarisme-akademik-2014.rda', 0, '698d51a19d8a121c', '2018-10-15 09:46:44', '1', '111', 0),
(107, 'sidang', '2812-penerapan-aes-pada-url.pdf', '99762-penerapan-aes-pada-url.rda', 'file_encrypt/99762-penerapan-aes-pada-url.rda', 0, '698d51a19d8a121c', '2018-10-15 09:45:26', '1', '111', 0),
(103, 'admin', '7701-doni.pdf', '35499-doni.rda', 'file_encrypt/35499-doni.rda', 151.221, '698d51a19d8a121c', '2018-10-14 07:55:07', '2', '111', 0),
(104, 'doni', '45890-makalah_ta-dian-intania.pdf', '89544-makalah_ta-dian-intania.rda', 'file_encrypt/89544-makalah_ta-dian-intania.rda', 133.001, '202cb962ac59075b', '2018-10-14 11:18:26', '1', 'pass 123', 0),
(105, 'sidang', '79429-makalah_ta-dian-intania.pdf', '49787-makalah_ta-dian-intania.rda', 'file_encrypt/49787-makalah_ta-dian-intania.rda', 133.001, '202cb962ac59075b', '2018-10-15 04:45:01', '1', '123', 0),
(106, 'sidang', '70495-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).pdf', '73737-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 'file_encrypt/73737-marios-c.-angelides,-harry-agius-the-handbook-of-mpeg-applications_-standards-in-practice-wiley-(2011).rda', 0, '698d51a19d8a121c', '2018-10-15 09:43:34', '1', '111', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `gambar1` varchar(225) NOT NULL,
  `gambar2` varchar(225) NOT NULL,
  `gambar3` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `gambar1`, `gambar2`, `gambar3`) VALUES
(41, 'Makalah_TA Dian Intania.pdf', 'Makalah_TA Dian Intania.pdf', 'Makalah_TA Dian Intania.pdf'),
(42, 'doni.pdf', 'doni.pdf', 'doni.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `id_fakultas`
--

CREATE TABLE `id_fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(225) NOT NULL,
  `jumlah_fakultas` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `id_fakultas`
--

INSERT INTO `id_fakultas` (`id_fakultas`, `nama_fakultas`, `jumlah_fakultas`) VALUES
(1, 'Fakultas Sains dan Teknologi', 0),
(2, 'Fakultas Dakwah dan Komunikasi', 0),
(3, 'Fakultas Ekonomi dan Ilmu Sosial', 0),
(4, 'Fakultas Pertanian dan Peternakan', 0),
(5, 'Fakultas Psikologi', 0),
(6, 'Fakultas Syariah dan Hukum', 0),
(7, 'Fakultas Tarbiyah dan Keguruan', 0),
(8, 'Fakultas Ushuluddin', 0),
(9, 'HUMAS UIN SUSKA Riau', 0),
(10, 'Perpustakaan', 0),
(11, 'Program Pascasarjana', 0),
(12, 'Pusat Studi Wanita', 0),
(14, 'baru', 0);

-- --------------------------------------------------------

--
-- Table structure for table `karyailmiah`
--

CREATE TABLE `karyailmiah` (
  `id_karyailmiah` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `file_name_source` varchar(255) NOT NULL,
  `file_name_finish` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `file_size` float NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('1','2') NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `status_publikasi` varchar(225) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `abstrak` text NOT NULL,
  `lembaga_penulis` varchar(255) NOT NULL,
  `issn` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `editor` varchar(225) NOT NULL,
  `id_tipe` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyailmiah`
--

INSERT INTO `karyailmiah` (`id_karyailmiah`, `username`, `file_name_source`, `file_name_finish`, `file_url`, `file_size`, `password`, `tgl_upload`, `status`, `keterangan`, `judul`, `status_publikasi`, `nama_penulis`, `abstrak`, `lembaga_penulis`, `issn`, `penerbit`, `jurusan`, `subjek`, `editor`, `id_tipe`) VALUES
(3, 'doni', '42726-makalah_ta-dian-intania.pdf', '40204-makalah_ta-dian-intania.rda', '', 133.001, '698d51a19d8a121c', '2018-10-17 12:21:51', '1', '111', 'sistem informasi makalah intan', 'publish', 'intan', 'abstrak', 'uin suska riau', 'belum ada', 'perpustakaan uin suska', 'sistem informasi', 'teknologi informasi', 'Doni sanjayass', 0);

-- --------------------------------------------------------

--
-- Table structure for table `karya_ilmiah`
--

CREATE TABLE `karya_ilmiah` (
  `id_karyailmiah` int(25) NOT NULL,
  `idtipe` int(25) NOT NULL,
  `idjurusan` int(11) NOT NULL,
  `idsubjek` int(25) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `status_publikasi` varchar(225) NOT NULL,
  `nama_penulis` varchar(225) NOT NULL,
  `abstrak` text NOT NULL,
  `lembaga_penulis` varchar(225) NOT NULL,
  `issn` varchar(225) NOT NULL,
  `penerbit` varchar(225) NOT NULL,
  `editor` varchar(225) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(225) NOT NULL,
  `tahun` int(25) NOT NULL,
  `dokumen1` varchar(225) NOT NULL,
  `size_dokumen1` int(11) NOT NULL,
  `status_dokumen1` enum('1','2','3') NOT NULL,
  `dokumen2` varchar(225) NOT NULL,
  `size_dokumen2` int(25) NOT NULL,
  `status_dokumen2` enum('1','2','3') NOT NULL,
  `dokumen3` varchar(225) NOT NULL,
  `size_dokumen3` int(25) NOT NULL,
  `url_dokumen3` varchar(225) NOT NULL,
  `status_dokumen3` enum('1','2','3') NOT NULL,
  `dokumen4` varchar(225) NOT NULL,
  `size_dokumen4` int(25) NOT NULL,
  `status_dokumen4` enum('1','2','3') NOT NULL,
  `dokumen5` varchar(225) NOT NULL,
  `status_dokumen5` enum('1','2','3') NOT NULL,
  `size_dokumen5` int(25) NOT NULL,
  `dokumen6` varchar(225) NOT NULL,
  `size_dokumen6` int(25) NOT NULL,
  `status_dokumen6` enum('1','2','3') NOT NULL,
  `dokumen7` varchar(225) NOT NULL,
  `size_dokumen7` int(25) NOT NULL,
  `status_dokumen7` enum('1','2','3') NOT NULL,
  `dokumen8` varchar(225) NOT NULL,
  `size_dokumen8` int(25) NOT NULL,
  `status_dokumen8` enum('1','2','3') NOT NULL,
  `dokumen9` varchar(225) NOT NULL,
  `size_dokumen9` int(25) NOT NULL,
  `status_dokumen9` enum('1','2','3') NOT NULL,
  `dokumen10` varchar(225) NOT NULL,
  `size_dokumen10` int(25) NOT NULL,
  `status_dokumen10` enum('1','2','3') NOT NULL,
  `sandi_dokumen1` varchar(255) NOT NULL,
  `sandi_dokumen2` varchar(225) NOT NULL,
  `sandi_dokumen3` varchar(225) NOT NULL,
  `sandi_dokumen4` varchar(225) NOT NULL,
  `sandi_dokumen5` varchar(225) NOT NULL,
  `sandi_dokumen6` varchar(225) NOT NULL,
  `sandi_dokumen7` varchar(225) NOT NULL,
  `sandi_dokumen8` varchar(225) NOT NULL,
  `sandi_dokumen9` varchar(225) NOT NULL,
  `sandi_dokumen10` varchar(225) NOT NULL,
  `url_dokumen1` varchar(225) NOT NULL,
  `url_dokumen2` varchar(225) NOT NULL,
  `url_dokumen4` varchar(225) NOT NULL,
  `url_dokumen5` varchar(225) NOT NULL,
  `url_dokumen6` varchar(225) NOT NULL,
  `url_dokumen7` varchar(225) NOT NULL,
  `url_dokumen8` varchar(225) NOT NULL,
  `url_dokumen9` varchar(225) NOT NULL,
  `url_dokumen10` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karya_ilmiah`
--

INSERT INTO `karya_ilmiah` (`id_karyailmiah`, `idtipe`, `idjurusan`, `idsubjek`, `judul`, `status_publikasi`, `nama_penulis`, `abstrak`, `lembaga_penulis`, `issn`, `penerbit`, `editor`, `tgl_upload`, `username`, `tahun`, `dokumen1`, `size_dokumen1`, `status_dokumen1`, `dokumen2`, `size_dokumen2`, `status_dokumen2`, `dokumen3`, `size_dokumen3`, `url_dokumen3`, `status_dokumen3`, `dokumen4`, `size_dokumen4`, `status_dokumen4`, `dokumen5`, `status_dokumen5`, `size_dokumen5`, `dokumen6`, `size_dokumen6`, `status_dokumen6`, `dokumen7`, `size_dokumen7`, `status_dokumen7`, `dokumen8`, `size_dokumen8`, `status_dokumen8`, `dokumen9`, `size_dokumen9`, `status_dokumen9`, `dokumen10`, `size_dokumen10`, `status_dokumen10`, `sandi_dokumen1`, `sandi_dokumen2`, `sandi_dokumen3`, `sandi_dokumen4`, `sandi_dokumen5`, `sandi_dokumen6`, `sandi_dokumen7`, `sandi_dokumen8`, `sandi_dokumen9`, `sandi_dokumen10`, `url_dokumen1`, `url_dokumen2`, `url_dokumen4`, `url_dokumen5`, `url_dokumen6`, `url_dokumen7`, `url_dokumen8`, `url_dokumen9`, `url_dokumen10`) VALUES
(1, 3, 5, 1, 'judul', 'publish', 'Agusriandi', '<p>tidak ada</p>', 'Universitas Negeri Sultan Syarif Kasim Riau', 'tidak ada', 'Perpustakaan Universitas Negeri Sultan Syarif Kasim Riau', '', '2018-11-10 08:22:56', 'doni', 2, '9978-ABD. GAPUR 2015 SKRIPSI COVER.pdf', 345623, '3', '3038-ABD. GAPUR 2015 SKRIPSI BAB I.pdf', 271706, '1', '48287-ABD. GAPUR 2015 SKRIPSI BAB II.pdf', 261666, 'file_encrypt/48287-ABD. GAPUR 2015 SKRIPSI BAB II.pdf', '2', '72311-ABD. GAPUR 2015 SKRIPSI BAB IV.pdf', 248986, '1', '91657-ABD. GAPUR 2015 SKRIPSI DAFTAR PUSTAKA.pdf', '2', 238526, '', 16384, '1', '', 0, '1', '', 16384, '1', '', 16384, '1', '', 16384, '1', '2607112018071016', 'c995e01514437150', '406478540530af54', 'af3f2569f4474912', 'e674ee11e967c9bd', '4907112018065440', '', '6707112018065440', '5607112018065441', '8407112018065441', 'file_decrypt/9978-ABD. GAPUR 2015 SKRIPSI COVER.pdf', 'dokument/3038-ABD. GAPUR 2015 SKRIPSI BAB I.pdf', 'dokument/72311-ABD. GAPUR 2015 SKRIPSI BAB IV.pdf', 'file_encrypt/91657-ABD. GAPUR 2015 SKRIPSI DAFTAR PUSTAKA.pdf', '', '', '', '', ''),
(2, 3, 5, 1, 'ANALISIS TINGKAT KEMATANGAN (MATURITY LEVEL) SISTEM INFORMASI PERPUSTAKAAN DENGAN FRAMEWORKCOBIT 4.1 (STUDI KASUS : PERPUSTAKAAN UNIVERSITAS ISLAM RIAU)', 'publish', 'doni sanjaya', '<p>tidak ada</p>', 'Universitas Negeri Sultan Syarif Kasim Riau', 'tidak ada', 'Perpustakaan Universitas Negeri Sultan Syarif Kasim Riau', '', '2018-11-10 19:47:08', 'doni', 2, '7738-ABD. GAPUR 2015 SKRIPSI BAB I.pdf', 0, '3', '60772-ABD. GAPUR 2015 SKRIPSI BAB II.pdf', 261666, '2', '40317-ABD. GAPUR 2015 SKRIPSI BAB IV.pdf', 248986, 'file_decrypt/40317-ABD. GAPUR 2015 SKRIPSI BAB IV.pdf', '3', '63225-ABD. GAPUR 2015 SKRIPSI COVER.pdf', 345623, '3', '32259-ABD. GAPUR 2015 SKRIPSI DAFTAR PUSTAKA.pdf', '3', 238526, '84654-ABDUL KARIM 2015 SKRIPSI BAB I.pdf', 288945, '3', '15501-ABDUL KARIM 2015 SKRIPSI BAB II.pdf', 262032, '3', '35271-ABDUL KARIM 2015 SKRIPSI BAB III.pdf', 294047, '3', '12280-ABDUL KARIM 2015 SKRIPSI COVER.pdf', 325999, '3', '33586-ABDUL KARIM 2015 SKRIPSI DAFTAR PUSTAKA.pdf', 245623, '3', '8008112018101037', '9e4b02162f6c9903', '23129d3321c59763', 'ee13c680bbe3b5b1', '34765c12662d1fd0', '713ae461b480936c', 'ea8434071078e8b3', '8a0b88b4b6ddff3b', '1d776083bfbf51d0', '1bd318251d052426', 'file_decrypt/7738-ABD. GAPUR 2015 SKRIPSI BAB I.pdf', 'file_encrypt/60772-ABD. GAPUR 2015 SKRIPSI BAB II.pdf', 'file_decrypt/63225-ABD. GAPUR 2015 SKRIPSI COVER.pdf', 'file_decrypt/32259-ABD. GAPUR 2015 SKRIPSI DAFTAR PUSTAKA.pdf', 'file_decrypt/84654-ABDUL KARIM 2015 SKRIPSI BAB I.pdf', 'file_decrypt/15501-ABDUL KARIM 2015 SKRIPSI BAB II.pdf', 'file_decrypt/35271-ABDUL KARIM 2015 SKRIPSI BAB III.pdf', 'file_decrypt/12280-ABDUL KARIM 2015 SKRIPSI COVER.pdf', 'file_decrypt/33586-ABDUL KARIM 2015 SKRIPSI DAFTAR PUSTAKA.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `id_name` int(25) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_data`
--

CREATE TABLE `permintaan_data` (
  `id_permintaan` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `url_file` varchar(225) NOT NULL,
  `sandi_dokumen` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `tipeid` varchar(225) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan_data`
--

INSERT INTO `permintaan_data` (`id_permintaan`, `nama_anggota`, `judul`, `file`, `url_file`, `sandi_dokumen`, `status`, `tipeid`, `tanggal`) VALUES
(13, 'doni', 'ANALISIS TINGKAT KEMATANGAN (MATURITY LEVEL) SISTEM INFORMASI PERPUSTAKAAN DENGAN FRAMEWORKCOBIT 4.1 (STUDI KASUS : PERPUSTAKAAN UNIVERSITAS ISLAM RIAU)', '60772-ABD. GAPUR 2015 SKRIPSI BAB II.pdf', 'file_encrypt/60772-ABD. GAPUR 2015 SKRIPSI BAB II.pdf', '9e4b02162f6c9903', 'Ditolak', '3', '2018-11-09'),
(15, 'doni', 'judul', '91657-ABD. GAPUR 2015 SKRIPSI DAFTAR PUSTAKA.pdf', 'file_encrypt/91657-ABD. GAPUR 2015 SKRIPSI DAFTAR PUSTAKA.pdf', 'e674ee11e967c9bd', 'Ditolak', '3', '2018-11-09'),
(16, 'doni', 'judul', '48287-ABD. GAPUR 2015 SKRIPSI BAB II.pdf', 'file_encrypt/48287-ABD. GAPUR 2015 SKRIPSI BAB II.pdf', '406478540530af54', 'Ditolak', '3', '2018-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `programmer`
--

CREATE TABLE `programmer` (
  `programmer_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `programmer_skill` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programmer`
--

INSERT INTO `programmer` (`programmer_id`, `name`, `programmer_skill`) VALUES
(0, 'acasca', 'PHP, Codeigniter, Laravel, Ajax'),
(1, 'John Smith', 'PHP, Mysql'),
(2, 'Peter Parker', 'Codeigniter, JQuery, Ajax, AngularJS'),
(3, 'Andrew Lee', 'PHP, Codeigniter, Laravel');

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE `subjek` (
  `id_subjek` int(25) NOT NULL,
  `nama_subjek` varchar(225) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek`
--

INSERT INTO `subjek` (`id_subjek`, `nama_subjek`, `jumlah`) VALUES
(1, 'teknologi', 17),
(2, 'agama', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_jurusan`
--

CREATE TABLE `sub_jurusan` (
  `id_sub_jurusan` int(11) NOT NULL,
  `idfakultas` int(25) NOT NULL,
  `nama_sub_jurusan` varchar(225) NOT NULL,
  `jumlah` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_jurusan`
--

INSERT INTO `sub_jurusan` (`id_sub_jurusan`, `idfakultas`, `nama_sub_jurusan`, `jumlah`) VALUES
(5, 1, 'Sistem Informasi', 7),
(6, 1, 'Teknik Informatika (368)', 0),
(9, 1, 'Teknik Industri', 0),
(10, 1, 'Teknik Elektro', 0),
(11, 2, 'Ilmu Komunikasi', 2),
(12, 2, 'Manajemen Dakwah', 0),
(13, 2, 'Pengembangan Masyarakat Islam', 0),
(14, 2, 'Pers dan Grafika', 1),
(15, 3, 'Administrasi Negara', 1),
(16, 3, 'Administrasi Perpajakan', 1),
(17, 4, 'Agroteknologi', 0),
(18, 4, 'Peternakan', 0),
(19, 5, 'Bagian Psikologi Industri dan Organisasi', 0),
(20, 5, 'Bagian Psikologi Klinis dan Agama', 0),
(21, 5, 'Bagian Psikologi Perkembangan Pendidikan', 0),
(22, 5, 'Psikologi', 0),
(23, 6, 'Ekonomi Syari\'ah', 0),
(24, 6, 'Hukum Ekonomi Syariah (Muamalah)', 0),
(25, 6, 'Hukum Keluarga (Ahwal Al-Syakhsiyah)', 0),
(26, 6, 'Hukum Tata Negara (Siyasah)', 0),
(27, 6, 'Ilmu Hukum', 0),
(28, 6, 'Perbandingan Mazhab dan Hukum', 0),
(29, 6, 'Perbankan Syari\'ah', 0),
(30, 7, 'Manajemen Pendidikan Islam', 0),
(31, 7, 'Pendidikan Agama Islam', 0),
(32, 7, 'Pendidikan Bahasa Arab', 0),
(33, 7, 'Pendidikan Bahasa Inggris', 0),
(34, 7, 'Pendidikan Ekonomi', 0),
(35, 7, 'Pendidikan Guru Madrasah Ibtidaiyah', 0),
(36, 7, 'Pendidikan Kimia', 0),
(37, 7, 'Pendidikan Matematika', 0),
(38, 8, 'Ilmu Alqur\'an dan Tafsir', 0),
(39, 8, 'Ilmu Aqidah', 0),
(40, 8, 'Perbandingan Agama', 0),
(41, 11, 'Thesis', 0),
(42, 11, 'Disertasi', 0),
(43, 1, 'baru', 0),
(44, 1, 'lala', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(25) NOT NULL,
  `th_tahun` int(25) NOT NULL,
  `jumlah` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `th_tahun`, `jumlah`) VALUES
(1, 2018, 0),
(2, 2017, 0),
(3, 2016, 0),
(4, 2015, 0),
(5, 2014, 0),
(6, 2013, 0),
(7, 2012, 0),
(8, 2011, 0),
(9, 2010, 0),
(10, 2009, 0),
(11, 2008, 0),
(12, 2007, 0),
(13, 2019, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id_tipe` int(25) NOT NULL,
  `nama_tipe` varchar(225) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id_tipe`, `nama_tipe`, `jumlah`) VALUES
(3, 'skripsi', 17),
(4, 'thesis', 3),
(5, 'prosiding', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `job_title` varchar(50) DEFAULT NULL,
  `join_date` timestamp NULL DEFAULT NULL,
  `last_activity` timestamp NULL DEFAULT NULL,
  `status` enum('1','2','3') DEFAULT NULL,
  `user_role` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fullname`, `job_title`, `join_date`, `last_activity`, `status`, `user_role`, `email`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Project Manager', '2017-04-28 01:48:55', '2018-11-15 13:22:56', '1', '', ''),
('sidang', '74e7caf98c6df498fb9a242884317da5', 'sidang', 'penguji', '2017-07-09 21:31:24', '2018-11-16 19:42:05', '1', 'admin', ''),
('doni', '2da9cd653f63c010b6d6c5a5ad73fe32', 'doni', 'admin', '2018-10-10 10:00:00', '2018-11-15 13:18:03', '3', 'admin', ''),
('pass', '$1$xAFV7skc$q/ct1Xr.QE.kHMJzORWIZ1', 'pass', 'anggota', '2018-11-16 02:20:32', '2018-11-16 20:59:21', '3', 'anggota', 'donis293@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `id_tipe` (`id_tipe`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `id_fakultas`
--
ALTER TABLE `id_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `karyailmiah`
--
ALTER TABLE `karyailmiah`
  ADD PRIMARY KEY (`id_karyailmiah`),
  ADD KEY `id_tipe` (`id_tipe`);

--
-- Indexes for table `karya_ilmiah`
--
ALTER TABLE `karya_ilmiah`
  ADD PRIMARY KEY (`id_karyailmiah`),
  ADD KEY `id_tipe` (`idtipe`),
  ADD KEY `id_jurusan` (`idjurusan`),
  ADD KEY `id_subjek` (`idsubjek`),
  ADD KEY `tahun` (`tahun`);

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`id_name`);

--
-- Indexes for table `permintaan_data`
--
ALTER TABLE `permintaan_data`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `programmer`
--
ALTER TABLE `programmer`
  ADD PRIMARY KEY (`programmer_id`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`id_subjek`);

--
-- Indexes for table `sub_jurusan`
--
ALTER TABLE `sub_jurusan`
  ADD PRIMARY KEY (`id_sub_jurusan`),
  ADD KEY `idfakultas` (`idfakultas`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `id_fakultas`
--
ALTER TABLE `id_fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `karyailmiah`
--
ALTER TABLE `karyailmiah`
  MODIFY `id_karyailmiah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `karya_ilmiah`
--
ALTER TABLE `karya_ilmiah`
  MODIFY `id_karyailmiah` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `id_name` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permintaan_data`
--
ALTER TABLE `permintaan_data`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
  MODIFY `id_subjek` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_jurusan`
--
ALTER TABLE `sub_jurusan`
  MODIFY `id_sub_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_tipe` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karya_ilmiah`
--
ALTER TABLE `karya_ilmiah`
  ADD CONSTRAINT `karya_ilmiah_ibfk_1` FOREIGN KEY (`idtipe`) REFERENCES `tipe` (`id_tipe`),
  ADD CONSTRAINT `karya_ilmiah_ibfk_2` FOREIGN KEY (`idjurusan`) REFERENCES `sub_jurusan` (`id_sub_jurusan`),
  ADD CONSTRAINT `karya_ilmiah_ibfk_3` FOREIGN KEY (`idsubjek`) REFERENCES `subjek` (`id_subjek`),
  ADD CONSTRAINT `karya_ilmiah_ibfk_4` FOREIGN KEY (`tahun`) REFERENCES `tahun` (`id_tahun`);

--
-- Constraints for table `sub_jurusan`
--
ALTER TABLE `sub_jurusan`
  ADD CONSTRAINT `sub_jurusan_ibfk_1` FOREIGN KEY (`idfakultas`) REFERENCES `id_fakultas` (`id_fakultas`);
--
-- Database: `enkripsi_aes`
--
CREATE DATABASE IF NOT EXISTS `enkripsi_aes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `enkripsi_aes`;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(5) NOT NULL,
  `id_user` int(5) DEFAULT NULL,
  `nama_dokumen` varchar(80) DEFAULT NULL,
  `dokumen_id` varchar(80) DEFAULT NULL,
  `nama_enkrip` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `lab`
--
CREATE DATABASE IF NOT EXISTS `lab` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lab`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `nama`) VALUES
('masrud', '$2y$10$WAmcbJTVnxhrlz.dYS453e.8esn1WRrEK/ilgjMgh./5jyD0M4Fua', 'M. Rudianto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);
--
-- Database: `mynotescode`
--
CREATE DATABASE IF NOT EXISTS `mynotescode` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mynotescode`;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jenis_kelamin`, `telp`, `alamat`, `foto`) VALUES
('10110470110', 'Ade Zenudin Bimashita', 'perempuan', '08199288272', 'Jl.Raya Cicalengka No.101', '09032017041439client1.png'),
('10110470111', 'Ani Lestari', 'Perempuan', '089228827727', 'Jl.Pengrajin No.90', 'tab2.png'),
('10110470112', 'Imam Maulana', 'Laki-laki', '08561777166', 'Jl.Jend.Gatot Subroto No.10', 'man2.jpg'),
('10110470113', 'Siska Melina Rachman', 'Perempuan', '0828817717', 'Jl.Raya Cileunyi No.76', 'team-member.jpg'),
('10114072001', 'Rizaldi Maulidia Achmad', 'Laki-laki', '089283773622', 'Jl.Raya Jatinangor No.21', 'man1.jpg'),
('1312', 'pdf', 'Laki-laki', '123', '21', '231020182142511062.jpg'),
('3719', 'saa', 'Laki-laki', '11111111', 'xA`', '23102018214731Untitled-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\",\"full_screen\":\"off\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

--
-- Dumping data for table `pma__pdf_pages`
--

INSERT INTO `pma__pdf_pages` (`db_name`, `page_nr`, `page_descr`) VALUES
('db_kkp', 1, 'save');

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"db_kkp\",\"table\":\"users\"},{\"db\":\"cms\",\"table\":\"users\"},{\"db\":\"lab\",\"table\":\"login\"},{\"db\":\"db_kkp\",\"table\":\"karya_ilmiah\"},{\"db\":\"db_kkp\",\"table\":\"permintaan_data\"},{\"db\":\"aes\",\"table\":\"karya_ilmiah\"},{\"db\":\"db_kkp\",\"table\":\"sub_jurusan\"},{\"db\":\"db_kkp\",\"table\":\"id_fakultas\"},{\"db\":\"db_kkp\",\"table\":\"tipe\"},{\"db\":\"db_kkp\",\"table\":\"tahun\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

--
-- Dumping data for table `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('db_kkp', 'file', 'id_tipe', 'db_kkp', 'tipe', 'id_tipe');

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

--
-- Dumping data for table `pma__table_coords`
--

INSERT INTO `pma__table_coords` (`db_name`, `table_name`, `pdf_page_number`, `x`, `y`) VALUES
('db_kkp', 'fakultas', 1, 280, 204),
('db_kkp', 'file', 1, 713, 141),
('db_kkp', 'gambar', 1, 707, 371),
('db_kkp', 'karya_ilmiah', 1, 33, 6),
('db_kkp', 'karyailmiah', 1, 758, 511),
('db_kkp', 'name', 1, 488, 283),
('db_kkp', 'programmer', 1, 574, 546),
('db_kkp', 'sub_jurusan', 1, 281, 341),
('db_kkp', 'subjek', 1, 261, 94),
('db_kkp', 'tipe', 1, 263, 10),
('db_kkp', 'users', 1, 486, 9);

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Dumping data for table `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('coba', 'relasi', 'haha'),
('db_kkp', 'file', 'username'),
('db_kkp', 'karya_ilmiah', 'judul'),
('db_kkp', 'karyailmiah', 'username'),
('db_kkp', 'sub_jurusan', 'nama_sub_jurusan');

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-11-16 20:22:32', '{\"lang\":\"en_GB\",\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":242}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
