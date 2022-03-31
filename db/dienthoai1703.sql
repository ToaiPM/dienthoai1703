/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100408
 Source Host           : localhost:3306
 Source Schema         : dienthoai1703

 Target Server Type    : MySQL
 Target Server Version : 100408
 File Encoding         : 65001

 Date: 30/03/2022 21:05:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dien_thoai
-- ----------------------------
DROP TABLE IF EXISTS `dien_thoai`;
CREATE TABLE `dien_thoai`  (
  `dien_thoai_id` int NOT NULL AUTO_INCREMENT,
  `hang_san_xuat_id` int NULL DEFAULT NULL,
  `dien_thoai_ma` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `dien_thoai_ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `dien_thoai_hinh_anh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `dien_thoai_gia_hien_tai` int NULL DEFAULT NULL,
  `dien_thoai_gia_cu` int NULL DEFAULT NULL,
  `dien_thoai_cpu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `dien_thoai_ram` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `dien_thoai_rom` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `dien_thoai_man_hinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `dien_thoai_pin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `dien_thoai_khoi_luong` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `dien_thoai_nam_san_xuat` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `dien_thoai_hang_chinh_hang` int NULL DEFAULT 1 COMMENT '1 chính hãng, 0 xách tay',
  `dien_thoai_trang_thai` int NULL DEFAULT 0 COMMENT '1 public, 0 private',
  `dien_thoai_luot_xem` int NULL DEFAULT 0,
  PRIMARY KEY (`dien_thoai_id`) USING BTREE,
  INDEX `fk_dienthoai_hangsanxuat`(`hang_san_xuat_id` ASC) USING BTREE,
  CONSTRAINT `fk_dienthoai_hangsanxuat` FOREIGN KEY (`hang_san_xuat_id`) REFERENCES `hang_san_xuat` (`hang_san_xuat_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of dien_thoai
-- ----------------------------
INSERT INTO `dien_thoai` VALUES (1, 2, NULL, 'Galaxy note 9', 'samsung-note9.png', 7900000, 9900000, 'Exynos 8989', '4 GB', '128 GB', '6.7 Inch', '4000 mAh', '197 g', '2021', 1, 1, 9);
INSERT INTO `dien_thoai` VALUES (2, 2, NULL, 'Galaxy note 10', 'galaxy_note_10_4.png', 8000000, 10000000, 'Exynos 7610', '4 GB', '256 GB', '6.5 inch', '4200 mAh', '200 g', '2022', 1, 1, 4);
INSERT INTO `dien_thoai` VALUES (3, 2, NULL, 'Galaxy note 7', 'galaxy_note_10_4.png', 6000000, 8000000, 'Exynos 7610', '4 GB', '128 GB', '5.5 Inch', '3800 mAh', '210 g', '2016', 1, 1, 7);
INSERT INTO `dien_thoai` VALUES (4, 1, NULL, 'iPhone 13', 'ip13.png', 14000000, 17000000, 'Apple A15', '4 GB', '256 GB', '6.7 Inch', '3200 mAh', '200 g', '2021', 1, 1, 1);
INSERT INTO `dien_thoai` VALUES (5, 3, NULL, 'Oppo A54 black', 'oppo_a54_4g_black.png', 5000000, 6000000, 'Đang cập nhật', '3 GB', '128 GB', '5.7 Inch', '3500 mAh', '189 g', '2021', 1, 1, 8);
INSERT INTO `dien_thoai` VALUES (6, 5, NULL, 'Xiaomi note 10 pro', 'xiaomi_note10_pro.png', 6000000, 4000000, 'Đang cập nhật', '4 GB', '128 GB', '6.0 Inch', '2500 mAh', '200 g', '2020', 1, 1, 11);
INSERT INTO `dien_thoai` VALUES (7, 1, NULL, 'iPhone 8 plus', 'ip-8-plus.png', 7000000, 8500000, 'Apple A11', '3 GB', '64 GB', '5.5 Inch', '2900 mAh', '200 g', '2017', 1, 1, 1);
INSERT INTO `dien_thoai` VALUES (8, 2, NULL, 'Galaxy Note 20', 'galaxy-note-20.png', 12000000, 13500000, 'Đang cập nhật', '4 GB', '256 GB', '6.4 Inch', '2900 mAh', '215 g', '2020', 1, 1, 4);
INSERT INTO `dien_thoai` VALUES (9, 3, NULL, 'Oppo reno 7', 'oppo_reno7_5g_den.png', 14000000, 17000000, 'Đang cập nhật', '6 GB', '256 GB', '6.7 Inch', '3000 mAh', '200 g', '2021', 1, 1, 1);

-- ----------------------------
-- Table structure for hang_san_xuat
-- ----------------------------
DROP TABLE IF EXISTS `hang_san_xuat`;
CREATE TABLE `hang_san_xuat`  (
  `hang_san_xuat_id` int NOT NULL AUTO_INCREMENT,
  `hang_san_xuat_ma` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `hang_san_xuat_ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `hang_san_xuat_ghi_chu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`hang_san_xuat_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hang_san_xuat
-- ----------------------------
INSERT INTO `hang_san_xuat` VALUES (1, '', 'Apple', NULL);
INSERT INTO `hang_san_xuat` VALUES (2, NULL, 'Samsung', NULL);
INSERT INTO `hang_san_xuat` VALUES (3, NULL, 'OPPO', NULL);
INSERT INTO `hang_san_xuat` VALUES (4, NULL, 'SONY', NULL);
INSERT INTO `hang_san_xuat` VALUES (5, NULL, 'Xiaomi', NULL);

-- ----------------------------
-- Table structure for nguoi_dung
-- ----------------------------
DROP TABLE IF EXISTS `nguoi_dung`;
CREATE TABLE `nguoi_dung`  (
  `nguoi_dung_id` int NOT NULL AUTO_INCREMENT,
  `nguoi_dung_ma` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `nguoi_dung_ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `nguoi_dung_ten_dang_nhap` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `nguoi_dung_mat_khau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `nguoi_dung_quyen_han` int NULL DEFAULT 0 COMMENT '1 qtv, 0 nv',
  `nguoi_dung_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `nguoi_dung_so_dien_thoai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '',
  PRIMARY KEY (`nguoi_dung_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of nguoi_dung
-- ----------------------------
INSERT INTO `nguoi_dung` VALUES (1, 'nttoai', 'Nguyễn Tấn Toại', 'nttoai', 'e10adc3949ba59abbe56e057f20f883e', 1, 'nttoai89@gmail.com', '0985956340');

SET FOREIGN_KEY_CHECKS = 1;
