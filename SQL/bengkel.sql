-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jun 2015 pada 14.51
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarservice`
--

CREATE TABLE IF NOT EXISTS `daftarservice` (
  `id` varchar(5) NOT NULL,
  `Date` datetime NOT NULL,
  `Paket` varchar(30) NOT NULL,
  `Harga` int(50) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(70) NOT NULL,
  `Tlp` varchar(30) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `NoPolisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftarservice`
--

INSERT INTO `daftarservice` (`id`, `Date`, `Paket`, `Harga`, `Nama`, `Alamat`, `Tlp`, `Model`, `NoPolisi`) VALUES
('S0001', '2015-06-17 13:23:01', 'ringan', 400000, 'Ditto', 'Jakarta', '0857221423', 'YZF-R15', 'B1234XX'),
('S0002', '2015-06-17 13:23:50', 'overhoul', 2000000, 'Galih', 'Karawang', '08999234532', 'YZF-R15', 'T4321GG'),
('S0003', '2015-06-17 14:10:15', 'ringan', 500000, 'Mephistou', 'Bekasi', '085777228999', 'YZF-R15', 'B3322ABE'),
('S0004', '2015-06-17 15:45:48', 'Berat', 230000, 'Jojon', 'Pekan baru', '078963335', 'YZF-R25', 'X5634CC'),
('S0005', '2015-06-17 19:35:22', 'overhoul', 2500000, 'Sugeng', 'Kranji', '0878777665', 'YZF-R25', 'B6787KB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dealerbeli`
--

CREATE TABLE IF NOT EXISTS `dealerbeli` (
  `id` varchar(5) NOT NULL,
  `Date` datetime NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Tlp` varchar(20) NOT NULL,
  `Bank` varchar(30) NOT NULL,
  `Rek` varchar(30) NOT NULL,
  `Merk` varchar(20) NOT NULL,
  `Harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dealerbeli`
--

INSERT INTO `dealerbeli` (`id`, `Date`, `Nama`, `Alamat`, `Tlp`, `Bank`, `Rek`, `Merk`, `Harga`) VALUES
('D0001', '2015-06-17 18:32:56', 'Jarwo', 'Karawang', 'MANDIRI', '022889321', '0547233187849', 'YZF - R15', 30000000),
('D0002', '2015-06-17 18:33:48', 'Parjo', 'Bekasi', 'BRI', '0213342231', '76834193922', 'YZF - R15', 30000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
--

CREATE TABLE IF NOT EXISTS `motor` (
  `KodeMotor` varchar(10) NOT NULL,
  `Merk` varchar(20) NOT NULL,
  `Warna` varchar(20) NOT NULL,
  `Harga` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `motor`
--

INSERT INTO `motor` (`KodeMotor`, `Merk`, `Warna`, `Harga`) VALUES
('YMH0004', 'YZF - R25', 'H - Tech', 55000000),
('YMH0003', 'YZF - R15', 'Moviestar', 30000000),
('YMH0001', 'YZF - R25', 'Moviestar', 55000000),
('YMH0002', 'YZF - R15', 'H - Tech', 30000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `parts`
--

CREATE TABLE IF NOT EXISTS `parts` (
  `NoParts` varchar(10) NOT NULL,
  `NamaParts` varchar(50) NOT NULL,
  `Model` varchar(10) NOT NULL,
  `Harga` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `parts`
--

INSERT INTO `parts` (`NoParts`, `NamaParts`, `Model`, `Harga`) VALUES
('1WDE1102', 'CYLINDER HEAD ASSY ', 'YZF-R25', 500000),
('1WDJK112', ' CYLINDER HEAD ASSY ', 'YZF-R25', 540000),
('1WDE1133', ' GUIDE, VALVE ', 'YZF-R25', 43000),
('1WDE1181', ' GASKET, CYLINDER HEAD ', 'YZF-R25', 14000),
('1WDE1191', ' COVER, CYLINDER HEAD ', 'YZF-R25', 22000),
('1WDE1351', ' GASKET, CYLINDER 1', 'YZF-R25', 53000),
('1WDC1661', ' CYLINDER 1', 'YZF-R25', 134000),
('1WDC1411', ' WATER PUMP ASSY ', 'YZF-R25', 34000),
('1WDC1771', ' AIR CUT VALVE ASSY ', 'YZF-R25', 754000),
('1WDA1231', ' CRANKSHAFT ', 'YZF-R25', 23000),
('1WDA1991', ' CONNECTING ROD ASSY ', 'YZF-R25', 56000),
('1WDA1311', ' SPROCKET, CAM CHAIN ', 'YZF-R25', 64000),
('1WDE1441', ' PISTON (STD)', 'YZF-R25', 65000),
('1WBF1381', ' PISTON RING SET (STD)', 'YZF-R25', 76000),
('1WBF1267', ' SPRING, COMPRESSION ', 'YZF-R25', 23000),
('1WBF1844', ' VALVE, INTAKE', 'YZF-R25', 43000),
('1WDE1111', ' VALVE, EXHAUST ', 'YZF-R25', 23000),
('1WDE1231', ' CAMSHAFT ASSY 1', 'YZF-R25', 345000),
('1WDE3211', ' THERMOSTAT ', 'YZF-R25', 50000),
('1WSH1231', ' OIL PUMP ASSY ', 'YZF-R25', 50000),
('1WSH1311', ' PROTECTOR, MUFFLER ', 'YZF-R25', 65000),
('1WSH4111', ' GRAPHIC, 1 1 UR FOR DPBMC(A)', 'YZF-R25', 34000),
('1WXH6ER1', ' GRAPHIC, 1 1 UR FOR SMX(B)', 'YZF-R25', 34000),
('1WXE4BD1', ' GRAPHIC, 1 1 UR FOR VRC1(C)', 'YZF-R25', 34000),
('1WDE8D11', ' ENGINE CONTROL UNIT ASSY ', 'YZF-R25', 145000),
('1WDE97B1', ' SENSOR, OXYGEN ', 'YZF-R25', 214000),
('1WZEW311', ' OIL PRESSURE SWITCH ASSY ', 'YZF-R25', 32000),
('1WZE13W1', ' RECTIFIER & REGULATOR ASSY ', 'YZF-R25', 120000),
('2RFE1102', ' CYLINDER HEAD ASSY ', 'YZF-R15', 21000),
('1FGE1133', ' GUIDE, VALVE ', 'YZF-R15', 22000),
('3PGE1181', 'GASKET, CYLINDER HEAD ', 'YZF-R15', 14000),
('3PGE1191', ' COVER, CYLINDER HEAD ', 'YZF-R15', 142000),
('2KPE1351', ' GASKET, CYLINDER 1', 'YZF-R15', 16000),
('2KPC1661', ' CYLINDER 1', 'YZF-R15', 123000),
('2BUC1411', ' WATER PUMP ASSY ', 'YZF-R15', 31000),
('2BUC1771', ' AIR CUT VALVE ASSY ', 'YZF-R15', 11000),
('1FDA1231', ' CRANKSHAFT ', 'YZF-R15', 21000),
('1FDA1991', ' CONNECTING ROD ASSY ', 'YZF-R15', 11000),
('1FDA1311', ' SPROCKET, CAM CHAIN ', 'YZF-R15', 21000),
('1FDE1441', ' PISTON (STD)', 'YZF-R15', 76000),
('1FDF1381', ' PISTON RING SET (STD)', 'YZF-R15', 43000),
('1WCF1267', ' SPRING, COMPRESSION ', 'YZF-R15', 12000),
('1WCF1844', ' VALVE, INTAKE', 'YZF-R15', 32000),
('1JJE1111', ' VALVE, EXHAUST ', 'YZF-R15', 20000),
('1WJE1231', ' CAMSHAFT ASSY 1', 'YZF-R15', 112000),
('1WJE3211', ' THERMOSTAT ', 'YZF-R15', 16000),
('1WJH1231', ' OIL PUMP ASSY ', 'YZF-R15', 43000),
('1WJH1311', ' PROTECTOR, MUFFLER ', 'YZF-R15', 23000),
('1WJH4111', ' GRAPHIC, 1 1 UR FOR DPBMC(A)', 'YZF-R15', 29000),
('1KIH6ER1', ' GRAPHIC, 1 1 UR FOR SMX(B)', 'YZF-R15', 29000),
('1KIE4BD1', ' GRAPHIC, 1 1 UR FOR VRC1(C)', 'YZF-R15', 29000),
('1KDE8D11', ' ENGINE CONTROL UNIT ASSY ', 'YZF-R15', 35000),
('1KDE97B1', ' SENSOR, OXYGEN ', 'YZF-R15', 35000),
('1AZEW311', ' OIL PRESSURE SWITCH ASSY ', 'YZF-R15', 40000),
('1FZE13W1', ' RECTIFIER & REGULATOR ASSY ', 'YZF-R15', 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partsbeli`
--

CREATE TABLE IF NOT EXISTS `partsbeli` (
  `id` varchar(5) NOT NULL,
  `Date` datetime NOT NULL,
  `NoParts` varchar(30) NOT NULL,
  `NamaParts` varchar(30) NOT NULL,
  `Harga` int(100) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Tlp` varchar(30) NOT NULL,
  `Bank` varchar(30) NOT NULL,
  `Rek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `partsbeli`
--

INSERT INTO `partsbeli` (`id`, `Date`, `NoParts`, `NamaParts`, `Harga`, `Nama`, `Alamat`, `Tlp`, `Bank`, `Rek`) VALUES
('P0001', '2015-06-17 18:34:41', '1WDE1133', ' GUIDE, VALVE ', 43000, 'Andreas', 'Jakarta', '08324432223', 'BCA', '088832811'),
('P0002', '2015-06-17 18:35:44', '1WDA1311', ' SPROCKET, CAM CHAIN ', 64000, 'Dimas', 'Cikarang', '08994433881', 'MANDIRI', '056443388695');

-- --------------------------------------------------------

--
-- Struktur dari tabel `r15`
--

CREATE TABLE IF NOT EXISTS `r15` (
  `Kode` varchar(20) NOT NULL,
  `Paket` varchar(20) NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  `Harga` int(200) NOT NULL,
  `Model` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `r15`
--

INSERT INTO `r15` (`Kode`, `Paket`, `Keterangan`, `Harga`, `Model`) VALUES
('B001', 'ringan', 'Paket Service Berat', 500000, 'YZF-R15'),
('R001', 'ringan', 'Paket Service Ringan', 280000, 'YZF-R15'),
('V001', 'overhoul', 'Paket Bongkat Total Mesin', 2000000, 'YZF-R15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `r25`
--

CREATE TABLE IF NOT EXISTS `r25` (
  `Kode` varchar(20) NOT NULL,
  `Paket` varchar(20) NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  `Harga` int(200) NOT NULL,
  `Model` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `r25`
--

INSERT INTO `r25` (`Kode`, `Paket`, `Keterangan`, `Harga`, `Model`) VALUES
('B001', 'berat', 'Paket Service Berat', 400000, 'YZF-R25'),
('R001', 'ringan', 'Paket Service Ringan', 300000, 'YZF-R25'),
('V001', 'overhoul', 'Paket Bongkar Total Mesin', 2500000, 'YZF-R25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `KodeUser` varchar(10) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`KodeUser`, `UserName`, `Password`, `Status`) VALUES
('USR00002', 'dedo', 'admin', 'admin'),
('USR00001', 'ditto', '1234', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarservice`
--
ALTER TABLE `daftarservice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealerbeli`
--
ALTER TABLE `dealerbeli`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
 ADD PRIMARY KEY (`KodeMotor`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
 ADD PRIMARY KEY (`NoParts`);

--
-- Indexes for table `partsbeli`
--
ALTER TABLE `partsbeli`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r15`
--
ALTER TABLE `r15`
 ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `r25`
--
ALTER TABLE `r25`
 ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`KodeUser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
