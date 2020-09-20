-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 08:21 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'dds', '202cb962ac59075b964b07152d234b70', 'dede');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `cover` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `id_kategori`, `judul`, `pengarang`, `penerbit`, `stok`, `harga`, `keterangan`, `cover`) VALUES
(1, 1, 'Semua Bisa Menjadi Programmer Python Case Study', 'Yuniar Supardi', 'Elex Media Komp', 1, 72000, 'Buku dengan Judul Semua Bisa Menjadi Programmer Python Case Study ini merupakan buku lanjutan dari buku Semua Bisa Menjadi Programmer Python Basic yang best seller, tetapi Anda juga dapat langsung belajar dari buku ini. Dalam buku ini, Anda akan mendapat ', '1.jpg'),
(3, 2, 'Metodologi Penelitian Dilengkapi Analisis Regresi ', 'Dr. Hartono, M.', 'Zanafa Publishi', 1, 75000, 'Metodologi Penelitian Dilengkapi Analisis Regresi Dan Path A', '2.jpg'),
(4, 3, 'Shalawatin Aja', 'Muchlis Marshal', 'Wahyuqolbu', 1, 65000, 'Shalawatin Aja', '3.jpg'),
(5, 4, 'Budidaya Intensif Lobak', 'Ir Bambang Cahyono', 'PAPAS SINAR SINANTI', 1, 48000, 'Dewasa ini mangaat lobat terus berkembang, karena dijadikan bahan kosmetika untuk merawat wajah, kulit, menuburkan rambut, mengatasi jerawat, karena dalam lobak terdapat vitamin, lemak nabati, protein, mineral, pigmen dam enzim tertentu yang dapat meningk', '4.jpg'),
(6, 5, 'Pedoman Dan Strategi Audit Intern Bank', 'Ikatan Bankir Indonesia', 'Gramedia Pustaka Utama', 1, 108000, 'Sistem pengendalian intern yang efektif merupakan dasar bagi kegiatan operasional bank yang sehat dan aman. Sistem itu membantu direksi dan dewan komisaris menjaga aset bank, menjamin tersedianya pelaporan keuangan dan manajerial yang dapat dipercaya, men', '5.jpg'),
(7, 6, 'QANZA - Komik Keluarga Muslim Milenial', 'Redaksi m&c!', 'm&c!', 1, 98000, 'Bintang (15 tahun) dan Bulan (13 tahun) adalah kakak beradik yang tumbuh dalam keluarga muslim modern. Mereka remaja produk zaman milenial yang lekat dengan peralatan elektronik dan jaringan online. Komik ini terdiri dari 17 cerita tentang kehidupan keseh', '6.jpg'),
(8, 7, 'Aruna dan Lidahnya (Sebuah Novel)', 'Laksmi Pamuntjak', 'Gramedia Pustaka Utama', 1, 171000, 'Ketika Aruna ditugasi meneyelidiki kasus flu unggas yang terjadi secara serentak di delapan kota seputar Indonesia,ia memakai kesempatan itu untuk mencicipi kekayaan kuliner lokal bersama kedua karibnya.Dalam perjalanan mereka,makanan,politik,agama,sejara', '7.jpg'),
(9, 1, 'Semua Bisa Menjadi Programmer Laravel Basic', 'YUNIAR SUPARDI & SULAEMAN', 'Elex Media Komputindo', 1, 98000, 'Buku dengan judul “Semua Bisa Menjadi Programmer Laravel Basic” ini merupakan buku dasar dalam mempelajari framework PHP dengan Laravel yang saat ini sedang populer. Dengan buku ini, tandanya Anda sudah belajar sampai tingkat menengah.', '8.jpg'),
(10, 2, 'Biotechnology Is So Fun', 'Wahyu Wido Sari', ' Pt Kanisius', 1, 45000, 'Biotechnology Is So Fun', '9.jpg'),
(11, 5, 'Start To Up Let\'S Change And Make Your Move!', 'DAVID CORNELIS & FITRI KINASIH', 'Elex Media Komputindo', 1, 70000, 'Parviz Shipping Company hancur terdisrupsi lawan-lawan tak kasat mata yang menyebabkannya merugi triliunan rupiah. Memutar roda kehidupan keluarga Parviz menuju titik terendah. Meninggalkan jejak trauma di dalam benak putra semata wayangnya, Denial Parviz. Aku adalah Denial yang terbelenggu mahluk asing bernama Trauma. Takut dan cemas hadir bersamanya, setiap kali aku bersinggungan dengan realitas kejamnya dunia bisnis. Terlebih saat takdir selalu membawaku pada dunia itu, dunia yang sama sekali tak pernah kukehendaki. Hingga akhirnya aku dipertemukan dengan Millen yang juga diperdaya rasa trauma. ', '10.jpg'),
(12, 1, 'Semua Bisa Menjadi Programmer Ruby Basic', 'Ir. Yuniar Supardi', 'Elex Media Komputindo', 1, 64800, 'Paradigma pemrograman telah berubah dari pemrograman procedural (teks), menuju ke pemrograman visual. Hingga kini, setidaknya dalam dua dasawarsa, akan menjadi pemrograman command line dengan ringan, mudah, dan mempunyai fitur OOP, serta kemampuan antaroperasi perangkat lunak dan perangkat keras, serta kode semakin singkat. Hal itu terjawab dengan munculnya bahasa pemrograman Python dan Ruby. Buku dengan judul Semua Bisa Menjadi Programmer Ruby Basic ini berisi cara membuat dan menguasai program Ruby dari dasar. Keunggulan buku ini adalah memandu Anda untuk dapat belajar bahasa pemrograman Ruby dasar dengan mudah dan cepat. Buku ini juga mempunyai nilai lebih pada pembahasannya yang detail dan rinci.', '11.jpg'),
(14, 5, 'hjkkkkk', 'sss', 'ddd', 0, 123, '', '07012020041716.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Komputer & Teknologi'),
(2, 'Sains'),
(3, 'Agama'),
(4, 'Pertanian'),
(5, 'Bisnis & Ekonomi'),
(6, 'Komik'),
(7, 'Novel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `fk_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
