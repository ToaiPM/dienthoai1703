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

 Date: 21/03/2022 22:22:57
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
  PRIMARY KEY (`dien_thoai_id`) USING BTREE,
  INDEX `fk_dienthoai_hangsanxuat`(`hang_san_xuat_id` ASC) USING BTREE,
  CONSTRAINT `fk_dienthoai_hangsanxuat` FOREIGN KEY (`hang_san_xuat_id`) REFERENCES `hang_san_xuat` (`hang_san_xuat_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dien_thoai
-- ----------------------------
INSERT INTO `dien_thoai` VALUES (1, 2, NULL, 'Galaxy note 9', 'samsung-note9.png', 7900000, 9900000, 'Exynos 8989', '4 GB', '128 GB', '6.7 Inch', '4000 mAh', '197 g', '2021', 1, 1);
INSERT INTO `dien_thoai` VALUES (2, 2, NULL, 'Galaxy note 10', 'galaxy_note_10_4.png', 8000000, 10000000, 'Exynos 7610', '4 GB', '256 GB', '6.5 inch', '4200 mAh', '200 g', '2022', 1, 1);
INSERT INTO `dien_thoai` VALUES (3, 2, NULL, 'Galaxy note 7', 'galaxy_note_10_4.png', 6000000, 8000000, 'Exynos 7610', '4 GB', '128 GB', '5.5 Inch', '3800 mha', '210 g', '2016', 1, 1);

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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hang_san_xuat
-- ----------------------------
INSERT INTO `hang_san_xuat` VALUES (1, '', 'Apple', NULL);
INSERT INTO `hang_san_xuat` VALUES (2, NULL, 'Samsung', NULL);
INSERT INTO `hang_san_xuat` VALUES (3, NULL, 'OPPO', NULL);
INSERT INTO `hang_san_xuat` VALUES (4, NULL, 'SONY', NULL);
INSERT INTO `hang_san_xuat` VALUES (5, NULL, 'Xiaomi', NULL);

SET FOREIGN_KEY_CHECKS = 1;
