-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Agu 2020 pada 04.46
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpesdm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'andhi', 'andhi1710', 'e740e824e9c3054a928f903cf8d15720');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ikm`
--

CREATE TABLE `ikm` (
  `id_ikm` int(5) NOT NULL,
  `kbli` varchar(10) NOT NULL,
  `badan_usaha` varchar(5) NOT NULL,
  `nama_ikm` varchar(50) NOT NULL,
  `nama_pemilik` varchar(45) NOT NULL,
  `jalan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `telepon` varchar(35) NOT NULL,
  `komoditi` varchar(50) NOT NULL,
  `legalitas` varchar(50) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `investasi` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `nilai_produk` int(10) NOT NULL,
  `tk_l` int(10) NOT NULL,
  `tk_p` int(10) NOT NULL,
  `skala` varchar(10) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ikm`
--

INSERT INTO `ikm` (`id_ikm`, `kbli`, `badan_usaha`, `nama_ikm`, `nama_pemilik`, `jalan`, `desa`, `kecamatan`, `lokasi`, `telepon`, `komoditi`, `legalitas`, `jenis_produk`, `investasi`, `jumlah`, `satuan`, `nilai_produk`, `tk_l`, `tk_p`, `skala`, `tahun`) VALUES
(2, '38914', 'PO', 'batu alam', 'gilang gumilang', 'sukaraja', 'pasirhalang', 'parungkuda', '9w4810jas', '08213784', 'pisang coklat', '12 kilo', 'Bahan Bekas', 80000000, 83839, 'PC', 902180, 10, 8, '3', '2018'),
(3, '90283', 'PO', 'Computare', 'Azhar', 'Baros', 'Baros', 'Baros', '0423kj09', '09238402', 'Computer', '50kg', 'Hardware', 100000000, 8933127, 'PC', 800000, 10, 5, '2', '2019'),
(4, '20123', 'PO', 'Smartphone', 'Adri', 'Jampang', 'kadu', 'sadjha', 'jsdbaksdj', '90283432', 'Computer', '700 hp', 'Hardware', 120000000, 8933127, 'PC', 3981, 5, 2, '2', '2020'),
(5, '90283', 'PO', 'Computare', 'akun bodong', 'Jl. Raya Sukabumi - Cinajur Km.12', 'Sundwenang', 'Parungkuda', '9w4810jas', '08213784', 'Batu Hias', '700 hp', 'batu hias', 93481093, 932, 'buah', 800000, 3, 5, '2', '2021'),
(6, '9028', 'PO', 'Smartphone', 'gilang', 'sukaraja', 'sundwenang', 'parungkuda', 'kasfjlsahfslahf', '081218972715', 'Batu Hias', '700 hp', 'Pisang Coklat', 100000000, 93243, 'Buah', 3981, 7, 6, '2', '2018'),
(7, '93420', 'PO', 'Computare', 'akunam', 'Kadudampit', 'Pasirhalang', 'cisaat', '9w4810jassa', '081218972715', 'pisang coklat', '1 ton', 'batu hias', 42984, 93243, 'PC', 800000, 4, 6, '2', '2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_ikm`
--

CREATE TABLE `nilai_ikm` (
  `id_ikm` int(5) NOT NULL,
  `kbli` varchar(10) NOT NULL,
  `prov` varchar(4) NOT NULL,
  `kab` varchar(4) NOT NULL,
  `kec` varchar(4) NOT NULL,
  `desa` varchar(10) NOT NULL,
  `nama_ikm` varchar(40) NOT NULL,
  `nama_pemilik` varchar(40) NOT NULL,
  `komoditi` varchar(40) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `suplier` int(10) NOT NULL,
  `legal` int(10) NOT NULL,
  `kontinuitas` int(10) NOT NULL,
  `pangsa` int(10) NOT NULL,
  `kompetensi` int(10) NOT NULL,
  `jtk` int(10) NOT NULL,
  `produksi` int(10) NOT NULL,
  `adm` int(10) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `level` varchar(5) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_ikm`
--

INSERT INTO `nilai_ikm` (`id_ikm`, `kbli`, `prov`, `kab`, `kec`, `desa`, `nama_ikm`, `nama_pemilik`, `komoditi`, `lokasi`, `suplier`, `legal`, `kontinuitas`, `pangsa`, `kompetensi`, `jtk`, `produksi`, `adm`, `nilai`, `level`, `tahun`) VALUES
(1, '38914', '32', '01', '32', '32', 'batu alam', 'gilang gumilang', 'pisang coklat', '9w4810jas', 1, 5, 5, 4, 5, 4, 4, 4, '3.90000000', '3', '2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ikm`
--
ALTER TABLE `ikm`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indexes for table `nilai_ikm`
--
ALTER TABLE `nilai_ikm`
  ADD PRIMARY KEY (`id_ikm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ikm`
--
ALTER TABLE `ikm`
  MODIFY `id_ikm` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nilai_ikm`
--
ALTER TABLE `nilai_ikm`
  MODIFY `id_ikm` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
