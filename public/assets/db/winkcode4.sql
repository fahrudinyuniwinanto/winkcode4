/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : winkcode4

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 16/06/2022 21:23:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for sy_category
-- ----------------------------
DROP TABLE IF EXISTS `sy_category`;
CREATE TABLE `sy_category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `note` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `key` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sy_category
-- ----------------------------
INSERT INTO `sy_category` VALUES (1, 'ORANG', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (2, 'UNIT', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (3, '%', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (4, 'Ha', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (5, 'M', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (6, 'BUMD/UPTD\r\n', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (7, 'RUMAH', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (8, 'IZIN', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (9, 'KERJASAMA', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (10, 'BANGUNAN', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (11, 'KM', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (12, 'RT', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (13, 'PERUMAHAN', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (14, 'PENGEMBANG', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (15, 'PERDA&PERKADA', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (16, 'SOP', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (17, 'BUAH', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (18, 'LAYANAN', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (19, 'PERUSAHAAN', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (20, 'LEMBAGA', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (21, 'PERJANJIAN', NULL, 'SATUAN_IKK');
INSERT INTO `sy_category` VALUES (22, 'DINDIKPORA', NULL, 'SUMBER_DATA');
INSERT INTO `sy_category` VALUES (23, 'DINAS KESEHATAN', NULL, 'SUMBER_DATA');

-- ----------------------------
-- Table structure for sy_menu
-- ----------------------------
DROP TABLE IF EXISTS `sy_menu`;
CREATE TABLE `sy_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `redirect` int(1) NULL DEFAULT NULL,
  `url` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `parent` int(11) NULL DEFAULT 0,
  `icon` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `note` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `order_no` int(5) NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sy_menu
-- ----------------------------
INSERT INTO `sy_menu` VALUES (3, 'Status Client', 0, 'lokasi', 0, 'fa-map-marker', 'LOKASI', 8, '', NULL, '', NULL);
INSERT INTO `sy_menu` VALUES (5, 'Setting Menu', 0, 'sy_menu', 0, 'fa-list', '', 10, '', NULL, '', NULL);
INSERT INTO `sy_menu` VALUES (6, 'Dashboard', 0, 'backend', 0, 'fa-home', '', 0, '', NULL, '', NULL);
INSERT INTO `sy_menu` VALUES (7, 'Serba-serbi Jaringan', 0, 'kategori', 0, 'fa-sitemap', '', 3, '', NULL, '', NULL);
INSERT INTO `sy_menu` VALUES (8, 'Histori Alat', 0, 'alat', 0, 'fa-wrench', '', 5, '', NULL, '', NULL);
INSERT INTO `sy_menu` VALUES (9, 'Network Report', 0, 'perangkat/laporan', 0, 'fa fa-code-fork', '', 1, '', NULL, '', NULL);
INSERT INTO `sy_menu` VALUES (10, 'Kategori', 0, 'kategori', 0, 'fa-th-list', '', 4, '', NULL, '', NULL);
INSERT INTO `sy_menu` VALUES (11, 'Repeater', 0, 'perangkat', 0, 'fa-signal', '', 7, '', NULL, '', NULL);
INSERT INTO `sy_menu` VALUES (13, 'Setting', 0, 'sy_config', 0, 'fa-gears', '', 9, '', NULL, '', NULL);
INSERT INTO `sy_menu` VALUES (14, 'Users', 0, 'users', 0, 'fa-users', '', 9, '', NULL, '', NULL);
INSERT INTO `sy_menu` VALUES (15, 'Group Users', 0, 'user_group', 0, 'fa-users', '', 9, '', NULL, '', NULL);

-- ----------------------------
-- Table structure for sy_parsys
-- ----------------------------
DROP TABLE IF EXISTS `sy_parsys`;
CREATE TABLE `sy_parsys`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `par_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `par_val` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `isactive` int(1) NULL DEFAULT NULL,
  `note` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sy_parsys
-- ----------------------------
INSERT INTO `sy_parsys` VALUES (3, 'APP_NAME', 'LPPD Kab. Temanggung', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (8, 'OPD_NAME', 'Bagian Pemerintahan', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (9, 'LEFT_FOOTER', '<strong>Copyright</strong> Dinkominfo Kab. Temanggung © 2019', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (10, 'RIGHT_FOOTER', 'Kabupaten Temanggung', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (11, 'APP_DESC', 'Laporan Penyelenggaraan Pemerintahan Daerah Kepada Pemerintah', NULL, NULL, NULL, '-');
INSERT INTO `sy_parsys` VALUES (12, 'OPD_ADDR', 'Jln. Jend. Sudirman No. 130 Telp. (0293) 491059 Temanggung Kode Pos 56218', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (13, 'VISI_MISI', '-', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (14, 'APP_TELP', '(0293) 491059', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (15, 'APP_EMAIL', 'testes@gmail.co.id', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (16, 'APP_FB', 'https://www.facebook.com', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (17, 'APP_TWITTER', 'https://twitter.com', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (18, 'APP_IG', 'https://instagram.com', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (19, 'APP_VERSION', 'WINCODE4', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (20, 'META_DESC', 'winkcode', NULL, NULL, NULL, ' ');
INSERT INTO `sy_parsys` VALUES (21, 'META_AUTHOR', 'peternak kode', NULL, NULL, NULL, ' ');
INSERT INTO `sy_parsys` VALUES (22, 'META_KEYWORDS', 'winkcode, peternak kode', NULL, NULL, NULL, ' ');
INSERT INTO `sy_parsys` VALUES (23, 'DEVELOPER', 'Dinkominfo', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (24, 'ARTC_BODY1', '<h1>Tentang LPPD</h1>\r\n\r\n		<p>Laporan Penyelenggaraan Pemerintahan Daerah kepada Pemerintah (LPPD) adalah laporan atas penyelenggaraan pemerintahan daerah selama 1 (satu) tahun anggaran berdasarkan Rencana Kerja Pembangunan Daerah (RKPD) yang disampaikan oleh kepala daerah kepada Pemerintah.</p>\r\n\r\n		<p>Aplikasi ini meliputi manajemen data berupa: </p>\r\n\r\n		<pre><code>1. Data Output/Keluaran</code>\r\n<code>2. Data Outcome/hasil</code>\r\n<code>3. Data Penunjang</code>\r\n<code>4. Data Makro Bappeda</code>\r\n</pre>\r\n\r\n	<p>Parameter data Output dan Outcome meliputi:</p>\r\n\r\n		<pre><code>1. Data Urusan</code>\r\n<code>2. Data IKK</code>\r\n<code>3. Data Rumus</code>\r\n<code>3. Sumber Data</code>\r\n</pre>', NULL, NULL, NULL, NULL);
INSERT INTO `sy_parsys` VALUES (25, 'ARTC_BODY2', '<h1>Tentang Kami</h1>\r\n\r\n			\r\n			<h2>\r\n				<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 512 512\'>\r\n					<path d=\'M431,320.6c-1-3.6,1.2-8.6,3.3-12.2a33.68,33.68,0,0,1,2.1-3.1A162,162,0,0,0,464,215c.3-92.2-77.5-167-173.7-167C206.4,48,136.4,105.1,120,180.9a160.7,160.7,0,0,0-3.7,34.2c0,92.3,74.8,169.1,171,169.1,15.3,0,35.9-4.6,47.2-7.7s22.5-7.2,25.4-8.3a26.44,26.44,0,0,1,9.3-1.7,26,26,0,0,1,10.1,2L436,388.6a13.52,13.52,0,0,0,3.9,1,8,8,0,0,0,8-8,12.85,12.85,0,0,0-.5-2.7Z\' style=\'fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px\' />\r\n					<path d=\'M66.46,232a146.23,146.23,0,0,0,6.39,152.67c2.31,3.49,3.61,6.19,3.21,8s-11.93,61.87-11.93,61.87a8,8,0,0,0,2.71,7.68A8.17,8.17,0,0,0,72,464a7.26,7.26,0,0,0,2.91-.6l56.21-22a15.7,15.7,0,0,1,12,.2c18.94,7.38,39.88,12,60.83,12A159.21,159.21,0,0,0,284,432.11\' style=\'fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px\' />\r\n				</svg>\r\n				Kontak\r\n			</h2>\r\n\r\n			<p>Silakan ikuti kami melalui <a href=\"https://instagram.com/\" target=\"_blank\">Instagram</a> !</p>\r\n\r\n			', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for sy_user
-- ----------------------------
DROP TABLE IF EXISTS `sy_user`;
CREATE TABLE `sy_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_group` int(11) NULL DEFAULT NULL COMMENT 'fk dari tabel user_group',
  `foto` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `note` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `ip` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_login` datetime(0) NULL DEFAULT NULL,
  `isactive` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sy_user
-- ----------------------------
INSERT INTO `sy_user` VALUES (1, 'Developer', 'dev', '227edf7c86c02a44d17eec9aa5b30cd1', 'dev@email.com', 1, 'a4.jpg', '085643242654', 'full akses', 1, 1, '2018-03-13 03:06:55', '2020-01-24 08:36:51', '', '2019-08-27 20:12:45', NULL);
INSERT INTO `sy_user` VALUES (5, 'Administrator', 'admin', '227edf7c86c02a44d17eec9aa5b30cd1', 'adminpem@yahoo.co.id', 2, 'a4.jpg', '085786640255', NULL, NULL, NULL, NULL, NULL, '', '2019-08-27 20:12:45', NULL);

-- ----------------------------
-- Table structure for sy_user_group
-- ----------------------------
DROP TABLE IF EXISTS `sy_user_group`;
CREATE TABLE `sy_user_group`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `note` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sy_user_group
-- ----------------------------
INSERT INTO `sy_user_group` VALUES (1, 'develper', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `sy_user_group` VALUES (2, 'super admin', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `sy_user_group` VALUES (3, 'admin', NULL, NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
