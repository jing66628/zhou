/*
MySQL Data Transfer
Source Host: localhost
Source Database: zhou
Target Host: localhost
Target Database: zhou
Date: 2019/12/6 15:24:51
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for zz_admin
-- ----------------------------
CREATE TABLE `zz_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login_time` int(50) NOT NULL,
  `login_ip` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_roleid` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `add_time` int(50) NOT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1:启用,2:停用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for zz_article
-- ----------------------------
CREATE TABLE `zz_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `update_time` int(50) NOT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '2' COMMENT '1:发布，2:下架',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for zz_auth
-- ----------------------------
CREATE TABLE `zz_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pid` int(10) NOT NULL,
  `auth_m` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_c` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_f` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ids_path` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for zz_order
-- ----------------------------
CREATE TABLE `zz_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '订单号',
  `paly_date` date NOT NULL COMMENT '游玩日期',
  `tickets_num` int(10) NOT NULL COMMENT '门票数量',
  `tickets_unit` int(10) NOT NULL COMMENT '门票单价',
  `user_name` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '订单姓名',
  `user_phone` varchar(30) NOT NULL COMMENT '用户手机号',
  `user_iacard` varchar(40) NOT NULL COMMENT '用户身份证号',
  `user_note` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '备注',
  `tickets_total` int(20) unsigned zerofill NOT NULL COMMENT '订单总价',
  `order_user` varchar(50) NOT NULL,
  `create_time` int(50) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for zz_product
-- ----------------------------
CREATE TABLE `zz_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_describe` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(10) NOT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '2' COMMENT '1:发布,2:下架',
  `product_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `update_time` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for zz_role
-- ----------------------------
CREATE TABLE `zz_role` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for zz_role_auth
-- ----------------------------
CREATE TABLE `zz_role_auth` (
  `role_id` int(10) NOT NULL COMMENT '角色id',
  `auth_id` int(10) NOT NULL COMMENT '权限id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for zz_user
-- ----------------------------
CREATE TABLE `zz_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '用户名',
  `user_password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '密码',
  `user_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '箱邮',
  `create_time` int(50) NOT NULL COMMENT '创建时间',
  `status` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1：启用 2停用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `zz_admin` VALUES ('1', 'admin', '8cc6fd5310fd2fe94ecbca1704faa21b', '1575617010', '127.0.0.1', '1', '1575616998', '1');
INSERT INTO `zz_auth` VALUES ('101', '资讯管理', '0', '', '', '', '101', '1575530927');
INSERT INTO `zz_auth` VALUES ('102', '新闻管理', '101', 'admin', 'Article', 'lst', '101,102', '1575530947');
INSERT INTO `zz_auth` VALUES ('103', '增加资讯', '102', 'admin', 'Article', 'add', '101,102,103', '1575530978');
INSERT INTO `zz_auth` VALUES ('104', '修改资讯', '102', 'admin', 'Article', 'edit', '101,102,104', '1575531002');
INSERT INTO `zz_auth` VALUES ('105', '删除资讯', '102', 'admin', 'Article', 'del', '101,102,105', '1575531021');
INSERT INTO `zz_auth` VALUES ('106', '发布资讯', '102', 'admin', 'Article', 'start', '101,102,106', '1575531056');
INSERT INTO `zz_auth` VALUES ('107', '下架资讯', '102', 'admin', 'Article', 'stop', '101,102,107', '1575531097');
INSERT INTO `zz_auth` VALUES ('108', '产品管理', '0', '', '', '', '108', '1575531122');
INSERT INTO `zz_auth` VALUES ('109', '门票管理', '108', 'admin', 'Product', 'lst', '108,109', '1575531249');
INSERT INTO `zz_auth` VALUES ('110', '添加产品', '109', 'admin', 'Product', 'add', '108,109,110', '1575531281');
INSERT INTO `zz_auth` VALUES ('111', '编辑产品', '109', 'admin', 'Product', 'edit', '108,109,111', '1575531316');
INSERT INTO `zz_auth` VALUES ('112', '删除产品', '109', 'admin', 'Product', 'del', '108,109,112', '1575531335');
INSERT INTO `zz_auth` VALUES ('113', '发布产品', '109', 'admin', 'Product', 'start', '108,109,113', '1575531366');
INSERT INTO `zz_auth` VALUES ('114', '下架产品', '109', 'admin', 'Product', 'stop', '108,109,114', '1575531388');
INSERT INTO `zz_auth` VALUES ('115', '订单列表', '108', 'admin', 'Order', 'lst', '108,115', '1575531551');
INSERT INTO `zz_auth` VALUES ('116', '删除订单', '115', 'admin', 'Order', 'del', '108,115,116', '1575531574');
INSERT INTO `zz_auth` VALUES ('117', '会员管理', '0', '', '', '', '117', '1575531614');
INSERT INTO `zz_auth` VALUES ('118', '会员列表', '117', 'admin', 'User', 'lst', '117,118', '1575531787');
INSERT INTO `zz_auth` VALUES ('119', '启用会员', '118', 'admin', 'User', 'start', '117,118,119', '1575535213');
INSERT INTO `zz_auth` VALUES ('120', '停用会员', '118', 'admin', 'User', 'stop', '117,118,120', '1575535231');
INSERT INTO `zz_auth` VALUES ('121', '删除会员', '118', 'admin', 'User', 'del', '117,118,121', '1575535265');
INSERT INTO `zz_auth` VALUES ('122', '管理员管理', '0', '', '', '', '122', '1575535298');
INSERT INTO `zz_auth` VALUES ('123', '角色管理', '122', 'admin', 'Role', 'lst', '122,123', '1575535365');
INSERT INTO `zz_auth` VALUES ('124', '添加角色', '123', 'admin', 'Role', 'add', '122,123,124', '1575535412');
INSERT INTO `zz_auth` VALUES ('125', '修改角色', '123', 'admin', 'Role', 'edit', '122,123,125', '1575535447');
INSERT INTO `zz_auth` VALUES ('126', '删除角色', '123', 'admin', 'Role', 'del', '122,123,126', '1575535464');
INSERT INTO `zz_auth` VALUES ('127', '权限管理', '122', 'admin', 'Auth', 'lst', '122,127', '1575535500');
INSERT INTO `zz_auth` VALUES ('128', '添加权限', '127', 'admin', 'Auth', 'add', '122,127,128', '1575535538');
INSERT INTO `zz_auth` VALUES ('129', '修改权限', '127', 'admin', 'Auth', 'edit', '122,127,129', '1575535574');
INSERT INTO `zz_auth` VALUES ('130', '删除权限', '127', 'admin', 'Auth', 'del', '122,127,130', '1575535587');
INSERT INTO `zz_auth` VALUES ('131', '管理员列表', '122', 'admin', 'Admin', 'lst', '122,131', '1575535628');
INSERT INTO `zz_auth` VALUES ('132', '添加管理员', '131', 'admin', 'Admin', 'add', '122,131,132', '1575535649');
INSERT INTO `zz_auth` VALUES ('133', '修改管理员', '131', 'admin', 'Admin', 'edit', '122,131,133', '1575535670');
INSERT INTO `zz_auth` VALUES ('134', '删除管理员', '131', 'admin', 'Admin', 'del', '122,131,134', '1575535690');
INSERT INTO `zz_auth` VALUES ('135', '启用管理员', '131', 'admin', 'Admin', 'start', '122,131,135', '1575535707');
INSERT INTO `zz_auth` VALUES ('136', '停用管理员', '131', 'admin', 'Admin', 'stop', '122,131,136', '1575535730');
INSERT INTO `zz_role` VALUES ('1', '超级管理员', '1575616964');
INSERT INTO `zz_role` VALUES ('2', '经理', '1575616971');
INSERT INTO `zz_role` VALUES ('3', '员工', '1575616981');
INSERT INTO `zz_role_auth` VALUES ('1', '101');
INSERT INTO `zz_role_auth` VALUES ('1', '102');
INSERT INTO `zz_role_auth` VALUES ('1', '103');
INSERT INTO `zz_role_auth` VALUES ('1', '104');
INSERT INTO `zz_role_auth` VALUES ('1', '105');
INSERT INTO `zz_role_auth` VALUES ('1', '106');
INSERT INTO `zz_role_auth` VALUES ('1', '107');
INSERT INTO `zz_role_auth` VALUES ('1', '108');
INSERT INTO `zz_role_auth` VALUES ('1', '109');
INSERT INTO `zz_role_auth` VALUES ('1', '110');
INSERT INTO `zz_role_auth` VALUES ('1', '111');
INSERT INTO `zz_role_auth` VALUES ('1', '112');
INSERT INTO `zz_role_auth` VALUES ('1', '113');
INSERT INTO `zz_role_auth` VALUES ('1', '114');
INSERT INTO `zz_role_auth` VALUES ('1', '115');
INSERT INTO `zz_role_auth` VALUES ('1', '116');
INSERT INTO `zz_role_auth` VALUES ('1', '117');
INSERT INTO `zz_role_auth` VALUES ('1', '118');
INSERT INTO `zz_role_auth` VALUES ('1', '119');
INSERT INTO `zz_role_auth` VALUES ('1', '120');
INSERT INTO `zz_role_auth` VALUES ('1', '121');
INSERT INTO `zz_role_auth` VALUES ('1', '122');
INSERT INTO `zz_role_auth` VALUES ('1', '123');
INSERT INTO `zz_role_auth` VALUES ('1', '124');
INSERT INTO `zz_role_auth` VALUES ('1', '125');
INSERT INTO `zz_role_auth` VALUES ('1', '126');
INSERT INTO `zz_role_auth` VALUES ('1', '127');
INSERT INTO `zz_role_auth` VALUES ('1', '128');
INSERT INTO `zz_role_auth` VALUES ('1', '129');
INSERT INTO `zz_role_auth` VALUES ('1', '130');
INSERT INTO `zz_role_auth` VALUES ('1', '131');
INSERT INTO `zz_role_auth` VALUES ('1', '132');
INSERT INTO `zz_role_auth` VALUES ('1', '133');
INSERT INTO `zz_role_auth` VALUES ('1', '134');
INSERT INTO `zz_role_auth` VALUES ('1', '135');
INSERT INTO `zz_role_auth` VALUES ('1', '136');
INSERT INTO `zz_role_auth` VALUES ('2', '101');
INSERT INTO `zz_role_auth` VALUES ('2', '102');
INSERT INTO `zz_role_auth` VALUES ('2', '103');
INSERT INTO `zz_role_auth` VALUES ('2', '104');
INSERT INTO `zz_role_auth` VALUES ('2', '105');
INSERT INTO `zz_role_auth` VALUES ('2', '106');
INSERT INTO `zz_role_auth` VALUES ('2', '107');
INSERT INTO `zz_role_auth` VALUES ('2', '108');
INSERT INTO `zz_role_auth` VALUES ('2', '109');
INSERT INTO `zz_role_auth` VALUES ('2', '110');
INSERT INTO `zz_role_auth` VALUES ('2', '111');
INSERT INTO `zz_role_auth` VALUES ('2', '112');
INSERT INTO `zz_role_auth` VALUES ('2', '113');
INSERT INTO `zz_role_auth` VALUES ('2', '114');
INSERT INTO `zz_role_auth` VALUES ('2', '115');
INSERT INTO `zz_role_auth` VALUES ('2', '116');
INSERT INTO `zz_role_auth` VALUES ('2', '117');
INSERT INTO `zz_role_auth` VALUES ('2', '118');
INSERT INTO `zz_role_auth` VALUES ('2', '119');
INSERT INTO `zz_role_auth` VALUES ('2', '120');
INSERT INTO `zz_role_auth` VALUES ('2', '121');
INSERT INTO `zz_role_auth` VALUES ('3', '108');
INSERT INTO `zz_role_auth` VALUES ('3', '115');
INSERT INTO `zz_role_auth` VALUES ('3', '116');
INSERT INTO `zz_role_auth` VALUES ('3', '117');
INSERT INTO `zz_role_auth` VALUES ('3', '118');
INSERT INTO `zz_role_auth` VALUES ('3', '119');
INSERT INTO `zz_role_auth` VALUES ('3', '120');
INSERT INTO `zz_role_auth` VALUES ('3', '121');
