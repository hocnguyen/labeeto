-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2014 at 05:54 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `labeeto`
--

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('add_post', '0', 'return 3==$params[''value''];', 'N;'),
('add_post', '16813', 'return 3==$params[''value''];', 'N;'),
('add_post', '16816', 'return 3==$params[''value''];', 'N;'),
('admin', '0', '', 'N;'),
('admin', '1', NULL, 'N;'),
('admin', '118', NULL, 'N;'),
('admin', '16814', '', 'N;'),
('admin', '16819', NULL, 'N;'),
('admin', '92', NULL, 'N;'),
('guest', '100', NULL, 'N;'),
('guest', '115', NULL, 'N;'),
('guest', '135', NULL, 'N;'),
('guest', '140', NULL, 'N;'),
('guest', '206', NULL, 'N;'),
('guest', '58', NULL, 'N;'),
('guest', '71', NULL, 'N;'),
('guest', '72', NULL, 'N;'),
('guest', '79', NULL, 'N;'),
('guest', '84', NULL, 'N;'),
('guest', '90', NULL, 'N;'),
('manage_posts', '0', '', 'N;'),
('manage_posts', '16813', '', 'N;'),
('member', '16824', NULL, 'N;'),
('mod', '2', NULL, 'N;'),
('moderators', '0', '', 'N;'),
('moderators', '16813', '', 'N;'),
('moderators', '5', '', 'N;'),
('quest', '1', NULL, 'N;'),
('thangnguyen', '174', NULL, 'N;'),
('user', '0', '', 'N;'),
('user', '102', NULL, 'N;'),
('user', '105', NULL, 'N;'),
('user', '106', NULL, 'N;'),
('user', '108', NULL, 'N;'),
('user', '109', NULL, 'N;'),
('user', '113', NULL, 'N;'),
('user', '119', NULL, 'N;'),
('user', '120', NULL, 'N;'),
('user', '121', NULL, 'N;'),
('user', '122', NULL, 'N;'),
('user', '125', NULL, 'N;'),
('user', '128', NULL, 'N;'),
('user', '147', NULL, 'N;'),
('user', '148', NULL, 'N;'),
('user', '149', NULL, 'N;'),
('user', '151', NULL, 'N;'),
('user', '155', NULL, 'N;'),
('user', '158', NULL, 'N;'),
('User', '16', NULL, 'N;'),
('user', '16813', '', 'N;'),
('User', '17', NULL, 'N;'),
('user', '182', NULL, 'N;'),
('user', '189', NULL, 'N;'),
('user', '190', NULL, 'N;'),
('user', '191', NULL, 'N;'),
('user', '192', NULL, 'N;'),
('user', '193', NULL, 'N;'),
('user', '194', NULL, 'N;'),
('user', '195', NULL, 'N;'),
('user', '196', NULL, 'N;'),
('user', '198', NULL, 'N;'),
('user', '205', NULL, 'N;'),
('user', '206', NULL, 'N;'),
('user', '208', NULL, 'N;'),
('User', '29', NULL, 'N;'),
('user', '30', NULL, 'N;'),
('user', '31', NULL, 'N;'),
('user', '34', NULL, 'N;'),
('user', '35', NULL, 'N;'),
('user', '4', NULL, 'N;'),
('user', '57', NULL, 'N;'),
('user', '58', NULL, 'N;'),
('user', '59', NULL, 'N;'),
('user', '61', NULL, 'N;'),
('user', '65', NULL, 'N;'),
('user', '67', NULL, 'N;'),
('user', '68', NULL, 'N;'),
('user', '69', NULL, 'N;'),
('user', '74', NULL, 'N;'),
('user', '80', NULL, 'N;'),
('user', '81', NULL, 'N;'),
('user', '82', NULL, 'N;'),
('user', '85', NULL, 'N;'),
('user', '86', NULL, 'N;'),
('user', '87', NULL, 'N;'),
('user', '89', NULL, 'N;'),
('user', '91', NULL, 'N;'),
('user', '92', NULL, 'N;'),
('user', '94', NULL, 'N;'),
('user', '95', NULL, 'N;'),
('user', '97', NULL, 'N;'),
('user', '98', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 2, 'System Administrator', '', 'N;'),
('editor', 2, 'Site Editor', '', 'N;'),
('guest', 2, 'Site Guest', '', 'N;'),
('member', 2, 'Site Member', 'return !Yii::app()->user->isGuest;', 'N;'),
('op_acp_access', 0, 'Admin: Enter The Admin Control Panel', '', 'N;'),
('op_blog_addcats', 0, 'Blog: Add Categories', '', 'N;'),
('op_blog_addposts', 0, 'Blog: Add Posts', '', 'N;'),
('op_blog_comments', 0, 'Blog: Manage Comments', '', 'N;'),
('op_blog_deletecats', 0, 'Blog: Delete Categories', '', 'N;'),
('op_blog_deletecomments', 0, 'Blog: Delete Comments', '', 'N;'),
('op_blog_deleteposts', 0, 'Blog: Delete Posts', '', 'N;'),
('op_blog_editcats', 0, 'Blog: Edit Categories', '', 'N;'),
('op_blog_editposts', 0, 'Blog: Edit Posts', '', 'N;'),
('op_blog_manage', 0, 'Blog: Manage Posts', '', 'N;'),
('op_blog_managecats', 0, 'Blog: Manage Categories', '', 'N;'),
('op_custompages_addpages', 0, 'Custom Pages: Add New Pages', '', 'N;'),
('op_custompages_deletepages', 0, 'Custom Pages: Delete Pages', '', 'N;'),
('op_custompages_editpages', 0, 'Custom Pages: Edit Pages', '', 'N;'),
('op_custompages_managepages', 0, 'Custom Pages: Manage Pages', '', 'N;'),
('op_doc_add_comments', 0, 'Documentations: Add Comments', '', 'N;'),
('op_doc_delete_comments', 0, 'Documentations: Delete Comments', '', 'N;'),
('op_doc_edit_docs', 0, 'Documentations: Edit Topics', '', 'N;'),
('op_doc_manage_comments', 0, 'Documentations: Manage Comments', '', 'N;'),
('op_extensions_addcats', 0, 'Extensions: Add Categories', '', 'N;'),
('op_extensions_addposts', 0, 'Extensions: Add Extensions', '', 'N;'),
('op_extensions_comments', 0, 'Extensions: Manage Comments', '', 'N;'),
('op_extensions_deletecats', 0, 'Extensions: Delete Categories', '', 'N;'),
('op_extensions_deletecomments', 0, 'Extensions: Delete Comments', '', 'N;'),
('op_extensions_deleteposts', 0, 'Extensions: Delete Extension', '', 'N;'),
('op_extensions_editcats', 0, 'Extensions: Edit Categories', '', 'N;'),
('op_extensions_editposts', 0, 'Extensions: Edit Extensions', '', 'N;'),
('op_extensions_manage', 0, 'Extensions: Manage Posts', '', 'N;'),
('op_extensions_managecats', 0, 'Extensions: Manage Categories', '', 'N;'),
('op_forum_posts', 0, 'Forum: Manage Forum Posts', '', 'N;'),
('op_forum_post_posts', 0, 'Forum: Post New Posts', '', 'N;'),
('op_forum_post_topics', 0, 'Forum: Post New Topics', '', 'N;'),
('op_forum_topics', 0, 'Forum: Manage Forum Topics', '', 'N;'),
('op_lang_copy_strings', 0, 'Languages: Copy Source Language Strings', '', 'N;'),
('op_lang_translate', 0, 'Languages: Translate Strings', '', 'N;'),
('op_roles_add_auth', 0, 'Roles: Add Auth Items', '', 'N;'),
('op_roles_add_authchild', 0, 'Roles: Add Auth Items Childs', '', 'N;'),
('op_roles_delete_auth', 0, 'Roles: Delete Auth Items', '', 'N;'),
('op_roles_edit_auth', 0, 'Roles: Edit Auth Items', '', 'N;'),
('op_settings_add_settings', 0, 'Settings: Add New Settings', '', 'N;'),
('op_settings_add_settings_groups', 0, 'Settings: Add Setting Groups', '', 'N;'),
('op_settings_delete_settings', 0, 'Settings: Delete Settings', '', 'N;'),
('op_settings_delete_settings_groups', 0, 'Settings: Delete Setting Groups', '', 'N;'),
('op_settings_edit_settings', 0, 'Settings: Edit Settings', '', 'N;'),
('op_settings_edit_settings_groups', 0, 'Settings: Edit Setting Groups', '', 'N;'),
('op_settings_revert_settings', 0, 'Settings: Revert Settings', '', 'N;'),
('op_settings_update_settings', 0, 'Settings: Update Settings', '', 'N;'),
('op_settings_view_settings', 0, 'Settings: View Settings', '', 'N;'),
('op_tutorials_addcats', 0, 'Tutorials: Add Categories', '', 'N;'),
('op_tutorials_addtutorials', 0, 'Tutorials: Add Tutorials', '', 'N;'),
('op_tutorials_comments', 0, 'Tutorials: Manage Comments', '', 'N;'),
('op_tutorials_deletecats', 0, 'Tutorials: Delete Categories', '', 'N;'),
('op_tutorials_deletecomments', 0, 'Tutorials: Delete Comments', '', 'N;'),
('op_tutorials_deletetutorials', 0, 'Tutorials: Delete Tutorials', '', 'N;'),
('op_tutorials_editcats', 0, 'Tutorials: Edit Categories', '', 'N;'),
('op_tutorials_edittutorials', 0, 'Tutorials: Edit Tutorials', '', 'N;'),
('op_tutorials_manage', 0, 'Tutorials: Manage Tutorials', '', 'N;'),
('op_tutorials_managecats', 0, 'Tutorials: Manage Categories', '', 'N;'),
('op_users_add_users', 0, 'Users: Add New Users', '', 'N;'),
('op_users_bulk_users', 0, 'Users: Perform Bulk Operations On Users', '', 'N;'),
('op_users_comment', 0, 'Users: Add Comments to profiles', '', 'N;'),
('op_users_delete_users', 0, 'Users: Delete Users', '', 'N;'),
('op_users_edit_users', 0, 'Users: Edit Users', '', 'N;'),
('op_users_manage_comments', 0, 'Users: Manage Comments', '', 'N;'),
('task_blog', 1, 'Task Manage Blog', '', 'N;'),
('task_custompages', 1, 'Task Manage Custom Pages', '', 'N;'),
('task_documentations', 1, 'Task Manage Documentations', '', 'N;'),
('task_extensions', 1, 'Task Manage Extensions', '', 'N;'),
('task_forum', 1, 'Task: Manage Forum', '', 'N;'),
('task_languages', 1, 'Task Manage System Languages', '', 'N;'),
('task_members', 1, 'Task Manage Users', '', 'N;'),
('task_roles', 1, 'Task Manage User Roles', '', 'N;'),
('task_settings', 1, 'Task Manage System Setting', '', 'N;'),
('task_tutorials', 1, 'Task Manage Tutorials', '', 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('manage_posts', 'add_post'),
('admin', 'editor'),
('admin', 'guest'),
('member', 'guest'),
('moderators', 'manage_posts'),
('admin', 'member'),
('editor', 'member'),
('admin', 'op_acp_access'),
('admin', 'op_blog_addcats'),
('task_blog', 'op_blog_addcats'),
('admin', 'op_blog_addposts'),
('member', 'op_blog_addposts'),
('task_blog', 'op_blog_addposts'),
('admin', 'op_blog_comments'),
('task_blog', 'op_blog_comments'),
('admin', 'op_blog_deletecats'),
('task_blog', 'op_blog_deletecats'),
('admin', 'op_blog_deletecomments'),
('task_blog', 'op_blog_deletecomments'),
('admin', 'op_blog_deleteposts'),
('task_blog', 'op_blog_deleteposts'),
('admin', 'op_blog_editcats'),
('task_blog', 'op_blog_editcats'),
('admin', 'op_blog_editposts'),
('task_blog', 'op_blog_editposts'),
('admin', 'op_blog_manage'),
('task_blog', 'op_blog_manage'),
('admin', 'op_blog_managecats'),
('task_blog', 'op_blog_managecats'),
('admin', 'op_custompages_addpages'),
('task_custompages', 'op_custompages_addpages'),
('admin', 'op_custompages_deletepages'),
('task_custompages', 'op_custompages_deletepages'),
('admin', 'op_custompages_editpages'),
('task_custompages', 'op_custompages_editpages'),
('admin', 'op_custompages_managepages'),
('task_custompages', 'op_custompages_managepages'),
('admin', 'op_doc_add_comments'),
('editor', 'op_doc_add_comments'),
('member', 'op_doc_add_comments'),
('task_documentations', 'op_doc_add_comments'),
('admin', 'op_doc_delete_comments'),
('task_documentations', 'op_doc_delete_comments'),
('admin', 'op_doc_edit_docs'),
('task_documentations', 'op_doc_edit_docs'),
('admin', 'op_doc_manage_comments'),
('editor', 'op_doc_manage_comments'),
('task_documentations', 'op_doc_manage_comments'),
('admin', 'op_extensions_addcats'),
('task_extensions', 'op_extensions_addcats'),
('admin', 'op_extensions_addposts'),
('member', 'op_extensions_addposts'),
('task_extensions', 'op_extensions_addposts'),
('admin', 'op_extensions_comments'),
('task_extensions', 'op_extensions_comments'),
('admin', 'op_extensions_deletecats'),
('task_extensions', 'op_extensions_deletecats'),
('admin', 'op_extensions_deletecomments'),
('task_extensions', 'op_extensions_deletecomments'),
('admin', 'op_extensions_deleteposts'),
('task_extensions', 'op_extensions_deleteposts'),
('admin', 'op_extensions_editcats'),
('task_extensions', 'op_extensions_editcats'),
('admin', 'op_extensions_editposts'),
('task_extensions', 'op_extensions_editposts'),
('admin', 'op_extensions_manage'),
('task_extensions', 'op_extensions_manage'),
('admin', 'op_extensions_managecats'),
('task_extensions', 'op_extensions_managecats'),
('admin', 'op_forum_posts'),
('task_forum', 'op_forum_posts'),
('admin', 'op_forum_post_posts'),
('member', 'op_forum_post_posts'),
('task_forum', 'op_forum_post_posts'),
('admin', 'op_forum_post_topics'),
('member', 'op_forum_post_topics'),
('task_forum', 'op_forum_post_topics'),
('admin', 'op_forum_topics'),
('task_forum', 'op_forum_topics'),
('admin', 'op_lang_copy_strings'),
('task_languages', 'op_lang_copy_strings'),
('admin', 'op_lang_translate'),
('task_languages', 'op_lang_translate'),
('admin', 'op_roles_add_auth'),
('task_roles', 'op_roles_add_auth'),
('admin', 'op_roles_add_authchild'),
('task_roles', 'op_roles_add_authchild'),
('admin', 'op_roles_delete_auth'),
('task_roles', 'op_roles_delete_auth'),
('admin', 'op_roles_edit_auth'),
('task_roles', 'op_roles_edit_auth'),
('admin', 'op_settings_add_settings'),
('task_settings', 'op_settings_add_settings'),
('admin', 'op_settings_add_settings_groups'),
('task_settings', 'op_settings_add_settings_groups'),
('admin', 'op_settings_delete_settings'),
('task_settings', 'op_settings_delete_settings'),
('admin', 'op_settings_delete_settings_groups'),
('task_settings', 'op_settings_delete_settings_groups'),
('admin', 'op_settings_edit_settings'),
('task_settings', 'op_settings_edit_settings'),
('admin', 'op_settings_edit_settings_groups'),
('task_settings', 'op_settings_edit_settings_groups'),
('admin', 'op_settings_revert_settings'),
('task_settings', 'op_settings_revert_settings'),
('admin', 'op_settings_update_settings'),
('task_settings', 'op_settings_update_settings'),
('admin', 'op_settings_view_settings'),
('task_settings', 'op_settings_view_settings'),
('admin', 'op_tutorials_addcats'),
('task_tutorials', 'op_tutorials_addcats'),
('admin', 'op_tutorials_addtutorials'),
('member', 'op_tutorials_addtutorials'),
('task_tutorials', 'op_tutorials_addtutorials'),
('admin', 'op_tutorials_comments'),
('task_tutorials', 'op_tutorials_comments'),
('admin', 'op_tutorials_deletecats'),
('task_tutorials', 'op_tutorials_deletecats'),
('admin', 'op_tutorials_deletecomments'),
('task_tutorials', 'op_tutorials_deletecomments'),
('admin', 'op_tutorials_deletetutorials'),
('task_tutorials', 'op_tutorials_deletetutorials'),
('admin', 'op_tutorials_editcats'),
('task_tutorials', 'op_tutorials_editcats'),
('admin', 'op_tutorials_edittutorials'),
('task_tutorials', 'op_tutorials_edittutorials'),
('admin', 'op_tutorials_manage'),
('task_tutorials', 'op_tutorials_manage'),
('admin', 'op_tutorials_managecats'),
('task_tutorials', 'op_tutorials_managecats'),
('admin', 'op_users_add_users'),
('task_members', 'op_users_add_users'),
('admin', 'op_users_bulk_users'),
('task_members', 'op_users_bulk_users'),
('admin', 'op_users_comment'),
('member', 'op_users_comment'),
('task_members', 'op_users_comment'),
('admin', 'op_users_delete_users'),
('task_members', 'op_users_delete_users'),
('admin', 'op_users_edit_users'),
('task_members', 'op_users_edit_users'),
('admin', 'op_users_manage_comments'),
('task_members', 'op_users_manage_comments'),
('admin', 'task_blog'),
('admin', 'task_custompages'),
('admin', 'task_documentations'),
('admin', 'task_extensions'),
('admin', 'task_forum'),
('admin', 'task_languages'),
('admin', 'task_members'),
('admin', 'task_roles'),
('admin', 'task_settings'),
('admin', 'task_tutorials');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `iso2` char(2) DEFAULT NULL,
  `short_name` varchar(80) NOT NULL DEFAULT '',
  `long_name` varchar(80) NOT NULL DEFAULT '',
  `iso3` char(3) DEFAULT NULL,
  `numcode` varchar(6) DEFAULT NULL,
  `un_member` varchar(12) DEFAULT NULL,
  `calling_code` varchar(8) DEFAULT NULL,
  `cctld` varchar(5) DEFAULT NULL,
  `is_active` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=253 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso2`, `short_name`, `long_name`, `iso3`, `numcode`, `un_member`, `calling_code`, `cctld`, `is_active`) VALUES
(1, 'AF', 'Afghanistan', 'Islamic Republic of Afghanistan', 'AFG', '004', 'yes', '93', '.af', 0),
(2, 'AX', 'Aland Islands', '&Aring;land Islands', 'ALA', '248', 'no', '358', '.ax', 0),
(3, 'AL', 'Albania', 'Republic of Albania', 'ALB', '008', 'yes', '355', '.al', 0),
(4, 'DZ', 'Algeria', 'People''s Democratic Republic of Algeria', 'DZA', '012', 'yes', '213', '.dz', 0),
(5, 'AS', 'American Samoa', 'American Samoa', 'ASM', '016', 'no', '1+684', '.as', 0),
(6, 'AD', 'Andorra', 'Principality of Andorra', 'AND', '020', 'yes', '376', '.ad', 0),
(7, 'AO', 'Angola', 'Republic of Angola', 'AGO', '024', 'yes', '244', '.ao', 0),
(8, 'AI', 'Anguilla', 'Anguilla', 'AIA', '660', 'no', '1+264', '.ai', 0),
(9, 'AQ', 'Antarctica', 'Antarctica', 'ATA', '010', 'no', '672', '.aq', 0),
(10, 'AG', 'Antigua and Barbuda', 'Antigua and Barbuda', 'ATG', '028', 'yes', '1+268', '.ag', 0),
(11, 'AR', 'Argentina', 'Argentine Republic', 'ARG', '032', 'yes', '54', '.ar', 0),
(12, 'AM', 'Armenia', 'Republic of Armenia', 'ARM', '051', 'yes', '374', '.am', 0),
(13, 'AW', 'Aruba', 'Aruba', 'ABW', '533', 'no', '297', '.aw', 0),
(14, 'AU', 'Australia', 'Commonwealth of Australia', 'AUS', '036', 'yes', '61', '.au', 0),
(15, 'AT', 'Austria', 'Republic of Austria', 'AUT', '040', 'yes', '43', '.at', 0),
(16, 'AZ', 'Azerbaijan', 'Republic of Azerbaijan', 'AZE', '031', 'yes', '994', '.az', 0),
(17, 'BS', 'Bahamas', 'Commonwealth of The Bahamas', 'BHS', '044', 'yes', '1+242', '.bs', 0),
(18, 'BH', 'Bahrain', 'Kingdom of Bahrain', 'BHR', '048', 'yes', '973', '.bh', 0),
(19, 'BD', 'Bangladesh', 'People''s Republic of Bangladesh', 'BGD', '050', 'yes', '880', '.bd', 0),
(20, 'BB', 'Barbados', 'Barbados', 'BRB', '052', 'yes', '1+246', '.bb', 0),
(21, 'BY', 'Belarus', 'Republic of Belarus', 'BLR', '112', 'yes', '375', '.by', 0),
(22, 'BE', 'Belgium', 'Kingdom of Belgium', 'BEL', '056', 'yes', '32', '.be', 0),
(23, 'BZ', 'Belize', 'Belize', 'BLZ', '084', 'yes', '501', '.bz', 0),
(24, 'BJ', 'Benin', 'Republic of Benin', 'BEN', '204', 'yes', '229', '.bj', 0),
(25, 'BM', 'Bermuda', 'Bermuda Islands', 'BMU', '060', 'no', '1+441', '.bm', 0),
(26, 'BT', 'Bhutan', 'Kingdom of Bhutan', 'BTN', '064', 'yes', '975', '.bt', 0),
(27, 'BO', 'Bolivia', 'Plurinational State of Bolivia', 'BOL', '068', 'yes', '591', '.bo', 0),
(28, 'BQ', 'Bonaire, Sint Eustatius and Saba', 'Bonaire, Sint Eustatius and Saba', 'BES', '535', 'no', '599', '.bq', 0),
(29, 'BA', 'Bosnia and Herzegovina', 'Bosnia and Herzegovina', 'BIH', '070', 'yes', '387', '.ba', 0),
(30, 'BW', 'Botswana', 'Republic of Botswana', 'BWA', '072', 'yes', '267', '.bw', 0),
(31, 'BV', 'Bouvet Island', 'Bouvet Island', 'BVT', '074', 'no', 'NONE', '.bv', 0),
(32, 'BR', 'Brazil', 'Federative Republic of Brazil', 'BRA', '076', 'yes', '55', '.br', 0),
(33, 'IO', 'British Indian Ocean Territory', 'British Indian Ocean Territory', 'IOT', '086', 'no', '246', '.io', 0),
(34, 'BN', 'Brunei', 'Brunei Darussalam', 'BRN', '096', 'yes', '673', '.bn', 0),
(35, 'BG', 'Bulgaria', 'Republic of Bulgaria', 'BGR', '100', 'yes', '359', '.bg', 0),
(36, 'BF', 'Burkina Faso', 'Burkina Faso', 'BFA', '854', 'yes', '226', '.bf', 0),
(37, 'BI', 'Burundi', 'Republic of Burundi', 'BDI', '108', 'yes', '257', '.bi', 0),
(38, 'KH', 'Cambodia', 'Kingdom of Cambodia', 'KHM', '116', 'yes', '855', '.kh', 0),
(39, 'CM', 'Cameroon', 'Republic of Cameroon', 'CMR', '120', 'yes', '237', '.cm', 0),
(40, 'CA', 'Canada', 'Canada', 'CAN', '124', 'yes', '1', '.ca', 0),
(41, 'CV', 'Cape Verde', 'Republic of Cape Verde', 'CPV', '132', 'yes', '238', '.cv', 0),
(42, 'KY', 'Cayman Islands', 'The Cayman Islands', 'CYM', '136', 'no', '1+345', '.ky', 0),
(43, 'CF', 'Central African Republic', 'Central African Republic', 'CAF', '140', 'yes', '236', '.cf', 0),
(44, 'TD', 'Chad', 'Republic of Chad', 'TCD', '148', 'yes', '235', '.td', 0),
(45, 'CL', 'Chile', 'Republic of Chile', 'CHL', '152', 'yes', '56', '.cl', 0),
(46, 'CN', 'China', 'People''s Republic of China', 'CHN', '156', 'yes', '86', '.cn', 0),
(47, 'CX', 'Christmas Island', 'Christmas Island', 'CXR', '162', 'no', '61', '.cx', 0),
(48, 'CC', 'Cocos (Keeling) Islands', 'Cocos (Keeling) Islands', 'CCK', '166', 'no', '61', '.cc', 0),
(49, 'CO', 'Colombia', 'Republic of Colombia', 'COL', '170', 'yes', '57', '.co', 0),
(50, 'KM', 'Comoros', 'Union of the Comoros', 'COM', '174', 'yes', '269', '.km', 0),
(51, 'CG', 'Congo', 'Republic of the Congo', 'COG', '178', 'yes', '242', '.cg', 0),
(52, 'CK', 'Cook Islands', 'Cook Islands', 'COK', '184', 'some', '682', '.ck', 0),
(53, 'CR', 'Costa Rica', 'Republic of Costa Rica', 'CRI', '188', 'yes', '506', '.cr', 0),
(54, 'CI', 'Cote d''ivoire (Ivory Coast)', 'Republic of C&ocirc;te D''Ivoire (Ivory Coast)', 'CIV', '384', 'yes', '225', '.ci', 0),
(55, 'HR', 'Croatia', 'Republic of Croatia', 'HRV', '191', 'yes', '385', '.hr', 0),
(56, 'CU', 'Cuba', 'Republic of Cuba', 'CUB', '192', 'yes', '53', '.cu', 0),
(57, 'CW', 'Curacao', 'Cura&ccedil;ao', 'CUW', '531', 'no', '599', '.cw', 0),
(58, 'CY', 'Cyprus', 'Republic of Cyprus', 'CYP', '196', 'yes', '357', '.cy', 0),
(59, 'CZ', 'Czech Republic', 'Czech Republic', 'CZE', '203', 'yes', '420', '.cz', 0),
(60, 'CD', 'Democratic Republic of the Congo', 'Democratic Republic of the Congo', 'COD', '180', 'yes', '243', '.cd', 0),
(61, 'DK', 'Denmark', 'Kingdom of Denmark', 'DNK', '208', 'yes', '45', '.dk', 0),
(62, 'DJ', 'Djibouti', 'Republic of Djibouti', 'DJI', '262', 'yes', '253', '.dj', 0),
(63, 'DM', 'Dominica', 'Commonwealth of Dominica', 'DMA', '212', 'yes', '1+767', '.dm', 0),
(64, 'DO', 'Dominican Republic', 'Dominican Republic', 'DOM', '214', 'yes', '1+809, 8', '.do', 0),
(65, 'EC', 'Ecuador', 'Republic of Ecuador', 'ECU', '218', 'yes', '593', '.ec', 0),
(66, 'EG', 'Egypt', 'Arab Republic of Egypt', 'EGY', '818', 'yes', '20', '.eg', 0),
(67, 'SV', 'El Salvador', 'Republic of El Salvador', 'SLV', '222', 'yes', '503', '.sv', 0),
(68, 'GQ', 'Equatorial Guinea', 'Republic of Equatorial Guinea', 'GNQ', '226', 'yes', '240', '.gq', 0),
(69, 'ER', 'Eritrea', 'State of Eritrea', 'ERI', '232', 'yes', '291', '.er', 0),
(70, 'EE', 'Estonia', 'Republic of Estonia', 'EST', '233', 'yes', '372', '.ee', 0),
(71, 'ET', 'Ethiopia', 'Federal Democratic Republic of Ethiopia', 'ETH', '231', 'yes', '251', '.et', 0),
(72, 'FK', 'Falkland Islands (Malvinas)', 'The Falkland Islands (Malvinas)', 'FLK', '238', 'no', '500', '.fk', 0),
(73, 'FO', 'Faroe Islands', 'The Faroe Islands', 'FRO', '234', 'no', '298', '.fo', 0),
(74, 'FJ', 'Fiji', 'Republic of Fiji', 'FJI', '242', 'yes', '679', '.fj', 0),
(75, 'FI', 'Finland', 'Republic of Finland', 'FIN', '246', 'yes', '358', '.fi', 0),
(76, 'FR', 'France', 'French Republic', 'FRA', '250', 'yes', '33', '.fr', 0),
(77, 'GF', 'French Guiana', 'French Guiana', 'GUF', '254', 'no', '594', '.gf', 0),
(78, 'PF', 'French Polynesia', 'French Polynesia', 'PYF', '258', 'no', '689', '.pf', 0),
(79, 'TF', 'French Southern Territories', 'French Southern Territories', 'ATF', '260', 'no', NULL, '.tf', 0),
(80, 'GA', 'Gabon', 'Gabonese Republic', 'GAB', '266', 'yes', '241', '.ga', 0),
(81, 'GM', 'Gambia', 'Republic of The Gambia', 'GMB', '270', 'yes', '220', '.gm', 0),
(82, 'GE', 'Georgia', 'Georgia', 'GEO', '268', 'yes', '995', '.ge', 0),
(83, 'DE', 'Deutschland', 'Federal Republic of Germany', 'DEU', '276', 'yes', '493', '.de', 1),
(84, 'GH', 'Ghana', 'Republic of Ghana', 'GHA', '288', 'yes', '233', '.gh', 0),
(85, 'GI', 'Gibraltar', 'Gibraltar', 'GIB', '292', 'no', '350', '.gi', 0),
(86, 'GR', 'Greece', 'Hellenic Republic', 'GRC', '300', 'yes', '30', '.gr', 0),
(87, 'GL', 'Greenland', 'Greenland', 'GRL', '304', 'no', '299', '.gl', 0),
(88, 'GD', 'Grenada', 'Grenada', 'GRD', '308', 'yes', '1+473', '.gd', 0),
(89, 'GP', 'Guadaloupe', 'Guadeloupe', 'GLP', '312', 'no', '590', '.gp', 0),
(90, 'GU', 'Guam', 'Guam', 'GUM', '316', 'no', '1+671', '.gu', 0),
(91, 'GT', 'Guatemala', 'Republic of Guatemala', 'GTM', '320', 'yes', '502', '.gt', 0),
(92, 'GG', 'Guernsey', 'Guernsey', 'GGY', '831', 'no', '44', '.gg', 0),
(93, 'GN', 'Guinea', 'Republic of Guinea', 'GIN', '324', 'yes', '224', '.gn', 0),
(94, 'GW', 'Guinea-Bissau', 'Republic of Guinea-Bissau', 'GNB', '624', 'yes', '245', '.gw', 0),
(95, 'GY', 'Guyana', 'Co-operative Republic of Guyana', 'GUY', '328', 'yes', '592', '.gy', 0),
(96, 'HT', 'Haiti', 'Republic of Haiti', 'HTI', '332', 'yes', '509', '.ht', 0),
(97, 'HM', 'Heard Island and McDonald Islands', 'Heard Island and McDonald Islands', 'HMD', '334', 'no', 'NONE', '.hm', 0),
(98, 'HN', 'Honduras', 'Republic of Honduras', 'HND', '340', 'yes', '504', '.hn', 0),
(99, 'HK', 'Hong Kong', 'Hong Kong', 'HKG', '344', 'no', '852', '.hk', 0),
(100, 'HU', 'Hungary', 'Hungary', 'HUN', '348', 'yes', '36', '.hu', 0),
(101, 'IS', 'Iceland', 'Republic of Iceland', 'ISL', '352', 'yes', '354', '.is', 0),
(102, 'IN', 'India', 'Republic of India', 'IND', '356', 'yes', '91', '.in', 0),
(103, 'ID', 'Indonesia', 'Republic of Indonesia', 'IDN', '360', 'yes', '62', '.id', 0),
(104, 'IR', 'Iran', 'Islamic Republic of Iran', 'IRN', '364', 'yes', '98', '.ir', 0),
(105, 'IQ', 'Iraq', 'Republic of Iraq', 'IRQ', '368', 'yes', '964', '.iq', 0),
(106, 'IE', 'Ireland', 'Ireland', 'IRL', '372', 'yes', '353', '.ie', 0),
(107, 'IM', 'Isle of Man', 'Isle of Man', 'IMN', '833', 'no', '44', '.im', 0),
(108, 'IL', 'Israel', 'State of Israel', 'ISR', '376', 'yes', '972', '.il', 0),
(109, 'IT', 'Italy', 'Italian Republic', 'ITA', '380', 'yes', '39', '.jm', 0),
(110, 'JM', 'Jamaica', 'Jamaica', 'JAM', '388', 'yes', '1+876', '.jm', 0),
(111, 'JP', 'Japan', 'Japan', 'JPN', '392', 'yes', '81', '.jp', 0),
(112, 'JE', 'Jersey', 'The Bailiwick of Jersey', 'JEY', '832', 'no', '44', '.je', 0),
(113, 'JO', 'Jordan', 'Hashemite Kingdom of Jordan', 'JOR', '400', 'yes', '962', '.jo', 0),
(114, 'KZ', 'Kazakhstan', 'Republic of Kazakhstan', 'KAZ', '398', 'yes', '7', '.kz', 0),
(115, 'KE', 'Kenya', 'Republic of Kenya', 'KEN', '404', 'yes', '254', '.ke', 0),
(116, 'KI', 'Kiribati', 'Republic of Kiribati', 'KIR', '296', 'yes', '686', '.ki', 0),
(117, 'XK', 'Kosovo', 'Republic of Kosovo', '---', '---', 'some', '381', '', 0),
(118, 'KW', 'Kuwait', 'State of Kuwait', 'KWT', '414', 'yes', '965', '.kw', 0),
(119, 'KG', 'Kyrgyzstan', 'Kyrgyz Republic', 'KGZ', '417', 'yes', '996', '.kg', 0),
(120, 'LA', 'Laos', 'Lao People''s Democratic Republic', 'LAO', '418', 'yes', '856', '.la', 0),
(121, 'LV', 'Latvia', 'Republic of Latvia', 'LVA', '428', 'yes', '371', '.lv', 0),
(122, 'LB', 'Lebanon', 'Republic of Lebanon', 'LBN', '422', 'yes', '961', '.lb', 0),
(123, 'LS', 'Lesotho', 'Kingdom of Lesotho', 'LSO', '426', 'yes', '266', '.ls', 0),
(124, 'LR', 'Liberia', 'Republic of Liberia', 'LBR', '430', 'yes', '231', '.lr', 0),
(125, 'LY', 'Libya', 'Libya', 'LBY', '434', 'yes', '218', '.ly', 0),
(126, 'LI', 'Liechtenstein', 'Principality of Liechtenstein', 'LIE', '438', 'yes', '423', '.li', 0),
(127, 'LT', 'Lithuania', 'Republic of Lithuania', 'LTU', '440', 'yes', '370', '.lt', 0),
(128, 'LU', 'Luxembourg', 'Grand Duchy of Luxembourg', 'LUX', '442', 'yes', '352', '.lu', 0),
(129, 'MO', 'Macao', 'The Macao Special Administrative Region', 'MAC', '446', 'no', '853', '.mo', 0),
(130, 'MK', 'Macedonia', 'The Former Yugoslav Republic of Macedonia', 'MKD', '807', 'yes', '389', '.mk', 0),
(131, 'MG', 'Madagascar', 'Republic of Madagascar', 'MDG', '450', 'yes', '261', '.mg', 0),
(132, 'MW', 'Malawi', 'Republic of Malawi', 'MWI', '454', 'yes', '265', '.mw', 0),
(133, 'MY', 'Malaysia', 'Malaysia', 'MYS', '458', 'yes', '60', '.my', 0),
(134, 'MV', 'Maldives', 'Republic of Maldives', 'MDV', '462', 'yes', '960', '.mv', 0),
(135, 'ML', 'Mali', 'Republic of Mali', 'MLI', '466', 'yes', '223', '.ml', 0),
(136, 'MT', 'Malta', 'Republic of Malta', 'MLT', '470', 'yes', '356', '.mt', 0),
(137, 'MH', 'Marshall Islands', 'Republic of the Marshall Islands', 'MHL', '584', 'yes', '692', '.mh', 0),
(138, 'MQ', 'Martinique', 'Martinique', 'MTQ', '474', 'no', '596', '.mq', 0),
(139, 'MR', 'Mauritania', 'Islamic Republic of Mauritania', 'MRT', '478', 'yes', '222', '.mr', 0),
(140, 'MU', 'Mauritius', 'Republic of Mauritius', 'MUS', '480', 'yes', '230', '.mu', 0),
(141, 'YT', 'Mayotte', 'Mayotte', 'MYT', '175', 'no', '262', '.yt', 0),
(142, 'MX', 'Mexico', 'United Mexican States', 'MEX', '484', 'yes', '52', '.mx', 0),
(143, 'FM', 'Micronesia', 'Federated States of Micronesia', 'FSM', '583', 'yes', '691', '.fm', 0),
(144, 'MD', 'Moldava', 'Republic of Moldova', 'MDA', '498', 'yes', '373', '.md', 0),
(145, 'MC', 'Monaco', 'Principality of Monaco', 'MCO', '492', 'yes', '377', '.mc', 0),
(146, 'MN', 'Mongolia', 'Mongolia', 'MNG', '496', 'yes', '976', '.mn', 0),
(147, 'ME', 'Montenegro', 'Montenegro', 'MNE', '499', 'yes', '382', '.me', 0),
(148, 'MS', 'Montserrat', 'Montserrat', 'MSR', '500', 'no', '1+664', '.ms', 0),
(149, 'MA', 'Morocco', 'Kingdom of Morocco', 'MAR', '504', 'yes', '212', '.ma', 0),
(150, 'MZ', 'Mozambique', 'Republic of Mozambique', 'MOZ', '508', 'yes', '258', '.mz', 0),
(151, 'MM', 'Myanmar (Burma)', 'Republic of the Union of Myanmar', 'MMR', '104', 'yes', '95', '.mm', 0),
(152, 'NA', 'Namibia', 'Republic of Namibia', 'NAM', '516', 'yes', '264', '.na', 0),
(153, 'NR', 'Nauru', 'Republic of Nauru', 'NRU', '520', 'yes', '674', '.nr', 0),
(154, 'NP', 'Nepal', 'Federal Democratic Republic of Nepal', 'NPL', '524', 'yes', '977', '.np', 0),
(155, 'NL', 'Netherlands', 'Kingdom of the Netherlands', 'NLD', '528', 'yes', '31', '.nl', 0),
(156, 'NC', 'New Caledonia', 'New Caledonia', 'NCL', '540', 'no', '687', '.nc', 0),
(157, 'NZ', 'New Zealand', 'New Zealand', 'NZL', '554', 'yes', '64', '.nz', 0),
(158, 'NI', 'Nicaragua', 'Republic of Nicaragua', 'NIC', '558', 'yes', '505', '.ni', 0),
(159, 'NE', 'Niger', 'Republic of Niger', 'NER', '562', 'yes', '227', '.ne', 0),
(160, 'NG', 'Nigeria', 'Federal Republic of Nigeria', 'NGA', '566', 'yes', '234', '.ng', 0),
(161, 'NU', 'Niue', 'Niue', 'NIU', '570', 'some', '683', '.nu', 0),
(162, 'NF', 'Norfolk Island', 'Norfolk Island', 'NFK', '574', 'no', '672', '.nf', 0),
(163, 'KP', 'North Korea', 'Democratic People''s Republic of Korea', 'PRK', '408', 'yes', '850', '.kp', 0),
(164, 'MP', 'Northern Mariana Islands', 'Northern Mariana Islands', 'MNP', '580', 'no', '1+670', '.mp', 0),
(165, 'NO', 'Norway', 'Kingdom of Norway', 'NOR', '578', 'yes', '47', '.no', 0),
(166, 'OM', 'Oman', 'Sultanate of Oman', 'OMN', '512', 'yes', '968', '.om', 0),
(167, 'PK', 'Pakistan', 'Islamic Republic of Pakistan', 'PAK', '586', 'yes', '92', '.pk', 0),
(168, 'PW', 'Palau', 'Republic of Palau', 'PLW', '585', 'yes', '680', '.pw', 0),
(169, 'PS', 'Palestine', 'State of Palestine (or Occupied Palestinian Territory)', 'PSE', '275', 'some', '970', '.ps', 0),
(170, 'PA', 'Panama', 'Republic of Panama', 'PAN', '591', 'yes', '507', '.pa', 0),
(171, 'PG', 'Papua New Guinea', 'Independent State of Papua New Guinea', 'PNG', '598', 'yes', '675', '.pg', 0),
(172, 'PY', 'Paraguay', 'Republic of Paraguay', 'PRY', '600', 'yes', '595', '.py', 0),
(173, 'PE', 'Peru', 'Republic of Peru', 'PER', '604', 'yes', '51', '.pe', 0),
(174, 'PH', 'Phillipines', 'Republic of the Philippines', 'PHL', '608', 'yes', '63', '.ph', 0),
(175, 'PN', 'Pitcairn', 'Pitcairn', 'PCN', '612', 'no', 'NONE', '.pn', 0),
(176, 'PL', 'Poland', 'Republic of Poland', 'POL', '616', 'yes', '48', '.pl', 0),
(177, 'PT', 'Portugal', 'Portuguese Republic', 'PRT', '620', 'yes', '351', '.pt', 0),
(178, 'PR', 'Puerto Rico', 'Commonwealth of Puerto Rico', 'PRI', '630', 'no', '1+939', '.pr', 0),
(179, 'QA', 'Qatar', 'State of Qatar', 'QAT', '634', 'yes', '974', '.qa', 0),
(180, 'RE', 'Reunion', 'R&eacute;union', 'REU', '638', 'no', '262', '.re', 0),
(181, 'RO', 'Romania', 'Romania', 'ROU', '642', 'yes', '40', '.ro', 0),
(182, 'RU', 'Russia', 'Russian Federation', 'RUS', '643', 'yes', '7', '.ru', 0),
(183, 'RW', 'Rwanda', 'Republic of Rwanda', 'RWA', '646', 'yes', '250', '.rw', 0),
(184, 'BL', 'Saint Barthelemy', 'Saint Barth&eacute;lemy', 'BLM', '652', 'no', '590', '.bl', 0),
(185, 'SH', 'Saint Helena', 'Saint Helena, Ascension and Tristan da Cunha', 'SHN', '654', 'no', '290', '.sh', 0),
(186, 'KN', 'Saint Kitts and Nevis', 'Federation of Saint Christopher and Nevis', 'KNA', '659', 'yes', '1+869', '.kn', 0),
(187, 'LC', 'Saint Lucia', 'Saint Lucia', 'LCA', '662', 'yes', '1+758', '.lc', 0),
(188, 'MF', 'Saint Martin', 'Saint Martin', 'MAF', '663', 'no', '590', '.mf', 0),
(189, 'PM', 'Saint Pierre and Miquelon', 'Saint Pierre and Miquelon', 'SPM', '666', 'no', '508', '.pm', 0),
(190, 'VC', 'Saint Vincent and the Grenadines', 'Saint Vincent and the Grenadines', 'VCT', '670', 'yes', '1+784', '.vc', 0),
(191, 'WS', 'Samoa', 'Independent State of Samoa', 'WSM', '882', 'yes', '685', '.ws', 0),
(192, 'SM', 'San Marino', 'Republic of San Marino', 'SMR', '674', 'yes', '378', '.sm', 0),
(193, 'ST', 'Sao Tome and Principe', 'Democratic Republic of S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'STP', '678', 'yes', '239', '.st', 0),
(194, 'SA', 'Saudi Arabia', 'Kingdom of Saudi Arabia', 'SAU', '682', 'yes', '966', '.sa', 0),
(195, 'SN', 'Senegal', 'Republic of Senegal', 'SEN', '686', 'yes', '221', '.sn', 0),
(196, 'RS', 'Serbia', 'Republic of Serbia', 'SRB', '688', 'yes', '381', '.rs', 0),
(197, 'SC', 'Seychelles', 'Republic of Seychelles', 'SYC', '690', 'yes', '248', '.sc', 0),
(198, 'SL', 'Sierra Leone', 'Republic of Sierra Leone', 'SLE', '694', 'yes', '232', '.sl', 0),
(199, 'SG', 'Singapore', 'Republic of Singapore', 'SGP', '702', 'yes', '65', '.sg', 0),
(200, 'SX', 'Sint Maarten', 'Sint Maarten', 'SXM', '534', 'no', '1+721', '.sx', 0),
(201, 'SK', 'Slovakia', 'Slovak Republic', 'SVK', '703', 'yes', '421', '.sk', 0),
(202, 'SI', 'Slovenia', 'Republic of Slovenia', 'SVN', '705', 'yes', '386', '.si', 0),
(203, 'SB', 'Solomon Islands', 'Solomon Islands', 'SLB', '090', 'yes', '677', '.sb', 0),
(204, 'SO', 'Somalia', 'Somali Republic', 'SOM', '706', 'yes', '252', '.so', 0),
(205, 'ZA', 'South Africa', 'Republic of South Africa', 'ZAF', '710', 'yes', '27', '.za', 0),
(206, 'GS', 'South Georgia and the South Sandwich Islands', 'South Georgia and the South Sandwich Islands', 'SGS', '239', 'no', '500', '.gs', 0),
(207, 'KR', 'South Korea', 'Republic of Korea', 'KOR', '410', 'yes', '82', '.kr', 0),
(208, 'SS', 'South Sudan', 'Republic of South Sudan', 'SSD', '728', 'yes', '211', '.ss', 0),
(209, 'ES', 'Spain', 'Kingdom of Spain', 'ESP', '724', 'yes', '34', '.es', 0),
(210, 'LK', 'Sri Lanka', 'Democratic Socialist Republic of Sri Lanka', 'LKA', '144', 'yes', '94', '.lk', 0),
(211, 'SD', 'Sudan', 'Republic of the Sudan', 'SDN', '729', 'yes', '249', '.sd', 0),
(212, 'SR', 'Suriname', 'Republic of Suriname', 'SUR', '740', 'yes', '597', '.sr', 0),
(213, 'SJ', 'Svalbard and Jan Mayen', 'Svalbard and Jan Mayen', 'SJM', '744', 'no', '47', '.sj', 0),
(214, 'SZ', 'Swaziland', 'Kingdom of Swaziland', 'SWZ', '748', 'yes', '268', '.sz', 0),
(215, 'SE', 'Sweden', 'Kingdom of Sweden', 'SWE', '752', 'yes', '46', '.se', 0),
(216, 'CH', 'Switzerland', 'Swiss Confederation', 'CHE', '756', 'yes', '41', '.ch', 0),
(217, 'SY', 'Syria', 'Syrian Arab Republic', 'SYR', '760', 'yes', '963', '.sy', 0),
(218, 'TW', 'Taiwan', 'Republic of China (Taiwan)', 'TWN', '158', 'former', '886', '.tw', 0),
(219, 'TJ', 'Tajikistan', 'Republic of Tajikistan', 'TJK', '762', 'yes', '992', '.tj', 0),
(220, 'TZ', 'Tanzania', 'United Republic of Tanzania', 'TZA', '834', 'yes', '255', '.tz', 0),
(221, 'TH', 'Thailand', 'Kingdom of Thailand', 'THA', '764', 'yes', '66', '.th', 0),
(222, 'TL', 'Timor-Leste (East Timor)', 'Democratic Republic of Timor-Leste', 'TLS', '626', 'yes', '670', '.tl', 0),
(223, 'TG', 'Togo', 'Togolese Republic', 'TGO', '768', 'yes', '228', '.tg', 0),
(224, 'TK', 'Tokelau', 'Tokelau', 'TKL', '772', 'no', '690', '.tk', 0),
(225, 'TO', 'Tonga', 'Kingdom of Tonga', 'TON', '776', 'yes', '676', '.to', 0),
(226, 'TT', 'Trinidad and Tobago', 'Republic of Trinidad and Tobago', 'TTO', '780', 'yes', '1+868', '.tt', 0),
(227, 'TN', 'Tunisia', 'Republic of Tunisia', 'TUN', '788', 'yes', '216', '.tn', 0),
(228, 'TR', 'Turkey', 'Republic of Turkey', 'TUR', '792', 'yes', '90', '.tr', 0),
(229, 'TM', 'Turkmenistan', 'Turkmenistan', 'TKM', '795', 'yes', '993', '.tm', 0),
(230, 'TC', 'Turks and Caicos Islands', 'Turks and Caicos Islands', 'TCA', '796', 'no', '1+649', '.tc', 0),
(231, 'TV', 'Tuvalu', 'Tuvalu', 'TUV', '798', 'yes', '688', '.tv', 0),
(232, 'UG', 'Uganda', 'Republic of Uganda', 'UGA', '800', 'yes', '256', '.ug', 0),
(233, 'UA', 'Ukraine', 'Ukraine', 'UKR', '804', 'yes', '380', '.ua', 0),
(234, 'AE', 'United Arab Emirates', 'United Arab Emirates', 'ARE', '784', 'yes', '971', '.ae', 0),
(235, 'GB', 'United Kingdom', 'United Kingdom of Great Britain and Nothern Ireland', 'GBR', '826', 'yes', '44', '.uk', 0),
(236, 'US', 'United States', 'United States of America', 'USA', '840', 'yes', '1', '.us', 0),
(237, 'UM', 'United States Minor Outlying Islands', 'United States Minor Outlying Islands', 'UMI', '581', 'no', 'NONE', 'NONE', 0),
(238, 'UY', 'Uruguay', 'Eastern Republic of Uruguay', 'URY', '858', 'yes', '598', '.uy', 0),
(239, 'UZ', 'Uzbekistan', 'Republic of Uzbekistan', 'UZB', '860', 'yes', '998', '.uz', 0),
(240, 'VU', 'Vanuatu', 'Republic of Vanuatu', 'VUT', '548', 'yes', '678', '.vu', 0),
(241, 'VA', 'Vatican City', 'State of the Vatican City', 'VAT', '336', 'no', '39', '.va', 0),
(242, 'VE', 'Venezuela', 'Bolivarian Republic of Venezuela', 'VEN', '862', 'yes', '58', '.ve', 0),
(243, 'VN', 'Vietnam', 'Socialist Republic of Vietnam', 'VNM', '704', 'yes', '84', '.vn', 0),
(244, 'VG', 'Virgin Islands, British', 'British Virgin Islands', 'VGB', '092', 'no', '1+284', '.vg', 0),
(245, 'VI', 'Virgin Islands, US', 'Virgin Islands of the United States', 'VIR', '850', 'no', '1+340', '.vi', 0),
(246, 'WF', 'Wallis and Futuna', 'Wallis and Futuna', 'WLF', '876', 'no', '681', '.wf', 0),
(247, 'EH', 'Western Sahara', 'Western Sahara', 'ESH', '732', 'no', '212', '.eh', 0),
(248, 'YE', 'Yemen', 'Republic of Yemen', 'YEM', '887', 'yes', '967', '.ye', 0),
(249, 'ZM', 'Zambia', 'Republic of Zambia', 'ZMB', '894', 'yes', '260', '.zm', 0),
(250, 'ZW', 'Zimbabwe', 'Republic of Zimbabwe', 'ZWE', '716', 'yes', '263', '.zw', 0),
(251, '', '', '', '', '', NULL, '', '', 0),
(252, 'DE', 'Deutschland', 'Federal Republic of Germany', 'DEU', '276', NULL, '493', '.de', 0);

-- --------------------------------------------------------

--
-- Table structure for table `extensions`
--

CREATE TABLE IF NOT EXISTS `extensions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `catid` int(10) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `alias` varchar(125) NOT NULL DEFAULT '',
  `language` varchar(125) NOT NULL DEFAULT '',
  `metadesc` varchar(255) NOT NULL DEFAULT '',
  `metakeys` varchar(255) NOT NULL DEFAULT '',
  `views` int(10) NOT NULL DEFAULT '0',
  `rating` int(10) NOT NULL DEFAULT '0',
  `totalvotes` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `authorid` int(10) NOT NULL DEFAULT '0',
  `postdate` int(10) NOT NULL DEFAULT '0',
  `last_updated_date` int(10) NOT NULL DEFAULT '0',
  `last_updated_author` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `catid` (`catid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `extensions`
--


-- --------------------------------------------------------

--
-- Table structure for table `extensionscats`
--

CREATE TABLE IF NOT EXISTS `extensionscats` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parentid` int(10) DEFAULT NULL,
  `title` varchar(155) NOT NULL DEFAULT '',
  `alias` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `language` varchar(125) NOT NULL DEFAULT '',
  `position` int(10) NOT NULL DEFAULT '0',
  `metadesc` varchar(255) NOT NULL DEFAULT '',
  `metakeys` varchar(255) NOT NULL DEFAULT '',
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  `viewperms` text,
  `addpostsperms` text,
  `addcommentsperms` text,
  `addfilesperms` text,
  `autoaddperms` text,
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `parentid` (`parentid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `extensionscats`
--


-- --------------------------------------------------------

--
-- Table structure for table `extensionscomments`
--

CREATE TABLE IF NOT EXISTS `extensionscomments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `postid` varchar(125) NOT NULL DEFAULT '',
  `authorid` int(10) NOT NULL DEFAULT '0',
  `postdate` int(10) NOT NULL DEFAULT '0',
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `postid` (`postid`),
  KEY `authorid` (`authorid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `extensionscomments`
--


-- --------------------------------------------------------

--
-- Table structure for table `extensionsfiles`
--

CREATE TABLE IF NOT EXISTS `extensionsfiles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `extensionid` varchar(125) NOT NULL DEFAULT '',
  `authorid` int(10) NOT NULL DEFAULT '0',
  `postdate` int(10) NOT NULL DEFAULT '0',
  `size` int(10) NOT NULL DEFAULT '0',
  `type` char(10) NOT NULL DEFAULT '',
  `mime` varchar(125) NOT NULL DEFAULT '',
  `location` varchar(125) NOT NULL DEFAULT '',
  `realname` varchar(125) NOT NULL DEFAULT '',
  `alias` varchar(125) NOT NULL DEFAULT '',
  `description` varchar(125) NOT NULL DEFAULT '',
  `downloads` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `extensionid` (`extensionid`),
  KEY `authorid` (`authorid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `extensionsfiles`
--


-- --------------------------------------------------------

--
-- Table structure for table `lookup`
--

CREATE TABLE IF NOT EXISTS `lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) CHARACTER SET utf8 NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=73 ;

--
-- Dumping data for table `lookup`
--

INSERT INTO `lookup` (`id`, `name`, `code`, `type`, `position`) VALUES
(1, 'Right', 2, 'BannerPosition', 2),
(2, 'Top content', 1, 'BannerPosition', 1),
(3, 'Image', 1, 'BannerType', 1),
(4, 'Flash', 2, 'BannerType', 2),
(5, 'HTML code', 3, 'BannerType', 3),
(6, 'Open', 1, 'PaymentStatus', 1),
(7, 'Approved', 2, 'PaymentStatus', 2),
(8, 'Cancelled', 3, 'PaymentStatus', 3),
(9, 'Inpayment', 1, 'PaymentType', 1),
(10, 'Withdraw', 2, 'PaymentType', 2),
(11, 'Bid', 3, 'PaymentType', 3),
(12, 'Order on Product', 4, 'PaymentType', 4),
(13, 'About Onecentdeal', 1, 'HelpTopic', 1),
(14, 'Register', 2, 'HelpTopic', 2),
(15, 'Normal bid', 1, 'BidType', 1),
(16, 'Free bid', 2, 'BidType', 2),
(17, 'Half bid', 3, 'BidType', 3),
(18, 'Joker bid', 4, 'BidType', 4),
(19, 'Direct Buy', 1, 'OrderItemType', 1),
(20, 'Win auction', 2, 'OrderItemType', 2),
(21, 'Coupon', 3, 'OrderItemType', 3),
(22, 'Fixed amount discount', 1, 'CouponType', 1),
(23, 'Percent of cart amount discount', 2, 'CouponType', 2),
(24, 'Active', 1, 'ActiveStatus', 1),
(25, 'Inactive', 2, 'ActiveStatus', 2),
(26, 'Order', 5, 'PaymentType', 5),
(27, 'Single bid', 1, 'BidStatus', 1),
(28, 'Multi bid', 2, 'BidStatus', 2),
(29, 'Lowest bid', 3, 'BidStatus', 3),
(30, 'Active', 1, 'AuctionStatus', 1),
(31, 'Future', 2, 'AuctionStatus', 2),
(32, 'Finished', 3, 'AuctionStatus', 3),
(33, 'Low-price', 1, 'AuctionType', 1),
(34, 'Basic', 2, 'AuctionType', 2),
(35, 'Cashback 2. position', 6, 'PaymentType', 6),
(36, 'Cashback 3. position', 7, 'PaymentType', 7),
(37, 'Pending', 1, 'OrderStatus', 1),
(38, 'Processing', 2, 'OrderStatus', 2),
(39, 'Closed', 3, 'OrderStatus', 3),
(40, 'Canceled', 4, 'OrderStatus', 4),
(41, 'Facebook', 1, 'SourceFrom', 1),
(42, 'Google', 2, 'SourceFrom', 2),
(43, 'Advertisement', 3, 'SourceFrom', 3),
(44, 'Special bonus', 8, 'PaymentType', 8),
(45, 'Inpayment bonus', 9, 'PaymentType', 9),
(46, 'Credit Direct purchase', 10, 'PaymentType', 10),
(47, 'About Bidding', 3, 'HelpTopic', 3),
(48, 'Auctions', 4, 'HelpTopic', 4),
(49, 'My profile', 5, 'HelpTopic', 5),
(50, 'Payment', 6, 'HelpTopic', 6),
(51, 'Winning confirm', 7, 'HelpTopic', 8),
(52, 'Order/shipping', 8, 'HelpTopic', 7),
(53, 'Complain/returns', 9, 'HelpTopic', 9),
(54, 'Technic request/ Problem', 10, 'HelpTopic', 10),
(55, 'Other questions ', 11, 'HelpTopic', 11),
(56, 'No', 0, 'StatusCountry', 0),
(57, 'Yes', 1, 'StatusCountry', 1),
(58, 'Pre payment', 1, 'OrderType', 1),
(59, 'Paypal', 2, 'OrderType', 2),
(60, 'Auto Standard', 1, 'DeliveryWay', 1),
(61, 'Hermes Standard', 2, 'DeliveryWay', 2),
(66, 'Without phase', 1, 'AuctionPhase', 1),
(67, 'Hot', 2, 'AuctionPhase', 2),
(68, 'Without phase', 1, 'AuctionPhase', 1),
(69, 'End now', 3, 'AuctionPhase', 3),
(70, 'End today', 4, 'AuctionPhase', 4),
(71, 'Fee join in Basic aution', 11, 'PaymentType', 11),
(72, 'Register', 5, 'AuctionStatus', 5);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) NOT NULL DEFAULT '0',
  `username` varchar(155) NOT NULL DEFAULT '',
  `gender` tinyint(1) DEFAULT NULL,
  `email` varchar(155) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `sourcefrom` text,
  `coupon` int(255) DEFAULT NULL,
  `joined` int(10) NOT NULL DEFAULT '0',
  `data` text,
  `passwordreset` char(40) NOT NULL DEFAULT '',
  `role` char(30) NOT NULL DEFAULT 'user',
  `ipaddress` char(30) NOT NULL DEFAULT '',
  `seoname` varchar(155) NOT NULL DEFAULT '',
  `fbuid` int(10) NOT NULL DEFAULT '0',
  `fbtoken` varchar(255) NOT NULL DEFAULT '',
  `fname` varchar(40) NOT NULL DEFAULT '',
  `lname` varchar(40) NOT NULL DEFAULT '',
  `birthday` date DEFAULT NULL,
  `photo` varchar(155) NOT NULL DEFAULT '',
  `address` varchar(155) NOT NULL DEFAULT '',
  `phone` varchar(40) NOT NULL DEFAULT '',
  `vericode` char(40) NOT NULL DEFAULT '',
  `current_plan` int(10) NOT NULL DEFAULT '0',
  `street` varchar(255) DEFAULT NULL,
  `nr` varchar(255) DEFAULT NULL,
  `ext_information` varchar(255) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(155) NOT NULL DEFAULT '',
  `country_id` int(11) NOT NULL,
  `shipping_street` varchar(255) DEFAULT NULL,
  `shipping_nr` varchar(255) DEFAULT NULL,
  `shipping_ext_information` varchar(255) DEFAULT NULL,
  `shipping_postcode` int(11) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_state` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(155) DEFAULT NULL,
  `shipping_country_id` int(11) DEFAULT NULL,
  `shipping_fname` varchar(40) DEFAULT NULL,
  `shipping_lname` varchar(40) DEFAULT NULL,
  `shipping_email` varchar(255) DEFAULT NULL,
  `shipping_phone` varchar(40) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `last_logged` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `FK_members` (`country_id`),
  KEY `FK_members2` (`shipping_country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=235 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `parent_id`, `username`, `gender`, `email`, `password`, `sourcefrom`, `coupon`, `joined`, `data`, `passwordreset`, `role`, `ipaddress`, `seoname`, `fbuid`, `fbtoken`, `fname`, `lname`, `birthday`, `photo`, `address`, `phone`, `vericode`, `current_plan`, `street`, `nr`, `ext_information`, `postcode`, `state`, `city`, `country_id`, `shipping_street`, `shipping_nr`, `shipping_ext_information`, `shipping_postcode`, `shipping_address`, `shipping_state`, `shipping_city`, `shipping_country_id`, `shipping_fname`, `shipping_lname`, `shipping_email`, `shipping_phone`, `status`, `last_logged`) VALUES
(1, 0, 'admin', 0, 'admin@yopmail.com', '75489b52a82e0175f5163d1967d1c6f1a84d6c6d', NULL, NULL, 1375376400, NULL, '', 'admin', '', 'admin', 0, '', 'sdfsdf', 'sdfsdf', '0000-00-00', '', 'Da Nang', '219879505', '', 0, 'sdf', '402', '', 12345, 'Da Nang', 'Da Nang', 243, 'Olso1234', '4020', '', 12345, 'Da Nang', 'Da Nang', 'Da Nang', 243, 'sdfsdf', 'sdfsdf', 'admin@yopmail.com', '219879505', 0, '2014-07-29 09:52:20'),
(2, 0, 'mod1', 0, 'johnmccartney@yopmail.com', '75489b52a82e0175f5163d1967d1c6f1a84d6c6d', NULL, NULL, 1375376400, NULL, '', 'mod', '127.0.0.1', 'mod1', 0, '', 'Tester1', 'Tester1', '1990-01-22', '', '422 CMT8', '09444444454546', '694d205061cd9c973659610e37498f72320d72b3', 0, 'wienstr.', '66', '', 80997, NULL, 'München', 83, 'Olso', '', '', 456, NULL, NULL, 'Berlin', 83, 'Xuan', 'Giac', NULL, '094444444', 0, '2014-04-08 06:16:09'),
(4, 0, 'admin267', 1, 'johnmccartney@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1375376400, NULL, '', 'affiliate', '127.0.0.1', 'admin267', 0, '', 'Nguyen', 'Hoc', '1988-01-18', '', 'berlin', '09090909090', '2f4ed385efd10ece55614e0186383ab194203651', 0, 'Olso', '30', '', 123, 'german', 'Berlin', 81, 'Olso', '30', NULL, 123, 'Berlin', 'Berlin', 'Berlin', 83, 'Nguyen', 'Giac', 'johnmccartney@yopmail.com', '0909090909', 0, '2014-07-11 17:08:26'),
(16, 0, 'tester', 0, 'johnmccartney@yopmail.com', '75489b52a82e0175f5163d1967d1c6f1a84d6c6d', 're', 343, 1375376400, NULL, '', 'user', '192.168.1.25', 'tester', 0, '', 'judithds', 'pa', '1990-01-22', '', '', '2346567687', '39596f629b35423b79672d31747254339d0179da', 0, 'Bali', '343', 'Da Nang', 343, NULL, '3435', 243, 'Da Nang', '343', NULL, 343, NULL, NULL, '3435', 243, 'thu', 'ba', NULL, '2346567687', 0, '2014-01-02 13:58:34'),
(17, 0, 'jonny', 1, 'johnmccartney@yopmail.com', 'a963f061551ff16caa5851161a57caa8f35c071c', '', NULL, 1375427483, NULL, '', 'user', '127.0.0.1', 'jonny', 0, '', 'Tom', 'Path', '1990-01-22', '', '', '343434234324234', '774514648052719270ae95c473532e4272295b54', 0, 'Mano', '34', '', 84, NULL, '1231212121', 243, 'dong da', '34', NULL, 84, NULL, NULL, '1231212121', 243, 'hoc', 'nguyen', NULL, '343434234324234', 0, '2014-01-21 05:00:00'),
(27, 0, 'marcoreus2', 1, 'johnm@yopmail.com', '0163495d74456bae510ef138a112e96481a9f334', '', NULL, 1375427483, NULL, '', 'admin', '127.0.0.1', 'marcoreus2', 0, '', 'Giac', 'Nguyen', '1990-01-22', '', '', '0909090909', '4827658dedb7280f62732d663be2b449336786d5', 0, 'Olso', '30', 'Dortmund', 123, NULL, 'Dortmund', 5, 'Olso', '30', NULL, 123, NULL, NULL, 'Dortmund', 5, 'Giac', 'Nguyen', NULL, '0909090909', 0, '0000-00-00 00:00:00'),
(29, 0, 'Martin', 1, 'martin.luth@yopmail.com', 'd2b1b03628b21957e4d5c64524843d6a20ff9f82', '', NULL, 1375427483, NULL, '', 'admin', '192.168.1.16', 'martin', 0, '', 'Martin ', 'Luther', '1990-01-22', '', '', '0123456789', '3e3b614b5b8f7f897a152edb74d535a640a660b0', 0, 'Berlinerstr.', '50', '', 15700, NULL, 'Berlin', 83, 'Berlinerstr.', '50', NULL, 15700, NULL, NULL, 'Berlin', 83, 'Martin ', 'Luther', NULL, '0123456789', 1, '0000-00-00 00:00:00'),
(30, 0, 'harry', 1, 'ccartney@yopmail.com', '0ccfff14223e8237ab5d20f3357869666fae2e4f', '', NULL, 1375427483, NULL, '', 'user', '192.168.1.16', 'harry', 0, '', 'Murey', 'Tare ', '1990-01-22', '', '', '312154545', '8ce685c3d325568736f479dfd5e740ae5bfd0be2', 0, 'CMT*', '12', '', 1312, NULL, 'fdfđf', 240, 'CMT*', '12', NULL, 1312, NULL, NULL, 'fdfđf', 240, 'hanh', 'tran', NULL, '312154545', 0, '0000-00-00 00:00:00'),
(31, 0, 'mana', 1, 'mana.gana@yopmail.com', '996a0f76f6b254cfaee2a334f1849f506c0c87a6', '', NULL, 1375427483, NULL, '', 'user', '113.162.115.174', 'mana', 0, '', 'mana', 'gana', '1990-01-22', '', '', '', 'd5a065279de1c80a0e8da875a4e7fc83671895e4', 0, '', '', '', NULL, NULL, '', 18, '', '', NULL, NULL, NULL, NULL, '', 18, 'hanh', 'tran', NULL, '', 0, '0000-00-00 00:00:00'),
(33, 0, 'hanakimikimi', 0, 'hana@yopmail.com', '25a4d2b6a19164f94bfd380fed97ecd9730f95d1', '', NULL, 1375427483, NULL, '', 'user', '113.162.114.198', 'hanakimikimi', 0, '', 'lama', 'laman', '1990-01-22', '', '', '124234343', 'a7e84d8348bdecf3e3830635acc560e8d8403170', 0, 'Abc', '123', '', 4654131, NULL, 'Moskow', 182, 'Abc', '123', '', 4654131, NULL, NULL, 'Moskow', 182, 'hana', 'tango', NULL, '124234343', 0, '0000-00-00 00:00:00'),
(34, 0, 'monkey', 0, 'ten@yopmail.com', 'a963f061551ff16caa5851161a57caa8f35c071c', '', NULL, 1375427483, NULL, '', 'admin', '113.162.114.198', 'monkey', 0, '', 'monkey', 'monkey', '1990-01-22', '', '', '13545', '708ca6235a9ceb59c089fa7f68df2194688ea1b5', 0, 'street', '14', '', 123, NULL, '123', 243, 'street', '14', '', 123, NULL, NULL, '123', 243, 'monkey', 'monkey', NULL, '13545', 0, '0000-00-00 00:00:00'),
(35, 0, 'hanakimi', 0, 'hana@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1375376400, NULL, '', 'user', '113.162.114.198', 'hanakimi', 0, '', 'han', 'kim', '1970-01-01', '', '', '0165485', '316a19c5c6dbf67a001cc127b499e09de3004eec', 0, 'Bolobala`', '12', '', 163545, NULL, 'sjdskdjs', 241, 'Bolobala`', '12', '', 163545, NULL, NULL, 'sjdskdjs', 241, 'han', 'kim', NULL, '0165485', 0, '0000-00-00 00:00:00'),
(61, 0, 'athur', 1, 'athur@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1375427483, NULL, '', 'user', '113.162.114.198', 'athur', 0, '', 'dfdgf', 'gfgf', '1990-01-22', '', '', 'gfgfgfg', 'd0f898d4db4c70f72a0da5b9a43ec54a512ed16d', 0, 'gfgf', 'gfgf', '', 198, NULL, 'gfgfgf', 19, 'gfgf', 'gfgf', '', 198, NULL, NULL, 'gfgfgf', 19, 'dfdgf', 'gfgf', NULL, 'gfgfgfg', 0, '0000-00-00 00:00:00'),
(67, 0, 'Jony', 0, 'Jony@yopmail.com', 'f10b30dde9353c0ba231f1a11617e5c4d05703b8', '', NULL, 1375427483, NULL, '', 'user', '113.162.114.198', 'jony', 0, '', 'Jony', 'Jony', '1990-01-22', '', '', '0124567511', '23998c8f51fca04f492856e4ed658c7781fe4dea', 0, 'London', '32', 'nothing', 4334, NULL, '123', 19, 'London', '32', 'nothing', 4334, NULL, NULL, '123', 19, 'Jony', 'Jony', NULL, '0124567511', 0, '0000-00-00 00:00:00'),
(69, 0, 'tara', 0, 'tara@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1375432365, NULL, '', 'user', '113.162.114.198', 'tara', 0, '', 'vbvb', 'bvbv', '1990-01-22', '', '', '085778', 'd1251551ccb7963f20deed5411752842b249dfe1', 0, 'bvbvbv', '12', '', 4154, NULL, 'bvbvbv', 17, 'bvbvbv', '12', '', 4154, NULL, NULL, 'bvbvbv', 17, 'vbvb', 'bvbv', NULL, '085778', 0, '0000-00-00 00:00:00'),
(70, 0, 'Davin', 0, 'davin@yopmail.com', '0163495d74456bae510ef138a112e96481a9f334', '', NULL, 1375432813, NULL, '', 'guest', '113.162.114.198', 'davin', 0, '', 'Davin', 'Davin', '1990-01-22', '', '', '0124567511', 'efcb8bb0e0ecf8eee09aa8cf44ebbdcd8b7edf94', 0, 'London', '32', 'nothing', 4334, NULL, '4342', 5, 'London', '32', 'nothing', 4334, NULL, NULL, '4342', 5, 'Davin', 'Davin', NULL, '0124567511', 0, '0000-00-00 00:00:00'),
(72, 0, 'Marry', 0, 'marry@yopmail.com', 'e46024163ba03c25e50abc5cab43d25769a7bc78', '', NULL, 1375432999, NULL, '', 'guest', '113.162.114.198', 'marry', 0, '', 'marry', 'hhgjh', '1990-01-22', '', '', '0124567511', '8d7db567b3ee218b281e834739effc44b8fe072e', 0, 'London', '32', 'nothing', 324, NULL, '342', 19, 'London', '32', 'nothing', 324, NULL, NULL, '342', 19, 'marry', 'hhgjh', NULL, '0124567511', 0, '0000-00-00 00:00:00'),
(73, 0, 'reus12', 1, 'test1@gmail.com', 'c5eb2d608073fe37c6bfcc895a39f371b76f5377', '', NULL, 1375433035, NULL, '', 'guest', '113.162.114.198', 'reus12', 0, '', 'Marco', 'Reus', '1990-01-22', '', '', '1212121212', 'b2d484c9af05cb022790d08b4e8f42e7c9b2015d', 0, 'Olsoa', '401', '', 12345, NULL, 'Berlin1', 243, 'Olsoa', '401', '', 12345, NULL, NULL, 'Berlin1', 243, 'Marco', 'Reus', NULL, '1212121212', 0, '0000-00-00 00:00:00'),
(74, 0, 'crazy', 1, 'crazy@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1375376400, NULL, '', 'affiliate', '113.162.114.198', 'crazy', 0, '', 'fdfd', 'dfdf', '1990-01-22', '', '', '015645', '5a87fb9321e2bab7ad9044e8c7450f79ffe24126', 0, 'fdfdf', '23', '', 545, NULL, 'fdfdf', 11, 'fdfdf', '23', '', 545, NULL, NULL, 'fdfdf', 11, 'fdfd', 'dfdf', NULL, '015645', 0, '2014-06-05 09:23:00'),
(75, 0, 'Mary', 0, 'mary@yopmail.com', '0163495d74456bae510ef138a112e96481a9f334', '', NULL, 1375433123, NULL, '', 'guest', '113.162.114.198', 'mary', 0, '', 'dfsd', 'dfs', '1990-01-22', '', '', '342324234', '47c894585b7116857077d49a705d57fdc49fc8b9', 0, 'dfs', '43', 'dfs', 324, NULL, '432', 18, 'dfs', '43', 'dfs', 324, NULL, NULL, '432', 18, 'dfsd', 'dfs', NULL, '342324234', 0, '0000-00-00 00:00:00'),
(76, 0, 'curso', 1, 'test1@yopmail.com', 'c5eb2d608073fe37c6bfcc895a39f371b76f5377', '', NULL, 1375433138, NULL, '', 'guest', '113.162.114.198', 'curso', 0, '', 'Marco', 'Reus', '1990-01-22', '', '', '841212121212', '889eb2e58f7d2aa1e9e0862b51d135dbc982b771', 0, 'Olsoa', 'Olsoa', '', 12345, NULL, 'Berlin1', 4, 'Olsoa', 'Olsoa', '', 12345, NULL, NULL, 'Berlin1', 4, 'Marco', 'Reus', NULL, '841212121212', 0, '0000-00-00 00:00:00'),
(77, 0, 'gana', 0, 'gana@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1375433230, NULL, '', 'guest', '113.162.114.198', 'gana', 0, '', 'dtrt', 'tyty', '1990-01-22', '', '', '2184', '5d01e33298da171dfbe97d8f9a375a7492ee2246', 0, 'rtrt', '2', '', 24524, NULL, 'gfgfh', 1, 'rtrt', '2', '', 24524, NULL, NULL, 'gfgfh', 1, 'dtrt', 'tyty', NULL, '2184', 0, '0000-00-00 00:00:00'),
(78, 0, 'Jon', 0, 'jon@yopmail.com', '0163495d74456bae510ef138a112e96481a9f334', '', NULL, 1375433411, NULL, '', 'guest', '113.162.114.198', 'jon', 0, '', 'df', 'dfs', '1990-01-22', '', '', '34', '1431dabed0d898155977d27c008fa1b17dc44f8b', 0, 'fds', '645', 'dfwer', 3423, NULL, '432', 15, 'fds', '645', 'dfwer', 3423, NULL, NULL, '432', 15, 'df', 'dfs', NULL, '34', 0, '0000-00-00 00:00:00'),
(79, 0, 'kevin', 1, 'kevin@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1375376400, NULL, '', 'affiliate', '113.162.114.198', 'kevin', 0, '', 'Kevin', 'Narsi', '1990-01-22', '', '', '12312313', '04ee70ff97181e5af4f100022a280cf4dc4dc292', 0, 'Oska', '12', '', 13, NULL, 'Oska', 16, 'Oska', '12', '', 13, NULL, NULL, 'Oska', 16, 'Kevin', 'Narsi', NULL, '12312313', 0, '2014-06-05 09:07:00'),
(80, 0, 'god', 1, 'god@yopmail.com', '75489b52a82e0175f5163d1967d1c6f1a84d6c6d', '', NULL, 1375376400, NULL, '', 'affiliate', '113.162.114.198', 'god', 0, '', 'yfghgh', 'ghgh', '1990-01-22', '', '', '0544', 'ff734d23f1ff63b0973b5e5f621174153fe17cea', 0, 'hhg', '1', '', 25465, NULL, 'dfdfd', 18, 'hhg', '1', '', 25465, NULL, NULL, 'dfdfd', 18, 'yfghgh', 'ghgh', NULL, '0544', 0, '2014-06-05 15:12:00'),
(81, 0, 'accountant', 0, 'accountant@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1375438527, NULL, '', 'user', '113.162.114.198', 'accountant', 0, '', 'accountant', 'dfsd', '1990-01-22', '', '', '3435435643', '27f770beb621d7a9988d6a1b43dfa1f281bebb64', 0, 'fdf', '34', 'dfs', 23, NULL, '342', 18, 'fdf', '34', 'dfs', 23, NULL, NULL, '342', 18, 'accountant', 'dfsd', NULL, '3435435643', 0, '0000-00-00 00:00:00'),
(82, 0, 'harrypotter', 1, 'harry@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1375438558, NULL, '74830bf4d0607b705dff2dc8652f14975fafc094', 'user', '113.162.114.198', 'harrypotter', 0, '', 'fdgdg', 'gfgfg', '1990-01-22', '', '', '0188445', '27c072f0803ac87fbf4dcafec47bab80735dbc21', 0, 'gfgfg', '12', '', 4879, NULL, 'fdfdf', 16, 'gfgfg', '12', '', 4879, NULL, NULL, 'fdfdf', 16, 'fdgdg', 'gfgfg', NULL, '0188445', 0, '0000-00-00 00:00:00'),
(83, 0, 'cat', 0, 'cat@gmail.com', 'be0e2a16dc49e3a6d4003335b720a979df589b7f', '', NULL, 1375494596, NULL, '', 'guest', '113.162.114.198', 'cat', 0, '', 'dfdfd', 'fdfdf', '1990-01-22', '', '', '34345354', '7d487d27f3421f7ac10ba364d48a4ec0338dbf13', 0, 'fdfdf', '5', '', 5483, NULL, 'Mongo', 146, 'fdfdf', '5', '', 5483, NULL, NULL, 'Mongo', 146, 'dfdfd', 'fdfdf', NULL, '34345354', 0, '0000-00-00 00:00:00'),
(84, 0, 'nana', 1, 'nana@yopgmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1375494720, NULL, '', 'guest', '113.162.114.198', 'nana', 0, '', 'dgfgfg', 'gfgffg', '1990-01-22', '', '', '23243545', '1e51c821c536435dcef3f3480c1a6784a8d48896', 0, 'gfgfg', 'fdfd', '', 18924, NULL, 'dfddfd', 18, 'gfgfg', 'fdfd', '', 18924, NULL, NULL, 'dfddfd', 18, 'dgfgfg', 'gfgffg', NULL, '23243545', 0, '0000-00-00 00:00:00'),
(85, 0, 'catmini', 1, 'cat@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1375427483, NULL, '', 'user', '113.162.114.198', 'catmini', 0, '', 'mini', 'cat', '1990-01-22', '', '', '0298493438', '163946f48afdfee6c522bff96d0c768598b184fb', 0, 'tangra', '12s', '', 92478, NULL, 'Madra', 17, 'bra', '1', '', 92478, NULL, NULL, 'Barley', 103, 'cat', 'mini', NULL, '0298493438', 0, '0000-00-00 00:00:00'),
(86, 0, 'ronaldo', 1, 'ronaldo@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1375376400, NULL, '', 'user', '113.162.114.198', 'ronaldo', 0, '', 'Ronaldo', 'Cris', '0000-00-00', '', '', '12321321321', '3f4d5c6fe294e3d0f10fa26df50996caac09e642', 0, 'Portugal', '13', '', 546, NULL, 'Portugal', 177, 'Portugal', '13', '', 546, NULL, NULL, 'Portugal', 177, 'Ronaldo', 'Cris', NULL, '12321321321', 0, '2013-12-16 08:39:00'),
(87, 0, 'lovely', 0, 'mttba.dsna@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1375376400, NULL, '', 'user', '113.162.114.198', 'lovely', 0, '', 'lovely', 'dfs', '1990-01-22', '', '', '354657', '306f560b94b9e6027a1185fe8f492081c38fe703', 0, 'r3r', '545', '545', 54, NULL, '53', 19, 'r3r', '545', '545', 54, NULL, NULL, '53', 19, 'lovely', 'dfs', NULL, '354657', 1, '2014-01-03 10:33:24'),
(88, 0, 'phil', 1, 'phil@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1375498585, NULL, '', 'guest', '113.162.114.198', 'phil', 0, '', 'job', 'phil', '1990-01-22', '', '', '342324234', '0d9fb6a49d53030bc2efc1423c4771c274d46689', 0, 'usa', '12', '', 23, NULL, 'usa', 17, 'usa', '12', '', 23, NULL, NULL, 'usa', 17, 'job', 'phil', NULL, '342324234', 0, '0000-00-00 00:00:00'),
(89, 0, 'eukoop', 1, 'eukoop@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1375427483, NULL, '', 'user', '178.26.168.203', 'eukoop', 0, '', 'Eugen', 'Koop', '1990-01-22', '', '', '0176666666666', '945ef4ebf054bb21a201a1cb9f9f5c2b224205d2', 0, 'Amselweg', '8', '', 85283, NULL, 'Wolnzach', 83, 'Amselweg', '8', '', 85283, NULL, NULL, 'Wolnzach', 83, 'Eugen', 'Koop', NULL, '0176666666666', 0, '2013-10-08 21:49:54'),
(91, 0, 'dealstar', 1, 'm-arlt@gmx.de', '3c5e74789bc6158df041bc06dd51d738188fd1da', '???', NULL, 1375394400, NULL, '', 'user', '188.193.92.148', 'dealstar', 0, '', 'Max', 'Testermann', '1990-01-22', '', '', '0189772662', '06f609a0f038f45dfb98af07bbed025ae68fd77b', 0, 'Maximilianstraße', '157c', '', 23423, NULL, 'Onecentcity', 83, 'Maximilianstraße', '157c', '', 23423, NULL, NULL, 'Onecentcity', 83, 'Max', 'Testermann', NULL, '0189772662', 0, '2013-10-21 18:28:09'),
(92, 0, 'ArltTom', 1, 'thomas.arlt@yopmail.com', 'aa6fbbc76b5662d735fede48226c7e717d6295d4', '', NULL, 1375394400, NULL, '', 'admin', '188.193.92.148', 'arlttom', 0, '', 'Thomas', 'Arlt', '0000-00-00', '', '', '123456', 'f99cffa7eed39c69dcd9fa87e2ae92b484775667', 0, 'Eckstraße', '3', '', 12345, NULL, 'Eckbach', 83, 'Eckstraße', '3', '', 12345, NULL, NULL, 'Eckbach', 83, 'Thomas', 'Arlt', NULL, '123456', 0, '2013-10-21 13:21:48'),
(94, 0, 'love', 0, 'lovetest1@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1375376400, NULL, '', 'affiliate', '113.162.116.20', 'love', 0, '', 'jonny', 'jonny', '1990-02-17', '', '2525', '3243546', '5f256c133ac0289911cc57859c3b58f19fa17dfa', 0, 'London', '34', '123', 34, '2525', '342', 19, 'London', '34', '567', 34, '2525', '2525', '342', 19, 'jonny', 'jonny', 'lovetest1@yopmail.com', '3243546', 0, '2014-06-27 11:51:00'),
(95, 0, 'tomy', 0, 'tomy@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1375376400, NULL, '', 'affiliate', '113.162.116.20', 'tomy', 0, '', 'tomy', 'tomy', '1990-01-22', '', 'Hambert', '4545', '5b2cca1a1b5e15ef9fe58fd052622c83da940361', 0, 'london', '435', 'nothing', 43, 'Österreich', '43354', 18, 'london', '435', 'nothing', 43, 'Da Nang', 'Österreich', '43354', 18, 'tomy', 'tomy', 'lamdn12@gmail.com', '4545', 0, '2014-07-12 08:36:00'),
(96, 0, 'rose', 0, 'rose@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1375948436, NULL, '', 'guest', '113.162.116.20', 'rose', 0, '', 'rose', 'marine ', '1990-01-22', '', '', '', 'd4b752d8d2e205f975ee0b4e289bd398cfdd73bb', 0, 'Nuernberg', '12', '', 125012, NULL, 'Berlin', 244, 'Nuernberg', '12', '', 125012, NULL, NULL, 'Berlin', 244, 'rose', 'marine ', NULL, '', 0, '2014-01-18 00:00:00'),
(97, 0, 'rosy', 0, 'rosy@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1375427483, NULL, '', 'user', '113.162.116.20', 'rosy', 0, '', 'rosy', 'math', '1990-01-22', '', '', '', '392df56b0ded34964e57c04e64df3202d50d4447', 0, 'Nana', '1', '', 8678678, NULL, 'mama', 80, 'Nana', '1', '', 8678678, NULL, NULL, 'mama', 80, 'rosy', 'math', NULL, '', 0, '0000-00-00 00:00:00'),
(98, 0, 'cathrin', 1, 'cathrin@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '1', NULL, 1375376400, NULL, '', 'user', '113.162.116.135', 'cathrin', 0, '', 'cathrin', 'smoth', '1980-01-01', '', '', '', '4e7b8f77242dd7f14820b5598352457ecf68b430', 0, 'banana', '11', '', 13828, NULL, 'Baly', 133, 'aple', 'banana', '', 13828, NULL, NULL, 'cotun', 131, 'cathrin', 'marry', NULL, '', 0, '2014-01-03 10:44:09'),
(99, 0, 'lovely', 0, 'hi@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '1', 343, 1376301124, NULL, '', 'guest', '113.162.116.135', '342', 0, '', 'Tomny', 'Tomny', '1990-01-22', '', '', '34', 'e4f24c36b380587d829255d32aa1a78c2a109c3a', 0, 'London', '3434', 'nothing', 4324, NULL, '4324', 83, 'London', '3434', 'nothing', 4324, NULL, NULL, '4324', 83, 'Tomny', 'Tomny', NULL, '34', 0, '0000-00-00 00:00:00'),
(100, 0, 'Tomny', 0, 'tomny@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '1', NULL, 1376258400, NULL, '', 'guest', '113.162.116.135', 'tomny', 0, '', 'dfe', 'ẻ', '1990-01-22', '', '', '0124567511', 'c02b3e8c0f640d5592cb6c9020e85b4e204686fa', 0, 'London', '345', 'nothing', 123, NULL, '4342', 83, 'London', '345', 'nothing', 123, NULL, NULL, '4342', 83, 'dfe', 'ẻ', NULL, '0124567511', 0, '2013-11-08 07:53:56'),
(101, 0, 'nani', 0, 'nana@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '1', 3435435, 1376447875, NULL, '', 'user', '113.162.116.135', '342432', 0, '', 'nana', 'nana', '1990-01-22', '', '', '4234342', '30bba6104afb8c2265db1098d54e3a2fcf3c774f', 0, 'london', '343', '3434', 4324, NULL, '342', 83, 'london', '343', '3434', 4324, NULL, NULL, '342', 83, 'nana', 'nana', NULL, '4234342', 1, '0000-00-00 00:00:00'),
(102, 0, 'nary', 0, 'nary@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '1', NULL, 1376449108, NULL, '', 'user', '113.162.116.135', 'nary', 0, '', 'nary', 'nary', '1990-01-22', '', '', '4554545', 'f4da1b2620f84b8f62c828e59c355ea5a3c15be0', 0, 'london', '545', '45', 45, NULL, '45', 83, 'london', '545', '45', 45, NULL, NULL, '45', 83, 'nary', 'nary', NULL, '4554545', 0, '0000-00-00 00:00:00'),
(103, 0, 'honda', 0, 'honda@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1376451209, NULL, '', 'admin', '113.162.116.135', 'honda', 0, '', '', '', '1990-01-22', '', '', '', '', 0, NULL, '', NULL, NULL, NULL, '', 111, NULL, NULL, NULL, NULL, NULL, NULL, '', 111, '', '', NULL, '', 1, '0000-00-00 00:00:00'),
(104, 0, 'lala', 0, 'lala@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1375427483, NULL, '', 'admin', '113.162.116.135', 'lala', 0, '', '', '', '1990-01-22', '', '', '', '', 0, '', '', NULL, NULL, NULL, '', 18, NULL, NULL, NULL, NULL, NULL, NULL, '', 18, '', '', NULL, '', 0, '0000-00-00 00:00:00'),
(105, 0, 'mimi', 0, 'mimi@yopmail.com', 'a6e6dd7c8e7d368e92c7369bac7ac4f21fe669f2', '', NULL, 1376540529, NULL, '', 'user', '113.162.116.135', 'mimi', 0, '', 'mimi', 'cat', '1990-01-22', '', '', '', '33801f227ded1b9179610fe567ba82d2a1c49b22', 0, 'bun', '12', '', 129837, NULL, 'kana', 83, 'bun', '12', '', 129837, NULL, NULL, 'kana', 83, 'mimi', 'cat', NULL, '', 1, '0000-00-00 00:00:00'),
(106, 0, 'onecentdeal', 0, 'onecentdealtest@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '1', NULL, 1377468000, NULL, '', 'user', '113.162.116.135', 'onecentdeal', 0, '', 'onecentdeal', 'onecentdeal', '1990-01-22', '', '', '435435', '42340ee2cd1609b85ab41f580fcd91f851cbe231', 0, 'london', '4342', '5345', 453, NULL, '534', 83, 'london', '4342', '5345', 453, NULL, NULL, '534', 83, 'onecentdeal', 'onecentdeal', NULL, '435435', 1, '2013-10-21 11:43:30'),
(107, 0, 'masser', 1, 'masser@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1377312383, NULL, '', 'guest', '113.162.116.179', 'masser', 0, '', 'Masser', 'Woche', '1990-01-22', '', '', '', '0987931cb9e977bd9850b1c4f013ab85c1e29074', 0, 'banana', '10', '', 12232, NULL, 'manta', 83, 'banana', '10', '', 12232, NULL, NULL, 'manta', 83, 'Masser', 'Woche', NULL, '', 0, '0000-00-00 00:00:00'),
(108, 0, 'test2', 1, 'test2@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '2', NULL, 1377492418, NULL, '', 'user', '113.162.114.39', 'test2', 0, '', 'test', '2', '1990-01-22', '', '', '', '9fb60a3aaec39ce463bdee99c5c6a8e5aa41696f', 0, 'banana', '12', '', 34839, NULL, 'pine', 83, 'banana', '12', '', 34839, NULL, NULL, 'pine', 83, 'test', '2', NULL, '', 0, '0000-00-00 00:00:00'),
(109, 0, 'mamut', 0, 'mamut@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '1', NULL, 1377492538, NULL, '', 'user', '113.162.114.39', 'mamut', 0, '', 'dgfgf', 'fgfgf', '1990-01-22', '', '', '', '71ac1f76a3d5631e86f45ef3537cc5abc28d3ae8', 0, 'gfgfg', 'dfd', '', 22243, NULL, 'hghgh', 83, 'gfgfg', 'dfd', '', 22243, NULL, NULL, 'hghgh', 83, 'dgfgf', 'fgfgf', NULL, '', 0, '0000-00-00 00:00:00'),
(110, 0, 'sony', 0, 'sony@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1377593089, NULL, '', 'guest', '113.162.114.39', 'sony', 0, '', 'sony', 'sony', '1990-01-22', '', '', '34334', '3a7034a56334320c27f9b2aa9444c28a4b6dca66', 0, 'London', '434', 'nothing', 34, NULL, '434', 83, 'London', '434', 'nothing', 34, NULL, NULL, '434', 83, 'sony', 'sony', NULL, '34334', 0, '0000-00-00 00:00:00'),
(111, 0, 'hoc12345678', 1, 'hoc12345678@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1377593642, NULL, '', 'guest', '113.162.114.39', 'hoc12345678', 0, '', 'a', 'b', '1990-01-22', '', '', '', '375b329592b675271062ad86385eb4bd2bb00be5', 0, 'abc', '12', '', 23, NULL, 'adada', 83, 'abc', '12', '', 23, NULL, NULL, 'adada', 83, 'a', 'b', NULL, '', 0, '0000-00-00 00:00:00'),
(112, 0, 'hoc123456785', 1, 'hoc123456789@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1377593834, NULL, '', 'guest', '113.162.114.39', 'hoc123456785', 0, '', 'a', 'a', '1990-01-22', '', '', '', '22cc7f62a84f53e14ff8a377f164b8a37cf3f9b7', 0, 'áwadsad', '3', '', 323, NULL, 'sdsadsa', 83, 'áwadsad', '3', '', 323, NULL, NULL, 'sdsadsa', 83, 'a', 'a', NULL, '', 0, '0000-00-00 00:00:00'),
(113, 0, 'mart', 0, 'mart@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1377593958, NULL, '', 'user', '113.162.114.39', 'mart', 0, '', 'sony', 'sony', '1990-01-22', '', '', '0124567511', '8e8eb4ab7f172ebaa357249063f751614383b26b', 0, 'London', '54', 'nothing', 545, NULL, '543', 83, 'London', '54', 'nothing', 545, NULL, NULL, '543', 83, 'sony', 'sony', NULL, '0124567511', 0, '0000-00-00 00:00:00'),
(114, 0, 'miss', 0, 'miss@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '1', NULL, 1377656874, NULL, '', 'guest', '113.162.114.39', 'miss', 0, '', 'test1', 'test1', '1990-01-22', '', '', '', '5fc14b4f7b3f3989c9f41c0642ef1ea58802121e', 0, 'London', '4345', '', 43, NULL, '324', 83, 'London', '4345', '', 43, NULL, NULL, '324', 83, 'test1', 'test1', NULL, '', 0, '0000-00-00 00:00:00'),
(115, 0, 'test3', 0, 'test3@yopmai.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1377675579, NULL, '', 'guest', '113.162.114.39', 'test3', 0, '', 'test', '3', '1990-01-22', '', '', '', 'bcd974c3efc8af624cef331bf9a149e99b38499b', 0, 'Banana', '12', '', 98282, NULL, 'Mango', 83, 'Banana', '12', '', 98282, NULL, NULL, 'Mango', 83, 'test', '3', NULL, '', 0, '0000-00-00 00:00:00'),
(116, 0, 'test4', 1, 'test4@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '1', NULL, 1377675729, NULL, '', 'user', '113.162.114.39', 'test4', 0, '', 'test', '4', '1990-01-22', '', '', '', '6ade374b576581dde37edbf71e296e2fb1c97721', 0, 'Banana', '13', '', 23343, NULL, 'Watermelon', 83, 'Banana', '13', '', 23343, NULL, NULL, 'Watermelon', 83, 'test', '4', NULL, '', 0, '0000-00-00 00:00:00'),
(117, 0, 'admin3', 0, 'thomas.arlt@yopmail.com', 'aa6fbbc76b5662d735fede48226c7e717d6295d4', NULL, NULL, 1378636772, NULL, '', 'admin', '37.5.240.125', 'admin3', 0, '', '', '', '1990-01-22', '', '', '', '', 0, NULL, '', NULL, NULL, NULL, '', 83, NULL, NULL, NULL, NULL, NULL, NULL, '', 83, '', '', NULL, '', 1, '0000-00-00 00:00:00'),
(118, 0, 'adminAT', 0, 'thomasarlt3@yopmail.com', 'aa6fbbc76b5662d735fede48226c7e717d6295d4', NULL, NULL, 1378644567, NULL, '', 'admin', '37.5.240.125', 'adminat', 0, '', '', '', '1990-01-22', '', '', '', '', 0, NULL, '', NULL, NULL, NULL, '', 83, NULL, NULL, NULL, NULL, NULL, NULL, '', 83, '', '', NULL, '', 1, '0000-00-00 00:00:00'),
(119, 0, 'demo_user_1', 1, 'pylleppaffuha-860@yopmail.com', 'aa6fbbc76b5662d735fede48226c7e717d6295d4', '', NULL, 1378646893, NULL, '', 'user', '37.5.240.125', 'demo-user-1', 0, '', 'Demo', 'Demo', '1990-01-22', '', '', '', '34cb2f9a330cefccb6dd699802b8bf6c3e51afc7', 0, 'Demo', '1', '', 11111, NULL, 'Demo', 83, 'Demo', '1', '', 11111, NULL, NULL, 'Demo', 83, 'Demo', 'Demo', NULL, '', 1, '0000-00-00 00:00:00'),
(120, 0, 'demouser1', 1, 'xeppiffusudd-090@yopmail.com', 'aa6fbbc76b5662d735fede48226c7e717d6295d4', '', NULL, 1377640800, NULL, '', 'user', '37.5.240.125', 'demouser1', 0, '', 'Demo', 'Demo', '1990-01-22', '', '', '', '98b8f235648067ff507b18417ba97390c3c0db67', 0, 'Demo', '1', '', 11111, NULL, 'Demo', 83, 'Demo', '1', '', 11111, NULL, NULL, 'Demo', 83, 'Demo', 'Demo', NULL, '', 0, '2013-10-19 14:35:22'),
(121, 0, 'demouser2', 1, 'ogoxe-401@yopmail.com', 'aa6fbbc76b5662d735fede48226c7e717d6295d4', '', NULL, 1377640800, NULL, '', 'user', '37.5.240.125', 'demouser2', 0, '', 'Demo', 'Demo', '1990-01-22', '', '', '', '353f17eb141c086a240e8db35bbcdc333781faef', 0, 'Demo', '1', '', 11111, NULL, 'Demo', 83, 'Demo', '1', '', 11111, NULL, NULL, 'Demo', 83, 'Demo', 'Demo', NULL, '', 0, '2013-10-19 14:54:56'),
(122, 0, 'test0001', 1, 'ubennagaw-613@yopmail.com', 'aa6fbbc76b5662d735fede48226c7e717d6295d4', '', NULL, 1375427483, NULL, '', 'user', '37.5.240.125', 'test0001', 0, '', 'test', 'test', '1990-01-22', '', '', '', '59c47042e100486d54ebc42394898b52cdd52fa9', 0, 'test', '1', '', 11111, NULL, 'test', 83, 'test', '1', '', 11111, NULL, NULL, 'test', 83, 'test', 'test', NULL, '', 1, '2013-09-13 01:57:53'),
(123, 0, 'at', 0, 'usygake-493@yopmail.com', 'aa6fbbc76b5662d735fede48226c7e717d6295d4', NULL, NULL, 1375427483, NULL, '', 'admin', '37.5.240.125', 'at', 0, '', '', '', '1990-01-22', '', '', '', '', 0, NULL, '', NULL, NULL, NULL, '', 83, NULL, NULL, NULL, NULL, NULL, NULL, '', 83, '', '', NULL, '', 0, '2013-10-10 18:52:10'),
(124, 0, 'fc', 0, 'typetenne-545@yopmail.com', 'aa6fbbc76b5662d735fede48226c7e717d6295d4', NULL, NULL, 1379528153, NULL, '', 'admin', '37.5.240.125', 'fc', 0, '', '', '', '1990-01-22', '', '', '', '', 0, NULL, '', NULL, NULL, NULL, '', 83, NULL, NULL, NULL, NULL, NULL, NULL, '', 83, '', '', NULL, '', 1, '0000-00-00 00:00:00'),
(125, 0, 'test10', 0, 'test10@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1377622800, NULL, '', 'user', '113.162.116.253', 'test10', 0, '', 'test', '10', '1980-03-19', '', '', '', '0e578524cb307704e9cf491b56d32ed5728f5332', 0, 'Rock', '12as', '', 120, NULL, 'Dunno', 83, 'Rock', '12as', '', 120, NULL, NULL, 'Dunno', 83, 'test', '10', NULL, '', 0, '2014-01-17 20:09:58'),
(126, 0, 'admindev', 0, 'admindev@yopmail.com', '75489b52a82e0175f5163d1967d1c6f1a84d6c6d', NULL, NULL, 1381460288, NULL, '', 'admin', '113.162.116.101', 'admindev', 0, '', '', '', NULL, '', '', '', '', 0, NULL, '', NULL, NULL, NULL, '', 86, NULL, NULL, NULL, NULL, NULL, NULL, '', 86, '', '', NULL, '', 0, '0000-00-00 00:00:00'),
(127, 0, 'test11', 0, 'test11@2yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1381481687, NULL, '', 'guest', '113.162.116.101', 'test11', 0, '', 'test', '11', '1988-01-17', '', '', '', '35ab43bcae5b37956243467f838d5390f03b024c', 0, 'Tara', '1', '', 938478, NULL, 'akhdjfhdjfh', 83, 'Tara', '1', '', 938478, NULL, NULL, 'akhdjfhdjfh', 83, 'test', '11', NULL, '', 0, '0000-00-00 00:00:00'),
(128, 0, 'test12', 0, 'test12@yopmail.com', '75489b52a82e0175f5163d1967d1c6f1a84d6c6d', '', NULL, 1377675729, NULL, '', 'user', '113.162.116.101', 'test12', 0, '', 'test', '12', '1993-01-01', '', '', '', 'dca5b659ed3bf26d795d08d4c8da4e9fb1deedba', 0, '11', '11', '', 354545, NULL, 'GFGFG', 83, '11', '11', '', 354545, NULL, NULL, 'GFGFG', 83, 'test', '12', NULL, '', 0, '2013-10-11 11:40:36'),
(129, 0, 'test13', 0, 'test13@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '', NULL, 1382091353, NULL, '', 'user', '113.162.116.101', 'test13', 0, '', 'dfdfd', 'fdfdf', '1980-02-17', '', '', '', 'cc98d491d7726cab2217f05c8f2b1c5346d052c3', 0, 'fdfd', '212', '', 21323, NULL, 'fdfdfd', 83, 'fdfd', '212', '', 21323, NULL, NULL, 'fdfdfd', 83, 'dfdfd', 'fdfdf', NULL, '', 0, '0000-00-00 00:00:00'),
(130, 0, 'test14', 0, 'test14@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', NULL, NULL, 1381738701, NULL, '', 'admin', '113.162.116.101', 'test14', 0, '', '', '', NULL, '', '', '', '', 0, NULL, '', NULL, NULL, NULL, '', 83, NULL, NULL, NULL, NULL, NULL, NULL, '', 83, '', '', NULL, '', 0, '0000-00-00 00:00:00'),
(131, 0, 'test15', 0, 'test15@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', NULL, NULL, 1381738843, NULL, '', 'admin', '113.162.116.101', 'test15', 0, '', '', '', NULL, '', '', '', '', 0, NULL, '', NULL, NULL, NULL, '', 83, NULL, NULL, NULL, NULL, NULL, NULL, '', 83, '', '', NULL, '', 0, '0000-00-00 00:00:00'),
(132, 0, 'demoadmin1', 0, 'ufelyddec-3425@yopmail.com', 'aa6fbbc76b5662d735fede48226c7e717d6295d4', NULL, NULL, 1382091353, NULL, '', 'admin', '178.26.168.203', 'demoadmin1', 0, '', '', '', NULL, '', '', '', '', 0, NULL, '', NULL, NULL, NULL, '', 83, NULL, NULL, NULL, NULL, NULL, NULL, '', 83, '', '', NULL, '', 0, '0000-00-00 00:00:00'),
(133, 0, 'demoadmin2', 0, 'dinnamazi-8442@yopmail.com', 'aa6fbbc76b5662d735fede48226c7e717d6295d4', NULL, NULL, 1382091353, NULL, '', 'admin', '178.26.168.203', 'demoadmin2', 0, '', '', '', NULL, '', '', '', '', 0, NULL, '', NULL, NULL, NULL, '', 83, NULL, NULL, NULL, NULL, NULL, NULL, '', 83, '', '', NULL, '', 0, '0000-00-00 00:00:00'),
(134, 0, 'test_admin', 0, 'test_admin@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1382091353, NULL, '', 'admin', '113.162.116.141', 'test-admin', 0, '', '', '', NULL, '', '', '', '', 0, NULL, '', NULL, NULL, NULL, '', 2, NULL, NULL, NULL, NULL, NULL, NULL, '', 2, '', '', NULL, '', 0, '0000-00-00 00:00:00'),
(135, 0, 'smooth', 0, 'test24@yopmail.com', '72b9ae3f07e810537447071612623acaa0fa5469', '1', NULL, 1383670800, NULL, '', 'guest', '113.162.115.46', 'smooth', 0, '', 'cathrin', 'smooth', '1983-02-02', '', '', '', '5f4e68d2d44d23e295fa22308b97093b35082f79', 0, 'abc', '12', '', 12345, NULL, 'fantasy', 83, 'abc', '12', '', 12345, NULL, NULL, 'fantasy', 83, 'cathrin', 'smooth', NULL, '', 0, '2014-04-07 14:43:50'),
(136, 0, 'marrya', 1, 'marrya@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1384228855, NULL, '', 'guest', '113.162.116.65', 'marrya', 0, '', 'marry', 'marry', '1980-10-14', '', '', '', '8d9f0d3a30f634757ad464ae1ef4e670b3077ee8', 0, 'London', '434', 'nothing', 343, NULL, '5435', 83, 'London', '434', 'nothing', 343, NULL, NULL, '5435', 83, 'marry', 'marry', NULL, '', 0, '0000-00-00 00:00:00'),
(139, 0, 'hana', 1, 'hanamon@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1384231615, NULL, '', 'guest', '113.162.116.65', 'hana', 0, '', 'hana', 'hana', '1995-04-01', '', '', '', '5f433cd36b05e986f1926217cce9bf125e95bb09', 0, 'London', '32', 'nothing', 4334, NULL, '4342', 83, 'London', '32', 'nothing', 4334, NULL, NULL, '4342', 83, 'hana', 'hana', NULL, '', 0, '0000-00-00 00:00:00'),
(140, 0, 'testweb', 1, 'testweb@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', 343, 1384189200, NULL, '', 'guest', '113.162.116.65', 'testweb', 0, '', 'test', 'test1', '1993-02-01', '', '', '', '687b866e6aadbce620ccb7dc09e41a5e215870bb', 0, 'London', '32', '', 4334, NULL, '4342', 83, 'London', '32', '', 4334, NULL, NULL, '4342', 83, 'test', 'test1', NULL, '', 0, '2014-06-06 10:15:10'),
(145, 0, 'Thomas', 1, 'anhphuyopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '2', NULL, 1384243258, NULL, '', 'guest', '113.162.116.65', 'hocnv', 0, '', 'hoc', 'nguyen', '1979-11-18', '', '', '', 'c9de205bb26a65dfd1af162f5879126c28ca50ca', 0, 'viet nam', '084', '', 43, NULL, 'Da Nang', 83, 'viet nam', '084', '', 43, NULL, NULL, 'Da Nang', 83, 'hoc', 'nguyen', NULL, '', 0, '0000-00-00 00:00:00'),
(147, 0, 'david', 1, 'JoeMcQue@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1384534800, NULL, '', 'user', '113.162.116.65', 'david', 0, '', 'David', 'Ken', '0000-00-00', '', '', '', 'e770da4710e1d367ffcc00b49345734331ff7947', 0, 'Pasteur', '98', '', 9, NULL, 'Viet Nam', 83, 'Pasteur', '98', '', 9, NULL, NULL, 'Viet Nam', 83, 'David', 'Ken', NULL, '', 0, '2013-11-16 08:48:00'),
(148, 0, 'tosello', 1, 'tosello@yopmail.com', '75489b52a82e0175f5163d1967d1c6f1a84d6c6d', '', NULL, 1384534800, NULL, '', 'user', '113.162.116.65', 'tosello', 0, '', 'tosello', 'tosello', '1995-02-01', '', '', '', 'fb56f6bf10f70599ba0da1d0765a7b8cea1d59d3', 0, 'London', '32', 'nothing', 4334, NULL, '4342', 83, 'London', '32', 'nothing', 4334, NULL, NULL, '4342', 83, 'tosello', 'tosello', NULL, '', 0, '2014-01-21 15:40:21'),
(149, 0, 'test30', 1, 'test30@yopmail.com', '2a593680d25e987d7bdac462d0e6bd011a9060cf', '1', NULL, 1384556400, NULL, '', 'user', '113.165.80.218', 'test30', 0, '', 'dsdsds', 'sdsdsd', '1984-06-11', '', '', '', '95a588f12eec092249c742c91947d2c8e414a049', 0, 'sdsds', 'sđ', '', 12323, NULL, 'ddđfdfd', 83, 'sdsds', 'sđ', '', 12323, NULL, NULL, 'ddđfdfd', 83, 'dsdsds', 'sdsdsd', NULL, '', 0, '2013-11-16 09:14:20'),
(150, 0, 'david02', 1, 'nicon@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1384935173, NULL, '', 'guest', '113.162.116.171', 'david02', 0, '', 'David', 'Ken', '1980-02-15', '', '', '', 'aa4ef3e3f9777255a7266477f9e3ba103e952a22', 0, 'Pasteur', '98', '', 2, NULL, 'Viet Nam', 83, 'Pasteur', '98', '', 2, NULL, NULL, 'Viet Nam', 83, 'David', 'Ken', NULL, '', 0, '0000-00-00 00:00:00'),
(151, 0, 'acount', 1, 'acount@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1386802800, NULL, '', 'user', '113.165.70.72', 'acount', 0, '', 'account', 'account', '1995-02-03', '', '', '', '9941bb4b4aea0b72553bacefa9b881e8d81e4fb2', 0, 'London', '32', 'nothing', 4334, NULL, '4342', 83, 'London', '32', 'nothing', 4334, NULL, NULL, '4342', 83, 'account', 'account', NULL, '', 0, '2013-12-12 08:53:00'),
(152, 0, 'Guest152', 0, 'lovetest@yopmail.com', '', NULL, NULL, 1386988673, NULL, '', 'guest', '113.184.233.50', 'guest152', 0, '', 'Super', 'Admin', NULL, '', '', '3243546', '', 0, 'London', '402', '434', 12345, NULL, 'Muchen', 1, 'Olso1234', '4020', '434', 34, NULL, NULL, 'Muchen', 1, 'Super', 'Admin', NULL, '3243546', 0, '0000-00-00 00:00:00'),
(153, 0, 'Guest153', 0, 'lovetest@yopmail.com', '', NULL, NULL, 1386989126, NULL, '', 'guest', '113.184.233.50', 'guest153', 0, '', 'Super', 'Admin', NULL, '', '', '3243546', '', 0, 'London', '402', '434', 12345, NULL, 'Muchen', 20, 'Olso1234', '4020', '434', 34, NULL, NULL, 'Muchen', 1, 'Super', 'Admin', NULL, '3243546', 0, '0000-00-00 00:00:00'),
(154, 0, 'Guest154', 0, 'school@yopmail.com', '', NULL, NULL, 1386989542, NULL, '', 'guest', '113.184.233.50', 'guest154', 0, '', 'David', 'Ken', NULL, '', '', '435435', '', 0, 'Pasteur', 'Pasteur', '', 123, NULL, 'Viet Nam', 1, 'Pasteur', 'Pasteur', '', 123, NULL, NULL, 'Viet Nam', 1, 'David', 'Ken', NULL, '435435', 0, '0000-00-00 00:00:00'),
(155, 0, 'luckly', 1, 'luckly@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1386954000, NULL, '', 'user', '113.184.233.50', 'luckly', 0, '', 'nana', 'nana', '1991-03-02', '', '', '34', '5527b54b5d06b3298c6fbce48d8470f3ad7c8db2', 0, 'London', '32', 'nothing', 4334, NULL, '4342', 83, 'London', '32', 'nothing', 4334, NULL, NULL, '4342', 83, 'nana', 'nana', NULL, '34', 0, '2013-12-14 09:55:00'),
(156, 0, 'Guest156', 0, 'kenchum@yopmail.com', '', NULL, NULL, 1387007877, NULL, '', 'guest', '113.184.233.50', 'guest156', 0, '', 'Hoc', 'Nguyen', NULL, '', '', '09090909090', '', 0, 'Nguyen Huu Tho', '126B', '', 13, NULL, 'Viet Nam', 243, 'Duc Loi Mo Duc Quang Ngai', '12', '', 12, NULL, NULL, 'Viet Nam', 243, 'Anh', 'Phu', NULL, '0966454689', 0, '0000-00-00 00:00:00'),
(157, 0, 'Guest157', 0, 'lovetest@yopmail.com', '', NULL, NULL, 1387009248, NULL, '', 'guest', '113.184.233.50', 'guest157', 0, '', 'Super', 'Admin', NULL, '', '', '3243546', '', 0, 'London', '402', '434', 12345, NULL, 'Muchen', 20, 'London', '402', '434', 12345, NULL, NULL, 'Muchen', 20, 'Super', 'Admin', NULL, '3243546', 0, '0000-00-00 00:00:00'),
(158, 0, 'andreas', 1, 'phuoc.mai@netbiz.vn', '3efa1efc974b57eba3917ddd415af8e78d9c347f', '1', 457457, 1387126800, NULL, '', 'user', '113.189.119.240', 'andreas', 0, '', 'kaka', 'fdhb', '0000-00-00', '', '', '0188445', '11a23c9dcd2b20b7d2f13f7956454d0d0e05af58', 0, 'bvbvbv', '12', 'No Name', 4879, NULL, 'fdfdf', 83, 'bvbvbv', '12', 'No Name', 4879, NULL, NULL, 'fdfdf', 83, 'kaka', 'fdhb', NULL, '0188445', 1, '2013-12-16 09:47:00'),
(159, 0, 'Guest159', 0, 'honnoto@yomail.com', '', NULL, NULL, 1387162321, NULL, '', 'guest', '113.189.119.240', 'guest159', 0, '', 'Hoc', 'Nguyen', NULL, '', '', '0966454689', '', 0, 'Nguyen Huu Tho', '126B', '', 84, NULL, 'Viet Nam', 243, 'Nguyen Huu Tho', '126B', '', 84, NULL, NULL, 'Viet Nam', 243, 'Hoc', 'Nguyen', NULL, '0966454689', 0, '0000-00-00 00:00:00'),
(160, 0, 'Guest160', 0, 'hoda@yopmail.com', '', NULL, NULL, 1387163216, NULL, '', 'guest', '113.189.119.240', 'guest160', 0, '', 'Hoc', 'Nguyen', NULL, '', '', '0966454689', '', 0, 'Nguyen Huu Tho', '126B', '', 84, NULL, 'Viet Nam', 243, 'Nguyen Huu Tho', '126B', '', 84, NULL, NULL, 'Viet Nam', 243, 'Hoc', 'Nguyen', NULL, '0966454689', 0, '0000-00-00 00:00:00'),
(161, 0, 'Guest161', 0, 'narvas@yopmail.com', '', NULL, NULL, 1387166378, NULL, '', 'guest', '113.162.116.141', 'guest161', 0, '', 'Hoc', 'Nguyen', NULL, '', '', '0966454689', '', 0, 'Pasteur', '126B', '', 84, NULL, 'Viet Nam', 243, 'Pasteur', '126B', '', 84, NULL, NULL, 'Viet Nam', 243, 'Hoc', 'Nguyen', NULL, '0966454689', 0, '0000-00-00 00:00:00'),
(162, 0, 'Guest162', 0, 'company@yopmail.com', '', NULL, NULL, 1387166678, NULL, '', 'guest', '113.162.116.141', 'guest162', 0, '', 'Hoc', 'Nguyen', NULL, '', '', '0966454689', '', 0, 'Nguyen Huu Tho', '126B', '', 84, NULL, 'Da Nang', 243, 'Nguyen Huu Tho', '126B', '', 84, NULL, NULL, 'Da Nang', 243, 'Hoc', 'Nguyen', NULL, '0966454689', 0, '0000-00-00 00:00:00'),
(163, 0, 'Guest163', 0, 'hocnv.qn@gmail.com', '', NULL, NULL, 1387167230, NULL, '', 'guest', '113.162.116.141', 'guest163', 0, '', 'Hoc', 'Nguyen', NULL, '', '', '0966454689', '', 0, 'Nguyen Huu Tho', '126B', '', 84, NULL, 'Da Nang', 243, 'Nguyen Huu Tho', '126B', '', 84, NULL, NULL, 'Da Nang', 243, 'Hoc', 'Nguyen', NULL, '0966454689', 0, '0000-00-00 00:00:00'),
(164, 0, 'Guest164', 0, 'ricado@yopmail.com', '', NULL, NULL, 1387167676, NULL, '', 'guest', '113.162.116.141', 'guest164', 0, '', 'Hoc', 'Nguyen', NULL, '', '', '0966454689', '', 0, 'Nguyen Huu Tho', '126B', '', 84, NULL, 'Da Nang', 243, 'Nguyen Huu Tho', '126B', '', 84, NULL, NULL, 'Da Nang', 243, 'Hoc', 'Nguyen', NULL, '0966454689', 0, '0000-00-00 00:00:00'),
(165, 0, 'Guest165', 0, 'thomas@yopmail.com', '', NULL, NULL, 1387168720, NULL, '', 'guest', '113.162.116.141', 'guest165', 0, '', 'Hoc', 'Nguyen', NULL, '', '', '0966454689', '', 0, 'Nguyen Huu Tho', '126B', '', 84, NULL, 'Da Nang', 243, 'Nguyen Huu Tho', '126B', '', 84, NULL, NULL, 'Da Nang', 243, 'Hoc', 'Nguyen', NULL, '0966454689', 0, '0000-00-00 00:00:00'),
(166, 0, 'Guest166', 0, 'onecentdeal@yopmail.com', '', NULL, NULL, 1387169017, NULL, '', 'guest', '113.165.48.214', 'guest166', 0, '', 'Super', 'Admin', NULL, '', '', '3243546', '', 0, 'London', '402', '434', 12345, NULL, 'Muchen', 20, 'London', '402', '434', 12345, NULL, NULL, 'Muchen', 20, 'Super', 'Admin', NULL, '3243546', 0, '0000-00-00 00:00:00'),
(167, 0, 'Guest167', 0, 'test30@yopmail.com', '', NULL, NULL, 1387176221, NULL, '', 'guest', '113.162.116.141', 'guest167', 0, '', 'mana', 'monta', NULL, '', '', '098098098', '', 0, 'aaa', 'qq', '', 9891, NULL, 'bbb', 83, 'aaa', 'qq', '', 9891, NULL, NULL, 'bbb', 83, 'mana', 'monta', NULL, '098098098', 0, '0000-00-00 00:00:00'),
(168, 0, 'Guest168', 0, 'hocnv.qn@gmail.com', '', NULL, NULL, 1387243773, NULL, '', 'guest', '113.165.88.84', 'guest168', 0, '', 'Hoc', 'Nguyen', NULL, '', '', '0966454689', '', 0, 'Nguyen Huu Tho', '126B', '', 84, NULL, 'Da Nang', 243, 'Nguyen Huu Tho', '126B', '', 84, NULL, NULL, 'Da Nang', 243, 'Hoc', 'Nguyen', NULL, '0966454689', 0, '0000-00-00 00:00:00'),
(169, 0, 'Guest169', 0, 'balack@yopmail.com', '', NULL, NULL, 1387244043, NULL, '', 'guest', '113.165.88.84', 'guest169', 0, '', 'Hoc', 'Nguyen', NULL, '', '', '0966454689', '', 0, 'Nguyen Huu Tho', '126B', '', 84, NULL, 'Da Nang', 243, 'Nguyen Huu Tho', '126B', '', 84, NULL, NULL, 'Da Nang', 243, 'Hoc', 'Nguyen', NULL, '0966454689', 0, '0000-00-00 00:00:00'),
(170, 0, 'Guest170', 0, 'wenger@yopmail.com', '', NULL, NULL, 1387352203, NULL, '', 'guest', '113.184.238.36', 'guest170', 0, '', 'Super', 'Admin', NULL, '', '', '3243546', '', 0, 'London', '402', 'nothing', 12345, NULL, 'Muchen', 19, 'London', '402', 'nothing', 12345, NULL, NULL, 'Muchen', 19, 'Super', 'Admin', NULL, '3243546', 0, '0000-00-00 00:00:00'),
(171, 0, 'Guest171', 0, 'ramsey@yopmail.com', '', NULL, NULL, 1387352256, NULL, '', 'guest', '113.184.238.36', 'guest171', 0, '', 'Super', 'Admin', NULL, '', '', '3243546', '', 0, 'London', '402', 'nothing', 12345, NULL, 'Muchen', 19, 'London', '402', 'nothing', 12345, NULL, NULL, 'Muchen', 1, 'Super', 'Admin', NULL, '3243546', 0, '0000-00-00 00:00:00'),
(172, 0, 'hasanbarut', 1, 'kenvien@yopmail.com', '981ef05f5d74463392908f1d90249689cc1df2de', '1', NULL, 1388250000, NULL, '', 'user', '92.224.224.146', 'hasanbarut', 0, '', 'dfddf', 'dfdf', '0000-00-00', '', '', '4956563232323', '240b1c38c019e1db45e1ab09dd4161cc111bda98', 0, 'xcvxcvxcvcxstr', 'hasa', '', 45966, NULL, 'dddddd1212', 83, 'xcvxcvxcvcxstr', 'hasa', '', 45966, NULL, NULL, 'dddddd', 83, 'dfddf', 'dfdf', NULL, '4956563232323', 0, '0000-00-00 00:00:00'),
(173, 0, 'menly', 0, 'marcaro@yopmail.com', '5bb2e98196f65104344365fe9f619d1f5d724d05', NULL, NULL, 1388422800, NULL, '', 'admin', '113.162.115.140', 'thangnt', 0, '', '', '', '0000-00-00', '', '', '', '', 0, '', '', NULL, NULL, NULL, '', 243, NULL, NULL, NULL, NULL, NULL, NULL, '', 243, '', '', NULL, '', 1, '0000-00-00 00:00:00'),
(174, 0, 'montana', 0, 'ronado@yopmail.com', 'ae9c33110706e4366ffb86d736cb0051b75e60fb', NULL, NULL, 1388422800, NULL, '', 'thangnguyen', '113.162.115.140', 'thangnt1', 0, '', '', '', '0000-00-00', '', '', '', '', 0, '', '', '', NULL, NULL, '', 243, '', '', '', NULL, NULL, NULL, '', 243, '', '', NULL, '', 0, '2014-01-17 16:03:11'),
(175, 0, 'Guest175', 0, 'hervanet@yopmail.com', '', NULL, NULL, 1388630466, NULL, '', 'guest', '113.162.116.63', 'guest175', 0, '', 'David', 'Hoc', NULL, '', '', '09090909090', '', 0, 'Pasteur', 'Pasteur', '', 84, NULL, 'Viet Nam', 243, 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', '', 84, NULL, NULL, 'Quang Ngai', 243, 'Hoc', 'Nguyen', NULL, '0909090909', 0, '0000-00-00 00:00:00'),
(176, 0, 'Guest176', 0, 'persi@yopmail.com', '', NULL, NULL, 1388630499, NULL, '', 'guest', '113.162.116.63', 'guest176', 0, '', 'David', 'Hoc', NULL, '', '', '09090909090', '', 0, 'Pasteur', 'Pasteur', '', 84, NULL, 'Viet Nam', 243, 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', '', 84, NULL, NULL, 'Quang Ngai', 243, 'Hoc', 'Nguyen', NULL, '0909090909', 0, '0000-00-00 00:00:00'),
(177, 0, 'Guest177', 0, 'valencia@yopmail.com', '', NULL, NULL, 1388630519, NULL, '', 'guest', '113.162.116.63', 'guest177', 0, '', 'David', 'Hoc', NULL, '', '', '09090909090', '', 0, 'Pasteur', 'Pasteur', '', 84, NULL, 'Viet Nam', 243, 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', '', 84, NULL, NULL, 'Quang Ngai', 243, 'Hoc', 'Nguyen', NULL, '0909090909', 0, '0000-00-00 00:00:00'),
(178, 0, 'Guest178', 0, 'diantale@yopmail.com', '', NULL, NULL, 1388630799, NULL, '', 'guest', '113.162.116.63', 'guest178', 0, '', 'David', 'Hoc', NULL, '', '', '09090909090', '', 0, 'Pasteur', 'Pasteur', '', 84, NULL, 'Viet Nam', 243, 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', '', 84, NULL, NULL, 'Quang Ngai', 243, 'Hoc', 'Nguyen', NULL, '0909090909', 0, '0000-00-00 00:00:00'),
(179, 0, 'Guest179', 0, 'mechal@yopmail.com', '', NULL, NULL, 1388630818, NULL, '', 'guest', '113.162.116.63', 'guest179', 0, '', 'David', 'Hoc', NULL, '', '', '09090909090', '', 0, 'Pasteur', 'Pasteur', '', 84, NULL, 'Viet Nam', 243, 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', '', 84, NULL, NULL, 'Quang Ngai', 243, 'Hoc', 'Nguyen', NULL, '0909090909', 0, '0000-00-00 00:00:00'),
(180, 0, 'Guest180', 0, 'lovetest@yopmail.com', '', NULL, NULL, 1388979516, NULL, '', 'guest', '113.165.85.28', 'guest180', 0, '', 'Super', 'jonny', NULL, '', '', '3243546', '', 0, 'London', '402', '434', 12345, NULL, 'Muchen', 16, 'London', '402', '434', 12345, NULL, NULL, 'Muchen', 16, 'Super', 'jonny', NULL, '3243546', 0, '0000-00-00 00:00:00'),
(181, 0, 'Guest181', 0, 'lovetest@yopmail.com', '', NULL, NULL, 1388980844, NULL, '', 'guest', '113.165.51.198', 'guest181', 0, '', 'Super', 'jonny', NULL, '', '', '3243546', '', 0, 'London', '402', '434', 12345, NULL, 'Muchen', 18, 'London', '402', '434', 12345, NULL, NULL, 'Muchen', 18, 'Super', 'jonny', NULL, '3243546', 0, '0000-00-00 00:00:00'),
(182, 0, 'tosellotest1', 1, 'tosellotest1@yopmail.com', '75489b52a82e0175f5163d1967d1c6f1a84d6c6d', '3', NULL, 1389459600, NULL, '', 'user', '37.24.152.197', 'tosellotest1', 0, '', 'Peter ', 'Mustermann', '0000-00-00', '', '', '4956563232323', 'f4275c61e010f3abbd53b159d69f2b437bc75373', 0, 'wartburgstr.', '11', '', 45966, NULL, 'dddddd', 83, 'wartburgstr.', '11', '', 45966, NULL, NULL, 'dddddd', 83, 'Peter ', 'Mustermann', NULL, '4956563232323', 0, '2014-01-17 19:12:00'),
(183, 0, 'Guest183', 0, 'kenchum@yopmail.com', '', NULL, NULL, 1389606052, NULL, '', 'guest', '113.165.94.168', 'guest183', 0, '', 'a', 'b', NULL, '', '', '09090909090', '', 0, 'dsadasd', '126B', '', 142, NULL, '34e3242', 83, 'dsadasd', '126B', '', 142, NULL, NULL, '34e3242', 83, 'a', 'b', NULL, '09090909090', 0, '0000-00-00 00:00:00'),
(184, 0, 'Guest184', 0, 'onecentdeal1@yopmail.com', '', NULL, NULL, 1389606350, NULL, '', 'guest', '113.165.94.168', 'guest184', 0, '', 'Super', 'Admin', NULL, '', '', '32443678', '', 0, 'Que Phu - Que Son - Quang Nam', '23', '', 122, NULL, 'Da Nang', 1, 'Que Phu - Que Son - Quang Nam', '23', '', 122, NULL, NULL, 'Da Nang', 1, 'Super', 'Admin', NULL, '32443678', 0, '0000-00-00 00:00:00'),
(185, 0, 'Guest185', 0, 'onecentdeal1@yopmail.com', '', NULL, NULL, 1389606423, NULL, '', 'guest', '113.165.94.168', 'guest185', 0, '', 'Super', 'Admin', NULL, '', '', '32443678', '', 0, 'Que Phu - Que Son - Quang Nam', 'vi', '', 122, NULL, 'Da Nang', 1, 'Que Phu - Que Son - Quang Nam', '23', '', 122, NULL, NULL, 'Da Nang', 1, 'Super', 'Admin', NULL, '32443678', 0, '0000-00-00 00:00:00'),
(186, 0, 'Guest186', 0, 'gill@yopmail.com', '', NULL, NULL, 1389776340, NULL, '', 'guest', '113.162.116.62', 'guest186', 0, '', 'Le', 'Do', NULL, '', '', '09090909090', '', 0, 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', '', 123, NULL, 'Nguyen Huu Tho', 243, 'Nguyen Huu Tho', '123', '', 84, NULL, NULL, 'Nguyen Huu Tho', 243, 'Thanh', 'Bui', NULL, '0909090909', 0, '0000-00-00 00:00:00'),
(187, 0, 'Guest187', 0, 'ferdinal@yopmail.com', '', NULL, NULL, 1389776429, NULL, '', 'guest', '113.162.116.62', 'guest187', 0, '', 'Le', 'Do', NULL, '', '', '09090909090', '', 0, 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', '', 123, NULL, 'Nguyen Huu Tho', 243, 'Nguyen Huu Tho', '123', '', 84, NULL, NULL, 'Nguyen Huu Tho', 243, 'Thanh', 'Bui', NULL, '0909090909', 0, '0000-00-00 00:00:00'),
(188, 0, 'name123', 0, 'test123@yopmail.com', '70a6175618d61c3e7ea1cc400f6fba344a0935b9', NULL, NULL, 1389805200, NULL, '', 'admin', '113.184.231.150', 'name123', 0, '', '', '', '0000-00-00', '', '', '', '', 0, '', '', NULL, NULL, NULL, '', 1, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, '', '', NULL, '', 0, '0000-00-00 00:00:00');
INSERT INTO `members` (`id`, `parent_id`, `username`, `gender`, `email`, `password`, `sourcefrom`, `coupon`, `joined`, `data`, `passwordreset`, `role`, `ipaddress`, `seoname`, `fbuid`, `fbtoken`, `fname`, `lname`, `birthday`, `photo`, `address`, `phone`, `vericode`, `current_plan`, `street`, `nr`, `ext_information`, `postcode`, `state`, `city`, `country_id`, `shipping_street`, `shipping_nr`, `shipping_ext_information`, `shipping_postcode`, `shipping_address`, `shipping_state`, `shipping_city`, `shipping_country_id`, `shipping_fname`, `shipping_lname`, `shipping_email`, `shipping_phone`, `status`, `last_logged`) VALUES
(189, 0, 'davidT', 1, 'david@yopmail.com', 'fb2a7c33272b1aa45fc98cc68aa4e6bfa30c3ec2', '1', 23, 1389978000, NULL, '', 'user', '113.162.115.10', 'davidt', 0, '', 'david', 'tommy', '1985-05-06', '', '', '1123455', 'dce716d50b6670584a833bfe51668048c995e794', 0, 'Le van an', '23', 'aaaaaaa', 84, NULL, 'Da Nang', 83, 'Le van an', '23', 'aaaaaaa', 84, NULL, NULL, 'Da Nang', 83, 'david', 'tommy', NULL, '1123455', 0, '2014-01-18 11:37:12'),
(190, 0, 'davidtran', 1, 'davidtran@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '1', 123456, 1389978000, NULL, '', 'user', '113.162.115.10', 'davidtran', 0, '', 'david', 'tran', '1980-10-10', '', '', '099926793', 'bed32dd5a79868a26e9da2839a1280c415b604a2', 0, 'Deutschland', '+20', 'david tran', 34, NULL, 'Creuzburg, Deutschland', 83, 'Deutschland', '+20', 'david tran', 34, NULL, NULL, 'Creuzburg, Deutschland', 83, 'david', 'tran', NULL, '099926793', 0, '2014-01-18 11:54:49'),
(191, 0, 'Davidtommy', 1, 'davidtommy@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '1', NULL, 1389978000, NULL, '', 'user', '113.162.115.10', 'davidtommy', 0, '', 'David', 'Tommy', '1976-10-10', '', '', '0999297973', 'e2989b70f9560f22efc86a5124bace78eafbbb9c', 0, 'Gallen, Schweiz', '9000', '', 90, NULL, 'Gallen, Schweiz, Deutschland', 83, 'Gallen, Schweiz', '9000', '', 90, NULL, NULL, 'Gallen, Schweiz, Deutschland', 83, 'David', 'Tommy', NULL, '0999297973', 1, '2014-01-18 14:08:07'),
(192, 0, 'tommy', 1, 'tommy@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '1', NULL, 1389978000, NULL, '', 'user', '113.162.115.10', 'tommy', 0, '', 'Tom', 'Tran', '1983-07-11', '', '', '099999159', 'c7c3cb9000a7d3869a35c208a63a0c87a696bf58', 0, 'Gallen, Schweiz', '900', '', 853, NULL, 'Schweiz', 83, 'Gallen, Schweiz', '900', '', 853, NULL, NULL, 'Schweiz', 83, 'Tom', 'Tran', NULL, '099999159', 1, '2014-01-18 14:48:31'),
(193, 0, 'Tommynguyen', 1, 'tommynguyen@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '1', NULL, 1390064400, NULL, '', 'user', '42.119.123.61', 'tommynguyen', 0, '', 'Tommy', 'Nguyen', '1983-08-08', '', '', '0999299599', '34b05689fa602788493575c448920f859f051256', 0, 'Gallen, Schweiz', '553', '', 495, NULL, 'Gallen, Schweiz, Deutschland', 83, 'Gallen, Schweiz', '553', '', 495, NULL, NULL, 'Gallen, Schweiz, Deutschland', 83, 'Tommy', 'Nguyen', NULL, '0999299599', 1, '2014-01-19 22:12:03'),
(195, 0, 'Ranchochatur', 1, 'rancho123@yopmail.com', '70a6175618d61c3e7ea1cc400f6fba344a0935b9', '1', NULL, 1390064400, NULL, '', 'user', '42.119.123.61', 'ranchochatur', 0, '', 'Rancho', 'Chatur', '0000-00-00', '', '', '0929835849', '9032afadac04bd5a6a024a1b82b0724eac922525', 0, 'Gallen, Schweiz', '545', '', 490, NULL, 'Gallen, Schweiz, Deutschland', 83, 'Gallen, Schweiz', '545', '', 490, NULL, NULL, 'Gallen, Schweiz, Deutschland', 83, 'Rancho', 'Chatur', NULL, '0929835849', 0, '2014-01-20 11:31:00'),
(196, 0, '3', 1, 'trungthang@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', '', NULL, 1390496400, NULL, '', 'user', '113.162.114.211', '3', 0, '', 'test', 'shop', '0000-00-00', '', '', '09123456789', 'd4a9ddf1fd97af6138ceed6a8e0b4d690f1bbcbb', 0, 'London', '+20', 'fdsfds', 84, NULL, 'Da Nang', 83, 'Que Phu - Que Son - Quang Nam', '+20', 'fdsfds', 84, NULL, NULL, 'Da Nang', 83, 'test', 'shop', NULL, '09123456789', 0, '2014-01-24 16:27:00'),
(197, 0, '123', 0, '123@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1393563453, NULL, '', 'admin', '14.165.95.41', '123', 0, '', '', '', NULL, '', '', '', '', 0, NULL, '', NULL, NULL, NULL, '', 1, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, '', '', NULL, '', 0, '0000-00-00 00:00:00'),
(198, 0, 'mustershop1', 1, 'm761999@yahoo.de', '4ec9e5e23353082ebf762d0bd21f1739d8d0c709', '3', NULL, 1396803600, NULL, '', 'user', '78.48.108.76', 'mustershop1', 0, '', 'Peter ', 'muster', '1983-03-01', '', '', '', '897883125fe8fac28b6cb42ae18494da18132652', 0, 'klarastr.', '32', '', 44892, NULL, 'bochum', 83, 'klarastr.', '32', '', 44892, NULL, NULL, 'bochum', 83, 'Peter ', 'muster', NULL, '', 0, '2014-04-07 14:33:39'),
(199, 0, 'guest199', NULL, 'hocnv@yopmail.com', '', NULL, NULL, 1399696414, NULL, '', 'user', '113.162.115.167', 'guest199', 0, '', 'Hoc', 'Nguyen', NULL, '', 'Da Nang', '12345678', '', 0, NULL, NULL, NULL, 12345, 'Da Nang', 'Da Nang', 243, NULL, NULL, NULL, 12345, 'Da Nang', 'Da Nang', 'Da Nang', 243, 'Hoc', 'Nguyen', 'hocnv@yopmail.com', '12345678', 0, '0000-00-00 00:00:00'),
(200, 0, 'guest200', NULL, 'hocnv@yopmail.com', '', NULL, NULL, 1399696884, NULL, '', 'user', '113.162.115.167', 'guest200', 0, '', 'Hoc', 'Nguyen', NULL, '', 'Da Nang', '1234567', '', 0, NULL, NULL, NULL, 123456, 'Da Nang', 'Da Nang', 243, NULL, NULL, NULL, 123456, 'Da Nang', 'Da Nang', 'Da Nang', 243, 'Hoc', 'Nguyen', 'hocnv@yopmail.com', '1234567', 0, '0000-00-00 00:00:00'),
(201, 0, 'guest201', NULL, 'hocnv@yopmail.com', '', NULL, NULL, 1399697126, NULL, '', 'user', '113.162.115.167', 'guest201', 0, '', 'Hoc', 'Nguyen', NULL, '', 'Da Nang', '1234567', '', 0, NULL, NULL, NULL, 123456, 'Da Nang', 'Da Nang', 243, NULL, NULL, NULL, 123456, 'Da Nang', 'Da Nang', 'Da Nang', 243, 'Hoc', 'Nguyen', 'hocnv@yopmail.com', '1234567', 0, '0000-00-00 00:00:00'),
(202, 0, 'guest202', NULL, 'hocnv@yopmail.com', '', NULL, NULL, 1399697399, NULL, '', 'user', '113.162.115.167', 'guest202', 0, '', 'Hoc', 'Nguyen', NULL, '', 'Da Nang', '1234567', '', 0, NULL, NULL, NULL, 123456, 'Da Nang', 'Da Nang', 243, NULL, NULL, NULL, 123456, 'Da Nang', 'Da Nang', 'Da Nang', 243, 'Hoc', 'Nguyen', 'hocnv@yopmail.com', '1234567', 0, '0000-00-00 00:00:00'),
(203, 0, 'guest203', NULL, 'chaplosky@gmail.com', '', NULL, NULL, 1399871799, NULL, '', 'user', '220.225.49.161', 'guest203', 0, '', 'Dave', 'Chaplosky', NULL, '', 'Test', '112233', '', 0, NULL, NULL, NULL, 112233, 'Test', 'Test', 111, NULL, NULL, NULL, 112233, 'Test', 'Test', 'Test', 111, 'Dave', 'Chaplosky', 'chaplosky@gmail.com', '112233', 0, '0000-00-00 00:00:00'),
(204, 0, 'guest204', NULL, 'tomy@yopmail.com', '', NULL, NULL, 1399947840, NULL, '', 'user', '113.184.224.84', 'guest204', 0, '', 'Tomy', 'Tomy', NULL, '', 'sf', '12345678', '', 0, NULL, NULL, NULL, 12345, 'ha', '234', 1, NULL, NULL, NULL, 12345, '123', 'Da Nang', '234', 1, 'Tomy', 'Tomy', 'tomy@yopmail.com', '12345678', 0, '0000-00-00 00:00:00'),
(205, 0, 'luis123', NULL, 'luis@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1399914000, NULL, '', 'user', '113.162.114.56', 'luis123', 0, '', 'David', 'Luis', '1996-01-01', '', 'Da Nang', '09987890', '318fb81e6e4ff6e268bf6d2b3c5c339d670e2662', 0, NULL, NULL, NULL, 510, 'Da Nang', 'Da Nang', 243, NULL, NULL, NULL, 510, NULL, NULL, 'Da Nang', 243, 'David', 'Luis', NULL, '09987890', 0, '2014-05-13 16:44:36'),
(206, 0, 'shop', NULL, 'shop@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1399914000, NULL, '', 'user', '113.184.224.84', 'shop', 0, '', 'shop', 'shop', '1970-01-01', '', '245', '12345678', 'ee6aea42a64e58dbec4a41f83403e5d3c6fe851f', 0, '', '', NULL, 3555555, '334', '234', 14, NULL, NULL, NULL, 3555555, NULL, NULL, '234', 14, 'shop', 'shop', NULL, '12345678', 0, '2014-05-13 09:51:00'),
(207, 0, 'test', NULL, 'test@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1399973019, NULL, '', 'guest', '113.184.224.84', 'test', 0, '', 'test', 'test', '1980-01-16', '', 'Hambert', '12345678', '82cbb0660e81d5ccc3b2fb984bf52e079f1444b9', 0, NULL, NULL, NULL, 123, 'Österreich', 'London', 1, NULL, NULL, NULL, 123, NULL, NULL, 'London', 1, 'test', 'test', NULL, '12345678', 0, '0000-00-00 00:00:00'),
(208, 0, 'test84', NULL, 'test84@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1401210000, NULL, '', 'user', '113.184.225.213', 'test84', 0, '', 'test84', 'test84', '1981-08-12', '', 'test84', 'test84', '842f1730a9e2fa95c36453632959b05362bc98d5', 0, NULL, NULL, NULL, 928729847, 'test84', 'test84', 8, NULL, NULL, NULL, 928729847, NULL, NULL, 'test84', 8, 'test84', 'test84', NULL, 'test84', 0, '2014-05-28 17:23:08'),
(209, 0, 'serviceregister', NULL, 'serviceregister@gmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1401439846, NULL, '', 'user', '88.198.240.132', 'serviceregister', 0, '', 'service ', 'register', '1985-01-01', '', 'da nang', '0905999999', 'c8c6508a2a20ccedb1b7fcd3a5e278b34dc20c03', 0, NULL, NULL, NULL, 6789, '6789', 'da nang', 238, NULL, NULL, NULL, 6789, NULL, NULL, 'da nang', 238, 'service ', 'register', NULL, '0905999999', 0, '0000-00-00 00:00:00'),
(210, 0, 'test81', NULL, 'test81@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1401382800, NULL, '', 'user', '113.162.114.158', 'test81', 0, '', 'test81', 'test81', '1984-05-05', '', 'test81', 'test81', '89831afe31d475ed7a10b21985be09927a73e878', 0, NULL, NULL, NULL, 928430984, 'test81', 'test81', 1, NULL, NULL, NULL, 928430984, NULL, NULL, 'test81', 1, 'test81', 'test81', NULL, 'test81', 0, '2014-05-30 16:57:22'),
(211, 0, 'guest211', NULL, 'lovetest1@yopmail.com', '', NULL, NULL, 1401445256, NULL, '', 'user', '88.198.240.132', 'guest211', 0, '', 'jonny', 'jonny', NULL, '', '2525', '3243546', '', 0, NULL, NULL, NULL, 34, '2525', '342', 19, NULL, NULL, NULL, 34, '2525', '2525', '342', 19, 'jonny', 'jonny', 'lovetest1@yopmail.com', '3243546', 0, '0000-00-00 00:00:00'),
(212, 0, 'test82', NULL, 'test82@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1401382800, NULL, '', 'guest', '88.198.240.132', 'test82', 0, '', 'test82', 'test82', '1979-07-06', '', 'test82', 'test82', '9590bf40f2d7bc691dbd2bd3d9a0af147e67841a', 0, NULL, NULL, NULL, 28928, 'test82', 'test82', 1, NULL, NULL, NULL, 28928, NULL, NULL, 'test82', 1, 'test82', 'test82', NULL, 'test82', 0, '2014-05-30 17:29:20'),
(213, 0, 'guest213', NULL, 'lovetest1@yopmail.com', '', NULL, NULL, 1401445457, NULL, '', 'user', '88.198.240.132', 'guest213', 0, '', 'jonny', 'jonny', NULL, '', '2525', '3243546', '', 0, NULL, NULL, NULL, 34, '2525', '342', 19, NULL, NULL, NULL, 34, '2525', '2525', '342', 19, 'jonny', 'jonny', 'lovetest1@yopmail.com', '3243546', 0, '0000-00-00 00:00:00'),
(214, 0, 'guest214', NULL, 'lamdn12@gmail.com', '', NULL, NULL, 1401445532, NULL, '', 'user', '88.198.240.132', 'guest214', 0, '', 'rose', 'jonny', NULL, '', 'Hambert', '3243546', '', 0, NULL, NULL, NULL, 12345, 'Österreich', 'Hambert', 1, NULL, NULL, NULL, 12345, 'Hambert', 'Österreich', 'Hambert', 1, 'rose', 'jonny', 'lamdn12@gmail.com', '3243546', 0, '0000-00-00 00:00:00'),
(215, 0, 'guest215', NULL, 'test82@yopmail.com', '', NULL, NULL, 1401445728, NULL, '', 'user', '88.198.240.132', 'guest215', 0, '', 'test82', 'test82', NULL, '', 'test82', 'test82', '', 0, NULL, NULL, NULL, 28928, 'test82', 'test82', 1, NULL, NULL, NULL, 28928, 'test82', 'test82', 'test82', 1, 'test82', 'test82', 'test82@yopmail.com', 'test82', 0, '0000-00-00 00:00:00'),
(216, 0, 'kevinaa', NULL, 'kevinaa@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1401447005, NULL, '', 'user', '88.198.240.132', 'kevinaa', 0, '', 'kevin', 'thomas', '1986-01-02', '', 'da nang', 'home', '6a4ca259d7dd59e3532becbb61eed84043b81b00', 0, NULL, NULL, NULL, 56789, '6789', 'da nang', 7, NULL, NULL, NULL, 56789, NULL, NULL, 'da nang', 7, 'kevin', 'thomas', NULL, 'home', 0, '0000-00-00 00:00:00'),
(217, 0, 'aaaaaa', NULL, 'aaaaaa@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1401447915, NULL, '', 'guest', '88.198.240.132', 'aaaaaa', 0, '', 'aa', 'bbb', '1985-03-15', '', 'da nang', 'home', '4372cf891f59a73c792fbe442acdde1f4b278e66', 0, NULL, NULL, NULL, 56789, '123456', 'da nang', 13, NULL, NULL, NULL, 56789, NULL, NULL, 'da nang', 13, 'aa', 'bbb', NULL, 'home', 0, '0000-00-00 00:00:00'),
(218, 0, 'bbbbbb', NULL, 'bbbb@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1401498570, NULL, '', 'guest', '88.198.240.132', 'bbbbbb', 0, '', 'bbbb', 'bbbb', '1988-04-03', '', 'da nang', '0905999999', '1362cf58ea045d60f0492ad09c5e2638f7394053', 0, NULL, NULL, NULL, 6789, 'da', 'da nang', 13, NULL, NULL, NULL, 6789, NULL, NULL, 'da nang', 13, 'bbbb', 'bbbb', NULL, '0905999999', 0, '0000-00-00 00:00:00'),
(219, 0, 'guest219', NULL, 'kevinthomas@yopmail.com', '', NULL, NULL, 1401505264, NULL, '', 'user', '88.198.240.132', 'guest219', 0, '', 'kevin thomas', 'tran', NULL, '', 'abc', '0905999999', '', 0, NULL, NULL, NULL, 6789, 'da', 'def', 15, NULL, NULL, NULL, 6789, 'abc', 'da', 'def', 15, 'kevin thomas', 'tran', 'kevinthomas@yopmail.com', '0905999999', 0, '0000-00-00 00:00:00'),
(220, 0, 'thomastran', NULL, 'thomastran@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1401469200, NULL, '', 'user', '88.198.240.132', 'thomastran', 0, '', 'thomas', 'Tran', '1985-01-01', '', 'da nang', '0905999999', 'afb1d87b301dedad93d1c21cdaf80ab568d3e808', 0, NULL, NULL, NULL, 12345, '6789', 'da nang', 7, NULL, NULL, NULL, 12345, NULL, NULL, 'da nang', 7, 'thomas', 'Tran', NULL, '0905999999', 0, '2014-05-31 10:52:09'),
(221, 0, 'guest221', NULL, 'chaplosky@gmail.com', '', NULL, NULL, 1401702422, NULL, '', 'user', '88.198.240.132', 'guest221', 0, '', 'Test', 'Test', NULL, '', 'Test', '112233', '', 0, NULL, NULL, NULL, 11223344, 'Test', 'Test', 1, NULL, NULL, NULL, 11223344, 'Test', 'Test', 'Test', 1, 'Test', 'Test', 'chaplosky@gmail.com', '112233', 0, '0000-00-00 00:00:00'),
(222, 0, 'guest222', NULL, 'lovetest1@yopmail.com', '', NULL, NULL, 1401761059, NULL, '', 'user', '88.198.240.132', 'guest222', 0, '', 'jonny', 'jonny', NULL, '', '2525', '3243546', '', 0, NULL, NULL, NULL, 34, '2525', '342', 19, NULL, NULL, NULL, 34, '2525', '2525', '342', 19, 'jonny', 'jonny', 'lovetest1@yopmail.com', '3243546', 0, '0000-00-00 00:00:00'),
(223, 0, 'guest223', NULL, 'lovetest1@yopmail.com', '', NULL, NULL, 1401761145, NULL, '', 'user', '88.198.240.132', 'guest223', 0, '', 'jonny', 'jonny', NULL, '', '2525', '3243546', '', 0, NULL, NULL, NULL, 34, '2525', '342', 19, NULL, NULL, NULL, 34, '2525', '2525', '342', 19, 'jonny', 'jonny', 'lovetest1@yopmail.com', '3243546', 0, '0000-00-00 00:00:00'),
(224, 0, 'guest224', NULL, 'lovetest1@yopmail.com', '', NULL, NULL, 1401761268, NULL, '', 'user', '88.198.240.132', 'guest224', 0, '', 'jonny', 'jonny', NULL, '', '2525', '3243546', '', 0, NULL, NULL, NULL, 34, '2525', '342', 19, NULL, NULL, NULL, 34, '2525', '2525', '342', 19, 'jonny', 'jonny', 'lovetest1@yopmail.com', '3243546', 0, '0000-00-00 00:00:00'),
(225, 0, 'guest225', NULL, 'lovetest1@yopmail.com', '', NULL, NULL, 1401761427, NULL, '', 'user', '88.198.240.132', 'guest225', 0, '', 'jonny', 'jonny', NULL, '', '2525', '3243546', '', 0, NULL, NULL, NULL, 34, '2525', '342', 19, NULL, NULL, NULL, 34, '2525', '2525', '342', 19, 'jonny', 'jonny', 'lovetest1@yopmail.com', '3243546', 0, '0000-00-00 00:00:00'),
(226, 0, 'guest226', NULL, 'kevintom@gmai.com', '', NULL, NULL, 1401770590, NULL, '', 'user', '88.198.240.132', 'guest226', 0, '', 'KevinTom', 'Thomas', NULL, '', 'berlin', '0909678968', '', 0, NULL, NULL, NULL, 6789, 'berlin', 'berlin', 4, NULL, NULL, NULL, 6789, 'berlin', 'berlin', 'berlin', 4, 'KevinTom', 'Thomas', 'kevintom@gmai.com', '0909678968', 0, '0000-00-00 00:00:00'),
(227, 0, 'guest227', NULL, 'kevint@gmail.com', '', NULL, NULL, 1401771258, NULL, '', 'user', '88.198.240.132', 'guest227', 0, '', 'Kevin', 't', NULL, '', 'berlin', 'da', '', 0, NULL, NULL, NULL, 6789, '12345', 'berlin', 3, NULL, NULL, NULL, 6789, 'berlin', '12345', 'berlin', 3, 'Kevin', 't', 'kevint@gmail.com', 'da', 0, '0000-00-00 00:00:00'),
(228, 0, 'test88', NULL, 'test88@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1401728400, NULL, '', 'affiliate', '113.162.115.185', 'test88', 0, '', 'test88', 'test88', '1996-08-16', '', 'test88', 'test88', '2ae1097c88e0f7f93d4b8fa85da7592518108555', 0, NULL, NULL, NULL, 92488394, 'test88', 'test88', 9, NULL, NULL, NULL, 92488394, NULL, NULL, 'test88', 9, 'test88', 'test88', NULL, 'test88', 0, '2014-06-03 16:02:00'),
(229, 0, 'guest229', NULL, 'lovetest1@yopmail.com', '', NULL, NULL, 1401855251, NULL, '', 'user', '88.198.240.132', 'guest229', 0, '', 'jonny', 'jonny', NULL, '', '2525', '3243546', '', 0, NULL, NULL, NULL, 34, '2525', '342', 19, NULL, NULL, NULL, 34, '2525', '2525', '342', 19, 'jonny', 'jonny', 'lovetest1@yopmail.com', '3243546', 0, '0000-00-00 00:00:00'),
(230, 0, 'mesult_ozil', NULL, 'mesult_ozil@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1401814800, NULL, '', 'affiliate', '14.167.12.166', 'mesult-ozil', 0, '', 'Ozil', 'Mesult', '1980-05-13', '', 'Duc Loi - Mo Duc - Quang Ngai - Viet Nam', '0909090900', 'f7debe4e49b0e6574990daa54ac432780e7cb844', 0, NULL, NULL, NULL, 84, 'Quang Ngai', 'Quang Ngai', 243, NULL, NULL, NULL, 84, NULL, NULL, 'Quang Ngai', 243, 'Ozil', 'Mesult', NULL, '0909090900', 0, '2014-06-04 14:02:00'),
(231, 0, 'testshop', NULL, 'testshop@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1401901200, NULL, '', 'affiliate', '14.167.13.183', 'testshop', 0, '', 'testshop', 'testshop', '1981-10-12', '', 'Hambert', '12345678', '05fc33d2d1ba6516af66a32b100b7d34d60a8c9b', 0, NULL, NULL, NULL, 123, 'Österreich', 'Hambert', 1, NULL, NULL, NULL, 123, NULL, NULL, 'Hambert', 1, 'testshop', 'testshop', NULL, '12345678', 0, '2014-06-06 10:16:19'),
(232, 0, 'test100', NULL, 'test100@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1401987600, NULL, '', 'affiliate', '113.162.116.112', 'test100', 0, '', 'test100', 'test100', '1979-12-05', '', 'test84', 'test84', 'c66fd072e40d4078b057e329d39f1abe273babac', 0, NULL, NULL, NULL, 28928, 'test84', 'test84', 18, NULL, NULL, NULL, 28928, NULL, NULL, 'test84', 18, 'test100', 'test100', NULL, 'test84', 0, '2014-06-06 10:53:00'),
(233, 0, 'shoptest', NULL, 'shoptest@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1404061200, NULL, '', 'affiliate', '113.162.114.150', 'shoptest', 0, '', 'shoptest', 'shoptest', '1978-09-17', '', '63594-Hasselroth', '12345678', '8d09551206de6f00ad96a4380b6d9f2241583ce3', 0, NULL, NULL, NULL, 63594, 'Hessen', 'Darmstadt', 83, NULL, NULL, NULL, 63594, '63594-Hasselroth', 'Hessen', 'Darmstadt', 83, 'shoptest', 'shoptest', 'shoptest@yopmail.com', '12345678', 0, '2014-06-30 17:09:00'),
(234, 0, 'hocnv90', NULL, 'hocnv90@yopmail.com', '3c5e74789bc6158df041bc06dd51d738188fd1da', NULL, NULL, 1404893225, NULL, '', 'guest', '127.0.0.1', 'hocnv90', 0, '', 'Hoc', 'Nguyen', '1980-10-13', '', 'Le Duan', '0510456789', '8c775a9b5f0ad103f6b3bea7fbffca5346f40957', 0, NULL, NULL, NULL, 84, 'Da Nang', 'Da Nang', 243, NULL, NULL, NULL, 84, NULL, NULL, 'Da Nang', 243, 'Hoc', 'Nguyen', NULL, '0510456789', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(125) NOT NULL DEFAULT '',
  `description` text,
  `category` int(10) NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL DEFAULT 'text',
  `settingkey` varchar(125) NOT NULL DEFAULT '',
  `default_value` text,
  `value` text,
  `extra` text,
  `php` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settingkey` (`settingkey`),
  KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `category`, `type`, `settingkey`, `default_value`, `value`, `extra`, `php`) VALUES
(13, 'Site Name', 'This is the default application (site) title', 2, 'text', 'applicationName', 'My Site', 'Supplements | Supplements.de', '', ''),
(14, 'Default Role ', 'Choose the default group for new users registered.', 0, 'dropdown', 'default_group', 'user', 'admin', '#show_roles#', ''),
(15, 'Incoming Email Address', 'Enter the incoming email address', 2, 'text', 'emailin', 'ngminhkt@gmail.com', 'info@labeeto.com', '', ''),
(16, 'Out Going Email Address', 'Enter the out going email address.', 2, 'text', 'emailout', 'info@videoweb.netbiz-demo.us', 'info@labeeto.com', '', ''),
(17, 'Subject Topics', 'Enter the subject topics. One per line.', 3, 'textarea', 'contactustopics', 'Support\r\nAffiliate\r\nBug Report\r\nDocumentation Bug Report\r\nBusiness Offers\r\nQuestions\r\nOther... ', 'Support\r\nEarning\r\nInvoice\r\nAffiliate\r\nDownload\r\nBug Report\r\nBusiness Offers\r\nQuestions\r\nOther... ', '', ''),
(18, 'Email the submitted forms?', 'Do you wish to email the submitted forms to the support email address of the system?', 0, 'yesno', 'contactusemail', '1', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `settingscats`
--

CREATE TABLE IF NOT EXISTS `settingscats` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(125) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `groupkey` varchar(125) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groupkey` (`groupkey`),
  KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `settingscats`
--

INSERT INTO `settingscats` (`id`, `title`, `description`, `groupkey`) VALUES
(2, 'General Settings', 'General settings related to the entire application', 'general'),
(3, 'Contact Us Settings', 'Contact Us form and page settings', 'contactus'),
(4, 'test', 'desc', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `date` date NOT NULL,
  `page_views` int(11) DEFAULT NULL,
  `visitors` int(11) DEFAULT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`date`, `page_views`, `visitors`) VALUES
('2014-04-14', 7, 1),
('2014-04-15', 25, 6),
('2014-04-16', 14, 2),
('2014-04-17', 12, 1),
('2014-04-18', 20, 2),
('2014-04-19', 98, 2),
('2014-04-20', 26, 2),
('2014-04-21', 659, 8),
('2014-04-22', 108, 7),
('2014-04-23', 170, 13),
('2014-04-24', 83, 3),
('2014-04-25', 179, 3),
('2014-04-28', 31, 6),
('2014-04-29', 23, 3),
('2014-05-01', 1, 0),
('2014-05-05', 88, 10),
('2014-05-06', 12, 3),
('2014-05-07', 85, 5),
('2014-05-08', 113, 9),
('2014-05-09', 101, 5),
('2014-05-10', 147, 8),
('2014-05-12', 168, 4),
('2014-05-13', 420, 23),
('2014-05-14', 270, 9),
('2014-05-15', 12, 3),
('2014-05-16', 97, 10),
('2014-05-17', 62, 10),
('2014-05-18', 2, 1),
('2014-05-19', 104, 9),
('2014-05-20', 73, 3),
('2014-05-21', 94, 8),
('2014-05-22', 34, 7),
('2014-05-23', 29, 4),
('2014-05-26', 68, 6),
('2014-05-27', 86, 8),
('2014-05-28', 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `language` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`id`, `title`, `alias`, `content`, `language`) VALUES
(1, 'infor footer', 'infor-footer', '<a class="infor-footer" href="/questions">Questions</a> | <a class="infor-footer" href="/contactus">Contact Us</a> | <a class="infor-footer" href="/shipping-terms">Shipping Terms</a> | <a class="infor-footer" href="/prescription-policy">Prescription Policy</a> | <a class="infor-footer" href="/terms-of-use">Terms of Use</a> | <a class="infor-footer" href="/disclaimer">Disclaimer</a> | <a class="infor-footer" href="/refund">Refund</a>\r\n', 'en'),
(2, '123', '123', '123', 'en'),
(3, 'Test Widget', 'test-widget', '<p>\r\n	This is a test WIdget by Dave</p>\r\n', 'en');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `FK_members` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `FK_members2` FOREIGN KEY (`shipping_country_id`) REFERENCES `countries` (`id`);
