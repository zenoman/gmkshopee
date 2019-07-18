-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5174
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;




-- Dumping structure for table db_sms.migrations
DROP TABLE IF EXISTS `migrations`;
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
DROP TABLE IF EXISTS `password_resets`;
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
DROP TABLE IF EXISTS `tb_transaksi`;
CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_resi` varchar(100) DEFAULT '0',
  `no_pesanan` varchar(100) DEFAULT '0',
  `waktu_pesan` varchar(100) DEFAULT '0',
  `status` enum('pending','dikirim','dicancel','sukses') DEFAULT 'pending',
  `username` varchar(100) DEFAULT '0',
  `waktu_harus_dikirim` varchar(100) DEFAULT '0',
  `produk` text,
  `nama_variasi` varchar(100) DEFAULT '0',
  `jumlah` varchar(50) DEFAULT '0',
  `harga` varchar(50) DEFAULT '0',
  `sku` varchar(50) DEFAULT '0',
  `sku_induk` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sms.tb_transaksi: ~64 rows (approximately)
DELETE FROM `tb_transaksi`;
/*!40000 ALTER TABLE `tb_transaksi` DISABLE KEYS */;
INSERT INTO `tb_transaksi` (`id`, `no_resi`, `no_pesanan`, `waktu_pesan`, `status`, `username`, `waktu_harus_dikirim`, `produk`, `nama_variasi`, `jumlah`, `harga`, `sku`, `sku_induk`) VALUES
	(1, 'JP4359523562', '19062820177JEVA', '2019-06-28', 'pending', 'azizahocta23', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Navy - Turkish M/L', ' 1', ' Rp 78,000', ' BBCE0208', ' BBCE'),
	(2, 'JP2354965288', '19062912527D3DG', '2019-06-29', 'pending', 'yuli2397', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Navy - Turkish M/L', ' 1', ' Rp 78,000', ' BBCE0208', ' BBCE'),
	(3, 'JP4728326861', '19062919047GSEF', '2019-06-29', 'pending', 'lenieka572', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Navy - Turkish M/L', ' 1', ' Rp 78,000', ' BBCE0208', ' BBCE'),
	(4, 'JP8302226907', '19062919597MUVU', '2019-06-29', 'pending', 'liananingrat695', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon -abu M/L', ' 1', ' Rp 78,000', ' BBCE0306', ' BBCE'),
	(5, 'JP9242555007', '19063006377N0NB', '2019-06-30', 'pending', 'vitriallshop', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon -abu M/L', ' 1', ' Rp 78,000', ' BBCE0306', ' BBCE'),
	(6, 'JP3911184707', '190629233076Q00', '2019-06-29', 'pending', 'vitrandianinda', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon -abu M/L', ' 1', ' Rp 78,000', ' BBCE0306', ' BBCE'),
	(7, 'JP8764832479', '19063015167WC3Q', '2019-06-30', 'pending', 'amalia03fahmi', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon -abu M/L', ' 1', ' Rp 78,000', ' BBCE0306', ' BBCE'),
	(8, 'JP8326424371', '190630162575UFV', '2019-06-30', 'pending', 'bagusdisfantoro07', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon -abu M/L', ' 1', ' Rp 78,000', ' BBCE0306', ' BBCE'),
	(9, 'JP8326424371', '190630162575UFV', '2019-06-30', 'pending', 'bagusdisfantoro07', '2019-07-02', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Navy-Abu M/L', ' 1', ' Rp 78,000', ' BB0106', ' BBCE'),
	(10, 'JP9943065623', '19070100567PJAC', '2019-06-30', 'pending', 'tumirah1212', '2019-07-02', 'Jaket Fleece Ninja  Jumbo Cotton Tebal  size L fit XL Premium Hitam Navy Maroon', 'Ijo Botol', ' 1', ' Rp 65,000', ' Fnin04XL versi tebal', ' FninXLTebal'),
	(11, 'JP9943065623', '19070100567PJAC', '2019-06-30', 'pending', 'tumirah1212', '2019-07-02', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE'),
	(12, 'JP4285141954', '19070105487XB07', '2019-07-01', 'pending', 'fitrisyahril83', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE'),
	(13, 'JP4285141954', '19070105487XB07', '2019-07-01', 'pending', 'fitrisyahril83', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size XL', ' 1', ' Rp 98,000', ' PRKCE03XL', ' PRKCE'),
	(14, 'JP5800298666', '19070110087CUPM', '2019-07-01', 'pending', 'umielatifa', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size M', ' 1', ' Rp 98,000', ' PRKCE02M', ' PRKCE'),
	(15, 'JP5800298666', '19070110087CUPM', '2019-07-01', 'pending', 'umielatifa', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE'),
	(16, 'JP8307480908', '19070110197DT4D', '2019-07-01', 'pending', 'andikasepnadi', '2019-07-03', 'Jaket Fleece Ninja  Jumbo Cotton Tebal  size L fit XL Premium Hitam Navy Maroon', 'Navy', ' 1', ' Rp 65,000', ' Fnin02XL versi tebal', ' FninXLTebal'),
	(17, 'JP8307480908', '19070110197DT4D', '2019-07-01', 'pending', 'andikasepnadi', '2019-07-03', ' Jaket Hijaber Hijacket Beautix All Series Bahan Premium Fleece Original Brand ', 'Navy,XL', ' 1', ' Rp 98,000', ' Jaket Hijab Navy XL', ' Jaket Hijab'),
	(18, 'JP7543042292', '190701132172KSS', '2019-07-01', 'pending', 'azriel_zhafran', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size XL', ' 1', ' Rp 98,000', ' PRKCE05AXL', ' PRKCE'),
	(19, 'JP8795020128', '190701134775YHY', '2019-07-01', 'pending', 'leyn_2111', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size L', ' 2', ' Rp 98,000', ' PRKCE02L', ' PRKCE'),
	(20, 'JP7701937067', '190701135777A3M', '2019-07-01', 'pending', 'kherul1788', '2019-07-03', 'Jaket Emporer Hijau Army Polos. Lengan Nya Bisa Le JAKET PR JM162 Fashion Pria Jaket Bomber Rider XL', 'Maroon,M', ' 1', ' Rp 90,000', ' BGSRM03', ' BMBGSR'),
	(21, 'JP7040693279', '190701070171KCB', '2019-07-01', 'pending', 'deviansi', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE'),
	(22, 'JP7040693279', '190701070171KCB', '2019-07-01', 'pending', 'deviansi', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size XL', ' 1', ' Rp 98,000', ' PRKCE03XL', ' PRKCE'),
	(23, 'JP3905939581', '19070110387FQ4M', '2019-07-01', 'pending', 'marwati75', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size XL', ' 1', ' Rp 98,000', ' PRKCE03XL', ' PRKCE'),
	(24, 'JP9201242468', '1907011403785UN', '2019-07-01', 'pending', 'resamila', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size XL', ' 1', ' Rp 98,000', ' PRKCE03XL', ' PRKCE'),
	(25, 'JP5862870665', '190701141279MWE', '2019-07-01', 'pending', 'erfina123456', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Mocca,Size M', ' 1', ' Rp 98,000', ' PRKCE10M', ' PRKCE'),
	(26, 'JP7537774172', '19070110527H5WM', '2019-07-01', 'pending', 'princess_linda060795', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size L', ' 1', ' Rp 98,000', ' PRKCE02L', ' PRKCE'),
	(27, 'JP7537774172', '19070110527H5WM', '2019-07-01', 'pending', 'princess_linda060795', '2019-07-03', 'Jaket Hoodie Jumper Polos Pria Wanita  Tebal Size L XL Unisex Warna Hitam Navy Maroon Pink Mocca', 'Hitam,XL', ' 1', ' Rp 75,000', ' Hoodie Polos 01 Xl', ' Hoodie Polos'),
	(28, 'JP1291194411', '19070112237TGP0', '2019-07-01', 'pending', 'rossaolshopenymart', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Warna Acak,Size L', ' 2', ' Rp 83,000', ' PRKCERandom', ' PRKCE'),
	(29, 'JP2223041327', '19070114207AUVG', '2019-07-01', 'pending', 'dewiindriyaniiiiii', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size XL', ' 1', ' Rp 98,000', ' PRKCE03XL', ' PRKCE'),
	(30, 'JP6857069708', '19070110467GJJ4', '2019-07-01', 'pending', 'irawidiawati24', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size XL', ' 1', ' Rp 98,000', ' PRKCE02XL', ' PRKCE'),
	(31, 'JP9710936452', '19070110287ENX4', '2019-07-01', 'pending', 'aba.dedi', '2019-07-03', 'Jaket Emporer Hijau Army Polos. Lengan Nya Bisa Le JAKET PR JM162 Fashion Pria Jaket Bomber Rider XL', 'Hitam,XL', ' 1', ' Rp 90,000', ' BGSRXL01', ' BMBGSR'),
	(32, 'JP8291184491', '19070111447PF8K', '2019-07-01', 'pending', 'haydarcolection', '2019-07-03', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon - Hitam M/L', ' 1', ' Rp 78,000', ' BBCE0301', ' BBCE'),
	(33, 'JP8291184491', '19070111447PF8K', '2019-07-01', 'pending', 'haydarcolection', '2019-07-03', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Navy-Abu M/L', ' 1', ' Rp 78,000', ' BB0106', ' BBCE'),
	(34, 'JP1916818927', '19070114417DKUE', '2019-07-01', 'pending', 'dinbell', '2019-07-03', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Maroon - Hitam M/L', ' 1', ' Rp 78,000', ' BBCE0301', ' BBCE'),
	(35, 'JP5555995149', '19070114427DT21', '2019-07-01', 'pending', 'tabitab_clo', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size XXL', ' 1', ' Rp 98,000', ' PRKCE05AXXL', ' PRKCE'),
	(36, 'JP3143947228', '19070114537F6SX', '2019-07-01', 'pending', 'rabbanipasuruan', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE'),
	(37, 'JP3031897399', '19070113577787P', '2019-07-01', 'pending', 'mariso.123', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Hitam,Size M', ' 1', ' Rp 98,000', ' PRKCE01M', ' PRKCE'),
	(38, 'JP3031897399', '19070113577787P', '2019-07-01', 'pending', 'mariso.123', '2019-07-03', 'Jaket parka / parka cowo / jaket parka cowo / parka pria / parka murah / jaket parka murah / parka 3', 'Hitam', ' 1', ' Rp 98,000', ' PRKCO01', ' PRKCO'),
	(39, 'JP5430321855', '19070110127D598', '2019-07-01', 'pending', 'sarasd801', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size M', ' 1', ' Rp 98,000', ' PRKCE03M', ' PRKCE'),
	(40, 'JP0069595208', '19070115137HNBV', '2019-07-01', 'pending', 'hidayahjunaidi90', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Mocca,Size L', ' 1', ' Rp 98,000', ' PRKCE10L', ' PRKCE'),
	(41, 'JP0855083328', '190701130670Q1A', '2019-07-01', 'pending', 'elys_lidiawati', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size M', ' 1', ' Rp 98,000', ' PRKCE02M', ' PRKCE'),
	(42, 'JP5023808329', '19070115437NA83', '2019-07-01', 'pending', 'jerseysae', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE'),
	(43, 'JP3191517554', '19070115427N6PM', '2019-07-01', 'pending', 'ninikherlina', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Maroon,Size XL', ' 1', ' Rp 98,000', ' PRKCE03XL', ' PRKCE'),
	(44, 'JP2936997581', '19063023257EGXS', '2019-06-30', 'pending', 'dorisa_os2', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size L', ' 1', ' Rp 98,000', ' PRKCE02L', ' PRKCE'),
	(45, 'JP5908758441', '19070115507P4F0', '2019-07-01', 'pending', 'mayaa85', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'hijau army,Size M', ' 1', ' Rp 98,000', ' PRKCE04 M', ' PRKCE'),
	(46, 'JP6490040609', '19070116027QKMX', '2019-07-01', 'pending', 'aliefashakeel', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size XL', ' 1', ' Rp 98,000', ' PRKCE05AXL', ' PRKCE'),
	(47, 'JP6490040609', '19070116027QKMX', '2019-07-01', 'pending', 'aliefashakeel', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size XXL', ' 1', ' Rp 98,000', ' PRKCE05AXXL', ' PRKCE'),
	(48, 'JP1195796926', '19070115317KTHT', '2019-07-01', 'pending', 'yattisakuraa', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Mustard,Size M', ' 1', ' Rp 98,000', ' PRKCE11M', ' PRKCE'),
	(49, 'JP1195796926', '19070115317KTHT', '2019-07-01', 'pending', 'yattisakuraa', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size L', ' 1', ' Rp 98,000', ' PRKCE02L', ' PRKCE'),
	(50, 'JP1628496598', '190701140678PTB', '2019-07-01', 'pending', 'worldholic.id', '2019-07-03', 'Jaket Hoodie Jumper Polos Pria Wanita  Tebal Size L XL Unisex Warna Hitam Navy Maroon Pink Mocca', 'Warna Acak,XL', ' 3', ' Rp 63,000', ' Hoodie Polos ACAK', ' Hoodie Polos'),
	(51, 'JP9169096124', '19070114147A11P', '2019-07-01', 'pending', 'rafifa01', '2019-07-03', 'Jaket Hoodie Jumper Polos Pria Wanita  Tebal Size L XL Unisex Warna Hitam Navy Maroon Pink Mocca', 'Warna Acak,XL', ' 3', ' Rp 63,000', ' Hoodie Polos ACAK', ' Hoodie Polos'),
	(52, 'JP9119666464', '19070114347CQBV', '2019-07-01', 'pending', 'jakolbiz', '2019-07-03', 'Jaket Hoodie Jumper Polos Pria Wanita  Tebal Size L XL Unisex Warna Hitam Navy Maroon Pink Mocca', 'Warna Acak,XL', ' 3', ' Rp 63,000', ' Hoodie Polos ACAK', ' Hoodie Polos'),
	(53, 'JP5651725748', '19070114557FDAF', '2019-07-01', 'pending', 'njajan.terus', '2019-07-03', 'Jaket Hoodie Jumper Polos Pria Wanita  Tebal Size L XL Unisex Warna Hitam Navy Maroon Pink Mocca', 'Warna Acak,XL', ' 3', ' Rp 63,000', ' Hoodie Polos ACAK', ' Hoodie Polos'),
	(54, 'JP3635159687', '19070116337UFG0', '2019-07-01', 'pending', 'shinta120509', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size XXL', ' 1', ' Rp 98,000', ' PRKCE05AXXL', ' PRKCE'),
	(55, 'JP2319040386', '19070116497WDDA', '2019-07-01', 'pending', 'wikesyarifah', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Dusty Pink,Size L', ' 1', ' Rp 98,000', ' PRKCE05AL', ' PRKCE'),
	(56, 'JP3115037349', '19070111297N08K', '2019-07-01', 'pending', 'wikiyatulhasanah', '2019-07-03', 'Jaket parka / parka cowo / jaket parka cowo / parka pria / parka murah / jaket parka murah / parka 3', 'Hitam', ' 1', ' Rp 98,000', ' PRKCO01', ' PRKCO'),
	(57, 'JP3115037349', '19070111297N08K', '2019-07-01', 'pending', 'wikiyatulhasanah', '2019-07-03', 'YANG LAGI HITS Kemeja Flanel Distro Cowok Lengan Panjang Warna Biru Dongker Garis Merah Seri', 'M', ' 1', ' Rp 65,000', ' Kemeja Flannel M', ' KEMEJA FLANEL'),
	(58, 'JP6700786905', '190701170470R7A', '2019-07-01', 'pending', 'mamanaffa', '2019-07-03', 'Jaket Emporer Hijau Army Polos. Lengan Nya Bisa Le JAKET PR JM162 Fashion Pria Jaket Bomber Rider XL', 'Maroon,XL', ' 1', ' Rp 90,000', ' BGSRXL03', ' BMBGSR'),
	(59, 'JP5181431959', '1907010818752SB', '2019-07-01', 'pending', 'rudicahyono15', '2019-07-03', 'Jaket Emporer Hijau Army Polos. Lengan Nya Bisa Le JAKET PR JM162 Fashion Pria Jaket Bomber Rider XL', 'Hitam,L', ' 1', ' Rp 90,000', ' BGSRL01', ' BMBGSR'),
	(60, 'JP5181431959', '1907010818752SB', '2019-07-01', 'pending', 'rudicahyono15', '2019-07-03', 'Jaket Emporer Hijau Army Polos. Lengan Nya Bisa Le JAKET PR JM162 Fashion Pria Jaket Bomber Rider XL', 'Maroon,L', ' 1', ' Rp 90,000', ' BGSRL03', ' BMBGSR'),
	(61, 'JP0645809648', '1907011659706A4', '2019-07-01', 'pending', 'nila_bundarafa', '2019-07-03', 'Jaket Parka Wanita Merah Navy / All Collor/Size L/Cewek Casual Outdoor Gunung Parasut Anti Air Keren', 'Navy-Merah M/L', ' 1', ' Rp 78,000', ' BBCE0203', ' BBCE'),
	(62, 'JP9852620486', '19070110467GJJ9', '2019-07-01', 'pending', 'achamdimamrifai', '2019-07-03', 'Fashion Jaman Now Armed Bomber Army Despo Tebal Jaket Bomber Army Jake Mo Terkeren Mu Terbaru ATR', 'Maroon,XL', ' 1', ' Rp 95,000', ' Bomber After Racer 03 XL', ' Bomber After'),
	(63, 'JP1875017180', '1907011734743A8', '2019-07-01', 'pending', 'pudingjagung', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Navy,Size L', ' 1', ' Rp 98,000', ' PRKCE02L', ' PRKCE'),
	(64, 'JP1875017180', '1907011734743A8', '2019-07-01', 'pending', 'pudingjagung', '2019-07-03', '( BEST SELLER ) JAKET PARKA WANITA BIG SIZE HOODIE BISA DILEPAS BOLAK BALIK BOMBER ', 'Mocca,Size L', ' 1', ' Rp 98,000', ' PRKCE10L', ' PRKCE');
/*!40000 ALTER TABLE `tb_transaksi` ENABLE KEYS */;

-- Dumping structure for table db_sms.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('admin','superadmin','programmer') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sms.users: ~4 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `level`, `email`, `password`) VALUES
	(1, 'deva', 'deva', 'programmer', 'satriosuklun@gmail.com', '$2y$10$d.WOhENt.9JmrlDe.SNIw.kz6lb0gi2iwjduLAEoWvF9WpJAZ2j0O'),
	(2, 'jian', 'jianfitri', 'admin', 'jian@gmail.com', '$2y$10$I4w3oJsxJ.TS4LGZ/ZoLw.FsiqaW1E.gOW3lVjpKrJ5/R1OsGirJG'),
	(3, 'dian ade setia', 'dianadesetia', 'superadmin', 'dianade@gmail.com', '$2y$10$6FXawsWxeFksBZsHE8bLuObkM785yZk5356X7JxuAYm2YJ9u4qqhi');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
