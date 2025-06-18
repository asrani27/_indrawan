/*
 Navicat Premium Dump SQL

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : _indrawan

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 18/06/2025 14:39:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for budaya
-- ----------------------------
DROP TABLE IF EXISTS `budaya`;
CREATE TABLE `budaya` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `judul` mediumtext,
  `slug` mediumtext,
  `isi` longtext,
  `gambar` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of budaya
-- ----------------------------
BEGIN;
INSERT INTO `budaya` (`id`, `judul`, `slug`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES (1, 'buday', 'buday', '<p>sdfsdf</p>', 'gambar6804cdf53a279.jpeg', '2025-04-20 18:35:33', '2025-04-20 18:35:33');
COMMIT;

-- ----------------------------
-- Table structure for halaman
-- ----------------------------
DROP TABLE IF EXISTS `halaman`;
CREATE TABLE `halaman` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `isi` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of halaman
-- ----------------------------
BEGIN;
INSERT INTO `halaman` (`id`, `nama`, `isi`, `created_at`, `updated_at`) VALUES (1, 'tentang kami', '<h3 style=\"text-align: center; \"><b><span style=\"font-family: &quot;Arial Black&quot;;\">Tentang Kami</span></b></h3><p style=\"text-align: center; \"><br></p><p style=\"text-align: center; \">isi</p>', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for kuliner
-- ----------------------------
DROP TABLE IF EXISTS `kuliner`;
CREATE TABLE `kuliner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `judul` mediumtext,
  `slug` mediumtext,
  `isi` longtext,
  `gambar` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kuliner
-- ----------------------------
BEGIN;
INSERT INTO `kuliner` (`id`, `judul`, `slug`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES (1, 'kuliner', 'kuliner', '<p>sdfsdfdsf</p>', 'gambar6804cdfd68130.jpeg', '2025-04-20 18:35:41', '2025-04-20 18:35:41');
COMMIT;

-- ----------------------------
-- Table structure for profil
-- ----------------------------
DROP TABLE IF EXISTS `profil`;
CREATE TABLE `profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(300) DEFAULT NULL,
  `file` varchar(300) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `keterangan` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of profil
-- ----------------------------
BEGIN;
INSERT INTO `profil` (`id`, `nama`, `file`, `status`, `keterangan`) VALUES (1, 'GAMBAR STRUKTUR BIDANG CIPTA KARYA DAN KONSTRUKSI', 'Struktur_PUPR1.jpg', 1, 'GAMBAR STRUKTUR BIDANG CIPTA KARYA DAN KONSTRUKSI');
INSERT INTO `profil` (`id`, `nama`, `file`, `status`, `keterangan`) VALUES (2, 'RENSTRA SEKSI PROGRAM & JASA KONSTRUKSI', 'renstra_DJBK.jpg', 2, 'RENSTRA SEKSI PROGRAM & JASA KONSTRUKSI');
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1, 1);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
COMMIT;

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` text,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of setting
-- ----------------------------
BEGIN;
INSERT INTO `setting` (`id`, `nama`, `file`) VALUES (1, 'header', 'gambar66dfaec5a35c1.png');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `password_superadmin` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `api_token` varchar(255) DEFAULT NULL,
  `last_session` varchar(255) DEFAULT NULL,
  `change_password` int(1) unsigned DEFAULT '0' COMMENT '0: belum, 1: sudah',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`) VALUES (1, 'admin', NULL, 'admin', '2023-04-29 07:57:56', '$2y$10$E9xG1OtIFvBRbHqlwHCC3u48vO5eBf2OQ9wFNpi.qKOAzVqNDUdW2', NULL, NULL, '2023-04-29 07:57:56', '2023-04-29 07:57:56', '$2y$10$tjMANlV25IUwvKuPxEODW.3qE3zPSKjwhmgTcZUgsPDZRGcpgGAN.', NULL, 0);
COMMIT;

-- ----------------------------
-- Table structure for wisata
-- ----------------------------
DROP TABLE IF EXISTS `wisata`;
CREATE TABLE `wisata` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `judul` mediumtext,
  `slug` mediumtext,
  `isi` longtext,
  `gambar` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wisata
-- ----------------------------
BEGIN;
INSERT INTO `wisata` (`id`, `judul`, `slug`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES (1, 'wisata pantai', 'wisata-pantai', '<p>sdfdsf sdf s</p><p>sd fs</p><p>df sd</p><p>fsd</p><p>f sdsd</p>', 'gambar6804ca6fad023.png', '2025-04-20 18:20:31', '2025-04-20 18:20:31');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
