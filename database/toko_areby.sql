-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 08:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_areby`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(125) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `harga` int(8) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
('BR002', 'Jersey Manchester United F.C.', 'Jersey Bola Original', 'Jersey', 90000, 49, 'mu.jpg'),
('BR003', 'Jersey FC Bayern Munchen', 'Jersey Bola Original', 'Jersey', 90000, 48, 'munchen.jpg'),
('BR004', 'Jersey A.S. Roma 1', 'Jersey Bola Original', 'Jersey', 90000, 50, 'roma-home.jpg'),
('BR005', 'Jersey A.S. Roma 2', 'Jersey Bola Original', 'Jersey', 90000, 50, 'roma-away.jpg'),
('BR006', 'Jersey FC Barcelona', 'Jersey Bola Original', 'Jersey', 90000, 49, 'barcelona.jpg'),
('BR007', 'Jersey Chelsea F.C.', 'Jersey Bola Original', 'Jersey', 90000, 50, 'chelsea.jpg'),
('BR008', 'Jersey Borussia Dortmund', 'Jersey Bola Original', 'Jersey', 90000, 50, 'dortmund.jpg'),
('BR009', 'Jersey Liverpool F.C. 1', 'Jersey Bola Original', 'Jersey', 90000, 50, 'liverpool-home.jpg'),
('BR010', 'Jersey Liverpool F.C. 2', 'Jersey Bola Original', 'Jersey', 90000, 50, 'liverpool-away.jpg'),
('BR011', 'Jersey Real Madrid C.F.', 'Jersey Bola Original', 'Jersey', 90000, 47, 'madrid.jpg'),
('BR012', 'Gamis Classic Polos/Classic Dress Muslim', 'Baju Gamis Bahan Mulus dan Lembut', 'Busana_Muslim', 220000, 50, 'gamis-classic.jpg'),
('BR013', 'Set Baju Muslim Anak Pria', 'Baju Koko Anak Pria Trendy', 'Busana_Muslim', 125000, 50, 'koko.jpg'),
('BR014', 'Set Baju Muslim Anak Wanita', 'Baju Gamis Anak Wanita Trendy', 'Busana_Muslim', 135000, 50, 'gamis-abu.jpg'),
('BR015', 'Mukena Traveling 2 in 1 Biru', 'Mukena Travelling 2 in 1 Dewasa. 1 Set Mukena + Pouch', 'Busana_Muslim', 175000, 49, 'mukena-biru.jpg'),
('BR016', 'Baju Oka/Baju Perawat', 'Baju Oka/Perawat Unisex Lengan Pendek', 'Pakaian_Dewasa', 120000, 50, 'baju-oka.jpg'),
('BR017', 'Set Piyama Anak Wanita Biru', 'Piyama Set Dress/Baju Tidur Anak Wanita', 'Pakaian_Anak', 125000, 50, 'piyama-biru.jpg'),
('BR018', 'Celana Cullot Scuba Premium', 'Cullot scuba material, bahan tebal, adem, melar dan halus.', 'Pakaian_Dewasa', 125000, 48, 'culot41.jpeg'),
('BR019', 'Mukena Travelling 2 in 1 Coklat', 'Mukena Travelling 2 in 1 Dewasa. 1 Set Mukena + Pouch', 'Busana_Muslim', 175000, 50, 'mukena-coklat.jpg'),
('BR020', 'Mukena Travelling 2 in 1 Hijau', 'Mukena Travelling 2 in 1 Dewasa. 1 Set Mukena + Pouch', 'Busana_Muslim', 175000, 50, 'mukena-hijau.jpg'),
('BR021', 'Mukena Travelling 2 in 1 Hitam', 'Mukena Travelling 2 in 1 Dewasa. 1 Set Mukena + Pouch', 'Busana_Muslim', 175000, 50, 'mukena-hitam.jpg'),
('BR022', 'Mukena Travelling 2 in 1 Pink', 'Mukena Travelling 2 in 1 Dewasa. 1 Set Mukena + Pouch', 'Busana_Muslim', 175000, 50, 'mukena-pink.jpg'),
('BR023', 'Mukena Travelling 2 in 1 Merah', 'Mukena Travelling 2 in 1 Dewasa. 1 Set Mukena + Pouch', 'Busana_Muslim', 175000, 50, 'mukena-merah.jpg'),
('BR024', 'Mukena Travelling 2 in 1 Putih', 'Mukena Travelling 2 in 1 Dewasa. 1 Set Mukena + Pouch', 'Busana_Muslim', 175000, 49, 'mukena-putih2.jpg'),
('BR025', 'Mukena Travelling 2 in 1 Ungu', 'Mukena Travelling 2 in 1 Dewasa. 1 Set Mukena + Pouch', 'Busana_Muslim', 175000, 50, 'mukena-ungu.jpg'),
('BR026', 'Atasan Blouse Crinkle', 'Blouse unik, kekinian, milenial. Bahan Crinkle premium. Cocok untuk remaja dan dewasa sebagai baju santai/baju kerja', 'Pakaian_Dewasa', 125000, 47, 'atasan_kringkel,_125.jpg'),
('BR027', 'Gamis Classic Coklat Anak', 'Baju Gamis Anak Wanita Trendy', 'Pakaian_Anak', 150000, 50, 'gamis_anak_juga,_150.jpg'),
('BR028', 'Gamis Classic Pink Anak', 'Baju Gamis Anak Wanita Trendy', 'Pakaian_Anak', 150000, 49, 'gamis_anak,_150.jpg'),
('BR029', 'Gamis Ceruty Babydoll', 'Ceruty Babydoll Full Puring Aplikasi Renda', 'Busana_Muslim', 185000, 50, 'gamis_ceruty,_185.jpg'),
('BR030', 'Gamis Home Dress Katun', 'Bahan Adem Dan Lembut,Nyaman Dihunakan Sehari Hari ,Simple Dan Elegant,Bagus Dan Ekelusive', 'Busana_Muslim', 125000, 50, 'gamis_katun_juga,_125.jpg'),
('BR031', 'Gamis Home Dress Katun', 'Bahan Adem Dan Lembut,Nyaman Dihunakan Sehari Hari ,Simple Dan Elegant,Bagus Dan Ekelusive', 'Busana_Muslim', 125000, 50, 'gamis_katun,_125.jpg'),
('BR032', 'Gamis Dress Muslim Busui', 'Ratu Maxi Busui Syari (only dress), Busui Friendly.', 'Busana_Muslim', 250000, 50, 'gamis,_250.jpg'),
('BR033', 'Midi Dress Home Dress Busui', 'Bahan Adem Dan Lembut,Nyaman Dihunakan Sehari Hari ,Simple Dan Elegant,Bagus Dan Ekelusive, Busui Friendly.', 'Pakaian_Dewasa', 135000, 50, 'midi_dress,_135.jpg'),
('BR034', 'Ruby Set Rayon Crinkle', 'Bahan Adem dan Nyaman di Gunakan, Tidak Mudah Kusut', 'Pakaian_Dewasa', 175000, 50, 'oneset_rubi,_175.jpg'),
('BR035', 'Set Piyama Anak Wanita Kuning', 'Piyama Set Dress/Baju Tidur Anak Wanita', 'Pakaian_Anak', 125000, 50, 'piyama-kuning.jpg'),
('BR036', 'Set Piyama Anak Wanita Merah', 'Piyama Set Dress/Baju Tidur Anak Wanita', 'Pakaian_Anak', 125000, 50, 'piyama-merah.jpg'),
('BR037', 'Set Piyama Anak Wanita Pink', 'Piyama Set Dress/Baju Tidur Anak Wanita', 'Pakaian_Anak', 125000, 50, 'piyama-pink.jpg'),
('BR038', 'Atasan Blouse Stripped Tunic', 'Blouse Stripped Tunic Bahan woolpeach premium, tebal, tidak terawang', 'Pakaian_Dewasa', 125000, 48, 'kemeja,_125.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` varchar(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `status` tinyint(5) NOT NULL,
  `bukti_tf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `username`, `nama`, `alamat`, `tgl_pesan`, `status`, `bukti_tf`) VALUES
('IN001', 'anggakuat', 'Angga Adya', 'Jl. Indrajid No.55 RT.017/RW.003, Dirgantara 3, Halim. P', '2022-08-17 19:25:01', 2, ''),
('IN002', 'dimasadty4', 'Dimas Aditya Prima Yudha', 'Jl. Indrajid No,50', '2022-08-17 19:43:01', 1, ''),
('IN003', 'pelanggan1', 'Indah Sukamti', 'Jl. Raya Jatiwaringin No. 53, Pondok Gede, Jatiwaringin, Bekasi', '2022-08-19 13:35:30', 2, ''),
('IN004', 'pelanggan2', 'Endra Sutiman', 'Jl. Raya Kalimalang No.18, RW.3, Pd. Bambu, Kec. Duren Sawit, Kota Jakarta Timur,', '2022-08-19 13:46:27', 2, ''),
('IN005', 'pelanggan2', 'Endra Sutiman', 'Jl. Raya Kalimalang No.18, RW.3, Pd. Bambu, Kec. Duren Sawit, Kota Jakarta Timur,', '2022-08-19 14:08:35', 0, ''),
('IN006', 'pelanggan1', 'Indah Sukamti', 'Jl. Raya Jatiwaringin No. 53, Pondok Gede, Jatiwaringin, Bekasi', '2022-08-19 16:43:02', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(5) NOT NULL,
  `id_invoice` varchar(5) NOT NULL,
  `nama_pembayar` varchar(50) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `jumlah_bayar` int(15) NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `bukti_bayar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_invoice`, `nama_pembayar`, `nama_bank`, `jumlah_bayar`, `tgl_bayar`, `bukti_bayar`) VALUES
(11, '31', 'Dimas A', 'BRI', 125000, '2022-08-09 15:09:28', 'Screenshot_(41)1.png'),
(12, '32', 'Ahmad Sul', 'BRI', 90000, '2022-08-09 15:41:38', 'Screenshot_(41)2.png'),
(13, '34', 'Dimas Aditya Prima Yudha', 'BRI', 440000, '2022-08-15 18:18:36', 'Contoh.png'),
(14, '35', 'Angga Impossible', 'Ovo', 610000, '2022-08-17 09:50:33', 'contoh_bukti_transfer.jpg'),
(15, 'IN001', 'Angga Emotional', 'BRI', 90000, '2022-08-17 19:27:40', 'contoh_bukti_transfer1.jpg'),
(16, 'IN002', 'Dimas Aditya Prima Yudha', 'Ovo', 355000, '2022-08-17 19:43:24', 'contoh_bukti_transfer2.jpg'),
(17, 'IN003', 'Indah Soekamti', 'Mandiri', 575000, '2022-08-19 13:36:07', 'contoh_bukti_transfer3.jpg'),
(18, 'IN004', 'Endra Bronxside', 'BNI', 625000, '2022-08-19 13:48:07', 'contoh_bukti_transfer4.jpg'),
(19, 'IN006', 'Dimas Aditya', 'BNI', 90000, '2022-08-19 16:43:46', 'contoh_bukti_transfer5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `username` varchar(15) NOT NULL,
  `nama_pelanggan` varchar(35) NOT NULL,
  `alamat_pelanggan` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`username`, `nama_pelanggan`, `alamat_pelanggan`, `no_hp`, `email`) VALUES
('ahmad', 'Ahmad Satrio', 'Jl. Kp Baru', '0838-9270-8477', 'kotabekasi.pm@domain.com'),
('anggakuat', 'Angga Adya', 'Jl. Indrajid No.55 RT.017/RW.003, Dirgantara 3, Halim. P', '083892805678', 'anggaadya@gmail.com'),
('dimasadty4', 'Dimas Aditya Prima Yudha', 'Jl. Indrajid No,50', '083812345678', '12191007@bsi.ac.id'),
('pelanggan1', 'Indah Sukamti', 'Jl. Raya Jatiwaringin No. 53, Pondok Gede, Jatiwaringin, Bekasi', '083892708444', 'drg.antariksa@domain.com'),
('pelanggan2', 'Endra Sutiman', 'Jl. Raya Kalimalang No.18, RW.3, Pd. Bambu, Kec. Duren Sawit, Kota Jakarta Timur,', '083892708478', 'ahmadzulhan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(5) NOT NULL,
  `id_invoice` varchar(11) NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `ukuran`, `harga`, `pilihan`) VALUES
(50, '31', '24', 'Celana Cullot Scuba Premium', 1, 'S', 125000, ''),
(51, '32', '9', 'Jersey Bola', 1, 'S', 90000, ''),
(52, '33', '15', 'Baju Muslim', 1, 'S', 125000, ''),
(53, '34', '12', 'Jersey Bola', 1, 'S', 90000, ''),
(54, '34', '17', 'Mukena Travelling 2 in 1', 2, 'S', 175000, ''),
(55, '35', '13', 'Jersey Bola', 1, 'M', 90000, ''),
(56, '35', '24', 'Celana Cullot Scuba Premium', 2, 'XL', 125000, ''),
(57, '35', '16', 'Baju Gamis Anak', 2, 'L', 135000, ''),
(58, '36', 'BR002', 'Jersey Manchester United F.C.', 1, 'L', 90000, ''),
(59, '0', 'BR003', 'Jersey FC Bayern Munchen', 1, 'XL', 90000, ''),
(60, 'IN001', 'BR011', 'Jersey Real Madrid C.F.', 1, 'XXL', 90000, ''),
(61, 'IN002', 'BR015', 'Mukena Traveling 2 in 1 Biru', 1, 'XL', 175000, ''),
(62, 'IN002', 'BR011', 'Jersey Real Madrid C.F.', 2, 'M', 90000, ''),
(63, 'IN003', 'BR028', 'Gamis Classic Pink Anak', 1, 'M', 150000, ''),
(64, 'IN003', 'BR018', 'Celana Cullot Scuba Premium', 2, 'L', 125000, ''),
(65, 'IN003', 'BR024', 'Mukena Travelling 2 in 1 Putih', 1, 'M', 175000, ''),
(66, 'IN004', 'BR026', 'Atasan Blouse Crinkle', 3, 'XL', 125000, ''),
(67, 'IN004', 'BR038', 'Atasan Blouse Stripped Tunic', 2, 'L', 125000, ''),
(68, 'IN005', 'BR003', 'Jersey FC Bayern Munchen', 1, 'S', 90000, ''),
(69, 'IN006', 'BR006', 'Jersey FC Barcelona', 1, 'L', 90000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan produk` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE barang SET stok = stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'Saykoji', 'admin', '123', 1),
(13, 'Dimas Aditya', 'dimasadty4', '123', 2),
(14, 'ahmad', 'ahmad', '123', 2),
(15, 'Angga Adya', 'anggakuat', '123', 2),
(16, 'Indah Sukamti', 'pelanggan1', '123', 2),
(17, 'Imam', 'pelanggan2', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
