-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jun 2017 pada 15.54
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t_iibadah2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id_agm` int(11) NOT NULL,
  `nama_agm` char(15) DEFAULT NULL,
  `ico` varchar(10) DEFAULT NULL,
  `warna` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id_agm`, `nama_agm`, `ico`, `warna`) VALUES
(1, 'islam', 'masjid.png', '#008000'),
(2, 'kristen/katolik', 'gereja.png', '#FF0000'),
(3, 'hindu', 'pura.png', '#FFFF00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kab` int(11) NOT NULL,
  `nama_kab` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kab`, `nama_kab`) VALUES
(1, 'sleman'),
(2, 'bantul'),
(3, 'kota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `id_agm` int(11) DEFAULT NULL,
  `id_kab` int(11) DEFAULT NULL,
  `nama_lokasi` varchar(50) DEFAULT NULL,
  `jalan` varchar(200) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lng` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `id_agm`, `id_kab`, `nama_lokasi`, `jalan`, `lat`, `lng`, `image`) VALUES
(2, 1, 1, 'masjid as-saajinah', 'Jalan Wonosari Km. 9 Gandu RT 04/07 Sendangtirto Berbah Sleman', '-7.8280247', '110.4304913', 'as-saajinah.jpg'),
(3, 1, 2, 'Masjid al-ittihaad', 'Jl. Wonosari, Banguntapan, Bantul', '-7.81106', '110.4051713', 'al-ittihaad.jpg'),
(4, 1, 2, 'Masjid Almuhtadin', 'Jl. Bulu No.239 Banguntapan Bantul', '-7.7893', '110.40689', 'Masjid_Almuhtadin.jpg'),
(5, 2, 2, 'santo yohanes pembaptis', 'Srimulyo Piyungan Bantul Daerah Istimewa Yogyakarta', '-7.82978', '110.45321', 'gereja.jpg'),
(6, 3, 2, 'Pura Jagatnata', 'Jl. Pura No. 201, Sorowajan, Banguntapan, Bantul', '-7.7945788', '110.4016262', 'pura_jagatnata.jpg'),
(7, 1, 1, 'masjid al-hidayah', 'Kalitirto Berbah Kabupaten Sleman', '-7.80637', '110.4499013', 'al-hidayah.jpg'),
(8, 1, 1, 'Masjid Nurul Iman', 'Selomartani Kalasan Kabupaten Sleman ', '-7.73572', '110.46144', 'Masjid_Nurul_Iman.jpg'),
(9, 1, 1, 'Masjid_Al-Qumar', 'Jl. Nogomudo Caturtunggal Kec. Depok', '-7.7854', '110.40136', 'Masjid_Al-Qumar.jpg'),
(10, 1, 1, 'Masjid Taufiq', 'Widodomartani Ngemplak Kabupaten Sleman', '-7.70073', '110.45035', 'Masjid_Taufiq.jpg'),
(11, 2, 1, 'bunda maria', 'Jl. Anggrek No.6 Maguwoharjo Kec. Depok Kabupaten', '-7.78221', '110.43418', 'bunda_maria.jpg'),
(12, 2, 1, 'santo yusuf', 'Kalitirto Berbah Kabupaten Sleman', '-7.79269', '110.45868', 'santo_yusuf.jpg'),
(13, 2, 3, 'Gereja Katolik Kristus Raja Baciro', 'Jl. Melati Wetan No.47, Baciro, Gondokusuman, Kota Yogyakarta, ', '-7.7913605', '110.3896066', 'baciro.jpg'),
(14, 2, 3, 'Gereja Masehi Advent Hari Ketujuh ', 'Jl. Ipda Tut Harsono No.90, Muja Muju, Umbulharjo, Kota Yogyakarta', '-7.792821', '110.3932392', 'gmasehi.png'),
(15, 3, 2, 'Pura Eka Dharma', 'JL. Gonjen, Tamantirto, Kasihan, Bantul, Tamantirto, Kasihan, Bantul', '-7.8242724', '110.3313442', 'dharma.jpg'),
(16, 1, 3, 'Masjid Jogokariyan', 'Jalan Jogokaryan No. 36, Mantrijeron, Kota Yogyakarta', '-7.8243241', '110.364371', 'jogokariyan.jpg'),
(17, 1, 3, 'Masjid Gedhe Kauman', 'Jl. Kauman, Alun-Alun Keraton, Ngupasan, Yogyakarta,', '-7.8039357', '110.3623719', 'kauman.jpg'),
(18, 1, 3, 'Masjid Syuhada', 'Jl. I Dewa Nyoman Oka No.13, Kotabaru, Gondokusuman,', '-7.7863099', '110.3693299', 'syuhada.jpg'),
(19, 1, 3, 'Masjid Soko Tunggal', 'Jl. Taman 1 No.318, Patehan, Kraton, Kota Yogyakarta', '-7.8104274', '110.3604271', 'tunggal.jpg'),
(20, 1, 3, 'Masjid Agung Mataram Kotagede', 'Jl. Karanglo, Jagalan, Kotagede, Kota Yogyakarta, ', '-7.8294736', '110.3981824', 'mataram.jpg'),
(21, 1, 3, 'Masjid Besar Pakualaman', 'Gunung Ketur, Wirobrajan, Kompleks Masjid Besar Pakualaman', '-7.8010458', '110.3751168', 'pakualaman.jpg'),
(22, 1, 3, 'Masjid Lempuyangan', 'Jl. Mas Suharto, Bausasran, Danurejan, Kota Yogyakarta', '-7.793157', '110.374787', 'lempuyangan.jpg'),
(23, 1, 1, 'Masjid Al-Hidayah Purwosari', 'Jalan Kaliurang Km. 6, Gang Bali C-16 SIA XVIII Purwosari, Sinduadi, Mlati, Sinduadi', '-7.750596', '110.3835603', '212214.jpg'),
(24, 2, 2, 'Gereja Hati Kudus Tuhan Yesus Ganjuran', 'Jl. Ganjuran, Sumbermulyo, Bambanglipuro, Bantul', '-7.9263951', '110.3194027', '23712.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sholat`
--

CREATE TABLE `sholat` (
  `idShlt` int(11) NOT NULL,
  `solat` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sholat`
--

INSERT INTO `sholat` (`idShlt`, `solat`) VALUES
(1, 'Subuh'),
(2, 'Dhuhur'),
(3, 'Ashar'),
(4, 'Maghrib'),
(5, 'Isya'),
(6, 'Jumat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idpengguna` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idpengguna`, `username`, `password`) VALUES
(1, 'admin', 'f2a1cd1a4b1a657d9b4454f1611bde7f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ustad`
--

CREATE TABLE `ustad` (
  `idUstd` int(11) NOT NULL,
  `idShlt` int(11) DEFAULT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `umur` int(2) DEFAULT NULL,
  `noTelp` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ustad`
--

INSERT INTO `ustad` (`idUstd`, `idShlt`, `id_lokasi`, `nama`, `alamat`, `umur`, `noTelp`, `email`) VALUES
(1, 1, 23, 'asfas', 'asfasf', 43, '35535', 'asfasfasf'),
(2, 2, 23, 'aaaaaa', 'aaaaa', 21, '235235', 'asfasfas'),
(3, 3, 23, 'asfasf', 'asasf', 22, '35235', 'asfasf'),
(4, 4, 23, 'asfsa', 'asfsaf', 22, '343', 'asfasfasf'),
(5, 5, 23, 'afsasf', 'asfsaf', 55, '35235', 'dsffsdf'),
(6, 6, 23, 'afasfsas', 'ghjhj', 55, '5346346', 'sdgsdgsdg'),
(7, 1, 7, 'sdfsdg', 'dddddd', 77, '364346', 'saaassaf'),
(8, 2, 7, 'asdasd', 'asdasd', 90, '658568', 'a@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agm`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD KEY `id_agm` (`id_agm`),
  ADD KEY `id_kab` (`id_kab`);

--
-- Indexes for table `sholat`
--
ALTER TABLE `sholat`
  ADD PRIMARY KEY (`idShlt`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `ustad`
--
ALTER TABLE `ustad`
  ADD PRIMARY KEY (`idUstd`),
  ADD KEY `idShlt` (`idShlt`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `sholat`
--
ALTER TABLE `sholat`
  MODIFY `idShlt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ustad`
--
ALTER TABLE `ustad`
  MODIFY `idUstd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `lokasi_ibfk_1` FOREIGN KEY (`id_agm`) REFERENCES `agama` (`id_agm`),
  ADD CONSTRAINT `lokasi_ibfk_2` FOREIGN KEY (`id_kab`) REFERENCES `kabupaten` (`id_kab`);

--
-- Ketidakleluasaan untuk tabel `ustad`
--
ALTER TABLE `ustad`
  ADD CONSTRAINT `ustad_ibfk_1` FOREIGN KEY (`idShlt`) REFERENCES `sholat` (`idShlt`),
  ADD CONSTRAINT `ustad_ibfk_2` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
