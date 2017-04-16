/*
Navicat MySQL Data Transfer

Source Server         : Live
Source Server Version : 50540
Source Host           : iphone.cljfmqitxhho.us-east-1.rds.amazonaws.com:3306
Source Database       : americacpn_demo

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2014-12-26 08:41:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `nc_affiliate`
-- ----------------------------
DROP TABLE IF EXISTS `nc_affiliate`;
CREATE TABLE `nc_affiliate` (
  `affiliate_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `domain_id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `affiliate_fname` varchar(100) NOT NULL,
  `affiliate_lname` varchar(100) NOT NULL,
  `affiliate_email` varchar(100) NOT NULL,
  `affiliate_business` varchar(200) NOT NULL,
  `affiliate_primary_contact` varchar(20) NOT NULL,
  `affiliate_secondary_contact` varchar(20) NOT NULL,
  `affiliate_registered_date` varchar(50) NOT NULL,
  `affiliate_verification` varchar(32) NOT NULL,
  `affiliate_status` enum('N','Y') NOT NULL,
  `affiliate_payment_status` enum('N','Y') NOT NULL,
  `affiliate_partner_type` enum('referrer','branch') NOT NULL DEFAULT 'referrer',
  `affiliate_paypal_account` varchar(50) NOT NULL,
  `affiliate_client_reg_charge` int(4) NOT NULL,
  PRIMARY KEY (`affiliate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_affiliate
-- ----------------------------
INSERT INTO `nc_affiliate` VALUES ('1', '0', '0', '0', 'Rajesh', 'Maharjan', 'Rajesh.mjn@hotmail.com', 'Business', '22222222', '44444444', '2014-11-28 10:11:14', '', 'N', 'Y', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('2', '0', '0', '0', 'Test', 'Testt', 'Test@test.com', 'Testtest', '1212', '1212121', '2014-11-28 10:19:26', '', 'N', 'Y', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('3', '0', '0', '0', 'Rajesh', 'Dsfsdf', 'Rajesh.mjn@hotmail.com', 'Asdfasdf', '123123', '123123', '2014-11-28 10:22:22', '', 'N', 'Y', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('4', '0', '0', '0', 'Rasdfasdf', 'Asdfasf', 'Asdfas@asdfadf.com', 'Asdfasdfasf', 'Asdfasdf', 'Asdfasdf', '2014-11-28 10:28:53', '', 'N', 'Y', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('5', '0', '0', '0', 'Rasdfs', 'Lkasjdfljasdlf', 'Rajesh.mjn@hotmail.com', 'Test', '1212121212', '2132323232', '2014-11-30 07:46:04', '', 'N', 'Y', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('6', '0', '0', '0', 'Est', 'Test', 'Rajesh.mjn@hotmail.com', 'Asdfsa', '1212', '12121', '2014-11-30 08:15:14', 'e4a256c5b12184b7fcb0ad9cb66d2f0b', 'N', 'Y', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('7', '39', '6', '0', 'Rsdfas', 'Asdfasdf', 'Rajesh.mjn@hotmail.com', 'Asdfas', '2134324', '234234', '2014-12-01 07:25:08', '0hLqRUWs8ohEhB0X', 'Y', 'N', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('8', '0', '0', '0', 'Gelu', 'Sherpa', 'rajesh.mjn@hotmail.com', 'test', '45445454', '54545', '2014-12-04 09:32:25', 'OgWQTdWr535l75ig', 'N', 'N', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('9', '12', '7', '0', 'Rajesh', 'Maharjan', 'rajesh.mjn@hotmail.com', 'Tej', '22222222', '111111111', '2014-12-05 13:58:50', 'o3kqSqZnLbjNvzza', 'Y', 'N', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('10', '13', '8', '0', 'Tej', 'Tch', 'rajesh.mjn@hotmail.com', 'TEJTECH', '11111111', '2222222', '2014-12-07 23:52:55', 'PhK542tBLARf4fd1', 'Y', 'N', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('11', '0', '0', '0', 'Test', 'Testlast', 'rajesh.mjn@hotmail.com', 'business', '1232112312', '123123123', '2014-12-09 14:48:23', 'c9A6kLsKTynDHFrn', 'N', 'N', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('12', '0', '0', '0', 'Rechard', 'Smith', 'rajesh.mjn@hotmail.com', 'RS business', '2222222', '4444444', '2014-12-09 16:47:00', 'aNMd0qY3zl2QqpFe', 'N', 'N', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('13', '0', '0', '0', 'Test', 'Test', 'rajesh.mjn@hotmail.com', 'testtest', '3434', '23423421', '2014-12-09 16:48:17', 'rqXDGxTnIFlBObJ3', 'N', 'N', 'branch', '', '0');
INSERT INTO `nc_affiliate` VALUES ('14', '14', '0', '0', 'Rojer', 'Testsetset', 'rajesh.mjn@hotmail.com', 'RRRRRRRR', '2323', '4545', '2014-12-10 14:04:44', '3MMKg2wjXNZY0LFE', 'Y', 'Y', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('15', '15', '9', '0', 'Rajeshraj', 'Maharjanananan', 'rajesh.mjn@hotmail.com', 'businessn', '232323', '2234234', '2014-12-10 14:35:22', 'wUeXgBichkPR4ddn', 'Y', 'N', 'branch', '', '0');
INSERT INTO `nc_affiliate` VALUES ('16', '0', '0', '0', 'Rajesh', 'Rajesh', 'rajesh.mjn@hotmail.com', 'asdfasdf ', '9879798', '987987', '2014-12-22 11:41:00', 'XAu2rwAjbRVyloEV', 'N', 'N', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('17', '35', '0', '0', 'Richard', 'Parker', 'cyberneticcs6@yahoo.com', 'richardson corporation', '012568954', '215032604', '2014-12-24 12:29:12', '', 'Y', 'Y', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('18', '36', '0', '0', 'Praker', 'Edward', 'cyberneticcs10@yahoo.com', 'Parkar.co', '10245036', '01596357', '2014-12-24 13:58:34', '', 'Y', 'Y', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('19', '37', '0', '0', 'Mike', 'Miller', 'cyberneticcs11@yahoo.com', 'mike.co', '4518976', '125487963', '2014-12-24 14:02:29', '', 'Y', 'N', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('20', '39', '0', '0', 'Omega', 'Omega', 'cyberneticcs13@yahoo.com', 'omega.co', '12036548', '5412005655', '2014-12-25 11:52:06', '', 'Y', 'N', 'referrer', '', '0');
INSERT INTO `nc_affiliate` VALUES ('21', '40', '0', '0', 'Asdfasdf', 'Ljl', 'cyberneticcs14@yahoo.com', 'asdfg asdf', '234234', '234234', '2014-12-25 13:22:30', '', 'Y', 'Y', 'referrer', 'pradhan10@yahoo.com', '20');
INSERT INTO `nc_affiliate` VALUES ('23', '42', '0', '0', 'Omega1', 'Omega', 'cyberneticcs15@yahoo.com', 'omeg1.co', '0125698', '78512035', '2014-12-25 13:55:36', '', 'Y', 'Y', 'referrer', 'pradhan10@yahoo.com', '15');

-- ----------------------------
-- Table structure for `nc_affiliate_detail`
-- ----------------------------
DROP TABLE IF EXISTS `nc_affiliate_detail`;
CREATE TABLE `nc_affiliate_detail` (
  `affiliate_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `affiliate_id` int(11) NOT NULL,
  `affiliate_detail_gender` varchar(20) NOT NULL,
  `affiliate_detail_city` varchar(100) NOT NULL,
  `affiliate_detail_state` varchar(100) NOT NULL,
  `affiliate_detail_zip` int(20) NOT NULL,
  `affiliate_detail_address` text NOT NULL,
  `affiliate_detail_ssn` varchar(20) NOT NULL,
  `affiliate_detail_dob` varchar(20) NOT NULL,
  `affiliate_detail_date` varchar(20) NOT NULL,
  PRIMARY KEY (`affiliate_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_affiliate_detail
-- ----------------------------
INSERT INTO `nc_affiliate_detail` VALUES ('1', '7', 'male', 'asdfasdf', 'Alaska', '1234', 'asdfa sdf asdfasdf', '444-44-4444', '02-02-2000', '2014-12-04 08:07:34');
INSERT INTO `nc_affiliate_detail` VALUES ('2', '9', 'male', 'kathmandu', 'Alaska', '77', 'lalitpur, Nepal', '777-77-7777', '02-02-2000', '2014-12-05 14:01:17');
INSERT INTO `nc_affiliate_detail` VALUES ('3', '10', 'male', 'asdf', 'Arkansas', '2323', 'asdf asdf', '222-66-5555', '02-02-2000', '2014-12-07 23:57:17');
INSERT INTO `nc_affiliate_detail` VALUES ('4', '14', 'male', 'asdf asdf', 'Florida', '1341234', 'asd asd fasdf', '222-55-4444', '01-02-1988', '2014-12-10 14:08:56');
INSERT INTO `nc_affiliate_detail` VALUES ('5', '15', 'male', 'asdf asdf', 'Alabama', '123213', 'adfasdf', '222-55-4444', '01-02-1988', '2014-12-10 14:49:33');
INSERT INTO `nc_affiliate_detail` VALUES ('6', '17', 'Male', 'katmandu', 'kathmandu', '977', 'natole', '012564', '24-12-1990', '2014-12-24 12:29:12');
INSERT INTO `nc_affiliate_detail` VALUES ('7', '18', 'Male', 'kathmandu', 'kathmandu', '977', 'natole lalaitpur', '154785', '12-12-1992', '2014-12-24 13:58:34');
INSERT INTO `nc_affiliate_detail` VALUES ('8', '19', 'Male', 'lalitpur', 'lalaipur', '977', 'lalitpur', '7895246', '11-12-1980', '2014-12-24 14:02:29');
INSERT INTO `nc_affiliate_detail` VALUES ('9', '20', 'Female', 'bhaktapur', 'bhaktapur', '545', 'bhaktapur', '125698', '12-12-1980', '2014-12-25 11:52:06');
INSERT INTO `nc_affiliate_detail` VALUES ('10', '21', 'Female', 'asdfasdf', 'asfasdfasd', '34234324', 'asdfa dfas df', '141234', '23423423', '2014-12-25 13:22:30');
INSERT INTO `nc_affiliate_detail` VALUES ('11', '23', 'Female', 'asdfasf', 'jkajsdljf', '21415', 'adfasd', '265', '15654', '2014-12-25 13:55:36');

-- ----------------------------
-- Table structure for `nc_album`
-- ----------------------------
DROP TABLE IF EXISTS `nc_album`;
CREATE TABLE `nc_album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_title` varchar(100) NOT NULL,
  `album_descript` text NOT NULL,
  `album_status` enum('Active','Inactive') NOT NULL,
  `album_date` varchar(20) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_album
-- ----------------------------
INSERT INTO `nc_album` VALUES ('1', 'Sudina Profile Picture', '<p>Sudina Profile Picture for facebook.</p>', 'Active', '2014-06-04 07:39:55');

-- ----------------------------
-- Table structure for `nc_auth_master`
-- ----------------------------
DROP TABLE IF EXISTS `nc_auth_master`;
CREATE TABLE `nc_auth_master` (
  `auth_id` bigint(11) NOT NULL,
  `auth_name` varchar(250) NOT NULL,
  `auth_label` varchar(250) NOT NULL,
  `status` enum('Publish','Unpublish') NOT NULL,
  `module` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_auth_master
-- ----------------------------
INSERT INTO `nc_auth_master` VALUES ('1', 'user_update', 'Update User', 'Publish', 'User');
INSERT INTO `nc_auth_master` VALUES ('2', 'user_add', 'Add User', 'Publish', 'User');
INSERT INTO `nc_auth_master` VALUES ('3', 'user_view', 'List User', 'Publish', 'User');
INSERT INTO `nc_auth_master` VALUES ('4', 'gallery_update', 'Update Gallery', 'Publish', 'Gallery');
INSERT INTO `nc_auth_master` VALUES ('5', 'gallery_add', 'Add Gallery', 'Publish', 'Gallery');
INSERT INTO `nc_auth_master` VALUES ('6', 'gallery_view', 'List Gallery', 'Publish', 'Gallery');
INSERT INTO `nc_auth_master` VALUES ('7', 'album_update', 'Update Album', 'Publish', 'Album');
INSERT INTO `nc_auth_master` VALUES ('8', 'album_add', 'Add Album', 'Publish', 'Album');
INSERT INTO `nc_auth_master` VALUES ('9', 'album_view', 'List Album', 'Publish', 'Album');
INSERT INTO `nc_auth_master` VALUES ('10', 'news_update', 'Update News', 'Publish', 'News');
INSERT INTO `nc_auth_master` VALUES ('12', 'news_view', 'List News', 'Publish', 'News');
INSERT INTO `nc_auth_master` VALUES ('11', 'news_add', 'Add News', 'Publish', 'News');
INSERT INTO `nc_auth_master` VALUES ('13', 'banner_update', 'Update Banner', 'Publish', 'Banner');
INSERT INTO `nc_auth_master` VALUES ('14', 'banner_view', 'List Banner', 'Publish', 'Banner');
INSERT INTO `nc_auth_master` VALUES ('15', 'banner_add', 'Add Banner', 'Publish', 'Banner');
INSERT INTO `nc_auth_master` VALUES ('32', 'module_view', 'List Module', 'Unpublish', 'Module');
INSERT INTO `nc_auth_master` VALUES ('17', 'content_view', 'List Content', 'Publish', 'Content');
INSERT INTO `nc_auth_master` VALUES ('18', 'content_add', 'Add Content', 'Publish', 'Content');
INSERT INTO `nc_auth_master` VALUES ('19', 'content_update', 'Update Content', 'Publish', 'Content');
INSERT INTO `nc_auth_master` VALUES ('20', 'menu_view', 'List Menu', 'Publish', 'Menu');
INSERT INTO `nc_auth_master` VALUES ('39', 'change_password', 'Change Password', 'Publish', 'Self');
INSERT INTO `nc_auth_master` VALUES ('23', 'social_update', 'Update Social', 'Publish', 'Social');
INSERT INTO `nc_auth_master` VALUES ('24', 'user_delete', 'Delete User', 'Publish', 'User');
INSERT INTO `nc_auth_master` VALUES ('25', 'gallery_delete', 'Delete Gallery', 'Publish', 'Gallery');
INSERT INTO `nc_auth_master` VALUES ('26', 'album_delete', 'Delete Album', 'Publish', 'Album');
INSERT INTO `nc_auth_master` VALUES ('27', 'news_delete', 'Delete News', 'Publish', 'News');
INSERT INTO `nc_auth_master` VALUES ('28', 'banner_delete', 'Delete Banner', 'Publish', 'Banner');
INSERT INTO `nc_auth_master` VALUES ('29', 'content_delete', 'Delete Content', 'Publish', 'Content');
INSERT INTO `nc_auth_master` VALUES ('30', 'menu_delete', 'Delete Menu', 'Publish', 'Menu');
INSERT INTO `nc_auth_master` VALUES ('38', 'self_update', 'Update Profile', 'Publish', 'Self');
INSERT INTO `nc_auth_master` VALUES ('33', 'module_add', 'Add Module', 'Unpublish', 'Module');
INSERT INTO `nc_auth_master` VALUES ('34', 'module_update', 'Update Module', 'Unpublish', 'Module');
INSERT INTO `nc_auth_master` VALUES ('35', 'module_delete', 'Delete Module', 'Unpublish', 'Module');
INSERT INTO `nc_auth_master` VALUES ('36', 'menu_add', 'Add Menu', 'Publish', 'Menu');
INSERT INTO `nc_auth_master` VALUES ('37', 'menu_update', 'Update Menu', 'Publish', 'Menu');
INSERT INTO `nc_auth_master` VALUES ('47', 'menu_order', 'Update Menu Order', 'Publish', 'Menu');
INSERT INTO `nc_auth_master` VALUES ('48', 'publication_view', 'Manage Publication', 'Publish', 'Publication');
INSERT INTO `nc_auth_master` VALUES ('40', 'news_status', 'Update News Status', 'Publish', 'News');
INSERT INTO `nc_auth_master` VALUES ('41', 'news_order', 'Update News Order', 'Publish', 'News');
INSERT INTO `nc_auth_master` VALUES ('42', 'banner_status', 'Update Banner Status', 'Publish', 'Banner');
INSERT INTO `nc_auth_master` VALUES ('43', 'content_status', 'Update Content Status', 'Publish', 'Content');
INSERT INTO `nc_auth_master` VALUES ('44', 'menu_status', 'Update Menu Status', 'Publish', 'Menu');
INSERT INTO `nc_auth_master` VALUES ('45', 'social_status', 'Update Social Status', 'Publish', 'Social');
INSERT INTO `nc_auth_master` VALUES ('46', 'album_status', 'Update Album Status', 'Publish', 'Album');
INSERT INTO `nc_auth_master` VALUES ('49', 'publication_add', 'Add Publication', 'Publish', 'Publication');
INSERT INTO `nc_auth_master` VALUES ('50', 'publication_update', 'Update Publication', 'Publish', 'Publication');
INSERT INTO `nc_auth_master` VALUES ('51', 'writercategory_view', 'Manage Writer Category', 'Publish', 'Writer');
INSERT INTO `nc_auth_master` VALUES ('52', 'writercategory_add', 'Add Writer Category', 'Publish', 'Writer');
INSERT INTO `nc_auth_master` VALUES ('53', 'writercategory_delete', 'Delete Writer Category', 'Publish', 'Writer');
INSERT INTO `nc_auth_master` VALUES ('54', 'writercategory_update', 'Update Writer Category', 'Publish', 'Writer');
INSERT INTO `nc_auth_master` VALUES ('55', 'writer_view', 'Manage Team', 'Publish', 'Writer');
INSERT INTO `nc_auth_master` VALUES ('56', 'writer_add', 'Add Team', 'Publish', 'Writer');
INSERT INTO `nc_auth_master` VALUES ('57', 'writer_update', 'Update Team', 'Publish', 'Writer');
INSERT INTO `nc_auth_master` VALUES ('58', 'people_view', 'Manage People', 'Unpublish', 'Writer');
INSERT INTO `nc_auth_master` VALUES ('59', 'people_add', 'Add People', 'Unpublish', 'Writer');
INSERT INTO `nc_auth_master` VALUES ('60', 'people_update', 'Update People', 'Unpublish', 'Writer');
INSERT INTO `nc_auth_master` VALUES ('61', 'writer_delete', 'Delete Team', 'Publish', 'Writer');
INSERT INTO `nc_auth_master` VALUES ('62', 'portfoliocategory_view', 'Manage Portfolio Category', 'Publish', 'Portfolio');
INSERT INTO `nc_auth_master` VALUES ('63', 'portfoliocategory_add', 'Add Portfolio Category', 'Publish', 'Portfolio');
INSERT INTO `nc_auth_master` VALUES ('64', 'portfoliocategory_update', 'Update Portfolio Category', 'Publish', 'Portfolio');
INSERT INTO `nc_auth_master` VALUES ('65', 'portfoliocategory_delete', 'Delete Portfolio Category', 'Publish', 'Portfolio');
INSERT INTO `nc_auth_master` VALUES ('66', 'portfolio_view', 'Manage Portfolio', 'Publish', 'Portfolio');
INSERT INTO `nc_auth_master` VALUES ('67', 'portfolio_add', 'Add Portfolio', 'Publish', 'Portfolio');
INSERT INTO `nc_auth_master` VALUES ('68', 'portfolio_update', 'Update Portfolio', 'Publish', 'Portfolio');
INSERT INTO `nc_auth_master` VALUES ('69', 'portfolio_delete', 'Delete Portfolio', 'Publish', 'Portfolio');
INSERT INTO `nc_auth_master` VALUES ('70', 'module_priviledge', 'Module Priviledge', 'Publish', 'Module');
INSERT INTO `nc_auth_master` VALUES ('71', 'client_view', 'Manage Client', 'Publish', 'Client');
INSERT INTO `nc_auth_master` VALUES ('72', 'client_add', 'Add Client', 'Publish', 'Client');
INSERT INTO `nc_auth_master` VALUES ('73', 'client_update', 'Update Client', 'Publish', 'Client');
INSERT INTO `nc_auth_master` VALUES ('74', 'client_delete', 'Delete Client', 'Publish', 'Client');
INSERT INTO `nc_auth_master` VALUES ('75', 'theme_option_update', 'Update Theme Option', 'Publish', 'Theme');
INSERT INTO `nc_auth_master` VALUES ('76', 'theme_manage', 'Manage Theme', 'Publish', 'Theme');
INSERT INTO `nc_auth_master` VALUES ('77', 'request', 'Request', 'Publish', 'Request');
INSERT INTO `nc_auth_master` VALUES ('78', 'email_view', 'View Email History', 'Publish', 'Email referrer');
INSERT INTO `nc_auth_master` VALUES ('79', 'email_delete', 'Delete Email History', 'Publish', 'Email referrer');
INSERT INTO `nc_auth_master` VALUES ('80', 'client_email_view', 'View Email History', 'Publish', 'Email Client');
INSERT INTO `nc_auth_master` VALUES ('81', 'client_email_delete', 'Delete Email History', 'Publish', 'Email Client');
INSERT INTO `nc_auth_master` VALUES ('82', 'contact_update', 'Update Contact', 'Publish', 'Contact');
INSERT INTO `nc_auth_master` VALUES ('83', 'referrer_view', 'Manage referrer', 'Publish', 'referrer');
INSERT INTO `nc_auth_master` VALUES ('84', 'referrer_delete', 'Delete referrer', 'Publish', 'referrer');
INSERT INTO `nc_auth_master` VALUES ('85', 'referrer_update', 'Update referrer', 'Publish', 'referrer');
INSERT INTO `nc_auth_master` VALUES ('86', 'prospect_view', 'Manage Prospect', 'Publish', 'Prospect');
INSERT INTO `nc_auth_master` VALUES ('87', 'line_view', 'Manage Line', 'Publish', 'Line');
INSERT INTO `nc_auth_master` VALUES ('88', 'portal_view', 'Manage Portal', 'Publish', 'Portal');
INSERT INTO `nc_auth_master` VALUES ('89', 'training', 'Manage Training', 'Publish', 'Training');
INSERT INTO `nc_auth_master` VALUES ('90', 'client_building_view', 'Manage Client Building', 'Publish', 'Client_building');
INSERT INTO `nc_auth_master` VALUES ('91', 'faq_view', 'Manage FAQ', 'Publish', 'FAQ');
INSERT INTO `nc_auth_master` VALUES ('92', 'process_view', 'Manage Process', 'Publish', 'Process');

-- ----------------------------
-- Table structure for `nc_client`
-- ----------------------------
DROP TABLE IF EXISTS `nc_client`;
CREATE TABLE `nc_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `scn` varchar(50) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comments` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `payment_id` varchar(250) NOT NULL,
  `payment_status` enum('paid','unpaid') NOT NULL,
  `cpn` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_client
-- ----------------------------
INSERT INTO `nc_client` VALUES ('18', 'Niroj', 'Shakya', '', '', '', '', '', '', '', '', 'Saveniroj@gmail.com', '', '27', '11', '', 'unpaid', '78677462', '');
INSERT INTO `nc_client` VALUES ('19', 'Narendra', 'Sharma', '', '', '', '', '', '', '', '', 'Narendrakush077@gmail.com', '', '28', '1', '', 'unpaid', '36079655', '');
INSERT INTO `nc_client` VALUES ('20', 'Fjsalkdj', 'Fdjsalkf', '', '', '', '', '', '', '', '', 'Nirojshakyaimadol@hotmail.com', '', '29', '1', '', 'unpaid', '56491895', '');
INSERT INTO `nc_client` VALUES ('21', 'Klfdsjalkf', 'Fjdsalkfj', '', '', '', '', '', '', '', '', 'Gelchhiris@gmail.com', '', '30', '1', '', 'unpaid', '40426425', '');
INSERT INTO `nc_client` VALUES ('22', 'Reena', 'Shrestha', '', '', '', '', '', '', '', '', 'Reenamit01@gmail.com', '', '33', '1', '', 'unpaid', '54969889', '');
INSERT INTO `nc_client` VALUES ('23', 'Sheena', 'Stha', '', '', '', '', '', '', '', '', 'Aryanchhetri01@gmail.com', '', '34', '33', '', 'unpaid', '93568352', '');
INSERT INTO `nc_client` VALUES ('24', 'Rechard', 'Parker', '', '', '', '', '', '', '125469863', '012345678', 'Cyberneticcs3@yahoo.com', '', '0', '0', '', 'unpaid', '60857569', '');
INSERT INTO `nc_client` VALUES ('25', 'Amir', 'Khan', '145879', '12-11-1920', 'banepa', 'kathmandu', 'banepa', '+977', '102350214', '120254689', 'cyberneticcs12@yahoo.com', '', '38', '18', '', 'unpaid', '25143594', '');
INSERT INTO `nc_client` VALUES ('26', 'Rajjj', 'Rajjj', '343124', '234234', 'asdfasdfasd', 'aslkdfjlka', 'asfjaskldf', '234234', '545456465', '6456456456', 'rajesh.mjn@hotmail.com', '', '41', '21', '', 'paid', '59419798', '');
INSERT INTO `nc_client` VALUES ('27', 'Adrin', 'Pradhan', '231465', '210564654', 'vgjhgfhgfg', 'vhgfytf', 'vchgfh', '1654', '12548796', '258963458', 'adrin.pradhan@yahoo.com', '', '43', '23', '', 'unpaid', '77217589', '');

-- ----------------------------
-- Table structure for `nc_client_module_priviledge`
-- ----------------------------
DROP TABLE IF EXISTS `nc_client_module_priviledge`;
CREATE TABLE `nc_client_module_priviledge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modules` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_client_module_priviledge
-- ----------------------------
INSERT INTO `nc_client_module_priviledge` VALUES ('1', 'Client');
INSERT INTO `nc_client_module_priviledge` VALUES ('2', 'Self');

-- ----------------------------
-- Table structure for `nc_contact`
-- ----------------------------
DROP TABLE IF EXISTS `nc_contact`;
CREATE TABLE `nc_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `GOOGLE` enum('F','T') NOT NULL,
  `source` varchar(800) NOT NULL,
  `CONTACT_FORM` enum('F','T') NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `site` varchar(100) NOT NULL,
  `crtd_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_contact
-- ----------------------------
INSERT INTO `nc_contact` VALUES ('1', 'T', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24131.779243410623!2d-73.95144090000001!3d40.88345120000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f1431e1e0d17:0x9432c6bbf28318fc!2sEnglewood+Cliffs,+NJ!5e0!3m2!1sen!2s!4v1413796924855', 'T', 'contact@company.com', '120-240 Nam bibendum consectetur diam et fringilla', '', 'www.company.com', '11');

-- ----------------------------
-- Table structure for `nc_content`
-- ----------------------------
DROP TABLE IF EXISTS `nc_content`;
CREATE TABLE `nc_content` (
  `content_id` int(5) NOT NULL AUTO_INCREMENT,
  `content_title` varchar(225) NOT NULL COMMENT 'Title of content',
  `content_description` text NOT NULL COMMENT 'Details of content',
  `content_status` enum('Yes','No') NOT NULL COMMENT 'Flag to publish and unpublish',
  `crtd_by` int(11) NOT NULL COMMENT 'record created date',
  `crtd_dt` datetime NOT NULL COMMENT 'record created by',
  `updt_by` int(11) NOT NULL COMMENT 'record updated by',
  `updt_dt` datetime NOT NULL COMMENT 'record updated date',
  `updt_cnt` int(11) NOT NULL COMMENT 'record updated count',
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_content
-- ----------------------------
INSERT INTO `nc_content` VALUES ('26', 'American CPN', '<p>Groundbreaking New Program offers a second chance at good credit If you or anyone you know has bad credit you should not only read this article but take action on the information in it. Bad credit can make it difficult to get a lot of things in life (and if you have bad credit you know exactly what I mean).<br /><br />Your credit is reviewed for more than credit cards. Today your credit is checked when you apply for credit cards, car loans, a mortgage, an apartment, and even a job. You can and will be denied all of the above without a decent credit score. Imagine not being able to get a job because of your credit and not having the income to payoff the very debts that are causing your credit to decline. It has become increasingly essential to obtain and maintain a good credit rating. But what do you do if you have blemishes on your credit report?<br /><br />Due to the existing laws and policies established by the credit reporting agencies it is fairly easy for creditors to report a bad debt to put on your credit report, and difficult for you to remove negative and derogatory info from your report. The average time takes a creditor to get a bad debt reported is two weeks, while a bad debt may stay on your credit report from 2-10 years or more, if you do nothing. Even if you contact the credit reporting agencies it can still take up to 90 days to remove or update negative items (if they get removed at all). ?Even when you remove or correct negative info from your report you never fully recover the points which were lost due to the negative item. If you lose say 100 pts because of negative items removal or correction of those items will only gain back 25-40 pts, you still end up losing points.<br /><br />This system makes it very easy to spiral out of control and end up with a mountain of debt. Even if you have maintained good credit for a good amount of time a few negative items can make it almost impossible to regain that same score. Now there is hope no matter what your current credit situation is. Even those with the worst credit can benefit from getting a CPN. The Credit Profile Number (CPN) is a nine digit number separate from your social security number used for credit reporting and tracking purposes.<br /><br />You have heard a lot of people talking about this subject. Some say that there is no such thing, others say that there are but are illegal, and some inform people say that they definitely are for real. Well, let us provide a little more insight.<br /><br />Legality of CPN:<br /><br />Presently, federal law allows the ability for someone to legally use a private ID # for financial reporting purposes instead of a Social Security Number. Title 5, Section 7 of Publication Law 93-579 of Government Organization and Employees Act: (a) (1) It shall be unlawful for any Federal, State or Local Government Agency to deny any individual any right, benefit, or privilege provided by law because of such individual&rsquo;s refusal to disclose his or hers Social Security Account Number. What this means is Federal Law protects those who do not wish to disclose their personal information (SS#) except where required to do so. Disclosure of your social security number is only required when dealing with the IRS, your employer, or when applying for a federally insured mortgage. Instead of a Social Security Number, you now have the opportunity to establish a Credit Privacy Number (CPN). A Credit Privacy Number is a new 9 digit number established for financial reporting purposes.</p>', 'Yes', '1', '2014-12-25 10:41:50', '1', '2014-12-25 10:41:50', '7');
INSERT INTO `nc_content` VALUES ('27', 'Frequently Asked Questions', '<p style=\"text-align: center;\"><span style=\"font-family: arial; font-size: medium;\">The Credit Profile Number (CPN) explained.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />What is a Credit Profile Number (CPN)? <img title=\"Smile\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-smile.gif\" border=\"0\" alt=\"Smile\" />It is a nine digit number separate from your social security number used to track your credit activities and history.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"><br /></span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\">Can I use this number instead of my social security number? <img title=\"Smile\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-smile.gif\" border=\"0\" alt=\"Smile\" />No, the Credit Profile Number (CPN) does not replace your SS number; this number can only be used for credit reporting purposes. It cannot and should not be used for any government purposes including and not limited to: military, DSS income, SSI, taxes; FHA, VA, or any government backed funding.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br /> What can I use my new Credit Profile Number (CPN) for? <img title=\"Smile\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-smile.gif\" border=\"0\" alt=\"Smile\" />You can use your new Credit Profile Number (CPN) for anything that would normally require you to use your SS number for credit reporting purposes. Use it to receive credit cards, car loans, a mortgage, personal loans etc.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />Am I responsible for the debts on my old report? <img title=\"Smile\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-smile.gif\" border=\"0\" alt=\"Smile\" />Yes, you are responsible for all debts on your old report and debts incurred with your Credit Profile Number (CPN). You must remember that while you are rebuilding your credit, you must use your new Credit Profile Number (CPN) wisely. If you have had troubled credit in the past don&rsquo;t repeat your mistakes.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />Is this legal? <img title=\"Laughing\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-laughing.gif\" border=\"0\" alt=\"Laughing\" />Yes. You can use the existing laws to your advantage for a change. Due to certain rights guaranteed by the 1974 US Privacy Act Title V, you have the right to keep your SS number private and not be denied service due to your refusal. The credit bureaus are not government agencies, so you do not have to give them your SS number.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />What will my new FICO be? <img title=\"Surprised\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-surprised.gif\" border=\"0\" alt=\"Surprised\" />Your credit profile will be blank. You will need to reestablish your credit, by applying for credit cards and other lines.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />Is there another way to re-establish my credit? <img title=\"Wink\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-wink.gif\" border=\"0\" alt=\"Wink\" />Yes, we know that re-establishing credit can be a time consuming process. We can add fully paid off trade lines to boost your score. We can give you a new Credit Profile Number (CPN) with a 700+ score (excellent credit), to use as you see fit.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />Are you saying that I can use my Credit Profile Number CPN to buy investment property or get a loan to start a business? <img title=\"Money mouth\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-money-mouth.gif\" border=\"0\" alt=\"Money mouth\" />Yes. Leverage is a tool that has been used by the wealthy for generations. Now you have it to use for your purposes.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />The CPN is a nine-digit number that has the exact same genetic makeup of a Social Security Number. This is not a government issued number like an EIN or TIN. This number is NOT a new social and NOT a tax ID or EIN. It is simply an available file number at the credit bureaus that can have financial information reported. You have the right to establish this number only once, so do not abuse it. This explanation is not here to advise anyone to misrepresent your Social Security Number, as you are completely responsible for any debts you incur using your Credit Privacy Number.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />It is your legal right to keep your Social Security Number private, and use a separate number for any credit related purposes. You are only required by law to disclose your Social Security Number to the Internal Revenue Service, your employer, when registering a motor vehicle, buying a firearm, or applying and obtaining a federally-insured loan such as FHA, Sallie Mae, etc. I encourage you to use the laws to your advantage. Each credit bureau works on a different schedule.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />In addition, the CPN is used by celebrities, congress members/government workers, and witness protection reasons. For example, celebrities use it because the media can use their SS# to track what they are buying and where they are simply by tracking their credit cards. Further, in example, congress holds special privileges to the law; therefore, their privacy needs to be protected. In another example, witnesses under protection can be located if they use their true social security number for transaction. This is the reason why there is the existence of a Credit Privacy Number program.</span></p>', 'Yes', '1', '2014-12-25 12:09:23', '1', '2014-12-25 12:09:23', '8');
INSERT INTO `nc_content` VALUES ('28', 'Services', '<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Having negative mistakes on your credit report can affect your financial future for years to come. That&rsquo;s why it&rsquo;s very important to stay up date with your credit report.</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">At Once Again Credit, we understand that every person&rsquo;s credit situation is unique and depending on your credit report, we will inform you on which items we can dispute on your behalf. Some items that we helped our client&rsquo;s dispute include but are not limited to the following:</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Charge-off removal<br />Foreclosure removal<br />Repossession removal<br />Collection removal<br />Bankruptcy removal<br />Dispute Status Removal<br />Judgment Removal<br />Foreclosure Removal<br />Short Sale Removal<br />Tax Lien Removal<br />Late Payment Removal<br />Inquiry Removal<br />Update Personal Information<br />Identity Theft Removal<br />Chex Systems Removal<br />And much more</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><em>Call us now at 1-800-730-3087 to get back on track with your financial future today!</em><br /><strong>Our Credit restoration services are right for you:</strong></p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">If you need to rebuild your credit<br />If you want to purchase a home<br />If you need to save money on auto and life insurance<br />If you can&rsquo;t get approved for credit or loans<br />If you need to improve your credit score</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Whether you need to improve your credit score, or need errors removed from your credit report, Once Again Credit can help. We understand that you don&rsquo;t have the time to dispute costly errors on your credit report. That&rsquo;s why we do all the hard work for you. Simply send us your credit reports and we will take care of the rest.<br /><br /><strong>Why choose us to help you with your credit restoration needs?</strong></p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">When it comes to choosing a credit restoration service, you want an experienced team with a proven track record of success. That&rsquo;s exactly what you will receive when you let our credit restoration team take care of all your credit restoration needs. Many of our clients choose to work with us because:</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">We understand the intricate details of FCRA and FDCPA rules and how they affect you<br />We continue to educate ourselves on the new regulations and laws affecting your credit<br />We work tirelessly to help you secure a better financial future<br />We will remove inaccurate, unverifiable and incomplete information from your credit report.</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Call us now at 1-800-730-3087 to prepare for a better financial future today!<br /><br /><strong>Discover why many of our clients choose our credit restoration services.</strong></p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">At Once Again Credit, we understand that improving your credit is a step by step process. Depending on your unique situation, it can take 45 days to a few months to fix errors on your credit report. If you are serious about fixing your credit, give us a call today. Many of our clients have experienced the following after working with us, and we can help you to:</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Build and maintain a good credit score<br />Qualify for loans<br />Feel secure about your financial future</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><strong>Schedule a free consultation with one of our credit restoration specialists today!</strong></p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Whether you are improving your credit, or fixing errors on your credit report, Once Again Credit is here to help you every step of the way. We make it simple for you. Just send us your credit report (s) and we will take care of the rest.</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Call us now at 1-800-730-3087 to learn more about how our credit restoration specialists can help you improve your credit score today</p>', 'Yes', '11', '2014-08-19 15:42:56', '11', '2014-08-19 15:42:56', '0');
INSERT INTO `nc_content` VALUES ('29', 'How it Works', '<p>American CPN uses ground breaking credit strategies to empower our clients. We give our clients the tools and the resources to greatly improve their credit and their lives. Weather you own a large corporation or you are a housewife our experienced staff will guide you through business or personal credit strategies tailored to your personal financial goals. Our services don\'t stop when you place an order. As a client you are entitled to lifetime consulting. No other credit repair company offers this.<br /><br />When we obtain a CPN for you we also register your name as a small business (for additional fee) with the IRS and send you your new EIN along with your CPN. You will then receive an official letter from the IRS confirming this. All you have to do is register your name as your business by filling it as a DBA with your state. This is how the celebrities and the wealthy use CPN\'s to protect their privacy. This is the only legal way to have a CPN. Don&rsquo;t be fooled by people and companies on the internet selling CPN\'S for little or nothing. You get what you pay for and you might get more than what you bargained for. Do it the right way.<br /><br />Call us today to legally set up your new CPN.</p>', 'Yes', '1', '2014-12-25 10:40:30', '1', '2014-12-25 10:40:30', '4');
INSERT INTO `nc_content` VALUES ('30', 'Business Opportunity', '<p><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">For years, we have assisted hundreds of consumers to not only repair or delete erroneous information from their credit reports, but also to rebuild their credit, providing legal alternatives to increase their FICO scores. Credit repair is legal, it is the law!</span></p>\r\n<p><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 17px;\">Our extensive experience in the credit repair field allows us to consistently increase our knowledge about credit repair strategies. We use this knowledge to dispute issues on our Clients\' Credit Reports with a high level of success in the first attempt. Our credit repair process includes the generation of \"unique dispute letters\", revised individually, which translates into better results from the first round of disputes.</span></p>\r\n<p><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\"> Our highest level of credit repair service includes: </span></span></span></p>\r\n<ul class=\"repair_services\" style=\"float: left;\">\r\n<li style=\"list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/Images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;\"><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">Ensuring that information in their credit reports is accurate.</span></span></span></li>\r\n<li style=\"list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/Images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;\"><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">Disputing erroneous items with the credit reporting agencies.</span></span></span></li>\r\n<li style=\"list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/Images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;\"><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">Developing a spending plan to lower debt and raise credit score.</span></span></span></li>\r\n<li style=\"list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/Images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;\"><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">Providing educational material that teaches you how to maintain a healthier credit score.</span></span></span></li>\r\n<li style=\"list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/Images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;\"><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">If necessary, looking for new trade lines to increase your credit score (not included in the basic credit repair package).</span></span></span></li>\r\n<li style=\"list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/Images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;\"><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">If necessary, request a rapid re-scoring of your FICO score.</span></span></span></li>\r\n</ul>\r\n<p><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">Add Trade Lines to your Credit Report to increase your FICO Score.\r\nIf you need to increase your debt to income ratio (DTI), we can also work on \"Trade Lines\". The goal is to provide your with the credit accounts required to boost your credit score, regardless of your credit history (the price of this service is not included in our basic Credit Repair service).</span></span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'Yes', '11', '2014-08-19 16:43:24', '11', '2014-08-19 16:43:24', '3');
INSERT INTO `nc_content` VALUES ('31', 'Branch Partner', '<p><br /><br />Welcome to our Branch Parnter Program. We offer different business opportunities for anyone whom may be interested in starting their own referrer. affiliate, broker, or \"whatever name you choose to call it\" CPN Program.<br /><br /></p>', 'Yes', '1', '2014-12-25 10:41:09', '1', '2014-12-25 10:41:09', '4');
INSERT INTO `nc_content` VALUES ('32', 'Testimonials', '<p><strong><span style=\"font-size: x-small;\">Past OnceAgainCredit.com members have seen 7% of their questionable credit report negatives removed per month.</span></strong><br style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\" /><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">We understand that every credit situation is different. That is why we believe in creating a customized Game Plan specifically with your credit goals in mind. Rest assured we employ the fastest, most effective approach to credit repair ? it\'s nice to know you can expect progress every month.</span></p>', 'Yes', '11', '2014-08-19 16:39:32', '11', '2014-08-19 16:39:32', '1');
INSERT INTO `nc_content` VALUES ('33', 'Sign Up', '<p>Please sign up into our account with the following form:</p>', 'Yes', '11', '2014-08-19 16:40:15', '11', '2014-08-19 16:40:15', '0');
INSERT INTO `nc_content` VALUES ('34', 'Legal CPN', '<p>Presently, federal law allows the ability for someone to legally use a private ID # for financial reporting purposes instead of a Social Security Number. Title 5, Section 7 of Publication Law 93-579 of Government Organization and Employees Act:<br /><br />(a) (1) It shall be unlawful for any Federal, State or Local Government ?Agency to deny any individual any right, benefit, or privilege provided by ?law because of such individual\'s refusal to disclose his or her Social ?Security Account Number.<br /><br />The law states that No federal, state, or local government agency may deny you any right, privilege or benefit due to your refusal to provide your SS # for any other reason than producing money for retirement account with the Social Security Administration, the IRS and your employer today. Credit Bureaus are not legally allowed to \"require\" your Social Security Number. In our country\'s present credit reporting system a person may be assumed guilty and then must expend a great deal of time and resources to prove his or her innocence. Additionally, once a negative item is in a credit file it may remain long past the 7 year time period most people believe is used. Additionally, a misreported item can show up in a credit report multiple times.<br /><br />When it comes to credit, banking and loans, there are two things you must know. The first relates to the law pertaining to the usage of your social security number as an identification tool. The second, credit bureaus are private companies and are not affiliated with the government in any way, whatsoever. Although, the credit bureaus would like you to think otherwise.<br />What all this means is Federal Law protects those who do not wish to disclose their personal information (SS#) except when required to do so. All that to say: Instead of a Social Security Number, with the right planning, you now have the opportunity to establish a Credit Privacy Number (CPN), as it is your right to have one.<br /><br /><br />Call today to get Your Second Chance!</p>', 'Yes', '1', '2014-12-25 10:39:46', '1', '2014-12-25 10:39:46', '6');

-- ----------------------------
-- Table structure for `nc_domain`
-- ----------------------------
DROP TABLE IF EXISTS `nc_domain`;
CREATE TABLE `nc_domain` (
  `domain_id` int(11) NOT NULL AUTO_INCREMENT,
  `domain_name` varchar(50) NOT NULL,
  PRIMARY KEY (`domain_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_domain
-- ----------------------------
INSERT INTO `nc_domain` VALUES ('3', 'google.com');
INSERT INTO `nc_domain` VALUES ('4', 'google.com');
INSERT INTO `nc_domain` VALUES ('5', 'google.com');
INSERT INTO `nc_domain` VALUES ('6', 'google.com');
INSERT INTO `nc_domain` VALUES ('7', 'rajesh.cyberneticstechnology.com');
INSERT INTO `nc_domain` VALUES ('8', 'test.google.com');
INSERT INTO `nc_domain` VALUES ('9', 'rajesh.cybernetics.com');

-- ----------------------------
-- Table structure for `nc_emails`
-- ----------------------------
DROP TABLE IF EXISTS `nc_emails`;
CREATE TABLE `nc_emails` (
  `email_id` bigint(22) NOT NULL AUTO_INCREMENT,
  `email_sender_type` enum('affiliate','super-admin','admin','client','referrer') NOT NULL,
  `email_subject` varchar(200) NOT NULL,
  `email_receiver_type` enum('affiliate','client','admin','super-admin','referrer') NOT NULL,
  `email_msg` text NOT NULL,
  `email_date` date NOT NULL,
  `email_send_status` enum('Success','Failed') NOT NULL,
  `email_receiver` text NOT NULL,
  `email_sender` int(11) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_emails
-- ----------------------------

-- ----------------------------
-- Table structure for `nc_employment_details`
-- ----------------------------
DROP TABLE IF EXISTS `nc_employment_details`;
CREATE TABLE `nc_employment_details` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` enum('affiliate','referrer','client') NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_employment_details
-- ----------------------------
INSERT INTO `nc_employment_details` VALUES ('16', 'Senior Developer', 'Niroj Technologies', '5 Years', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('17', 'Senior Software Developer', 'Tej Technologies Pvt Ltd.', '2 Years', '18', 'client');
INSERT INTO `nc_employment_details` VALUES ('18', 'Developer', 'Tej Techno', '5 Yrs', '23', 'client');
INSERT INTO `nc_employment_details` VALUES ('19', 'Senior Designer', 'Tej Technology Pvet Ltd.', '1 Year', '40', 'referrer');

-- ----------------------------
-- Table structure for `nc_faq`
-- ----------------------------
DROP TABLE IF EXISTS `nc_faq`;
CREATE TABLE `nc_faq` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `faq_question` varchar(250) NOT NULL,
  `faq_answer` text NOT NULL,
  PRIMARY KEY (`faq_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_faq
-- ----------------------------
INSERT INTO `nc_faq` VALUES ('2', 'Hello', '<p>hiii</p>');
INSERT INTO `nc_faq` VALUES ('3', 'sfgsdgfsdhsh', '<p>wewewewrwrrevds</p>');
INSERT INTO `nc_faq` VALUES ('4', 'How can i login with CPN?', '<p>Sign up with the American Cpn.</p>\r\n<p>&nbsp;</p>');
INSERT INTO `nc_faq` VALUES ('5', 'How can i login with CPN?', '<p>Amecican Cpn.</p>');
INSERT INTO `nc_faq` VALUES ('6', 'thdtjydth', '<p>shytjuffn</p>');

-- ----------------------------
-- Table structure for `forum_answer`
-- ----------------------------
DROP TABLE IF EXISTS `forum_answer`;
CREATE TABLE `forum_answer` (
  `forum_ans_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `answer` text NOT NULL,
  `answerer` int(11) NOT NULL,
  `answer_date` date NOT NULL,
  `forum_id` int(11) NOT NULL,
  PRIMARY KEY (`forum_ans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of forum_answer
-- ----------------------------
INSERT INTO `forum_answer` VALUES ('3', 'fasd fsdaf sd', '11', '2014-12-25', '2');
INSERT INTO `forum_answer` VALUES ('4', '', '11', '2014-12-25', '2');
INSERT INTO `forum_answer` VALUES ('5', 'fsadfsdaf dfsdafds', '11', '2014-12-25', '2');

-- ----------------------------
-- Table structure for `forum_question`
-- ----------------------------
DROP TABLE IF EXISTS `forum_question`;
CREATE TABLE `forum_question` (
  `forum_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `questioner` int(11) NOT NULL,
  `forum_date` date NOT NULL,
  `views` int(11) NOT NULL,
  `question_detail` text NOT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of forum_question
-- ----------------------------
INSERT INTO `forum_question` VALUES ('2', 'What type of site is this?', '11', '2014-12-25', '15', 'What the hell is this site, some kind of joke or what?');

-- ----------------------------
-- Table structure for `nc_gallery`
-- ----------------------------
DROP TABLE IF EXISTS `nc_gallery`;
CREATE TABLE `nc_gallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_title` varchar(225) NOT NULL COMMENT 'Title of gallery',
  `crtd_by` int(11) NOT NULL COMMENT 'record created date',
  `crtd_dt` varchar(25) NOT NULL COMMENT 'record created by',
  `updt_by` int(11) NOT NULL COMMENT 'record updated by',
  `updt_dt` varchar(25) NOT NULL COMMENT 'record updated date',
  `gallery_path` varchar(100) NOT NULL,
  `album_id` int(11) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_gallery
-- ----------------------------

-- ----------------------------
-- Table structure for `nc_homepage_slider`
-- ----------------------------
DROP TABLE IF EXISTS `nc_homepage_slider`;
CREATE TABLE `nc_homepage_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(255) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `mimage` varchar(200) NOT NULL,
  `rimage` varchar(200) NOT NULL,
  `description` longtext,
  `slider_index` int(11) DEFAULT NULL,
  `publish` enum('yes','no') NOT NULL,
  `crtd_by` varchar(50) NOT NULL,
  `crtd_dt` date NOT NULL,
  `updt_by` varchar(50) NOT NULL,
  `updt_dt` date NOT NULL,
  `updt_cnt` int(11) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_homepage_slider
-- ----------------------------
INSERT INTO `nc_homepage_slider` VALUES ('32', null, '1ca25f4491444135c7d12f35fe6b017e.jpg', '9e77359268978ec85525fb7347da49d1.png', '2720745d2001597f0bbdd7e1f3325cb3.png', '<p>&nbsp;as fasd fasd asdf asdf asdf asdf asdf asf</p>', '4', 'yes', '1', '2014-12-19', '', '2014-12-19', '1');
INSERT INTO `nc_homepage_slider` VALUES ('30', null, '2d113aa43729462b23e4d60e51e59c00.jpg', '69795429ade83f9bdc7fd4fb8890c685.png', 'd856b58cd4a5da57c7de9ddfcc0554b4.png', '<p>testa asdf asdf asdf asdfasdf</p>\r\n<p>asdf asdfaad asdf</p>', '2', 'yes', '1', '2014-12-19', '', '2014-12-19', '5');
INSERT INTO `nc_homepage_slider` VALUES ('31', null, '5c9a93de8b181c2986962d3a4c0e20b1.jpg', 'e458b94252448412bd145187236e8949.png', 'ac6ee8db4991d77098db9cf08419a7e4.png', '<p>&nbsp;asdfasdfasdfasf&nbsp; asd fasdf asd fasdf as asdf asdf</p>', '3', 'yes', '1', '2014-12-19', '', '2014-12-19', '1');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(150) DEFAULT NULL,
  `menu_type` enum('top-menu','main-menu','footer-menu','main-menu/footer-menu','top-menu/footer-menu') DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  `menu_order` int(11) DEFAULT NULL,
  `crtd_dt` varchar(20) DEFAULT NULL,
  `crtd_by` int(11) DEFAULT NULL,
  `updt_dt` varchar(20) DEFAULT NULL,
  `updt_by` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `menu_parent` int(11) DEFAULT NULL,
  `menu_module` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('6', 'Web Developing', 'top-menu', 'Active', '5', '2014-06-06', '1', '2014-06-06', '1', '25', '4', '1');
INSERT INTO `menu` VALUES ('8', 'fsdaf', 'top-menu', 'Active', '7', '2014-06-12 09:45:41', '1', '2014-06-12 09:45:41', '1', '25', '1', '1');
INSERT INTO `menu` VALUES ('9', 'Home', 'main-menu/footer-menu', 'Active', '8', '2014-08-19 11:25:21', '11', '2014-08-19 15:15:36', '11', '26', '0', '4');
INSERT INTO `menu` VALUES ('10', 'Legal CPN', 'main-menu/footer-menu', 'Active', '9', '2014-08-19 12:47:24', '11', '2014-08-19 16:41:17', '11', '34', '0', '1');
INSERT INTO `menu` VALUES ('11', 'How it Works', 'main-menu/footer-menu', 'Active', '10', '2014-08-19 12:47:47', '11', '2014-08-19 16:34:24', '11', '29', '0', '1');
INSERT INTO `menu` VALUES ('12', 'FAQ', 'main-menu/footer-menu', 'Active', '11', '2014-08-19 12:48:05', '11', '2014-12-24 15:59:17', '11', '28', '0', '6');
INSERT INTO `menu` VALUES ('13', 'Services', 'main-menu/footer-menu', 'Active', '12', '2014-08-19 12:48:23', '11', '2014-12-24 16:00:25', '11', '28', '0', '1');
INSERT INTO `menu` VALUES ('14', 'Contact Us', 'main-menu/footer-menu', 'Active', '13', '2014-08-19 12:48:41', '11', '2014-08-19 13:54:27', '11', '25', '0', '3');
INSERT INTO `menu` VALUES ('15', 'Branch Partner', 'footer-menu', 'Active', '15', '2014-08-19 12:49:02', '11', '2014-09-05 14:46:26', '1', '31', '0', '1');
INSERT INTO `menu` VALUES ('16', 'Business Opportunity', 'footer-menu', 'Active', '16', '2014-08-19 12:49:19', '11', '2014-09-05 14:46:36', '1', '30', '0', '1');
INSERT INTO `menu` VALUES ('17', 'Testimonials', 'footer-menu', 'Active', '17', '2014-08-19 12:49:37', '11', '2014-09-10 16:26:05', '1', '32', '0', '1');
INSERT INTO `menu` VALUES ('18', 'Sign Up', 'main-menu/footer-menu', 'Inactive', '14', '2014-08-19 12:49:52', '11', '2014-09-11 15:56:40', '11', '33', '0', '5');
INSERT INTO `menu` VALUES ('19', 'Forum', 'footer-menu', 'Active', '18', '2014-12-25 16:32:37', '11', '2014-12-25 16:32:37', '11', '32', '0', '7');

-- ----------------------------
-- Table structure for `nc_module`
-- ----------------------------
DROP TABLE IF EXISTS `nc_module`;
CREATE TABLE `nc_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(100) NOT NULL,
  `module_controller` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_module
-- ----------------------------
INSERT INTO `nc_module` VALUES ('1', 'Content', 'content');
INSERT INTO `nc_module` VALUES ('3', 'Contact', 'contact');
INSERT INTO `nc_module` VALUES ('4', 'Home', 'home');
INSERT INTO `nc_module` VALUES ('5', 'Register', 'register');
INSERT INTO `nc_module` VALUES ('6', 'FAQ', 'faq');
INSERT INTO `nc_module` VALUES ('7', 'Forum', 'forum');

-- ----------------------------
-- Table structure for `nc_module_priviledge`
-- ----------------------------
DROP TABLE IF EXISTS `nc_module_priviledge`;
CREATE TABLE `nc_module_priviledge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modules` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_module_priviledge
-- ----------------------------
INSERT INTO `nc_module_priviledge` VALUES ('1', 'Client');
INSERT INTO `nc_module_priviledge` VALUES ('2', 'Content');
INSERT INTO `nc_module_priviledge` VALUES ('3', 'FAQ');
INSERT INTO `nc_module_priviledge` VALUES ('4', 'Menu');
INSERT INTO `nc_module_priviledge` VALUES ('5', 'Process');
INSERT INTO `nc_module_priviledge` VALUES ('6', 'Request');
INSERT INTO `nc_module_priviledge` VALUES ('7', 'Self');
INSERT INTO `nc_module_priviledge` VALUES ('8', 'Social');
INSERT INTO `nc_module_priviledge` VALUES ('9', 'Theme');
INSERT INTO `nc_module_priviledge` VALUES ('10', 'User');

-- ----------------------------
-- Table structure for `nc_news`
-- ----------------------------
DROP TABLE IF EXISTS `nc_news`;
CREATE TABLE `nc_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(225) NOT NULL COMMENT 'Title of news',
  `news_brief` text NOT NULL COMMENT 'Brief news',
  `news_details` text NOT NULL COMMENT 'Details of news',
  `news_date` varchar(100) NOT NULL COMMENT 'News date',
  `news_order` int(11) NOT NULL COMMENT 'listing order of news',
  `news_status` enum('Yes','No') NOT NULL COMMENT 'Flag to publish and unpublish',
  `crtd_by` int(11) NOT NULL COMMENT 'record created date',
  `crtd_dt` datetime NOT NULL COMMENT 'record created by',
  `updt_by` int(11) NOT NULL COMMENT 'record updated by',
  `updt_dt` datetime NOT NULL COMMENT 'record updated date',
  `updt_cnt` int(11) NOT NULL COMMENT 'record updated count',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_news
-- ----------------------------
INSERT INTO `nc_news` VALUES ('2', 'SLRC research programme', '<p>NCCR&nbsp; researchers went to Rolpa and Bardiya districts of Nepal from (6-19 August&nbsp; 2012) during the pretest of the of survey of SLRC research programme in Nepal&nbsp; on livelihoods, basic services and social protection.</p>', '', '2012-08-6', '3', 'Yes', '1', '2012-09-08 20:48:50', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `nc_news` VALUES ('3', 'European Conference on South Asian  Studies', '<p>Dr Bishnu&nbsp; Raj Upreti and Mr Safal Ghimire presented their papers in post-conflict&nbsp; business and peace in Nepal and India in European Conference on South Asian&nbsp; Studies in Lisbon, Portugal.</p>', '', '2012-08-01', '1', 'Yes', '1', '2012-09-08 20:49:43', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `nc_news` VALUES ('4', 'Inter Regional Training Course (IRTC)', '<p>NCCR&nbsp; organized 8 days Inter Regional Training Course (IRTC) from 1-7 July 2011 at&nbsp; Kathmandu.</p>', '', '2011-07-01', '4', 'Yes', '1', '2012-09-08 20:50:27', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `nc_news` VALUES ('5', 'SLRC inception activity', '<p>Ms Gayathri&nbsp; Lokuge from Centre for Poverty Analysis, Sri Lanka visited RCO Kathmandu from&nbsp; 19-26th April 2011 for SLRC inception activity.</p>', '', '2011-04-11', '2', 'Yes', '1', '2012-09-08 20:51:19', '0', '0000-00-00 00:00:00', '0');

-- ----------------------------
-- Table structure for `nc_payment`
-- ----------------------------
DROP TABLE IF EXISTS `nc_payment`;
CREATE TABLE `nc_payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `affiliate_id` int(11) NOT NULL,
  `payment_amount` int(4) NOT NULL,
  `payment_payer` varchar(50) NOT NULL,
  `payment_txn_id` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `payment_date` varchar(50) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_payment
-- ----------------------------
INSERT INTO `nc_payment` VALUES ('1', '14', '10', 'pradhan9@yahoo.com', '84V67753UH216563P', 'Completed', '2014-12-17 13:26:42');
INSERT INTO `nc_payment` VALUES ('2', '14', '10', 'pradhan9@yahoo.com', '00K07456HP443934B', 'Completed', '2014-12-17 13:57:41');
INSERT INTO `nc_payment` VALUES ('3', '14', '10', 'pradhan9@yahoo.com', '2F5057044A5246024', 'Completed', '2014-12-17 15:30:34');
INSERT INTO `nc_payment` VALUES ('4', '14', '10', 'pradhan9@yahoo.com', '188360666M234241A', 'Completed', '2014-12-17 15:35:10');
INSERT INTO `nc_payment` VALUES ('5', '14', '10', 'pradhan9@yahoo.com', '10T12161P1566052J', 'Completed', '2014-12-17 15:53:41');
INSERT INTO `nc_payment` VALUES ('6', '14', '10', 'pradhan9@yahoo.com', '5YX85231LU366442V', 'Completed', '2014-12-17 16:05:30');
INSERT INTO `nc_payment` VALUES ('7', '14', '10', 'pradhan9@yahoo.com', '1DU53422CW1571204', 'Completed', '2014-12-17 16:18:53');
INSERT INTO `nc_payment` VALUES ('8', '14', '10', 'pradhan9@yahoo.com', '68U821118X5454934', 'Completed', '2014-12-17 16:42:04');
INSERT INTO `nc_payment` VALUES ('9', '17', '10', 'pradhan1@yahoo.com', '6KS91121WE7163805', 'Completed', '2014-12-24 12:32:22');
INSERT INTO `nc_payment` VALUES ('10', '18', '10', 'pradhan1@yahoo.com', '2SX50835MW8219103', 'Completed', '2014-12-24 14:04:38');
INSERT INTO `nc_payment` VALUES ('11', '21', '10', 'pradhan10@yahoo.com', '8WX05653KU582290U', 'Completed', '2014-12-25 13:29:12');
INSERT INTO `nc_payment` VALUES ('12', '23', '10', 'pradhan1@yahoo.com', '8VR26398892943149', 'Completed', '2014-12-25 13:56:58');

-- ----------------------------
-- Table structure for `nc_payment_client`
-- ----------------------------
DROP TABLE IF EXISTS `nc_payment_client`;
CREATE TABLE `nc_payment_client` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `affiliate_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `payment_amount` int(4) NOT NULL,
  `payment_payer` varchar(50) NOT NULL,
  `payment_txn_id` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `payment_date` varchar(50) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_payment_client
-- ----------------------------
INSERT INTO `nc_payment_client` VALUES ('7', '21', '41', '20', 'pradhan7@yahoo.com', '3TM12206EU6204012', 'Completed', '2014-12-25 14:58:02');
INSERT INTO `nc_payment_client` VALUES ('8', '21', '41', '20', 'pradhan7@yahoo.com', '10855053AB241715C', 'Completed', '2014-12-25 15:08:50');
INSERT INTO `nc_payment_client` VALUES ('9', '21', '41', '20', 'pradhan7@yahoo.com', '2N806374UC159063D', 'Completed', '2014-12-25 15:09:52');
INSERT INTO `nc_payment_client` VALUES ('10', '21', '41', '20', 'pradhan1@yahoo.com', '7EK42135R7275660M', 'Completed', '2014-12-25 15:15:39');
INSERT INTO `nc_payment_client` VALUES ('11', '21', '26', '20', 'pradhan1@yahoo.com', '3HW80291DA9296430', 'Completed', '2014-12-25 15:31:12');

-- ----------------------------
-- Table structure for `nc_photo`
-- ----------------------------
DROP TABLE IF EXISTS `nc_photo`;
CREATE TABLE `nc_photo` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) NOT NULL,
  `photo_name` varchar(225) NOT NULL COMMENT 'Title of photo',
  `photo_caption` text NOT NULL COMMENT 'Details of photo',
  `photo_order` int(11) NOT NULL COMMENT 'listing order of photo',
  `photo_status` tinyint(1) NOT NULL COMMENT 'Flag to publish and unpublish',
  `crtd_by` int(11) NOT NULL COMMENT 'record created date',
  `crtd_dt` datetime NOT NULL COMMENT 'record created by',
  `updt_by` int(11) NOT NULL COMMENT 'record updated by',
  `updt_dt` datetime NOT NULL COMMENT 'record updated date',
  `updt_cnt` int(11) NOT NULL COMMENT 'record updated count',
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_photo
-- ----------------------------

-- ----------------------------
-- Table structure for `nc_portfolio`
-- ----------------------------
DROP TABLE IF EXISTS `nc_portfolio`;
CREATE TABLE `nc_portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `crtd_dt` varchar(25) NOT NULL,
  `crtd_by` int(11) NOT NULL,
  `updt_dt` varchar(25) NOT NULL,
  `updt_by` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_portfolio
-- ----------------------------
INSERT INTO `nc_portfolio` VALUES ('5', 'fsdafd', 'http://www.giggs.com', 'fd3cdbb7ec8191ec3d031f1a66bf7de1.jpg', '<p>fsdaf</p>', '2014-06-18 07:23:47', '1', '2014-06-18 07:27:42', '1', '1');
INSERT INTO `nc_portfolio` VALUES ('6', 'fsadf', 'http://dsaf.com', 'ddae678d3bf6510b6d904a7d69c88f55.jpg', '<p>fsdafsad</p>', '2014-06-18 09:40:33', '1', '2014-06-18 09:40:33', '1', '1');

-- ----------------------------
-- Table structure for `nc_portfolio_category`
-- ----------------------------
DROP TABLE IF EXISTS `nc_portfolio_category`;
CREATE TABLE `nc_portfolio_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_portfolio_category
-- ----------------------------
INSERT INTO `nc_portfolio_category` VALUES ('1', 'Graphics');
INSERT INTO `nc_portfolio_category` VALUES ('2', 'Websites');

-- ----------------------------
-- Table structure for `nc_process`
-- ----------------------------
DROP TABLE IF EXISTS `nc_process`;
CREATE TABLE `nc_process` (
  `process_id` int(11) NOT NULL AUTO_INCREMENT,
  `process_title` varchar(200) NOT NULL,
  `process_caption` varchar(200) NOT NULL,
  `process_description` text NOT NULL,
  PRIMARY KEY (`process_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_process
-- ----------------------------

-- ----------------------------
-- Table structure for `nc_publication`
-- ----------------------------
DROP TABLE IF EXISTS `nc_publication`;
CREATE TABLE `nc_publication` (
  `publication_id` int(5) NOT NULL AUTO_INCREMENT,
  `publication_title` varchar(100) NOT NULL COMMENT 'Title of notice',
  `publication_brief` text NOT NULL COMMENT 'Brief notice',
  `publication_details` text NOT NULL COMMENT 'Details of notice',
  `publication_date` varchar(50) NOT NULL COMMENT 'Date of notice',
  `publication_order` int(11) NOT NULL COMMENT 'listing order of notice',
  `publication_status` enum('Yes','No') NOT NULL DEFAULT 'No' COMMENT 'Flag to publish and unpublish',
  `writer_id` int(11) NOT NULL,
  `publication_category` varchar(100) NOT NULL,
  `publication_file` varchar(150) NOT NULL,
  `crtd_by` int(11) NOT NULL COMMENT 'record created date',
  `crtd_dt` datetime NOT NULL COMMENT 'record created by',
  `updt_by` int(11) NOT NULL COMMENT 'record updated by',
  `updt_dt` datetime NOT NULL COMMENT 'record updated date',
  `updt_cnt` int(11) NOT NULL COMMENT 'record updated count',
  PRIMARY KEY (`publication_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COMMENT='Table to hold the data for Notice Information';

-- ----------------------------
-- Records of nc_publication
-- ----------------------------
INSERT INTO `nc_publication` VALUES ('13', 'niroj', '<p>fsdaf</p>', '<p>fsdaf</p>', '06/03/2014', '1', 'Yes', '0', '', '91a9f45a89311e24740afde17c8b5a13.pdf', '1', '2014-06-15 09:18:33', '1', '2014-06-15 09:18:56', '1');
INSERT INTO `nc_publication` VALUES ('14', 'fsdaf', '<p>dsafsd</p>', '<p>fsdaf</p>', '06/04/2014', '2', 'No', '0', '', 'c8e79cb01f934e27b77446b42022a36a.pdf', '1', '2014-06-15 09:19:11', '0', '0000-00-00 00:00:00', '0');

-- ----------------------------
-- Table structure for `nc_referrer_module_priviledge`
-- ----------------------------
DROP TABLE IF EXISTS `nc_referrer_module_priviledge`;
CREATE TABLE `nc_referrer_module_priviledge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modules` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_referrer_module_priviledge
-- ----------------------------
INSERT INTO `nc_referrer_module_priviledge` VALUES ('1', 'Client');
INSERT INTO `nc_referrer_module_priviledge` VALUES ('2', 'Email referrer');
INSERT INTO `nc_referrer_module_priviledge` VALUES ('3', 'referrer');
INSERT INTO `nc_referrer_module_priviledge` VALUES ('4', 'Request');
INSERT INTO `nc_referrer_module_priviledge` VALUES ('5', 'Self');

-- ----------------------------
-- Table structure for `nc_request_for_signup`
-- ----------------------------
DROP TABLE IF EXISTS `nc_request_for_signup`;
CREATE TABLE `nc_request_for_signup` (
  `request_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `request_to_type` enum('referrer','client','affiliate') NOT NULL,
  `request_to_emails` longtext NOT NULL,
  `request_by` int(11) NOT NULL,
  `request_send_dt` date NOT NULL,
  `rcode` varchar(20) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_request_for_signup
-- ----------------------------
INSERT INTO `nc_request_for_signup` VALUES ('4', '', 'nirojshakya@yahoo.com', '1', '2014-12-18', 'PTOohDi8$q3lRKL');
INSERT INTO `nc_request_for_signup` VALUES ('5', '', 'nirojshakyaimadol@hotmail.com', '1', '2014-12-18', 'ELT#5P1Vl47hcNu');
INSERT INTO `nc_request_for_signup` VALUES ('6', '', 'rjshrsth@gmail.com', '1', '2014-12-18', 'Pi#p3ahQvM8oI&4');
INSERT INTO `nc_request_for_signup` VALUES ('7', '', 'rajesh.mjn@hotmail.com', '1', '2014-12-22', 'f#DFy&O3HB5G87K');
INSERT INTO `nc_request_for_signup` VALUES ('8', '', 'mjn27@gmail.com', '1', '2014-12-22', 'M*uGh0NET2JOIzZ');
INSERT INTO `nc_request_for_signup` VALUES ('9', '', 'mjn27rajesh@gmail.com', '1', '2014-12-22', '36I&HBxL2*YeAbq');
INSERT INTO `nc_request_for_signup` VALUES ('10', '', 'cyberneticcs2@yahoo.com', '1', '2014-12-24', '32WQwZMcGS0RBF*');
INSERT INTO `nc_request_for_signup` VALUES ('11', '', 'cyberneticcs3@yahoo.com', '1', '2014-12-24', 'oHb65rn4tRuXhcY');
INSERT INTO `nc_request_for_signup` VALUES ('12', '', 'cyberneticcs4@yahoo.com', '1', '2014-12-24', 'rGMlZp6FRYnTVgm');
INSERT INTO `nc_request_for_signup` VALUES ('13', '', 'cyberneticcs5@yahoo.com', '1', '2014-12-24', 'PbfNSWDIeCQEyhY');
INSERT INTO `nc_request_for_signup` VALUES ('14', 'referrer', 'cyberneticcs6@yahoo.com', '1', '2014-12-24', 'uZxT3VClmwQfE0c');
INSERT INTO `nc_request_for_signup` VALUES ('15', 'client', 'cyberneticcs7@yahoo.com', '35', '2014-12-24', 'NcjXWUh7qwTxAbe');
INSERT INTO `nc_request_for_signup` VALUES ('16', 'client', 'cyberneticcs8@yahoo.com', '35', '2014-12-24', 'RlqF8KUJPZxfNO9');
INSERT INTO `nc_request_for_signup` VALUES ('17', 'client', 'cyberneticcs9@yahoo.com', '35', '2014-12-24', 'TPs8VItRGBYSQrA');
INSERT INTO `nc_request_for_signup` VALUES ('18', 'referrer', 'cyberneticcs10@yahoo.com', '1', '2014-12-24', '4t6bZAdw0Kcvirh');
INSERT INTO `nc_request_for_signup` VALUES ('19', 'referrer', 'cyberneticcs11@yahoo.com', '1', '2014-12-24', '9MASHDsdTxUW5Gg');
INSERT INTO `nc_request_for_signup` VALUES ('20', 'client', 'cybrneticcs12@yahoo.com', '36', '2014-12-24', 'cam5dWzwZovFyBQ');
INSERT INTO `nc_request_for_signup` VALUES ('21', 'client', 'cyberneticcs12@yahoo.com', '36', '2014-12-24', 'aL8KfSQIuNRPGdB');
INSERT INTO `nc_request_for_signup` VALUES ('22', 'referrer', 'cyberneticcs13@yahoo.com', '1', '2014-12-25', 'oqMXkpfHYcBi7ht');
INSERT INTO `nc_request_for_signup` VALUES ('23', 'referrer', 'cyberneticcs14@yahoo.com', '1', '2014-12-25', 'Bqk8Gd7Wm1hH0ou');
INSERT INTO `nc_request_for_signup` VALUES ('24', 'client', 'rajesh.mjn@hotmail.com', '40', '2014-12-25', 'gMQoKEnPCqWTUkD');
INSERT INTO `nc_request_for_signup` VALUES ('25', 'referrer', 'cyberneticcs15@yahoo.com', '1', '2014-12-25', 'fF09DoCcgH6sKYJ');
INSERT INTO `nc_request_for_signup` VALUES ('26', 'client', 'adrin.client@yahoo.com', '42', '2014-12-25', 'wBo7Si0DKlZ2k6r');
INSERT INTO `nc_request_for_signup` VALUES ('27', 'client', 'adrin.pradhan@gmail.com', '42', '2014-12-25', 'DygBzQJX4ouHlwb');
INSERT INTO `nc_request_for_signup` VALUES ('28', 'client', 'adrin.pradhan@yahoo.com', '42', '2014-12-25', 'bJPkGEtmcRp4lMo');

-- ----------------------------
-- Table structure for `nc_social`
-- ----------------------------
DROP TABLE IF EXISTS `nc_social`;
CREATE TABLE `nc_social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `social_title` varchar(100) NOT NULL,
  `social_link` varchar(200) NOT NULL,
  `social_icon` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_social
-- ----------------------------
INSERT INTO `nc_social` VALUES ('1', 'facebook', 'http://www.facebook.com/nirojshakya', 'facebook.png');
INSERT INTO `nc_social` VALUES ('3', 'twitter', 'http://www.twitter.com', 'twitter.png');
INSERT INTO `nc_social` VALUES ('4', 'google-plus', 'http://www.google_plus.com', 'google_plus.png');
INSERT INTO `nc_social` VALUES ('5', 'linkedin', 'http://www.linkedin.com', 'linkedin.png');

-- ----------------------------
-- Table structure for `nc_theme`
-- ----------------------------
DROP TABLE IF EXISTS `nc_theme`;
CREATE TABLE `nc_theme` (
  `theme_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_name` varchar(100) NOT NULL,
  `theme_status` enum('Active','Inactive') NOT NULL,
  `default_theme` enum('Yes','No') NOT NULL,
  `theme_description` text NOT NULL,
  `theme_cover_image` varchar(100) NOT NULL,
  `theme_price` int(4) NOT NULL,
  PRIMARY KEY (`theme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_theme
-- ----------------------------
INSERT INTO `nc_theme` VALUES ('3', 'Default', 'Active', 'Yes', '', '3a29c112ba84a9d28dd1ddb75d4e7297.jpg', '0');

-- ----------------------------
-- Table structure for `nc_theme_option`
-- ----------------------------
DROP TABLE IF EXISTS `nc_theme_option`;
CREATE TABLE `nc_theme_option` (
  `id` bigint(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `caption` varchar(150) NOT NULL,
  `head_back_image` varchar(150) NOT NULL,
  `head_color` varchar(20) NOT NULL,
  `custom_css` text NOT NULL,
  `fav_icon` varchar(150) NOT NULL,
  `footer_color` varchar(20) NOT NULL,
  `footer_back_image` varchar(150) NOT NULL,
  `logo` varchar(150) NOT NULL,
  `crtd_by` int(11) NOT NULL,
  `featureheading1` varchar(100) NOT NULL,
  `featuredesc3` text NOT NULL,
  `featureheading2` varchar(100) NOT NULL,
  `featureheading3` varchar(100) NOT NULL,
  `featuretagline1` varchar(100) NOT NULL,
  `featuretagline2` varchar(100) NOT NULL,
  `featuretagline3` varchar(100) NOT NULL,
  `featuredesc1` text NOT NULL,
  `featuredesc2` text NOT NULL,
  `theme_video` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_theme_option
-- ----------------------------
INSERT INTO `nc_theme_option` VALUES ('1', 'American CPN', '', '', 'C7C7C7', '', '', 'C76B6B', '', '', '1', '', '', '', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(150) NOT NULL,
  `login_name` varchar(50) NOT NULL,
  `login_pwd` varchar(100) NOT NULL,
  `auth_id` varchar(500) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `cell` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` enum('yes','no') NOT NULL,
  `user_type` enum('super-admin','admin','user','affiliate','referrer','client') NOT NULL,
  `crtd_by` int(11) NOT NULL COMMENT 'record created date',
  `crtd_dt` datetime NOT NULL COMMENT 'record created by',
  `updt_by` int(11) NOT NULL COMMENT 'record updated by',
  `updt_dt` datetime NOT NULL COMMENT 'record updated date',
  `updt_cnt` int(11) NOT NULL COMMENT 'record updated count',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '72,74,71,73,29,43,19,18,17,91,36,44,30,37,20,47,92,77,38,39,45,23,75,2,3,24,1', '4345345', '345452', 'Thimi', 'nirojshakya@yahoo.com', 'yes', 'super-admin', '0', '2012-06-01 11:05:29', '11', '2014-12-24 12:52:26', '35');
INSERT INTO `user` VALUES ('12', 'Rajesh Maharjan', 'rajesh', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', '', 'yes', 'affiliate', '0', '2014-12-05 14:01:17', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('32', 'Sheena', 'Shrestha', 'abb573e9e56f0f672438d072051cc574', '72,74,73,71,43,19,18,29,47,30,44,36,20,37,39,38,45,23,75,76,3', '23234', '3244144', 'Asdd', 'reenashrestha1@hotmail.com', 'yes', 'super-admin', '1', '2014-12-22 15:44:42', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('7', 'sudina', 'sudina', '21232f297a57a5a743894a0e4a801fc3', '24,3,2,1', '', '9841563258', 'Ktm', 'mita.shah95@yahoo.com', 'yes', 'admin', '1', '2014-04-04 12:31:24', '1', '2014-06-17 09:53:29', '2');
INSERT INTO `user` VALUES ('8', 'prabha', 'prabha', '21232f297a57a5a743894a0e4a801fc3', '1,2', '', '', '', 'shahprabha94@gmail.com', 'yes', 'admin', '1', '2014-04-06 13:51:50', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('9', 'Weena shrestha', 'weena', '21232f297a57a5a743894a0e4a801fc3', '17,6,20,38,24,39,3,2,1', '', '', '', 'weenastha@gmail.com', 'yes', 'user', '1', '2014-04-10 14:38:21', '1', '2014-06-17 09:46:19', '7');
INSERT INTO `user` VALUES ('10', 'Gia shrestha', 'Gia piya', '21232f297a57a5a743894a0e4a801fc3', '2,1', '43564645657', '5675678568678678', 'Patan', 'weenastha@gmail.com', 'yes', 'admin', '1', '2014-04-10 14:45:40', '1', '2014-06-17 09:45:03', '3');
INSERT INTO `user` VALUES ('11', 'Niroj Shakya', 'shakya', '5b36eadf7755ea380d6c20ef9e03bf93', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,17,18,19,20,23,24,25,26,27,28,29,30,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92', '015202429', '9808910372', 'Patan', '', 'yes', '', '1', '2014-04-10 14:45:40', '11', '2014-06-10 10:07:09', '3');
INSERT INTO `user` VALUES ('13', 'Tej Tch', 'rajesh1', 'e360bc13bcba071f4746adbb334cd78e', '', '', '', '', '', 'yes', 'affiliate', '0', '2014-12-07 23:57:17', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('14', 'Rojer Testsetset', 'rojer', '62ba67f04906ca3459e03283c76daa75', '', '', '', '', '', 'yes', 'referrer', '0', '2014-12-10 14:08:56', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('15', 'Rajeshraj Maharjanananan', 'rajraj', 'cd995f9f61393d279849638aa34d4b4b', '', '', '', '', '', 'yes', 'affiliate', '0', '2014-12-10 14:49:33', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('27', 'Niroj Shakya', 'yrl5vdlj', '0c4ff48f1d717c2351bbfd07e282e4fc', '38,39,71,72,73,74', '', '', '', 'saveniroj@gmail.com', 'yes', 'client', '11', '2014-12-15 16:01:56', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('28', 'Narendra Sharma', '58i9kbi7', '800cef000f5e3690eb24e03bb11ff7b2', '38,39,71,72,73,74', '', '', '', 'narendrakush077@gmail.com', 'yes', 'client', '1', '2014-12-16 10:00:25', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('29', 'fjsalkdj fdjsalkf', 'bc7ifpen', '60a0ee4978c4bd253158a312e3686250', '38,39,71,72,73,74', '', '', '', 'nirojshakyaimadol@hotmail.com', 'yes', 'client', '1', '2014-12-17 15:01:06', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('30', 'klfdsjalkf fjdsalkfj', 'vwclawyb', 'fef2a0f29d54a133d1529131444cb4df', '38,39,71,72,73,74', '', '', '', 'gelchhiris@gmail.com', 'yes', 'client', '1', '2014-12-17 15:03:26', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('31', 'Reena', 'reena', 'abb573e9e56f0f672438d072051cc574', '72,74,73,71,43,19,18,17,29,47,30,44,36,20,37,77,39,38,45,23,75,76,2', '015535079', '9841076194', 'Patan', 'reenashrestha1@gmail.com', 'yes', 'user', '1', '2014-12-22 15:19:11', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('33', 'Reena Shrestha', 'lgf86dpb', '7618422fd7ac523cf6437d214e97f0ab', '38,39,71,72,73,74', '', '', '', 'reenamit01@gmail.com', 'yes', 'client', '1', '2014-12-23 14:31:02', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('34', 'Sheena Stha', 'tlfiwx9j', '5e2fc8815d60804c1f13c208aa131c64', '38,39,71,72,73,74', '', '', '', 'aryanchhetri01@gmail.com', 'yes', 'client', '33', '2014-12-23 15:20:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('35', 'Richard Parker', 'Richar', '7be5e026d8fbb211220e811834d9e6b1', '38,39,71,72,73,74,77', '012568954', '215032604', 'Natole', 'cyberneticcs6@yahoo.com', 'yes', 'referrer', '0', '2014-12-24 12:29:12', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('36', 'Praker Edward', 'Parker', '7be5e026d8fbb211220e811834d9e6b1', '38,39,71,72,73,74,77', '10245036', '01596357', 'Natole Lalaitpur', 'cyberneticcs10@yahoo.com', 'yes', 'referrer', '0', '2014-12-24 13:58:34', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('37', 'mike miller', 'mike', '7be5e026d8fbb211220e811834d9e6b1', '38,39,71,72,73,74,77', '4518976', '125487963', 'Lalitpur', 'cyberneticcs11@yahoo.com', 'yes', 'referrer', '0', '2014-12-24 14:02:29', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('38', 'amir khan', '9u4grk74', '666a66456cafa6059c5e4a1dac40633c', '38,39,71,72,73,74', '102350214', '120254689', 'banepa', 'cyberneticcs12@yahoo.com', 'yes', 'client', '0', '2014-12-24 15:00:33', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('39', 'omega omega', 'omega', '7be5e026d8fbb211220e811834d9e6b1', '38,39,71,72,73,74,77,78,79,83,84,85', '12036548', '5412005655', 'Bhaktapur', 'cyberneticcs13@yahoo.com', 'yes', 'referrer', '0', '2014-12-25 11:52:06', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('40', 'asdfasdf ljl', 'gelug', '1ab9eef330aa72d62e22fe4e9b439bb4', '38,39,71,72,73,74,77,78,79,83,84,85', '234234', '234234', 'Asdfa Dfas Df', 'cyberneticcs14@yahoo.com', 'yes', 'referrer', '0', '2014-12-25 13:22:30', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('41', 'rajjj rajjj', 'nqo2affd', '01cd1553ed3cb80cc37b10fb765bb63a', '38,39,71,72,73,74', '545456465', '6456456456', 'asdfasdfasd', 'rajesh.mjn@hotmail.com', 'yes', 'client', '0', '2014-12-25 13:33:08', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('42', 'omega1 omega', 'omega1', '7be5e026d8fbb211220e811834d9e6b1', '38,39,71,72,73,74,77,78,79,83,84,85', '0125698', '78512035', 'Adfasd', 'cyberneticcs15@yahoo.com', 'yes', 'referrer', '0', '2014-12-25 13:55:36', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `user` VALUES ('43', 'adrin pradhan', 'k921k5yo', '921828e47e3b303af12fc568845b46c3', '38,39,71,72,73,74', '12548796', '258963458', 'vgjhgfhgfg', 'adrin.pradhan@yahoo.com', 'yes', 'client', '0', '2014-12-25 14:01:19', '0', '0000-00-00 00:00:00', '0');

-- ----------------------------
-- Table structure for `nc_writer`
-- ----------------------------
DROP TABLE IF EXISTS `nc_writer`;
CREATE TABLE `nc_writer` (
  `writer_id` int(11) NOT NULL AUTO_INCREMENT,
  `writer_name` varchar(250) NOT NULL,
  `writer_post` varchar(150) NOT NULL,
  `writer_education` varchar(250) NOT NULL,
  `writer_address` varchar(250) NOT NULL,
  `writer_email` varchar(100) NOT NULL,
  `writer_phone` varchar(50) NOT NULL,
  `writer_details` text NOT NULL,
  `writer_image` varchar(250) NOT NULL,
  `crtd_by` int(11) NOT NULL COMMENT 'record created date',
  `crtd_dt` datetime NOT NULL COMMENT 'record created by',
  `updt_by` int(11) NOT NULL COMMENT 'record updated by',
  `updt_dt` datetime NOT NULL COMMENT 'record updated date',
  `updt_cnt` int(11) NOT NULL COMMENT 'record updated count',
  `writer_gender` enum('Male','Female') NOT NULL,
  `writer_category` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`writer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_writer
-- ----------------------------
INSERT INTO `nc_writer` VALUES ('25', 'Niroj Shakya', 'President', 'Bachelor in Computers', 'Imadol-6, Lalitpur', 'nirojshakya@yahoo.com', '9808910372', '<p>President for 4 consecutive years.</p>', '80ac9e101e1559e35acaeca35739b48a.jpg', '1', '2014-06-16 08:30:25', '1', '2014-06-16 08:30:25', '0', 'Male', '2', '2');
INSERT INTO `nc_writer` VALUES ('26', 'Rajesh Maharjan', 'Co-ordinator', 'Bachelor in Computers', 'Bungamati, Lalitpur', 'rajeshmjn@yahoo.com', '9808910372', '<p>Coordinator for 4 years.</p>', 'bcf1a27feb56e1c8320946137031bf4b.jpg', '1', '2014-06-16 08:33:16', '1', '2014-06-16 08:33:16', '0', 'Male', '3', '2');
INSERT INTO `nc_writer` VALUES ('27', 'Sudina Ranjit', 'Secretary', 'Bachelor in Computers', 'Sallaghari, Bhaktapur', 'sudinaranjit@yahoo.com', '9808910372', '<p>Secretary for first time.</p>', 'f2041a729dd49387837338519ddb5167.jpg', '1', '2014-06-16 08:46:34', '1', '2014-06-16 08:46:34', '0', 'Female', '2', '1');
INSERT INTO `nc_writer` VALUES ('28', 'Raju Shrestha', 'Sub Coordinator', 'Bachelor in Computers', 'Asan, Kathmandu', 'rajustha@yahoo.com', '9803245120', '<p>Sub Coordinator for last 5 years.</p>', '65c3a2716bc12af993e91ae6823bbeef.jpg', '1', '2014-06-16 08:47:40', '1', '2014-06-16 08:48:05', '1', 'Male', '3', '1');

-- ----------------------------
-- Table structure for `nc_writer_category`
-- ----------------------------
DROP TABLE IF EXISTS `nc_writer_category`;
CREATE TABLE `nc_writer_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `writer_category` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_writer_category
-- ----------------------------
INSERT INTO `nc_writer_category` VALUES ('2', 'Board Members');
INSERT INTO `nc_writer_category` VALUES ('3', 'Loan Committe Members');
INSERT INTO `nc_writer_category` VALUES ('4', 'Websites');

-- ----------------------------
-- Table structure for `states`
-- ----------------------------
DROP TABLE IF EXISTS `states`;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(200) NOT NULL,
  `state_code` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of states
-- ----------------------------
INSERT INTO `states` VALUES ('1', 'Alaska', 'AK');
INSERT INTO `states` VALUES ('2', 'Alabama', 'AL');
INSERT INTO `states` VALUES ('3', 'Arkansas', 'AR');
INSERT INTO `states` VALUES ('4', 'Arizona', 'AZ');
INSERT INTO `states` VALUES ('5', 'California', 'CA');
INSERT INTO `states` VALUES ('6', 'Colorado', 'CO');
INSERT INTO `states` VALUES ('7', 'Connecticut', 'CT');
INSERT INTO `states` VALUES ('8', 'District of Columbia', 'DC');
INSERT INTO `states` VALUES ('9', 'Delaware', 'DE');
INSERT INTO `states` VALUES ('10', 'Florida', 'FL');
INSERT INTO `states` VALUES ('11', 'Georgia', 'GA');
INSERT INTO `states` VALUES ('12', 'Hawaii', 'HI');
INSERT INTO `states` VALUES ('13', 'Iowa', 'IA');
INSERT INTO `states` VALUES ('14', 'Idaho', 'ID');
INSERT INTO `states` VALUES ('15', 'Illinois', 'IL');
INSERT INTO `states` VALUES ('16', 'Indiana', 'IN');
INSERT INTO `states` VALUES ('17', 'Kansas', 'KS');
INSERT INTO `states` VALUES ('18', 'Kentucky', 'KY');
INSERT INTO `states` VALUES ('19', 'Louisiana', 'LA');
INSERT INTO `states` VALUES ('20', 'Massachusetts', 'MA');
INSERT INTO `states` VALUES ('21', 'Maryland', 'MD');
INSERT INTO `states` VALUES ('22', 'Maine', 'ME');
INSERT INTO `states` VALUES ('23', 'Michigan', 'MI');
INSERT INTO `states` VALUES ('24', 'Minnesota', 'MN');
INSERT INTO `states` VALUES ('25', 'Missouri', 'MO');
INSERT INTO `states` VALUES ('26', 'Mississippi', 'MS');
INSERT INTO `states` VALUES ('27', 'Montana', 'MT');
INSERT INTO `states` VALUES ('28', 'North Carolina', 'NC');
INSERT INTO `states` VALUES ('29', 'North Dakota', 'ND');
INSERT INTO `states` VALUES ('30', 'Nebraska', 'NE');
INSERT INTO `states` VALUES ('31', 'New Hampshire', 'NH');
INSERT INTO `states` VALUES ('32', 'New Jersey', 'NJ');
INSERT INTO `states` VALUES ('33', 'New Mexico', 'NM');
INSERT INTO `states` VALUES ('34', 'Nevada', 'NV');
INSERT INTO `states` VALUES ('35', 'New York', 'NY');
INSERT INTO `states` VALUES ('36', 'Ohio', 'OH');
INSERT INTO `states` VALUES ('37', 'Oklahoma', 'OK');
INSERT INTO `states` VALUES ('38', 'Oregon', 'OR');
INSERT INTO `states` VALUES ('39', 'Pennsylvania', 'PA');
INSERT INTO `states` VALUES ('40', 'Rhode Island', 'RI');
INSERT INTO `states` VALUES ('41', 'South Carolina', 'SC');
INSERT INTO `states` VALUES ('42', 'South Dakota', 'SD');
INSERT INTO `states` VALUES ('43', 'Tennessee', 'TN');
INSERT INTO `states` VALUES ('44', 'Texas', 'TX');
INSERT INTO `states` VALUES ('45', 'Utah', 'UT');
INSERT INTO `states` VALUES ('46', 'Virginia', 'VA');
INSERT INTO `states` VALUES ('47', 'Vermont', 'VT');
INSERT INTO `states` VALUES ('48', 'Washington', 'WA');
INSERT INTO `states` VALUES ('49', 'Wisconsin', 'WI');
INSERT INTO `states` VALUES ('50', 'West Virginia', 'WV');
INSERT INTO `states` VALUES ('51', 'Wyoming', 'WY');
