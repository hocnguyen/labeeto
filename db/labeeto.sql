-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2014 at 11:03 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `labeeto`
--
CREATE DATABASE IF NOT EXISTS `labeeto` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `labeeto`;

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
  `username` varchar(155) NOT NULL DEFAULT '',
  `gender` tinyint(1) DEFAULT NULL,
  `career` varchar(100) DEFAULT NULL,
  `email` varchar(155) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `joined` int(10) DEFAULT '0',
  `role` char(30) DEFAULT 'user',
  `ehtnicity` char(30) DEFAULT '',
  `fname` varchar(40) DEFAULT '',
  `lname` varchar(40) DEFAULT '',
  `birthday` date DEFAULT NULL,
  `photo` varchar(155) DEFAULT '',
  `address` varchar(155) DEFAULT '',
  `education` varchar(40) DEFAULT '',
  `religion` char(40) DEFAULT '',
  `height` varchar(100) DEFAULT NULL,
  `excercise` varchar(255) DEFAULT NULL,
  `passion` varchar(255) DEFAULT NULL,
  `goal` varchar(255) DEFAULT NULL,
  `smoke` varchar(100) DEFAULT NULL,
  `drink` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `last_logged` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `gender`, `career`, `email`, `password`, `joined`, `role`, `ehtnicity`, `fname`, `lname`, `birthday`, `photo`, `address`, `education`, `religion`, `height`, `excercise`, `passion`, `goal`, `smoke`, `drink`, `status`, `last_logged`) VALUES
(1, 'hocnv', 0, 'Developer', 'hehe@yopmail.com', '8843028fefce50a6de50acdf064ded27', 0, 'user', 'Pre-Fill', 'Hoc', 'N', '0000-00-00', '', 'Da Nang', 'Pre-Fill', 'Pre-Fill', '2.5', 'Pre-Fill', 'Pre-Fill', 'Pre-Fill', 'Pre-Fill', 'Pre-Fill', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `expire`, `data`) VALUES
('g44qqrt4lk3tlo3068sb8fvc55', 1409133072, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
