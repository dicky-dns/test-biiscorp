/*
 Navicat Premium Data Transfer

 Source Server         : LocalhostDicky
 Source Server Type    : MySQL
 Source Server Version : 50733 (5.7.33)
 Source Host           : localhost:3306
 Source Schema         : test_biis

 Target Server Type    : MySQL
 Target Server Version : 50733 (5.7.33)
 File Encoding         : 65001

 Date: 12/09/2024 12:41:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jabatans
-- ----------------------------
DROP TABLE IF EXISTS `jabatans`;
CREATE TABLE `jabatans`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jabatans
-- ----------------------------
INSERT INTO `jabatans` VALUES (1, 'Staff', '2024-09-11 07:31:12', '2024-09-11 07:31:12');
INSERT INTO `jabatans` VALUES (2, 'Supervisor', '2024-09-11 07:31:12', '2024-09-11 07:31:12');
INSERT INTO `jabatans` VALUES (3, 'Manajer', '2024-09-11 07:31:12', '2024-09-11 07:31:12');

-- ----------------------------
-- Table structure for pegawais
-- ----------------------------
DROP TABLE IF EXISTS `pegawais`;
CREATE TABLE `pegawais`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telepon` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jabatan_id` int(11) NULL DEFAULT NULL,
  `gaji` int(11) NULL DEFAULT NULL,
  `tanggal_masuk` date NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pegawais
-- ----------------------------
INSERT INTO `pegawais` VALUES (1, 'Dicky Dwi NS', 'dickydns1@gmail.com', '62858089236858', 2, 500000, '2024-09-12', '20240912053416.jpg', '2024-09-11 05:08:57', '2024-09-12 05:34:16');
INSERT INTO `pegawais` VALUES (2, 'Muhammad Arif', 'BtaZOYkeMI@example.com', '6281000011111', 1, 5000000, '2024-09-11', 'example.jpg', '2024-09-11 05:08:57', '2024-09-12 05:34:16');
INSERT INTO `pegawais` VALUES (3, 'Ahmad Busri', 'bfXSRIHObQ@example.com', '6281000011114', 1, 230000, '2024-09-11', 'example.jpg', '2024-09-11 05:08:57', '2024-09-11 05:08:57');
INSERT INTO `pegawais` VALUES (4, 'Example Name', 'gROaBpWxDb@example.com', '6281000011112', 2, 5000000, '2024-09-11', 'example.jpg', '2024-09-11 05:18:17', '2024-09-11 05:18:17');
INSERT INTO `pegawais` VALUES (5, 'Hello Word', 'email@example.com', '6281000011113', 3, 27000000, '2024-09-11', 'example.jpg', '2024-09-11 05:18:55', '2024-09-11 05:18:55');
INSERT INTO `pegawais` VALUES (6, 'Example 12', 'hello@example.com', '6281000011115', 2, 5000000, '2024-09-11', 'example.jpg', '2024-09-11 05:19:25', '2024-09-11 05:19:25');
INSERT INTO `pegawais` VALUES (7, 'Example nma', 'n3NhJv6Xwc@example.com', '6281000011116', 1, 5000000, '2024-09-11', 'example.jpg', '2024-09-11 05:19:39', '2024-09-11 05:19:39');
INSERT INTO `pegawais` VALUES (8, 'Siska', '5O2ACGopoK@example.com', '6281000011117', 2, 5000000, '2024-09-11', 'example.jpg', '2024-09-11 05:20:23', '2024-09-11 05:20:23');
INSERT INTO `pegawais` VALUES (9, 'cyntya', '3g6azPhkiH@example.com', '6281000011119', 3, 5000000, '2024-09-11', 'example.jpg', '2024-09-11 05:20:38', '2024-09-11 05:20:38');
INSERT INTO `pegawais` VALUES (10, 'Example Hello', 'GEGb3gOIk9@example.com', '6281000011122', 1, 5000000, '2024-09-11', 'example.jpg', '2024-09-11 05:21:09', '2024-09-11 05:21:09');
INSERT INTO `pegawais` VALUES (15, 'Dicky Dwi NS', 'eeNRvSUrXE@example.com', '628938173187868', 1, 10000000, '2024-09-11', '20240912024833.jpg', '2024-09-11 13:04:53', '2024-09-12 03:55:01');

SET FOREIGN_KEY_CHECKS = 1;
