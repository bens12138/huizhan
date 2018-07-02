/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : huizhan

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 30/06/2018 18:36:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for hz_admin
-- ----------------------------
DROP TABLE IF EXISTS `hz_admin`;
CREATE TABLE `hz_admin`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '管理员名称',
  `add_time` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '添加时间，格式为时间戳',
  `edit_time` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '修改时间，格式为时间戳',
  `is_del` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '是否删除,0已删除,1未删除',
  `status` int(5) DEFAULT NULL COMMENT '管理员状态',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 56 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hz_admin
-- ----------------------------
INSERT INTO `hz_admin` VALUES (1, '张三11', '1530154973', '1530155053', '1', 1, '3cdf5666859f6906c283a1058cd5b9a7');
INSERT INTO `hz_admin` VALUES (2, '李四123', '1111112', '1530154998', '1', 0, 'b0baee9d279d34fa1dfd71aadb908c3f');
INSERT INTO `hz_admin` VALUES (3, '测试', '1530154964', '1530238951', '1', 0, '7363a0d0604902af7b70b271a0b96480');
INSERT INTO `hz_admin` VALUES (4, '1231', '1530152560', '1530171245', '0', 0, 'd9b1d7db4cd6e70935368a1efb10e377');
INSERT INTO `hz_admin` VALUES (5, '123', '1530152738', '1530152797', '0', 0, 'c20ad4d76fe97759aa27a0c99bff6710');
INSERT INTO `hz_admin` VALUES (6, '请问请问', '1530152751', '1530152797', '0', 1, '68651020d582c15e3d7c5866e2baad53');
INSERT INTO `hz_admin` VALUES (7, '请问额21221', '1530152760', '1530162333', '0', 0, '02f50ac7ab29be27f1d55a7d76542915');
INSERT INTO `hz_admin` VALUES (8, '34234', '1530152766', '1530152797', '0', 0, '289dff07669d7a23de0ef88d2f7129e7');
INSERT INTO `hz_admin` VALUES (9, '234234', '1530152772', '1530152797', '0', 0, '0e9212587d373ca58e9bada0c15e6fe4');
INSERT INTO `hz_admin` VALUES (10, '234345345', '1530152779', '1530152797', '0', 0, '0e9212587d373ca58e9bada0c15e6fe4');
INSERT INTO `hz_admin` VALUES (11, '234', '1530152787', '1530152797', '0', 0, '289dff07669d7a23de0ef88d2f7129e7');
INSERT INTO `hz_admin` VALUES (12, '234', '1530152797', '1530152797', '0', 0, '289dff07669d7a23de0ef88d2f7129e7');
INSERT INTO `hz_admin` VALUES (13, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (14, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (15, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (16, '34', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (17, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (18, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (19, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (20, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (21, '23', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (22, '2', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (23, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (24, '2', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (25, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (26, '2', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (27, '23', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (28, '23', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (29, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (30, '34', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (31, '3', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (32, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (33, '4', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (34, '42', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (35, '23', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (36, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (37, '34', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (38, '23', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (39, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (40, '3', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (41, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (42, '3', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (43, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (44, '4', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (45, '2', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (46, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (47, '2', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (48, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (49, '34', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (50, '4', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (51, '3', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (52, '2', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (53, '234', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (54, '4', NULL, '1530152797', '0', 1, NULL);
INSERT INTO `hz_admin` VALUES (55, '23234', NULL, '1530152797', '0', 1, NULL);

-- ----------------------------
-- Table structure for hz_article
-- ----------------------------
DROP TABLE IF EXISTS `hz_article`;
CREATE TABLE `hz_article`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '文章标题',
  `author` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '文章作者',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '文章正文',
  `pid` int(11) DEFAULT NULL COMMENT '文章所属栏目ID',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间  格式为时间戳',
  `edit_time` int(11) DEFAULT NULL COMMENT '修改时间  格式为时间戳',
  `is_del` int(11) DEFAULT NULL COMMENT '是否删除  0 是  1 否',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hz_article
-- ----------------------------
INSERT INTO `hz_article` VALUES (1, '今天是个好日子7', '测试人员', '先这样吧7', 7, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (2, '今天是个好日子7', '测试人员', '先这样吧7', 7, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (3, '今天是个好日子8', '测试人员', '先这样吧8', 8, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (4, '今天是个好日子8', '测试人员', '先这样8', 8, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (5, '今天是个好日子8', '测试人员', '先这样吧8', 8, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (6, '今天是个好日子8', '测试人员', '先这样吧8', 8, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (7, '今天是个好日子9', '测试人员', '先这样吧9', 9, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (8, '今天是个好日子9', '测试人员', '先这样吧9', 9, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (9, '今天是个好日子', '测试人员', '先这样吧', 18, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (10, '今天是个好日子', '测试人员', '先这样吧', 18, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (11, '今天是个好日子', '测试人员', '先这样吧', 18, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (12, '今天是个好日子', '测试人员', '先这样吧', 19, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (13, '今天是个好日子', '测试人员', '先这样吧', 19, NULL, NULL, 1);
INSERT INTO `hz_article` VALUES (14, '测试文章', '测试人员1', NULL, 20, 1530348220, 1530348220, 1);
INSERT INTO `hz_article` VALUES (15, '测试文章2', '测试人员', '<p>我如果爱你</p><p>绝不学攀援的凌霄花</p><p>借你的高枝炫耀自己</p><p><br/></p><p>我如果爱你</p><p>绝不像痴情的鸟儿</p><p>为绿茵重复单调的歌曲</p><p><br/></p>', 20, 1530348382, 1530348786, 0);

-- ----------------------------
-- Table structure for hz_banner
-- ----------------------------
DROP TABLE IF EXISTS `hz_banner`;
CREATE TABLE `hz_banner`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '轮播图片标题',
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '轮播图片路径',
  `edit_time` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hz_banner
-- ----------------------------
INSERT INTO `hz_banner` VALUES (1, '1', '1', 0);
INSERT INTO `hz_banner` VALUES (2, '如果这都不算爱', '5b35fa0a1be55.PNG', 1530264074);
INSERT INTO `hz_banner` VALUES (3, '3', '3', 0);
INSERT INTO `hz_banner` VALUES (4, '4', '4', 0);
INSERT INTO `hz_banner` VALUES (5, '5', '5', 0);

-- ----------------------------
-- Table structure for hz_column
-- ----------------------------
DROP TABLE IF EXISTS `hz_column`;
CREATE TABLE `hz_column`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '首页栏目名称',
  `btitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '首页栏目别名',
  `img` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '首页栏目图片',
  `pid` int(11) DEFAULT NULL COMMENT '首页栏目父级ID',
  `add_time` int(11) DEFAULT NULL COMMENT '栏目添加时间,格式为时间戳',
  `edit_time` int(11) DEFAULT NULL COMMENT '栏目添加时间,格式为时修改',
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '栏目状态 1启用 0停用',
  `is_del` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '是否删除 0是 1否',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hz_column
-- ----------------------------
INSERT INTO `hz_column` VALUES (1, '参展指引', NULL, NULL, 0, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (2, '温馨提示', 'Reminder', NULL, 1, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (3, '参展条例', 'Exhibition regulations', '5b360d8b09c38.PNG', 1, 1530264074, 1530269067, '1', '1');
INSERT INTO `hz_column` VALUES (4, '展会排期', 'Exhibition schedule', NULL, 1, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (5, '餐饮服务', 'Food and Beverages', NULL, 1, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (6, '广告服务', NULL, NULL, 0, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (7, '展台搭建', NULL, NULL, 6, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (8, '广告氛围', NULL, NULL, 6, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (9, '展具租赁', NULL, NULL, 6, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (10, '主办方指南', NULL, NULL, 0, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (11, '场馆介绍', NULL, NULL, 10, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (12, '场馆规定', NULL, NULL, 10, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (13, '场馆服务', NULL, NULL, 10, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (14, '场馆指标信息', NULL, NULL, 10, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (15, '办展条例', NULL, 'zhubanfangzhinan/5b36df4999982.jpg', 10, 1530264074, 1530322761, '1', '1');
INSERT INTO `hz_column` VALUES (16, '周边服务', NULL, NULL, 0, 1530264074, 1530264074, '1', '1');
INSERT INTO `hz_column` VALUES (17, 'QWE', NULL, 'zhinan/5b36de390f0b5.png', 10, 1530320014, 1530322489, '0', '0');
INSERT INTO `hz_column` VALUES (18, '周边交通', NULL, NULL, 16, 1530320014, 1530323628, '1', '1');
INSERT INTO `hz_column` VALUES (19, '周边酒店', NULL, NULL, 16, 1530320014, 1530350002, '1', '1');
INSERT INTO `hz_column` VALUES (20, '展会展示', NULL, NULL, 0, NULL, NULL, NULL, NULL);
INSERT INTO `hz_column` VALUES (21, '周边酒店名称', NULL, NULL, 8, NULL, NULL, NULL, NULL);
INSERT INTO `hz_column` VALUES (22, '周边酒店名称', NULL, NULL, 9, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for hz_info
-- ----------------------------
DROP TABLE IF EXISTS `hz_info`;
CREATE TABLE `hz_info`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '网站名称',
  `tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '网站联系方式',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '网站邮箱',
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '网站地址',
  `cont` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '关于我们',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hz_info
-- ----------------------------
INSERT INTO `hz_info` VALUES (1, '内蒙古国际会展中心', '0471-6236147', '1008611@qq.com', '内蒙古自治区呼和浩特市大学东街东口', '&lt;p&gt;123123&lt;/p&gt;');

-- ----------------------------
-- Table structure for hz_nav
-- ----------------------------
DROP TABLE IF EXISTS `hz_nav`;
CREATE TABLE `hz_nav`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '导航名称',
  `add_time` int(20) DEFAULT NULL COMMENT '添加时间,时间戳',
  `edit_time` int(20) DEFAULT NULL COMMENT '修改时间,时间戳',
  `pid` int(10) DEFAULT NULL COMMENT '父级ID',
  `status` int(10) DEFAULT NULL COMMENT '状态0停用1启用',
  `is_del` int(10) DEFAULT NULL COMMENT '是否删除,0已删除,1未删除',
  `sort` int(10) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 48 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hz_nav
-- ----------------------------
INSERT INTO `hz_nav` VALUES (1, '关于我们', 1530152797, 1530152797, 0, 1, 1, 1);
INSERT INTO `hz_nav` VALUES (2, '展馆介绍', 1530152797, 1530152797, 0, 1, 1, 2);
INSERT INTO `hz_nav` VALUES (3, '新闻讯息', 1530152797, 1530152797, 0, 1, 1, 3);
INSERT INTO `hz_nav` VALUES (4, '公司党建', 1530152797, 1530152797, 0, 1, 1, 4);
INSERT INTO `hz_nav` VALUES (5, '办展资料', 1530152797, 1530152797, 0, 1, 1, 5);
INSERT INTO `hz_nav` VALUES (6, '展会服务', 1530152797, 1530152797, 0, 1, 1, 6);
INSERT INTO `hz_nav` VALUES (7, '联系我们', 1530152797, 1530152797, 0, 1, 1, 7);
INSERT INTO `hz_nav` VALUES (8, '公司介绍', 1530152797, 1530152797, 1, 1, 1, 1);
INSERT INTO `hz_nav` VALUES (9, '企业文化', 1530152797, 1530152797, 1, 1, 1, 1);
INSERT INTO `hz_nav` VALUES (10, '组织架构', 1530152797, 1530152797, 1, 1, 1, 1);
INSERT INTO `hz_nav` VALUES (11, '企业荣誉', 1530152797, 1530152797, 1, 1, 1, 1);
INSERT INTO `hz_nav` VALUES (12, '安全专栏', 1530152797, 1530152797, 1, 1, 1, 1);
INSERT INTO `hz_nav` VALUES (13, '展馆概况', 1530152797, 1530152797, 2, 1, 1, 2);
INSERT INTO `hz_nav` VALUES (14, '地理优势', 1530152797, 1530152797, 2, 1, 1, 2);
INSERT INTO `hz_nav` VALUES (15, '展览场地', 1530152797, 1530152797, 2, 1, 1, 2);
INSERT INTO `hz_nav` VALUES (16, '展馆广告', 1530152797, 1530152797, 2, 1, 1, 2);
INSERT INTO `hz_nav` VALUES (17, '停车场', 1530152797, 1530152797, 2, 1, 1, 2);
INSERT INTO `hz_nav` VALUES (18, '展会排期', 1530152797, 1530152797, 3, 1, 1, 3);
INSERT INTO `hz_nav` VALUES (19, '展会新闻', 1530152797, 1530152797, 3, 1, 1, 3);
INSERT INTO `hz_nav` VALUES (20, '会议报道', 1530152797, 1530152797, 3, 1, 1, 3);
INSERT INTO `hz_nav` VALUES (21, '党建动态', 1530152797, 1530152797, 4, 1, 1, 4);
INSERT INTO `hz_nav` VALUES (22, '支部园地', 1530152797, 1530152797, 4, 1, 1, 4);
INSERT INTO `hz_nav` VALUES (23, '办展条例', 1530152797, 1530152797, 5, 1, 1, 5);
INSERT INTO `hz_nav` VALUES (24, '参展条例', 1530152797, 1530152797, 5, 1, 1, 5);
INSERT INTO `hz_nav` VALUES (25, '广告范围规范', 1530152797, 1530152797, 5, 1, 1, 5);
INSERT INTO `hz_nav` VALUES (26, '场馆示意图', 1530152797, 1530152797, 5, 1, 1, 5);
INSERT INTO `hz_nav` VALUES (27, '展馆图库', 1530152797, 1530152797, 5, 1, 1, 5);
INSERT INTO `hz_nav` VALUES (28, '精彩瞬间', 1530152797, 1530152797, 5, 1, 1, 5);
INSERT INTO `hz_nav` VALUES (29, '展馆运营', 1530152797, 1530152797, 6, 1, 1, 6);
INSERT INTO `hz_nav` VALUES (30, '综合配套设置', 1530152797, 1530152797, 6, 1, 1, 6);
INSERT INTO `hz_nav` VALUES (31, '展览咨询', 1530152797, 1530152797, 6, 1, 1, 6);
INSERT INTO `hz_nav` VALUES (32, '展台搭建', 1530152797, 1530152797, 6, 1, 1, 6);
INSERT INTO `hz_nav` VALUES (33, '展会广告', 1530152797, 1530152797, 6, 1, 1, 6);
INSERT INTO `hz_nav` VALUES (34, '活动策划', 1530152797, 1530152797, 6, 1, 1, 6);
INSERT INTO `hz_nav` VALUES (35, '展具租凭', 1530152797, 1530152797, 6, 1, 1, 6);
INSERT INTO `hz_nav` VALUES (36, '安保运营', 1530152797, 1530152797, 6, 1, 1, 6);
INSERT INTO `hz_nav` VALUES (37, '周边酒店', 1530152797, 1530152797, 6, 1, 1, 6);
INSERT INTO `hz_nav` VALUES (38, '物业运营', 1530152797, 1530152797, 6, 1, 1, 6);
INSERT INTO `hz_nav` VALUES (39, '咨询电话', 1530152797, 1530152797, 7, 1, 1, 7);
INSERT INTO `hz_nav` VALUES (40, '意见与建议', 1530152797, 1530152797, 7, 1, 1, 7);
INSERT INTO `hz_nav` VALUES (47, '123', 1530320059, 1530320059, 1, 1, 0, NULL);

SET FOREIGN_KEY_CHECKS = 1;
