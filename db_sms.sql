-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_sms
CREATE DATABASE IF NOT EXISTS `db_sms` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_sms`;

-- Dumping structure for table db_sms.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sms.migrations: ~2 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table db_sms.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sms.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table db_sms.tb_transaksi
CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_resi` varchar(100) DEFAULT '0',
  `no_pesanan` varchar(100) DEFAULT '0',
  `waktu_pesan` varchar(100) DEFAULT '0',
  `status` enum('pending','dikirim','dicancel','sukses') DEFAULT 'pending',
  `username` varchar(100) DEFAULT '0',
  `penerima` varchar(100) DEFAULT '0',
  `waktu_harus_dikirim` varchar(100) DEFAULT '0',
  `produk` text,
  `nama_variasi` varchar(100) DEFAULT '0',
  `jumlah` varchar(50) DEFAULT '0',
  `harga` varchar(50) DEFAULT '0',
  `sku` varchar(50) DEFAULT '0',
  `sku_induk` varchar(50) DEFAULT '0',
  `jscan` int(11) NOT NULL DEFAULT '0',
  `tglscan` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sms.tb_transaksi: ~64 rows (approximately)
DELETE FROM `tb_transaksi`;
/*!40000 ALTER TABLE `tb_transaksi` DISABLE KEYS */;
INSERT INTO `tb_transaksi` (`id`, `no_resi`, `no_pesanan`, `waktu_pesan`, `status`, `username`, `penerima`, `waktu_harus_dikirim`, `produk`, `nama_variasi`, `jumlah`, `harga`, `sku`, `sku_induk`, `jscan`, `tglscan`) VALUES
	(1, 'K4Q81AV', '19062820177JEVA', '2019-06-28', 'dikirim', 'azizahocta23', '0', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Navy - Turkish M/L', ' 1', ' Rp 78,000', ' BBCE0208', ' BBCE', 0, '2019-07-19 09:55:03'),
	(2, 'JP2354965288', '19062912527D3DG', '2019-06-29', 'dikirim', 'yuli2397', '0', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Navy - Turkish M/L', ' 1', ' Rp 78,000', ' BBCE0208', ' BBCE', 0, '0'),
	(3, 'JP4728326861', '19062919047GSEF', '2019-06-29', 'dikirim', 'lenieka572', '0', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Navy - Turkish M/L', ' 1', ' Rp 78,000', ' BBCE0208', ' BBCE', 0, '0'),
	(4, 'JP8302226907', '19062919597MUVU', '2019-06-29', 'dikirim', 'liananingrat695', '0', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon -abu M/L', ' 1', ' Rp 78,000', ' BBCE0306', ' BBCE', 0, '0'),
	(5, 'JP9242555007', '19063006377N0NB', '2019-06-30', 'dikirim', 'vitriallshop', '0', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon -abu M/L', ' 1', ' Rp 78,000', ' BBCE0306', ' BBCE', 0, '0'),
	(6, 'JP3911184707', '190629233076Q00', '2019-06-29', 'dikirim', 'vitrandianinda', '0', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon -abu M/L', ' 1', ' Rp 78,000', ' BBCE0306', ' BBCE', 0, '0'),
	(7, 'JP8764832479', '19063015167WC3Q', '2019-06-30', 'dikirim', 'amalia03fahmi', '0', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon -abu M/L', ' 1', ' Rp 78,000', ' BBCE0306', ' BBCE', 0, '0'),
	(8, 'JP8326424371', '190630162575UFV', '2019-06-30', 'dikirim', 'bagusdisfantoro07', '0', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon -abu M/L', ' 1', ' Rp 78,000', ' BBCE0306', ' BBCE', 0, '0'),
	(9, 'JP8326424371', '190630162575UFV', '2019-06-30', 'dikirim', 'bagusdisfantoro07', '0', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Navy-Abu M/L', ' 1', ' Rp 78,000', ' BB0106', ' BBCE', 0, '0'),
	(10, 'JP9943065623', '19070100567PJAC', '2019-06-30', 'dikirim', 'tumirah1212', '0', '2019-07-02', 'Jaket Fleece Ninja  Jumbo Cotton Tebal  size L fit XL Premium Hitam Navy Maroon', 'Ijo Botol', ' 1', ' Rp 65,000', ' Fnin04XL versi tebal', ' FninXLTebal', 0, '0'),
	(11, 'JP9943065623', '19070100567PJAC', '2019-06-30', 'dikirim', 'tumirah1212', '0', '2019-07-02', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE', 0, '0'),
	(12, 'JP4285141954', '19070105487XB07', '2019-07-01', 'dikirim', 'fitrisyahril83', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE', 0, '0'),
	(13, 'JP4285141954', '19070105487XB07', '2019-07-01', 'dikirim', 'fitrisyahril83', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size XL', ' 1', ' Rp 98,000', ' PRKCE03XL', ' PRKCE', 0, '0'),
	(14, 'JP5800298666', '19070110087CUPM', '2019-07-01', 'dikirim', 'umielatifa', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size M', ' 1', ' Rp 98,000', ' PRKCE02M', ' PRKCE', 0, '0'),
	(15, 'JP5800298666', '19070110087CUPM', '2019-07-01', 'dikirim', 'umielatifa', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE', 0, '0'),
	(16, 'JP8307480908', '19070110197DT4D', '2019-07-01', 'dikirim', 'andikasepnadi', '0', '2019-07-03', 'Jaket Fleece Ninja  Jumbo Cotton Tebal  size L fit XL Premium Hitam Navy Maroon', 'Navy', ' 1', ' Rp 65,000', ' Fnin02XL versi tebal', ' FninXLTebal', 0, '0'),
	(17, 'JP8307480908', '19070110197DT4D', '2019-07-01', 'dikirim', 'andikasepnadi', '0', '2019-07-03', ' Jaket Hijaber Hijacket Beautix All Series Bahan Premium Fleece Original Brand ', 'Navy,XL', ' 1', ' Rp 98,000', ' Jaket Hijab Navy XL', ' Jaket Hijab', 0, '0'),
	(18, 'JP7543042292', '190701132172KSS', '2019-07-01', 'dikirim', 'azriel_zhafran', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size XL', ' 1', ' Rp 98,000', ' PRKCE05AXL', ' PRKCE', 0, '0'),
	(19, 'JP8795020128', '190701134775YHY', '2019-07-01', 'dikirim', 'leyn_2111', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size L', ' 2', ' Rp 98,000', ' PRKCE02L', ' PRKCE', 0, '0'),
	(20, 'JP7701937067', '190701135777A3M', '2019-07-01', 'dikirim', 'kherul1788', '0', '2019-07-03', 'Jaket Emporer Hijau Army Polos. Lengan Nya Bisa Le JAKET PR JM162 Fashion Pria Jaket Bomber Rider XL', 'Maroon,M', ' 1', ' Rp 90,000', ' BGSRM03', ' BMBGSR', 0, '0'),
	(21, 'JP7040693279', '190701070171KCB', '2019-07-01', 'dikirim', 'deviansi', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE', 0, '0'),
	(22, 'JP7040693279', '190701070171KCB', '2019-07-01', 'dikirim', 'deviansi', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size XL', ' 1', ' Rp 98,000', ' PRKCE03XL', ' PRKCE', 0, '0'),
	(23, 'JP3905939581', '19070110387FQ4M', '2019-07-01', 'dikirim', 'marwati75', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size XL', ' 1', ' Rp 98,000', ' PRKCE03XL', ' PRKCE', 0, '0'),
	(24, 'JP9201242468', '1907011403785UN', '2019-07-01', 'dikirim', 'resamila', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size XL', ' 1', ' Rp 98,000', ' PRKCE03XL', ' PRKCE', 0, '0'),
	(25, 'JP5862870665', '190701141279MWE', '2019-07-01', 'pending', 'erfina123456', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Mocca,Size M', ' 1', ' Rp 98,000', ' PRKCE10M', ' PRKCE', 0, '0'),
	(26, 'JP7537774172', '19070110527H5WM', '2019-07-01', 'pending', 'princess_linda060795', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size L', ' 1', ' Rp 98,000', ' PRKCE02L', ' PRKCE', 0, '0'),
	(27, 'JP7537774172', '19070110527H5WM', '2019-07-01', 'pending', 'princess_linda060795', '0', '2019-07-03', 'Jaket Hoodie Jumper Polos Pria Wanita  Tebal Size L XL Unisex Warna Hitam Navy Maroon Pink Mocca', 'Hitam,XL', ' 1', ' Rp 75,000', ' Hoodie Polos 01 Xl', ' Hoodie Polos', 0, '0'),
	(28, 'JP1291194411', '19070112237TGP0', '2019-07-01', 'pending', 'rossaolshopenymart', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Warna Acak,Size L', ' 2', ' Rp 83,000', ' PRKCERandom', ' PRKCE', 0, '0'),
	(29, 'JP2223041327', '19070114207AUVG', '2019-07-01', 'pending', 'dewiindriyaniiiiii', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size XL', ' 1', ' Rp 98,000', ' PRKCE03XL', ' PRKCE', 0, '0'),
	(30, 'JP6857069708', '19070110467GJJ4', '2019-07-01', 'pending', 'irawidiawati24', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size XL', ' 1', ' Rp 98,000', ' PRKCE02XL', ' PRKCE', 0, '0'),
	(31, 'JP9710936452', '19070110287ENX4', '2019-07-01', 'pending', 'aba.dedi', '0', '2019-07-03', 'Jaket Emporer Hijau Army Polos. Lengan Nya Bisa Le JAKET PR JM162 Fashion Pria Jaket Bomber Rider XL', 'Hitam,XL', ' 1', ' Rp 90,000', ' BGSRXL01', ' BMBGSR', 0, '0'),
	(32, 'JP8291184491', '19070111447PF8K', '2019-07-01', 'pending', 'haydarcolection', '0', '2019-07-03', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon - Hitam M/L', ' 1', ' Rp 78,000', ' BBCE0301', ' BBCE', 0, '0'),
	(33, 'JP8291184491', '19070111447PF8K', '2019-07-01', 'pending', 'haydarcolection', '0', '2019-07-03', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Navy-Abu M/L', ' 1', ' Rp 78,000', ' BB0106', ' BBCE', 0, '0'),
	(34, 'JP1916818927', '19070114417DKUE', '2019-07-01', 'pending', 'dinbell', '0', '2019-07-03', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon - Hitam M/L', ' 1', ' Rp 78,000', ' BBCE0301', ' BBCE', 0, '0'),
	(35, 'JP5555995149', '19070114427DT21', '2019-07-01', 'pending', 'tabitab_clo', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size XXL', ' 1', ' Rp 98,000', ' PRKCE05AXXL', ' PRKCE', 0, '0'),
	(36, 'JP3143947228', '19070114537F6SX', '2019-07-01', 'pending', 'rabbanipasuruan', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE', 0, '0'),
	(37, 'JP3031897399', '19070113577787P', '2019-07-01', 'pending', 'mariso.123', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Hitam,Size M', ' 1', ' Rp 98,000', ' PRKCE01M', ' PRKCE', 0, '0'),
	(38, 'JP3031897399', '19070113577787P', '2019-07-01', 'pending', 'mariso.123', '0', '2019-07-03', 'Jaket parka / parka cowo / jaket parka cowo / parka pria / parka murah / jaket parka murah / parka 3', 'Hitam', ' 1', ' Rp 98,000', ' PRKCO01', ' PRKCO', 0, '0'),
	(39, 'JP5430321855', '19070110127D598', '2019-07-01', 'pending', 'sarasd801', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size M', ' 1', ' Rp 98,000', ' PRKCE03M', ' PRKCE', 0, '0'),
	(40, 'JP0069595208', '19070115137HNBV', '2019-07-01', 'pending', 'hidayahjunaidi90', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Mocca,Size L', ' 1', ' Rp 98,000', ' PRKCE10L', ' PRKCE', 0, '0'),
	(41, 'JP0855083328', '190701130670Q1A', '2019-07-01', 'pending', 'elys_lidiawati', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size M', ' 1', ' Rp 98,000', ' PRKCE02M', ' PRKCE', 0, '0'),
	(42, 'JP5023808329', '19070115437NA83', '2019-07-01', 'pending', 'jerseysae', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE', 0, '0'),
	(43, 'JP3191517554', '19070115427N6PM', '2019-07-01', 'pending', 'ninikherlina', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size XL', ' 1', ' Rp 98,000', ' PRKCE03XL', ' PRKCE', 0, '0'),
	(44, 'JP2936997581', '19063023257EGXS', '2019-06-30', 'pending', 'dorisa_os2', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size L', ' 1', ' Rp 98,000', ' PRKCE02L', ' PRKCE', 0, '0'),
	(45, 'JP5908758441', '19070115507P4F0', '2019-07-01', 'pending', 'mayaa85', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'hijau army,Size M', ' 1', ' Rp 98,000', ' PRKCE04 M', ' PRKCE', 0, '0'),
	(46, 'JP6490040609', '19070116027QKMX', '2019-07-01', 'pending', 'aliefashakeel', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size XL', ' 1', ' Rp 98,000', ' PRKCE05AXL', ' PRKCE', 0, '0'),
	(47, 'JP6490040609', '19070116027QKMX', '2019-07-01', 'pending', 'aliefashakeel', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size XXL', ' 1', ' Rp 98,000', ' PRKCE05AXXL', ' PRKCE', 0, '0'),
	(48, 'JP1195796926', '19070115317KTHT', '2019-07-01', 'pending', 'yattisakuraa', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Mustard,Size M', ' 1', ' Rp 98,000', ' PRKCE11M', ' PRKCE', 0, '0'),
	(49, 'JP1195796926', '19070115317KTHT', '2019-07-01', 'pending', 'yattisakuraa', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size L', ' 1', ' Rp 98,000', ' PRKCE02L', ' PRKCE', 0, '0'),
	(50, 'JP1628496598', '190701140678PTB', '2019-07-01', 'pending', 'worldholic.id', '0', '2019-07-03', 'Jaket Hoodie Jumper Polos Pria Wanita  Tebal Size L XL Unisex Warna Hitam Navy Maroon Pink Mocca', 'Warna Acak,XL', ' 3', ' Rp 63,000', ' Hoodie Polos ACAK', ' Hoodie Polos', 0, '0'),
	(51, 'JP9169096124', '19070114147A11P', '2019-07-01', 'pending', 'rafifa01', '0', '2019-07-03', 'Jaket Hoodie Jumper Polos Pria Wanita  Tebal Size L XL Unisex Warna Hitam Navy Maroon Pink Mocca', 'Warna Acak,XL', ' 3', ' Rp 63,000', ' Hoodie Polos ACAK', ' Hoodie Polos', 0, '0'),
	(52, 'JP9119666464', '19070114347CQBV', '2019-07-01', 'pending', 'jakolbiz', '0', '2019-07-03', 'Jaket Hoodie Jumper Polos Pria Wanita  Tebal Size L XL Unisex Warna Hitam Navy Maroon Pink Mocca', 'Warna Acak,XL', ' 3', ' Rp 63,000', ' Hoodie Polos ACAK', ' Hoodie Polos', 0, '0'),
	(53, 'JP5651725748', '19070114557FDAF', '2019-07-01', 'pending', 'njajan.terus', '0', '2019-07-03', 'Jaket Hoodie Jumper Polos Pria Wanita  Tebal Size L XL Unisex Warna Hitam Navy Maroon Pink Mocca', 'Warna Acak,XL', ' 3', ' Rp 63,000', ' Hoodie Polos ACAK', ' Hoodie Polos', 0, '0'),
	(54, 'JP3635159687', '19070116337UFG0', '2019-07-01', 'pending', 'shinta120509', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size XXL', ' 1', ' Rp 98,000', ' PRKCE05AXXL', ' PRKCE', 0, '0'),
	(55, 'JP2319040386', '19070116497WDDA', '2019-07-01', 'pending', 'wikesyarifah', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE', 0, '0'),
	(56, 'JP3115037349', '19070111297N08K', '2019-07-01', 'pending', 'wikiyatulhasanah', '0', '2019-07-03', 'Jaket parka / parka cowo / jaket parka cowo / parka pria / parka murah / jaket parka murah / parka 3', 'Hitam', ' 1', ' Rp 98,000', ' PRKCO01', ' PRKCO', 0, '0'),
	(57, 'JP3115037349', '19070111297N08K', '2019-07-01', 'pending', 'wikiyatulhasanah', '0', '2019-07-03', 'YANG LAGI HITS Kemeja Flanel Distro Cowok Lengan Panjang Warna Biru Dongker Garis Merah Seri', 'M', ' 1', ' Rp 65,000', ' Kemeja Flannel M', ' KEMEJA FLANEL', 0, '0'),
	(58, 'JP6700786905', '190701170470R7A', '2019-07-01', 'pending', 'mamanaffa', '0', '2019-07-03', 'Jaket Emporer Hijau Army Polos. Lengan Nya Bisa Le JAKET PR JM162 Fashion Pria Jaket Bomber Rider XL', 'Maroon,XL', ' 1', ' Rp 90,000', ' BGSRXL03', ' BMBGSR', 0, '0'),
	(59, 'JP5181431959', '1907010818752SB', '2019-07-01', 'pending', 'rudicahyono15', '0', '2019-07-03', 'Jaket Emporer Hijau Army Polos. Lengan Nya Bisa Le JAKET PR JM162 Fashion Pria Jaket Bomber Rider XL', 'Hitam,L', ' 1', ' Rp 90,000', ' BGSRL01', ' BMBGSR', 0, '0'),
	(60, 'JP5181431959', '1907010818752SB', '2019-07-01', 'pending', 'rudicahyono15', '0', '2019-07-03', 'Jaket Emporer Hijau Army Polos. Lengan Nya Bisa Le JAKET PR JM162 Fashion Pria Jaket Bomber Rider XL', 'Maroon,L', ' 1', ' Rp 90,000', ' BGSRL03', ' BMBGSR', 0, '0'),
	(61, 'JP0645809648', '1907011659706A4', '2019-07-01', 'pending', 'nila_bundarafa', '0', '2019-07-03', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Navy-Merah M/L', ' 1', ' Rp 78,000', ' BBCE0203', ' BBCE', 0, '0'),
	(62, 'JP9852620486', '19070110467GJJ9', '2019-07-01', 'pending', 'achamdimamrifai', '0', '2019-07-03', 'Fashion Jaman Now Armed Bomber Army Despo Tebal Jaket Bomber Army Jake Mo Terkeren Mu Terbaru ATR', 'Maroon,XL', ' 1', ' Rp 95,000', ' Bomber After Racer 03 XL', ' Bomber After', 0, '0'),
	(63, 'JP1875017180', '1907011734743A8', '2019-07-01', 'pending', 'pudingjagung', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size L', ' 1', ' Rp 98,000', ' PRKCE02L', ' PRKCE', 0, '0'),
	(64, 'JP1875017180', '1907011734743A8', '2019-07-01', 'pending', 'pudingjagung', '0', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Mocca,Size L', ' 1', ' Rp 98,000', ' PRKCE10L', ' PRKCE', 0, '0');
/*!40000 ALTER TABLE `tb_transaksi` ENABLE KEYS */;

-- Dumping structure for table db_sms.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('admin','superadmin','programmer') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sms.users: ~3 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `level`, `email`, `password`) VALUES
	(1, 'deva', 'admin', 'programmer', 'satriosuklun@gmail.com', '$2y$10$d.WOhENt.9JmrlDe.SNIw.kz6lb0gi2iwjduLAEoWvF9WpJAZ2j0O'),
	(2, 'jian', 'jianfitri', 'admin', 'jian@gmail.com', '$2y$10$I4w3oJsxJ.TS4LGZ/ZoLw.FsiqaW1E.gOW3lVjpKrJ5/R1OsGirJG'),
	(3, 'dian ade setia', 'dianadesetia', 'superadmin', 'dianade@gmail.com', '$2y$10$6FXawsWxeFksBZsHE8bLuObkM785yZk5356X7JxuAYm2YJ9u4qqhi');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
