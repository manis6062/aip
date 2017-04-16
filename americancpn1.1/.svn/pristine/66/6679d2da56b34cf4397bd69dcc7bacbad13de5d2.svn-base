/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : americancpn

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2014-12-22 10:47:33
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
  PRIMARY KEY (`affiliate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_affiliate
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_affiliate_detail
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_client
-- ----------------------------
INSERT INTO `nc_client` VALUES ('1', 'NYARO', 'Fdsafsd', '', '', '', '', '', '', '654654654', '454654165', 'Fsdafsd@fdskaf.com', 'fasfsdaf', '0', '0', '', 'unpaid', '38817277', '');

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
INSERT INTO `nc_content` VALUES ('26', 'American CPN', '<p><span style=\"font-family: arial; font-size: medium;\">Groundbreaking New Program offers a second chance at good credit If you or anyone you know has bad credit you should not only read this article but take action on the information in it. Bad credit can make it difficult to get a lot of things in life (and if you have bad credit you know exactly what I mean).</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br /></span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\">Your credit is reviewed for more than credit cards. Today your credit is checked when you apply for credit cards, car loans, a mortgage, an apartment, and even a job. You can and will be denied all of the above without a decent credit score. Imagine not being able to get a job because of your credit and not having the income to payoff the very debts that are causing your credit to decline. It has become increasingly essential to obtain and maintain a good credit rating. But what do you do if you have blemishes on your credit report?</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br /></span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\">Due to the existing laws and policies established by the credit reporting agencies it is fairly easy for creditors to report a bad debt to put on your credit report, and difficult for you to remove negative and derogatory info from your report. The average time takes a creditor to get a bad debt reported is two weeks, while a bad debt may stay on your credit report from 2-10 years or more, if you do nothing. Even if you contact the credit reporting agencies it can still take up to 90 days to remove or update negative items (if they get removed at all). ?Even when you remove or correct negative info from your report you never fully recover the points which were lost due to the negative item. If you lose say 100 pts because of negative items removal or correction of those items will only gain back 25-40 pts, you still end up losing points.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br /></span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\">This system makes it very easy to spiral out of control and end up with a mountain of debt. Even if you have maintained good credit for a good amount of time a few negative items can make it almost impossible to regain that same score. Now there is hope no matter what your current credit situation is. Even those with the worst credit can benefit from getting a CPN. The Credit Profile Number (CPN) is a nine digit number separate from your social security number used for credit reporting and tracking purposes.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\">You have heard a lot of people talking about this subject. Some say that\r\n there is no such thing, others say that there are but are illegal, and \r\nsome inform people say that they definitely are for real. Well, let us \r\nprovide a little more insight.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br /></span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: arial; font-size: medium;\">Legality of CPN:</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: arial; font-size: medium;\"><br /></span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\">Presently, federal law \r\nallows the ability for someone to legally use a private ID # for \r\nfinancial reporting purposes instead of a Social Security Number. Title \r\n5, Section 7 of Publication Law 93-579 of Government Organization and \r\nEmployees Act: (a) (1) It shall be unlawful for any Federal, State or \r\nLocal Government Agency to deny any individual any right, benefit, or \r\nprivilege provided by law because of such individual&rsquo;s refusal to \r\ndisclose his or hers Social Security Account Number. What this means is \r\nFederal Law protects those who do not wish to disclose their personal \r\ninformation (SS#) except where required to do so. Disclosure of your \r\nsocial security number is only required when dealing with the IRS, your \r\nemployer, or when applying for a federally insured mortgage. Instead of a\r\n Social Security Number, you now have the opportunity to establish a \r\nCredit Privacy Number (CPN). A Credit Privacy Number is a new 9 digit \r\nnumber established for financial reporting purposes.</span></p>', 'Yes', '1', '2014-11-10 11:59:50', '1', '2014-11-10 11:59:50', '6');
INSERT INTO `nc_content` VALUES ('27', 'Frequently Asked Questions', '<p style=\"text-align: center;\"><span style=\"font-family: arial; font-size: medium;\">The Credit Profile Number (CPN) explained.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />What is a Credit Profile Number (CPN)? <img title=\"Smile\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-smile.gif\" border=\"0\" alt=\"Smile\" />It is a nine digit number separate from your social security number used to track your credit activities and history.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"><br /></span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\">Can I use this number instead of my social security number? <img title=\"Smile\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-smile.gif\" border=\"0\" alt=\"Smile\" />No, the Credit Profile Number (CPN) does not replace your SS number; this number can only be used for credit reporting purposes. It cannot and should not be used for any government purposes including and not limited to: military, DSS income, SSI, taxes; FHA, VA, or any government backed funding.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br /> What can I use my new Credit Profile Number (CPN) for? <img title=\"Smile\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-smile.gif\" border=\"0\" alt=\"Smile\" />You can use your new Credit Profile Number (CPN) for anything that would normally require you to use your SS number for credit reporting purposes. Use it to receive credit cards, car loans, a mortgage, personal loans etc.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />Am I responsible for the debts on my old report? <img title=\"Smile\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-smile.gif\" border=\"0\" alt=\"Smile\" />Yes, you are responsible for all debts on your old report and debts incurred with your Credit Profile Number (CPN). You must remember that while you are rebuilding your credit, you must use your new Credit Profile Number (CPN) wisely. If you have had troubled credit in the past don&rsquo;t repeat your mistakes.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />Is this legal? <img title=\"Laughing\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-laughing.gif\" border=\"0\" alt=\"Laughing\" />Yes. You can use the existing laws to your advantage for a change. Due to certain rights guaranteed by the 1974 US Privacy Act Title V, you have the right to keep your SS number private and not be denied service due to your refusal. The credit bureaus are not government agencies, so you do not have to give them your SS number.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />What will my new FICO be? <img title=\"Surprised\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-surprised.gif\" border=\"0\" alt=\"Surprised\" />Your credit profile will be blank. You will need to reestablish your credit, by applying for credit cards and other lines.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />Is there another way to re-establish my credit? <img title=\"Wink\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-wink.gif\" border=\"0\" alt=\"Wink\" />Yes, we know that re-establishing credit can be a time consuming process. We can add fully paid off trade lines to boost your score. We can give you a new Credit Profile Number (CPN) with a 700+ score (excellent credit), to use as you see fit.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />Are you saying that I can use my Credit Profile Number CPN to buy investment property or get a loan to start a business? <img title=\"Money mouth\" src=\"/js/admin/tiny-mce/editor/plugins/emotions/img/smiley-money-mouth.gif\" border=\"0\" alt=\"Money mouth\" />Yes. Leverage is a tool that has been used by the wealthy for generations. Now you have it to use for your purposes.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />The CPN is a nine-digit number that has the exact same genetic makeup of a Social Security Number. This is not a government issued number like an EIN or TIN. This number is NOT a new social and NOT a tax ID or EIN. It is simply an available file number at the credit bureaus that can have financial information reported. You have the right to establish this number only once, so do not abuse it. This explanation is not here to advise anyone to misrepresent your Social Security Number, as you are completely responsible for any debts you incur using your Credit Privacy Number.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />It is your legal right to keep your Social Security Number private, and use a separate number for any credit related purposes. You are only required by law to disclose your Social Security Number to the Internal Revenue Service, your employer, when registering a motor vehicle, buying a firearm, or applying and obtaining a federally-insured loan such as FHA, Sallie Mae, etc. I encourage you to use the laws to your advantage. Each credit bureau works on a different schedule.</span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: arial;\"> </span></p>\r\n<p><span style=\"font-family: arial; font-size: medium;\"><br />In addition, the CPN is used by celebrities, congress members/government workers, and witness protection reasons. For example, celebrities use it because the media can use their SS# to track what they are buying and where they are simply by tracking their credit cards. Further, in example, congress holds special privileges to the law; therefore, their privacy needs to be protected. In another example, witnesses under protection can be located if they use their true social security number for transaction. This is the reason why there is the existence of a Credit Privacy Number program.</span></p>', 'Yes', '1', '2014-11-10 11:59:32', '1', '2014-11-10 11:59:32', '7');
INSERT INTO `nc_content` VALUES ('28', 'Services', '<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Having negative mistakes on your credit report can affect your financial future for years to come. That&rsquo;s why it&rsquo;s very important to stay up date with your credit report.</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">At Once Again Credit, we understand that every person&rsquo;s credit situation is unique and depending on your credit report, we will inform you on which items we can dispute on your behalf. Some items that we helped our client&rsquo;s dispute include but are not limited to the following:</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Charge-off removal<br />Foreclosure removal<br />Repossession removal<br />Collection removal<br />Bankruptcy removal<br />Dispute Status Removal<br />Judgment Removal<br />Foreclosure Removal<br />Short Sale Removal<br />Tax Lien Removal<br />Late Payment Removal<br />Inquiry Removal<br />Update Personal Information<br />Identity Theft Removal<br />Chex Systems Removal<br />And much more</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><em>Call us now at 1-800-730-3087 to get back on track with your financial future today!</em><br /><strong>Our Credit restoration services are right for you:</strong></p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">If you need to rebuild your credit<br />If you want to purchase a home<br />If you need to save money on auto and life insurance<br />If you can&rsquo;t get approved for credit or loans<br />If you need to improve your credit score</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Whether you need to improve your credit score, or need errors removed from your credit report, Once Again Credit can help. We understand that you don&rsquo;t have the time to dispute costly errors on your credit report. That&rsquo;s why we do all the hard work for you. Simply send us your credit reports and we will take care of the rest.<br /><br /><strong>Why choose us to help you with your credit restoration needs?</strong></p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">When it comes to choosing a credit restoration service, you want an experienced team with a proven track record of success. That&rsquo;s exactly what you will receive when you let our credit restoration team take care of all your credit restoration needs. Many of our clients choose to work with us because:</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">We understand the intricate details of FCRA and FDCPA rules and how they affect you<br />We continue to educate ourselves on the new regulations and laws affecting your credit<br />We work tirelessly to help you secure a better financial future<br />We will remove inaccurate, unverifiable and incomplete information from your credit report.</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Call us now at 1-800-730-3087 to prepare for a better financial future today!<br /><br /><strong>Discover why many of our clients choose our credit restoration services.</strong></p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">At Once Again Credit, we understand that improving your credit is a step by step process. Depending on your unique situation, it can take 45 days to a few months to fix errors on your credit report. If you are serious about fixing your credit, give us a call today. Many of our clients have experienced the following after working with us, and we can help you to:</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Build and maintain a good credit score<br />Qualify for loans<br />Feel secure about your financial future</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><strong>Schedule a free consultation with one of our credit restoration specialists today!</strong></p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Whether you are improving your credit, or fixing errors on your credit report, Once Again Credit is here to help you every step of the way. We make it simple for you. Just send us your credit report (s) and we will take care of the rest.</p>\r\n<p style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Call us now at 1-800-730-3087 to learn more about how our credit restoration specialists can help you improve your credit score today</p>', 'Yes', '11', '2014-08-19 15:42:56', '11', '2014-08-19 15:42:56', '0');
INSERT INTO `nc_content` VALUES ('29', 'How it Works', '<p><span style=\"font-family: comic sans ms; font-size: medium;\"><strong>American CPN</strong> uses ground breaking credit strategies to empower our clients. We give our clients the tools and the resources to greatly improve their credit and their lives. Weather you own a large corporation or you are a housewife our experienced staff will guide you through business or personal credit strategies tailored to your personal financial goals. Our services don\'t stop when you place an order. As a client you are entitled to lifetime consulting. No other credit repair company offers this.<br /><br />When we obtain a <strong>CPN</strong> for you we also register your name as a small business (<em>for additional fee</em>) with the IRS and send you your new EIN along with your <strong>CPN</strong>. You will then receive an official letter from the IRS confirming this. All you have to do is register your name as your business by filling it as a DBA with your state. This is how the celebrities and the wealthy use <strong>CPN\'s</strong> to protect their privacy. This is the only legal way to have a <strong>CPN</strong>. Don&rsquo;t be fooled by people and companies on the internet selling CPN\'S for little or nothing. You get what you pay for and you might get more than what you bargained for. Do it the right way.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: comic sans ms; font-size: medium;\"> </span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: comic sans ms; font-size: medium;\">Call us today to legally set up your new <strong>CPN</strong>.</span></p>', 'Yes', '1', '2014-08-27 12:51:09', '1', '2014-08-27 12:51:09', '3');
INSERT INTO `nc_content` VALUES ('30', 'Business Opportunity', '<p><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">For years, we have assisted hundreds of consumers to not only repair or delete erroneous information from their credit reports, but also to rebuild their credit, providing legal alternatives to increase their FICO scores. Credit repair is legal, it is the law!</span></p>\r\n<p><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 17px;\">Our extensive experience in the credit repair field allows us to consistently increase our knowledge about credit repair strategies. We use this knowledge to dispute issues on our Clients\' Credit Reports with a high level of success in the first attempt. Our credit repair process includes the generation of \"unique dispute letters\", revised individually, which translates into better results from the first round of disputes.</span></p>\r\n<p><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\"> Our highest level of credit repair service includes: </span></span></span></p>\r\n<ul class=\"repair_services\" style=\"float: left;\">\r\n<li style=\"list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/Images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;\"><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">Ensuring that information in their credit reports is accurate.</span></span></span></li>\r\n<li style=\"list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/Images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;\"><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">Disputing erroneous items with the credit reporting agencies.</span></span></span></li>\r\n<li style=\"list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/Images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;\"><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">Developing a spending plan to lower debt and raise credit score.</span></span></span></li>\r\n<li style=\"list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/Images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;\"><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">Providing educational material that teaches you how to maintain a healthier credit score.</span></span></span></li>\r\n<li style=\"list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/Images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;\"><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">If necessary, looking for new trade lines to increase your credit score (not included in the basic credit repair package).</span></span></span></li>\r\n<li style=\"list-style: none; float: none !important; margin: 0px 0px 10px; padding-left: 50px; background-image: url(http://onceagaincredit.cyberneticstechnology.com/Images/liststyle.jpg) !important; background-attachment: scroll !important; background-color: transparent !important; background-position: 0px 0px !important; background-repeat: no-repeat no-repeat !important;\"><span style=\"font-size: x-small;\"><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">If necessary, request a rapid re-scoring of your FICO score.</span></span></span></li>\r\n</ul>\r\n<p><span style=\"font-size: x-small;\"><span style=\"font-size: small;\">Add Trade Lines to your Credit Report to increase your FICO Score.\r\nIf you need to increase your debt to income ratio (DTI), we can also work on \"Trade Lines\". The goal is to provide your with the credit accounts required to boost your credit score, regardless of your credit history (the price of this service is not included in our basic Credit Repair service).</span></span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'Yes', '11', '2014-08-19 16:43:24', '11', '2014-08-19 16:43:24', '3');
INSERT INTO `nc_content` VALUES ('31', 'Branch Partner', '<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: medium;\"><span style=\"font-family: comic sans ms;\">Welcome to our Branch Parnter Program. We offer different business opportunities for anyone whom may be interested in starting their own referrer. affiliate, broker, or \"<em>whatever name you choose to call it</em>\" CPN Program. </span></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>', 'Yes', '1', '2014-09-07 12:01:29', '1', '2014-09-07 12:01:29', '3');
INSERT INTO `nc_content` VALUES ('32', 'Testimonials', '<p><strong><span style=\"font-size: x-small;\">Past OnceAgainCredit.com members have seen 7% of their questionable credit report negatives removed per month.</span></strong><br style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\" /><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: medium;\">We understand that every credit situation is different. That is why we believe in creating a customized Game Plan specifically with your credit goals in mind. Rest assured we employ the fastest, most effective approach to credit repair ? it\'s nice to know you can expect progress every month.</span></p>', 'Yes', '11', '2014-08-19 16:39:32', '11', '2014-08-19 16:39:32', '1');
INSERT INTO `nc_content` VALUES ('33', 'Sign Up', '<p>Please sign up into our account with the following form:</p>', 'Yes', '11', '2014-08-19 16:40:15', '11', '2014-08-19 16:40:15', '0');
INSERT INTO `nc_content` VALUES ('34', 'Legal CPN', '<p><span style=\"font-family: comic sans ms; font-size: medium;\">Presently, federal law allows the ability for someone to legally use a private ID # for financial reporting purposes instead of a Social Security Number. Title 5, Section 7 of Publication Law 93-579 of Government Organization and Employees Act: </span><br /><br /><span style=\"font-family: comic sans ms; font-size: medium;\">(a) (1) It shall be unlawful for any Federal, State or Local Government ?Agency to deny any individual any right, benefit, or privilege provided by ?law because of such individual\'s refusal to disclose his or her Social ?Security Account Number. <br /><br />The law states that No federal, state, or local government agency may deny you any right, privilege or benefit due to your refusal to provide your SS # for any other reason than producing money for retirement account with the Social Security Administration, the IRS and your employer today. Credit Bureaus are not legally allowed to \"require\" your Social Security Number. In our country\'s present credit reporting system a person may be assumed guilty and then must expend a great deal of time and resources to prove his or her innocence. Additionally, once a negative item is in a credit file it may remain long past the 7 year time period most people believe is used. Additionally, a misreported item can show up in a credit report multiple times. <br /><br />When it comes to credit, banking and loans, there are two things you must know. The first relates to the law pertaining to the usage of your social security number as an identification tool. The second, credit bureaus are private companies and are not affiliated with the government in any way, whatsoever. Although, the credit bureaus would like you to think otherwise. <br />What all this means is Federal Law protects those who do not wish to disclose their personal information (SS#) except when required to do so. All that to say: Instead of a Social Security Number, with the right planning, you now have the opportunity to establish a Credit Privacy Number (CPN), as it is your right to have one.</span></p>\r\n<p><span style=\"font-family: comic sans ms; font-size: medium;\"> </span></p>\r\n<p><span style=\"font-family: comic sans ms; font-size: medium;\"><br /> Call today to get Your Second Chance!</span></p>', 'Yes', '1', '2014-08-27 12:47:07', '1', '2014-08-27 12:47:07', '4');

-- ----------------------------
-- Table structure for `nc_domain`
-- ----------------------------
DROP TABLE IF EXISTS `nc_domain`;
CREATE TABLE `nc_domain` (
  `domain_id` int(11) NOT NULL AUTO_INCREMENT,
  `domain_name` varchar(50) NOT NULL,
  PRIMARY KEY (`domain_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_domain
-- ----------------------------
INSERT INTO `nc_domain` VALUES ('3', 'google.com');
INSERT INTO `nc_domain` VALUES ('4', 'google.com');
INSERT INTO `nc_domain` VALUES ('5', 'google.com');
INSERT INTO `nc_domain` VALUES ('6', 'google.com');
INSERT INTO `nc_domain` VALUES ('7', 'rajesh.cyberneticstechnology.com');
INSERT INTO `nc_domain` VALUES ('8', 'test.google.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_employment_details
-- ----------------------------
INSERT INTO `nc_employment_details` VALUES ('1', 'Fasdfniroj', 'Fdfasdniroj', '1 years', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('4', 'Software Developer', 'Tej Technologies Pvt Ltd.', '2 Years', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('5', 'Designer', 'Tej Technologies Pvt Ltd.', '3 Years', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('6', 'Flksdjalk', 'Fkldsjaklfj', 'Flkdsajlfk', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('7', 'Fasdf', 'Fdfasd', 'Fdsafsd', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('8', 'Aaaaaaaa', 'Bbbbbbbbb', 'Cccccccccc', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('9', 'Aaaaaaaa', 'Bbbbbbbbb', 'Cccccccccc', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('10', 'Fasdfdsa', 'Fdasfdsa', 'Fdsafdsafsda', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('11', 'Fsdafsd', 'Fdsafsd', 'Fdsafsda', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('12', 'Faad', 'Fa', 'Fads', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('13', 'Fasdfsd', 'Fsafsd', 'Fdsafsd', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('14', 'Fffffffffffffffffffff', 'Ggggggggggggg', 'Hhhhhhhhhhhhh', '1', 'client');
INSERT INTO `nc_employment_details` VALUES ('15', 'Rajesh', 'Maharjan', '2 Years', '1', 'client');

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
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_gallery
-- ----------------------------
INSERT INTO `nc_gallery` VALUES ('29', '0', '11', '2014-12-17 09:24:20', '11', '2014-12-17 09:24:20', 'nirojshakya@yahoo.com', '0');
INSERT INTO `nc_gallery` VALUES ('30', '0', '11', '2014-12-17 09:24:20', '11', '2014-12-17 09:24:20', 'saveniroj@gmail.com', '0');
INSERT INTO `nc_gallery` VALUES ('31', '0', '11', '2014-12-17 09:24:20', '11', '2014-12-17 09:24:20', 'nirojshakyaimadol@hotmail.com', '0');
INSERT INTO `nc_gallery` VALUES ('32', '0', '11', '2014-12-17 09:24:40', '11', '2014-12-17 09:24:40', 'nirojshakya@yahoo.com', '0');
INSERT INTO `nc_gallery` VALUES ('33', '0', '11', '2014-12-17 09:24:40', '11', '2014-12-17 09:24:40', 'saveniroj@gmail.com', '0');

-- ----------------------------
-- Table structure for `nc_homepage_slider`
-- ----------------------------
DROP TABLE IF EXISTS `nc_homepage_slider`;
CREATE TABLE `nc_homepage_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(255) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `description` longtext,
  `slider_index` int(11) DEFAULT NULL,
  `publish` enum('yes','no') NOT NULL,
  `crtd_by` varchar(50) NOT NULL,
  `crtd_dt` date NOT NULL,
  `updt_by` varchar(50) NOT NULL,
  `updt_dt` date NOT NULL,
  `updt_cnt` int(11) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_homepage_slider
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('6', 'Web Developing', 'top-menu', 'Active', '5', '2014-06-06', '1', '2014-06-06', '1', '25', '4', '1');
INSERT INTO `menu` VALUES ('8', 'fsdaf', 'top-menu', 'Active', '7', '2014-06-12 09:45:41', '1', '2014-06-12 09:45:41', '1', '25', '1', '1');
INSERT INTO `menu` VALUES ('9', 'Home', 'main-menu/footer-menu', 'Active', '8', '2014-08-19 11:25:21', '11', '2014-08-19 15:15:36', '11', '26', '0', '4');
INSERT INTO `menu` VALUES ('10', 'Legal CPN', 'main-menu/footer-menu', 'Active', '9', '2014-08-19 12:47:24', '11', '2014-08-19 16:41:17', '11', '34', '0', '1');
INSERT INTO `menu` VALUES ('11', 'How it Works', 'main-menu/footer-menu', 'Active', '10', '2014-08-19 12:47:47', '11', '2014-08-19 16:34:24', '11', '29', '0', '1');
INSERT INTO `menu` VALUES ('12', 'FAQ', 'main-menu/footer-menu', 'Active', '11', '2014-08-19 12:48:05', '11', '2014-08-19 15:49:08', '11', '27', '0', '1');
INSERT INTO `menu` VALUES ('13', 'Services', 'main-menu/footer-menu', 'Active', '12', '2014-08-19 12:48:23', '11', '2014-08-19 16:34:37', '11', '28', '0', '1');
INSERT INTO `menu` VALUES ('14', 'Contact Us', 'main-menu/footer-menu', 'Active', '13', '2014-08-19 12:48:41', '11', '2014-08-19 13:54:27', '11', '25', '0', '3');
INSERT INTO `menu` VALUES ('15', 'Branch Partner', 'footer-menu', 'Active', '15', '2014-08-19 12:49:02', '11', '2014-09-05 14:46:26', '1', '31', '0', '1');
INSERT INTO `menu` VALUES ('16', 'Business Opportunity', 'footer-menu', 'Active', '16', '2014-08-19 12:49:19', '11', '2014-09-05 14:46:36', '1', '30', '0', '1');
INSERT INTO `menu` VALUES ('17', 'Testimonials', 'footer-menu', 'Active', '17', '2014-08-19 12:49:37', '11', '2014-09-10 16:26:05', '1', '32', '0', '1');
INSERT INTO `menu` VALUES ('18', 'Sign Up', 'main-menu/footer-menu', 'Inactive', '14', '2014-08-19 12:49:52', '11', '2014-09-11 15:56:40', '11', '33', '0', '5');

-- ----------------------------
-- Table structure for `nc_module`
-- ----------------------------
DROP TABLE IF EXISTS `nc_module`;
CREATE TABLE `nc_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(100) NOT NULL,
  `module_controller` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_module
-- ----------------------------
INSERT INTO `nc_module` VALUES ('1', 'Content', 'Content');
INSERT INTO `nc_module` VALUES ('2', 'News', 'News');
INSERT INTO `nc_module` VALUES ('3', 'Contact', 'Contact');
INSERT INTO `nc_module` VALUES ('4', 'Home', 'Home');
INSERT INTO `nc_module` VALUES ('5', 'Register', 'register');

-- ----------------------------
-- Table structure for `nc_module_priviledge`
-- ----------------------------
DROP TABLE IF EXISTS `nc_module_priviledge`;
CREATE TABLE `nc_module_priviledge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modules` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_module_priviledge
-- ----------------------------
INSERT INTO `nc_module_priviledge` VALUES ('1', 'Client');
INSERT INTO `nc_module_priviledge` VALUES ('2', 'Content');
INSERT INTO `nc_module_priviledge` VALUES ('3', 'Menu');
INSERT INTO `nc_module_priviledge` VALUES ('4', 'Request');
INSERT INTO `nc_module_priviledge` VALUES ('5', 'Self');
INSERT INTO `nc_module_priviledge` VALUES ('6', 'Social');
INSERT INTO `nc_module_priviledge` VALUES ('7', 'Theme');
INSERT INTO `nc_module_priviledge` VALUES ('8', 'User');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_referrer_module_priviledge
-- ----------------------------
INSERT INTO `nc_referrer_module_priviledge` VALUES ('1', 'Client');
INSERT INTO `nc_referrer_module_priviledge` VALUES ('2', 'Request');
INSERT INTO `nc_referrer_module_priviledge` VALUES ('3', 'Self');

-- ----------------------------
-- Table structure for `nc_request_for_signup`
-- ----------------------------
DROP TABLE IF EXISTS `nc_request_for_signup`;
CREATE TABLE `nc_request_for_signup` (
  `request_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `request_to_type` enum('referrer','client') NOT NULL,
  `request_to_emails` longtext NOT NULL,
  `request_by` int(11) NOT NULL,
  `request_send_dt` date NOT NULL,
  `rcode` varchar(20) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_request_for_signup
-- ----------------------------

-- ----------------------------
-- Table structure for `nc_social`
-- ----------------------------
DROP TABLE IF EXISTS `nc_social`;
CREATE TABLE `nc_social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `social_title` varchar(100) NOT NULL,
  `social_link` varchar(200) NOT NULL,
  `social_icon` varchar(200) NOT NULL,
  `crtd_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_social
-- ----------------------------
INSERT INTO `nc_social` VALUES ('1', 'facebook', 'http://www.facebook.com/nirojshakya', 'facebook.png', '1');
INSERT INTO `nc_social` VALUES ('2', 'youtube', 'http://www.youtube.com', 'youtube.png', '1');
INSERT INTO `nc_social` VALUES ('3', 'twitter', 'http://www.twitter.com', 'twitter.png', '1');
INSERT INTO `nc_social` VALUES ('4', 'google_plus', 'http://www.google_plus.com', 'google_plus.png', '1');
INSERT INTO `nc_social` VALUES ('5', 'linkedin', 'http://www.linkedin.com', 'linkedin.png', '1');
INSERT INTO `nc_social` VALUES ('6', 'pinterest', 'http://www.pinterest.com/sudina', 'pinterest.png', '1');
INSERT INTO `nc_social` VALUES ('7', 'vimeo', '', 'vimeo.png', '1');
INSERT INTO `nc_social` VALUES ('8', 'instagram', 'http://www.instagram.com', 'instagram.png', '1');
INSERT INTO `nc_social` VALUES ('9', 'myspace', 'http://www.myspace.com', 'myspace.png', '1');
INSERT INTO `nc_social` VALUES ('10', 'facebook', '', 'facebook.png', '7');
INSERT INTO `nc_social` VALUES ('11', 'youtube', '', 'youtube.png', '7');
INSERT INTO `nc_social` VALUES ('12', 'twitter', '', 'twitter.png', '7');
INSERT INTO `nc_social` VALUES ('13', 'google_plus', '', 'google_plus.png', '7');
INSERT INTO `nc_social` VALUES ('14', 'linkedin', '', 'linkedin.png', '7');
INSERT INTO `nc_social` VALUES ('15', 'pinterest', '', 'pinterest.png', '7');
INSERT INTO `nc_social` VALUES ('16', 'vimeo', '', 'vimeo.png', '7');
INSERT INTO `nc_social` VALUES ('17', 'instagram', '', 'instagram.png', '7');
INSERT INTO `nc_social` VALUES ('18', 'myspace', '', 'myspace.png', '7');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nc_theme_option
-- ----------------------------
INSERT INTO `nc_theme_option` VALUES ('1', 'American CPN', '', '', 'C7C7C7', '', '', 'C76B6B', '', '', '1');

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
  `user_type` enum('super-admin','admin','user','affiliate','client') NOT NULL,
  `crtd_by` int(11) NOT NULL COMMENT 'record created date',
  `crtd_dt` datetime NOT NULL COMMENT 'record created by',
  `updt_by` int(11) NOT NULL COMMENT 'record updated by',
  `updt_dt` datetime NOT NULL COMMENT 'record updated date',
  `updt_cnt` int(11) NOT NULL COMMENT 'record updated count',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '72,74,73,71,43,19,17,47,30,44,36,20,37,77,39,38,45,23,75,24,3,2,1', '4345345', '345452', 'Thimi', 'nirojshakya@yahoo.com', 'yes', 'super-admin', '0', '2012-06-01 11:05:29', '1', '2014-12-18 03:06:26', '34');
INSERT INTO `user` VALUES ('11', 'Niroj Shakya', 'shakya', '5b36eadf7755ea380d6c20ef9e03bf93', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,17,18,19,20,23,24,25,26,27,28,29,30,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77', '015202429', '9808910372', 'Patan', 'saveniroj@gmail.com', 'yes', '', '1', '2014-04-10 14:45:40', '11', '2014-06-10 10:07:09', '3');

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
