-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 07:27 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webcek`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_master` varchar(5) NOT NULL,
  `produk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_master`, `produk`) VALUES
('MS001', 'Kalender'),
('MS002', 'Brosur'),
('MS003', 'Slip');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(11) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_user`, `email`, `no_telp`, `cabang`, `password`, `level`) VALUES
('ad01', 'joe', 'joe@gmail.com', '085667777', 'jember', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga`
--

CREATE TABLE `tb_harga` (
  `id_produk` varchar(5) NOT NULL,
  `id_harga` varchar(10) NOT NULL,
  `jenis_produk` varchar(30) NOT NULL,
  `id_kertas` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `finishing` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_harga`
--

INSERT INTO `tb_harga` (`id_produk`, `id_harga`, `jenis_produk`, `id_kertas`, `jumlah`, `finishing`, `harga`) VALUES
('PDK01', 'HK001', 'Digital Offset', 'kt004', 100, '', 67298),
('PDK01', 'HK002', 'Digital Offset', 'kt005', 100, '', 64358),
('PDK01', 'HK003', 'Digital Offset', 'kt004', 200, '', 39074),
('PDK01', 'HK004', 'Digital Offset', 'kt005', 200, '', 36554),
('PDK01', 'HK005', 'Digital Offset', 'kt004', 300, '', 29666),
('PDK01', 'HK006', 'Digital Offset', 'kt005', 300, '', 27286),
('PDK01', 'HK007', 'Digital Offset', 'kt004', 400, '', 24962),
('PDK01', 'HK008', 'Digital Offset', 'kt005', 400, '', 22652),
('PDK01', 'HK009', 'Digital Offset', 'kt004', 500, '', 22140),
('PDK01', 'HK010', 'Digital Offset', 'kt005', 500, '', 19872),
('PDK01', 'HK011', 'Offset', 'kt004', 600, '', 20433),
('PDK01', 'HK012', 'Offset', 'kt005', 600, '', 18158),
('PDK01', 'HK013', 'Offset', 'kt004', 700, '', 19064),
('PDK01', 'HK014', 'Offset', 'kt005', 700, '', 16814),
('PDK01', 'HK015', 'Offset', 'kt004', 800, '', 18037),
('PDK01', 'HK016', 'Offset', 'kt005', 800, '', 15806),
('PDK01', 'HK017', 'Offset', 'kt004', 900, '', 17355),
('PDK01', 'HK018', 'Offset', 'kt005', 900, '', 15115),
('PDK01', 'HK019', 'Offset', 'kt004', 1000, '', 16705),
('PDK01', 'HK020', 'Offset', 'kt005', 1000, '', 14479),
('PDK01', 'HK021', 'Offset', 'kt004', 1500, '', 15453),
('PDK01', 'HK022', 'Offset', 'kt005', 1500, '', 13241),
('PDK01', 'HK023', 'Offset', 'kt004', 2000, '', 14827),
('PDK01', 'HK024', 'Offset', 'kt005', 2000, '', 12622),
('PDK01', 'HK025', 'Offset', 'kt004', 2500, '', 14452),
('PDK01', 'HK026', 'Offset', 'kt005', 2500, '', 12251),
('PDK01', 'HK027', 'Offset', 'kt004', 3000, '', 14132),
('PDK01', 'HK028', 'Offset', 'kt005', 3000, '', 11948),
('PDK05', 'HK029', 'Digital Offset', 'kt004', 100, '', 33824),
('PDK05', 'HK030', 'Digital Offset', 'kt005', 100, '', 32354),
('PDK05', 'HK031', 'Digital Offset', 'kt004', 200, '', 19712),
('PDK05', 'HK032', 'Digital Offset', 'kt005', 200, '', 18452),
('PDK05', 'HK033', 'Digital Offset', 'kt004', 300, '', 15008),
('PDK05', 'HK034', 'Digital Offset', 'kt005', 300, '', 13818),
('PDK05', 'HK035', 'Digital Offset', 'kt004', 400, '', 12656),
('PDK05', 'HK036', 'Digital Offset', 'kt005', 400, '', 11501),
('PDK05', 'HK037', 'Digital Offset', 'kt004', 500, '', 11245),
('PDK05', 'HK038', 'Digital Offset', 'kt005', 500, '', 10111),
('PDK05', 'HK039', 'Offset', 'kt004', 600, '', 10392),
('PDK05', 'HK040', 'Offset', 'kt005', 600, '', 9254),
('PDK05', 'HK041', 'Offset', 'kt004', 700, '', 9707),
('PDK05', 'HK042', 'Offset', 'kt005', 700, '', 8582),
('PDK05', 'HK043', 'Offset', 'kt004', 800, '', 9194),
('PDK05', 'HK044', 'Offset', 'kt005', 800, '', 8078),
('PDK05', 'HK045', 'Offset', 'kt004', 900, '', 8853),
('PDK05', 'HK046', 'Offset', 'kt005', 900, '', 7733),
('PDK05', 'HK047', 'Offset', 'kt004', 1000, '', 8527),
('PDK05', 'HK048', 'Offset', 'kt005', 1000, '', 7414),
('PDK05', 'HK049', 'Offset', 'kt004', 1500, '', 7902),
('PDK05', 'HK050', 'Offset', 'kt005', 1500, '', 6796),
('PDK05', 'HK051', 'Offset', 'kt004', 2000, '', 7589),
('PDK05', 'HK052', 'Offset', 'kt005', 2000, '', 6486),
('PDK05', 'HK053', 'Offset', 'kt004', 2500, '', 7401),
('PDK05', 'HK054', 'Offset', 'kt005', 2500, '', 6301),
('PDK05', 'HK055', 'Offset', 'kt004', 3000, '', 7241),
('PDK05', 'HK056', 'Offset', 'kt005', 3000, '', 6149),
('PDK09', 'HK057', 'Digital Offset', 'kt004', 100, '', 22666),
('PDK09', 'HK058', 'Digital Offset', 'kt005', 100, '', 21686),
('PDK09', 'HK059', 'Digital Offset', 'kt004', 200, '', 13258),
('PDK09', 'HK060', 'Digital Offset', 'kt005', 200, '', 12418),
('PDK09', 'HK061', 'Digital Offset', 'kt004', 300, '', 10122),
('PDK09', 'HK062', 'Digital Offset', 'kt005', 300, '', 9329),
('PDK09', 'HK063', 'Digital Offset', 'kt004', 400, '', 8554),
('PDK09', 'HK064', 'Digital Offset', 'kt005', 400, '', 7784),
('PDK09', 'HK065', 'Digital Offset', 'kt004', 500, '', 7613),
('PDK09', 'HK066', 'Digital Offset', 'kt005', 500, '', 6857),
('PDK09', 'HK067', 'Offset', 'kt004', 600, '', 7044),
('PDK09', 'HK068', 'Offset', 'kt005', 600, '', 6286),
('PDK09', 'HK069', 'Offset', 'kt004', 700, '', 6588),
('PDK09', 'HK070', 'Offset', 'kt005', 700, '', 5838),
('PDK09', 'HK071', 'Offset', 'kt004', 800, '', 6246),
('PDK09', 'HK072', 'Offset', 'kt005', 800, '', 5502),
('PDK09', 'HK073', 'Offset', 'kt004', 900, '', 6018),
('PDK09', 'HK074', 'Offset', 'kt005', 900, '', 5272),
('PDK09', 'HK075', 'Offset', 'kt004', 1000, '', 5802),
('PDK09', 'HK076', 'Offset', 'kt005', 1000, '', 5060),
('PDK09', 'HK077', 'Offset', 'kt004', 1500, '', 5384),
('PDK09', 'HK078', 'Offset', 'kt005', 1500, '', 4647),
('PDK09', 'HK079', 'Offset', 'kt004', 2000, '', 5176),
('PDK09', 'HK080', 'Offset', 'kt005', 2000, '', 4441),
('PDK09', 'HK081', 'Offset', 'kt004', 2500, '', 5051),
('PDK09', 'HK082', 'Offset', 'kt005', 2500, '', 4317),
('PDK09', 'HK083', 'Offset', 'kt004', 3000, '', 4944),
('PDK09', 'HK084', 'Offset', 'kt005', 3000, '', 4216),
('PDK13', 'HK085', 'Digital Offset', 'kt004', 100, '', 17087),
('PDK13', 'HK086', 'Digital Offset', 'kt005', 100, '', 16352),
('PDK13', 'HK087', 'Digital Offset', 'kt004', 200, '', 10031),
('PDK13', 'HK088', 'Digital Offset', 'kt005', 200, '', 9401),
('PDK13', 'HK089', 'Digital Offset', 'kt004', 300, '', 7679),
('PDK13', 'HK090', 'Digital Offset', 'kt005', 300, '', 7084),
('PDK13', 'HK091', 'Digital Offset', 'kt004', 400, '', 6503),
('PDK13', 'HK092', 'Digital Offset', 'kt005', 400, '', 5926),
('PDK13', 'HK093', 'Digital Offset', 'kt004', 500, '', 5797),
('PDK13', 'HK094', 'Digital Offset', 'kt005', 500, '', 5230),
('PDK13', 'HK095', 'Offset', 'kt004', 600, '', 5371),
('PDK13', 'HK096', 'Offset', 'kt005', 600, '', 4802),
('PDK13', 'HK097', 'Offset', 'kt004', 700, '', 5029),
('PDK13', 'HK098', 'Offset', 'kt005', 700, '', 4466),
('PDK13', 'HK099', 'Offset', 'kt004', 800, '', 4772),
('PDK13', 'HK100', 'Offset', 'kt005', 800, '', 4214),
('PDK13', 'HK101', 'Offset', 'kt004', 900, '', 4601),
('PDK13', 'HK102', 'Offset', 'kt005', 900, '', 4041),
('PDK13', 'HK103', 'Offset', 'kt004', 1000, '', 4439),
('PDK13', 'HK104', 'Offset', 'kt005', 1000, '', 3882),
('PDK13', 'HK105', 'Offset', 'kt004', 1500, '', 4126),
('PDK13', 'HK106', 'Offset', 'kt005', 1500, '', 3573),
('PDK13', 'HK107', 'Offset', 'kt004', 2000, '', 3969),
('PDK13', 'HK108', 'Offset', 'kt005', 2000, '', 3418),
('PDK13', 'HK109', 'Offset', 'kt004', 2500, '', 3875),
('PDK13', 'HK110', 'Offset', 'kt005', 2500, '', 3325),
('PDK13', 'HK111', 'Offset', 'kt004', 3000, '', 3795),
('PDK13', 'HK112', 'Offset', 'kt005', 3000, '', 3249),
('PDK17', 'HK113', 'Digital Offset', 'kt004', 100, '', 11508),
('PDK17', 'HK114', 'Digital Offset', 'kt005', 100, '', 11018),
('PDK17', 'HK115', 'Digital Offset', 'kt004', 200, '', 6804),
('PDK17', 'HK116', 'Digital Offset', 'kt005', 200, '', 6384),
('PDK17', 'HK117', 'Digital Offset', 'kt004', 300, '', 5236),
('PDK17', 'HK118', 'Digital Offset', 'kt005', 300, '', 4839),
('PDK17', 'HK119', 'Digital Offset', 'kt004', 400, '', 4452),
('PDK17', 'HK120', 'Digital Offset', 'kt005', 400, '', 4067),
('PDK17', 'HK121', 'Digital Offset', 'kt004', 500, '', 3982),
('PDK17', 'HK122', 'Digital Offset', 'kt005', 500, '', 3604),
('PDK17', 'HK123', 'Offset', 'kt004', 600, '', 3697),
('PDK17', 'HK124', 'Offset', 'kt005', 600, '', 3318),
('PDK17', 'HK125', 'Offset', 'kt004', 700, '', 3469),
('PDK17', 'HK126', 'Offset', 'kt005', 700, '', 3094),
('PDK17', 'HK127', 'Offset', 'kt004', 800, '', 3298),
('PDK17', 'HK128', 'Offset', 'kt005', 800, '', 2926),
('PDK17', 'HK129', 'Offset', 'kt004', 900, '', 3184),
('PDK17', 'HK130', 'Offset', 'kt005', 900, '', 2811),
('PDK17', 'HK131', 'Offset', 'kt004', 1000, '', 3076),
('PDK17', 'HK132', 'Offset', 'kt005', 1000, '', 2705),
('PDK17', 'HK133', 'Offset', 'kt004', 1500, '', 2867),
('PDK17', 'HK134', 'Offset', 'kt005', 1500, '', 2499),
('PDK17', 'HK135', 'Offset', 'kt004', 2000, '', 2763),
('PDK17', 'HK136', 'Offset', 'kt005', 2000, '', 2395),
('PDK17', 'HK137', 'Offset', 'kt004', 2500, '', 2700),
('PDK17', 'HK138', 'Offset', 'kt005', 2500, '', 2334),
('PDK17', 'HK139', 'Offset', 'kt004', 3000, '', 2647),
('PDK17', 'HK140', 'Offset', 'kt005', 3000, '', 2283),
('PDK21', 'HK141', 'Digital Offset', 'kt010', 100, '', 6321),
('PDK21', 'HK142', 'Digital Offset', 'kt007', 100, '', 5978),
('PDK21', 'HK143', 'Digital Offset', 'kt010', 200, '', 3913),
('PDK21', 'HK144', 'Digital Offset', 'kt007', 200, '', 3619),
('PDK21', 'HK145', 'Digital Offset', 'kt010', 300, '', 3110),
('PDK21', 'HK146', 'Digital Offset', 'kt007', 300, '', 2833),
('PDK21', 'HK147', 'Digital Offset', 'kt010', 400, '', 2709),
('PDK21', 'HK148', 'Digital Offset', 'kt007', 400, '', 2440),
('PDK21', 'HK149', 'Digital Offset', 'kt010', 500, '', 2468),
('PDK21', 'HK150', 'Digital Offset', 'kt007', 500, '', 2204),
('PDK21', 'HK151', 'Offset', 'kt010', 600, '', 2327),
('PDK21', 'HK152', 'Offset', 'kt007', 600, '', 2062),
('PDK21', 'HK153', 'Offset', 'kt010', 700, '', 2210),
('PDK21', 'HK154', 'Offset', 'kt007', 700, '', 1947),
('PDK21', 'HK155', 'Offset', 'kt010', 800, '', 2121),
('PDK21', 'HK156', 'Offset', 'kt007', 800, '', 1861),
('PDK21', 'HK157', 'Offset', 'kt010', 900, '', 2066),
('PDK21', 'HK158', 'Offset', 'kt007', 900, '', 1804),
('PDK21', 'HK159', 'Offset', 'kt010', 1000, '', 2010),
('PDK21', 'HK160', 'Offset', 'kt007', 1000, '', 1750),
('PDK21', 'HK161', 'Offset', 'kt010', 1500, '', 1904),
('PDK21', 'HK162', 'Offset', 'kt007', 1500, '', 1645),
('PDK21', 'HK163', 'Offset', 'kt010', 2000, '', 1850),
('PDK21', 'HK164', 'Offset', 'kt007', 2000, '', 1593),
('PDK21', 'HK165', 'Offset', 'kt010', 2500, '', 1819),
('PDK21', 'HK166', 'Offset', 'kt007', 2500, '', 1562),
('PDK21', 'HK167', 'Offset', 'kt010', 3000, '', 1790),
('PDK21', 'HK168', 'Offset', 'kt007', 3000, '', 1535),
('PDK01', 'HK169', 'Digital Offset', 'kt002', 100, '', 86180),
('PDK01', 'HK170', 'Digital Offset', 'kt003', 100, '', 82652),
('PDK01', 'HK171', 'Digital Offset', 'kt002', 200, '', 51740),
('PDK01', 'HK172', 'Digital Offset', 'kt003', 200, '', 48716),
('PDK01', 'HK173', 'Digital Offset', 'kt002', 300, '', 40260),
('PDK01', 'HK174', 'Digital Offset', 'kt003', 300, '', 37404),
('PDK01', 'HK175', 'Digital Offset', 'kt002', 400, '', 34520),
('PDK01', 'HK176', 'Digital Offset', 'kt003', 400, '', 31748),
('PDK01', 'HK177', 'Digital Offset', 'kt002', 500, '', 31076),
('PDK01', 'HK178', 'Digital Offset', 'kt003', 500, '', 28354),
('PDK01', 'HK179', 'Offset', 'kt002', 600, '', 29480),
('PDK01', 'HK180', 'Offset', 'kt003', 600, '', 26750),
('PDK01', 'HK181', 'Offset', 'kt002', 700, '', 27740),
('PDK01', 'HK182', 'Offset', 'kt003', 700, '', 25040),
('PDK01', 'HK183', 'Offset', 'kt002', 800, '', 26435),
('PDK01', 'HK184', 'Offset', 'kt003', 800, '', 23758),
('PDK01', 'HK185', 'Offset', 'kt002', 900, '', 25793),
('PDK01', 'HK186', 'Offset', 'kt003', 900, '', 23105),
('PDK01', 'HK187', 'Offset', 'kt002', 1000, '', 24944),
('PDK01', 'HK188', 'Offset', 'kt003', 1000, '', 22273),
('PDK01', 'HK189', 'Offset', 'kt002', 1500, '', 23180),
('PDK01', 'HK190', 'Offset', 'kt003', 1500, '', 20526),
('PDK01', 'HK191', 'Offset', 'kt002', 2000, '', 22298),
('PDK01', 'HK192', 'Offset', 'kt003', 2000, '', 19652),
('PDK01', 'HK193', 'Offset', 'kt002', 2500, '', 21769),
('PDK01', 'HK194', 'Offset', 'kt003', 2500, '', 19128),
('PDK01', 'HK195', 'Offset', 'kt002', 3000, '', 21304),
('PDK01', 'HK196', 'Offset', 'kt003', 3000, '', 18683),
('PDK05', 'HK197', 'Digital Offset', 'kt002', 100, '', 43340),
('PDK05', 'HK198', 'Digital Offset', 'kt003', 100, '', 41576),
('PDK05', 'HK199', 'Digital Offset', 'kt002', 200, '', 26120),
('PDK05', 'HK200', 'Digital Offset', 'kt003', 200, '', 24608),
('PDK05', 'HK201', 'Digital Offset', 'kt002', 300, '', 20380),
('PDK05', 'HK202', 'Digital Offset', 'kt003', 300, '', 18952),
('PDK05', 'HK203', 'Digital Offset', 'kt002', 400, '', 17510),
('PDK05', 'HK204', 'Digital Offset', 'kt003', 400, '', 16124),
('PDK05', 'HK205', 'Digital Offset', 'kt002', 500, '', 15788),
('PDK05', 'HK206', 'Digital Offset', 'kt003', 500, '', 14427),
('PDK05', 'HK207', 'Offset', 'kt002', 600, '', 14990),
('PDK05', 'HK208', 'Offset', 'kt003', 600, '', 13625),
('PDK05', 'HK209', 'Offset', 'kt002', 700, '', 14120),
('PDK05', 'HK210', 'Offset', 'kt003', 700, '', 12770),
('PDK05', 'HK211', 'Offset', 'kt002', 800, '', 13468),
('PDK05', 'HK212', 'Offset', 'kt003', 800, '', 12129),
('PDK05', 'HK213', 'Offset', 'kt002', 900, '', 13147),
('PDK05', 'HK214', 'Offset', 'kt003', 900, '', 11803),
('PDK05', 'HK215', 'Offset', 'kt002', 1000, '', 12722),
('PDK05', 'HK216', 'Offset', 'kt003', 1000, '', 11386),
('PDK05', 'HK217', 'Offset', 'kt002', 1500, '', 11840),
('PDK05', 'HK218', 'Offset', 'kt003', 1500, '', 10513),
('PDK05', 'HK219', 'Offset', 'kt002', 2000, '', 11399),
('PDK05', 'HK220', 'Offset', 'kt003', 2000, '', 10076),
('PDK05', 'HK221', 'Offset', 'kt002', 2500, '', 11134),
('PDK05', 'HK222', 'Offset', 'kt003', 2500, '', 9814),
('PDK05', 'HK223', 'Offset', 'kt002', 3000, '', 10902),
('PDK05', 'HK224', 'Offset', 'kt003', 3000, '', 9592),
('PDK09', 'HK225', 'Digital Offset', 'kt002', 100, '', 29060),
('PDK09', 'HK226', 'Digital Offset', 'kt003', 100, '', 27884),
('PDK09', 'HK227', 'Digital Offset', 'kt002', 200, '', 17580),
('PDK09', 'HK228', 'Digital Offset', 'kt003', 200, '', 16572),
('PDK09', 'HK229', 'Digital Offset', 'kt002', 300, '', 13753),
('PDK09', 'HK230', 'Digital Offset', 'kt003', 300, '', 12801),
('PDK09', 'HK231', 'Digital Offset', 'kt002', 400, '', 11840),
('PDK09', 'HK232', 'Digital Offset', 'kt003', 400, '', 10916),
('PDK09', 'HK233', 'Digital Offset', 'kt002', 500, '', 10692),
('PDK09', 'HK234', 'Digital Offset', 'kt003', 500, '', 9785),
('PDK09', 'HK235', 'Offset', 'kt002', 600, '', 10160),
('PDK09', 'HK236', 'Offset', 'kt003', 600, '', 9250),
('PDK09', 'HK237', 'Offset', 'kt002', 700, '', 9580),
('PDK09', 'HK238', 'Offset', 'kt003', 700, '', 8680),
('PDK09', 'HK239', 'Offset', 'kt002', 800, '', 9145),
('PDK09', 'HK240', 'Offset', 'kt003', 800, '', 8253),
('PDK09', 'HK241', 'Offset', 'kt002', 900, '', 8931),
('PDK09', 'HK242', 'Offset', 'kt003', 900, '', 8035),
('PDK09', 'HK243', 'Offset', 'kt002', 1000, '', 8648),
('PDK09', 'HK244', 'Offset', 'kt003', 1000, '', 7758),
('PDK09', 'HK245', 'Offset', 'kt002', 1500, '', 8060),
('PDK09', 'HK246', 'Offset', 'kt003', 1500, '', 7175),
('PDK09', 'HK247', 'Offset', 'kt002', 2000, '', 7766),
('PDK09', 'HK248', 'Offset', 'kt003', 2000, '', 6884),
('PDK09', 'HK249', 'Offset', 'kt002', 2500, '', 7590),
('PDK09', 'HK250', 'Offset', 'kt003', 2500, '', 6709),
('PDK09', 'HK251', 'Offset', 'kt002', 3000, '', 7435),
('PDK09', 'HK252', 'Offset', 'kt003', 3000, '', 6561),
('PDK13', 'HK253', 'Digital Offset', 'kt002', 100, '', 21920),
('PDK13', 'HK254', 'Digital Offset', 'kt003', 100, '', 21038),
('PDK13', 'HK255', 'Digital Offset', 'kt002', 200, '', 13310),
('PDK13', 'HK256', 'Digital Offset', 'kt003', 200, '', 12554),
('PDK13', 'HK257', 'Digital Offset', 'kt002', 300, '', 10440),
('PDK13', 'HK258', 'Digital Offset', 'kt003', 300, '', 9726),
('PDK13', 'HK259', 'Digital Offset', 'kt002', 400, '', 9005),
('PDK13', 'HK260', 'Digital Offset', 'kt003', 400, '', 8312),
('PDK13', 'HK261', 'Digital Offset', 'kt002', 500, '', 8144),
('PDK13', 'HK262', 'Digital Offset', 'kt003', 500, '', 7464),
('PDK13', 'HK263', 'Offset', 'kt002', 600, '', 7745),
('PDK13', 'HK264', 'Offset', 'kt003', 600, '', 7063),
('PDK13', 'HK265', 'Offset', 'kt002', 700, '', 7310),
('PDK13', 'HK266', 'Offset', 'kt003', 700, '', 6635),
('PDK13', 'HK267', 'Offset', 'kt002', 800, '', 6984),
('PDK13', 'HK268', 'Offset', 'kt003', 800, '', 6314),
('PDK13', 'HK269', 'Offset', 'kt002', 900, '', 6823),
('PDK13', 'HK270', 'Offset', 'kt003', 900, '', 6151),
('PDK13', 'HK271', 'Offset', 'kt002', 1000, '', 6611),
('PDK13', 'HK272', 'Offset', 'kt003', 1000, '', 5943),
('PDK13', 'HK273', 'Offset', 'kt002', 1500, '', 6170),
('PDK13', 'HK274', 'Offset', 'kt003', 1500, '', 5506),
('PDK13', 'HK275', 'Offset', 'kt002', 2000, '', 5950),
('PDK13', 'HK276', 'Offset', 'kt003', 2000, '', 5288),
('PDK13', 'HK277', 'Offset', 'kt004', 2500, '', 5817),
('PDK13', 'HK278', 'Offset', 'kt003', 2500, '', 5157),
('PDK13', 'HK279', 'Offset', 'kt002', 3000, '', 5701),
('PDK13', 'HK280', 'Offset', 'kt003', 3000, '', 5046),
('PDK17', 'HK281', 'Digital Offset', 'kt002', 100, '', 14780),
('PDK17', 'HK282', 'Digital Offset', 'kt003', 100, '', 14192),
('PDK17', 'HK283', 'Digital Offset', 'kt002', 200, '', 9040),
('PDK17', 'HK284', 'Digital Offset', 'kt003', 200, '', 8536),
('PDK17', 'HK285', 'Digital Offset', 'kt002', 300, '', 7127),
('PDK17', 'HK286', 'Digital Offset', 'kt003', 300, '', 6651),
('PDK17', 'HK287', 'Digital Offset', 'kt002', 400, '', 6170),
('PDK17', 'HK288', 'Digital Offset', 'kt003', 400, '', 5708),
('PDK17', 'HK289', 'Digital Offset', 'kt002', 500, '', 5596),
('PDK17', 'HK290', 'Digital Offset', 'kt003', 500, '', 5142),
('PDK17', 'HK291', 'Offset', 'kt002', 600, '', 5330),
('PDK17', 'HK292', 'Offset', 'kt003', 600, '', 4875),
('PDK17', 'HK293', 'Offset', 'kt002', 700, '', 5040),
('PDK17', 'HK294', 'Offset', 'kt003', 700, '', 4590),
('PDK17', 'HK295', 'Offset', 'kt002', 800, '', 4823),
('PDK17', 'HK296', 'Offset', 'kt003', 800, '', 4376),
('PDK17', 'HK297', 'Offset', 'kt002', 900, '', 4716),
('PDK17', 'HK298', 'Offset', 'kt003', 900, '', 4268),
('PDK17', 'HK299', 'Offset', 'kt002', 1000, '', 4574),
('PDK17', 'HK300', 'Offset', 'kt003', 1000, '', 4129),
('PDK17', 'HK301', 'Offset', 'kt002', 1500, '', 4280),
('PDK17', 'HK302', 'Offset', 'kt003', 1500, '', 3838),
('PDK17', 'HK303', 'Offset', 'kt002', 2000, '', 4133),
('PDK17', 'HK304', 'Offset', 'kt003', 2000, '', 3692),
('PDK17', 'HK305', 'Offset', 'kt002', 2500, '', 4045),
('PDK17', 'HK306', 'Offset', 'kt003', 2500, '', 3605),
('PDK17', 'HK307', 'Offset', 'kt002', 3000, '', 3967),
('PDK17', 'HK308', 'Offset', 'kt003', 3000, '', 3531),
('PDK21', 'HK309', 'Digital Offset', 'kt009', 100, '', 8228),
('PDK21', 'HK310', 'Digital Offset', 'kt006', 100, '', 8728),
('PDK21', 'HK311', 'Digital Offset', 'kt009', 200, '', 5274),
('PDK21', 'HK312', 'Digital Offset', 'kt006', 200, '', 5774),
('PDK21', 'HK313', 'Digital Offset', 'kt009', 300, '', 4289),
('PDK21', 'HK314', 'Digital Offset', 'kt006', 300, '', 4789),
('PDK21', 'HK315', 'Digital Offset', 'kt009', 400, '', 3797),
('PDK21', 'HK316', 'Digital Offset', 'kt006', 400, '', 4297),
('PDK21', 'HK317', 'Digital Offset', 'kt009', 500, '', 3502),
('PDK21', 'HK318', 'Digital Offset', 'kt006', 500, '', 4002),
('PDK21', 'HK319', 'Offset', 'kt009', 600, '', 3370),
('PDK21', 'HK320', 'Offset', 'kt006', 600, '', 3870),
('PDK21', 'HK321', 'Offset', 'kt009', 700, '', 3220),
('PDK21', 'HK322', 'Offset', 'kt006', 700, '', 3720),
('PDK21', 'HK323', 'Offset', 'kt009', 800, '', 3108),
('PDK21', 'HK324', 'Offset', 'kt006', 800, '', 3608),
('PDK21', 'HK325', 'Offset', 'kt009', 900, '', 3056),
('PDK21', 'HK326', 'Offset', 'kt006', 900, '', 3556),
('PDK21', 'HK327', 'Offset', 'kt009', 1000, '', 2982),
('PDK21', 'HK328', 'Offset', 'kt006', 1000, '', 3482),
('PDK21', 'HK329', 'Offset', 'kt009', 1500, '', 2832),
('PDK21', 'HK330', 'Offset', 'kt006', 1500, '', 3332),
('PDK21', 'HK331', 'Offset', 'kt009', 2000, '', 2758),
('PDK21', 'HK332', 'Offset', 'kt006', 2000, '', 3258),
('PDK21', 'HK333', 'Offset', 'kt009', 2500, '', 2713),
('PDK21', 'HK334', 'Offset', 'kt006', 2500, '', 3213),
('PDK21', 'HK335', 'Offset', 'kt009', 3000, '', 2670),
('PDK21', 'HK336', 'Offset', 'kt006', 3000, '', 3170);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kertas`
--

CREATE TABLE `tb_kertas` (
  `id_kertas` varchar(10) NOT NULL,
  `kertas` varchar(20) NOT NULL,
  `ukuran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kertas`
--

INSERT INTO `tb_kertas` (`id_kertas`, `kertas`, `ukuran`) VALUES
('kt001', 'HVS 70', ''),
('kt002', 'AP150', '46X64'),
('kt003', 'AP120', '46X64'),
('kt004', 'AP150', '38X53'),
('kt005', 'AP120', '38X53'),
('kt006', 'D250', '46X64'),
('kt007', 'D250', '38X53'),
('kt008', 'NCR', ''),
('kt009', 'AP210', '46X64'),
('kt010', 'AP210', '38X53');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pesan` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `id_harga` varchar(10) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estimasi` varchar(20) NOT NULL,
  `jumlah_pesan` int(11) NOT NULL,
  `status_bayar` varchar(20) NOT NULL DEFAULT 'belum',
  `deskripsi` text NOT NULL,
  `desain_yang_diminta` text NOT NULL,
  `jasa_desain` varchar(5) NOT NULL,
  `link` text NOT NULL,
  `total_harga` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pesan`, `id_user`, `id_harga`, `tanggal`, `estimasi`, `jumlah_pesan`, `status_bayar`, `deskripsi`, `desain_yang_diminta`, `jasa_desain`, `link`, `total_harga`, `view`) VALUES
('PS0001', 'US0002', 'HK227', '2019-01-14 09:24:25', '7 hari', 200, 'belum', 'lala', '', 'TIDAK', 'qwqs', 3516000, 1),
('PS0002', 'US0002', 'HK036', '2019-01-14 10:01:21', '7 hari', 400, 'Selesai', 'lala', '', 'TIDAK', 'qweqw', 4600400, 1),
('PS0003', 'US0002', 'HK114', '2019-01-14 13:58:49', '7 hari', 100, 'Selesai', 'lala', '', 'TIDAK', 'adw', 1101800, 1),
('PS0004', 'US0002', 'HK030', '2019-01-15 12:16:46', '7 hari', 100, 'belum', 'hjfyf ', '', 'TIDAK', 'nnvhj', 3235400, 0),
('PS0005', 'US0002', 'HK030', '2019-01-15 12:42:01', '7 hari', 100, 'belum', ' ', '', 'TIDAK', 'qwew', 3235400, 0),
('PS0006', 'US0002', 'HK030', '2019-01-15 12:43:51', '7 hari', 100, 'belum', ' ', '', 'TIDAK', '', 3235400, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telpon` int(11) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `nama`, `telpon`, `kepada`, `isi`, `waktu`) VALUES
(1, 'Ahira Labata', 98990, 'admin', 'dadsdwa', '2018-12-02 23:04:02'),
(2, 'joe', 8213455, 'Ahira Labata', 'yuhuu', '2018-12-03 00:32:53'),
(3, 'joe', 8213455, 'joe', 'boooooo', '2018-12-03 18:40:24'),
(4, 'joe', 8213455, 'joe', 'boooooo', '2018-12-03 18:41:04'),
(5, 'joe', 8213455, 'Ahira Labata', 'boooooo', '2018-12-03 18:53:30'),
(6, 'joe', 8213455, 'Ahira Labata', 'weleh', '2018-12-03 19:42:17'),
(7, 'joe', 85667777, 'Ahira Labata', 'aw', '2018-12-03 22:06:25'),
(8, 'joe', 85667777, 'Ahira Labata', 'xdffhgj', '2018-12-05 11:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_master` varchar(5) NOT NULL,
  `id_produk` varchar(5) NOT NULL,
  `nama_produk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_master`, `id_produk`, `nama_produk`) VALUES
('MS002', 'PDB01', 'brosur'),
('MS001', 'PDK01', 'kalender 12 Lembar'),
('MS001', 'PDK05', 'kalender 6 Lembar'),
('MS001', 'PDK09', 'kalender 4 Lembar'),
('MS001', 'PDK13', 'kalender 3 Lembar'),
('MS001', 'PDK17', 'kalender 2 Lembar'),
('MS001', 'PDK21', 'kalender 1 Lembar'),
('MS003', 'PDS01', 'slip');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `no_telp` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `no_telp`, `alamat`, `password`) VALUES
('US0002', 'Ahira Labata', 'ahira', '098990', 'jember', '123'),
('US0003', 'yuhuu bin ahay', 'yuhuu', '1231331313', 'jember', '123'),
('US0004', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_master`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD PRIMARY KEY (`id_harga`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_kertas` (`id_kertas`);

--
-- Indexes for table `tb_kertas`
--
ALTER TABLE `tb_kertas`
  ADD PRIMARY KEY (`id_kertas`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_harga` (`id_harga`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_master` (`id_master`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD CONSTRAINT `tb_harga_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_harga_ibfk_2` FOREIGN KEY (`id_kertas`) REFERENCES `tb_kertas` (`id_kertas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pemesanan_ibfk_2` FOREIGN KEY (`id_harga`) REFERENCES `tb_harga` (`id_harga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_master`) REFERENCES `produk` (`id_master`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
