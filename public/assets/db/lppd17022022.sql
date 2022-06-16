/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : lppd

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 17/02/2022 14:49:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ikk
-- ----------------------------
DROP TABLE IF EXISTS `ikk`;
CREATE TABLE `ikk`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ikk` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `capaian` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'value dari tiap ikk',
  `sumber_data` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'opd asal sumber',
  `id_sub_urusan` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `isactive` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ikk
-- ----------------------------

-- ----------------------------
-- Table structure for rumus
-- ----------------------------
DROP TABLE IF EXISTS `rumus`;
CREATE TABLE `rumus`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rumus` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `elemen_data` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'value tiap rumus (capaian kinerja)\r\n',
  `id_ikk` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `isactive` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rumus
-- ----------------------------

-- ----------------------------
-- Table structure for sub_urusan
-- ----------------------------
DROP TABLE IF EXISTS `sub_urusan`;
CREATE TABLE `sub_urusan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_urusan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_urusan` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `created_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `isactive` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sub_urusan
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 81 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sy_category
-- ----------------------------
INSERT INTO `sy_category` VALUES (1, 'Kabupaten Temanggung', '-', 'daerah_pemasaran');
INSERT INTO `sy_category` VALUES (2, 'Ingin hamil/anak', '-', 'ALASAN_PUTUS_KB');
INSERT INTO `sy_category` VALUES (3, 'Tidak tahu tentang KB', '-', 'ALASAN_PUTUS_KB');
INSERT INTO `sy_category` VALUES (4, 'MOW/Steril Wanita', '-', 'KB_YANG_DIPAKAI');
INSERT INTO `sy_category` VALUES (5, 'MOP/Steril Pria', '-', 'KB_YANG_DIPAKAI');
INSERT INTO `sy_category` VALUES (6, 'RS Pemerintah/TNI/Polri', '-', 'SUMBER_PELAYANAN_KB');
INSERT INTO `sy_category` VALUES (7, 'RS Swasta', '-', 'SUMBER_PELAYANAN_KB');
INSERT INTO `sy_category` VALUES (8, 'Daun/Rumbai', NULL, 'JENIS_ATAP');
INSERT INTO `sy_category` VALUES (9, ' Seng/Asbes', NULL, 'JENIS_ATAP');
INSERT INTO `sy_category` VALUES (10, ' Genteng/Sirap', NULL, 'JENIS_ATAP');
INSERT INTO `sy_category` VALUES (11, 'Lainnya ...', NULL, 'JENIS_ATAP');
INSERT INTO `sy_category` VALUES (12, 'Bambu', NULL, 'JENIS_DINDING');
INSERT INTO `sy_category` VALUES (13, 'Kayu/Seng', NULL, 'JENIS_DINDING');
INSERT INTO `sy_category` VALUES (14, 'Tembok', NULL, 'JENIS_DINDING');
INSERT INTO `sy_category` VALUES (15, 'Lainnya ...', NULL, 'JENIS_DINDING');
INSERT INTO `sy_category` VALUES (16, 'Keramik/Marmer/Granit', NULL, 'JENIS_LANTAI');
INSERT INTO `sy_category` VALUES (17, 'Ubin/Tegel/Teraso', NULL, 'JENIS_LANTAI');
INSERT INTO `sy_category` VALUES (18, 'Semen', NULL, 'JENIS_LANTAI');
INSERT INTO `sy_category` VALUES (19, 'Kayu/Papan', NULL, 'JENIS_LANTAI');
INSERT INTO `sy_category` VALUES (20, 'Bambu', NULL, 'JENIS_LANTAI');
INSERT INTO `sy_category` VALUES (21, 'Tanah', NULL, 'JENIS_LANTAI');
INSERT INTO `sy_category` VALUES (22, 'Lainnya ...', NULL, 'JENIS_LANTAI');
INSERT INTO `sy_category` VALUES (23, 'Listrik, daya 450 watt', NULL, 'SUMBER_PENERANGAN');
INSERT INTO `sy_category` VALUES (24, 'Listrik, daya 450 watt bersubsidi', NULL, 'SUMBER_PENERANGAN');
INSERT INTO `sy_category` VALUES (25, 'Listrik, daya 450 watt non bersubsidi', NULL, 'SUMBER_PENERANGAN');
INSERT INTO `sy_category` VALUES (26, 'Listrik, daya di atas 900 watt', NULL, 'SUMBER_PENERANGAN');
INSERT INTO `sy_category` VALUES (27, 'Lampu minyak', NULL, 'SUMBER_PENERANGAN');
INSERT INTO `sy_category` VALUES (28, 'Lainnya ...', NULL, 'SUMBER_PENERANGAN');
INSERT INTO `sy_category` VALUES (29, 'Air kemasan/Isi ulang', NULL, 'SUMBER_AIR_MINUM');
INSERT INTO `sy_category` VALUES (30, 'Ledeng', NULL, 'SUMBER_AIR_MINUM');
INSERT INTO `sy_category` VALUES (31, 'Pompa/Sumur pantek', NULL, 'SUMBER_AIR_MINUM');
INSERT INTO `sy_category` VALUES (32, 'Sumur', NULL, 'SUMBER_AIR_MINUM');
INSERT INTO `sy_category` VALUES (33, 'Mata air', NULL, 'SUMBER_AIR_MINUM');
INSERT INTO `sy_category` VALUES (34, 'Sungai/Danau', NULL, 'SUMBER_AIR_MINUM');
INSERT INTO `sy_category` VALUES (35, 'Air hujan', NULL, 'SUMBER_AIR_MINUM');
INSERT INTO `sy_category` VALUES (36, 'Lainnya ...', NULL, 'SUMBER_AIR_MINUM');
INSERT INTO `sy_category` VALUES (37, 'Listrik/Gas', NULL, 'SUMBER_BAHAN_BAKAR');
INSERT INTO `sy_category` VALUES (38, 'Minyak tanah', NULL, 'SUMBER_BAHAN_BAKAR');
INSERT INTO `sy_category` VALUES (39, 'Arang/Kayu', NULL, 'SUMBER_BAHAN_BAKAR');
INSERT INTO `sy_category` VALUES (40, 'Lainnya ...', NULL, 'SUMBER_BAHAN_BAKAR');
INSERT INTO `sy_category` VALUES (41, 'Ya, dengan septic tank', NULL, 'TEMPAT_BAB');
INSERT INTO `sy_category` VALUES (42, 'Ya, tanpa septic tank', NULL, 'TEMPAT_BAB');
INSERT INTO `sy_category` VALUES (43, 'Tidak, jamban umum/bersama', NULL, 'TEMPAT_BAB');
INSERT INTO `sy_category` VALUES (44, 'Lainnya ...', NULL, 'TEMPAT_BAB');
INSERT INTO `sy_category` VALUES (45, 'Milik sendiri', NULL, 'KEPEMILIKAN_RUMAH');
INSERT INTO `sy_category` VALUES (46, 'Kontrak/Sewa', NULL, 'KEPEMILIKAN_RUMAH');
INSERT INTO `sy_category` VALUES (47, 'Bebas sewa', NULL, 'KEPEMILIKAN_RUMAH');
INSERT INTO `sy_category` VALUES (48, 'Dinas', NULL, 'KEPEMILIKAN_RUMAH');
INSERT INTO `sy_category` VALUES (49, 'Lainnya ...', NULL, 'KEPEMILIKAN_RUMAH');
INSERT INTO `sy_category` VALUES (50, 'Radio', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (51, 'Televisi', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (52, 'Videotron', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (53, 'Koran', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (54, 'Majalah/Tabloid', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (55, 'Flipchart/Lembar balik', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (56, 'Poster', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (57, 'Spanduk/Umbul-umbul', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (58, 'Banner', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (59, 'Billboard/Baliho', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (60, 'Pameran', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (61, 'Merchandise', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (62, 'Event', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (63, 'Mural', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (64, 'Internet/Website/Media sosial/Media online', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (65, 'Lainnya ...', NULL, 'SUMBER_INFO_MEDIA');
INSERT INTO `sy_category` VALUES (66, 'Pejabat pemerintah', NULL, 'SUMBER_INFO_PETUGAS');
INSERT INTO `sy_category` VALUES (67, 'Petugas Keluarga Berencana (PKB/PLKB/Petugas Lapangan KB lainnya)', NULL, 'SUMBER_INFO_PETUGAS');
INSERT INTO `sy_category` VALUES (68, 'Guru/Dosen', NULL, 'SUMBER_INFO_PETUGAS');
INSERT INTO `sy_category` VALUES (69, 'Tokoh agama', NULL, 'SUMBER_INFO_PETUGAS');
INSERT INTO `sy_category` VALUES (70, 'Tokoh masyarakat', NULL, 'SUMBER_INFO_PETUGAS');
INSERT INTO `sy_category` VALUES (71, 'Dokter', NULL, 'SUMBER_INFO_PETUGAS');
INSERT INTO `sy_category` VALUES (72, 'Bidan/Perawat', NULL, 'SUMBER_INFO_PETUGAS');
INSERT INTO `sy_category` VALUES (73, 'Perangkat desa/kelurahan', NULL, 'SUMBER_INFO_PETUGAS');
INSERT INTO `sy_category` VALUES (74, 'Kader/IMP', NULL, 'SUMBER_INFO_PETUGAS');
INSERT INTO `sy_category` VALUES (75, 'Lainnya ...', NULL, NULL);
INSERT INTO `sy_category` VALUES (76, 'Lainnya ...', NULL, 'SUMBER_INFO_PETUGAS');
INSERT INTO `sy_category` VALUES (77, 'BPJS-PBI/JANKESMAS/JAMKESDA', '', 'ASURANSI');
INSERT INTO `sy_category` VALUES (78, 'BPJS NON PBI', '', 'ASURANSI');
INSERT INTO `sy_category` VALUES (79, 'SWASTA', '', 'ASURANSI');
INSERT INTO `sy_category` VALUES (80, 'TIDAK MEMILIKI', '', 'ASURANSI');

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
  `isactive` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sy_menu
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sy_parsys
-- ----------------------------
INSERT INTO `sy_parsys` VALUES (3, 'APP_NAME', 'LPPD Kab. Temanggung xx', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (8, 'OPD_NAME', 'DPPKBPPPA Kab. Temanggung', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (9, 'LEFT_FOOTER', '<strong>Copyright</strong> Dinkominfo Kab. Temanggung © 2019', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (10, 'RIGHT_FOOTER', 'SIM KB Kab. Temanggung', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (11, 'APP_DESC', 'Informasi semua tentang KB', NULL, NULL, NULL, '-');
INSERT INTO `sy_parsys` VALUES (12, 'OPD_ADDR', 'Jln. Jend. Sudirman No. 130 Telp. (0293) 491059 Temanggung Kode Pos 56218', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (13, 'VISI_MISI', 'DINAS PENGENDALIAN PENDUDUK, KELUAGA BERENCANA , PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK KAB. TEMANGGUNG', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (14, 'APP_TELP', '(0293) 491059', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (15, 'APP_EMAIL', 'testes@gmail.co.id', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (16, 'APP_FB', 'https://www.facebook.com', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (17, 'APP_TWITTER', 'https://twitter.com', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (18, 'APP_IG', 'https://instagram.com', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (19, 'APP_VERSION', 'WINCODE4', NULL, NULL, NULL, '');
INSERT INTO `sy_parsys` VALUES (20, 'META_DESC', 'winkcode', NULL, NULL, NULL, ' ');
INSERT INTO `sy_parsys` VALUES (21, 'META_AUTHOR', 'peternak kode', NULL, NULL, NULL, ' ');
INSERT INTO `sy_parsys` VALUES (22, 'META_KEYWORDS', 'winkcode, peternak kode', NULL, NULL, NULL, ' ');
INSERT INTO `sy_parsys` VALUES (23, 'DEVELOPER', 'Kominfo', NULL, NULL, NULL, '');

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
INSERT INTO `sy_user` VALUES (5, 'Administrator dd', 'admin', '259db408f679c9f48e559a9fb9c16ac5', 'sman5mgl@yahoo.co.id', 1, 'a4.jpg', '085786640255', NULL, NULL, NULL, NULL, NULL, '', '2019-08-27 20:12:45', NULL);

-- ----------------------------
-- Table structure for urusan
-- ----------------------------
DROP TABLE IF EXISTS `urusan`;
CREATE TABLE `urusan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urusan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `output_outcome` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'OP atau OC',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `created_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `isactive` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of urusan
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
