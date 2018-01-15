-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2017 at 04:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `headline`, `isi`, `pengirim`, `tanggal`) VALUES
(2, 'Debut Perdana Abirama', 'Terasa Nyaman, Debut Perdana Abirama di Industri Musik Tanah Air', 'Liputan6.com, Jakarta Pria dengan nama lengkap Antonius Aninditya Abirama Anggoro ini tertarik dengan dunia musik sejak masih mengenyam pendidikan sekolah dasar.&nbsp; Mempelajari berbagai alat musik, baik secara otodidak maupun melalui kursus, menjadi bekal dirinya untuk jadi&nbsp;musisi yang karya-karyanya akan segera kita nikmati baik secara on air maupun off air. Tepatnya 27 September 2017 lalu, Abirama resmi meluncurkan single pertamanya.\r\n\r\nPerkenalan dengan sebuah label berawal dari sekedar konsultasi titip edar. Namun, musik seorang Abirama memberikan daya tarik tersendiri bagi pihak label.&nbsp; Bersuara unik, memiliki&nbsp; &quot;charming look&quot; dan gaya yang fashionable dan kekinian, membuat label tidak ragu untuk&nbsp; mengambil Abi, panggilan akrabnya sebagai full sign artis.\r\n', 'sandi', '2017-12-29 15:49:16'),
(3, 'Isyana Sarasvati', 'Isyana Sarasvati Buat Isyanation Palembang â€˜Bergetarâ€™', 'Liputan6.com, Jakarta Cantik, berbakat, dan mempunyai suara merdu, mungkin bisa disematkan ke Isyana Sarasvati. Siapa yang tidak kenal penyanyi berbakat ini. Segudang prestasi sudah ditorehkan oleh penyanyi berusia 24 tahun ini. Terkini, pelantun Tetap Dalam Jiwa ini berhasil meraih satu penghargaan bersama Raisa untuk kategori Duo/Grup/Grup Vokal/Kolaborasi Soul/R&amp;B/Urban Terbaik di Anugerah Musik Indonesia atau AMI Awards 2017 lewat lagu &quot;Anganku Anganmu&quot;. Tak hanya itu, wanita lulusan Nanyang Academy of Fine Arts ini juga didapuk untuk mengisi lagu dalam film Ayat-Ayat Cinta 2. Dengan keterlibatan dalam lagu tersebut, Isyana disandingkan dengan dua Diva Tanah Air, Rossa dan Krisdayanti. Mengisi soundtrack memang sudah menjadi impian penyanyi 25 tahun itu. Karena itulah, ia tak ingin menolak tawaran yang diajukan kepadanya. Padahal, saat itu Isyana mengaku tengah memiliki banyak pekerjaan.\r\n', 'sandi', '2017-12-29 15:39:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
